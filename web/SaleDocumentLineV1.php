<?php
//
//namespace PlanningBundle\Entity\Customer;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * SaleDocumentLine
// *
// * @ORM\Table(name="sale_document_line")
// * @ORM\Entity(repositoryClass="PlanningBundle\Repository\SaleDocumentLineRepository")
// */
//class SaleDocumentLineV1
//{
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="id", type="string",length=255)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="NONE")
//     */
//    private $id;
//
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="documentId", type="string",length=255, unique=true, nullable=true)
//     */
//    private $documentId;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="description", type="string", length=255, nullable=true)
//     */
//    private $description;
//
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="quantity", type="integer")
//     */
//    private $quantity;
//
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="realQuantity", type="integer", nullable=true)
//     */
//    private $realQuantity;
//
//    /**
//     * @var \DateTime
//     *
//     * @ORM\Column(name="deliveryDate", type="datetime", nullable=true)
//     */
//    private $deliveryDate;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="deliveryState", type="string", length=60, nullable=true)
//     */
//    private $deliveryState;
//
//    /**
//     * Many SaleDocumentLines have One SaleDocument
//     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Customer\SaleDocument", inversedBy="saleDocumentLines")
//     * @ORM\JoinColumn(name="saleDocument_id", referencedColumnName="id")
//     */
//    private $saleDocument;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
//     */
//    private $comment;
//
//    /**
//     * One SaleDocumentLine has One Item
//     * @ORM\OneToOne(targetEntity="PlanningBundle\Entity\Customer\Item")
//     * @ORM\JoinColumn(name="item_id", referencedColumnName="id", unique=false, nullable=true)
//     */
//    private $item;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="status", type="string", length=30, nullable=true)
//     */
//    private $status;
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
//     * @param int $id
//     */
//    public function setId($id)
//    {
//        $this->id = $id;
//        return $this;
//    }
//
//
//    /**
//     * Set documentId
//     *
//     * @param integer $documentId
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setDocumentId($documentId)
//    {
//        $this->documentId = $documentId;
//
//        return $this;
//    }
//
//    /**
//     * Get documentId
//     *
//     * @return int
//     */
//    public function getDocumentId()
//    {
//        return $this->documentId;
//    }
//
//
//    /**
//     * Set description
//     *
//     * @param string $description
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setDescription($description)
//    {
//        $this->description = $description;
//
//        return $this;
//    }
//
//    /**
//     * Get description
//     *
//     * @return string
//     */
//    public function getDescription()
//    {
//        return $this->description;
//    }
//
//    /**
//     * Set quantity
//     *
//     * @param integer $quantity
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setQuantity($quantity)
//    {
//        $this->quantity = $quantity;
//
//        return $this;
//    }
//
//    /**
//     * Get quantity
//     *
//     * @return int
//     */
//    public function getQuantity()
//    {
//        return $this->quantity;
//    }
//
//    /**
//     * Set realQuantity
//     *
//     * @param integer $realQuantity
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setRealQuantity($realQuantity)
//    {
//        $this->realQuantity = $realQuantity;
//
//        return $this;
//    }
//
//    /**
//     * Get realQuantity
//     *
//     * @return int
//     */
//    public function getRealQuantity()
//    {
//        return $this->realQuantity;
//    }
//
//    /**
//     * Set deliveryDate
//     *
//     * @param \DateTime $deliveryDate
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setDeliveryDate($deliveryDate)
//    {
//        $this->deliveryDate = $deliveryDate;
//
//        return $this;
//    }
//
//    /**
//     * Get deliveryDate
//     *
//     * @return \DateTime
//     */
//    public function getDeliveryDate()
//    {
//        return $this->deliveryDate;
//    }
//
//    /**
//     * Set deliveryState
//     *
//     * @param string $deliveryState
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setDeliveryState($deliveryState)
//    {
//        $this->deliveryState = $deliveryState;
//
//        return $this;
//    }
//
//    /**
//     * Get deliveryState
//     *
//     * @return string
//     */
//    public function getDeliveryState()
//    {
//        return $this->deliveryState;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getSaleDocument()
//    {
//        return $this->saleDocument;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getItem()
//    {
//        return $this->item;
//    }
//
//    /**
//     * @return string
//     */
//    public function getStatus()
//    {
//        return $this->status;
//    }
//
//
//    /**
//     * @param string $status
//     */
//    public function setStatus($status)
//    {
//        $this->status = $status;
//        return $this;
//    }
//
//    /**
//     * @return string
//     */
//    public function getComment()
//    {
//        return $this->comment;
//    }
//
//    /**
//     * @param string $comment
//     */
//    public function setComment($comment)
//    {
//        $this->comment = $comment;
//        return $this;
//    }
//
//
//    /**
//     * Set item.
//     *
//     * @param \PlanningBundle\Entity\Customer\Item|null $item
//     *
//     * @return SaleDocumentLineV1
//     */
//    public function setItem( $item = null)
//    {
//        $this->item = $item;
//
//        return $this;
//    }
//
//    /**
//     * Set saleDocument.
//     *
//     * @param \PlanningBundle\Entity\Customer\SaleDocument|null $saleDocument
//     *
//     * @return string
//     */
//    public function setSaleDocument( $saleDocument = null)
//    {
//        $this->saleDocument = $saleDocument;
//
//        return $this;
//    }
//
//    public function __toString()
//    {
//       return $this->saleDocument ;
//
//        // TODO: Implement __toString() method.
//    }
//
//}
