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

use WBW\Library\Billing\Model\BillableDetailInterface;

/**
 * Billable detail helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Helper
 */
class BillableDetailHelper extends TaxableHelper {

    /**
     * Calculates a discount total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the discount total.
     */
    public static function calcDiscountTotal(BillableDetailInterface $billableDetail): float {
        return TaxableHelper::calcDiscountAmount($billableDetail) * static::getQuantity($billableDetail);
    }

    /**
     * Calculates an excluding VAT total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the excluding VAT total.
     */
    public static function calcExcludingVatTotal(BillableDetailInterface $billableDetail): float {

        if (null === $billableDetail->getExcludingVatPrice()) {
            return 0.0;
        }

        $dRatio = static::getDiscountRatio($billableDetail->getDiscountRate(), true);

        return $billableDetail->getExcludingVatPrice() * $dRatio * static::getQuantity($billableDetail);
    }

    /**
     * Calculates an including VAT total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the including VAT total.
     */
    public static function calcIncludingVatTotal(BillableDetailInterface $billableDetail): float {
        return TaxableHelper::calcIncludingVatPrice($billableDetail) * static::getQuantity($billableDetail);
    }

    /**
     * Calculates a VAT total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the VAT total.
     */
    public static function calcVatTotal(BillableDetailInterface $billableDetail): float {
        return TaxableHelper::calcVatAmount($billableDetail) * static::getQuantity($billableDetail);
    }

    /**
     * Get the quantity.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the quantity.
     */
    protected static function getQuantity(BillableDetailInterface $billableDetail): float {

        if (null === $billableDetail->getQuantity()) {
            return 0.0;
        }

        return $billableDetail->getQuantity();
    }
}
