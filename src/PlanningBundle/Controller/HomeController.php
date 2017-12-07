<?php

namespace PlanningBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
     * @Route("/planification", name="planifier-une-commande")
     */
    public function planificationAction()
    {
        return $this->render('pages/planifier-une-commande.html.twig');
    }

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
        return $this->render('pages/consulter-planning-par-taches.html.twig');
    }

    /**
     * @Route("/consultation-par-acteurs", name="consultation-acteurs")
     */
    public function consultationParActeurs()
    {
        return $this->render('pages/consulter-planning-par-acteurs.html.twig');
    }
}
