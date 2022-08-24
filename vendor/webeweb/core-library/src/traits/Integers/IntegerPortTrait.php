<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

use InvalidArgumentException;

/**
 * Integer port trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerPortTrait {

    /**
     * Port.
     *
     * @var int|null
     */
    protected $port;

    /**
     * Get the port.
     *
     * @return int|null Returns the port.
     */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Set the port.
     *
     * @param int|null $port The port.
     * @return self Returns this instance.
     * @throws InvalidArgumentException Throws an invalid argument exception if the port is not between 1 and 65536.
     */
    public function setPort(?int $port): self {
        if ($port < 0 || 65536 < $port) {
            throw new InvalidArgumentException("The port must be between 1 and 65536");
        }
        $this->port = $port;
        return $this;
    }
}
