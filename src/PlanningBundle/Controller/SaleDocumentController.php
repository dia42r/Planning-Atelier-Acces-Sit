<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SaleDocumentController extends Controller
{
    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('PlanningBundle:SaleDocument:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showDetail/{id}", name="detail_commande")
     */
    public function showDetailAction($id)
    {
        
        
        $saleDocument = $this->getDoctrine()->getRepository(\PlanningBundle\Entity\EBP\SaleDocument::class)
                ->findByDocumentNumber($id);
        
        return $this->render('PlanningBundle:SaleDocument:show_detail.html.twig', array(
            'saleDocument' => $saleDocument
        ));
    }
    
    /**
     * @Route("/liste-commandes-planifiee", name="liste_commandes_planifiee")
     */
    public function listeCommandesPlanifiee() {
        
        $saleDocuments = $this->getDoctrine()->getRepository(\PlanningBundle\Entity\EBP\SaleDocument::class)
                ->findScheduledOrder();
        
        return $this->render('PlanningBundle:SaleDocument:liste_commandes.html.twig', array(
            'saleDocuments' => $saleDocuments,
            'title' => 'Liste CATs Planifiées'
        ));
    }
    
    
     /**
     * @Route("/liste-commandes-non-planifiee", name="liste_commandes_non_planifiee")
     */
    public function listeCommandesNonPlanifiee() {
        
        $saleDocuments = $this->getDoctrine()->getRepository(\PlanningBundle\Entity\EBP\SaleDocument::class)
                ->findNotScheduledOrder();
        
        return $this->render('PlanningBundle:SaleDocument:liste_commandes.html.twig', array(
            'saleDocuments' => $saleDocuments,
            'title' => 'Liste CATs'
        ));
    }

}
