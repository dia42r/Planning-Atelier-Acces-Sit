<?php

namespace PlanningBundle\Entity\EBP;

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
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="documentId", type="string", length=255, nullable=true)
     */
    private $documentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="realQuantity", type="integer", nullable=true)
     */
    private $realQuantity;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deliveryDate", type="datetime", nullable=true)
     */
    private $deliveryDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deliveryState", type="string", length=60, nullable=true)
     */
    private $deliveryState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=true)
     */
    private $status = "Non-planifié";

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_bis", type="string", length=30, nullable=true)
     */
    private $statusBis;

    /**
     * @var \PlanningBundle\Entity\EBP\Item
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\EBP\Item", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \PlanningBundle\Entity\EBP\SaleDocument
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\EBP\SaleDocument",inversedBy="saleDocumentLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="saleDocument_id", referencedColumnName="id")
     * })
     */
    private $saleDocument;

    /**
     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\Main\Planification",mappedBy="saleDocumentLine")
     * @ORM\JoinColumn(name="Planification_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $planif;


    /**
     *
     * @ORM\Column(name="total_time", type="time", nullable=true)
     */
    private $totalTime;


    /**
     *
     * @ORM\Column(name="total_prev", type="time", nullable=true)
     */
    private $totalPrev;

    /**
     * @var string
     *
     * @ORM\Column(name="documentWishDate", type="date", nullable=true)
     */
    private $documentWishDate;

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
     * @param string $id
     * @return SaleDocumentLine
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set documentId.
     *
     * @param string|null $documentId
     *
     * @return SaleDocumentLine
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = $documentId;

        return $this;
    }


    /**
     * Get documentId.
     *
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return SaleDocumentLine
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return SaleDocumentLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set realQuantity.
     *
     * @param int|null $realQuantity
     *
     * @return SaleDocumentLine
     */
    public function setRealquantity($realQuantity = null)
    {
        $this->realQuantity = $realQuantity;

        return $this;
    }

    /**
     * Get realquantity.
     *
     * @return int|null
     */
    public function getRealQuantity()
    {
        return $this->realQuantity;
    }

    /**
     * Set deliveryDate.
     *
     * @param \DateTime|null $deliveryDate
     *
     * @return SaleDocumentLine
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliverydate.
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set deliveryState.
     *
     * @param string|null $deliveryState
     *
     * @return SaleDocumentLine
     */
    public function setDeliveryState($deliveryState = null)
    {
        $this->deliveryState = $deliveryState;

        return $this;
    }

    /**
     * Get deliverystate.
     *
     * @return string|null
     */
    public function getDeliveryState()
    {
        return $this->deliveryState;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return SaleDocumentLine
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return SaleDocumentLine
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set item.
     *
     * @param \PlanningBundle\Entity\EBP\Item|null $item
     *
     * @return SaleDocumentLine
     */
    public function setItem(\PlanningBundle\Entity\EBP\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item.
     *
     * @return \PlanningBundle\Entity\EBP\Item|null
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set saledocument.
     *
     * @param \PlanningBundle\Entity\EBP\SaleDocument|null $saledocument
     *
     * @return SaleDocumentLine
     */
    public function setSaleDocument($saleDocument)
    {
        $this->saleDocument = $saleDocument;

        return $this;
    }

    /**
     * Get saledocument.
     *
     * @return \PlanningBundle\Entity\EBP\SaleDocument|null
     */
    public function getSaleDocument()
    {
        return $this->saleDocument;
    }

    /**
     * Set planif.
     *
     * @param \PlanningBundle\Entity\Main\Planification|null $planif
     *
     * @return SaleDocumentLine
     */
    public function setPlanif(\PlanningBundle\Entity\Main\Planification $planif = null)
    {
        $this->planif = $planif;

        return $this;
    }

    /**
     * Get planif.
     *
     * @return \PlanningBundle\Entity\Main\Planification|null
     */
    public function getPlanif()
    {
        return $this->planif;
    }

    /**
     * Set totalTime.
     *
     * @param \DateTime|null $totalTime
     *
     * @return SaleDocumentLine
     */
    public function setTotalTime($totalTime = null)
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * Get totalTime.
     *
     * @return \DateTime|null
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    public function getTotalPrev()
    {
        return $this->totalPrev;
    }


    public function setTotalPrev($totalPrev)
    {
        $this->totalPrev = $totalPrev;
        return $this;
    }


    /**
     * @return string
     */
    public function getDocumentWishDate(): string
    {
        return $this->documentWishDate;
    }


    /**
     * @param string $documentWishDate
     * @return SaleDocumentLine
     */
    public function setDocumentWishDate(string $documentWishDate)
    {
        $this->documentWishDate = $documentWishDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatusBis()
    {
        return $this->statusBis;
    }

    /**
     * @param null|string $statusBis
     * @return SaleDocumentLine
     */
    public function setStatusBis( $statusBis)
    {
        $this->statusBis = $statusBis;
        return $this;
    }


}
