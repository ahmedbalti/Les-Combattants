<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogSingleController extends AbstractController
{
    /**
     * @Route("/blog/single", name="blog_single")
     */
    public function index(): Response
    {
        return $this->render('blog_single/index.html.twig', [
            'controller_name' => 'BlogSingleController',
        ]);
    }
}
