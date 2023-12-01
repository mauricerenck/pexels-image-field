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
 * Boolean on post enable trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPostEnableTrait {

    /**
     * On Post enable.
     *
     * @var bool|null
     */
    protected $onPostEnable;

    /**
     * Get the on post enable.
     *
     * @return bool|null Returns the on post enable.
     */
    public function getOnPostEnable(): ?bool {
        return $this->onPostEnable;
    }

    /**
     * Set the on post enable.
     *
     * @param bool|null $onPostEnable The on post enable.
     * @return self Returns this instance.
     */
    public function setOnPostEnable(?bool $onPostEnable): self {
        $this->onPostEnable = $onPostEnable;
        return $this;
    }
}
