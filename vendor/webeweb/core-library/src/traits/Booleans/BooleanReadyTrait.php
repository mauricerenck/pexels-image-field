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
 * Boolean ready trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanReadyTrait {

    /**
     * Ready.
     *
     * @var bool|null
     */
    protected $ready;

    /**
     * Get the ready.
     *
     * @return bool|null Returns the ready.
     */
    public function getReady(): ?bool {
        return $this->ready;
    }

    /**
     * Set the ready.
     *
     * @param bool|null $ready The ready.
     * @return self Returns this instance.
     */
    public function setReady(?bool $ready): self {
        $this->ready = $ready;
        return $this;
    }
}
