<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use WBW\Library\System\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringNameTrait;

/**
 * Network card.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class NetworkCard implements NetworkCardInterface {

    use StringNameTrait;

    /**
     * Duplex.
     *
     * @var string|null
     */
    protected $duplex;

    /**
     * IP v4.
     *
     * @var string|null
     */
    protected $ipv4;

    /**
     * IP v6.
     *
     * @var string|null
     */
    protected $ipv6;

    /**
     * MAC.
     *
     * @var string|null
     */
    protected $mac;

    /**
     * Speed.
     *
     * @var string|null
     */
    protected $speed;

    /**
     * Status.
     *
     * @var string|null
     */
    protected $status;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplex(): ?string {
        return $this->duplex;
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4(): ?string {
        return $this->ipv4;
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6(): ?string {
        return $this->ipv6;
    }

    /**
     * {@inheritDoc}
     */
    public function getMac(): ?string {
        return $this->mac;
    }

    /**
     * {@inheritDoc}
     */
    public function getSpeed(): ?string {
        return $this->speed;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeNetworkCard($this);
    }

    /**
     * Set the duplex.
     *
     * @param string|null $duplex The duplex.
     * @return NetworkCardInterface Returns this network card.
     */
    public function setDuplex(?string $duplex): NetworkCardInterface {
        $this->duplex = $duplex;
        return $this;
    }

    /**
     * Set the IP v4.
     *
     * @param string|null $ipv4 The IP v4.
     * @return NetworkCardInterface Returns this network card.
     */
    public function setIpv4(?string $ipv4): NetworkCardInterface {
        $this->ipv4 = $ipv4;
        return $this;
    }

    /**
     * Set the IP v6.
     *
     * @param string|null $ipv6 The IP v6.
     * @return NetworkCardInterface Returns this network card.
     */
    public function setIpv6(?string $ipv6): NetworkCardInterface {
        $this->ipv6 = $ipv6;
        return $this;
    }

    /**
     * Set the MAC.
     *
     * @param string|null $mac The MAC.
     * @return NetworkCardInterface Returns this network card.
     */
    public function setMac(?string $mac): NetworkCardInterface {
        $this->mac = $mac;
        return $this;
    }

    /**
     * Set the speed.
     *
     * @param string|null $speed The speed.
     * @return NetworkCardInterface Returns this network card.
     */
    public function setSpeed(?string $speed): NetworkCardInterface {
        $this->speed = $speed;
        return $this;
    }

    /**
     * Set the status.
     *
     * @param string|null $status The status.
     * @return NetworkCardInterface Returns this network card.
     */
    public function setStatus(?string $status): NetworkCardInterface {
        $this->status = $status;
        return $this;
    }
}
