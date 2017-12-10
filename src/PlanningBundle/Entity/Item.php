<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="caption", type="string", length=255)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="desComm", type="string", length=255)
     */
    private $desComm;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;
    

    /**
     * One Item has One Family
     * @ORM\OneToOne(targetEntity="itemFamily")
     * @ORM\JoinColumn(name="family_id", referencedColumnName="id")
     */
    private $itemFamily;


    /**
     * One Item has One SubFamily
     * @ORM\OneToOne(targetEntity="itemSubFamily")
     * @ORM\JoinColumn(name="itemSubfamily_id", referencedColumnName="id")
     */

    private $itemSubFamily;


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
     * Set caption
     *
     * @param string $caption
     *
     * @return Item
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set desComm
     *
     * @param string $desComm
     *
     * @return Item
     */
    public function setDesComm($desComm)
    {
        $this->desComm = $desComm;

        return $this;
    }

    /**
     * Get desComm
     *
     * @return string
     */
    public function getDesComm()
    {
        return $this->desComm;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Item
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}
