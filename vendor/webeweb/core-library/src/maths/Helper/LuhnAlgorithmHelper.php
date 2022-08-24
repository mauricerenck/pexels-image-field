<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Helper;

/**
 * Luhn algorithm helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class LuhnAlgorithmHelper {

    /**
     * Check.
     *
     * @param string $str The string.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function check(string $str): bool {

        $sum    = 0;
        $length = strlen($str);
        $parity = $length % 2;

        $sum += substr($str, $length - 1);

        for ($i = $length - 2; 0 <= $i; --$i) {

            $digit = intval(substr($str, $i, 1));

            if ($parity === $i % 2) {
                $digit *= 2;
            }
            if (9 < $digit) {
                $digit -= 9;
            }

            $sum += $digit;
        }

        return 0 === $sum % 10;
    }
}
