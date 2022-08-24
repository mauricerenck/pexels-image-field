<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Api;

use JsonSerializable;

/**
 * Status interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Api
 */
interface StatusInterface extends JsonSerializable {

    /**
     * Get the code.
     *
     * @return int|null Returns the code.
     */
    public function getCode(): ?int;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getMessage(): ?string;

    /**
     * Get the rule name.
     *
     * @return string|null Returns the rule name.
     */
    public function getRuleName(): ?string;

    /**
     * Set the rule name.
     *
     * @param string|null $ruleName The rule name.
     * @return StatusInterface Returns this status.
     */
    public function setRuleName(?string $ruleName): StatusInterface;
}
