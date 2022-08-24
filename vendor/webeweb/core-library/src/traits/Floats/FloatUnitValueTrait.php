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
 * Float unit value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatUnitValueTrait {

    /**
     * Unit value.
     *
     * @var float|null
     */
    protected $unitValue;

    /**
     * Get the unit value.
     *
     * @return float|null Returns the unit value.
     */
    public function getUnitValue(): ?float {
        return $this->unitValue;
    }

    /**
     * Set the unit value.
     *
     * @param float|null $unitValue The unit value.
     * @return self Returns this instance.
     */
    public function setUnitValue(?float $unitValue): self {
        $this->unitValue = $unitValue;
        return $this;
    }
}
