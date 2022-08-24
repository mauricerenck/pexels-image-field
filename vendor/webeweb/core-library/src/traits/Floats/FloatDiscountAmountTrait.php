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
 * Float discount amount trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatDiscountAmountTrait {

    /**
     * Discount amount.
     *
     * @var float|null
     */
    protected $discountAmount;

    /**
     * Get the discount amount.
     *
     * @return float|null Returns the discount amount.
     */
    public function getDiscountAmount(): ?float {
        return $this->discountAmount;
    }

    /**
     * Set the discount amount.
     *
     * @param float|null $discountAmount The discount amount.
     * @return self Returns this instance.
     */
    public function setDiscountAmount(?float $discountAmount): self {
        $this->discountAmount = $discountAmount;
        return $this;
    }
}
