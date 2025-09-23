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

namespace WBW\Library\Easilys\Serializer\Suppliers;

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Easilys\Response\Suppliers\GetStorehousesSiteResponse;
use WBW\Library\Easilys\Serializer\JsonDeserializer;
use WBW\Library\Easilys\Serializer\ResponseDeserializer as BaseResponseDeserializer;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Serializer\Suppliers
 */
class ResponseDeserializer extends BaseResponseDeserializer {

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetStorehousesSiteResponse Returns the response.
     */
    public static function deserializeGetStorehousesSiteResponse(string $rawResponse): GetStorehousesSiteResponse {

        $model = new GetStorehousesSiteResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        foreach (ArrayHelper::get($data, "data", []) as $current) {
            $model->addData(JsonDeserializer::deserializeStorehouse($current));
        }

        return $model;
    }
}
