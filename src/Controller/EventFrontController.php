<?php

namespace App\Controller;

use App\Entity\Lieu;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\EventRepository;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EventType;
use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EventFrontController extends AbstractController
{
    /**
     * @Route("/event/front", name="event_front")
     */
    public function index(): Response
    {
        return $this->render('event_front/index.html.twig', [
            'controller_name' => 'EventFrontController',
        ]);
    }

    /**
     * @Route("/eventListFront", name="eventListFront")
     */
    public function showEvent()
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $event = $repository->findAll();

        return $this->render('event_front/index.html.twig', [
            'events' => $event,
        ]);
    }

    /**
     * @Route("/showEventF/{id}", name="showEventF")
     */
    public function showEventlieu($id)
    {
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
        $idl=$event->getLieuid();
        $lieu = $this->getDoctrine()->getRepository(lieu::class)->find($idl);
        return $this->render('event_front/showSingle.html.twig', array("event" => $event,"lieu"=>$lieu));
    }

    /**
     * @param $nom
     * @param EventRepository $repo
     * @Route ("/searchEventFront", name="searchEventfront")
     * @return Response
     */
    public function searchEvent(EventRepository $repo, Request $request)
    {
        $data = $request->get('search');
        $event = $repo->findBy(['nom' => $data]);

        return $this->render("event_front/index.html.twig",[
            "events" => $event,
        ]);
    }

    /**
     * @Route("/listEventsByDate", name="listEventsByDate")
     */
    public function listeventsByDate(EventRepository $repo)
    {

        $event = $repo->orderByDate();

        //orderByDate();
        return $this->render('event_front/index.html.twig', [
            'events' => $event,
        ]);
    }
}
