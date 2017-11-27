<?php

namespace PlanningBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/popo")
     */
    public function indexAction()
    {
        return $this->render('PlanningBundle:Default:index.html.twig');
    }
}
