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
     * @Route("/planificationFullValider/{id}", name="planification_valider")
     * @param Request $request
     * @param SaleDocument $saleDocument
     * @return Response
     */
    public function planificationFullValiderAction(Request $request, SaleDocument $saleDocument)
    {
        $em = $this->getDoctrine()->getManager();

        $saleDocumentLines = $saleDocument->getSaleDocumentLines()->toArray();
        $lastSaleDocumentLine = count($saleDocumentLines);
        $startDate = null;
        $endDate = null;
        $waits = false;
        for ($i=0; $i < $lastSaleDocumentLine; $i++) {
            if ($saleDocumentLines[$i]->getStatusBis() == "En attente"){
                $waits = true;
            }
        }
        for ($i=0; $i < $lastSaleDocumentLine; $i++) {
            if ($saleDocumentLines[$i]->getPlanif() != null){

                $startDateTmp = $saleDocumentLines[$i]->getPlanif()->getStartingDate();
                if ($startDate == null){
                    $startDate = $startDateTmp;
                }elseif ($startDate > $startDateTmp){
                    $startDate = $startDateTmp;
                }
            }
        }
        for ( $i=$lastSaleDocumentLine - 1; $i >= 0; $i--) {
            if ($saleDocumentLines[$i]->getPlanif() != null){
                $endDateTmp = $saleDocumentLines[$i]->getPlanif()->getEndDate();
                if ($endDate == null){
                    $endDate = $endDateTmp;
                }elseif ($endDate < $endDateTmp){
                    $endDate = $endDateTmp;
                }
            }
        }
//
        $saleDocument->setStartingDate($startDate);
        $saleDocument->setEndDate($endDate);
        if($waits){
            $saleDocument->setStatusBis("En attente");

        }

        $em->persist($saleDocument);
        $em->flush();

        return $this->redirectToRoute('planifier-une-commande');

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
     * @param $id
     * @return Response
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
            'saledocumentline'     => $saledocumentline,
            'competences'          => $competences,
        ]);
    }


    /**
     * @Route("/planaction/check-skill", name="set_plannification_check_skill")²
     * @param Request $request
     * @return Response
     */
    public function  setPlanActionCheckSkill(Request $request) {

        $em            = $this->container->get('doctrine.orm.entity_manager');
        $serializer = $this->container->get('jms_serializer');
        $saleDocLineid = $request->request->get('saledocumentlineid');
        $skilltab      = $request->request->get('dataSkills');

        $saleDocLine   = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->find($saleDocLineid);

        $planif        = $em->getRepository(Planification::class)
            ->findBy(['saleDocumentLine' => $saleDocLineid ]);

        if( $planif ) {
            $sousplanifs = $planif[0]->getSousPlanif()->toArray();

            if (empty($sousplanifs)) {
                return new Response("0");
            }else {
                $position = 0;
                foreach ($sousplanifs as $sousplanif) {
                    for( $i = 0; $i < count($skilltab); $i++ ) {
                        $skill = $em->getRepository(Competence::class)->findskill($skilltab[$i]);
                        if($sousplanif->getStartingDate() != null){
                            $data['end'] = $sousplanif->getEndDate();
                        }
                        if($sousplanif->getCompetences() == $skill[0]['name']){
                            if( $position <= $i ){
                                $position = $i;
                            break;

                            }
                        }
                    }
                }
                $position += 1;
                $data['position'] = $position;

                $data = $serializer->serialize($data, 'json');

                return new Response($data);
            }
        }else {
            return new Response("0");
        }
    }


    /**
     * @Route("/planaction", name="set_plannification")²
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function setPlanAction(Request $request)
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

            $saleDocLine->setPlanif($planif);

            $em->persist($saleDocLine);
            $em->flush();

            $planif    = $em->getRepository(Planification::class)
                ->find($planif->getId());
        }
        else {
            $planif = $planif[0];
        }

        $serializer = $this->container->get('jms_serializer');
        $time        = $request->request->get('timePrev');
        $status      = $request->request->get('status');

        if ( $time ) {
            $time = new \DateTime($time);
        }else {
            $time = null;
        }

        $skillId     = $request->request->get('dataSkill');

        $skill       = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->find($skillId);

        $actorid     = $request->request->get('actor');

        if ( $actorid ) {
            $actor   = $this->getDoctrine()
                ->getRepository(Actor::class)
                ->find($actorid);
        }else {
            $actor = null;
        }

        $datePlanif = $request->get('datePlanif');

        if ( $datePlanif ) {
            $datePlanif = new \DateTime( $datePlanif);
        }else {
            $datePlanif = null;
        }

        $dateStart = $request->request->get('dateStart');

        if ( $dateStart ) {
            $dateStart = new \DateTime($dateStart);
        }else {
            $dateStart = null;
        }

        $dateEnd     = $request->request->get('dateEnd');

        if ( $dateEnd ) {
            $dateEnd = new \DateTime($dateEnd);
        }else {
            $dateEnd = null;
        }


        $comment     = $request->get('comment');



        $sousPlanif = new SousPlanification();

        if( $actor ) {
            $sousPlanif->addActor($actor);
        }
        $sousPlanif->setCompetences($skill->getName());
        $sousPlanif->setEndDate($dateEnd);
        $sousPlanif->setStartingDate($dateStart);
        $sousPlanif->setPlanif($planif);
        $sousPlanif->setTimePlanif($time);
        $sousPlanif->setStatus($status);

        $em->persist($sousPlanif);
        $em->flush();

        return new Response("Féliciations ! La tâche ".$skill->getName()." a bien été enregistrée.");

        $this->addFlash(
            'notice',
            'Féliciations ! '.'La tâche '.$skill->getName().' a bien été enregistrée'
        );

        return $this->redirectToRoute('planification-produits',[
            'id' => $saleDocLineid
        ]);
    }


    /**
     * @Route("/plantotalaction", name="set_plannificationtotal")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function setPlanTotalAction(Request $request)
    {
        $totalTime = 0;
        $servicTime = $this->container->get('planning.service.time');
        $datePlanif = new \DateTime( 'NOW');
//        $datePlanif = $datePlanif->format("d-m-Y");
        $statusattente   = $request->get('waitCheck');
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
            ->findOneBy(['saleDocumentLine' => $saleDocLineid ]);
        $sousplanifes = $planif->getSousPlanif();

        $lastTask = count($sousplanifes);
        for( $i=0; $i < $lastTask; $i++ ) {
            if( $sousplanifes[$i]->getStatus() != 'ignorer') {
                $startdate = $sousplanifes[$i]->getStartingDate();
                break;
            }
        }
        $endDate = $sousplanifes[$lastTask - 1]->getEndDate();

        $planif->setComment($comment);
        $planif->setDatePlanif($datePlanif);
        $planif->setStartingDate($startdate);
        $planif->setEndDate($endDate);


        $em->persist($planif);
        $em->flush();

        $saleDocLine->setComment($planif->getComment());
        $saleDocLine->setStatus('Planifié');
        if($statusattente || $statusattente == 'on'){
            $saleDocLine->setStatusBis('En attente');
        }

        $em->persist($saleDocLine);
        $em->flush();

        foreach ( $sousplanifes as $sousplanife ) {
            if( $sousplanife->getStatus() == 'ignorer' ) {
                continue;
            }
            $h = $sousplanife->getTimePlanif()->format('H');
            $m = $sousplanife->getTimePlanif()->format('i');
            $totalTime += $servicTime->second($h,$m);
        }

        $totalTime = $servicTime->temp($totalTime);
        $totalTime = new \DateTime($totalTime);

        $saleDocLine->setTotalPrev($totalTime);

        $em->persist($saleDocLine);
        $em->flush();

        $saleDoc = $em->getRepository(SaleDocument::class)
            ->findSaleDocCount($saleDocLine->getSaledocument()->getId());

        $saleDoc2 = $em->getRepository(SaleDocument::class)
            ->findSaleDocCount2($saleDocLine->getSaledocument()->getId());

        $saleDocument = $em->getRepository(SaleDocument::class)
            ->find($saleDocLine->getSaledocument()->getId());

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
     * @param Request $request
     * @return Response
     */
    public function getActorsAction(Request $request)
    {
        $serializer = $this->container->get('jms_serializer');
        $skill      = $request->query->get('skill');
        $actors     = $this->getDoctrine()
            ->getRepository(Competence::class)
            ->find($skill);

        $actors     = $actors->getActor()->toArray();
        $actorsTab  = [];
        $actorsTab2 = [];

        foreach ( $actors as $actor ) {
            $actorsTab['id'] = $actor->getId();
            $actorsTab['name'] = $actor->getName();
            array_push($actorsTab2, $actorsTab);
        }

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

        $dateNow = new \DateTime('now');

        $saledocument = $em->getRepository(SaleDocument::class)
            ->findOneBy(['documentNumber'=>$id]);

        $saledocument->setDocumentEndDateFabric($dateNow);
        $saledocument->setCatEnd(true);

        $em->persist($saledocument);
        $em->flush();

        $date = $saledocument->getDocumentEndDateFabric();

        return new Response($date->format("d/m/y"));
    }

    /**
     * @Route("/article-non-planif/{id}", name="art-non-planif")
     * @param Request $request
     * @param SaleDocumentLine $saleDocumentLine
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function dontAccesPlanifAction(Request $request, SaleDocumentLine $saleDocumentLine)
    {
        $em = $this->getDoctrine()->getManager();
        $saleDocumentid = $saleDocumentLine->getSaledocument()->getId();

        $saleDocumentLine->setStatus("Planifié");
        $saleDocumentLine->setStatusBis("Tâche non planifiée");
        $em->persist($saleDocumentLine);
        $em->flush();

        $saleDocument = $em->getRepository(SaleDocument::class)
            ->find($saleDocumentid);

        $saleDoc = $em->getRepository(SaleDocument::class)
            ->findSaleDocCount($saleDocumentLine->getSaledocument()->getId());

        $saleDoc2 = $em->getRepository(SaleDocument::class)
            ->findSaleDocCount2($saleDocumentLine->getSaledocument()->getId());

        if( $saleDoc == $saleDoc2 ) {
            $saleDocument->setStatus('Planifié');
        }
        else {
            $saleDocument->setStatus('Planifié partiellement');
        }

        $em->persist($saleDocument);
        $em->flush();

        return $this->redirectToRoute('details-commandes', [
            "id" => $saleDocumentid
        ]);
    }


    /**
     * @Route("/liste-sous-taches/{id}", name="list-sub-task")
     * @param Request $request
     * @param SaleDocumentLine $salDocumentLine
     * @return Response
     */
    public function listSubTask(Request $request, SaleDocumentLine $salDocumentLine)
    {
        $salDocumentLineId = $salDocumentLine->getId();
        $task = $this->getDoctrine()
            ->getRepository(Planification::class)
            ->findPlanif($salDocumentLineId);

        $subtasks = $this->getDoctrine()
            ->getRepository(SousPlanification::class)
            ->findAllTasksBy($task->getId());

        $subtasksTab = [];
        foreach ( $subtasks as $subtask ){
            $actors = $subtask->getActor()->toArray();
            $actorsTab = [];
            foreach ( $actors as $actor ) {
                $actorTab['name'] = $actor->getName();
                array_push($actorsTab, $actorTab);
            }
            $subtaskTab['idTask'] = $subtask->getId();
            $subtaskTab['timePlanif'] = $subtask->getTimePlanif()->format('H:i');
            $subtaskTab['competence'] = $subtask->getCompetences();
            $subtaskTab['startingDate'] = $subtask->getStartingDate()->format("d-m-Y");
            $subtaskTab['endDate'] = $subtask->getEndDate()->format("d-m-Y");

            $subtaskTab['actor'] = $actorsTab;
            array_push($subtasksTab, $subtaskTab);
        }


        $serializer = $this->container->get('jms_serializer');
        $data       = $serializer->serialize($subtasksTab, 'json');
        return new Response($data);
    }


    /**
     * @Route("/subTask/{id}", name="sub_Task")
     * @param Request $request
     * @param SousPlanification $sousPlanification
     * @return Response
     */
    public function subTask(Request $request, SousPlanification $sousPlanification)
    {
        if ( $request->isXmlHttpRequest() ) {

            $sousPlanificationTab['timePlanif'] = $sousPlanification->getTimePlanif()->format('H:i');
            $sousPlanificationTab['startingDate'] = $sousPlanification->getStartingDate()->format("d-m-Y");
            $sousPlanificationTab['endDate'] = $sousPlanification->getEndDate()->format("d-m-Y");

            $delete = $request->request->get('delete');

            $em = $this->getDoctrine()->getManager();

            if ( $request->isMethod("POST") && ($delete == null) ) {

                $timePrevis = $request->request->get('timePrev');
                $dateStart = $request->request->get('dateStart');
                $dateEnd = $request->request->get('dateEnd');

                $timePrevis = new \DateTime($timePrevis);
                $dateStart  = new \DateTime($dateStart);
                $dateEnd    = new \DateTime($dateEnd);

                $sousPlanification->setTimePlanif($timePrevis);
                $sousPlanification->setStartingDate($dateStart);
                $sousPlanification->setEndDate($dateEnd);

                $em->persist($sousPlanification);
                $em->flush();

                return new Response('good');

            } elseif ( $request->isMethod("POST") && ($delete == true) ) {

                $em->remove($sousPlanification);
                $em->flush();
                return new Response('success');

            }

            $serializer = $this->container->get('jms_serializer');
            $data = $serializer->serialize($sousPlanificationTab, 'json');

            return new Response($data);

        }
    }
    /**
     * @Route("/article-delete-attente/{id}", name="art-ndelete-attente")
     * @param Request $request
     * @param SaleDocumentLine $saleDocumentLine
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function dontWaitPlanifAction(Request $request, SaleDocumentLine $saleDocumentLine)
    {
        $em = $this->getDoctrine()->getManager();
        $saleDocumentid = $saleDocumentLine->getSaledocument()->getId();
        $saleDocument = $em->getRepository(SaleDocument::class)
            ->find($saleDocumentid);


        $saleDocumentLine->setStatusBis(null);
        $saleDocument->setStatusBis(null);

        $em->persist($saleDocumentLine);
//        $em->flush();
        $em->persist($saleDocument);
        $em->flush();

        return $this->redirectToRoute('details-commandes', [
            "id" => $saleDocumentid
        ]);
    }
}
