<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PlanningBundle\EventSubscriber;

use Doctrine\ORM\EntityManagerInterface;
use PlanningBundle\Entity\EBP\SaleDocument;
use PlanningBundle\Entity\Main\Planning;
use PlanningBundle\Event\SaleDocumentLinePlannedEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use function dump;


/**
 * Effctuer mise à jour dans SaledocumentLine à chaque ajout/edit du planning
 *
 * @author XQJM798
 */
class SaleDocumentLineSubscriber  implements EventSubscriberInterface{
   
   

    private $em;
    private $container;
    
    public function __construct(EntityManagerInterface $em, ContainerInterface $container) {
        $this->em = $em;
        $this->container = $container;
    }
    
    public static function getSubscribedEvents(): array {
        return [
            SaleDocumentLinePlannedEvent::PLANNED => array('onSaleDocumentLinePlanned'),
            SaleDocumentLinePlannedEvent::STATUS => array('onPlanningStatusChanged'),
            SaleDocumentLinePlannedEvent::DELETED => array('onPlanningDeleted')
        ];
        
    }
    
    public function onSaleDocumentLinePlanned(SaleDocumentLinePlannedEvent $event) {
        
        $saleDocumentLine = $event->getSaleDocumentLine();
        $planningManager  = $event->getPlanningManager();
        $saleDocumentLineId = $saleDocumentLine->getId();
        $plannings =  $saleDocumentLine->getPlannings();
        
        $this->setSaleDocumentLineStatus($plannings, $saleDocumentLine);
        $saleDocumentLine->setEndDateEstimated($planningManager->saleDocumentLineEstimatedEndDate($saleDocumentLineId));
        $saleDocumentLine->setCumulDuration($planningManager->saleDocumentLineCumulDuration($saleDocumentLineId));
        $this->em->merge($saleDocumentLine);
        $this->em->flush();
        
        
        $saleDocument = $this->em->getRepository(SaleDocument::class)
                ->findByDocumentNumber($saleDocumentLine->getDocumentNumber());
        
        $saleDocumentId = $saleDocument->getId();
        $this->setSaleDocumentStatus($saleDocument);

        $saleDocument->setEndDateEstimated($planningManager->saleDocumentEstimatedEndDate($saleDocumentId));
        $saleDocument->setCumulDuration($planningManager->saleDocumentCumulDuration($saleDocumentId));
        $this->em->merge($saleDocument);
        
        $this->em->flush();
    }
    
    /**
     * 
     * @param array $plannings
     */
    private function setSaleDocumentLineStatus($plannings, $saleDocumentLine) 
    {
        if (!empty($plannings)) {

        foreach ($plannings as $planning) {

            switch ($planning->getStatus()) {
            case 'EN_COURS':
                $saleDocumentLine->setStatus($this->container->getParameter('planning.status.en_cours'));
                break;
            case 'TERMINE':
                $saleDocumentLine->setStatus($this->container->getParameter('planning.status.termine'));
                break;
            case 'PLANIFIE':
                $saleDocumentLine->setStatus($this->container->getParameter('planning.status.planifie'));
                break;
            }
        }
    }
        
    }
    /**
     * 
     * @param SaleDocument $saleDocument
     */
    private function setSaleDocumentStatus(SaleDocument $saleDocument)
    {
        $saleDocsLine = $saleDocument->getSaleDocumentLines();

        foreach ($saleDocsLine as $saleDocLine) {
            switch ($saleDocLine->getStatus()){
                case 'EN_COURS' :
                    $saleDocument->setStatus($this->container->getParameter('planning.status.en_cours'));
                    break;
                case 'TERMINE' :
                    $saleDocument->setStatus($this->container->getParameter('planning.status.termine'));
                    break;
                case 'PLANIFIE';
                      $saleDocument->setStatus($this->container->getParameter('planning.status.planifie'));
                    break;  
            }
        }
    }
    
    
    public function onPlanningDeleted (SaleDocumentLinePlannedEvent $event) 
    {
        $saleDocumentLine = $event->getSaleDocumentLine();
        $planningManager  = $event->getPlanningManager();
        $saleDocument = $this->em->getRepository(SaleDocument::class)
                ->findByDocumentNumber($saleDocumentLine->getDocumentNumber());
        
        $planning = $this->em->getRepository(Planning::class)->findBySaleDocumentLine($saleDocumentLine->getId());
        
        if (empty($planning)) {
            $saleDocumentLine->setStatus($this->container->getParameter('planning.status.non_planifie'));
            $saleDocumentLine->setEndDateEstimated(null);
            $saleDocumentLine->setCumulDuration(null);
            $this->em->merge($saleDocumentLine);
            $this->em->flush();
            
        }  

        if (empty($planningManager->saleDocumentScheduled($saleDocument->getId()))) {
            $saleDocument->setStatus($this->container->getParameter('planning.status.non_planifie'));
            $saleDocument->setEndDateEstimated(null);
            $saleDocument->setCumulDuration(null);
            $this->em->merge($saleDocument); 
        }
        $this->em->flush();   
    }

}
