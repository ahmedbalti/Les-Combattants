<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Entity\Table;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Room;
use App\Entity\Club;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\ClubRepository;

class TableListController extends AbstractController
{
    /**
     * @Route("/{id}/tablelist", name="tablelist_index")
     */
    public function index(PaginatorInterface $paginator, Request $request,Club $restaurent): Response
    {
        $tables = $this->getDoctrine()->getRepository(Table::class)->findWithImages($restaurent->getId());
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate($tables,
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('table_list/index.html.twig', array(

            'tables' => $result,
        ));
    }
}
