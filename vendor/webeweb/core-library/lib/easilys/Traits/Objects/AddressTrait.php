<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Objects;

use WBW\Library\Easilys\Model\Address;

/**
 * Address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Objects
 */
trait AddressTrait {

    /**
     * Address.
     *
     * @var Address|null
     */
    protected $address;

    /**
     * Get the address.
     *
     * @return Address|null Returns the address.
     */
    public function getAddress(): ?Address {
        return $this->address;
    }

    /**
     * Set the address.
     *
     * @param Address|null $address The address.
     * @return self Returns this instance.
     */
    public function setAddress(?Address $address): self {
        $this->address = $address;
        return $this;
    }
}
