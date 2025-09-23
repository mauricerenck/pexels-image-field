<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Serializer\Billing;

use WBW\Library\Common\Model\Billing\AccountingAccountInterface;
use WBW\Library\Common\Model\Billing\BankDetailsInterface;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;
use WBW\Library\Common\Model\Billing\BillableInterface;
use WBW\Library\Common\Model\Billing\BillingAddressInterface;
use WBW\Library\Common\Model\Billing\DeliveryAddressInterface;
use WBW\Library\Common\Model\Billing\DeliveryNoteInterface;
use WBW\Library\Common\Model\Billing\PaymentChoiceInterface;
use WBW\Library\Common\Model\Billing\PaymentTermInterface;
use WBW\Library\Common\Model\Billing\PurchaseBillInterface;
use WBW\Library\Common\Model\Billing\PurchaseOrderInterface;
use WBW\Library\Common\Model\Billing\QuotationInterface;
use WBW\Library\Common\Model\Billing\SalesBillInterface;
use WBW\Library\Common\Model\Billing\SendingAddressInterface;
use WBW\Library\Common\Model\Billing\TaxableInterface;
use WBW\Library\Common\Model\Billing\VatRateInterface;
use WBW\Library\Common\Serializer\JsonSerializer as BaseJsonSerializer;
use WBW\Library\Common\Serializer\SerializerKeys;

/**
 *  JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Serializer\Billing
 */
class JsonSerializer {

    /**
     * Serialize an accounting account.
     *
     * @param AccountingAccountInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeAccountingAccount(AccountingAccountInterface $model): array {

        return [
            SerializerKeys::LABEL  => $model->getLabel(),
            SerializerKeys::NUMBER => $model->getNumber(),
            SerializerKeys::TYPE   => $model->getType(),
        ];
    }

    /**
     * Serialize a bank details.
     *
     * @param BankDetailsInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeBankDetails(BankDetailsInterface $model): array {

        return [
            SerializerKeys::ACCOUNT_NUMBER     => $model->getAccountNumber(),
            SerializerKeys::BANK_CODE          => $model->getBankCode(),
            SerializerKeys::BANK_DOMICILIATION => $model->getBankDomiciliation(),
            SerializerKeys::BANK_NAME          => $model->getBankName(),
            SerializerKeys::BIC                => $model->getBic(),
            SerializerKeys::BRANCH_CODE        => $model->getBranchCode(),
            SerializerKeys::IBAN               => $model->getIban(),
            SerializerKeys::OWNER              => $model->getOwner(),
            SerializerKeys::RIB_KEY            => $model->getRibKey(),
        ];
    }

    /**
     * Serialize a billable.
     *
     * @param BillableInterface $model The model.
     * @return array<string,mixed> Returns the serialized billable.
     */
    public static function serializeBillable(BillableInterface $model): array {

        return [
            SerializerKeys::COMMENT             => $model->getComment(),
            SerializerKeys::CREATED_AT          => $model->getCreatedAt(),
            SerializerKeys::DATE                => $model->getDate(),
            SerializerKeys::DETAILS             => BaseJsonSerializer::serializeArray($model->getDetails()),
            SerializerKeys::DISCOUNT_RATE       => $model->getDiscountRate(),
            SerializerKeys::DISCOUNT_TOTAL      => $model->getDiscountTotal(),
            SerializerKeys::EXCLUDING_VAT_TOTAL => $model->getExcludingVatTotal(),
            SerializerKeys::INCLUDING_VAT_TOTAL => $model->getIncludingVatTotal(),
            SerializerKeys::NUMBER              => $model->getNumber(),
            SerializerKeys::PARENT              => BaseJsonSerializer::serializeModel($model->getParent()),
            SerializerKeys::REFERENCE           => $model->getReference(),
            SerializerKeys::UPDATED_AT          => $model->getUpdatedAt(),
            SerializerKeys::VAT_TOTAL           => $model->getVatTotal(),
        ];
    }

    /**
     * Serialize a billable detail.
     *
     * @param BillableDetailInterface $model The model.
     * @return array<string,mixed> Returns the serialized billable detail.
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
     * Serialize a billing address.
     *
     * @param BillingAddressInterface $model The model.
     * @return array<string,mixed> Returns the serialized billing address.
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
     * Serialize a delivery address.
     *
     * @param DeliveryAddressInterface $model The model.
     * @return array<string,mixed> Returns the serialized sending address.
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
     * Serialize a delivery note.
     *
     * @param DeliveryNoteInterface $model The model.
     * @return array<string,mixed> Returns the serialized delivery note.
     */
    public static function serializeDeliveryNote(DeliveryNoteInterface $model): array {
        return static::serializeBillable($model);
    }

    /**
     * Serialize a payment choice.
     *
     * @param PaymentChoiceInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializePaymentChoice(PaymentChoiceInterface $model): array {

        return [
            SerializerKeys::LABEL => $model->getLabel(),
        ];
    }

    /**
     * Serialize a payment term.
     *
     * @param PaymentTermInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializePaymentTerm(PaymentTermInterface $model): array {

        return [
            SerializerKeys::CODE  => $model->getCode(),
            SerializerKeys::LABEL => $model->getLabel(),
        ];
    }

    /**
     * Serialize a purchase bill.
     *
     * @param PurchaseBillInterface $model The model.
     * @return array<string,mixed> Returns the serialized purchase bill.
     */
    public static function serializePurchaseBill(PurchaseBillInterface $model): array {

        $result = static::serializeBillable($model);

        return array_merge($result, [
            SerializerKeys::PAYMENT_DATE => $model->getPaymentDate(),
        ]);
    }

    /**
     * Serialize a purchase order.
     *
     * @param PurchaseOrderInterface $model The model.
     * @return array<string,mixed> Returns the serialized purchase order.
     */
    public static function serializePurchaseOrder(PurchaseOrderInterface $model): array {
        return static::serializeBillable($model);
    }

    /**
     * Serialize a quotation.
     *
     * @param QuotationInterface $model The model.
     * @return array<string,mixed> Returns the serialized quotation.
     */
    public static function serializeQuotation(QuotationInterface $model): array {

        $result = static::serializeBillable($model);

        return array_merge($result, [
            SerializerKeys::EXPIRATION_DATE => $model->getExpirationDate(),
        ]);
    }

    /**
     * Serialize a sales bill.
     *
     * @param SalesBillInterface $model The model.
     * @return array<string,mixed> Returns the serialized sales bill.
     */
    public static function serializeSalesBill(SalesBillInterface $model): array {
        return static::serializeBillable($model);
    }

    /**
     * Serialize a sending address.
     *
     * @param SendingAddressInterface $model The model.
     * @return array<string,mixed> Returns the serialized sending address.
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
     * Serialize a taxable.
     *
     * @param TaxableInterface $model The model.
     * @return array<string,mixed> Returns the serialized taxable.
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

    /**
     * Serialize a VAT rate.
     *
     * @param VatRateInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeVatRate(VatRateInterface $model): array {

        return [
            SerializerKeys::LABEL                        => $model->getLabel(),
            SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT => BaseJsonSerializer::serializeModel($model->getPurchasesAccountingAccount()),
            SerializerKeys::RATE                         => $model->getRate(),
            SerializerKeys::SALES_ACCOUNTING_ACCOUNT     => BaseJsonSerializer::serializeModel($model->getSalesAccountingAccount()),
        ];
    }
}
