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
 * Integer max trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerMaxTrait {

    /**
     * Max.
     *
     * @var int|null
     */
    protected $max;

    /**
     * Get the max.
     *
     * @return int|null Returns the max.
     */
    public function getMax(): ?int {
        return $this->max;
    }

    /**
     * Set the max.
     *
     * @param int|null $max The max.
     * @return self Returns this instance.
     */
    public function setMax(?int $max): self {
        $this->max = $max;
        return $this;
    }
}
