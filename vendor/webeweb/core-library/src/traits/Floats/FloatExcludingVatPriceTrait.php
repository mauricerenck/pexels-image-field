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
 * Float excluding VAT price trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatExcludingVatPriceTrait {

    /**
     * Excluding VAT price.
     *
     * @var float|null
     */
    protected $excludingVatPrice;

    /**
     * Get the excluding VAT price.
     *
     * @return float|null Returns the excluding VAT price.
     */
    public function getExcludingVatPrice(): ?float {
        return $this->excludingVatPrice;
    }

    /**
     * Set the excluding VAT price.
     *
     * @param float|null $excludingVatPrice The excluding VAT price.
     * @return self Returns this instance.
     */
    public function setExcludingVatPrice(?float $excludingVatPrice): self {
        $this->excludingVatPrice = $excludingVatPrice;
        return $this;
    }
}
