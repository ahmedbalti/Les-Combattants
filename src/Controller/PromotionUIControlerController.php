<?php

namespace App\Controller;

use App\Entity\Promotion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionUIControlerController extends AbstractController
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
     * @return Response
     * @Route ("/promotion/showDetails", name="promotionShowDetailsUI")
     */
    public function showPromotionDetailUI()
    {
        return $this->render('promotion_ui/showDetails.html.twig', [
            'promotions' => 'hello',
        ]);
    }
}
