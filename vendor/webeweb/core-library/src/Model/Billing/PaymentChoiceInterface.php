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

use JsonSerializable;

/**
 * Payment choice interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 */
interface PaymentChoiceInterface extends JsonSerializable {

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return PaymentChoiceInterface Returns this payment choice.
     */
    public function setLabel(?string $label);
}
