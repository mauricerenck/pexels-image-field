<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringColorTrait {

    /**
     * Color.
     *
     * @var string|null
     */
    protected $color;

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return self Returns this instance.
     */
    public function setColor(?string $color): self {
        $this->color = $color;
        return $this;
    }
}
