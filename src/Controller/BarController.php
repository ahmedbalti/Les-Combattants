<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Form\barType;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Club;

class BarController extends AbstractController
{
    /**
     * @Route("/bar", name="bar_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator,Request $request): Response
    {

        $em = $this->getDoctrine()->getManager();

        $bars = $this->getDoctrine()->getRepository(Club::class)->findWithImages('Bar');
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle

        $ratings = array();
        $rating_count = array();

        foreach ($bars as $bar) {
            $total_rating = $this->getDoctrine()->getRepository(Rating::class)->calculTotalRating($bar["id"]);
            $nbr_rating = $this->getDoctrine()->getRepository(Rating::class)->CalculNbrRating($bar["id"]);
            $rating_count[] = $nbr_rating;
            if($nbr_rating != 0){
                $rating = $total_rating/$nbr_rating;
                $ratings[] = round($rating);
            } else $ratings[] = 0;
        }
        $result = $paginator->paginate(
            $bars, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('bar/index.html.twig', array(
            'bars' => $result,
            'ratings' => $ratings,
            'rating_count' => $rating_count
        ));
    }

    //fonction ajouter bar
    /**
     * @Route("/bar_new", name="bar_new")
     */
    public function newAction(Request $request) {
        $bar = new Club();
        $bar->setType("Bar");
        $form = $this->createForm('App\Form\barType', $bar);
        $form->handleRequest($request);

        //li fel if ba3d ma nenzel ok
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bar);
            $em->flush($bar);
            return $this->redirectToRoute('bar_index');
        }

        return $this->render('bar/new_club.html.twig', array('bar' => $bar,'form' => $form->createView()));
    }
//fonction de recherche t3aytlha ajax_search
    /**
     * Creates a new ActionItem entity.
     *
     * @Route("bar_search", name="bar_ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //hetha chnowa ktebna fel html
        $requestString = $request->get('q');
        //li ktebneh fel html bch n3adouh lel fonction
        $bars =  $em->getRepository(Club::class)->findByString($requestString,"bar");
        //bch nraj3o e resultat sous forme de json
        return new Response(json_encode($bars));
    }

    /**
     * Deletes a bar entity.
     *
     * @Route("/bar/{id}", name="bar_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Club $bar)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($bar);
        $em->flush($bar);
        return $this->redirectToRoute('bar_index');
    }


    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("bar/{id}/edit", name="bar_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Club $bar)
    {
        $form = $this->createForm('App\Form\barType', $bar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('bar_index', array('id' => $bar->getId()));
        }

        return $this->render('bar/edit_club.html.twig', array(
            'bar' => $bar,
            'form' => $form->createView()
        ));
    }

    /**
     *
     * @Route("bar/{id}/qr", name="create_qr_code")
     */
    public function create_qr_code(Request $request, Club $bar)
    {
        $writer = new PngWriter();
        $qrCode = QrCode::create('1')
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $label = Label::create($bar->getNom())
            ->setTextColor(new Color(255, 0, 0));
        $result = $writer->write($qrCode,null,$label);
        header('Content-Type: '.$result->getMimeType());
        echo $result->getString();
        $result->saveToFile(__DIR__.'/qrcode'.$bar->getNom().'.png');
        $dataUri = $result->getDataUri();

        return $this->redirectToRoute('bar_index');
    }

    /**
     * @Route("qrcode_bar/{id}", name="qrcode_bar")

     */
    public function qrcodeAction(Request $request, Club $bar) {

        $data = "Nom : " . $bar->getNom() . "; Description : " . $bar->getDescription()
            . "; Lieu : " . $bar->getLieu();

        $writer = new PngWriter();
        $qrCode = QrCode::create($data)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $result = $writer->write($qrCode,null,null);
        header('Content-Type: '.$result->getMimeType());
        //$result->saveToFile(__DIR__.'/qrcode'.$bar->getNom().'.png');
        $dataUri = $result->getDataUri();

        return $this->render('bar/qrcode_bar.html.twig', array('qr_code' => $result->getDataUri()));
    }

}
