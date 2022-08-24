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
 * String IP address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringIpAddressTrait {

    /**
     * IP address.
     *
     * @var string|null
     */
    protected $ipAddress;

    /**
     * Get the IP address.
     *
     * @return string|null Returns the IP address.
     */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Set the IP address.
     *
     * @param string|null $ipAddress The IP address.
     * @return self Returns this instance.
     */
    public function setIpAddress(?string $ipAddress): self {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
