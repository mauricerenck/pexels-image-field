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

use WBW\Library\Common\Model\Billing\DeliveryNoteInterface;

/**
 * Delivery note factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
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
