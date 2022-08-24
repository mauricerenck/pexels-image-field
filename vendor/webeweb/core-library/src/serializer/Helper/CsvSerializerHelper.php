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

use WBW\Library\Serializer\Model\CsvSerializable;

/**
 * CSV serializer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Helper
 */
class CsvSerializerHelper extends SerializerHelper {

    /**
     * Serializes an array.
     *
     * @param CsvSerializable[] $models The models.
     * @return string Returns the serialized array.
     */
    public static function csvSerializeArray(array $models): string {

        $output = [];

        foreach ($models as $current) {

            $result = static::csvSerializeModel($current);
            if (null !== $result) {
                $output[] = $result;
            }
        }

        return implode("\n", $output);
    }

    /**
     * Serializes a model.
     *
     * @param CsvSerializable|null $model The model.
     * @return string|null Returns the serialized model.
     */
    public static function csvSerializeModel(?CsvSerializable $model): ?string {

        if (null === $model) {
            return null;
        }

        return $model->csvSerialize();
    }
}
