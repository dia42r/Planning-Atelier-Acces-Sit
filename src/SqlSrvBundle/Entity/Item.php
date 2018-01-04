<?php

namespace SqlSrvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="Item", indexes={@ORM\Index(name="Item_UniqueId_Index", columns={"UniqueId"}), @ORM\Index(name="ItemReplacementItemIdIndex", columns={"ReplacementItem"}), @ORM\Index(name="ItemRangeItemIdIndex", columns={"ParentRangeItemId"})})
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="Caption", type="string", length=80, nullable=false)
     */
    private $caption;

    /**
     * @var int
     *
     * @ORM\Column(name="ItemType", type="smallint", nullable=false)
     */
    private $itemtype;

    /**
     * @var string
     *
     * @ORM\Column(name="DefaultQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $defaultquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="VatAmount", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $vatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="SalePriceVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepricevatincluded;

    /**
     * @var bool
     *
     * @ORM\Column(name="ManageStock", type="boolean", nullable=false)
     */
    private $managestock;

    /**
     * @var string
     *
     * @ORM\Column(name="RealStock", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $realstock;

    /**
     * @var string
     *
     * @ORM\Column(name="Pump", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $pump;

    /**
     * @var string
     *
     * @ORM\Column(name="StockValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $stockvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderedQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $orderedquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="SuppliersOrderedQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $suppliersorderedquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomersDeliveryOrderPreparingQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $customersdeliveryorderpreparingquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomersReturnOrderPreparingQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $customersreturnorderpreparingquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="SuppliersDeliveryOrderPreparingQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $suppliersdeliveryorderpreparingquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="SuppliersReturnOrderPreparingQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $suppliersreturnorderpreparingquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="VirtualStock", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $virtualstock;

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
     * @ORM\Column(name="SalePriceVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepricevatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $brandrate;

    /**
     * @var string
     *
     * @ORM\Column(name="Weight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="NetWeight", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $netweight;

    /**
     * @var string
     *
     * @ORM\Column(name="Volume", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $volume;

    /**
     * @var bool
     *
     * @ORM\Column(name="UseComponentVat", type="boolean", nullable=false)
     */
    private $usecomponentvat;

    /**
     * @var bool
     *
     * @ORM\Column(name="ApplyPriceListOnComponents", type="boolean", nullable=false)
     */
    private $applypricelistoncomponents;

    /**
     * @var string
     *
     * @ORM\Column(name="ComponentsPurchasePrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $componentspurchaseprice;

    /**
     * @var string
     *
     * @ORM\Column(name="ComponentsCostPrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $componentscostprice;

    /**
     * @var string
     *
     * @ORM\Column(name="ComponentsSalePriceVatExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $componentssalepricevatexcluded;

    /**
     * @var string
     *
     * @ORM\Column(name="ComponentsSalePriceVatIncluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $componentssalepricevatincluded;

    /**
     * @var int
     *
     * @ORM\Column(name="PrintComponentDetail", type="smallint", nullable=false)
     */
    private $printcomponentdetail;

    /**
     * @var string
     *
     * @ORM\Column(name="AssemblingVirtualQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $assemblingvirtualquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="DisassemblingQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $disassemblingquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="QuantityUsedToAssemblate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $quantityusedtoassemblate;

    /**
     * @var string
     *
     * @ORM\Column(name="QuantityFromDisassembling", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $quantityfromdisassembling;

    /**
     * @var bool
     *
     * @ORM\Column(name="AllowNegativeStock", type="boolean", nullable=false)
     */
    private $allownegativestock;

    /**
     * @var string
     *
     * @ORM\Column(name="AdvisedSalePriceVATExcluded", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $advisedsalepricevatexcluded;

    /**
     * @var bool
     *
     * @ORM\Column(name="SetItemSalePriceWithAdvisedSalePrice", type="boolean", nullable=false)
     */
    private $setitemsalepricewithadvisedsaleprice;

    /**
     * @var int
     *
     * @ORM\Column(name="TrackingMode", type="smallint", nullable=false)
     */
    private $trackingmode;

    /**
     * @var bool
     *
     * @ORM\Column(name="AllowComponentsModification", type="boolean", nullable=false)
     */
    private $allowcomponentsmodification;

    /**
     * @var bool
     *
     * @ORM\Column(name="AllowPublishOnWeb", type="boolean", nullable=false)
     */
    private $allowpublishonweb;

    /**
     * @var int
     *
     * @ORM\Column(name="ImageVersion", type="integer", nullable=false)
     */
    private $imageversion;

    /**
     * @var bool
     *
     * @ORM\Column(name="PurchaseBillOfQuantitiesProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $purchasebillofquantitiesprogramKeepactivefromquotetoorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="NotOnMarket", type="boolean", nullable=false)
     */
    private $notonmarket;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsGuaranteeExtension", type="boolean", nullable=false)
     */
    private $isguaranteeextension;

    /**
     * @var int
     *
     * @ORM\Column(name="CustomerParkCreation", type="smallint", nullable=false)
     */
    private $customerparkcreation;

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
     * @var string
     *
     * @ORM\Column(name="VirtualPump", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $virtualpump;

    /**
     * @var string
     *
     * @ORM\Column(name="VirtualStockValue", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $virtualstockvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="BookedQuantity", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $bookedquantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="IncludeToRecursiveReplenishment", type="boolean", nullable=false)
     */
    private $includetorecursivereplenishment;

    /**
     * @var bool
     *
     * @ORM\Column(name="IncludeToFabricationReplenishment", type="boolean", nullable=false)
     */
    private $includetofabricationreplenishment;

    /**
     * @var bool
     *
     * @ORM\Column(name="IncludeToSupplierReplenishment", type="boolean", nullable=false)
     */
    private $includetosupplierreplenishment;

    /**
     * @var int
     *
     * @ORM\Column(name="CadenceQuantity", type="integer", nullable=false)
     */
    private $cadencequantity;

    /**
     * @var int
     *
     * @ORM\Column(name="CadenceNumberOfDays", type="integer", nullable=false)
     */
    private $cadencenumberofdays;

    /**
     * @var bool
     *
     * @ORM\Column(name="DoNotAssortAssemblyRequestsWithDifferentDates", type="boolean", nullable=false)
     */
    private $donotassortassemblyrequestswithdifferentdates;

    /**
     * @var int
     *
     * @ORM\Column(name="MaximumGapDayToAssort", type="integer", nullable=false)
     */
    private $maximumgapdaytoassort;

    /**
     * @var bool
     *
     * @ORM\Column(name="CreateCustomerProductInCustomerPark", type="boolean", nullable=false)
     */
    private $createcustomerproductincustomerpark;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsMaintenanceContract", type="boolean", nullable=false)
     */
    private $ismaintenancecontract;

    /**
     * @var int
     *
     * @ORM\Column(name="ActiveState", type="smallint", nullable=false)
     */
    private $activestate;

    /**
     * @var int
     *
     * @ORM\Column(name="PriceDecimalNumber", type="smallint", nullable=false)
     */
    private $pricedecimalnumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="InterventionDurationEqualsQuantity", type="boolean", nullable=false)
     */
    private $interventiondurationequalsquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="Height", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="Width", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="Length", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $length;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_ShowInStockNote", type="boolean", nullable=false)
     */
    private $oxatisOxatisShowinstocknote;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_ShowStockLevel", type="boolean", nullable=false)
     */
    private $oxatisOxatisShowstocklevel;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_ShowIfOutOfStock", type="boolean", nullable=false)
     */
    private $oxatisOxatisShowifoutofstock;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_SaleIfOutOfStock", type="boolean", nullable=false)
     */
    private $oxatisOxatisSaleifoutofstock;

    /**
     * @var int
     *
     * @ORM\Column(name="Oxatis_Oxatis_SaleIfOutOfStockScenario", type="integer", nullable=false)
     */
    private $oxatisOxatisSaleifoutofstockscenario;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_ShowDaysToship", type="boolean", nullable=false)
     */
    private $oxatisOxatisShowdaystoship;

    /**
     * @var string
     *
     * @ORM\Column(name="Oxatis_Oxatis_ShipPrice", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $oxatisOxatisShipprice;

    /**
     * @var int
     *
     * @ORM\Column(name="Oxatis_Oxatis_DaysToship", type="integer", nullable=false)
     */
    private $oxatisOxatisDaystoship;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_UserMainSupplierDaysToship", type="boolean", nullable=false)
     */
    private $oxatisOxatisUsermainsupplierdaystoship;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsHumanServicesIncludedInAttestation", type="boolean", nullable=false)
     */
    private $ishumanservicesincludedinattestation;

    /**
     * @var string
     *
     * @ORM\Column(name="Oxatis_Oxatis_HandlingSurcharge1ST", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $oxatisOxatisHandlingsurcharge1st;

    /**
     * @var string
     *
     * @ORM\Column(name="Oxatis_Oxatis_HandlingSurchargeOthers", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $oxatisOxatisHandlingsurchargeothers;

    /**
     * @var bool
     *
     * @ORM\Column(name="Oxatis_Oxatis_UseSubFamilyAsBrand", type="boolean", nullable=false)
     */
    private $oxatisOxatisUsesubfamilyasbrand;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsManagedByCounterMark", type="boolean", nullable=false)
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
     * @ORM\Column(name="SalePurchaseConversionRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $salepurchaseconversionrate;

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
     * @var bool
     *
     * @ORM\Column(name="PurchaseUnitPriceProgram_KeepActiveFromQuoteToOrder", type="boolean", nullable=false)
     */
    private $purchaseunitpriceprogramKeepactivefromquotetoorder;

    /**
     * @var bool
     *
     * @ORM\Column(name="UpdateComponentsStockInFabrication", type="boolean", nullable=false)
     */
    private $updatecomponentsstockinfabrication;

    /**
     * @var bool
     *
     * @ORM\Column(name="CanBePartiallyDelivered", type="boolean", nullable=false)
     */
    private $canbepartiallydelivered;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ReplenishmentDeliveryAddressType", type="smallint", nullable=true)
     */
    private $replenishmentdeliveryaddresstype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatalogId", type="guid", nullable=true)
     */
    private $catalogid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatalogItemId", type="string", length=20, nullable=true)
     */
    private $catalogitemid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EcotaxFurnitureId", type="string", length=11, nullable=true)
     */
    private $ecotaxfurnitureid;

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
     * @var int|null
     *
     * @ORM\Column(name="sysEditCounter", type="integer", nullable=true)
     */
    private $syseditcounter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LimitDateSafetyDelayMode", type="smallint", nullable=true)
     */
    private $limitdatesafetydelaymode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DefaultLifeTime", type="smallint", nullable=true)
     */
    private $defaultlifetime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PurchasePriceUpdateType", type="smallint", nullable=true)
     */
    private $purchasepriceupdatetype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AnalyticAccounting_GridId", type="string", length=40, nullable=true)
     */
    private $analyticaccountingGridid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xx_Photo_1", type="string", length=255, nullable=true)
     */
    private $xxPhoto1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xx_Photo_2", type="string", length=255, nullable=true)
     */
    private $xxPhoto2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xx_CATALOGUE", type="string", length=10, nullable=true)
     */
    private $xxCatalogue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="xx_PAGE", type="integer", nullable=true)
     */
    private $xxPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableCaption_2", type="string", length=80, nullable=true)
     */
    private $localizablecaption2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableCaption_3", type="string", length=80, nullable=true)
     */
    private $localizablecaption3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableCaption_4", type="string", length=80, nullable=true)
     */
    private $localizablecaption4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableCaption_5", type="string", length=80, nullable=true)
     */
    private $localizablecaption5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_2", type="string", length=0, nullable=true)
     */
    private $localizabledescom2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_Clear_2", type="string", length=0, nullable=true)
     */
    private $localizabledescomClear2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_3", type="string", length=0, nullable=true)
     */
    private $localizabledescom3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_Clear_3", type="string", length=0, nullable=true)
     */
    private $localizabledescomClear3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_4", type="string", length=0, nullable=true)
     */
    private $localizabledescom4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_Clear_4", type="string", length=0, nullable=true)
     */
    private $localizabledescomClear4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_5", type="string", length=0, nullable=true)
     */
    private $localizabledescom5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocalizableDesCom_Clear_5", type="string", length=0, nullable=true)
     */
    private $localizabledescomClear5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BillOfQuantitiesProgram_Program", type="string", length=0, nullable=true)
     */
    private $billofquantitiesprogramProgram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PurchaseUnitId", type="string", length=4, nullable=true)
     */
    private $purchaseunitid;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_SmallImage", type="binary", nullable=true)
     */
    private $oxatisOxatisSmallimage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainIntervener", type="string", length=20, nullable=true)
     */
    private $mainintervener;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_CategoryType1", type="smallint", nullable=true)
     */
    private $oxatisOxatisCategorytype1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_CategoryType2", type="smallint", nullable=true)
     */
    private $oxatisOxatisCategorytype2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_CategoryType3", type="smallint", nullable=true)
     */
    private $oxatisOxatisCategorytype3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_CategoryId1", type="guid", nullable=true)
     */
    private $oxatisOxatisCategoryid1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_CategoryId2", type="guid", nullable=true)
     */
    private $oxatisOxatisCategoryid2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_CategoryId3", type="guid", nullable=true)
     */
    private $oxatisOxatisCategoryid3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_MetaTitle", type="string", length=100, nullable=true)
     */
    private $oxatisOxatisMetatitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_MetaDescription", type="string", length=200, nullable=true)
     */
    private $oxatisOxatisMetadescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_MetaKeywords", type="string", length=200, nullable=true)
     */
    private $oxatisOxatisMetakeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_Brand", type="string", length=50, nullable=true)
     */
    private $oxatisOxatisBrand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DimensionUnitId", type="string", length=4, nullable=true)
     */
    private $dimensionunitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_LongDescription", type="string", length=0, nullable=true)
     */
    private $oxatisOxatisLongdescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oxatis_Oxatis_LongDescriptionClear", type="string", length=0, nullable=true)
     */
    private $oxatisOxatisLongdescriptionclear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntrastatNc8NomenclatureId", type="string", length=9, nullable=true)
     */
    private $intrastatnc8nomenclatureid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NonInvoiceableType", type="smallint", nullable=true)
     */
    private $noninvoiceabletype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MaintenanceContractTemplateId", type="string", length=8, nullable=true)
     */
    private $maintenancecontracttemplateid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DefaultAllowedStorehouseId", type="guid", nullable=true)
     */
    private $defaultallowedstorehouseid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GuaranteeTypeId", type="string", length=8, nullable=true)
     */
    private $guaranteetypeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PurchaseUnitPriceProgram_Program", type="string", length=0, nullable=true)
     */
    private $purchaseunitpriceprogramProgram;

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
     * @ORM\Column(name="ReplacementItem", type="string", length=40, nullable=true)
     */
    private $replacementitem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ComponentCalculationType", type="smallint", nullable=true)
     */
    private $componentcalculationtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VolumeUnitId", type="string", length=4, nullable=true)
     */
    private $volumeunitid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WeightUnitId", type="string", length=4, nullable=true)
     */
    private $weightunitid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumberOfItemByPackage", type="integer", nullable=true)
     */
    private $numberofitembypackage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VatId", type="guid", nullable=true)
     */
    private $vatid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EcotaxId", type="string", length=8, nullable=true)
     */
    private $ecotaxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="StockDestination", type="smallint", nullable=true)
     */
    private $stockdestination;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StockVarianceAccount", type="string", length=20, nullable=true)
     */
    private $stockvarianceaccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CurrentStockAccount", type="string", length=20, nullable=true)
     */
    private $currentstockaccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SupplierId", type="string", length=20, nullable=true)
     */
    private $supplierid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DesCom", type="string", length=0, nullable=true)
     */
    private $descom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DesComClear", type="string", length=0, nullable=true)
     */
    private $descomclear;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="ItemImage", type="binary", nullable=true)
     */
    private $itemimage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BarCode", type="string", length=40, nullable=true)
     */
    private $barcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UnitId", type="string", length=4, nullable=true)
     */
    private $unitid;

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
     * @ORM\Column(name="xx_Ecart_Oeillet", type="string", length=10, nullable=true)
     */
    private $xxEcartOeillet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="xx_Grammage", type="integer", nullable=true)
     */
    private $xxGrammage;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="PosThumbnail", type="binary", nullable=true)
     */
    private $posthumbnail;

    /**
     * @var int
     *
     * @ORM\Column(name="BarCodePrice", type="smallint", nullable=false)
     */
    private $barcodeprice;

    /**
     * @var int
     *
     * @ORM\Column(name="BarCodeWeight", type="smallint", nullable=false)
     */
    private $barcodeweight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IntrastatOriginCountryId", type="string", length=3, nullable=true)
     */
    private $intrastatorigincountryid;

    /**
     * @var bool
     *
     * @ORM\Column(name="IntrastatExcluded", type="boolean", nullable=false)
     */
    private $intrastatexcluded;

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
     * @var int
     *
     * @ORM\Column(name="NomenclatureAccountingTransferTypeForSale", type="smallint", nullable=false)
     */
    private $nomenclatureaccountingtransfertypeforsale;

    /**
     * @var int
     *
     * @ORM\Column(name="NomenclatureAccountingTransferTypeForPurchase", type="smallint", nullable=false)
     */
    private $nomenclatureaccountingtransfertypeforpurchase;

    /**
     * @var string
     *
     * @ORM\Column(name="PurchaseChargesRate", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $purchasechargesrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="PosAddItem", type="boolean", nullable=false)
     */
    private $posadditem;

    /**
     * @var string
     *
     * @ORM\Column(name="LoyaltyPoints", type="decimal", precision=28, scale=8, nullable=false)
     */
    private $loyaltypoints;

    /**
     * @var int
     *
     * @ORM\Column(name="CalculateLoyaltyFrom", type="smallint", nullable=false)
     */
    private $calculateloyaltyfrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ParentRangeItemId", type="string", length=40, nullable=true)
     */
    private $parentrangeitemid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RangeTypeElementId0", type="guid", nullable=true)
     */
    private $rangetypeelementid0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RangeTypeElementId1", type="guid", nullable=true)
     */
    private $rangetypeelementid1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RangeTypeElementId2", type="guid", nullable=true)
     */
    private $rangetypeelementid2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RangeTypeElementId3", type="guid", nullable=true)
     */
    private $rangetypeelementid3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RangeTypeElementId4", type="guid", nullable=true)
     */
    private $rangetypeelementid4;

    /**
     * @var bool
     *
     * @ORM\Column(name="GiftVoucher", type="boolean", nullable=false)
     */
    private $giftvoucher;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GiftVoucherCashValue", type="decimal", precision=28, scale=8, nullable=true)
     */
    private $giftvouchercashvalue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="GiftVoucherValidityDuration", type="smallint", nullable=true)
     */
    private $giftvouchervalidityduration;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set caption.
     *
     * @param string $caption
     *
     * @return Item
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
     * Set itemtype.
     *
     * @param int $itemtype
     *
     * @return Item
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype.
     *
     * @return int
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set defaultquantity.
     *
     * @param string $defaultquantity
     *
     * @return Item
     */
    public function setDefaultquantity($defaultquantity)
    {
        $this->defaultquantity = $defaultquantity;

        return $this;
    }

    /**
     * Get defaultquantity.
     *
     * @return string
     */
    public function getDefaultquantity()
    {
        return $this->defaultquantity;
    }

    /**
     * Set vatamount.
     *
     * @param string $vatamount
     *
     * @return Item
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
     * Set salepricevatincluded.
     *
     * @param string $salepricevatincluded
     *
     * @return Item
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
     * Set managestock.
     *
     * @param bool $managestock
     *
     * @return Item
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
     * Set realstock.
     *
     * @param string $realstock
     *
     * @return Item
     */
    public function setRealstock($realstock)
    {
        $this->realstock = $realstock;

        return $this;
    }

    /**
     * Get realstock.
     *
     * @return string
     */
    public function getRealstock()
    {
        return $this->realstock;
    }

    /**
     * Set pump.
     *
     * @param string $pump
     *
     * @return Item
     */
    public function setPump($pump)
    {
        $this->pump = $pump;

        return $this;
    }

    /**
     * Get pump.
     *
     * @return string
     */
    public function getPump()
    {
        return $this->pump;
    }

    /**
     * Set stockvalue.
     *
     * @param string $stockvalue
     *
     * @return Item
     */
    public function setStockvalue($stockvalue)
    {
        $this->stockvalue = $stockvalue;

        return $this;
    }

    /**
     * Get stockvalue.
     *
     * @return string
     */
    public function getStockvalue()
    {
        return $this->stockvalue;
    }

    /**
     * Set orderedquantity.
     *
     * @param string $orderedquantity
     *
     * @return Item
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
     * Set suppliersorderedquantity.
     *
     * @param string $suppliersorderedquantity
     *
     * @return Item
     */
    public function setSuppliersorderedquantity($suppliersorderedquantity)
    {
        $this->suppliersorderedquantity = $suppliersorderedquantity;

        return $this;
    }

    /**
     * Get suppliersorderedquantity.
     *
     * @return string
     */
    public function getSuppliersorderedquantity()
    {
        return $this->suppliersorderedquantity;
    }

    /**
     * Set customersdeliveryorderpreparingquantity.
     *
     * @param string $customersdeliveryorderpreparingquantity
     *
     * @return Item
     */
    public function setCustomersdeliveryorderpreparingquantity($customersdeliveryorderpreparingquantity)
    {
        $this->customersdeliveryorderpreparingquantity = $customersdeliveryorderpreparingquantity;

        return $this;
    }

    /**
     * Get customersdeliveryorderpreparingquantity.
     *
     * @return string
     */
    public function getCustomersdeliveryorderpreparingquantity()
    {
        return $this->customersdeliveryorderpreparingquantity;
    }

    /**
     * Set customersreturnorderpreparingquantity.
     *
     * @param string $customersreturnorderpreparingquantity
     *
     * @return Item
     */
    public function setCustomersreturnorderpreparingquantity($customersreturnorderpreparingquantity)
    {
        $this->customersreturnorderpreparingquantity = $customersreturnorderpreparingquantity;

        return $this;
    }

    /**
     * Get customersreturnorderpreparingquantity.
     *
     * @return string
     */
    public function getCustomersreturnorderpreparingquantity()
    {
        return $this->customersreturnorderpreparingquantity;
    }

    /**
     * Set suppliersdeliveryorderpreparingquantity.
     *
     * @param string $suppliersdeliveryorderpreparingquantity
     *
     * @return Item
     */
    public function setSuppliersdeliveryorderpreparingquantity($suppliersdeliveryorderpreparingquantity)
    {
        $this->suppliersdeliveryorderpreparingquantity = $suppliersdeliveryorderpreparingquantity;

        return $this;
    }

    /**
     * Get suppliersdeliveryorderpreparingquantity.
     *
     * @return string
     */
    public function getSuppliersdeliveryorderpreparingquantity()
    {
        return $this->suppliersdeliveryorderpreparingquantity;
    }

    /**
     * Set suppliersreturnorderpreparingquantity.
     *
     * @param string $suppliersreturnorderpreparingquantity
     *
     * @return Item
     */
    public function setSuppliersreturnorderpreparingquantity($suppliersreturnorderpreparingquantity)
    {
        $this->suppliersreturnorderpreparingquantity = $suppliersreturnorderpreparingquantity;

        return $this;
    }

    /**
     * Get suppliersreturnorderpreparingquantity.
     *
     * @return string
     */
    public function getSuppliersreturnorderpreparingquantity()
    {
        return $this->suppliersreturnorderpreparingquantity;
    }

    /**
     * Set virtualstock.
     *
     * @param string $virtualstock
     *
     * @return Item
     */
    public function setVirtualstock($virtualstock)
    {
        $this->virtualstock = $virtualstock;

        return $this;
    }

    /**
     * Get virtualstock.
     *
     * @return string
     */
    public function getVirtualstock()
    {
        return $this->virtualstock;
    }

    /**
     * Set purchaseprice.
     *
     * @param string $purchaseprice
     *
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set interestrate.
     *
     * @param string $interestrate
     *
     * @return Item
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
     * @return Item
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
     * Set salepricevatexcluded.
     *
     * @param string $salepricevatexcluded
     *
     * @return Item
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
     * Set brandrate.
     *
     * @param string $brandrate
     *
     * @return Item
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
     * Set weight.
     *
     * @param string $weight
     *
     * @return Item
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
     * Set netweight.
     *
     * @param string $netweight
     *
     * @return Item
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
     * Set volume.
     *
     * @param string $volume
     *
     * @return Item
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
     * Set usecomponentvat.
     *
     * @param bool $usecomponentvat
     *
     * @return Item
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
     * Set applypricelistoncomponents.
     *
     * @param bool $applypricelistoncomponents
     *
     * @return Item
     */
    public function setApplypricelistoncomponents($applypricelistoncomponents)
    {
        $this->applypricelistoncomponents = $applypricelistoncomponents;

        return $this;
    }

    /**
     * Get applypricelistoncomponents.
     *
     * @return bool
     */
    public function getApplypricelistoncomponents()
    {
        return $this->applypricelistoncomponents;
    }

    /**
     * Set componentspurchaseprice.
     *
     * @param string $componentspurchaseprice
     *
     * @return Item
     */
    public function setComponentspurchaseprice($componentspurchaseprice)
    {
        $this->componentspurchaseprice = $componentspurchaseprice;

        return $this;
    }

    /**
     * Get componentspurchaseprice.
     *
     * @return string
     */
    public function getComponentspurchaseprice()
    {
        return $this->componentspurchaseprice;
    }

    /**
     * Set componentscostprice.
     *
     * @param string $componentscostprice
     *
     * @return Item
     */
    public function setComponentscostprice($componentscostprice)
    {
        $this->componentscostprice = $componentscostprice;

        return $this;
    }

    /**
     * Get componentscostprice.
     *
     * @return string
     */
    public function getComponentscostprice()
    {
        return $this->componentscostprice;
    }

    /**
     * Set componentssalepricevatexcluded.
     *
     * @param string $componentssalepricevatexcluded
     *
     * @return Item
     */
    public function setComponentssalepricevatexcluded($componentssalepricevatexcluded)
    {
        $this->componentssalepricevatexcluded = $componentssalepricevatexcluded;

        return $this;
    }

    /**
     * Get componentssalepricevatexcluded.
     *
     * @return string
     */
    public function getComponentssalepricevatexcluded()
    {
        return $this->componentssalepricevatexcluded;
    }

    /**
     * Set componentssalepricevatincluded.
     *
     * @param string $componentssalepricevatincluded
     *
     * @return Item
     */
    public function setComponentssalepricevatincluded($componentssalepricevatincluded)
    {
        $this->componentssalepricevatincluded = $componentssalepricevatincluded;

        return $this;
    }

    /**
     * Get componentssalepricevatincluded.
     *
     * @return string
     */
    public function getComponentssalepricevatincluded()
    {
        return $this->componentssalepricevatincluded;
    }

    /**
     * Set printcomponentdetail.
     *
     * @param int $printcomponentdetail
     *
     * @return Item
     */
    public function setPrintcomponentdetail($printcomponentdetail)
    {
        $this->printcomponentdetail = $printcomponentdetail;

        return $this;
    }

    /**
     * Get printcomponentdetail.
     *
     * @return int
     */
    public function getPrintcomponentdetail()
    {
        return $this->printcomponentdetail;
    }

    /**
     * Set assemblingvirtualquantity.
     *
     * @param string $assemblingvirtualquantity
     *
     * @return Item
     */
    public function setAssemblingvirtualquantity($assemblingvirtualquantity)
    {
        $this->assemblingvirtualquantity = $assemblingvirtualquantity;

        return $this;
    }

    /**
     * Get assemblingvirtualquantity.
     *
     * @return string
     */
    public function getAssemblingvirtualquantity()
    {
        return $this->assemblingvirtualquantity;
    }

    /**
     * Set disassemblingquantity.
     *
     * @param string $disassemblingquantity
     *
     * @return Item
     */
    public function setDisassemblingquantity($disassemblingquantity)
    {
        $this->disassemblingquantity = $disassemblingquantity;

        return $this;
    }

    /**
     * Get disassemblingquantity.
     *
     * @return string
     */
    public function getDisassemblingquantity()
    {
        return $this->disassemblingquantity;
    }

    /**
     * Set quantityusedtoassemblate.
     *
     * @param string $quantityusedtoassemblate
     *
     * @return Item
     */
    public function setQuantityusedtoassemblate($quantityusedtoassemblate)
    {
        $this->quantityusedtoassemblate = $quantityusedtoassemblate;

        return $this;
    }

    /**
     * Get quantityusedtoassemblate.
     *
     * @return string
     */
    public function getQuantityusedtoassemblate()
    {
        return $this->quantityusedtoassemblate;
    }

    /**
     * Set quantityfromdisassembling.
     *
     * @param string $quantityfromdisassembling
     *
     * @return Item
     */
    public function setQuantityfromdisassembling($quantityfromdisassembling)
    {
        $this->quantityfromdisassembling = $quantityfromdisassembling;

        return $this;
    }

    /**
     * Get quantityfromdisassembling.
     *
     * @return string
     */
    public function getQuantityfromdisassembling()
    {
        return $this->quantityfromdisassembling;
    }

    /**
     * Set allownegativestock.
     *
     * @param bool $allownegativestock
     *
     * @return Item
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
     * Set advisedsalepricevatexcluded.
     *
     * @param string $advisedsalepricevatexcluded
     *
     * @return Item
     */
    public function setAdvisedsalepricevatexcluded($advisedsalepricevatexcluded)
    {
        $this->advisedsalepricevatexcluded = $advisedsalepricevatexcluded;

        return $this;
    }

    /**
     * Get advisedsalepricevatexcluded.
     *
     * @return string
     */
    public function getAdvisedsalepricevatexcluded()
    {
        return $this->advisedsalepricevatexcluded;
    }

    /**
     * Set setitemsalepricewithadvisedsaleprice.
     *
     * @param bool $setitemsalepricewithadvisedsaleprice
     *
     * @return Item
     */
    public function setSetitemsalepricewithadvisedsaleprice($setitemsalepricewithadvisedsaleprice)
    {
        $this->setitemsalepricewithadvisedsaleprice = $setitemsalepricewithadvisedsaleprice;

        return $this;
    }

    /**
     * Get setitemsalepricewithadvisedsaleprice.
     *
     * @return bool
     */
    public function getSetitemsalepricewithadvisedsaleprice()
    {
        return $this->setitemsalepricewithadvisedsaleprice;
    }

    /**
     * Set trackingmode.
     *
     * @param int $trackingmode
     *
     * @return Item
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
     * Set allowcomponentsmodification.
     *
     * @param bool $allowcomponentsmodification
     *
     * @return Item
     */
    public function setAllowcomponentsmodification($allowcomponentsmodification)
    {
        $this->allowcomponentsmodification = $allowcomponentsmodification;

        return $this;
    }

    /**
     * Get allowcomponentsmodification.
     *
     * @return bool
     */
    public function getAllowcomponentsmodification()
    {
        return $this->allowcomponentsmodification;
    }

    /**
     * Set allowpublishonweb.
     *
     * @param bool $allowpublishonweb
     *
     * @return Item
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
     * Set imageversion.
     *
     * @param int $imageversion
     *
     * @return Item
     */
    public function setImageversion($imageversion)
    {
        $this->imageversion = $imageversion;

        return $this;
    }

    /**
     * Get imageversion.
     *
     * @return int
     */
    public function getImageversion()
    {
        return $this->imageversion;
    }

    /**
     * Set purchasebillofquantitiesprogramKeepactivefromquotetoorder.
     *
     * @param bool $purchasebillofquantitiesprogramKeepactivefromquotetoorder
     *
     * @return Item
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
     * Set notonmarket.
     *
     * @param bool $notonmarket
     *
     * @return Item
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
     * Set isguaranteeextension.
     *
     * @param bool $isguaranteeextension
     *
     * @return Item
     */
    public function setIsguaranteeextension($isguaranteeextension)
    {
        $this->isguaranteeextension = $isguaranteeextension;

        return $this;
    }

    /**
     * Get isguaranteeextension.
     *
     * @return bool
     */
    public function getIsguaranteeextension()
    {
        return $this->isguaranteeextension;
    }

    /**
     * Set customerparkcreation.
     *
     * @param int $customerparkcreation
     *
     * @return Item
     */
    public function setCustomerparkcreation($customerparkcreation)
    {
        $this->customerparkcreation = $customerparkcreation;

        return $this;
    }

    /**
     * Get customerparkcreation.
     *
     * @return int
     */
    public function getCustomerparkcreation()
    {
        return $this->customerparkcreation;
    }

    /**
     * Set stockbookingallowed.
     *
     * @param bool $stockbookingallowed
     *
     * @return Item
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
     * @return Item
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
     * Set virtualpump.
     *
     * @param string $virtualpump
     *
     * @return Item
     */
    public function setVirtualpump($virtualpump)
    {
        $this->virtualpump = $virtualpump;

        return $this;
    }

    /**
     * Get virtualpump.
     *
     * @return string
     */
    public function getVirtualpump()
    {
        return $this->virtualpump;
    }

    /**
     * Set virtualstockvalue.
     *
     * @param string $virtualstockvalue
     *
     * @return Item
     */
    public function setVirtualstockvalue($virtualstockvalue)
    {
        $this->virtualstockvalue = $virtualstockvalue;

        return $this;
    }

    /**
     * Get virtualstockvalue.
     *
     * @return string
     */
    public function getVirtualstockvalue()
    {
        return $this->virtualstockvalue;
    }

    /**
     * Set bookedquantity.
     *
     * @param string $bookedquantity
     *
     * @return Item
     */
    public function setBookedquantity($bookedquantity)
    {
        $this->bookedquantity = $bookedquantity;

        return $this;
    }

    /**
     * Get bookedquantity.
     *
     * @return string
     */
    public function getBookedquantity()
    {
        return $this->bookedquantity;
    }

    /**
     * Set includetorecursivereplenishment.
     *
     * @param bool $includetorecursivereplenishment
     *
     * @return Item
     */
    public function setIncludetorecursivereplenishment($includetorecursivereplenishment)
    {
        $this->includetorecursivereplenishment = $includetorecursivereplenishment;

        return $this;
    }

    /**
     * Get includetorecursivereplenishment.
     *
     * @return bool
     */
    public function getIncludetorecursivereplenishment()
    {
        return $this->includetorecursivereplenishment;
    }

    /**
     * Set includetofabricationreplenishment.
     *
     * @param bool $includetofabricationreplenishment
     *
     * @return Item
     */
    public function setIncludetofabricationreplenishment($includetofabricationreplenishment)
    {
        $this->includetofabricationreplenishment = $includetofabricationreplenishment;

        return $this;
    }

    /**
     * Get includetofabricationreplenishment.
     *
     * @return bool
     */
    public function getIncludetofabricationreplenishment()
    {
        return $this->includetofabricationreplenishment;
    }

    /**
     * Set includetosupplierreplenishment.
     *
     * @param bool $includetosupplierreplenishment
     *
     * @return Item
     */
    public function setIncludetosupplierreplenishment($includetosupplierreplenishment)
    {
        $this->includetosupplierreplenishment = $includetosupplierreplenishment;

        return $this;
    }

    /**
     * Get includetosupplierreplenishment.
     *
     * @return bool
     */
    public function getIncludetosupplierreplenishment()
    {
        return $this->includetosupplierreplenishment;
    }

    /**
     * Set cadencequantity.
     *
     * @param int $cadencequantity
     *
     * @return Item
     */
    public function setCadencequantity($cadencequantity)
    {
        $this->cadencequantity = $cadencequantity;

        return $this;
    }

    /**
     * Get cadencequantity.
     *
     * @return int
     */
    public function getCadencequantity()
    {
        return $this->cadencequantity;
    }

    /**
     * Set cadencenumberofdays.
     *
     * @param int $cadencenumberofdays
     *
     * @return Item
     */
    public function setCadencenumberofdays($cadencenumberofdays)
    {
        $this->cadencenumberofdays = $cadencenumberofdays;

        return $this;
    }

    /**
     * Get cadencenumberofdays.
     *
     * @return int
     */
    public function getCadencenumberofdays()
    {
        return $this->cadencenumberofdays;
    }

    /**
     * Set donotassortassemblyrequestswithdifferentdates.
     *
     * @param bool $donotassortassemblyrequestswithdifferentdates
     *
     * @return Item
     */
    public function setDonotassortassemblyrequestswithdifferentdates($donotassortassemblyrequestswithdifferentdates)
    {
        $this->donotassortassemblyrequestswithdifferentdates = $donotassortassemblyrequestswithdifferentdates;

        return $this;
    }

    /**
     * Get donotassortassemblyrequestswithdifferentdates.
     *
     * @return bool
     */
    public function getDonotassortassemblyrequestswithdifferentdates()
    {
        return $this->donotassortassemblyrequestswithdifferentdates;
    }

    /**
     * Set maximumgapdaytoassort.
     *
     * @param int $maximumgapdaytoassort
     *
     * @return Item
     */
    public function setMaximumgapdaytoassort($maximumgapdaytoassort)
    {
        $this->maximumgapdaytoassort = $maximumgapdaytoassort;

        return $this;
    }

    /**
     * Get maximumgapdaytoassort.
     *
     * @return int
     */
    public function getMaximumgapdaytoassort()
    {
        return $this->maximumgapdaytoassort;
    }

    /**
     * Set createcustomerproductincustomerpark.
     *
     * @param bool $createcustomerproductincustomerpark
     *
     * @return Item
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
     * Set ismaintenancecontract.
     *
     * @param bool $ismaintenancecontract
     *
     * @return Item
     */
    public function setIsmaintenancecontract($ismaintenancecontract)
    {
        $this->ismaintenancecontract = $ismaintenancecontract;

        return $this;
    }

    /**
     * Get ismaintenancecontract.
     *
     * @return bool
     */
    public function getIsmaintenancecontract()
    {
        return $this->ismaintenancecontract;
    }

    /**
     * Set activestate.
     *
     * @param int $activestate
     *
     * @return Item
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
     * Set pricedecimalnumber.
     *
     * @param int $pricedecimalnumber
     *
     * @return Item
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
     * Set interventiondurationequalsquantity.
     *
     * @param bool $interventiondurationequalsquantity
     *
     * @return Item
     */
    public function setInterventiondurationequalsquantity($interventiondurationequalsquantity)
    {
        $this->interventiondurationequalsquantity = $interventiondurationequalsquantity;

        return $this;
    }

    /**
     * Get interventiondurationequalsquantity.
     *
     * @return bool
     */
    public function getInterventiondurationequalsquantity()
    {
        return $this->interventiondurationequalsquantity;
    }

    /**
     * Set height.
     *
     * @param string $height
     *
     * @return Item
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set width.
     *
     * @param string $width
     *
     * @return Item
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set length.
     *
     * @param string $length
     *
     * @return Item
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length.
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set oxatisOxatisShowinstocknote.
     *
     * @param bool $oxatisOxatisShowinstocknote
     *
     * @return Item
     */
    public function setOxatisOxatisShowinstocknote($oxatisOxatisShowinstocknote)
    {
        $this->oxatisOxatisShowinstocknote = $oxatisOxatisShowinstocknote;

        return $this;
    }

    /**
     * Get oxatisOxatisShowinstocknote.
     *
     * @return bool
     */
    public function getOxatisOxatisShowinstocknote()
    {
        return $this->oxatisOxatisShowinstocknote;
    }

    /**
     * Set oxatisOxatisShowstocklevel.
     *
     * @param bool $oxatisOxatisShowstocklevel
     *
     * @return Item
     */
    public function setOxatisOxatisShowstocklevel($oxatisOxatisShowstocklevel)
    {
        $this->oxatisOxatisShowstocklevel = $oxatisOxatisShowstocklevel;

        return $this;
    }

    /**
     * Get oxatisOxatisShowstocklevel.
     *
     * @return bool
     */
    public function getOxatisOxatisShowstocklevel()
    {
        return $this->oxatisOxatisShowstocklevel;
    }

    /**
     * Set oxatisOxatisShowifoutofstock.
     *
     * @param bool $oxatisOxatisShowifoutofstock
     *
     * @return Item
     */
    public function setOxatisOxatisShowifoutofstock($oxatisOxatisShowifoutofstock)
    {
        $this->oxatisOxatisShowifoutofstock = $oxatisOxatisShowifoutofstock;

        return $this;
    }

    /**
     * Get oxatisOxatisShowifoutofstock.
     *
     * @return bool
     */
    public function getOxatisOxatisShowifoutofstock()
    {
        return $this->oxatisOxatisShowifoutofstock;
    }

    /**
     * Set oxatisOxatisSaleifoutofstock.
     *
     * @param bool $oxatisOxatisSaleifoutofstock
     *
     * @return Item
     */
    public function setOxatisOxatisSaleifoutofstock($oxatisOxatisSaleifoutofstock)
    {
        $this->oxatisOxatisSaleifoutofstock = $oxatisOxatisSaleifoutofstock;

        return $this;
    }

    /**
     * Get oxatisOxatisSaleifoutofstock.
     *
     * @return bool
     */
    public function getOxatisOxatisSaleifoutofstock()
    {
        return $this->oxatisOxatisSaleifoutofstock;
    }

    /**
     * Set oxatisOxatisSaleifoutofstockscenario.
     *
     * @param int $oxatisOxatisSaleifoutofstockscenario
     *
     * @return Item
     */
    public function setOxatisOxatisSaleifoutofstockscenario($oxatisOxatisSaleifoutofstockscenario)
    {
        $this->oxatisOxatisSaleifoutofstockscenario = $oxatisOxatisSaleifoutofstockscenario;

        return $this;
    }

    /**
     * Get oxatisOxatisSaleifoutofstockscenario.
     *
     * @return int
     */
    public function getOxatisOxatisSaleifoutofstockscenario()
    {
        return $this->oxatisOxatisSaleifoutofstockscenario;
    }

    /**
     * Set oxatisOxatisShowdaystoship.
     *
     * @param bool $oxatisOxatisShowdaystoship
     *
     * @return Item
     */
    public function setOxatisOxatisShowdaystoship($oxatisOxatisShowdaystoship)
    {
        $this->oxatisOxatisShowdaystoship = $oxatisOxatisShowdaystoship;

        return $this;
    }

    /**
     * Get oxatisOxatisShowdaystoship.
     *
     * @return bool
     */
    public function getOxatisOxatisShowdaystoship()
    {
        return $this->oxatisOxatisShowdaystoship;
    }

    /**
     * Set oxatisOxatisShipprice.
     *
     * @param string $oxatisOxatisShipprice
     *
     * @return Item
     */
    public function setOxatisOxatisShipprice($oxatisOxatisShipprice)
    {
        $this->oxatisOxatisShipprice = $oxatisOxatisShipprice;

        return $this;
    }

    /**
     * Get oxatisOxatisShipprice.
     *
     * @return string
     */
    public function getOxatisOxatisShipprice()
    {
        return $this->oxatisOxatisShipprice;
    }

    /**
     * Set oxatisOxatisDaystoship.
     *
     * @param int $oxatisOxatisDaystoship
     *
     * @return Item
     */
    public function setOxatisOxatisDaystoship($oxatisOxatisDaystoship)
    {
        $this->oxatisOxatisDaystoship = $oxatisOxatisDaystoship;

        return $this;
    }

    /**
     * Get oxatisOxatisDaystoship.
     *
     * @return int
     */
    public function getOxatisOxatisDaystoship()
    {
        return $this->oxatisOxatisDaystoship;
    }

    /**
     * Set oxatisOxatisUsermainsupplierdaystoship.
     *
     * @param bool $oxatisOxatisUsermainsupplierdaystoship
     *
     * @return Item
     */
    public function setOxatisOxatisUsermainsupplierdaystoship($oxatisOxatisUsermainsupplierdaystoship)
    {
        $this->oxatisOxatisUsermainsupplierdaystoship = $oxatisOxatisUsermainsupplierdaystoship;

        return $this;
    }

    /**
     * Get oxatisOxatisUsermainsupplierdaystoship.
     *
     * @return bool
     */
    public function getOxatisOxatisUsermainsupplierdaystoship()
    {
        return $this->oxatisOxatisUsermainsupplierdaystoship;
    }

    /**
     * Set ishumanservicesincludedinattestation.
     *
     * @param bool $ishumanservicesincludedinattestation
     *
     * @return Item
     */
    public function setIshumanservicesincludedinattestation($ishumanservicesincludedinattestation)
    {
        $this->ishumanservicesincludedinattestation = $ishumanservicesincludedinattestation;

        return $this;
    }

    /**
     * Get ishumanservicesincludedinattestation.
     *
     * @return bool
     */
    public function getIshumanservicesincludedinattestation()
    {
        return $this->ishumanservicesincludedinattestation;
    }

    /**
     * Set oxatisOxatisHandlingsurcharge1st.
     *
     * @param string $oxatisOxatisHandlingsurcharge1st
     *
     * @return Item
     */
    public function setOxatisOxatisHandlingsurcharge1st($oxatisOxatisHandlingsurcharge1st)
    {
        $this->oxatisOxatisHandlingsurcharge1st = $oxatisOxatisHandlingsurcharge1st;

        return $this;
    }

    /**
     * Get oxatisOxatisHandlingsurcharge1st.
     *
     * @return string
     */
    public function getOxatisOxatisHandlingsurcharge1st()
    {
        return $this->oxatisOxatisHandlingsurcharge1st;
    }

    /**
     * Set oxatisOxatisHandlingsurchargeothers.
     *
     * @param string $oxatisOxatisHandlingsurchargeothers
     *
     * @return Item
     */
    public function setOxatisOxatisHandlingsurchargeothers($oxatisOxatisHandlingsurchargeothers)
    {
        $this->oxatisOxatisHandlingsurchargeothers = $oxatisOxatisHandlingsurchargeothers;

        return $this;
    }

    /**
     * Get oxatisOxatisHandlingsurchargeothers.
     *
     * @return string
     */
    public function getOxatisOxatisHandlingsurchargeothers()
    {
        return $this->oxatisOxatisHandlingsurchargeothers;
    }

    /**
     * Set oxatisOxatisUsesubfamilyasbrand.
     *
     * @param bool $oxatisOxatisUsesubfamilyasbrand
     *
     * @return Item
     */
    public function setOxatisOxatisUsesubfamilyasbrand($oxatisOxatisUsesubfamilyasbrand)
    {
        $this->oxatisOxatisUsesubfamilyasbrand = $oxatisOxatisUsesubfamilyasbrand;

        return $this;
    }

    /**
     * Get oxatisOxatisUsesubfamilyasbrand.
     *
     * @return bool
     */
    public function getOxatisOxatisUsesubfamilyasbrand()
    {
        return $this->oxatisOxatisUsesubfamilyasbrand;
    }

    /**
     * Set ismanagedbycountermark.
     *
     * @param bool $ismanagedbycountermark
     *
     * @return Item
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
     * @return Item
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
     * Set salepurchaseconversionrate.
     *
     * @param string $salepurchaseconversionrate
     *
     * @return Item
     */
    public function setSalepurchaseconversionrate($salepurchaseconversionrate)
    {
        $this->salepurchaseconversionrate = $salepurchaseconversionrate;

        return $this;
    }

    /**
     * Get salepurchaseconversionrate.
     *
     * @return string
     */
    public function getSalepurchaseconversionrate()
    {
        return $this->salepurchaseconversionrate;
    }

    /**
     * Set limitdatemode.
     *
     * @param int $limitdatemode
     *
     * @return Item
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
     * @return Item
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
     * Set uniqueid.
     *
     * @param string $uniqueid
     *
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set purchaseunitpriceprogramKeepactivefromquotetoorder.
     *
     * @param bool $purchaseunitpriceprogramKeepactivefromquotetoorder
     *
     * @return Item
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
     * Set updatecomponentsstockinfabrication.
     *
     * @param bool $updatecomponentsstockinfabrication
     *
     * @return Item
     */
    public function setUpdatecomponentsstockinfabrication($updatecomponentsstockinfabrication)
    {
        $this->updatecomponentsstockinfabrication = $updatecomponentsstockinfabrication;

        return $this;
    }

    /**
     * Get updatecomponentsstockinfabrication.
     *
     * @return bool
     */
    public function getUpdatecomponentsstockinfabrication()
    {
        return $this->updatecomponentsstockinfabrication;
    }

    /**
     * Set canbepartiallydelivered.
     *
     * @param bool $canbepartiallydelivered
     *
     * @return Item
     */
    public function setCanbepartiallydelivered($canbepartiallydelivered)
    {
        $this->canbepartiallydelivered = $canbepartiallydelivered;

        return $this;
    }

    /**
     * Get canbepartiallydelivered.
     *
     * @return bool
     */
    public function getCanbepartiallydelivered()
    {
        return $this->canbepartiallydelivered;
    }

    /**
     * Set replenishmentdeliveryaddresstype.
     *
     * @param int|null $replenishmentdeliveryaddresstype
     *
     * @return Item
     */
    public function setReplenishmentdeliveryaddresstype($replenishmentdeliveryaddresstype = null)
    {
        $this->replenishmentdeliveryaddresstype = $replenishmentdeliveryaddresstype;

        return $this;
    }

    /**
     * Get replenishmentdeliveryaddresstype.
     *
     * @return int|null
     */
    public function getReplenishmentdeliveryaddresstype()
    {
        return $this->replenishmentdeliveryaddresstype;
    }

    /**
     * Set catalogid.
     *
     * @param string|null $catalogid
     *
     * @return Item
     */
    public function setCatalogid($catalogid = null)
    {
        $this->catalogid = $catalogid;

        return $this;
    }

    /**
     * Get catalogid.
     *
     * @return string|null
     */
    public function getCatalogid()
    {
        return $this->catalogid;
    }

    /**
     * Set catalogitemid.
     *
     * @param string|null $catalogitemid
     *
     * @return Item
     */
    public function setCatalogitemid($catalogitemid = null)
    {
        $this->catalogitemid = $catalogitemid;

        return $this;
    }

    /**
     * Get catalogitemid.
     *
     * @return string|null
     */
    public function getCatalogitemid()
    {
        return $this->catalogitemid;
    }

    /**
     * Set ecotaxfurnitureid.
     *
     * @param string|null $ecotaxfurnitureid
     *
     * @return Item
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
     * Set purchasebillofquantitiesprogramProgram.
     *
     * @param string|null $purchasebillofquantitiesprogramProgram
     *
     * @return Item
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
     * @return Item
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
     * Set sysmoduleid.
     *
     * @param string|null $sysmoduleid
     *
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set limitdatesafetydelaymode.
     *
     * @param int|null $limitdatesafetydelaymode
     *
     * @return Item
     */
    public function setLimitdatesafetydelaymode($limitdatesafetydelaymode = null)
    {
        $this->limitdatesafetydelaymode = $limitdatesafetydelaymode;

        return $this;
    }

    /**
     * Get limitdatesafetydelaymode.
     *
     * @return int|null
     */
    public function getLimitdatesafetydelaymode()
    {
        return $this->limitdatesafetydelaymode;
    }

    /**
     * Set defaultlifetime.
     *
     * @param int|null $defaultlifetime
     *
     * @return Item
     */
    public function setDefaultlifetime($defaultlifetime = null)
    {
        $this->defaultlifetime = $defaultlifetime;

        return $this;
    }

    /**
     * Get defaultlifetime.
     *
     * @return int|null
     */
    public function getDefaultlifetime()
    {
        return $this->defaultlifetime;
    }

    /**
     * Set purchasepriceupdatetype.
     *
     * @param int|null $purchasepriceupdatetype
     *
     * @return Item
     */
    public function setPurchasepriceupdatetype($purchasepriceupdatetype = null)
    {
        $this->purchasepriceupdatetype = $purchasepriceupdatetype;

        return $this;
    }

    /**
     * Get purchasepriceupdatetype.
     *
     * @return int|null
     */
    public function getPurchasepriceupdatetype()
    {
        return $this->purchasepriceupdatetype;
    }

    /**
     * Set analyticaccountingGridid.
     *
     * @param string|null $analyticaccountingGridid
     *
     * @return Item
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
     * Set xxPhoto1.
     *
     * @param string|null $xxPhoto1
     *
     * @return Item
     */
    public function setXxPhoto1($xxPhoto1 = null)
    {
        $this->xxPhoto1 = $xxPhoto1;

        return $this;
    }

    /**
     * Get xxPhoto1.
     *
     * @return string|null
     */
    public function getXxPhoto1()
    {
        return $this->xxPhoto1;
    }

    /**
     * Set xxPhoto2.
     *
     * @param string|null $xxPhoto2
     *
     * @return Item
     */
    public function setXxPhoto2($xxPhoto2 = null)
    {
        $this->xxPhoto2 = $xxPhoto2;

        return $this;
    }

    /**
     * Get xxPhoto2.
     *
     * @return string|null
     */
    public function getXxPhoto2()
    {
        return $this->xxPhoto2;
    }

    /**
     * Set xxCatalogue.
     *
     * @param string|null $xxCatalogue
     *
     * @return Item
     */
    public function setXxCatalogue($xxCatalogue = null)
    {
        $this->xxCatalogue = $xxCatalogue;

        return $this;
    }

    /**
     * Get xxCatalogue.
     *
     * @return string|null
     */
    public function getXxCatalogue()
    {
        return $this->xxCatalogue;
    }

    /**
     * Set xxPage.
     *
     * @param int|null $xxPage
     *
     * @return Item
     */
    public function setXxPage($xxPage = null)
    {
        $this->xxPage = $xxPage;

        return $this;
    }

    /**
     * Get xxPage.
     *
     * @return int|null
     */
    public function getXxPage()
    {
        return $this->xxPage;
    }

    /**
     * Set localizablecaption2.
     *
     * @param string|null $localizablecaption2
     *
     * @return Item
     */
    public function setLocalizablecaption2($localizablecaption2 = null)
    {
        $this->localizablecaption2 = $localizablecaption2;

        return $this;
    }

    /**
     * Get localizablecaption2.
     *
     * @return string|null
     */
    public function getLocalizablecaption2()
    {
        return $this->localizablecaption2;
    }

    /**
     * Set localizablecaption3.
     *
     * @param string|null $localizablecaption3
     *
     * @return Item
     */
    public function setLocalizablecaption3($localizablecaption3 = null)
    {
        $this->localizablecaption3 = $localizablecaption3;

        return $this;
    }

    /**
     * Get localizablecaption3.
     *
     * @return string|null
     */
    public function getLocalizablecaption3()
    {
        return $this->localizablecaption3;
    }

    /**
     * Set localizablecaption4.
     *
     * @param string|null $localizablecaption4
     *
     * @return Item
     */
    public function setLocalizablecaption4($localizablecaption4 = null)
    {
        $this->localizablecaption4 = $localizablecaption4;

        return $this;
    }

    /**
     * Get localizablecaption4.
     *
     * @return string|null
     */
    public function getLocalizablecaption4()
    {
        return $this->localizablecaption4;
    }

    /**
     * Set localizablecaption5.
     *
     * @param string|null $localizablecaption5
     *
     * @return Item
     */
    public function setLocalizablecaption5($localizablecaption5 = null)
    {
        $this->localizablecaption5 = $localizablecaption5;

        return $this;
    }

    /**
     * Get localizablecaption5.
     *
     * @return string|null
     */
    public function getLocalizablecaption5()
    {
        return $this->localizablecaption5;
    }

    /**
     * Set localizabledescom2.
     *
     * @param string|null $localizabledescom2
     *
     * @return Item
     */
    public function setLocalizabledescom2($localizabledescom2 = null)
    {
        $this->localizabledescom2 = $localizabledescom2;

        return $this;
    }

    /**
     * Get localizabledescom2.
     *
     * @return string|null
     */
    public function getLocalizabledescom2()
    {
        return $this->localizabledescom2;
    }

    /**
     * Set localizabledescomClear2.
     *
     * @param string|null $localizabledescomClear2
     *
     * @return Item
     */
    public function setLocalizabledescomClear2($localizabledescomClear2 = null)
    {
        $this->localizabledescomClear2 = $localizabledescomClear2;

        return $this;
    }

    /**
     * Get localizabledescomClear2.
     *
     * @return string|null
     */
    public function getLocalizabledescomClear2()
    {
        return $this->localizabledescomClear2;
    }

    /**
     * Set localizabledescom3.
     *
     * @param string|null $localizabledescom3
     *
     * @return Item
     */
    public function setLocalizabledescom3($localizabledescom3 = null)
    {
        $this->localizabledescom3 = $localizabledescom3;

        return $this;
    }

    /**
     * Get localizabledescom3.
     *
     * @return string|null
     */
    public function getLocalizabledescom3()
    {
        return $this->localizabledescom3;
    }

    /**
     * Set localizabledescomClear3.
     *
     * @param string|null $localizabledescomClear3
     *
     * @return Item
     */
    public function setLocalizabledescomClear3($localizabledescomClear3 = null)
    {
        $this->localizabledescomClear3 = $localizabledescomClear3;

        return $this;
    }

    /**
     * Get localizabledescomClear3.
     *
     * @return string|null
     */
    public function getLocalizabledescomClear3()
    {
        return $this->localizabledescomClear3;
    }

    /**
     * Set localizabledescom4.
     *
     * @param string|null $localizabledescom4
     *
     * @return Item
     */
    public function setLocalizabledescom4($localizabledescom4 = null)
    {
        $this->localizabledescom4 = $localizabledescom4;

        return $this;
    }

    /**
     * Get localizabledescom4.
     *
     * @return string|null
     */
    public function getLocalizabledescom4()
    {
        return $this->localizabledescom4;
    }

    /**
     * Set localizabledescomClear4.
     *
     * @param string|null $localizabledescomClear4
     *
     * @return Item
     */
    public function setLocalizabledescomClear4($localizabledescomClear4 = null)
    {
        $this->localizabledescomClear4 = $localizabledescomClear4;

        return $this;
    }

    /**
     * Get localizabledescomClear4.
     *
     * @return string|null
     */
    public function getLocalizabledescomClear4()
    {
        return $this->localizabledescomClear4;
    }

    /**
     * Set localizabledescom5.
     *
     * @param string|null $localizabledescom5
     *
     * @return Item
     */
    public function setLocalizabledescom5($localizabledescom5 = null)
    {
        $this->localizabledescom5 = $localizabledescom5;

        return $this;
    }

    /**
     * Get localizabledescom5.
     *
     * @return string|null
     */
    public function getLocalizabledescom5()
    {
        return $this->localizabledescom5;
    }

    /**
     * Set localizabledescomClear5.
     *
     * @param string|null $localizabledescomClear5
     *
     * @return Item
     */
    public function setLocalizabledescomClear5($localizabledescomClear5 = null)
    {
        $this->localizabledescomClear5 = $localizabledescomClear5;

        return $this;
    }

    /**
     * Get localizabledescomClear5.
     *
     * @return string|null
     */
    public function getLocalizabledescomClear5()
    {
        return $this->localizabledescomClear5;
    }

    /**
     * Set billofquantitiesprogramProgram.
     *
     * @param string|null $billofquantitiesprogramProgram
     *
     * @return Item
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
     * Set purchaseunitid.
     *
     * @param string|null $purchaseunitid
     *
     * @return Item
     */
    public function setPurchaseunitid($purchaseunitid = null)
    {
        $this->purchaseunitid = $purchaseunitid;

        return $this;
    }

    /**
     * Get purchaseunitid.
     *
     * @return string|null
     */
    public function getPurchaseunitid()
    {
        return $this->purchaseunitid;
    }

    /**
     * Set oxatisOxatisSmallimage.
     *
     * @param binary|null $oxatisOxatisSmallimage
     *
     * @return Item
     */
    public function setOxatisOxatisSmallimage($oxatisOxatisSmallimage = null)
    {
        $this->oxatisOxatisSmallimage = $oxatisOxatisSmallimage;

        return $this;
    }

    /**
     * Get oxatisOxatisSmallimage.
     *
     * @return binary|null
     */
    public function getOxatisOxatisSmallimage()
    {
        return $this->oxatisOxatisSmallimage;
    }

    /**
     * Set mainintervener.
     *
     * @param string|null $mainintervener
     *
     * @return Item
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
     * Set oxatisOxatisCategorytype1.
     *
     * @param int|null $oxatisOxatisCategorytype1
     *
     * @return Item
     */
    public function setOxatisOxatisCategorytype1($oxatisOxatisCategorytype1 = null)
    {
        $this->oxatisOxatisCategorytype1 = $oxatisOxatisCategorytype1;

        return $this;
    }

    /**
     * Get oxatisOxatisCategorytype1.
     *
     * @return int|null
     */
    public function getOxatisOxatisCategorytype1()
    {
        return $this->oxatisOxatisCategorytype1;
    }

    /**
     * Set oxatisOxatisCategorytype2.
     *
     * @param int|null $oxatisOxatisCategorytype2
     *
     * @return Item
     */
    public function setOxatisOxatisCategorytype2($oxatisOxatisCategorytype2 = null)
    {
        $this->oxatisOxatisCategorytype2 = $oxatisOxatisCategorytype2;

        return $this;
    }

    /**
     * Get oxatisOxatisCategorytype2.
     *
     * @return int|null
     */
    public function getOxatisOxatisCategorytype2()
    {
        return $this->oxatisOxatisCategorytype2;
    }

    /**
     * Set oxatisOxatisCategorytype3.
     *
     * @param int|null $oxatisOxatisCategorytype3
     *
     * @return Item
     */
    public function setOxatisOxatisCategorytype3($oxatisOxatisCategorytype3 = null)
    {
        $this->oxatisOxatisCategorytype3 = $oxatisOxatisCategorytype3;

        return $this;
    }

    /**
     * Get oxatisOxatisCategorytype3.
     *
     * @return int|null
     */
    public function getOxatisOxatisCategorytype3()
    {
        return $this->oxatisOxatisCategorytype3;
    }

    /**
     * Set oxatisOxatisCategoryid1.
     *
     * @param string|null $oxatisOxatisCategoryid1
     *
     * @return Item
     */
    public function setOxatisOxatisCategoryid1($oxatisOxatisCategoryid1 = null)
    {
        $this->oxatisOxatisCategoryid1 = $oxatisOxatisCategoryid1;

        return $this;
    }

    /**
     * Get oxatisOxatisCategoryid1.
     *
     * @return string|null
     */
    public function getOxatisOxatisCategoryid1()
    {
        return $this->oxatisOxatisCategoryid1;
    }

    /**
     * Set oxatisOxatisCategoryid2.
     *
     * @param string|null $oxatisOxatisCategoryid2
     *
     * @return Item
     */
    public function setOxatisOxatisCategoryid2($oxatisOxatisCategoryid2 = null)
    {
        $this->oxatisOxatisCategoryid2 = $oxatisOxatisCategoryid2;

        return $this;
    }

    /**
     * Get oxatisOxatisCategoryid2.
     *
     * @return string|null
     */
    public function getOxatisOxatisCategoryid2()
    {
        return $this->oxatisOxatisCategoryid2;
    }

    /**
     * Set oxatisOxatisCategoryid3.
     *
     * @param string|null $oxatisOxatisCategoryid3
     *
     * @return Item
     */
    public function setOxatisOxatisCategoryid3($oxatisOxatisCategoryid3 = null)
    {
        $this->oxatisOxatisCategoryid3 = $oxatisOxatisCategoryid3;

        return $this;
    }

    /**
     * Get oxatisOxatisCategoryid3.
     *
     * @return string|null
     */
    public function getOxatisOxatisCategoryid3()
    {
        return $this->oxatisOxatisCategoryid3;
    }

    /**
     * Set oxatisOxatisMetatitle.
     *
     * @param string|null $oxatisOxatisMetatitle
     *
     * @return Item
     */
    public function setOxatisOxatisMetatitle($oxatisOxatisMetatitle = null)
    {
        $this->oxatisOxatisMetatitle = $oxatisOxatisMetatitle;

        return $this;
    }

    /**
     * Get oxatisOxatisMetatitle.
     *
     * @return string|null
     */
    public function getOxatisOxatisMetatitle()
    {
        return $this->oxatisOxatisMetatitle;
    }

    /**
     * Set oxatisOxatisMetadescription.
     *
     * @param string|null $oxatisOxatisMetadescription
     *
     * @return Item
     */
    public function setOxatisOxatisMetadescription($oxatisOxatisMetadescription = null)
    {
        $this->oxatisOxatisMetadescription = $oxatisOxatisMetadescription;

        return $this;
    }

    /**
     * Get oxatisOxatisMetadescription.
     *
     * @return string|null
     */
    public function getOxatisOxatisMetadescription()
    {
        return $this->oxatisOxatisMetadescription;
    }

    /**
     * Set oxatisOxatisMetakeywords.
     *
     * @param string|null $oxatisOxatisMetakeywords
     *
     * @return Item
     */
    public function setOxatisOxatisMetakeywords($oxatisOxatisMetakeywords = null)
    {
        $this->oxatisOxatisMetakeywords = $oxatisOxatisMetakeywords;

        return $this;
    }

    /**
     * Get oxatisOxatisMetakeywords.
     *
     * @return string|null
     */
    public function getOxatisOxatisMetakeywords()
    {
        return $this->oxatisOxatisMetakeywords;
    }

    /**
     * Set oxatisOxatisBrand.
     *
     * @param string|null $oxatisOxatisBrand
     *
     * @return Item
     */
    public function setOxatisOxatisBrand($oxatisOxatisBrand = null)
    {
        $this->oxatisOxatisBrand = $oxatisOxatisBrand;

        return $this;
    }

    /**
     * Get oxatisOxatisBrand.
     *
     * @return string|null
     */
    public function getOxatisOxatisBrand()
    {
        return $this->oxatisOxatisBrand;
    }

    /**
     * Set dimensionunitid.
     *
     * @param string|null $dimensionunitid
     *
     * @return Item
     */
    public function setDimensionunitid($dimensionunitid = null)
    {
        $this->dimensionunitid = $dimensionunitid;

        return $this;
    }

    /**
     * Get dimensionunitid.
     *
     * @return string|null
     */
    public function getDimensionunitid()
    {
        return $this->dimensionunitid;
    }

    /**
     * Set oxatisOxatisLongdescription.
     *
     * @param string|null $oxatisOxatisLongdescription
     *
     * @return Item
     */
    public function setOxatisOxatisLongdescription($oxatisOxatisLongdescription = null)
    {
        $this->oxatisOxatisLongdescription = $oxatisOxatisLongdescription;

        return $this;
    }

    /**
     * Get oxatisOxatisLongdescription.
     *
     * @return string|null
     */
    public function getOxatisOxatisLongdescription()
    {
        return $this->oxatisOxatisLongdescription;
    }

    /**
     * Set oxatisOxatisLongdescriptionclear.
     *
     * @param string|null $oxatisOxatisLongdescriptionclear
     *
     * @return Item
     */
    public function setOxatisOxatisLongdescriptionclear($oxatisOxatisLongdescriptionclear = null)
    {
        $this->oxatisOxatisLongdescriptionclear = $oxatisOxatisLongdescriptionclear;

        return $this;
    }

    /**
     * Get oxatisOxatisLongdescriptionclear.
     *
     * @return string|null
     */
    public function getOxatisOxatisLongdescriptionclear()
    {
        return $this->oxatisOxatisLongdescriptionclear;
    }

    /**
     * Set intrastatnc8nomenclatureid.
     *
     * @param string|null $intrastatnc8nomenclatureid
     *
     * @return Item
     */
    public function setIntrastatnc8nomenclatureid($intrastatnc8nomenclatureid = null)
    {
        $this->intrastatnc8nomenclatureid = $intrastatnc8nomenclatureid;

        return $this;
    }

    /**
     * Get intrastatnc8nomenclatureid.
     *
     * @return string|null
     */
    public function getIntrastatnc8nomenclatureid()
    {
        return $this->intrastatnc8nomenclatureid;
    }

    /**
     * Set noninvoiceabletype.
     *
     * @param int|null $noninvoiceabletype
     *
     * @return Item
     */
    public function setNoninvoiceabletype($noninvoiceabletype = null)
    {
        $this->noninvoiceabletype = $noninvoiceabletype;

        return $this;
    }

    /**
     * Get noninvoiceabletype.
     *
     * @return int|null
     */
    public function getNoninvoiceabletype()
    {
        return $this->noninvoiceabletype;
    }

    /**
     * Set maintenancecontracttemplateid.
     *
     * @param string|null $maintenancecontracttemplateid
     *
     * @return Item
     */
    public function setMaintenancecontracttemplateid($maintenancecontracttemplateid = null)
    {
        $this->maintenancecontracttemplateid = $maintenancecontracttemplateid;

        return $this;
    }

    /**
     * Get maintenancecontracttemplateid.
     *
     * @return string|null
     */
    public function getMaintenancecontracttemplateid()
    {
        return $this->maintenancecontracttemplateid;
    }

    /**
     * Set defaultallowedstorehouseid.
     *
     * @param string|null $defaultallowedstorehouseid
     *
     * @return Item
     */
    public function setDefaultallowedstorehouseid($defaultallowedstorehouseid = null)
    {
        $this->defaultallowedstorehouseid = $defaultallowedstorehouseid;

        return $this;
    }

    /**
     * Get defaultallowedstorehouseid.
     *
     * @return string|null
     */
    public function getDefaultallowedstorehouseid()
    {
        return $this->defaultallowedstorehouseid;
    }

    /**
     * Set guaranteetypeid.
     *
     * @param string|null $guaranteetypeid
     *
     * @return Item
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
     * Set purchaseunitpriceprogramProgram.
     *
     * @param string|null $purchaseunitpriceprogramProgram
     *
     * @return Item
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
     * Set group1.
     *
     * @param string|null $group1
     *
     * @return Item
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
     * @return Item
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
     * Set notprintable.
     *
     * @param int|null $notprintable
     *
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set replacementitem.
     *
     * @param string|null $replacementitem
     *
     * @return Item
     */
    public function setReplacementitem($replacementitem = null)
    {
        $this->replacementitem = $replacementitem;

        return $this;
    }

    /**
     * Get replacementitem.
     *
     * @return string|null
     */
    public function getReplacementitem()
    {
        return $this->replacementitem;
    }

    /**
     * Set componentcalculationtype.
     *
     * @param int|null $componentcalculationtype
     *
     * @return Item
     */
    public function setComponentcalculationtype($componentcalculationtype = null)
    {
        $this->componentcalculationtype = $componentcalculationtype;

        return $this;
    }

    /**
     * Get componentcalculationtype.
     *
     * @return int|null
     */
    public function getComponentcalculationtype()
    {
        return $this->componentcalculationtype;
    }

    /**
     * Set volumeunitid.
     *
     * @param string|null $volumeunitid
     *
     * @return Item
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
     * Set weightunitid.
     *
     * @param string|null $weightunitid
     *
     * @return Item
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
     * Set numberofitembypackage.
     *
     * @param int|null $numberofitembypackage
     *
     * @return Item
     */
    public function setNumberofitembypackage($numberofitembypackage = null)
    {
        $this->numberofitembypackage = $numberofitembypackage;

        return $this;
    }

    /**
     * Get numberofitembypackage.
     *
     * @return int|null
     */
    public function getNumberofitembypackage()
    {
        return $this->numberofitembypackage;
    }

    /**
     * Set vatid.
     *
     * @param string|null $vatid
     *
     * @return Item
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
     * Set ecotaxid.
     *
     * @param string|null $ecotaxid
     *
     * @return Item
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
     * Set stockdestination.
     *
     * @param int|null $stockdestination
     *
     * @return Item
     */
    public function setStockdestination($stockdestination = null)
    {
        $this->stockdestination = $stockdestination;

        return $this;
    }

    /**
     * Get stockdestination.
     *
     * @return int|null
     */
    public function getStockdestination()
    {
        return $this->stockdestination;
    }

    /**
     * Set stockvarianceaccount.
     *
     * @param string|null $stockvarianceaccount
     *
     * @return Item
     */
    public function setStockvarianceaccount($stockvarianceaccount = null)
    {
        $this->stockvarianceaccount = $stockvarianceaccount;

        return $this;
    }

    /**
     * Get stockvarianceaccount.
     *
     * @return string|null
     */
    public function getStockvarianceaccount()
    {
        return $this->stockvarianceaccount;
    }

    /**
     * Set currentstockaccount.
     *
     * @param string|null $currentstockaccount
     *
     * @return Item
     */
    public function setCurrentstockaccount($currentstockaccount = null)
    {
        $this->currentstockaccount = $currentstockaccount;

        return $this;
    }

    /**
     * Get currentstockaccount.
     *
     * @return string|null
     */
    public function getCurrentstockaccount()
    {
        return $this->currentstockaccount;
    }

    /**
     * Set supplierid.
     *
     * @param string|null $supplierid
     *
     * @return Item
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
     * Set descom.
     *
     * @param string|null $descom
     *
     * @return Item
     */
    public function setDescom($descom = null)
    {
        $this->descom = $descom;

        return $this;
    }

    /**
     * Get descom.
     *
     * @return string|null
     */
    public function getDescom()
    {
        return $this->descom;
    }

    /**
     * Set descomclear.
     *
     * @param string|null $descomclear
     *
     * @return Item
     */
    public function setDescomclear($descomclear = null)
    {
        $this->descomclear = $descomclear;

        return $this;
    }

    /**
     * Get descomclear.
     *
     * @return string|null
     */
    public function getDescomclear()
    {
        return $this->descomclear;
    }

    /**
     * Set itemimage.
     *
     * @param binary|null $itemimage
     *
     * @return Item
     */
    public function setItemimage($itemimage = null)
    {
        $this->itemimage = $itemimage;

        return $this;
    }

    /**
     * Get itemimage.
     *
     * @return binary|null
     */
    public function getItemimage()
    {
        return $this->itemimage;
    }

    /**
     * Set barcode.
     *
     * @param string|null $barcode
     *
     * @return Item
     */
    public function setBarcode($barcode = null)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode.
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set unitid.
     *
     * @param string|null $unitid
     *
     * @return Item
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
     * Set familyid.
     *
     * @param string|null $familyid
     *
     * @return Item
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
     * @return Item
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
     * Set syscreateddate.
     *
     * @param \DateTime|null $syscreateddate
     *
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set xxEcartOeillet.
     *
     * @param string|null $xxEcartOeillet
     *
     * @return Item
     */
    public function setXxEcartOeillet($xxEcartOeillet = null)
    {
        $this->xxEcartOeillet = $xxEcartOeillet;

        return $this;
    }

    /**
     * Get xxEcartOeillet.
     *
     * @return string|null
     */
    public function getXxEcartOeillet()
    {
        return $this->xxEcartOeillet;
    }

    /**
     * Set xxGrammage.
     *
     * @param int|null $xxGrammage
     *
     * @return Item
     */
    public function setXxGrammage($xxGrammage = null)
    {
        $this->xxGrammage = $xxGrammage;

        return $this;
    }

    /**
     * Get xxGrammage.
     *
     * @return int|null
     */
    public function getXxGrammage()
    {
        return $this->xxGrammage;
    }

    /**
     * Set posthumbnail.
     *
     * @param binary|null $posthumbnail
     *
     * @return Item
     */
    public function setPosthumbnail($posthumbnail = null)
    {
        $this->posthumbnail = $posthumbnail;

        return $this;
    }

    /**
     * Get posthumbnail.
     *
     * @return binary|null
     */
    public function getPosthumbnail()
    {
        return $this->posthumbnail;
    }

    /**
     * Set barcodeprice.
     *
     * @param int $barcodeprice
     *
     * @return Item
     */
    public function setBarcodeprice($barcodeprice)
    {
        $this->barcodeprice = $barcodeprice;

        return $this;
    }

    /**
     * Get barcodeprice.
     *
     * @return int
     */
    public function getBarcodeprice()
    {
        return $this->barcodeprice;
    }

    /**
     * Set barcodeweight.
     *
     * @param int $barcodeweight
     *
     * @return Item
     */
    public function setBarcodeweight($barcodeweight)
    {
        $this->barcodeweight = $barcodeweight;

        return $this;
    }

    /**
     * Get barcodeweight.
     *
     * @return int
     */
    public function getBarcodeweight()
    {
        return $this->barcodeweight;
    }

    /**
     * Set intrastatorigincountryid.
     *
     * @param string|null $intrastatorigincountryid
     *
     * @return Item
     */
    public function setIntrastatorigincountryid($intrastatorigincountryid = null)
    {
        $this->intrastatorigincountryid = $intrastatorigincountryid;

        return $this;
    }

    /**
     * Get intrastatorigincountryid.
     *
     * @return string|null
     */
    public function getIntrastatorigincountryid()
    {
        return $this->intrastatorigincountryid;
    }

    /**
     * Set intrastatexcluded.
     *
     * @param bool $intrastatexcluded
     *
     * @return Item
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
     * Set stockbillofquantitiesprogramProgram.
     *
     * @param string|null $stockbillofquantitiesprogramProgram
     *
     * @return Item
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
     * @return Item
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
     * Set nomenclatureaccountingtransfertypeforsale.
     *
     * @param int $nomenclatureaccountingtransfertypeforsale
     *
     * @return Item
     */
    public function setNomenclatureaccountingtransfertypeforsale($nomenclatureaccountingtransfertypeforsale)
    {
        $this->nomenclatureaccountingtransfertypeforsale = $nomenclatureaccountingtransfertypeforsale;

        return $this;
    }

    /**
     * Get nomenclatureaccountingtransfertypeforsale.
     *
     * @return int
     */
    public function getNomenclatureaccountingtransfertypeforsale()
    {
        return $this->nomenclatureaccountingtransfertypeforsale;
    }

    /**
     * Set nomenclatureaccountingtransfertypeforpurchase.
     *
     * @param int $nomenclatureaccountingtransfertypeforpurchase
     *
     * @return Item
     */
    public function setNomenclatureaccountingtransfertypeforpurchase($nomenclatureaccountingtransfertypeforpurchase)
    {
        $this->nomenclatureaccountingtransfertypeforpurchase = $nomenclatureaccountingtransfertypeforpurchase;

        return $this;
    }

    /**
     * Get nomenclatureaccountingtransfertypeforpurchase.
     *
     * @return int
     */
    public function getNomenclatureaccountingtransfertypeforpurchase()
    {
        return $this->nomenclatureaccountingtransfertypeforpurchase;
    }

    /**
     * Set purchasechargesrate.
     *
     * @param string $purchasechargesrate
     *
     * @return Item
     */
    public function setPurchasechargesrate($purchasechargesrate)
    {
        $this->purchasechargesrate = $purchasechargesrate;

        return $this;
    }

    /**
     * Get purchasechargesrate.
     *
     * @return string
     */
    public function getPurchasechargesrate()
    {
        return $this->purchasechargesrate;
    }

    /**
     * Set posadditem.
     *
     * @param bool $posadditem
     *
     * @return Item
     */
    public function setPosadditem($posadditem)
    {
        $this->posadditem = $posadditem;

        return $this;
    }

    /**
     * Get posadditem.
     *
     * @return bool
     */
    public function getPosadditem()
    {
        return $this->posadditem;
    }

    /**
     * Set loyaltypoints.
     *
     * @param string $loyaltypoints
     *
     * @return Item
     */
    public function setLoyaltypoints($loyaltypoints)
    {
        $this->loyaltypoints = $loyaltypoints;

        return $this;
    }

    /**
     * Get loyaltypoints.
     *
     * @return string
     */
    public function getLoyaltypoints()
    {
        return $this->loyaltypoints;
    }

    /**
     * Set calculateloyaltyfrom.
     *
     * @param int $calculateloyaltyfrom
     *
     * @return Item
     */
    public function setCalculateloyaltyfrom($calculateloyaltyfrom)
    {
        $this->calculateloyaltyfrom = $calculateloyaltyfrom;

        return $this;
    }

    /**
     * Get calculateloyaltyfrom.
     *
     * @return int
     */
    public function getCalculateloyaltyfrom()
    {
        return $this->calculateloyaltyfrom;
    }

    /**
     * Set parentrangeitemid.
     *
     * @param string|null $parentrangeitemid
     *
     * @return Item
     */
    public function setParentrangeitemid($parentrangeitemid = null)
    {
        $this->parentrangeitemid = $parentrangeitemid;

        return $this;
    }

    /**
     * Get parentrangeitemid.
     *
     * @return string|null
     */
    public function getParentrangeitemid()
    {
        return $this->parentrangeitemid;
    }

    /**
     * Set rangetypeelementid0.
     *
     * @param string|null $rangetypeelementid0
     *
     * @return Item
     */
    public function setRangetypeelementid0($rangetypeelementid0 = null)
    {
        $this->rangetypeelementid0 = $rangetypeelementid0;

        return $this;
    }

    /**
     * Get rangetypeelementid0.
     *
     * @return string|null
     */
    public function getRangetypeelementid0()
    {
        return $this->rangetypeelementid0;
    }

    /**
     * Set rangetypeelementid1.
     *
     * @param string|null $rangetypeelementid1
     *
     * @return Item
     */
    public function setRangetypeelementid1($rangetypeelementid1 = null)
    {
        $this->rangetypeelementid1 = $rangetypeelementid1;

        return $this;
    }

    /**
     * Get rangetypeelementid1.
     *
     * @return string|null
     */
    public function getRangetypeelementid1()
    {
        return $this->rangetypeelementid1;
    }

    /**
     * Set rangetypeelementid2.
     *
     * @param string|null $rangetypeelementid2
     *
     * @return Item
     */
    public function setRangetypeelementid2($rangetypeelementid2 = null)
    {
        $this->rangetypeelementid2 = $rangetypeelementid2;

        return $this;
    }

    /**
     * Get rangetypeelementid2.
     *
     * @return string|null
     */
    public function getRangetypeelementid2()
    {
        return $this->rangetypeelementid2;
    }

    /**
     * Set rangetypeelementid3.
     *
     * @param string|null $rangetypeelementid3
     *
     * @return Item
     */
    public function setRangetypeelementid3($rangetypeelementid3 = null)
    {
        $this->rangetypeelementid3 = $rangetypeelementid3;

        return $this;
    }

    /**
     * Get rangetypeelementid3.
     *
     * @return string|null
     */
    public function getRangetypeelementid3()
    {
        return $this->rangetypeelementid3;
    }

    /**
     * Set rangetypeelementid4.
     *
     * @param string|null $rangetypeelementid4
     *
     * @return Item
     */
    public function setRangetypeelementid4($rangetypeelementid4 = null)
    {
        $this->rangetypeelementid4 = $rangetypeelementid4;

        return $this;
    }

    /**
     * Get rangetypeelementid4.
     *
     * @return string|null
     */
    public function getRangetypeelementid4()
    {
        return $this->rangetypeelementid4;
    }

    /**
     * Set giftvoucher.
     *
     * @param bool $giftvoucher
     *
     * @return Item
     */
    public function setGiftvoucher($giftvoucher)
    {
        $this->giftvoucher = $giftvoucher;

        return $this;
    }

    /**
     * Get giftvoucher.
     *
     * @return bool
     */
    public function getGiftvoucher()
    {
        return $this->giftvoucher;
    }

    /**
     * Set giftvouchercashvalue.
     *
     * @param string|null $giftvouchercashvalue
     *
     * @return Item
     */
    public function setGiftvouchercashvalue($giftvouchercashvalue = null)
    {
        $this->giftvouchercashvalue = $giftvouchercashvalue;

        return $this;
    }

    /**
     * Get giftvouchercashvalue.
     *
     * @return string|null
     */
    public function getGiftvouchercashvalue()
    {
        return $this->giftvouchercashvalue;
    }

    /**
     * Set giftvouchervalidityduration.
     *
     * @param int|null $giftvouchervalidityduration
     *
     * @return Item
     */
    public function setGiftvouchervalidityduration($giftvouchervalidityduration = null)
    {
        $this->giftvouchervalidityduration = $giftvouchervalidityduration;

        return $this;
    }

    /**
     * Get giftvouchervalidityduration.
     *
     * @return int|null
     */
    public function getGiftvouchervalidityduration()
    {
        return $this->giftvouchervalidityduration;
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
