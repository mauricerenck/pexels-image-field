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
trait FloatLatTrait {

    /**
     * Latitude.
     *
     * @var float|null
     */
    protected $lat;

    /**
     * Get the latitude.
     *
     * @return float|null Returns the latitude.
     */
    public function getLat(): ?float {
        return $this->lat;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $lat The latitude.
     * @return self Returns this instance.
     */
    public function setLat(?float $lat): self {
        $this->lat = $lat;
        return $this;
    }
}
