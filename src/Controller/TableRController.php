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
use App\Entity\Table;


class TableRController extends AbstractController
{
    /**
     * @Route("/table_r/{id}", name="table_r")
     * @Method("GET")
     */
    public function index(Club $restaurent): Response
    {
        $em = $this->getDoctrine()->getManager();

        $tables = $this->getDoctrine()->getRepository(Table::class)->findWithImages($restaurent->getId());
        return $this->render('table_r/index.html.twig', array(
            'tables' => $tables,
        ));
    }

    /**
     * Deletes a table entity.
     *
     * @Route("delete/{id}", name="table_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Table $table)
    {

        $club = new Club();
        $club = $table->getClub();
        $em = $this->getDoctrine()->getManager();
        $em->remove($table);
        $em->flush($table);
        return $this->redirectToRoute('table_r', array('id' => $club->getId()));
    }

    /**
     * @Route("/table_r/1/new", name="table_new")
     */
    public function newAction(Request $request) {

        $table = new Table();
        $em = $this->getDoctrine()->getManager();
        $id_club = $em->getRepository(Club::class)->find(1);
        $table->setClub($id_club);
        $form = $this->createForm('App\Form\tableType', $table);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($table);
            $em->flush($table);
            return $this->redirectToRoute('table_r', array('id' => 1));
        }
        return $this->render('table_r/new_table.html.twig', array('table' => $table,'form' => $form->createView()));
    }

    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("/table_r/{id}/edit", name="table_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Table $table)
    {
        $form = $this->createForm('App\Form\tableType', $table);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('table_r', array('id' => 1));
        }

        return $this->render('table_r/edit_table.html.twig', array(
            'table' => $table,
            'form' => $form->createView()
        ));
    }


}
