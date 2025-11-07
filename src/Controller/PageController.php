<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/admin', name: 'admin')]
  public function admin(): Response
  {
    return $this->render('admin/layout.html.twig');
  }
  
  #[Route('/', name: 'home')]
  public function home(): Response
  {
    return $this->render('home.html.twig');
  }

  #[Route('/about', name: 'about')]
  public function about(): Response
  {
    return $this->render('about.html.twig');
  }
}