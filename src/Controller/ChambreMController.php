<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreMController extends AbstractController
{
    /**
     * @Route("/chambre/m", name="chambre_m")
     */
    public function index(): Response
    {
        return $this->render('chambre_m/index.html.twig', [
            'controller_name' => 'ChambreMController',
        ]);
    }
}
