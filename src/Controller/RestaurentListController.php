<?php

namespace App\Controller;

use App\Entity\Club;
use App\Entity\Rating;
use App\Entity\Utilisateur;
use Knp\Component\Pager\PaginatorInterface;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Repository\ClubRepository;
use function Sodium\add;

class RestaurentListController extends AbstractController
{
    /**
     * @Route("/restaurentList", name="restaurentList_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $restaurents = $this->getDoctrine()->getRepository(Club::class)->findWithImages('Restaurent');

        $ratings = array();

        foreach ($restaurents as $restaurent) {
            $total_rating = $this->getDoctrine()->getRepository(Rating::class)->calculTotalRating($restaurent["id"]);
            $nbr_rating = $this->getDoctrine()->getRepository(Rating::class)->CalculNbrRating($restaurent["id"]);
            if($nbr_rating != 0){
                $rating = $total_rating/$nbr_rating;
                $ratings[] = round($rating);
            } else $ratings[] = 0;
        }

        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $restaurents, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('restaurent_list/index.html.twig', array(
            'restaurents' => $result,
            'ratings' => $ratings
        ));
    }

    /**
     * @Route("/rating/{id}/{nbr}", name="add_rating")
     */
    public function addRating(Request $request,Club $restaurent,int $nbr) {
        $rating = new Rating();
        $rating->setClub($restaurent);
        $rating->setNbrEtoiles($nbr);

        $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->find(1);

        $rating->setUtilisateur($utilisateur);

        $em = $this->getDoctrine()->getManager();
        $em->persist($rating);
        $em->flush($rating);
        return $this->redirectToRoute('restaurentList_index');
    }


}




