<?php

namespace SqlSrvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saledocumentline
 *
 * @ORM\Table(name="SaleDocumentLine", indexes={@ORM\Index(name="SaleDocumentLineDocumentIndex", columns={"DocumentId", "LineOrder"}), @ORM\Index(name="SaleDocumentLineItemIdIndex", columns={"ItemId"}), @ORM\Index(name="SaleDocumentLineDealIdIndex", columns={"DealId"}), @ORM\Index(name="SaleDocumentLineParentLineIdIndex", columns={"ParentLineId"})})
 * @ORM\Entity(repositoryClass="SqlSrvBundle\Repository\SaleDocumentLineRepository")
 */
class Saledocumentline
{
    /**
     * @var bool
     *
     * @ORM\Column(name="CreateMaintenanceContract", type="boolean", nullable=false)
     */
    private $createmaintenancecontract;

    /**
     * @var bool
     *
     * @ORM\Column(name="CreateCustomerProductInCustomerPark", type="boolean", nullable=false)
     */
    private $createcustomerproductincustomerpark;

    /**
     * @var int
     *
     * @ORM\Column(name="DoNotCreateMovement", type="smallint", nullable=false)
     */
    private $donotcreatemovement;

    /**
     * @var bool
     *
     * @ORM\Column(name="Booked", type="boolean", nullable=false)
     */
    private $booked;

    /**
     * @var bool
     *
     * @ORM\Column(name="StockBookingAllowed", type="boolean", nullable=false)
     */
    private $stockbookingallowed;

    /**
     * @var bool
     *
     * @ORM\Column(name="UnitPriceProgram_IsActive", type="boolean", nullable=false)
     */
    private $unitpriceprogramIsactive;

    /**
     * @var bool
     *
     * @ORM\Column(name="UnitPriceProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $unitpriceprogramKeepactivefromquotetoorder;

    /**
     * @var int
     *
     * @ORM\Column(name="NumberOfPackage", type="integer", nullable=false)
     */
    private $numberofpackage;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsCustomNumberOfPackage", type="boolean", nullable=false)
     */
    private $iscustomnumberofpackage;

    /**
     * @var bool
     *
     * @ORM\Column(name="HasAnalyticAffectations", type="boolean", nullable=false)
     */
    private $hasanalyticaffectations;

    /**
     * @var bool
     *
     * @ORM\Column(name="QuantityDecreaseByFreeQuantity", type="boolean", nullable=false)
     */
    private $quantitydecreasebyfreequantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="ManageStock", type="boolean", nullable=false)
     */
    private $managestock;

    /**
     * @var int
     *
     * @ORM\Column(name="NomenclatureLevel", type="integer", nullable=false)
     */
    private $nomenclaturelevel;

    /**
     * @var int
     *
     * @ORM\Column(name="IsPrintable", type="smallint", nullable=false)
     */
    private $isprintable;

    /**
     * @var int
     *
     * @ORM\Column(name="QuantityDecimalNumber", type="smallint", nullable=false)
     */
    private $quantitydecimalnumber;

    /**
     * @var int
     *
     * @ORM\Column(name="PricesDecimalNumber", type="smallint", nullable=false)
     */
    private $pricesdecimalnumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsManagedByCountermark", type="boolean", nullable=false)
     */
    private $ismanagedbycountermark;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsCountermarkInitiated", type="boolean", nullable=false)
     */
    private $iscountermarkinitiated;

    /**
     * @var string
     *
     * @ORM\Column(name="Volume", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalVolume", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalvolume;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitecotaxamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitecotaxamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxamountvatincluded;

    /**
     * @var bool
     *
     * @ORM\Column(name="HasTrackingDispatch", type="boolean", nullable=false)
     */
    private $hastrackingdispatch;

    /**
     * @var string
     *
     * @ORM\Column(name="Weight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWeight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalweight;

    /**
     * @var int
     *
     * @ORM\Column(name="PhaseLevel", type="integer", nullable=false)
     */
    private $phaselevel;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderedQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $orderedquantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FreePercentage", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $freepercentage;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatIncludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatincludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatExcludedWithDiscountAndFinancialDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatexcludedwithdiscountandfinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatIncludedWithDiscountAndFinancialDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatincludedwithdiscountandfinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts0_UnitDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts0Unitdiscountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts0_UnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts0Unitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts0_UnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts0Unitdiscountamountvatincluded;

    /**
     * @var int
     *
     * @ORM\Column(name="NumberOfItemByPackage", type="integer", nullable=false)
     */
    private $numberofitembypackage;

    /**
     * @var string
     *
     * @ORM\Column(name="NetWeight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netweight;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalNetWeight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalnetweight;

    /**
     * @var bool
     *
     * @ORM\Column(name="UseComponentVat", type="boolean", nullable=false)
     */
    private $usecomponentvat;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts0_CurrencyUnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts0Currencyunitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts0_CurrencyUnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts0Currencyunitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts1_UnitDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts1Unitdiscountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts1_UnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts1Unitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts1_UnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts1Unitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts2_CurrencyUnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts2Currencyunitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts2_CurrencyUnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts2Currencyunitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatExcludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatexcludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="RealNetAmountVatIncludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realnetamountvatincludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="NetPriceVatExcludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netpricevatexcludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="NetPriceVatIncludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netpricevatincludedwithparentdiscount;

    /**
     * @var bool
     *
     * @ORM\Column(name="NotIncluded", type="boolean", nullable=false)
     */
    private $notincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts1_CurrencyUnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts1Currencyunitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts1_CurrencyUnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts1Currencyunitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts2_UnitDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts2Unitdiscountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts2_UnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts2Unitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="Discounts2_UnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discounts2Unitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes0_TaxValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes0Taxvalue;

    /**
     * @var bool
     *
     * @ORM\Column(name="OtherTaxes0_SubjectToVat", type="boolean", nullable=false)
     */
    private $othertaxes0Subjecttovat;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes0_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes0Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes0_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes0Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes1_TaxValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes1Taxvalue;

    /**
     * @var bool
     *
     * @ORM\Column(name="OtherTaxes1_SubjectToVat", type="boolean", nullable=false)
     */
    private $othertaxes1Subjecttovat;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes1_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes1Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes1_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes1Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes2_TaxValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes2Taxvalue;

    /**
     * @var bool
     *
     * @ORM\Column(name="OtherTaxes2_SubjectToVat", type="boolean", nullable=false)
     */
    private $othertaxes2Subjecttovat;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes2_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes2Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes2_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes2Baseamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsPriceListApplied", type="boolean", nullable=false)
     */
    private $ispricelistapplied;

    /**
     * @var bool
     *
     * @ORM\Column(name="CanApplyPriceListOnComponent", type="boolean", nullable=false)
     */
    private $canapplypricelistoncomponent;

    /**
     * @var string
     *
     * @ORM\Column(name="DispatchedAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $dispatchedamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="DispatchedAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $dispatchedamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $reamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetPriceVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetpricevatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetPriceVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetpricevatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetPriceVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetpricevatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetPriceVatIncludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetpricevatincludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetAmountVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetamountvatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetAmountVatIncludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetamountvatincludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatIncludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatincludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatExcludedWithDiscountAndFinancialDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatIncludedWithDiscountAndFinancialDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatincludedwithdiscountandfinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatExcludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatexcludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRealNetAmountVatIncludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyrealnetamountvatincludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetPriceVatExcludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetpricevatexcludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyNetPriceVatIncludedWithParentDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencynetpricevatincludedwithparentdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="SalePriceVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepricevatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="SalePriceVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepricevatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="InterestRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $interestrate;

    /**
     * @var string
     *
     * @ORM\Column(name="InterestAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $interestamount;

    /**
     * @var string
     *
     * @ORM\Column(name="NetInterestRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netinterestrate;

    /**
     * @var string
     *
     * @ORM\Column(name="NetInterestAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netinterestamount;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $brandrate;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalInterestAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalinterestamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="UsePumpForReturn", type="boolean", nullable=false)
     */
    private $usepumpforreturn;

    /**
     * @var string
     *
     * @ORM\Column(name="ReturnUnitCostPrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $returnunitcostprice;

    /**
     * @var string
     *
     * @ORM\Column(name="ReturnCostPrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $returncostprice;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsHumanService", type="boolean", nullable=false)
     */
    private $ishumanservice;

    /**
     * @var bool
     *
     * @ORM\Column(name="InterventionDurationEqualQuantity", type="boolean", nullable=false)
     */
    private $interventiondurationequalquantity;

    /**
     * @var int
     *
     * @ORM\Column(name="GrossInterestRateCalculationType", type="smallint", nullable=false)
     */
    private $grossinterestratecalculationtype;

    /**
     * @var string
     *
     * @ORM\Column(name="GrossInterestAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $grossinterestamount;

    /**
     * @var string
     *
     * @ORM\Column(name="GrossInterestRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $grossinterestrate;

    /**
     * @var string
     *
     * @ORM\Column(name="GrossInterestBase", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $grossinterestbase;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencySalePriceVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencysalepricevatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencySalePriceVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencysalepricevatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="RemainingQuantityToInvoice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $remainingquantitytoinvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="ReturnedQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $returnedquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="ReturnedQuantityByPreviousCreditMemo", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $returnedquantitybypreviouscreditmemo;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes0_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes0Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes0_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes0Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes0_CurrencyTaxValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes0Currencytaxvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes1_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes1Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes1_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes1Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes1_CurrencyTaxValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes1Currencytaxvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes2_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes2Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes2_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes2Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxes2_CurrencyTaxValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxes2Currencytaxvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyUnitEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyunitecotaxamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyUnitEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyunitecotaxamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxamountvatincluded;

    /**
     * @var bool
     *
     * @ORM\Column(name="MustPartiallyDeliverCommercialNomenclature", type="boolean", nullable=false)
     */
    private $mustpartiallydelivercommercialnomenclature;

    /**
     * @var int
     *
     * @ORM\Column(name="Location_MultiLocationMode", type="smallint", nullable=false)
     */
    private $locationMultilocationmode;

    /**
     * @var string
     *
     * @ORM\Column(name="RemainingQuantityToDeliver", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $remainingquantitytodeliver;

    /**
     * @var bool
     *
     * @ORM\Column(name="BillOfQuantitiesProgram_IsActive", type="boolean", nullable=false)
     */
    private $billofquantitiesprogramIsactive;

    /**
     * @var bool
     *
     * @ORM\Column(name="BillOfQuantitiesProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $billofquantitiesprogramKeepactivefromquotetoorder;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitEcotaxFurnitureAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitecotaxfurnitureamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitEcotaxFurnitureAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitecotaxfurnitureamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxFurnitureAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxfurnitureamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxFurnitureAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxfurnitureamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyUnitEcotaxFurnitureAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyunitecotaxfurnitureamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyUnitEcotaxFurnitureAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyunitecotaxfurnitureamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxFurnitureAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxfurnitureamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxFurnitureAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxfurnitureamountvatincluded;

    /**
     * @var bool
     *
     * @ORM\Column(name="IncludeEcotaxFurnitureInDueAmount", type="boolean", nullable=false)
     */
    private $includeecotaxfurnitureindueamount;

    /**
     * @var string
     * @ORM\Column(name="DocumentId", type="guid", nullable=false)
     */
    private $documentid;

    /**
     * @var int
     *
     * @ORM\Column(name="LineType", type="smallint", nullable=false)
     */
    private $linetype;

    /**
     * @var int
     *
     * @ORM\Column(name="LineOrder", type="integer", nullable=false)
     */
    private $lineorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsReferencedItem", type="boolean", nullable=false)
     */
    private $isreferenceditem;

    /**
     * @var string
     *
     * @ORM\Column(name="Quantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="RealQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realquantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsNumberSetManually", type="boolean", nullable=false)
     */
    private $isnumbersetmanually;

    /**
     * @var string
     *
     * @ORM\Column(name="PurchasePrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $purchaseprice;

    /**
     * @var string
     *
     * @ORM\Column(name="ChargeRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $chargerate;

    /**
     * @var string
     *
     * @ORM\Column(name="ChargeAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $chargeamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CostPrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $costprice;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitdiscountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $unitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyTotalUnitDiscountAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencytotalunitdiscountamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyTotalUnitDiscountAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencytotalunitdiscountamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totaldiscountrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsNetPriceWithFullDecimals", type="boolean", nullable=false)
     */
    private $isnetpricewithfulldecimals;

    /**
     * @var string
     *
     * @ORM\Column(name="NetPriceVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netpricevatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="NetPriceVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netpricevatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="NetPriceVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netpricevatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="NetPriceVatIncludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netpricevatincludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="NetAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="NetAmountVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netamountvatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="NetAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="NetAmountVatIncludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netamountvatincludedwithdiscount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EcotaxId", type="string", length=8, nullable=true)
     */
    private $ecotaxid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UnitId", type="string", length=4, nullable=true)
     */
    private $unitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StorehouseId", type="guid", nullable=true)
     */
    private $storehouseid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="StockMovementId", type="integer", nullable=true)
     */
    private $stockmovementid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=0, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescriptionClear", type="string", length=0, nullable=true)
     */
    private $descriptionclear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ItemId", type="string", length=40, nullable=true)
     */
    private $itemid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ParentLineId", type="guid", nullable=true)
     */
    private $parentlineid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TopParentLineId", type="guid", nullable=true)
     */
    private $topparentlineid;

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
     * @var int|null
     *
     * @ORM\Column(name="AnalyticPlanItemId", type="integer", nullable=true)
     */
    private $analyticplanitemid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UnitPriceProgram_Program", type="string", length=0, nullable=true)
     */
    private $unitpriceprogramProgram;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VatMode", type="smallint", nullable=true)
     */
    private $vatmode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MaintenanceContractId", type="string", length=8, nullable=true)
     */
    private $maintenancecontractid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GuaranteeTypeId", type="string", length=8, nullable=true)
     */
    private $guaranteetypeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IncidentId", type="string", length=8, nullable=true)
     */
    private $incidentid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ReturnState", type="smallint", nullable=true)
     */
    private $returnstate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BillOfQuantitiesProgram_Program", type="string", length=0, nullable=true)
     */
    private $billofquantitiesprogramProgram;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sysEditCounter", type="integer", nullable=true)
     */
    private $syseditcounter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Location_LocationId", type="string", length=20, nullable=true)
     */
    private $locationLocationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColleagueId", type="string", length=20, nullable=true)
     */
    private $colleagueid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IsFixedPrice", type="smallint", nullable=true)
     */
    private $isfixedprice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ItemReference", type="string", length=30, nullable=true)
     */
    private $itemreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes2_TaxUnitId", type="string", length=4, nullable=true)
     */
    private $othertaxes2Taxunitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DealId", type="string", length=10, nullable=true)
     */
    private $dealid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes1_TaxUnitId", type="string", length=4, nullable=true)
     */
    private $othertaxes1Taxunitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes2_Id", type="guid", nullable=true)
     */
    private $othertaxes2Id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OtherTaxes2_CalculationBase", type="smallint", nullable=true)
     */
    private $othertaxes2Calculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes0_TaxUnitId", type="string", length=4, nullable=true)
     */
    private $othertaxes0Taxunitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes1_Id", type="guid", nullable=true)
     */
    private $othertaxes1Id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OtherTaxes1_CalculationBase", type="smallint", nullable=true)
     */
    private $othertaxes1Calculationbase;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Discounts2_DiscountType", type="smallint", nullable=true)
     */
    private $discounts2Discounttype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes0_Id", type="guid", nullable=true)
     */
    private $othertaxes0Id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OtherTaxes0_CalculationBase", type="smallint", nullable=true)
     */
    private $othertaxes0Calculationbase;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Discounts1_DiscountType", type="smallint", nullable=true)
     */
    private $discounts1Discounttype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NomenclatureCalculationType", type="smallint", nullable=true)
     */
    private $nomenclaturecalculationtype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Discounts0_DiscountType", type="smallint", nullable=true)
     */
    private $discounts0Discounttype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveredQuantity", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $deliveredquantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Numbering", type="string", length=50, nullable=true)
     */
    private $numbering;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WeightUnitId", type="string", length=4, nullable=true)
     */
    private $weightunitid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LimitDate", type="datetime", nullable=true)
     */
    private $limitdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VatId", type="guid", nullable=true)
     */
    private $vatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $vatamount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DeliveryDate", type="datetime", nullable=true)
     */
    private $deliverydate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DeliveryState", type="smallint", nullable=true)
     */
    private $deliverystate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VolumeUnitId", type="string", length=4, nullable=true)
     */
    private $volumeunitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TrackingNumber", type="string", length=40, nullable=true)
     */
    private $trackingnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Duration", type="string", length=13, nullable=true)
     */
    private $duration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PurchaseDeliveryAddressType", type="smallint", nullable=true)
     */
    private $purchasedeliveryaddresstype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LinkedLinesIds", type="string", length=0, nullable=true)
     */
    private $linkedlinesids;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LinkType", type="smallint", nullable=true)
     */
    private $linktype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Account", type="string", length=20, nullable=true)
     */
    private $account;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EcotaxFurnitureId", type="string", length=11, nullable=true)
     */
    private $ecotaxfurnitureid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CustomerProductIds", type="string", length=0, nullable=true)
     */
    private $customerproductids;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SupplierId", type="string", length=20, nullable=true)
     */
    private $supplierid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CreatedMaintenanceContractId", type="string", length=8, nullable=true)
     */
    private $createdmaintenancecontractid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RangeItemId", type="string", length=40, nullable=true)
     */
    private $rangeitemid;

    /**
     * @var string
     *
     * @ORM\Column(name="PurchasePricePercentage", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $purchasepricepercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes0_SubTaxId", type="guid", nullable=true)
     */
    private $othertaxes0Subtaxid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes1_SubTaxId", type="guid", nullable=true)
     */
    private $othertaxes1Subtaxid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OtherTaxes2_SubTaxId", type="guid", nullable=true)
     */
    private $othertaxes2Subtaxid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IgnoreManualPriceSetForMultiLinePriceList", type="boolean", nullable=true)
     */
    private $ignoremanualpricesetformultilinepricelist;

    /**
     * @var bool
     *
     * @ORM\Column(name="IntrastatExcluded", type="boolean", nullable=false)
     */
    private $intrastatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RoundId", type="guid", nullable=true)
     */
    private $roundid;

    /**
     * @var string
     *
     * @ORM\Column(name="CostPricePercentage", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $costpricepercentage;

    /**
     * @var string
     *
     * @ORM\Column(name="SalePriceVatExcludedPercentage", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepricevatexcludedpercentage;

    /**
     * @var string
     *
     * @ORM\Column(name="SalePriceVatIncludedPercentage", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepricevatincludedpercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SupplierReference", type="string", length=30, nullable=true)
     */
    private $supplierreference;

    /**
     * @var string
     *
     * @ORM\Column(name="NetBrandRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netbrandrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="FixedQuantity", type="boolean", nullable=false)
     */
    private $fixedquantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsCommercial", type="boolean", nullable=false)
     */
    private $iscommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set createmaintenancecontract.
     *
     * @param bool $createmaintenancecontract
     *
     * @return Saledocumentline
     */
    public function setCreatemaintenancecontract($createmaintenancecontract)
    {
        $this->createmaintenancecontract = $createmaintenancecontract;

        return $this;
    }

    /**
     * Get createmaintenancecontract.
     *
     * @return bool
     */
    public function getCreatemaintenancecontract()
    {
        return $this->createmaintenancecontract;
    }

    /**
     * Set createcustomerproductincustomerpark.
     *
     * @param bool $createcustomerproductincustomerpark
     *
     * @return Saledocumentline
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
     * Set donotcreatemovement.
     *
     * @param int $donotcreatemovement
     *
     * @return Saledocumentline
     */
    public function setDonotcreatemovement($donotcreatemovement)
    {
        $this->donotcreatemovement = $donotcreatemovement;

        return $this;
    }

    /**
     * Get donotcreatemovement.
     *
     * @return int
     */
    public function getDonotcreatemovement()
    {
        return $this->donotcreatemovement;
    }

    /**
     * Set booked.
     *
     * @param bool $booked
     *
     * @return Saledocumentline
     */
    public function setBooked($booked)
    {
        $this->booked = $booked;

        return $this;
    }

    /**
     * Get booked.
     *
     * @return bool
     */
    public function getBooked()
    {
        return $this->booked;
    }

    /**
     * Set stockbookingallowed.
     *
     * @param bool $stockbookingallowed
     *
     * @return Saledocumentline
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
     * Set unitpriceprogramIsactive.
     *
     * @param bool $unitpriceprogramIsactive
     *
     * @return Saledocumentline
     */
    public function setUnitpriceprogramIsactive($unitpriceprogramIsactive)
    {
        $this->unitpriceprogramIsactive = $unitpriceprogramIsactive;

        return $this;
    }

    /**
     * Get unitpriceprogramIsactive.
     *
     * @return bool
     */
    public function getUnitpriceprogramIsactive()
    {
        return $this->unitpriceprogramIsactive;
    }

    /**
     * Set unitpriceprogramKeepactivefromquotetoorder.
     *
     * @param bool $unitpriceprogramKeepactivefromquotetoorder
     *
     * @return Saledocumentline
     */
    public function setUnitpriceprogramKeepactivefromquotetoorder($unitpriceprogramKeepactivefromquotetoorder)
    {
        $this->unitpriceprogramKeepactivefromquotetoorder = $unitpriceprogramKeepactivefromquotetoorder;

        return $this;
    }

    /**
     * Get unitpriceprogramKeepactivefromquotetoorder.
     *
     * @return bool
     */
    public function getUnitpriceprogramKeepactivefromquotetoorder()
    {
        return $this->unitpriceprogramKeepactivefromquotetoorder;
    }

    /**
     * Set numberofpackage.
     *
     * @param int $numberofpackage
     *
     * @return Saledocumentline
     */
    public function setNumberofpackage($numberofpackage)
    {
        $this->numberofpackage = $numberofpackage;

        return $this;
    }

    /**
     * Get numberofpackage.
     *
     * @return int
     */
    public function getNumberofpackage()
    {
        return $this->numberofpackage;
    }

    /**
     * Set iscustomnumberofpackage.
     *
     * @param bool $iscustomnumberofpackage
     *
     * @return Saledocumentline
     */
    public function setIscustomnumberofpackage($iscustomnumberofpackage)
    {
        $this->iscustomnumberofpackage = $iscustomnumberofpackage;

        return $this;
    }

    /**
     * Get iscustomnumberofpackage.
     *
     * @return bool
     */
    public function getIscustomnumberofpackage()
    {
        return $this->iscustomnumberofpackage;
    }

    /**
     * Set hasanalyticaffectations.
     *
     * @param bool $hasanalyticaffectations
     *
     * @return Saledocumentline
     */
    public function setHasanalyticaffectations($hasanalyticaffectations)
    {
        $this->hasanalyticaffectations = $hasanalyticaffectations;

        return $this;
    }

    /**
     * Get hasanalyticaffectations.
     *
     * @return bool
     */
    public function getHasanalyticaffectations()
    {
        return $this->hasanalyticaffectations;
    }

    /**
     * Set quantitydecreasebyfreequantity.
     *
     * @param bool $quantitydecreasebyfreequantity
     *
     * @return Saledocumentline
     */
    public function setQuantitydecreasebyfreequantity($quantitydecreasebyfreequantity)
    {
        $this->quantitydecreasebyfreequantity = $quantitydecreasebyfreequantity;

        return $this;
    }

    /**
     * Get quantitydecreasebyfreequantity.
     *
     * @return bool
     */
    public function getQuantitydecreasebyfreequantity()
    {
        return $this->quantitydecreasebyfreequantity;
    }

    /**
     * Set managestock.
     *
     * @param bool $managestock
     *
     * @return Saledocumentline
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
     * Set nomenclaturelevel.
     *
     * @param int $nomenclaturelevel
     *
     * @return Saledocumentline
     */
    public function setNomenclaturelevel($nomenclaturelevel)
    {
        $this->nomenclaturelevel = $nomenclaturelevel;

        return $this;
    }

    /**
     * Get nomenclaturelevel.
     *
     * @return int
     */
    public function getNomenclaturelevel()
    {
        return $this->nomenclaturelevel;
    }

    /**
     * Set isprintable.
     *
     * @param int $isprintable
     *
     * @return Saledocumentline
     */
    public function setIsprintable($isprintable)
    {
        $this->isprintable = $isprintable;

        return $this;
    }

    /**
     * Get isprintable.
     *
     * @return int
     */
    public function getIsprintable()
    {
        return $this->isprintable;
    }

    /**
     * Set quantitydecimalnumber.
     *
     * @param int $quantitydecimalnumber
     *
     * @return Saledocumentline
     */
    public function setQuantitydecimalnumber($quantitydecimalnumber)
    {
        $this->quantitydecimalnumber = $quantitydecimalnumber;

        return $this;
    }

    /**
     * Get quantitydecimalnumber.
     *
     * @return int
     */
    public function getQuantitydecimalnumber()
    {
        return $this->quantitydecimalnumber;
    }

    /**
     * Set pricesdecimalnumber.
     *
     * @param int $pricesdecimalnumber
     *
     * @return Saledocumentline
     */
    public function setPricesdecimalnumber($pricesdecimalnumber)
    {
        $this->pricesdecimalnumber = $pricesdecimalnumber;

        return $this;
    }

    /**
     * Get pricesdecimalnumber.
     *
     * @return int
     */
    public function getPricesdecimalnumber()
    {
        return $this->pricesdecimalnumber;
    }

    /**
     * Set ismanagedbycountermark.
     *
     * @param bool $ismanagedbycountermark
     *
     * @return Saledocumentline
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
     * Set iscountermarkinitiated.
     *
     * @param bool $iscountermarkinitiated
     *
     * @return Saledocumentline
     */
    public function setIscountermarkinitiated($iscountermarkinitiated)
    {
        $this->iscountermarkinitiated = $iscountermarkinitiated;

        return $this;
    }

    /**
     * Get iscountermarkinitiated.
     *
     * @return bool
     */
    public function getIscountermarkinitiated()
    {
        return $this->iscountermarkinitiated;
    }

    /**
     * Set volume.
     *
     * @param string $volume
     *
     * @return Saledocumentline
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume.
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set totalvolume.
     *
     * @param string $totalvolume
     *
     * @return Saledocumentline
     */
    public function setTotalvolume($totalvolume)
    {
        $this->totalvolume = $totalvolume;

        return $this;
    }

    /**
     * Get totalvolume.
     *
     * @return string
     */
    public function getTotalvolume()
    {
        return $this->totalvolume;
    }

    /**
     * Set unitecotaxamountvatexcluded.
     *
     * @param string $unitecotaxamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setUnitecotaxamountvatexcluded($unitecotaxamountvatexcluded)
    {
        $this->unitecotaxamountvatexcluded = $unitecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get unitecotaxamountvatexcluded.
     *
     * @return string
     */
    public function getUnitecotaxamountvatexcluded()
    {
        return $this->unitecotaxamountvatexcluded;
    }

    /**
     * Set unitecotaxamountvatincluded.
     *
     * @param string $unitecotaxamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setUnitecotaxamountvatincluded($unitecotaxamountvatincluded)
    {
        $this->unitecotaxamountvatincluded = $unitecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get unitecotaxamountvatincluded.
     *
     * @return string
     */
    public function getUnitecotaxamountvatincluded()
    {
        return $this->unitecotaxamountvatincluded;
    }

    /**
     * Set ecotaxamountvatexcluded.
     *
     * @param string $ecotaxamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setEcotaxamountvatexcluded($ecotaxamountvatexcluded)
    {
        $this->ecotaxamountvatexcluded = $ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get ecotaxamountvatexcluded.
     *
     * @return string
     */
    public function getEcotaxamountvatexcluded()
    {
        return $this->ecotaxamountvatexcluded;
    }

    /**
     * Set ecotaxamountvatincluded.
     *
     * @param string $ecotaxamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setEcotaxamountvatincluded($ecotaxamountvatincluded)
    {
        $this->ecotaxamountvatincluded = $ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get ecotaxamountvatincluded.
     *
     * @return string
     */
    public function getEcotaxamountvatincluded()
    {
        return $this->ecotaxamountvatincluded;
    }

    /**
     * Set hastrackingdispatch.
     *
     * @param bool $hastrackingdispatch
     *
     * @return Saledocumentline
     */
    public function setHastrackingdispatch($hastrackingdispatch)
    {
        $this->hastrackingdispatch = $hastrackingdispatch;

        return $this;
    }

    /**
     * Get hastrackingdispatch.
     *
     * @return bool
     */
    public function getHastrackingdispatch()
    {
        return $this->hastrackingdispatch;
    }

    /**
     * Set weight.
     *
     * @param string $weight
     *
     * @return Saledocumentline
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight.
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set totalweight.
     *
     * @param string $totalweight
     *
     * @return Saledocumentline
     */
    public function setTotalweight($totalweight)
    {
        $this->totalweight = $totalweight;

        return $this;
    }

    /**
     * Get totalweight.
     *
     * @return string
     */
    public function getTotalweight()
    {
        return $this->totalweight;
    }

    /**
     * Set phaselevel.
     *
     * @param int $phaselevel
     *
     * @return Saledocumentline
     */
    public function setPhaselevel($phaselevel)
    {
        $this->phaselevel = $phaselevel;

        return $this;
    }

    /**
     * Get phaselevel.
     *
     * @return int
     */
    public function getPhaselevel()
    {
        return $this->phaselevel;
    }

    /**
     * Set orderedquantity.
     *
     * @param string $orderedquantity
     *
     * @return Saledocumentline
     */
    public function setOrderedquantity($orderedquantity)
    {
        $this->orderedquantity = $orderedquantity;

        return $this;
    }

    /**
     * Get orderedquantity.
     *
     * @return string
     */
    public function getOrderedquantity()
    {
        return $this->orderedquantity;
    }

    /**
     * Set freepercentage.
     *
     * @param string|null $freepercentage
     *
     * @return Saledocumentline
     */
    public function setFreepercentage($freepercentage = null)
    {
        $this->freepercentage = $freepercentage;

        return $this;
    }

    /**
     * Get freepercentage.
     *
     * @return string|null
     */
    public function getFreepercentage()
    {
        return $this->freepercentage;
    }

    /**
     * Set realnetamountvatexcluded.
     *
     * @param string $realnetamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatexcluded($realnetamountvatexcluded)
    {
        $this->realnetamountvatexcluded = $realnetamountvatexcluded;

        return $this;
    }

    /**
     * Get realnetamountvatexcluded.
     *
     * @return string
     */
    public function getRealnetamountvatexcluded()
    {
        return $this->realnetamountvatexcluded;
    }

    /**
     * Set realnetamountvatexcludedwithdiscount.
     *
     * @param string $realnetamountvatexcludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatexcludedwithdiscount($realnetamountvatexcludedwithdiscount)
    {
        $this->realnetamountvatexcludedwithdiscount = $realnetamountvatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get realnetamountvatexcludedwithdiscount.
     *
     * @return string
     */
    public function getRealnetamountvatexcludedwithdiscount()
    {
        return $this->realnetamountvatexcludedwithdiscount;
    }

    /**
     * Set realnetamountvatincluded.
     *
     * @param string $realnetamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatincluded($realnetamountvatincluded)
    {
        $this->realnetamountvatincluded = $realnetamountvatincluded;

        return $this;
    }

    /**
     * Get realnetamountvatincluded.
     *
     * @return string
     */
    public function getRealnetamountvatincluded()
    {
        return $this->realnetamountvatincluded;
    }

    /**
     * Set realnetamountvatincludedwithdiscount.
     *
     * @param string $realnetamountvatincludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatincludedwithdiscount($realnetamountvatincludedwithdiscount)
    {
        $this->realnetamountvatincludedwithdiscount = $realnetamountvatincludedwithdiscount;

        return $this;
    }

    /**
     * Get realnetamountvatincludedwithdiscount.
     *
     * @return string
     */
    public function getRealnetamountvatincludedwithdiscount()
    {
        return $this->realnetamountvatincludedwithdiscount;
    }

    /**
     * Set realnetamountvatexcludedwithdiscountandfinancialdiscount.
     *
     * @param string $realnetamountvatexcludedwithdiscountandfinancialdiscount
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatexcludedwithdiscountandfinancialdiscount($realnetamountvatexcludedwithdiscountandfinancialdiscount)
    {
        $this->realnetamountvatexcludedwithdiscountandfinancialdiscount = $realnetamountvatexcludedwithdiscountandfinancialdiscount;

        return $this;
    }

    /**
     * Get realnetamountvatexcludedwithdiscountandfinancialdiscount.
     *
     * @return string
     */
    public function getRealnetamountvatexcludedwithdiscountandfinancialdiscount()
    {
        return $this->realnetamountvatexcludedwithdiscountandfinancialdiscount;
    }

    /**
     * Set realnetamountvatincludedwithdiscountandfinancialdiscount.
     *
     * @param string $realnetamountvatincludedwithdiscountandfinancialdiscount
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatincludedwithdiscountandfinancialdiscount($realnetamountvatincludedwithdiscountandfinancialdiscount)
    {
        $this->realnetamountvatincludedwithdiscountandfinancialdiscount = $realnetamountvatincludedwithdiscountandfinancialdiscount;

        return $this;
    }

    /**
     * Get realnetamountvatincludedwithdiscountandfinancialdiscount.
     *
     * @return string
     */
    public function getRealnetamountvatincludedwithdiscountandfinancialdiscount()
    {
        return $this->realnetamountvatincludedwithdiscountandfinancialdiscount;
    }

    /**
     * Set discounts0Unitdiscountrate.
     *
     * @param string $discounts0Unitdiscountrate
     *
     * @return Saledocumentline
     */
    public function setDiscounts0Unitdiscountrate($discounts0Unitdiscountrate)
    {
        $this->discounts0Unitdiscountrate = $discounts0Unitdiscountrate;

        return $this;
    }

    /**
     * Get discounts0Unitdiscountrate.
     *
     * @return string
     */
    public function getDiscounts0Unitdiscountrate()
    {
        return $this->discounts0Unitdiscountrate;
    }

    /**
     * Set discounts0Unitdiscountamountvatexcluded.
     *
     * @param string $discounts0Unitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts0Unitdiscountamountvatexcluded($discounts0Unitdiscountamountvatexcluded)
    {
        $this->discounts0Unitdiscountamountvatexcluded = $discounts0Unitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get discounts0Unitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getDiscounts0Unitdiscountamountvatexcluded()
    {
        return $this->discounts0Unitdiscountamountvatexcluded;
    }

    /**
     * Set discounts0Unitdiscountamountvatincluded.
     *
     * @param string $discounts0Unitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts0Unitdiscountamountvatincluded($discounts0Unitdiscountamountvatincluded)
    {
        $this->discounts0Unitdiscountamountvatincluded = $discounts0Unitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get discounts0Unitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getDiscounts0Unitdiscountamountvatincluded()
    {
        return $this->discounts0Unitdiscountamountvatincluded;
    }

    /**
     * Set numberofitembypackage.
     *
     * @param int $numberofitembypackage
     *
     * @return Saledocumentline
     */
    public function setNumberofitembypackage($numberofitembypackage)
    {
        $this->numberofitembypackage = $numberofitembypackage;

        return $this;
    }

    /**
     * Get numberofitembypackage.
     *
     * @return int
     */
    public function getNumberofitembypackage()
    {
        return $this->numberofitembypackage;
    }

    /**
     * Set netweight.
     *
     * @param string $netweight
     *
     * @return Saledocumentline
     */
    public function setNetweight($netweight)
    {
        $this->netweight = $netweight;

        return $this;
    }

    /**
     * Get netweight.
     *
     * @return string
     */
    public function getNetweight()
    {
        return $this->netweight;
    }

    /**
     * Set totalnetweight.
     *
     * @param string $totalnetweight
     *
     * @return Saledocumentline
     */
    public function setTotalnetweight($totalnetweight)
    {
        $this->totalnetweight = $totalnetweight;

        return $this;
    }

    /**
     * Get totalnetweight.
     *
     * @return string
     */
    public function getTotalnetweight()
    {
        return $this->totalnetweight;
    }

    /**
     * Set usecomponentvat.
     *
     * @param bool $usecomponentvat
     *
     * @return Saledocumentline
     */
    public function setUsecomponentvat($usecomponentvat)
    {
        $this->usecomponentvat = $usecomponentvat;

        return $this;
    }

    /**
     * Get usecomponentvat.
     *
     * @return bool
     */
    public function getUsecomponentvat()
    {
        return $this->usecomponentvat;
    }

    /**
     * Set discounts0Currencyunitdiscountamountvatexcluded.
     *
     * @param string $discounts0Currencyunitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts0Currencyunitdiscountamountvatexcluded($discounts0Currencyunitdiscountamountvatexcluded)
    {
        $this->discounts0Currencyunitdiscountamountvatexcluded = $discounts0Currencyunitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get discounts0Currencyunitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getDiscounts0Currencyunitdiscountamountvatexcluded()
    {
        return $this->discounts0Currencyunitdiscountamountvatexcluded;
    }

    /**
     * Set discounts0Currencyunitdiscountamountvatincluded.
     *
     * @param string $discounts0Currencyunitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts0Currencyunitdiscountamountvatincluded($discounts0Currencyunitdiscountamountvatincluded)
    {
        $this->discounts0Currencyunitdiscountamountvatincluded = $discounts0Currencyunitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get discounts0Currencyunitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getDiscounts0Currencyunitdiscountamountvatincluded()
    {
        return $this->discounts0Currencyunitdiscountamountvatincluded;
    }

    /**
     * Set discounts1Unitdiscountrate.
     *
     * @param string $discounts1Unitdiscountrate
     *
     * @return Saledocumentline
     */
    public function setDiscounts1Unitdiscountrate($discounts1Unitdiscountrate)
    {
        $this->discounts1Unitdiscountrate = $discounts1Unitdiscountrate;

        return $this;
    }

    /**
     * Get discounts1Unitdiscountrate.
     *
     * @return string
     */
    public function getDiscounts1Unitdiscountrate()
    {
        return $this->discounts1Unitdiscountrate;
    }

    /**
     * Set discounts1Unitdiscountamountvatexcluded.
     *
     * @param string $discounts1Unitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts1Unitdiscountamountvatexcluded($discounts1Unitdiscountamountvatexcluded)
    {
        $this->discounts1Unitdiscountamountvatexcluded = $discounts1Unitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get discounts1Unitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getDiscounts1Unitdiscountamountvatexcluded()
    {
        return $this->discounts1Unitdiscountamountvatexcluded;
    }

    /**
     * Set discounts1Unitdiscountamountvatincluded.
     *
     * @param string $discounts1Unitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts1Unitdiscountamountvatincluded($discounts1Unitdiscountamountvatincluded)
    {
        $this->discounts1Unitdiscountamountvatincluded = $discounts1Unitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get discounts1Unitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getDiscounts1Unitdiscountamountvatincluded()
    {
        return $this->discounts1Unitdiscountamountvatincluded;
    }

    /**
     * Set discounts2Currencyunitdiscountamountvatexcluded.
     *
     * @param string $discounts2Currencyunitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts2Currencyunitdiscountamountvatexcluded($discounts2Currencyunitdiscountamountvatexcluded)
    {
        $this->discounts2Currencyunitdiscountamountvatexcluded = $discounts2Currencyunitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get discounts2Currencyunitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getDiscounts2Currencyunitdiscountamountvatexcluded()
    {
        return $this->discounts2Currencyunitdiscountamountvatexcluded;
    }

    /**
     * Set discounts2Currencyunitdiscountamountvatincluded.
     *
     * @param string $discounts2Currencyunitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts2Currencyunitdiscountamountvatincluded($discounts2Currencyunitdiscountamountvatincluded)
    {
        $this->discounts2Currencyunitdiscountamountvatincluded = $discounts2Currencyunitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get discounts2Currencyunitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getDiscounts2Currencyunitdiscountamountvatincluded()
    {
        return $this->discounts2Currencyunitdiscountamountvatincluded;
    }

    /**
     * Set realnetamountvatexcludedwithparentdiscount.
     *
     * @param string $realnetamountvatexcludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatexcludedwithparentdiscount($realnetamountvatexcludedwithparentdiscount)
    {
        $this->realnetamountvatexcludedwithparentdiscount = $realnetamountvatexcludedwithparentdiscount;

        return $this;
    }

    /**
     * Get realnetamountvatexcludedwithparentdiscount.
     *
     * @return string
     */
    public function getRealnetamountvatexcludedwithparentdiscount()
    {
        return $this->realnetamountvatexcludedwithparentdiscount;
    }

    /**
     * Set realnetamountvatincludedwithparentdiscount.
     *
     * @param string $realnetamountvatincludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setRealnetamountvatincludedwithparentdiscount($realnetamountvatincludedwithparentdiscount)
    {
        $this->realnetamountvatincludedwithparentdiscount = $realnetamountvatincludedwithparentdiscount;

        return $this;
    }

    /**
     * Get realnetamountvatincludedwithparentdiscount.
     *
     * @return string
     */
    public function getRealnetamountvatincludedwithparentdiscount()
    {
        return $this->realnetamountvatincludedwithparentdiscount;
    }

    /**
     * Set netpricevatexcludedwithparentdiscount.
     *
     * @param string $netpricevatexcludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setNetpricevatexcludedwithparentdiscount($netpricevatexcludedwithparentdiscount)
    {
        $this->netpricevatexcludedwithparentdiscount = $netpricevatexcludedwithparentdiscount;

        return $this;
    }

    /**
     * Get netpricevatexcludedwithparentdiscount.
     *
     * @return string
     */
    public function getNetpricevatexcludedwithparentdiscount()
    {
        return $this->netpricevatexcludedwithparentdiscount;
    }

    /**
     * Set netpricevatincludedwithparentdiscount.
     *
     * @param string $netpricevatincludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setNetpricevatincludedwithparentdiscount($netpricevatincludedwithparentdiscount)
    {
        $this->netpricevatincludedwithparentdiscount = $netpricevatincludedwithparentdiscount;

        return $this;
    }

    /**
     * Get netpricevatincludedwithparentdiscount.
     *
     * @return string
     */
    public function getNetpricevatincludedwithparentdiscount()
    {
        return $this->netpricevatincludedwithparentdiscount;
    }

    /**
     * Set notincluded.
     *
     * @param bool $notincluded
     *
     * @return Saledocumentline
     */
    public function setNotincluded($notincluded)
    {
        $this->notincluded = $notincluded;

        return $this;
    }

    /**
     * Get notincluded.
     *
     * @return bool
     */
    public function getNotincluded()
    {
        return $this->notincluded;
    }

    /**
     * Set discounts1Currencyunitdiscountamountvatexcluded.
     *
     * @param string $discounts1Currencyunitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts1Currencyunitdiscountamountvatexcluded($discounts1Currencyunitdiscountamountvatexcluded)
    {
        $this->discounts1Currencyunitdiscountamountvatexcluded = $discounts1Currencyunitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get discounts1Currencyunitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getDiscounts1Currencyunitdiscountamountvatexcluded()
    {
        return $this->discounts1Currencyunitdiscountamountvatexcluded;
    }

    /**
     * Set discounts1Currencyunitdiscountamountvatincluded.
     *
     * @param string $discounts1Currencyunitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts1Currencyunitdiscountamountvatincluded($discounts1Currencyunitdiscountamountvatincluded)
    {
        $this->discounts1Currencyunitdiscountamountvatincluded = $discounts1Currencyunitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get discounts1Currencyunitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getDiscounts1Currencyunitdiscountamountvatincluded()
    {
        return $this->discounts1Currencyunitdiscountamountvatincluded;
    }

    /**
     * Set discounts2Unitdiscountrate.
     *
     * @param string $discounts2Unitdiscountrate
     *
     * @return Saledocumentline
     */
    public function setDiscounts2Unitdiscountrate($discounts2Unitdiscountrate)
    {
        $this->discounts2Unitdiscountrate = $discounts2Unitdiscountrate;

        return $this;
    }

    /**
     * Get discounts2Unitdiscountrate.
     *
     * @return string
     */
    public function getDiscounts2Unitdiscountrate()
    {
        return $this->discounts2Unitdiscountrate;
    }

    /**
     * Set discounts2Unitdiscountamountvatexcluded.
     *
     * @param string $discounts2Unitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts2Unitdiscountamountvatexcluded($discounts2Unitdiscountamountvatexcluded)
    {
        $this->discounts2Unitdiscountamountvatexcluded = $discounts2Unitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get discounts2Unitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getDiscounts2Unitdiscountamountvatexcluded()
    {
        return $this->discounts2Unitdiscountamountvatexcluded;
    }

    /**
     * Set discounts2Unitdiscountamountvatincluded.
     *
     * @param string $discounts2Unitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDiscounts2Unitdiscountamountvatincluded($discounts2Unitdiscountamountvatincluded)
    {
        $this->discounts2Unitdiscountamountvatincluded = $discounts2Unitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get discounts2Unitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getDiscounts2Unitdiscountamountvatincluded()
    {
        return $this->discounts2Unitdiscountamountvatincluded;
    }

    /**
     * Set othertaxes0Taxvalue.
     *
     * @param string $othertaxes0Taxvalue
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Taxvalue($othertaxes0Taxvalue)
    {
        $this->othertaxes0Taxvalue = $othertaxes0Taxvalue;

        return $this;
    }

    /**
     * Get othertaxes0Taxvalue.
     *
     * @return string
     */
    public function getOthertaxes0Taxvalue()
    {
        return $this->othertaxes0Taxvalue;
    }

    /**
     * Set othertaxes0Subjecttovat.
     *
     * @param bool $othertaxes0Subjecttovat
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Subjecttovat($othertaxes0Subjecttovat)
    {
        $this->othertaxes0Subjecttovat = $othertaxes0Subjecttovat;

        return $this;
    }

    /**
     * Get othertaxes0Subjecttovat.
     *
     * @return bool
     */
    public function getOthertaxes0Subjecttovat()
    {
        return $this->othertaxes0Subjecttovat;
    }

    /**
     * Set othertaxes0Taxamount.
     *
     * @param string $othertaxes0Taxamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Taxamount($othertaxes0Taxamount)
    {
        $this->othertaxes0Taxamount = $othertaxes0Taxamount;

        return $this;
    }

    /**
     * Get othertaxes0Taxamount.
     *
     * @return string
     */
    public function getOthertaxes0Taxamount()
    {
        return $this->othertaxes0Taxamount;
    }

    /**
     * Set othertaxes0Baseamount.
     *
     * @param string $othertaxes0Baseamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Baseamount($othertaxes0Baseamount)
    {
        $this->othertaxes0Baseamount = $othertaxes0Baseamount;

        return $this;
    }

    /**
     * Get othertaxes0Baseamount.
     *
     * @return string
     */
    public function getOthertaxes0Baseamount()
    {
        return $this->othertaxes0Baseamount;
    }

    /**
     * Set othertaxes1Taxvalue.
     *
     * @param string $othertaxes1Taxvalue
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Taxvalue($othertaxes1Taxvalue)
    {
        $this->othertaxes1Taxvalue = $othertaxes1Taxvalue;

        return $this;
    }

    /**
     * Get othertaxes1Taxvalue.
     *
     * @return string
     */
    public function getOthertaxes1Taxvalue()
    {
        return $this->othertaxes1Taxvalue;
    }

    /**
     * Set othertaxes1Subjecttovat.
     *
     * @param bool $othertaxes1Subjecttovat
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Subjecttovat($othertaxes1Subjecttovat)
    {
        $this->othertaxes1Subjecttovat = $othertaxes1Subjecttovat;

        return $this;
    }

    /**
     * Get othertaxes1Subjecttovat.
     *
     * @return bool
     */
    public function getOthertaxes1Subjecttovat()
    {
        return $this->othertaxes1Subjecttovat;
    }

    /**
     * Set othertaxes1Taxamount.
     *
     * @param string $othertaxes1Taxamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Taxamount($othertaxes1Taxamount)
    {
        $this->othertaxes1Taxamount = $othertaxes1Taxamount;

        return $this;
    }

    /**
     * Get othertaxes1Taxamount.
     *
     * @return string
     */
    public function getOthertaxes1Taxamount()
    {
        return $this->othertaxes1Taxamount;
    }

    /**
     * Set othertaxes1Baseamount.
     *
     * @param string $othertaxes1Baseamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Baseamount($othertaxes1Baseamount)
    {
        $this->othertaxes1Baseamount = $othertaxes1Baseamount;

        return $this;
    }

    /**
     * Get othertaxes1Baseamount.
     *
     * @return string
     */
    public function getOthertaxes1Baseamount()
    {
        return $this->othertaxes1Baseamount;
    }

    /**
     * Set othertaxes2Taxvalue.
     *
     * @param string $othertaxes2Taxvalue
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Taxvalue($othertaxes2Taxvalue)
    {
        $this->othertaxes2Taxvalue = $othertaxes2Taxvalue;

        return $this;
    }

    /**
     * Get othertaxes2Taxvalue.
     *
     * @return string
     */
    public function getOthertaxes2Taxvalue()
    {
        return $this->othertaxes2Taxvalue;
    }

    /**
     * Set othertaxes2Subjecttovat.
     *
     * @param bool $othertaxes2Subjecttovat
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Subjecttovat($othertaxes2Subjecttovat)
    {
        $this->othertaxes2Subjecttovat = $othertaxes2Subjecttovat;

        return $this;
    }

    /**
     * Get othertaxes2Subjecttovat.
     *
     * @return bool
     */
    public function getOthertaxes2Subjecttovat()
    {
        return $this->othertaxes2Subjecttovat;
    }

    /**
     * Set othertaxes2Taxamount.
     *
     * @param string $othertaxes2Taxamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Taxamount($othertaxes2Taxamount)
    {
        $this->othertaxes2Taxamount = $othertaxes2Taxamount;

        return $this;
    }

    /**
     * Get othertaxes2Taxamount.
     *
     * @return string
     */
    public function getOthertaxes2Taxamount()
    {
        return $this->othertaxes2Taxamount;
    }

    /**
     * Set othertaxes2Baseamount.
     *
     * @param string $othertaxes2Baseamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Baseamount($othertaxes2Baseamount)
    {
        $this->othertaxes2Baseamount = $othertaxes2Baseamount;

        return $this;
    }

    /**
     * Get othertaxes2Baseamount.
     *
     * @return string
     */
    public function getOthertaxes2Baseamount()
    {
        return $this->othertaxes2Baseamount;
    }

    /**
     * Set ispricelistapplied.
     *
     * @param bool $ispricelistapplied
     *
     * @return Saledocumentline
     */
    public function setIspricelistapplied($ispricelistapplied)
    {
        $this->ispricelistapplied = $ispricelistapplied;

        return $this;
    }

    /**
     * Get ispricelistapplied.
     *
     * @return bool
     */
    public function getIspricelistapplied()
    {
        return $this->ispricelistapplied;
    }

    /**
     * Set canapplypricelistoncomponent.
     *
     * @param bool $canapplypricelistoncomponent
     *
     * @return Saledocumentline
     */
    public function setCanapplypricelistoncomponent($canapplypricelistoncomponent)
    {
        $this->canapplypricelistoncomponent = $canapplypricelistoncomponent;

        return $this;
    }

    /**
     * Get canapplypricelistoncomponent.
     *
     * @return bool
     */
    public function getCanapplypricelistoncomponent()
    {
        return $this->canapplypricelistoncomponent;
    }

    /**
     * Set dispatchedamountvatexcluded.
     *
     * @param string $dispatchedamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setDispatchedamountvatexcluded($dispatchedamountvatexcluded)
    {
        $this->dispatchedamountvatexcluded = $dispatchedamountvatexcluded;

        return $this;
    }

    /**
     * Get dispatchedamountvatexcluded.
     *
     * @return string
     */
    public function getDispatchedamountvatexcluded()
    {
        return $this->dispatchedamountvatexcluded;
    }

    /**
     * Set dispatchedamountvatincluded.
     *
     * @param string $dispatchedamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setDispatchedamountvatincluded($dispatchedamountvatincluded)
    {
        $this->dispatchedamountvatincluded = $dispatchedamountvatincluded;

        return $this;
    }

    /**
     * Get dispatchedamountvatincluded.
     *
     * @return string
     */
    public function getDispatchedamountvatincluded()
    {
        return $this->dispatchedamountvatincluded;
    }

    /**
     * Set reamount.
     *
     * @param string $reamount
     *
     * @return Saledocumentline
     */
    public function setReamount($reamount)
    {
        $this->reamount = $reamount;

        return $this;
    }

    /**
     * Get reamount.
     *
     * @return string
     */
    public function getReamount()
    {
        return $this->reamount;
    }

    /**
     * Set currencynetpricevatexcluded.
     *
     * @param string $currencynetpricevatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencynetpricevatexcluded($currencynetpricevatexcluded)
    {
        $this->currencynetpricevatexcluded = $currencynetpricevatexcluded;

        return $this;
    }

    /**
     * Get currencynetpricevatexcluded.
     *
     * @return string
     */
    public function getCurrencynetpricevatexcluded()
    {
        return $this->currencynetpricevatexcluded;
    }

    /**
     * Set currencynetpricevatincluded.
     *
     * @param string $currencynetpricevatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencynetpricevatincluded($currencynetpricevatincluded)
    {
        $this->currencynetpricevatincluded = $currencynetpricevatincluded;

        return $this;
    }

    /**
     * Get currencynetpricevatincluded.
     *
     * @return string
     */
    public function getCurrencynetpricevatincluded()
    {
        return $this->currencynetpricevatincluded;
    }

    /**
     * Set currencynetpricevatexcludedwithdiscount.
     *
     * @param string $currencynetpricevatexcludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencynetpricevatexcludedwithdiscount($currencynetpricevatexcludedwithdiscount)
    {
        $this->currencynetpricevatexcludedwithdiscount = $currencynetpricevatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get currencynetpricevatexcludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencynetpricevatexcludedwithdiscount()
    {
        return $this->currencynetpricevatexcludedwithdiscount;
    }

    /**
     * Set currencynetpricevatincludedwithdiscount.
     *
     * @param string $currencynetpricevatincludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencynetpricevatincludedwithdiscount($currencynetpricevatincludedwithdiscount)
    {
        $this->currencynetpricevatincludedwithdiscount = $currencynetpricevatincludedwithdiscount;

        return $this;
    }

    /**
     * Get currencynetpricevatincludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencynetpricevatincludedwithdiscount()
    {
        return $this->currencynetpricevatincludedwithdiscount;
    }

    /**
     * Set currencynetamountvatexcluded.
     *
     * @param string $currencynetamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencynetamountvatexcluded($currencynetamountvatexcluded)
    {
        $this->currencynetamountvatexcluded = $currencynetamountvatexcluded;

        return $this;
    }

    /**
     * Get currencynetamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencynetamountvatexcluded()
    {
        return $this->currencynetamountvatexcluded;
    }

    /**
     * Set currencynetamountvatexcludedwithdiscount.
     *
     * @param string $currencynetamountvatexcludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencynetamountvatexcludedwithdiscount($currencynetamountvatexcludedwithdiscount)
    {
        $this->currencynetamountvatexcludedwithdiscount = $currencynetamountvatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get currencynetamountvatexcludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencynetamountvatexcludedwithdiscount()
    {
        return $this->currencynetamountvatexcludedwithdiscount;
    }

    /**
     * Set currencynetamountvatincluded.
     *
     * @param string $currencynetamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencynetamountvatincluded($currencynetamountvatincluded)
    {
        $this->currencynetamountvatincluded = $currencynetamountvatincluded;

        return $this;
    }

    /**
     * Get currencynetamountvatincluded.
     *
     * @return string
     */
    public function getCurrencynetamountvatincluded()
    {
        return $this->currencynetamountvatincluded;
    }

    /**
     * Set currencynetamountvatincludedwithdiscount.
     *
     * @param string $currencynetamountvatincludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencynetamountvatincludedwithdiscount($currencynetamountvatincludedwithdiscount)
    {
        $this->currencynetamountvatincludedwithdiscount = $currencynetamountvatincludedwithdiscount;

        return $this;
    }

    /**
     * Get currencynetamountvatincludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencynetamountvatincludedwithdiscount()
    {
        return $this->currencynetamountvatincludedwithdiscount;
    }

    /**
     * Set currencyrealnetamountvatexcluded.
     *
     * @param string $currencyrealnetamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatexcluded($currencyrealnetamountvatexcluded)
    {
        $this->currencyrealnetamountvatexcluded = $currencyrealnetamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatexcluded()
    {
        return $this->currencyrealnetamountvatexcluded;
    }

    /**
     * Set currencyrealnetamountvatexcludedwithdiscount.
     *
     * @param string $currencyrealnetamountvatexcludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatexcludedwithdiscount($currencyrealnetamountvatexcludedwithdiscount)
    {
        $this->currencyrealnetamountvatexcludedwithdiscount = $currencyrealnetamountvatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatexcludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatexcludedwithdiscount()
    {
        return $this->currencyrealnetamountvatexcludedwithdiscount;
    }

    /**
     * Set currencyrealnetamountvatincluded.
     *
     * @param string $currencyrealnetamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatincluded($currencyrealnetamountvatincluded)
    {
        $this->currencyrealnetamountvatincluded = $currencyrealnetamountvatincluded;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatincluded.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatincluded()
    {
        return $this->currencyrealnetamountvatincluded;
    }

    /**
     * Set currencyrealnetamountvatincludedwithdiscount.
     *
     * @param string $currencyrealnetamountvatincludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatincludedwithdiscount($currencyrealnetamountvatincludedwithdiscount)
    {
        $this->currencyrealnetamountvatincludedwithdiscount = $currencyrealnetamountvatincludedwithdiscount;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatincludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatincludedwithdiscount()
    {
        return $this->currencyrealnetamountvatincludedwithdiscount;
    }

    /**
     * Set currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount.
     *
     * @param string $currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatexcludedwithdiscountandfinancialdiscount($currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount)
    {
        $this->currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount = $currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatexcludedwithdiscountandfinancialdiscount()
    {
        return $this->currencyrealnetamountvatexcludedwithdiscountandfinancialdiscount;
    }

    /**
     * Set currencyrealnetamountvatincludedwithdiscountandfinancialdiscount.
     *
     * @param string $currencyrealnetamountvatincludedwithdiscountandfinancialdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatincludedwithdiscountandfinancialdiscount($currencyrealnetamountvatincludedwithdiscountandfinancialdiscount)
    {
        $this->currencyrealnetamountvatincludedwithdiscountandfinancialdiscount = $currencyrealnetamountvatincludedwithdiscountandfinancialdiscount;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatincludedwithdiscountandfinancialdiscount.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatincludedwithdiscountandfinancialdiscount()
    {
        return $this->currencyrealnetamountvatincludedwithdiscountandfinancialdiscount;
    }

    /**
     * Set currencyrealnetamountvatexcludedwithparentdiscount.
     *
     * @param string $currencyrealnetamountvatexcludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatexcludedwithparentdiscount($currencyrealnetamountvatexcludedwithparentdiscount)
    {
        $this->currencyrealnetamountvatexcludedwithparentdiscount = $currencyrealnetamountvatexcludedwithparentdiscount;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatexcludedwithparentdiscount.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatexcludedwithparentdiscount()
    {
        return $this->currencyrealnetamountvatexcludedwithparentdiscount;
    }

    /**
     * Set currencyrealnetamountvatincludedwithparentdiscount.
     *
     * @param string $currencyrealnetamountvatincludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencyrealnetamountvatincludedwithparentdiscount($currencyrealnetamountvatincludedwithparentdiscount)
    {
        $this->currencyrealnetamountvatincludedwithparentdiscount = $currencyrealnetamountvatincludedwithparentdiscount;

        return $this;
    }

    /**
     * Get currencyrealnetamountvatincludedwithparentdiscount.
     *
     * @return string
     */
    public function getCurrencyrealnetamountvatincludedwithparentdiscount()
    {
        return $this->currencyrealnetamountvatincludedwithparentdiscount;
    }

    /**
     * Set currencynetpricevatexcludedwithparentdiscount.
     *
     * @param string $currencynetpricevatexcludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencynetpricevatexcludedwithparentdiscount($currencynetpricevatexcludedwithparentdiscount)
    {
        $this->currencynetpricevatexcludedwithparentdiscount = $currencynetpricevatexcludedwithparentdiscount;

        return $this;
    }

    /**
     * Get currencynetpricevatexcludedwithparentdiscount.
     *
     * @return string
     */
    public function getCurrencynetpricevatexcludedwithparentdiscount()
    {
        return $this->currencynetpricevatexcludedwithparentdiscount;
    }

    /**
     * Set currencynetpricevatincludedwithparentdiscount.
     *
     * @param string $currencynetpricevatincludedwithparentdiscount
     *
     * @return Saledocumentline
     */
    public function setCurrencynetpricevatincludedwithparentdiscount($currencynetpricevatincludedwithparentdiscount)
    {
        $this->currencynetpricevatincludedwithparentdiscount = $currencynetpricevatincludedwithparentdiscount;

        return $this;
    }

    /**
     * Get currencynetpricevatincludedwithparentdiscount.
     *
     * @return string
     */
    public function getCurrencynetpricevatincludedwithparentdiscount()
    {
        return $this->currencynetpricevatincludedwithparentdiscount;
    }

    /**
     * Set salepricevatexcluded.
     *
     * @param string $salepricevatexcluded
     *
     * @return Saledocumentline
     */
    public function setSalepricevatexcluded($salepricevatexcluded)
    {
        $this->salepricevatexcluded = $salepricevatexcluded;

        return $this;
    }

    /**
     * Get salepricevatexcluded.
     *
     * @return string
     */
    public function getSalepricevatexcluded()
    {
        return $this->salepricevatexcluded;
    }

    /**
     * Set salepricevatincluded.
     *
     * @param string $salepricevatincluded
     *
     * @return Saledocumentline
     */
    public function setSalepricevatincluded($salepricevatincluded)
    {
        $this->salepricevatincluded = $salepricevatincluded;

        return $this;
    }

    /**
     * Get salepricevatincluded.
     *
     * @return string
     */
    public function getSalepricevatincluded()
    {
        return $this->salepricevatincluded;
    }

    /**
     * Set interestrate.
     *
     * @param string $interestrate
     *
     * @return Saledocumentline
     */
    public function setInterestrate($interestrate)
    {
        $this->interestrate = $interestrate;

        return $this;
    }

    /**
     * Get interestrate.
     *
     * @return string
     */
    public function getInterestrate()
    {
        return $this->interestrate;
    }

    /**
     * Set interestamount.
     *
     * @param string $interestamount
     *
     * @return Saledocumentline
     */
    public function setInterestamount($interestamount)
    {
        $this->interestamount = $interestamount;

        return $this;
    }

    /**
     * Get interestamount.
     *
     * @return string
     */
    public function getInterestamount()
    {
        return $this->interestamount;
    }

    /**
     * Set netinterestrate.
     *
     * @param string $netinterestrate
     *
     * @return Saledocumentline
     */
    public function setNetinterestrate($netinterestrate)
    {
        $this->netinterestrate = $netinterestrate;

        return $this;
    }

    /**
     * Get netinterestrate.
     *
     * @return string
     */
    public function getNetinterestrate()
    {
        return $this->netinterestrate;
    }

    /**
     * Set netinterestamount.
     *
     * @param string $netinterestamount
     *
     * @return Saledocumentline
     */
    public function setNetinterestamount($netinterestamount)
    {
        $this->netinterestamount = $netinterestamount;

        return $this;
    }

    /**
     * Get netinterestamount.
     *
     * @return string
     */
    public function getNetinterestamount()
    {
        return $this->netinterestamount;
    }

    /**
     * Set brandrate.
     *
     * @param string $brandrate
     *
     * @return Saledocumentline
     */
    public function setBrandrate($brandrate)
    {
        $this->brandrate = $brandrate;

        return $this;
    }

    /**
     * Get brandrate.
     *
     * @return string
     */
    public function getBrandrate()
    {
        return $this->brandrate;
    }

    /**
     * Set totalinterestamount.
     *
     * @param string $totalinterestamount
     *
     * @return Saledocumentline
     */
    public function setTotalinterestamount($totalinterestamount)
    {
        $this->totalinterestamount = $totalinterestamount;

        return $this;
    }

    /**
     * Get totalinterestamount.
     *
     * @return string
     */
    public function getTotalinterestamount()
    {
        return $this->totalinterestamount;
    }

    /**
     * Set usepumpforreturn.
     *
     * @param bool $usepumpforreturn
     *
     * @return Saledocumentline
     */
    public function setUsepumpforreturn($usepumpforreturn)
    {
        $this->usepumpforreturn = $usepumpforreturn;

        return $this;
    }

    /**
     * Get usepumpforreturn.
     *
     * @return bool
     */
    public function getUsepumpforreturn()
    {
        return $this->usepumpforreturn;
    }

    /**
     * Set returnunitcostprice.
     *
     * @param string $returnunitcostprice
     *
     * @return Saledocumentline
     */
    public function setReturnunitcostprice($returnunitcostprice)
    {
        $this->returnunitcostprice = $returnunitcostprice;

        return $this;
    }

    /**
     * Get returnunitcostprice.
     *
     * @return string
     */
    public function getReturnunitcostprice()
    {
        return $this->returnunitcostprice;
    }

    /**
     * Set returncostprice.
     *
     * @param string $returncostprice
     *
     * @return Saledocumentline
     */
    public function setReturncostprice($returncostprice)
    {
        $this->returncostprice = $returncostprice;

        return $this;
    }

    /**
     * Get returncostprice.
     *
     * @return string
     */
    public function getReturncostprice()
    {
        return $this->returncostprice;
    }

    /**
     * Set ishumanservice.
     *
     * @param bool $ishumanservice
     *
     * @return Saledocumentline
     */
    public function setIshumanservice($ishumanservice)
    {
        $this->ishumanservice = $ishumanservice;

        return $this;
    }

    /**
     * Get ishumanservice.
     *
     * @return bool
     */
    public function getIshumanservice()
    {
        return $this->ishumanservice;
    }

    /**
     * Set interventiondurationequalquantity.
     *
     * @param bool $interventiondurationequalquantity
     *
     * @return Saledocumentline
     */
    public function setInterventiondurationequalquantity($interventiondurationequalquantity)
    {
        $this->interventiondurationequalquantity = $interventiondurationequalquantity;

        return $this;
    }

    /**
     * Get interventiondurationequalquantity.
     *
     * @return bool
     */
    public function getInterventiondurationequalquantity()
    {
        return $this->interventiondurationequalquantity;
    }

    /**
     * Set grossinterestratecalculationtype.
     *
     * @param int $grossinterestratecalculationtype
     *
     * @return Saledocumentline
     */
    public function setGrossinterestratecalculationtype($grossinterestratecalculationtype)
    {
        $this->grossinterestratecalculationtype = $grossinterestratecalculationtype;

        return $this;
    }

    /**
     * Get grossinterestratecalculationtype.
     *
     * @return int
     */
    public function getGrossinterestratecalculationtype()
    {
        return $this->grossinterestratecalculationtype;
    }

    /**
     * Set grossinterestamount.
     *
     * @param string $grossinterestamount
     *
     * @return Saledocumentline
     */
    public function setGrossinterestamount($grossinterestamount)
    {
        $this->grossinterestamount = $grossinterestamount;

        return $this;
    }

    /**
     * Get grossinterestamount.
     *
     * @return string
     */
    public function getGrossinterestamount()
    {
        return $this->grossinterestamount;
    }

    /**
     * Set grossinterestrate.
     *
     * @param string $grossinterestrate
     *
     * @return Saledocumentline
     */
    public function setGrossinterestrate($grossinterestrate)
    {
        $this->grossinterestrate = $grossinterestrate;

        return $this;
    }

    /**
     * Get grossinterestrate.
     *
     * @return string
     */
    public function getGrossinterestrate()
    {
        return $this->grossinterestrate;
    }

    /**
     * Set grossinterestbase.
     *
     * @param string $grossinterestbase
     *
     * @return Saledocumentline
     */
    public function setGrossinterestbase($grossinterestbase)
    {
        $this->grossinterestbase = $grossinterestbase;

        return $this;
    }

    /**
     * Get grossinterestbase.
     *
     * @return string
     */
    public function getGrossinterestbase()
    {
        return $this->grossinterestbase;
    }

    /**
     * Set currencysalepricevatexcluded.
     *
     * @param string $currencysalepricevatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencysalepricevatexcluded($currencysalepricevatexcluded)
    {
        $this->currencysalepricevatexcluded = $currencysalepricevatexcluded;

        return $this;
    }

    /**
     * Get currencysalepricevatexcluded.
     *
     * @return string
     */
    public function getCurrencysalepricevatexcluded()
    {
        return $this->currencysalepricevatexcluded;
    }

    /**
     * Set currencysalepricevatincluded.
     *
     * @param string $currencysalepricevatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencysalepricevatincluded($currencysalepricevatincluded)
    {
        $this->currencysalepricevatincluded = $currencysalepricevatincluded;

        return $this;
    }

    /**
     * Get currencysalepricevatincluded.
     *
     * @return string
     */
    public function getCurrencysalepricevatincluded()
    {
        return $this->currencysalepricevatincluded;
    }

    /**
     * Set remainingquantitytoinvoice.
     *
     * @param string $remainingquantitytoinvoice
     *
     * @return Saledocumentline
     */
    public function setRemainingquantitytoinvoice($remainingquantitytoinvoice)
    {
        $this->remainingquantitytoinvoice = $remainingquantitytoinvoice;

        return $this;
    }

    /**
     * Get remainingquantitytoinvoice.
     *
     * @return string
     */
    public function getRemainingquantitytoinvoice()
    {
        return $this->remainingquantitytoinvoice;
    }

    /**
     * Set returnedquantity.
     *
     * @param string $returnedquantity
     *
     * @return Saledocumentline
     */
    public function setReturnedquantity($returnedquantity)
    {
        $this->returnedquantity = $returnedquantity;

        return $this;
    }

    /**
     * Get returnedquantity.
     *
     * @return string
     */
    public function getReturnedquantity()
    {
        return $this->returnedquantity;
    }

    /**
     * Set returnedquantitybypreviouscreditmemo.
     *
     * @param string $returnedquantitybypreviouscreditmemo
     *
     * @return Saledocumentline
     */
    public function setReturnedquantitybypreviouscreditmemo($returnedquantitybypreviouscreditmemo)
    {
        $this->returnedquantitybypreviouscreditmemo = $returnedquantitybypreviouscreditmemo;

        return $this;
    }

    /**
     * Get returnedquantitybypreviouscreditmemo.
     *
     * @return string
     */
    public function getReturnedquantitybypreviouscreditmemo()
    {
        return $this->returnedquantitybypreviouscreditmemo;
    }

    /**
     * Set othertaxes0Currencybaseamount.
     *
     * @param string $othertaxes0Currencybaseamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Currencybaseamount($othertaxes0Currencybaseamount)
    {
        $this->othertaxes0Currencybaseamount = $othertaxes0Currencybaseamount;

        return $this;
    }

    /**
     * Get othertaxes0Currencybaseamount.
     *
     * @return string
     */
    public function getOthertaxes0Currencybaseamount()
    {
        return $this->othertaxes0Currencybaseamount;
    }

    /**
     * Set othertaxes0Currencytaxamount.
     *
     * @param string $othertaxes0Currencytaxamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Currencytaxamount($othertaxes0Currencytaxamount)
    {
        $this->othertaxes0Currencytaxamount = $othertaxes0Currencytaxamount;

        return $this;
    }

    /**
     * Get othertaxes0Currencytaxamount.
     *
     * @return string
     */
    public function getOthertaxes0Currencytaxamount()
    {
        return $this->othertaxes0Currencytaxamount;
    }

    /**
     * Set othertaxes0Currencytaxvalue.
     *
     * @param string $othertaxes0Currencytaxvalue
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Currencytaxvalue($othertaxes0Currencytaxvalue)
    {
        $this->othertaxes0Currencytaxvalue = $othertaxes0Currencytaxvalue;

        return $this;
    }

    /**
     * Get othertaxes0Currencytaxvalue.
     *
     * @return string
     */
    public function getOthertaxes0Currencytaxvalue()
    {
        return $this->othertaxes0Currencytaxvalue;
    }

    /**
     * Set othertaxes1Currencybaseamount.
     *
     * @param string $othertaxes1Currencybaseamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Currencybaseamount($othertaxes1Currencybaseamount)
    {
        $this->othertaxes1Currencybaseamount = $othertaxes1Currencybaseamount;

        return $this;
    }

    /**
     * Get othertaxes1Currencybaseamount.
     *
     * @return string
     */
    public function getOthertaxes1Currencybaseamount()
    {
        return $this->othertaxes1Currencybaseamount;
    }

    /**
     * Set othertaxes1Currencytaxamount.
     *
     * @param string $othertaxes1Currencytaxamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Currencytaxamount($othertaxes1Currencytaxamount)
    {
        $this->othertaxes1Currencytaxamount = $othertaxes1Currencytaxamount;

        return $this;
    }

    /**
     * Get othertaxes1Currencytaxamount.
     *
     * @return string
     */
    public function getOthertaxes1Currencytaxamount()
    {
        return $this->othertaxes1Currencytaxamount;
    }

    /**
     * Set othertaxes1Currencytaxvalue.
     *
     * @param string $othertaxes1Currencytaxvalue
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Currencytaxvalue($othertaxes1Currencytaxvalue)
    {
        $this->othertaxes1Currencytaxvalue = $othertaxes1Currencytaxvalue;

        return $this;
    }

    /**
     * Get othertaxes1Currencytaxvalue.
     *
     * @return string
     */
    public function getOthertaxes1Currencytaxvalue()
    {
        return $this->othertaxes1Currencytaxvalue;
    }

    /**
     * Set othertaxes2Currencybaseamount.
     *
     * @param string $othertaxes2Currencybaseamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Currencybaseamount($othertaxes2Currencybaseamount)
    {
        $this->othertaxes2Currencybaseamount = $othertaxes2Currencybaseamount;

        return $this;
    }

    /**
     * Get othertaxes2Currencybaseamount.
     *
     * @return string
     */
    public function getOthertaxes2Currencybaseamount()
    {
        return $this->othertaxes2Currencybaseamount;
    }

    /**
     * Set othertaxes2Currencytaxamount.
     *
     * @param string $othertaxes2Currencytaxamount
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Currencytaxamount($othertaxes2Currencytaxamount)
    {
        $this->othertaxes2Currencytaxamount = $othertaxes2Currencytaxamount;

        return $this;
    }

    /**
     * Get othertaxes2Currencytaxamount.
     *
     * @return string
     */
    public function getOthertaxes2Currencytaxamount()
    {
        return $this->othertaxes2Currencytaxamount;
    }

    /**
     * Set othertaxes2Currencytaxvalue.
     *
     * @param string $othertaxes2Currencytaxvalue
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Currencytaxvalue($othertaxes2Currencytaxvalue)
    {
        $this->othertaxes2Currencytaxvalue = $othertaxes2Currencytaxvalue;

        return $this;
    }

    /**
     * Get othertaxes2Currencytaxvalue.
     *
     * @return string
     */
    public function getOthertaxes2Currencytaxvalue()
    {
        return $this->othertaxes2Currencytaxvalue;
    }

    /**
     * Set currencyvatamount.
     *
     * @param string $currencyvatamount
     *
     * @return Saledocumentline
     */
    public function setCurrencyvatamount($currencyvatamount)
    {
        $this->currencyvatamount = $currencyvatamount;

        return $this;
    }

    /**
     * Get currencyvatamount.
     *
     * @return string
     */
    public function getCurrencyvatamount()
    {
        return $this->currencyvatamount;
    }

    /**
     * Set currencyunitecotaxamountvatexcluded.
     *
     * @param string $currencyunitecotaxamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyunitecotaxamountvatexcluded($currencyunitecotaxamountvatexcluded)
    {
        $this->currencyunitecotaxamountvatexcluded = $currencyunitecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyunitecotaxamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyunitecotaxamountvatexcluded()
    {
        return $this->currencyunitecotaxamountvatexcluded;
    }

    /**
     * Set currencyunitecotaxamountvatincluded.
     *
     * @param string $currencyunitecotaxamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyunitecotaxamountvatincluded($currencyunitecotaxamountvatincluded)
    {
        $this->currencyunitecotaxamountvatincluded = $currencyunitecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get currencyunitecotaxamountvatincluded.
     *
     * @return string
     */
    public function getCurrencyunitecotaxamountvatincluded()
    {
        return $this->currencyunitecotaxamountvatincluded;
    }

    /**
     * Set currencyecotaxamountvatexcluded.
     *
     * @param string $currencyecotaxamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyecotaxamountvatexcluded($currencyecotaxamountvatexcluded)
    {
        $this->currencyecotaxamountvatexcluded = $currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyecotaxamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyecotaxamountvatexcluded()
    {
        return $this->currencyecotaxamountvatexcluded;
    }

    /**
     * Set currencyecotaxamountvatincluded.
     *
     * @param string $currencyecotaxamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyecotaxamountvatincluded($currencyecotaxamountvatincluded)
    {
        $this->currencyecotaxamountvatincluded = $currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get currencyecotaxamountvatincluded.
     *
     * @return string
     */
    public function getCurrencyecotaxamountvatincluded()
    {
        return $this->currencyecotaxamountvatincluded;
    }

    /**
     * Set mustpartiallydelivercommercialnomenclature.
     *
     * @param bool $mustpartiallydelivercommercialnomenclature
     *
     * @return Saledocumentline
     */
    public function setMustpartiallydelivercommercialnomenclature($mustpartiallydelivercommercialnomenclature)
    {
        $this->mustpartiallydelivercommercialnomenclature = $mustpartiallydelivercommercialnomenclature;

        return $this;
    }

    /**
     * Get mustpartiallydelivercommercialnomenclature.
     *
     * @return bool
     */
    public function getMustpartiallydelivercommercialnomenclature()
    {
        return $this->mustpartiallydelivercommercialnomenclature;
    }

    /**
     * Set locationMultilocationmode.
     *
     * @param int $locationMultilocationmode
     *
     * @return Saledocumentline
     */
    public function setLocationMultilocationmode($locationMultilocationmode)
    {
        $this->locationMultilocationmode = $locationMultilocationmode;

        return $this;
    }

    /**
     * Get locationMultilocationmode.
     *
     * @return int
     */
    public function getLocationMultilocationmode()
    {
        return $this->locationMultilocationmode;
    }

    /**
     * Set remainingquantitytodeliver.
     *
     * @param string $remainingquantitytodeliver
     *
     * @return Saledocumentline
     */
    public function setRemainingquantitytodeliver($remainingquantitytodeliver)
    {
        $this->remainingquantitytodeliver = $remainingquantitytodeliver;

        return $this;
    }

    /**
     * Get remainingquantitytodeliver.
     *
     * @return string
     */
    public function getRemainingquantitytodeliver()
    {
        return $this->remainingquantitytodeliver;
    }

    /**
     * Set billofquantitiesprogramIsactive.
     *
     * @param bool $billofquantitiesprogramIsactive
     *
     * @return Saledocumentline
     */
    public function setBillofquantitiesprogramIsactive($billofquantitiesprogramIsactive)
    {
        $this->billofquantitiesprogramIsactive = $billofquantitiesprogramIsactive;

        return $this;
    }

    /**
     * Get billofquantitiesprogramIsactive.
     *
     * @return bool
     */
    public function getBillofquantitiesprogramIsactive()
    {
        return $this->billofquantitiesprogramIsactive;
    }

    /**
     * Set billofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @param bool $billofquantitiesprogramKeepactivefromquotetoorder
     *
     * @return Saledocumentline
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
     * Set unitecotaxfurnitureamountvatexcluded.
     *
     * @param string $unitecotaxfurnitureamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setUnitecotaxfurnitureamountvatexcluded($unitecotaxfurnitureamountvatexcluded)
    {
        $this->unitecotaxfurnitureamountvatexcluded = $unitecotaxfurnitureamountvatexcluded;

        return $this;
    }

    /**
     * Get unitecotaxfurnitureamountvatexcluded.
     *
     * @return string
     */
    public function getUnitecotaxfurnitureamountvatexcluded()
    {
        return $this->unitecotaxfurnitureamountvatexcluded;
    }

    /**
     * Set unitecotaxfurnitureamountvatincluded.
     *
     * @param string $unitecotaxfurnitureamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setUnitecotaxfurnitureamountvatincluded($unitecotaxfurnitureamountvatincluded)
    {
        $this->unitecotaxfurnitureamountvatincluded = $unitecotaxfurnitureamountvatincluded;

        return $this;
    }

    /**
     * Get unitecotaxfurnitureamountvatincluded.
     *
     * @return string
     */
    public function getUnitecotaxfurnitureamountvatincluded()
    {
        return $this->unitecotaxfurnitureamountvatincluded;
    }

    /**
     * Set ecotaxfurnitureamountvatexcluded.
     *
     * @param string $ecotaxfurnitureamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setEcotaxfurnitureamountvatexcluded($ecotaxfurnitureamountvatexcluded)
    {
        $this->ecotaxfurnitureamountvatexcluded = $ecotaxfurnitureamountvatexcluded;

        return $this;
    }

    /**
     * Get ecotaxfurnitureamountvatexcluded.
     *
     * @return string
     */
    public function getEcotaxfurnitureamountvatexcluded()
    {
        return $this->ecotaxfurnitureamountvatexcluded;
    }

    /**
     * Set ecotaxfurnitureamountvatincluded.
     *
     * @param string $ecotaxfurnitureamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setEcotaxfurnitureamountvatincluded($ecotaxfurnitureamountvatincluded)
    {
        $this->ecotaxfurnitureamountvatincluded = $ecotaxfurnitureamountvatincluded;

        return $this;
    }

    /**
     * Get ecotaxfurnitureamountvatincluded.
     *
     * @return string
     */
    public function getEcotaxfurnitureamountvatincluded()
    {
        return $this->ecotaxfurnitureamountvatincluded;
    }

    /**
     * Set currencyunitecotaxfurnitureamountvatexcluded.
     *
     * @param string $currencyunitecotaxfurnitureamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyunitecotaxfurnitureamountvatexcluded($currencyunitecotaxfurnitureamountvatexcluded)
    {
        $this->currencyunitecotaxfurnitureamountvatexcluded = $currencyunitecotaxfurnitureamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyunitecotaxfurnitureamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyunitecotaxfurnitureamountvatexcluded()
    {
        return $this->currencyunitecotaxfurnitureamountvatexcluded;
    }

    /**
     * Set currencyunitecotaxfurnitureamountvatincluded.
     *
     * @param string $currencyunitecotaxfurnitureamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyunitecotaxfurnitureamountvatincluded($currencyunitecotaxfurnitureamountvatincluded)
    {
        $this->currencyunitecotaxfurnitureamountvatincluded = $currencyunitecotaxfurnitureamountvatincluded;

        return $this;
    }

    /**
     * Get currencyunitecotaxfurnitureamountvatincluded.
     *
     * @return string
     */
    public function getCurrencyunitecotaxfurnitureamountvatincluded()
    {
        return $this->currencyunitecotaxfurnitureamountvatincluded;
    }

    /**
     * Set currencyecotaxfurnitureamountvatexcluded.
     *
     * @param string $currencyecotaxfurnitureamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyecotaxfurnitureamountvatexcluded($currencyecotaxfurnitureamountvatexcluded)
    {
        $this->currencyecotaxfurnitureamountvatexcluded = $currencyecotaxfurnitureamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyecotaxfurnitureamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyecotaxfurnitureamountvatexcluded()
    {
        return $this->currencyecotaxfurnitureamountvatexcluded;
    }

    /**
     * Set currencyecotaxfurnitureamountvatincluded.
     *
     * @param string $currencyecotaxfurnitureamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencyecotaxfurnitureamountvatincluded($currencyecotaxfurnitureamountvatincluded)
    {
        $this->currencyecotaxfurnitureamountvatincluded = $currencyecotaxfurnitureamountvatincluded;

        return $this;
    }

    /**
     * Get currencyecotaxfurnitureamountvatincluded.
     *
     * @return string
     */
    public function getCurrencyecotaxfurnitureamountvatincluded()
    {
        return $this->currencyecotaxfurnitureamountvatincluded;
    }

    /**
     * Set includeecotaxfurnitureindueamount.
     *
     * @param bool $includeecotaxfurnitureindueamount
     *
     * @return Saledocumentline
     */
    public function setIncludeecotaxfurnitureindueamount($includeecotaxfurnitureindueamount)
    {
        $this->includeecotaxfurnitureindueamount = $includeecotaxfurnitureindueamount;

        return $this;
    }

    /**
     * Get includeecotaxfurnitureindueamount.
     *
     * @return bool
     */
    public function getIncludeecotaxfurnitureindueamount()
    {
        return $this->includeecotaxfurnitureindueamount;
    }

    /**
     * Set documentid.
     *
     * @param string $documentid
     *
     * @return Saledocumentline
     */
    public function setDocumentid($documentid)
    {
        $this->documentid = $documentid;

        return $this;
    }

    /**
     * Get documentid.
     *
     * @return string
     */
    public function getDocumentid()
    {
        return $this->documentid;
    }

    /**
     * Set linetype.
     *
     * @param int $linetype
     *
     * @return Saledocumentline
     */
    public function setLinetype($linetype)
    {
        $this->linetype = $linetype;

        return $this;
    }

    /**
     * Get linetype.
     *
     * @return int
     */
    public function getLinetype()
    {
        return $this->linetype;
    }

    /**
     * Set lineorder.
     *
     * @param int $lineorder
     *
     * @return Saledocumentline
     */
    public function setLineorder($lineorder)
    {
        $this->lineorder = $lineorder;

        return $this;
    }

    /**
     * Get lineorder.
     *
     * @return int
     */
    public function getLineorder()
    {
        return $this->lineorder;
    }

    /**
     * Set isreferenceditem.
     *
     * @param bool $isreferenceditem
     *
     * @return Saledocumentline
     */
    public function setIsreferenceditem($isreferenceditem)
    {
        $this->isreferenceditem = $isreferenceditem;

        return $this;
    }

    /**
     * Get isreferenceditem.
     *
     * @return bool
     */
    public function getIsreferenceditem()
    {
        return $this->isreferenceditem;
    }

    /**
     * Set quantity.
     *
     * @param string $quantity
     *
     * @return Saledocumentline
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set realquantity.
     *
     * @param string $realquantity
     *
     * @return Saledocumentline
     */
    public function setRealquantity($realquantity)
    {
        $this->realquantity = $realquantity;

        return $this;
    }

    /**
     * Get realquantity.
     *
     * @return string
     */
    public function getRealquantity()
    {
        return $this->realquantity;
    }

    /**
     * Set isnumbersetmanually.
     *
     * @param bool $isnumbersetmanually
     *
     * @return Saledocumentline
     */
    public function setIsnumbersetmanually($isnumbersetmanually)
    {
        $this->isnumbersetmanually = $isnumbersetmanually;

        return $this;
    }

    /**
     * Get isnumbersetmanually.
     *
     * @return bool
     */
    public function getIsnumbersetmanually()
    {
        return $this->isnumbersetmanually;
    }

    /**
     * Set purchaseprice.
     *
     * @param string $purchaseprice
     *
     * @return Saledocumentline
     */
    public function setPurchaseprice($purchaseprice)
    {
        $this->purchaseprice = $purchaseprice;

        return $this;
    }

    /**
     * Get purchaseprice.
     *
     * @return string
     */
    public function getPurchaseprice()
    {
        return $this->purchaseprice;
    }

    /**
     * Set chargerate.
     *
     * @param string $chargerate
     *
     * @return Saledocumentline
     */
    public function setChargerate($chargerate)
    {
        $this->chargerate = $chargerate;

        return $this;
    }

    /**
     * Get chargerate.
     *
     * @return string
     */
    public function getChargerate()
    {
        return $this->chargerate;
    }

    /**
     * Set chargeamount.
     *
     * @param string $chargeamount
     *
     * @return Saledocumentline
     */
    public function setChargeamount($chargeamount)
    {
        $this->chargeamount = $chargeamount;

        return $this;
    }

    /**
     * Get chargeamount.
     *
     * @return string
     */
    public function getChargeamount()
    {
        return $this->chargeamount;
    }

    /**
     * Set costprice.
     *
     * @param string $costprice
     *
     * @return Saledocumentline
     */
    public function setCostprice($costprice)
    {
        $this->costprice = $costprice;

        return $this;
    }

    /**
     * Get costprice.
     *
     * @return string
     */
    public function getCostprice()
    {
        return $this->costprice;
    }

    /**
     * Set unitdiscountrate.
     *
     * @param string $unitdiscountrate
     *
     * @return Saledocumentline
     */
    public function setUnitdiscountrate($unitdiscountrate)
    {
        $this->unitdiscountrate = $unitdiscountrate;

        return $this;
    }

    /**
     * Get unitdiscountrate.
     *
     * @return string
     */
    public function getUnitdiscountrate()
    {
        return $this->unitdiscountrate;
    }

    /**
     * Set unitdiscountamountvatexcluded.
     *
     * @param string $unitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setUnitdiscountamountvatexcluded($unitdiscountamountvatexcluded)
    {
        $this->unitdiscountamountvatexcluded = $unitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get unitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getUnitdiscountamountvatexcluded()
    {
        return $this->unitdiscountamountvatexcluded;
    }

    /**
     * Set unitdiscountamountvatincluded.
     *
     * @param string $unitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setUnitdiscountamountvatincluded($unitdiscountamountvatincluded)
    {
        $this->unitdiscountamountvatincluded = $unitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get unitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getUnitdiscountamountvatincluded()
    {
        return $this->unitdiscountamountvatincluded;
    }

    /**
     * Set currencytotalunitdiscountamountvatexcluded.
     *
     * @param string $currencytotalunitdiscountamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setCurrencytotalunitdiscountamountvatexcluded($currencytotalunitdiscountamountvatexcluded)
    {
        $this->currencytotalunitdiscountamountvatexcluded = $currencytotalunitdiscountamountvatexcluded;

        return $this;
    }

    /**
     * Get currencytotalunitdiscountamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencytotalunitdiscountamountvatexcluded()
    {
        return $this->currencytotalunitdiscountamountvatexcluded;
    }

    /**
     * Set currencytotalunitdiscountamountvatincluded.
     *
     * @param string $currencytotalunitdiscountamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setCurrencytotalunitdiscountamountvatincluded($currencytotalunitdiscountamountvatincluded)
    {
        $this->currencytotalunitdiscountamountvatincluded = $currencytotalunitdiscountamountvatincluded;

        return $this;
    }

    /**
     * Get currencytotalunitdiscountamountvatincluded.
     *
     * @return string
     */
    public function getCurrencytotalunitdiscountamountvatincluded()
    {
        return $this->currencytotalunitdiscountamountvatincluded;
    }

    /**
     * Set totaldiscountrate.
     *
     * @param string $totaldiscountrate
     *
     * @return Saledocumentline
     */
    public function setTotaldiscountrate($totaldiscountrate)
    {
        $this->totaldiscountrate = $totaldiscountrate;

        return $this;
    }

    /**
     * Get totaldiscountrate.
     *
     * @return string
     */
    public function getTotaldiscountrate()
    {
        return $this->totaldiscountrate;
    }

    /**
     * Set isnetpricewithfulldecimals.
     *
     * @param bool $isnetpricewithfulldecimals
     *
     * @return Saledocumentline
     */
    public function setIsnetpricewithfulldecimals($isnetpricewithfulldecimals)
    {
        $this->isnetpricewithfulldecimals = $isnetpricewithfulldecimals;

        return $this;
    }

    /**
     * Get isnetpricewithfulldecimals.
     *
     * @return bool
     */
    public function getIsnetpricewithfulldecimals()
    {
        return $this->isnetpricewithfulldecimals;
    }

    /**
     * Set netpricevatexcluded.
     *
     * @param string $netpricevatexcluded
     *
     * @return Saledocumentline
     */
    public function setNetpricevatexcluded($netpricevatexcluded)
    {
        $this->netpricevatexcluded = $netpricevatexcluded;

        return $this;
    }

    /**
     * Get netpricevatexcluded.
     *
     * @return string
     */
    public function getNetpricevatexcluded()
    {
        return $this->netpricevatexcluded;
    }

    /**
     * Set netpricevatincluded.
     *
     * @param string $netpricevatincluded
     *
     * @return Saledocumentline
     */
    public function setNetpricevatincluded($netpricevatincluded)
    {
        $this->netpricevatincluded = $netpricevatincluded;

        return $this;
    }

    /**
     * Get netpricevatincluded.
     *
     * @return string
     */
    public function getNetpricevatincluded()
    {
        return $this->netpricevatincluded;
    }

    /**
     * Set netpricevatexcludedwithdiscount.
     *
     * @param string $netpricevatexcludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setNetpricevatexcludedwithdiscount($netpricevatexcludedwithdiscount)
    {
        $this->netpricevatexcludedwithdiscount = $netpricevatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get netpricevatexcludedwithdiscount.
     *
     * @return string
     */
    public function getNetpricevatexcludedwithdiscount()
    {
        return $this->netpricevatexcludedwithdiscount;
    }

    /**
     * Set netpricevatincludedwithdiscount.
     *
     * @param string $netpricevatincludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setNetpricevatincludedwithdiscount($netpricevatincludedwithdiscount)
    {
        $this->netpricevatincludedwithdiscount = $netpricevatincludedwithdiscount;

        return $this;
    }

    /**
     * Get netpricevatincludedwithdiscount.
     *
     * @return string
     */
    public function getNetpricevatincludedwithdiscount()
    {
        return $this->netpricevatincludedwithdiscount;
    }

    /**
     * Set netamountvatexcluded.
     *
     * @param string $netamountvatexcluded
     *
     * @return Saledocumentline
     */
    public function setNetamountvatexcluded($netamountvatexcluded)
    {
        $this->netamountvatexcluded = $netamountvatexcluded;

        return $this;
    }

    /**
     * Get netamountvatexcluded.
     *
     * @return string
     */
    public function getNetamountvatexcluded()
    {
        return $this->netamountvatexcluded;
    }

    /**
     * Set netamountvatexcludedwithdiscount.
     *
     * @param string $netamountvatexcludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setNetamountvatexcludedwithdiscount($netamountvatexcludedwithdiscount)
    {
        $this->netamountvatexcludedwithdiscount = $netamountvatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get netamountvatexcludedwithdiscount.
     *
     * @return string
     */
    public function getNetamountvatexcludedwithdiscount()
    {
        return $this->netamountvatexcludedwithdiscount;
    }

    /**
     * Set netamountvatincluded.
     *
     * @param string $netamountvatincluded
     *
     * @return Saledocumentline
     */
    public function setNetamountvatincluded($netamountvatincluded)
    {
        $this->netamountvatincluded = $netamountvatincluded;

        return $this;
    }

    /**
     * Get netamountvatincluded.
     *
     * @return string
     */
    public function getNetamountvatincluded()
    {
        return $this->netamountvatincluded;
    }

    /**
     * Set netamountvatincludedwithdiscount.
     *
     * @param string $netamountvatincludedwithdiscount
     *
     * @return Saledocumentline
     */
    public function setNetamountvatincludedwithdiscount($netamountvatincludedwithdiscount)
    {
        $this->netamountvatincludedwithdiscount = $netamountvatincludedwithdiscount;

        return $this;
    }

    /**
     * Get netamountvatincludedwithdiscount.
     *
     * @return string
     */
    public function getNetamountvatincludedwithdiscount()
    {
        return $this->netamountvatincludedwithdiscount;
    }

    /**
     * Set ecotaxid.
     *
     * @param string|null $ecotaxid
     *
     * @return Saledocumentline
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
     * Set unitid.
     *
     * @param string|null $unitid
     *
     * @return Saledocumentline
     */
    public function setUnitid($unitid = null)
    {
        $this->unitid = $unitid;

        return $this;
    }

    /**
     * Get unitid.
     *
     * @return string|null
     */
    public function getUnitid()
    {
        return $this->unitid;
    }

    /**
     * Set storehouseid.
     *
     * @param string|null $storehouseid
     *
     * @return Saledocumentline
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
     * Set stockmovementid.
     *
     * @param int|null $stockmovementid
     *
     * @return Saledocumentline
     */
    public function setStockmovementid($stockmovementid = null)
    {
        $this->stockmovementid = $stockmovementid;

        return $this;
    }

    /**
     * Get stockmovementid.
     *
     * @return int|null
     */
    public function getStockmovementid()
    {
        return $this->stockmovementid;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Saledocumentline
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
     * Set descriptionclear.
     *
     * @param string|null $descriptionclear
     *
     * @return Saledocumentline
     */
    public function setDescriptionclear($descriptionclear = null)
    {
        $this->descriptionclear = $descriptionclear;

        return $this;
    }

    /**
     * Get descriptionclear.
     *
     * @return string|null
     */
    public function getDescriptionclear()
    {
        return $this->descriptionclear;
    }

    /**
     * Set itemid.
     *
     * @param string|null $itemid
     *
     * @return Saledocumentline
     */
    public function setItemid($itemid = null)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid.
     *
     * @return string|null
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set parentlineid.
     *
     * @param string|null $parentlineid
     *
     * @return Saledocumentline
     */
    public function setParentlineid($parentlineid = null)
    {
        $this->parentlineid = $parentlineid;

        return $this;
    }

    /**
     * Get parentlineid.
     *
     * @return string|null
     */
    public function getParentlineid()
    {
        return $this->parentlineid;
    }

    /**
     * Set topparentlineid.
     *
     * @param string|null $topparentlineid
     *
     * @return Saledocumentline
     */
    public function setTopparentlineid($topparentlineid = null)
    {
        $this->topparentlineid = $topparentlineid;

        return $this;
    }

    /**
     * Get topparentlineid.
     *
     * @return string|null
     */
    public function getTopparentlineid()
    {
        return $this->topparentlineid;
    }

    /**
     * Set syscreateddate.
     *
     * @param \DateTime|null $syscreateddate
     *
     * @return Saledocumentline
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
     * @return Saledocumentline
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
     * @return Saledocumentline
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
     * @return Saledocumentline
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
     * Set analyticplanitemid.
     *
     * @param int|null $analyticplanitemid
     *
     * @return Saledocumentline
     */
    public function setAnalyticplanitemid($analyticplanitemid = null)
    {
        $this->analyticplanitemid = $analyticplanitemid;

        return $this;
    }

    /**
     * Get analyticplanitemid.
     *
     * @return int|null
     */
    public function getAnalyticplanitemid()
    {
        return $this->analyticplanitemid;
    }

    /**
     * Set unitpriceprogramProgram.
     *
     * @param string|null $unitpriceprogramProgram
     *
     * @return Saledocumentline
     */
    public function setUnitpriceprogramProgram($unitpriceprogramProgram = null)
    {
        $this->unitpriceprogramProgram = $unitpriceprogramProgram;

        return $this;
    }

    /**
     * Get unitpriceprogramProgram.
     *
     * @return string|null
     */
    public function getUnitpriceprogramProgram()
    {
        return $this->unitpriceprogramProgram;
    }

    /**
     * Set vatmode.
     *
     * @param int|null $vatmode
     *
     * @return Saledocumentline
     */
    public function setVatmode($vatmode = null)
    {
        $this->vatmode = $vatmode;

        return $this;
    }

    /**
     * Get vatmode.
     *
     * @return int|null
     */
    public function getVatmode()
    {
        return $this->vatmode;
    }

    /**
     * Set maintenancecontractid.
     *
     * @param string|null $maintenancecontractid
     *
     * @return Saledocumentline
     */
    public function setMaintenancecontractid($maintenancecontractid = null)
    {
        $this->maintenancecontractid = $maintenancecontractid;

        return $this;
    }

    /**
     * Get maintenancecontractid.
     *
     * @return string|null
     */
    public function getMaintenancecontractid()
    {
        return $this->maintenancecontractid;
    }

    /**
     * Set guaranteetypeid.
     *
     * @param string|null $guaranteetypeid
     *
     * @return Saledocumentline
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
     * Set incidentid.
     *
     * @param string|null $incidentid
     *
     * @return Saledocumentline
     */
    public function setIncidentid($incidentid = null)
    {
        $this->incidentid = $incidentid;

        return $this;
    }

    /**
     * Get incidentid.
     *
     * @return string|null
     */
    public function getIncidentid()
    {
        return $this->incidentid;
    }

    /**
     * Set returnstate.
     *
     * @param int|null $returnstate
     *
     * @return Saledocumentline
     */
    public function setReturnstate($returnstate = null)
    {
        $this->returnstate = $returnstate;

        return $this;
    }

    /**
     * Get returnstate.
     *
     * @return int|null
     */
    public function getReturnstate()
    {
        return $this->returnstate;
    }

    /**
     * Set billofquantitiesprogramProgram.
     *
     * @param string|null $billofquantitiesprogramProgram
     *
     * @return Saledocumentline
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
     * Set syseditcounter.
     *
     * @param int|null $syseditcounter
     *
     * @return Saledocumentline
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
     * Set locationLocationid.
     *
     * @param string|null $locationLocationid
     *
     * @return Saledocumentline
     */
    public function setLocationLocationid($locationLocationid = null)
    {
        $this->locationLocationid = $locationLocationid;

        return $this;
    }

    /**
     * Get locationLocationid.
     *
     * @return string|null
     */
    public function getLocationLocationid()
    {
        return $this->locationLocationid;
    }

    /**
     * Set colleagueid.
     *
     * @param string|null $colleagueid
     *
     * @return Saledocumentline
     */
    public function setColleagueid($colleagueid = null)
    {
        $this->colleagueid = $colleagueid;

        return $this;
    }

    /**
     * Get colleagueid.
     *
     * @return string|null
     */
    public function getColleagueid()
    {
        return $this->colleagueid;
    }

    /**
     * Set isfixedprice.
     *
     * @param int|null $isfixedprice
     *
     * @return Saledocumentline
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
     * Set itemreference.
     *
     * @param string|null $itemreference
     *
     * @return Saledocumentline
     */
    public function setItemreference($itemreference = null)
    {
        $this->itemreference = $itemreference;

        return $this;
    }

    /**
     * Get itemreference.
     *
     * @return string|null
     */
    public function getItemreference()
    {
        return $this->itemreference;
    }

    /**
     * Set othertaxes2Taxunitid.
     *
     * @param string|null $othertaxes2Taxunitid
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Taxunitid($othertaxes2Taxunitid = null)
    {
        $this->othertaxes2Taxunitid = $othertaxes2Taxunitid;

        return $this;
    }

    /**
     * Get othertaxes2Taxunitid.
     *
     * @return string|null
     */
    public function getOthertaxes2Taxunitid()
    {
        return $this->othertaxes2Taxunitid;
    }

    /**
     * Set dealid.
     *
     * @param string|null $dealid
     *
     * @return Saledocumentline
     */
    public function setDealid($dealid = null)
    {
        $this->dealid = $dealid;

        return $this;
    }

    /**
     * Get dealid.
     *
     * @return string|null
     */
    public function getDealid()
    {
        return $this->dealid;
    }

    /**
     * Set othertaxes1Taxunitid.
     *
     * @param string|null $othertaxes1Taxunitid
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Taxunitid($othertaxes1Taxunitid = null)
    {
        $this->othertaxes1Taxunitid = $othertaxes1Taxunitid;

        return $this;
    }

    /**
     * Get othertaxes1Taxunitid.
     *
     * @return string|null
     */
    public function getOthertaxes1Taxunitid()
    {
        return $this->othertaxes1Taxunitid;
    }

    /**
     * Set othertaxes2Id.
     *
     * @param string|null $othertaxes2Id
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Id($othertaxes2Id = null)
    {
        $this->othertaxes2Id = $othertaxes2Id;

        return $this;
    }

    /**
     * Get othertaxes2Id.
     *
     * @return string|null
     */
    public function getOthertaxes2Id()
    {
        return $this->othertaxes2Id;
    }

    /**
     * Set othertaxes2Calculationbase.
     *
     * @param int|null $othertaxes2Calculationbase
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Calculationbase($othertaxes2Calculationbase = null)
    {
        $this->othertaxes2Calculationbase = $othertaxes2Calculationbase;

        return $this;
    }

    /**
     * Get othertaxes2Calculationbase.
     *
     * @return int|null
     */
    public function getOthertaxes2Calculationbase()
    {
        return $this->othertaxes2Calculationbase;
    }

    /**
     * Set othertaxes0Taxunitid.
     *
     * @param string|null $othertaxes0Taxunitid
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Taxunitid($othertaxes0Taxunitid = null)
    {
        $this->othertaxes0Taxunitid = $othertaxes0Taxunitid;

        return $this;
    }

    /**
     * Get othertaxes0Taxunitid.
     *
     * @return string|null
     */
    public function getOthertaxes0Taxunitid()
    {
        return $this->othertaxes0Taxunitid;
    }

    /**
     * Set othertaxes1Id.
     *
     * @param string|null $othertaxes1Id
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Id($othertaxes1Id = null)
    {
        $this->othertaxes1Id = $othertaxes1Id;

        return $this;
    }

    /**
     * Get othertaxes1Id.
     *
     * @return string|null
     */
    public function getOthertaxes1Id()
    {
        return $this->othertaxes1Id;
    }

    /**
     * Set othertaxes1Calculationbase.
     *
     * @param int|null $othertaxes1Calculationbase
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Calculationbase($othertaxes1Calculationbase = null)
    {
        $this->othertaxes1Calculationbase = $othertaxes1Calculationbase;

        return $this;
    }

    /**
     * Get othertaxes1Calculationbase.
     *
     * @return int|null
     */
    public function getOthertaxes1Calculationbase()
    {
        return $this->othertaxes1Calculationbase;
    }

    /**
     * Set discounts2Discounttype.
     *
     * @param int|null $discounts2Discounttype
     *
     * @return Saledocumentline
     */
    public function setDiscounts2Discounttype($discounts2Discounttype = null)
    {
        $this->discounts2Discounttype = $discounts2Discounttype;

        return $this;
    }

    /**
     * Get discounts2Discounttype.
     *
     * @return int|null
     */
    public function getDiscounts2Discounttype()
    {
        return $this->discounts2Discounttype;
    }

    /**
     * Set othertaxes0Id.
     *
     * @param string|null $othertaxes0Id
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Id($othertaxes0Id = null)
    {
        $this->othertaxes0Id = $othertaxes0Id;

        return $this;
    }

    /**
     * Get othertaxes0Id.
     *
     * @return string|null
     */
    public function getOthertaxes0Id()
    {
        return $this->othertaxes0Id;
    }

    /**
     * Set othertaxes0Calculationbase.
     *
     * @param int|null $othertaxes0Calculationbase
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Calculationbase($othertaxes0Calculationbase = null)
    {
        $this->othertaxes0Calculationbase = $othertaxes0Calculationbase;

        return $this;
    }

    /**
     * Get othertaxes0Calculationbase.
     *
     * @return int|null
     */
    public function getOthertaxes0Calculationbase()
    {
        return $this->othertaxes0Calculationbase;
    }

    /**
     * Set discounts1Discounttype.
     *
     * @param int|null $discounts1Discounttype
     *
     * @return Saledocumentline
     */
    public function setDiscounts1Discounttype($discounts1Discounttype = null)
    {
        $this->discounts1Discounttype = $discounts1Discounttype;

        return $this;
    }

    /**
     * Get discounts1Discounttype.
     *
     * @return int|null
     */
    public function getDiscounts1Discounttype()
    {
        return $this->discounts1Discounttype;
    }

    /**
     * Set nomenclaturecalculationtype.
     *
     * @param int|null $nomenclaturecalculationtype
     *
     * @return Saledocumentline
     */
    public function setNomenclaturecalculationtype($nomenclaturecalculationtype = null)
    {
        $this->nomenclaturecalculationtype = $nomenclaturecalculationtype;

        return $this;
    }

    /**
     * Get nomenclaturecalculationtype.
     *
     * @return int|null
     */
    public function getNomenclaturecalculationtype()
    {
        return $this->nomenclaturecalculationtype;
    }

    /**
     * Set discounts0Discounttype.
     *
     * @param int|null $discounts0Discounttype
     *
     * @return Saledocumentline
     */
    public function setDiscounts0Discounttype($discounts0Discounttype = null)
    {
        $this->discounts0Discounttype = $discounts0Discounttype;

        return $this;
    }

    /**
     * Get discounts0Discounttype.
     *
     * @return int|null
     */
    public function getDiscounts0Discounttype()
    {
        return $this->discounts0Discounttype;
    }

    /**
     * Set deliveredquantity.
     *
     * @param string|null $deliveredquantity
     *
     * @return Saledocumentline
     */
    public function setDeliveredquantity($deliveredquantity = null)
    {
        $this->deliveredquantity = $deliveredquantity;

        return $this;
    }

    /**
     * Get deliveredquantity.
     *
     * @return string|null
     */
    public function getDeliveredquantity()
    {
        return $this->deliveredquantity;
    }

    /**
     * Set numbering.
     *
     * @param string|null $numbering
     *
     * @return Saledocumentline
     */
    public function setNumbering($numbering = null)
    {
        $this->numbering = $numbering;

        return $this;
    }

    /**
     * Get numbering.
     *
     * @return string|null
     */
    public function getNumbering()
    {
        return $this->numbering;
    }

    /**
     * Set weightunitid.
     *
     * @param string|null $weightunitid
     *
     * @return Saledocumentline
     */
    public function setWeightunitid($weightunitid = null)
    {
        $this->weightunitid = $weightunitid;

        return $this;
    }

    /**
     * Get weightunitid.
     *
     * @return string|null
     */
    public function getWeightunitid()
    {
        return $this->weightunitid;
    }

    /**
     * Set limitdate.
     *
     * @param \DateTime|null $limitdate
     *
     * @return Saledocumentline
     */
    public function setLimitdate($limitdate = null)
    {
        $this->limitdate = $limitdate;

        return $this;
    }

    /**
     * Get limitdate.
     *
     * @return \DateTime|null
     */
    public function getLimitdate()
    {
        return $this->limitdate;
    }

    /**
     * Set vatid.
     *
     * @param string|null $vatid
     *
     * @return Saledocumentline
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
     * Set vatamount.
     *
     * @param string|null $vatamount
     *
     * @return Saledocumentline
     */
    public function setVatamount($vatamount = null)
    {
        $this->vatamount = $vatamount;

        return $this;
    }

    /**
     * Get vatamount.
     *
     * @return string|null
     */
    public function getVatamount()
    {
        return $this->vatamount;
    }

    /**
     * Set deliverydate.
     *
     * @param \DateTime|null $deliverydate
     *
     * @return Saledocumentline
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
     * @param int|null $deliverystate
     *
     * @return Saledocumentline
     */
    public function setDeliverystate($deliverystate = null)
    {
        $this->deliverystate = $deliverystate;

        return $this;
    }

    /**
     * Get deliverystate.
     *
     * @return int|null
     */
    public function getDeliverystate()
    {
        return $this->deliverystate;
    }

    /**
     * Set volumeunitid.
     *
     * @param string|null $volumeunitid
     *
     * @return Saledocumentline
     */
    public function setVolumeunitid($volumeunitid = null)
    {
        $this->volumeunitid = $volumeunitid;

        return $this;
    }

    /**
     * Get volumeunitid.
     *
     * @return string|null
     */
    public function getVolumeunitid()
    {
        return $this->volumeunitid;
    }

    /**
     * Set trackingnumber.
     *
     * @param string|null $trackingnumber
     *
     * @return Saledocumentline
     */
    public function setTrackingnumber($trackingnumber = null)
    {
        $this->trackingnumber = $trackingnumber;

        return $this;
    }

    /**
     * Get trackingnumber.
     *
     * @return string|null
     */
    public function getTrackingnumber()
    {
        return $this->trackingnumber;
    }

    /**
     * Set duration.
     *
     * @param string|null $duration
     *
     * @return Saledocumentline
     */
    public function setDuration($duration = null)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set purchasedeliveryaddresstype.
     *
     * @param int|null $purchasedeliveryaddresstype
     *
     * @return Saledocumentline
     */
    public function setPurchasedeliveryaddresstype($purchasedeliveryaddresstype = null)
    {
        $this->purchasedeliveryaddresstype = $purchasedeliveryaddresstype;

        return $this;
    }

    /**
     * Get purchasedeliveryaddresstype.
     *
     * @return int|null
     */
    public function getPurchasedeliveryaddresstype()
    {
        return $this->purchasedeliveryaddresstype;
    }

    /**
     * Set linkedlinesids.
     *
     * @param string|null $linkedlinesids
     *
     * @return Saledocumentline
     */
    public function setLinkedlinesids($linkedlinesids = null)
    {
        $this->linkedlinesids = $linkedlinesids;

        return $this;
    }

    /**
     * Get linkedlinesids.
     *
     * @return string|null
     */
    public function getLinkedlinesids()
    {
        return $this->linkedlinesids;
    }

    /**
     * Set linktype.
     *
     * @param int|null $linktype
     *
     * @return Saledocumentline
     */
    public function setLinktype($linktype = null)
    {
        $this->linktype = $linktype;

        return $this;
    }

    /**
     * Get linktype.
     *
     * @return int|null
     */
    public function getLinktype()
    {
        return $this->linktype;
    }

    /**
     * Set account.
     *
     * @param string|null $account
     *
     * @return Saledocumentline
     */
    public function setAccount($account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account.
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set ecotaxfurnitureid.
     *
     * @param string|null $ecotaxfurnitureid
     *
     * @return Saledocumentline
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
     * Set customerproductids.
     *
     * @param string|null $customerproductids
     *
     * @return Saledocumentline
     */
    public function setCustomerproductids($customerproductids = null)
    {
        $this->customerproductids = $customerproductids;

        return $this;
    }

    /**
     * Get customerproductids.
     *
     * @return string|null
     */
    public function getCustomerproductids()
    {
        return $this->customerproductids;
    }

    /**
     * Set supplierid.
     *
     * @param string|null $supplierid
     *
     * @return Saledocumentline
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
     * Set createdmaintenancecontractid.
     *
     * @param string|null $createdmaintenancecontractid
     *
     * @return Saledocumentline
     */
    public function setCreatedmaintenancecontractid($createdmaintenancecontractid = null)
    {
        $this->createdmaintenancecontractid = $createdmaintenancecontractid;

        return $this;
    }

    /**
     * Get createdmaintenancecontractid.
     *
     * @return string|null
     */
    public function getCreatedmaintenancecontractid()
    {
        return $this->createdmaintenancecontractid;
    }

    /**
     * Set rangeitemid.
     *
     * @param string|null $rangeitemid
     *
     * @return Saledocumentline
     */
    public function setRangeitemid($rangeitemid = null)
    {
        $this->rangeitemid = $rangeitemid;

        return $this;
    }

    /**
     * Get rangeitemid.
     *
     * @return string|null
     */
    public function getRangeitemid()
    {
        return $this->rangeitemid;
    }

    /**
     * Set purchasepricepercentage.
     *
     * @param string $purchasepricepercentage
     *
     * @return Saledocumentline
     */
    public function setPurchasepricepercentage($purchasepricepercentage)
    {
        $this->purchasepricepercentage = $purchasepricepercentage;

        return $this;
    }

    /**
     * Get purchasepricepercentage.
     *
     * @return string
     */
    public function getPurchasepricepercentage()
    {
        return $this->purchasepricepercentage;
    }

    /**
     * Set othertaxes0Subtaxid.
     *
     * @param string|null $othertaxes0Subtaxid
     *
     * @return Saledocumentline
     */
    public function setOthertaxes0Subtaxid($othertaxes0Subtaxid = null)
    {
        $this->othertaxes0Subtaxid = $othertaxes0Subtaxid;

        return $this;
    }

    /**
     * Get othertaxes0Subtaxid.
     *
     * @return string|null
     */
    public function getOthertaxes0Subtaxid()
    {
        return $this->othertaxes0Subtaxid;
    }

    /**
     * Set othertaxes1Subtaxid.
     *
     * @param string|null $othertaxes1Subtaxid
     *
     * @return Saledocumentline
     */
    public function setOthertaxes1Subtaxid($othertaxes1Subtaxid = null)
    {
        $this->othertaxes1Subtaxid = $othertaxes1Subtaxid;

        return $this;
    }

    /**
     * Get othertaxes1Subtaxid.
     *
     * @return string|null
     */
    public function getOthertaxes1Subtaxid()
    {
        return $this->othertaxes1Subtaxid;
    }

    /**
     * Set othertaxes2Subtaxid.
     *
     * @param string|null $othertaxes2Subtaxid
     *
     * @return Saledocumentline
     */
    public function setOthertaxes2Subtaxid($othertaxes2Subtaxid = null)
    {
        $this->othertaxes2Subtaxid = $othertaxes2Subtaxid;

        return $this;
    }

    /**
     * Get othertaxes2Subtaxid.
     *
     * @return string|null
     */
    public function getOthertaxes2Subtaxid()
    {
        return $this->othertaxes2Subtaxid;
    }

    /**
     * Set ignoremanualpricesetformultilinepricelist.
     *
     * @param bool|null $ignoremanualpricesetformultilinepricelist
     *
     * @return Saledocumentline
     */
    public function setIgnoremanualpricesetformultilinepricelist($ignoremanualpricesetformultilinepricelist = null)
    {
        $this->ignoremanualpricesetformultilinepricelist = $ignoremanualpricesetformultilinepricelist;

        return $this;
    }

    /**
     * Get ignoremanualpricesetformultilinepricelist.
     *
     * @return bool|null
     */
    public function getIgnoremanualpricesetformultilinepricelist()
    {
        return $this->ignoremanualpricesetformultilinepricelist;
    }

    /**
     * Set intrastatexcluded.
     *
     * @param bool $intrastatexcluded
     *
     * @return Saledocumentline
     */
    public function setIntrastatexcluded($intrastatexcluded)
    {
        $this->intrastatexcluded = $intrastatexcluded;

        return $this;
    }

    /**
     * Get intrastatexcluded.
     *
     * @return bool
     */
    public function getIntrastatexcluded()
    {
        return $this->intrastatexcluded;
    }

    /**
     * Set roundid.
     *
     * @param string|null $roundid
     *
     * @return Saledocumentline
     */
    public function setRoundid($roundid = null)
    {
        $this->roundid = $roundid;

        return $this;
    }

    /**
     * Get roundid.
     *
     * @return string|null
     */
    public function getRoundid()
    {
        return $this->roundid;
    }

    /**
     * Set costpricepercentage.
     *
     * @param string $costpricepercentage
     *
     * @return Saledocumentline
     */
    public function setCostpricepercentage($costpricepercentage)
    {
        $this->costpricepercentage = $costpricepercentage;

        return $this;
    }

    /**
     * Get costpricepercentage.
     *
     * @return string
     */
    public function getCostpricepercentage()
    {
        return $this->costpricepercentage;
    }

    /**
     * Set salepricevatexcludedpercentage.
     *
     * @param string $salepricevatexcludedpercentage
     *
     * @return Saledocumentline
     */
    public function setSalepricevatexcludedpercentage($salepricevatexcludedpercentage)
    {
        $this->salepricevatexcludedpercentage = $salepricevatexcludedpercentage;

        return $this;
    }

    /**
     * Get salepricevatexcludedpercentage.
     *
     * @return string
     */
    public function getSalepricevatexcludedpercentage()
    {
        return $this->salepricevatexcludedpercentage;
    }

    /**
     * Set salepricevatincludedpercentage.
     *
     * @param string $salepricevatincludedpercentage
     *
     * @return Saledocumentline
     */
    public function setSalepricevatincludedpercentage($salepricevatincludedpercentage)
    {
        $this->salepricevatincludedpercentage = $salepricevatincludedpercentage;

        return $this;
    }

    /**
     * Get salepricevatincludedpercentage.
     *
     * @return string
     */
    public function getSalepricevatincludedpercentage()
    {
        return $this->salepricevatincludedpercentage;
    }

    /**
     * Set supplierreference.
     *
     * @param string|null $supplierreference
     *
     * @return Saledocumentline
     */
    public function setSupplierreference($supplierreference = null)
    {
        $this->supplierreference = $supplierreference;

        return $this;
    }

    /**
     * Get supplierreference.
     *
     * @return string|null
     */
    public function getSupplierreference()
    {
        return $this->supplierreference;
    }

    /**
     * Set netbrandrate.
     *
     * @param string $netbrandrate
     *
     * @return Saledocumentline
     */
    public function setNetbrandrate($netbrandrate)
    {
        $this->netbrandrate = $netbrandrate;

        return $this;
    }

    /**
     * Get netbrandrate.
     *
     * @return string
     */
    public function getNetbrandrate()
    {
        return $this->netbrandrate;
    }

    /**
     * Set fixedquantity.
     *
     * @param bool $fixedquantity
     *
     * @return Saledocumentline
     */
    public function setFixedquantity($fixedquantity)
    {
        $this->fixedquantity = $fixedquantity;

        return $this;
    }

    /**
     * Get fixedquantity.
     *
     * @return bool
     */
    public function getFixedquantity()
    {
        return $this->fixedquantity;
    }

    /**
     * Set iscommercial.
     *
     * @param bool $iscommercial
     *
     * @return Saledocumentline
     */
    public function setIscommercial($iscommercial)
    {
        $this->iscommercial = $iscommercial;

        return $this;
    }

    /**
     * Get iscommercial.
     *
     * @return bool
     */
    public function getIscommercial()
    {
        return $this->iscommercial;
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
