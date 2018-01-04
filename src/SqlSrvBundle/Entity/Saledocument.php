<?php

namespace SqlSrvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saledocument
 *
 * @ORM\Table(name="SaleDocument", uniqueConstraints={@ORM\UniqueConstraint(name="SaleDocumentDocumentNumberIndex", columns={"DocumentNumber", "DocumentType"}), @ORM\UniqueConstraint(name="SaleDocumentGlobalDocumentOrderIndex", columns={"GlobalDocumentOrder"}), @ORM\UniqueConstraint(name="SaleDocumentPrefixSuffixIndex", columns={"SerialId", "NumberPrefix", "NumberSuffix", "DocumentType", "Revision"})})
 * @ORM\Entity(repositoryClass="SqlSrvBundle\Repository\SaleDocumentRepository")
 */
class Saledocument
{
    /**
     * @var string
     *
     * @ORM\Column(name="DocumentNumber", type="string", length=24, nullable=false)
     */
    private $documentnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="NumberPrefix", type="string", length=8, nullable=false)
     */
    private $numberprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="NumberSuffix", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $numbersuffix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DocumentDate", type="datetime", nullable=false)
     */
    private $documentdate;

    /**
     * @var int
     *
     * @ORM\Column(name="GlobalDocumentOrder", type="integer", nullable=false)
     */
    private $globaldocumentorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="DispatchedByStorehouse", type="boolean", nullable=false)
     */
    private $dispatchedbystorehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalVolume", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalvolume;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWeight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalweight;

    /**
     * @var string
     *
     * @ORM\Column(name="TerritorialityId", type="guid", nullable=false)
     */
    private $territorialityid;

    /**
     * @var string
     *
     * @ORM\Column(name="VatId", type="guid", nullable=false)
     */
    private $vatid;

    /**
     * @var bool
     *
     * @ORM\Column(name="InvoicingAddress_Npai", type="boolean", nullable=false)
     */
    private $invoicingaddressNpai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_CountryIsoCode", type="string", length=3, nullable=true)
     */
    private $invoicingaddressCountryisocode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_City", type="string", length=35, nullable=true)
     */
    private $invoicingaddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_City", type="string", length=35, nullable=true)
     */
    private $deliveryaddressCity;

    /**
     * @var bool
     *
     * @ORM\Column(name="DeliveryAddress_Npai", type="boolean", nullable=false)
     */
    private $deliveryaddressNpai;

    /**
     * @var bool
     *
     * @ORM\Column(name="UseInvoicingAddressAsDeliveryAddress", type="boolean", nullable=false)
     */
    private $useinvoicingaddressasdeliveryaddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="UseInvoicingContactAsDeliveryContact", type="boolean", nullable=false)
     */
    private $useinvoicingcontactasdeliverycontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_CountryIsoCode", type="string", length=3, nullable=true)
     */
    private $deliveryaddressCountryisocode;

    /**
     * @var string
     *
     * @ORM\Column(name="CommitmentsBalanceDue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $commitmentsbalancedue;

    /**
     * @var string
     *
     * @ORM\Column(name="AmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $amountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CostPrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $costprice;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discountamount;

    /**
     * @var string
     *
     * @ORM\Column(name="AmountVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $amountvatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="ShippingAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $shippingamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="ShippingVatId", type="guid", nullable=false)
     */
    private $shippingvatid;

    /**
     * @var string
     *
     * @ORM\Column(name="AmountVatExcludedWithDiscountAndShipping", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $amountvatexcludedwithdiscountandshipping;

    /**
     * @var string
     *
     * @ORM\Column(name="AmountVatExcludedWithDiscountAndShippingWithoutEcotax", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $amountvatexcludedwithdiscountandshippingwithoutecotax;

    /**
     * @var string
     *
     * @ORM\Column(name="VatAmountWithoutEcotax", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $vatamountwithoutecotax;

    /**
     * @var string
     *
     * @ORM\Column(name="VatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $vatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="AmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $amountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="PreviousDepositAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $previousdepositamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DepositAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $depositamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DepositCurrencyAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $depositcurrencyamount;

    /**
     * @var string
     *
     * @ORM\Column(name="PreviousDepositCurrencyAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $previousdepositcurrencyamount;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalDueAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totaldueamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsEcotaxAmountIncludedToDueAmount", type="boolean", nullable=false)
     */
    private $isecotaxamountincludedtodueamount;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $ecotaxamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_VatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Vatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_VatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Vatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_TaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Taxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Reamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_VatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Vatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_VatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Vatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_TaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Taxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Reamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="PriceWithTaxBased", type="boolean", nullable=false)
     */
    private $pricewithtaxbased;

    /**
     * @var bool
     *
     * @ORM\Column(name="SendedByMail", type="boolean", nullable=false)
     */
    private $sendedbymail;

    /**
     * @var bool
     *
     * @ORM\Column(name="KeepDepositVatAmount", type="boolean", nullable=false)
     */
    private $keepdepositvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DocumentLanguage", type="string", length=3, nullable=false)
     */
    private $documentlanguage;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsStructuredSepaCommunication", type="boolean", nullable=false)
     */
    private $isstructuredsepacommunication;

    /**
     * @var bool
     *
     * @ORM\Column(name="InvoicingChargesNotSubjectToFinancialDiscount", type="boolean", nullable=false)
     */
    private $invoicingchargesnotsubjecttofinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="InvoicingChargesAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $invoicingchargesamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="InvoicingChargesVatId", type="guid", nullable=false)
     */
    private $invoicingchargesvatid;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyInvoicingChargesAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyinvoicingchargesamountvatexcluded;

    /**
     * @var int
     *
     * @ORM\Column(name="LoadFabricationComponentsMode", type="smallint", nullable=false)
     */
    private $loadfabricationcomponentsmode;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $brandrate;

    /**
     * @var string
     *
     * @ORM\Column(name="NetBrandRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netbrandrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="DoNotCreateMovement", type="boolean", nullable=false)
     */
    private $donotcreatemovement;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_VatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Vatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_VatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Vatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_TaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Taxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Reamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_VatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Vatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_VatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Vatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_TaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Taxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Reamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_VatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Vatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_VatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Vatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_TaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Taxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Reamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_VatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Vatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_VatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Vatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_TaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Taxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Reamount;

    /**
     * @var int
     *
     * @ORM\Column(name="VatMode", type="smallint", nullable=false)
     */
    private $vatmode;

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
     * @var string
     *
     * @ORM\Column(name="OtherTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxamount;

    /**
     * @var int
     *
     * @ORM\Column(name="FinancialDiscountType", type="smallint", nullable=false)
     */
    private $financialdiscounttype;

    /**
     * @var string
     *
     * @ORM\Column(name="FinancialDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $financialdiscountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="FinancialDiscountAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $financialdiscountamount;

    /**
     * @var string
     *
     * @ORM\Column(name="AmountWithFinancialDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $amountwithfinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="ReportId", type="guid", nullable=false)
     */
    private $reportid;

    /**
     * @var int
     *
     * @ORM\Column(name="NumberOfCopies", type="integer", nullable=false)
     */
    private $numberofcopies;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount0_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount0Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount0_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount0Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount1_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount1Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount1_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount1Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount2_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount2Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount2_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount2Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount3_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount3Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount3_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount3Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyConversionRate", type="decimal", precision=28, scale=12, nullable=false)
     */
    private $currencyconversionrate;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyTotalDueAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencytotaldueamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CommitmentsCurrencyBalanceDue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $commitmentscurrencybalancedue;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyamountvatincluded;

    /**
     * @var int
     *
     * @ORM\Column(name="CurrencyApplicationType", type="smallint", nullable=false)
     */
    private $currencyapplicationtype;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyAmountVatExcludedWithDiscountAndShipping", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyamountvatexcludedwithdiscountandshipping;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyAmountWithFinancialDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyamountwithfinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyShippingAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyshippingamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyAmountVatExcludedWithDiscount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyamountvatexcludedwithdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyAmountVatExcludedWithDiscountAndShippingWithoutEcotax", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyamountvatexcludedwithdiscountandshippingwithoutecotax;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxamountvatincluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyFinancialDiscountAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyfinancialdiscountamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyVatAmountWithoutEcotax", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyvatamountwithoutecotax;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyecotaxamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyDiscountAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencydiscountamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount4_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount4Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount4_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount4Taxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount5_BaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount5Baseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount5_TaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount5Taxamount;

    /**
     * @var int
     *
     * @ORM\Column(name="ShippingAmountInclusionType", type="smallint", nullable=false)
     */
    private $shippingamountinclusiontype;

    /**
     * @var bool
     *
     * @ORM\Column(name="Printed", type="boolean", nullable=false)
     */
    private $printed;

    /**
     * @var string
     *
     * @ORM\Column(name="SerialId", type="string", length=2, nullable=false)
     */
    private $serialid;

    /**
     * @var bool
     *
     * @ORM\Column(name="SubjectToRE", type="boolean", nullable=false)
     */
    private $subjecttore;

    /**
     * @var string
     *
     * @ORM\Column(name="REAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $reamount;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalNetWeight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $totalnetweight;

    /**
     * @var int
     *
     * @ORM\Column(name="CorrectionType", type="smallint", nullable=false)
     */
    private $correctiontype;

    /**
     * @var string
     *
     * @ORM\Column(name="IRPFAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $irpfamount;

    /**
     * @var string
     *
     * @ORM\Column(name="IRPFRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $irpfrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="AutomaticSettlementGeneration", type="boolean", nullable=false)
     */
    private $automaticsettlementgeneration;

    /**
     * @var string
     *
     * @ORM\Column(name="RemainingDepositAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $remainingdepositamount;

    /**
     * @var string
     *
     * @ORM\Column(name="RemainingDepositCurrencyAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $remainingdepositcurrencyamount;

    /**
     * @var string
     *
     * @ORM\Column(name="RemainingAmountToDeliver", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $remainingamounttodeliver;

    /**
     * @var string
     *
     * @ORM\Column(name="Revision", type="string", length=4, nullable=false)
     */
    private $revision;

    /**
     * @var int
     *
     * @ORM\Column(name="DocumentType", type="smallint", nullable=false)
     */
    private $documenttype;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerId", type="string", length=20, nullable=false)
     */
    private $customerid;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerName", type="string", length=60, nullable=false)
     */
    private $customername;

    /**
     * @var string
     *
     * @ORM\Column(name="HumanServiceTotalAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $humanservicetotalamount;

    /**
     * @var string
     *
     * @ORM\Column(name="HumanServiceAmountSettledByOther", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $humanserviceamountsettledbyother;

    /**
     * @var string
     *
     * @ORM\Column(name="HumanServiceAmountSettledByCESU", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $humanserviceamountsettledbycesu;

    /**
     * @var string
     *
     * @ORM\Column(name="HumanServiceAmountSettledByCESUP", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $humanserviceamountsettledbycesup;

    /**
     * @var string
     *
     * @ORM\Column(name="HumanServiceDeductibleAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $humanservicedeductibleamount;

    /**
     * @var string
     *
     * @ORM\Column(name="GrossInterestBase", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $grossinterestbase;

    /**
     * @var string
     *
     * @ORM\Column(name="GrossInterestRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $grossinterestrate;

    /**
     * @var string
     *
     * @ORM\Column(name="GrossInterestAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $grossinterestamount;

    /**
     * @var string
     *
     * @ORM\Column(name="InterestAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $interestamountvatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="InterestRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $interestrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="xx_AchatsFaits", type="boolean", nullable=false)
     */
    private $xxAchatsfaits;

    /**
     * @var bool
     *
     * @ORM\Column(name="xx_AchatsRecus", type="boolean", nullable=false)
     */
    private $xxAchatsrecus;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyVatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Currencyvatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyVatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Currencyvatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyTaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Currencytaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyREAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount0Currencyreamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyVatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Currencyvatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyVatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Currencyvatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyTaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Currencytaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyREAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount1Currencyreamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyVatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Currencyvatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyVatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Currencyvatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyTaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Currencytaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyREAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount2Currencyreamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyVatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Currencyvatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyVatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Currencyvatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyTaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Currencytaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyREAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount3Currencyreamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyVatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Currencyvatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyVatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Currencyvatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyTaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Currencytaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyREAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount4Currencyreamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OtherTaxAmountNotSubjectToVat", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $othertaxamountnotsubjecttovat;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyOtherTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyothertaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyOtherTaxAmountNotSubjectToVat", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currencyothertaxamountnotsubjecttovat;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount0_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount0Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount0_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount0Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount1_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount1Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount1_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount1Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount2_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount2Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount2_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount2Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount3_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount3Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount3_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount3Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount4_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount4Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount4_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount4Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount5_CurrencyBaseAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount5Currencybaseamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailTaxAmount5_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailtaxamount5Currencytaxamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="ShippingNotSubjectToFinancialDiscount", type="boolean", nullable=false)
     */
    private $shippingnotsubjecttofinancialdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyVatAmountOnCollectionWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Currencyvatamountoncollectionwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyVatAmountOnDebitWithoutDeposit", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Currencyvatamountondebitwithoutdeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyTaxAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Currencytaxamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyTaxVatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Currencytaxvatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyREAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $detailvatamount5Currencyreamount;

    /**
     * @var string
     *
     * @ORM\Column(name="RemainingAmountToDeliverVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $remainingamounttodelivervatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PaymentThirdId", type="string", length=20, nullable=true)
     */
    private $paymentthirdid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingThirdId", type="string", length=20, nullable=true)
     */
    private $invoicingthirdid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TaxIds0", type="guid", nullable=true)
     */
    private $taxids0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TaxIds1", type="guid", nullable=true)
     */
    private $taxids1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TaxIds2", type="guid", nullable=true)
     */
    private $taxids2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencyecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencyecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencyecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyVatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencyvatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyVatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencyvatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntrastatIncoterm", type="string", length=3, nullable=true)
     */
    private $intrastatincoterm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyDetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencydetailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencyecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencyecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencyecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyVatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencyvatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_CurrencyVatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Currencyvatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyDetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencydetailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencyecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencyecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencyecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyVatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencyvatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_CurrencyVatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Currencyvatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyDetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencydetailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencyecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencyecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencyecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyVatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencyvatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_CurrencyVatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Currencyvatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyDetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencydetailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencyecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencyecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencyecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyVatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencyvatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_CurrencyVatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Currencyvatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_CurrencyDetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Currencydetailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyDetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencydetailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyEcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencyecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyEcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencyecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyEcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencyecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyVatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencyvatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_CurrencyVatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Currencyvatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MaintenanceContractId", type="string", length=8, nullable=true)
     */
    private $maintenancecontractid;

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
     * @ORM\Column(name="ColleagueId", type="string", length=20, nullable=true)
     */
    private $colleagueid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Priority", type="smallint", nullable=true)
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntervenerId", type="string", length=20, nullable=true)
     */
    private $intervenerid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OriginDocumentNumber", type="string", length=100, nullable=true)
     */
    private $origindocumentnumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sysEditCounter", type="integer", nullable=true)
     */
    private $syseditcounter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysModuleId", type="guid", nullable=true)
     */
    private $sysmoduleid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysDatabaseId", type="guid", nullable=true)
     */
    private $sysdatabaseid;

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
     * @var string|null
     *
     * @ORM\Column(name="CustomerCivility", type="string", length=25, nullable=true)
     */
    private $customercivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CustomerIntracommunityVatNumber", type="string", length=20, nullable=true)
     */
    private $customerintracommunityvatnumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OriginDocumentType", type="smallint", nullable=true)
     */
    private $origindocumenttype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DeliveryOrderPreparationState", type="smallint", nullable=true)
     */
    private $deliveryorderpreparationstate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ReturnOrderPreparationState", type="smallint", nullable=true)
     */
    private $returnorderpreparationstate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdentificationType", type="smallint", nullable=true)
     */
    private $identificationtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CorrectionCause", type="string", length=255, nullable=true)
     */
    private $correctioncause;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CorrectionReasonId", type="string", length=3, nullable=true)
     */
    private $correctionreasonid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntrastatTransportMode", type="string", length=1, nullable=true)
     */
    private $intrastattransportmode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntrastatTransactionNature", type="string", length=2, nullable=true)
     */
    private $intrastattransactionnature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AppliedPriceListLineId", type="guid", nullable=true)
     */
    private $appliedpricelistlineid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PriceListCategory", type="string", length=8, nullable=true)
     */
    private $pricelistcategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount5_TaxCaption", type="string", length=100, nullable=true)
     */
    private $detailtaxamount5Taxcaption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CompanyBankId", type="string", length=6, nullable=true)
     */
    private $companybankid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CurrencyId", type="string", length=3, nullable=true)
     */
    private $currencyid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount4_TaxCaption", type="string", length=100, nullable=true)
     */
    private $detailtaxamount4Taxcaption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount5_TaxId", type="guid", nullable=true)
     */
    private $detailtaxamount5Taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DetailTaxAmount5_TaxCalculationBase", type="smallint", nullable=true)
     */
    private $detailtaxamount5Taxcalculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DealId", type="string", length=10, nullable=true)
     */
    private $dealid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount3_TaxCaption", type="string", length=100, nullable=true)
     */
    private $detailtaxamount3Taxcaption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount4_TaxId", type="guid", nullable=true)
     */
    private $detailtaxamount4Taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DetailTaxAmount4_TaxCalculationBase", type="smallint", nullable=true)
     */
    private $detailtaxamount4Taxcalculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount2_TaxCaption", type="string", length=100, nullable=true)
     */
    private $detailtaxamount2Taxcaption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount3_TaxId", type="guid", nullable=true)
     */
    private $detailtaxamount3Taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DetailTaxAmount3_TaxCalculationBase", type="smallint", nullable=true)
     */
    private $detailtaxamount3Taxcalculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount1_TaxCaption", type="string", length=100, nullable=true)
     */
    private $detailtaxamount1Taxcaption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount2_TaxId", type="guid", nullable=true)
     */
    private $detailtaxamount2Taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DetailTaxAmount2_TaxCalculationBase", type="smallint", nullable=true)
     */
    private $detailtaxamount2Taxcalculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount0_TaxCaption", type="string", length=100, nullable=true)
     */
    private $detailtaxamount0Taxcaption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount1_TaxId", type="guid", nullable=true)
     */
    private $detailtaxamount1Taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DetailTaxAmount1_TaxCalculationBase", type="smallint", nullable=true)
     */
    private $detailtaxamount1Taxcalculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ThirdBankAccountId", type="guid", nullable=true)
     */
    private $thirdbankaccountid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailTaxAmount0_TaxId", type="guid", nullable=true)
     */
    private $detailtaxamount0Taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DetailTaxAmount0_TaxCalculationBase", type="smallint", nullable=true)
     */
    private $detailtaxamount0Taxcalculationbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PaymentTypeId", type="string", length=6, nullable=true)
     */
    private $paymenttypeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AccountingExchangeGroupId", type="guid", nullable=true)
     */
    private $accountingexchangegroupid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailVatId", type="guid", nullable=true)
     */
    private $detailvatamount5Detailvatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailVatRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detailvatrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_DetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Detailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Ecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Ecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Ecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_VatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Vatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount5_VatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount5Vatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailVatId", type="guid", nullable=true)
     */
    private $detailvatamount4Detailvatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailVatRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detailvatrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_DetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Detailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Ecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Ecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Ecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_VatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Vatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount4_VatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount4Vatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailVatId", type="guid", nullable=true)
     */
    private $detailvatamount3Detailvatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailVatRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detailvatrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_DetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Detailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Ecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Ecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Ecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_VatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Vatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount3_VatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount3Vatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ThirdIdToDeliver", type="string", length=20, nullable=true)
     */
    private $thirdidtodeliver;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReverseChargeMention", type="string", length=255, nullable=true)
     */
    private $reversechargemention;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SepaCommunication", type="string", length=140, nullable=true)
     */
    private $sepacommunication;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrderThirdId", type="string", length=20, nullable=true)
     */
    private $orderthirdid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BankId", type="string", length=6, nullable=true)
     */
    private $bankid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailVatId", type="guid", nullable=true)
     */
    private $detailvatamount2Detailvatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailVatRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detailvatrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_DetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Detailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Ecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Ecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Ecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_VatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Vatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount2_VatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount2Vatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailDepositREAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detaildepositreamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailREAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detailreamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailVatId", type="guid", nullable=true)
     */
    private $detailvatamount1Detailvatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailVatRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detailvatrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_DetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Detailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Ecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Ecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Ecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_VatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Vatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount1_VatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount1Vatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailVatId", type="guid", nullable=true)
     */
    private $detailvatamount0Detailvatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailVatRate", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detailvatrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detailamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detailvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detailamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailDepositVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detaildepositvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_DetailVatAmountWithoutDepositAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Detailvatamountwithoutdepositamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_EcotaxAmountVatExcluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Ecotaxamountvatexcluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_EcotaxAmountVatIncluded", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Ecotaxamountvatincluded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_EcotaxVatAmount", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Ecotaxvatamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_VatAmountOnDebit", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Vatamountondebit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailVatAmount0_VatAmountOnCollection", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $detailvatamount0Vatamountoncollection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingId", type="string", length=8, nullable=true)
     */
    private $shippingid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Description", type="string", length=50, nullable=true)
     */
    private $deliveryaddressDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Civility", type="string", length=25, nullable=true)
     */
    private $deliveryaddressCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_ThirdName", type="string", length=60, nullable=true)
     */
    private $deliveryaddressThirdname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SettlementModeId", type="string", length=6, nullable=true)
     */
    private $settlementmodeid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ValidationState", type="smallint", nullable=true)
     */
    private $validationstate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DocumentState", type="integer", nullable=true)
     */
    private $documentstate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ValidityDate", type="datetime", nullable=true)
     */
    private $validitydate;

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
     * @ORM\Column(name="DeliveryAddress_WebSite", type="string", length=100, nullable=true)
     */
    private $deliveryaddressWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Longitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $deliveryaddressLongitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Latitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $deliveryaddressLatitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Civility", type="string", length=25, nullable=true)
     */
    private $deliverycontactCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Name", type="string", length=60, nullable=true)
     */
    private $deliverycontactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_FirstName", type="string", length=60, nullable=true)
     */
    private $deliverycontactFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Phone", type="string", length=20, nullable=true)
     */
    private $deliverycontactPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_CellPhone", type="string", length=20, nullable=true)
     */
    private $deliverycontactCellphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Fax", type="string", length=20, nullable=true)
     */
    private $deliverycontactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Email", type="string", length=100, nullable=true)
     */
    private $deliverycontactEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Function", type="string", length=40, nullable=true)
     */
    private $deliverycontactFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContact_Department", type="string", length=40, nullable=true)
     */
    private $deliverycontactDepartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_State", type="string", length=50, nullable=true)
     */
    private $deliveryaddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_State", type="string", length=50, nullable=true)
     */
    private $invoicingaddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Description", type="string", length=50, nullable=true)
     */
    private $invoicingaddressDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Civility", type="string", length=25, nullable=true)
     */
    private $invoicingaddressCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_ThirdName", type="string", length=60, nullable=true)
     */
    private $invoicingaddressThirdname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_WebSite", type="string", length=100, nullable=true)
     */
    private $invoicingaddressWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Longitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $invoicingaddressLongitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Latitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $invoicingaddressLatitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Civility", type="string", length=25, nullable=true)
     */
    private $invoicingcontactCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Name", type="string", length=60, nullable=true)
     */
    private $invoicingcontactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_FirstName", type="string", length=60, nullable=true)
     */
    private $invoicingcontactFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Phone", type="string", length=20, nullable=true)
     */
    private $invoicingcontactPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_CellPhone", type="string", length=20, nullable=true)
     */
    private $invoicingcontactCellphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Fax", type="string", length=20, nullable=true)
     */
    private $invoicingcontactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Email", type="string", length=100, nullable=true)
     */
    private $invoicingcontactEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Function", type="string", length=40, nullable=true)
     */
    private $invoicingcontactFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContact_Department", type="string", length=40, nullable=true)
     */
    private $invoicingcontactDepartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Address1", type="string", length=40, nullable=true)
     */
    private $deliveryaddressAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Address2", type="string", length=40, nullable=true)
     */
    private $deliveryaddressAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Address3", type="string", length=40, nullable=true)
     */
    private $deliveryaddressAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_Address4", type="string", length=40, nullable=true)
     */
    private $deliveryaddressAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddress_ZipCode", type="string", length=10, nullable=true)
     */
    private $deliveryaddressZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddressId", type="guid", nullable=true)
     */
    private $invoicingaddressid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingContactId", type="guid", nullable=true)
     */
    private $invoicingcontactid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryAddressId", type="guid", nullable=true)
     */
    private $deliveryaddressid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DeliveryContactId", type="guid", nullable=true)
     */
    private $deliverycontactid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Address1", type="string", length=40, nullable=true)
     */
    private $invoicingaddressAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Address2", type="string", length=40, nullable=true)
     */
    private $invoicingaddressAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Address3", type="string", length=40, nullable=true)
     */
    private $invoicingaddressAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_Address4", type="string", length=40, nullable=true)
     */
    private $invoicingaddressAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingAddress_ZipCode", type="string", length=10, nullable=true)
     */
    private $invoicingaddressZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference", type="string", length=70, nullable=true)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RecoveredFrom", type="smallint", nullable=true)
     */
    private $recoveredfrom;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ModifiedSinceRecovery", type="boolean", nullable=true)
     */
    private $modifiedsincerecovery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AssociatedInvoiceId", type="guid", nullable=true)
     */
    private $associatedinvoiceid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AssociatedDeliveryOrderId", type="guid", nullable=true)
     */
    private $associateddeliveryorderid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AssociatedOrderId", type="guid", nullable=true)
     */
    private $associatedorderid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TransferedDocumentId", type="guid", nullable=true)
     */
    private $transfereddocumentid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StorehouseId", type="guid", nullable=true)
     */
    private $storehouseid;

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
     * @var bool
     *
     * @ORM\Column(name="FixedShippingAmount", type="boolean", nullable=false)
     */
    private $fixedshippingamount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DeliveryAddressType", type="smallint", nullable=true)
     */
    private $deliveryaddresstype;

    /**
     * @var bool
     *
     * @ORM\Column(name="CountermarForcedkOnLines", type="boolean", nullable=false)
     */
    private $countermarforcedkonlines;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xx_atoosync_order", type="string", length=32, nullable=true)
     */
    private $xxAtoosyncOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set documentnumber.
     *
     * @param string $documentnumber
     *
     * @return Saledocument
     */
    public function setDocumentnumber($documentnumber)
    {
        $this->documentnumber = $documentnumber;

        return $this;
    }

    /**
     * Get documentnumber.
     *
     * @return string
     */
    public function getDocumentnumber()
    {
        return $this->documentnumber;
    }

    /**
     * Set numberprefix.
     *
     * @param string $numberprefix
     *
     * @return Saledocument
     */
    public function setNumberprefix($numberprefix)
    {
        $this->numberprefix = $numberprefix;

        return $this;
    }

    /**
     * Get numberprefix.
     *
     * @return string
     */
    public function getNumberprefix()
    {
        return $this->numberprefix;
    }

    /**
     * Set numbersuffix.
     *
     * @param string $numbersuffix
     *
     * @return Saledocument
     */
    public function setNumbersuffix($numbersuffix)
    {
        $this->numbersuffix = $numbersuffix;

        return $this;
    }

    /**
     * Get numbersuffix.
     *
     * @return string
     */
    public function getNumbersuffix()
    {
        return $this->numbersuffix;
    }

    /**
     * Set documentdate.
     *
     * @param \DateTime $documentdate
     *
     * @return Saledocument
     */
    public function setDocumentdate($documentdate)
    {
        $this->documentdate = $documentdate;

        return $this;
    }

    /**
     * Get documentdate.
     *
     * @return \DateTime
     */
    public function getDocumentdate()
    {
        return $this->documentdate;
    }

    /**
     * Set globaldocumentorder.
     *
     * @param int $globaldocumentorder
     *
     * @return Saledocument
     */
    public function setGlobaldocumentorder($globaldocumentorder)
    {
        $this->globaldocumentorder = $globaldocumentorder;

        return $this;
    }

    /**
     * Get globaldocumentorder.
     *
     * @return int
     */
    public function getGlobaldocumentorder()
    {
        return $this->globaldocumentorder;
    }

    /**
     * Set dispatchedbystorehouse.
     *
     * @param bool $dispatchedbystorehouse
     *
     * @return Saledocument
     */
    public function setDispatchedbystorehouse($dispatchedbystorehouse)
    {
        $this->dispatchedbystorehouse = $dispatchedbystorehouse;

        return $this;
    }

    /**
     * Get dispatchedbystorehouse.
     *
     * @return bool
     */
    public function getDispatchedbystorehouse()
    {
        return $this->dispatchedbystorehouse;
    }

    /**
     * Set totalvolume.
     *
     * @param string $totalvolume
     *
     * @return Saledocument
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
     * Set totalweight.
     *
     * @param string $totalweight
     *
     * @return Saledocument
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
     * Set territorialityid.
     *
     * @param string $territorialityid
     *
     * @return Saledocument
     */
    public function setTerritorialityid($territorialityid)
    {
        $this->territorialityid = $territorialityid;

        return $this;
    }

    /**
     * Get territorialityid.
     *
     * @return string
     */
    public function getTerritorialityid()
    {
        return $this->territorialityid;
    }

    /**
     * Set vatid.
     *
     * @param string $vatid
     *
     * @return Saledocument
     */
    public function setVatid($vatid)
    {
        $this->vatid = $vatid;

        return $this;
    }

    /**
     * Get vatid.
     *
     * @return string
     */
    public function getVatid()
    {
        return $this->vatid;
    }

    /**
     * Set invoicingaddressNpai.
     *
     * @param bool $invoicingaddressNpai
     *
     * @return Saledocument
     */
    public function setInvoicingaddressNpai($invoicingaddressNpai)
    {
        $this->invoicingaddressNpai = $invoicingaddressNpai;

        return $this;
    }

    /**
     * Get invoicingaddressNpai.
     *
     * @return bool
     */
    public function getInvoicingaddressNpai()
    {
        return $this->invoicingaddressNpai;
    }

    /**
     * Set invoicingaddressCountryisocode.
     *
     * @param string|null $invoicingaddressCountryisocode
     *
     * @return Saledocument
     */
    public function setInvoicingaddressCountryisocode($invoicingaddressCountryisocode = null)
    {
        $this->invoicingaddressCountryisocode = $invoicingaddressCountryisocode;

        return $this;
    }

    /**
     * Get invoicingaddressCountryisocode.
     *
     * @return string|null
     */
    public function getInvoicingaddressCountryisocode()
    {
        return $this->invoicingaddressCountryisocode;
    }

    /**
     * Set invoicingaddressCity.
     *
     * @param string|null $invoicingaddressCity
     *
     * @return Saledocument
     */
    public function setInvoicingaddressCity($invoicingaddressCity = null)
    {
        $this->invoicingaddressCity = $invoicingaddressCity;

        return $this;
    }

    /**
     * Get invoicingaddressCity.
     *
     * @return string|null
     */
    public function getInvoicingaddressCity()
    {
        return $this->invoicingaddressCity;
    }

    /**
     * Set deliveryaddressCity.
     *
     * @param string|null $deliveryaddressCity
     *
     * @return Saledocument
     */
    public function setDeliveryaddressCity($deliveryaddressCity = null)
    {
        $this->deliveryaddressCity = $deliveryaddressCity;

        return $this;
    }

    /**
     * Get deliveryaddressCity.
     *
     * @return string|null
     */
    public function getDeliveryaddressCity()
    {
        return $this->deliveryaddressCity;
    }

    /**
     * Set deliveryaddressNpai.
     *
     * @param bool $deliveryaddressNpai
     *
     * @return Saledocument
     */
    public function setDeliveryaddressNpai($deliveryaddressNpai)
    {
        $this->deliveryaddressNpai = $deliveryaddressNpai;

        return $this;
    }

    /**
     * Get deliveryaddressNpai.
     *
     * @return bool
     */
    public function getDeliveryaddressNpai()
    {
        return $this->deliveryaddressNpai;
    }

    /**
     * Set useinvoicingaddressasdeliveryaddress.
     *
     * @param bool $useinvoicingaddressasdeliveryaddress
     *
     * @return Saledocument
     */
    public function setUseinvoicingaddressasdeliveryaddress($useinvoicingaddressasdeliveryaddress)
    {
        $this->useinvoicingaddressasdeliveryaddress = $useinvoicingaddressasdeliveryaddress;

        return $this;
    }

    /**
     * Get useinvoicingaddressasdeliveryaddress.
     *
     * @return bool
     */
    public function getUseinvoicingaddressasdeliveryaddress()
    {
        return $this->useinvoicingaddressasdeliveryaddress;
    }

    /**
     * Set useinvoicingcontactasdeliverycontact.
     *
     * @param bool $useinvoicingcontactasdeliverycontact
     *
     * @return Saledocument
     */
    public function setUseinvoicingcontactasdeliverycontact($useinvoicingcontactasdeliverycontact)
    {
        $this->useinvoicingcontactasdeliverycontact = $useinvoicingcontactasdeliverycontact;

        return $this;
    }

    /**
     * Get useinvoicingcontactasdeliverycontact.
     *
     * @return bool
     */
    public function getUseinvoicingcontactasdeliverycontact()
    {
        return $this->useinvoicingcontactasdeliverycontact;
    }

    /**
     * Set deliveryaddressCountryisocode.
     *
     * @param string|null $deliveryaddressCountryisocode
     *
     * @return Saledocument
     */
    public function setDeliveryaddressCountryisocode($deliveryaddressCountryisocode = null)
    {
        $this->deliveryaddressCountryisocode = $deliveryaddressCountryisocode;

        return $this;
    }

    /**
     * Get deliveryaddressCountryisocode.
     *
     * @return string|null
     */
    public function getDeliveryaddressCountryisocode()
    {
        return $this->deliveryaddressCountryisocode;
    }

    /**
     * Set commitmentsbalancedue.
     *
     * @param string $commitmentsbalancedue
     *
     * @return Saledocument
     */
    public function setCommitmentsbalancedue($commitmentsbalancedue)
    {
        $this->commitmentsbalancedue = $commitmentsbalancedue;

        return $this;
    }

    /**
     * Get commitmentsbalancedue.
     *
     * @return string
     */
    public function getCommitmentsbalancedue()
    {
        return $this->commitmentsbalancedue;
    }

    /**
     * Set amountvatexcluded.
     *
     * @param string $amountvatexcluded
     *
     * @return Saledocument
     */
    public function setAmountvatexcluded($amountvatexcluded)
    {
        $this->amountvatexcluded = $amountvatexcluded;

        return $this;
    }

    /**
     * Get amountvatexcluded.
     *
     * @return string
     */
    public function getAmountvatexcluded()
    {
        return $this->amountvatexcluded;
    }

    /**
     * Set costprice.
     *
     * @param string $costprice
     *
     * @return Saledocument
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
     * Set discountrate.
     *
     * @param string $discountrate
     *
     * @return Saledocument
     */
    public function setDiscountrate($discountrate)
    {
        $this->discountrate = $discountrate;

        return $this;
    }

    /**
     * Get discountrate.
     *
     * @return string
     */
    public function getDiscountrate()
    {
        return $this->discountrate;
    }

    /**
     * Set discountamount.
     *
     * @param string $discountamount
     *
     * @return Saledocument
     */
    public function setDiscountamount($discountamount)
    {
        $this->discountamount = $discountamount;

        return $this;
    }

    /**
     * Get discountamount.
     *
     * @return string
     */
    public function getDiscountamount()
    {
        return $this->discountamount;
    }

    /**
     * Set amountvatexcludedwithdiscount.
     *
     * @param string $amountvatexcludedwithdiscount
     *
     * @return Saledocument
     */
    public function setAmountvatexcludedwithdiscount($amountvatexcludedwithdiscount)
    {
        $this->amountvatexcludedwithdiscount = $amountvatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get amountvatexcludedwithdiscount.
     *
     * @return string
     */
    public function getAmountvatexcludedwithdiscount()
    {
        return $this->amountvatexcludedwithdiscount;
    }

    /**
     * Set shippingamountvatexcluded.
     *
     * @param string $shippingamountvatexcluded
     *
     * @return Saledocument
     */
    public function setShippingamountvatexcluded($shippingamountvatexcluded)
    {
        $this->shippingamountvatexcluded = $shippingamountvatexcluded;

        return $this;
    }

    /**
     * Get shippingamountvatexcluded.
     *
     * @return string
     */
    public function getShippingamountvatexcluded()
    {
        return $this->shippingamountvatexcluded;
    }

    /**
     * Set shippingvatid.
     *
     * @param string $shippingvatid
     *
     * @return Saledocument
     */
    public function setShippingvatid($shippingvatid)
    {
        $this->shippingvatid = $shippingvatid;

        return $this;
    }

    /**
     * Get shippingvatid.
     *
     * @return string
     */
    public function getShippingvatid()
    {
        return $this->shippingvatid;
    }

    /**
     * Set amountvatexcludedwithdiscountandshipping.
     *
     * @param string $amountvatexcludedwithdiscountandshipping
     *
     * @return Saledocument
     */
    public function setAmountvatexcludedwithdiscountandshipping($amountvatexcludedwithdiscountandshipping)
    {
        $this->amountvatexcludedwithdiscountandshipping = $amountvatexcludedwithdiscountandshipping;

        return $this;
    }

    /**
     * Get amountvatexcludedwithdiscountandshipping.
     *
     * @return string
     */
    public function getAmountvatexcludedwithdiscountandshipping()
    {
        return $this->amountvatexcludedwithdiscountandshipping;
    }

    /**
     * Set amountvatexcludedwithdiscountandshippingwithoutecotax.
     *
     * @param string $amountvatexcludedwithdiscountandshippingwithoutecotax
     *
     * @return Saledocument
     */
    public function setAmountvatexcludedwithdiscountandshippingwithoutecotax($amountvatexcludedwithdiscountandshippingwithoutecotax)
    {
        $this->amountvatexcludedwithdiscountandshippingwithoutecotax = $amountvatexcludedwithdiscountandshippingwithoutecotax;

        return $this;
    }

    /**
     * Get amountvatexcludedwithdiscountandshippingwithoutecotax.
     *
     * @return string
     */
    public function getAmountvatexcludedwithdiscountandshippingwithoutecotax()
    {
        return $this->amountvatexcludedwithdiscountandshippingwithoutecotax;
    }

    /**
     * Set vatamountwithoutecotax.
     *
     * @param string $vatamountwithoutecotax
     *
     * @return Saledocument
     */
    public function setVatamountwithoutecotax($vatamountwithoutecotax)
    {
        $this->vatamountwithoutecotax = $vatamountwithoutecotax;

        return $this;
    }

    /**
     * Get vatamountwithoutecotax.
     *
     * @return string
     */
    public function getVatamountwithoutecotax()
    {
        return $this->vatamountwithoutecotax;
    }

    /**
     * Set vatamount.
     *
     * @param string $vatamount
     *
     * @return Saledocument
     */
    public function setVatamount($vatamount)
    {
        $this->vatamount = $vatamount;

        return $this;
    }

    /**
     * Get vatamount.
     *
     * @return string
     */
    public function getVatamount()
    {
        return $this->vatamount;
    }

    /**
     * Set amountvatincluded.
     *
     * @param string $amountvatincluded
     *
     * @return Saledocument
     */
    public function setAmountvatincluded($amountvatincluded)
    {
        $this->amountvatincluded = $amountvatincluded;

        return $this;
    }

    /**
     * Get amountvatincluded.
     *
     * @return string
     */
    public function getAmountvatincluded()
    {
        return $this->amountvatincluded;
    }

    /**
     * Set previousdepositamount.
     *
     * @param string $previousdepositamount
     *
     * @return Saledocument
     */
    public function setPreviousdepositamount($previousdepositamount)
    {
        $this->previousdepositamount = $previousdepositamount;

        return $this;
    }

    /**
     * Get previousdepositamount.
     *
     * @return string
     */
    public function getPreviousdepositamount()
    {
        return $this->previousdepositamount;
    }

    /**
     * Set depositamount.
     *
     * @param string $depositamount
     *
     * @return Saledocument
     */
    public function setDepositamount($depositamount)
    {
        $this->depositamount = $depositamount;

        return $this;
    }

    /**
     * Get depositamount.
     *
     * @return string
     */
    public function getDepositamount()
    {
        return $this->depositamount;
    }

    /**
     * Set depositcurrencyamount.
     *
     * @param string $depositcurrencyamount
     *
     * @return Saledocument
     */
    public function setDepositcurrencyamount($depositcurrencyamount)
    {
        $this->depositcurrencyamount = $depositcurrencyamount;

        return $this;
    }

    /**
     * Get depositcurrencyamount.
     *
     * @return string
     */
    public function getDepositcurrencyamount()
    {
        return $this->depositcurrencyamount;
    }

    /**
     * Set previousdepositcurrencyamount.
     *
     * @param string $previousdepositcurrencyamount
     *
     * @return Saledocument
     */
    public function setPreviousdepositcurrencyamount($previousdepositcurrencyamount)
    {
        $this->previousdepositcurrencyamount = $previousdepositcurrencyamount;

        return $this;
    }

    /**
     * Get previousdepositcurrencyamount.
     *
     * @return string
     */
    public function getPreviousdepositcurrencyamount()
    {
        return $this->previousdepositcurrencyamount;
    }

    /**
     * Set totaldueamount.
     *
     * @param string $totaldueamount
     *
     * @return Saledocument
     */
    public function setTotaldueamount($totaldueamount)
    {
        $this->totaldueamount = $totaldueamount;

        return $this;
    }

    /**
     * Get totaldueamount.
     *
     * @return string
     */
    public function getTotaldueamount()
    {
        return $this->totaldueamount;
    }

    /**
     * Set isecotaxamountincludedtodueamount.
     *
     * @param bool $isecotaxamountincludedtodueamount
     *
     * @return Saledocument
     */
    public function setIsecotaxamountincludedtodueamount($isecotaxamountincludedtodueamount)
    {
        $this->isecotaxamountincludedtodueamount = $isecotaxamountincludedtodueamount;

        return $this;
    }

    /**
     * Get isecotaxamountincludedtodueamount.
     *
     * @return bool
     */
    public function getIsecotaxamountincludedtodueamount()
    {
        return $this->isecotaxamountincludedtodueamount;
    }

    /**
     * Set ecotaxamountvatexcluded.
     *
     * @param string $ecotaxamountvatexcluded
     *
     * @return Saledocument
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
     * Set ecotaxvatamount.
     *
     * @param string $ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setEcotaxvatamount($ecotaxvatamount)
    {
        $this->ecotaxvatamount = $ecotaxvatamount;

        return $this;
    }

    /**
     * Get ecotaxvatamount.
     *
     * @return string
     */
    public function getEcotaxvatamount()
    {
        return $this->ecotaxvatamount;
    }

    /**
     * Set ecotaxamountvatincluded.
     *
     * @param string $ecotaxamountvatincluded
     *
     * @return Saledocument
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
     * Set detailvatamount0Vatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount0Vatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Vatamountoncollectionwithoutdeposit($detailvatamount0Vatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount0Vatamountoncollectionwithoutdeposit = $detailvatamount0Vatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount0Vatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount0Vatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount0Vatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount0Vatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount0Vatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Vatamountondebitwithoutdeposit($detailvatamount0Vatamountondebitwithoutdeposit)
    {
        $this->detailvatamount0Vatamountondebitwithoutdeposit = $detailvatamount0Vatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount0Vatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount0Vatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount0Vatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount0Taxamount.
     *
     * @param string $detailvatamount0Taxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Taxamount($detailvatamount0Taxamount)
    {
        $this->detailvatamount0Taxamount = $detailvatamount0Taxamount;

        return $this;
    }

    /**
     * Get detailvatamount0Taxamount.
     *
     * @return string
     */
    public function getDetailvatamount0Taxamount()
    {
        return $this->detailvatamount0Taxamount;
    }

    /**
     * Set detailvatamount0Taxvatamount.
     *
     * @param string $detailvatamount0Taxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Taxvatamount($detailvatamount0Taxvatamount)
    {
        $this->detailvatamount0Taxvatamount = $detailvatamount0Taxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Taxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount0Taxvatamount()
    {
        return $this->detailvatamount0Taxvatamount;
    }

    /**
     * Set detailvatamount0Reamount.
     *
     * @param string $detailvatamount0Reamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Reamount($detailvatamount0Reamount)
    {
        $this->detailvatamount0Reamount = $detailvatamount0Reamount;

        return $this;
    }

    /**
     * Get detailvatamount0Reamount.
     *
     * @return string
     */
    public function getDetailvatamount0Reamount()
    {
        return $this->detailvatamount0Reamount;
    }

    /**
     * Set detailvatamount1Vatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount1Vatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Vatamountoncollectionwithoutdeposit($detailvatamount1Vatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount1Vatamountoncollectionwithoutdeposit = $detailvatamount1Vatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount1Vatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount1Vatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount1Vatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount1Vatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount1Vatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Vatamountondebitwithoutdeposit($detailvatamount1Vatamountondebitwithoutdeposit)
    {
        $this->detailvatamount1Vatamountondebitwithoutdeposit = $detailvatamount1Vatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount1Vatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount1Vatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount1Vatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount1Taxamount.
     *
     * @param string $detailvatamount1Taxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Taxamount($detailvatamount1Taxamount)
    {
        $this->detailvatamount1Taxamount = $detailvatamount1Taxamount;

        return $this;
    }

    /**
     * Get detailvatamount1Taxamount.
     *
     * @return string
     */
    public function getDetailvatamount1Taxamount()
    {
        return $this->detailvatamount1Taxamount;
    }

    /**
     * Set detailvatamount1Taxvatamount.
     *
     * @param string $detailvatamount1Taxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Taxvatamount($detailvatamount1Taxvatamount)
    {
        $this->detailvatamount1Taxvatamount = $detailvatamount1Taxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Taxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount1Taxvatamount()
    {
        return $this->detailvatamount1Taxvatamount;
    }

    /**
     * Set detailvatamount1Reamount.
     *
     * @param string $detailvatamount1Reamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Reamount($detailvatamount1Reamount)
    {
        $this->detailvatamount1Reamount = $detailvatamount1Reamount;

        return $this;
    }

    /**
     * Get detailvatamount1Reamount.
     *
     * @return string
     */
    public function getDetailvatamount1Reamount()
    {
        return $this->detailvatamount1Reamount;
    }

    /**
     * Set pricewithtaxbased.
     *
     * @param bool $pricewithtaxbased
     *
     * @return Saledocument
     */
    public function setPricewithtaxbased($pricewithtaxbased)
    {
        $this->pricewithtaxbased = $pricewithtaxbased;

        return $this;
    }

    /**
     * Get pricewithtaxbased.
     *
     * @return bool
     */
    public function getPricewithtaxbased()
    {
        return $this->pricewithtaxbased;
    }

    /**
     * Set sendedbymail.
     *
     * @param bool $sendedbymail
     *
     * @return Saledocument
     */
    public function setSendedbymail($sendedbymail)
    {
        $this->sendedbymail = $sendedbymail;

        return $this;
    }

    /**
     * Get sendedbymail.
     *
     * @return bool
     */
    public function getSendedbymail()
    {
        return $this->sendedbymail;
    }

    /**
     * Set keepdepositvatamount.
     *
     * @param bool $keepdepositvatamount
     *
     * @return Saledocument
     */
    public function setKeepdepositvatamount($keepdepositvatamount)
    {
        $this->keepdepositvatamount = $keepdepositvatamount;

        return $this;
    }

    /**
     * Get keepdepositvatamount.
     *
     * @return bool
     */
    public function getKeepdepositvatamount()
    {
        return $this->keepdepositvatamount;
    }

    /**
     * Set documentlanguage.
     *
     * @param string $documentlanguage
     *
     * @return Saledocument
     */
    public function setDocumentlanguage($documentlanguage)
    {
        $this->documentlanguage = $documentlanguage;

        return $this;
    }

    /**
     * Get documentlanguage.
     *
     * @return string
     */
    public function getDocumentlanguage()
    {
        return $this->documentlanguage;
    }

    /**
     * Set isstructuredsepacommunication.
     *
     * @param bool $isstructuredsepacommunication
     *
     * @return Saledocument
     */
    public function setIsstructuredsepacommunication($isstructuredsepacommunication)
    {
        $this->isstructuredsepacommunication = $isstructuredsepacommunication;

        return $this;
    }

    /**
     * Get isstructuredsepacommunication.
     *
     * @return bool
     */
    public function getIsstructuredsepacommunication()
    {
        return $this->isstructuredsepacommunication;
    }

    /**
     * Set invoicingchargesnotsubjecttofinancialdiscount.
     *
     * @param bool $invoicingchargesnotsubjecttofinancialdiscount
     *
     * @return Saledocument
     */
    public function setInvoicingchargesnotsubjecttofinancialdiscount($invoicingchargesnotsubjecttofinancialdiscount)
    {
        $this->invoicingchargesnotsubjecttofinancialdiscount = $invoicingchargesnotsubjecttofinancialdiscount;

        return $this;
    }

    /**
     * Get invoicingchargesnotsubjecttofinancialdiscount.
     *
     * @return bool
     */
    public function getInvoicingchargesnotsubjecttofinancialdiscount()
    {
        return $this->invoicingchargesnotsubjecttofinancialdiscount;
    }

    /**
     * Set invoicingchargesamountvatexcluded.
     *
     * @param string $invoicingchargesamountvatexcluded
     *
     * @return Saledocument
     */
    public function setInvoicingchargesamountvatexcluded($invoicingchargesamountvatexcluded)
    {
        $this->invoicingchargesamountvatexcluded = $invoicingchargesamountvatexcluded;

        return $this;
    }

    /**
     * Get invoicingchargesamountvatexcluded.
     *
     * @return string
     */
    public function getInvoicingchargesamountvatexcluded()
    {
        return $this->invoicingchargesamountvatexcluded;
    }

    /**
     * Set invoicingchargesvatid.
     *
     * @param string $invoicingchargesvatid
     *
     * @return Saledocument
     */
    public function setInvoicingchargesvatid($invoicingchargesvatid)
    {
        $this->invoicingchargesvatid = $invoicingchargesvatid;

        return $this;
    }

    /**
     * Get invoicingchargesvatid.
     *
     * @return string
     */
    public function getInvoicingchargesvatid()
    {
        return $this->invoicingchargesvatid;
    }

    /**
     * Set currencyinvoicingchargesamountvatexcluded.
     *
     * @param string $currencyinvoicingchargesamountvatexcluded
     *
     * @return Saledocument
     */
    public function setCurrencyinvoicingchargesamountvatexcluded($currencyinvoicingchargesamountvatexcluded)
    {
        $this->currencyinvoicingchargesamountvatexcluded = $currencyinvoicingchargesamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyinvoicingchargesamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyinvoicingchargesamountvatexcluded()
    {
        return $this->currencyinvoicingchargesamountvatexcluded;
    }

    /**
     * Set loadfabricationcomponentsmode.
     *
     * @param int $loadfabricationcomponentsmode
     *
     * @return Saledocument
     */
    public function setLoadfabricationcomponentsmode($loadfabricationcomponentsmode)
    {
        $this->loadfabricationcomponentsmode = $loadfabricationcomponentsmode;

        return $this;
    }

    /**
     * Get loadfabricationcomponentsmode.
     *
     * @return int
     */
    public function getLoadfabricationcomponentsmode()
    {
        return $this->loadfabricationcomponentsmode;
    }

    /**
     * Set brandrate.
     *
     * @param string $brandrate
     *
     * @return Saledocument
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
     * Set netbrandrate.
     *
     * @param string $netbrandrate
     *
     * @return Saledocument
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
     * Set donotcreatemovement.
     *
     * @param bool $donotcreatemovement
     *
     * @return Saledocument
     */
    public function setDonotcreatemovement($donotcreatemovement)
    {
        $this->donotcreatemovement = $donotcreatemovement;

        return $this;
    }

    /**
     * Get donotcreatemovement.
     *
     * @return bool
     */
    public function getDonotcreatemovement()
    {
        return $this->donotcreatemovement;
    }

    /**
     * Set detailvatamount2Vatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount2Vatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Vatamountoncollectionwithoutdeposit($detailvatamount2Vatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount2Vatamountoncollectionwithoutdeposit = $detailvatamount2Vatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount2Vatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount2Vatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount2Vatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount2Vatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount2Vatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Vatamountondebitwithoutdeposit($detailvatamount2Vatamountondebitwithoutdeposit)
    {
        $this->detailvatamount2Vatamountondebitwithoutdeposit = $detailvatamount2Vatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount2Vatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount2Vatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount2Vatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount2Taxamount.
     *
     * @param string $detailvatamount2Taxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Taxamount($detailvatamount2Taxamount)
    {
        $this->detailvatamount2Taxamount = $detailvatamount2Taxamount;

        return $this;
    }

    /**
     * Get detailvatamount2Taxamount.
     *
     * @return string
     */
    public function getDetailvatamount2Taxamount()
    {
        return $this->detailvatamount2Taxamount;
    }

    /**
     * Set detailvatamount2Taxvatamount.
     *
     * @param string $detailvatamount2Taxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Taxvatamount($detailvatamount2Taxvatamount)
    {
        $this->detailvatamount2Taxvatamount = $detailvatamount2Taxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Taxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount2Taxvatamount()
    {
        return $this->detailvatamount2Taxvatamount;
    }

    /**
     * Set detailvatamount2Reamount.
     *
     * @param string $detailvatamount2Reamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Reamount($detailvatamount2Reamount)
    {
        $this->detailvatamount2Reamount = $detailvatamount2Reamount;

        return $this;
    }

    /**
     * Get detailvatamount2Reamount.
     *
     * @return string
     */
    public function getDetailvatamount2Reamount()
    {
        return $this->detailvatamount2Reamount;
    }

    /**
     * Set detailvatamount3Vatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount3Vatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Vatamountoncollectionwithoutdeposit($detailvatamount3Vatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount3Vatamountoncollectionwithoutdeposit = $detailvatamount3Vatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount3Vatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount3Vatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount3Vatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount3Vatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount3Vatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Vatamountondebitwithoutdeposit($detailvatamount3Vatamountondebitwithoutdeposit)
    {
        $this->detailvatamount3Vatamountondebitwithoutdeposit = $detailvatamount3Vatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount3Vatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount3Vatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount3Vatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount3Taxamount.
     *
     * @param string $detailvatamount3Taxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Taxamount($detailvatamount3Taxamount)
    {
        $this->detailvatamount3Taxamount = $detailvatamount3Taxamount;

        return $this;
    }

    /**
     * Get detailvatamount3Taxamount.
     *
     * @return string
     */
    public function getDetailvatamount3Taxamount()
    {
        return $this->detailvatamount3Taxamount;
    }

    /**
     * Set detailvatamount3Taxvatamount.
     *
     * @param string $detailvatamount3Taxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Taxvatamount($detailvatamount3Taxvatamount)
    {
        $this->detailvatamount3Taxvatamount = $detailvatamount3Taxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Taxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount3Taxvatamount()
    {
        return $this->detailvatamount3Taxvatamount;
    }

    /**
     * Set detailvatamount3Reamount.
     *
     * @param string $detailvatamount3Reamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Reamount($detailvatamount3Reamount)
    {
        $this->detailvatamount3Reamount = $detailvatamount3Reamount;

        return $this;
    }

    /**
     * Get detailvatamount3Reamount.
     *
     * @return string
     */
    public function getDetailvatamount3Reamount()
    {
        return $this->detailvatamount3Reamount;
    }

    /**
     * Set detailvatamount4Vatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount4Vatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Vatamountoncollectionwithoutdeposit($detailvatamount4Vatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount4Vatamountoncollectionwithoutdeposit = $detailvatamount4Vatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount4Vatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount4Vatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount4Vatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount4Vatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount4Vatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Vatamountondebitwithoutdeposit($detailvatamount4Vatamountondebitwithoutdeposit)
    {
        $this->detailvatamount4Vatamountondebitwithoutdeposit = $detailvatamount4Vatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount4Vatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount4Vatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount4Vatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount4Taxamount.
     *
     * @param string $detailvatamount4Taxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Taxamount($detailvatamount4Taxamount)
    {
        $this->detailvatamount4Taxamount = $detailvatamount4Taxamount;

        return $this;
    }

    /**
     * Get detailvatamount4Taxamount.
     *
     * @return string
     */
    public function getDetailvatamount4Taxamount()
    {
        return $this->detailvatamount4Taxamount;
    }

    /**
     * Set detailvatamount4Taxvatamount.
     *
     * @param string $detailvatamount4Taxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Taxvatamount($detailvatamount4Taxvatamount)
    {
        $this->detailvatamount4Taxvatamount = $detailvatamount4Taxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Taxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount4Taxvatamount()
    {
        return $this->detailvatamount4Taxvatamount;
    }

    /**
     * Set detailvatamount4Reamount.
     *
     * @param string $detailvatamount4Reamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Reamount($detailvatamount4Reamount)
    {
        $this->detailvatamount4Reamount = $detailvatamount4Reamount;

        return $this;
    }

    /**
     * Get detailvatamount4Reamount.
     *
     * @return string
     */
    public function getDetailvatamount4Reamount()
    {
        return $this->detailvatamount4Reamount;
    }

    /**
     * Set detailvatamount5Vatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount5Vatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Vatamountoncollectionwithoutdeposit($detailvatamount5Vatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount5Vatamountoncollectionwithoutdeposit = $detailvatamount5Vatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount5Vatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount5Vatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount5Vatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount5Vatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount5Vatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Vatamountondebitwithoutdeposit($detailvatamount5Vatamountondebitwithoutdeposit)
    {
        $this->detailvatamount5Vatamountondebitwithoutdeposit = $detailvatamount5Vatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount5Vatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount5Vatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount5Vatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount5Taxamount.
     *
     * @param string $detailvatamount5Taxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Taxamount($detailvatamount5Taxamount)
    {
        $this->detailvatamount5Taxamount = $detailvatamount5Taxamount;

        return $this;
    }

    /**
     * Get detailvatamount5Taxamount.
     *
     * @return string
     */
    public function getDetailvatamount5Taxamount()
    {
        return $this->detailvatamount5Taxamount;
    }

    /**
     * Set detailvatamount5Taxvatamount.
     *
     * @param string $detailvatamount5Taxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Taxvatamount($detailvatamount5Taxvatamount)
    {
        $this->detailvatamount5Taxvatamount = $detailvatamount5Taxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Taxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount5Taxvatamount()
    {
        return $this->detailvatamount5Taxvatamount;
    }

    /**
     * Set detailvatamount5Reamount.
     *
     * @param string $detailvatamount5Reamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Reamount($detailvatamount5Reamount)
    {
        $this->detailvatamount5Reamount = $detailvatamount5Reamount;

        return $this;
    }

    /**
     * Get detailvatamount5Reamount.
     *
     * @return string
     */
    public function getDetailvatamount5Reamount()
    {
        return $this->detailvatamount5Reamount;
    }

    /**
     * Set vatmode.
     *
     * @param int $vatmode
     *
     * @return Saledocument
     */
    public function setVatmode($vatmode)
    {
        $this->vatmode = $vatmode;

        return $this;
    }

    /**
     * Get vatmode.
     *
     * @return int
     */
    public function getVatmode()
    {
        return $this->vatmode;
    }

    /**
     * Set numberofpackage.
     *
     * @param int $numberofpackage
     *
     * @return Saledocument
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
     * @return Saledocument
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
     * Set othertaxamount.
     *
     * @param string $othertaxamount
     *
     * @return Saledocument
     */
    public function setOthertaxamount($othertaxamount)
    {
        $this->othertaxamount = $othertaxamount;

        return $this;
    }

    /**
     * Get othertaxamount.
     *
     * @return string
     */
    public function getOthertaxamount()
    {
        return $this->othertaxamount;
    }

    /**
     * Set financialdiscounttype.
     *
     * @param int $financialdiscounttype
     *
     * @return Saledocument
     */
    public function setFinancialdiscounttype($financialdiscounttype)
    {
        $this->financialdiscounttype = $financialdiscounttype;

        return $this;
    }

    /**
     * Get financialdiscounttype.
     *
     * @return int
     */
    public function getFinancialdiscounttype()
    {
        return $this->financialdiscounttype;
    }

    /**
     * Set financialdiscountrate.
     *
     * @param string $financialdiscountrate
     *
     * @return Saledocument
     */
    public function setFinancialdiscountrate($financialdiscountrate)
    {
        $this->financialdiscountrate = $financialdiscountrate;

        return $this;
    }

    /**
     * Get financialdiscountrate.
     *
     * @return string
     */
    public function getFinancialdiscountrate()
    {
        return $this->financialdiscountrate;
    }

    /**
     * Set financialdiscountamount.
     *
     * @param string $financialdiscountamount
     *
     * @return Saledocument
     */
    public function setFinancialdiscountamount($financialdiscountamount)
    {
        $this->financialdiscountamount = $financialdiscountamount;

        return $this;
    }

    /**
     * Get financialdiscountamount.
     *
     * @return string
     */
    public function getFinancialdiscountamount()
    {
        return $this->financialdiscountamount;
    }

    /**
     * Set amountwithfinancialdiscount.
     *
     * @param string $amountwithfinancialdiscount
     *
     * @return Saledocument
     */
    public function setAmountwithfinancialdiscount($amountwithfinancialdiscount)
    {
        $this->amountwithfinancialdiscount = $amountwithfinancialdiscount;

        return $this;
    }

    /**
     * Get amountwithfinancialdiscount.
     *
     * @return string
     */
    public function getAmountwithfinancialdiscount()
    {
        return $this->amountwithfinancialdiscount;
    }

    /**
     * Set reportid.
     *
     * @param string $reportid
     *
     * @return Saledocument
     */
    public function setReportid($reportid)
    {
        $this->reportid = $reportid;

        return $this;
    }

    /**
     * Get reportid.
     *
     * @return string
     */
    public function getReportid()
    {
        return $this->reportid;
    }

    /**
     * Set numberofcopies.
     *
     * @param int $numberofcopies
     *
     * @return Saledocument
     */
    public function setNumberofcopies($numberofcopies)
    {
        $this->numberofcopies = $numberofcopies;

        return $this;
    }

    /**
     * Get numberofcopies.
     *
     * @return int
     */
    public function getNumberofcopies()
    {
        return $this->numberofcopies;
    }

    /**
     * Set detailtaxamount0Baseamount.
     *
     * @param string $detailtaxamount0Baseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Baseamount($detailtaxamount0Baseamount)
    {
        $this->detailtaxamount0Baseamount = $detailtaxamount0Baseamount;

        return $this;
    }

    /**
     * Get detailtaxamount0Baseamount.
     *
     * @return string
     */
    public function getDetailtaxamount0Baseamount()
    {
        return $this->detailtaxamount0Baseamount;
    }

    /**
     * Set detailtaxamount0Taxamount.
     *
     * @param string $detailtaxamount0Taxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Taxamount($detailtaxamount0Taxamount)
    {
        $this->detailtaxamount0Taxamount = $detailtaxamount0Taxamount;

        return $this;
    }

    /**
     * Get detailtaxamount0Taxamount.
     *
     * @return string
     */
    public function getDetailtaxamount0Taxamount()
    {
        return $this->detailtaxamount0Taxamount;
    }

    /**
     * Set detailtaxamount1Baseamount.
     *
     * @param string $detailtaxamount1Baseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Baseamount($detailtaxamount1Baseamount)
    {
        $this->detailtaxamount1Baseamount = $detailtaxamount1Baseamount;

        return $this;
    }

    /**
     * Get detailtaxamount1Baseamount.
     *
     * @return string
     */
    public function getDetailtaxamount1Baseamount()
    {
        return $this->detailtaxamount1Baseamount;
    }

    /**
     * Set detailtaxamount1Taxamount.
     *
     * @param string $detailtaxamount1Taxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Taxamount($detailtaxamount1Taxamount)
    {
        $this->detailtaxamount1Taxamount = $detailtaxamount1Taxamount;

        return $this;
    }

    /**
     * Get detailtaxamount1Taxamount.
     *
     * @return string
     */
    public function getDetailtaxamount1Taxamount()
    {
        return $this->detailtaxamount1Taxamount;
    }

    /**
     * Set detailtaxamount2Baseamount.
     *
     * @param string $detailtaxamount2Baseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Baseamount($detailtaxamount2Baseamount)
    {
        $this->detailtaxamount2Baseamount = $detailtaxamount2Baseamount;

        return $this;
    }

    /**
     * Get detailtaxamount2Baseamount.
     *
     * @return string
     */
    public function getDetailtaxamount2Baseamount()
    {
        return $this->detailtaxamount2Baseamount;
    }

    /**
     * Set detailtaxamount2Taxamount.
     *
     * @param string $detailtaxamount2Taxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Taxamount($detailtaxamount2Taxamount)
    {
        $this->detailtaxamount2Taxamount = $detailtaxamount2Taxamount;

        return $this;
    }

    /**
     * Get detailtaxamount2Taxamount.
     *
     * @return string
     */
    public function getDetailtaxamount2Taxamount()
    {
        return $this->detailtaxamount2Taxamount;
    }

    /**
     * Set detailtaxamount3Baseamount.
     *
     * @param string $detailtaxamount3Baseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Baseamount($detailtaxamount3Baseamount)
    {
        $this->detailtaxamount3Baseamount = $detailtaxamount3Baseamount;

        return $this;
    }

    /**
     * Get detailtaxamount3Baseamount.
     *
     * @return string
     */
    public function getDetailtaxamount3Baseamount()
    {
        return $this->detailtaxamount3Baseamount;
    }

    /**
     * Set detailtaxamount3Taxamount.
     *
     * @param string $detailtaxamount3Taxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Taxamount($detailtaxamount3Taxamount)
    {
        $this->detailtaxamount3Taxamount = $detailtaxamount3Taxamount;

        return $this;
    }

    /**
     * Get detailtaxamount3Taxamount.
     *
     * @return string
     */
    public function getDetailtaxamount3Taxamount()
    {
        return $this->detailtaxamount3Taxamount;
    }

    /**
     * Set currencyconversionrate.
     *
     * @param string $currencyconversionrate
     *
     * @return Saledocument
     */
    public function setCurrencyconversionrate($currencyconversionrate)
    {
        $this->currencyconversionrate = $currencyconversionrate;

        return $this;
    }

    /**
     * Get currencyconversionrate.
     *
     * @return string
     */
    public function getCurrencyconversionrate()
    {
        return $this->currencyconversionrate;
    }

    /**
     * Set currencytotaldueamount.
     *
     * @param string $currencytotaldueamount
     *
     * @return Saledocument
     */
    public function setCurrencytotaldueamount($currencytotaldueamount)
    {
        $this->currencytotaldueamount = $currencytotaldueamount;

        return $this;
    }

    /**
     * Get currencytotaldueamount.
     *
     * @return string
     */
    public function getCurrencytotaldueamount()
    {
        return $this->currencytotaldueamount;
    }

    /**
     * Set commitmentscurrencybalancedue.
     *
     * @param string $commitmentscurrencybalancedue
     *
     * @return Saledocument
     */
    public function setCommitmentscurrencybalancedue($commitmentscurrencybalancedue)
    {
        $this->commitmentscurrencybalancedue = $commitmentscurrencybalancedue;

        return $this;
    }

    /**
     * Get commitmentscurrencybalancedue.
     *
     * @return string
     */
    public function getCommitmentscurrencybalancedue()
    {
        return $this->commitmentscurrencybalancedue;
    }

    /**
     * Set currencyamountvatincluded.
     *
     * @param string $currencyamountvatincluded
     *
     * @return Saledocument
     */
    public function setCurrencyamountvatincluded($currencyamountvatincluded)
    {
        $this->currencyamountvatincluded = $currencyamountvatincluded;

        return $this;
    }

    /**
     * Get currencyamountvatincluded.
     *
     * @return string
     */
    public function getCurrencyamountvatincluded()
    {
        return $this->currencyamountvatincluded;
    }

    /**
     * Set currencyapplicationtype.
     *
     * @param int $currencyapplicationtype
     *
     * @return Saledocument
     */
    public function setCurrencyapplicationtype($currencyapplicationtype)
    {
        $this->currencyapplicationtype = $currencyapplicationtype;

        return $this;
    }

    /**
     * Get currencyapplicationtype.
     *
     * @return int
     */
    public function getCurrencyapplicationtype()
    {
        return $this->currencyapplicationtype;
    }

    /**
     * Set currencyamountvatexcluded.
     *
     * @param string $currencyamountvatexcluded
     *
     * @return Saledocument
     */
    public function setCurrencyamountvatexcluded($currencyamountvatexcluded)
    {
        $this->currencyamountvatexcluded = $currencyamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyamountvatexcluded()
    {
        return $this->currencyamountvatexcluded;
    }

    /**
     * Set currencyamountvatexcludedwithdiscountandshipping.
     *
     * @param string $currencyamountvatexcludedwithdiscountandshipping
     *
     * @return Saledocument
     */
    public function setCurrencyamountvatexcludedwithdiscountandshipping($currencyamountvatexcludedwithdiscountandshipping)
    {
        $this->currencyamountvatexcludedwithdiscountandshipping = $currencyamountvatexcludedwithdiscountandshipping;

        return $this;
    }

    /**
     * Get currencyamountvatexcludedwithdiscountandshipping.
     *
     * @return string
     */
    public function getCurrencyamountvatexcludedwithdiscountandshipping()
    {
        return $this->currencyamountvatexcludedwithdiscountandshipping;
    }

    /**
     * Set currencyamountwithfinancialdiscount.
     *
     * @param string $currencyamountwithfinancialdiscount
     *
     * @return Saledocument
     */
    public function setCurrencyamountwithfinancialdiscount($currencyamountwithfinancialdiscount)
    {
        $this->currencyamountwithfinancialdiscount = $currencyamountwithfinancialdiscount;

        return $this;
    }

    /**
     * Get currencyamountwithfinancialdiscount.
     *
     * @return string
     */
    public function getCurrencyamountwithfinancialdiscount()
    {
        return $this->currencyamountwithfinancialdiscount;
    }

    /**
     * Set currencyshippingamountvatexcluded.
     *
     * @param string $currencyshippingamountvatexcluded
     *
     * @return Saledocument
     */
    public function setCurrencyshippingamountvatexcluded($currencyshippingamountvatexcluded)
    {
        $this->currencyshippingamountvatexcluded = $currencyshippingamountvatexcluded;

        return $this;
    }

    /**
     * Get currencyshippingamountvatexcluded.
     *
     * @return string
     */
    public function getCurrencyshippingamountvatexcluded()
    {
        return $this->currencyshippingamountvatexcluded;
    }

    /**
     * Set currencyamountvatexcludedwithdiscount.
     *
     * @param string $currencyamountvatexcludedwithdiscount
     *
     * @return Saledocument
     */
    public function setCurrencyamountvatexcludedwithdiscount($currencyamountvatexcludedwithdiscount)
    {
        $this->currencyamountvatexcludedwithdiscount = $currencyamountvatexcludedwithdiscount;

        return $this;
    }

    /**
     * Get currencyamountvatexcludedwithdiscount.
     *
     * @return string
     */
    public function getCurrencyamountvatexcludedwithdiscount()
    {
        return $this->currencyamountvatexcludedwithdiscount;
    }

    /**
     * Set currencyamountvatexcludedwithdiscountandshippingwithoutecotax.
     *
     * @param string $currencyamountvatexcludedwithdiscountandshippingwithoutecotax
     *
     * @return Saledocument
     */
    public function setCurrencyamountvatexcludedwithdiscountandshippingwithoutecotax($currencyamountvatexcludedwithdiscountandshippingwithoutecotax)
    {
        $this->currencyamountvatexcludedwithdiscountandshippingwithoutecotax = $currencyamountvatexcludedwithdiscountandshippingwithoutecotax;

        return $this;
    }

    /**
     * Get currencyamountvatexcludedwithdiscountandshippingwithoutecotax.
     *
     * @return string
     */
    public function getCurrencyamountvatexcludedwithdiscountandshippingwithoutecotax()
    {
        return $this->currencyamountvatexcludedwithdiscountandshippingwithoutecotax;
    }

    /**
     * Set currencyecotaxamountvatincluded.
     *
     * @param string $currencyecotaxamountvatincluded
     *
     * @return Saledocument
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
     * Set currencyfinancialdiscountamount.
     *
     * @param string $currencyfinancialdiscountamount
     *
     * @return Saledocument
     */
    public function setCurrencyfinancialdiscountamount($currencyfinancialdiscountamount)
    {
        $this->currencyfinancialdiscountamount = $currencyfinancialdiscountamount;

        return $this;
    }

    /**
     * Get currencyfinancialdiscountamount.
     *
     * @return string
     */
    public function getCurrencyfinancialdiscountamount()
    {
        return $this->currencyfinancialdiscountamount;
    }

    /**
     * Set currencyvatamountwithoutecotax.
     *
     * @param string $currencyvatamountwithoutecotax
     *
     * @return Saledocument
     */
    public function setCurrencyvatamountwithoutecotax($currencyvatamountwithoutecotax)
    {
        $this->currencyvatamountwithoutecotax = $currencyvatamountwithoutecotax;

        return $this;
    }

    /**
     * Get currencyvatamountwithoutecotax.
     *
     * @return string
     */
    public function getCurrencyvatamountwithoutecotax()
    {
        return $this->currencyvatamountwithoutecotax;
    }

    /**
     * Set currencyecotaxvatamount.
     *
     * @param string $currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setCurrencyecotaxvatamount($currencyecotaxvatamount)
    {
        $this->currencyecotaxvatamount = $currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get currencyecotaxvatamount.
     *
     * @return string
     */
    public function getCurrencyecotaxvatamount()
    {
        return $this->currencyecotaxvatamount;
    }

    /**
     * Set currencyecotaxamountvatexcluded.
     *
     * @param string $currencyecotaxamountvatexcluded
     *
     * @return Saledocument
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
     * Set currencyvatamount.
     *
     * @param string $currencyvatamount
     *
     * @return Saledocument
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
     * Set currencydiscountamount.
     *
     * @param string $currencydiscountamount
     *
     * @return Saledocument
     */
    public function setCurrencydiscountamount($currencydiscountamount)
    {
        $this->currencydiscountamount = $currencydiscountamount;

        return $this;
    }

    /**
     * Get currencydiscountamount.
     *
     * @return string
     */
    public function getCurrencydiscountamount()
    {
        return $this->currencydiscountamount;
    }

    /**
     * Set detailtaxamount4Baseamount.
     *
     * @param string $detailtaxamount4Baseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Baseamount($detailtaxamount4Baseamount)
    {
        $this->detailtaxamount4Baseamount = $detailtaxamount4Baseamount;

        return $this;
    }

    /**
     * Get detailtaxamount4Baseamount.
     *
     * @return string
     */
    public function getDetailtaxamount4Baseamount()
    {
        return $this->detailtaxamount4Baseamount;
    }

    /**
     * Set detailtaxamount4Taxamount.
     *
     * @param string $detailtaxamount4Taxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Taxamount($detailtaxamount4Taxamount)
    {
        $this->detailtaxamount4Taxamount = $detailtaxamount4Taxamount;

        return $this;
    }

    /**
     * Get detailtaxamount4Taxamount.
     *
     * @return string
     */
    public function getDetailtaxamount4Taxamount()
    {
        return $this->detailtaxamount4Taxamount;
    }

    /**
     * Set detailtaxamount5Baseamount.
     *
     * @param string $detailtaxamount5Baseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Baseamount($detailtaxamount5Baseamount)
    {
        $this->detailtaxamount5Baseamount = $detailtaxamount5Baseamount;

        return $this;
    }

    /**
     * Get detailtaxamount5Baseamount.
     *
     * @return string
     */
    public function getDetailtaxamount5Baseamount()
    {
        return $this->detailtaxamount5Baseamount;
    }

    /**
     * Set detailtaxamount5Taxamount.
     *
     * @param string $detailtaxamount5Taxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Taxamount($detailtaxamount5Taxamount)
    {
        $this->detailtaxamount5Taxamount = $detailtaxamount5Taxamount;

        return $this;
    }

    /**
     * Get detailtaxamount5Taxamount.
     *
     * @return string
     */
    public function getDetailtaxamount5Taxamount()
    {
        return $this->detailtaxamount5Taxamount;
    }

    /**
     * Set shippingamountinclusiontype.
     *
     * @param int $shippingamountinclusiontype
     *
     * @return Saledocument
     */
    public function setShippingamountinclusiontype($shippingamountinclusiontype)
    {
        $this->shippingamountinclusiontype = $shippingamountinclusiontype;

        return $this;
    }

    /**
     * Get shippingamountinclusiontype.
     *
     * @return int
     */
    public function getShippingamountinclusiontype()
    {
        return $this->shippingamountinclusiontype;
    }

    /**
     * Set printed.
     *
     * @param bool $printed
     *
     * @return Saledocument
     */
    public function setPrinted($printed)
    {
        $this->printed = $printed;

        return $this;
    }

    /**
     * Get printed.
     *
     * @return bool
     */
    public function getPrinted()
    {
        return $this->printed;
    }

    /**
     * Set serialid.
     *
     * @param string $serialid
     *
     * @return Saledocument
     */
    public function setSerialid($serialid)
    {
        $this->serialid = $serialid;

        return $this;
    }

    /**
     * Get serialid.
     *
     * @return string
     */
    public function getSerialid()
    {
        return $this->serialid;
    }

    /**
     * Set subjecttore.
     *
     * @param bool $subjecttore
     *
     * @return Saledocument
     */
    public function setSubjecttore($subjecttore)
    {
        $this->subjecttore = $subjecttore;

        return $this;
    }

    /**
     * Get subjecttore.
     *
     * @return bool
     */
    public function getSubjecttore()
    {
        return $this->subjecttore;
    }

    /**
     * Set reamount.
     *
     * @param string $reamount
     *
     * @return Saledocument
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
     * Set totalnetweight.
     *
     * @param string $totalnetweight
     *
     * @return Saledocument
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
     * Set correctiontype.
     *
     * @param int $correctiontype
     *
     * @return Saledocument
     */
    public function setCorrectiontype($correctiontype)
    {
        $this->correctiontype = $correctiontype;

        return $this;
    }

    /**
     * Get correctiontype.
     *
     * @return int
     */
    public function getCorrectiontype()
    {
        return $this->correctiontype;
    }

    /**
     * Set irpfamount.
     *
     * @param string $irpfamount
     *
     * @return Saledocument
     */
    public function setIrpfamount($irpfamount)
    {
        $this->irpfamount = $irpfamount;

        return $this;
    }

    /**
     * Get irpfamount.
     *
     * @return string
     */
    public function getIrpfamount()
    {
        return $this->irpfamount;
    }

    /**
     * Set irpfrate.
     *
     * @param string $irpfrate
     *
     * @return Saledocument
     */
    public function setIrpfrate($irpfrate)
    {
        $this->irpfrate = $irpfrate;

        return $this;
    }

    /**
     * Get irpfrate.
     *
     * @return string
     */
    public function getIrpfrate()
    {
        return $this->irpfrate;
    }

    /**
     * Set automaticsettlementgeneration.
     *
     * @param bool $automaticsettlementgeneration
     *
     * @return Saledocument
     */
    public function setAutomaticsettlementgeneration($automaticsettlementgeneration)
    {
        $this->automaticsettlementgeneration = $automaticsettlementgeneration;

        return $this;
    }

    /**
     * Get automaticsettlementgeneration.
     *
     * @return bool
     */
    public function getAutomaticsettlementgeneration()
    {
        return $this->automaticsettlementgeneration;
    }

    /**
     * Set remainingdepositamount.
     *
     * @param string $remainingdepositamount
     *
     * @return Saledocument
     */
    public function setRemainingdepositamount($remainingdepositamount)
    {
        $this->remainingdepositamount = $remainingdepositamount;

        return $this;
    }

    /**
     * Get remainingdepositamount.
     *
     * @return string
     */
    public function getRemainingdepositamount()
    {
        return $this->remainingdepositamount;
    }

    /**
     * Set remainingdepositcurrencyamount.
     *
     * @param string $remainingdepositcurrencyamount
     *
     * @return Saledocument
     */
    public function setRemainingdepositcurrencyamount($remainingdepositcurrencyamount)
    {
        $this->remainingdepositcurrencyamount = $remainingdepositcurrencyamount;

        return $this;
    }

    /**
     * Get remainingdepositcurrencyamount.
     *
     * @return string
     */
    public function getRemainingdepositcurrencyamount()
    {
        return $this->remainingdepositcurrencyamount;
    }

    /**
     * Set remainingamounttodeliver.
     *
     * @param string $remainingamounttodeliver
     *
     * @return Saledocument
     */
    public function setRemainingamounttodeliver($remainingamounttodeliver)
    {
        $this->remainingamounttodeliver = $remainingamounttodeliver;

        return $this;
    }

    /**
     * Get remainingamounttodeliver.
     *
     * @return string
     */
    public function getRemainingamounttodeliver()
    {
        return $this->remainingamounttodeliver;
    }

    /**
     * Set revision.
     *
     * @param string $revision
     *
     * @return Saledocument
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision.
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set documenttype.
     *
     * @param int $documenttype
     *
     * @return Saledocument
     */
    public function setDocumenttype($documenttype)
    {
        $this->documenttype = $documenttype;

        return $this;
    }

    /**
     * Get documenttype.
     *
     * @return int
     */
    public function getDocumenttype()
    {
        return $this->documenttype;
    }

    /**
     * Set customerid.
     *
     * @param string $customerid
     *
     * @return Saledocument
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid.
     *
     * @return string
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set customername.
     *
     * @param string $customername
     *
     * @return Saledocument
     */
    public function setCustomername($customername)
    {
        $this->customername = $customername;

        return $this;
    }

    /**
     * Get customername.
     *
     * @return string
     */
    public function getCustomername()
    {
        return $this->customername;
    }

    /**
     * Set humanservicetotalamount.
     *
     * @param string $humanservicetotalamount
     *
     * @return Saledocument
     */
    public function setHumanservicetotalamount($humanservicetotalamount)
    {
        $this->humanservicetotalamount = $humanservicetotalamount;

        return $this;
    }

    /**
     * Get humanservicetotalamount.
     *
     * @return string
     */
    public function getHumanservicetotalamount()
    {
        return $this->humanservicetotalamount;
    }

    /**
     * Set humanserviceamountsettledbyother.
     *
     * @param string $humanserviceamountsettledbyother
     *
     * @return Saledocument
     */
    public function setHumanserviceamountsettledbyother($humanserviceamountsettledbyother)
    {
        $this->humanserviceamountsettledbyother = $humanserviceamountsettledbyother;

        return $this;
    }

    /**
     * Get humanserviceamountsettledbyother.
     *
     * @return string
     */
    public function getHumanserviceamountsettledbyother()
    {
        return $this->humanserviceamountsettledbyother;
    }

    /**
     * Set humanserviceamountsettledbycesu.
     *
     * @param string $humanserviceamountsettledbycesu
     *
     * @return Saledocument
     */
    public function setHumanserviceamountsettledbycesu($humanserviceamountsettledbycesu)
    {
        $this->humanserviceamountsettledbycesu = $humanserviceamountsettledbycesu;

        return $this;
    }

    /**
     * Get humanserviceamountsettledbycesu.
     *
     * @return string
     */
    public function getHumanserviceamountsettledbycesu()
    {
        return $this->humanserviceamountsettledbycesu;
    }

    /**
     * Set humanserviceamountsettledbycesup.
     *
     * @param string $humanserviceamountsettledbycesup
     *
     * @return Saledocument
     */
    public function setHumanserviceamountsettledbycesup($humanserviceamountsettledbycesup)
    {
        $this->humanserviceamountsettledbycesup = $humanserviceamountsettledbycesup;

        return $this;
    }

    /**
     * Get humanserviceamountsettledbycesup.
     *
     * @return string
     */
    public function getHumanserviceamountsettledbycesup()
    {
        return $this->humanserviceamountsettledbycesup;
    }

    /**
     * Set humanservicedeductibleamount.
     *
     * @param string $humanservicedeductibleamount
     *
     * @return Saledocument
     */
    public function setHumanservicedeductibleamount($humanservicedeductibleamount)
    {
        $this->humanservicedeductibleamount = $humanservicedeductibleamount;

        return $this;
    }

    /**
     * Get humanservicedeductibleamount.
     *
     * @return string
     */
    public function getHumanservicedeductibleamount()
    {
        return $this->humanservicedeductibleamount;
    }

    /**
     * Set grossinterestbase.
     *
     * @param string $grossinterestbase
     *
     * @return Saledocument
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
     * Set grossinterestrate.
     *
     * @param string $grossinterestrate
     *
     * @return Saledocument
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
     * Set grossinterestamount.
     *
     * @param string $grossinterestamount
     *
     * @return Saledocument
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
     * Set interestamountvatexcluded.
     *
     * @param string $interestamountvatexcluded
     *
     * @return Saledocument
     */
    public function setInterestamountvatexcluded($interestamountvatexcluded)
    {
        $this->interestamountvatexcluded = $interestamountvatexcluded;

        return $this;
    }

    /**
     * Get interestamountvatexcluded.
     *
     * @return string
     */
    public function getInterestamountvatexcluded()
    {
        return $this->interestamountvatexcluded;
    }

    /**
     * Set interestrate.
     *
     * @param string $interestrate
     *
     * @return Saledocument
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
     * Set xxAchatsfaits.
     *
     * @param bool $xxAchatsfaits
     *
     * @return Saledocument
     */
    public function setXxAchatsfaits($xxAchatsfaits)
    {
        $this->xxAchatsfaits = $xxAchatsfaits;

        return $this;
    }

    /**
     * Get xxAchatsfaits.
     *
     * @return bool
     */
    public function getXxAchatsfaits()
    {
        return $this->xxAchatsfaits;
    }

    /**
     * Set xxAchatsrecus.
     *
     * @param bool $xxAchatsrecus
     *
     * @return Saledocument
     */
    public function setXxAchatsrecus($xxAchatsrecus)
    {
        $this->xxAchatsrecus = $xxAchatsrecus;

        return $this;
    }

    /**
     * Get xxAchatsrecus.
     *
     * @return bool
     */
    public function getXxAchatsrecus()
    {
        return $this->xxAchatsrecus;
    }

    /**
     * Set detailvatamount0Currencyvatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount0Currencyvatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyvatamountoncollectionwithoutdeposit($detailvatamount0Currencyvatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount0Currencyvatamountoncollectionwithoutdeposit = $detailvatamount0Currencyvatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyvatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount0Currencyvatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount0Currencyvatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount0Currencyvatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount0Currencyvatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyvatamountondebitwithoutdeposit($detailvatamount0Currencyvatamountondebitwithoutdeposit)
    {
        $this->detailvatamount0Currencyvatamountondebitwithoutdeposit = $detailvatamount0Currencyvatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyvatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount0Currencyvatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount0Currencyvatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount0Currencytaxamount.
     *
     * @param string $detailvatamount0Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencytaxamount($detailvatamount0Currencytaxamount)
    {
        $this->detailvatamount0Currencytaxamount = $detailvatamount0Currencytaxamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencytaxamount.
     *
     * @return string
     */
    public function getDetailvatamount0Currencytaxamount()
    {
        return $this->detailvatamount0Currencytaxamount;
    }

    /**
     * Set detailvatamount0Currencytaxvatamount.
     *
     * @param string $detailvatamount0Currencytaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencytaxvatamount($detailvatamount0Currencytaxvatamount)
    {
        $this->detailvatamount0Currencytaxvatamount = $detailvatamount0Currencytaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencytaxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount0Currencytaxvatamount()
    {
        return $this->detailvatamount0Currencytaxvatamount;
    }

    /**
     * Set detailvatamount0Currencyreamount.
     *
     * @param string $detailvatamount0Currencyreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyreamount($detailvatamount0Currencyreamount)
    {
        $this->detailvatamount0Currencyreamount = $detailvatamount0Currencyreamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyreamount.
     *
     * @return string
     */
    public function getDetailvatamount0Currencyreamount()
    {
        return $this->detailvatamount0Currencyreamount;
    }

    /**
     * Set detailvatamount1Currencyvatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount1Currencyvatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyvatamountoncollectionwithoutdeposit($detailvatamount1Currencyvatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount1Currencyvatamountoncollectionwithoutdeposit = $detailvatamount1Currencyvatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyvatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount1Currencyvatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount1Currencyvatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount1Currencyvatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount1Currencyvatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyvatamountondebitwithoutdeposit($detailvatamount1Currencyvatamountondebitwithoutdeposit)
    {
        $this->detailvatamount1Currencyvatamountondebitwithoutdeposit = $detailvatamount1Currencyvatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyvatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount1Currencyvatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount1Currencyvatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount1Currencytaxamount.
     *
     * @param string $detailvatamount1Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencytaxamount($detailvatamount1Currencytaxamount)
    {
        $this->detailvatamount1Currencytaxamount = $detailvatamount1Currencytaxamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencytaxamount.
     *
     * @return string
     */
    public function getDetailvatamount1Currencytaxamount()
    {
        return $this->detailvatamount1Currencytaxamount;
    }

    /**
     * Set detailvatamount1Currencytaxvatamount.
     *
     * @param string $detailvatamount1Currencytaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencytaxvatamount($detailvatamount1Currencytaxvatamount)
    {
        $this->detailvatamount1Currencytaxvatamount = $detailvatamount1Currencytaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencytaxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount1Currencytaxvatamount()
    {
        return $this->detailvatamount1Currencytaxvatamount;
    }

    /**
     * Set detailvatamount1Currencyreamount.
     *
     * @param string $detailvatamount1Currencyreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyreamount($detailvatamount1Currencyreamount)
    {
        $this->detailvatamount1Currencyreamount = $detailvatamount1Currencyreamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyreamount.
     *
     * @return string
     */
    public function getDetailvatamount1Currencyreamount()
    {
        return $this->detailvatamount1Currencyreamount;
    }

    /**
     * Set detailvatamount2Currencyvatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount2Currencyvatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyvatamountoncollectionwithoutdeposit($detailvatamount2Currencyvatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount2Currencyvatamountoncollectionwithoutdeposit = $detailvatamount2Currencyvatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyvatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount2Currencyvatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount2Currencyvatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount2Currencyvatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount2Currencyvatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyvatamountondebitwithoutdeposit($detailvatamount2Currencyvatamountondebitwithoutdeposit)
    {
        $this->detailvatamount2Currencyvatamountondebitwithoutdeposit = $detailvatamount2Currencyvatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyvatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount2Currencyvatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount2Currencyvatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount2Currencytaxamount.
     *
     * @param string $detailvatamount2Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencytaxamount($detailvatamount2Currencytaxamount)
    {
        $this->detailvatamount2Currencytaxamount = $detailvatamount2Currencytaxamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencytaxamount.
     *
     * @return string
     */
    public function getDetailvatamount2Currencytaxamount()
    {
        return $this->detailvatamount2Currencytaxamount;
    }

    /**
     * Set detailvatamount2Currencytaxvatamount.
     *
     * @param string $detailvatamount2Currencytaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencytaxvatamount($detailvatamount2Currencytaxvatamount)
    {
        $this->detailvatamount2Currencytaxvatamount = $detailvatamount2Currencytaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencytaxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount2Currencytaxvatamount()
    {
        return $this->detailvatamount2Currencytaxvatamount;
    }

    /**
     * Set detailvatamount2Currencyreamount.
     *
     * @param string $detailvatamount2Currencyreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyreamount($detailvatamount2Currencyreamount)
    {
        $this->detailvatamount2Currencyreamount = $detailvatamount2Currencyreamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyreamount.
     *
     * @return string
     */
    public function getDetailvatamount2Currencyreamount()
    {
        return $this->detailvatamount2Currencyreamount;
    }

    /**
     * Set detailvatamount3Currencyvatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount3Currencyvatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyvatamountoncollectionwithoutdeposit($detailvatamount3Currencyvatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount3Currencyvatamountoncollectionwithoutdeposit = $detailvatamount3Currencyvatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyvatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount3Currencyvatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount3Currencyvatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount3Currencyvatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount3Currencyvatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyvatamountondebitwithoutdeposit($detailvatamount3Currencyvatamountondebitwithoutdeposit)
    {
        $this->detailvatamount3Currencyvatamountondebitwithoutdeposit = $detailvatamount3Currencyvatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyvatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount3Currencyvatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount3Currencyvatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount3Currencytaxamount.
     *
     * @param string $detailvatamount3Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencytaxamount($detailvatamount3Currencytaxamount)
    {
        $this->detailvatamount3Currencytaxamount = $detailvatamount3Currencytaxamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencytaxamount.
     *
     * @return string
     */
    public function getDetailvatamount3Currencytaxamount()
    {
        return $this->detailvatamount3Currencytaxamount;
    }

    /**
     * Set detailvatamount3Currencytaxvatamount.
     *
     * @param string $detailvatamount3Currencytaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencytaxvatamount($detailvatamount3Currencytaxvatamount)
    {
        $this->detailvatamount3Currencytaxvatamount = $detailvatamount3Currencytaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencytaxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount3Currencytaxvatamount()
    {
        return $this->detailvatamount3Currencytaxvatamount;
    }

    /**
     * Set detailvatamount3Currencyreamount.
     *
     * @param string $detailvatamount3Currencyreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyreamount($detailvatamount3Currencyreamount)
    {
        $this->detailvatamount3Currencyreamount = $detailvatamount3Currencyreamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyreamount.
     *
     * @return string
     */
    public function getDetailvatamount3Currencyreamount()
    {
        return $this->detailvatamount3Currencyreamount;
    }

    /**
     * Set detailvatamount4Currencyvatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount4Currencyvatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyvatamountoncollectionwithoutdeposit($detailvatamount4Currencyvatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount4Currencyvatamountoncollectionwithoutdeposit = $detailvatamount4Currencyvatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyvatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount4Currencyvatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount4Currencyvatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount4Currencyvatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount4Currencyvatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyvatamountondebitwithoutdeposit($detailvatamount4Currencyvatamountondebitwithoutdeposit)
    {
        $this->detailvatamount4Currencyvatamountondebitwithoutdeposit = $detailvatamount4Currencyvatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyvatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount4Currencyvatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount4Currencyvatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount4Currencytaxamount.
     *
     * @param string $detailvatamount4Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencytaxamount($detailvatamount4Currencytaxamount)
    {
        $this->detailvatamount4Currencytaxamount = $detailvatamount4Currencytaxamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencytaxamount.
     *
     * @return string
     */
    public function getDetailvatamount4Currencytaxamount()
    {
        return $this->detailvatamount4Currencytaxamount;
    }

    /**
     * Set detailvatamount4Currencytaxvatamount.
     *
     * @param string $detailvatamount4Currencytaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencytaxvatamount($detailvatamount4Currencytaxvatamount)
    {
        $this->detailvatamount4Currencytaxvatamount = $detailvatamount4Currencytaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencytaxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount4Currencytaxvatamount()
    {
        return $this->detailvatamount4Currencytaxvatamount;
    }

    /**
     * Set detailvatamount4Currencyreamount.
     *
     * @param string $detailvatamount4Currencyreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyreamount($detailvatamount4Currencyreamount)
    {
        $this->detailvatamount4Currencyreamount = $detailvatamount4Currencyreamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyreamount.
     *
     * @return string
     */
    public function getDetailvatamount4Currencyreamount()
    {
        return $this->detailvatamount4Currencyreamount;
    }

    /**
     * Set othertaxamountnotsubjecttovat.
     *
     * @param string $othertaxamountnotsubjecttovat
     *
     * @return Saledocument
     */
    public function setOthertaxamountnotsubjecttovat($othertaxamountnotsubjecttovat)
    {
        $this->othertaxamountnotsubjecttovat = $othertaxamountnotsubjecttovat;

        return $this;
    }

    /**
     * Get othertaxamountnotsubjecttovat.
     *
     * @return string
     */
    public function getOthertaxamountnotsubjecttovat()
    {
        return $this->othertaxamountnotsubjecttovat;
    }

    /**
     * Set currencyothertaxamount.
     *
     * @param string $currencyothertaxamount
     *
     * @return Saledocument
     */
    public function setCurrencyothertaxamount($currencyothertaxamount)
    {
        $this->currencyothertaxamount = $currencyothertaxamount;

        return $this;
    }

    /**
     * Get currencyothertaxamount.
     *
     * @return string
     */
    public function getCurrencyothertaxamount()
    {
        return $this->currencyothertaxamount;
    }

    /**
     * Set currencyothertaxamountnotsubjecttovat.
     *
     * @param string $currencyothertaxamountnotsubjecttovat
     *
     * @return Saledocument
     */
    public function setCurrencyothertaxamountnotsubjecttovat($currencyothertaxamountnotsubjecttovat)
    {
        $this->currencyothertaxamountnotsubjecttovat = $currencyothertaxamountnotsubjecttovat;

        return $this;
    }

    /**
     * Get currencyothertaxamountnotsubjecttovat.
     *
     * @return string
     */
    public function getCurrencyothertaxamountnotsubjecttovat()
    {
        return $this->currencyothertaxamountnotsubjecttovat;
    }

    /**
     * Set detailtaxamount0Currencybaseamount.
     *
     * @param string $detailtaxamount0Currencybaseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Currencybaseamount($detailtaxamount0Currencybaseamount)
    {
        $this->detailtaxamount0Currencybaseamount = $detailtaxamount0Currencybaseamount;

        return $this;
    }

    /**
     * Get detailtaxamount0Currencybaseamount.
     *
     * @return string
     */
    public function getDetailtaxamount0Currencybaseamount()
    {
        return $this->detailtaxamount0Currencybaseamount;
    }

    /**
     * Set detailtaxamount0Currencytaxamount.
     *
     * @param string $detailtaxamount0Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Currencytaxamount($detailtaxamount0Currencytaxamount)
    {
        $this->detailtaxamount0Currencytaxamount = $detailtaxamount0Currencytaxamount;

        return $this;
    }

    /**
     * Get detailtaxamount0Currencytaxamount.
     *
     * @return string
     */
    public function getDetailtaxamount0Currencytaxamount()
    {
        return $this->detailtaxamount0Currencytaxamount;
    }

    /**
     * Set detailtaxamount1Currencybaseamount.
     *
     * @param string $detailtaxamount1Currencybaseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Currencybaseamount($detailtaxamount1Currencybaseamount)
    {
        $this->detailtaxamount1Currencybaseamount = $detailtaxamount1Currencybaseamount;

        return $this;
    }

    /**
     * Get detailtaxamount1Currencybaseamount.
     *
     * @return string
     */
    public function getDetailtaxamount1Currencybaseamount()
    {
        return $this->detailtaxamount1Currencybaseamount;
    }

    /**
     * Set detailtaxamount1Currencytaxamount.
     *
     * @param string $detailtaxamount1Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Currencytaxamount($detailtaxamount1Currencytaxamount)
    {
        $this->detailtaxamount1Currencytaxamount = $detailtaxamount1Currencytaxamount;

        return $this;
    }

    /**
     * Get detailtaxamount1Currencytaxamount.
     *
     * @return string
     */
    public function getDetailtaxamount1Currencytaxamount()
    {
        return $this->detailtaxamount1Currencytaxamount;
    }

    /**
     * Set detailtaxamount2Currencybaseamount.
     *
     * @param string $detailtaxamount2Currencybaseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Currencybaseamount($detailtaxamount2Currencybaseamount)
    {
        $this->detailtaxamount2Currencybaseamount = $detailtaxamount2Currencybaseamount;

        return $this;
    }

    /**
     * Get detailtaxamount2Currencybaseamount.
     *
     * @return string
     */
    public function getDetailtaxamount2Currencybaseamount()
    {
        return $this->detailtaxamount2Currencybaseamount;
    }

    /**
     * Set detailtaxamount2Currencytaxamount.
     *
     * @param string $detailtaxamount2Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Currencytaxamount($detailtaxamount2Currencytaxamount)
    {
        $this->detailtaxamount2Currencytaxamount = $detailtaxamount2Currencytaxamount;

        return $this;
    }

    /**
     * Get detailtaxamount2Currencytaxamount.
     *
     * @return string
     */
    public function getDetailtaxamount2Currencytaxamount()
    {
        return $this->detailtaxamount2Currencytaxamount;
    }

    /**
     * Set detailtaxamount3Currencybaseamount.
     *
     * @param string $detailtaxamount3Currencybaseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Currencybaseamount($detailtaxamount3Currencybaseamount)
    {
        $this->detailtaxamount3Currencybaseamount = $detailtaxamount3Currencybaseamount;

        return $this;
    }

    /**
     * Get detailtaxamount3Currencybaseamount.
     *
     * @return string
     */
    public function getDetailtaxamount3Currencybaseamount()
    {
        return $this->detailtaxamount3Currencybaseamount;
    }

    /**
     * Set detailtaxamount3Currencytaxamount.
     *
     * @param string $detailtaxamount3Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Currencytaxamount($detailtaxamount3Currencytaxamount)
    {
        $this->detailtaxamount3Currencytaxamount = $detailtaxamount3Currencytaxamount;

        return $this;
    }

    /**
     * Get detailtaxamount3Currencytaxamount.
     *
     * @return string
     */
    public function getDetailtaxamount3Currencytaxamount()
    {
        return $this->detailtaxamount3Currencytaxamount;
    }

    /**
     * Set detailtaxamount4Currencybaseamount.
     *
     * @param string $detailtaxamount4Currencybaseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Currencybaseamount($detailtaxamount4Currencybaseamount)
    {
        $this->detailtaxamount4Currencybaseamount = $detailtaxamount4Currencybaseamount;

        return $this;
    }

    /**
     * Get detailtaxamount4Currencybaseamount.
     *
     * @return string
     */
    public function getDetailtaxamount4Currencybaseamount()
    {
        return $this->detailtaxamount4Currencybaseamount;
    }

    /**
     * Set detailtaxamount4Currencytaxamount.
     *
     * @param string $detailtaxamount4Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Currencytaxamount($detailtaxamount4Currencytaxamount)
    {
        $this->detailtaxamount4Currencytaxamount = $detailtaxamount4Currencytaxamount;

        return $this;
    }

    /**
     * Get detailtaxamount4Currencytaxamount.
     *
     * @return string
     */
    public function getDetailtaxamount4Currencytaxamount()
    {
        return $this->detailtaxamount4Currencytaxamount;
    }

    /**
     * Set detailtaxamount5Currencybaseamount.
     *
     * @param string $detailtaxamount5Currencybaseamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Currencybaseamount($detailtaxamount5Currencybaseamount)
    {
        $this->detailtaxamount5Currencybaseamount = $detailtaxamount5Currencybaseamount;

        return $this;
    }

    /**
     * Get detailtaxamount5Currencybaseamount.
     *
     * @return string
     */
    public function getDetailtaxamount5Currencybaseamount()
    {
        return $this->detailtaxamount5Currencybaseamount;
    }

    /**
     * Set detailtaxamount5Currencytaxamount.
     *
     * @param string $detailtaxamount5Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Currencytaxamount($detailtaxamount5Currencytaxamount)
    {
        $this->detailtaxamount5Currencytaxamount = $detailtaxamount5Currencytaxamount;

        return $this;
    }

    /**
     * Get detailtaxamount5Currencytaxamount.
     *
     * @return string
     */
    public function getDetailtaxamount5Currencytaxamount()
    {
        return $this->detailtaxamount5Currencytaxamount;
    }

    /**
     * Set shippingnotsubjecttofinancialdiscount.
     *
     * @param bool $shippingnotsubjecttofinancialdiscount
     *
     * @return Saledocument
     */
    public function setShippingnotsubjecttofinancialdiscount($shippingnotsubjecttofinancialdiscount)
    {
        $this->shippingnotsubjecttofinancialdiscount = $shippingnotsubjecttofinancialdiscount;

        return $this;
    }

    /**
     * Get shippingnotsubjecttofinancialdiscount.
     *
     * @return bool
     */
    public function getShippingnotsubjecttofinancialdiscount()
    {
        return $this->shippingnotsubjecttofinancialdiscount;
    }

    /**
     * Set detailvatamount5Currencyvatamountoncollectionwithoutdeposit.
     *
     * @param string $detailvatamount5Currencyvatamountoncollectionwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyvatamountoncollectionwithoutdeposit($detailvatamount5Currencyvatamountoncollectionwithoutdeposit)
    {
        $this->detailvatamount5Currencyvatamountoncollectionwithoutdeposit = $detailvatamount5Currencyvatamountoncollectionwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyvatamountoncollectionwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount5Currencyvatamountoncollectionwithoutdeposit()
    {
        return $this->detailvatamount5Currencyvatamountoncollectionwithoutdeposit;
    }

    /**
     * Set detailvatamount5Currencyvatamountondebitwithoutdeposit.
     *
     * @param string $detailvatamount5Currencyvatamountondebitwithoutdeposit
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyvatamountondebitwithoutdeposit($detailvatamount5Currencyvatamountondebitwithoutdeposit)
    {
        $this->detailvatamount5Currencyvatamountondebitwithoutdeposit = $detailvatamount5Currencyvatamountondebitwithoutdeposit;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyvatamountondebitwithoutdeposit.
     *
     * @return string
     */
    public function getDetailvatamount5Currencyvatamountondebitwithoutdeposit()
    {
        return $this->detailvatamount5Currencyvatamountondebitwithoutdeposit;
    }

    /**
     * Set detailvatamount5Currencytaxamount.
     *
     * @param string $detailvatamount5Currencytaxamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencytaxamount($detailvatamount5Currencytaxamount)
    {
        $this->detailvatamount5Currencytaxamount = $detailvatamount5Currencytaxamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencytaxamount.
     *
     * @return string
     */
    public function getDetailvatamount5Currencytaxamount()
    {
        return $this->detailvatamount5Currencytaxamount;
    }

    /**
     * Set detailvatamount5Currencytaxvatamount.
     *
     * @param string $detailvatamount5Currencytaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencytaxvatamount($detailvatamount5Currencytaxvatamount)
    {
        $this->detailvatamount5Currencytaxvatamount = $detailvatamount5Currencytaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencytaxvatamount.
     *
     * @return string
     */
    public function getDetailvatamount5Currencytaxvatamount()
    {
        return $this->detailvatamount5Currencytaxvatamount;
    }

    /**
     * Set detailvatamount5Currencyreamount.
     *
     * @param string $detailvatamount5Currencyreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyreamount($detailvatamount5Currencyreamount)
    {
        $this->detailvatamount5Currencyreamount = $detailvatamount5Currencyreamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyreamount.
     *
     * @return string
     */
    public function getDetailvatamount5Currencyreamount()
    {
        return $this->detailvatamount5Currencyreamount;
    }

    /**
     * Set remainingamounttodelivervatexcluded.
     *
     * @param string $remainingamounttodelivervatexcluded
     *
     * @return Saledocument
     */
    public function setRemainingamounttodelivervatexcluded($remainingamounttodelivervatexcluded)
    {
        $this->remainingamounttodelivervatexcluded = $remainingamounttodelivervatexcluded;

        return $this;
    }

    /**
     * Get remainingamounttodelivervatexcluded.
     *
     * @return string
     */
    public function getRemainingamounttodelivervatexcluded()
    {
        return $this->remainingamounttodelivervatexcluded;
    }

    /**
     * Set paymentthirdid.
     *
     * @param string|null $paymentthirdid
     *
     * @return Saledocument
     */
    public function setPaymentthirdid($paymentthirdid = null)
    {
        $this->paymentthirdid = $paymentthirdid;

        return $this;
    }

    /**
     * Get paymentthirdid.
     *
     * @return string|null
     */
    public function getPaymentthirdid()
    {
        return $this->paymentthirdid;
    }

    /**
     * Set invoicingthirdid.
     *
     * @param string|null $invoicingthirdid
     *
     * @return Saledocument
     */
    public function setInvoicingthirdid($invoicingthirdid = null)
    {
        $this->invoicingthirdid = $invoicingthirdid;

        return $this;
    }

    /**
     * Get invoicingthirdid.
     *
     * @return string|null
     */
    public function getInvoicingthirdid()
    {
        return $this->invoicingthirdid;
    }

    /**
     * Set taxids0.
     *
     * @param string|null $taxids0
     *
     * @return Saledocument
     */
    public function setTaxids0($taxids0 = null)
    {
        $this->taxids0 = $taxids0;

        return $this;
    }

    /**
     * Get taxids0.
     *
     * @return string|null
     */
    public function getTaxids0()
    {
        return $this->taxids0;
    }

    /**
     * Set taxids1.
     *
     * @param string|null $taxids1
     *
     * @return Saledocument
     */
    public function setTaxids1($taxids1 = null)
    {
        $this->taxids1 = $taxids1;

        return $this;
    }

    /**
     * Get taxids1.
     *
     * @return string|null
     */
    public function getTaxids1()
    {
        return $this->taxids1;
    }

    /**
     * Set taxids2.
     *
     * @param string|null $taxids2
     *
     * @return Saledocument
     */
    public function setTaxids2($taxids2 = null)
    {
        $this->taxids2 = $taxids2;

        return $this;
    }

    /**
     * Get taxids2.
     *
     * @return string|null
     */
    public function getTaxids2()
    {
        return $this->taxids2;
    }

    /**
     * Set detailvatamount5Currencydetaildepositreamount.
     *
     * @param string|null $detailvatamount5Currencydetaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetaildepositreamount($detailvatamount5Currencydetaildepositreamount = null)
    {
        $this->detailvatamount5Currencydetaildepositreamount = $detailvatamount5Currencydetaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetaildepositreamount()
    {
        return $this->detailvatamount5Currencydetaildepositreamount;
    }

    /**
     * Set detailvatamount5Currencydetailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount5Currencydetailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetailreamountwithoutdepositamount($detailvatamount5Currencydetailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount5Currencydetailreamountwithoutdepositamount = $detailvatamount5Currencydetailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetailreamountwithoutdepositamount()
    {
        return $this->detailvatamount5Currencydetailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount0Currencydetailamountvatexcluded.
     *
     * @param string|null $detailvatamount0Currencydetailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetailamountvatexcluded($detailvatamount0Currencydetailamountvatexcluded = null)
    {
        $this->detailvatamount0Currencydetailamountvatexcluded = $detailvatamount0Currencydetailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetailamountvatexcluded()
    {
        return $this->detailvatamount0Currencydetailamountvatexcluded;
    }

    /**
     * Set detailvatamount0Currencydetailvatamount.
     *
     * @param string|null $detailvatamount0Currencydetailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetailvatamount($detailvatamount0Currencydetailvatamount = null)
    {
        $this->detailvatamount0Currencydetailvatamount = $detailvatamount0Currencydetailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetailvatamount()
    {
        return $this->detailvatamount0Currencydetailvatamount;
    }

    /**
     * Set detailvatamount0Currencydetailamountvatincluded.
     *
     * @param string|null $detailvatamount0Currencydetailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetailamountvatincluded($detailvatamount0Currencydetailamountvatincluded = null)
    {
        $this->detailvatamount0Currencydetailamountvatincluded = $detailvatamount0Currencydetailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetailamountvatincluded()
    {
        return $this->detailvatamount0Currencydetailamountvatincluded;
    }

    /**
     * Set detailvatamount0Currencydetaildepositvatamount.
     *
     * @param string|null $detailvatamount0Currencydetaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetaildepositvatamount($detailvatamount0Currencydetaildepositvatamount = null)
    {
        $this->detailvatamount0Currencydetaildepositvatamount = $detailvatamount0Currencydetaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetaildepositvatamount()
    {
        return $this->detailvatamount0Currencydetaildepositvatamount;
    }

    /**
     * Set detailvatamount0Currencydetailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount0Currencydetailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetailvatamountwithoutdepositamount($detailvatamount0Currencydetailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount0Currencydetailvatamountwithoutdepositamount = $detailvatamount0Currencydetailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount0Currencydetailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount0Currencyecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount0Currencyecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyecotaxamountvatexcluded($detailvatamount0Currencyecotaxamountvatexcluded = null)
    {
        $this->detailvatamount0Currencyecotaxamountvatexcluded = $detailvatamount0Currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencyecotaxamountvatexcluded()
    {
        return $this->detailvatamount0Currencyecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount0Currencyecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount0Currencyecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyecotaxamountvatincluded($detailvatamount0Currencyecotaxamountvatincluded = null)
    {
        $this->detailvatamount0Currencyecotaxamountvatincluded = $detailvatamount0Currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencyecotaxamountvatincluded()
    {
        return $this->detailvatamount0Currencyecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount0Currencyecotaxvatamount.
     *
     * @param string|null $detailvatamount0Currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyecotaxvatamount($detailvatamount0Currencyecotaxvatamount = null)
    {
        $this->detailvatamount0Currencyecotaxvatamount = $detailvatamount0Currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencyecotaxvatamount()
    {
        return $this->detailvatamount0Currencyecotaxvatamount;
    }

    /**
     * Set detailvatamount0Currencyvatamountondebit.
     *
     * @param string|null $detailvatamount0Currencyvatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyvatamountondebit($detailvatamount0Currencyvatamountondebit = null)
    {
        $this->detailvatamount0Currencyvatamountondebit = $detailvatamount0Currencyvatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyvatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencyvatamountondebit()
    {
        return $this->detailvatamount0Currencyvatamountondebit;
    }

    /**
     * Set detailvatamount0Currencyvatamountoncollection.
     *
     * @param string|null $detailvatamount0Currencyvatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencyvatamountoncollection($detailvatamount0Currencyvatamountoncollection = null)
    {
        $this->detailvatamount0Currencyvatamountoncollection = $detailvatamount0Currencyvatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount0Currencyvatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencyvatamountoncollection()
    {
        return $this->detailvatamount0Currencyvatamountoncollection;
    }

    /**
     * Set intrastatincoterm.
     *
     * @param string|null $intrastatincoterm
     *
     * @return Saledocument
     */
    public function setIntrastatincoterm($intrastatincoterm = null)
    {
        $this->intrastatincoterm = $intrastatincoterm;

        return $this;
    }

    /**
     * Get intrastatincoterm.
     *
     * @return string|null
     */
    public function getIntrastatincoterm()
    {
        return $this->intrastatincoterm;
    }

    /**
     * Set detailvatamount4Currencydetaildepositreamount.
     *
     * @param string|null $detailvatamount4Currencydetaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetaildepositreamount($detailvatamount4Currencydetaildepositreamount = null)
    {
        $this->detailvatamount4Currencydetaildepositreamount = $detailvatamount4Currencydetaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetaildepositreamount()
    {
        return $this->detailvatamount4Currencydetaildepositreamount;
    }

    /**
     * Set detailvatamount4Currencydetailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount4Currencydetailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetailreamountwithoutdepositamount($detailvatamount4Currencydetailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount4Currencydetailreamountwithoutdepositamount = $detailvatamount4Currencydetailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetailreamountwithoutdepositamount()
    {
        return $this->detailvatamount4Currencydetailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount5Currencydetailamountvatexcluded.
     *
     * @param string|null $detailvatamount5Currencydetailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetailamountvatexcluded($detailvatamount5Currencydetailamountvatexcluded = null)
    {
        $this->detailvatamount5Currencydetailamountvatexcluded = $detailvatamount5Currencydetailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetailamountvatexcluded()
    {
        return $this->detailvatamount5Currencydetailamountvatexcluded;
    }

    /**
     * Set detailvatamount5Currencydetailvatamount.
     *
     * @param string|null $detailvatamount5Currencydetailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetailvatamount($detailvatamount5Currencydetailvatamount = null)
    {
        $this->detailvatamount5Currencydetailvatamount = $detailvatamount5Currencydetailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetailvatamount()
    {
        return $this->detailvatamount5Currencydetailvatamount;
    }

    /**
     * Set detailvatamount5Currencydetailamountvatincluded.
     *
     * @param string|null $detailvatamount5Currencydetailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetailamountvatincluded($detailvatamount5Currencydetailamountvatincluded = null)
    {
        $this->detailvatamount5Currencydetailamountvatincluded = $detailvatamount5Currencydetailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetailamountvatincluded()
    {
        return $this->detailvatamount5Currencydetailamountvatincluded;
    }

    /**
     * Set detailvatamount5Currencydetaildepositvatamount.
     *
     * @param string|null $detailvatamount5Currencydetaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetaildepositvatamount($detailvatamount5Currencydetaildepositvatamount = null)
    {
        $this->detailvatamount5Currencydetaildepositvatamount = $detailvatamount5Currencydetaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetaildepositvatamount()
    {
        return $this->detailvatamount5Currencydetaildepositvatamount;
    }

    /**
     * Set detailvatamount5Currencydetailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount5Currencydetailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencydetailvatamountwithoutdepositamount($detailvatamount5Currencydetailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount5Currencydetailvatamountwithoutdepositamount = $detailvatamount5Currencydetailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencydetailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencydetailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount5Currencydetailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount5Currencyecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount5Currencyecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyecotaxamountvatexcluded($detailvatamount5Currencyecotaxamountvatexcluded = null)
    {
        $this->detailvatamount5Currencyecotaxamountvatexcluded = $detailvatamount5Currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencyecotaxamountvatexcluded()
    {
        return $this->detailvatamount5Currencyecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount5Currencyecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount5Currencyecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyecotaxamountvatincluded($detailvatamount5Currencyecotaxamountvatincluded = null)
    {
        $this->detailvatamount5Currencyecotaxamountvatincluded = $detailvatamount5Currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencyecotaxamountvatincluded()
    {
        return $this->detailvatamount5Currencyecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount5Currencyecotaxvatamount.
     *
     * @param string|null $detailvatamount5Currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyecotaxvatamount($detailvatamount5Currencyecotaxvatamount = null)
    {
        $this->detailvatamount5Currencyecotaxvatamount = $detailvatamount5Currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencyecotaxvatamount()
    {
        return $this->detailvatamount5Currencyecotaxvatamount;
    }

    /**
     * Set detailvatamount5Currencyvatamountondebit.
     *
     * @param string|null $detailvatamount5Currencyvatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyvatamountondebit($detailvatamount5Currencyvatamountondebit = null)
    {
        $this->detailvatamount5Currencyvatamountondebit = $detailvatamount5Currencyvatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyvatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencyvatamountondebit()
    {
        return $this->detailvatamount5Currencyvatamountondebit;
    }

    /**
     * Set detailvatamount5Currencyvatamountoncollection.
     *
     * @param string|null $detailvatamount5Currencyvatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Currencyvatamountoncollection($detailvatamount5Currencyvatamountoncollection = null)
    {
        $this->detailvatamount5Currencyvatamountoncollection = $detailvatamount5Currencyvatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount5Currencyvatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount5Currencyvatamountoncollection()
    {
        return $this->detailvatamount5Currencyvatamountoncollection;
    }

    /**
     * Set detailvatamount3Currencydetaildepositreamount.
     *
     * @param string|null $detailvatamount3Currencydetaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetaildepositreamount($detailvatamount3Currencydetaildepositreamount = null)
    {
        $this->detailvatamount3Currencydetaildepositreamount = $detailvatamount3Currencydetaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetaildepositreamount()
    {
        return $this->detailvatamount3Currencydetaildepositreamount;
    }

    /**
     * Set detailvatamount3Currencydetailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount3Currencydetailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetailreamountwithoutdepositamount($detailvatamount3Currencydetailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount3Currencydetailreamountwithoutdepositamount = $detailvatamount3Currencydetailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetailreamountwithoutdepositamount()
    {
        return $this->detailvatamount3Currencydetailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount4Currencydetailamountvatexcluded.
     *
     * @param string|null $detailvatamount4Currencydetailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetailamountvatexcluded($detailvatamount4Currencydetailamountvatexcluded = null)
    {
        $this->detailvatamount4Currencydetailamountvatexcluded = $detailvatamount4Currencydetailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetailamountvatexcluded()
    {
        return $this->detailvatamount4Currencydetailamountvatexcluded;
    }

    /**
     * Set detailvatamount4Currencydetailvatamount.
     *
     * @param string|null $detailvatamount4Currencydetailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetailvatamount($detailvatamount4Currencydetailvatamount = null)
    {
        $this->detailvatamount4Currencydetailvatamount = $detailvatamount4Currencydetailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetailvatamount()
    {
        return $this->detailvatamount4Currencydetailvatamount;
    }

    /**
     * Set detailvatamount4Currencydetailamountvatincluded.
     *
     * @param string|null $detailvatamount4Currencydetailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetailamountvatincluded($detailvatamount4Currencydetailamountvatincluded = null)
    {
        $this->detailvatamount4Currencydetailamountvatincluded = $detailvatamount4Currencydetailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetailamountvatincluded()
    {
        return $this->detailvatamount4Currencydetailamountvatincluded;
    }

    /**
     * Set detailvatamount4Currencydetaildepositvatamount.
     *
     * @param string|null $detailvatamount4Currencydetaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetaildepositvatamount($detailvatamount4Currencydetaildepositvatamount = null)
    {
        $this->detailvatamount4Currencydetaildepositvatamount = $detailvatamount4Currencydetaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetaildepositvatamount()
    {
        return $this->detailvatamount4Currencydetaildepositvatamount;
    }

    /**
     * Set detailvatamount4Currencydetailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount4Currencydetailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencydetailvatamountwithoutdepositamount($detailvatamount4Currencydetailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount4Currencydetailvatamountwithoutdepositamount = $detailvatamount4Currencydetailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencydetailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencydetailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount4Currencydetailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount4Currencyecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount4Currencyecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyecotaxamountvatexcluded($detailvatamount4Currencyecotaxamountvatexcluded = null)
    {
        $this->detailvatamount4Currencyecotaxamountvatexcluded = $detailvatamount4Currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencyecotaxamountvatexcluded()
    {
        return $this->detailvatamount4Currencyecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount4Currencyecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount4Currencyecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyecotaxamountvatincluded($detailvatamount4Currencyecotaxamountvatincluded = null)
    {
        $this->detailvatamount4Currencyecotaxamountvatincluded = $detailvatamount4Currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencyecotaxamountvatincluded()
    {
        return $this->detailvatamount4Currencyecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount4Currencyecotaxvatamount.
     *
     * @param string|null $detailvatamount4Currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyecotaxvatamount($detailvatamount4Currencyecotaxvatamount = null)
    {
        $this->detailvatamount4Currencyecotaxvatamount = $detailvatamount4Currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencyecotaxvatamount()
    {
        return $this->detailvatamount4Currencyecotaxvatamount;
    }

    /**
     * Set detailvatamount4Currencyvatamountondebit.
     *
     * @param string|null $detailvatamount4Currencyvatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyvatamountondebit($detailvatamount4Currencyvatamountondebit = null)
    {
        $this->detailvatamount4Currencyvatamountondebit = $detailvatamount4Currencyvatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyvatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencyvatamountondebit()
    {
        return $this->detailvatamount4Currencyvatamountondebit;
    }

    /**
     * Set detailvatamount4Currencyvatamountoncollection.
     *
     * @param string|null $detailvatamount4Currencyvatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Currencyvatamountoncollection($detailvatamount4Currencyvatamountoncollection = null)
    {
        $this->detailvatamount4Currencyvatamountoncollection = $detailvatamount4Currencyvatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount4Currencyvatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount4Currencyvatamountoncollection()
    {
        return $this->detailvatamount4Currencyvatamountoncollection;
    }

    /**
     * Set detailvatamount2Currencydetaildepositreamount.
     *
     * @param string|null $detailvatamount2Currencydetaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetaildepositreamount($detailvatamount2Currencydetaildepositreamount = null)
    {
        $this->detailvatamount2Currencydetaildepositreamount = $detailvatamount2Currencydetaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetaildepositreamount()
    {
        return $this->detailvatamount2Currencydetaildepositreamount;
    }

    /**
     * Set detailvatamount2Currencydetailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount2Currencydetailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetailreamountwithoutdepositamount($detailvatamount2Currencydetailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount2Currencydetailreamountwithoutdepositamount = $detailvatamount2Currencydetailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetailreamountwithoutdepositamount()
    {
        return $this->detailvatamount2Currencydetailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount3Currencydetailamountvatexcluded.
     *
     * @param string|null $detailvatamount3Currencydetailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetailamountvatexcluded($detailvatamount3Currencydetailamountvatexcluded = null)
    {
        $this->detailvatamount3Currencydetailamountvatexcluded = $detailvatamount3Currencydetailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetailamountvatexcluded()
    {
        return $this->detailvatamount3Currencydetailamountvatexcluded;
    }

    /**
     * Set detailvatamount3Currencydetailvatamount.
     *
     * @param string|null $detailvatamount3Currencydetailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetailvatamount($detailvatamount3Currencydetailvatamount = null)
    {
        $this->detailvatamount3Currencydetailvatamount = $detailvatamount3Currencydetailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetailvatamount()
    {
        return $this->detailvatamount3Currencydetailvatamount;
    }

    /**
     * Set detailvatamount3Currencydetailamountvatincluded.
     *
     * @param string|null $detailvatamount3Currencydetailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetailamountvatincluded($detailvatamount3Currencydetailamountvatincluded = null)
    {
        $this->detailvatamount3Currencydetailamountvatincluded = $detailvatamount3Currencydetailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetailamountvatincluded()
    {
        return $this->detailvatamount3Currencydetailamountvatincluded;
    }

    /**
     * Set detailvatamount3Currencydetaildepositvatamount.
     *
     * @param string|null $detailvatamount3Currencydetaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetaildepositvatamount($detailvatamount3Currencydetaildepositvatamount = null)
    {
        $this->detailvatamount3Currencydetaildepositvatamount = $detailvatamount3Currencydetaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetaildepositvatamount()
    {
        return $this->detailvatamount3Currencydetaildepositvatamount;
    }

    /**
     * Set detailvatamount3Currencydetailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount3Currencydetailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencydetailvatamountwithoutdepositamount($detailvatamount3Currencydetailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount3Currencydetailvatamountwithoutdepositamount = $detailvatamount3Currencydetailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencydetailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencydetailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount3Currencydetailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount3Currencyecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount3Currencyecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyecotaxamountvatexcluded($detailvatamount3Currencyecotaxamountvatexcluded = null)
    {
        $this->detailvatamount3Currencyecotaxamountvatexcluded = $detailvatamount3Currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencyecotaxamountvatexcluded()
    {
        return $this->detailvatamount3Currencyecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount3Currencyecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount3Currencyecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyecotaxamountvatincluded($detailvatamount3Currencyecotaxamountvatincluded = null)
    {
        $this->detailvatamount3Currencyecotaxamountvatincluded = $detailvatamount3Currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencyecotaxamountvatincluded()
    {
        return $this->detailvatamount3Currencyecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount3Currencyecotaxvatamount.
     *
     * @param string|null $detailvatamount3Currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyecotaxvatamount($detailvatamount3Currencyecotaxvatamount = null)
    {
        $this->detailvatamount3Currencyecotaxvatamount = $detailvatamount3Currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencyecotaxvatamount()
    {
        return $this->detailvatamount3Currencyecotaxvatamount;
    }

    /**
     * Set detailvatamount3Currencyvatamountondebit.
     *
     * @param string|null $detailvatamount3Currencyvatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyvatamountondebit($detailvatamount3Currencyvatamountondebit = null)
    {
        $this->detailvatamount3Currencyvatamountondebit = $detailvatamount3Currencyvatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyvatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencyvatamountondebit()
    {
        return $this->detailvatamount3Currencyvatamountondebit;
    }

    /**
     * Set detailvatamount3Currencyvatamountoncollection.
     *
     * @param string|null $detailvatamount3Currencyvatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Currencyvatamountoncollection($detailvatamount3Currencyvatamountoncollection = null)
    {
        $this->detailvatamount3Currencyvatamountoncollection = $detailvatamount3Currencyvatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount3Currencyvatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount3Currencyvatamountoncollection()
    {
        return $this->detailvatamount3Currencyvatamountoncollection;
    }

    /**
     * Set detailvatamount1Currencydetaildepositreamount.
     *
     * @param string|null $detailvatamount1Currencydetaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetaildepositreamount($detailvatamount1Currencydetaildepositreamount = null)
    {
        $this->detailvatamount1Currencydetaildepositreamount = $detailvatamount1Currencydetaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetaildepositreamount()
    {
        return $this->detailvatamount1Currencydetaildepositreamount;
    }

    /**
     * Set detailvatamount1Currencydetailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount1Currencydetailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetailreamountwithoutdepositamount($detailvatamount1Currencydetailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount1Currencydetailreamountwithoutdepositamount = $detailvatamount1Currencydetailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetailreamountwithoutdepositamount()
    {
        return $this->detailvatamount1Currencydetailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount2Currencydetailamountvatexcluded.
     *
     * @param string|null $detailvatamount2Currencydetailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetailamountvatexcluded($detailvatamount2Currencydetailamountvatexcluded = null)
    {
        $this->detailvatamount2Currencydetailamountvatexcluded = $detailvatamount2Currencydetailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetailamountvatexcluded()
    {
        return $this->detailvatamount2Currencydetailamountvatexcluded;
    }

    /**
     * Set detailvatamount2Currencydetailvatamount.
     *
     * @param string|null $detailvatamount2Currencydetailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetailvatamount($detailvatamount2Currencydetailvatamount = null)
    {
        $this->detailvatamount2Currencydetailvatamount = $detailvatamount2Currencydetailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetailvatamount()
    {
        return $this->detailvatamount2Currencydetailvatamount;
    }

    /**
     * Set detailvatamount2Currencydetailamountvatincluded.
     *
     * @param string|null $detailvatamount2Currencydetailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetailamountvatincluded($detailvatamount2Currencydetailamountvatincluded = null)
    {
        $this->detailvatamount2Currencydetailamountvatincluded = $detailvatamount2Currencydetailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetailamountvatincluded()
    {
        return $this->detailvatamount2Currencydetailamountvatincluded;
    }

    /**
     * Set detailvatamount2Currencydetaildepositvatamount.
     *
     * @param string|null $detailvatamount2Currencydetaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetaildepositvatamount($detailvatamount2Currencydetaildepositvatamount = null)
    {
        $this->detailvatamount2Currencydetaildepositvatamount = $detailvatamount2Currencydetaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetaildepositvatamount()
    {
        return $this->detailvatamount2Currencydetaildepositvatamount;
    }

    /**
     * Set detailvatamount2Currencydetailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount2Currencydetailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencydetailvatamountwithoutdepositamount($detailvatamount2Currencydetailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount2Currencydetailvatamountwithoutdepositamount = $detailvatamount2Currencydetailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencydetailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencydetailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount2Currencydetailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount2Currencyecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount2Currencyecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyecotaxamountvatexcluded($detailvatamount2Currencyecotaxamountvatexcluded = null)
    {
        $this->detailvatamount2Currencyecotaxamountvatexcluded = $detailvatamount2Currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencyecotaxamountvatexcluded()
    {
        return $this->detailvatamount2Currencyecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount2Currencyecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount2Currencyecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyecotaxamountvatincluded($detailvatamount2Currencyecotaxamountvatincluded = null)
    {
        $this->detailvatamount2Currencyecotaxamountvatincluded = $detailvatamount2Currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencyecotaxamountvatincluded()
    {
        return $this->detailvatamount2Currencyecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount2Currencyecotaxvatamount.
     *
     * @param string|null $detailvatamount2Currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyecotaxvatamount($detailvatamount2Currencyecotaxvatamount = null)
    {
        $this->detailvatamount2Currencyecotaxvatamount = $detailvatamount2Currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencyecotaxvatamount()
    {
        return $this->detailvatamount2Currencyecotaxvatamount;
    }

    /**
     * Set detailvatamount2Currencyvatamountondebit.
     *
     * @param string|null $detailvatamount2Currencyvatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyvatamountondebit($detailvatamount2Currencyvatamountondebit = null)
    {
        $this->detailvatamount2Currencyvatamountondebit = $detailvatamount2Currencyvatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyvatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencyvatamountondebit()
    {
        return $this->detailvatamount2Currencyvatamountondebit;
    }

    /**
     * Set detailvatamount2Currencyvatamountoncollection.
     *
     * @param string|null $detailvatamount2Currencyvatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Currencyvatamountoncollection($detailvatamount2Currencyvatamountoncollection = null)
    {
        $this->detailvatamount2Currencyvatamountoncollection = $detailvatamount2Currencyvatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount2Currencyvatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount2Currencyvatamountoncollection()
    {
        return $this->detailvatamount2Currencyvatamountoncollection;
    }

    /**
     * Set detailvatamount0Currencydetaildepositreamount.
     *
     * @param string|null $detailvatamount0Currencydetaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetaildepositreamount($detailvatamount0Currencydetaildepositreamount = null)
    {
        $this->detailvatamount0Currencydetaildepositreamount = $detailvatamount0Currencydetaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetaildepositreamount()
    {
        return $this->detailvatamount0Currencydetaildepositreamount;
    }

    /**
     * Set detailvatamount0Currencydetailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount0Currencydetailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Currencydetailreamountwithoutdepositamount($detailvatamount0Currencydetailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount0Currencydetailreamountwithoutdepositamount = $detailvatamount0Currencydetailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount0Currencydetailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Currencydetailreamountwithoutdepositamount()
    {
        return $this->detailvatamount0Currencydetailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount1Currencydetailamountvatexcluded.
     *
     * @param string|null $detailvatamount1Currencydetailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetailamountvatexcluded($detailvatamount1Currencydetailamountvatexcluded = null)
    {
        $this->detailvatamount1Currencydetailamountvatexcluded = $detailvatamount1Currencydetailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetailamountvatexcluded()
    {
        return $this->detailvatamount1Currencydetailamountvatexcluded;
    }

    /**
     * Set detailvatamount1Currencydetailvatamount.
     *
     * @param string|null $detailvatamount1Currencydetailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetailvatamount($detailvatamount1Currencydetailvatamount = null)
    {
        $this->detailvatamount1Currencydetailvatamount = $detailvatamount1Currencydetailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetailvatamount()
    {
        return $this->detailvatamount1Currencydetailvatamount;
    }

    /**
     * Set detailvatamount1Currencydetailamountvatincluded.
     *
     * @param string|null $detailvatamount1Currencydetailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetailamountvatincluded($detailvatamount1Currencydetailamountvatincluded = null)
    {
        $this->detailvatamount1Currencydetailamountvatincluded = $detailvatamount1Currencydetailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetailamountvatincluded()
    {
        return $this->detailvatamount1Currencydetailamountvatincluded;
    }

    /**
     * Set detailvatamount1Currencydetaildepositvatamount.
     *
     * @param string|null $detailvatamount1Currencydetaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetaildepositvatamount($detailvatamount1Currencydetaildepositvatamount = null)
    {
        $this->detailvatamount1Currencydetaildepositvatamount = $detailvatamount1Currencydetaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetaildepositvatamount()
    {
        return $this->detailvatamount1Currencydetaildepositvatamount;
    }

    /**
     * Set detailvatamount1Currencydetailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount1Currencydetailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencydetailvatamountwithoutdepositamount($detailvatamount1Currencydetailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount1Currencydetailvatamountwithoutdepositamount = $detailvatamount1Currencydetailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencydetailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencydetailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount1Currencydetailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount1Currencyecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount1Currencyecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyecotaxamountvatexcluded($detailvatamount1Currencyecotaxamountvatexcluded = null)
    {
        $this->detailvatamount1Currencyecotaxamountvatexcluded = $detailvatamount1Currencyecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencyecotaxamountvatexcluded()
    {
        return $this->detailvatamount1Currencyecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount1Currencyecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount1Currencyecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyecotaxamountvatincluded($detailvatamount1Currencyecotaxamountvatincluded = null)
    {
        $this->detailvatamount1Currencyecotaxamountvatincluded = $detailvatamount1Currencyecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencyecotaxamountvatincluded()
    {
        return $this->detailvatamount1Currencyecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount1Currencyecotaxvatamount.
     *
     * @param string|null $detailvatamount1Currencyecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyecotaxvatamount($detailvatamount1Currencyecotaxvatamount = null)
    {
        $this->detailvatamount1Currencyecotaxvatamount = $detailvatamount1Currencyecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencyecotaxvatamount()
    {
        return $this->detailvatamount1Currencyecotaxvatamount;
    }

    /**
     * Set detailvatamount1Currencyvatamountondebit.
     *
     * @param string|null $detailvatamount1Currencyvatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyvatamountondebit($detailvatamount1Currencyvatamountondebit = null)
    {
        $this->detailvatamount1Currencyvatamountondebit = $detailvatamount1Currencyvatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyvatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencyvatamountondebit()
    {
        return $this->detailvatamount1Currencyvatamountondebit;
    }

    /**
     * Set detailvatamount1Currencyvatamountoncollection.
     *
     * @param string|null $detailvatamount1Currencyvatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Currencyvatamountoncollection($detailvatamount1Currencyvatamountoncollection = null)
    {
        $this->detailvatamount1Currencyvatamountoncollection = $detailvatamount1Currencyvatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount1Currencyvatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount1Currencyvatamountoncollection()
    {
        return $this->detailvatamount1Currencyvatamountoncollection;
    }

    /**
     * Set maintenancecontractid.
     *
     * @param string|null $maintenancecontractid
     *
     * @return Saledocument
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
     * Set incidentid.
     *
     * @param string|null $incidentid
     *
     * @return Saledocument
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
     * @return Saledocument
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
     * Set colleagueid.
     *
     * @param string|null $colleagueid
     *
     * @return Saledocument
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
     * Set priority.
     *
     * @param int|null $priority
     *
     * @return Saledocument
     */
    public function setPriority($priority = null)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority.
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set intervenerid.
     *
     * @param string|null $intervenerid
     *
     * @return Saledocument
     */
    public function setIntervenerid($intervenerid = null)
    {
        $this->intervenerid = $intervenerid;

        return $this;
    }

    /**
     * Get intervenerid.
     *
     * @return string|null
     */
    public function getIntervenerid()
    {
        return $this->intervenerid;
    }

    /**
     * Set origindocumentnumber.
     *
     * @param string|null $origindocumentnumber
     *
     * @return Saledocument
     */
    public function setOrigindocumentnumber($origindocumentnumber = null)
    {
        $this->origindocumentnumber = $origindocumentnumber;

        return $this;
    }

    /**
     * Get origindocumentnumber.
     *
     * @return string|null
     */
    public function getOrigindocumentnumber()
    {
        return $this->origindocumentnumber;
    }

    /**
     * Set syseditcounter.
     *
     * @param int|null $syseditcounter
     *
     * @return Saledocument
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
     * Set sysmoduleid.
     *
     * @param string|null $sysmoduleid
     *
     * @return Saledocument
     */
    public function setSysmoduleid($sysmoduleid = null)
    {
        $this->sysmoduleid = $sysmoduleid;

        return $this;
    }

    /**
     * Get sysmoduleid.
     *
     * @return string|null
     */
    public function getSysmoduleid()
    {
        return $this->sysmoduleid;
    }

    /**
     * Set sysdatabaseid.
     *
     * @param string|null $sysdatabaseid
     *
     * @return Saledocument
     */
    public function setSysdatabaseid($sysdatabaseid = null)
    {
        $this->sysdatabaseid = $sysdatabaseid;

        return $this;
    }

    /**
     * Get sysdatabaseid.
     *
     * @return string|null
     */
    public function getSysdatabaseid()
    {
        return $this->sysdatabaseid;
    }

    /**
     * Set sysrecordversion.
     *
     * @param int|null $sysrecordversion
     *
     * @return Saledocument
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
     * @return Saledocument
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
     * Set customercivility.
     *
     * @param string|null $customercivility
     *
     * @return Saledocument
     */
    public function setCustomercivility($customercivility = null)
    {
        $this->customercivility = $customercivility;

        return $this;
    }

    /**
     * Get customercivility.
     *
     * @return string|null
     */
    public function getCustomercivility()
    {
        return $this->customercivility;
    }

    /**
     * Set customerintracommunityvatnumber.
     *
     * @param string|null $customerintracommunityvatnumber
     *
     * @return Saledocument
     */
    public function setCustomerintracommunityvatnumber($customerintracommunityvatnumber = null)
    {
        $this->customerintracommunityvatnumber = $customerintracommunityvatnumber;

        return $this;
    }

    /**
     * Get customerintracommunityvatnumber.
     *
     * @return string|null
     */
    public function getCustomerintracommunityvatnumber()
    {
        return $this->customerintracommunityvatnumber;
    }

    /**
     * Set origindocumenttype.
     *
     * @param int|null $origindocumenttype
     *
     * @return Saledocument
     */
    public function setOrigindocumenttype($origindocumenttype = null)
    {
        $this->origindocumenttype = $origindocumenttype;

        return $this;
    }

    /**
     * Get origindocumenttype.
     *
     * @return int|null
     */
    public function getOrigindocumenttype()
    {
        return $this->origindocumenttype;
    }

    /**
     * Set deliveryorderpreparationstate.
     *
     * @param int|null $deliveryorderpreparationstate
     *
     * @return Saledocument
     */
    public function setDeliveryorderpreparationstate($deliveryorderpreparationstate = null)
    {
        $this->deliveryorderpreparationstate = $deliveryorderpreparationstate;

        return $this;
    }

    /**
     * Get deliveryorderpreparationstate.
     *
     * @return int|null
     */
    public function getDeliveryorderpreparationstate()
    {
        return $this->deliveryorderpreparationstate;
    }

    /**
     * Set returnorderpreparationstate.
     *
     * @param int|null $returnorderpreparationstate
     *
     * @return Saledocument
     */
    public function setReturnorderpreparationstate($returnorderpreparationstate = null)
    {
        $this->returnorderpreparationstate = $returnorderpreparationstate;

        return $this;
    }

    /**
     * Get returnorderpreparationstate.
     *
     * @return int|null
     */
    public function getReturnorderpreparationstate()
    {
        return $this->returnorderpreparationstate;
    }

    /**
     * Set identificationtype.
     *
     * @param int|null $identificationtype
     *
     * @return Saledocument
     */
    public function setIdentificationtype($identificationtype = null)
    {
        $this->identificationtype = $identificationtype;

        return $this;
    }

    /**
     * Get identificationtype.
     *
     * @return int|null
     */
    public function getIdentificationtype()
    {
        return $this->identificationtype;
    }

    /**
     * Set correctioncause.
     *
     * @param string|null $correctioncause
     *
     * @return Saledocument
     */
    public function setCorrectioncause($correctioncause = null)
    {
        $this->correctioncause = $correctioncause;

        return $this;
    }

    /**
     * Get correctioncause.
     *
     * @return string|null
     */
    public function getCorrectioncause()
    {
        return $this->correctioncause;
    }

    /**
     * Set correctionreasonid.
     *
     * @param string|null $correctionreasonid
     *
     * @return Saledocument
     */
    public function setCorrectionreasonid($correctionreasonid = null)
    {
        $this->correctionreasonid = $correctionreasonid;

        return $this;
    }

    /**
     * Get correctionreasonid.
     *
     * @return string|null
     */
    public function getCorrectionreasonid()
    {
        return $this->correctionreasonid;
    }

    /**
     * Set intrastattransportmode.
     *
     * @param string|null $intrastattransportmode
     *
     * @return Saledocument
     */
    public function setIntrastattransportmode($intrastattransportmode = null)
    {
        $this->intrastattransportmode = $intrastattransportmode;

        return $this;
    }

    /**
     * Get intrastattransportmode.
     *
     * @return string|null
     */
    public function getIntrastattransportmode()
    {
        return $this->intrastattransportmode;
    }

    /**
     * Set intrastattransactionnature.
     *
     * @param string|null $intrastattransactionnature
     *
     * @return Saledocument
     */
    public function setIntrastattransactionnature($intrastattransactionnature = null)
    {
        $this->intrastattransactionnature = $intrastattransactionnature;

        return $this;
    }

    /**
     * Get intrastattransactionnature.
     *
     * @return string|null
     */
    public function getIntrastattransactionnature()
    {
        return $this->intrastattransactionnature;
    }

    /**
     * Set appliedpricelistlineid.
     *
     * @param string|null $appliedpricelistlineid
     *
     * @return Saledocument
     */
    public function setAppliedpricelistlineid($appliedpricelistlineid = null)
    {
        $this->appliedpricelistlineid = $appliedpricelistlineid;

        return $this;
    }

    /**
     * Get appliedpricelistlineid.
     *
     * @return string|null
     */
    public function getAppliedpricelistlineid()
    {
        return $this->appliedpricelistlineid;
    }

    /**
     * Set pricelistcategory.
     *
     * @param string|null $pricelistcategory
     *
     * @return Saledocument
     */
    public function setPricelistcategory($pricelistcategory = null)
    {
        $this->pricelistcategory = $pricelistcategory;

        return $this;
    }

    /**
     * Get pricelistcategory.
     *
     * @return string|null
     */
    public function getPricelistcategory()
    {
        return $this->pricelistcategory;
    }

    /**
     * Set detailtaxamount5Taxcaption.
     *
     * @param string|null $detailtaxamount5Taxcaption
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Taxcaption($detailtaxamount5Taxcaption = null)
    {
        $this->detailtaxamount5Taxcaption = $detailtaxamount5Taxcaption;

        return $this;
    }

    /**
     * Get detailtaxamount5Taxcaption.
     *
     * @return string|null
     */
    public function getDetailtaxamount5Taxcaption()
    {
        return $this->detailtaxamount5Taxcaption;
    }

    /**
     * Set companybankid.
     *
     * @param string|null $companybankid
     *
     * @return Saledocument
     */
    public function setCompanybankid($companybankid = null)
    {
        $this->companybankid = $companybankid;

        return $this;
    }

    /**
     * Get companybankid.
     *
     * @return string|null
     */
    public function getCompanybankid()
    {
        return $this->companybankid;
    }

    /**
     * Set currencyid.
     *
     * @param string|null $currencyid
     *
     * @return Saledocument
     */
    public function setCurrencyid($currencyid = null)
    {
        $this->currencyid = $currencyid;

        return $this;
    }

    /**
     * Get currencyid.
     *
     * @return string|null
     */
    public function getCurrencyid()
    {
        return $this->currencyid;
    }

    /**
     * Set detailtaxamount4Taxcaption.
     *
     * @param string|null $detailtaxamount4Taxcaption
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Taxcaption($detailtaxamount4Taxcaption = null)
    {
        $this->detailtaxamount4Taxcaption = $detailtaxamount4Taxcaption;

        return $this;
    }

    /**
     * Get detailtaxamount4Taxcaption.
     *
     * @return string|null
     */
    public function getDetailtaxamount4Taxcaption()
    {
        return $this->detailtaxamount4Taxcaption;
    }

    /**
     * Set detailtaxamount5Taxid.
     *
     * @param string|null $detailtaxamount5Taxid
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Taxid($detailtaxamount5Taxid = null)
    {
        $this->detailtaxamount5Taxid = $detailtaxamount5Taxid;

        return $this;
    }

    /**
     * Get detailtaxamount5Taxid.
     *
     * @return string|null
     */
    public function getDetailtaxamount5Taxid()
    {
        return $this->detailtaxamount5Taxid;
    }

    /**
     * Set detailtaxamount5Taxcalculationbase.
     *
     * @param int|null $detailtaxamount5Taxcalculationbase
     *
     * @return Saledocument
     */
    public function setDetailtaxamount5Taxcalculationbase($detailtaxamount5Taxcalculationbase = null)
    {
        $this->detailtaxamount5Taxcalculationbase = $detailtaxamount5Taxcalculationbase;

        return $this;
    }

    /**
     * Get detailtaxamount5Taxcalculationbase.
     *
     * @return int|null
     */
    public function getDetailtaxamount5Taxcalculationbase()
    {
        return $this->detailtaxamount5Taxcalculationbase;
    }

    /**
     * Set dealid.
     *
     * @param string|null $dealid
     *
     * @return Saledocument
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
     * Set detailtaxamount3Taxcaption.
     *
     * @param string|null $detailtaxamount3Taxcaption
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Taxcaption($detailtaxamount3Taxcaption = null)
    {
        $this->detailtaxamount3Taxcaption = $detailtaxamount3Taxcaption;

        return $this;
    }

    /**
     * Get detailtaxamount3Taxcaption.
     *
     * @return string|null
     */
    public function getDetailtaxamount3Taxcaption()
    {
        return $this->detailtaxamount3Taxcaption;
    }

    /**
     * Set detailtaxamount4Taxid.
     *
     * @param string|null $detailtaxamount4Taxid
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Taxid($detailtaxamount4Taxid = null)
    {
        $this->detailtaxamount4Taxid = $detailtaxamount4Taxid;

        return $this;
    }

    /**
     * Get detailtaxamount4Taxid.
     *
     * @return string|null
     */
    public function getDetailtaxamount4Taxid()
    {
        return $this->detailtaxamount4Taxid;
    }

    /**
     * Set detailtaxamount4Taxcalculationbase.
     *
     * @param int|null $detailtaxamount4Taxcalculationbase
     *
     * @return Saledocument
     */
    public function setDetailtaxamount4Taxcalculationbase($detailtaxamount4Taxcalculationbase = null)
    {
        $this->detailtaxamount4Taxcalculationbase = $detailtaxamount4Taxcalculationbase;

        return $this;
    }

    /**
     * Get detailtaxamount4Taxcalculationbase.
     *
     * @return int|null
     */
    public function getDetailtaxamount4Taxcalculationbase()
    {
        return $this->detailtaxamount4Taxcalculationbase;
    }

    /**
     * Set detailtaxamount2Taxcaption.
     *
     * @param string|null $detailtaxamount2Taxcaption
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Taxcaption($detailtaxamount2Taxcaption = null)
    {
        $this->detailtaxamount2Taxcaption = $detailtaxamount2Taxcaption;

        return $this;
    }

    /**
     * Get detailtaxamount2Taxcaption.
     *
     * @return string|null
     */
    public function getDetailtaxamount2Taxcaption()
    {
        return $this->detailtaxamount2Taxcaption;
    }

    /**
     * Set detailtaxamount3Taxid.
     *
     * @param string|null $detailtaxamount3Taxid
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Taxid($detailtaxamount3Taxid = null)
    {
        $this->detailtaxamount3Taxid = $detailtaxamount3Taxid;

        return $this;
    }

    /**
     * Get detailtaxamount3Taxid.
     *
     * @return string|null
     */
    public function getDetailtaxamount3Taxid()
    {
        return $this->detailtaxamount3Taxid;
    }

    /**
     * Set detailtaxamount3Taxcalculationbase.
     *
     * @param int|null $detailtaxamount3Taxcalculationbase
     *
     * @return Saledocument
     */
    public function setDetailtaxamount3Taxcalculationbase($detailtaxamount3Taxcalculationbase = null)
    {
        $this->detailtaxamount3Taxcalculationbase = $detailtaxamount3Taxcalculationbase;

        return $this;
    }

    /**
     * Get detailtaxamount3Taxcalculationbase.
     *
     * @return int|null
     */
    public function getDetailtaxamount3Taxcalculationbase()
    {
        return $this->detailtaxamount3Taxcalculationbase;
    }

    /**
     * Set detailtaxamount1Taxcaption.
     *
     * @param string|null $detailtaxamount1Taxcaption
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Taxcaption($detailtaxamount1Taxcaption = null)
    {
        $this->detailtaxamount1Taxcaption = $detailtaxamount1Taxcaption;

        return $this;
    }

    /**
     * Get detailtaxamount1Taxcaption.
     *
     * @return string|null
     */
    public function getDetailtaxamount1Taxcaption()
    {
        return $this->detailtaxamount1Taxcaption;
    }

    /**
     * Set detailtaxamount2Taxid.
     *
     * @param string|null $detailtaxamount2Taxid
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Taxid($detailtaxamount2Taxid = null)
    {
        $this->detailtaxamount2Taxid = $detailtaxamount2Taxid;

        return $this;
    }

    /**
     * Get detailtaxamount2Taxid.
     *
     * @return string|null
     */
    public function getDetailtaxamount2Taxid()
    {
        return $this->detailtaxamount2Taxid;
    }

    /**
     * Set detailtaxamount2Taxcalculationbase.
     *
     * @param int|null $detailtaxamount2Taxcalculationbase
     *
     * @return Saledocument
     */
    public function setDetailtaxamount2Taxcalculationbase($detailtaxamount2Taxcalculationbase = null)
    {
        $this->detailtaxamount2Taxcalculationbase = $detailtaxamount2Taxcalculationbase;

        return $this;
    }

    /**
     * Get detailtaxamount2Taxcalculationbase.
     *
     * @return int|null
     */
    public function getDetailtaxamount2Taxcalculationbase()
    {
        return $this->detailtaxamount2Taxcalculationbase;
    }

    /**
     * Set detailtaxamount0Taxcaption.
     *
     * @param string|null $detailtaxamount0Taxcaption
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Taxcaption($detailtaxamount0Taxcaption = null)
    {
        $this->detailtaxamount0Taxcaption = $detailtaxamount0Taxcaption;

        return $this;
    }

    /**
     * Get detailtaxamount0Taxcaption.
     *
     * @return string|null
     */
    public function getDetailtaxamount0Taxcaption()
    {
        return $this->detailtaxamount0Taxcaption;
    }

    /**
     * Set detailtaxamount1Taxid.
     *
     * @param string|null $detailtaxamount1Taxid
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Taxid($detailtaxamount1Taxid = null)
    {
        $this->detailtaxamount1Taxid = $detailtaxamount1Taxid;

        return $this;
    }

    /**
     * Get detailtaxamount1Taxid.
     *
     * @return string|null
     */
    public function getDetailtaxamount1Taxid()
    {
        return $this->detailtaxamount1Taxid;
    }

    /**
     * Set detailtaxamount1Taxcalculationbase.
     *
     * @param int|null $detailtaxamount1Taxcalculationbase
     *
     * @return Saledocument
     */
    public function setDetailtaxamount1Taxcalculationbase($detailtaxamount1Taxcalculationbase = null)
    {
        $this->detailtaxamount1Taxcalculationbase = $detailtaxamount1Taxcalculationbase;

        return $this;
    }

    /**
     * Get detailtaxamount1Taxcalculationbase.
     *
     * @return int|null
     */
    public function getDetailtaxamount1Taxcalculationbase()
    {
        return $this->detailtaxamount1Taxcalculationbase;
    }

    /**
     * Set thirdbankaccountid.
     *
     * @param string|null $thirdbankaccountid
     *
     * @return Saledocument
     */
    public function setThirdbankaccountid($thirdbankaccountid = null)
    {
        $this->thirdbankaccountid = $thirdbankaccountid;

        return $this;
    }

    /**
     * Get thirdbankaccountid.
     *
     * @return string|null
     */
    public function getThirdbankaccountid()
    {
        return $this->thirdbankaccountid;
    }

    /**
     * Set detailtaxamount0Taxid.
     *
     * @param string|null $detailtaxamount0Taxid
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Taxid($detailtaxamount0Taxid = null)
    {
        $this->detailtaxamount0Taxid = $detailtaxamount0Taxid;

        return $this;
    }

    /**
     * Get detailtaxamount0Taxid.
     *
     * @return string|null
     */
    public function getDetailtaxamount0Taxid()
    {
        return $this->detailtaxamount0Taxid;
    }

    /**
     * Set detailtaxamount0Taxcalculationbase.
     *
     * @param int|null $detailtaxamount0Taxcalculationbase
     *
     * @return Saledocument
     */
    public function setDetailtaxamount0Taxcalculationbase($detailtaxamount0Taxcalculationbase = null)
    {
        $this->detailtaxamount0Taxcalculationbase = $detailtaxamount0Taxcalculationbase;

        return $this;
    }

    /**
     * Get detailtaxamount0Taxcalculationbase.
     *
     * @return int|null
     */
    public function getDetailtaxamount0Taxcalculationbase()
    {
        return $this->detailtaxamount0Taxcalculationbase;
    }

    /**
     * Set detailvatamount5Detaildepositreamount.
     *
     * @param string|null $detailvatamount5Detaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detaildepositreamount($detailvatamount5Detaildepositreamount = null)
    {
        $this->detailvatamount5Detaildepositreamount = $detailvatamount5Detaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount5Detaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detaildepositreamount()
    {
        return $this->detailvatamount5Detaildepositreamount;
    }

    /**
     * Set detailvatamount5Detailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount5Detailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailreamountwithoutdepositamount($detailvatamount5Detailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount5Detailreamountwithoutdepositamount = $detailvatamount5Detailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount5Detailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailreamountwithoutdepositamount()
    {
        return $this->detailvatamount5Detailreamountwithoutdepositamount;
    }

    /**
     * Set paymenttypeid.
     *
     * @param string|null $paymenttypeid
     *
     * @return Saledocument
     */
    public function setPaymenttypeid($paymenttypeid = null)
    {
        $this->paymenttypeid = $paymenttypeid;

        return $this;
    }

    /**
     * Get paymenttypeid.
     *
     * @return string|null
     */
    public function getPaymenttypeid()
    {
        return $this->paymenttypeid;
    }

    /**
     * Set accountingexchangegroupid.
     *
     * @param string|null $accountingexchangegroupid
     *
     * @return Saledocument
     */
    public function setAccountingexchangegroupid($accountingexchangegroupid = null)
    {
        $this->accountingexchangegroupid = $accountingexchangegroupid;

        return $this;
    }

    /**
     * Get accountingexchangegroupid.
     *
     * @return string|null
     */
    public function getAccountingexchangegroupid()
    {
        return $this->accountingexchangegroupid;
    }

    /**
     * Set detailvatamount4Detaildepositreamount.
     *
     * @param string|null $detailvatamount4Detaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detaildepositreamount($detailvatamount4Detaildepositreamount = null)
    {
        $this->detailvatamount4Detaildepositreamount = $detailvatamount4Detaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount4Detaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detaildepositreamount()
    {
        return $this->detailvatamount4Detaildepositreamount;
    }

    /**
     * Set detailvatamount4Detailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount4Detailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailreamountwithoutdepositamount($detailvatamount4Detailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount4Detailreamountwithoutdepositamount = $detailvatamount4Detailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount4Detailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailreamountwithoutdepositamount()
    {
        return $this->detailvatamount4Detailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount5Detailvatid.
     *
     * @param string|null $detailvatamount5Detailvatid
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailvatid($detailvatamount5Detailvatid = null)
    {
        $this->detailvatamount5Detailvatid = $detailvatamount5Detailvatid;

        return $this;
    }

    /**
     * Get detailvatamount5Detailvatid.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailvatid()
    {
        return $this->detailvatamount5Detailvatid;
    }

    /**
     * Set detailvatamount5Detailvatrate.
     *
     * @param string|null $detailvatamount5Detailvatrate
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailvatrate($detailvatamount5Detailvatrate = null)
    {
        $this->detailvatamount5Detailvatrate = $detailvatamount5Detailvatrate;

        return $this;
    }

    /**
     * Get detailvatamount5Detailvatrate.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailvatrate()
    {
        return $this->detailvatamount5Detailvatrate;
    }

    /**
     * Set detailvatamount5Detailamountvatexcluded.
     *
     * @param string|null $detailvatamount5Detailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailamountvatexcluded($detailvatamount5Detailamountvatexcluded = null)
    {
        $this->detailvatamount5Detailamountvatexcluded = $detailvatamount5Detailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount5Detailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailamountvatexcluded()
    {
        return $this->detailvatamount5Detailamountvatexcluded;
    }

    /**
     * Set detailvatamount5Detailvatamount.
     *
     * @param string|null $detailvatamount5Detailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailvatamount($detailvatamount5Detailvatamount = null)
    {
        $this->detailvatamount5Detailvatamount = $detailvatamount5Detailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Detailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailvatamount()
    {
        return $this->detailvatamount5Detailvatamount;
    }

    /**
     * Set detailvatamount5Detailamountvatincluded.
     *
     * @param string|null $detailvatamount5Detailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailamountvatincluded($detailvatamount5Detailamountvatincluded = null)
    {
        $this->detailvatamount5Detailamountvatincluded = $detailvatamount5Detailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount5Detailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailamountvatincluded()
    {
        return $this->detailvatamount5Detailamountvatincluded;
    }

    /**
     * Set detailvatamount5Detaildepositvatamount.
     *
     * @param string|null $detailvatamount5Detaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detaildepositvatamount($detailvatamount5Detaildepositvatamount = null)
    {
        $this->detailvatamount5Detaildepositvatamount = $detailvatamount5Detaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Detaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detaildepositvatamount()
    {
        return $this->detailvatamount5Detaildepositvatamount;
    }

    /**
     * Set detailvatamount5Detailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount5Detailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Detailvatamountwithoutdepositamount($detailvatamount5Detailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount5Detailvatamountwithoutdepositamount = $detailvatamount5Detailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount5Detailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Detailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount5Detailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount5Ecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount5Ecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Ecotaxamountvatexcluded($detailvatamount5Ecotaxamountvatexcluded = null)
    {
        $this->detailvatamount5Ecotaxamountvatexcluded = $detailvatamount5Ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount5Ecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Ecotaxamountvatexcluded()
    {
        return $this->detailvatamount5Ecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount5Ecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount5Ecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Ecotaxamountvatincluded($detailvatamount5Ecotaxamountvatincluded = null)
    {
        $this->detailvatamount5Ecotaxamountvatincluded = $detailvatamount5Ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount5Ecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount5Ecotaxamountvatincluded()
    {
        return $this->detailvatamount5Ecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount5Ecotaxvatamount.
     *
     * @param string|null $detailvatamount5Ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Ecotaxvatamount($detailvatamount5Ecotaxvatamount = null)
    {
        $this->detailvatamount5Ecotaxvatamount = $detailvatamount5Ecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount5Ecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount5Ecotaxvatamount()
    {
        return $this->detailvatamount5Ecotaxvatamount;
    }

    /**
     * Set detailvatamount5Vatamountondebit.
     *
     * @param string|null $detailvatamount5Vatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Vatamountondebit($detailvatamount5Vatamountondebit = null)
    {
        $this->detailvatamount5Vatamountondebit = $detailvatamount5Vatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount5Vatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount5Vatamountondebit()
    {
        return $this->detailvatamount5Vatamountondebit;
    }

    /**
     * Set detailvatamount5Vatamountoncollection.
     *
     * @param string|null $detailvatamount5Vatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount5Vatamountoncollection($detailvatamount5Vatamountoncollection = null)
    {
        $this->detailvatamount5Vatamountoncollection = $detailvatamount5Vatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount5Vatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount5Vatamountoncollection()
    {
        return $this->detailvatamount5Vatamountoncollection;
    }

    /**
     * Set detailvatamount3Detaildepositreamount.
     *
     * @param string|null $detailvatamount3Detaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detaildepositreamount($detailvatamount3Detaildepositreamount = null)
    {
        $this->detailvatamount3Detaildepositreamount = $detailvatamount3Detaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount3Detaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detaildepositreamount()
    {
        return $this->detailvatamount3Detaildepositreamount;
    }

    /**
     * Set detailvatamount3Detailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount3Detailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailreamountwithoutdepositamount($detailvatamount3Detailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount3Detailreamountwithoutdepositamount = $detailvatamount3Detailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount3Detailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailreamountwithoutdepositamount()
    {
        return $this->detailvatamount3Detailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount4Detailvatid.
     *
     * @param string|null $detailvatamount4Detailvatid
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailvatid($detailvatamount4Detailvatid = null)
    {
        $this->detailvatamount4Detailvatid = $detailvatamount4Detailvatid;

        return $this;
    }

    /**
     * Get detailvatamount4Detailvatid.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailvatid()
    {
        return $this->detailvatamount4Detailvatid;
    }

    /**
     * Set detailvatamount4Detailvatrate.
     *
     * @param string|null $detailvatamount4Detailvatrate
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailvatrate($detailvatamount4Detailvatrate = null)
    {
        $this->detailvatamount4Detailvatrate = $detailvatamount4Detailvatrate;

        return $this;
    }

    /**
     * Get detailvatamount4Detailvatrate.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailvatrate()
    {
        return $this->detailvatamount4Detailvatrate;
    }

    /**
     * Set detailvatamount4Detailamountvatexcluded.
     *
     * @param string|null $detailvatamount4Detailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailamountvatexcluded($detailvatamount4Detailamountvatexcluded = null)
    {
        $this->detailvatamount4Detailamountvatexcluded = $detailvatamount4Detailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount4Detailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailamountvatexcluded()
    {
        return $this->detailvatamount4Detailamountvatexcluded;
    }

    /**
     * Set detailvatamount4Detailvatamount.
     *
     * @param string|null $detailvatamount4Detailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailvatamount($detailvatamount4Detailvatamount = null)
    {
        $this->detailvatamount4Detailvatamount = $detailvatamount4Detailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Detailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailvatamount()
    {
        return $this->detailvatamount4Detailvatamount;
    }

    /**
     * Set detailvatamount4Detailamountvatincluded.
     *
     * @param string|null $detailvatamount4Detailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailamountvatincluded($detailvatamount4Detailamountvatincluded = null)
    {
        $this->detailvatamount4Detailamountvatincluded = $detailvatamount4Detailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount4Detailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailamountvatincluded()
    {
        return $this->detailvatamount4Detailamountvatincluded;
    }

    /**
     * Set detailvatamount4Detaildepositvatamount.
     *
     * @param string|null $detailvatamount4Detaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detaildepositvatamount($detailvatamount4Detaildepositvatamount = null)
    {
        $this->detailvatamount4Detaildepositvatamount = $detailvatamount4Detaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Detaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detaildepositvatamount()
    {
        return $this->detailvatamount4Detaildepositvatamount;
    }

    /**
     * Set detailvatamount4Detailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount4Detailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Detailvatamountwithoutdepositamount($detailvatamount4Detailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount4Detailvatamountwithoutdepositamount = $detailvatamount4Detailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount4Detailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Detailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount4Detailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount4Ecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount4Ecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Ecotaxamountvatexcluded($detailvatamount4Ecotaxamountvatexcluded = null)
    {
        $this->detailvatamount4Ecotaxamountvatexcluded = $detailvatamount4Ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount4Ecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Ecotaxamountvatexcluded()
    {
        return $this->detailvatamount4Ecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount4Ecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount4Ecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Ecotaxamountvatincluded($detailvatamount4Ecotaxamountvatincluded = null)
    {
        $this->detailvatamount4Ecotaxamountvatincluded = $detailvatamount4Ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount4Ecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount4Ecotaxamountvatincluded()
    {
        return $this->detailvatamount4Ecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount4Ecotaxvatamount.
     *
     * @param string|null $detailvatamount4Ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Ecotaxvatamount($detailvatamount4Ecotaxvatamount = null)
    {
        $this->detailvatamount4Ecotaxvatamount = $detailvatamount4Ecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount4Ecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount4Ecotaxvatamount()
    {
        return $this->detailvatamount4Ecotaxvatamount;
    }

    /**
     * Set detailvatamount4Vatamountondebit.
     *
     * @param string|null $detailvatamount4Vatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Vatamountondebit($detailvatamount4Vatamountondebit = null)
    {
        $this->detailvatamount4Vatamountondebit = $detailvatamount4Vatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount4Vatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount4Vatamountondebit()
    {
        return $this->detailvatamount4Vatamountondebit;
    }

    /**
     * Set detailvatamount4Vatamountoncollection.
     *
     * @param string|null $detailvatamount4Vatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount4Vatamountoncollection($detailvatamount4Vatamountoncollection = null)
    {
        $this->detailvatamount4Vatamountoncollection = $detailvatamount4Vatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount4Vatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount4Vatamountoncollection()
    {
        return $this->detailvatamount4Vatamountoncollection;
    }

    /**
     * Set detailvatamount2Detaildepositreamount.
     *
     * @param string|null $detailvatamount2Detaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detaildepositreamount($detailvatamount2Detaildepositreamount = null)
    {
        $this->detailvatamount2Detaildepositreamount = $detailvatamount2Detaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount2Detaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detaildepositreamount()
    {
        return $this->detailvatamount2Detaildepositreamount;
    }

    /**
     * Set detailvatamount2Detailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount2Detailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailreamountwithoutdepositamount($detailvatamount2Detailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount2Detailreamountwithoutdepositamount = $detailvatamount2Detailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount2Detailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailreamountwithoutdepositamount()
    {
        return $this->detailvatamount2Detailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount3Detailvatid.
     *
     * @param string|null $detailvatamount3Detailvatid
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailvatid($detailvatamount3Detailvatid = null)
    {
        $this->detailvatamount3Detailvatid = $detailvatamount3Detailvatid;

        return $this;
    }

    /**
     * Get detailvatamount3Detailvatid.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailvatid()
    {
        return $this->detailvatamount3Detailvatid;
    }

    /**
     * Set detailvatamount3Detailvatrate.
     *
     * @param string|null $detailvatamount3Detailvatrate
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailvatrate($detailvatamount3Detailvatrate = null)
    {
        $this->detailvatamount3Detailvatrate = $detailvatamount3Detailvatrate;

        return $this;
    }

    /**
     * Get detailvatamount3Detailvatrate.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailvatrate()
    {
        return $this->detailvatamount3Detailvatrate;
    }

    /**
     * Set detailvatamount3Detailamountvatexcluded.
     *
     * @param string|null $detailvatamount3Detailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailamountvatexcluded($detailvatamount3Detailamountvatexcluded = null)
    {
        $this->detailvatamount3Detailamountvatexcluded = $detailvatamount3Detailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount3Detailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailamountvatexcluded()
    {
        return $this->detailvatamount3Detailamountvatexcluded;
    }

    /**
     * Set detailvatamount3Detailvatamount.
     *
     * @param string|null $detailvatamount3Detailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailvatamount($detailvatamount3Detailvatamount = null)
    {
        $this->detailvatamount3Detailvatamount = $detailvatamount3Detailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Detailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailvatamount()
    {
        return $this->detailvatamount3Detailvatamount;
    }

    /**
     * Set detailvatamount3Detailamountvatincluded.
     *
     * @param string|null $detailvatamount3Detailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailamountvatincluded($detailvatamount3Detailamountvatincluded = null)
    {
        $this->detailvatamount3Detailamountvatincluded = $detailvatamount3Detailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount3Detailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailamountvatincluded()
    {
        return $this->detailvatamount3Detailamountvatincluded;
    }

    /**
     * Set detailvatamount3Detaildepositvatamount.
     *
     * @param string|null $detailvatamount3Detaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detaildepositvatamount($detailvatamount3Detaildepositvatamount = null)
    {
        $this->detailvatamount3Detaildepositvatamount = $detailvatamount3Detaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Detaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detaildepositvatamount()
    {
        return $this->detailvatamount3Detaildepositvatamount;
    }

    /**
     * Set detailvatamount3Detailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount3Detailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Detailvatamountwithoutdepositamount($detailvatamount3Detailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount3Detailvatamountwithoutdepositamount = $detailvatamount3Detailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount3Detailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Detailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount3Detailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount3Ecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount3Ecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Ecotaxamountvatexcluded($detailvatamount3Ecotaxamountvatexcluded = null)
    {
        $this->detailvatamount3Ecotaxamountvatexcluded = $detailvatamount3Ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount3Ecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Ecotaxamountvatexcluded()
    {
        return $this->detailvatamount3Ecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount3Ecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount3Ecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Ecotaxamountvatincluded($detailvatamount3Ecotaxamountvatincluded = null)
    {
        $this->detailvatamount3Ecotaxamountvatincluded = $detailvatamount3Ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount3Ecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount3Ecotaxamountvatincluded()
    {
        return $this->detailvatamount3Ecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount3Ecotaxvatamount.
     *
     * @param string|null $detailvatamount3Ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Ecotaxvatamount($detailvatamount3Ecotaxvatamount = null)
    {
        $this->detailvatamount3Ecotaxvatamount = $detailvatamount3Ecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount3Ecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount3Ecotaxvatamount()
    {
        return $this->detailvatamount3Ecotaxvatamount;
    }

    /**
     * Set detailvatamount3Vatamountondebit.
     *
     * @param string|null $detailvatamount3Vatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Vatamountondebit($detailvatamount3Vatamountondebit = null)
    {
        $this->detailvatamount3Vatamountondebit = $detailvatamount3Vatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount3Vatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount3Vatamountondebit()
    {
        return $this->detailvatamount3Vatamountondebit;
    }

    /**
     * Set detailvatamount3Vatamountoncollection.
     *
     * @param string|null $detailvatamount3Vatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount3Vatamountoncollection($detailvatamount3Vatamountoncollection = null)
    {
        $this->detailvatamount3Vatamountoncollection = $detailvatamount3Vatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount3Vatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount3Vatamountoncollection()
    {
        return $this->detailvatamount3Vatamountoncollection;
    }

    /**
     * Set thirdidtodeliver.
     *
     * @param string|null $thirdidtodeliver
     *
     * @return Saledocument
     */
    public function setThirdidtodeliver($thirdidtodeliver = null)
    {
        $this->thirdidtodeliver = $thirdidtodeliver;

        return $this;
    }

    /**
     * Get thirdidtodeliver.
     *
     * @return string|null
     */
    public function getThirdidtodeliver()
    {
        return $this->thirdidtodeliver;
    }

    /**
     * Set reversechargemention.
     *
     * @param string|null $reversechargemention
     *
     * @return Saledocument
     */
    public function setReversechargemention($reversechargemention = null)
    {
        $this->reversechargemention = $reversechargemention;

        return $this;
    }

    /**
     * Get reversechargemention.
     *
     * @return string|null
     */
    public function getReversechargemention()
    {
        return $this->reversechargemention;
    }

    /**
     * Set sepacommunication.
     *
     * @param string|null $sepacommunication
     *
     * @return Saledocument
     */
    public function setSepacommunication($sepacommunication = null)
    {
        $this->sepacommunication = $sepacommunication;

        return $this;
    }

    /**
     * Get sepacommunication.
     *
     * @return string|null
     */
    public function getSepacommunication()
    {
        return $this->sepacommunication;
    }

    /**
     * Set orderthirdid.
     *
     * @param string|null $orderthirdid
     *
     * @return Saledocument
     */
    public function setOrderthirdid($orderthirdid = null)
    {
        $this->orderthirdid = $orderthirdid;

        return $this;
    }

    /**
     * Get orderthirdid.
     *
     * @return string|null
     */
    public function getOrderthirdid()
    {
        return $this->orderthirdid;
    }

    /**
     * Set bankid.
     *
     * @param string|null $bankid
     *
     * @return Saledocument
     */
    public function setBankid($bankid = null)
    {
        $this->bankid = $bankid;

        return $this;
    }

    /**
     * Get bankid.
     *
     * @return string|null
     */
    public function getBankid()
    {
        return $this->bankid;
    }

    /**
     * Set detailvatamount1Detaildepositreamount.
     *
     * @param string|null $detailvatamount1Detaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detaildepositreamount($detailvatamount1Detaildepositreamount = null)
    {
        $this->detailvatamount1Detaildepositreamount = $detailvatamount1Detaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount1Detaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detaildepositreamount()
    {
        return $this->detailvatamount1Detaildepositreamount;
    }

    /**
     * Set detailvatamount1Detailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount1Detailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailreamountwithoutdepositamount($detailvatamount1Detailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount1Detailreamountwithoutdepositamount = $detailvatamount1Detailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount1Detailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailreamountwithoutdepositamount()
    {
        return $this->detailvatamount1Detailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount2Detailvatid.
     *
     * @param string|null $detailvatamount2Detailvatid
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailvatid($detailvatamount2Detailvatid = null)
    {
        $this->detailvatamount2Detailvatid = $detailvatamount2Detailvatid;

        return $this;
    }

    /**
     * Get detailvatamount2Detailvatid.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailvatid()
    {
        return $this->detailvatamount2Detailvatid;
    }

    /**
     * Set detailvatamount2Detailvatrate.
     *
     * @param string|null $detailvatamount2Detailvatrate
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailvatrate($detailvatamount2Detailvatrate = null)
    {
        $this->detailvatamount2Detailvatrate = $detailvatamount2Detailvatrate;

        return $this;
    }

    /**
     * Get detailvatamount2Detailvatrate.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailvatrate()
    {
        return $this->detailvatamount2Detailvatrate;
    }

    /**
     * Set detailvatamount2Detailamountvatexcluded.
     *
     * @param string|null $detailvatamount2Detailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailamountvatexcluded($detailvatamount2Detailamountvatexcluded = null)
    {
        $this->detailvatamount2Detailamountvatexcluded = $detailvatamount2Detailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount2Detailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailamountvatexcluded()
    {
        return $this->detailvatamount2Detailamountvatexcluded;
    }

    /**
     * Set detailvatamount2Detailvatamount.
     *
     * @param string|null $detailvatamount2Detailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailvatamount($detailvatamount2Detailvatamount = null)
    {
        $this->detailvatamount2Detailvatamount = $detailvatamount2Detailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Detailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailvatamount()
    {
        return $this->detailvatamount2Detailvatamount;
    }

    /**
     * Set detailvatamount2Detailamountvatincluded.
     *
     * @param string|null $detailvatamount2Detailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailamountvatincluded($detailvatamount2Detailamountvatincluded = null)
    {
        $this->detailvatamount2Detailamountvatincluded = $detailvatamount2Detailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount2Detailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailamountvatincluded()
    {
        return $this->detailvatamount2Detailamountvatincluded;
    }

    /**
     * Set detailvatamount2Detaildepositvatamount.
     *
     * @param string|null $detailvatamount2Detaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detaildepositvatamount($detailvatamount2Detaildepositvatamount = null)
    {
        $this->detailvatamount2Detaildepositvatamount = $detailvatamount2Detaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Detaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detaildepositvatamount()
    {
        return $this->detailvatamount2Detaildepositvatamount;
    }

    /**
     * Set detailvatamount2Detailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount2Detailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Detailvatamountwithoutdepositamount($detailvatamount2Detailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount2Detailvatamountwithoutdepositamount = $detailvatamount2Detailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount2Detailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Detailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount2Detailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount2Ecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount2Ecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Ecotaxamountvatexcluded($detailvatamount2Ecotaxamountvatexcluded = null)
    {
        $this->detailvatamount2Ecotaxamountvatexcluded = $detailvatamount2Ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount2Ecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Ecotaxamountvatexcluded()
    {
        return $this->detailvatamount2Ecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount2Ecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount2Ecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Ecotaxamountvatincluded($detailvatamount2Ecotaxamountvatincluded = null)
    {
        $this->detailvatamount2Ecotaxamountvatincluded = $detailvatamount2Ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount2Ecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount2Ecotaxamountvatincluded()
    {
        return $this->detailvatamount2Ecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount2Ecotaxvatamount.
     *
     * @param string|null $detailvatamount2Ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Ecotaxvatamount($detailvatamount2Ecotaxvatamount = null)
    {
        $this->detailvatamount2Ecotaxvatamount = $detailvatamount2Ecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount2Ecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount2Ecotaxvatamount()
    {
        return $this->detailvatamount2Ecotaxvatamount;
    }

    /**
     * Set detailvatamount2Vatamountondebit.
     *
     * @param string|null $detailvatamount2Vatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Vatamountondebit($detailvatamount2Vatamountondebit = null)
    {
        $this->detailvatamount2Vatamountondebit = $detailvatamount2Vatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount2Vatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount2Vatamountondebit()
    {
        return $this->detailvatamount2Vatamountondebit;
    }

    /**
     * Set detailvatamount2Vatamountoncollection.
     *
     * @param string|null $detailvatamount2Vatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount2Vatamountoncollection($detailvatamount2Vatamountoncollection = null)
    {
        $this->detailvatamount2Vatamountoncollection = $detailvatamount2Vatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount2Vatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount2Vatamountoncollection()
    {
        return $this->detailvatamount2Vatamountoncollection;
    }

    /**
     * Set detailvatamount0Detaildepositreamount.
     *
     * @param string|null $detailvatamount0Detaildepositreamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detaildepositreamount($detailvatamount0Detaildepositreamount = null)
    {
        $this->detailvatamount0Detaildepositreamount = $detailvatamount0Detaildepositreamount;

        return $this;
    }

    /**
     * Get detailvatamount0Detaildepositreamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detaildepositreamount()
    {
        return $this->detailvatamount0Detaildepositreamount;
    }

    /**
     * Set detailvatamount0Detailreamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount0Detailreamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailreamountwithoutdepositamount($detailvatamount0Detailreamountwithoutdepositamount = null)
    {
        $this->detailvatamount0Detailreamountwithoutdepositamount = $detailvatamount0Detailreamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount0Detailreamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailreamountwithoutdepositamount()
    {
        return $this->detailvatamount0Detailreamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount1Detailvatid.
     *
     * @param string|null $detailvatamount1Detailvatid
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailvatid($detailvatamount1Detailvatid = null)
    {
        $this->detailvatamount1Detailvatid = $detailvatamount1Detailvatid;

        return $this;
    }

    /**
     * Get detailvatamount1Detailvatid.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailvatid()
    {
        return $this->detailvatamount1Detailvatid;
    }

    /**
     * Set detailvatamount1Detailvatrate.
     *
     * @param string|null $detailvatamount1Detailvatrate
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailvatrate($detailvatamount1Detailvatrate = null)
    {
        $this->detailvatamount1Detailvatrate = $detailvatamount1Detailvatrate;

        return $this;
    }

    /**
     * Get detailvatamount1Detailvatrate.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailvatrate()
    {
        return $this->detailvatamount1Detailvatrate;
    }

    /**
     * Set detailvatamount1Detailamountvatexcluded.
     *
     * @param string|null $detailvatamount1Detailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailamountvatexcluded($detailvatamount1Detailamountvatexcluded = null)
    {
        $this->detailvatamount1Detailamountvatexcluded = $detailvatamount1Detailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount1Detailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailamountvatexcluded()
    {
        return $this->detailvatamount1Detailamountvatexcluded;
    }

    /**
     * Set detailvatamount1Detailvatamount.
     *
     * @param string|null $detailvatamount1Detailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailvatamount($detailvatamount1Detailvatamount = null)
    {
        $this->detailvatamount1Detailvatamount = $detailvatamount1Detailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Detailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailvatamount()
    {
        return $this->detailvatamount1Detailvatamount;
    }

    /**
     * Set detailvatamount1Detailamountvatincluded.
     *
     * @param string|null $detailvatamount1Detailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailamountvatincluded($detailvatamount1Detailamountvatincluded = null)
    {
        $this->detailvatamount1Detailamountvatincluded = $detailvatamount1Detailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount1Detailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailamountvatincluded()
    {
        return $this->detailvatamount1Detailamountvatincluded;
    }

    /**
     * Set detailvatamount1Detaildepositvatamount.
     *
     * @param string|null $detailvatamount1Detaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detaildepositvatamount($detailvatamount1Detaildepositvatamount = null)
    {
        $this->detailvatamount1Detaildepositvatamount = $detailvatamount1Detaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Detaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detaildepositvatamount()
    {
        return $this->detailvatamount1Detaildepositvatamount;
    }

    /**
     * Set detailvatamount1Detailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount1Detailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Detailvatamountwithoutdepositamount($detailvatamount1Detailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount1Detailvatamountwithoutdepositamount = $detailvatamount1Detailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount1Detailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Detailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount1Detailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount1Ecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount1Ecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Ecotaxamountvatexcluded($detailvatamount1Ecotaxamountvatexcluded = null)
    {
        $this->detailvatamount1Ecotaxamountvatexcluded = $detailvatamount1Ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount1Ecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Ecotaxamountvatexcluded()
    {
        return $this->detailvatamount1Ecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount1Ecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount1Ecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Ecotaxamountvatincluded($detailvatamount1Ecotaxamountvatincluded = null)
    {
        $this->detailvatamount1Ecotaxamountvatincluded = $detailvatamount1Ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount1Ecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount1Ecotaxamountvatincluded()
    {
        return $this->detailvatamount1Ecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount1Ecotaxvatamount.
     *
     * @param string|null $detailvatamount1Ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Ecotaxvatamount($detailvatamount1Ecotaxvatamount = null)
    {
        $this->detailvatamount1Ecotaxvatamount = $detailvatamount1Ecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount1Ecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount1Ecotaxvatamount()
    {
        return $this->detailvatamount1Ecotaxvatamount;
    }

    /**
     * Set detailvatamount1Vatamountondebit.
     *
     * @param string|null $detailvatamount1Vatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Vatamountondebit($detailvatamount1Vatamountondebit = null)
    {
        $this->detailvatamount1Vatamountondebit = $detailvatamount1Vatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount1Vatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount1Vatamountondebit()
    {
        return $this->detailvatamount1Vatamountondebit;
    }

    /**
     * Set detailvatamount1Vatamountoncollection.
     *
     * @param string|null $detailvatamount1Vatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount1Vatamountoncollection($detailvatamount1Vatamountoncollection = null)
    {
        $this->detailvatamount1Vatamountoncollection = $detailvatamount1Vatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount1Vatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount1Vatamountoncollection()
    {
        return $this->detailvatamount1Vatamountoncollection;
    }

    /**
     * Set detailvatamount0Detailvatid.
     *
     * @param string|null $detailvatamount0Detailvatid
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailvatid($detailvatamount0Detailvatid = null)
    {
        $this->detailvatamount0Detailvatid = $detailvatamount0Detailvatid;

        return $this;
    }

    /**
     * Get detailvatamount0Detailvatid.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailvatid()
    {
        return $this->detailvatamount0Detailvatid;
    }

    /**
     * Set detailvatamount0Detailvatrate.
     *
     * @param string|null $detailvatamount0Detailvatrate
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailvatrate($detailvatamount0Detailvatrate = null)
    {
        $this->detailvatamount0Detailvatrate = $detailvatamount0Detailvatrate;

        return $this;
    }

    /**
     * Get detailvatamount0Detailvatrate.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailvatrate()
    {
        return $this->detailvatamount0Detailvatrate;
    }

    /**
     * Set detailvatamount0Detailamountvatexcluded.
     *
     * @param string|null $detailvatamount0Detailamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailamountvatexcluded($detailvatamount0Detailamountvatexcluded = null)
    {
        $this->detailvatamount0Detailamountvatexcluded = $detailvatamount0Detailamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount0Detailamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailamountvatexcluded()
    {
        return $this->detailvatamount0Detailamountvatexcluded;
    }

    /**
     * Set detailvatamount0Detailvatamount.
     *
     * @param string|null $detailvatamount0Detailvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailvatamount($detailvatamount0Detailvatamount = null)
    {
        $this->detailvatamount0Detailvatamount = $detailvatamount0Detailvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Detailvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailvatamount()
    {
        return $this->detailvatamount0Detailvatamount;
    }

    /**
     * Set detailvatamount0Detailamountvatincluded.
     *
     * @param string|null $detailvatamount0Detailamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailamountvatincluded($detailvatamount0Detailamountvatincluded = null)
    {
        $this->detailvatamount0Detailamountvatincluded = $detailvatamount0Detailamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount0Detailamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailamountvatincluded()
    {
        return $this->detailvatamount0Detailamountvatincluded;
    }

    /**
     * Set detailvatamount0Detaildepositvatamount.
     *
     * @param string|null $detailvatamount0Detaildepositvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detaildepositvatamount($detailvatamount0Detaildepositvatamount = null)
    {
        $this->detailvatamount0Detaildepositvatamount = $detailvatamount0Detaildepositvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Detaildepositvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detaildepositvatamount()
    {
        return $this->detailvatamount0Detaildepositvatamount;
    }

    /**
     * Set detailvatamount0Detailvatamountwithoutdepositamount.
     *
     * @param string|null $detailvatamount0Detailvatamountwithoutdepositamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Detailvatamountwithoutdepositamount($detailvatamount0Detailvatamountwithoutdepositamount = null)
    {
        $this->detailvatamount0Detailvatamountwithoutdepositamount = $detailvatamount0Detailvatamountwithoutdepositamount;

        return $this;
    }

    /**
     * Get detailvatamount0Detailvatamountwithoutdepositamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Detailvatamountwithoutdepositamount()
    {
        return $this->detailvatamount0Detailvatamountwithoutdepositamount;
    }

    /**
     * Set detailvatamount0Ecotaxamountvatexcluded.
     *
     * @param string|null $detailvatamount0Ecotaxamountvatexcluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Ecotaxamountvatexcluded($detailvatamount0Ecotaxamountvatexcluded = null)
    {
        $this->detailvatamount0Ecotaxamountvatexcluded = $detailvatamount0Ecotaxamountvatexcluded;

        return $this;
    }

    /**
     * Get detailvatamount0Ecotaxamountvatexcluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Ecotaxamountvatexcluded()
    {
        return $this->detailvatamount0Ecotaxamountvatexcluded;
    }

    /**
     * Set detailvatamount0Ecotaxamountvatincluded.
     *
     * @param string|null $detailvatamount0Ecotaxamountvatincluded
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Ecotaxamountvatincluded($detailvatamount0Ecotaxamountvatincluded = null)
    {
        $this->detailvatamount0Ecotaxamountvatincluded = $detailvatamount0Ecotaxamountvatincluded;

        return $this;
    }

    /**
     * Get detailvatamount0Ecotaxamountvatincluded.
     *
     * @return string|null
     */
    public function getDetailvatamount0Ecotaxamountvatincluded()
    {
        return $this->detailvatamount0Ecotaxamountvatincluded;
    }

    /**
     * Set detailvatamount0Ecotaxvatamount.
     *
     * @param string|null $detailvatamount0Ecotaxvatamount
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Ecotaxvatamount($detailvatamount0Ecotaxvatamount = null)
    {
        $this->detailvatamount0Ecotaxvatamount = $detailvatamount0Ecotaxvatamount;

        return $this;
    }

    /**
     * Get detailvatamount0Ecotaxvatamount.
     *
     * @return string|null
     */
    public function getDetailvatamount0Ecotaxvatamount()
    {
        return $this->detailvatamount0Ecotaxvatamount;
    }

    /**
     * Set detailvatamount0Vatamountondebit.
     *
     * @param string|null $detailvatamount0Vatamountondebit
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Vatamountondebit($detailvatamount0Vatamountondebit = null)
    {
        $this->detailvatamount0Vatamountondebit = $detailvatamount0Vatamountondebit;

        return $this;
    }

    /**
     * Get detailvatamount0Vatamountondebit.
     *
     * @return string|null
     */
    public function getDetailvatamount0Vatamountondebit()
    {
        return $this->detailvatamount0Vatamountondebit;
    }

    /**
     * Set detailvatamount0Vatamountoncollection.
     *
     * @param string|null $detailvatamount0Vatamountoncollection
     *
     * @return Saledocument
     */
    public function setDetailvatamount0Vatamountoncollection($detailvatamount0Vatamountoncollection = null)
    {
        $this->detailvatamount0Vatamountoncollection = $detailvatamount0Vatamountoncollection;

        return $this;
    }

    /**
     * Get detailvatamount0Vatamountoncollection.
     *
     * @return string|null
     */
    public function getDetailvatamount0Vatamountoncollection()
    {
        return $this->detailvatamount0Vatamountoncollection;
    }

    /**
     * Set shippingid.
     *
     * @param string|null $shippingid
     *
     * @return Saledocument
     */
    public function setShippingid($shippingid = null)
    {
        $this->shippingid = $shippingid;

        return $this;
    }

    /**
     * Get shippingid.
     *
     * @return string|null
     */
    public function getShippingid()
    {
        return $this->shippingid;
    }

    /**
     * Set deliveryaddressDescription.
     *
     * @param string|null $deliveryaddressDescription
     *
     * @return Saledocument
     */
    public function setDeliveryaddressDescription($deliveryaddressDescription = null)
    {
        $this->deliveryaddressDescription = $deliveryaddressDescription;

        return $this;
    }

    /**
     * Get deliveryaddressDescription.
     *
     * @return string|null
     */
    public function getDeliveryaddressDescription()
    {
        return $this->deliveryaddressDescription;
    }

    /**
     * Set deliveryaddressCivility.
     *
     * @param string|null $deliveryaddressCivility
     *
     * @return Saledocument
     */
    public function setDeliveryaddressCivility($deliveryaddressCivility = null)
    {
        $this->deliveryaddressCivility = $deliveryaddressCivility;

        return $this;
    }

    /**
     * Get deliveryaddressCivility.
     *
     * @return string|null
     */
    public function getDeliveryaddressCivility()
    {
        return $this->deliveryaddressCivility;
    }

    /**
     * Set deliveryaddressThirdname.
     *
     * @param string|null $deliveryaddressThirdname
     *
     * @return Saledocument
     */
    public function setDeliveryaddressThirdname($deliveryaddressThirdname = null)
    {
        $this->deliveryaddressThirdname = $deliveryaddressThirdname;

        return $this;
    }

    /**
     * Get deliveryaddressThirdname.
     *
     * @return string|null
     */
    public function getDeliveryaddressThirdname()
    {
        return $this->deliveryaddressThirdname;
    }

    /**
     * Set settlementmodeid.
     *
     * @param string|null $settlementmodeid
     *
     * @return Saledocument
     */
    public function setSettlementmodeid($settlementmodeid = null)
    {
        $this->settlementmodeid = $settlementmodeid;

        return $this;
    }

    /**
     * Get settlementmodeid.
     *
     * @return string|null
     */
    public function getSettlementmodeid()
    {
        return $this->settlementmodeid;
    }

    /**
     * Set validationstate.
     *
     * @param int|null $validationstate
     *
     * @return Saledocument
     */
    public function setValidationstate($validationstate = null)
    {
        $this->validationstate = $validationstate;

        return $this;
    }

    /**
     * Get validationstate.
     *
     * @return int|null
     */
    public function getValidationstate()
    {
        return $this->validationstate;
    }

    /**
     * Set documentstate.
     *
     * @param int|null $documentstate
     *
     * @return Saledocument
     */
    public function setDocumentstate($documentstate = null)
    {
        $this->documentstate = $documentstate;

        return $this;
    }

    /**
     * Get documentstate.
     *
     * @return int|null
     */
    public function getDocumentstate()
    {
        return $this->documentstate;
    }

    /**
     * Set validitydate.
     *
     * @param \DateTime|null $validitydate
     *
     * @return Saledocument
     */
    public function setValiditydate($validitydate = null)
    {
        $this->validitydate = $validitydate;

        return $this;
    }

    /**
     * Get validitydate.
     *
     * @return \DateTime|null
     */
    public function getValiditydate()
    {
        return $this->validitydate;
    }

    /**
     * Set deliverydate.
     *
     * @param \DateTime|null $deliverydate
     *
     * @return Saledocument
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
     * @return Saledocument
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
     * Set deliveryaddressWebsite.
     *
     * @param string|null $deliveryaddressWebsite
     *
     * @return Saledocument
     */
    public function setDeliveryaddressWebsite($deliveryaddressWebsite = null)
    {
        $this->deliveryaddressWebsite = $deliveryaddressWebsite;

        return $this;
    }

    /**
     * Get deliveryaddressWebsite.
     *
     * @return string|null
     */
    public function getDeliveryaddressWebsite()
    {
        return $this->deliveryaddressWebsite;
    }

    /**
     * Set deliveryaddressLongitude.
     *
     * @param string|null $deliveryaddressLongitude
     *
     * @return Saledocument
     */
    public function setDeliveryaddressLongitude($deliveryaddressLongitude = null)
    {
        $this->deliveryaddressLongitude = $deliveryaddressLongitude;

        return $this;
    }

    /**
     * Get deliveryaddressLongitude.
     *
     * @return string|null
     */
    public function getDeliveryaddressLongitude()
    {
        return $this->deliveryaddressLongitude;
    }

    /**
     * Set deliveryaddressLatitude.
     *
     * @param string|null $deliveryaddressLatitude
     *
     * @return Saledocument
     */
    public function setDeliveryaddressLatitude($deliveryaddressLatitude = null)
    {
        $this->deliveryaddressLatitude = $deliveryaddressLatitude;

        return $this;
    }

    /**
     * Get deliveryaddressLatitude.
     *
     * @return string|null
     */
    public function getDeliveryaddressLatitude()
    {
        return $this->deliveryaddressLatitude;
    }

    /**
     * Set deliverycontactCivility.
     *
     * @param string|null $deliverycontactCivility
     *
     * @return Saledocument
     */
    public function setDeliverycontactCivility($deliverycontactCivility = null)
    {
        $this->deliverycontactCivility = $deliverycontactCivility;

        return $this;
    }

    /**
     * Get deliverycontactCivility.
     *
     * @return string|null
     */
    public function getDeliverycontactCivility()
    {
        return $this->deliverycontactCivility;
    }

    /**
     * Set deliverycontactName.
     *
     * @param string|null $deliverycontactName
     *
     * @return Saledocument
     */
    public function setDeliverycontactName($deliverycontactName = null)
    {
        $this->deliverycontactName = $deliverycontactName;

        return $this;
    }

    /**
     * Get deliverycontactName.
     *
     * @return string|null
     */
    public function getDeliverycontactName()
    {
        return $this->deliverycontactName;
    }

    /**
     * Set deliverycontactFirstname.
     *
     * @param string|null $deliverycontactFirstname
     *
     * @return Saledocument
     */
    public function setDeliverycontactFirstname($deliverycontactFirstname = null)
    {
        $this->deliverycontactFirstname = $deliverycontactFirstname;

        return $this;
    }

    /**
     * Get deliverycontactFirstname.
     *
     * @return string|null
     */
    public function getDeliverycontactFirstname()
    {
        return $this->deliverycontactFirstname;
    }

    /**
     * Set deliverycontactPhone.
     *
     * @param string|null $deliverycontactPhone
     *
     * @return Saledocument
     */
    public function setDeliverycontactPhone($deliverycontactPhone = null)
    {
        $this->deliverycontactPhone = $deliverycontactPhone;

        return $this;
    }

    /**
     * Get deliverycontactPhone.
     *
     * @return string|null
     */
    public function getDeliverycontactPhone()
    {
        return $this->deliverycontactPhone;
    }

    /**
     * Set deliverycontactCellphone.
     *
     * @param string|null $deliverycontactCellphone
     *
     * @return Saledocument
     */
    public function setDeliverycontactCellphone($deliverycontactCellphone = null)
    {
        $this->deliverycontactCellphone = $deliverycontactCellphone;

        return $this;
    }

    /**
     * Get deliverycontactCellphone.
     *
     * @return string|null
     */
    public function getDeliverycontactCellphone()
    {
        return $this->deliverycontactCellphone;
    }

    /**
     * Set deliverycontactFax.
     *
     * @param string|null $deliverycontactFax
     *
     * @return Saledocument
     */
    public function setDeliverycontactFax($deliverycontactFax = null)
    {
        $this->deliverycontactFax = $deliverycontactFax;

        return $this;
    }

    /**
     * Get deliverycontactFax.
     *
     * @return string|null
     */
    public function getDeliverycontactFax()
    {
        return $this->deliverycontactFax;
    }

    /**
     * Set deliverycontactEmail.
     *
     * @param string|null $deliverycontactEmail
     *
     * @return Saledocument
     */
    public function setDeliverycontactEmail($deliverycontactEmail = null)
    {
        $this->deliverycontactEmail = $deliverycontactEmail;

        return $this;
    }

    /**
     * Get deliverycontactEmail.
     *
     * @return string|null
     */
    public function getDeliverycontactEmail()
    {
        return $this->deliverycontactEmail;
    }

    /**
     * Set deliverycontactFunction.
     *
     * @param string|null $deliverycontactFunction
     *
     * @return Saledocument
     */
    public function setDeliverycontactFunction($deliverycontactFunction = null)
    {
        $this->deliverycontactFunction = $deliverycontactFunction;

        return $this;
    }

    /**
     * Get deliverycontactFunction.
     *
     * @return string|null
     */
    public function getDeliverycontactFunction()
    {
        return $this->deliverycontactFunction;
    }

    /**
     * Set deliverycontactDepartment.
     *
     * @param string|null $deliverycontactDepartment
     *
     * @return Saledocument
     */
    public function setDeliverycontactDepartment($deliverycontactDepartment = null)
    {
        $this->deliverycontactDepartment = $deliverycontactDepartment;

        return $this;
    }

    /**
     * Get deliverycontactDepartment.
     *
     * @return string|null
     */
    public function getDeliverycontactDepartment()
    {
        return $this->deliverycontactDepartment;
    }

    /**
     * Set deliveryaddressState.
     *
     * @param string|null $deliveryaddressState
     *
     * @return Saledocument
     */
    public function setDeliveryaddressState($deliveryaddressState = null)
    {
        $this->deliveryaddressState = $deliveryaddressState;

        return $this;
    }

    /**
     * Get deliveryaddressState.
     *
     * @return string|null
     */
    public function getDeliveryaddressState()
    {
        return $this->deliveryaddressState;
    }

    /**
     * Set invoicingaddressState.
     *
     * @param string|null $invoicingaddressState
     *
     * @return Saledocument
     */
    public function setInvoicingaddressState($invoicingaddressState = null)
    {
        $this->invoicingaddressState = $invoicingaddressState;

        return $this;
    }

    /**
     * Get invoicingaddressState.
     *
     * @return string|null
     */
    public function getInvoicingaddressState()
    {
        return $this->invoicingaddressState;
    }

    /**
     * Set invoicingaddressDescription.
     *
     * @param string|null $invoicingaddressDescription
     *
     * @return Saledocument
     */
    public function setInvoicingaddressDescription($invoicingaddressDescription = null)
    {
        $this->invoicingaddressDescription = $invoicingaddressDescription;

        return $this;
    }

    /**
     * Get invoicingaddressDescription.
     *
     * @return string|null
     */
    public function getInvoicingaddressDescription()
    {
        return $this->invoicingaddressDescription;
    }

    /**
     * Set invoicingaddressCivility.
     *
     * @param string|null $invoicingaddressCivility
     *
     * @return Saledocument
     */
    public function setInvoicingaddressCivility($invoicingaddressCivility = null)
    {
        $this->invoicingaddressCivility = $invoicingaddressCivility;

        return $this;
    }

    /**
     * Get invoicingaddressCivility.
     *
     * @return string|null
     */
    public function getInvoicingaddressCivility()
    {
        return $this->invoicingaddressCivility;
    }

    /**
     * Set invoicingaddressThirdname.
     *
     * @param string|null $invoicingaddressThirdname
     *
     * @return Saledocument
     */
    public function setInvoicingaddressThirdname($invoicingaddressThirdname = null)
    {
        $this->invoicingaddressThirdname = $invoicingaddressThirdname;

        return $this;
    }

    /**
     * Get invoicingaddressThirdname.
     *
     * @return string|null
     */
    public function getInvoicingaddressThirdname()
    {
        return $this->invoicingaddressThirdname;
    }

    /**
     * Set invoicingaddressWebsite.
     *
     * @param string|null $invoicingaddressWebsite
     *
     * @return Saledocument
     */
    public function setInvoicingaddressWebsite($invoicingaddressWebsite = null)
    {
        $this->invoicingaddressWebsite = $invoicingaddressWebsite;

        return $this;
    }

    /**
     * Get invoicingaddressWebsite.
     *
     * @return string|null
     */
    public function getInvoicingaddressWebsite()
    {
        return $this->invoicingaddressWebsite;
    }

    /**
     * Set invoicingaddressLongitude.
     *
     * @param string|null $invoicingaddressLongitude
     *
     * @return Saledocument
     */
    public function setInvoicingaddressLongitude($invoicingaddressLongitude = null)
    {
        $this->invoicingaddressLongitude = $invoicingaddressLongitude;

        return $this;
    }

    /**
     * Get invoicingaddressLongitude.
     *
     * @return string|null
     */
    public function getInvoicingaddressLongitude()
    {
        return $this->invoicingaddressLongitude;
    }

    /**
     * Set invoicingaddressLatitude.
     *
     * @param string|null $invoicingaddressLatitude
     *
     * @return Saledocument
     */
    public function setInvoicingaddressLatitude($invoicingaddressLatitude = null)
    {
        $this->invoicingaddressLatitude = $invoicingaddressLatitude;

        return $this;
    }

    /**
     * Get invoicingaddressLatitude.
     *
     * @return string|null
     */
    public function getInvoicingaddressLatitude()
    {
        return $this->invoicingaddressLatitude;
    }

    /**
     * Set invoicingcontactCivility.
     *
     * @param string|null $invoicingcontactCivility
     *
     * @return Saledocument
     */
    public function setInvoicingcontactCivility($invoicingcontactCivility = null)
    {
        $this->invoicingcontactCivility = $invoicingcontactCivility;

        return $this;
    }

    /**
     * Get invoicingcontactCivility.
     *
     * @return string|null
     */
    public function getInvoicingcontactCivility()
    {
        return $this->invoicingcontactCivility;
    }

    /**
     * Set invoicingcontactName.
     *
     * @param string|null $invoicingcontactName
     *
     * @return Saledocument
     */
    public function setInvoicingcontactName($invoicingcontactName = null)
    {
        $this->invoicingcontactName = $invoicingcontactName;

        return $this;
    }

    /**
     * Get invoicingcontactName.
     *
     * @return string|null
     */
    public function getInvoicingcontactName()
    {
        return $this->invoicingcontactName;
    }

    /**
     * Set invoicingcontactFirstname.
     *
     * @param string|null $invoicingcontactFirstname
     *
     * @return Saledocument
     */
    public function setInvoicingcontactFirstname($invoicingcontactFirstname = null)
    {
        $this->invoicingcontactFirstname = $invoicingcontactFirstname;

        return $this;
    }

    /**
     * Get invoicingcontactFirstname.
     *
     * @return string|null
     */
    public function getInvoicingcontactFirstname()
    {
        return $this->invoicingcontactFirstname;
    }

    /**
     * Set invoicingcontactPhone.
     *
     * @param string|null $invoicingcontactPhone
     *
     * @return Saledocument
     */
    public function setInvoicingcontactPhone($invoicingcontactPhone = null)
    {
        $this->invoicingcontactPhone = $invoicingcontactPhone;

        return $this;
    }

    /**
     * Get invoicingcontactPhone.
     *
     * @return string|null
     */
    public function getInvoicingcontactPhone()
    {
        return $this->invoicingcontactPhone;
    }

    /**
     * Set invoicingcontactCellphone.
     *
     * @param string|null $invoicingcontactCellphone
     *
     * @return Saledocument
     */
    public function setInvoicingcontactCellphone($invoicingcontactCellphone = null)
    {
        $this->invoicingcontactCellphone = $invoicingcontactCellphone;

        return $this;
    }

    /**
     * Get invoicingcontactCellphone.
     *
     * @return string|null
     */
    public function getInvoicingcontactCellphone()
    {
        return $this->invoicingcontactCellphone;
    }

    /**
     * Set invoicingcontactFax.
     *
     * @param string|null $invoicingcontactFax
     *
     * @return Saledocument
     */
    public function setInvoicingcontactFax($invoicingcontactFax = null)
    {
        $this->invoicingcontactFax = $invoicingcontactFax;

        return $this;
    }

    /**
     * Get invoicingcontactFax.
     *
     * @return string|null
     */
    public function getInvoicingcontactFax()
    {
        return $this->invoicingcontactFax;
    }

    /**
     * Set invoicingcontactEmail.
     *
     * @param string|null $invoicingcontactEmail
     *
     * @return Saledocument
     */
    public function setInvoicingcontactEmail($invoicingcontactEmail = null)
    {
        $this->invoicingcontactEmail = $invoicingcontactEmail;

        return $this;
    }

    /**
     * Get invoicingcontactEmail.
     *
     * @return string|null
     */
    public function getInvoicingcontactEmail()
    {
        return $this->invoicingcontactEmail;
    }

    /**
     * Set invoicingcontactFunction.
     *
     * @param string|null $invoicingcontactFunction
     *
     * @return Saledocument
     */
    public function setInvoicingcontactFunction($invoicingcontactFunction = null)
    {
        $this->invoicingcontactFunction = $invoicingcontactFunction;

        return $this;
    }

    /**
     * Get invoicingcontactFunction.
     *
     * @return string|null
     */
    public function getInvoicingcontactFunction()
    {
        return $this->invoicingcontactFunction;
    }

    /**
     * Set invoicingcontactDepartment.
     *
     * @param string|null $invoicingcontactDepartment
     *
     * @return Saledocument
     */
    public function setInvoicingcontactDepartment($invoicingcontactDepartment = null)
    {
        $this->invoicingcontactDepartment = $invoicingcontactDepartment;

        return $this;
    }

    /**
     * Get invoicingcontactDepartment.
     *
     * @return string|null
     */
    public function getInvoicingcontactDepartment()
    {
        return $this->invoicingcontactDepartment;
    }

    /**
     * Set deliveryaddressAddress1.
     *
     * @param string|null $deliveryaddressAddress1
     *
     * @return Saledocument
     */
    public function setDeliveryaddressAddress1($deliveryaddressAddress1 = null)
    {
        $this->deliveryaddressAddress1 = $deliveryaddressAddress1;

        return $this;
    }

    /**
     * Get deliveryaddressAddress1.
     *
     * @return string|null
     */
    public function getDeliveryaddressAddress1()
    {
        return $this->deliveryaddressAddress1;
    }

    /**
     * Set deliveryaddressAddress2.
     *
     * @param string|null $deliveryaddressAddress2
     *
     * @return Saledocument
     */
    public function setDeliveryaddressAddress2($deliveryaddressAddress2 = null)
    {
        $this->deliveryaddressAddress2 = $deliveryaddressAddress2;

        return $this;
    }

    /**
     * Get deliveryaddressAddress2.
     *
     * @return string|null
     */
    public function getDeliveryaddressAddress2()
    {
        return $this->deliveryaddressAddress2;
    }

    /**
     * Set deliveryaddressAddress3.
     *
     * @param string|null $deliveryaddressAddress3
     *
     * @return Saledocument
     */
    public function setDeliveryaddressAddress3($deliveryaddressAddress3 = null)
    {
        $this->deliveryaddressAddress3 = $deliveryaddressAddress3;

        return $this;
    }

    /**
     * Get deliveryaddressAddress3.
     *
     * @return string|null
     */
    public function getDeliveryaddressAddress3()
    {
        return $this->deliveryaddressAddress3;
    }

    /**
     * Set deliveryaddressAddress4.
     *
     * @param string|null $deliveryaddressAddress4
     *
     * @return Saledocument
     */
    public function setDeliveryaddressAddress4($deliveryaddressAddress4 = null)
    {
        $this->deliveryaddressAddress4 = $deliveryaddressAddress4;

        return $this;
    }

    /**
     * Get deliveryaddressAddress4.
     *
     * @return string|null
     */
    public function getDeliveryaddressAddress4()
    {
        return $this->deliveryaddressAddress4;
    }

    /**
     * Set deliveryaddressZipcode.
     *
     * @param string|null $deliveryaddressZipcode
     *
     * @return Saledocument
     */
    public function setDeliveryaddressZipcode($deliveryaddressZipcode = null)
    {
        $this->deliveryaddressZipcode = $deliveryaddressZipcode;

        return $this;
    }

    /**
     * Get deliveryaddressZipcode.
     *
     * @return string|null
     */
    public function getDeliveryaddressZipcode()
    {
        return $this->deliveryaddressZipcode;
    }

    /**
     * Set invoicingaddressid.
     *
     * @param string|null $invoicingaddressid
     *
     * @return Saledocument
     */
    public function setInvoicingaddressid($invoicingaddressid = null)
    {
        $this->invoicingaddressid = $invoicingaddressid;

        return $this;
    }

    /**
     * Get invoicingaddressid.
     *
     * @return string|null
     */
    public function getInvoicingaddressid()
    {
        return $this->invoicingaddressid;
    }

    /**
     * Set invoicingcontactid.
     *
     * @param string|null $invoicingcontactid
     *
     * @return Saledocument
     */
    public function setInvoicingcontactid($invoicingcontactid = null)
    {
        $this->invoicingcontactid = $invoicingcontactid;

        return $this;
    }

    /**
     * Get invoicingcontactid.
     *
     * @return string|null
     */
    public function getInvoicingcontactid()
    {
        return $this->invoicingcontactid;
    }

    /**
     * Set deliveryaddressid.
     *
     * @param string|null $deliveryaddressid
     *
     * @return Saledocument
     */
    public function setDeliveryaddressid($deliveryaddressid = null)
    {
        $this->deliveryaddressid = $deliveryaddressid;

        return $this;
    }

    /**
     * Get deliveryaddressid.
     *
     * @return string|null
     */
    public function getDeliveryaddressid()
    {
        return $this->deliveryaddressid;
    }

    /**
     * Set deliverycontactid.
     *
     * @param string|null $deliverycontactid
     *
     * @return Saledocument
     */
    public function setDeliverycontactid($deliverycontactid = null)
    {
        $this->deliverycontactid = $deliverycontactid;

        return $this;
    }

    /**
     * Get deliverycontactid.
     *
     * @return string|null
     */
    public function getDeliverycontactid()
    {
        return $this->deliverycontactid;
    }

    /**
     * Set invoicingaddressAddress1.
     *
     * @param string|null $invoicingaddressAddress1
     *
     * @return Saledocument
     */
    public function setInvoicingaddressAddress1($invoicingaddressAddress1 = null)
    {
        $this->invoicingaddressAddress1 = $invoicingaddressAddress1;

        return $this;
    }

    /**
     * Get invoicingaddressAddress1.
     *
     * @return string|null
     */
    public function getInvoicingaddressAddress1()
    {
        return $this->invoicingaddressAddress1;
    }

    /**
     * Set invoicingaddressAddress2.
     *
     * @param string|null $invoicingaddressAddress2
     *
     * @return Saledocument
     */
    public function setInvoicingaddressAddress2($invoicingaddressAddress2 = null)
    {
        $this->invoicingaddressAddress2 = $invoicingaddressAddress2;

        return $this;
    }

    /**
     * Get invoicingaddressAddress2.
     *
     * @return string|null
     */
    public function getInvoicingaddressAddress2()
    {
        return $this->invoicingaddressAddress2;
    }

    /**
     * Set invoicingaddressAddress3.
     *
     * @param string|null $invoicingaddressAddress3
     *
     * @return Saledocument
     */
    public function setInvoicingaddressAddress3($invoicingaddressAddress3 = null)
    {
        $this->invoicingaddressAddress3 = $invoicingaddressAddress3;

        return $this;
    }

    /**
     * Get invoicingaddressAddress3.
     *
     * @return string|null
     */
    public function getInvoicingaddressAddress3()
    {
        return $this->invoicingaddressAddress3;
    }

    /**
     * Set invoicingaddressAddress4.
     *
     * @param string|null $invoicingaddressAddress4
     *
     * @return Saledocument
     */
    public function setInvoicingaddressAddress4($invoicingaddressAddress4 = null)
    {
        $this->invoicingaddressAddress4 = $invoicingaddressAddress4;

        return $this;
    }

    /**
     * Get invoicingaddressAddress4.
     *
     * @return string|null
     */
    public function getInvoicingaddressAddress4()
    {
        return $this->invoicingaddressAddress4;
    }

    /**
     * Set invoicingaddressZipcode.
     *
     * @param string|null $invoicingaddressZipcode
     *
     * @return Saledocument
     */
    public function setInvoicingaddressZipcode($invoicingaddressZipcode = null)
    {
        $this->invoicingaddressZipcode = $invoicingaddressZipcode;

        return $this;
    }

    /**
     * Get invoicingaddressZipcode.
     *
     * @return string|null
     */
    public function getInvoicingaddressZipcode()
    {
        return $this->invoicingaddressZipcode;
    }

    /**
     * Set reference.
     *
     * @param string|null $reference
     *
     * @return Saledocument
     */
    public function setReference($reference = null)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set recoveredfrom.
     *
     * @param int|null $recoveredfrom
     *
     * @return Saledocument
     */
    public function setRecoveredfrom($recoveredfrom = null)
    {
        $this->recoveredfrom = $recoveredfrom;

        return $this;
    }

    /**
     * Get recoveredfrom.
     *
     * @return int|null
     */
    public function getRecoveredfrom()
    {
        return $this->recoveredfrom;
    }

    /**
     * Set modifiedsincerecovery.
     *
     * @param bool|null $modifiedsincerecovery
     *
     * @return Saledocument
     */
    public function setModifiedsincerecovery($modifiedsincerecovery = null)
    {
        $this->modifiedsincerecovery = $modifiedsincerecovery;

        return $this;
    }

    /**
     * Get modifiedsincerecovery.
     *
     * @return bool|null
     */
    public function getModifiedsincerecovery()
    {
        return $this->modifiedsincerecovery;
    }

    /**
     * Set associatedinvoiceid.
     *
     * @param string|null $associatedinvoiceid
     *
     * @return Saledocument
     */
    public function setAssociatedinvoiceid($associatedinvoiceid = null)
    {
        $this->associatedinvoiceid = $associatedinvoiceid;

        return $this;
    }

    /**
     * Get associatedinvoiceid.
     *
     * @return string|null
     */
    public function getAssociatedinvoiceid()
    {
        return $this->associatedinvoiceid;
    }

    /**
     * Set associateddeliveryorderid.
     *
     * @param string|null $associateddeliveryorderid
     *
     * @return Saledocument
     */
    public function setAssociateddeliveryorderid($associateddeliveryorderid = null)
    {
        $this->associateddeliveryorderid = $associateddeliveryorderid;

        return $this;
    }

    /**
     * Get associateddeliveryorderid.
     *
     * @return string|null
     */
    public function getAssociateddeliveryorderid()
    {
        return $this->associateddeliveryorderid;
    }

    /**
     * Set associatedorderid.
     *
     * @param string|null $associatedorderid
     *
     * @return Saledocument
     */
    public function setAssociatedorderid($associatedorderid = null)
    {
        $this->associatedorderid = $associatedorderid;

        return $this;
    }

    /**
     * Get associatedorderid.
     *
     * @return string|null
     */
    public function getAssociatedorderid()
    {
        return $this->associatedorderid;
    }

    /**
     * Set transfereddocumentid.
     *
     * @param string|null $transfereddocumentid
     *
     * @return Saledocument
     */
    public function setTransfereddocumentid($transfereddocumentid = null)
    {
        $this->transfereddocumentid = $transfereddocumentid;

        return $this;
    }

    /**
     * Get transfereddocumentid.
     *
     * @return string|null
     */
    public function getTransfereddocumentid()
    {
        return $this->transfereddocumentid;
    }

    /**
     * Set storehouseid.
     *
     * @param string|null $storehouseid
     *
     * @return Saledocument
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
     * Set syscreateddate.
     *
     * @param \DateTime|null $syscreateddate
     *
     * @return Saledocument
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
     * @return Saledocument
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
     * @return Saledocument
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
     * @return Saledocument
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
     * @return Saledocument
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
     * @return Saledocument
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
     * Set fixedshippingamount.
     *
     * @param bool $fixedshippingamount
     *
     * @return Saledocument
     */
    public function setFixedshippingamount($fixedshippingamount)
    {
        $this->fixedshippingamount = $fixedshippingamount;

        return $this;
    }

    /**
     * Get fixedshippingamount.
     *
     * @return bool
     */
    public function getFixedshippingamount()
    {
        return $this->fixedshippingamount;
    }

    /**
     * Set deliveryaddresstype.
     *
     * @param int|null $deliveryaddresstype
     *
     * @return Saledocument
     */
    public function setDeliveryaddresstype($deliveryaddresstype = null)
    {
        $this->deliveryaddresstype = $deliveryaddresstype;

        return $this;
    }

    /**
     * Get deliveryaddresstype.
     *
     * @return int|null
     */
    public function getDeliveryaddresstype()
    {
        return $this->deliveryaddresstype;
    }

    /**
     * Set countermarforcedkonlines.
     *
     * @param bool $countermarforcedkonlines
     *
     * @return Saledocument
     */
    public function setCountermarforcedkonlines($countermarforcedkonlines)
    {
        $this->countermarforcedkonlines = $countermarforcedkonlines;

        return $this;
    }

    /**
     * Get countermarforcedkonlines.
     *
     * @return bool
     */
    public function getCountermarforcedkonlines()
    {
        return $this->countermarforcedkonlines;
    }

    /**
     * Set xxAtoosyncOrder.
     *
     * @param string|null $xxAtoosyncOrder
     *
     * @return Saledocument
     */
    public function setXxAtoosyncOrder($xxAtoosyncOrder = null)
    {
        $this->xxAtoosyncOrder = $xxAtoosyncOrder;

        return $this;
    }

    /**
     * Get xxAtoosyncOrder.
     *
     * @return string|null
     */
    public function getXxAtoosyncOrder()
    {
        return $this->xxAtoosyncOrder;
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
