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
 * Boolean active trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanActiveTrait {

    /**
     * Active.
     *
     * @var bool|null
     */
    protected $active;

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * Set the active.
     *
     * @param bool|null $active The active.
     * @return self Returns this instance.
     */
    public function setActive(?bool $active): self {
        $this->active = $active;
        return $this;
    }
}
