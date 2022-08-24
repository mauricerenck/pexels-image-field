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

use WBW\Library\Billing\Model\DeliveryNoteInterface;

/**
 * Delivery note factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Factory
 */
class DeliveryNoteFactory {

    /**
     * Copy.
     *
     * @param DeliveryNoteInterface $src The delivery note source.
     * @param DeliveryNoteInterface $dst The delivery note destination.
     * @return DeliveryNoteInterface Returns the delivery note destination.
     */
    public static function copy(DeliveryNoteInterface $src, DeliveryNoteInterface $dst): DeliveryNoteInterface {

        BillableFactory::copy($src, $dst);

        return $dst;
    }
}
