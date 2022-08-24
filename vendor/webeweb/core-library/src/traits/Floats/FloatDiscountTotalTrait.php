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
 * Float discount total trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatDiscountTotalTrait {

    /**
     * Discount total.
     *
     * @var float|null
     */
    protected $discountTotal;

    /**
     * Get the discount total.
     *
     * @return float|null Returns the discount total.
     */
    public function getDiscountTotal(): ?float {
        return $this->discountTotal;
    }

    /**
     * Set the discount total.
     *
     * @param float|null $discountTotal The discount total.
     * @return self Returns this instance.
     */
    public function setDiscountTotal(?float $discountTotal): self {
        $this->discountTotal = $discountTotal;
        return $this;
    }
}
