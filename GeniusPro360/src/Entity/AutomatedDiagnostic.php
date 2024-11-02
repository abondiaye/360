<?php
// src/Controller/DiagnosticController.php

namespace App\Controller;

use App\Entity\AutomatedDiagnostic;
use App\Entity\SupportCall;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DiagnosticController extends AbstractController
{
    #[Route('/api/diagnostic', name: 'api_diagnostic', methods: ['POST'])]
    public function saveDiagnostic(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['pcNumber'], $data['problemDescription'], $data['companyName'])) {
            $diagnostic = new AutomatedDiagnostic();
            $diagnostic->setDiagnosticResult($data['problemDescription']);
            $diagnostic->setCreatedAt(new \DateTime());

            // Associer à un appel de support si nécessaire
            $supportCall = new SupportCall();
            // On peut ici associer des données au support call
            $diagnostic->setSupportCall($supportCall);

            $entityManager->persist($supportCall);
            $entityManager->persist($diagnostic);
            $entityManager->flush();

            return new JsonResponse(['status' => 'Diagnostic saved successfully'], 201);
        }

        return new JsonResponse(['error' => 'Invalid data'], 400);
    }
}
