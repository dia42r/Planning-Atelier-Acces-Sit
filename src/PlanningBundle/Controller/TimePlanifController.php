<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Customer\SaleDocument;
use PlanningBundle\Entity\Customer\SaleDocumentLine;
use PlanningBundle\Entity\Main\Planification;
use PlanningBundle\Entity\Main\SousPlanification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TimePlanifController extends Controller
{
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

        $task = $this->getDoctrine()
            ->getRepository(Planification::class)
            ->findOneBy(['saleDocumentLine' => $id]);

        $subtasks = $this->getDoctrine()
            ->getRepository(SousPlanification::class)
            ->findAllTasksBy($task->getId());

        return $this->render('pages/saisie-des-temps-par-articles.html.twig', [
            'saledocumentline'     => $saledocumentline[0],
            'subtask'              => $subtasks
        ]);
    }
}
