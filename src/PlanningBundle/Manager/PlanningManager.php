<?php

namespace PlanningBundle\Manager;

use DateInterval;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use PlanningBundle\Entity\EBP\SaleDocumentLine;
use PlanningBundle\Entity\Main\Planning;
use function dump;

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
    public function calculateTaskEndDate(Planning $planning, SaleDocumentLine $saleDocumentLine) 
    {
        
        $duree = $planning->getDuration();
        $actor = $planning->getActor();
        $task = $planning->getTask();
        
        while ($duree > 0) {
            
            while ($this->isThisDayAWeekend($planning->getStartDate()->format('Y-m-d H:i:s'))) {
            $planning->getStartDate()->add(new DateInterval('P1D'));
            }
            
            $startDate = $this->getTaskStartDate($planning);
            

            if (is_null($startDate)) {
                $planning->getStartDate()->add(new \DateInterval(Planning::T7H));
            } else {
                $planning->setStartDate(new \DateTime($startDate));
            }        
            
            $jour = new DateTime($planning->getStartDate()->format('Y-m-d'));
            $chargeJour = $this->em->getRepository(Planning::class)->findSumTaskByActor($planning->getActor(), $jour->format('Y-m-d'));
            
            
            $nbHeureDispoJour = $planning::NB_HEURE_JOUR - $chargeJour;
            
            $chargeJourTache = $duree > $nbHeureDispoJour ? $nbHeureDispoJour : $duree;
          
            $planning->setDuration($chargeJourTache);
            $planning->setStatus($planning::PLANIFIE);
            $planning->setEndDate(new DateTime($planning->getStartDate()->format('Y-m-d H:i:s')));
            $planning->getEndDate()->add(new DateInterval('PT' . $chargeJourTache . 'H'));
            
            while ($this->isThisDayAWeekend($planning->getEndDate()->format('Y-m-d H:i:s'))) {
                $planning->getEndDate()->add(new DateInterval('P1D'));
            }
            
            $this->em->persist($planning);
            $this->em->flush();
            
            dump($planning);
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

    public function validate($planning) {

        $errors = array();
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
    public function getStartDate($planning_id) 
    {
        return $this->em->getRepository(Planning::class)->findById($planning_id);
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
    
    
    public function consolidateScheduling(array $plannings) 
    {
        foreach ($plannings as $planning) {
            $this->calculateTaskEndDate($planning);
            $this->em->merge($planning);
            $this->em->flush();
        }
    }
}
