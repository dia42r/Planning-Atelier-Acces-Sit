<?php

namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousPlanification
 *
 * @ORM\Table(name="main_sous_planification")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\Main\SousPlanificationRepository")
 */
class SousPlanification
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
     * @ORM\Column(name="time_previs", type="time")
     */
    private $timePrevis;



    /**
     * @var \PlanningBundle\Entity\Main\Actor
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Actor", inversedBy="souplanif", fetch="EAGER")
     * @ORM\JoinTable(name="sousplanification_actor")
     */
    private $actor;


    /**
     * @var \PlanningBundle\Entity\Main\Planification
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Main\Planification",inversedBy="sousPlanif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planif_id", referencedColumnName="id")
     * })
     */
    private $planif;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set competences.
     *
     * @param string $competences
     *
     * @return SousPlanification
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
     * @return SousPlanification
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
     * @return SousPlanification
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
     * @return SousPlanification
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
     * Add actor.
     *
     * @param \PlanningBundle\Entity\Main\Actor $actor
     *
     * @return SousPlanification
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
     * Set planif.
     *
     * @param \PlanningBundle\Entity\Main\Planification|null $planif
     *
     * @return SousPlanification
     */
    public function setPlanif(\PlanningBundle\Entity\Main\Planification $planif = null)
    {
        $this->planif = $planif;

        return $this;
    }

    /**
     * Get planif.
     *
     * @return \PlanningBundle\Entity\Main\Planification|null
     */
    public function getPlanif()
    {
        return $this->planif;
    }

    /**
     * Set timePrevis.
     *
     * @param \DateTime $timePrevis
     *
     * @return SousPlanification
     */
    public function setTimePrevis($timePrevis)
    {
        $this->timePrevis = $timePrevis;

        return $this;
    }

    /**
     * Get timePrevis.
     *
     * @return \DateTime
     */
    public function getTimePrevis()
    {
        return $this->timePrevis;
    }
}
