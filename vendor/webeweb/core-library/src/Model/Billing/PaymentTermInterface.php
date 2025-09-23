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
 * Payment term interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 */
interface PaymentTermInterface extends JsonSerializable {

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return PaymentTermInterface Returns this payment term.
     */
    public function setCode(?string $code);

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return PaymentTermInterface Returns this payment term.
     */
    public function setLabel(?string $label);
}
