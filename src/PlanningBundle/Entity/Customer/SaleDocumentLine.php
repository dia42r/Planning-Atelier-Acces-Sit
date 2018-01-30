<?php

namespace PlanningBundle\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleDocumentLine
 *
 * @ORM\Table(name="sale_document_line", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_5727BE815EB52FD5", columns={"documentId"})}, indexes={@ORM\Index(name="IDX_5727BE81DBBCE3DC", columns={"saleDocument_id"}), @ORM\Index(name="UNIQ_5727BE81126F525E", columns={"item_id"})})
 * @ORM\Entity(repositoryClass="SaleDocumentlineRepository")
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
    private $documentid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
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
    private $realquantity;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deliveryDate", type="datetime", nullable=true)
     */
    private $deliverydate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deliveryState", type="string", length=60, nullable=true)
     */
    private $deliverystate;

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
    private $status;

    /**
     * @var \PlanningBundle\Entity\Customer\Item
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Customer\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \PlanningBundle\Entity\Customer\SaleDocument
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Customer\SaleDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="saleDocument_id", referencedColumnName="id")
     * })
     */
    private $saledocument;



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
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }



    /**
     * Set documentid.
     *
     * @param string|null $documentid
     *
     * @return SaleDocumentLine
     */
    public function setDocumentid($documentid = null)
    {
        $this->documentid = $documentid;

        return $this;
    }

    /**
     * Get documentid.
     *
     * @return string|null
     */
    public function getDocumentid()
    {
        return $this->documentid;
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
     * Set realquantity.
     *
     * @param int|null $realquantity
     *
     * @return SaleDocumentLine
     */
    public function setRealquantity($realquantity = null)
    {
        $this->realquantity = $realquantity;

        return $this;
    }

    /**
     * Get realquantity.
     *
     * @return int|null
     */
    public function getRealquantity()
    {
        return $this->realquantity;
    }

    /**
     * Set deliverydate.
     *
     * @param \DateTime|null $deliverydate
     *
     * @return SaleDocumentLine
     */
    public function setDeliverydate($deliverydate = null)
    {
        $this->deliverydate = $deliverydate;

        return $this;
    }

    /**
     * Get deliverydate.
     *
     * @return \DateTime|null
     */
    public function getDeliverydate()
    {
        return $this->deliverydate;
    }

    /**
     * Set deliverystate.
     *
     * @param string|null $deliverystate
     *
     * @return SaleDocumentLine
     */
    public function setDeliverystate($deliverystate = null)
    {
        $this->deliverystate = $deliverystate;

        return $this;
    }

    /**
     * Get deliverystate.
     *
     * @return string|null
     */
    public function getDeliverystate()
    {
        return $this->deliverystate;
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
     * @param \PlanningBundle\Entity\Customer\Item|null $item
     *
     * @return SaleDocumentLine
     */
    public function setItem(\PlanningBundle\Entity\Customer\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item.
     *
     * @return \PlanningBundle\Entity\Customer\Item|null
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set saledocument.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocument|null $saledocument
     *
     * @return SaleDocumentLine
     */
    public function setSaledocument(\PlanningBundle\Entity\Customer\SaleDocument $saledocument = null)
    {
        $this->saledocument = $saledocument;

        return $this;
    }

    /**
     * Get saledocument.
     *
     * @return \PlanningBundle\Entity\Customer\SaleDocument|null
     */
    public function getSaledocument()
    {
        return $this->saledocument;
    }
}
