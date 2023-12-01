<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Helper;

use WBW\Library\Types\Helper\StringHelper;

/**
 * ROT 13 Helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class Rot13Helper {

    /**
     * Alphabet.
     *
     * @return string[] Returns the alphabet.
     */
    protected static function alphabet(): array {

        return [
            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
            "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        ];
    }

    /**
     * Decode.
     *
     * @param string|null $str The string.
     * @return string|null Returns the decoded string.
     */
    public static function decode(?string $str): ?string {
        return static::transform($str, true);
    }

    /**
     * Encode.
     *
     * @param string|null $str The string.
     * @return string|null Returns the encoded string.
     */
    public static function encode(?string $str): ?string {
        return static::transform($str);
    }

    /**
     * Transform.
     *
     * @param string|null $str The string.
     * @param bool $reverse Reverse ?
     * @return string|null Returns the transformed string.
     */
    protected static function transform(?string $str, bool $reverse = false): ?string {

        if (null === $str) {
            return null;
        }

        $output = [];

        $string = StringHelper::removeAccents($str);
        $alphas = static::alphabet();

        $rot = false === $reverse ? 13 : -13;
        $out = false === $reverse ? 26 : -26;

        for ($i = 0; $i < strlen($string); ++$i) {

            $c = substr($string, $i, 1);
            $p = array_search(strtoupper($c), $alphas);

            if (false !== $p) {

                // Original character
                $o = $alphas[$p];

                $p += $rot;
                if ($p < 0 || 26 < $p) {
                    $p -= $out;
                }

                // Rotate character
                $t = $alphas[$p];

                $c = $o === $c ? $t : strtolower($t);
            }

            $output[] = $c;
        }

        return implode("", $output);
    }
}
