<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String hostname trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringHostnameTrait {

    /**
     * Hostname.
     *
     * @var string|null
     */
    protected $hostname;

    /**
     * Get the hostname.
     *
     * @return string|null Returns the hostname.
     */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * Set the hostname.
     *
     * @param string|null $hostname The hostname.
     * @return self Returns this instance.
     */
    public function setHostname(?string $hostname): self {
        $this->hostname = $hostname;
        return $this;
    }
}
