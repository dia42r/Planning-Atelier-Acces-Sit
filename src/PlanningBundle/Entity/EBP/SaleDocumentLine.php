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
     * @ORM\Column(name="saleDocumentNumber", type="string", length=255, nullable=true)
     */
    private $saleDocumentNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="float", nullable=false)
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
    private $status = "NON_PLANIFIE";


    /**
     * @var \PlanningBundle\Entity\EBP\Item
     *
     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\EBP\Item", mappedBy="SaleDocumentLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \PlanningBundle\Entity\EBP\SaleDocument
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\EBP\SaleDocument",inversedBy="saleDocumentLines",cascade={"persist"})))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="saleDocument_id", referencedColumnName="id")
     * })
     */
    private $saleDocument;

    /**
     * @ORM\OneToMany(targetEntity="PlanningBundle\Entity\Main\Planning",mappedBy="saleDocumentLine")
     */
    private $plannings;


    /**
     *
     * @ORM\Column(name="cumul_duration", type="integer", nullable=true)
     */
    private $cumulDuration;
    
    /**
     *
     * @ORM\Column(name="end_date_estimated", type="datetime", nullable=true)
     */
    private $endDateEstimated;


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
     * @var string
     *
     * @ORM\Column(name="unitId", type="string", nullable=true)
     */
    private $unitId;

    
    
    public function __construct() {
        $this->plannings = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getPlannings() {
        return $this->plannings;
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
    public function setSaleDocumentNumber($documentId = null)
    {
        $this->saleDocumentNumber = $documentId;

        return $this;
    }


    /**
     * Get documentId.
     *
     * @return string|null
     */
    public function getSaleDocumentNumber()
    {
        return $this->saleDocumentNumber;
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
     * @return Item
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
    public function setSaleDocument(\PlanningBundle\Entity\EBP\SaleDocument $saleDocument)
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
     * 
     * @return string
     */
    public function getUnitId() {
        return $this->unitId;
    }
    
    
    /**
     * 
     * @param type $unitId
     * @return $this
     */
    public function setUnitId($unitId) {
        $this->unitId = $unitId;
        return $this;
    }

   
    /**
     * 
     * @param type $unitId
     * @return $this
     */
    public function getDocumentNumber() {
        return $this->saleDocumentNumber;
    }
    
    
    /**
     * 
     * @return type
     */
    public function getCumulDuration() 
    {
        return $this->cumulDuration;
        
    }
    
    

    /**
     * 
     * @param type $duration
     * @return $this
     */
    public function setCumulDuration($duration) 
    {
        $this->cumulDuration = $duration;
        return $this;
    }
    
    
    /**
     * 
     * @return type
     */
    public function getEndDateEstimated() 
    {
        return $this->endDateEstimated;
    }
    
    
    /**
     * 
     * @param type $date
     * @return $this
     */
    public function setEndDateEstimated($date) 
    {
        $this->endDateEstimated = $date;
        return $this;
    }
    
    public function __toString() {
        return $this->saleDocumentNumber .' '. $this->description ;
    }

}
