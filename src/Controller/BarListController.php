<?php

namespace App\Controller;

use App\Entity\Club;
use App\Entity\Rating;
use App\Entity\Utilisateur;
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

        $ratings = array();

        foreach ($bars as $bar) {
            $total_rating = $this->getDoctrine()->getRepository(Rating::class)->calculTotalRating($bar["id"]);
            $nbr_rating = $this->getDoctrine()->getRepository(Rating::class)->CalculNbrRating($bar["id"]);
            if($nbr_rating != 0){
                $rating = $total_rating/$nbr_rating;
                $ratings[] = round($rating);
            } else $ratings[] = 0;
        }
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $bars, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('bar_list/index.html.twig', array(
            'bars' => $result,
            'ratings' => $ratings
        ));

    }

    /**
     * @Route("/rating_bar/{id}/{nbr}", name="add_rating_bar")
     */
    public function addRating(Request $request,Club $bar,int $nbr) {
        $rating = new Rating();
        $rating->setClub($bar);
        $rating->setNbrEtoiles($nbr);

        $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->find(1);

        $rating->setUtilisateur($utilisateur);

        $em = $this->getDoctrine()->getManager();
        $em->persist($rating);
        $em->flush($rating);
        return $this->redirectToRoute('barList_index');
    }

}