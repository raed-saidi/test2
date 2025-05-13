<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestTwigController extends AbstractController
{
    #[Route('/test-twig', name: 'test_twig')]
    public function index(): Response
    {
        return $this->render('base.html.twig'); // Should work!
    }
}
