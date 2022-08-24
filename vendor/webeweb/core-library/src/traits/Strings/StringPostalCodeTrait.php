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
 * String postal code trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringPostalCodeTrait {

    /**
     * Postal code.
     *
     * @var string|null
     */
    protected $postalCode;

    /**
     * Get the postal code.
     *
     * @return string|null Returns the postal code.
     */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Set the postal code.
     *
     * @param string|null $postalCode The postal code.
     * @return self Returns this instance.
     */
    public function setPostalCode(?string $postalCode): self {
        $this->postalCode = $postalCode;
        return $this;
    }
}
