<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\Planification;
use PlanningBundle\Entity\Main\SousPlanification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\EBP\SaleDocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    
    
    /**
     * @Route("/", name="Index")
     */
    public function homeAction() {
        
        $commandes = $this->getDoctrine()
        ->getRepository(SaleDocument::class)
        ->findAll();
        
        $lastImportDate =  $this->getDoctrine()
        ->getRepository(SaleDocument::class)
        ->findLastImportDate();
        
        return $this->render('pages/home.html.twig', [
            'commandes' => $commandes, 
            'lastImportDate' => $lastImportDate
        ]);
    }


}