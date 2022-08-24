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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class ObjectHelper {

    /**
     * Coalesce.
     *
     * @param array $values The values.
     * @return mixed|null Returns the first non-null value.
     */
    public static function coalesce(...$values) {

        foreach ($values as $current) {
            if (null !== $current) {
                return $current;
            }
        }

        return null;
    }

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

    /**
     * Usort callback by string.
     *
     * @param string $method The method.
     * @param callable $callback The callback.
     * @return callable Returns the usort callback.
     */
    protected static function usortCallback(string $method, callable $callback): callable {

        /**
         * Get the value.
         *
         * @param object $object The object.
         * @param string $method The method.
         * @return mixed|null Returns the value.
         */
        $getValue = function($object, string $method) {

            if (true === is_object($object) && true === method_exists($object, $method)) {
                return $object->$method();
            }

            return null;
        };

        return function($object1, $object2) use ($method, $getValue, $callback): int {

            $value1 = $getValue($object1, $method);
            $value2 = $getValue($object2, $method);

            return $callback($value1, $value2);
        };
    }

    /**
     * Usort callback by boolean.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallbackByBoolean(string $method, bool $asc = true): callable {

        $callback = BooleanHelper::usortCallback($asc);

        return static::usortCallback($method, $callback);
    }

    /**
     * Usort callback by float.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallbackByFloat(string $method, bool $asc = true): callable {

        $callback = FloatHelper::usortCallback($asc);

        return static::usortCallback($method, $callback);
    }

    /**
     * Usort callback by integer.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallbackByInteger(string $method, bool $asc = true): callable {

        $callback = IntegerHelper::usortCallback($asc);

        return static::usortCallback($method, $callback);
    }

    /**
     * Usort callback by string.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallbackByString(string $method, bool $asc = true): callable {

        $callback = StringHelper::usortCallback($asc);

        return static::usortCallback($method, $callback);
    }
}
