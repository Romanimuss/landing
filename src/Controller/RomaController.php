<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RomaController extends AbstractController
{
    #[Route('/Roma', name: 'app_Roma')]
    public function index(): Response
    {
        return $this->render('Roma/index.html.twig', [
            'controller_name' => 'RomaController',
        ]);
    }
}
