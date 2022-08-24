<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Planning\Helper;

use WBW\Library\Planning\Model\TimeSlot;
use WBW\Library\Sorter\QuickSort;
use WBW\Library\Types\Helper\DateTimeHelper;

/**
 * Time slot helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Planning\Helper
 */
class TimeSlotHelper {

    /**
     * Determines if a time slot A contains a time slot b.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function contains(TimeSlot $a, TimeSlot $b): bool {
        $c1 = DateTimeHelper::isBetween($b->getStartDate(), $a->getStartDate(), $a->getEndDate());
        $c2 = DateTimeHelper::isBetween($b->getEndDate(), $a->getStartDate(), $a->getEndDate());
        return $c1 && $c2;
    }

    /**
     * Determines if two time slots are equals.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function equals(TimeSlot $a, TimeSlot $b): bool {

        if (false === DateTimeHelper::equals($a->getStartDate(), $b->getStartDate())) {
            return false;
        }

        if (false === DateTimeHelper::equals($a->getEndDate(), $b->getEndDate())) {
            return false;
        }

        if (count($a->getTimeSlots()) !== count($b->getTimeSlots())) {
            return false;
        }

        for ($i = count($a->getTimeSlots()) - 1; 0 <= $i; --$i) {
            if (false === static::equals($a->getTimeSlots()[$i], $b->getTimeSlots()[$i])) {
                return false;
            }
        }

        return true;
    }

    /**
     * Full join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns a time slot in case of success, null otherwise.
     */
    public static function fullJoin(TimeSlot $a, TimeSlot $b): ?TimeSlot {

        if (false === static::hasFullJoin($a, $b)) {
            return null;
        }

        $startDate = DateTimeHelper::getSmaller($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getGreater($a->getEndDate(), $b->getEndDate());

        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Full join two time slots without time slots intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[]|null Returns the time slots in case of success, null otherwise.
     */
    public static function fullJoinWithout(TimeSlot $a, TimeSlot $b): ?array {

        $leftJoins  = static::leftJoinWithout($a, $b);
        $rightJoins = static::rightJoinWithout($a, $b);

        if (null === $leftJoins && null === $rightJoins) {
            return null;
        }
        if (null === $leftJoins) {
            return $rightJoins;
        }
        if (null === $rightJoins) {
            return $leftJoins;
        }

        return static::sort(array_merge($leftJoins, $rightJoins));
    }

    /**
     * Get the duration.
     *
     * @param TimeSlot[] $timeSlots the time slots.
     * @return int Returns the duration.
     */
    public static function getDuration(array $timeSlots): int {

        $duration = 0;

        foreach ($timeSlots as $current) {
            $duration += $current->getDuration();
        }

        return $duration;
    }

    /**
     * Determines if a time slot A has full join with time slot B.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasFullJoin(TimeSlot $a, TimeSlot $b): bool {
        return true === static::hasInnerJoin($a, $b);
    }

    /**
     * Determines if a time slot A has an inner join with time slot B.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasInnerJoin(TimeSlot $a, TimeSlot $b): bool {
        $c1 = DateTimeHelper::isBetween($b->getStartDate(), $a->getStartDate(), $a->getEndDate());
        $c2 = DateTimeHelper::isBetween($b->getEndDate(), $a->getStartDate(), $a->getEndDate());
        $c3 = DateTimeHelper::isBetween($a->getStartDate(), $b->getStartDate(), $b->getEndDate());
        $c4 = DateTimeHelper::isBetween($a->getEndDate(), $b->getStartDate(), $b->getEndDate());
        return $c1 || $c2 || $c3 || $c4;
    }

    /**
     * Inner join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns a time slot in case of success, null otherwise.
     */
    public static function innerJoin(TimeSlot $a, TimeSlot $b): ?TimeSlot {

        if (false === static::hasInnerJoin($a, $b)) {
            return null;
        }

        $startDate = DateTimeHelper::getGreater($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getSmaller($a->getEndDate(), $b->getEndDate());

        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Left join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns the time slot in case of success, null otherwise.
     */
    public static function leftJoin(TimeSlot $a, TimeSlot $b): ?TimeSlot {

        if (false === static::hasInnerJoin($a, $b)) {
            return null;
        }

        return new TimeSlot(clone $a->getStartDate(), clone $a->getEndDate());
    }

    /**
     * Left join two time slots without time slot B intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[]|null Returns the time slots in case of success, null otherwise.
     */
    public static function leftJoinWithout(TimeSlot $a, TimeSlot $b): ?array {

        if (false === static::hasInnerJoin($a, $b) || true === static::contains($b, $a)) {
            return null;
        }

        if (true === static::contains($a, $b)) {
            return static::sort([
                new TimeSlot(clone $a->getStartDate(), clone $b->getStartDate()),
                new TimeSlot(clone $b->getEndDate(), clone $a->getEndDate()),
            ]);
        }

        $startDate = true === DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate()) ? $a->getStartDate() : $b->getEndDate();
        $endDate   = true === DateTimeHelper::isGreaterThan($a->getEndDate(), $b->getEndDate()) ? $a->getEndDate() : $b->getStartDate();

        return [
            new TimeSlot(clone $startDate, clone $endDate),
        ];
    }

    /**
     * Merge.
     *
     * @param TimeSlot[] $timeSlots The time slots.
     * @return TimeSlot[] Returns the merged time slots.
     */
    public static function merge(array $timeSlots): array {

        $number = count($timeSlots);

        if (0 === $number) {
            return [];
        }

        $buffer = static::sort($timeSlots);

        $merged = [$buffer[0]];

        for ($i = 1; $i < $number; ++$i) {

            $j = count($merged) - 1;

            $res = static::fullJoin($merged[$j], $buffer[$i]);
            if (null === $res) {
                $merged[] = $buffer[$i];
            } else {
                $merged[$j] = $res;
            }
        }

        return $merged;
    }

    /**
     * Right join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns the time slot in case of success, null otherwise.
     */
    public static function rightJoin(TimeSlot $a, TimeSlot $b): ?TimeSlot {
        return static::leftJoin($b, $a);
    }

    /**
     * Right join two time slots without time slot B intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[]|null Returns the time slots in case of success, null otherwise.
     */
    public static function rightJoinWithout(TimeSlot $a, TimeSlot $b): ?array {
        return static::leftJoinWithout($b, $a);
    }

    /**
     * Sort time slots.
     *
     * @param TimeSlot[] $timeSlots The time slots.
     * @return TimeSlot[] Returns the sorted time slots.
     */
    public static function sort(array $timeSlots): array {

        $sorter = new QuickSort($timeSlots, new TimeSlotFunctor());
        $sorter->sort();

        return $sorter->getValues();
    }
}
