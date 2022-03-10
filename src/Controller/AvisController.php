<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="avis")
     */
    public function index(): Response
    {
        return $this->render('avis/index.html.twig', [
            'controller_name' => 'AvisController',
        ]);
    }

    /**
     * @Route("/read", name="readR")
     */
    public function readR(): Response
    {
        $list = $this->getDoctrine()
            ->getRepository(Avis::class)// on a récupéré le repository de l 'entity classroom
            ->findAll();// find all correspond à select *
        return $this->render('avis/read.html.twig', [
            'listeTableau' => $list,
        ]);
    }


    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete($id)
    {
        $obj = $this->getDoctrine()
            ->getRepository(Avis::class) //get doctrine : faire appel au doctrine
            ->find($id);// récupérer l'objet dont le id est donnée en parametre par la méthode find($id)
        $em = $this->getDoctrine()->getManager();// l'appel à l'entity manager
        $em->remove($obj);
        $em->flush();
        return $this->redirectToRoute('readR');
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function create(Request $request)
    {
        $av = new Avis();
        $form = $this->createForm(AvisType::class, $av);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);//traite la requete reçue
        if ($form->isSubmitted() && ($form->isValid())) {
            $av = $form->getData();
            $date=date('m-d-y h:i:s a',time());
            $av->setDate($date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($av);//correspond a insert into
            $em->flush();//on doit rafraichir la base de données
            return $this->redirectToRoute('readR');
        } else {
            return $this->render('avis/blog.html.twig', ['f' => $form->createView()]);
        }

    }
    /**
     * @Route ("/update/{id}",name="updateR")
     */

    function update(AvisRepository $repository, $id, Request $request)
    {
        $av = $repository->find($id);
        $form = $this->createForm(AvisType::class, $av);
        $form->add('update', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("readR");
        }
        return $this->render('avis/update.html.twig', ['f' => $form->createView()]);

    }



}
