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
 * Float minimum trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatMinimumTrait {

    /**
     * Minimum.
     *
     * @var string|null
     */
    protected $minimum;

    /**
     * Get the minimum.
     *
     * @return string|null Returns the minimum.
     */
    public function getMinimum(): ?string {
        return $this->minimum;
    }

    /**
     * Set the minimum.
     *
     * @param string|null $minimum The minimum.
     * @return self Returns this instance.
     */
    public function setMinimum(?string $minimum): self {
        $this->minimum = $minimum;
        return $this;
    }
}
