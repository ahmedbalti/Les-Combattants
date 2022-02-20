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

class RestaurentController extends AbstractController
{
    /**
     * @Route("/restaurent", name="restaurent_index")
     * @Method("GET")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager();

        $restaurents = $this->getDoctrine()->getRepository(Club::class)->findWithImages('Restaurent');
        /*return $this->render('restaurent/index.html.twig', [
            'controller_name' => 'RestaurentController',
        ]);*/
        return $this->render('restaurent/index.html.twig', array(
            'restaurents' => $restaurents,
        ));
    }


    /**
     * Deletes a restaurent entity.
     *
     * @Route("/{id}", name="restaurent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Club $restaurent)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($restaurent);
            $em->flush($restaurent);
        return $this->redirectToRoute('restaurent_index');
    }


    /**
     * @Route("/restaurent/new", name="restaurent_new")
     */
    public function newAction(Request $request) {
        $restaurent = new Club();
        $form = $this->createForm('App\Form\restaurentType', $restaurent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($restaurent);
            $em->flush($restaurent);

            return $this->redirectToRoute('restaurent_index');
        }

        return $this->render('restaurent/new_club.html.twig', array('restaurent' => $restaurent,'form' => $form->createView()));

    }

    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("restaurent/{id}/edit", name="restaurent_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Club $restaurent)
    {
        $form = $this->createForm('App\Form\restaurentType', $restaurent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('restaurent_index', array('id' => $restaurent->getId()));
        }

        return $this->render('restaurent/edit_club.html.twig', array(
            'restaurent' => $restaurent,
            'form' => $form->createView()
        ));
    }

    /**
     * Creates a new ActionItem entity.
     *
     * @Route("restaurent/search", name="ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $restaurents =  $em->getRepository(Club::class)->findByString($requestString,"Restaurent");
        return new Response(json_encode($restaurents));
    }



}
