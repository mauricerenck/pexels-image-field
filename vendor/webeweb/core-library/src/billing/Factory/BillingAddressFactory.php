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

use WBW\Library\Billing\Model\BillingAddressInterface;

/**
 * Billing address factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Factory
 */
class BillingAddressFactory {

    /**
     * Copy.
     *
     * @param BillingAddressInterface $src The billing address source.
     * @param BillingAddressInterface $dst The billing address destination.
     * @return BillingAddressInterface Returns the billing address destination.
     */
    public static function copy(BillingAddressInterface $src, BillingAddressInterface $dst): BillingAddressInterface {

        $dst->setBillingAddressAddressee($src->getBillingAddressAddressee());
        $dst->setBillingAddressCountry($src->getBillingAddressCountry());
        $dst->setBillingAddressHouseNumber($src->getBillingAddressHouseNumber());
        $dst->setBillingAddressLocation($src->getBillingAddressLocation());
        $dst->setBillingAddressPostalCode($src->getBillingAddressPostalCode());
        $dst->setBillingAddressStreetName($src->getBillingAddressStreetName());

        return $dst;
    }
}
