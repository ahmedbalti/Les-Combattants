<?php

namespace App\Controller;

use App\Entity\Club;
use App\Entity\Reservation;
use App\Entity\Table;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class ReservationController extends AbstractController
{
    /**
     * @Route("/reservations", name="reservations")
     */
    public function index(PaginatorInterface $paginator,Request $request): Response
    {
        $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findWithImages();

        $result = $paginator->paginate(
            $reservations, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('reservation/index.html.twig', array(
            'reservations' => $result,
        ));
    }




    /**
     * @Route("/{id}/Reservation_new", name="Reservation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,Table $table) {
        $Reservation = new Reservation();
        $em = $this->getDoctrine()->getManager();
        //$table = $em->getRepository(Table::class)->find($table->getId());
        $Reservation->setTabl($table);
        $form = $this->createForm('App\Form\ReservationType', $Reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Reservation);
            $em->flush($Reservation);
            return $this->redirectToRoute('restaurentList_index');
        }
        return $this->render('Reservation/newreservation.html.twig', array('Reservation' => $Reservation,'form' => $form->createView()));
    }



    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("/reservations_edit/{id}", name="reservation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $form = $this->createForm('App\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('reservations');
        }

        return $this->render('reservation/editreservation.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView()
        ));
    }


    /**
     * Deletes a reservation entity.
     *
     * @Route("/reservation_delete/{id}", name="reservation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush($reservation);
        return $this->redirectToRoute('reservations');
    }

}
