<?php

namespace SqlSrvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="Customer", indexes={@ORM\Index(name="Customer_UniqueId_Index", columns={"UniqueId"})})
 * @ORM\Entity
 */
class Customer
{
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
     * @var int
     *
     * @ORM\Column(name="FinancialDiscountPaymentDelay", type="smallint", nullable=false)
     */
    private $financialdiscountpaymentdelay;

    /**
     * @var int
     *
     * @ORM\Column(name="ActiveState", type="smallint", nullable=false)
     */
    private $activestate;

    /**
     * @var bool
     *
     * @ORM\Column(name="MustRetrieveCommitmentsFromAccounting", type="boolean", nullable=false)
     */
    private $mustretrievecommitmentsfromaccounting;

    /**
     * @var string
     *
     * @ORM\Column(name="ThresholdBeforeExceedAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $thresholdbeforeexceedamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="PriceWithTaxBased", type="boolean", nullable=false)
     */
    private $pricewithtaxbased;

    /**
     * @var int
     *
     * @ORM\Column(name="DayNumberToFirstReminder", type="integer", nullable=false)
     */
    private $daynumbertofirstreminder;

    /**
     * @var int
     *
     * @ORM\Column(name="DayNumberToSecondReminder", type="integer", nullable=false)
     */
    private $daynumbertosecondreminder;

    /**
     * @var int
     *
     * @ORM\Column(name="DayNumberToThirdReminder", type="integer", nullable=false)
     */
    private $daynumbertothirdreminder;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsCustomerAccount", type="boolean", nullable=false)
     */
    private $iscustomeraccount;

    /**
     * @var int
     *
     * @ORM\Column(name="WebContactSendKind", type="smallint", nullable=false)
     */
    private $webcontactsendkind;

    /**
     * @var bool
     *
     * @ORM\Column(name="SubjectToRE", type="boolean", nullable=false)
     */
    private $subjecttore;

    /**
     * @var bool
     *
     * @ORM\Column(name="MustBeReminder", type="boolean", nullable=false)
     */
    private $mustbereminder;

    /**
     * @var string
     *
     * @ORM\Column(name="UniqueId", type="guid", nullable=false)
     */
    private $uniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="ThirdLanguage", type="string", length=3, nullable=false)
     */
    private $thirdlanguage;

    /**
     * @var bool
     *
     * @ORM\Column(name="DisallowOrderAssort", type="boolean", nullable=false)
     */
    private $disalloworderassort;

    /**
     * @var bool
     *
     * @ORM\Column(name="DisallowDeliveryAssort", type="boolean", nullable=false)
     */
    private $disallowdeliveryassort;

    /**
     * @var string
     *
     * @ORM\Column(name="InvoicingChargesAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $invoicingchargesamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="AutomaticStockBooking", type="boolean", nullable=false)
     */
    private $automaticstockbooking;

    /**
     * @var int
     *
     * @ORM\Column(name="CustomerToUseInCustomerProducts", type="smallint", nullable=false)
     */
    private $customertouseincustomerproducts;

    /**
     * @var bool
     *
     * @ORM\Column(name="SendReminderToPayerThird", type="boolean", nullable=false)
     */
    private $sendremindertopayerthird;

    /**
     * @var bool
     *
     * @ORM\Column(name="GenerateVCS", type="boolean", nullable=false)
     */
    private $generatevcs;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=60, nullable=false)
     */
    private $name;

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
     * @var bool
     *
     * @ORM\Column(name="MainDeliveryAddress_Npai", type="boolean", nullable=false)
     */
    private $maindeliveryaddressNpai;

    /**
     * @var bool
     *
     * @ORM\Column(name="MainInvoicingAddress_Npai", type="boolean", nullable=false)
     */
    private $maininvoicingaddressNpai;

    /**
     * @var bool
     *
     * @ORM\Column(name="MainInvoicingContact_NaturalPerson", type="boolean", nullable=false)
     */
    private $maininvoicingcontactNaturalperson;

    /**
     * @var bool
     *
     * @ORM\Column(name="MainInvoicingContact_OptIn", type="boolean", nullable=false)
     */
    private $maininvoicingcontactOptin;

    /**
     * @var bool
     *
     * @ORM\Column(name="MainDeliveryContact_NaturalPerson", type="boolean", nullable=false)
     */
    private $maindeliverycontactNaturalperson;

    /**
     * @var bool
     *
     * @ORM\Column(name="MainDeliveryContact_OptIn", type="boolean", nullable=false)
     */
    private $maindeliverycontactOptin;

    /**
     * @var bool
     *
     * @ORM\Column(name="NaturalPerson", type="boolean", nullable=false)
     */
    private $naturalperson;

    /**
     * @var string
     *
     * @ORM\Column(name="TerritorialityId", type="guid", nullable=false)
     */
    private $territorialityid;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $discountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="SecondDiscountRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $seconddiscountrate;

    /**
     * @var string
     *
     * @ORM\Column(name="AllowedAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $allowedamount;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrentAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $currentamount;

    /**
     * @var string
     *
     * @ORM\Column(name="ExtendedCurrentAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $extendedcurrentamount;

    /**
     * @var string
     *
     * @ORM\Column(name="InitialAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $initialamount;

    /**
     * @var string
     *
     * @ORM\Column(name="ExceedAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $exceedamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Accounts_Account", type="string", length=20, nullable=true)
     */
    private $accountsAccount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FirstInvoicingDate", type="datetime", nullable=true)
     */
    private $firstinvoicingdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SettlementModeId", type="string", length=6, nullable=true)
     */
    private $settlementmodeid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PaymentDate", type="smallint", nullable=true)
     */
    private $paymentdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PriceListCategoryId", type="string", length=8, nullable=true)
     */
    private $pricelistcategoryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Siren", type="string", length=20, nullable=true)
     */
    private $siren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NAF", type="string", length=8, nullable=true)
     */
    private $naf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FamilyId", type="string", length=10, nullable=true)
     */
    private $familyid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SubFamilyId", type="string", length=10, nullable=true)
     */
    private $subfamilyid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntracommunityVATNumber", type="string", length=20, nullable=true)
     */
    private $intracommunityvatnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_ExternalId_GoogleId", type="string", length=255, nullable=true)
     */
    private $maindeliverycontactExternalidGoogleid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_ExternalId_OutlookId", type="string", length=255, nullable=true)
     */
    private $maindeliverycontactExternalidOutlookid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Civility", type="string", length=25, nullable=true)
     */
    private $maininvoicingcontactCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Name", type="string", length=60, nullable=true)
     */
    private $maininvoicingcontactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_FirstName", type="string", length=60, nullable=true)
     */
    private $maininvoicingcontactFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Phone", type="string", length=20, nullable=true)
     */
    private $maininvoicingcontactPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_CellPhone", type="string", length=20, nullable=true)
     */
    private $maininvoicingcontactCellphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Fax", type="string", length=20, nullable=true)
     */
    private $maininvoicingcontactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Email", type="string", length=100, nullable=true)
     */
    private $maininvoicingcontactEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Function", type="string", length=40, nullable=true)
     */
    private $maininvoicingcontactFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_Department", type="string", length=40, nullable=true)
     */
    private $maininvoicingcontactDepartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_ExternalId_GoogleId", type="string", length=255, nullable=true)
     */
    private $maininvoicingcontactExternalidGoogleid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingContact_ExternalId_OutlookId", type="string", length=255, nullable=true)
     */
    private $maininvoicingcontactExternalidOutlookid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Civility", type="string", length=25, nullable=true)
     */
    private $civility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_WebSite", type="string", length=100, nullable=true)
     */
    private $maininvoicingaddressWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Longitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $maininvoicingaddressLongitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Latitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $maininvoicingaddressLatitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Civility", type="string", length=25, nullable=true)
     */
    private $maindeliverycontactCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Name", type="string", length=60, nullable=true)
     */
    private $maindeliverycontactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_FirstName", type="string", length=60, nullable=true)
     */
    private $maindeliverycontactFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Phone", type="string", length=20, nullable=true)
     */
    private $maindeliverycontactPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_CellPhone", type="string", length=20, nullable=true)
     */
    private $maindeliverycontactCellphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Fax", type="string", length=20, nullable=true)
     */
    private $maindeliverycontactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Email", type="string", length=100, nullable=true)
     */
    private $maindeliverycontactEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Function", type="string", length=40, nullable=true)
     */
    private $maindeliverycontactFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryContact_Department", type="string", length=40, nullable=true)
     */
    private $maindeliverycontactDepartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_WebSite", type="string", length=100, nullable=true)
     */
    private $maindeliveryaddressWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Longitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $maindeliveryaddressLongitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Latitude", type="decimal", precision=20, scale=8, nullable=true)
     */
    private $maindeliveryaddressLatitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Address1", type="string", length=40, nullable=true)
     */
    private $maininvoicingaddressAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Address2", type="string", length=40, nullable=true)
     */
    private $maininvoicingaddressAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Address3", type="string", length=40, nullable=true)
     */
    private $maininvoicingaddressAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Address4", type="string", length=40, nullable=true)
     */
    private $maininvoicingaddressAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_ZipCode", type="string", length=10, nullable=true)
     */
    private $maininvoicingaddressZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_City", type="string", length=35, nullable=true)
     */
    private $maininvoicingaddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_State", type="string", length=50, nullable=true)
     */
    private $maininvoicingaddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_CountryIsoCode", type="string", length=3, nullable=true)
     */
    private $maininvoicingaddressCountryisocode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Description", type="string", length=50, nullable=true)
     */
    private $maininvoicingaddressDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_Civility", type="string", length=25, nullable=true)
     */
    private $maininvoicingaddressCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainInvoicingAddress_ThirdName", type="string", length=60, nullable=true)
     */
    private $maininvoicingaddressThirdname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Address1", type="string", length=40, nullable=true)
     */
    private $maindeliveryaddressAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Address2", type="string", length=40, nullable=true)
     */
    private $maindeliveryaddressAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Address3", type="string", length=40, nullable=true)
     */
    private $maindeliveryaddressAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Address4", type="string", length=40, nullable=true)
     */
    private $maindeliveryaddressAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_ZipCode", type="string", length=10, nullable=true)
     */
    private $maindeliveryaddressZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_City", type="string", length=35, nullable=true)
     */
    private $maindeliveryaddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_State", type="string", length=50, nullable=true)
     */
    private $maindeliveryaddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_CountryIsoCode", type="string", length=3, nullable=true)
     */
    private $maindeliveryaddressCountryisocode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Description", type="string", length=50, nullable=true)
     */
    private $maindeliveryaddressDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_Civility", type="string", length=25, nullable=true)
     */
    private $maindeliveryaddressCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainDeliveryAddress_ThirdName", type="string", length=60, nullable=true)
     */
    private $maindeliveryaddressThirdname;

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
     * @ORM\Column(name="StorehouseId", type="guid", nullable=true)
     */
    private $storehouseid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TravelExpenseId", type="string", length=8, nullable=true)
     */
    private $travelexpenseid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xx_Origine_du_client", type="string", length=50, nullable=true)
     */
    private $xxOrigineDuClient;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="xx_Catalogue_envoye", type="datetime", nullable=true)
     */
    private $xxCatalogueEnvoye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InvoicingChargesVatId", type="guid", nullable=true)
     */
    private $invoicingchargesvatid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LastInvoicingDate", type="datetime", nullable=true)
     */
    private $lastinvoicingdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DocumentPrintMention", type="string", length=255, nullable=true)
     */
    private $documentprintmention;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Accounts_BillOfExchangeAccountingAccount", type="string", length=20, nullable=true)
     */
    private $accountsBillofexchangeaccountingaccount;

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
     * @ORM\Column(name="SelectedReminderReport", type="guid", nullable=true)
     */
    private $selectedreminderreport;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sysEditCounter", type="integer", nullable=true)
     */
    private $syseditcounter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingId", type="string", length=8, nullable=true)
     */
    private $shippingid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Type", type="smallint", nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DocumentSerialId", type="string", length=2, nullable=true)
     */
    private $documentserialid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdentificationType", type="smallint", nullable=true)
     */
    private $identificationtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AnalyticAccounting_GridId", type="string", length=40, nullable=true)
     */
    private $analyticaccountingGridid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CurrencyId", type="string", length=3, nullable=true)
     */
    private $currencyid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Group1", type="guid", nullable=true)
     */
    private $group1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Group2", type="guid", nullable=true)
     */
    private $group2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColleagueId", type="string", length=20, nullable=true)
     */
    private $colleagueid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Accounts_AuxiliaryAccount", type="string", length=20, nullable=true)
     */
    private $accountsAuxiliaryaccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Accounts_DoubtfulAccount", type="string", length=20, nullable=true)
     */
    private $accountsDoubtfulaccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SchedulerColor", type="integer", nullable=true)
     */
    private $schedulercolor;

    /**
     * @var bool
     *
     * @ORM\Column(name="AssortDeliveryByOrder", type="boolean", nullable=false)
     */
    private $assortdeliverybyorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="CheckExceedCommitmentDate", type="boolean", nullable=false)
     */
    private $checkexceedcommitmentdate;

    /**
     * @var int
     *
     * @ORM\Column(name="DueCommitmentsXDay", type="integer", nullable=false)
     */
    private $duecommitmentsxday;

    /**
     * @var string
     *
     * @ORM\Column(name="EffectOfTradeAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $effectoftradeamount;

    /**
     * @var bool
     *
     * @ORM\Column(name="CreatePosDeliveryOrderByDefault", type="boolean", nullable=false)
     */
    private $createposdeliveryorderbydefault;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LoyaltyCardType", type="string", length=10, nullable=true)
     */
    private $loyaltycardtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LoyaltyCardId", type="string", length=20, nullable=true)
     */
    private $loyaltycardid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LoyaltyCardCreationDate", type="datetime", nullable=true)
     */
    private $loyaltycardcreationdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LoyaltyCardValidityDuration", type="smallint", nullable=true)
     */
    private $loyaltycardvalidityduration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LoyaltyCardExpiryDate", type="datetime", nullable=true)
     */
    private $loyaltycardexpirydate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LoyaltyCardRenewalDate", type="datetime", nullable=true)
     */
    private $loyaltycardrenewaldate;

    /**
     * @var int
     *
     * @ORM\Column(name="LoyaltyOriginReportType", type="smallint", nullable=false)
     */
    private $loyaltyoriginreporttype;

    /**
     * @var string
     *
     * @ORM\Column(name="LoyaltyOriginReportValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $loyaltyoriginreportvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="LoyaltyValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $loyaltyvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set financialdiscounttype.
     *
     * @param int $financialdiscounttype
     *
     * @return Customer
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
     * @return Customer
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
     * Set financialdiscountpaymentdelay.
     *
     * @param int $financialdiscountpaymentdelay
     *
     * @return Customer
     */
    public function setFinancialdiscountpaymentdelay($financialdiscountpaymentdelay)
    {
        $this->financialdiscountpaymentdelay = $financialdiscountpaymentdelay;

        return $this;
    }

    /**
     * Get financialdiscountpaymentdelay.
     *
     * @return int
     */
    public function getFinancialdiscountpaymentdelay()
    {
        return $this->financialdiscountpaymentdelay;
    }

    /**
     * Set activestate.
     *
     * @param int $activestate
     *
     * @return Customer
     */
    public function setActivestate($activestate)
    {
        $this->activestate = $activestate;

        return $this;
    }

    /**
     * Get activestate.
     *
     * @return int
     */
    public function getActivestate()
    {
        return $this->activestate;
    }

    /**
     * Set mustretrievecommitmentsfromaccounting.
     *
     * @param bool $mustretrievecommitmentsfromaccounting
     *
     * @return Customer
     */
    public function setMustretrievecommitmentsfromaccounting($mustretrievecommitmentsfromaccounting)
    {
        $this->mustretrievecommitmentsfromaccounting = $mustretrievecommitmentsfromaccounting;

        return $this;
    }

    /**
     * Get mustretrievecommitmentsfromaccounting.
     *
     * @return bool
     */
    public function getMustretrievecommitmentsfromaccounting()
    {
        return $this->mustretrievecommitmentsfromaccounting;
    }

    /**
     * Set thresholdbeforeexceedamount.
     *
     * @param string $thresholdbeforeexceedamount
     *
     * @return Customer
     */
    public function setThresholdbeforeexceedamount($thresholdbeforeexceedamount)
    {
        $this->thresholdbeforeexceedamount = $thresholdbeforeexceedamount;

        return $this;
    }

    /**
     * Get thresholdbeforeexceedamount.
     *
     * @return string
     */
    public function getThresholdbeforeexceedamount()
    {
        return $this->thresholdbeforeexceedamount;
    }

    /**
     * Set pricewithtaxbased.
     *
     * @param bool $pricewithtaxbased
     *
     * @return Customer
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
     * Set daynumbertofirstreminder.
     *
     * @param int $daynumbertofirstreminder
     *
     * @return Customer
     */
    public function setDaynumbertofirstreminder($daynumbertofirstreminder)
    {
        $this->daynumbertofirstreminder = $daynumbertofirstreminder;

        return $this;
    }

    /**
     * Get daynumbertofirstreminder.
     *
     * @return int
     */
    public function getDaynumbertofirstreminder()
    {
        return $this->daynumbertofirstreminder;
    }

    /**
     * Set daynumbertosecondreminder.
     *
     * @param int $daynumbertosecondreminder
     *
     * @return Customer
     */
    public function setDaynumbertosecondreminder($daynumbertosecondreminder)
    {
        $this->daynumbertosecondreminder = $daynumbertosecondreminder;

        return $this;
    }

    /**
     * Get daynumbertosecondreminder.
     *
     * @return int
     */
    public function getDaynumbertosecondreminder()
    {
        return $this->daynumbertosecondreminder;
    }

    /**
     * Set daynumbertothirdreminder.
     *
     * @param int $daynumbertothirdreminder
     *
     * @return Customer
     */
    public function setDaynumbertothirdreminder($daynumbertothirdreminder)
    {
        $this->daynumbertothirdreminder = $daynumbertothirdreminder;

        return $this;
    }

    /**
     * Get daynumbertothirdreminder.
     *
     * @return int
     */
    public function getDaynumbertothirdreminder()
    {
        return $this->daynumbertothirdreminder;
    }

    /**
     * Set iscustomeraccount.
     *
     * @param bool $iscustomeraccount
     *
     * @return Customer
     */
    public function setIscustomeraccount($iscustomeraccount)
    {
        $this->iscustomeraccount = $iscustomeraccount;

        return $this;
    }

    /**
     * Get iscustomeraccount.
     *
     * @return bool
     */
    public function getIscustomeraccount()
    {
        return $this->iscustomeraccount;
    }

    /**
     * Set webcontactsendkind.
     *
     * @param int $webcontactsendkind
     *
     * @return Customer
     */
    public function setWebcontactsendkind($webcontactsendkind)
    {
        $this->webcontactsendkind = $webcontactsendkind;

        return $this;
    }

    /**
     * Get webcontactsendkind.
     *
     * @return int
     */
    public function getWebcontactsendkind()
    {
        return $this->webcontactsendkind;
    }

    /**
     * Set subjecttore.
     *
     * @param bool $subjecttore
     *
     * @return Customer
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
     * Set mustbereminder.
     *
     * @param bool $mustbereminder
     *
     * @return Customer
     */
    public function setMustbereminder($mustbereminder)
    {
        $this->mustbereminder = $mustbereminder;

        return $this;
    }

    /**
     * Get mustbereminder.
     *
     * @return bool
     */
    public function getMustbereminder()
    {
        return $this->mustbereminder;
    }

    /**
     * Set uniqueid.
     *
     * @param string $uniqueid
     *
     * @return Customer
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
     * Set thirdlanguage.
     *
     * @param string $thirdlanguage
     *
     * @return Customer
     */
    public function setThirdlanguage($thirdlanguage)
    {
        $this->thirdlanguage = $thirdlanguage;

        return $this;
    }

    /**
     * Get thirdlanguage.
     *
     * @return string
     */
    public function getThirdlanguage()
    {
        return $this->thirdlanguage;
    }

    /**
     * Set disalloworderassort.
     *
     * @param bool $disalloworderassort
     *
     * @return Customer
     */
    public function setDisalloworderassort($disalloworderassort)
    {
        $this->disalloworderassort = $disalloworderassort;

        return $this;
    }

    /**
     * Get disalloworderassort.
     *
     * @return bool
     */
    public function getDisalloworderassort()
    {
        return $this->disalloworderassort;
    }

    /**
     * Set disallowdeliveryassort.
     *
     * @param bool $disallowdeliveryassort
     *
     * @return Customer
     */
    public function setDisallowdeliveryassort($disallowdeliveryassort)
    {
        $this->disallowdeliveryassort = $disallowdeliveryassort;

        return $this;
    }

    /**
     * Get disallowdeliveryassort.
     *
     * @return bool
     */
    public function getDisallowdeliveryassort()
    {
        return $this->disallowdeliveryassort;
    }

    /**
     * Set invoicingchargesamount.
     *
     * @param string $invoicingchargesamount
     *
     * @return Customer
     */
    public function setInvoicingchargesamount($invoicingchargesamount)
    {
        $this->invoicingchargesamount = $invoicingchargesamount;

        return $this;
    }

    /**
     * Get invoicingchargesamount.
     *
     * @return string
     */
    public function getInvoicingchargesamount()
    {
        return $this->invoicingchargesamount;
    }

    /**
     * Set automaticstockbooking.
     *
     * @param bool $automaticstockbooking
     *
     * @return Customer
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
     * Set customertouseincustomerproducts.
     *
     * @param int $customertouseincustomerproducts
     *
     * @return Customer
     */
    public function setCustomertouseincustomerproducts($customertouseincustomerproducts)
    {
        $this->customertouseincustomerproducts = $customertouseincustomerproducts;

        return $this;
    }

    /**
     * Get customertouseincustomerproducts.
     *
     * @return int
     */
    public function getCustomertouseincustomerproducts()
    {
        return $this->customertouseincustomerproducts;
    }

    /**
     * Set sendremindertopayerthird.
     *
     * @param bool $sendremindertopayerthird
     *
     * @return Customer
     */
    public function setSendremindertopayerthird($sendremindertopayerthird)
    {
        $this->sendremindertopayerthird = $sendremindertopayerthird;

        return $this;
    }

    /**
     * Get sendremindertopayerthird.
     *
     * @return bool
     */
    public function getSendremindertopayerthird()
    {
        return $this->sendremindertopayerthird;
    }

    /**
     * Set generatevcs.
     *
     * @param bool $generatevcs
     *
     * @return Customer
     */
    public function setGeneratevcs($generatevcs)
    {
        $this->generatevcs = $generatevcs;

        return $this;
    }

    /**
     * Get generatevcs.
     *
     * @return bool
     */
    public function getGeneratevcs()
    {
        return $this->generatevcs;
    }

    /**
     * Set name.
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
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set useinvoicingaddressasdeliveryaddress.
     *
     * @param bool $useinvoicingaddressasdeliveryaddress
     *
     * @return Customer
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
     * @return Customer
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
     * Set maindeliveryaddressNpai.
     *
     * @param bool $maindeliveryaddressNpai
     *
     * @return Customer
     */
    public function setMaindeliveryaddressNpai($maindeliveryaddressNpai)
    {
        $this->maindeliveryaddressNpai = $maindeliveryaddressNpai;

        return $this;
    }

    /**
     * Get maindeliveryaddressNpai.
     *
     * @return bool
     */
    public function getMaindeliveryaddressNpai()
    {
        return $this->maindeliveryaddressNpai;
    }

    /**
     * Set maininvoicingaddressNpai.
     *
     * @param bool $maininvoicingaddressNpai
     *
     * @return Customer
     */
    public function setMaininvoicingaddressNpai($maininvoicingaddressNpai)
    {
        $this->maininvoicingaddressNpai = $maininvoicingaddressNpai;

        return $this;
    }

    /**
     * Get maininvoicingaddressNpai.
     *
     * @return bool
     */
    public function getMaininvoicingaddressNpai()
    {
        return $this->maininvoicingaddressNpai;
    }

    /**
     * Set maininvoicingcontactNaturalperson.
     *
     * @param bool $maininvoicingcontactNaturalperson
     *
     * @return Customer
     */
    public function setMaininvoicingcontactNaturalperson($maininvoicingcontactNaturalperson)
    {
        $this->maininvoicingcontactNaturalperson = $maininvoicingcontactNaturalperson;

        return $this;
    }

    /**
     * Get maininvoicingcontactNaturalperson.
     *
     * @return bool
     */
    public function getMaininvoicingcontactNaturalperson()
    {
        return $this->maininvoicingcontactNaturalperson;
    }

    /**
     * Set maininvoicingcontactOptin.
     *
     * @param bool $maininvoicingcontactOptin
     *
     * @return Customer
     */
    public function setMaininvoicingcontactOptin($maininvoicingcontactOptin)
    {
        $this->maininvoicingcontactOptin = $maininvoicingcontactOptin;

        return $this;
    }

    /**
     * Get maininvoicingcontactOptin.
     *
     * @return bool
     */
    public function getMaininvoicingcontactOptin()
    {
        return $this->maininvoicingcontactOptin;
    }

    /**
     * Set maindeliverycontactNaturalperson.
     *
     * @param bool $maindeliverycontactNaturalperson
     *
     * @return Customer
     */
    public function setMaindeliverycontactNaturalperson($maindeliverycontactNaturalperson)
    {
        $this->maindeliverycontactNaturalperson = $maindeliverycontactNaturalperson;

        return $this;
    }

    /**
     * Get maindeliverycontactNaturalperson.
     *
     * @return bool
     */
    public function getMaindeliverycontactNaturalperson()
    {
        return $this->maindeliverycontactNaturalperson;
    }

    /**
     * Set maindeliverycontactOptin.
     *
     * @param bool $maindeliverycontactOptin
     *
     * @return Customer
     */
    public function setMaindeliverycontactOptin($maindeliverycontactOptin)
    {
        $this->maindeliverycontactOptin = $maindeliverycontactOptin;

        return $this;
    }

    /**
     * Get maindeliverycontactOptin.
     *
     * @return bool
     */
    public function getMaindeliverycontactOptin()
    {
        return $this->maindeliverycontactOptin;
    }

    /**
     * Set naturalperson.
     *
     * @param bool $naturalperson
     *
     * @return Customer
     */
    public function setNaturalperson($naturalperson)
    {
        $this->naturalperson = $naturalperson;

        return $this;
    }

    /**
     * Get naturalperson.
     *
     * @return bool
     */
    public function getNaturalperson()
    {
        return $this->naturalperson;
    }

    /**
     * Set territorialityid.
     *
     * @param string $territorialityid
     *
     * @return Customer
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
     * Set discountrate.
     *
     * @param string $discountrate
     *
     * @return Customer
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
     * Set seconddiscountrate.
     *
     * @param string $seconddiscountrate
     *
     * @return Customer
     */
    public function setSeconddiscountrate($seconddiscountrate)
    {
        $this->seconddiscountrate = $seconddiscountrate;

        return $this;
    }

    /**
     * Get seconddiscountrate.
     *
     * @return string
     */
    public function getSeconddiscountrate()
    {
        return $this->seconddiscountrate;
    }

    /**
     * Set allowedamount.
     *
     * @param string $allowedamount
     *
     * @return Customer
     */
    public function setAllowedamount($allowedamount)
    {
        $this->allowedamount = $allowedamount;

        return $this;
    }

    /**
     * Get allowedamount.
     *
     * @return string
     */
    public function getAllowedamount()
    {
        return $this->allowedamount;
    }

    /**
     * Set currentamount.
     *
     * @param string $currentamount
     *
     * @return Customer
     */
    public function setCurrentamount($currentamount)
    {
        $this->currentamount = $currentamount;

        return $this;
    }

    /**
     * Get currentamount.
     *
     * @return string
     */
    public function getCurrentamount()
    {
        return $this->currentamount;
    }

    /**
     * Set extendedcurrentamount.
     *
     * @param string $extendedcurrentamount
     *
     * @return Customer
     */
    public function setExtendedcurrentamount($extendedcurrentamount)
    {
        $this->extendedcurrentamount = $extendedcurrentamount;

        return $this;
    }

    /**
     * Get extendedcurrentamount.
     *
     * @return string
     */
    public function getExtendedcurrentamount()
    {
        return $this->extendedcurrentamount;
    }

    /**
     * Set initialamount.
     *
     * @param string $initialamount
     *
     * @return Customer
     */
    public function setInitialamount($initialamount)
    {
        $this->initialamount = $initialamount;

        return $this;
    }

    /**
     * Get initialamount.
     *
     * @return string
     */
    public function getInitialamount()
    {
        return $this->initialamount;
    }

    /**
     * Set exceedamount.
     *
     * @param string $exceedamount
     *
     * @return Customer
     */
    public function setExceedamount($exceedamount)
    {
        $this->exceedamount = $exceedamount;

        return $this;
    }

    /**
     * Get exceedamount.
     *
     * @return string
     */
    public function getExceedamount()
    {
        return $this->exceedamount;
    }

    /**
     * Set accountsAccount.
     *
     * @param string|null $accountsAccount
     *
     * @return Customer
     */
    public function setAccountsAccount($accountsAccount = null)
    {
        $this->accountsAccount = $accountsAccount;

        return $this;
    }

    /**
     * Get accountsAccount.
     *
     * @return string|null
     */
    public function getAccountsAccount()
    {
        return $this->accountsAccount;
    }

    /**
     * Set firstinvoicingdate.
     *
     * @param \DateTime|null $firstinvoicingdate
     *
     * @return Customer
     */
    public function setFirstinvoicingdate($firstinvoicingdate = null)
    {
        $this->firstinvoicingdate = $firstinvoicingdate;

        return $this;
    }

    /**
     * Get firstinvoicingdate.
     *
     * @return \DateTime|null
     */
    public function getFirstinvoicingdate()
    {
        return $this->firstinvoicingdate;
    }

    /**
     * Set settlementmodeid.
     *
     * @param string|null $settlementmodeid
     *
     * @return Customer
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
     * Set paymentdate.
     *
     * @param int|null $paymentdate
     *
     * @return Customer
     */
    public function setPaymentdate($paymentdate = null)
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    /**
     * Get paymentdate.
     *
     * @return int|null
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Set pricelistcategoryid.
     *
     * @param string|null $pricelistcategoryid
     *
     * @return Customer
     */
    public function setPricelistcategoryid($pricelistcategoryid = null)
    {
        $this->pricelistcategoryid = $pricelistcategoryid;

        return $this;
    }

    /**
     * Get pricelistcategoryid.
     *
     * @return string|null
     */
    public function getPricelistcategoryid()
    {
        return $this->pricelistcategoryid;
    }

    /**
     * Set siren.
     *
     * @param string|null $siren
     *
     * @return Customer
     */
    public function setSiren($siren = null)
    {
        $this->siren = $siren;

        return $this;
    }

    /**
     * Get siren.
     *
     * @return string|null
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * Set naf.
     *
     * @param string|null $naf
     *
     * @return Customer
     */
    public function setNaf($naf = null)
    {
        $this->naf = $naf;

        return $this;
    }

    /**
     * Get naf.
     *
     * @return string|null
     */
    public function getNaf()
    {
        return $this->naf;
    }

    /**
     * Set familyid.
     *
     * @param string|null $familyid
     *
     * @return Customer
     */
    public function setFamilyid($familyid = null)
    {
        $this->familyid = $familyid;

        return $this;
    }

    /**
     * Get familyid.
     *
     * @return string|null
     */
    public function getFamilyid()
    {
        return $this->familyid;
    }

    /**
     * Set subfamilyid.
     *
     * @param string|null $subfamilyid
     *
     * @return Customer
     */
    public function setSubfamilyid($subfamilyid = null)
    {
        $this->subfamilyid = $subfamilyid;

        return $this;
    }

    /**
     * Get subfamilyid.
     *
     * @return string|null
     */
    public function getSubfamilyid()
    {
        return $this->subfamilyid;
    }

    /**
     * Set intracommunityvatnumber.
     *
     * @param string|null $intracommunityvatnumber
     *
     * @return Customer
     */
    public function setIntracommunityvatnumber($intracommunityvatnumber = null)
    {
        $this->intracommunityvatnumber = $intracommunityvatnumber;

        return $this;
    }

    /**
     * Get intracommunityvatnumber.
     *
     * @return string|null
     */
    public function getIntracommunityvatnumber()
    {
        return $this->intracommunityvatnumber;
    }

    /**
     * Set maindeliverycontactExternalidGoogleid.
     *
     * @param string|null $maindeliverycontactExternalidGoogleid
     *
     * @return Customer
     */
    public function setMaindeliverycontactExternalidGoogleid($maindeliverycontactExternalidGoogleid = null)
    {
        $this->maindeliverycontactExternalidGoogleid = $maindeliverycontactExternalidGoogleid;

        return $this;
    }

    /**
     * Get maindeliverycontactExternalidGoogleid.
     *
     * @return string|null
     */
    public function getMaindeliverycontactExternalidGoogleid()
    {
        return $this->maindeliverycontactExternalidGoogleid;
    }

    /**
     * Set maindeliverycontactExternalidOutlookid.
     *
     * @param string|null $maindeliverycontactExternalidOutlookid
     *
     * @return Customer
     */
    public function setMaindeliverycontactExternalidOutlookid($maindeliverycontactExternalidOutlookid = null)
    {
        $this->maindeliverycontactExternalidOutlookid = $maindeliverycontactExternalidOutlookid;

        return $this;
    }

    /**
     * Get maindeliverycontactExternalidOutlookid.
     *
     * @return string|null
     */
    public function getMaindeliverycontactExternalidOutlookid()
    {
        return $this->maindeliverycontactExternalidOutlookid;
    }

    /**
     * Set maininvoicingcontactCivility.
     *
     * @param string|null $maininvoicingcontactCivility
     *
     * @return Customer
     */
    public function setMaininvoicingcontactCivility($maininvoicingcontactCivility = null)
    {
        $this->maininvoicingcontactCivility = $maininvoicingcontactCivility;

        return $this;
    }

    /**
     * Get maininvoicingcontactCivility.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactCivility()
    {
        return $this->maininvoicingcontactCivility;
    }

    /**
     * Set maininvoicingcontactName.
     *
     * @param string|null $maininvoicingcontactName
     *
     * @return Customer
     */
    public function setMaininvoicingcontactName($maininvoicingcontactName = null)
    {
        $this->maininvoicingcontactName = $maininvoicingcontactName;

        return $this;
    }

    /**
     * Get maininvoicingcontactName.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactName()
    {
        return $this->maininvoicingcontactName;
    }

    /**
     * Set maininvoicingcontactFirstname.
     *
     * @param string|null $maininvoicingcontactFirstname
     *
     * @return Customer
     */
    public function setMaininvoicingcontactFirstname($maininvoicingcontactFirstname = null)
    {
        $this->maininvoicingcontactFirstname = $maininvoicingcontactFirstname;

        return $this;
    }

    /**
     * Get maininvoicingcontactFirstname.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactFirstname()
    {
        return $this->maininvoicingcontactFirstname;
    }

    /**
     * Set maininvoicingcontactPhone.
     *
     * @param string|null $maininvoicingcontactPhone
     *
     * @return Customer
     */
    public function setMaininvoicingcontactPhone($maininvoicingcontactPhone = null)
    {
        $this->maininvoicingcontactPhone = $maininvoicingcontactPhone;

        return $this;
    }

    /**
     * Get maininvoicingcontactPhone.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactPhone()
    {
        return $this->maininvoicingcontactPhone;
    }

    /**
     * Set maininvoicingcontactCellphone.
     *
     * @param string|null $maininvoicingcontactCellphone
     *
     * @return Customer
     */
    public function setMaininvoicingcontactCellphone($maininvoicingcontactCellphone = null)
    {
        $this->maininvoicingcontactCellphone = $maininvoicingcontactCellphone;

        return $this;
    }

    /**
     * Get maininvoicingcontactCellphone.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactCellphone()
    {
        return $this->maininvoicingcontactCellphone;
    }

    /**
     * Set maininvoicingcontactFax.
     *
     * @param string|null $maininvoicingcontactFax
     *
     * @return Customer
     */
    public function setMaininvoicingcontactFax($maininvoicingcontactFax = null)
    {
        $this->maininvoicingcontactFax = $maininvoicingcontactFax;

        return $this;
    }

    /**
     * Get maininvoicingcontactFax.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactFax()
    {
        return $this->maininvoicingcontactFax;
    }

    /**
     * Set maininvoicingcontactEmail.
     *
     * @param string|null $maininvoicingcontactEmail
     *
     * @return Customer
     */
    public function setMaininvoicingcontactEmail($maininvoicingcontactEmail = null)
    {
        $this->maininvoicingcontactEmail = $maininvoicingcontactEmail;

        return $this;
    }

    /**
     * Get maininvoicingcontactEmail.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactEmail()
    {
        return $this->maininvoicingcontactEmail;
    }

    /**
     * Set maininvoicingcontactFunction.
     *
     * @param string|null $maininvoicingcontactFunction
     *
     * @return Customer
     */
    public function setMaininvoicingcontactFunction($maininvoicingcontactFunction = null)
    {
        $this->maininvoicingcontactFunction = $maininvoicingcontactFunction;

        return $this;
    }

    /**
     * Get maininvoicingcontactFunction.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactFunction()
    {
        return $this->maininvoicingcontactFunction;
    }

    /**
     * Set maininvoicingcontactDepartment.
     *
     * @param string|null $maininvoicingcontactDepartment
     *
     * @return Customer
     */
    public function setMaininvoicingcontactDepartment($maininvoicingcontactDepartment = null)
    {
        $this->maininvoicingcontactDepartment = $maininvoicingcontactDepartment;

        return $this;
    }

    /**
     * Get maininvoicingcontactDepartment.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactDepartment()
    {
        return $this->maininvoicingcontactDepartment;
    }

    /**
     * Set maininvoicingcontactExternalidGoogleid.
     *
     * @param string|null $maininvoicingcontactExternalidGoogleid
     *
     * @return Customer
     */
    public function setMaininvoicingcontactExternalidGoogleid($maininvoicingcontactExternalidGoogleid = null)
    {
        $this->maininvoicingcontactExternalidGoogleid = $maininvoicingcontactExternalidGoogleid;

        return $this;
    }

    /**
     * Get maininvoicingcontactExternalidGoogleid.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactExternalidGoogleid()
    {
        return $this->maininvoicingcontactExternalidGoogleid;
    }

    /**
     * Set maininvoicingcontactExternalidOutlookid.
     *
     * @param string|null $maininvoicingcontactExternalidOutlookid
     *
     * @return Customer
     */
    public function setMaininvoicingcontactExternalidOutlookid($maininvoicingcontactExternalidOutlookid = null)
    {
        $this->maininvoicingcontactExternalidOutlookid = $maininvoicingcontactExternalidOutlookid;

        return $this;
    }

    /**
     * Get maininvoicingcontactExternalidOutlookid.
     *
     * @return string|null
     */
    public function getMaininvoicingcontactExternalidOutlookid()
    {
        return $this->maininvoicingcontactExternalidOutlookid;
    }

    /**
     * Set civility.
     *
     * @param string|null $civility
     *
     * @return Customer
     */
    public function setCivility($civility = null)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility.
     *
     * @return string|null
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set maininvoicingaddressWebsite.
     *
     * @param string|null $maininvoicingaddressWebsite
     *
     * @return Customer
     */
    public function setMaininvoicingaddressWebsite($maininvoicingaddressWebsite = null)
    {
        $this->maininvoicingaddressWebsite = $maininvoicingaddressWebsite;

        return $this;
    }

    /**
     * Get maininvoicingaddressWebsite.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressWebsite()
    {
        return $this->maininvoicingaddressWebsite;
    }

    /**
     * Set maininvoicingaddressLongitude.
     *
     * @param string|null $maininvoicingaddressLongitude
     *
     * @return Customer
     */
    public function setMaininvoicingaddressLongitude($maininvoicingaddressLongitude = null)
    {
        $this->maininvoicingaddressLongitude = $maininvoicingaddressLongitude;

        return $this;
    }

    /**
     * Get maininvoicingaddressLongitude.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressLongitude()
    {
        return $this->maininvoicingaddressLongitude;
    }

    /**
     * Set maininvoicingaddressLatitude.
     *
     * @param string|null $maininvoicingaddressLatitude
     *
     * @return Customer
     */
    public function setMaininvoicingaddressLatitude($maininvoicingaddressLatitude = null)
    {
        $this->maininvoicingaddressLatitude = $maininvoicingaddressLatitude;

        return $this;
    }

    /**
     * Get maininvoicingaddressLatitude.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressLatitude()
    {
        return $this->maininvoicingaddressLatitude;
    }

    /**
     * Set maindeliverycontactCivility.
     *
     * @param string|null $maindeliverycontactCivility
     *
     * @return Customer
     */
    public function setMaindeliverycontactCivility($maindeliverycontactCivility = null)
    {
        $this->maindeliverycontactCivility = $maindeliverycontactCivility;

        return $this;
    }

    /**
     * Get maindeliverycontactCivility.
     *
     * @return string|null
     */
    public function getMaindeliverycontactCivility()
    {
        return $this->maindeliverycontactCivility;
    }

    /**
     * Set maindeliverycontactName.
     *
     * @param string|null $maindeliverycontactName
     *
     * @return Customer
     */
    public function setMaindeliverycontactName($maindeliverycontactName = null)
    {
        $this->maindeliverycontactName = $maindeliverycontactName;

        return $this;
    }

    /**
     * Get maindeliverycontactName.
     *
     * @return string|null
     */
    public function getMaindeliverycontactName()
    {
        return $this->maindeliverycontactName;
    }

    /**
     * Set maindeliverycontactFirstname.
     *
     * @param string|null $maindeliverycontactFirstname
     *
     * @return Customer
     */
    public function setMaindeliverycontactFirstname($maindeliverycontactFirstname = null)
    {
        $this->maindeliverycontactFirstname = $maindeliverycontactFirstname;

        return $this;
    }

    /**
     * Get maindeliverycontactFirstname.
     *
     * @return string|null
     */
    public function getMaindeliverycontactFirstname()
    {
        return $this->maindeliverycontactFirstname;
    }

    /**
     * Set maindeliverycontactPhone.
     *
     * @param string|null $maindeliverycontactPhone
     *
     * @return Customer
     */
    public function setMaindeliverycontactPhone($maindeliverycontactPhone = null)
    {
        $this->maindeliverycontactPhone = $maindeliverycontactPhone;

        return $this;
    }

    /**
     * Get maindeliverycontactPhone.
     *
     * @return string|null
     */
    public function getMaindeliverycontactPhone()
    {
        return $this->maindeliverycontactPhone;
    }

    /**
     * Set maindeliverycontactCellphone.
     *
     * @param string|null $maindeliverycontactCellphone
     *
     * @return Customer
     */
    public function setMaindeliverycontactCellphone($maindeliverycontactCellphone = null)
    {
        $this->maindeliverycontactCellphone = $maindeliverycontactCellphone;

        return $this;
    }

    /**
     * Get maindeliverycontactCellphone.
     *
     * @return string|null
     */
    public function getMaindeliverycontactCellphone()
    {
        return $this->maindeliverycontactCellphone;
    }

    /**
     * Set maindeliverycontactFax.
     *
     * @param string|null $maindeliverycontactFax
     *
     * @return Customer
     */
    public function setMaindeliverycontactFax($maindeliverycontactFax = null)
    {
        $this->maindeliverycontactFax = $maindeliverycontactFax;

        return $this;
    }

    /**
     * Get maindeliverycontactFax.
     *
     * @return string|null
     */
    public function getMaindeliverycontactFax()
    {
        return $this->maindeliverycontactFax;
    }

    /**
     * Set maindeliverycontactEmail.
     *
     * @param string|null $maindeliverycontactEmail
     *
     * @return Customer
     */
    public function setMaindeliverycontactEmail($maindeliverycontactEmail = null)
    {
        $this->maindeliverycontactEmail = $maindeliverycontactEmail;

        return $this;
    }

    /**
     * Get maindeliverycontactEmail.
     *
     * @return string|null
     */
    public function getMaindeliverycontactEmail()
    {
        return $this->maindeliverycontactEmail;
    }

    /**
     * Set maindeliverycontactFunction.
     *
     * @param string|null $maindeliverycontactFunction
     *
     * @return Customer
     */
    public function setMaindeliverycontactFunction($maindeliverycontactFunction = null)
    {
        $this->maindeliverycontactFunction = $maindeliverycontactFunction;

        return $this;
    }

    /**
     * Get maindeliverycontactFunction.
     *
     * @return string|null
     */
    public function getMaindeliverycontactFunction()
    {
        return $this->maindeliverycontactFunction;
    }

    /**
     * Set maindeliverycontactDepartment.
     *
     * @param string|null $maindeliverycontactDepartment
     *
     * @return Customer
     */
    public function setMaindeliverycontactDepartment($maindeliverycontactDepartment = null)
    {
        $this->maindeliverycontactDepartment = $maindeliverycontactDepartment;

        return $this;
    }

    /**
     * Get maindeliverycontactDepartment.
     *
     * @return string|null
     */
    public function getMaindeliverycontactDepartment()
    {
        return $this->maindeliverycontactDepartment;
    }

    /**
     * Set maindeliveryaddressWebsite.
     *
     * @param string|null $maindeliveryaddressWebsite
     *
     * @return Customer
     */
    public function setMaindeliveryaddressWebsite($maindeliveryaddressWebsite = null)
    {
        $this->maindeliveryaddressWebsite = $maindeliveryaddressWebsite;

        return $this;
    }

    /**
     * Get maindeliveryaddressWebsite.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressWebsite()
    {
        return $this->maindeliveryaddressWebsite;
    }

    /**
     * Set maindeliveryaddressLongitude.
     *
     * @param string|null $maindeliveryaddressLongitude
     *
     * @return Customer
     */
    public function setMaindeliveryaddressLongitude($maindeliveryaddressLongitude = null)
    {
        $this->maindeliveryaddressLongitude = $maindeliveryaddressLongitude;

        return $this;
    }

    /**
     * Get maindeliveryaddressLongitude.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressLongitude()
    {
        return $this->maindeliveryaddressLongitude;
    }

    /**
     * Set maindeliveryaddressLatitude.
     *
     * @param string|null $maindeliveryaddressLatitude
     *
     * @return Customer
     */
    public function setMaindeliveryaddressLatitude($maindeliveryaddressLatitude = null)
    {
        $this->maindeliveryaddressLatitude = $maindeliveryaddressLatitude;

        return $this;
    }

    /**
     * Get maindeliveryaddressLatitude.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressLatitude()
    {
        return $this->maindeliveryaddressLatitude;
    }

    /**
     * Set maininvoicingaddressAddress1.
     *
     * @param string|null $maininvoicingaddressAddress1
     *
     * @return Customer
     */
    public function setMaininvoicingaddressAddress1($maininvoicingaddressAddress1 = null)
    {
        $this->maininvoicingaddressAddress1 = $maininvoicingaddressAddress1;

        return $this;
    }

    /**
     * Get maininvoicingaddressAddress1.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressAddress1()
    {
        return $this->maininvoicingaddressAddress1;
    }

    /**
     * Set maininvoicingaddressAddress2.
     *
     * @param string|null $maininvoicingaddressAddress2
     *
     * @return Customer
     */
    public function setMaininvoicingaddressAddress2($maininvoicingaddressAddress2 = null)
    {
        $this->maininvoicingaddressAddress2 = $maininvoicingaddressAddress2;

        return $this;
    }

    /**
     * Get maininvoicingaddressAddress2.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressAddress2()
    {
        return $this->maininvoicingaddressAddress2;
    }

    /**
     * Set maininvoicingaddressAddress3.
     *
     * @param string|null $maininvoicingaddressAddress3
     *
     * @return Customer
     */
    public function setMaininvoicingaddressAddress3($maininvoicingaddressAddress3 = null)
    {
        $this->maininvoicingaddressAddress3 = $maininvoicingaddressAddress3;

        return $this;
    }

    /**
     * Get maininvoicingaddressAddress3.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressAddress3()
    {
        return $this->maininvoicingaddressAddress3;
    }

    /**
     * Set maininvoicingaddressAddress4.
     *
     * @param string|null $maininvoicingaddressAddress4
     *
     * @return Customer
     */
    public function setMaininvoicingaddressAddress4($maininvoicingaddressAddress4 = null)
    {
        $this->maininvoicingaddressAddress4 = $maininvoicingaddressAddress4;

        return $this;
    }

    /**
     * Get maininvoicingaddressAddress4.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressAddress4()
    {
        return $this->maininvoicingaddressAddress4;
    }

    /**
     * Set maininvoicingaddressZipcode.
     *
     * @param string|null $maininvoicingaddressZipcode
     *
     * @return Customer
     */
    public function setMaininvoicingaddressZipcode($maininvoicingaddressZipcode = null)
    {
        $this->maininvoicingaddressZipcode = $maininvoicingaddressZipcode;

        return $this;
    }

    /**
     * Get maininvoicingaddressZipcode.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressZipcode()
    {
        return $this->maininvoicingaddressZipcode;
    }

    /**
     * Set maininvoicingaddressCity.
     *
     * @param string|null $maininvoicingaddressCity
     *
     * @return Customer
     */
    public function setMaininvoicingaddressCity($maininvoicingaddressCity = null)
    {
        $this->maininvoicingaddressCity = $maininvoicingaddressCity;

        return $this;
    }

    /**
     * Get maininvoicingaddressCity.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressCity()
    {
        return $this->maininvoicingaddressCity;
    }

    /**
     * Set maininvoicingaddressState.
     *
     * @param string|null $maininvoicingaddressState
     *
     * @return Customer
     */
    public function setMaininvoicingaddressState($maininvoicingaddressState = null)
    {
        $this->maininvoicingaddressState = $maininvoicingaddressState;

        return $this;
    }

    /**
     * Get maininvoicingaddressState.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressState()
    {
        return $this->maininvoicingaddressState;
    }

    /**
     * Set maininvoicingaddressCountryisocode.
     *
     * @param string|null $maininvoicingaddressCountryisocode
     *
     * @return Customer
     */
    public function setMaininvoicingaddressCountryisocode($maininvoicingaddressCountryisocode = null)
    {
        $this->maininvoicingaddressCountryisocode = $maininvoicingaddressCountryisocode;

        return $this;
    }

    /**
     * Get maininvoicingaddressCountryisocode.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressCountryisocode()
    {
        return $this->maininvoicingaddressCountryisocode;
    }

    /**
     * Set maininvoicingaddressDescription.
     *
     * @param string|null $maininvoicingaddressDescription
     *
     * @return Customer
     */
    public function setMaininvoicingaddressDescription($maininvoicingaddressDescription = null)
    {
        $this->maininvoicingaddressDescription = $maininvoicingaddressDescription;

        return $this;
    }

    /**
     * Get maininvoicingaddressDescription.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressDescription()
    {
        return $this->maininvoicingaddressDescription;
    }

    /**
     * Set maininvoicingaddressCivility.
     *
     * @param string|null $maininvoicingaddressCivility
     *
     * @return Customer
     */
    public function setMaininvoicingaddressCivility($maininvoicingaddressCivility = null)
    {
        $this->maininvoicingaddressCivility = $maininvoicingaddressCivility;

        return $this;
    }

    /**
     * Get maininvoicingaddressCivility.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressCivility()
    {
        return $this->maininvoicingaddressCivility;
    }

    /**
     * Set maininvoicingaddressThirdname.
     *
     * @param string|null $maininvoicingaddressThirdname
     *
     * @return Customer
     */
    public function setMaininvoicingaddressThirdname($maininvoicingaddressThirdname = null)
    {
        $this->maininvoicingaddressThirdname = $maininvoicingaddressThirdname;

        return $this;
    }

    /**
     * Get maininvoicingaddressThirdname.
     *
     * @return string|null
     */
    public function getMaininvoicingaddressThirdname()
    {
        return $this->maininvoicingaddressThirdname;
    }

    /**
     * Set maindeliveryaddressAddress1.
     *
     * @param string|null $maindeliveryaddressAddress1
     *
     * @return Customer
     */
    public function setMaindeliveryaddressAddress1($maindeliveryaddressAddress1 = null)
    {
        $this->maindeliveryaddressAddress1 = $maindeliveryaddressAddress1;

        return $this;
    }

    /**
     * Get maindeliveryaddressAddress1.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressAddress1()
    {
        return $this->maindeliveryaddressAddress1;
    }

    /**
     * Set maindeliveryaddressAddress2.
     *
     * @param string|null $maindeliveryaddressAddress2
     *
     * @return Customer
     */
    public function setMaindeliveryaddressAddress2($maindeliveryaddressAddress2 = null)
    {
        $this->maindeliveryaddressAddress2 = $maindeliveryaddressAddress2;

        return $this;
    }

    /**
     * Get maindeliveryaddressAddress2.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressAddress2()
    {
        return $this->maindeliveryaddressAddress2;
    }

    /**
     * Set maindeliveryaddressAddress3.
     *
     * @param string|null $maindeliveryaddressAddress3
     *
     * @return Customer
     */
    public function setMaindeliveryaddressAddress3($maindeliveryaddressAddress3 = null)
    {
        $this->maindeliveryaddressAddress3 = $maindeliveryaddressAddress3;

        return $this;
    }

    /**
     * Get maindeliveryaddressAddress3.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressAddress3()
    {
        return $this->maindeliveryaddressAddress3;
    }

    /**
     * Set maindeliveryaddressAddress4.
     *
     * @param string|null $maindeliveryaddressAddress4
     *
     * @return Customer
     */
    public function setMaindeliveryaddressAddress4($maindeliveryaddressAddress4 = null)
    {
        $this->maindeliveryaddressAddress4 = $maindeliveryaddressAddress4;

        return $this;
    }

    /**
     * Get maindeliveryaddressAddress4.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressAddress4()
    {
        return $this->maindeliveryaddressAddress4;
    }

    /**
     * Set maindeliveryaddressZipcode.
     *
     * @param string|null $maindeliveryaddressZipcode
     *
     * @return Customer
     */
    public function setMaindeliveryaddressZipcode($maindeliveryaddressZipcode = null)
    {
        $this->maindeliveryaddressZipcode = $maindeliveryaddressZipcode;

        return $this;
    }

    /**
     * Get maindeliveryaddressZipcode.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressZipcode()
    {
        return $this->maindeliveryaddressZipcode;
    }

    /**
     * Set maindeliveryaddressCity.
     *
     * @param string|null $maindeliveryaddressCity
     *
     * @return Customer
     */
    public function setMaindeliveryaddressCity($maindeliveryaddressCity = null)
    {
        $this->maindeliveryaddressCity = $maindeliveryaddressCity;

        return $this;
    }

    /**
     * Get maindeliveryaddressCity.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressCity()
    {
        return $this->maindeliveryaddressCity;
    }

    /**
     * Set maindeliveryaddressState.
     *
     * @param string|null $maindeliveryaddressState
     *
     * @return Customer
     */
    public function setMaindeliveryaddressState($maindeliveryaddressState = null)
    {
        $this->maindeliveryaddressState = $maindeliveryaddressState;

        return $this;
    }

    /**
     * Get maindeliveryaddressState.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressState()
    {
        return $this->maindeliveryaddressState;
    }

    /**
     * Set maindeliveryaddressCountryisocode.
     *
     * @param string|null $maindeliveryaddressCountryisocode
     *
     * @return Customer
     */
    public function setMaindeliveryaddressCountryisocode($maindeliveryaddressCountryisocode = null)
    {
        $this->maindeliveryaddressCountryisocode = $maindeliveryaddressCountryisocode;

        return $this;
    }

    /**
     * Get maindeliveryaddressCountryisocode.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressCountryisocode()
    {
        return $this->maindeliveryaddressCountryisocode;
    }

    /**
     * Set maindeliveryaddressDescription.
     *
     * @param string|null $maindeliveryaddressDescription
     *
     * @return Customer
     */
    public function setMaindeliveryaddressDescription($maindeliveryaddressDescription = null)
    {
        $this->maindeliveryaddressDescription = $maindeliveryaddressDescription;

        return $this;
    }

    /**
     * Get maindeliveryaddressDescription.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressDescription()
    {
        return $this->maindeliveryaddressDescription;
    }

    /**
     * Set maindeliveryaddressCivility.
     *
     * @param string|null $maindeliveryaddressCivility
     *
     * @return Customer
     */
    public function setMaindeliveryaddressCivility($maindeliveryaddressCivility = null)
    {
        $this->maindeliveryaddressCivility = $maindeliveryaddressCivility;

        return $this;
    }

    /**
     * Get maindeliveryaddressCivility.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressCivility()
    {
        return $this->maindeliveryaddressCivility;
    }

    /**
     * Set maindeliveryaddressThirdname.
     *
     * @param string|null $maindeliveryaddressThirdname
     *
     * @return Customer
     */
    public function setMaindeliveryaddressThirdname($maindeliveryaddressThirdname = null)
    {
        $this->maindeliveryaddressThirdname = $maindeliveryaddressThirdname;

        return $this;
    }

    /**
     * Get maindeliveryaddressThirdname.
     *
     * @return string|null
     */
    public function getMaindeliveryaddressThirdname()
    {
        return $this->maindeliveryaddressThirdname;
    }

    /**
     * Set syscreateddate.
     *
     * @param \DateTime|null $syscreateddate
     *
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set storehouseid.
     *
     * @param string|null $storehouseid
     *
     * @return Customer
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
     * Set travelexpenseid.
     *
     * @param string|null $travelexpenseid
     *
     * @return Customer
     */
    public function setTravelexpenseid($travelexpenseid = null)
    {
        $this->travelexpenseid = $travelexpenseid;

        return $this;
    }

    /**
     * Get travelexpenseid.
     *
     * @return string|null
     */
    public function getTravelexpenseid()
    {
        return $this->travelexpenseid;
    }

    /**
     * Set xxOrigineDuClient.
     *
     * @param string|null $xxOrigineDuClient
     *
     * @return Customer
     */
    public function setXxOrigineDuClient($xxOrigineDuClient = null)
    {
        $this->xxOrigineDuClient = $xxOrigineDuClient;

        return $this;
    }

    /**
     * Get xxOrigineDuClient.
     *
     * @return string|null
     */
    public function getXxOrigineDuClient()
    {
        return $this->xxOrigineDuClient;
    }

    /**
     * Set xxCatalogueEnvoye.
     *
     * @param \DateTime|null $xxCatalogueEnvoye
     *
     * @return Customer
     */
    public function setXxCatalogueEnvoye($xxCatalogueEnvoye = null)
    {
        $this->xxCatalogueEnvoye = $xxCatalogueEnvoye;

        return $this;
    }

    /**
     * Get xxCatalogueEnvoye.
     *
     * @return \DateTime|null
     */
    public function getXxCatalogueEnvoye()
    {
        return $this->xxCatalogueEnvoye;
    }

    /**
     * Set invoicingchargesvatid.
     *
     * @param string|null $invoicingchargesvatid
     *
     * @return Customer
     */
    public function setInvoicingchargesvatid($invoicingchargesvatid = null)
    {
        $this->invoicingchargesvatid = $invoicingchargesvatid;

        return $this;
    }

    /**
     * Get invoicingchargesvatid.
     *
     * @return string|null
     */
    public function getInvoicingchargesvatid()
    {
        return $this->invoicingchargesvatid;
    }

    /**
     * Set lastinvoicingdate.
     *
     * @param \DateTime|null $lastinvoicingdate
     *
     * @return Customer
     */
    public function setLastinvoicingdate($lastinvoicingdate = null)
    {
        $this->lastinvoicingdate = $lastinvoicingdate;

        return $this;
    }

    /**
     * Get lastinvoicingdate.
     *
     * @return \DateTime|null
     */
    public function getLastinvoicingdate()
    {
        return $this->lastinvoicingdate;
    }

    /**
     * Set documentprintmention.
     *
     * @param string|null $documentprintmention
     *
     * @return Customer
     */
    public function setDocumentprintmention($documentprintmention = null)
    {
        $this->documentprintmention = $documentprintmention;

        return $this;
    }

    /**
     * Get documentprintmention.
     *
     * @return string|null
     */
    public function getDocumentprintmention()
    {
        return $this->documentprintmention;
    }

    /**
     * Set accountsBillofexchangeaccountingaccount.
     *
     * @param string|null $accountsBillofexchangeaccountingaccount
     *
     * @return Customer
     */
    public function setAccountsBillofexchangeaccountingaccount($accountsBillofexchangeaccountingaccount = null)
    {
        $this->accountsBillofexchangeaccountingaccount = $accountsBillofexchangeaccountingaccount;

        return $this;
    }

    /**
     * Get accountsBillofexchangeaccountingaccount.
     *
     * @return string|null
     */
    public function getAccountsBillofexchangeaccountingaccount()
    {
        return $this->accountsBillofexchangeaccountingaccount;
    }

    /**
     * Set taxids0.
     *
     * @param string|null $taxids0
     *
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set paymentthirdid.
     *
     * @param string|null $paymentthirdid
     *
     * @return Customer
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
     * @return Customer
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
     * Set sysrecordversion.
     *
     * @param int|null $sysrecordversion
     *
     * @return Customer
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
     * @return Customer
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
     * Set selectedreminderreport.
     *
     * @param string|null $selectedreminderreport
     *
     * @return Customer
     */
    public function setSelectedreminderreport($selectedreminderreport = null)
    {
        $this->selectedreminderreport = $selectedreminderreport;

        return $this;
    }

    /**
     * Get selectedreminderreport.
     *
     * @return string|null
     */
    public function getSelectedreminderreport()
    {
        return $this->selectedreminderreport;
    }

    /**
     * Set syseditcounter.
     *
     * @param int|null $syseditcounter
     *
     * @return Customer
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
     * Set shippingid.
     *
     * @param string|null $shippingid
     *
     * @return Customer
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
     * Set type.
     *
     * @param int|null $type
     *
     * @return Customer
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set documentserialid.
     *
     * @param string|null $documentserialid
     *
     * @return Customer
     */
    public function setDocumentserialid($documentserialid = null)
    {
        $this->documentserialid = $documentserialid;

        return $this;
    }

    /**
     * Get documentserialid.
     *
     * @return string|null
     */
    public function getDocumentserialid()
    {
        return $this->documentserialid;
    }

    /**
     * Set identificationtype.
     *
     * @param int|null $identificationtype
     *
     * @return Customer
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
     * Set analyticaccountingGridid.
     *
     * @param string|null $analyticaccountingGridid
     *
     * @return Customer
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
     * Set currencyid.
     *
     * @param string|null $currencyid
     *
     * @return Customer
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
     * Set group1.
     *
     * @param string|null $group1
     *
     * @return Customer
     */
    public function setGroup1($group1 = null)
    {
        $this->group1 = $group1;

        return $this;
    }

    /**
     * Get group1.
     *
     * @return string|null
     */
    public function getGroup1()
    {
        return $this->group1;
    }

    /**
     * Set group2.
     *
     * @param string|null $group2
     *
     * @return Customer
     */
    public function setGroup2($group2 = null)
    {
        $this->group2 = $group2;

        return $this;
    }

    /**
     * Get group2.
     *
     * @return string|null
     */
    public function getGroup2()
    {
        return $this->group2;
    }

    /**
     * Set colleagueid.
     *
     * @param string|null $colleagueid
     *
     * @return Customer
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
     * Set accountsAuxiliaryaccount.
     *
     * @param string|null $accountsAuxiliaryaccount
     *
     * @return Customer
     */
    public function setAccountsAuxiliaryaccount($accountsAuxiliaryaccount = null)
    {
        $this->accountsAuxiliaryaccount = $accountsAuxiliaryaccount;

        return $this;
    }

    /**
     * Get accountsAuxiliaryaccount.
     *
     * @return string|null
     */
    public function getAccountsAuxiliaryaccount()
    {
        return $this->accountsAuxiliaryaccount;
    }

    /**
     * Set accountsDoubtfulaccount.
     *
     * @param string|null $accountsDoubtfulaccount
     *
     * @return Customer
     */
    public function setAccountsDoubtfulaccount($accountsDoubtfulaccount = null)
    {
        $this->accountsDoubtfulaccount = $accountsDoubtfulaccount;

        return $this;
    }

    /**
     * Get accountsDoubtfulaccount.
     *
     * @return string|null
     */
    public function getAccountsDoubtfulaccount()
    {
        return $this->accountsDoubtfulaccount;
    }

    /**
     * Set schedulercolor.
     *
     * @param int|null $schedulercolor
     *
     * @return Customer
     */
    public function setSchedulercolor($schedulercolor = null)
    {
        $this->schedulercolor = $schedulercolor;

        return $this;
    }

    /**
     * Get schedulercolor.
     *
     * @return int|null
     */
    public function getSchedulercolor()
    {
        return $this->schedulercolor;
    }

    /**
     * Set assortdeliverybyorder.
     *
     * @param bool $assortdeliverybyorder
     *
     * @return Customer
     */
    public function setAssortdeliverybyorder($assortdeliverybyorder)
    {
        $this->assortdeliverybyorder = $assortdeliverybyorder;

        return $this;
    }

    /**
     * Get assortdeliverybyorder.
     *
     * @return bool
     */
    public function getAssortdeliverybyorder()
    {
        return $this->assortdeliverybyorder;
    }

    /**
     * Set checkexceedcommitmentdate.
     *
     * @param bool $checkexceedcommitmentdate
     *
     * @return Customer
     */
    public function setCheckexceedcommitmentdate($checkexceedcommitmentdate)
    {
        $this->checkexceedcommitmentdate = $checkexceedcommitmentdate;

        return $this;
    }

    /**
     * Get checkexceedcommitmentdate.
     *
     * @return bool
     */
    public function getCheckexceedcommitmentdate()
    {
        return $this->checkexceedcommitmentdate;
    }

    /**
     * Set duecommitmentsxday.
     *
     * @param int $duecommitmentsxday
     *
     * @return Customer
     */
    public function setDuecommitmentsxday($duecommitmentsxday)
    {
        $this->duecommitmentsxday = $duecommitmentsxday;

        return $this;
    }

    /**
     * Get duecommitmentsxday.
     *
     * @return int
     */
    public function getDuecommitmentsxday()
    {
        return $this->duecommitmentsxday;
    }

    /**
     * Set effectoftradeamount.
     *
     * @param string $effectoftradeamount
     *
     * @return Customer
     */
    public function setEffectoftradeamount($effectoftradeamount)
    {
        $this->effectoftradeamount = $effectoftradeamount;

        return $this;
    }

    /**
     * Get effectoftradeamount.
     *
     * @return string
     */
    public function getEffectoftradeamount()
    {
        return $this->effectoftradeamount;
    }

    /**
     * Set createposdeliveryorderbydefault.
     *
     * @param bool $createposdeliveryorderbydefault
     *
     * @return Customer
     */
    public function setCreateposdeliveryorderbydefault($createposdeliveryorderbydefault)
    {
        $this->createposdeliveryorderbydefault = $createposdeliveryorderbydefault;

        return $this;
    }

    /**
     * Get createposdeliveryorderbydefault.
     *
     * @return bool
     */
    public function getCreateposdeliveryorderbydefault()
    {
        return $this->createposdeliveryorderbydefault;
    }

    /**
     * Set loyaltycardtype.
     *
     * @param string|null $loyaltycardtype
     *
     * @return Customer
     */
    public function setLoyaltycardtype($loyaltycardtype = null)
    {
        $this->loyaltycardtype = $loyaltycardtype;

        return $this;
    }

    /**
     * Get loyaltycardtype.
     *
     * @return string|null
     */
    public function getLoyaltycardtype()
    {
        return $this->loyaltycardtype;
    }

    /**
     * Set loyaltycardid.
     *
     * @param string|null $loyaltycardid
     *
     * @return Customer
     */
    public function setLoyaltycardid($loyaltycardid = null)
    {
        $this->loyaltycardid = $loyaltycardid;

        return $this;
    }

    /**
     * Get loyaltycardid.
     *
     * @return string|null
     */
    public function getLoyaltycardid()
    {
        return $this->loyaltycardid;
    }

    /**
     * Set loyaltycardcreationdate.
     *
     * @param \DateTime|null $loyaltycardcreationdate
     *
     * @return Customer
     */
    public function setLoyaltycardcreationdate($loyaltycardcreationdate = null)
    {
        $this->loyaltycardcreationdate = $loyaltycardcreationdate;

        return $this;
    }

    /**
     * Get loyaltycardcreationdate.
     *
     * @return \DateTime|null
     */
    public function getLoyaltycardcreationdate()
    {
        return $this->loyaltycardcreationdate;
    }

    /**
     * Set loyaltycardvalidityduration.
     *
     * @param int|null $loyaltycardvalidityduration
     *
     * @return Customer
     */
    public function setLoyaltycardvalidityduration($loyaltycardvalidityduration = null)
    {
        $this->loyaltycardvalidityduration = $loyaltycardvalidityduration;

        return $this;
    }

    /**
     * Get loyaltycardvalidityduration.
     *
     * @return int|null
     */
    public function getLoyaltycardvalidityduration()
    {
        return $this->loyaltycardvalidityduration;
    }

    /**
     * Set loyaltycardexpirydate.
     *
     * @param \DateTime|null $loyaltycardexpirydate
     *
     * @return Customer
     */
    public function setLoyaltycardexpirydate($loyaltycardexpirydate = null)
    {
        $this->loyaltycardexpirydate = $loyaltycardexpirydate;

        return $this;
    }

    /**
     * Get loyaltycardexpirydate.
     *
     * @return \DateTime|null
     */
    public function getLoyaltycardexpirydate()
    {
        return $this->loyaltycardexpirydate;
    }

    /**
     * Set loyaltycardrenewaldate.
     *
     * @param \DateTime|null $loyaltycardrenewaldate
     *
     * @return Customer
     */
    public function setLoyaltycardrenewaldate($loyaltycardrenewaldate = null)
    {
        $this->loyaltycardrenewaldate = $loyaltycardrenewaldate;

        return $this;
    }

    /**
     * Get loyaltycardrenewaldate.
     *
     * @return \DateTime|null
     */
    public function getLoyaltycardrenewaldate()
    {
        return $this->loyaltycardrenewaldate;
    }

    /**
     * Set loyaltyoriginreporttype.
     *
     * @param int $loyaltyoriginreporttype
     *
     * @return Customer
     */
    public function setLoyaltyoriginreporttype($loyaltyoriginreporttype)
    {
        $this->loyaltyoriginreporttype = $loyaltyoriginreporttype;

        return $this;
    }

    /**
     * Get loyaltyoriginreporttype.
     *
     * @return int
     */
    public function getLoyaltyoriginreporttype()
    {
        return $this->loyaltyoriginreporttype;
    }

    /**
     * Set loyaltyoriginreportvalue.
     *
     * @param string $loyaltyoriginreportvalue
     *
     * @return Customer
     */
    public function setLoyaltyoriginreportvalue($loyaltyoriginreportvalue)
    {
        $this->loyaltyoriginreportvalue = $loyaltyoriginreportvalue;

        return $this;
    }

    /**
     * Get loyaltyoriginreportvalue.
     *
     * @return string
     */
    public function getLoyaltyoriginreportvalue()
    {
        return $this->loyaltyoriginreportvalue;
    }

    /**
     * Set loyaltyvalue.
     *
     * @param string $loyaltyvalue
     *
     * @return Customer
     */
    public function setLoyaltyvalue($loyaltyvalue)
    {
        $this->loyaltyvalue = $loyaltyvalue;

        return $this;
    }

    /**
     * Get loyaltyvalue.
     *
     * @return string
     */
    public function getLoyaltyvalue()
    {
        return $this->loyaltyvalue;
    }

    /**
     * Set id.
     *
     * @return string
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
