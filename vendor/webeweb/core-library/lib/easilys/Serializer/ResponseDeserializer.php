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
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return array<string,mixed> Returns the deserialized response.
     */
    protected static function deserializeResponse(string $rawResponse, AbstractResponse $response): array {

        $response->setRawResponse($rawResponse);

        $data = json_decode($rawResponse, true);
        if (null === $data) {
            return [];
        }

        $response->setSuccess(ArrayHelper::get($data, "success"));
        $response->setErrors(ArrayHelper::get($data, "errors", []));
        $response->setMessage(ArrayHelper::get($data, "message"));

        return $data;
    }
}
