<?php

namespace PlanningBundle\Entity\Main;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use PlanningBundle\Entity\EBP\SaleDocumentLine;
use PlanningBundle\Repository\Main\PlanningRepository;

/**
 * Planning
 *
 * @ORM\Table(name="planning")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\Main\PlanningRepository")
 */
class Planning
{
    
    const PLANIFIE = 'PLANIFIE';
    const EN_COURS = 'EN_COURS';
    const TERMINE = 'TERMINE';
    const BLOQUE = 'BLOQUE';
    const NB_HEURE_JOUR = 8;
    const J_START_HOUR = '07:00:00';
    const T7H = 'PT7H';
                
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="endDate", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;
    
     /**
     * @ORM\ManyToOne(targetEntity="\PlanningBundle\Entity\EBP\SaleDocumentLine", inversedBy="plannings" )
     * @ORM\JoinColumn(name="saleDocumentLine_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $saleDocumentLine;
    
    
    /**
     * Many Planning has Many Task.
     * @ORM\ManyToOne(targetEntity="\PlanningBundle\Entity\Main\Task", inversedBy="plannings")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id" )
     */
    private $task;
    
    
    /**
     * @var Actor
     * @ORM\ManyToOne(targetEntity="Actor", inversedBy="planning", fetch="EAGER")
     * @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     */
    private $actor;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=true)
     */
    private $status;
    
    /**
     * One Planning has Many Plannings.
     * @ORM\OneToMany(targetEntity="Planning", mappedBy="parentPlanning")
     */
    private $linkedPlannings;

    /**
     * Many Plannings have One Planning.
     * @ORM\ManyToOne(targetEntity="Planning", inversedBy="linkedPlannings")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parentPlanning;
    
    private $info;
    
    
    public function __construct() {
        $this->linkedPlannings = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startDate.
     *
     * @param DateTime|null $startDate
     *
     * @return Planning
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set duration.
     *
     * @param int|null $duration
     *
     * @return Planning
     */
    public function setDuration($duration = null)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set endDate.
     *
     * @param DateTime|null $endDate
     *
     * @return Planning
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return Planning
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }    
    
    public function getActor() {
        return $this->actor;
    }
    
    public function setActor($actor) {
        $this->actor = $actor;
    }
    
    
    /**
     * 
     * @param type SaleDocumentLine
     * @return $this
     */
    public function setSaleDocumentLine( $saleDocumentLine) {
        
        $this->saleDocumentLine = $saleDocumentLine;
        return $this;
    }
    
    /**
     * 
     * @return type
     */
    public function getSaleDocumentLine() {
        return $this->saleDocumentLine;
    }
    
    
    /**
     * 
     * @param type $task
     * @return $this
     */
    public function setTask($task) {
        $this->task = $task;
        return $this;
    }
    
    /**
     * 
     * @return type
     */
    public function getTask() {
        return $this->task;
    }
    
    /**
     * 
     * @param \PlanningBundle\Entity\Main\String $status
     * @return $this
     */
    public function setStatus(String $status) {
        $this->status = $status;
        return $this;
    }
    
    /**
     * 
     * @return type
     */
    public function getStatus() {
        return $this->status;
        
    }
    
    /**
     * 
     */
    public function getLinkedPlannings() 
    {    
        return $this->linkedPlannings;
    }
    
    
    /**
     * 
     * @param \PlanningBundle\Entity\Main\Planning $planning
     * @return $this
     */
    public function addLinkedPlannings(Planning $planning) 
    {
        $this->linkedPlannings[] = $planning;
        return $this;
    }
    
     /**
     * 
     * @param \PlanningBundle\Entity\Main\Planning $planning
     * @return $this
     */
    public function setLinkedPlannings( $plannings) 
    {
        $this->linkedPlannings = $plannings;
        return $this;
    }
    
    
    
    
    
    public function setParentPlanning(Planning $planning) 
    {
        $this->parentPlanning = $planning;
        return $this;
    }
    
    
    public function getParentPlanning() 
    {
        return $this->parentPlanning;
        
    }
    
    public function __toString() {
        return $this->task->getName() .' : '. $this->startDate->format('d-m-y H:i:s') .' => '.$this->endDate->format('d-m-y H:i:s') ;
    }
    
    /**
     * 
     * @return type
     */
    public function getInfo() {
        return $this->task->getName() .' : '. $this->startDate->format('d-m-y H:i:s') .' => '.$this->endDate->format('d-m-y H:i:s') . ' Acteur : ' . $this->getActor();
    }
}
