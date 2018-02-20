<?php

namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\CompetenceRepository")
 */
class Competence
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
     * @ORM\Column(name="name", type="string", length=60, unique=true)
     */
    private $name;

    /**
     * Many Competence have One Actor
     * @ORM\ManyToOne(targetEntity="Actor", inversedBy="competence_actor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actor_competences_id", referencedColumnName="id")
     * })
     */
    private $actor_competences;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Competence
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set actorCompetences.
     *
     * @param \PlanningBundle\Entity\Main\Actor|null $actorCompetences
     *
     * @return Competence
     */
    public function setActorCompetences(\PlanningBundle\Entity\Main\Actor $actorCompetences = null)
    {
        $this->actor_competences = $actorCompetences;

        return $this;
    }

    /**
     * Get actorCompetences.
     *
     * @return \PlanningBundle\Entity\Main\Actor|null
     */
    public function getActorCompetences()
    {
        return $this->actor_competences;
    }
}
