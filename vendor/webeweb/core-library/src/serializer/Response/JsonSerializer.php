<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Serializer\Response;

use WBW\Library\Common\Model\Response\DefaultJsonResponseDataInterface;
use WBW\Library\Common\Model\Response\SimpleJsonResponseDataInterface;
use WBW\Library\Common\Serializer\SerializerKeys;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Serializer\Response
 */
class JsonSerializer {

    /**
     * Serialize a default JSON response data.
     *
     * @param DefaultJsonResponseDataInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeDefaultJsonResponseData(DefaultJsonResponseDataInterface $model): array {

        return [
            SerializerKeys::SUCCESS => $model->getSuccess(),
            SerializerKeys::DATA    => $model->getData(),
            SerializerKeys::MESSAGE => $model->getMessage(),
            SerializerKeys::ERRORS  => $model->getErrors(),
        ];
    }

    /**
     * Serialize a simple JSON response data.
     *
     * @param SimpleJsonResponseDataInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeSimpleJsonResponseData(SimpleJsonResponseDataInterface $model): array {

        return [
            SerializerKeys::NOTIFY => $model->getNotify(),
            SerializerKeys::STATUS => $model->getStatus(),
        ];
    }
}
