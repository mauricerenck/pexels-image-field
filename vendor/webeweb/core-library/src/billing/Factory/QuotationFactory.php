<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Factory;

use WBW\Library\Billing\Model\QuotationInterface;

/**
 * Quotation factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Factory
 */
class QuotationFactory {

    /**
     * Copy.
     *
     * @param QuotationInterface $src The quotation source.
     * @param QuotationInterface $dst The quotation destination.
     * @return QuotationInterface Returns the quotation destination.
     */
    public static function copy(QuotationInterface $src, QuotationInterface $dst): QuotationInterface {

        BillableFactory::copy($src, $dst);
        $dst->setExpirationDate(null !== $src->getExpirationDate() ? clone $src->getExpirationDate() : null);

        return $dst;
    }
}
