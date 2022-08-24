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
 * ROT 47 helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class Rot47Helper {

    /**
     * Alphabet.
     *
     * @return string[] Returns the alphabet.
     */
    protected static function alphabet(): array {

        $alphabet = [];

        for ($i = 33; $i <= 126; ++$i) {
            $alphabet[] = chr($i);
        }

        return $alphabet;
    }

    /**
     * Decodes.
     *
     * @param string|null $str The string.
     * @return string|null Returns the decoded string.
     */
    public static function decode(?string $str): ?string {
        return static::transform($str, true);
    }

    /**
     * Encodes.
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

        $rot = false === $reverse ? 47 : -47;
        $out = false === $reverse ? 94 : -94;

        for ($i = 0; $i < strlen($string); ++$i) {

            $c = substr($string, $i, 1);
            $p = array_search($c, $alphas);

            if (false !== $p) {

                $p += $rot;
                if ($p < 0 || 94 < $p) {
                    $p -= $out;
                }

                // Rotate character
                $c = $alphas[$p];
            }

            $output[] = $c;
        }

        return implode("", $output);
    }
}
