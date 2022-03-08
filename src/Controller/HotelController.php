<?php

namespace App\Controller;



use App\Entity\Hebergement;
use App\Form\HotelType;
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
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class HotelController extends AbstractController
{

    //tejbed f liste mta3 hotels avec les images
    /**
     * @Route("/hotel", name="hotel_index")
     * @Method ("GET")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $hotels = $this->getDoctrine()->getRepository(Hebergement::class)->findWithImages('Hotel');
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $hotels, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('hotel/index.html.twig', array(
            'hotels' => $result,
        ));

    }


    //fonction ajouter hotel
    /**
     * @Route("/hotel_new", name="hotel_new")
     */
    public function newAction(Request $request) {
        $hotel = new Hebergement();
        $hotel->setType("Hotel");
        $form = $this->createForm('App\Form\HotelType', $hotel);
        $form->handleRequest($request);

        //li fel if ba3d ma nenzel ok
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush($hotel);
            return $this->redirectToRoute('hotel_index');
        }

        return $this->render('hotel/new_hotel.html.twig', array('hotel' => $hotel,'form' => $form->createView()));
    }



    //fonction de recherche t3aytlha ajax_search
    /**
     *
     * @Route("hotel_search", name="hotel_ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        //hetha chnowa ktebna fel html
        $requestString = $request->get('q');
        //li ktebneh fel html bch n3adouh lel fonction
        $hotels =  $em->getRepository(Hebergement::class)->findByString($requestString,"Hotel");
        //bch nraj3o e resultat sous forme de json
        return new Response(json_encode($hotels));
    }



    /**
     * Deletes a hotel entity.
     *
     * @Route("/hotel/{id}", name="hotel_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Hebergement $hotel)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($hotel);
        $em->flush($hotel);
        return $this->redirectToRoute('hotel_index');
    }


    /**
     * @Route("hotel/{id}/edit", name="hotel_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Hebergement $hotel)
    {
        $form = $this->createForm('App\Form\HotelType', $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('hotel_index', array('id' => $hotel->getId()));
        }

        return $this->render('hotel/edit_Hotel.html.twig', array(
            'hotel' => $hotel,
            'form' => $form->createView()
        ));
    }


    /**
     *
     * @Route("hotel/{id}/qr", name="create_qr_code_")
     */
    public function create_qr_code(Request $request, Hebergement $hotel)
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

        $label = Label::create($hotel->getName())
            ->setTextColor(new Color(255, 0, 0));
        $result = $writer->write($qrCode,null,$label);
        header('Content-Type: '.$result->getMimeType());
        echo $result->getString();
        $result->saveToFile(__DIR__.'/qrcode'.$hotel->getName().'.png');
        $dataUri = $result->getDataUri();

        return $this->redirectToRoute('hotel_index');
    }

    /**
     * @Route("qrcode_hotel/{id}", name="qrcode_hotel")

     */
    public function qrcodeAction(Request $request, Hebergement $hotel) {

        $data = "Name : " . $hotel->getName() . "; Description : " . $hotel->getDescription()
            . "; Address : " . $hotel->getAddress();

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
        $dataUri = $result->getDataUri();

        return $this->render('hotel/qrcode_hotel.html.twig', array('qr_code' => $result->getDataUri()));
    }


}
