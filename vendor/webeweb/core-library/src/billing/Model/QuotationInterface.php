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
 * Quotation interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface QuotationInterface extends BillableInterface {

    /**
     * Get the expiration date.
     *
     * @return DateTime|null Returns the expiration date.
     */
    public function getExpirationDate(): ?DateTime;

    /**
     * Set the expiration date.
     *
     * @param DateTime|null $expirationDate The expiration date.
     * @return Quotation Returns this quotation.
     */
    public function setExpirationDate(?DateTime $expirationDate): QuotationInterface;
}
