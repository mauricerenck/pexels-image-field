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
 * Boolean on pre disable trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPreDisableTrait {

    /**
     * On Pre disable.
     *
     * @var bool|null
     */
    protected $onPreDisable;

    /**
     * Get the on pre disable.
     *
     * @return bool|null Returns the on pre disable.
     */
    public function getOnPreDisable(): ?bool {
        return $this->onPreDisable;
    }

    /**
     * Set the on pre disable.
     *
     * @param bool|null $onPreDisable The on pre disable.
     * @return self Returns this instance.
     */
    public function setOnPreDisable(?bool $onPreDisable): self {
        $this->onPreDisable = $onPreDisable;
        return $this;
    }
}
