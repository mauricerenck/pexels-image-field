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
 * Float min trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatMinTrait {

    /**
     * Min.
     *
     * @var string|null
     */
    protected $min;

    /**
     * Get the min.
     *
     * @return string|null Returns the min.
     */
    public function getMin(): ?string {
        return $this->min;
    }

    /**
     * Set the min.
     *
     * @param string|null $min The min.
     * @return self Returns this instance.
     */
    public function setMin(?string $min): self {
        $this->min = $min;
        return $this;
    }
}
