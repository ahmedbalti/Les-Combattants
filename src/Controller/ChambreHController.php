<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreHController extends AbstractController
{
    /**
     * @Route("/chambre/h", name="chambre_h")
     */
    public function index(): Response
    {
        return $this->render('chambre_h/index.html.twig', [
            'controller_name' => 'ChambreHController',
        ]);
    }
}
