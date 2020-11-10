<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArrondissementController extends AbstractController
{
    /**
     * @Route("/arrondissement", name="arrondissement")
     */
    public function index()
    {
        return $this->render('arrondissement/index.html.twig', [
            'controller_name' => 'ArrondissementController',
        ]);
    }
}
