<?php

namespace PlanningBundle\Controller;

use function PHPSTORM_META\type;
use PlanningBundle\Entity\Customer\SaleDocument;
use PlanningBundle\Entity\Customer\SaleDocumentLine;
use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\Competence;
use PlanningBundle\Entity\Main\Planification;
use PlanningBundle\Entity\Main\SousPlanification;
use PlanningBundle\Entity\Main\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlanifController extends Controller
{
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

        return $this->render('pages/details-commandes.html.twig', [
            'details'      => $details,
            'saledocument' => $saledocument,
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
     * @Route("/planaction", name="set_plannification")²
     * @throws \Doctrine\ORM\ORMException
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

        $this->addFlash(
            'notice',
            'Féliciations ! '.'La tâche '.$skill->getName().' a bien était enregistrée'
        );

        return $this->redirectToRoute('planification-produits',[
            'id' => $saleDocLineid
//           'end' => $end
        ]);
    }


    /**
     * @Route("/plantotalaction", name="set_plannificationtotal")
     * @throws \Doctrine\ORM\ORMException
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

//        dump(($saleDoc == $saleDoc2 ));
//        dump("-----------------");
//        dump(($saleDoc ));
//        dump("-----------------");
//        dump(( $saleDoc2 ));
//        die;
        if( $saleDoc == $saleDoc2 ) {
            $saleDocument->setStatus('Planifié');
        }
        else {
            $saleDocument->setStatus('Planifié partiellement');

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
            ->findActor();

//        dump(gettype($actors));
//        die;
        $data       = $serializer->serialize($actors, 'json');
//        dump($data);
//        die;

        return new Response($data);
    }
}
