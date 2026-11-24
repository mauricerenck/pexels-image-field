<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Floats;

/**
 * Float min trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Floats
 */
trait FloatMinTrait {

    /**
     * Min.
     *
     * @var float|null
     */
    protected $min;

    /**
     * Get the min.
     *
     * @return float|null Returns the min.
     */
    public function getMin(): ?float {
        return $this->min;
    }

    /**
     * Set the min.
     *
     * @param float|null $min The min.
     * @return self Returns this instance.
     */
    public function setMin(?float $min): self {
        $this->min = $min;
        return $this;
    }
}
