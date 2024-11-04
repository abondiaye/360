<?php

// src/Controller/DiagnosticController.php
namespace App\Controller;

use App\Service\ProblemDetectionAI;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiagnosticController extends AbstractController
{
    private $problemDetectionAI;

    public function __construct(ProblemDetectionAI $problemDetectionAI)
    {
        $this->problemDetectionAI = $problemDetectionAI;
    }

    #[Route('/diagnostic', name: 'app_diagnostic')]
    public function index(): Response
    {
        $systemData = [
            'cpu_temperature' => 85,
            'disk_usage' => 90,
        ];

        $diagnosticResult = $this->problemDetectionAI->analyzeSystemData($systemData);

        return $this->render('diagnostic/index.html.twig', [
            'diagnosticResult' => $diagnosticResult,
        ]);
    }
}