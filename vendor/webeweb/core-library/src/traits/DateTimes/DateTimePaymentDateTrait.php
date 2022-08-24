<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\DateTimes;

use DateTime;

/**
 * Date/time payment date trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimePaymentDateTrait {

    /**
     * Last update.
     *
     * @var DateTime|null
     */
    protected $paymentDate;

    /**
     * Get the last update.
     *
     * @return DateTime|null Returns the last update.
     */
    public function getPaymentDate(): ?DateTime {
        return $this->paymentDate;
    }

    /**
     * Set the last update.
     *
     * @param DateTime|null $paymentDate The last update.
     * @return self Returns this instance.
     */
    public function setPaymentDate(?DateTime $paymentDate): self {
        $this->paymentDate = $paymentDate;
        return $this;
    }
}
