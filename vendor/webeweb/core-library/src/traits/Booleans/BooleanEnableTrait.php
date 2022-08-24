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
 * Boolean enable trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanEnableTrait {

    /**
     * Enable.
     *
     * @var bool|null
     */
    protected $enable;

    /**
     * Get the enable.
     *
     * @return bool|null Returns the enable.
     */
    public function getEnable(): ?bool {
        return $this->enable;
    }

    /**
     * Set the enable.
     *
     * @param bool|null $enable The enable.
     * @return self Returns this instance.
     */
    public function setEnable(?bool $enable): self {
        $this->enable = $enable;
        return $this;
    }
}
