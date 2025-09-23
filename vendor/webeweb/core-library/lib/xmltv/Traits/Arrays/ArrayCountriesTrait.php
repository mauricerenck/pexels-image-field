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

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\Country;

/**
 * Array countries trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayCountriesTrait {

    /**
     * Countries.
     *
     * @var Country[]
     */
    protected $countries;

    /**
     * Add a country.
     *
     * @param Country $country The country.
     * @return self Returns this instance.
     */
    public function addCountry(Country $country): self {
        $this->countries[] = $country;
        return $this;
    }

    /**
     * Get the countries.
     *
     * @return Country[] Returns the countries.
     */
    public function getCountries(): array {
        return $this->countries;
    }

    /**
     * Get the number of countries.
     *
     * @return int Returns the number of countries.
     */
    public function getNumberCountries(): int {
        return count($this->getCountries());
    }

    /**
     * Determine if this programme has countries.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasCountries(): bool {
        return 1 <= $this->getNumberCountries();
    }

    /**
     * Set the countries.
     *
     * @param Country[] $countries The countries.
     * @return self Returns this instance.
     */
    protected function setCountries(array $countries): self {
        $this->countries = $countries;
        return $this;
    }
}
