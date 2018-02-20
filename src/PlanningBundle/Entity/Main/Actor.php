<?php

namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Table(name="actor")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\ActorRepository")
 */
class Actor
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
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=50)
     */
    private $job;

    /**
     * One Actor has many Competences
     * @ORM\OneToMany(targetEntity="Competence", mappedBy="actor_competences")
     */
    private $competence_actor;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Actor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return Actor
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->competence_actor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add competenceActor.
     *
     * @param \PlanningBundle\Entity\Main\Competence $competenceActor
     *
     * @return Actor
     */
    public function addCompetenceActor(\PlanningBundle\Entity\Main\Competence $competenceActor)
    {
        $this->competence_actor[] = $competenceActor;

        return $this;
    }

    /**
     * Remove competenceActor.
     *
     * @param \PlanningBundle\Entity\Main\Competence $competenceActor
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCompetenceActor(\PlanningBundle\Entity\Main\Competence $competenceActor)
    {
        return $this->competence_actor->removeElement($competenceActor);
    }

    /**
     * Get competenceActor.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetenceActor()
    {
        return $this->competence_actor;
    }
}
