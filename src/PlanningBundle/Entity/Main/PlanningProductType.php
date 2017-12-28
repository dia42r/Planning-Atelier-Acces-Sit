<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningTypeProduct
 *
 * @ORM\Table(name="planning_type_product")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\PlanningProductTypeRepository")
 */
class PlanningProductType
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
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\ItemCommand", inversedBy="referenceArticle")
     * @ORM\Column(name="itemCommand",type="string", length=70)
     */
    private $itemCommand;

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
     * @return PlanningProductType
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
     * @return mixed
     */
    public function getItemCommand()
    {
        return $this->itemCommand;
    }

    /**
     * @param mixed $itemCommand
     */
    public function setItemCommand($itemCommand)
    {
        $this->itemCommand = $itemCommand;
        return $this;
    }


}

