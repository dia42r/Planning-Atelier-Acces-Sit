<?php

namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Main
 *
 * @ORM\Table(name="actor_competence")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\MainRepository")
 */
class ActorCompetence
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var
     * @ORM\Column(name="degres", type="integer")
     *
     * @Assert\Range(
     *      min = 1,
     *      max = 4,
     *      minMessage = "You must be at least {{ limit }}cm tall to enter",
     *      maxMessage = "You cannot be taller than {{ limit }}cm to enter"
     * )
     */
    private $degres;

    /**
     * @var \PlanningBundle\Entity\Main\Actor
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Main\Actor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     * })
     */
    private $actor;

    /**
     * @var \PlanningBundle\Entity\Main\Competence
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Main\Competence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="competence_id", referencedColumnName="id")
     * })
     */
    private $competence;


    /**
     * @ORM\Column(name="date_dispo", type="datetime")
     */
    private $dateDispo;

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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return ActorCompetence
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set actor.
     *
     * @param \PlanningBundle\Entity\Main\Actor|null $actor
     *
     * @return ActorCompetence
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
     * Set competence.
     *
     * @param \PlanningBundle\Entity\Main\Competence|null $competence
     *
     * @return ActorCompetence
     */
    public function setCompetence(\PlanningBundle\Entity\Main\Competence $competence = null)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence.
     *
     * @return \PlanningBundle\Entity\Main\Competence|null
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @return mixed
     */
    public function getDegres()
    {
        return $this->degres;
    }

    /**
     * @param mixed $degres
     */
    public function setDegres($degres)
    {
        $this->degres = $degres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateDispo()
    {
        return $this->dateDispo;
    }

    /**
     * @param mixed $dateDispo
     */
    public function setDateDispo($dateDispo)
    {
        $this->dateDispo = $dateDispo;
        return $this;
    }
}
