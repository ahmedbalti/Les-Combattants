<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableRController extends AbstractController
{
    /**
     * @Route("/table/r", name="table_r")
     */
    public function index(): Response
    {
        return $this->render('table_r/index.html.twig', [
            'controller_name' => 'TableRController',
        ]);
    }
}
