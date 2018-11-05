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
     * @ORM\Column(name="date_planif", type="datetime", nullable=true)
     */
    private $datePlanif;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", nullable=true, length=255)
     */
    private $comment;

    /**
     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\EBP\SaleDocumentLine", inversedBy="planif" )
     * @ORM\JoinColumn(name="SaleDocumentLine_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $saleDocumentLine;

    /**
     * @var \PlanningBundle\Entity\Main\SousPlanification
     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Main\SousPlanification", mappedBy="planif")
     */
    private $sousPlanif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starting_date", type="datetime", nullable=true)
     */
    private $startingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;



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
     * Add sousPlanif.
     *
     * @param \PlanningBundle\Entity\Main\SousPlanification $sousPlanif
     *
     * @return Planification
     */
    public function addSousPlanif(\PlanningBundle\Entity\Main\SousPlanification $sousPlanif)
    {
        $this->sousPlanif[] = $sousPlanif;

        return $this;
    }

    /**
     * Remove sousPlanif.
     *
     * @param \PlanningBundle\Entity\Main\SousPlanification $sousPlanif
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSousPlanif(\PlanningBundle\Entity\Main\SousPlanification $sousPlanif)
    {
        return $this->sousPlanif->removeElement($sousPlanif);
    }

    /**
     * Get sousPlanif.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousPlanif()
    {
        return $this->sousPlanif;
    }

    /**
     * Set saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\EBP\SaleDocumentLine|null $saleDocumentLine
     *
     * @return Planification
     */
    public function setSaleDocumentLine(\PlanningBundle\Entity\EBP\SaleDocumentLine $saleDocumentLine = null)
    {
        $this->saleDocumentLine = $saleDocumentLine;

        return $this;
    }

    /**
     * Get saleDocumentLine.
     *
     * @return \PlanningBundle\Entity\EBP\SaleDocumentLine|null
     */
    public function getSaleDocumentLine()
    {
        return $this->saleDocumentLine;
    }
}
