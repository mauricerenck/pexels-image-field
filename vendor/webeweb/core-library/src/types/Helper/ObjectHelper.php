<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use WBW\Library\Types\Exception\ObjectArgumentException;

/**
 * Object helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Helper
 */
class ObjectHelper {

    /**
     * Compare two objects.
     *
     * @param mixed|null $a The object A.
     * @param mixed|null $b The object B.
     * @return int|null Returns null when $a end $b are null
     *                          -1 when $a is not null and $b is null
     *                          0 when $a and $b are not null
     *                          1 when $a is null and $b is not null
     */
    public static function compare($a, $b): ?int {

        if (null === $a && null === $b) {
            return null;
        }

        if (null !== $a && null === $b) {
            return -1;
        }

        if (null === $a && null !== $b) {
            return 1;
        }

        return 0;
    }

    /**
     * Determines if a value is an object.
     *
     * @param mixed $value The value.
     * @return void
     * @throws ObjectArgumentException Throws an Object argument exception if the value is not of expected type.
     */
    public static function isObject($value): void {
        if (false === is_object($value)) {
            throw new ObjectArgumentException($value);
        }
    }
}
