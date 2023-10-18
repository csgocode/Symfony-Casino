<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

    #[Route('/checkUser/{DNI}', name: 'checkUser_DNI')]
    public function checkUser(ManagerRegistry $doctrine, $dni): Response
    {
        $repositorio = $doctrine->getRepository(Usuarios::class);
        $usuario = $repositorio->find($dni);

        return $this->render('checks/DNIcheck.html.twig', [
            'usuario' => $usuario
        ]);
    }
}
