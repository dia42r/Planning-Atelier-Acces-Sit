<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @ORM\Column(name="customerId", type="integer")
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", length=255)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="siren", type="string", length=255)
     */
    private $siren;

    /**
     * @var string
     *
     * @ORM\Column(name="mainDeliveryAddress1", type="string", length=255)
     */
    private $mainDeliveryAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="mainDeliveryAddress2", type="string", length=255)
     */
    private $mainDeliveryAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="mainDeliveryAddressCity", type="string", length=255)
     */
    private $mainDeliveryAddressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="mainDeliveryAddressZipCode", type="string", length=255)
     */
    private $mainDeliveryAddressZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mainDeliveryAddressState", type="string", length=255)
     */
    private $mainDeliveryAddressState;

    /**
     * @var string
     *
     * @ORM\Column(name="mainDeliveryAddressCountry", type="string", length=255)
     */
    private $mainDeliveryAddressCountry;



    /**
     * @var string
     *
     * @ORM\Column(name="mainInvoicingAddress1", type="string", length=255)
     */
    private $mainInvoicingAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="mainInvoicingAddress2", type="string", length=255)
     */
    private $mainInvoicingAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="mainInvoicingAddressCity", type="string", length=255)
     */
    private $mainInvoicingAddressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="mainInvoicingAddressZipCode", type="string", length=255)
     */
    private $mainInvoicingAddressZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mainInvoicingAddressState", type="string", length=255)
     */
    private $mainInvoicingAddressState;

    /**
     * @var string
     *
     * @ORM\Column(name="mainInvoicingAddressCountry", type="string", length=255)
     */
    private $mainInvoicingAddressCountry;



    /**
     * One Customer has many SaleDocument
     * @ORM\OneToMany(targetEntity="SaleDocument", mappedBy="customer")
     */
    private $saleDocuments;

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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Customer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set civility
     *
     * @param string $civility
     *
     * @return Customer
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Customer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set siren
     *
     * @param string $siren
     *
     * @return Customer
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;

        return $this;
    }

    /**
     * Get siren
     *
     * @return string
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * Set mainDeliveryAddress1
     *
     * @param string $mainDeliveryAddress1
     *
     * @return Customer
     */
    public function setMainDeliveryAddress1($mainDeliveryAddress1)
    {
        $this->mainDeliveryAddress1 = $mainDeliveryAddress1;

        return $this;
    }

    /**
     * Get mainDeliveryAddress1
     *
     * @return string
     */
    public function getMainDeliveryAddress1()
    {
        return $this->mainDeliveryAddress1;
    }

    /**
     * Set mainDeliveryAddress2
     *
     * @param string $mainDeliveryAddress2
     *
     * @return Customer
     */
    public function setMainDeliveryAddress2($mainDeliveryAddress2)
    {
        $this->mainDeliveryAddress2 = $mainDeliveryAddress2;

        return $this;
    }

    /**
     * Get mainDeliveryAddress2
     *
     * @return string
     */
    public function getMainDeliveryAddress2()
    {
        return $this->mainDeliveryAddress2;
    }

    /**
     * Set mainDeliveryAddressCity
     *
     * @param string $mainDeliveryAddressCity
     *
     * @return Customer
     */
    public function setMainDeliveryAddressCity($mainDeliveryAddressCity)
    {
        $this->mainDeliveryAddressCity = $mainDeliveryAddressCity;

        return $this;
    }

    /**
     * Get mainDeliveryAddressCity
     *
     * @return string
     */
    public function getMainDeliveryAddressCity()
    {
        return $this->mainDeliveryAddressCity;
    }

    /**
     * Set mainDeliveryAddressZipCode
     *
     * @param string $mainDeliveryAddressZipCode
     *
     * @return Customer
     */
    public function setMainDeliveryAddressZipCode($mainDeliveryAddressZipCode)
    {
        $this->mainDeliveryAddressZipCode = $mainDeliveryAddressZipCode;

        return $this;
    }

    /**
     * Get mainDeliveryAddressZipCode
     *
     * @return string
     */
    public function getMainDeliveryAddressZipCode()
    {
        return $this->mainDeliveryAddressZipCode;
    }

    /**
     * Set mainDeliveryAddressState
     *
     * @param string $mainDeliveryAddressState
     *
     * @return Customer
     */
    public function setMainDeliveryAddressState($mainDeliveryAddressState)
    {
        $this->mainDeliveryAddressState = $mainDeliveryAddressState;

        return $this;
    }

    /**
     * Get mainDeliveryAddressState
     *
     * @return string
     */
    public function getMainDeliveryAddressState()
    {
        return $this->mainDeliveryAddressState;
    }

    /**
     * Set mainDeliveryAddressCountry
     *
     * @param string $mainDeliveryAddressCountry
     *
     * @return Customer
     */
    public function setMainDeliveryAddressCountry($mainDeliveryAddressCountry)
    {
        $this->mainDeliveryAddressCountry = $mainDeliveryAddressCountry;

        return $this;
    }

    /**
     * Get mainDeliveryAddressCountry
     *
     * @return string
     */
    public function getMainDeliveryAddressCountry()
    {
        return $this->mainDeliveryAddressCountry;
    }

    /**
     * @return string
     */
    public function getMainInvoicingAddress1()
    {
        return $this->mainInvoicingAddress1;
    }

    /**
     * @param string $mainInvoicingAddress1
     * @return Customer
     */
    public function setMainInvoicingAddress1($mainInvoicingAddress1)
    {
        $this->mainInvoicingAddress1 = $mainInvoicingAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainInvoicingAddress2()
    {
        return $this->mainInvoicingAddress2;
    }

    /**
     * @param string $mainInvoicingAddress2
     * @return Customer
     */
    public function setMainInvoicingAddress2($mainInvoicingAddress2)
    {
        $this->mainInvoicingAddress2 = $mainInvoicingAddress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainInvoicingAddressCity()
    {
        return $this->mainInvoicingAddressCity;
    }

    /**
     * @param string $mainInvoicingAddressCity
     * @return Customer
     */
    public function setMainInvoicingAddressCity($mainInvoicingAddressCity)
    {
        $this->mainInvoicingAddressCity = $mainInvoicingAddressCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainInvoicingAddressZipCode()
    {
        return $this->mainInvoicingAddressZipCode;
    }

    /**
     * @param string $mainInvoicingAddressZipCode
     * @return Customer
     */
    public function setMainInvoicingAddressZipCode($mainInvoicingAddressZipCode)
    {
        $this->mainInvoicingAddressZipCode = $mainInvoicingAddressZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainInvoicingAddressState()
    {
        return $this->mainInvoicingAddressState;
    }

    /**
     * @param string $mainInvoicingAddressState
     * @return Customer
     */
    public function setMainInvoicingAddressState($mainInvoicingAddressState)
    {
        $this->mainInvoicingAddressState = $mainInvoicingAddressState;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainInvoicingAddressCountry()
    {
        return $this->mainInvoicingAddressCountry;
    }

    /**
     * @param string $mainInvoicingAddressCountry
     * @return Customer
     */
    public function setMainInvoicingAddressCountry($mainInvoicingAddressCountry)
    {
        $this->mainInvoicingAddressCountry = $mainInvoicingAddressCountry;
        return $this;
    }



}

