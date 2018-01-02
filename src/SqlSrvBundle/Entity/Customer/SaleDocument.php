<?php

namespace SqlSrvBundle\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleDocument
 *
 * @ORM\Table(name="sale_document")
 * @ORM\Entity(repositoryClass="SqlSrvBundle\Repository\SaleDocumentRepository")
 */
class SaleDocument
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
     * @var \DateTime
     *
     * @ORM\Column(name="documentDate", type="datetime")
     */
    private $documentDate;

    /**
     * @var int
     *
     * @ORM\Column(name="documentNumber", type="integer", unique=true)
     */
    private $documentNumber;

    /**
     * One SaleDocument has many SaleDocumentLines
     * @ORM\OneToMany(targetEntity="SqlSrvBundle\Entity\Customer\SaleDocumentLine", mappedBy="saleDocument")
     */
    private $saleDocumentLines;

    /**
     * Many SaleDocument have One Customer
     * @ORM\ManyToOne(targetEntity="SqlSrvBundle\Entity\Customer\Customer", inversedBy="saleDocuments")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40)
     */
    private $status;



    /**
     * @var string
     *
     * @ORM\Column(name="documentWishDate", type="date")
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
}

