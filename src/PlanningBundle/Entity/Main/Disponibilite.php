<?php

namespace PlanningBundle\Entity\Main;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilite
 *
 * @ORM\Table(name="disponibilite")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\Main\DisponibiliteRepository")
 */
class Disponibilite
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreHeure", type="integer")
     */
    private $nbreHeure;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDispo", type="boolean")
     */
    private $isDispo;
    
    
     /**
     * Many Dispos have One Actor
     * @ORM\ManyToOne(targetEntity="Actor", inversedBy="disponibilites")
     * @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     */
    private $actor;


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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Disponibilite
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbreHeure.
     *
     * @param int $nbreHeure
     *
     * @return Disponibilite
     */
    public function setNbreHeure($nbreHeure)
    {
        $this->nbreHeure = $nbreHeure;

        return $this;
    }

    /**
     * Get nbreHeure.
     *
     * @return int
     */
    public function getNbreHeure()
    {
        return $this->nbreHeure;
    }

    /**
     * Set isDispo.
     *
     * @param bool $isDispo
     *
     * @return Disponibilite
     */
    public function setIsDispo($isDispo)
    {
        $this->isDispo = $isDispo;

        return $this;
    }

    /**
     * Get isDispo.
     *
     * @return bool
     */
    public function getIsDispo()
    {
        return $this->isDispo;
    }
    
    public function getActor() {
        return $this->actor;
    }
    
    
    function setActor(\PlanningBundle\Entity\Main\Actor $actor) {
        $this->actor = $actor;
        return $this;
    }
}
