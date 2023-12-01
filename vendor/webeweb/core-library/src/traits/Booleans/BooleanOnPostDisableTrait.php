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
 * Boolean on post disable trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPostDisableTrait {

    /**
     * On Post disable.
     *
     * @var bool|null
     */
    protected $onPostDisable;

    /**
     * Get the on post disable.
     *
     * @return bool|null Returns the on post disable.
     */
    public function getOnPostDisable(): ?bool {
        return $this->onPostDisable;
    }

    /**
     * Set the on post disable.
     *
     * @param bool|null $onPostDisable The on post disable.
     * @return self Returns this instance.
     */
    public function setOnPostDisable(?bool $onPostDisable): self {
        $this->onPostDisable = $onPostDisable;
        return $this;
    }
}
