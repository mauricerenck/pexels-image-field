<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Floats;

/**
 * Float total trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatTotalTrait {

    /**
     * Total.
     *
     * @var float|null
     */
    protected $total;

    /**
     * Get the total.
     *
     * @return float|null Returns the total.
     */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Set the total.
     *
     * @param float|null $total The total.
     * @return self Returns this instance.
     */
    public function setTotal(?float $total): self {
        $this->total = $total;
        return $this;
    }
}
