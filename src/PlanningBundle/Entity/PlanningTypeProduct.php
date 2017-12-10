<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningTypeProduct
 *
 * @ORM\Table(name="planning_type_product")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\PlanningTypeProductRepository")
 */
class PlanningTypeProduct
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
     * @ORM\Column(name="referenceArticle",type="string", length=70)
     */
    private $referenceArticle;

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
     * @return PlanningTypeProduct
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
    public function getReferenceArticle()
    {
        return $this->referenceArticle;
    }

    /**
     * @param mixed $referenceArticle
     */
    public function setReferenceArticle($referenceArticle)
    {
        $this->referenceArticle = $referenceArticle;
        return $this;
    }
}
