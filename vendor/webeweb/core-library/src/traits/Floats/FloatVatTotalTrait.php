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
 * Float VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatVatTotalTrait {

    /**
     *  VAT total.
     *
     * @var float|null
     */
    protected $vatTotal;

    /**
     * Get the VAT total.
     *
     * @return float|null Returns the VAT total.
     */
    public function getVatTotal(): ?float {
        return $this->vatTotal;
    }

    /**
     * Set the VAT total.
     *
     * @param float|null $vatTotal The VAT total.
     * @return self Returns this instance.
     */
    public function setVatTotal(?float $vatTotal): self {
        $this->vatTotal = $vatTotal;
        return $this;
    }
}
