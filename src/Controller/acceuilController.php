<?php

namespace App\Controller;

use App\Entity\TrotElec;
use App\Repository\TrotElecRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class acceuilController extends AbstractController {

    #[Route('/acceuil')]
    public function acceuil() {
        return $this->render('acceuil.html.twig');
    }

    #[Route('/ajoutTrot', name : 'app_ajout_trot')]
    function ajtTrot(EntityManagerInterface $em) {
        $nvTrot = new TrotElec();
        $nvTrot->setModel("Xiaomi Mi Electric Scooter Pro 2");

        $em->persist($nvTrot);
        $em->flush();

        return new Response("Trotinnette ajouté avec succès !");
    }

    #[Route('/suppTrot', name : 'app_supp_trot')]
    function suppTrot(EntityManagerInterface $em, TrotElecRepository $trot) {
        $trotsASupprimer = $trot->findAll(); 

        foreach ($trot as $trotsASupprimer) {
            $em->remove($trot);        
        }

        $em->flush();

        return new Response("Trotinnette supprimée avec succès !");
    }
}
