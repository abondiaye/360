<?php

// src/Service/RemoteDiagnosticService.php
namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class RemoteDiagnosticService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.exemple-ia.com/', // Remplace par l'URL de ton API
            'timeout'  => 5.0,
        ]);
    }

    public function analyzeSystemData(array $systemData): string
    {
        try {
            // Envoie une requête POST avec les données système
            $response = $this->client->post('/analyze', [
                'json' => $systemData
            ]);

            // Récupère et traite la réponse
            $data = json_decode($response->getBody()->getContents(), true);
            return $data['diagnostic'] ?? 'Aucun diagnostic disponible';

        } catch (RequestException $e) {
            // Gère les erreurs de connexion ou d'API
            return 'Erreur lors de la connexion à l’API de diagnostic : ' . $e->getMessage();
        }
    }
}