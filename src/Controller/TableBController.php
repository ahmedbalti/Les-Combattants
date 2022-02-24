<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableBController extends AbstractController
{
    /**
     * @Route("/table/b", name="table_b")
     */
    public function index(): Response
    {
        return $this->render('table_b/index.html.twig', [
            'controller_name' => 'TableBController',
        ]);
    }
}
