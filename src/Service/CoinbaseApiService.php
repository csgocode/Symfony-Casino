<?php

// src/Service/CoinbaseApiService.php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CoinbaseApiService
{
    private $client;
    private $apiKey;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function createCharge(array $data)
    {
        $response = $this->client->request('POST', 'https://api.commerce.coinbase.com/charges', [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-CC-Api-Key' => $this->apiKey,
                'X-CC-Version' => '2023-11-11',
            ],
            'body' => json_encode($data),
        ]);

        return $response->toArray();
    }
}
