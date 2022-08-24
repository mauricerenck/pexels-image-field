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
 * Float including VAT price trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatIncludingVatPriceTrait {

    /**
     * Including VAT price.
     *
     * @var float|null
     */
    protected $includingVatPrice;

    /**
     * Get the including VAT price.
     *
     * @return float|null Returns the including VAT price.
     */
    public function getIncludingVatPrice(): ?float {
        return $this->includingVatPrice;
    }

    /**
     * Set the including VAT price.
     *
     * @param float|null $includingVatPrice The including VAT price.
     * @return self Returns this instance.
     */
    public function setIncludingVatPrice(?float $includingVatPrice): self {
        $this->includingVatPrice = $includingVatPrice;
        return $this;
    }
}
