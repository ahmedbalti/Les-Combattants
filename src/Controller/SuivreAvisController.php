<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuivreAvisController extends AbstractController
{
    /**
     * @Route("/suivre/avis", name="suivre_avis")
     */
    public function index(): Response
    {
        return $this->render('suivre_avis/index.html.twig', [
            'controller_name' => 'SuivreAvisController',
        ]);
    }
}
