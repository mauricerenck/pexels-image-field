<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean verbose trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanVerboseTrait {

    /**
     * Verbose.
     *
     * @var bool|null
     */
    protected $verbose;

    /**
     * Get the verbose.
     *
     * @return bool|null Returns the verbose.
     */
    public function getVerbose(): ?bool {
        return $this->verbose;
    }

    /**
     * Set the verbose.
     *
     * @param bool|null $verbose The verbose.
     * @return self Returns this instance.
     */
    public function setVerbose(?bool $verbose): self {
        $this->verbose = $verbose;
        return $this;
    }
}
