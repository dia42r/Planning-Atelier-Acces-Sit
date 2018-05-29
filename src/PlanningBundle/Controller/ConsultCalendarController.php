<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\Competence;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConsultCalendarController extends Controller
{
    /**
     * @Route("/consultation", name="consultation-planning")
     */
    public function consultationAction()
    {
        return $this->render('pages/consulter-le-planning.html.twig');
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
}
