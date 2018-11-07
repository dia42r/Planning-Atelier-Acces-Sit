<?php

namespace PlanningBundle\Manager;

use DateInterval;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use PlanningBundle\Entity\EBP\SaleDocumentLine;
use PlanningBundle\Entity\Main\Planning;

/**
 * Description of PlanningManager
 *
 * @author XQJM798
 */
class PlanningManager {

    /**
     *
     * @var EntityManager
     */
    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    /**
     * 
     * @param Planning $planning
     * @return type
     */
    public function calculateTaskEndDate(Planning $planning) 
    {
        
        $duree = $planning->getDuration();
        $actor = $planning->getActor();
        $task = $planning->getTask();
        $saleDocumentLine  = $planning->getSaleDocumentLine();
        

        while ($duree > 0) {
            
            if ($planning->getParentPlanning()) {
                $startDate = $planning->getParentPlanning()->getEndDate();
                $planning->setStartDate($startDate);
            } else { 
                $startDate = $this->getTaskStartDate($planning);
                    if (is_null($startDate)) {
                        $planning->getStartDate()->add(new \DateInterval(Planning::T7H));
                    } else {
                        $planning->setStartDate(new \DateTime($startDate));
                } 
            }
            
            while ($this->isThisDayAWeekend($planning->getStartDate()->format('Y-m-d H:i:s'))) {
            $planning->getStartDate()->add(new DateInterval('P1D'));
            }
            
            
            $jour = new DateTime($planning->getStartDate()->format('Y-m-d'));
            $chargeJour = $this->em->getRepository(Planning::class)->findSumTaskByActor($planning->getActor(), $jour->format('Y-m-d'));
            $nbHeureDispoJour = $planning::NB_HEURE_JOUR - $chargeJour;
            
            $chargeJourTache = ($duree > $nbHeureDispoJour) ? $nbHeureDispoJour : $duree;
            $planning->setDuration($chargeJourTache);
            $planning->setStatus($planning::PLANIFIE);
            $planning->setEndDate(new DateTime($planning->getStartDate()->format('Y-m-d H:i:s')));
            $planning->getEndDate()->add(new DateInterval('PT' . $chargeJourTache . 'H'));
            

            while ($this->isThisDayAWeekend($planning->getEndDate()->format('Y-m-d H:i:s'))) {
                $planning->getEndDate()->add(new DateInterval('P1D'));
            }
            
            if ($this->isNew($planning)) {
                $this->em->persist($planning);
            } else {
                $this->em->merge($planning);
            }
            
            $this->em->flush();
            
            $duree = $duree - $nbHeureDispoJour;
            if ($duree > 0) {
                $planning = new Planning();
                $planning->setActor($actor);
                $planning->setTask($task);
                $planning->setSaleDocumentLine($saleDocumentLine);
                $planning->setStartDate(new DateTime($jour->format('Y-m-d')));
                $planning->getStartDate()->add(new DateInterval('P1D'));
            }
       }
        
    }

    public function validate(Planning $planning) {

        $errors = array();
        if ($planning->getParentPlanning()) {
            $planning->setStartDate($planning->getParentPlanning()->getEndDate());
        }
        if (!$this->isAvailable($planning->getActor()->getId(), $planning->getStartDate()->format('Y-m-d'))) {
            return $errors['message'] = " L'acteur " . $planning->getActor() . ' n`\est pas disponible à cette date ';
        }
        return $errors;
    }

    /**
     * 
     * @param type $planning
     * @return type
     */
    private function isNew($planning) {
        return is_null($planning->getId());
    }

    /**
     * 
     * @param type $date
     * @return boolean
     */
    private function isThisDayAWeekend($date) 
    {

        $timestamp = strtotime($date);

        $weekday = date("l", $timestamp);

        if ($weekday == "Saturday" OR $weekday == "Sunday") {
            return true;
        } else {
            return false;
        }
    }

   
    /**
     * 
     * @param Planning $planning
     * @return type
     */
    private function getTaskStartDate(Planning $planning) 
    {
        $dateString = $planning->getStartDate()->format('Y-m-d');
        $actor_id = $planning->getActor()->getId();
        $lastStartDate = $this->em->getRepository(Planning::class)->findByLastTaskEndDate($dateString, $actor_id);

        if (is_null($lastStartDate)) {
            return null;
        }
        return $lastStartDate;
    }

    public function isAvailable($actor_id, $date) 
    {
        $sumTask = $this->em->getRepository(Planning::class)->findSumTaskByActor($actor_id, $date);
        return $sumTask < Planning::NB_HEURE_JOUR || is_null($sumTask) ? true : false;
    }
    
    /**
     * 
     * @param type $planning_id
     * @return type
     */
    public function getStartDateById($planning_id) 
    {
        return $this->em->getRepository(Planning::class)->findStartDateById($planning_id);
    }

    


    /**
     * Retourne la date de fin estimée 
     * @param uid $id saledocumentLine id 
     * @return datetime
     */
    public function saleDocumentLineEstimatedEndDate($id) 
    {
        $endDateEstimated = $this->em
                ->getRepository(Planning::class)
                ->findSaleDocumentLineEndDate($id);

        return new DateTime($endDateEstimated);
    }
    
    /**
     * 
     * @param uid $id saleDocumentLineId 
     * @return type
     */
    public function saleDocumentLineCumulDuration($id) 
    {
        $cumulDutation = $this->em
                ->getRepository(Planning::class)
                ->findSaleDocumentLineCumulDuration($id);
        
        
        return $cumulDutation;
    }
    
    
        /**
     * Retourne la date de fin estimée 
     * @param uid $id saledocument id 
     * @return datetime
     */
    public function saleDocumentEstimatedEndDate($id) 
    {
        $endDateEstimated = $this->em
                ->getRepository(SaleDocumentLine::class)
                ->findSaleDocumentEndDate($id);
        return new DateTime($endDateEstimated);
    }
    
    /**
     * 
     * @param uid $id saleDocument Id 
     * @return type
     */
    public function saleDocumentCumulDuration($id) 
    {
        $cumulDutation = $this->em
                ->getRepository(SaleDocumentLine::class)
                ->findSaleDocumentCumulDuration($id);
        return $cumulDutation;
    }
    
    /**
     * Retourne les lignes de commandes planifie
     * @param type $saledocument_id
     * @return type
     */
    public function saleDocumentScheduled($saledocument_id) 
    {
        $scheduledLine = $this->em->getRepository(SaleDocumentLine::class)->findScheduledSaleDocumentLine($saledocument_id);
        dump($scheduledLine);
        
        return $scheduledLine;
    }
    
    
    /**
     * Suite à une modification ou une suppression de planification 
     * @param array $plannings
     */
    public function consolidateScheduling($sale_document_line_id) 
    {
        // @TODO : Recuperer la liste de toutes planification de la ligne de commande 
        $plannings = $this->em->getRepository(Planning::class)->findSchedulingBySaleDocumentLine($sale_document_line_id);
        dump($plannings);
        foreach ($plannings as $planning) {
            $this->preUpdate($planning);
            $plannings_c[] = $planning;
        }
        
        dump($plannings_c);

        foreach ($plannings_c as $planning) {
            $this->calculateTaskEndDate($planning);
        }
    }
    
    /**
     * Lors de la mise à jour reinitialise a dueé rt les dates de debut et de fin de la tâche
     * @param Planning $planning
     */
    public function preUpdate(Planning $planning) 
    {
        $duree = $planning->getDuration();
        $startDate = $planning->getStartDate();
        $planning->setStartDate(null);
        $planning->setEndDate(null);
        $planning->setDuration(null);
        
        $this->em->merge($planning);
        $this->em->flush();
        
        $planning->setDuration($duree);
        $planning->setStartDate($startDate);
    }
}
