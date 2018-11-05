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
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Task",inversedBy="actor")
     * @ORM\JoinTable(name="task_actor")
     */
    private $task;

    /**
     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Main\Planning",mappedBy="actor")
     */
    private $planning;

    
    /**
     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Main\Disponibilite", mappedBy="actor")
     * 
     */
    private $disponibilites;
    
    
    public function __construct()
    {
        $this->task = new \Doctrine\Common\Collections\ArrayCollection();
        $this->disponibilites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    /**
     * Get id.
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
     * @return Actor
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
     * Set enabled.
     *
     * @param bool $enabled
     *
     * @return Actor
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled.
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Add Task.
     *
     * @param \PlanningBundle\Entity\Main\Task $task
     *
     * @return Actor
     */
    public function addTask(\PlanningBundle\Entity\Main\Task $task)
    {
        $this->task[] = $task;

        return $this;
    }

    /**
     * Remove Task.
     *
     * @param \PlanningBundle\Entity\Main\Task $task
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTask(\PlanningBundle\Entity\Main\Task $task)
    {
        return $this->task->removeElement($task);
    }

    /**
     * Get Task.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTask()
    {
        return $this->task;
    }

    public function getPlanning()
    {
        return $this->planning;
    }
    
    public function setPlanning(\PlanningBundle\Entity\Main\Planning $planning) {
        $this->planning = $planning;
        return $this;
    }

    public function __toString()
    {
        return (string) $this->name;
    }


}
