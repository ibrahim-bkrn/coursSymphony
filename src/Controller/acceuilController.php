<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Csomponent\Routing\Annotation\Route;


class acceuilController {

    #[Route('templates/acceuil')]
    public function acceuil() {
        return this->render('templates/acceuil.php');
    }
}