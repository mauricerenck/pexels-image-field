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

use WBW\Library\Billing\Model\TaxableInterface;

/**
 * Taxable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Helper
 */
class TaxableHelper {

    /**
     * Calculates a discount amount.
     *
     * @param TaxableInterface $taxable The taxable.
     * @return float Returns the discount amount.
     */
    public static function calcDiscountAmount(TaxableInterface $taxable): float {

        if (null === $taxable->getExcludingVatPrice()) {
            return 0.0;
        }

        return $taxable->getExcludingVatPrice() * static::getDiscountRatio($taxable->getDiscountRate());
    }

    /**
     * Calculates an excluding VAT price.
     *
     * @param TaxableInterface $taxable The taxable.
     * @return float Returns the excluding VAT price.
     */
    public static function calcExcludingVatPrice(TaxableInterface $taxable): float {

        if (null === $taxable->getIncludingVatPrice()) {
            return 0.0;
        }

        $dRatio = static::getDiscountRatio($taxable->getDiscountRate(), true);
        $tRatio = static::getVatRatio($taxable->getVatRate(), true);

        return $taxable->getIncludingVatPrice() / $tRatio * $dRatio;
    }

    /**
     * Calculates an including VAT price.
     *
     * @param TaxableInterface $taxable The taxable.
     * @return float Returns the including VAT price.
     */
    public static function calcIncludingVatPrice(TaxableInterface $taxable): float {

        if (null === $taxable->getExcludingVatPrice()) {
            return 0.0;
        }

        $dRatio = static::getDiscountRatio($taxable->getDiscountRate(), true);
        $tRatio = static::getVatRatio($taxable->getVatRate(), true);

        return $taxable->getExcludingVatPrice() * $dRatio * $tRatio;
    }

    /**
     * Calculates a VAT amount.
     *
     * @param TaxableInterface $taxable The taxable.
     * @return float Returns the VAT amount.
     */
    public static function calcVatAmount(TaxableInterface $taxable): float {

        if (null === $taxable->getExcludingVatPrice()) {
            return 0.0;
        }

        $dRatio = static::getDiscountRatio($taxable->getDiscountRate(), true);
        $tRatio = static::getVatRatio($taxable->getVatRate());

        return $taxable->getExcludingVatPrice() * $dRatio * $tRatio;
    }

    /**
     * Get a discount ratio.
     *
     * @param float|null $discountRate The discount rate.
     * @param bool $minusOne Minus one ?
     * @return float Returns the VAT ratio.
     */
    protected static function getDiscountRatio(?float $discountRate, bool $minusOne = false): float {

        if (null === $discountRate || 100 < $discountRate || $discountRate < 0) {
            $discountRate = 0.0;
        }

        $ratio = $discountRate / 100;

        return true === $minusOne ? 1 - $ratio : $ratio;
    }

    /**
     * Get a VAT ratio.
     *
     * @param float|null $vatRate The VAT rate.
     * @param bool $plusOne Plus one ?
     * @return float Returns the VAT ratio.
     */
    protected static function getVatRatio(?float $vatRate, bool $plusOne = false): float {

        if (null === $vatRate || 100 < $vatRate || $vatRate < 0) {
            $vatRate = 0.0;
        }

        $ratio = $vatRate / 100;

        return true === $plusOne ? 1 + $ratio : $ratio;
    }
}
