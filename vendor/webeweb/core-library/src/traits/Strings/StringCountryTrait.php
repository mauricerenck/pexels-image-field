<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String country trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringCountryTrait {

    /**
     * Country.
     *
     * @var string|null
     */
    protected $country;

    /**
     * Get the country.
     *
     * @return string|null Returns the country.
     */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Set the country.
     *
     * @param string|null $country The country.
     * @return self Returns this instance.
     */
    public function setCountry(?string $country): self {
        $this->country = $country;
        return $this;
    }
}
