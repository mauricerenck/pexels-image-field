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
 * String street name trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringStreetNameTrait {

    /**
     * Street name.
     *
     * @var string|null
     */
    protected $streetName;

    /**
     * Get the street name.
     *
     * @return string|null Returns the street name.
     */
    public function getStreetName(): ?string {
        return $this->streetName;
    }

    /**
     * Set the street name.
     *
     * @param string|null $streetName The street name.
     * @return self Returns this instance.
     */
    public function setStreetName(?string $streetName): self {
        $this->streetName = $streetName;
        return $this;
    }
}
