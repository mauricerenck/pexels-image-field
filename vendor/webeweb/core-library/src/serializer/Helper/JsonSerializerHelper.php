<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Helper;

use JsonSerializable;

/**
 * JSON serializer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Helper
 */
class JsonSerializerHelper {

    /**
     * Serializes an array.
     *
     * @param JsonSerializable[] $models The models.
     * @return array Returns the serialized array.
     */
    public static function jsonSerializeArray(array $models): array {

        $output = [];

        foreach ($models as $current) {

            $array = static::jsonSerializeModel($current);
            if (null !== $array) {
                $output[] = $array;
            }
        }

        return $output;
    }

    /**
     * Serializes a model.
     *
     * @param JsonSerializable|null $model The model.
     * @return array|null Returns the serialized model.
     */
    public static function jsonSerializeModel(?JsonSerializable $model): ?array {

        if (null === $model) {
            return null;
        }

        return $model->jsonSerialize();
    }
}
