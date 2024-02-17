<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Entity\Afiliados;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $user = new Usuario();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $referidoUsername = $request->query->get('i');
        $referidoUser = null;
        if ($referidoUsername) {
            $referidoUser = $entityManager->getRepository(Usuario::class)->findOneBy(['username' => $referidoUsername]);
        }


        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            if ($referidoUser) {
                $afiliado = new Afiliados();
                $afiliado->setInvitadoUser($referidoUser); // Usuario que invitó
                $afiliado->setAfiliadoUser($user); // Nuevo usuario registrado
                $afiliado->setFechaRegistro(new \DateTime()); // Fecha actual
                $afiliado->setLevel(1); // O cualquier lógica de niveles que tengas
                
                $entityManager->persist($afiliado);
            }


            $user->setDinero(0);
            $user->setDineroRetenido(0);
            $user->setFechaNacimiento(new \DateTime("1800-01-01"));
            $user->setiplastlogin($_SERVER['REMOTE_ADDR']);
            $user->setestabaneado(0);
            $user->setDineroAfiliados(0);
            $user->setestaverificado(0);
            $user->setisAdmin(false);
            $entityManager->persist($user);
            $entityManager->flush();

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
