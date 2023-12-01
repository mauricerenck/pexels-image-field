<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use DateTime;
use InvalidArgumentException;
use Throwable;
use WBW\Library\Types\Factory\DateIntervalFactory;

/**
 * Date/time method.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class DateTimeMethod {

    /**
     * Add a day interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many days ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addDay(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, $offset);
    }

    /**
     * Add an hour interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many hours ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addHour(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, null, $offset);
    }

    /**
     * Add an interval.
     *
     * @param DateTime $dateTime The date/time.
     * @param int|null $year How many years ? (positive or zero only)
     * @param int|null $month How many months ? (positive or zero only)
     * @param int|null $day How many days ? (positive or zero only)
     * @param int|null $hour How many hours ? (positive or zero only)
     * @param int|null $minute How many minutes ? (positive or zero only)
     * @param int|null $second How many seconds ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if an offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addInterval(DateTime $dateTime, int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): DateTime {
        static::toException($year, $month, $day, $hour, $minute, $second);
        return static::setInterval($dateTime, $year, $month, $day, $hour, $minute, $second);
    }

    /**
     * Add a minute interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many minutes ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addMinute(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, null, null, $offset);
    }

    /**
     * Add a month interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many months ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addMonth(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, $offset);
    }

    /**
     * Add a second interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many seconds ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addSecond(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, null, null, null, $offset);
    }

    /**
     * Add a year interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many years ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function addYear(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, $offset);
    }

    /**
     * Add/sub a day interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many days ?
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modDay(DateTime $dateTime, int $offset): DateTime {
        return static::setInterval($dateTime, null, null, $offset);
    }

    /**
     * Add/sub an hour interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many hours ?
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modHour(DateTime $dateTime, int $offset): DateTime {
        return static::setInterval($dateTime, null, null, null, $offset);
    }

    /**
     * Add/sub an interval.
     *
     * @param DateTime $dateTime The date/time.
     * @param int|null $year How many years ?
     * @param int|null $month How many months ?
     * @param int|null $day How many days ?
     * @param int|null $hour How many hours ?
     * @param int|null $minute How many minutes ?
     * @param int|null $second How many seconds ?
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modInterval(DateTime $dateTime, int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): DateTime {

        $operator = static::toOperator($year, $month, $day, $hour, $minute, $second);
        if (0 === $operator) {
            throw new InvalidArgumentException("All offsets must be of the same sign");
        }

        return static::setInterval($dateTime, $year, $month, $day, $hour, $minute, $second);
    }

    /**
     * Add/sub a minute interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many minutes ?
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modMinute(DateTime $dateTime, int $offset): DateTime {
        return static::setInterval($dateTime, null, null, null, null, $offset);
    }

    /**
     * Add/sub a month interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many months ?
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modMonth(DateTime $dateTime, int $offset): DateTime {
        return static::setInterval($dateTime, null, $offset);
    }

    /**
     * Add/sub a second interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many seconds ?
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modSecond(DateTime $dateTime, int $offset): DateTime {
        return static::setInterval($dateTime, null, null, null, null, null, $offset);
    }

    /**
     * Add/sub a year interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many years ?
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function modYear(DateTime $dateTime, int $offset): DateTime {
        return static::setInterval($dateTime, $offset);
    }

    /**
     * Set an interval.
     *
     * @param DateTime $dateTime The date/time.
     * @param int|null $year The year.
     * @param int|null $month The month.
     * @param int|null $day The day.
     * @param int|null $hour The hour.
     * @param int|null $minute The minute.
     * @param int|null $second The second.
     * @return DateTime Returns the date/time.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected static function setInterval(DateTime $dateTime, int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): DateTime {

        $interval = DateIntervalFactory::newDateInterval($year, $month, $day, $hour, $minute, $second);
        if (null === $interval) {
            return $dateTime;
        }

        $operator = static::toOperator($year, $month, $day, $hour, $minute, $second);
        switch ($operator) {

            case 1:
                return $dateTime->add($interval);

            case -1:
                return $dateTime->sub($interval);
        }

        return $dateTime;
    }

    /**
     * Sub a day interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many days ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subDay(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, -$offset);
    }

    /**
     * Sub an hour interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many hours ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subHour(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, null, -$offset);
    }

    /**
     * Sub an interval.
     *
     * @param DateTime $dateTime The date/time.
     * @param int|null $year How many years ? (positive or zero only)
     * @param int|null $month How many months ? (positive or zero only)
     * @param int|null $day How many days ? (positive or zero only)
     * @param int|null $hour How many hours ? (positive or zero only)
     * @param int|null $minute How many minutes ? (positive or zero only)
     * @param int|null $second How many seconds ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if an offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subInterval(DateTime $dateTime, int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): DateTime {
        static::toException($year, $month, $day, $hour, $minute, $second);
        return static::setInterval($dateTime, -$year, -$month, -$day, -$hour, -$minute, -$second);
    }

    /**
     * Sub a minute interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many minutes ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subMinute(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, null, null, -$offset);
    }

    /**
     * Sub a month interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many months ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subMonth(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, -$offset);
    }

    /**
     * Sub a second interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many seconds ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subSecond(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, null, null, null, null, null, -$offset);
    }

    /**
     * Sub a year interval.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $offset How many years ? (positive or zero only)
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than zero.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function subYear(DateTime $dateTime, int $offset): DateTime {
        static::toException($offset);
        return static::setInterval($dateTime, -$offset);
    }

    /**
     * Convert the offsets into an exception.
     *
     * @param int|null[] $offsets The offsets.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if an offset is less than zero.
     */
    protected static function toException(...$offsets): void {

        if (1 !== static::toOperator(...$offsets)) {
            throw new InvalidArgumentException("Offset must be positive or zero");
        }
    }

    /**
     * Convert the offsets into an operator.
     *
     * @param int|null[] $offsets The offsets.
     * @return int|null Returns a positive for an addition, negative for a subtraction, zero otherwise.
     */
    protected static function toOperator(...$offsets): ?int {

        $values = array_filter($offsets, function(?int $value): bool {
            return null !== $value;
        });

        if (0 === count($values)) {
            return null;
        }

        $min = min($values);
        $max = max($values);

        // All negatives ?
        if ($min < 0 && $max <= 0) {
            return -1;
        }

        // All positives or zero ?
        if (0 <= $min && 0 <= $max) {
            return 1;
        }

        // One negative and one positive
        return 0;
    }
}
