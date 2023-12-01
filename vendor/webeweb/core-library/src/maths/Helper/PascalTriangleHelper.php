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
 * Pascal's triangle helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class PascalTriangleHelper {

    /**
     * Cell.
     *
     *             y!
     * C(x,y) = --------
     *          x!(y-x)!
     *
     * |----|----|----|----|----|----|----|
     * |    | x0 | x1 | x2 | x3 | x4 | x5 |
     * |----|----|----|----|----|----|----|
     * | y0 |  1 |    |    |    |    |    |
     * |----|----|----|----|----|----|----|
     * | y1 |  1 |  1 |    |    |    |    |
     * |----|----|----|----|----|----|----|
     * | y2 |  1 |  2 |  1 |    |    |    |
     * |----|----|----|----|----|----|----|
     * | y3 |  1 |  3 |  3 |  1 |    |    |
     * |----|----|----|----|----|----|----|
     * | y4 |  1 |  4 |  6 |  4 |  1 |    |
     * |----|----|----|----|----|----|----|
     * | y5 |  1 |  5 | 10 | 10 |  5 |  1 |
     * |----|----|----|----|----|----|----|
     *
     * @param int $y The X.
     * @param int $x The Y.
     * @return float|null Returns the cell.
     */
    public static function cell(int $x, int $y): ?float {

        if ($x < 0 || $y < 0) {
            return null;
        }

        if (0 === $x || $x === $y) {
            return 1;
        }

        $fY = IntegerHelper::factorial($y);
        $fX = IntegerHelper::factorial($x);

        $fYX = IntegerHelper::factorial($y - $x);

        return $fY / ($fX * $fYX);
    }

    /**
     * Row.
     * cell(0,y) + cell(1, y) + ... + cell(y,y)
     *
     * @param int $y The Y.
     * @return float|null Returns the row.
     */
    public static function row(int $y): ?float {

        if ($y < 0) {
            return null;
        }

        $result = 0;

        for ($i = 0; $i <= $y; ++$i) {
            $result += static::cell($i, $y);
        }

        return $result;
    }
}
