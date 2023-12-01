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
 * Boolean on pre enable trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPreEnableTrait {

    /**
     * On Pre enable.
     *
     * @var bool|null
     */
    protected $onPreEnable;

    /**
     * Get the on pre enable.
     *
     * @return bool|null Returns the on pre enable.
     */
    public function getOnPreEnable(): ?bool {
        return $this->onPreEnable;
    }

    /**
     * Set the on pre enable.
     *
     * @param bool|null $onPreEnable The on pre enable.
     * @return self Returns this instance.
     */
    public function setOnPreEnable(?bool $onPreEnable): self {
        $this->onPreEnable = $onPreEnable;
        return $this;
    }
}
