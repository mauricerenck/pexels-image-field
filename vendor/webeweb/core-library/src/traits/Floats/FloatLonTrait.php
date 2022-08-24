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
trait FloatLonTrait {

    /**
     * Longitude.
     *
     * @var float|null
     */
    protected $lon;

    /**
     * Get the longitude.
     *
     * @return float|null Returns the longitude.
     */
    public function getLon(): ?float {
        return $this->lon;
    }

    /**
     * Set the longitude.
     *
     * @param float|null $lon The longitude.
     * @return self Returns this instance.
     */
    public function setLon(?float $lon): self {
        $this->lon = $lon;
        return $this;
    }
}
