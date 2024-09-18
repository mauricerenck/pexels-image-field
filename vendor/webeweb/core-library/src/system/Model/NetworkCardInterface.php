<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use JsonSerializable;

/**
 * Network card interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface NetworkCardInterface extends JsonSerializable {

    /**
     * Get the duplex.
     *
     * @return string|null Returns the duplex.
     */
    public function getDuplex(): ?string;

    /**
     * Get the IP v4.
     *
     * @return string|null Returns the IP v4.
     */
    public function getIpv4(): ?string;

    /**
     * Get the IP v6.
     *
     * @return string|null Returns the IP v6.
     */
    public function getIpv6(): ?string;

    /**
     * Get the MAC.
     *
     * @return string|null Returns the MAC.
     */
    public function getMac(): ?string;

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string;

    /**
     * Get the speed.
     *
     * @return string|null Returns the speed.
     */
    public function getSpeed(): ?string;

    /**
     * Get the status.
     *
     * @return string|null Returns the status.
     */
    public function getStatus(): ?string;
}
