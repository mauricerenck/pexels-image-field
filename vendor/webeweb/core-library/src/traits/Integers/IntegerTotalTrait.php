<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer total trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerTotalTrait {

    /**
     * Total.
     *
     * @var int|null
     */
    protected $total;

    /**
     * Get the total.
     *
     * @return int|null Returns the total.
     */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Set the total.
     *
     * @param int|null $total The total.
     * @return self Returns this instance.
     */
    public function setTotal(?int $total): self {
        $this->total = $total;
        return $this;
    }
}
