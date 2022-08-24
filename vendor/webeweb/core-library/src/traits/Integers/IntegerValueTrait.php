<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerValueTrait {

    /**
     * Value.
     *
     * @var int|null
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return int|null Returns the value.
     */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param int|null $value The value.
     * @return self Returns this instance.
     */
    public function setValue(?int $value): self {
        $this->value = $value;
        return $this;
    }
}
