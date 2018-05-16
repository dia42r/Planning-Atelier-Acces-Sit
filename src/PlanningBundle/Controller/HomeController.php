<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Customer\SaleDocumentLine;
use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\Competence;
use PlanningBundle\Entity\Main\Planification;
use PlanningBundle\Entity\Main\SousPlanification;
use PlanningBundle\Entity\Main\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\Customer\SaleDocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/search", name="search_result")
     * @Method({"GET", "POST"})
     */
    public function searchAction(Request $request)
    {
//        $search = null;
        $form = $this->createFormBuilder(null)
            ->add('Rechercher', TextType::class, ['constraints' => new Length(['min' => 3]), 'attr' => ['placeholder' => 'Rechercher une CAT']])
            ->add('send', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $form['Rechercher']->getData();
            return $this->redirectToRoute('search_result');
        }

        return $this->render('partials/_searchbar.html.twig', [
            'form'   =>   $form->createView()
        ]);
    }


    /**
     * @Route("/listes", name="listes-commandes")
     */
    public function listeCommandesAction(Request $request)
    {
        $form = $this->createFormBuilder(null)
            ->add('Rechercher', TextType::class, ['constraints' => new Length(['min' => 3]), 'attr' => ['placeholder' => 'Rechercher une CAT']])
            ->add('send', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();

        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {

            $form['Rechercher']->getData();
            return $this->redirectToRoute('search_result');
        }

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
            "pagination"=> $pagination,
            'form'      => $form
        ]);
    }

    /**
     * @Route("/planification", name="planifier-une-commande")
     */
    public function planificationAction(Request $request)
    {
        $log = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        $commandes = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->findBy([],['documentNumber' => 'desc']);

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $commandes,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('pages/planifier-une-commande.html.twig', [
            'commandes' => $commandes,
            'pagination'=> $pagination,
            'log'       => $log
        ]);
    }




    /**
     * @Route("/details/{id}", name="details-commandes")
     */
    public function detailCommandes($id)
    {
        $saledocument = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->findSaleDoc($id);

        $details = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findDoc($id);

//        $planif = $this->getDoctrine()
//            ->getRepository(Planification::class)
//            ->findAll();

        return $this->render('pages/details-commandes.html.twig', [
            'details'      => $details,
            'saledocument' => $saledocument,
//            'planif'       => $planif
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
     * @Route("/saisi-des-temps", name="saisis-temps")
     */
    public function saisisTemps(Request $request)
    {
        $time = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->findBy([], ['documentNumber' => 'desc']);

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $time,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('pages/saisi-des-temps-et-recap.html.twig',[
            'time'       => $time,
            'pagination' => $pagination
        ]);

    }

    /**
     * @Route("/saisis-des-temps/{id}", name="saisie-temps-detail")
     */
    public function saisieTempsDetails($id)
    {
        $art = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->find($id);

        $details = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findDoc($id);

        return $this->render('pages/saisi-temps-details.html.twig', [
            'details' => $details,
            'art' => $art
        ]);
    }


    /**
     * @Route("/saisie-des-temps-articles/{id}", name="saisie-temps-articles")
     */
    public function saisiTempsArticles($id)
    {
        $saledocumentline = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findItem($id);

        return $this->render('pages/saisie-des-temps-par-articles.html.twig', [
            'saledocumentline'     => $saledocumentline[0],
        ]);
    }


    /**
     * @Route("/planaction", name="set_plannification")
     */
    public function setPlanAction(Request $request)
    {
        $em            = $this->container->get('doctrine.orm.entity_manager');
        $saleDocLineid = $request->get('saleDocLine');
        $saleDocLine   = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->find($saleDocLineid);


        $planif        = $em->getRepository(Planification::class)
            ->findBy(['saleDocumentLine' => $saleDocLineid ]);

        if( !$planif ) {

            $planif    = new Planification();
            $planif->setSaleDocumentLine($saleDocLine);
            $em->persist($planif);
            $em->flush();

            $planif    = $em->getRepository(Planification::class)
                ->find($planif->getId());
        }
        else {
            $planif = $planif[0];
        }
//        dump($planif);
//        die;

//        $end = $this->getDoctrine()
//            ->getRepository(Planification::class)
//            ->findAll();
//
        $serializer = $this->container->get('jms_serializer');
        $time        = $request->get('time');

        $time = new \DateTime($time);
//           $time = $time->format("H:i");
        $skillId     = $request->get('skill');
        $skill       = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->find($skillId);
        $actorid       = $request->get('actor');
        $actor       = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->find($actorid);
        $datePlanif  = $request->get('datePlanif');
        $datePlanif = new \DateTime( $datePlanif);
//        $datePlanif = $datePlanif->format("d-m-Y");
        $dateStart   = $request->get('dateStart');
        $dateStart = new \DateTime($dateStart);
//        $dateStart = $dateStart->format("d-m-Y");
        $dateEnd     = $request->get('dateEnd');
        $dateEnd     = new \DateTime($dateEnd);
//        $dateEnd     = $dateEnd->format("d-m-Y");
        $comment     = $request->get('comment');



        $sousPlanif = new SousPlanification();

        $sousPlanif->addActor($actor);
        $sousPlanif->setCompetences($skill->getName());
        $sousPlanif->setEndDate($dateEnd);
        $sousPlanif->setStartingDate($dateStart);
        $sousPlanif->setPlanif($planif);
        $sousPlanif->setTimePlanif($time);

//        dump($planif);
//        dump($sousPlanif);
//        die;

//
        $em->persist($sousPlanif);
        $em->flush();

        return $this->redirectToRoute('planification-produits',[
            'id' => $saleDocLineid
//           'end' => $end
        ]);
    }


    /**
     * @Route("/plantotalaction", name="set_plannificationtotal")
     */
    public function setPlanTotalAction(Request $request)
    {

        $datePlanif = new \DateTime( 'NOW');
//        $datePlanif = $datePlanif->format("d-m-Y");
        $dateStart   = $request->get('dateStart');
        $dateStart = new \DateTime($dateStart);
//        $dateStart = $dateStart->format("d-m-Y");
        $dateEnd     = $request->get('dateEnd');
        $dateEnd     = new \DateTime($dateEnd);
//        $dateEnd     = $dateEnd->format("d-m-Y");
        $comment     = $request->get('comment');

        $em       = $this->container->get('doctrine.orm.entity_manager');

        $saleDocLineid = $request->get('saleDocLine');
        $saleDocLine = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->find($saleDocLineid);

        $planif = $em->getRepository(Planification::class)
            ->findBy(['saleDocumentLine' => $saleDocLineid ])[0];


        $planif->setComment($comment);
        $planif->setDatePlanif($datePlanif);
        $planif->setEndDate($dateEnd);
        $planif->setStartingDate($dateStart);


        $em->persist($planif);
        $em->flush();

        $saleDocLine->setComment($planif->getComment());
        $saleDocLine->setStatus('Planifié');

        $em->persist($planif);
        $em->flush();

        $saleDoc = $em->getRepository(SaleDocument::class)
            ->findSaleDocCount($saleDocLine->getSaledocument()->getId());

        $saleDoc2 = $em->getRepository(SaleDocument::class)
            ->findSaleDocCount2($saleDocLine->getSaledocument()->getId());

        $saleDocument = $em->getRepository(SaleDocument::class)
            ->find($saleDocLine->getSaledocument()->getId());

        if( $saleDoc == $saleDoc2 ) {
            $saleDocument->setStatus('Planifié partiellement');
        }
        else {
            $saleDocument->setStatus('Planifié');
        }

        $em->persist($saleDocument);
        $em->flush();

        return $this->redirectToRoute('details-commandes',[
            'id' => $saleDocLine->getDocumentid()
        ]);
    }

    /**
     * @Route("/actor", name="get_actor")
     * @return Response
     */
    public function getActorsAction()
    {
        $serializer = $this->container->get('jms_serializer');

        $actors     = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findAll();

        $data       = $serializer->serialize($actors, 'json');

        return new Response($data);

//        $hour    = $request->get('time');
//        $skillId = $request->get('skill');
//        $Allactors = $this->getDoctrine()
//            ->getRepository(Actor::class)
//            ->findAll();
//        dump($Allactors);
//        dump($hour);
//        dump($skillId);
//        die;
    }
}