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
     * @ORM\OneToMany(targetEntity="SaleDocumentLine", mappedBy="saledocument", cascade={"persist"})
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
     *
     * @ORM\Column(name="total_time", type="time", nullable=true)
     */
    private $totalTime;

    /**
     *
     * @ORM\Column(name="catEnd", type="boolean", nullable=false)
     */
    private $catEnd = false;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40, nullable=true)
     */
    private $status = 'Non planifié';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_bis", type="string", length=30, nullable=true)
     */
    private $statusBis;

    /**
     * @var string
     *
     * @ORM\Column(name="documentWishDate", type="date", nullable=true)
     */
    private $documentWishDate;


    /**
     * @ORM\Column(name="total_prev", type="string", type="time", nullable=true)
     */
    private $totalPrev;

    /**
     * @var string
     *
     * @ORM\Column(name="documentEndDateFabric", type="date", nullable=true)
     */
    private $documentEndDateFabric;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starting_date", type="datetime", nullable=true)
     */
    private $startingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;



    /**
     * @return string
     */
    public function getDocumentValidDate()
    {
        return $this->documentValidDate;
    }

    /**
     * @param string $documentValidDate
     * @return SaleDocument
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
     * @return null|string
     */
    public function getStatusBis()
    {
        return $this->statusBis;
    }

    /**
     * @param null|string $statusBis
     */
    public function setStatusBis( $statusBis)
    {
        $this->statusBis = $statusBis;
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
     * Set totalTime.
     *
     * @param \DateTime $totalTime
     *
     * @return SaleDocument
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * Get totalTime.
     *
     * @return \DateTime
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }



    /**
     * @return string
     */
    public function getDocumentEndDateFabric()
    {
        return $this->documentEndDateFabric;
    }

    /**
     * @param string $documentEndDateFabric
     * @return SaleDocument
     */
    public function setDocumentEndDateFabric( $documentEndDateFabric)
    {
        $this->documentEndDateFabric = $documentEndDateFabric;
        return $this;
    }

    /**
     * Set catEnd.
     *
     * @param bool $catEnd
     *
     * @return SaleDocument
     */
    public function setCatEnd($catEnd)
    {
        $this->catEnd = $catEnd;

        return $this;
    }

    /**
     * Get catEnd.
     *
     * @return bool
     */
    public function getCatEnd()
    {
        return $this->catEnd;
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
    public function getTotalPrev()
    {
        return $this->totalPrev;
    }

    /**
     * @param mixed $totalPrev
     * @return SaleDocument
     */
    public function setTotalPrev($totalPrev)
    {
        $this->totalPrev = $totalPrev;
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
