<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Entity\Room;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Form\RoomType;



class RoomController extends AbstractController
{
    /**
     * @Route("/room_r/{id}", name="room_r")
     * @Method("GET")
     */
    public function index(Hebergement $hebergement): Response
    {
        //calculer nombre de tables dispo
        $nbr_rooms_dispo = $this->getDoctrine()->getRepository(Room::class)->calculRoomsDispo($hebergement->getId());
        //calculer all tables
        $nbr_rooms_all = $this->getDoctrine()->getRepository(Room::class)->CalculRoomsAll($hebergement->getId());

        $pourcentage_dispo = 0;
        $pourcentage_nondispo = 0;

        //il faut nombre total different de 0
        if($nbr_rooms_all!=0) {
            $pourcentage_dispo = ($nbr_rooms_dispo * 100) / $nbr_rooms_all;
            $pourcentage_nondispo = 100 - $pourcentage_dispo;
        }
        $rooms = $this->getDoctrine()->getRepository(Room::class)->findWithImages($hebergement->getId());
        return $this->render('room/index.html.twig', array(
            'hebergement_id' => $hebergement->getId(),
            'rooms' => $rooms,
            'pourcentage_dispo' => $pourcentage_dispo,
            'pourcentage_nondispo' => $pourcentage_nondispo
        ));
    }

    /**
     * Deletes a room entity.
     *
     * @Route("delete/{id}", name="room_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Room $room)
    {

        $hebergement = new Hebergement();
        $hebergement = $room->getHebergement();
        $em = $this->getDoctrine()->getManager();
        $em->remove($room);
        $em->flush($room);
        return $this->redirectToRoute('room_r', array('id' => $hebergement->getId()));
    }



    /**
     * @Route("/room_r/{id}/new", name="room_new")
     */
    public function newAction(Request $request,$id) {
        $room = new Room();
        $em = $this->getDoctrine()->getManager();
        $hebergement = $em->getRepository(Hebergement::class)->find($id);
        $room->setHebergement($hebergement);
        $form = $this->createForm('App\Form\RoomType', $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($room);
            $em->flush($room);
            return $this->redirectToRoute('room_r', array('id' => $id));
        }
        return $this->render('room/new_room.html.twig', array('room' => $room,'form' => $form->createView()));
    }

    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("/room_r/{id}/edit", name="room_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Room $room)
    {
        $form = $this->createForm('App\Form\RoomType', $room);
        $form->handleRequest($request);

        $hebergement= new Hebergement();
        $hebergement = $room->getHebergement();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('room_r', array('id' => $hebergement->getId()));
        }

        return $this->render('room/edit_room.html.twig', array(
            'room' => $room,
            'form' => $form->createView()
        ));
    }

    /**
     * Change disponibilite.
     *
     * @Route("/room_r/{id}/dispo", name="room_set_dispo")
     * @Method({"GET", "POST"})
     */
    public function setDisponible(Request $request, Room $room)
    {

        $hebergement = new Hebergement();
        $hebergement = $room->getHebergement();

        $this->getDoctrine()->getRepository(Room::class)->setDisponibilite($room->getId(),'1');
        return $this->redirectToRoute('room_r', array('id' => $hebergement->getId()));
    }

    /**
     * Change indisponible.
     *
     * @Route("/room_r/{id}/indispo", name="room_set_indispo")
     * @Method({"GET", "POST"})
     */
    public function setIndisponible(Request $request, Room $room)
    {
        $hebergement = new Hebergement();
        $hebergement = $room->getHebergement();

        $this->getDoctrine()->getRepository(Room::class)->  setDisponibilite($room->getId(),'0');
        return $this->redirectToRoute('room_r', array('id' => $hebergement->getId()));
    }

}
