<?php

// src/Controller/MainController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/diagnostic', name: 'app_diagnostic')]
    public function diagnostic(): Response
    {
        return $this->render('diagnostic.html.twig');
    }

    #[Route('/video-call', name: 'app_video_call')]
    public function videoCall(): Response
    {
        return $this->render('video_call.html.twig');
    }

    #[Route('/contact', name: 'app_contact', methods: ['POST'])]
    public function contact(Request $request): Response
    {
        // Traitement du formulaire de contact
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');

        // Ajouter ici la logique pour envoyer l'email ou stocker les informations

        // Redirection ou affichage d'un message de succès
        return $this->redirectToRoute('app_home'); // Rediriger vers la page d'accueil ou une page de confirmation
    }
}
