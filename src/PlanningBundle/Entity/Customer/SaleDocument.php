<?php

namespace PlanningBundle\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleDocument
 *
 * @ORM\Table(name="sale_document")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\SaleDocumentRepository")
 */
class SaleDocument
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="documentdate", type="datetime")
     */
    private $documentDate;

    /**
     * @var int
     *
     * @ORM\Column(name="documentnumber", type="string", length=255, unique=true)
     */
    private $documentNumber;

    /**
     * One SaleDocument has many SaleDocumentLines
     * @ORM\OneToMany(targetEntity="SaleDocumentLine", mappedBy="saleDocument")
     */
    private $saleDocumentLines;

    /**
     * Many SaleDocument have One Customer
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Customer\Customer", inversedBy="saleDocuments")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    /**
     * @ORM\Column(name="customerName",type="string")
     */
    private $customerName;


    /**
     * @ORM\Column(name="numberPrefix" , type="string" , length=20)
     */
    private $numberPrefix;

    /**
     * @return mixed
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix;
    }

    /**
     * @param mixed $numberPrefix
     */
    public function setNumberPrefix($numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }




    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40, nullable=true)
     */
    private $status;



    /**
     * @var string
     *
     * @ORM\Column(name="documentWishDate", type="date", nullable=true)
     */
    private $documentWishDate;


    /**
     * @return string
     */
    public function getDocumentValidDate()
    {
        return $this->documentValidDate;
    }

    /**
     * @param string $documentValidDate
     */
    public function setDocumentValidDate($documentValidDate)
    {
        $this->documentValidDate = $documentValidDate;
        return $this;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="documentValidDate", type="date", nullable=true)
     */
    private $documentValidDate;

    /**
     * @return string
     */
    public function getDocumentWishDate()
    {
        return $this->documentWishDate;
    }

    /**
     * @param string $documentWishDate
     */
    public function setDocumentWishDate($documentWishDate)
    {
        $this->documentWishDate = $documentWishDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getSaleDocumentLines()
    {
        return $this->saleDocumentLines;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }


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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set documentDate
     *
     * @param \DateTime $documentDate
     *
     * @return SaleDocument
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;

        return $this;
    }

    /**
     * Get documentDate
     *
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * Set documentNumber
     *
     * @param integer $documentNumber
     *
     * @return SaleDocument
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * Get documentNumber
     *
     * @return int
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->saleDocumentLines = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine
     *
     * @return SaleDocument
     */
    public function addSaleDocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine)
    {
        $this->saleDocumentLines[] = $saleDocumentLine;

        return $this;
    }

    /**
     * Remove saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSaleDocumentLine(\PlanningBundle\Entity\Customer\SaleDocumentLine $saleDocumentLine)
    {
        return $this->saleDocumentLines->removeElement($saleDocumentLine);
    }

    /**
     * Set customer.
     *
     * @param \PlanningBundle\Entity\Customer\Customer|null $customer
     *
     * @return SaleDocument
     */
    public function setCustomer(\PlanningBundle\Entity\Customer\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }
}
