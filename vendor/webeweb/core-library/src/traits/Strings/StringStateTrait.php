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
 * String state trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringStateTrait {

    /**
     * State.
     *
     * @var string|null
     */
    protected $state;

    /**
     * Get the state.
     *
     * @return string|null Returns the state.
     */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Set the state.
     *
     * @param string|null $state The state.
     * @return self Returns this instance.
     */
    public function setState(?string $state): self {
        $this->state = $state;
        return $this;
    }
}
