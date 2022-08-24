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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class ArrayHelper {

    /**
     * Filter by.
     *
     * @param array $array The array.
     * @param callable[] $filters The filters.
     * @return array Returns the filtered array.
     */
    public static function filterBy(array $array, array $filters): array {

        $matches = [];

        foreach ($array as $current) {

            $include = true;

            foreach ($filters as $callback) {

                if (true === is_callable($callback) && false === $callback($current)) {

                    $include = false;
                    break;
                }
            }

            if (true === $include) {
                $matches[] = $current;
            }
        }

        return $matches;
    }

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
     * Insert a value.
     *
     * @param array $array The array.
     * @param int $offset The offset.
     * @param mixed $value The value.
     * @return array Returns the array.
     */
    public static function insert(array $array, int $offset, $value): array {

        if ($offset <= 0) {
            return array_merge([$value], $array);
        }

        if (count($array) <= $offset) {
            return array_merge($array, [$value]);
        }

        $slice1 = array_slice($array, 0, $offset);
        $slice2 = array_slice($array, $offset);

        return array_merge($slice1, [$value], $slice2);
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

            if ($current === $value) {
                return;
            }
        }

        $array[$key] = $value;
    }
}
