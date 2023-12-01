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

/**
 * Network.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class Network implements NetworkInterface {

    /**
     * DNS.
     *
     * @var string|null
     */
    protected $dns;

    /**
     * Gateway.
     *
     * @var string|null
     */
    protected $gateway;

    /**
     * Hostname.
     *
     * @var string|null
     */
    protected $hostname;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getDns(): ?string {
        return $this->dns;
    }

    /**
     * {@inheritDoc}
     */
    public function getGateway(): ?string {
        return $this->gateway;
    }

    /**
     * {@inheritDoc}
     */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeNetwork($this);
    }

    /**
     * Set the DNS.
     *
     * @param string|null $dns The DNS.
     * @return NetworkInterface Returns this network.
     */
    public function setDns(?string $dns): NetworkInterface {
        $this->dns = $dns;
        return $this;
    }

    /**
     * Set the gateway.
     *
     * @param string|null $gateway The gateway.
     * @return NetworkInterface Returns this network.
     */
    public function setGateway(?string $gateway): NetworkInterface {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * Set the hostname.
     *
     * @param string|null $hostname The hostname.
     * @return NetworkInterface Returns this network.
     */
    public function setHostname(?string $hostname): NetworkInterface {
        $this->hostname = $hostname;
        return $this;
    }
}
