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

use WBW\Library\Billing\Model\DeliveryAddressInterface;

/**
 * Delivery address factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Factory
 */
class DeliveryAddressFactory {

    /**
     * Copy.
     *
     * @param DeliveryAddressInterface $src The delivery address source.
     * @param DeliveryAddressInterface $dst The delivery address destination.
     * @return DeliveryAddressInterface Returns the delivery address destination.
     */
    public static function copy(DeliveryAddressInterface $src, DeliveryAddressInterface $dst): DeliveryAddressInterface {

        $dst->setDeliveryAddressAddressee($src->getDeliveryAddressAddressee());
        $dst->setDeliveryAddressCountry($src->getDeliveryAddressCountry());
        $dst->setDeliveryAddressHouseNumber($src->getDeliveryAddressHouseNumber());
        $dst->setDeliveryAddressLocation($src->getDeliveryAddressLocation());
        $dst->setDeliveryAddressPostalCode($src->getDeliveryAddressPostalCode());
        $dst->setDeliveryAddressStreetName($src->getDeliveryAddressStreetName());

        return $dst;
    }
}
