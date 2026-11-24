<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Serializer;

/**
 * XML serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Helper
 */
class XmlSerializer extends AbstractSerializer {

    /**
     * Serialize an array.
     *
     * @param array<XmlSerializable|null> $models The models.
     * @return string Returns the serialized array.
     */
    public static function serializeArray(array $models): string {

        $output = [];

        foreach ($models as $current) {

            $result = static::serializeModel($current);
            if (null !== $result) {
                $output[] = $result;
            }
        }

        return implode("", $output);
    }

    /**
     * Serialize a model.
     *
     * @param XmlSerializable|null $model The model.
     * @return string|null Returns the serialized model.
     */
    public static function serializeModel(?XmlSerializable $model): ?string {

        if (null === $model) {
            return null;
        }

        return $model->xmlSerialize();
    }

    /**
     * Serialize a value.
     *
     * @param string|null $value The value.
     * @return string|null Returns the serialized value.
     */
    public static function serializeValue(?string $value): ?string {

        if (null === $value) {
            return null;
        }

        return htmlentities($value, ENT_XML1 | ENT_QUOTES, "UTF-8");
    }
}
