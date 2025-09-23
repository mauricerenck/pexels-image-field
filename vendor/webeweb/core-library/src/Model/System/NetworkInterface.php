<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\System;

use JsonSerializable;

/**
 * Network interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\System
 */
interface NetworkInterface extends JsonSerializable {

    /**
     * Get the DNS.
     *
     * @return string|null Returns the DNS.
     */
    public function getDns(): ?string;

    /**
     * Get the gateway.
     *
     * @return string|null Returns the gateway.
     */
    public function getGateway(): ?string;

    /**
     * Get the hostname.
     *
     * @return string|null Returns the hostname.
     */
    public function getHostname(): ?string;
}
