<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Helper;

use WBW\Library\Billing\Model\BillableInterface;

/**
 * Billable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Helper
 */
class BillableHelper {

    /**
     * Calculates a discount total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the discount total.
     */
    public static function calcDiscountTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getDiscountTotal");
    }

    /**
     * Calculates an excluding VAT total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the excluding VAT total.
     */
    public static function calcExcludingVatTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getExcludingVatTotal");
    }

    /**
     * Calculates an including VAT total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the including VAT total.
     */
    public static function calcIncludingVatTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getIncludingVatTotal");
    }

    /**
     * Calculates a total.
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
     * Calculates a VAT total.
     *
     * @param BillableInterface $billable The billable.
     * @return float Returns the VAT total.
     */
    public static function calcVatTotal(BillableInterface $billable): float {
        return static::calcTotal($billable, "getVatTotal");
    }
}
