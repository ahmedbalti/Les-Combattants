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
        //calculer nombre de tables dispo
        $nbr_tables_dispo = $this->getDoctrine()->getRepository(Table::class)->calculTablesDispo($restaurent->getId());
        //calculer all tables
        $nbr_tables_all = $this->getDoctrine()->getRepository(Table::class)->CalculTablesAll($restaurent->getId());

        $pourcentage_dispo = 0;
        $pourcentage_nondispo = 0;

        //il faut nombre total different de 0
        if($nbr_tables_all!=0) {
            $pourcentage_dispo = ($nbr_tables_dispo * 100) / $nbr_tables_all;
            $pourcentage_nondispo = 100 - $pourcentage_dispo;
        }
        $tables = $this->getDoctrine()->getRepository(Table::class)->findWithImages($restaurent->getId());
        return $this->render('table_r/index.html.twig', array(
            'restaurent_id' => $restaurent->getId(),
            'tables' => $tables,
            'pourcentage_dispo' => $pourcentage_dispo,
            'pourcentage_nondispo' => $pourcentage_nondispo
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
     * @Route("/table_r/{id}/new", name="table_new")
     */
    public function newAction(Request $request,$id) {
        $table = new Table();
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Club::class)->find($id);
        $table->setClub($club);
        $form = $this->createForm('App\Form\tableType', $table);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($table);
            $em->flush($table);
            return $this->redirectToRoute('table_r', array('id' => $id));
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

        $club = new Club();
        $club = $table->getClub();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('table_r', array('id' => $club->getId()));
        }

        return $this->render('table_r/edit_table.html.twig', array(
            'table' => $table,
            'form' => $form->createView()
        ));
    }

    /**
     * Change disponibilite.
     *
     * @Route("/table_r/{id}/dispo", name="table_set_dispo")
     * @Method({"GET", "POST"})
     */
    public function setDisponible(Request $request, Table $table)
    {

        $club = new Club();
        $club = $table->getClub();

        $this->getDoctrine()->getRepository(Table::class)->setDisponibilite($table->getId(),'1');
        return $this->redirectToRoute('table_r', array('id' => $club->getId()));
    }

    /**
     * Change indisponible.
     *
     * @Route("/table_r/{id}/indispo", name="table_set_indispo")
     * @Method({"GET", "POST"})
     */
    public function setIndisponible(Request $request, Table $table)
    {
        $club = new Club();
        $club = $table->getClub();

        $this->getDoctrine()->getRepository(Table::class)->  setDisponibilite($table->getId(),'0');
        return $this->redirectToRoute('table_r', array('id' => $club->getId()));
    }

}
