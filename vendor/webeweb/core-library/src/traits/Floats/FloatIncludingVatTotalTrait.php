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
 * Float including VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatIncludingVatTotalTrait {

    /**
     * Including VAT total.
     *
     * @var float|null
     */
    protected $includingVatTotal;

    /**
     * Get the including VAT total.
     *
     * @return float Returns the including VAT total.
     */
    public function getIncludingVatTotal(): ?float {
        return $this->includingVatTotal;
    }

    /**
     * Set the including VAT total.
     *
     * @param float|null $includingVatTotal The including VAT total.
     * @return self Returns this instance.
     */
    public function setIncludingVatTotal(?float $includingVatTotal): self {
        $this->includingVatTotal = $includingVatTotal;
        return $this;
    }
}
