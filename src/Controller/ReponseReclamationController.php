<?php

namespace App\Controller;

use App\Entity\ReponseReclamation;
use App\Form\ReponseReclamationType;
use App\Repository\ReponseReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class ReponseReclamationController extends AbstractController
{
    /**
     * @Route("/reponse/reclamation", name="reponse_reclamation")
     */
    public function index(): Response
    {
        return $this->render('reponse_reclamation/index.html.twig', [
            'controller_name' => 'ReponseReclamationController',
        ]);
    }

    /**
     * @Route("/readR", name="read")
     */
    public function read(): Response
    {
        $list = $this->getDoctrine()
            ->getRepository(ReponseReclamation::class)// on a récupéré le repository de l 'entity classroom
            ->findAll();// find all correspond à select *
        return $this->render('reponse_reclamation/read.html.twig', [
            'listeTableau' => $list,
        ]);
    }

    /**
     * @Route("/deleteR/{id}", name="deleteR")
     */
    public function delete($id)
    {
        $obj = $this->getDoctrine()
            ->getRepository(ReponseReclamation::class) //get doctrine : faire appel au doctrine
            ->find($id);// récupérer l'objet dont le id est donnée en parametre par la méthode find($id)
        $em = $this->getDoctrine()->getManager();// l'appel à l'entity manager
        $em->remove($obj);
        $em->flush();
        return $this->redirectToRoute('read');
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request)
    {
        $ReponseRec = new ReponseReclamation();
        $form = $this->createForm(ReponseReclamationType::class, $ReponseRec);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);//traite la requete reçue
        if ($form->isSubmitted() && ($form->isValid())) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ReponseRec);//correspond a insert into
            $em->flush();//on doit rafraichir la base de données
            return $this->redirectToRoute('read');
        } else {
            return $this->render('reponse_reclamation/create.html.twig', ['f' => $form->createView()]);
        }

    }

    /**
     * @Route ("/updateR/{id}",name="updateR")
     */

    function update(ReponseReclamationRepository $repository, $id, Request $request)
    {
        $ReponseRec = $repository->find($id);
        $form = $this->createForm(ReponseReclamationType::class, $ReponseRec);
        $form->add('update', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("read");
        }
        return $this->render('reponse_reclamation/update.html.twig', ['f' => $form->createView()]);

    }


}


//
//    /**
//     * @Route("/update/{id}",name="update")
//     */
//
//    function update(ReponseReclamationRepository $repository,$id,Request $request)
//    {
//        $ReponseRec = $repository->find($id);
//        $form = $this->createForm(ReponseReclamationType::class, $ReponseRec);
//        $form->add('update', SubmitType::class);
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->flush();
//            return $this->redirectToRoute("read");
//        }
//        return $this->render('reponse_reclamation/update.html.twig', ['f' => $form->createView()]);
//
//    }



