<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer position trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerPositionTrait {

    /**
     * Position.
     *
     * @var int|null
     */
    protected $position;

    /**
     * Get the position.
     *
     * @return int|null Returns the position.
     */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return self Returns this instance.
     */
    public function setPosition(?int $position): self {
        $this->position = $position;
        return $this;
    }
}
