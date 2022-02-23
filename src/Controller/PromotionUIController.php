<?php

namespace App\Controller;

use App\Entity\Promotion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PromotionUIController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/promotion/show", name="promotionShowUI")
     */
    public function showPromotionUI()
    {
        $repositrory = $this->getDoctrine()->getRepository(Promotion::class);
        $promotion = $repositrory->findAll();

        return $this->render('promotion_ui/indexFront.html.twig', [
            'promotions' => $promotion,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     * @Route ("/promotion/showDetails/{id}", name="promotionShowDetailsUI")
     */
    public function showPromotionDetailUI(Request $request, $id)
    {
        $repositrory = $this->getDoctrine()->getRepository(Promotion::class);
        $promotion = $repositrory->find($id);
        return $this->render('promotion_ui/showDetails.html.twig', [
            'promotion' => $promotion,
        ]);
    }

}
