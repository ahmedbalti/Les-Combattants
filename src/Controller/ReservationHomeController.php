<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationHomeController extends AbstractController
{
    /**
     * @Route("/reservation/home", name="reservation_home")
     */
    public function index(): Response
    {
        return $this->render('reservation_home/index.html.twig', [
            'controller_name' => 'ReservationHomeController',
        ]);
    }
}
