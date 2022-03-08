<?php

namespace App\Controller;

use App\Entity\Club;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Repository\ClubRepository;


class BarListController extends AbstractController
{
    /**
     * @Route("/barList", name="barList_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $bars = $this->getDoctrine()->getRepository(Club::class)->findWithImages('Bar');
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $bars, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('bar_list/index.html.twig', array(
            'bars' => $result,
        ));

    }
}