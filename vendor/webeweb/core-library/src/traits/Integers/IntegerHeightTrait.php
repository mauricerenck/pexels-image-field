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
 * Integer height trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerHeightTrait {

    /**
     * Height.
     *
     * @var int|null
     */
    protected $height;

    /**
     * Get the height.
     *
     * @return int|null Returns the height.
     */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Set the height.
     *
     * @param int|null $height The height.
     * @return self Returns this instance.
     */
    public function setHeight(?int $height): self {
        $this->height = $height;
        return $this;
    }
}
