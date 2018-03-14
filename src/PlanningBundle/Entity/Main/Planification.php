<?php

namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planification
 *
 * @ORM\Table(name="main_planification")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\Main\PlanificationRepository")
 */
class Planification
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_planif", type="datetime")
     */
    private $datePlanif;

    /**
     * @var string
     *
     * @ORM\Column(name="competences", type="string", length=50)
     */
    private $competences;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_planif", type="time")
     */
    private $timePlanif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starting_date", type="datetime")
     */
    private $startingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var \PlanningBundle\Entity\Main\Actor
     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\Main\Actor")
     * @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     */
    private $actor;

    /**
     * @var \PlanningBundle\Entity\Customer\SaleDocumentLine
     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\Customer\SaleDocumentLine")
     * @ORM\JoinColumn(name="sale_document_line_id", referencedColumnName="id")
     */
    private $saleDocumentLine;


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
     * Set datePlanif.
     *
     * @param \DateTime $datePlanif
     *
     * @return Planification
     */
    public function setDatePlanif($datePlanif)
    {
        $this->datePlanif = $datePlanif;

        return $this;
    }

    /**
     * Get datePlanif.
     *
     * @return \DateTime
     */
    public function getDatePlanif()
    {
        return $this->datePlanif;
    }

    /**
     * Set competences.
     *
     * @param string $competences
     *
     * @return Planification
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;

        return $this;
    }

    /**
     * Get competences.
     *
     * @return string
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Set timePlanif.
     *
     * @param \DateTime $timePlanif
     *
     * @return Planification
     */
    public function setTimePlanif($timePlanif)
    {
        $this->timePlanif = $timePlanif;

        return $this;
    }

    /**
     * Get timePlanif.
     *
     * @return \DateTime
     */
    public function getTimePlanif()
    {
        return $this->timePlanif;
    }

    /**
     * Set startingDate.
     *
     * @param \DateTime $startingDate
     *
     * @return Planification
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;

        return $this;
    }

    /**
     * Get startingDate.
     *
     * @return \DateTime
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * Set endDate.
     *
     * @param string $endDate
     *
     * @return Planification
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set comment.
     *
     * @param string $comment
     *
     * @return Planification
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set actor.
     *
     * @param \PlanningBundle\Entity\Main\Actor|null $actor
     *
     * @return Planification
     */
    public function setActor(\PlanningBundle\Entity\Main\Actor $actor = null)
    {
        $this->actor = $actor;

        return $this;
    }

    /**
     * Get actor.
     *
     * @return \PlanningBundle\Entity\Main\Actor|null
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Set saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine|null $saleDocumentLine
     *
     * @return Planification
     */
    public function setSaleDocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine = null)
    {
        $this->saleDocumentLine = $saleDocumentLine;

        return $this;
    }

    /**
     * Get saleDocumentLine.
     *
     * @return \PlanningBundle\Entity\Customer\SaleDocumentLine|null
     */
    public function getSaleDocumentLine()
    {
        return $this->saleDocumentLine;
    }
}
