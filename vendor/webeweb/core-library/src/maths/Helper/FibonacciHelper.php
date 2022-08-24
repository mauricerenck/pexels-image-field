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

/**
 * Fibonacci helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class FibonacciHelper {

    /**
     * Fibonacci.
     *
     * @param int $n The n.
     * @param bool $r Recursively ?
     * @return int Returns the Fibonacci number.
     */
    protected static function f(int $n, bool $r = false): int {

        $a = abs($n);
        if (0 === $a || 1 === $a) {
            return $a;
        }

        $f1 = static::f($a - 1, true);
        $f2 = static::f($a - 2, true);

        $f = $f1 + $f2;

        if ($n === $a) {
            return $f;
        }

        $e = 0 === $a % 2;

        return false === $r && $e ? -$f : $f;
    }

    /**
     * Fibonacci.
     *
     * @param int $n The n.
     * @return int Returns the Fibonacci number.
     */
    public static function fibonacci(int $n): int {
        return static::f($n);
    }

    /**
     * Sequence.
     *
     * @param int $n The n.
     * @return int[] Returns the sequence.
     */
    public static function sequence(int $n): array {

        $sequence = [];

        $a = abs($n);
        $p = 0 < $n;

        for ($i = 0; $i <= $a; ++$i) {
            $sequence[] = static::f(true === $p ? $i : -$i);
        }

        return $sequence;
    }
}
