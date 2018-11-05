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
    private $status = "Non-planifié";

    
    
    public function __construct() {
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
    
    
    public function setSaleDocumentLine( $saleDocumentLine) {
        
        $this->saleDocumentLine = $saleDocumentLine;
        return $this;
    }
    
    public function getSaleDocumentLine() {
        return $this->saleDocumentLine;
    }
    
    
    public function setTask($task) {
        $this->task = $task;
        return $this;
    }
    
    public function getTask() {
        return $this->task;
    }
    
    public function setStatus(String $status) {
        $this->status = $status;
        return $this;
    }
    
    public function getStatus() {
        return $this->status;
        
    }
    
}
