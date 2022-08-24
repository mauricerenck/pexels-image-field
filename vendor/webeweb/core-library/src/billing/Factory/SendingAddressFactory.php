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

use WBW\Library\Billing\Model\SendingAddressInterface;

/**
 * Sending address factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Factory
 */
class SendingAddressFactory {

    /**
     * Copy.
     *
     * @param SendingAddressInterface $src The sending address source.
     * @param SendingAddressInterface $dst The sending address destination.
     * @return SendingAddressInterface Returns the sending address destination.
     */
    public static function copy(SendingAddressInterface $src, SendingAddressInterface $dst): SendingAddressInterface {

        $dst->setSendingAddressAddressee($src->getSendingAddressAddressee());
        $dst->setSendingAddressCountry($src->getSendingAddressCountry());
        $dst->setSendingAddressHouseNumber($src->getSendingAddressHouseNumber());
        $dst->setSendingAddressLocation($src->getSendingAddressLocation());
        $dst->setSendingAddressPostalCode($src->getSendingAddressPostalCode());
        $dst->setSendingAddressStreetName($src->getSendingAddressStreetName());

        return $dst;
    }
}
