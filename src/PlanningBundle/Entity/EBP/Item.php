<?php

namespace PlanningBundle\Entity\EBP;

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
     * @ORM\Column(name="id", type="string", unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="desComm", type="text", nullable=true)
     */
    private $desComm;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;



    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Set id.
     *
     * @param string $id
     *
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set caption.
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
     * Get caption.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set desComm.
     *
     * @param string|null $desComm
     *
     * @return Item
     */
    public function setDesComm($desComm = null)
    {
        $this->desComm = $desComm;

        return $this;
    }

    /**
     * Get desComm.
     *
     * @return string|null
     */
    public function getDesComm()
    {
        return $this->desComm;
    }

    /**
     * Set note.
     *
     * @param string|null $note
     *
     * @return Item
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }



}
