<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    /*
    /**
     * @Route("/template", name="template")
     */
   /* public function index(): Response
    {
        return $this->render('template/index.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }

*/


    /**
     * @Route("/templateback", name="templateback")
     */
    public function index2(): Response
    {
        return $this->render('template/index4.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }


    /**
     * @Route("/template", name="template")
     */
    public function index3(): Response
    {
        return $this->render('template/index5.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }























}
