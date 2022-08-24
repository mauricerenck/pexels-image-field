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

use WBW\Library\Billing\Model\SalesBillInterface;

/**
 * Sales bill factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Factory
 */
class SalesBillFactory {

    /**
     * Copy.
     *
     * @param SalesBillInterface $src The sales bill source.
     * @param SalesBillInterface $dst The sales bill destination.
     * @return SalesBillInterface Returns the sales bill destination.
     */
    public static function copy(SalesBillInterface $src, SalesBillInterface $dst): SalesBillInterface {

        BillableFactory::copy($src, $dst);

        return $dst;
    }
}
