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
 * Float unit price trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatUnitPriceTrait {

    /**
     * Unit price.
     *
     * @var float|null
     */
    protected $unitPrice;

    /**
     * Get the unit price.
     *
     * @return float|null Returns the unit price.
     */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Set the unit price.
     *
     * @param float|null $unitPrice The unit price.
     * @return self Returns this instance.
     */
    public function setUnitPrice(?float $unitPrice): self {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
