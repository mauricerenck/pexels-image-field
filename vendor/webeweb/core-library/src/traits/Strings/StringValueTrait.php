<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringValueTrait {

    /**
     * Value.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return string|null Returns the value.
     */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param string|null $value The value.
     * @return self Returns this instance.
     */
    public function setValue(?string $value): self {
        $this->value = $value;
        return $this;
    }
}
