<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted; // Ajout pour IsGranted

class PortfolioController extends AbstractController
{
    #[Route('/portfolio', name: 'portfolio_index')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('portfolio/about.html.twig');
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('portfolio/services.html.twig');
    }

    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('portfolio/blog.html.twig');
    }

    #[Route('/formations', name: 'formations')]
    public function formations(): Response
    {
        return $this->render('portfolio/formations.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig');
    }

    #[Route('/training', name: 'training')]
    public function training(): Response
    {
        return $this->render('portfolio/training.html.twig');
    }

    #[Route('/mon-espace', name: 'member_dashboard')]
    #[IsGranted('ROLE_USER')] // Protection d’accès
    public function memberDashboard(): Response
    {
        return $this->render('portfolio/member_dashboard.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
