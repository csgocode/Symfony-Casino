<?php

namespace App\Controller;

use App\Repository\AfiliadosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Usuario;


class AfiliateController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/afiliados', name: 'app_afiliated')]
    public function afiliadoPerfil(ManagerRegistry $doctrine, AfiliadosRepository $afiliadosRepository)
    {
        $usuarioAutenticado = $this->security->getUser();
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($usuarioAutenticado->getId());
        $afiliado = $afiliadosRepository->findAll();

        

        return $this->render('afiliate/index.html.twig', [
            'controller_name' => 'AfiliateController',
            'user' => $user,
            'afiliados' => $afiliado,
        ]);
    }
}

