<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningProductActor
 *
 * @ORM\Table(name="planning_product_actor")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\PlanningProductActorRepository")
 */
class PlanningProductActor
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
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(name="idPlannigTypeProduct", type="integer")
     */
    private $idPlannigTypeProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="earlyDate", type="string", length=255)
     */
    private $earlyDate;

    /**
     * @var string
     *
     * @ORM\Column(name="idFirstActor", type="string", length=30)
     */
    private $idFirstActor;

    /**
     * @var string
     *
     * @ORM\Column(name="priorityDate", type="string", length=255)
     */
    private $priorityDate;

    /**
     * @var string
     *
     * @ORM\Column(name="idPriorityActor", type="integer")
     */
    private $idPriorityActor;

    /**
     * @ORM\Column(name="estimatedTime", type="string", length=255)
     */
    private $estimatedTime;

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
     * Set earlyDate
     *
     * @param string $earlyDate
     *
     * @return PlanningProductActor
     */
    public function setEarlyDate($earlyDate)
    {
        $this->earlyDate = $earlyDate;

        return $this;
    }


    /**
     * Get earlyDate
     *
     * @return string
     */
    public function getEarlyDate()
    {
        return $this->earlyDate;
    }

    /**
     * Set idFirstActor
     *
     * @param string $idFirstActor
     *
     * @return PlanningProductActor
     */
    public function setIdFirstActor($idFirstActor)
    {
        $this->idFirstActor = $idFirstActor;

        return $this;
    }

    /**
     * Get idFirstActor
     *
     * @return string
     */
    public function getIdFirstActor()
    {
        return $this->idFirstActor;
    }

    /**
     * Set priorityDate
     *
     * @param string $priorityDate
     *
     * @return PlanningProductActor
     */
    public function setPriorityDate($priorityDate)
    {
        $this->priorityDate = $priorityDate;

        return $this;
    }

    /**
     * Get priorityDate
     *
     * @return string
     */
    public function getPriorityDate()
    {
        return $this->priorityDate;
    }

    /**
     * Set idPriorityActor
     *
     * @param string $idPriorityActor
     *
     * @return PlanningProductActor
     */
    public function setIdPriorityActor($idPriorityActor)
    {
        $this->idPriorityActor = $idPriorityActor;

        return $this;
    }

    /**
     * Get idPriorityActor
     *
     * @return string
     */
    public function getIdPriorityActor()
    {
        return $this->idPriorityActor;
    }

    /**
     * @return mixed
     */
    public function getIdPlannigTypeProduct()
    {
        return $this->idPlannigTypeProduct;
    }

    /**
     * @param mixed $idPlannigTypeProduct
     */
    public function setIdPlannigTypeProduct($idPlannigTypeProduct)
    {
        $this->idPlannigTypeProduct = $idPlannigTypeProduct;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }

    /**
     * @param mixed $estimatedTime
     */
    public function setEstimatedTime($estimatedTime)
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
