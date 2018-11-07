<?php


namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\TaskRepository")
 */
class Task
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
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Actor", mappedBy="task",)
     * @ORM\JoinTable(name="task_actor")
     */
    private $actor;

    
    /**
     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Main\Planning",mappedBy="task")
     */
    private $plannings;
    
    /**
     * @ORM\Column(type="integer",unique=true, nullable=false )
     */
    private $position;


    
    public function __construct()
    {
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plannings = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name.
     *
     * @param string $name
     *
     * @return Task
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
     * @return Actor
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
    

    public function addPlanning(\PlanningBundle\Entity\Main\Planning $planning) {
        return $this->planning[] = $planning;
    }
    
    
    
    /**
     * 
     * @param \PlanningBundle\Entity\Main\Planning $planning
     * @return type
     */
    public function removePlanning(Planning $planning) {
        return $this->planning->remove($planning);
    }
    
}