<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Model;

use DateTime;

/**
 * Purchase bill interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface PurchaseBillInterface extends BillableInterface {

    /**
     * Get the payment date.
     *
     * @return DateTime|null Returns the payment date.
     */
    public function getPaymentDate(): ?DateTime;

    /**
     * Set the payment date.
     *
     * @param DateTime|null $paymentDate The payment date.
     * @return PurchaseBillInterface Returns this purchase bill.
     */
    public function setPaymentDate(?DateTime $paymentDate);
}
