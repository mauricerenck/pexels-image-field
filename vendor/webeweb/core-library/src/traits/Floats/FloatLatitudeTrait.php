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
 * Float latitude trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatLatitudeTrait {

    /**
     * Latitude.
     *
     * @var float|null
     */
    protected $latitude;

    /**
     * Get the latitude.
     *
     * @return float|null Returns the latitude.
     */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $latitude The latitude.
     * @return self Returns this instance.
     */
    public function setLatitude(?float $latitude): self {
        $this->latitude = $latitude;
        return $this;
    }
}
