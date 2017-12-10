<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleDocumentLine
 *
 * @ORM\Table(name="sale_document_line")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\SaleDocumentLineRepository")
 */
class SaleDocumentLine
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
     * @var int
     *
     * @ORM\Column(name="documentId", type="integer", unique=true)
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="realQuantity", type="integer")
     */
    private $realQuantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deliveryDate", type="datetime")
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryState", type="string", length=255)
     */
    private $deliveryState;


    /**
     * Many SaleDocumentLines have One SaleDocument.
     * @ORM\ManyToOne(targetEntity="SaleDocument", inversedBy="saleDocumentLines")
     * @ORM\JoinColumn(name="saleDocument_id", referencedColumnName="id")
     */
    private $saleDocument;


    /**
     * One SaleDocumentLine has One Item
     * @ORM\OneToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;


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
     * Set documentId
     *
     * @param integer $documentId
     *
     * @return SaleDocumentLine
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Get documentId
     *
     * @return int
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SaleDocumentLine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return SaleDocumentLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set realQuantity
     *
     * @param integer $realQuantity
     *
     * @return SaleDocumentLine
     */
    public function setRealQuantity($realQuantity)
    {
        $this->realQuantity = $realQuantity;

        return $this;
    }

    /**
     * Get realQuantity
     *
     * @return int
     */
    public function getRealQuantity()
    {
        return $this->realQuantity;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return SaleDocumentLine
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set deliveryState
     *
     * @param string $deliveryState
     *
     * @return SaleDocumentLine
     */
    public function setDeliveryState($deliveryState)
    {
        $this->deliveryState = $deliveryState;

        return $this;
    }

    /**
     * Get deliveryState
     *
     * @return string
     */
    public function getDeliveryState()
    {
        return $this->deliveryState;
    }
}

