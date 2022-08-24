<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Floats;

/**
 * Float rate trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatRateTrait {

    /**
     * Rate.
     *
     * @var float|null
     */
    protected $rate;

    /**
     * Get the rate.
     *
     * @return float|null Returns the rate.
     */
    public function getRate(): ?float {
        return $this->rate;
    }

    /**
     * Set the rate.
     *
     * @param float|null $rate The rate.
     * @return self Returns this instance.
     */
    public function setRate(?float $rate): self {
        $this->rate = $rate;
        return $this;
    }
}
