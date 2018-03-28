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
    public function __construct()
    {
        $this->competence = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Competence", inversedBy="actor")
     * @ORM\JoinTable(name="actor_competence")
     */
    private $competence;

    /**
     * @var array
     * @ORM\Column(type="array", nullable=true)
     */
    private $deg;

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }


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
     * Get enabled.
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Add competence.
     *
     * @param \PlanningBundle\Entity\Main\Competence $competence
     *
     * @return Actor
     */
    public function addCompetence(\PlanningBundle\Entity\Main\Competence $competence)
    {
        $this->competence[] = $competence;

        return $this;
    }

    /**
     * Remove competence.
     *
     * @param \PlanningBundle\Entity\Main\Competence $competence
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCompetence(\PlanningBundle\Entity\Main\Competence $competence)
    {
        return $this->competence->removeElement($competence);
    }

    /**
     * Get competence.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set deg
     *
     * @param array $deg
     *
     * @return Actor
     */
    public function setDeg($deg)
    {
        $this->deg = $deg;

        return $this;
    }

    /**
     * Get deg
     *
     * @return array
     */
    public function getDeg()
    {
        return $this->deg;
    }


    public function __toString()
    {
        return (string) $this->name;
    }

}
