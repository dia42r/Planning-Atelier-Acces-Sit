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
        $saledocumentline = $this->getDoctrine()
            ->getRepository(SaleDocumentLine::class)
            ->findItem($id);

        $task = $this->getDoctrine()
            ->getRepository(Planification::class)
            ->findOneBy(['saleDocumentLine' => $id]);

        $subtasks = $this->getDoctrine()
            ->getRepository(SousPlanification::class)
            ->findAllTasksBy($task->getId());



        if ( $request->isMethod("POST" )) {

            $em = $this->getDoctrine()->getManager();
            $total = $request->request->get('total');

            $total = new \DateTime("0000-01-00 ".$total);
            $saledocumentline[0]->setTotalTime($total);

            $em->persist($saledocumentline[0]);
            $em->flush();


            return $this->redirectToRoute('saisie-temps-detail', [
                "id" => $saledocumentline[0]->getDocumentid()
            ]);

        }

        return $this->render('pages/saisie-des-temps-par-articles.html.twig', [
            'saledocumentline'     => $saledocumentline[0],
            'subtask'              => $subtasks,
        ]);
    }

    public function second($hour, $minutes) {

        $hour = intval($hour);
        $minutes = intval($minutes);
        $seconde = null;
        return $seconde = ($hour * 3600)+($minutes * 60);
    }

    public function temp($second) {

        $seconds = intval($second); // don't forget the second param
        $hours   = floor($seconds / 3600);
        $minutes = floor(($seconds - ($hours * 3600)) / 60);
        $seconds = $seconds - ($hours * 3600) - ($minutes * 60);

        if ($hours   < 10) {$hours   = "0".($hours);} else {$hours   = $hours;}
        if ($minutes < 10) {$minutes = "0".$minutes;}
        $time    = $hours.':'.$minutes;
        return $time;
    }
}
