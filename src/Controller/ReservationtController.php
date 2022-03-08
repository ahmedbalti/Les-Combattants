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
class ReservationtController extends AbstractController
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
        return $this->render('reservationt/index.html.twig', array(
            'reservations' => $result,
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     * @Route("/reservation/{id}", name="reservation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Club $reservation)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush($reservation);
        return $this->redirectToRoute('reservations');
    }

    /**
     * @Route("/{id}/reservations/new", name="reservation_new")
     */
    public function newAction(Request $request,Table $table) {
        $reservation = new Reservation();
        $em = $this->getDoctrine()->getManager();
        //$table = $em->getRepository(Table::class)->find($table->getId());
        $reservation->setTabl($table);
        $form = $this->createForm('App\Form\reservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush($reservation);
            return $this->redirectToRoute('restaurentList_index');
        }
        return $this->render('reservationt/newreservation.html.twig', array('reservation' => $reservation,'form' => $form->createView()));
    }

    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("/reservations/{id}/edit", name="reservation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $form = $this->createForm('App\Form\reservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('reservations');
        }

        return $this->render('reservationt/editreservation.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView()
        ));
    }

}
