<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionFormType;
use App\Repository\PromotionRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart\PieSlice;

/**
 * @Route("/promotion")
 */
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
            'promotions' => $promotion, 'found' => true
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

            $this->get('session')->getFlashBag()->add('notice','Promotion est ajouté');
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
        return $this->render('promotion/updatePromotion.html.twig',[
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
        $promotions = $repo->findBy(['title' => $data]);

        if($promotions == null){
            return $this->render("promotion/index.html.twig",[
                "promotions" => $promotions,"found" => false
            ]);
        }
        return $this->render("promotion/index.html.twig",[
           "promotions" => $promotions,"found" => true
        ]);
    }

    /**
     * @param PromotionRepository $repo
     * @param Request $request
     * @return Response
     * @Route("/triIDC", name="triIDC")
     */
    public function triIDC(PromotionRepository $repo, Request $request)
    {
        $promotions = $repo->triByIdCroissant();
        return $this->render("promotion/index.html.twig",[
            "promotions" => $promotions, 'found' => true
        ]);

    }

    /**
     * @param PromotionRepository $repo
     * @param Request $request
     * @return Response
     * @Route("/triIDD", name="triIDD")
     */
    public function triIDD(PromotionRepository  $repo, Request $request)
    {
        $promotions = $repo->triByIdDecroissant();
        return $this->render("promotion/index.html.twig",[
            "promotions" => $promotions, 'found' => true
        ]);
    }

    /*public function filtre(PromotionRepository $repo, Request $request, $type)
    {
        $promotion = $repo->triByType($type);
        return $this->
    }*/
    /**
     * @param Request $request
     * @param NormalizerInterface $normalizer
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route("/AllPromotions", name="AllPromotions")
     */
    public function AllPromotionsJson(Request $request, NormalizerInterface $normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Promotion::class);
        $promotions = $repository->findAll();
        $jsonContent = $normalizer->normalize($promotions, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @param Request $request
     * @param NormalizerInterface $normalizer
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route ("/addPromotionJson/new", name="addPromotionJson")
     */
    public function addPromotionJson(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $promotion = new Promotion();
        $promotion->setDescription($request->get('description'));
        $promotion->setTitle($request->get('title'));
        $promotion->setScoreMin($request->get('scoreMin'));
        $promotion->setType($request->get('Type'));

        $em->persist($promotion);
        $em->flush();
        $jsonContent = $normalizer->normalize($promotion, 'json', ['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/stats", name="statsPromo")
     */
    public function stats()
    {
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [
                ['Remise', 'Cadeau'],
                ['', ],
                ['', ]
            ]
        );
        $pieChart->getOptions()->getLegend()->setPosition('none');
        $pieChart->getOptions()->setPieSliceText('none');
        $pieChart->getOptions()->setPieStartAngle(135);

        $pieSlice1 = new PieSlice();
        $pieSlice1->setColor('yellow');
        $pieSlice2 = new PieSlice();
        $pieSlice2->setColor('transparent');
        $pieChart->getOptions()->setSlices([$pieSlice1, $pieSlice2]);

        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTooltip()->setTrigger('none');

        return $this->render('promotion/stat.html.twig', array('piechart' => $pieChart));
    }
}
