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
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function saisieTempsDetails($id, Request $request)
    {
        $art = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->find($id);

        $details = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findDoc($id);

        if ( $request->isMethod("POST" )) {
            $em = $this->getDoctrine()->getManager();
            $count = count($request->request);
            $total = 0;

            for ($i=1; $i <= $count; $i++) {

                $time = $request->request->get("total".$i);
                $date = new \DateTime("0000-01-01 ".$time);
                $hour = $date->format('H');
                $minute = $date->format('i');

                $total += $this->second($hour,$minute);

            }
            $total = new \DateTime("0000-01-01 ".$this->temp($total));
            $art->setTotalTime($total);
            $em->persist($art);
            $em->flush();

            return $this->redirectToRoute('saisis-temps');

//            $art->setTotalTime();
        }
        return $this->render('pages/saisi-temps-details.html.twig', [
            'details' => $details,
            'art' => $art
        ]);


    }


    /**
     * @Route("/saisie-des-temps-articles/{id}", name="saisie-temps-articles")
     */
    public function saisiTempsArticles($id, Request $request)
    {
        $totalTime = 0;
        $em = $this->getDoctrine()->getManager();
        $saledocumentline = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findItem($id);

        $task = $this->getDoctrine()
            ->getRepository(Planification::class)
            ->findOneBy(['saleDocumentLine' => $id]);

        $subtasks = $this->getDoctrine()
            ->getRepository(SousPlanification::class)
            ->findAllTasksBy($task->getId());

        foreach ($subtasks as $subtask){
            $h = $subtask->getTimePlanif()->format('H');
            $m = $subtask->getTimePlanif()->format('i');
            $totalTime += $this->second($h,$m);
        }
        $totalTime = $this->temp($totalTime);

        if($saledocumentline->getTotalPrev() == null){
            $totalPrev = new \DateTime("0000-01-00 ".$totalTime);
            $saledocumentline->setTotalPrev($totalPrev);
            $em->persist($saledocumentline);
            $em->flush();
        }


        if ( $request->isMethod("POST" )) {

            $em = $this->getDoctrine()->getManager();
            $total = $request->request->get('total');

            $total = new \DateTime("0000-01-00 ".$total);
            $saledocumentline->setTotalTime($total);

            $em->persist($saledocumentline);
            $em->flush();


            return $this->redirectToRoute('saisie-temps-detail', [
                "id" => $saledocumentline->getDocumentid()
            ]);

        }

        return $this->render('pages/saisie-des-temps-par-articles.html.twig', [
            'saledocumentline'      => $saledocumentline,
            'subtask'               => $subtasks,
            'totalPrev'             => $totalTime
        ]);
    }

    public function second($hour, $minutes) {

        $hour = intval($hour);
        $minutes = intval($minutes);
        return $seconde = ($hour * 3600)+($minutes * 60);
    }

    public function temp($second) {

        $seconds = intval($second); // don't forget the second param
        $hours   = floor($seconds / 3600);
        $minutes = floor(($seconds - ($hours * 3600)) / 60);

        $hours = $hours < 10 ? "0" . ($hours) : $hours;
        if ($minutes < 10) {$minutes = "0".$minutes;}
        $time    = $hours.':'.$minutes;
        return $time;
    }
}
