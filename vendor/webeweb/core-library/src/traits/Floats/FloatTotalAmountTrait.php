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
 * Float total amount trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatTotalAmountTrait {

    /**
     * Total amount.
     *
     * @var float|null
     */
    protected $totalAmount;

    /**
     * Get the total amount.
     *
     * @return float|null Returns the total amount.
     */
    public function getTotalAmount(): ?float {
        return $this->totalAmount;
    }

    /**
     * Set the total amount.
     *
     * @param float|null $totalAmount The total amount.
     * @return self Returns this instance.
     */
    public function setTotalAmount(?float $totalAmount): self {
        $this->totalAmount = $totalAmount;
        return $this;
    }
}
