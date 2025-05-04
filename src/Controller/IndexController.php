<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use LogicException;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        return $this->redirectToRoute('homepage');
    }

    #[Route('/home', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/admin/login', name: 'admin_login')]
    public function adminLogin(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('index/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new LogicException('This method is intercepted by Symfony logout.');
    }

    #[Route('/freelance', name: 'freelance_site')]
    public function freelanceSite(): Response
    {
        return $this->render('freelance/index.html.twig');
    }
}
