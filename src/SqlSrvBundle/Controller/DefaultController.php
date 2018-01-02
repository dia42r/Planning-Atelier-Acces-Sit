<?php

namespace SqlSrvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/sql")
     */
    public function indexAction()
    {
        $test = $this->getDoctrine()->getRepository(SaleDocument::class, 'customer')->findAll();
        dump($test);
        die;
        return $this->render('SqlSrvBundle:Default:index.html.twig');
    }
}
