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
 * Float average trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatAverageTrait {

    /**
     * Average.
     *
     * @var float|null
     */
    protected $average;

    /**
     * Get the average.
     *
     * @return float|null Returns the average.
     */
    public function getAverage(): ?float {
        return $this->average;
    }

    /**
     * Set the average.
     *
     * @param float|null $average The average.
     * @return self Returns this instance.
     */
    public function setAverage(?float $average): self {
        $this->average = $average;
        return $this;
    }
}
