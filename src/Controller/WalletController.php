<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Usuario;
use CoinbaseCommerce\ApiClient;
use Symfony\Component\Security\Core\Security;
use CoinbaseCommerce\Resources\Checkout;
use App\Repository\TransaccionesRepository;

class WalletController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/wallet', name: 'app_wallet')]
    public function walletPerfil(ManagerRegistry $doctrine, TransaccionesRepository $transaccionesRepository)
    {
        
    
        $transacciones = $transaccionesRepository->findAll();
        $usuarioAutenticado = $this->security->getUser();
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($usuarioAutenticado->getId());

        return $this->render('wallet/index.html.twig', [
            'controller_name' => 'WalletController',
            'user' => $user,
            'transacciones' => $transacciones,
        ]);
    }
}
