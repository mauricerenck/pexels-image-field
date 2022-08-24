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
 * Float discount rate trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatDiscountRateTrait {

    /**
     * Discount rate.
     *
     * @var float|null
     */
    protected $discountRate;

    /**
     * Get the discount rate.
     *
     * @return float|null Returns the discount rate.
     */
    public function getDiscountRate(): ?float {
        return $this->discountRate;
    }

    /**
     * Set the discount rate.
     *
     * @param float|null $discountRate The discount rate.
     * @return self Returns this instance.
     */
    public function setDiscountRate(?float $discountRate): self {
        $this->discountRate = $discountRate;
        return $this;
    }
}
