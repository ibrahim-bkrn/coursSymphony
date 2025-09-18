<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Csomponent\Routing\Annotation\Route;


class acceuilController extends AbstractController {

    #[Route('/acceuil')]
    public function acceuil() {
        return $this->render('acceuil.html');
    }
}