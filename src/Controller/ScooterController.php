<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScooterController extends AbstractController
{
    #[Route('/scooter', name: 'app_scooter')]
    public function index(): Response
    {
        return $this->render('scooter/index.html.twig', [
            'controller_name' => 'ScooterController',
        ]);
    }
}
