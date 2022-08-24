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
 * Float excluding VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatExcludingVatTotalTrait {

    /**
     * Excluding VAT total.
     *
     * @var float|null
     */
    protected $excludingVatTotal;

    /**
     * Get the excluding VAT total.
     *
     * @return float|null Returns the excluding VAT total.
     */
    public function getExcludingVatTotal(): ?float {
        return $this->excludingVatTotal;
    }

    /**
     * Set the excluding VAT total.
     *
     * @param float|null $excludingVatTotal The excluding VAT total.
     * @return self Returns this instance.
     */
    public function setExcludingVatTotal(?float $excludingVatTotal): self {
        $this->excludingVatTotal = $excludingVatTotal;
        return $this;
    }
}
