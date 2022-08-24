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
 * Float x trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatXTrait {

    /**
     * X.
     *
     * @var float|null
     */
    protected $x;

    /**
     * Get the x.
     *
     * @return float|null Returns the x.
     */
    public function getX(): ?float {
        return $this->x;
    }

    /**
     * Get the (int) x.
     *
     * @return int Returns the x.
     */
    public function getXInt(): int {
        return intval($this->x);
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return self Returns this instance.
     */
    public function setX(?float $x): self {
        $this->x = $x;
        return $this;
    }
}
