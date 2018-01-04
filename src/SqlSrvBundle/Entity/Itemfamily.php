<?php

namespace SqlSrvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemfamily
 *
 * @ORM\Table(name="ItemFamily", indexes={@ORM\Index(name="ItemFamily_UniqueId_Index", columns={"UniqueId"})})
 * @ORM\Entity
 */
class Itemfamily
{
    /**
     * @var bool
     *
     * @ORM\Column(name="PurchaseBillOfQuantitiesProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $purchasebillofquantitiesprogramKeepactivefromquotetoorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="PurchaseUnitPriceProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $purchaseunitpriceprogramKeepactivefromquotetoorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="NotOnMarket", type="boolean", nullable=false)
     */
    private $notonmarket;

    /**
     * @var bool
     *
     * @ORM\Column(name="CreateCustomerProductInCustomerPark", type="boolean", nullable=false)
     */
    private $createcustomerproductincustomerpark;

    /**
     * @var bool
     *
     * @ORM\Column(name="StockBookingAllowed", type="boolean", nullable=false)
     */
    private $stockbookingallowed;

    /**
     * @var bool
     *
     * @ORM\Column(name="AutomaticStockBooking", type="boolean", nullable=false)
     */
    private $automaticstockbooking;

    /**
     * @var int
     *
     * @ORM\Column(name="TrackingMode", type="smallint", nullable=false)
     */
    private $trackingmode;

    /**
     * @var int
     *
     * @ORM\Column(name="LimitDateMode", type="smallint", nullable=false)
     */
    private $limitdatemode;

    /**
     * @var int
     *
     * @ORM\Column(name="LimitDateSafetyDelay", type="smallint", nullable=false)
     */
    private $limitdatesafetydelay;

    /**
     * @var int
     *
     * @ORM\Column(name="LimitDateSafetyDelayMode", type="smallint", nullable=false)
     */
    private $limitdatesafetydelaymode;

    /**
     * @var bool
     *
     * @ORM\Column(name="AllowNegativeStock", type="boolean", nullable=false)
     */
    private $allownegativestock;

    /**
     * @var int
     *
     * @ORM\Column(name="PriceDecimalNumber", type="smallint", nullable=false)
     */
    private $pricedecimalnumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="AllowPublishOnWeb", type="boolean", nullable=false)
     */
    private $allowpublishonweb;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsManagedByCountermark", type="boolean", nullable=false)
     */
    private $ismanagedbycountermark;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsCounterMarkForced", type="boolean", nullable=false)
     */
    private $iscountermarkforced;

    /**
     * @var string
     *
     * @ORM\Column(name="UniqueId", type="guid", nullable=false)
     */
    private $uniqueid;

    /**
     * @var bool
     *
     * @ORM\Column(name="BillOfQuantitiesProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $billofquantitiesprogramKeepactivefromquotetoorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="SaleUnitPriceProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $saleunitpriceprogramKeepactivefromquotetoorder;

    /**
     * @var string
     *
     * @ORM\Column(name="Caption", type="string", length=40, nullable=false)
     */
    private $caption;

    /**
     * @var bool
     *
     * @ORM\Column(name="ManageStock", type="boolean", nullable=false)
     */
    private $managestock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InterestRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $interestrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ChargeRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $chargerate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EcotaxId", type="string", length=8, nullable=true)
     */
    private $ecotaxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NotPrintable", type="smallint", nullable=true)
     */
    private $notprintable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NotIncluded", type="smallint", nullable=true)
     */
    private $notincluded;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IsFixedPrice", type="smallint", nullable=true)
     */
    private $isfixedprice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SupplierId", type="string", length=20, nullable=true)
     */
    private $supplierid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocationId", type="string", length=20, nullable=true)
     */
    private $locationid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sysCreatedDate", type="datetime", nullable=true)
     */
    private $syscreateddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysCreatedUser", type="string", length=255, nullable=true)
     */
    private $syscreateduser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sysModifiedDate", type="datetime", nullable=true)
     */
    private $sysmodifieddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysModifiedUser", type="string", length=255, nullable=true)
     */
    private $sysmodifieduser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesClear", type="string", length=0, nullable=true)
     */
    private $notesclear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Notes", type="string", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PurchaseBillOfQuantitiesProgram_Program", type="string", length=0, nullable=true)
     */
    private $purchasebillofquantitiesprogramProgram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SaleUnitPriceProgram_Program", type="string", length=0, nullable=true)
     */
    private $saleunitpriceprogramProgram;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sysRecordVersion", type="integer", nullable=true)
     */
    private $sysrecordversion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysRecordVersionId", type="guid", nullable=true)
     */
    private $sysrecordversionid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sysEditCounter", type="integer", nullable=true)
     */
    private $syseditcounter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StorehouseId", type="guid", nullable=true)
     */
    private $storehouseid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BillOfQuantitiesProgram_Program", type="string", length=0, nullable=true)
     */
    private $billofquantitiesprogramProgram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AnalyticAccounting_GridId", type="string", length=40, nullable=true)
     */
    private $analyticaccountingGridid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VatId", type="guid", nullable=true)
     */
    private $vatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainIntervener", type="string", length=20, nullable=true)
     */
    private $mainintervener;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GuaranteeTypeId", type="string", length=8, nullable=true)
     */
    private $guaranteetypeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EcotaxFurnitureId", type="string", length=11, nullable=true)
     */
    private $ecotaxfurnitureid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PurchaseUnitPriceProgram_Program", type="string", length=0, nullable=true)
     */
    private $purchaseunitpriceprogramProgram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StockBillOfQuantitiesProgram_Program", type="string", length=0, nullable=true)
     */
    private $stockbillofquantitiesprogramProgram;

    /**
     * @var bool
     *
     * @ORM\Column(name="StockBillOfQuantitiesProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $stockbillofquantitiesprogramKeepactivefromquotetoorder;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set purchasebillofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @param bool $purchasebillofquantitiesprogramKeepactivefromquotetoorder
     *
     * @return Itemfamily
     */
    public function setPurchasebillofquantitiesprogramKeepactivefromquotetoorder($purchasebillofquantitiesprogramKeepactivefromquotetoorder)
    {
        $this->purchasebillofquantitiesprogramKeepactivefromquotetoorder = $purchasebillofquantitiesprogramKeepactivefromquotetoorder;

        return $this;
    }

    /**
     * Get purchasebillofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @return bool
     */
    public function getPurchasebillofquantitiesprogramKeepactivefromquotetoorder()
    {
        return $this->purchasebillofquantitiesprogramKeepactivefromquotetoorder;
    }

    /**
     * Set purchaseunitpriceprogramKeepactivefromquotetoorder.
     *
     * @param bool $purchaseunitpriceprogramKeepactivefromquotetoorder
     *
     * @return Itemfamily
     */
    public function setPurchaseunitpriceprogramKeepactivefromquotetoorder($purchaseunitpriceprogramKeepactivefromquotetoorder)
    {
        $this->purchaseunitpriceprogramKeepactivefromquotetoorder = $purchaseunitpriceprogramKeepactivefromquotetoorder;

        return $this;
    }

    /**
     * Get purchaseunitpriceprogramKeepactivefromquotetoorder.
     *
     * @return bool
     */
    public function getPurchaseunitpriceprogramKeepactivefromquotetoorder()
    {
        return $this->purchaseunitpriceprogramKeepactivefromquotetoorder;
    }

    /**
     * Set notonmarket.
     *
     * @param bool $notonmarket
     *
     * @return Itemfamily
     */
    public function setNotonmarket($notonmarket)
    {
        $this->notonmarket = $notonmarket;

        return $this;
    }

    /**
     * Get notonmarket.
     *
     * @return bool
     */
    public function getNotonmarket()
    {
        return $this->notonmarket;
    }

    /**
     * Set createcustomerproductincustomerpark.
     *
     * @param bool $createcustomerproductincustomerpark
     *
     * @return Itemfamily
     */
    public function setCreatecustomerproductincustomerpark($createcustomerproductincustomerpark)
    {
        $this->createcustomerproductincustomerpark = $createcustomerproductincustomerpark;

        return $this;
    }

    /**
     * Get createcustomerproductincustomerpark.
     *
     * @return bool
     */
    public function getCreatecustomerproductincustomerpark()
    {
        return $this->createcustomerproductincustomerpark;
    }

    /**
     * Set stockbookingallowed.
     *
     * @param bool $stockbookingallowed
     *
     * @return Itemfamily
     */
    public function setStockbookingallowed($stockbookingallowed)
    {
        $this->stockbookingallowed = $stockbookingallowed;

        return $this;
    }

    /**
     * Get stockbookingallowed.
     *
     * @return bool
     */
    public function getStockbookingallowed()
    {
        return $this->stockbookingallowed;
    }

    /**
     * Set automaticstockbooking.
     *
     * @param bool $automaticstockbooking
     *
     * @return Itemfamily
     */
    public function setAutomaticstockbooking($automaticstockbooking)
    {
        $this->automaticstockbooking = $automaticstockbooking;

        return $this;
    }

    /**
     * Get automaticstockbooking.
     *
     * @return bool
     */
    public function getAutomaticstockbooking()
    {
        return $this->automaticstockbooking;
    }

    /**
     * Set trackingmode.
     *
     * @param int $trackingmode
     *
     * @return Itemfamily
     */
    public function setTrackingmode($trackingmode)
    {
        $this->trackingmode = $trackingmode;

        return $this;
    }

    /**
     * Get trackingmode.
     *
     * @return int
     */
    public function getTrackingmode()
    {
        return $this->trackingmode;
    }

    /**
     * Set limitdatemode.
     *
     * @param int $limitdatemode
     *
     * @return Itemfamily
     */
    public function setLimitdatemode($limitdatemode)
    {
        $this->limitdatemode = $limitdatemode;

        return $this;
    }

    /**
     * Get limitdatemode.
     *
     * @return int
     */
    public function getLimitdatemode()
    {
        return $this->limitdatemode;
    }

    /**
     * Set limitdatesafetydelay.
     *
     * @param int $limitdatesafetydelay
     *
     * @return Itemfamily
     */
    public function setLimitdatesafetydelay($limitdatesafetydelay)
    {
        $this->limitdatesafetydelay = $limitdatesafetydelay;

        return $this;
    }

    /**
     * Get limitdatesafetydelay.
     *
     * @return int
     */
    public function getLimitdatesafetydelay()
    {
        return $this->limitdatesafetydelay;
    }

    /**
     * Set limitdatesafetydelaymode.
     *
     * @param int $limitdatesafetydelaymode
     *
     * @return Itemfamily
     */
    public function setLimitdatesafetydelaymode($limitdatesafetydelaymode)
    {
        $this->limitdatesafetydelaymode = $limitdatesafetydelaymode;

        return $this;
    }

    /**
     * Get limitdatesafetydelaymode.
     *
     * @return int
     */
    public function getLimitdatesafetydelaymode()
    {
        return $this->limitdatesafetydelaymode;
    }

    /**
     * Set allownegativestock.
     *
     * @param bool $allownegativestock
     *
     * @return Itemfamily
     */
    public function setAllownegativestock($allownegativestock)
    {
        $this->allownegativestock = $allownegativestock;

        return $this;
    }

    /**
     * Get allownegativestock.
     *
     * @return bool
     */
    public function getAllownegativestock()
    {
        return $this->allownegativestock;
    }

    /**
     * Set pricedecimalnumber.
     *
     * @param int $pricedecimalnumber
     *
     * @return Itemfamily
     */
    public function setPricedecimalnumber($pricedecimalnumber)
    {
        $this->pricedecimalnumber = $pricedecimalnumber;

        return $this;
    }

    /**
     * Get pricedecimalnumber.
     *
     * @return int
     */
    public function getPricedecimalnumber()
    {
        return $this->pricedecimalnumber;
    }

    /**
     * Set allowpublishonweb.
     *
     * @param bool $allowpublishonweb
     *
     * @return Itemfamily
     */
    public function setAllowpublishonweb($allowpublishonweb)
    {
        $this->allowpublishonweb = $allowpublishonweb;

        return $this;
    }

    /**
     * Get allowpublishonweb.
     *
     * @return bool
     */
    public function getAllowpublishonweb()
    {
        return $this->allowpublishonweb;
    }

    /**
     * Set ismanagedbycountermark.
     *
     * @param bool $ismanagedbycountermark
     *
     * @return Itemfamily
     */
    public function setIsmanagedbycountermark($ismanagedbycountermark)
    {
        $this->ismanagedbycountermark = $ismanagedbycountermark;

        return $this;
    }

    /**
     * Get ismanagedbycountermark.
     *
     * @return bool
     */
    public function getIsmanagedbycountermark()
    {
        return $this->ismanagedbycountermark;
    }

    /**
     * Set iscountermarkforced.
     *
     * @param bool $iscountermarkforced
     *
     * @return Itemfamily
     */
    public function setIscountermarkforced($iscountermarkforced)
    {
        $this->iscountermarkforced = $iscountermarkforced;

        return $this;
    }

    /**
     * Get iscountermarkforced.
     *
     * @return bool
     */
    public function getIscountermarkforced()
    {
        return $this->iscountermarkforced;
    }

    /**
     * Set uniqueid.
     *
     * @param string $uniqueid
     *
     * @return Itemfamily
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;

        return $this;
    }

    /**
     * Get uniqueid.
     *
     * @return string
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set billofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @param bool $billofquantitiesprogramKeepactivefromquotetoorder
     *
     * @return Itemfamily
     */
    public function setBillofquantitiesprogramKeepactivefromquotetoorder($billofquantitiesprogramKeepactivefromquotetoorder)
    {
        $this->billofquantitiesprogramKeepactivefromquotetoorder = $billofquantitiesprogramKeepactivefromquotetoorder;

        return $this;
    }

    /**
     * Get billofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @return bool
     */
    public function getBillofquantitiesprogramKeepactivefromquotetoorder()
    {
        return $this->billofquantitiesprogramKeepactivefromquotetoorder;
    }

    /**
     * Set saleunitpriceprogramKeepactivefromquotetoorder.
     *
     * @param bool $saleunitpriceprogramKeepactivefromquotetoorder
     *
     * @return Itemfamily
     */
    public function setSaleunitpriceprogramKeepactivefromquotetoorder($saleunitpriceprogramKeepactivefromquotetoorder)
    {
        $this->saleunitpriceprogramKeepactivefromquotetoorder = $saleunitpriceprogramKeepactivefromquotetoorder;

        return $this;
    }

    /**
     * Get saleunitpriceprogramKeepactivefromquotetoorder.
     *
     * @return bool
     */
    public function getSaleunitpriceprogramKeepactivefromquotetoorder()
    {
        return $this->saleunitpriceprogramKeepactivefromquotetoorder;
    }

    /**
     * Set caption.
     *
     * @param string $caption
     *
     * @return Itemfamily
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set managestock.
     *
     * @param bool $managestock
     *
     * @return Itemfamily
     */
    public function setManagestock($managestock)
    {
        $this->managestock = $managestock;

        return $this;
    }

    /**
     * Get managestock.
     *
     * @return bool
     */
    public function getManagestock()
    {
        return $this->managestock;
    }

    /**
     * Set interestrate.
     *
     * @param string|null $interestrate
     *
     * @return Itemfamily
     */
    public function setInterestrate($interestrate = null)
    {
        $this->interestrate = $interestrate;

        return $this;
    }

    /**
     * Get interestrate.
     *
     * @return string|null
     */
    public function getInterestrate()
    {
        return $this->interestrate;
    }

    /**
     * Set chargerate.
     *
     * @param string|null $chargerate
     *
     * @return Itemfamily
     */
    public function setChargerate($chargerate = null)
    {
        $this->chargerate = $chargerate;

        return $this;
    }

    /**
     * Get chargerate.
     *
     * @return string|null
     */
    public function getChargerate()
    {
        return $this->chargerate;
    }

    /**
     * Set ecotaxid.
     *
     * @param string|null $ecotaxid
     *
     * @return Itemfamily
     */
    public function setEcotaxid($ecotaxid = null)
    {
        $this->ecotaxid = $ecotaxid;

        return $this;
    }

    /**
     * Get ecotaxid.
     *
     * @return string|null
     */
    public function getEcotaxid()
    {
        return $this->ecotaxid;
    }

    /**
     * Set notprintable.
     *
     * @param int|null $notprintable
     *
     * @return Itemfamily
     */
    public function setNotprintable($notprintable = null)
    {
        $this->notprintable = $notprintable;

        return $this;
    }

    /**
     * Get notprintable.
     *
     * @return int|null
     */
    public function getNotprintable()
    {
        return $this->notprintable;
    }

    /**
     * Set notincluded.
     *
     * @param int|null $notincluded
     *
     * @return Itemfamily
     */
    public function setNotincluded($notincluded = null)
    {
        $this->notincluded = $notincluded;

        return $this;
    }

    /**
     * Get notincluded.
     *
     * @return int|null
     */
    public function getNotincluded()
    {
        return $this->notincluded;
    }

    /**
     * Set isfixedprice.
     *
     * @param int|null $isfixedprice
     *
     * @return Itemfamily
     */
    public function setIsfixedprice($isfixedprice = null)
    {
        $this->isfixedprice = $isfixedprice;

        return $this;
    }

    /**
     * Get isfixedprice.
     *
     * @return int|null
     */
    public function getIsfixedprice()
    {
        return $this->isfixedprice;
    }

    /**
     * Set supplierid.
     *
     * @param string|null $supplierid
     *
     * @return Itemfamily
     */
    public function setSupplierid($supplierid = null)
    {
        $this->supplierid = $supplierid;

        return $this;
    }

    /**
     * Get supplierid.
     *
     * @return string|null
     */
    public function getSupplierid()
    {
        return $this->supplierid;
    }

    /**
     * Set locationid.
     *
     * @param string|null $locationid
     *
     * @return Itemfamily
     */
    public function setLocationid($locationid = null)
    {
        $this->locationid = $locationid;

        return $this;
    }

    /**
     * Get locationid.
     *
     * @return string|null
     */
    public function getLocationid()
    {
        return $this->locationid;
    }

    /**
     * Set syscreateddate.
     *
     * @param \DateTime|null $syscreateddate
     *
     * @return Itemfamily
     */
    public function setSyscreateddate($syscreateddate = null)
    {
        $this->syscreateddate = $syscreateddate;

        return $this;
    }

    /**
     * Get syscreateddate.
     *
     * @return \DateTime|null
     */
    public function getSyscreateddate()
    {
        return $this->syscreateddate;
    }

    /**
     * Set syscreateduser.
     *
     * @param string|null $syscreateduser
     *
     * @return Itemfamily
     */
    public function setSyscreateduser($syscreateduser = null)
    {
        $this->syscreateduser = $syscreateduser;

        return $this;
    }

    /**
     * Get syscreateduser.
     *
     * @return string|null
     */
    public function getSyscreateduser()
    {
        return $this->syscreateduser;
    }

    /**
     * Set sysmodifieddate.
     *
     * @param \DateTime|null $sysmodifieddate
     *
     * @return Itemfamily
     */
    public function setSysmodifieddate($sysmodifieddate = null)
    {
        $this->sysmodifieddate = $sysmodifieddate;

        return $this;
    }

    /**
     * Get sysmodifieddate.
     *
     * @return \DateTime|null
     */
    public function getSysmodifieddate()
    {
        return $this->sysmodifieddate;
    }

    /**
     * Set sysmodifieduser.
     *
     * @param string|null $sysmodifieduser
     *
     * @return Itemfamily
     */
    public function setSysmodifieduser($sysmodifieduser = null)
    {
        $this->sysmodifieduser = $sysmodifieduser;

        return $this;
    }

    /**
     * Get sysmodifieduser.
     *
     * @return string|null
     */
    public function getSysmodifieduser()
    {
        return $this->sysmodifieduser;
    }

    /**
     * Set notesclear.
     *
     * @param string|null $notesclear
     *
     * @return Itemfamily
     */
    public function setNotesclear($notesclear = null)
    {
        $this->notesclear = $notesclear;

        return $this;
    }

    /**
     * Get notesclear.
     *
     * @return string|null
     */
    public function getNotesclear()
    {
        return $this->notesclear;
    }

    /**
     * Set notes.
     *
     * @param string|null $notes
     *
     * @return Itemfamily
     */
    public function setNotes($notes = null)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes.
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set purchasebillofquantitiesprogramProgram.
     *
     * @param string|null $purchasebillofquantitiesprogramProgram
     *
     * @return Itemfamily
     */
    public function setPurchasebillofquantitiesprogramProgram($purchasebillofquantitiesprogramProgram = null)
    {
        $this->purchasebillofquantitiesprogramProgram = $purchasebillofquantitiesprogramProgram;

        return $this;
    }

    /**
     * Get purchasebillofquantitiesprogramProgram.
     *
     * @return string|null
     */
    public function getPurchasebillofquantitiesprogramProgram()
    {
        return $this->purchasebillofquantitiesprogramProgram;
    }

    /**
     * Set saleunitpriceprogramProgram.
     *
     * @param string|null $saleunitpriceprogramProgram
     *
     * @return Itemfamily
     */
    public function setSaleunitpriceprogramProgram($saleunitpriceprogramProgram = null)
    {
        $this->saleunitpriceprogramProgram = $saleunitpriceprogramProgram;

        return $this;
    }

    /**
     * Get saleunitpriceprogramProgram.
     *
     * @return string|null
     */
    public function getSaleunitpriceprogramProgram()
    {
        return $this->saleunitpriceprogramProgram;
    }

    /**
     * Set sysrecordversion.
     *
     * @param int|null $sysrecordversion
     *
     * @return Itemfamily
     */
    public function setSysrecordversion($sysrecordversion = null)
    {
        $this->sysrecordversion = $sysrecordversion;

        return $this;
    }

    /**
     * Get sysrecordversion.
     *
     * @return int|null
     */
    public function getSysrecordversion()
    {
        return $this->sysrecordversion;
    }

    /**
     * Set sysrecordversionid.
     *
     * @param string|null $sysrecordversionid
     *
     * @return Itemfamily
     */
    public function setSysrecordversionid($sysrecordversionid = null)
    {
        $this->sysrecordversionid = $sysrecordversionid;

        return $this;
    }

    /**
     * Get sysrecordversionid.
     *
     * @return string|null
     */
    public function getSysrecordversionid()
    {
        return $this->sysrecordversionid;
    }

    /**
     * Set syseditcounter.
     *
     * @param int|null $syseditcounter
     *
     * @return Itemfamily
     */
    public function setSyseditcounter($syseditcounter = null)
    {
        $this->syseditcounter = $syseditcounter;

        return $this;
    }

    /**
     * Get syseditcounter.
     *
     * @return int|null
     */
    public function getSyseditcounter()
    {
        return $this->syseditcounter;
    }

    /**
     * Set storehouseid.
     *
     * @param string|null $storehouseid
     *
     * @return Itemfamily
     */
    public function setStorehouseid($storehouseid = null)
    {
        $this->storehouseid = $storehouseid;

        return $this;
    }

    /**
     * Get storehouseid.
     *
     * @return string|null
     */
    public function getStorehouseid()
    {
        return $this->storehouseid;
    }

    /**
     * Set billofquantitiesprogramProgram.
     *
     * @param string|null $billofquantitiesprogramProgram
     *
     * @return Itemfamily
     */
    public function setBillofquantitiesprogramProgram($billofquantitiesprogramProgram = null)
    {
        $this->billofquantitiesprogramProgram = $billofquantitiesprogramProgram;

        return $this;
    }

    /**
     * Get billofquantitiesprogramProgram.
     *
     * @return string|null
     */
    public function getBillofquantitiesprogramProgram()
    {
        return $this->billofquantitiesprogramProgram;
    }

    /**
     * Set analyticaccountingGridid.
     *
     * @param string|null $analyticaccountingGridid
     *
     * @return Itemfamily
     */
    public function setAnalyticaccountingGridid($analyticaccountingGridid = null)
    {
        $this->analyticaccountingGridid = $analyticaccountingGridid;

        return $this;
    }

    /**
     * Get analyticaccountingGridid.
     *
     * @return string|null
     */
    public function getAnalyticaccountingGridid()
    {
        return $this->analyticaccountingGridid;
    }

    /**
     * Set vatid.
     *
     * @param string|null $vatid
     *
     * @return Itemfamily
     */
    public function setVatid($vatid = null)
    {
        $this->vatid = $vatid;

        return $this;
    }

    /**
     * Get vatid.
     *
     * @return string|null
     */
    public function getVatid()
    {
        return $this->vatid;
    }

    /**
     * Set mainintervener.
     *
     * @param string|null $mainintervener
     *
     * @return Itemfamily
     */
    public function setMainintervener($mainintervener = null)
    {
        $this->mainintervener = $mainintervener;

        return $this;
    }

    /**
     * Get mainintervener.
     *
     * @return string|null
     */
    public function getMainintervener()
    {
        return $this->mainintervener;
    }

    /**
     * Set guaranteetypeid.
     *
     * @param string|null $guaranteetypeid
     *
     * @return Itemfamily
     */
    public function setGuaranteetypeid($guaranteetypeid = null)
    {
        $this->guaranteetypeid = $guaranteetypeid;

        return $this;
    }

    /**
     * Get guaranteetypeid.
     *
     * @return string|null
     */
    public function getGuaranteetypeid()
    {
        return $this->guaranteetypeid;
    }

    /**
     * Set ecotaxfurnitureid.
     *
     * @param string|null $ecotaxfurnitureid
     *
     * @return Itemfamily
     */
    public function setEcotaxfurnitureid($ecotaxfurnitureid = null)
    {
        $this->ecotaxfurnitureid = $ecotaxfurnitureid;

        return $this;
    }

    /**
     * Get ecotaxfurnitureid.
     *
     * @return string|null
     */
    public function getEcotaxfurnitureid()
    {
        return $this->ecotaxfurnitureid;
    }

    /**
     * Set purchaseunitpriceprogramProgram.
     *
     * @param string|null $purchaseunitpriceprogramProgram
     *
     * @return Itemfamily
     */
    public function setPurchaseunitpriceprogramProgram($purchaseunitpriceprogramProgram = null)
    {
        $this->purchaseunitpriceprogramProgram = $purchaseunitpriceprogramProgram;

        return $this;
    }

    /**
     * Get purchaseunitpriceprogramProgram.
     *
     * @return string|null
     */
    public function getPurchaseunitpriceprogramProgram()
    {
        return $this->purchaseunitpriceprogramProgram;
    }

    /**
     * Set stockbillofquantitiesprogramProgram.
     *
     * @param string|null $stockbillofquantitiesprogramProgram
     *
     * @return Itemfamily
     */
    public function setStockbillofquantitiesprogramProgram($stockbillofquantitiesprogramProgram = null)
    {
        $this->stockbillofquantitiesprogramProgram = $stockbillofquantitiesprogramProgram;

        return $this;
    }

    /**
     * Get stockbillofquantitiesprogramProgram.
     *
     * @return string|null
     */
    public function getStockbillofquantitiesprogramProgram()
    {
        return $this->stockbillofquantitiesprogramProgram;
    }

    /**
     * Set stockbillofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @param bool $stockbillofquantitiesprogramKeepactivefromquotetoorder
     *
     * @return Itemfamily
     */
    public function setStockbillofquantitiesprogramKeepactivefromquotetoorder($stockbillofquantitiesprogramKeepactivefromquotetoorder)
    {
        $this->stockbillofquantitiesprogramKeepactivefromquotetoorder = $stockbillofquantitiesprogramKeepactivefromquotetoorder;

        return $this;
    }

    /**
     * Get stockbillofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @return bool
     */
    public function getStockbillofquantitiesprogramKeepactivefromquotetoorder()
    {
        return $this->stockbillofquantitiesprogramKeepactivefromquotetoorder;
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
}
