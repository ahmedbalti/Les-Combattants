<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Entity\Utilisateur;
use App\Entity\PromotionAffecte;
use App\Form\PromotionAffecteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionAffecteController extends AbstractController
{
    /**
     * @Route("/promotion/affecte", name="promotion_affecte")
     */
    public function index(): Response
    {
        return $this->render('promotion_affecte/index.html.twig', [
            'controller_name' => 'PromotionAffecteController',
        ]);
    }

    /**
     * @Route ("/affectePromotion", name="affecterPromotion")
     */
    public function affectPromotion(Request $request)
    {
        $affectation = new PromotionAffecte();
        $form = $this->createForm(PromotionAffecteType::class);
        $form->add("submit", SubmitType::class );
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $affectation = $form->getData();

            //$repo = $this->getDoctrine()->getRepository(Promotion::class)->find($form["idUser"]->getData());
            //$repo1 = $this->getDoctrine()->getRepository(Utilisateur::class)->find($form["idPromo"]->getData());

            //$affectation->setIdUser($repo);
            //$affectation->setIdPromo($repo1);
            //$affectation->setDelai($form["delai"]->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($affectation);
            $em->flush();

            return $this->redirectToRoute('showAffected');
        }
    return $this->render('promotion_affecte/affectePromotion.html.twig', [

            'form' => $form->createView()
        ]);
    }

    /**
     * @return Response
     * @Route ("/affectePromotionList", name="showAffected")
     */
    public function showAffectedPromotions(): Response
    {
        $repositrory = $this->getDoctrine()->getRepository(PromotionAffecte::class);
        $promotionAff = $repositrory->findAll();

        return $this->render('promotion_affecte/index.html.twig', [
            'promotionAff' => $promotionAff,
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/deleteAffected/{id}", name="deleteAffected")
     */
    public function deleteAffectePromotion($id)
    {
        $promotion = $this->getDoctrine()->getRepository(PromotionAffecte::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        return $this->redirectToRoute('showAffected');
    }
}
