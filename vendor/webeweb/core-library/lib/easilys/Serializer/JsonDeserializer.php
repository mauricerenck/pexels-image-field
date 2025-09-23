<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Serializer;

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Easilys\Model\AccountingGeneral;
use WBW\Library\Easilys\Model\Address;
use WBW\Library\Easilys\Model\Allergen;
use WBW\Library\Easilys\Model\AnalyticalGroup;
use WBW\Library\Easilys\Model\AutomaticStockTransfer;
use WBW\Library\Easilys\Model\Certification;
use WBW\Library\Easilys\Model\Code;
use WBW\Library\Easilys\Model\ControlSampleConfig;
use WBW\Library\Easilys\Model\DairySubsidy;
use WBW\Library\Easilys\Model\DeliveryDaysProduction;
use WBW\Library\Easilys\Model\DeliveryWeekday;
use WBW\Library\Easilys\Model\Email;
use WBW\Library\Easilys\Model\ExtData;
use WBW\Library\Easilys\Model\Family;
use WBW\Library\Easilys\Model\Fax;
use WBW\Library\Easilys\Model\Generic;
use WBW\Library\Easilys\Model\GenericFamily;
use WBW\Library\Easilys\Model\LinkedUser;
use WBW\Library\Easilys\Model\NutritionValue;
use WBW\Library\Easilys\Model\Origin;
use WBW\Library\Easilys\Model\PackagingLevel;
use WBW\Library\Easilys\Model\Params;
use WBW\Library\Easilys\Model\Phone;
use WBW\Library\Easilys\Model\PriceList;
use WBW\Library\Easilys\Model\PriceListSupplierProduct;
use WBW\Library\Easilys\Model\ProdFamily;
use WBW\Library\Easilys\Model\Product;
use WBW\Library\Easilys\Model\ProductionUnit;
use WBW\Library\Easilys\Model\Quality;
use WBW\Library\Easilys\Model\Range;
use WBW\Library\Easilys\Model\Site;
use WBW\Library\Easilys\Model\StorageType;
use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Model\Supplier;
use WBW\Library\Easilys\Model\SupplierProduct;
use WBW\Library\Easilys\Model\SupplierProductReference;
use WBW\Library\Easilys\Model\Tag;
use WBW\Library\Easilys\Model\Tax;
use WBW\Library\Easilys\Model\Tree;
use WBW\Library\Easilys\Model\Unit;

/**
 * JSON deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Serializer
 */
class JsonDeserializer {

    /**
     * Deserialize an accounting general.
     *
     * @param array<string,mixed> $data The data.
     * @return AccountingGeneral|null Returns the accounting general.
     */
    public static function deserializeAccountingGeneral(array $data): ?AccountingGeneral {

        if (0 === count($data)) {
            return null;
        }

        $model = new AccountingGeneral();
        $model->setAccountingCreditInvoice(ArrayHelper::get($data, SerializerKeys::ACCOUNTING_CREDIT_INVOICE));
        $model->setAccountingGeneralSupplier(ArrayHelper::get($data, SerializerKeys::ACCOUNTING_GENERAL_SUPPLIER));
        $model->setAccountingPurchaseInvoice(ArrayHelper::get($data, SerializerKeys::ACCOUNTING_PURCHASE_INVOICE));

        return $model;
    }

    /**
     * Deserialize a address.
     *
     * @param array<string,mixed> $data The data.
     * @return Address|null Returns the address.
     */
    public static function deserializeAddress(array $data): ?Address {

        if (0 === count($data)) {
            return null;
        }

        $model = new Address();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setAddress(ArrayHelper::get($data, SerializerKeys::ADDRESS));
        $model->setCity(ArrayHelper::get($data, SerializerKeys::CITY));
        $model->setCountry(ArrayHelper::get($data, BaseSerializerKeys::COUNTRY));
        $model->setIsMain(ArrayHelper::get($data, SerializerKeys::IS_MAIN));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setPostalCode(ArrayHelper::get($data, BaseSerializerKeys::POSTAL_CODE));
        $model->setType(ArrayHelper::get($data, BaseSerializerKeys::TYPE));

        return $model;
    }

    /**
     * Deserialize an allergen.
     *
     * @param array<string,mixed> $data The data.
     * @return Allergen|null Returns the allergen.
     */
    public static function deserializeAllergen(array $data): ?Allergen {

        if (0 === count($data)) {
            return null;
        }

        $model = new Allergen();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize an analytical group.
     *
     * @param array<string,mixed> $data The data.
     * @return AnalyticalGroup|null Returns the analytical group.
     */
    public static function deserializeAnalyticalGroup(array $data): ?AnalyticalGroup {

        if (0 === count($data)) {
            return null;
        }

        $model = new AnalyticalGroup();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a automatic stock transfer.
     *
     * @param array<string,mixed> $data The data.
     * @return AutomaticStockTransfer|null Returns the automatic stock transfer.
     */
    public static function deserializeAutomaticStockTransfer(array $data): ?AutomaticStockTransfer {

        if (0 === count($data)) {
            return null;
        }

        $model = new AutomaticStockTransfer();
        $model->setFromConsumption(ArrayHelper::get($data, SerializerKeys::FROM_CONSUMPTION));

        return $model;
    }

    /**
     * Deserialize a certification.
     *
     * @param array<string,mixed> $data The data.
     * @return Certification|null Returns the certification.
     */
    public static function deserializeCertification(array $data): ?Certification {

        if (0 === count($data)) {
            return null;
        }

        $model = new Certification();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setCode(ArrayHelper::get($data, BaseSerializerKeys::CODE));
        $model->setImage(ArrayHelper::get($data, BaseSerializerKeys::IMAGE));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a code.
     *
     * @param array<string,mixed> $data The data.
     * @return Code|null Returns the code.
     */
    public static function deserializeCode(array $data): ?Code {

        if (0 === count($data)) {
            return null;
        }

        $model = new Code();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setCodePackaging(ArrayHelper::get($data, SerializerKeys::CODE_PACKAGING));
        $model->setIdPackagingUnit(ArrayHelper::get($data, SerializerKeys::ID_PACKAGING_UNIT));
        $model->setLabelPackaging(ArrayHelper::get($data, SerializerKeys::LABEL_PACKAGING));

        return $model;
    }

    /**
     * Deserialize a control sample config.
     *
     * @param array<string,mixed> $data The data.
     * @return ControlSampleConfig|null Returns the control sample config.
     */
    public static function deserializeControlSampleConfig(array $data): ?ControlSampleConfig {

        if (0 === count($data)) {
            return null;
        }

        $model = new ControlSampleConfig();
        $model->setAmountForConsumptionSite(ArrayHelper::get($data, SerializerKeys::AMOUNT_FOR_CONSUMPTION_SITE));
        $model->setAmountForProductionSite(ArrayHelper::get($data, SerializerKeys::AMOUNT_FOR_PRODUCTION_SITE));
        $model->setIsControlSampleActive(ArrayHelper::get($data, SerializerKeys::IS_CONTROL_SAMPLE_ACTIVE));
        $model->setIsControlSampleBillable(ArrayHelper::get($data, SerializerKeys::IS_CONTROL_SAMPLE_BILLABLE));

        return $model;
    }

    /**
     * Deserialize a dairy subsidy.
     *
     * @param array<string,mixed> $data The data.
     * @return DairySubsidy|null Returns the tree.
     */
    public static function deserializeDairySubsidy(array $data): ?DairySubsidy {

        if (0 === count($data)) {
            return null;
        }

        $model = new DairySubsidy();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setAmount(ArrayHelper::get($data, SerializerKeys::AMOUNT));
        $model->setCode(ArrayHelper::get($data, BaseSerializerKeys::CODE));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setUnit(static::deserializeUnit(ArrayHelper::get($data, SerializerKeys::UNIT, [])));

        return $model;
    }

    /**
     * Deserialize a delivery days production.
     *
     * @param array<string,mixed> $data The data.
     * @return DeliveryDaysProduction|null Returns the fax.
     */
    public static function deserializeDeliveryDaysProduction(array $data): ?DeliveryDaysProduction {

        if (0 === count($data)) {
            return null;
        }

        $model = new DeliveryDaysProduction();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setDays(ArrayHelper::get($data, SerializerKeys::DAYS));

        return $model;
    }

    /**
     * Deserialize a delivery weekday.
     *
     * @param array<string,mixed> $data The data.
     * @return DeliveryWeekday|null Returns the delivery weekday.
     */
    public static function deserializeDeliveryWeekday(array $data): ?DeliveryWeekday {

        if (0 === count($data)) {
            return null;
        }

        $model = new DeliveryWeekday();
        $model->setWeekday(ArrayHelper::get($data, SerializerKeys::WEEKDAY));

        return $model;
    }

    /**
     * Deserialize an email.
     *
     * @param array<string,mixed> $data The data.
     * @return Email|null Returns the email.
     */
    public static function deserializeEmail(array $data): ?Email {

        if (0 === count($data)) {
            return null;
        }

        $model = new Email();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setContext(ArrayHelper::get($data, SerializerKeys::CONTEXT));
        $model->setEmail(ArrayHelper::get($data, SerializerKeys::E_MAIL));
        $model->setIsMain(ArrayHelper::get($data, SerializerKeys::IS_MAIN));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize an ext data.
     *
     * @param array<string,mixed> $data The data.
     * @return ExtData|null Returns the ext data.
     */
    public static function deserializeExtData(array $data): ?ExtData {

        if (0 === count($data)) {
            return null;
        }

        return new ExtData();
    }

    /**
     * Deserialize a family.
     *
     * @param array<string,mixed> $data The data.
     * @return Family|null Returns the family.
     */
    public static function deserializeFamily(array $data): ?Family {

        if (0 === count($data)) {
            return null;
        }

        $model = new Family();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setParent(static::deserializeFamily(ArrayHelper::get($data, SerializerKeys::PARENT, [])));

        return $model;
    }

    /**
     * Deserialize a fax.
     *
     * @param array<string,mixed> $data The data.
     * @return Fax|null Returns the fax.
     */
    public static function deserializeFax(array $data): ?Fax {

        if (0 === count($data)) {
            return null;
        }

        $model = new Fax();
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setNumber(ArrayHelper::get($data, BaseSerializerKeys::NUMBER));

        return $model;
    }

    /**
     * Deserialize a generic.
     *
     * @param array<string,mixed> $data The data.
     * @return Generic|null Returns the generic.
     */
    public static function deserializeGeneric(array $data): ?Generic {

        if (0 === count($data)) {
            return null;
        }

        $model = new Generic();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setGenericFamily(static::deserializeGenericFamily(ArrayHelper::get($data, SerializerKeys::GENERIC_FAMILY, [])));
        $model->setIdSiteOwner(ArrayHelper::get($data, SerializerKeys::ID_SITE_OWNER));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setProductionUnit(static::deserializeProductionUnit(ArrayHelper::get($data, SerializerKeys::PRODUCTION_UNIT, [])));

        return $model;
    }

    /**
     * Deserialize a generic family.
     *
     * @param array<string,mixed> $data The data.
     * @return GenericFamily|null Returns the generic family.
     */
    public static function deserializeGenericFamily(array $data): ?GenericFamily {

        if (0 === count($data)) {
            return null;
        }

        $model = new GenericFamily();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setParent(static::deserializeGenericFamily(ArrayHelper::get($data, SerializerKeys::PARENT, [])));

        return $model;
    }

    /**
     * Deserialize a linked user.
     *
     * @param array<string,mixed> $data The data.
     * @return LinkedUser|null Returns the linked user.
     */
    public static function deserializeLinkedUser(array $data): ?LinkedUser {

        if (0 === count($data)) {
            return null;
        }

        $model = new LinkedUser();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setFirstName(ArrayHelper::get($data, BaseSerializerKeys::FIRST_NAME));
        $model->setLastName(ArrayHelper::get($data, BaseSerializerKeys::LAST_NAME));

        return $model;
    }

    /**
     * Deserialize a nutrition value.
     *
     * @param array<string,mixed> $data The data.
     * @return NutritionValue|null Returns the nutrition value.
     */
    public static function deserializeNutritionValue(array $data): ?NutritionValue {

        if (0 === count($data)) {
            return null;
        }

        $model = new NutritionValue();
        $model->setCalcium(ArrayHelper::get($data, SerializerKeys::CALCIUM));
        $model->setCarbohydrate(ArrayHelper::get($data, SerializerKeys::CARBOHYDRATE));
        $model->setEnergyKcal(ArrayHelper::get($data, SerializerKeys::ENERGY_KCAL));
        $model->setEnergyKj(ArrayHelper::get($data, SerializerKeys::ENERGY_KJ));
        $model->setEthanol(ArrayHelper::get($data, SerializerKeys::ETHANOL));
        $model->setFiber(ArrayHelper::get($data, SerializerKeys::FIBER));
        $model->setIncludingSaturatedFattyAcids(ArrayHelper::get($data, SerializerKeys::INCLUDING_SATURATED_FATTY_ACIDS));
        $model->setIncludingSugar(ArrayHelper::get($data, SerializerKeys::INCLUDING_SUGAR));
        $model->setLipid(ArrayHelper::get($data, SerializerKeys::LIPID));
        $model->setOrganicAcid(ArrayHelper::get($data, SerializerKeys::ORGANIC_ACID));
        $model->setPolyols(ArrayHelper::get($data, SerializerKeys::POLYOLS));
        $model->setProtein(ArrayHelper::get($data, SerializerKeys::PROTEIN));
        $model->setSalt(ArrayHelper::get($data, SerializerKeys::SALT));

        return $model;
    }

    /**
     * Deserialize an origin.
     *
     * @param array<string,mixed> $data The data.
     * @return Origin|null Returns the origin.
     */
    public static function deserializeOrigin(array $data): ?Origin {

        if (0 === count($data)) {
            return null;
        }

        $model = new Origin();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a packaging level.
     *
     * @param array<string,mixed> $data The data.
     * @return PackagingLevel|null Returns the allergen.
     */
    public static function deserializePackagingLevel(array $data): ?PackagingLevel {

        if (0 === count($data)) {
            return null;
        }

        $model = new PackagingLevel();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));

        return $model;
    }

    /**
     * Deserialize a params.
     *
     * @param array<string,mixed> $data The data.
     * @return Params|null Returns the params.
     */
    public static function deserializeParams(array $data): ?Params {

        if (0 === count($data)) {
            return null;
        }

        $model = new Params();
        $model->setSupplierOrderAutoReceipt(ArrayHelper::get($data, SerializerKeys::SUPPLIER_ORDER_AUTO_RECEIPT));

        return $model;
    }

    /**
     * Deserialize a phone.
     *
     * @param array<string,mixed> $data The data.
     * @return Phone|null Returns the phone.
     */
    public static function deserializePhone(array $data): ?Phone {

        if (0 === count($data)) {
            return null;
        }

        $model = new Phone();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setContext(ArrayHelper::get($data, SerializerKeys::CONTEXT));
        $model->setIsMain(ArrayHelper::get($data, SerializerKeys::IS_MAIN));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setNumber(ArrayHelper::get($data, BaseSerializerKeys::NUMBER));
        $model->setType(ArrayHelper::get($data, BaseSerializerKeys::TYPE));

        return $model;
    }

    /**
     * Deserialize a price list.
     *
     * @param array<string,mixed> $data The data.
     * @return PriceList|null Returns the price list.
     */
    public static function deserializePriceList(array $data): ?PriceList {

        if (0 === count($data)) {
            return null;
        }

        $model = new PriceList();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setDateCreated(ArrayHelper::get($data, SerializerKeys::DATE_CREATED));
        $model->setDateEnd(ArrayHelper::get($data, SerializerKeys::DATE_END));
        $model->setDateStart(ArrayHelper::get($data, SerializerKeys::DATE_START));
        $model->setDateUpdated(ArrayHelper::get($data, SerializerKeys::DATE_UPDATED));
        $model->setExtId(ArrayHelper::get($data, SerializerKeys::EXT_ID));
        $model->setIdSiteOwner(ArrayHelper::get($data, SerializerKeys::ID_SITE_OWNER));
        $model->setIdUser(ArrayHelper::get($data, SerializerKeys::ID_USER));
        $model->setIsValidated(ArrayHelper::get($data, SerializerKeys::IS_VALIDATED));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setProdFamily(static::deserializeProdFamily(ArrayHelper::get($data, SerializerKeys::PROD_FAMILY, [])));
        $model->setSupplier(static::deserializeSupplier(ArrayHelper::get($data, SerializerKeys::SUPPLIER, [])));

        return $model;
    }

    /**
     * Deserialize a price list supplier product.
     *
     * @param array<string,mixed> $data The data.
     * @return PriceListSupplierProduct|null Returns the ext data.
     */
    public static function deserializePriceListSupplierProduct(array $data): ?PriceListSupplierProduct {

        if (0 === count($data)) {
            return null;
        }

        $model = new PriceListSupplierProduct();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setDateEnd(ArrayHelper::get($data, SerializerKeys::DATE_END));
        $model->setDateStart(ArrayHelper::get($data, SerializerKeys::DATE_START));
        $model->setDateUpdated(ArrayHelper::get($data, SerializerKeys::DATE_UPDATED));
        $model->setIsAvailable(ArrayHelper::get($data, SerializerKeys::IS_AVAILABLE));
        $model->setIsCurrent(ArrayHelper::get($data, SerializerKeys::IS_CURRENT));
        $model->setIsFuture(ArrayHelper::get($data, SerializerKeys::IS_FUTURE));
        $model->setIsOrderable(ArrayHelper::get($data, SerializerKeys::IS_ORDERABLE));
        $model->setPriceBillingUnit(ArrayHelper::get($data, SerializerKeys::PRICE_BILLING_UNIT));
        $model->setPriceList(static::deserializePriceList(ArrayHelper::get($data, SerializerKeys::PRICE_LIST, [])));
        $model->setPriceOrderUnit(ArrayHelper::get($data, SerializerKeys::PRICE_ORDER_UNIT));
        $model->setReceivedQuantity(ArrayHelper::get($data, SerializerKeys::RECEIVED_QUANTITY));
        $model->setSupplierProduct(static::deserializeSupplierProduct(ArrayHelper::get($data, SerializerKeys::SUPPLIER_PRODUCT, [])));
        $model->setTargetQuantity(ArrayHelper::get($data, SerializerKeys::TARGET_QUANTITY));

        return $model;
    }

    /**
     * Deserialize a prod family.
     *
     * @param array<string,mixed> $data The data.
     * @return ProdFamily|null Returns the prod family.
     */
    public static function deserializeProdFamily(array $data): ?ProdFamily {

        if (0 === count($data)) {
            return null;
        }

        $model = new ProdFamily();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a product.
     *
     * @param array<string,mixed> $data The data.
     * @return Product|null Returns the product.
     */
    public static function deserializeProduct(array $data): ?Product {

        if (0 === count($data)) {
            return null;
        }

        $model = new Product();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setBestBeforeStatus(ArrayHelper::get($data, SerializerKeys::BEST_BEFORE_STATUS));
        $model->setBrand(ArrayHelper::get($data, SerializerKeys::BRAND));
        $model->setComposition(ArrayHelper::get($data, SerializerKeys::COMPOSITION));
        $model->setCodeInternal(ArrayHelper::get($data, SerializerKeys::CODE_INTERNAL));
        $model->setDateCreated(ArrayHelper::get($data, SerializerKeys::DATE_CREATED));
        $model->setDateUpdated(ArrayHelper::get($data, SerializerKeys::DATE_UPDATED));
        $model->setDocumentUrl(ArrayHelper::get($data, SerializerKeys::DOCUMENT_URL));
        $model->setEan13(ArrayHelper::get($data, SerializerKeys::EAN_13));
        $model->setExtDocumentProductSheet(ArrayHelper::get($data, SerializerKeys::EXT_DOCUMENT_PRODUCT_SHEET));
        $model->setFamily(static::deserializeFamily(ArrayHelper::get($data, SerializerKeys::FAMILY, [])));
        $model->setIcon(ArrayHelper::get($data, BaseSerializerKeys::ICON));
        $model->setImage(ArrayHelper::get($data, BaseSerializerKeys::IMAGE));
        $model->setIdDocumentProductSheet(ArrayHelper::get($data, SerializerKeys::ID_DOCUMENT_PRODUCT_SHEET));
        $model->setIdSiteOwner(ArrayHelper::get($data, SerializerKeys::ID_SITE_OWNER));
        $model->setImportedOriginSupplierLabel(ArrayHelper::get($data, SerializerKeys::IMPORTED_ORIGIN_SUPPLIER_LABEL));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setLabelDocumentProductSheet(ArrayHelper::get($data, SerializerKeys::LABEL_DOCUMENT_PRODUCT_SHEET));
        $model->setLabelPublic(ArrayHelper::get($data, SerializerKeys::LABEL_PUBLIC));
        $model->setNutritionValue(static::deserializeNutritionValue(ArrayHelper::get($data, SerializerKeys::NUTRITION_VALUE, [])));
        $model->setOrigin(static::deserializeOrigin(ArrayHelper::get($data, SerializerKeys::ORIGIN, [])));
        $model->setQuality(static::deserializeQuality(ArrayHelper::get($data, SerializerKeys::QUALITY, [])));
        $model->setRange(static::deserializeRange(ArrayHelper::get($data, SerializerKeys::RANGE, [])));
        $model->setRatioCookedOverRaw(ArrayHelper::get($data, SerializerKeys::RATIO_COOKED_OVER_RAW));
        $model->setRefProductOfSupplier(ArrayHelper::get($data, SerializerKeys::REF_PRODUCT_OF_SUPPLIER));
        $model->setStorageType(static::deserializeStorageType(ArrayHelper::get($data, SerializerKeys::STORAGE_TYPE, [])));
        $model->setSupplierAllergen(ArrayHelper::get($data, SerializerKeys::SUPPLIER_ALLERGEN));
        $model->setSupplierCertification(ArrayHelper::get($data, SerializerKeys::SUPPLIER_CERTIFICATION));
        $model->setSupplierLabel(ArrayHelper::get($data, SerializerKeys::SUPPLIER_LABEL));
        $model->setTax(static::deserializeTax(ArrayHelper::get($data, SerializerKeys::TAX, [])));
        $model->setWeightPerPiece(ArrayHelper::get($data, SerializerKeys::WEIGHT_PER_PIECE));
        $model->setWeightProductionUnit(ArrayHelper::get($data, SerializerKeys::WEIGHT_PRODUCTION_UNIT));

        foreach (ArrayHelper::get($data, SerializerKeys::ALLERGENS, []) as $current) {
            $model->addAllergen(static::deserializeAllergen($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::CERTIFICATIONS, []) as $current) {
            $model->addCertification(static::deserializeCertification($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::CODES, []) as $current) {
            $model->addCode(static::deserializeCode($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::GENERICS, []) as $current) {
            $model->addGeneric(static::deserializeGeneric($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::PURCHASE_GENERICS, []) as $current) {
            $model->addPurchaseGeneric(static::deserializeGeneric($current));
        }

        return $model;
    }

    /**
     * Deserialize a production unit.
     *
     * @param array<string,mixed> $data The data.
     * @return ProductionUnit|null Returns the production unit.
     */
    public static function deserializeProductionUnit(array $data): ?ProductionUnit {

        if (0 === count($data)) {
            return null;
        }

        $model = new ProductionUnit();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setCode(ArrayHelper::get($data, BaseSerializerKeys::CODE));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a quality.
     *
     * @param array<string,mixed> $data The data.
     * @return Quality|null Returns the quality.
     */
    public static function deserializeQuality(array $data): ?Quality {

        if (0 === count($data)) {
            return null;
        }

        $model = new Quality();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a range.
     *
     * @param array<string,mixed> $data The data.
     * @return Range|null Returns the range.
     */
    public static function deserializeRange(array $data): ?Range {

        if (0 === count($data)) {
            return null;
        }

        $model = new Range();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a site.
     *
     * @param array<string,mixed> $data The data.
     * @return Site|null Returns the site.
     */
    public static function deserializeSite(array $data): ?Site {

        if (0 === count($data)) {
            return null;
        }

        $model = new Site();

        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setAccountingGeneral(static::deserializeAccountingGeneral(ArrayHelper::get($data, SerializerKeys::ACCOUNTING_GENERAL, [])));
        $model->setAddressInvoicing(static::deserializeAddress(ArrayHelper::get($data, SerializerKeys::ADDRESS_INVOICING, [])));
        $model->setApplyToChildrenSites(ArrayHelper::get($data, SerializerKeys::APPLY_TO_CHILDREN_SITES));
        $model->setAutomaticStockTransfer(static::deserializeAutomaticStockTransfer(ArrayHelper::get($data, SerializerKeys::AUTOMATIC_STOCK_TRANSFER, [])));
        $model->setBillableStatus(ArrayHelper::get($data, SerializerKeys::BILLABLE_STATUS));
        $model->setBlockClosingInventoryWithPendingReceipts(ArrayHelper::get($data, SerializerKeys::BLOCK_CLOSING_INVENTORY_WITH_PENDING_RECEIPTS));
        $model->setCodeGln(ArrayHelper::get($data, SerializerKeys::CODE_GLN));
        $model->setCodeInternal(ArrayHelper::get($data, SerializerKeys::CODE_INTERNAL));
        $model->setControlSampleConfig(static::deserializeControlSampleConfig(ArrayHelper::get($data, SerializerKeys::CONTROL_SAMPLE_CONFIG, [])));
        $model->setDateStartBilling(ArrayHelper::get($data, SerializerKeys::DATE_START_BILLING));
        $model->setDepth(ArrayHelper::get($data, SerializerKeys::DEPTH));
        $model->setDisplayNegativeStock(ArrayHelper::get($data, SerializerKeys::DISPLAY_NEGATIVE_STOCK));
        $model->setExtData(static::deserializeExtData(ArrayHelper::get($data, SerializerKeys::EXT_DATA, [])));
        $model->setExtId(ArrayHelper::get($data, SerializerKeys::EXT_ID));
        $model->setHasFinishedProducts(ArrayHelper::get($data, SerializerKeys::HAS_FINISHED_PRODUCTS));
        $model->setIdAccountIdeolys(ArrayHelper::get($data, SerializerKeys::ID_ACCOUNT_IDEOLYS));
        $model->setIdAccountIdeolysRoot(ArrayHelper::get($data, SerializerKeys::ID_ACCOUNT_IDEOLYS_ROOT));
        $model->setIdParent(ArrayHelper::get($data, SerializerKeys::ID_PARENT));
        $model->setIdTree(ArrayHelper::get($data, SerializerKeys::ID_TREE));
        $model->setIsDoingStockTransfer(ArrayHelper::get($data, SerializerKeys::IS_DOING_STOCK_TRANSFER));
        $model->setIsPaymentActive(ArrayHelper::get($data, SerializerKeys::IS_PAYMENT_ACTIVE));
        $model->setIsUsingOnlyOrderableSupplierProduct(ArrayHelper::get($data, SerializerKeys::IS_USING_ONLY_ORDERABLE_SUPPLIER_PRODUCT));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setLeftBorder(ArrayHelper::get($data, SerializerKeys::LEFT_BORDER));
        $model->setLink(ArrayHelper::get($data, BaseSerializerKeys::LINK));
        $model->setParams(static::deserializeParams(ArrayHelper::get($data, SerializerKeys::PARAMS, [])));
        $model->setRightBorder(ArrayHelper::get($data, SerializerKeys::RIGHT_BORDER));
        $model->setStatus(ArrayHelper::get($data, SerializerKeys::STATUS));
        $model->setStockValuationType(ArrayHelper::get($data, SerializerKeys::STOCK_VALUATION_TYPE));
        $model->setStockWithdrawalOrigin(ArrayHelper::get($data, SerializerKeys::STOCK_WITHDRAWAL_ORIGIN));
        $model->setSupplier(static::deserializeSupplier(ArrayHelper::get($data, SerializerKeys::SUPPLIER, [])));
        $model->setSupplierProductReference(static::deserializeSupplierProductReference(ArrayHelper::get($data, SerializerKeys::SUPPLIER_PRODUCT_REFERENCE, [])));
        $model->setType(ArrayHelper::get($data, BaseSerializerKeys::TYPE));
        $model->setUseGrossQuantityInRecipe(ArrayHelper::get($data, SerializerKeys::USE_GROSS_QUANTITY_IN_RECIPE));
        $model->setUseNetQuantityInRecipe(ArrayHelper::get($data, SerializerKeys::USE_NET_QUANTITY_IN_RECIPE));
        $model->setZeroQuantityByDefault(ArrayHelper::get($data, SerializerKeys::ZERO_QUANTITY_BY_DEFAULT));

        foreach (ArrayHelper::get($data, SerializerKeys::ADDRESSES, []) as $current) {
            $model->addAddress(static::deserializeAddress($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::TAGS, []) as $current) {
            $model->addTag(static::deserializeTag($current));
        }

        return $model;
    }

    /**
     * Deserialize a storage type.
     *
     * @param array<string,mixed> $data The data.
     * @return StorageType|null Returns the storage type.
     */
    public static function deserializeStorageType(array $data): ?StorageType {

        if (0 === count($data)) {
            return null;
        }

        $model = new StorageType();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a storehouse.
     *
     * @param array<string,mixed> $data The data.
     * @return Storehouse|null Returns the storehouse.
     */
    public static function deserializeStorehouse(array $data): ?Storehouse {

        if (0 === count($data)) {
            return null;
        }

        $model = new Storehouse();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setAccountingNumber(ArrayHelper::get($data, SerializerKeys::ACCOUNTING_NUMBER));
        $model->setAddress(static::deserializeAddress(ArrayHelper::get($data, SerializerKeys::ADDRESS, [])));
        $model->setAllClaimWorkflow(ArrayHelper::get($data, SerializerKeys::ALL_CLAIM_WORKFLOW));
        $model->setAnalyticalGroup(static::deserializeAnalyticalGroup(ArrayHelper::get($data, SerializerKeys::ANALYTICAL_GROUP, [])));
        $model->setAutoCloseReceipt(ArrayHelper::get($data, SerializerKeys::AUTO_CLOSE_RECEIPT));
        $model->setAutoSentPreOrder(ArrayHelper::get($data, SerializerKeys::AUTO_SENT_PRE_ORDER));
        $model->setCatchwords(ArrayHelper::get($data, SerializerKeys::CATCHWORDS));
        $model->setCodeGln(ArrayHelper::get($data, SerializerKeys::CODE_GLN));
        $model->setCodeInternal(ArrayHelper::get($data, SerializerKeys::CODE_INTERNAL));
        $model->setDateEnd(ArrayHelper::get($data, SerializerKeys::DATE_END));
        $model->setDateLinked(ArrayHelper::get($data, SerializerKeys::DATE_LINKED));
        $model->setDateStart(ArrayHelper::get($data, SerializerKeys::DATE_START));
        $model->setDateValid(ArrayHelper::get($data, SerializerKeys::DATE_VALID));
        $model->setDeliveryDataSendingModes(ArrayHelper::get($data, SerializerKeys::DELIVERY_DATA_SENDING_MODES));
        $model->setIdOasysSupplier(ArrayHelper::get($data, SerializerKeys::ID_OASYS_SUPPLIER));
        $model->setIdSite(ArrayHelper::get($data, SerializerKeys::ID_SITE));
        $model->setIdSiteOwner(ArrayHelper::get($data, SerializerKeys::ID_SITE_OWNER));
        $model->setIntraCommunityVAT(ArrayHelper::get($data, SerializerKeys::INTRA_COMMUNITY_VAT));
        $model->setIsActive(ArrayHelper::get($data, SerializerKeys::IS_ACTIVE));
        $model->setIsClaimForcedWhenReceiptUpdated(ArrayHelper::get($data, SerializerKeys::IS_CLAIM_FORCED_WHEN_RECEIPT_UPDATED));
        $model->setIsClaimMustBeSendByFax(ArrayHelper::get($data, SerializerKeys::IS_CLAIM_MUST_BE_SEND_BY_FAX));
        $model->setIsClaimMustBeSendByMail(ArrayHelper::get($data, SerializerKeys::IS_CLAIM_MUST_BE_SEND_BY_MAIL));
        $model->setIsCreditNoteMustBeSendByFax(ArrayHelper::get($data, SerializerKeys::IS_CREDIT_NOTE_MUST_BE_SEND_BY_FAX));
        $model->setIsCreditNoteMustBeSendByMail(ArrayHelper::get($data, SerializerKeys::IS_CREDIT_NOTE_MUST_BE_SEND_BY_MAIL));
        $model->setIsDeliveryNoteInvoice(ArrayHelper::get($data, SerializerKeys::IS_DELIVERY_NOTE_INVOICE));
        $model->setIsInClaimWorkflow(ArrayHelper::get($data, SerializerKeys::IS_IN_CLAIM_WORKFLOW));
        $model->setIsOnSupplierDirectory(ArrayHelper::get($data, SerializerKeys::IS_ON_SUPPLIER_DIRECTORY));
        $model->setIsOrderDelayNullable(ArrayHelper::get($data, SerializerKeys::IS_ORDER_DELAY_NULLABLE));
        $model->setIsPreorderAuthorized(ArrayHelper::get($data, SerializerKeys::IS_PREORDER_AUTHORIZED));
        $model->setIsReceiptPricesFromPricelist(ArrayHelper::get($data, SerializerKeys::IS_RECEIPT_PRICES_FROM_PRICELIST));
        $model->setIsShippingCostNullable(ArrayHelper::get($data, SerializerKeys::IS_SHIPPING_COST_NULLABLE));
        $model->setIsStatusLinkInOrderEmail(ArrayHelper::get($data, SerializerKeys::IS_STATUS_LINK_IN_ORDER_EMAIL));
        $model->setIsThresholdStrict(ArrayHelper::get($data, SerializerKeys::IS_THRESHOLD_STRICT));
        $model->setIsUsingDeliveryDaysProduction(ArrayHelper::get($data, SerializerKeys::IS_USING_DELIVERY_DAYS_PRODUCTION));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setLogo(ArrayHelper::get($data, BaseSerializerKeys::LOGO));
        $model->setNbDaysBetweenDeliveryAndConsumption(ArrayHelper::get($data, SerializerKeys::NB_DAYS_BETWEEN_DELIVERY_AND_CONSUMPTION));
        $model->setNbDaysDeliveryBeforeProduction(ArrayHelper::get($data, SerializerKeys::NB_DAYS_DELIVERY_BEFORE_PRODUCTION));
        $model->setNetworkFull(ArrayHelper::get($data, SerializerKeys::NETWORK_FULL));
        $model->setOpeningDaysType(ArrayHelper::get($data, SerializerKeys::OPENING_DAYS_TYPE));
        $model->setOrderDelay(ArrayHelper::get($data, SerializerKeys::ORDER_DELAY));
        $model->setOrderSupplierUnit(ArrayHelper::get($data, SerializerKeys::ORDER_SUPPLIER_UNIT));
        $model->setPaymentMethod(ArrayHelper::get($data, SerializerKeys::PAYMENT_METHOD));
        $model->setPaymentTerms(ArrayHelper::get($data, SerializerKeys::PAYMENT_TERMS));
        $model->setPresentation(ArrayHelper::get($data, SerializerKeys::PRESENTATION));
        $model->setPurchaseType(ArrayHelper::get($data, SerializerKeys::PURCHASE_TYPE));
        $model->setRefSiteOfSupplier(ArrayHelper::get($data, SerializerKeys::REF_SITE_OF_SUPPLIER));
        $model->setSendingModes(ArrayHelper::get($data, SerializerKeys::SENDING_MODES));
        $model->setShippingCost(ArrayHelper::get($data, SerializerKeys::SHIPPING_COST));
        $model->setSiret(ArrayHelper::get($data, SerializerKeys::SIRET));
        $model->setSpecifications(ArrayHelper::get($data, SerializerKeys::SPECIFICATIONS));
        $model->setSupplier(static::deserializeSupplier(ArrayHelper::get($data, SerializerKeys::SUPPLIER, [])));
        $model->setThresholdOrder(ArrayHelper::get($data, SerializerKeys::THRESHOLD_ORDER));
        $model->setTypes(ArrayHelper::get($data, SerializerKeys::TYPES));
        $model->setUniverses(ArrayHelper::get($data, SerializerKeys::UNIVERSES));
        $model->setWebsite(ArrayHelper::get($data, SerializerKeys::WEBSITE));

        foreach (ArrayHelper::get($data, SerializerKeys::CERTIFICATIONS, []) as $current) {
            $model->addCertification(static::deserializeCertification($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::DELIVERY_DAYS_PRODUCTION, []) as $current) {
            $model->addDeliveryDaysProduction(static::deserializeDeliveryDaysProduction($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::DELIVERY_WEEKDAYS, []) as $current) {
            $model->addDeliveryWeekday(static::deserializeDeliveryWeekday($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::EMAILS, []) as $current) {
            $model->addEmail(static::deserializeEmail($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::FAXES, []) as $current) {
            $model->addFax(static::deserializeFax($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::LINKED_USERS, []) as $current) {
            $model->addLinkedUser(static::deserializeLinkedUser($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::PHONES, []) as $current) {
            $model->addPhone(static::deserializePhone($current));
        }

        foreach (ArrayHelper::get($data, SerializerKeys::PROD_FAMILIES, []) as $current) {
            $model->addProdFamily(static::deserializeProdFamily($current));
        }

        return $model;
    }

    /**
     * Deserialize a supplier.
     *
     * @param array<string,mixed> $data The data.
     * @return Supplier|null Returns the supplier.
     */
    public static function deserializeSupplier(array $data): ?Supplier {

        if (0 === count($data)) {
            return null;
        }

        $model = new Supplier();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setCodeInternal(ArrayHelper::get($data, SerializerKeys::CODE_INTERNAL));
        $model->setIsActive(ArrayHelper::get($data, SerializerKeys::IS_ACTIVE));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a supplier product.
     *
     * @param array<string,mixed> $data The data.
     * @return SupplierProduct|null Returns the ext data.
     */
    public static function deserializeSupplierProduct(array $data): ?SupplierProduct {

        if (0 === count($data)) {
            return null;
        }

        $model = new SupplierProduct();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setBillingUnit(ArrayHelper::get($data, SerializerKeys::BILLING_UNIT));
        $model->setChain(ArrayHelper::get($data, SerializerKeys::CHAIN));
        $model->setCodeInternal(ArrayHelper::get($data, SerializerKeys::CODE_INTERNAL));
        $model->setDairySubsidy(static::deserializeDairySubsidy(ArrayHelper::get($data, SerializerKeys::DAIRY_SUBSIDY, [])));
        $model->setDateCreated(ArrayHelper::get($data, SerializerKeys::DATE_CREATED));
        $model->setDateUpdated(ArrayHelper::get($data, SerializerKeys::DATE_UPDATED));
        $model->setExtId(ArrayHelper::get($data, SerializerKeys::EXT_ID));
        $model->setIdDocumentProductSheet(ArrayHelper::get($data, SerializerKeys::ID_DOCUMENT_PRODUCT_SHEET));
        $model->setIdSiteOwner(ArrayHelper::get($data, SerializerKeys::ID_SITE_OWNER));
        $model->setIsActive(ArrayHelper::get($data, SerializerKeys::IS_ACTIVE));
        $model->setIsDecimalAllowed(ArrayHelper::get($data, SerializerKeys::IS_DECIMAL_ALLOWED));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setMinOrderQty(ArrayHelper::get($data, SerializerKeys::MIN_ORDER_QTY));
        $model->setNbBillingPerOrder(ArrayHelper::get($data, SerializerKeys::NB_BILLING_PER_ORDER));
        $model->setNbProductionPerOrders(ArrayHelper::get($data, SerializerKeys::NB_PRODUCTION_PER_ORDERS));
        $model->setNbStoragePerOrder(ArrayHelper::get($data, SerializerKeys::NB_STORAGE_PER_ORDER));
        $model->setOrderUnit(ArrayHelper::get($data, SerializerKeys::ORDER_UNIT));
        $model->setPackagingLevel(static::deserializePackagingLevel(ArrayHelper::get($data, SerializerKeys::PACKAGING_LEVEL, [])));
        $model->setProduct(static::deserializeProduct(ArrayHelper::get($data, SerializerKeys::PRODUCT, [])));
        $model->setPreOrderDelay(ArrayHelper::get($data, SerializerKeys::PRE_ORDER_DELAY));
        $model->setReference(ArrayHelper::get($data, BaseSerializerKeys::REFERENCE));
        $model->setStorageUnit(ArrayHelper::get($data, SerializerKeys::STORAGE_UNIT));
        $model->setWeightOrderUnit(ArrayHelper::get($data, SerializerKeys::WEIGHT_ORDER_UNIT));

        return $model;
    }

    /**
     * Deserialize a supplier product reference.
     *
     * @param array<string,mixed> $data The data.
     * @return SupplierProductReference|null Returns the supplier product reference.
     */
    public static function deserializeSupplierProductReference(array $data): ?SupplierProductReference {

        if (0 === count($data)) {
            return null;
        }

        $model = new SupplierProductReference();
        $model->setApplyToChildrenSites(ArrayHelper::get($data, SerializerKeys::APPLY_TO_CHILDREN_SITES));
        $model->setIsMandatory(ArrayHelper::get($data, SerializerKeys::IS_MANDATORY));

        return $model;
    }

    /**
     * Deserialize a tag.
     *
     * @param array<string,mixed> $data The data.
     * @return Tag|null Returns the tag.
     */
    public static function deserializeTag(array $data): ?Tag {

        if (0 === count($data)) {
            return null;
        }

        $model = new Tag();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setBackgroundColor(ArrayHelper::get($data, SerializerKeys::BACKGROUND_COLOR));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setType(ArrayHelper::get($data, BaseSerializerKeys::TYPE));

        return $model;
    }

    /**
     * Deserialize a tax.
     *
     * @param array<string,mixed> $data The data.
     * @return Tax|null Returns the tax.
     */
    public static function deserializeTax(array $data): ?Tax {

        if (0 === count($data)) {
            return null;
        }

        $model = new Tax();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));
        $model->setValue(ArrayHelper::get($data, BaseSerializerKeys::VALUE));

        return $model;
    }

    /**
     * Deserialize a tree.
     *
     * @param array<string,mixed> $data The data.
     * @return Tree|null Returns the tree.
     */
    public static function deserializeTree(array $data): ?Tree {

        if (0 === count($data)) {
            return null;
        }

        $model = new Tree();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }

    /**
     * Deserialize a unit.
     *
     * @param array<string,mixed> $data The data.
     * @return Unit|null Returns the production unit.
     */
    public static function deserializeUnit(array $data): ?Unit {

        if (0 === count($data)) {
            return null;
        }

        $model = new Unit();
        $model->setId(ArrayHelper::get($data, BaseSerializerKeys::ID));
        $model->setCode(ArrayHelper::get($data, BaseSerializerKeys::CODE));
        $model->setLabel(ArrayHelper::get($data, BaseSerializerKeys::LABEL));

        return $model;
    }
}
