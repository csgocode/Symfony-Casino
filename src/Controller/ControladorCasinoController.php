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
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Contacto;
use App\Entity\Usuario;
use App\Form\ContactFormType;

class ControladorCasinoController extends AbstractController
{
    #[Route('/', name: 'app_controlador_casino')]
    public function index(): Response
    {
        return $this->render('controlador_casino/index.html.twig', [
            'controller_name' => 'ControladorCasinoController',
        ]);
    }

    #[Route('/contacto', name: 'contactoapp')]
    public function contact(ManagerRegistry $doctrine, Request $request): Response
    {
    $contact = new Contacto();
    $form = $this->createForm(ContactFormType::class, $contact);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $contacto = $form->getData();    
        $entityManager = $doctrine->getManager();    
        $entityManager->persist($contacto);
        $entityManager->flush();
        return $this->redirectToRoute('contacto', []);
    }
    return $this->render('funciones/contacto.html.twig', array(
        'form' => $form->createView()    
    ));
}


    #[Route('/checkUser/{id}', name: 'checkUser_DNI')]
    public function checkUser(ManagerRegistry $doctrine, $id): Response
    {
        $repositorio = $doctrine->getRepository(Usuario::class);
        $usuario = $repositorio->find($id);

        return $this->render('checks/DNIcheck.html.twig', array(
            'usuario' => $usuario
        ));
    }

    #[Route('/checkUsers', name: 'checkusers')]
    public function checkAllUsers(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(Usuario::class);
        $usuarios = $repositorio->findAll();

        return $this->render('checks/checkAllUsers.html.twig', array(
            'usuarios' => $usuarios
        ));
    }

    #[Route('/checkBannedUsers', name: 'bannedUsers')]
    public function checkBannedUsers(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(Usuario::class);
        $usuariosBaneados = $repositorio->findBy(['estaBaneado' => 1]);

        return $this->render('checks/checkBannedUsers.html.twig', array(
            'usuarios' => $usuariosBaneados
        ));
    }



    #[Route('/usuario/nuevo', name: 'newUser')]
    public function nuevo(ManagerRegistry $doctrine, Request $request) {
        $user = new Usuario();

        $formulario = $this->createFormBuilder($user)
            ->add('docIdentidad', TextType::class, array('label' => 'Documento de identidad (NIF/NIE/Pasaporte)'))
            ->add('username', TextType::class, array('label' => 'Usuario'))
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class, array('label' => 'Apellidos'))
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
                $user->setisAdmin(false);
                $user->setdineroretenido(0);
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
        
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);


        $formulario = $this->createFormBuilder($user)
            ->add('docIdentidad', TextType::class, array('label' => 'Documento de identidad (NIF/NIE)'))
            ->add('username', TextType::class, array('label' => 'Usuario'))
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class)
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
    
        $repositorio = $doctrine->getRepository(Usuario::class);
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


#[Route('/usuario/makeAdmin/{id}', name: 'adminUser')]
    public function makeAdm(ManagerRegistry $doctrine, Request $request, $id) {
    
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);

        if (!$user) {
            throw $this->createNotFoundException('No se encontró el usuario con ID: ' . $id);
        }

        $formulario = $this->createFormBuilder($user)
            ->add('save', SubmitType::class, array('label' => 'Hacer admin'))
            ->getForm();

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $formulario->isValid()) {
            $user->setIsAdmin(true);
            
            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'El usuario se ha convertido en admin exitosamente.');
            return new RedirectResponse('/checkUsers');
        }

        return $this->render('checks/makeAdmin.html.twig', array(
            'formulario' => $formulario->createView(),
            'usuario' => $user
        ));
}

#[Route('/usuario/removeAdmin/{id}', name: 'removeadminUser')]
    public function removeAdm(ManagerRegistry $doctrine, Request $request, $id) {
    
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);

        if (!$user) {
            throw $this->createNotFoundException('No se encontró el usuario con ID: ' . $id);
        }

        $formulario = $this->createFormBuilder($user)
            ->add('save', SubmitType::class, array('label' => 'Quitar admin'))
            ->getForm();

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $formulario->isValid()) {
            $user->setIsAdmin(false);
            
            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'El usuario se ha convertido en usuario normal exitosamente.');
            return new RedirectResponse('/checkUsers');
        }

        return $this->render('checks/removeAdmin.html.twig', array(
            'formulario' => $formulario->createView(),
            'usuario' => $user
        ));
}

    #[Route('/usuario/unban/{id}', name: 'unbanUser')]
    public function desbanear(ManagerRegistry $doctrine, Request $request, $id) {

        $repositorio = $doctrine->getRepository(Usuario::class);
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
        $repositorio = $doctrine->getRepository(Usuario::class);
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

#[Route('/admin/verificar/{id}', name: 'verifyAdminUser')]
    public function verificarUserAdm(ManagerRegistry $doctrine, $id): Response {
        
        $entityManager = $doctrine->getManager();
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);

        if ($user) {
            try {
                $user->setEstaVerificado(1);
                $entityManager->flush();
                return new Response("Usuario verificado con éxito.");
            } catch (\Exception $e) {
                return new Response("Error al verificar el usuario.");
            }
        } else 
            return $this->render('checks/DNIcheck.html.twig', [
                 'usuario' => null
        ]);
}

#[Route('/admin/denegar/{id}', name: 'verifyDenegar')]
    public function denegarVerificacion(ManagerRegistry $doctrine, $id): Response {
        
        $entityManager = $doctrine->getManager();
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/docs/' . $id;

        if ($user) {
            try {
                $user->setEstaVerificado(-1);
                $user->setDocimg1(null);
                $user->setDocimg2(null);
                $user->setDocselfie(null);
                $entityManager->flush(); 
                system("rm -rf ".escapeshellarg($uploadDir));
                return new Response("Verificacion rechazada con éxito.");
            } catch (\Exception $e) {
                return new Response("Error al denegar la verificación del usuario.");
            }
        } else 
            return $this->render('checks/DNIcheck.html.twig', [
                 'usuario' => null
        ]);
}

#[Route('/perfil/verificacion/{id}', name: 'verifyUser')]
public function verifyUser(ManagerRegistry $doctrine, Request $request, $id) {
    $repositorio = $doctrine->getRepository(Usuario::class);
    $user = $repositorio->find($id);
    $verified = $repositorio->find($id);

    $formulario = $this->createFormBuilder($user)
    ->add('docimg1', FileType::class, array(
        'label' => 'Cara DNI (JPG/PNG)',
        'data_class' => null,
        'constraints' => array(
            new Assert\File(array(
                'mimeTypes' => array(
                    'image/jpeg',
                    'image/png'
                ),
                'mimeTypesMessage' => 'Por favor, sube una imagen válida (JPG o PNG).',
            ))
        )
    ))    
    ->add('docimg2', FileType::class, array(
        'label' => 'Trasero DNI (JPG/PNG)',
        'data_class' => null,
        'constraints' => array(
            new Assert\File(array(
                'mimeTypes' => array(
                    'image/jpeg',
                    'image/png'
                ),
                'mimeTypesMessage' => 'Por favor, sube una imagen válida (JPG o PNG).',
            ))
        )
    ))
    
    ->add('docselfie', FileType::class, array(
        'label' => 'Selfie con DNI (JPG/PNG)',
        'data_class' => null,
        'constraints' => array(
            new Assert\File(array(
                'mimeTypes' => array(
                    'image/jpeg',
                    'image/png'
                ),
                'mimeTypesMessage' => 'Por favor, sube una imagen válida (JPG o PNG).',
            ))
        )
    ))
    
        ->add('save', SubmitType::class, array('label' => 'Enviar'))
        ->getForm();

    $formulario->handleRequest($request);

    
    

    if ($formulario->isSubmitted() && $formulario->isValid()) {
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/docs/' . $id;


        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        function isDirectoryEmpty($uploadDir) {
            return (count(scandir($uploadDir)) == 2);
          }

        function subidaDocumentosOK($uploadDir) {
            return (count(scandir($uploadDir)) == 5);
          }

        $slugger = new AsciiSlugger();
        

        $file1 = $formulario['docimg1']->getData();
        if ($file1 && isDirectoryEmpty($uploadDir)) {
            $originalFilename = pathinfo($file1->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-CARADNI-'.uniqid().'.'.$file1->guessExtension();
            $file1->move($uploadDir, $newFilename);
            $user->setDocimg1('/docs/' . $id . '/' . $newFilename);
        } else {
            return new Response("No puedes subir más documentos porque tu verificación de identidad está en proceso. ID:" . $id);
        }

        $file2 = $formulario['docimg2']->getData();
        if ($file2) {
            $originalFilename = pathinfo($file2->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-TRASERODNI-'.uniqid().'.'.$file2->guessExtension();
            $file2->move($uploadDir, $newFilename);
            $user->setDocimg2('/docs/' . $id . '/' . $newFilename);
            }

        $file3 = $formulario['docselfie']->getData();
        if ($file3) {
            $originalFilename = pathinfo($file3->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-SELFIE-'.uniqid().'.'.$file3->guessExtension();
            $file3->move($uploadDir, $newFilename);
            $user->setdocselfie('/docs/' . $id . '/' . $newFilename);
        }
        $entityManager = $doctrine->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        if (subidaDocumentosOK($uploadDir)) {
            $user->setEstaVerificado(2);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return new Response("Se han subido tus documentos y están en revision. ID: " . $id);
        } else {
            
            return new Response("Se ha producido un error al subir tus documentos. Por favor, contacta con soporte. ID: " . $id);
        }
    }

    return $this->render('funciones/verificarID.html.twig', array(
        'formulario' => $formulario->createView(),
        'usuario' => $user,
        'estaVerificado' => $verified
    ));
}




}
