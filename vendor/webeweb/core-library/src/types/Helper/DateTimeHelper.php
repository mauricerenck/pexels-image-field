<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use DateTime;
use InvalidArgumentException;
use Symfony\Component\Yaml\Yaml;
use Throwable;
use WBW\Library\Types\Exception\DateArgumentException;
use WBW\Library\Types\Factory\DateTimeFactory;

/**
 * Date/time helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class DateTimeHelper extends DateTimeMethod {

    /**
     * Date/time format.
     *
     * @var string
     */
    public const DATETIME_FORMAT = "Y-m-d H:i";

    /**
     * Compare two date/times.
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
     * Compare two date/time zones.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return void
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    protected static function compareTimezone(DateTime $a, DateTime $b): void {

        if (false === DateTimeZoneHelper::equals($a->getTimezone(), $b->getTimezone())) {
            throw new InvalidArgumentException("The two date/times does not have the same time zone");
        }
    }

    /**
     * Determine if two date/time are equals.
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
     * @param DateTime|null $date The reference date.
     * @return int Returns the age.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function getAge(DateTime $birthdate, DateTime $date = null): int {

        if (null === $date) {
            $date = new DateTime();
        }

        $diff  = $date->getTimestamp() - $birthdate->getTimestamp();
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
        static::compareTimezone($a, $b);
        return $b->getTimestamp() - $a->getTimestamp();
    }

    /**
     * Get the first and last date of month.
     *
     * @param DateTime $date The date.
     * @return DateTime[] Returns the dates.
     * @deprecated since 8.78.0 use {@see WBW\Library\Types\Factory\DateTimeFactory::firstLastDateMonth()} instead.
     */
    public static function getFirstLastDateMonth(DateTime $date): array {
        return DateTimeFactory::firstLastDateMonth($date);
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
     * @throws Throwable Throws an exception if an error occurs.
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

        DateTimeMethod::subDay($dates[0], $day - $min);
        DateTimeMethod::addDay($dates[1], $max - $day);

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
     * Determine if a date/time is between date/time A and date/time B.
     *
     * @param DateTime $dateTime The date/time.
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isBetween(DateTime $dateTime, DateTime $a, DateTime $b): bool {

        static::compareTimezone($a, $b);

        $c1 = $a->getTimestamp() <= $dateTime->getTimestamp();
        $c2 = $dateTime->getTimestamp() <= $b->getTimestamp();

        return $c1 && $c2;
    }

    /**
     * Determine if a value is a date.
     *
     * @param mixed $value The value.
     * @return void
     * @throws DateArgumentException Throws a date argument exception if the value is not of expected type.
     */
    public static function isDate($value): void {

        if (null === $value || false === strtotime($value)) {
            throw new DateArgumentException($value);
        }
    }

    /**
     * Determine if date/time A is greater than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isGreaterThan(DateTime $a, DateTime $b): bool {
        static::compareTimezone($a, $b);
        return $a->getTimestamp() > $b->getTimestamp();
    }

    /**
     * Determine if date/time A is less than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isLessThan(DateTime $a, DateTime $b): bool {
        static::compareTimezone($a, $b);
        return $a->getTimestamp() < $b->getTimestamp();
    }

    /**
     * Number of business days.
     *
     * @param DateTime $from From date/time (include).
     * @param DateTime $to To date/time (include).
     * @param int $workingDays The working days (between 1 and 7).
     * @param int $workingDay1 The first working day.
     * @return int|null Returns the number of business days.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function numberBusinessDays(DateTime $from, DateTime $to, int $workingDays = 5, int $workingDay1 = 1): ?int {

        $min = min($workingDays, $workingDay1);
        $max = max($workingDays, $workingDay1);
        $out = $workingDay1 + $workingDays; // Last work day of week

        if ($min < 1 || 7 < $max || 8 < $out) {
            return null;
        }

        $dateA = clone $from;
        $dateA->setTime(0, 0);

        $dateB = clone $to;
        $dateB->setTime(0, 0);
        $dateB->modify("+1 day");

        if (false === static::isLessThan($dateA, $dateB)) {
            return null;
        }

        if (7 === $workingDays) {
            return $dateB->diff($dateA)->days;
        }

        $dayNumberA = static::getDayNumber($dateA);
        $dayNumberB = static::getDayNumber($dateB);

        // Two dates in the same week
        if (static::getWeekNumber($dateA) === static::getWeekNumber($dateB)) {
            return min($dayNumberB, $out) - min($dayNumberA, $out);
        }

        $daysA = 0; // Number of days before first full week
        $daysB = 0; // Number of days after last full week

        if (1 !== $dayNumberA) {
            $daysA = min($workingDays, $out - $dayNumberA);
            DateTimeMethod::addDay($dateA, 7 - $dayNumberA + 1); // First monday of full week
        }

        if (7 !== $dayNumberB) {
            $daysB = min($workingDays, $dayNumberB - $workingDay1);
            DateTimeMethod::subDay($dateB, $dayNumberB - 1); // Current monday of week
        }

        $weeks = $dateB->diff($dateA)->days / 7; // Number of weeks
        $daysW = $workingDays * $weeks; // Number of days during the full weeks

        return $daysA + $daysW + max($daysB, 0);
    }

    /**
     * Range from a date/time to another date/time.
     *
     * @param DateTime $from From date/time.
     * @param DateTime $to To date/time.
     * @return DateTime[]|null Returns the date/time range.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     * @throws Throwable Throws an exception if an error occurs.
     * @deprecated since 8.78.0 use {@see WBW\Library\Types\Factory\DateTimeFactory::range()} instead.
     */
    public static function range(DateTime $from, DateTime $to): ?array {
        return DateTimeFactory::range($from, $to);
    }

    /**
     * Convert a date/time.
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
     * Translate a weekday.
     *
     * @param string|null $date The date.
     * @param string $locale The locale.
     * @return string|null Returns the translated weekday.
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
