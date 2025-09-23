<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Factory\Billing;

use WBW\Library\Common\Model\Billing\VatRateInterface;

/**
 * VAT rate factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
 */
class VatRateFactory {

    /**
     * Copy.
     *
     * @param VatRateInterface $src The VAT rate source.
     * @param VatRateInterface $dst The VAT rate destination.
     * @return VatRateInterface Returns the VAT rate destination.
     */
    public static function copy(VatRateInterface $src, VatRateInterface $dst): VatRateInterface {

        $dst->setLabel($src->getLabel());
        $dst->setPurchasesAccountingAccount($src->getPurchasesAccountingAccount());
        $dst->setRate($src->getRate());
        $dst->setSalesAccountingAccount($src->getSalesAccountingAccount());

        return $dst;
    }
}
