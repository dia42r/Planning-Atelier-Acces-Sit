<?php
//
//namespace PlanningBundle\Entity\Main;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * Actor
// *
// * @ORM\Table(name="actor")
// * @ORM\Entity(repositoryClass="PlanningBundle\Repository\ActorRepository")
// */
//class Actor
//{
//    public function __construct()
//    {
//        $this->competence = new \Doctrine\Common\Collections\ArrayCollection();
//    }
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
//     * @ORM\Column(name="name", type="string", length=30)
//     */
//    private $name;
//
//    /**
//     * @var boolean
//     * @ORM\Column(type="boolean")
//     */
//    private $enabled = false;
//
//    /**
//     * One Actor has many Competences
//     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Main\Competence", mappedBy="actor_competences")
//     */
//    private $competence_actor;
//
//
//    /**
//     * @return bool
//     */
//    public function isEnabled()
//    {
//        return $this->enabled;
//    }
//
//    /**
//     * @param bool $enabled
//     */
//    public function setEnabled($enabled)
//    {
//        $this->enabled = $enabled;
//        return $this;
//    }
//
//
//    /**
//     * Get id
//     *
//     * @return int
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set name
//     *
//     * @param string $name
//     *
//     * @return Actor
//     */
//    public function setName($name)
//    {
//        $this->name = $name;
//
//        return $this;
//    }
//
//    /**
//     * Get name
//     *
//     * @return string
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//
//    /**
//     * Get enabled.
//     *
//     * @return bool
//     */
//    public function getEnabled()
//    {
//        return $this->enabled;
//    }
//
//
//    public function __toString()
//    {
//        return (string) $this->name;
//    }
//
//
//    /**
//     * Add competenceActor.
//     *
//     * @param \PlanningBundle\Entity\Main\Competence $competenceActor
//     *
//     * @return Actor
//     */
//    public function addCompetenceActor(\PlanningBundle\Entity\Main\Competence $competenceActor)
//    {
//        $this->competence_actor[] = $competenceActor;
//
//        return $this;
//    }
//
//    /**
//     * Remove competenceActor.
//     *
//     * @param \PlanningBundle\Entity\Main\Competence $competenceActor
//     *
//     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
//     */
//    public function removeCompetenceActor(\PlanningBundle\Entity\Main\Competence $competenceActor)
//    {
//        return $this->competence_actor->removeElement($competenceActor);
//    }
//
//    /**
//     * Get competenceActor.
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getCompetenceActor()
//    {
//        return $this->competence_actor;
//    }
//}

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
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\Competence",inversedBy="actor", cascade={"remove"})
     * @ORM\JoinTable(name="actor_competence")
     */
    private $competence;

    /**
     * @ORM\ManyToMany(targetEntity="PlanningBundle\Entity\Main\SousPlanification",mappedBy="actor")
     * @ORM\JoinTable(name="sousplanification_actor")
     */
    private $souplanif;


    public function __toString()
    {
        return (string) $this->name;
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
}
