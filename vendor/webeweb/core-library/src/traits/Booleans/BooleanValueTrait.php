<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanValueTrait {

    /**
     * Value.
     *
     * @var bool|null
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return bool|null Returns the value.
     */
    public function getValue(): ?bool {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param bool|null $value The value.
     * @return self Returns this instance.
     */
    public function setValue(?bool $value): self {
        $this->value = $value;
        return $this;
    }
}
