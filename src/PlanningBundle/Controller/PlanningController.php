<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PlanningController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('pages/home.html.twig');
    }
}
