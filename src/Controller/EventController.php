<?php

namespace App\Controller;

use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityManagerInterface;
//use vendor\messagebird\php-rest-api\autoload.php;
use App\Entity\Event;
use App\Entity\Lieu;

use Dompdf\Dompdf;
use Dompdf\Options;

//use http\Env\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use TheSeer\Tokenizer\Exception;


class EventController extends AbstractController
{
    /**
     * @Route("/Allevents", name="events")
     */
    public function AllEvent(NormalizerInterface $normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $Events = $repository->findAll();
        $jsonContent = $normalizer->normalize($Events, 'json', ['events' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/event", name="event")
     */
    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    /**
     * @Route("/eventList", name="eventList")
     */
    public function showEvent()
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $event = $repository->findAll();

        return $this->render('event/index.html.twig', [
            'events' => $event,
        ]);
    }

    /**
     * @Route("/eventnew", name="new_event")
     * Method({"GET", "POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer) {
        $event = new event();
        $form = $this->createFormBuilder($event)
            ->add('nom', TextType::class)
            ->add('Date', \Symfony\Component\Form\Extension\Core\Type\DateType::class, [
                'help' => 'Entrez la date de votre evenement',
            ])
            ->add('type', ChoiceType::class, [
                    'choices'  => [
                        'Party' => "Party",
                        'rondonné' => "rondonne",
                        'autre' => "autre",
                    ],]
            )
            ->add('Description', TextareaType::class)
            ->add('lieuid', NumberType::class)
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, array(
                    'label' => 'Créer')
            )->getForm();



        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $event = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();
            print($event->getEmail());
            $message = (new \Swift_Message( 'You Got Mail!'))
                ->setFrom('tennisclubtunis1@gmail.com')

                ->setTo($event->getEmail())
                ->setBody(

                    'Votre evenement a eté ajouté'
                )
            ;
            $mailer->send($message);
            $this->addFlash('success', 'It sent!');



            $messageBird = new \MessageBird\Client('io3oZIU0qGndJ62LrP2y6bVD9'); //test
            //$messageBird = new \MessageBird\Client('wDr7yfsweiOmxPuXPGJYxshqU'); //live
            $message =  new \MessageBird\Objects\Message();
            try{

                $message->originator = '+21628172305';
                $message->recipients = '+21628172305';
                $message->body = 'evenement ajouté par sms';
                $response = $messageBird->messages->create($message);


               // print_r($response);
            }
            catch(Exception $e) {echo $e;}




            //return $this->redirectToRoute('eventList');
        }
        return $this->render('event/new.html.twig',['form' => $form->createView()]);
    }

    /**
     * @Route("/delete/{id}", name="deleteEvent")
     */
    public function deleteEvent($id)
    {
        var_dump($id);
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute("eventList");
    }


    /**
     * @Route("/update/{id}", name="updateEvent")
     */
    public function updateEvent(Request $request, $id)
    {
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
        $form = $this->createForm(EventType::class, $event);
        $form->add("Modifier", SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('eventList');
        }
        return $this->render("Event/update.html.twig", array('form' => $form->createView()));
    }

    /**
     * @Route("/show/{id}", name="showEventlieu")
     */
    public function showEventlieu($id)
    {
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
        $idl=$event->getLieuid();
        $lieu = $this->getDoctrine()->getRepository(lieu::class)->find($idl);
        return $this->render('event/eventlieu.html.twig', array("event" => $event,"lieu"=>$lieu));
    }

    /**
     * @param $nom
     * @param EventRepository $repo
     * @Route ("/searchEvent", name="searchEvent")
     * @return Response
     */
    public function searchEvent(EventRepository $repo, Request $request)
    {
        $data = $request->get('search');
        $events = $repo->findBy(['nom' => $data]);

        return $this->render("event/index.html.twig",[
            "events" => $events
        ]);
    }

    /**
     * @Route("/Pdf", name="pdf")
     */

    public function GeneratePdf()
    {

        $repository = $this->getDoctrine()->getRepository(Event::class);
        $event = $repository->findAll();

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('Event/mypdf.html.twig', [
            'events' => $event,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }

}
