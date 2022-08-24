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

use WBW\Library\Serializer\Model\XmlSerializable;

/**
 * XML serializer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Helper
 */
class XmlSerializerHelper extends SerializerHelper {

    /**
     * Serializes an array.
     *
     * @param XmlSerializable[] $models The models.
     * @return string Returns the serialized array.
     */
    public static function xmlSerializeArray(array $models): string {

        $output = [];

        foreach ($models as $current) {

            $result = static::xmlSerializeModel($current);
            if (null !== $result) {
                $output[] = $result;
            }
        }

        return implode("", $output);
    }

    /**
     * Serializes a model.
     *
     * @param XmlSerializable|null $model The model.
     * @return string|null Returns the serialized model.
     */
    public static function xmlSerializeModel(?XmlSerializable $model): ?string {

        if (null === $model) {
            return null;
        }

        return $model->xmlSerialize();
    }

    /**
     * Serializes a value.
     *
     * @param string|null $value The value.
     * @return string|null Returns the serialized value.
     */
    public static function xmlSerializeValue(?string $value): ?string {

        if (null === $value) {
            return null;
        }

        return htmlentities($value, ENT_XML1 | ENT_QUOTES, "UTF-8");
    }
}
