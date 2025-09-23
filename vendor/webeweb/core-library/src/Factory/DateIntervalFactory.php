<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Factory;

use DateInterval;
use Throwable;

/**
 * Date interval factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory
 */
class DateIntervalFactory {

    /**
     * Create a date interval.
     *
     * @param int|null $year The year.
     * @param int|null $month The month.
     * @param int|null $day The day.
     * @param int|null $hour The hour.
     * @param int|null $minute The minute.
     * @param int|null $second The second.
     * @return DateInterval|null Returns the interval.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function newDateInterval(int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): ?DateInterval {

        $duration = static::newDuration($year, $month, $day, $hour, $minute, $second);
        if (null === $duration) {
            return null;
        }

        return new DateInterval($duration);
    }

    /**
     * Create a duration.
     *
     * @param int|null $year The year.
     * @param int|null $month The month.
     * @param int|null $day The day.
     * @param int|null $hour The hour.
     * @param int|null $minute The minute.
     * @param int|null $second The second.
     * @return string|null Returns the duration.
     * @return string|null Returns the duration.
     */
    protected static function newDuration(int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): ?string {

        $f = "%d%s";
        $p = [];
        $t = [];

        // P
        if (null !== $year) {
            $p[] = sprintf($f, abs($year), "Y");
        }
        if (null !== $month) {
            $p[] = sprintf($f, abs($month), "M");
        }
        if (null !== $day) {
            $p[] = sprintf($f, abs($day), "D");
        }

        // T
        if (null !== $hour) {
            $t[] = sprintf($f, abs($hour), "H");
        }
        if (null !== $minute) {
            $t[] = sprintf($f, abs($minute), "M");
        }
        if (null !== $second) {
            $t[] = sprintf($f, abs($second), "S");
        }

        $duration = "P" . implode("", $p);
        if (0 < count($t)) {
            $duration .= "T" . implode("", $t);
        }

        return "P" !== $duration ? $duration : null;
    }
}
