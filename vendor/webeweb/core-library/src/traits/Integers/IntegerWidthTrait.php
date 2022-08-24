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
 * Integer width trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerWidthTrait {

    /**
     * Width.
     *
     * @var int|null
     */
    protected $width;

    /**
     * Get the width.
     *
     * @return int|null Returns the width.
     */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Set the width.
     *
     * @param int|null $width The width.
     * @return self Returns this instance.
     */
    public function setWidth(?int $width): self {
        $this->width = $width;
        return $this;
    }
}
