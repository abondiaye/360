<?php

// src/Controller/ApiDiagnosticController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiDiagnosticController extends AbstractController
{
    #[Route('/api/analyze', name: 'api_analyze', methods: ['POST'])]
    public function analyze(Request $request): JsonResponse
    {
        $systemData = json_decode($request->getContent(), true);

        // Exemple de logique de diagnostic basique
        if ($systemData['cpu_temperature'] > 80) {
            $diagnostic = "Problème détecté : Surchauffe du processeur.";
        } else {
            $diagnostic = "Aucun problème détecté.";
        }

        return new JsonResponse(['diagnostic' => $diagnostic]);
    }
}