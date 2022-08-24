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
 * Integer min height trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerMinHeightTrait {

    /**
     * Min height.
     *
     * @var int|null
     */
    protected $minHeight;

    /**
     * Get the min height.
     *
     * @return int|null Returns the min height.
     */
    public function getMinHeight(): ?int {
        return $this->minHeight;
    }

    /**
     * Set the min height.
     *
     * @param int|null $minHeight The min height.
     * @return self Returns this instance.
     */
    public function setMinHeight(?int $minHeight): self {
        $this->minHeight = $minHeight;
        return $this;
    }
}
