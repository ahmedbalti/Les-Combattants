<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Entity\Room;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\HebergementRepository;

class RoomListController extends AbstractController
{
    /**
     * @Route("/roomlist", name="roomlist_index")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $rooms = $this->getDoctrine()->getRepository(Room::class)->findWithImages(1);
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate($rooms,
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('room_list/index.html.twig', array(

            'rooms' => $result,
        ));
    }
}
