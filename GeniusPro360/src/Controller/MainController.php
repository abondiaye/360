<?php

// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
