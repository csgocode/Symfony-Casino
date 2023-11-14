<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Usuario;

class PerfilController extends AbstractController
{
    #[Route('/perfil/{id}', name: 'app_perfil')]
    public function perfilUser(ManagerRegistry $doctrine, Request $request, $id)
    {
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);

        return $this->render('perfil/perfilmain.html.twig', [
            'controller_name' => 'PerfilController',
            'user' => $user,
        ]);
    }
}
