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

namespace WBW\Library\Easilys\Serializer\General;

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Easilys\Response\General\GetSitesResponse;
use WBW\Library\Easilys\Serializer\JsonDeserializer;
use WBW\Library\Easilys\Serializer\ResponseDeserializer as BaseResponseDeserializer;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Serializer\General
 */
class ResponseDeserializer extends BaseResponseDeserializer {

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return GetSitesResponse Returns the response.
     */
    public static function deserializeGetSitesResponse(string $rawResponse): GetSitesResponse {

        $model = new GetSitesResponse();

        $data = parent::deserializeResponse($rawResponse, $model);

        $objects = ArrayHelper::get($data, "data", []);
        if (true === ArrayHelper::isObject($objects)) {
            $objects = [$objects];
        }

        foreach ($objects as $current) {
            $model->addData(JsonDeserializer::deserializeSite($current));
        }

        return $model;
    }
}
