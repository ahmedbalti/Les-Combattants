<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\Utilisateur;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Hebergement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Repository\HebergementRepository;
use function Sodium\add;
use phpDocumentor\Reflection\Types\Integer;

class HotelListController extends AbstractController
{
    /**
     * @Route("/hotelList", name="hotelList_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $hotels = $this->getDoctrine()->getRepository(Hebergement::class)->findWithImages('Hotel');

        $ratings = array();

        foreach ($hotels as $hotel) {
            $total_rating = $this->getDoctrine()->getRepository(Rating::class)->calculTotalRatings($hotel["id"]);
            $nbr_rating = $this->getDoctrine()->getRepository(Rating::class)->CalculNbrRatings($hotel["id"]);
            if($nbr_rating != 0){
                $rating = $total_rating/$nbr_rating;
                $ratings[] = round($rating);
            } else $ratings[] = 0;
        }

        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $hotels, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('hotel_list/index.html.twig', array(
            'hotels' => $result,
            'ratings' => $ratings
        ));
    }

    /**
     * @Route("/ratinghotel/{id}/{nbr}", name="add_ratinghotel")
     */
    public function addRating(Request $request,Hebergement $hotel,int $nbr) {
        $rating = new Rating();
        $rating->setHebergement($hotel);
        $rating->setNbrEtoiles($nbr);

        $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->find(1);

        $rating->setUtilisateur($utilisateur);

        $em = $this->getDoctrine()->getManager();
        $em->persist($rating);
        $em->flush($rating);
        return $this->redirectToRoute('hotelList_index');
    }



}



