<?php
//
//namespace PlanningBundle\Entity\Main;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * Competence
// *
// * @ORM\Table(name="competence")
// * @ORM\Entity(repositoryClass="PlanningBundle\Repository\CompetenceRepository")
// */
//class Competence
//{
//    public function __construct()
//    {
//        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
//    }
//
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="id", type="integer")
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    private $id;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="name", type="string", length=60, unique=true)
//     */
//    private $name;
//
//    /**
//     * Many Competence have One Actor
//     * @ORM\OneToMany(targetEntity="Actor", mappedBy="competence_actor")
//     */
//    private $actor_competences;
//
//    /**
//     * Get id.
//     *
//     * @return int
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set name.
//     *
//     * @param string $name
//     *
//     * @return Competence
//     */
//    public function setName($name)
//    {
//        $this->name = $name;
//
//        return $this;
//    }
//
//    /**
//     * Get name.
//     *
//     * @return string
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//
//    public function __toString()
//    {
//        return $this->name;
//
//    }
//
//
//    /**
//     * Add actorCompetence.
//     *
//     * @param \PlanningBundle\Entity\Main\Actor $actorCompetence
//     *
//     * @return Competence
//     */
//    public function addActorCompetence(\PlanningBundle\Entity\Main\Actor $actorCompetence)
//    {
//        $this->actor_competences[] = $actorCompetence;
//
//        return $this;
//    }
//
//    /**
//     * Remove actorCompetence.
//     *
//     * @param \PlanningBundle\Entity\Main\Actor $actorCompetence
//     *
//     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
//     */
//    public function removeActorCompetence(\PlanningBundle\Entity\Main\Actor $actorCompetence)
//    {
//        return $this->actor_competences->removeElement($actorCompetence);
//    }
//
//    /**
//     * Get actorCompetences.
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getActorCompetences()
//    {
//        return $this->actor_competences;
//    }
//}

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

    public function __construct()
    {
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Actor", mappedBy="competence",)
     * @ORM\JoinTable(name="competence_actor")
     */
    private $actor;

    /**
     * @ORM\Column(type="integer",unique=true, nullable=false )
     */
    private $position;



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
     * Add actor.
     *
     * @param \PlanningBundle\Entity\Main\Actor $actor
     *
     * @return Competence
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

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
}