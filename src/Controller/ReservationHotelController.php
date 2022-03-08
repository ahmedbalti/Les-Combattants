<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Room;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationHotelController extends AbstractController
{
    /**
     * @Route("/reservationHotel", name="reservationHotel")
     */
    public function index(PaginatorInterface $paginator,Request $request): Response
    {
        $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findAll();

        $result = $paginator->paginate(
            $reservations, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('reservation_hotel/index.html.twig', array(
            'reservations' => $result,
        ));
    }

    /**
     * @Route("/reservationHotel/new", name="reservationHotel_new")
     */
    public function newAction(Request $request,$id) {
        $reservation = new Reservation();
        $em = $this->getDoctrine()->getManager();
        $room = $em->getRepository(Room::class)->find(1);
        $reservation->setRoom($room);
        $form = $this->createForm('App\Form\reservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush($reservation);
            return $this->redirectToRoute('room_r', array('id' => 1));
        }
        return $this->render('reservation_hotel/index.html.twig',
            array('reservation' => $reservation,'form' => $form->createView()));

    }


}
