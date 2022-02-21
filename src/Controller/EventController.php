<?php

namespace App\Controller;

use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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

use App\Entity\Event;
use App\Entity\Lieu;

//use http\Env\Request;


class EventController extends AbstractController
{
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
    public function new(Request $request) {
        $event = new event();
        $form = $this->createFormBuilder($event)
            ->add('save', SubmitType::class, array(
                    'label' => 'Créer')
            )->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('eventList');
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

}
