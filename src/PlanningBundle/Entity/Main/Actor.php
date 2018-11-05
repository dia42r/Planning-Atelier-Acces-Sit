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
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Competence",inversedBy="actor")
     * @ORM\JoinTable(name="competence_actor")
     */
    private $competence;

    /**
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\SousPlanification",mappedBy="actor")
     */
    private $souplanif;

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
     * Add souplanif.
     *
     * @param \PlanningBundle\Entity\Main\SousPlanification $souplanif
     *
     * @return Actor
     */
    public function addSouplanif(\PlanningBundle\Entity\Main\SousPlanification $souplanif)
    {
        $this->souplanif[] = $souplanif;

        return $this;
    }

    /**
     * Remove souplanif.
     *
     * @param \PlanningBundle\Entity\Main\SousPlanification $souplanif
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSouplanif(\PlanningBundle\Entity\Main\SousPlanification $souplanif)
    {
        return $this->souplanif->removeElement($souplanif);
    }

    /**
     * Get souplanif.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSouplanif()
    {
        return $this->souplanif;
    }

    public function __toString()
    {
        return (string) $this->name;
    }


}
