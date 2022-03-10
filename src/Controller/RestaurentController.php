<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Form\restaurentType;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
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
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;

class RestaurentController extends AbstractController
{
    //tejbed f liste mta3 restaurents avec les images
    /**
     * @Route("/restaurent", name="restaurent_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator,Request $request): Response
    {
        $restaurents = $this->getDoctrine()->getRepository(Club::class)->findWithImages('Restaurent');
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle

        $ratings = array();
        $rating_count = array();

        foreach ($restaurents as $restaurent) {
            $total_rating = $this->getDoctrine()->getRepository(Rating::class)->calculTotalRating($restaurent["id"]);
            $nbr_rating = $this->getDoctrine()->getRepository(Rating::class)->CalculNbrRating($restaurent["id"]);
            $rating_count[] = $nbr_rating;
            if($nbr_rating != 0){
                $rating = $total_rating/$nbr_rating;
                $ratings[] = round($rating);
            } else $ratings[] = 0;
        }

        $result = $paginator->paginate(
            $restaurents, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('restaurent/index.html.twig', array(
            'restaurents' => $result,
            'ratings' => $ratings,
            'rating_count' => $rating_count
        ));
    }

    //fonction ajouter restaurent
    /**
     * @Route("restaurent_new", name="restaurent_new")

     */
    public function newAction(Request $request) {
        $restaurent = new Club();
        $restaurent->setType("Restaurent");
        $form = $this->createForm('App\Form\restaurentType', $restaurent);
        $form->handleRequest($request);

        //li fel if ba3d ma nenzel ok
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($restaurent);
            $em->flush($restaurent);
            return $this->redirectToRoute('restaurent_index');
        }

        return $this->render('restaurent/new_club.html.twig', array('restaurent' => $restaurent,'form' => $form->createView()));
    }

    //fonction de recherche t3aytlha ajax_search
    /**
     * Creates a new ActionItem entity.
     *
     * @Route("restaurent_search", name="resto_ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //hetha chnowa ktebna fel html
        $requestString = $request->get('q');
        //li ktebneh fel html bch n3adouh lel fonction
        $restaurents =  $em->getRepository(Club::class)->findByString($requestString,"Restaurent");
        //bch nraj3o e resultat sous forme de json
        return new Response(json_encode($restaurents));
    }



    /**
     * Deletes a restaurent entity.
     *
     * @Route("/restaurent/{id}", name="restaurent_delete")
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
     *
     * @Route("restaurent/{id}/qr", name="create_qr_code")
     */
    public function create_qr_code(Request $request, Club $restaurent)
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

        $label = Label::create($restaurent->getNom())
            ->setTextColor(new Color(255, 0, 0));
        $result = $writer->write($qrCode,null,$label);
        header('Content-Type: '.$result->getMimeType());
        echo $result->getString();
        $result->saveToFile(__DIR__.'/qrcode'.$restaurent->getNom().'.png');
        $dataUri = $result->getDataUri();

        return $this->redirectToRoute('restaurent_index');
    }

    /**
     * @Route("qrcode_restaurent/{id}", name="qrcode_restaurent")

     */
    public function qrcodeAction(Request $request, Club $restaurent) {

        $data = "Nom : " . $restaurent->getNom() . "; Description : " . $restaurent->getDescription()
            . "; Lieu : " . $restaurent->getLieu();

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
        //$result->saveToFile(__DIR__.'/qrcode'.$restaurent->getNom().'.png');
        $dataUri = $result->getDataUri();

        return $this->render('restaurent/qrcode_club.html.twig', array('qr_code' => $result->getDataUri()));
    }

}
