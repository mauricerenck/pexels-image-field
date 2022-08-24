<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Floats;

/**
 * Float value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatValueTrait {

    /**
     * Value.
     *
     * @var float|null
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return float|null Returns the value.
     */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param float|null $value The value.
     * @return self Returns this instance.
     */
    public function setValue(?float $value): self {
        $this->value = $value;
        return $this;
    }
}
