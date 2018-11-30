<?php

namespace PlanningBundle\Manager;

use DateInterval;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use PlanningBundle\Entity\EBP\SaleDocumentLine;
use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\Planning;
use PlanningBundle\Helper\PlanningDateHelper;

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
    public function calculateTaskEndDate(Planning $planning) {

        $actor = $planning->getActor();
        $task = $planning->getTask();
        $saleDocumentLine = $planning->getSaleDocumentLine();
        $duree = $planning->getDuration() * $saleDocumentLine->getQuantity();

        while ($duree > 0) {
            $startDate = $this->getTaskStartDate($planning)->format('Y-m-d H:i:s');

            $planning->setStartDate(new \DateTime($startDate));
            $planning->setStartDate(PlanningDateHelper::getNextOfficeDay($planning->getStartDate()));
            $planning->setStartDate(PlanningDateHelper::getNextOfficeHour($planning->getStartDate()));
            $planning->setEndDate(new DateTime($planning->getStartDate()->format('Y-m-d H:i:s')));
            $planning->setTask($task);
            $planning->setStatus($planning::PLANIFIE);
            
            $day = new DateTime($planning->getStartDate()->format('Y-m-d'));
            $dispoJour = $this->actorNbHourAvailDay($planning);
            $dureeTaskJour = ($duree > $dispoJour ) ? $dispoJour : $duree;
            $duree = $duree - $dureeTaskJour;
            $duration = 0;

            while ($dureeTaskJour > 0) {

                if (PlanningDateHelper::isOfficeHour($planning->getEndDate())) {
                    $duration++;
                    $planning->getEndDate()->add(new DateInterval('PT1H'));
                    $dureeTaskJour--;
                } else {
                    $planning->setDuration($duration);
                    $tempEndDate = $planning->getEndDate();
                    
                    $this->em->persist($planning);
                    $this->em->flush();

                    $planning = new Planning();
                    $planning->setActor($actor);
                    $planning->setTask($task);
                    $planning->setStatus($planning::PLANIFIE);
                    $planning->setSaleDocumentLine($saleDocumentLine);
                    $planning->setStartDate(new DateTime(PlanningDateHelper::getNextOfficeHour($tempEndDate)->format('Y-m-d H:i:s')));
                    $planning->setEndDate(new DateTime($planning->getStartDate()->format('Y-m-d H:i:s')));
                    $duration = 0;
                }
            }

            $planning->setDuration($duration);
            $this->em->persist($planning);
            $this->em->flush();

            if ($duree > 0) {
                $planning = new Planning();
                $planning->setActor($actor);
                $planning->setSaleDocumentLine($saleDocumentLine);
                $planning->setStartDate(new DateTime($day->format('Y-m-d')));
                $planning->getStartDate()->add(new DateInterval('P1D'));
            }
        }
    }

    /**
     * Recuperation de la date de fin de la derniere plannification de l'acteur, 
     * null si à cette date aucune plannification n'est liee à l'acteur à cette date 
     * @param Planning $planning
     * @return type
     */
    private function getTaskStartDate(Planning $planning) {
        /**
         * @TODO :  
         *      - Si la plannification est liée à une autre plannification, on recupere la fin de plannification parent 
         *      - Sinon on récupére la date de fin de la derniere plannification de l'acteur du jour concerné
         */
        if ($planning->getParentPlanning()) {
            return $planning->getParentPlanning()->getEndDate();
        }
        $actorLastStartDate = $this->actorLastTaskEndDate($planning);
        $actorFirstFreeHour = $this->actorFirstFreeHour($planning);

        return is_null($actorFirstFreeHour) ? $actorLastStartDate : $actorFirstFreeHour;
    }

    /**
     * Date de fin de la derniere tâche planifiée d'un acteur
     * @param Planning $planning
     */
    private function actorLastTaskEndDate($planning) 
    {
        
        $actor_id = $planning->getActor()->getId();
        $lastStartDate = $this->em->getRepository(Planning::class)->findByLastTaskEndDate($planning->getStartDate()->format('Y-m-d'), $actor_id);

        if (($lastStartDate)) {
            return new DateTime($lastStartDate);
        } 
        $lastStartDate = new \DateTime($planning->getStartDate()->format('Y-m-d'));
        return ($lastStartDate->add(new DateInterval(Planning::DAY_START_HOUR_INTERVAL)));       
    }
    
    /**
     * Retourne la premiere heure disponible en horaire de service pour un acteur
     * @param Planning $planning
     */
    public function actorFirstFreeHour(Planning $planning) 
    {
        $actorOccupeidRange = $this->getActorOccupiedRangeDate($planning);

        if (!empty($actorOccupeidRange)) {
            $start_date = new DateTime($planning->getStartDate()->format('Y-m-d'));
            $start_date->add(new DateInterval(Planning::DAY_START_HOUR_INTERVAL));
            
            foreach ($actorOccupeidRange as $range) {
                if ($start_date != $range['startDate'] && PlanningDateHelper::isOfficeHour($start_date)) {
                    return $start_date;
                } else {
                    $start_date = $range['endDate'];
                }
            }
        }
        return null;
    }

    /**
     * Recuperation des interval d'occupadtion d'une acteur : date de debut et de fin de chaque tâche de la journée 
     * @param Planning $planning
     * @return type
     */
    private function getActorOccupiedRangeDate(Planning $planning) {
        
        $dateString = $planning->getStartDate()->format('Y-m-d');
        $actor_id = $planning->getActor()->getId();
        $occupiedRange = $this->em->getRepository(Planning::class)->findActorOccupedRangeDate($actor_id, $dateString);

        return $occupiedRange;
    }

    /**
     * 
     * @param Planning $planning
     * @return string
     */
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
     * Disponibilite d'un acteur à une date donnée
     * @param type $actor_id
     * @param type $date
     * @return type
     */
    public function isAvailable($actor_id, $date) {
        $sumTask = $this->em->getRepository(Planning::class)->findSumTaskByActor($actor_id, $date);
        return ($sumTask < Planning::NB_HEURE_JOUR) || is_null($sumTask) ? true : false;
    }

    /**
     * 
     * @param type $planning_id
     * @return type
     */
    public function getStartDateById($planning_id) {
        return $this->em
                        ->getRepository(Planning::class)
                        ->findStartDateById($planning_id);
    }

    /**
     * Retourne la date de fin estimée 
     * @param uid $id saledocumentLine id 
     * @return datetime
     */
    public function saleDocumentLineEstimatedEndDate($id) {
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
    public function saleDocumentLineCumulDuration($id) {
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
    public function saleDocumentEstimatedEndDate($id) {
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
    public function saleDocumentCumulDuration($id) {
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
    public function saleDocumentScheduled($saledocument_id) {
        $scheduledLine = $this->em
                ->getRepository(SaleDocumentLine::class)
                ->findScheduledSaleDocumentLine($saledocument_id);
        dump($scheduledLine);

        return $scheduledLine;
    }


    /**
     * Suite à une modification ou une suppression de planification 
     * @param array $plannings
     */
    public function consolidateScheduling($sale_document_line_id) {
        // @TODO : Recuperer la liste de toutes planification de la ligne de commande 
        $plannings = $this->em->getRepository(Planning::class)->findSchedulingBySaleDocumentLine($sale_document_line_id);
        foreach ($plannings as $planning) {
            $this->preUpdate($planning);
            $plannings_c[] = $planning;
        }

        foreach ($plannings_c as $planning) {
            $this->calculateTaskEndDate($planning);
        }
    }

    /**
     * Lors de la mise à jour reinitialise la durée et les dates de debut et de fin de la tâche
     * @param Planning $planning
     */
    public function preUpdate(Planning $planning) {
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

    /**
     * Nbre d'heure disponible pour un actor à une date donnée
     * @param type $date
     */
    private function actorNbHourAvailDay(Planning $planning) {
        $nbHour = $this->em
                ->getRepository(Planning::class)
                ->findSumTaskByActor($planning->getActor(), $planning->getStartDate()->format('Y-m-d'));

        return Planning::NB_HEURE_JOUR - $nbHour;
    }
}
