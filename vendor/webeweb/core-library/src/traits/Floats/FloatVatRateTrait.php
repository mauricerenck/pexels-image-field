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
 * Float VAT rate trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatVatRateTrait {

    /**
     *  VAT rate.
     *
     * @var float|null
     */
    protected $vatRate;

    /**
     * Get the VAT rate.
     *
     * @return float|null Returns the VAT rate.
     */
    public function getVatRate(): ?float {
        return $this->vatRate;
    }

    /**
     * Set the VAT rate.
     *
     * @param float|null $vatRate The VAT rate.
     * @return self Returns this instance.
     */
    public function setVatRate(?float $vatRate): self {
        $this->vatRate = $vatRate;
        return $this;
    }
}
