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

use DateInterval;
use DateTime;
use Exception;
use InvalidArgumentException;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\Types\Exception\DateArgumentException;

/**
 * Date/time helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class DateTimeHelper {

    /**
     * Date/time format.
     *
     * @var string
     */
    const DATETIME_FORMAT = "Y-m-d H:i";

    /**
     * Add day.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $number The number.
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function addDay(DateTime $dateTime, int $number): DateTime {
        static::isPositiveOrZero($number);
        return static::applyDuration($dateTime, "P", $number, "D");
    }

    /**
     * Add month.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $number The number.
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function addMonth(DateTime $dateTime, int $number): DateTime {
        static::isPositiveOrZero($number);
        return static::applyDuration($dateTime, "P", $number, "M");
    }

    /**
     * Add year.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $number The number.
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function addYear(DateTime $dateTime, int $number): DateTime {
        static::isPositiveOrZero($number);
        return static::applyDuration($dateTime, "P", $number, "Y");
    }

    /**
     * Apply a duration.
     *
     * @param DateTime $dateTime The date/time.
     * @param string $prefix The duration prefix.
     * @param int $number The duration number.
     * @param string $unit The duration number.
     * @return DateTime Returns the date/time.
     * @throws Exception Throws an exception if an error occurs.
     */
    protected static function applyDuration(DateTime $dateTime, string $prefix, int $number, string $unit): DateTime {

        $duration = sprintf("$prefix%d$unit", abs($number));
        $interval = new DateInterval($duration);

        if ($number < 0) {
            return $dateTime->sub($interval);
        }

        return $dateTime->add($interval);
    }

    /**
     * Compares two date/times.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return int Returns
     *  -1: if the date/time A is lesser than date/time B
     *   0: if the date/time are equals.
     *   1: if the date/time A is greater than date/time B
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function compare(DateTime $a, DateTime $b): int {

        if (true === static::isLessThan($a, $b)) {
            return -1;
        }

        if (true === static::isGreaterThan($a, $b)) {
            return 1;
        }

        return 0;
    }

    /**
     * Compares two date/time zones.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return void
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    protected static function compareZone(DateTime $a, DateTime $b): void {
        if (false === DateTimeZoneHelper::equals($a->getTimezone(), $b->getTimezone())) {
            throw new InvalidArgumentException("The two date/times does not have the same time zone");
        }
    }

    /**
     * Determines if two date/time are equals.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case o success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function equals(DateTime $a, DateTime $b): bool {
        return 0 === static::compare($a, $b);
    }

    /**
     * Get an age.
     *
     * @param DateTime $birthdate The birthdate.
     * @param DateTime|null $refDate The reference date.
     * @return int Returns the age.
     * @throws Exception Throws an exception if an errors occurs.
     */
    public static function getAge(DateTime $birthdate, DateTime $refDate = null): int {

        // Use the current date/time.
        if (null === $refDate) {
            $refDate = new DateTime();
        }

        $diff  = $refDate->getTimestamp() - $birthdate->getTimestamp();
        $years = new DateTime("@$diff");

        return intval($years->format("Y")) - 1970;
    }

    /**
     * Get a day number.
     *
     * @param DateTime $dateTime The date/time.
     * @param bool $iso8601 ISO 8601 ?
     * @return int Returns the day number between 1 and 7 according to ISO 8601, between 0 and 6 otherwise.
     */
    public static function getDayNumber(DateTime $dateTime, bool $iso8601 = true): int {
        $format = true === $iso8601 ? "N" : "w";
        return intval($dateTime->format($format));
    }

    /**
     * Get a duration.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return int Returns the duration.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getDuration(DateTime $a, DateTime $b): int {
        static::compareZone($a, $b);
        return $b->getTimestamp() - $a->getTimestamp();
    }

    /**
     * Get the greater date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime Returns the greater date/time.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getGreater(DateTime $a, DateTime $b): DateTime {
        return 0 <= static::compare($a, $b) ? $a : $b;
    }

    /**
     * Get a month number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the month number.
     */
    public static function getMonthNumber(DateTime $dateTime): int {
        return intval($dateTime->format("n"));
    }

    /**
     * Get the smaller date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime Returns the smaller date/time.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getSmaller(DateTime $a, DateTime $b): DateTime {
        return 0 <= static::compare($a, $b) ? $b : $a;
    }

    /**
     * Get a week number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the week number.
     */
    public static function getWeekNumber(DateTime $dateTime): int {
        return intval($dateTime->format("W"));
    }

    /**
     * Get a week number to apply with a planning.
     * <p>
     * For example:
     * We have a planning established over 5 weeks.
     * We start the planning with the week number 1.
     * If the current date is 2018-01-01 and the start date is 2018-01-01, the week number is 1
     * If the current date is 2018-01-08 and the start date is 2018-01-01, the week number is 2
     * etc.
     * We start the planning with the week number 3.
     * If the current date is 2018-01-01 and the start date is 2018-01-01, the week number is 3
     * If the current date is 2018-01-08 and the start date is 2018-01-01, the week number is 4
     * etc.
     * </p>
     *
     * @param DateTime $date The date.
     * @param DateTime $startDate The start date.
     * @param int $weekCount The week count.
     * @param int $weekOffset The week offset.
     * @return int Returns the week number to apply between 1 and $weekCount.
     */
    public static function getWeekNumberToApply(DateTime $date, DateTime $startDate, int $weekCount, int $weekOffset = 1): int {

        if ($weekCount <= 0 || $weekOffset <= 0 || $weekCount < $weekOffset) {
            return -1;
        }

        $result = intval($date->diff($startDate)->d / 7);
        $result %= $weekCount;
        $result += $weekOffset;
        if ($weekCount < $result) {
            $result -= $weekCount;
        }

        return $result;
    }

    /**
     * Get a week period.
     *
     * @param DateTime|null $date The date.
     * @param bool $iso8601 ISO 8601 ?
     * @return DateTime[] Returns the week period.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function getWeekPeriod(?DateTime $date, bool $iso8601 = true): array {

        if (null === $date) {
            $date = new DateTime();
        }

        $dates = [
            clone $date,
            clone $date,
        ];

        $day = static::getDayNumber($date, $iso8601);
        $min = true === $iso8601 ? 1 : 0;
        $max = true === $iso8601 ? 7 : 6;

        static::subDay($dates[0], $day - $min);
        static::addDay($dates[1], $max - $day);

        return $dates;
    }

    /**
     * Get a year number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the year number.
     */
    public static function getYearNumber(DateTime $dateTime): int {
        return intval($dateTime->format("Y"));
    }

    /**
     * Determines if a date/time is between date/time A and date/time B.
     *
     * @param DateTime $dateTime The date/time.
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isBetween(DateTime $dateTime, DateTime $a, DateTime $b): bool {

        static::compareZone($a, $b);

        $c1 = $a->getTimestamp() <= $dateTime->getTimestamp();
        $c2 = $dateTime->getTimestamp() <= $b->getTimestamp();

        return $c1 && $c2;
    }

    /**
     * Determines if a value is a date.
     *
     * @param mixed $value The value.
     * @return void
     * @throws DateArgumentException Throws a Date argument exception if the value is not of expected type.
     */
    public static function isDate($value): void {
        if (false === strtotime($value)) {
            throw new DateArgumentException($value);
        }
    }

    /**
     * Determines if date/time A is greater than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isGreaterThan(DateTime $a, DateTime $b): bool {
        static::compareZone($a, $b);
        return $a->getTimestamp() > $b->getTimestamp();
    }

    /**
     * Determines if date/time A is less than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isLessThan(DateTime $a, DateTime $b): bool {
        static::compareZone($a, $b);
        return $a->getTimestamp() < $b->getTimestamp();
    }

    /**
     * Determines if an offset is positive or zero.
     *
     * @param int $offset The offset.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     */
    protected static function isPositiveOrZero(int $offset): void {
        if ($offset < 0) {
            throw new InvalidArgumentException("Number must be positive or equal to zero");
        }
    }

    /**
     * Range from $a to $b.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime[]|null Returns the date/time range.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function range(DateTime $a, DateTime $b): ?array {

        if (false === static::isLessThan($a, $b)) {
            return null;
        }

        $range = [];

        $current = clone $a;

        while (false === static::isGreaterThan($current, $b)) {

            $range[] = clone $current;

            static::addDay($current, 1);
        }

        return $range;
    }

    /**
     * Sub day.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $number The number.
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function subDay(DateTime $dateTime, int $number): DateTime {
        static::isPositiveOrZero($number);
        return static::applyDuration($dateTime, "P", -$number, "D");
    }

    /**
     * Sub month.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $number The number.
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function subMonth(DateTime $dateTime, int $number): DateTime {
        static::isPositiveOrZero($number);
        return static::applyDuration($dateTime, "P", -$number, "M");
    }

    /**
     * Sub year.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param int $number The number.
     * @return DateTime Returns the date/time.
     * @throws InvalidArgumentException Throws an invalid argument exception if number is less than zero.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function subYear(DateTime $dateTime, int $number): DateTime {
        static::isPositiveOrZero($number);
        return static::applyDuration($dateTime, "P", -$number, "Y");
    }

    /**
     * Converts a date/time.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param string $format The format.
     * @return string|null Returns the converted date/time.
     */
    public static function toString(?DateTime $dateTime, string $format = self::DATETIME_FORMAT): ?string {

        if (null === $dateTime) {
            return null;
        }

        return $dateTime->format($format);
    }

    /**
     * Translates a weekday part.
     *
     * @param string|null $date The date.
     * @param string $locale The locale.
     * @return string|null Returns the translated weekday part.
     */
    public static function translateWeekday(?string $date, string $locale = "en"): ?string {

        if (null === $date) {
            return null;
        }

        $messages = __DIR__ . "/../Resources/translations/DateTimeHelper.%locale%.yml";
        $filename = str_replace("%locale%", $locale, $messages);

        if (false === file_exists($filename)) {
            $filename = str_replace("%locale%", "en", $messages);
        }

        $translations = Yaml::parse(file_get_contents(realpath($filename)));

        return str_ireplace(array_keys($translations["weekdays"]), array_values($translations["weekdays"]), $date);
    }

    /**
     * Usort callback.
     *
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallback(bool $asc = true): callable {

        return function(?DateTime $dateTime1, ?DateTime $dateTime2) use ($asc): int {

            $result = 0;

            if ($dateTime1 < $dateTime2) {
                $result = -1;
            }
            if ($dateTime1 === $dateTime2) {
                $result = 0;
            }
            if ($dateTime1 > $dateTime2) {
                $result = 1;
            }

            return true === $asc ? $result : -$result;
        };
    }
}
