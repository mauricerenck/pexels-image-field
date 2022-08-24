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
 * Integer min width trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerMinWidthTrait {

    /**
     * Min width.
     *
     * @var int|null
     */
    protected $minWidth;

    /**
     * Get the min width.
     *
     * @return int|null Returns the min width.
     */
    public function getMinWidth(): ?int {
        return $this->minWidth;
    }

    /**
     * Set the min width.
     *
     * @param int|null $minWidth The min width.
     * @return self Returns this instance.
     */
    public function setMinWidth(?int $minWidth): self {
        $this->minWidth = $minWidth;
        return $this;
    }
}
