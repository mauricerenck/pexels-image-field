<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Floats;

/**
 * Float longitude trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatLongitudeTrait {

    /**
     * Longitude.
     *
     * @var float|null
     */
    protected $longitude;

    /**
     * Get the longitude.
     *
     * @return float|null Returns the longitude.
     */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Set the longitude.
     *
     * @param float|null $longitude The longitude.
     * @return self Returns this instance.
     */
    public function setLongitude(?float $longitude): self {
        $this->longitude = $longitude;
        return $this;
    }
}
