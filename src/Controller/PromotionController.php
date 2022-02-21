<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionFormType;
use App\Repository\PromotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    /**
     * @Route("/promotion", name="promotion")
     */
    public function index(): Response
    {
        return $this->render('promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }

    /**
     * @Route("/promotionList", name="promotionList")
     */
    public function showPromotion()
    {
        $repositrory = $this->getDoctrine()->getRepository(Promotion::class);
        $promotion = $repositrory->findAll();

        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotion,
            ]);
    }
    /**
     * @Route("/addPromotion", name="addPromotion")
     */
    public function addPromotion(Request $request)
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionFormType::class, $promotion);
        $form->add("submit", SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $promotion = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();

            return $this->redirectToRoute('promotionList');
        }
        return $this->render('promotion/addPromotion.html.twig', [

            'form' => $form->createView()
        ]);
    }

    /**
     * @param $id
     * @return RedirectResponse
     * @Route ("/deleteP/{id}", name="deleteP")
     */
    public  function deletePromotion($id)
    {
        $promotion = $this->getDoctrine()->getRepository(Promotion::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        return $this->redirectToRoute('promotionList');
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Response
     * @Route ("/updateP/{id}", name="updateP")
     */
    public function updateP(Request $request, $id)
    {
        $promotion = $this->getDoctrine()->getRepository(Promotion::class)->find($id);
        $form = $this->createForm(PromotionFormType::class, $promotion);
        $form->add("submit", SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("promotionList");
        }
        return $this->render('promotion/addPromotion.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @param $type
     * @param PromotionRepository $repo
     * @Route ("/searchPromotion", name="searchPromotion")
     * @return Response
     */
    public function searchPromotion(PromotionRepository $repo, Request $request)
    {
        $data = $request->get('search');
        $promotions = $repo->findBy(['Type' => $data]);

        return $this->render("promotion/index.html.twig",[
           "promotions" => $promotions
        ]);
    }
}
