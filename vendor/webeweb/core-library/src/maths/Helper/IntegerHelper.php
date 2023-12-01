<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Helper;

/**
 * Integer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class IntegerHelper {

    /**
     * Factorial.
     *
     * @param int|null $n The number.
     * @return float|null Returns the factorial.
     */
    public static function factorial(?int $n): ?float {

        if (null === $n || $n < 0) {
            return null;
        }

        if (0 === $n) {
            return 1;
        }

        $result = $n;
        while (1 < --$n) {
            $result *= $n;
        }

        return $result;
    }

    /**
     * Summation.
     *
     * @param int|null $n The number.
     * @return float|null Returns the summation.
     */
    public static function summation(?int $n): ?float {

        if (null === $n) {
            return null;
        }

        $q = $n * ($n + 1);

        return $q / 2;
    }
}
