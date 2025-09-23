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

namespace WBW\Library\Common\Factory\Billing;

use WBW\Library\Common\Model\Billing\TaxableInterface;

/**
 * Taxable factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
 */
class TaxableFactory {

    /**
     * Copy.
     *
     * @param TaxableInterface $src The taxable source.
     * @param TaxableInterface $dst The taxable destination.
     * @return TaxableInterface Returns the taxable destination
     */
    public static function copy(TaxableInterface $src, TaxableInterface $dst): TaxableInterface {

        $dst->setDiscountAmount($src->getDiscountAmount());
        $dst->setDiscountRate($src->getDiscountRate());
        $dst->setExcludingVatPrice($src->getExcludingVatPrice());
        $dst->setIncludingVatPrice($src->getIncludingVatPrice());
        $dst->setVatAmount($src->getVatAmount());
        $dst->setVatRate($src->getVatRate());

        return $dst;
    }
}
