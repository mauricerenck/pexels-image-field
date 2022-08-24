<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean animated trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanAnimatedTrait {

    /**
     * Animated.
     *
     * @var bool|null
     */
    protected $animated;

    /**
     * Get the animated.
     *
     * @return bool|null Returns the animated.
     */
    public function getAnimated(): ?bool {
        return $this->animated;
    }

    /**
     * Set the animated.
     *
     * @param bool|null $animated The animated.
     * @return self Returns this instance.
     */
    public function setAnimated(?bool $animated): self {
        $this->animated = $animated;
        return $this;
    }
}
