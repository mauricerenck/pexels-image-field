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

use WBW\Library\Common\Model\Billing\PurchaseOrderInterface;

/**
 * Purchase order factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
 */
class PurchaseOrderFactory {

    /**
     * Copy.
     *
     * @param PurchaseOrderInterface $src The purchase order source.
     * @param PurchaseOrderInterface $dst The purchase order destination.
     * @return PurchaseOrderInterface Returns the purchase order destination.
     */
    public static function copy(PurchaseOrderInterface $src, PurchaseOrderInterface $dst): PurchaseOrderInterface {

        BillableFactory::copy($src, $dst);

        return $dst;
    }
}
