<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_index')]
    public function index(): Response
    {
        // récupérer les articles de blog et les passer à la vue
        //  récupérer vos articles
        $articles = [
            
            ['title' => 'Premier Article', 'content' => 'Contenu du premier article'],
            ['title' => 'Deuxième Article', 'content' => 'Contenu du deuxième article'],
        ];

        return $this->render('blog/index.html.twig', [
            'articles' => $articles, // Passez vos articles à la vue
        ]);
    }
}
