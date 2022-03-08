<?php

namespace App\Controller;

use App\Form\HomeType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hebergement;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home_index")
     * @Method("GET")
     */
    public function index(PaginatorInterface $paginator,Request $request): Response
    {

        $em = $this->getDoctrine()->getManager();

        $homes = $this->getDoctrine()->getRepository(Hebergement::class)->findWithImages('Home');
        //pagination https://github.com/KnpLabs/KnpPaginatorBundle
        $result = $paginator->paginate(
            $homes, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('home/index.html.twig', array(
            'homes' => $result,
        ));
    }

    //fonction ajouter home
    /**
     * @Route("/home_new", name="home_new")
     */
    public function newAction(Request $request) {
        $home = new Hebergement();
        $home->setType("Home");
        $form = $this->createForm('App\Form\HomeType', $home);
        $form->handleRequest($request);

        //li fel if ba3d ma nenzel ok
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($home);
            $em->flush($home);
            return $this->redirectToRoute('home_index');
        }

        return $this->render('home/new_home.html.twig', array('home' => $home,'form' => $form->createView()));
    }
//fonction de recherche t3aytlha ajax_search
    /**
     * Creates a new ActionItem entity.
     *
     * @Route("home_search", name="home_ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //hetha chnowa ktebna fel html
        $requestString = $request->get('q');
        //li ktebneh fel html bch n3adouh lel fonction
        $homes =  $em->getRepository(Hebergement::class)->findByString($requestString,"home");
        //bch nraj3o e resultat sous forme de json
        return new Response(json_encode($homes));
    }

    /**
     * Deletes a home entity.
     *
     * @Route("/home/{id}", name="home_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Hebergement $home): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($home);
        $em->flush($home);
        return $this->redirectToRoute('home_index');
    }


    /**
     * Displays a form to edit an existing entity.
     *
     * @Route("home/{id}/edit", name="home_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Hebergement $home)
    {
        $form = $this->createForm('App\Form\HomeType', $home);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('home_index', array('id' => $home->getId()));
        }

        return $this->render('home/edit_home.html.twig', array(
            'home' => $home,
            'form' => $form->createView()
        ));
    }

}
