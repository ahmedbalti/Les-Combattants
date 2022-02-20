<?php

namespace App\Controller;

use App\Form\restaurentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Club;

class BarController extends AbstractController
{
    /**
     * @Route("/bar", name="bars_index")
     * @Method("GET")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager();

        $restaurents = $this->getDoctrine()->getRepository(Club::class)->findWithImages('Bar');

        return $this->render('bar/index.html.twig', array(
            'restaurents' => $restaurents,
        ));
    }
}
