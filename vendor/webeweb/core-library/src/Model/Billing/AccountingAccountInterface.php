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
 * Accounting account interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 */
interface AccountingAccountInterface extends JsonSerializable {

    /**
     * Type "general".
     *
     * @var string
     */
    public const TYPE_GENERAL = "G";

    /**
     * Type "third".
     *
     * @var string
     */
    public const TYPE_THIRD = "T";

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Get the number.
     *
     * @return string|null Returns the number.
     */
    public function getNumber(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return AccountingAccountInterface Returns this accounting account.
     */
    public function setLabel(?string $label);

    /**
     * Set the number.
     *
     * @param string|null $number The number.
     * @return AccountingAccountInterface Returns this accounting account.
     */
    public function setNumber(?string $number);

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AccountingAccountInterface Returns this accounting account.
     */
    public function setType(?string $type);
}
