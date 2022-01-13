<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Serializer;

use WBW\Library\Bill\Model\BillableDetailInterface;
use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\BillingAddressInterface;
use WBW\Library\Bill\Model\DeliveryAddressInterface;
use WBW\Library\Bill\Model\DeliveryNoteInterface;
use WBW\Library\Bill\Model\PurchaseBillInterface;
use WBW\Library\Bill\Model\PurchaseOrderInterface;
use WBW\Library\Bill\Model\QuotationInterface;
use WBW\Library\Bill\Model\SalesBillInterface;
use WBW\Library\Bill\Model\SendingAddressInterface;
use WBW\Library\Bill\Model\TaxableInterface;
use WBW\Library\Serializer\Helper\JsonSerializerHelper;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Serializer
 */
class JsonSerializer {

    /**
     * Serializes a billable.
     *
     * @param BillableInterface $model The model.
     * @return array Returns the serialized billable.
     */
    public static function serializeBillable(BillableInterface $model): array {
        return [
            SerializerKeys::COMMENT             => $model->getComment(),
            SerializerKeys::CREATED_AT          => $model->getCreatedAt(),
            SerializerKeys::DATE                => $model->getDate(),
            SerializerKeys::DETAILS             => JsonSerializerHelper::jsonSerializeArray($model->getDetails()),
            SerializerKeys::DISCOUNT_RATE       => $model->getDiscountRate(),
            SerializerKeys::DISCOUNT_TOTAL      => $model->getDiscountTotal(),
            SerializerKeys::EXCLUDING_VAT_TOTAL => $model->getExcludingVatTotal(),
            SerializerKeys::INCLUDING_VAT_TOTAL => $model->getIncludingVatTotal(),
            SerializerKeys::NUMBER              => $model->getNumber(),
            SerializerKeys::PARENT              => JsonSerializerHelper::jsonSerializeModel($model->getParent()),
            SerializerKeys::REFERENCE           => $model->getReference(),
            SerializerKeys::UPDATED_AT          => $model->getUpdatedAt(),
            SerializerKeys::VAT_TOTAL           => $model->getVatTotal(),
        ];
    }

    /**
     * Serializes a billable detail.
     *
     * @param BillableDetailInterface $model The model.
     * @return array Returns the serialized billable detail.
     */
    public static function serializeBillableDetail(BillableDetailInterface $model): array {

        $result = static::serializeTaxable($model);

        return array_merge($result, [
            SerializerKeys::COMMENT             => $model->getComment(),
            SerializerKeys::DISCOUNT_TOTAL      => $model->getDiscountTotal(),
            SerializerKeys::EXCLUDING_VAT_TOTAL => $model->getExcludingVatTotal(),
            SerializerKeys::INCLUDING_VAT_TOTAL => $model->getIncludingVatTotal(),
            SerializerKeys::LABEL               => $model->getLabel(),
            SerializerKeys::QUANTITY            => $model->getQuantity(),
            SerializerKeys::REFERENCE           => $model->getReference(),
            SerializerKeys::VAT_TOTAL           => $model->getVatTotal(),
        ]);
    }

    /**
     * Serializes a billing address.
     *
     * @param BillingAddressInterface $model The model.
     * @return array Returns the serialized billing address.
     */
    public static function serializeBillingAddress(BillingAddressInterface $model): array {
        return [
            SerializerKeys::BILLING_ADDRESS_ADDRESSEE    => $model->getBillingAddressAddressee(),
            SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER => $model->getBillingAddressHouseNumber(),
            SerializerKeys::BILLING_ADDRESS_STREET_NAME  => $model->getBillingAddressStreetName(),
            SerializerKeys::BILLING_ADDRESS_POSTAL_CODE  => $model->getBillingAddressPostalCode(),
            SerializerKeys::BILLING_ADDRESS_LOCATION     => $model->getBillingAddressLocation(),
            SerializerKeys::BILLING_ADDRESS_COUNTRY      => $model->getBillingAddressCountry(),
        ];
    }

    /**
     * Serializes a delivery address.
     *
     * @param DeliveryAddressInterface $model The model.
     * @return array Returns the serialized sending address.
     */
    public static function serializeDeliveryAddress(DeliveryAddressInterface $model): array {
        return [
            SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE    => $model->getDeliveryAddressAddressee(),
            SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER => $model->getDeliveryAddressHouseNumber(),
            SerializerKeys::DELIVERY_ADDRESS_STREET_NAME  => $model->getDeliveryAddressStreetName(),
            SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE  => $model->getDeliveryAddressPostalCode(),
            SerializerKeys::DELIVERY_ADDRESS_LOCATION     => $model->getDeliveryAddressLocation(),
            SerializerKeys::DELIVERY_ADDRESS_COUNTRY      => $model->getDeliveryAddressCountry(),
        ];
    }

    /**
     * Serializes a delivery note.
     *
     * @param DeliveryNoteInterface $model The model.
     * @return array Returns the serialized delivery note.
     */
    public static function serializeDeliveryNote(DeliveryNoteInterface $model): array {
        return static::serializeBillable($model);
    }

    /**
     * Serializes a purchase bill.
     *
     * @param PurchaseBillInterface $model The model.
     * @return array Returns the serialized purchase bill.
     */
    public static function serializePurchaseBill(PurchaseBillInterface $model): array {

        $result = static::serializeBillable($model);

        return array_merge($result, [
            SerializerKeys::PAYMENT_DATE => $model->getPaymentDate(),
        ]);
    }

    /**
     * Serializes a purchase order.
     *
     * @param PurchaseOrderInterface $model The model.
     * @return array Returns the serialized purchase order.
     */
    public static function serializePurchaseOrder(PurchaseOrderInterface $model): array {
        return static::serializeBillable($model);
    }

    /**
     * Serializes a quotation.
     *
     * @param QuotationInterface $model The model.
     * @return array Returns the serialized quotation.
     */
    public static function serializeQuotation(QuotationInterface $model): array {

        $result = static::serializeBillable($model);

        return array_merge($result, [
            SerializerKeys::EXPIRATION_DATE => $model->getExpirationDate(),
        ]);
    }

    /**
     * Serializes a sales bill.
     *
     * @param SalesBillInterface $model The model.
     * @return array Returns the serialized sales bill.
     */
    public static function serializeSalesBill(SalesBillInterface $model): array {
        return static::serializeBillable($model);
    }

    /**
     * Serializes a sending address.
     *
     * @param SendingAddressInterface $model The model.
     * @return array Returns the serialized sending address.
     */
    public static function serializeSendingAddress(SendingAddressInterface $model): array {
        return [
            SerializerKeys::SENDING_ADDRESS_ADDRESSEE    => $model->getSendingAddressAddressee(),
            SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER => $model->getSendingAddressHouseNumber(),
            SerializerKeys::SENDING_ADDRESS_STREET_NAME  => $model->getSendingAddressStreetName(),
            SerializerKeys::SENDING_ADDRESS_POSTAL_CODE  => $model->getSendingAddressPostalCode(),
            SerializerKeys::SENDING_ADDRESS_LOCATION     => $model->getSendingAddressLocation(),
            SerializerKeys::SENDING_ADDRESS_COUNTRY      => $model->getSendingAddressCountry(),
        ];
    }

    /**
     * Serializes a taxable.
     *
     * @param TaxableInterface $model The model.
     * @return array Returns the serialized taxable.
     */
    public static function serializeTaxable(TaxableInterface $model): array {
        return [
            SerializerKeys::DISCOUNT_AMOUNT     => $model->getDiscountAmount(),
            SerializerKeys::DISCOUNT_RATE       => $model->getDiscountRate(),
            SerializerKeys::EXCLUDING_VAT_PRICE => $model->getExcludingVatPrice(),
            SerializerKeys::INCLUDING_VAT_PRICE => $model->getIncludingVatPrice(),
            SerializerKeys::VAT_AMOUNT          => $model->getVatAmount(),
            SerializerKeys::VAT_RATE            => $model->getVatRate(),
        ];
    }
}