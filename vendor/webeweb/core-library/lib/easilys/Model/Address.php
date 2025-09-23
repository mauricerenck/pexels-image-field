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

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringCountryTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringPostalCodeTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\Easilys\Traits\Booleans\BooleanIsMainTrait;

/**
 * Address.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Address {

    use BooleanIsMainTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringCountryTrait;
    use StringLabelTrait;
    use StringPostalCodeTrait;
    use StringTypeTrait;

    /**
     * Address.
     *
     * @var string|null
     */
    protected $address;

    /**
     * City.
     *
     * @var string|null
     */
    protected $city;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the address.
     *
     * @return string|null Returns the address.
     */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Get the city.
     *
     * @return string|null Returns the city.
     */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Set the address.
     *
     * @param string|null $address The address.
     * @return Address Returns this address.
     */
    public function setAddress(?string $address): Address {
        $this->address = $address;
        return $this;
    }

    /**
     * Set the city.
     *
     * @param string|null $city The city.
     * @return Address Returns this address.
     */
    public function setCity(?string $city): Address {
        $this->city = $city;
        return $this;
    }
}
