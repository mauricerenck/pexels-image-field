<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Serializer;

use WBW\Library\Dropdown\Model\DropdownItemInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Serializer
 */
class JsonSerializer {

    /**
     * Serializes an accounting account.
     *
     * @param DropdownItemInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeDropdownItem(DropdownItemInterface $model): array {
        return [
            SerializerKeys::BY_DEFAULT => $model->getByDefault(),
            SerializerKeys::LABEL      => $model->getLabel(),
            SerializerKeys::POSITION   => $model->getPosition(),
        ];
    }
}