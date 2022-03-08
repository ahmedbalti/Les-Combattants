<?php

namespace App\Controller;

use App\Entity\Hebergement;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Repository\HebergementRepository;

class HomeListController extends AbstractController
{
    /**
     * @Route("/homeList", name="homeList_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $homes = $this->getDoctrine()->getRepository(Hebergement::class)->findWithImages('Home');
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $homes, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('home_list/index.html.twig',  array(
            'homes' => $result,
        ));


    }
}

// <img src="/img/{{ hotel.file }}" alt="" style="width: 200px; height: 100px;" />