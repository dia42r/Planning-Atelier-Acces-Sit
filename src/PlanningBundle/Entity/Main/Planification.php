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
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Actor")
     * @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     */
    private $actor;

    /**
     * @var \PlanningBundle\Entity\Customer\SaleDocumentLine
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Customer\SaleDocumentLine")
     * @ORM\JoinColumn(name="sale_document_line_id", referencedColumnName="id")
     */
    private $saleDocumentLine;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->saleDocumentLine = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \DateTime $endDate
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
     * @return \DateTime
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
     * Add actor.
     *
     * @param \PlanningBundle\Entity\Main\Actor $actor
     *
     * @return Planification
     */
    public function addActor(\PlanningBundle\Entity\Main\Actor $actor)
    {
        $this->actor[] = $actor;

        return $this;
    }

    /**
     * Remove actor.
     *
     * @param \PlanningBundle\Entity\Main\Actor $actor
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeActor(\PlanningBundle\Entity\Main\Actor $actor)
    {
        return $this->actor->removeElement($actor);
    }

    /**
     * Get actor.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Add saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine
     *
     * @return Planification
     */
    public function addSaleDocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine)
    {
        $this->saleDocumentLine[] = $saleDocumentLine;

        return $this;
    }

    /**
     * Remove saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSaleDocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine)
    {
        return $this->saleDocumentLine->removeElement($saleDocumentLine);
    }

    /**
     * Get saleDocumentLine.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaleDocumentLine()
    {
        return $this->saleDocumentLine;
    }
}
