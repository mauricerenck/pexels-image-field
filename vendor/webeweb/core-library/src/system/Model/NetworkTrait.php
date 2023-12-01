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

/**
 * Network trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
trait NetworkTrait {

    /**
     * Network.
     *
     * @var NetworkInterface|null
     */
    protected $network;

    /**
     * Get the network.
     *
     * @return NetworkInterface|null Returns the network.
     */
    public function getNetwork(): ?NetworkInterface {
        return $this->network;
    }

    /**
     * Set the network.
     *
     * @param NetworkInterface|null $network The network.
     * @return self Returns this instance.
     */
    protected function setNetwork(?NetworkInterface $network): self {
        $this->network = $network;
        return $this;
    }
}
