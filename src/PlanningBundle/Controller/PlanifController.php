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
     * @param Request $request
     * @return Response
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
            ->findBy([],['position'=>'ASC']);

        return $this->render('pages/planification-produit.html.twig', [
            'saledocumentline'     => $saledocumentline[0],
            'competences'          => $competences,
        ]);
    }


    /**
     * @Route("/planaction", name="set_plannification")²
     * @throws \Doctrine\ORM\ORMException
     */
    public function     setPlanAction(Request $request)
    {
        $em            = $this->container->get('doctrine.orm.entity_manager');
        $saleDocLineid = $request->request->get('saledocumentlineid');
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

        $time        = $request->request->get('timePrev');

        $time = new \DateTime($time);
//           $time = $time->format("H:i");
        $skillId     = $request->request->get('dataSkill');
        $skill       = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->find($skillId);
        $actorid       = $request->request->get('actor');
        $actor       = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->find($actorid);
        $datePlanif  = $request->get('datePlanif');
        $datePlanif = new \DateTime( $datePlanif);
//        $datePlanif = $datePlanif->format("d-m-Y");
        $dateStart   = $request->request->get('dateStart');
        $dateStart = new \DateTime($dateStart);
//        $dateStart = $dateStart->format("d-m-Y");
        $dateEnd     = $request->request->get('dateEnd');
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

        return new Response('\'Féliciations ! \'.\'La tâche \'.$skill->getName().\' a bien été enregistrée\'');

        $this->addFlash(
            'notice',
            'Féliciations ! '.'La tâche '.$skill->getName().' a bien été enregistrée'
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
    public function getActorsAction(Request $request)
    {
        $serializer = $this->container->get('jms_serializer');
        $skill = $request->query->get('skill');
        $actors     = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->find($skill);

        $actors = $actors->getActor()->toArray();
        $actorsTab = [];
        $actorsTab2 = [];
        foreach ($actors as $actor){
            $actorsTab['id'] = $actor->getId();
            $actorsTab['name'] = $actor->getName();
            array_push($actorsTab2, $actorsTab);
        }
//        dump($request->query->get('skill'));
//        die;
        $data       = $serializer->serialize($actorsTab2, 'json');


        return new Response($data);
    }

    /**
     * @Route("/ajax-date-fabric-end", name="ajax_date end fabric")
     * @param Request $request
     * @return Response
     */
    public function ajaxDateFabricAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('id');
//        dump($id);
//        die;
        $dateNow = new \DateTime('now');
//        dump($dateNow);
//        die();
        $saledocument = $em->getRepository(SaleDocument::class)
            ->findOneBy(['documentNumber'=>$id]);

        $saledocument->setDocumentEndDateFabric($dateNow);
        $saledocument->setCatEnd(true);
        $em->persist($saledocument);
        $em->flush();

        $date = $saledocument->getDocumentEndDateFabric();
        return new Response($date->format("d/m/y"));
    }
}
