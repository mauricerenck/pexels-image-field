<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Serializer;

use DateTime;
use WBW\Library\Adoria\Model\Line;
use WBW\Library\Adoria\Model\Result;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Serializer
 */
class ResponseDeserializer {

    /**
     * Response date format.
     *
     * @var string
     */
    const RESPONSE_DATE_FORMAT = RequestSerializer::REQUEST_DATE_FORMAT;

    /**
     * Deserialize a line.
     *
     * @param string $rawResponse The raw response.
     * @return Line Returns the line.
     */
    public static function deserializeLine(string $rawResponse): Line {

        $decodedResponse = json_decode($rawResponse, true);

        $invoiceDate    = DateTime::createFromFormat(self::RESPONSE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "InvoiceDate"));
        $invoiceDueDate = DateTime::createFromFormat(self::RESPONSE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "InvoiceDueDate"));

        $model = new Line();

        $model->setBookingJournalCode(ArrayHelper::get($decodedResponse, "BookingJournalCode"));
        $model->setInvoiceDate(false !== $invoiceDate ? $invoiceDate : null);
        $model->setAccountingCode(ArrayHelper::get($decodedResponse, "AccountingCode"));
        $model->setSubledgerAccount(ArrayHelper::get($decodedResponse, "SubledgerAccount"));
        $model->setInvoiceNumber(ArrayHelper::get($decodedResponse, "InvoiceNumber"));
        $model->setReference(ArrayHelper::get($decodedResponse, "Reference"));
        $model->setAnalyticCode(ArrayHelper::get($decodedResponse, "AnalyticCode"));
        $model->setAmount(ArrayHelper::get($decodedResponse, "Amount"));
        $model->setCurrency(ArrayHelper::get($decodedResponse, "Currency"));
        $model->setAmountSign(ArrayHelper::get($decodedResponse, "AmountSign"));
        $model->setInvoiceDueDate(false !== $invoiceDueDate ? $invoiceDueDate : null);
        $model->setFreeField(ArrayHelper::get($decodedResponse, "FreeField"));

        return $model;
    }

    /**
     * Deserialize a result.
     *
     * @param string $rawResponse The raw response.
     * @return Result Returns the result.
     */
    public static function deserializeResult(string $rawResponse): Result {

        $model = new Result();

        $decodedResponse = json_decode($rawResponse, true);
        if (null === $decodedResponse) {
            return $model;
        }

        $lines = [];

        $data = ArrayHelper::get($decodedResponse, "Datas", []);
        if (null === $data) {
            $data = [];
        }

        foreach ($data as $current) {
            $lines[] = static::deserializeLine(json_encode($current));
        }

        $model->setReturnCode(intval(ArrayHelper::get($decodedResponse, "ReturnCode", -1)));
        $model->setErrors(ArrayHelper::get($decodedResponse, "Errors", []));
        $model->setData($lines);

        return $model;
    }
}
