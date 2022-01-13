<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Factory;

use WBW\Library\Bill\Model\PurchaseOrderInterface;

/**
 * Purchase order factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Factory
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