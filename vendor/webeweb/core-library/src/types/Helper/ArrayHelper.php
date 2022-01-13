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

use WBW\Library\Types\Exception\ArrayArgumentException;

/**
 * Array helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Helper
 */
class ArrayHelper {

    /**
     * Get a value.
     *
     * @param array $array The array.
     * @param mixed $key The key.
     * @param mixed $default The default value.
     * @return mixed Returns the value in case of success, $default otherwise.
     */
    public static function get(array $array, $key, $default = null) {
        return true === array_key_exists($key, $array) ? $array[$key] : $default;
    }

    /**
     * Determines if a value is an array.
     *
     * @param mixed $value The value.
     * @return void
     * @throws ArrayArgumentException Throws an Array argument exception if the value is not of expected type.
     */
    public static function isArray($value): void {
        if (false === is_array($value)) {
            throw new ArrayArgumentException($value);
        }
    }

    /**
     * Determines if an array is an object.
     *
     * @param array $array The array.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isObject(array $array): bool {
        return range(0, count($array) - 1) !== array_keys($array);
    }

    /**
     * Set a value.
     *
     * @param array $array The array.
     * @param string $key The key.
     * @param mixed $value The value.
     * @param array $tests The tests.
     * @return void
     */
    public static function set(array &$array, string $key, $value, array $tests = []): void {
        foreach ($tests as $current) {
            if ($current !== $value) {
                continue;
            }
            return;
        }
        $array[$key] = $value;
    }
}
