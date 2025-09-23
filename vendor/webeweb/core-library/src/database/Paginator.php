<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Database;

/**
 * Paginator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Database
 */
class Paginator {

    /**
     * Count the pages.
     *
     * @param int $linesCount The lines count.
     * @param int $divider The divider.
     * @return int Returns the pages count in case of success, -1 otherwise.
     */
    public static function countPages(int $linesCount, int $divider): int {

        if ($linesCount < 0 || $divider < 0) {
            return -1;
        }

        $pagesCount = intval($linesCount / $divider);
        if (0 < ($linesCount % $divider)) {
            ++$pagesCount;
        }

        return $pagesCount;
    }

    /**
     * Offset and limit.
     *
     * @param int $pagesCount The pages count.
     * @param int $divider The divider.
     * @param int $total The total.
     * @return int[] Returns the offset and limit in case of success, -1 otherwise.
     */
    public static function offsetLimit(int $pagesCount, int $divider, int $total = -1): array {

        if ($pagesCount < 0 || $divider < 0) {
            return [-1, -1];
        }

        $offset = $pagesCount * $divider;
        $limit  = $divider;

        if (0 <= $total && ($total < $offset || $total < ($offset + $limit))) {
            $offset = (static::countPages($total, $divider) - 1) * $divider;
            $limit  = $total - $offset;
        }

        return [$offset, $limit];
    }
}
