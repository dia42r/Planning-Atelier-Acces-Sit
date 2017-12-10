<?php

namespace PlanningBundle\Entity;

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
     * @ORM\OneToMany(targetEntity="SaleDocumentLine", mappedBy="saleDocument")
     */
    private $saleDocumentLines;


    /**
     * Many SaleDocument have One Customer.
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="saleDocuments")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

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

