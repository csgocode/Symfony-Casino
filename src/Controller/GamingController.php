<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GamingController extends AbstractController
{
    #[Route('/juegos', name: 'app_gaming')]
    public function indexgames(): Response
    {
        return $this->render('gaming/juegos.html.twig', [
            'controller_name' => 'GamingController',
        ]);
    }

    #[Route('/juego/royalv2', name: 'game_royalv2')]
    public function indexroyalgames(): Response
    {
        return $this->render('gaming/royalv2.html.twig', [
            'controller_name' => 'GamingController',
        ]);
    }

    #[Route('/juego/bomba', name: 'game_bomba')]
    public function indexbombagames(): Response
    {
        return $this->render('gaming/bomba.html.twig', [
            'controller_name' => 'GamingController',
        ]);
    }

    #[Route('/juego/sheila', name: 'game_sheila')]
    public function indexsheilagames(): Response
    {
        return $this->render('gaming/sheila.html.twig', [
            'controller_name' => 'GamingController',
        ]);
    }
}
