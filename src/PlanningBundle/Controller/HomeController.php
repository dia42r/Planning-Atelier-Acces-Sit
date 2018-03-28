<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Customer\SaleDocumentLine;
use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\ActorCompetence;
use PlanningBundle\Entity\Main\Competence;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\Customer\SaleDocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="premiere-page")
     */
    public function indexAction()
    {
        return $this->render('pages/page-accueil.html.twig');
    }

    /**
     * @Route("/consultation", name="consultation-planning")
     */
    public function consultationAction()
    {
        return $this->render('pages/consulter-le-planning.html.twig');
    }

    /**
     * @Route("/listes", name="listes-commandes")
     */
    public function listeCommandes(Request $request)
    {
        $commandes = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->findBy([],['documentNumber' => 'desc']);
//            ->findSafeDoc();

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $commandes,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('pages/listes-des-commandes.html.twig', [
            'commandes' => $commandes,
            "pagination"=> $pagination
        ]);
    }

    /**
     * @Route("/planification", name="planifier-une-commande")
     */
    public function planificationAction(Request $request)
    {
        $commandes = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
//            ->findSafeDoc();
            ->findBy([],['documentNumber' => 'desc']);
//        dump($commandes);
//        die;
        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $commandes,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('pages/planifier-une-commande.html.twig', [
            'commandes' => $commandes,
            "pagination"=> $pagination
        ]);
    }


    public function searchAction(Request $request)
    {

    }

    /**
     * @Route("/details/{id}", name="details-commandes")
     */
    public function detailCommandes($id)
    {
        $saledocument = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->find($id);

        $details = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findDoc($id);

        return $this->render('pages/details-commandes.html.twig', [
            'details' => $details,
            'saledocument' => $saledocument
//            'det' => $det
        ]);
    }

    /**
     * @Route("/planification_produits/{id}", name="planification-produits")
     */
    public function planificationProduits($id)
    {
        $saledocumentline = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findItem($id);

        $competences = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->findAll();

        $actors = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findAll();

        dump($actors);
        die;
        return $this->render('pages/planification-produit.html.twig', [
            'saledocumentline'     => $saledocumentline[0],
            'competences'          => $competences,
        ]);
    }

    /**
     * @Route("/consultation-par-taches", name="consultation-taches")
     */
    public function consultationParTaches()
    {
        $tasks = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->findAll();

        return $this->render('pages/consulter-planning-par-taches.html.twig', [
            "tasks" => $tasks
        ]);

    }

    /**
     * @Route("/consultation-par-acteurs", name="consultation-acteurs")
     */
    public function consultationParActeurs()
    {
        $actors = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findAll();

        return $this->render('pages/consulter-planning-par-acteurs.html.twig', [
                "actors" => $actors
            ]);
    }

    /**
     * @Route("/actor", name="get_actor")
     */
    public function getActorAction(Request $request)
    {
        $hour    = $request->get('time');
        $skillId = $request->get('skill');
        $Allactors = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findAll();
        dump($Allactors);
        dump($hour);
        dump($skillId);
        die;
    }
}