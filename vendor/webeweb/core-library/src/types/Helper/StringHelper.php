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

use Transliterator;
use WBW\Library\Types\Exception\StringArgumentException;

/**
 * String helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class StringHelper {

    /**
     * Canonicalize.
     *
     * @param string|null $string The string.
     * @return string|null Returns the canonical string.
     */
    public static function canonicalize(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        $encoding = mb_detect_encoding($string);

        return mb_convert_case($string, MB_CASE_LOWER, false !== $encoding ? $encoding : null);
    }

    /**
     * Create a DOM node.
     *
     * @param string $name The name.
     * @param string|null $value The value.
     * @param array $attributes The attributes.
     * @param bool $shortTag Short tag ?
     * @return string Returns the DOM node.
     */
    public static function domNode(string $name, ?string $value, array $attributes = [], bool $shortTag = false): string {

        $template = "<%name%%attributes%>%text%</%name%>";

        $attr = trim(static::parseArray($attributes));
        if (0 < mb_strlen($attr)) {
            $attr = " " . $attr;
        }

        $text = null !== $value ? trim($value, " ") : "";
        if ("" === $text && true === $shortTag) {
            $template = str_replace(">%text%</%name%>", "/>", $template);
        }

        return str_replace(["%name%", "%attributes%", "%text%"], [trim($name), $attr, $text], $template);
    }

    /**
     * Extract upper case letters.
     *
     * @param string|null $string The string.
     * @param bool $lower Lower case ?
     * @return string|null Returns the extracted upper case letters.
     */
    public static function extractUpperCase(?string $string, bool $lower = false): ?string {

        if (null === $string) {
            return null;
        }

        preg_match_all("/[A-Z]/", $string, $matches);

        $output = implode("", $matches[0]);

        return true === $lower ? strtolower($output) : $output;
    }

    /**
     * File size.
     *
     * @param int|null $size The size.
     * @param int $decimals The decimals.
     * @return string Returns the file size.
     */
    public static function fileSize(?int $size, int $decimals = 2): string {

        if (null === $size || $size < 0 || $decimals < 0) {
            return "";
        }

        $format = "%.{$decimals}f";
        $sizes  = [
            "Tio" => pow(1024, 4),
            "Gio" => pow(1024, 3),
            "Mio" => pow(1024, 2),
            "Kio" => pow(1024, 1),
        ];

        foreach ($sizes as $k => $v) {

            if ($v <= $size) {
                return sprintf("$format $k", $size / $v);
            }
        }

        return "";
    }

    /**
     * Format.
     *
     * @param string|null $string The string.
     * @param string|null $format The format.
     * @return string|null Returns the formatted string.
     */
    public static function format(?string $string, ?string $format): ?string {

        if (null === $string || null === $format) {
            return null;
        }

        $fmt = str_replace("_", "%s", $format);
        $str = str_split($string);

        return vsprintf($fmt, $str);
    }

    /**
     * Determine if a value is a string.
     *
     * @param mixed $value The value.
     * @return void
     * @throws StringArgumentException Throws a string argument exception if the value is not of expected type.
     */
    public static function isString($value): void {

        if (false === is_string($value)) {
            throw new StringArgumentException($value);
        }
    }

    /**
     * More than.
     *
     * @param float|null $value The value.
     * @return string|null Returns the more than.
     */
    public static function moreThan(?float $value): ?string {

        if (null === $value) {
            return null;
        }

        $output = sprintf("%d", $value);
        if ($value < 10) {
            return $output;
        }

        return preg_replace("/\d$/", "0", $output);
    }

    /**
     * Parse an array.
     *
     * @param array $values The array.
     * @return string Returns the array converted into key="value".
     */
    public static function parseArray(array $values): string {

        $output = [];

        foreach ($values as $key => $value) {

            if (null === $value) {
                continue;
            }

            if (true === is_array($value)) {
                $buffer = trim(implode(" ", $value));
            } else {
                $buffer = trim($value);
            }

            if ("" !== $buffer) {
                $output[] = $key . '="' . preg_replace("/\s+/", " ", $buffer) . '"';
            }
        }

        return implode(" ", $output);
    }

    /**
     * Parse a boolean.
     *
     * @param bool|null $value The boolean value.
     * @return string Returns "true" in case of success, "false" otherwise.
     */
    public static function parseBoolean(?bool $value): string {
        return true === $value ? "true" : "false";
    }

    /**
     * Remove accents.
     *
     * @param string|null $string The string.
     * @return string|null Returns the string without accents.
     */
    public static function removeAccents(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        return Transliterator::create("NFD; [:Nonspacing Mark:] Remove; NFC;")->transliterate($string);
    }

    /**
     * Convert a string into human readable.
     *
     * @param string|null $string The string.
     * @return string|null Returns the human readable string.
     */
    public static function toHumanReadable(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        $callback = function($m): string {
            $join = implode("", [" ", $m[1], $m[2]]);
            return strtolower($join);
        };

        $pattern = "/(([a-z])([A-Z]))|(([A-Z])([A-Z][a-z]))/";
        $replace = "$2$5%s$3$6";

        $explode = preg_replace($pattern, sprintf($replace, " "), $string);

        return preg_replace_callback("/ ([A-Z])([a-z])/", $callback, $explode);
    }

    /**
     * Convert a string into lower camel case.
     *
     * @param string|null $string The string.
     * @return string|null Returns the lower camel case string.
     */
    public static function toLowerCamelCase(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        $callback = function($m): string {
            return count($m) < 5 ? strtolower($m[2]) . $m[3] : strtolower($m[5]) . $m[6];
        };

        return preg_replace_callback("/(([A-Z]+)([A-Z][a-z].+))|(([A-Z])([a-z].+))/", $callback, $string);
    }

    /**
     * Convert a string into snake case.
     *
     * @param string|null $string The string.
     * @param string $sep The separator.
     * @return string|null Returns the snake case string.
     */
    public static function toSnakeCase(?string $string, string $sep = "_"): ?string {

        if (null === $string) {
            return null;
        }

        $output = static::toHumanReadable($string);
        $join   = str_replace(" ", $sep, $output);

        return strtolower($join);
    }

    /**
     * Convert a string into upper camel case.
     *
     * @param string|null $string The string.
     * @return string|null Returns the upper camel case string.
     */
    public static function toUpperCamelCase(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        $output = [
            strtoupper(substr($string, 0, 1)),
            substr($string, 1),
        ];

        return implode("", $output);
    }

    /**
     * Upper case first.
     *
     * @param string|null $string The string.
     * @return string|null Returns the converted string.
     */
    public static function ucfirst(?string $string): ?string {
        return ucfirst(strtolower($string));
    }

    /**
     * Upper case words.
     *
     * @param string|null $string The string.
     * @param string $separators The separators.
     * @return string|null Returns the converted string.
     */
    public static function ucwords(?string $string, string $separators = " \t\r\n\f\v-"): ?string {
        return ucwords(strtolower($string), $separators);
    }

    /**
     * Usort callback.
     *
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallback(bool $asc = true): callable {

        return function(?string $string1, ?string $string2) use ($asc): int {

            $result = strcmp($string1, $string2);

            return true === $asc ? $result : -$result;
        };
    }

    /**
     * Word wrap.
     *
     * @param string|null $string The string.
     * @param int $length The length.
     * @param int $precision The precision.
     * @param string $separator The separator.
     * @return string|null Returns the word wrapped string.
     */
    public static function wordWrap(?string $string, int $length = -1, int $precision = 3, string $separator = "\n"): ?string {

        if (null === $string) {
            return null;
        }

        $needle = " ";
        $words  = explode($needle, $string);
        $count  = count($words);

        if (-1 === $length || mb_strlen($string) < $length || 0 === $count) {
            return $string;
        }

        $output = [
            $words[0],
        ];

        for ($i = 1; $i < $count; ++$i) {

            $word = $words[$i];
            $last = count($output) - 1;

            $buffer = implode($needle, array_merge([$output[$last]], [$word]));
            if (mb_strlen($buffer) < $length + $precision) {
                $output[$last] .= "$needle$word";
            } else {
                $output[] = $word;
            }
        }

        return implode($separator, $output);
    }
}
