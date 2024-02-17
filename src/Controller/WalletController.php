<?php

namespace App\Controller;

use App\Entity\Transacciones;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Usuario;
use Symfony\Component\Security\Core\Security;
use App\Repository\TransaccionesRepository;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;



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


    #[Route('/wallet/recarga', name: 'recarga_procesar', methods: ['POST'])]
    public function procesar(Request $request): Response
    {
        $monto = $request->request->get('amount');

        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Recarga Casino Royal',
                    ],
                    'unit_amount' => $monto * 100 + 50, // 100->formato(moneda) 50->comision(0,50eur comision)
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://royalcasino.es/wallet/recarga/exito',
            'cancel_url' => 'https://royalcasino.es/wallet/recarga/cancelado',
        ]);

        return $this->redirect($session->url, 303);
    }





}
