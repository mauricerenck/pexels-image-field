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
 * Integer min trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerMinTrait {

    /**
     * Min.
     *
     * @var int|null
     */
    protected $min;

    /**
     * Get the min.
     *
     * @return int|null Returns the min.
     */
    public function getMin(): ?int {
        return $this->min;
    }

    /**
     * Set the min.
     *
     * @param int|null $min The min.
     * @return self Returns this instance.
     */
    public function setMin(?int $min): self {
        $this->min = $min;
        return $this;
    }
}
