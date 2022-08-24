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
 * Integer quantity trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerQuantityTrait {

    /**
     * Quantity.
     *
     * @var int|null
     */
    protected $quantity;

    /**
     * Get the quantity.
     *
     * @return int|null Returns the quantity.
     */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param int|null $quantity The quantity.
     * @return self Returns this instance.
     */
    public function setQuantity(?int $quantity): self {
        $this->quantity = $quantity;
        return $this;
    }
}
