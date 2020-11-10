<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $admin = $em->getRepository('App:Admin')->findOneBy(array(
            'client' => $user,
            'valid' => 1,

        ));
        $admin = $em->getRepository('App:Admin')->findOneBy(array(
            'client' => $user,
            'valid' => 2,

        ));



//        if (!$admin) {
//            return $this->redirectToRoute('home');
//        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'admin' => $admin,
            'user' => $user,
        ]);

    }
}
