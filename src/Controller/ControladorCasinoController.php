<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControladorCasinoController extends AbstractController
{
    #[Route('/', name: 'app_controlador_casino')]
    public function index(): Response
    {
        return $this->render('controlador_casino/index.html.twig', [
            'controller_name' => 'ControladorCasinoController',
        ]);
    }

    #[Route('/checkUser/{id}', name: 'checkUser_DNI')]
    public function checkUser(ManagerRegistry $doctrine, $id): Response
    {
        $repositorio = $doctrine->getRepository(User::class);
        $usuario = $repositorio->find($id);

        return $this->render('checks/DNIcheck.html.twig', array(
            'usuario' => $usuario
        ));
    }

    #[Route('/checkUsers', name: 'checkusers')]
    public function checkAllUsers(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(User::class);
        $usuarios = $repositorio->findAll();

        return $this->render('checks/checkAllUsers.html.twig', array(
            'usuarios' => $usuarios
        ));
    }

    #[Route('/checkBannedUsers', name: 'bannedUsers')]
    public function checkBannedUsers(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(User::class);
        $usuariosBaneados = $repositorio->findBy(['estaBaneado' => 1]);

        return $this->render('checks/checkBannedUsers.html.twig', array(
            'usuarios' => $usuariosBaneados
        ));
    }



    #[Route('/usuario/nuevo', name: 'newUser')]
    public function nuevo(ManagerRegistry $doctrine, Request $request) {
        $user = new User();

        $formulario = $this->createFormBuilder($user)
            ->add('docIdentidad', TextType::class, array('label' => 'Documento de identidad (NIF/NIE/Pasaporte)'))
            ->add('nombre', TextType::class)
            ->add('apellido1', TextType::class, array('label' => 'Primer apellido'))
            ->add('apellido2', TextType::class, array('label' => 'Segundo apellido'))
            ->add('fechaNacimiento', BirthdayType::class, array('label' => 'Fecha nacimiento'))
            ->add('email', EmailType::class, array('label' => 'Correo electrónico'))
            ->add('password', PasswordType::class, array('label' => 'Contraseña'))
            ->add('save', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();
            $formulario->handleRequest($request);

            if ($formulario->isSubmitted() && $formulario->isValid()) {
                $user = $formulario->getData();
                $user->setdinero(0);
                $user->setiplastlogin($_SERVER['REMOTE_ADDR']);
                $user->setestabaneado(0);
                $user->setestaverificado(0);
                $user->setrazonbaneo("Usuario limpio");
                $entityManager = $doctrine->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('checkUser_DNI', ["id" => $user->getId()]);
            }


        return $this->render('funciones/register.html.twig', array(
            'formulario' => $formulario->createView()
        ));

    }


    #[Route('/usuario/editar/{id}', name: 'editUser')]
    public function edit(ManagerRegistry $doctrine, Request $request, $id) {
        
        $repositorio = $doctrine->getRepository(User::class);
        $user = $repositorio->find($id);


        $formulario = $this->createFormBuilder($user)
            ->add('docIdentidad', TextType::class, array('label' => 'Documento de identidad (NIF/NIE)'))
            ->add('nombre', TextType::class)
            ->add('apellido1', TextType::class)
            ->add('apellido2', TextType::class)
            ->add('apellido2', TextType::class)
            ->add('fechaNacimiento', BirthdayType::class)
            ->add('dinero', IntegerType::class)
            ->add('email', EmailType::class, array('label' => 'Correo electrónico'))
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();
            $formulario->handleRequest($request);

            if ($formulario->isSubmitted() && $formulario->isValid()) {
                $user = $formulario->getData();
                $entityManager = $doctrine->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
            }


        return $this->render('checks/edit.html.twig', array(
            'formulario' => $formulario->createView()
        ));

    }


    #[Route('/usuario/banear/{id}', name: 'banUser')]
    public function banear(ManagerRegistry $doctrine, Request $request, $id) {
    
        $repositorio = $doctrine->getRepository(User::class);
        $user = $repositorio->find($id);

        if (!$user) {
            throw $this->createNotFoundException('No se encontró el usuario con ID: ' . $id);
        }

        $formulario = $this->createFormBuilder($user)
            ->add('razonBaneo', TextType::class, array('label' => 'Razón del ban'))
            ->add('save', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $formulario->isValid()) {
            $user->setEstaBaneado(1);
            
            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'El usuario ha sido baneado exitosamente.');
            return new RedirectResponse('/checkUsers');
        }

        return $this->render('checks/banear.html.twig', array(
            'formulario' => $formulario->createView(),
            'usuario' => $user
        ));
}

    #[Route('/usuario/unban/{id}', name: 'unbanUser')]
    public function desbanear(ManagerRegistry $doctrine, Request $request, $id) {

        $repositorio = $doctrine->getRepository(User::class);
        $user = $repositorio->find($id);

        if (!$user) {
            throw $this->createNotFoundException('No se encontró el usuario con ID: ' . $id);
        }

        $formulario = $this->createFormBuilder($user)
            ->add('save', SubmitType::class, array('label' => 'Desbanear'))
            ->getForm();

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $formulario->isValid()) {
            $user->setEstaBaneado(0);
            
            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'El usuario ha sido desbaneado exitosamente.');
            return new RedirectResponse('/checkUsers');
        }

        return $this->render('checks/desbanear.html.twig', array(
            'formulario' => $formulario->createView(),
            'usuario' => $user
        ));
    }







    #[Route('/usuario/eliminar/{id}', name: 'removeUser')]
    public function eliminar(ManagerRegistry $doctrine, $id): Response {
        
        $entityManager = $doctrine->getManager();
        $repositorio = $doctrine->getRepository(User::class);
        $user = $repositorio->find($id);

        if ($user) {
            try {
                $entityManager->remove($user);
                $entityManager->flush();
                return new Response("Usuario eliminado con éxito.");
            } catch (\Exception $e) {
                return new Response("Error al remover el usuario.");
            }
        } else 
            return $this->render('checks/DNIcheck.html.twig', [
                 'usuario' => null
        ]);
}

#[Route('/usuario/verificar/{id}', name: 'verifyUser')]
public function verifyUser(ManagerRegistry $doctrine, Request $request, $id) {
    $repositorio = $doctrine->getRepository(User::class);
    $user = $repositorio->find($id);

    $formulario = $this->createFormBuilder($user)
        ->add('docimg1', FileType::class, array('label' => 'Cara DNI (JPG/PNG)'))
        ->add('docimg2', FileType::class, array('label' => 'Trasero DNI (JPG/PNG)'))
        ->add('docselfie', FileType::class, array('label' => 'Selfie + DNI (JPG/PNG)'))
        ->add('save', SubmitType::class, array('label' => 'Enviar'))
        ->getForm();

    $formulario->handleRequest($request);

    if ($formulario->isSubmitted() && $formulario->isValid()) {
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/docs/' . $id;

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }


        $file1 = $formulario['docimg1']->getData();
        if ($file1) {
            $filename1 = 'front.jpg';
            $file1->move($uploadDir, $filename1);
            $user->setDocimg1('/docs/' . $id . '/' . $filename1);
        }


        $file2 = $formulario['docimg2']->getData();
        if ($file2) {
            $filename2 = 'back.jpg';
            $file2->move($uploadDir, $filename2);
            $user->setDocimg2('/docs/' . $id . '/' . $filename2);
        }

        $file3 = $formulario['docselfie']->getData();
        if ($file3) {
            $filename3 = 'selfie.jpg';
            $file3->move($uploadDir, $filename3);
            $user->setDocselfie('/docs/' . $id . '/' . $filename3);
        }

        $entityManager = $doctrine->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
    }

    return $this->render('checks/verificar.html.twig', array(
        'formulario' => $formulario->createView(),
        'usuario' => $user
    ));
}




}
