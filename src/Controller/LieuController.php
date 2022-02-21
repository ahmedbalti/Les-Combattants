<?php

namespace App\Controller;

use App\Entity\Lieu;
use App\Form\FormLieuType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuController extends AbstractController
{
    /**
     * @Route("/lieu", name="lieu")
     */
    public function index(): Response
    {
        return $this->render('lieu/index.html.twig', [
            'controller_name' => 'LieuController',
        ]);
    }

    /**
     * @Route("/LieuList", name="LieuList")
     */
    public function showLieu()
    {
        $repository = $this->getDoctrine()->getRepository(Lieu::class);
        $Lieu = $repository->findAll();

        return $this->render('Lieu/index.html.twig', [
            'Lieux' => $Lieu,
        ]);
    }

    /**
     * @Route("/Lieunew", name="new_Lieu")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
        $Lieu = new Lieu();
        $form = $this->createFormBuilder($Lieu)
            ->add('save', SubmitType::class, array(
                    'label' => 'Créer')
            )->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Lieu);
            $entityManager->flush();

            return $this->redirectToRoute('LieuList');
        }
        return $this->render('Lieu/new.html.twig',['form' => $form->createView()]);
    }

    /**
     * @Route("/deletel/{id}", name="deleteLieu")
     */
    public function deleteLieu($id)
    {
        var_dump($id);
        $Lieu = $this->getDoctrine()->getRepository(Lieu::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($Lieu);
        $em->flush();
        return $this->redirectToRoute("LieuList");
    }


    /**
     * @Route("/updatel/{id}", name="updateLieu")
     */
    public function updateLieu(Request $request, $id)
    {
        $Lieu = $this->getDoctrine()->getRepository(Lieu::class)->find($id);
        $form = $this->createForm(FormLieuType::class, $Lieu);
        $form->add("Modifier", SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('LieuList');
        }
        return $this->render("Lieu/update.html.twig", array('form' => $form->createView()));
    }
}
