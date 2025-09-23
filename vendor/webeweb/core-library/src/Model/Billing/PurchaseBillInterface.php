<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Billing;

use DateTime;

/**
 * Purchase bill interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
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
