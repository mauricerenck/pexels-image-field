<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String MAC address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringMacAddressTrait {

    /**
     * MAC address.
     *
     * @var string|null
     */
    protected $macAddress;

    /**
     * Get the MAC address.
     *
     * @return string|null Returns the MAC address.
     */
    public function getMacAddress(): ?string {
        return $this->macAddress;
    }

    /**
     * Set the MAC address.
     *
     * @param string|null $macAddress The MAC address.
     * @return self Returns this instance.
     */
    public function setMacAddress(?string $macAddress): self {
        $this->macAddress = $macAddress;
        return $this;
    }
}
