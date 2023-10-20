<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControladorCasinoController extends AbstractController
{
    #[Route('/controlador/casino', name: 'app_controlador_casino')]
    public function index(): Response
    {
        return $this->render('controlador_casino/index.html.twig', [
            'controller_name' => 'ControladorCasinoController',
        ]);
    }

    #[Route('/checkUser/{id}', name: 'checkUser_DNI')]
    public function checkUser(ManagerRegistry $doctrine, $id): Response
    {
        $repositorio = $doctrine->getRepository(Usuarios::class);
        $usuario = $repositorio->find($id);

        return $this->render('checks/DNIcheck.html.twig', array(
            'usuario' => $usuario
        ));
    }

    #[Route('/usuario/nuevo', name: 'newUser')]
    public function nuevo(ManagerRegistry $doctrine, Request $request) {
        $user = new Usuarios();

        $formulario = $this->createFormBuilder($user)
            ->add('docIdentidad', TextType::class)
            ->add('nombre', TextType::class)
            ->add('apellido1', TextType::class)
            ->add('apellido2', TextType::class)
            ->add('email', EmailType::class, array('label' => 'Correo electrónico'))
            ->add('contrasena', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();
            $formulario->handleRequest($request);

            if ($formulario->isSubmitted() && $formulario->isValid()) {
                $user = $formulario->getData();
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
        
        $repositorio = $doctrine->getRepository(Usuarios::class);
        $user = $repositorio->find($id);


        $formulario = $this->createFormBuilder($user)
            ->add('docIdentidad', TextType::class)
            ->add('nombre', TextType::class)
            ->add('apellido1', TextType::class)
            ->add('apellido2', TextType::class)
            ->add('email', EmailType::class, array('label' => 'Correo electrónico'))
            ->add('contrasena', PasswordType::class)
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



}
