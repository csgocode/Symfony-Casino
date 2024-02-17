<?php

namespace App\Controller;

use App\Entity\Transacciones;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PlisioPaymentController extends AbstractController
{
    private $httpClient;
    private $plisioApiKey;

    public function __construct(HttpClientInterface $httpClient, string $plisioApiKey)
    {
        $this->httpClient = $httpClient;
        $this->plisioApiKey = $plisioApiKey;
    }

    #[Route('/payment/create/{crypto}/{cantidad}', name: 'payment_create')]
    public function createPayment(string $crypto, int $cantidad): Response
    {
        if (!in_array(strtoupper($crypto), ['BTC', 'ETH', 'LTC', 'USDT', 'TRX'])) {
            return $this->json(['error' => 'Unsupported cryptocurrency'], Response::HTTP_BAD_REQUEST);
        }

        $response = $this->httpClient->request('GET', 'https://plisio.net/api/v1/invoices/new', [
            'query' => [
                'api_key' => $this->plisioApiKey,
                'currency' => strtoupper($crypto),
                'source_currency' => 'EUR',
                'source_amount' => $cantidad,
                'order_number' => uniqid(),
                'order_name' => 'Test Order',
                'email' => 'customer@example.com',
                'callback_url' => 'https://casinoroyal.es/payment/callback',
                // Añade cualquier otro parámetro necesario según tu caso de uso
            ],
        ]);

        // Dentro de tu método de creación de pago, después de recibir la respuesta de la API
if ($response->getStatusCode() === 200) {
    $data = $response->toArray();
    if ($data['status'] === 'success' && isset($data['data']['invoice_url'])) {
        return $this->redirect($data['data']['invoice_url']);
    }
}

// Manejar caso de error o falta de URL de factura
return $this->json(['error' => 'No se pudo crear el pago o falta la URL de la factura'], Response::HTTP_INTERNAL_SERVER_ERROR);

    }


    #[Route('/payment/callback', name: 'payment_callback')]
    public function paymentCallback(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
    
        // Verificar el hash para asegurar que la notificación viene de Plisio
        $verifyHash = $data['verify_hash'] ?? '';
        // Calcula tu propio hash usando los datos recibidos y tu clave secreta de Plisio
        $calculatedHash = hash_hmac('sha1', serialize($data), 'Vq-y2s2yjewc5jXShPTIAKiQaCTBL-j6xpfNO3Nh_hZxie-eG8FOHCCEHRFUr2eJ');
    
        if ($verifyHash !== $calculatedHash) {
            // Hash no coincide, posible manipulación de la solicitud
            return new Response('Hash verification failed', Response::HTTP_FORBIDDEN);
        }
    
        $transaccionId = $data['params']['order_number'] ?? null;
        $transaccion = $entityManager->getRepository(Transacciones::class)->find($transaccionId);

        if (!$transaccion) {
            return new Response('Transacción no encontrada', Response::HTTP_NOT_FOUND);
        }

        switch ($data['status']) {
            case 'success':
                // Marcar la transacción como completada
                $transaccion->setCompletada(true);
                break;
            case 'failed':
                // Marcar la transacción como fallida
                $transaccion->setCompletada(false);
                break;
            default:
                // Cualquier otro estado, puedes decidir no hacer nada o manejarlo específicamente
                break;
        }

        // Guardar los cambios en la base de datos
        $entityManager->persist($transaccion);
        $entityManager->flush();

        return new Response('Callback procesado correctamente');
    }
    





}