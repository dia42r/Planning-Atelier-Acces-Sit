<?php

namespace PlanningBundle\Entity\EBP;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleDocument
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
     * @ORM\OneToMany(targetEntity="SaleDocumentLine", mappedBy="saleDocument", cascade={"persist"}, fetch="EAGER")
     */
        private $saleDocumentLines;

    /**
     * Many SaleDocument have One Customer
     * @ORM\ManyToOne(targetEntity="Customer", cascade={"persist"})
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
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40, nullable=true)
     */
    private $status = 'NON_PLANIFIE';

    /**
     * @var string
     *
     * @ORM\Column(name="documentWishDate", type="date", nullable=true)
     */
    private $documentWishDate;


    /**
     * @ORM\Column(name="cumul_duration", type="string", type="integer", nullable=true)
     */
    private $cumulDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date_estimated", type="datetime", nullable=true)
     */
    private $endDateEstimated;

    /**
     * @return string
     */
    public function getDocumentWishDate()
    {
        return $this->documentWishDate;
    }

    /**
     * @param string $documentWishDate
     * @return SaleDocument
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
     * @return SaleDocument
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
     * @return SaleDocument
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
     * @param \PlanningBundle\Entity\EBP\SaleDocumentLine $saleDocumentLine
     *
     * @return SaleDocument
     */
    public function addSaleDocumentLine(\PlanningBundle\Entity\EBP\SaleDocumentLine $saleDocumentLine)
    {
        $this->saleDocumentLines[] = $saleDocumentLine;

        return $this;
    }
    
    public function setSaleDocumentLines(array $saleDocumentLines) 
    {
        if (!empty($saleDocumentLines)) {
            foreach ($saleDocumentLines as $saleDocumentLine) {
                $this->addSaleDocumentLine($saleDocumentLine);
            }
        }
        
    }
    /**
     * Remove saleDocumentLine.
     *
     * @param \PlanningBundle\Entity\EBP\SaleDocumentLine $saleDocumentLine
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSaleDocumentLine(\PlanningBundle\Entity\EBP\SaleDocumentLine $saleDocumentLine)
    {
        return $this->saleDocumentLines->removeElement($saleDocumentLine);
    }

    /**
     * Set customer.
     *
     * @param \PlanningBundle\Entity\EBP\Customer|null $customer
     *
     * @return SaleDocument
     */
    public function setCustomer(\PlanningBundle\Entity\EBP\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDateEstimated()
    {
        return $this->endDateEstimated;
    }

    /**
     * @param string $endEstimatedDate
     * @return SaleDocument
     */
    public function setEndDateEstimated($date)
    {
        $this->endDateEstimated = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix;
    }

    /**
     * @param mixed $numberPrefix
     * @return SaleDocument
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
     * @return SaleDocument
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCumulDuration()
    {
        return $this->cumulDuration;
    }

    /**
     * @param mixed $cumulDuration
     * @return SaleDocument
     */
    public function setCumulDuration($duration)
    {
        $this->cumulDuration = $duration;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * @param \DateTime $startingDate
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }


}
