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
 * Float max trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatMaxTrait {

    /**
     * Max.
     *
     * @var string|null
     */
    protected $max;

    /**
     * Get the max.
     *
     * @return string|null Returns the max.
     */
    public function getMax(): ?string {
        return $this->max;
    }

    /**
     * Set the max.
     *
     * @param string|null $max The max.
     * @return self Returns this instance.
     */
    public function setMax(?string $max): self {
        $this->max = $max;
        return $this;
    }
}
