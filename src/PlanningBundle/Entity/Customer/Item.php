<?php

namespace PlanningBundle\Entity\Customer;

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
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;


    /**
     * One Item has One Family
     * @ORM\OneToOne(targetEntity="ItemFamily")
     * @ORM\JoinColumn(name="family_id", referencedColumnName="id")
     */
    private $itemFamily;

    /**
     * One Item has One SubFamily
     * @ORM\OneToOne(targetEntity="ItemSubFamily")
     * @ORM\JoinColumn(name="itemSubfamily_id", referencedColumnName="id")
     *
     */
    private $itemSubFamily;


    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Customer\SaleDocumentLine", mappedBy="item")
     */
    private $saledocumentLine;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->saledocumentLine = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set itemFamily.
     *
     * @param \PlanningBundle\Entity\Customer\ItemFamily|null $itemFamily
     *
     * @return Item
     */
    public function setItemFamily(\PlanningBundle\Entity\Customer\ItemFamily $itemFamily = null)
    {
        $this->itemFamily = $itemFamily;

        return $this;
    }

    /**
     * Get itemFamily.
     *
     * @return \PlanningBundle\Entity\Customer\ItemFamily|null
     */
    public function getItemFamily()
    {
        return $this->itemFamily;
    }

    /**
     * Set itemSubFamily.
     *
     * @param \PlanningBundle\Entity\Customer\ItemSubFamily|null $itemSubFamily
     *
     * @return Item
     */
    public function setItemSubFamily(\PlanningBundle\Entity\Customer\ItemSubFamily $itemSubFamily = null)
    {
        $this->itemSubFamily = $itemSubFamily;

        return $this;
    }

    /**
     * Get itemSubFamily.
     *
     * @return \PlanningBundle\Entity\Customer\ItemSubFamily|null
     */
    public function getItemSubFamily()
    {
        return $this->itemSubFamily;
    }

    /**
     * Add saledocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine $saledocumentLine
     *
     * @return Item
     */
    public function addSaledocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saledocumentLine)
    {
        $this->saledocumentLine[] = $saledocumentLine;

        return $this;
    }

    /**
     * Remove saledocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine $saledocumentLine
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSaledocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saledocumentLine)
    {
        return $this->saledocumentLine->removeElement($saledocumentLine);
    }

    /**
     * Get saledocumentLine.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaledocumentLine()
    {
        return $this->saledocumentLine;
    }
}
