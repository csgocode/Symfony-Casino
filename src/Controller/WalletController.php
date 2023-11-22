<?php

namespace App\Controller;

use App\Entity\Transacciones;
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
        $usuarioAutenticado = $this->security->getUser();
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($usuarioAutenticado->getId());
        $transacciones = $transaccionesRepository->findByUser($user);

        

        return $this->render('wallet/index.html.twig', [
            'controller_name' => 'WalletController',
            'user' => $user,
            'transacciones' => $transacciones,
        ]);
    }


    #[Route('/wallet/payment', name: 'app_wallet_payment', methods: ['POST'])]
    public function makePayment(Request $request)
    {
        // Obtener datos del formulario
        $amount = $request->request->get('dAmount');
        $email = $request->request->get('dEmail');


        // Crear una nueva solicitud de pago
        $payment_request = new PaymentRequest();
        $payment_request->push([
            'unit' => 'BTC',
            'address' => '1R9NpmdVpC4eKajqutKqSSEn5hH4DEkLs',
            'payment_reference' => uniqid('ORD-'),
            'amount' => $amount,
            'callback_url' => 'https://your-callback-url', 
            'timeout' => 10,
            'confirmations' => 3
        ]);

        return $this->redirectToRoute('ruta_a_la_pagina_de_confirmacion');
    }





}
