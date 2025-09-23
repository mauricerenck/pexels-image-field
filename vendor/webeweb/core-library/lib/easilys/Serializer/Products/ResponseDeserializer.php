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

namespace WBW\Library\Easilys\Serializer\Products;

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Easilys\Response\Products\GetPriceListHeadersSiteResponse;
use WBW\Library\Easilys\Response\Products\GetPriceListSupplierProductsSiteResponse;
use WBW\Library\Easilys\Response\Products\GetProductsSiteResponse;
use WBW\Library\Easilys\Response\Products\GetQualitiesResponse;
use WBW\Library\Easilys\Response\Products\GetRangesResponse;
use WBW\Library\Easilys\Response\Products\GetUnitsResponse;
use WBW\Library\Easilys\Serializer\JsonDeserializer;
use WBW\Library\Easilys\Serializer\ResponseDeserializer as BaseResponseDeserializer;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Serializer\Products
 */
class ResponseDeserializer extends BaseResponseDeserializer {

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetPriceListHeadersSiteResponse Returns the response.
     */
    public static function deserializeGetPriceListHeadersSiteResponse(string $rawResponse): GetPriceListHeadersSiteResponse {

        $model = new GetPriceListHeadersSiteResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializePriceList($current));
        }

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetPriceListSupplierProductsSiteResponse Returns the response.
     */
    public static function deserializeGetPriceListSupplierProductsSiteResponse(string $rawResponse): GetPriceListSupplierProductsSiteResponse {

        $model = new GetPriceListSupplierProductsSiteResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializePriceListSupplierProduct($current));
        }

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetProductsSiteResponse Returns the response.
     */
    public static function deserializeGetProductsSiteResponse(string $rawResponse): GetProductsSiteResponse {

        $model = new GetProductsSiteResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializeProduct($current));
        }

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetQualitiesResponse Returns the response.
     */
    public static function deserializeGetQualitiesResponse(string $rawResponse): GetQualitiesResponse {

        $model = new GetQualitiesResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializeQuality($current));
        }

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetRangesResponse Returns the response.
     */
    public static function deserializeGetRangesResponse(string $rawResponse): GetRangesResponse {

        $model = new GetRangesResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializeRange($current));
        }

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetUnitsResponse Returns the response.
     */
    public static function deserializeGetUnitsResponse(string $rawResponse): GetUnitsResponse {

        $model = new GetUnitsResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializeUnit($current));
        }

        return $model;
    }
}
