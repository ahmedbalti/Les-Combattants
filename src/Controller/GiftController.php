<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GiftController extends AbstractController
{
    /**
     * @Route("/gift", name="gift")
     */
    public function index(): Response
    {
        return $this->render('gift/index.html.twig', [
            'controller_name' => 'GiftController',
        ]);
    }
}
