<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Helper\Billing;

use WBW\Library\Common\Model\Billing\BillableInterface;

/**
 * Billable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Helper\Billing
 */
class BillableHelper {

    /**
     * Calculate a discount total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the discount total.
     */
    public static function calcDiscountTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getDiscountTotal");
    }

    /**
     * Calculate an excluding VAT total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the excluding VAT total.
     */
    public static function calcExcludingVatTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getExcludingVatTotal");
    }

    /**
     * Calculate an including VAT total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the including VAT total.
     */
    public static function calcIncludingVatTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getIncludingVatTotal");
    }

    /**
     * Calculate a total.
     *
     * @param BillableInterface $billable The billable.
     * @param string $method The method.
     * @return float Returns the total.
     */
    protected static function calcTotal(BillableInterface $billable, string $method): float {

        $result = 0.0;

        foreach ($billable->getDetails() as $current) {

            if (true === method_exists($current, $method)) {

                $current->onSubmit();
                $result += $current->$method();
            }
        }

        return $result;
    }

    /**
     * Calculate a VAT total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the VAT total.
     */
    public static function calcVatTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getVatTotal");
    }

    /**
     * Determine if a billable has details.
     *
     * @param BillableInterface $billable The billable.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasDetails(BillableInterface $billable): bool {
        return 0 < count($billable->getDetails());
    }
}
