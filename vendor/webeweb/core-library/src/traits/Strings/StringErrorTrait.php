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
 * String error trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringErrorTrait {

    /**
     * Error.
     *
     * @var string|null
     */
    protected $error;

    /**
     * Get the error.
     *
     * @return string|null Returns the error.
     */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * Set the error.
     *
     * @param string|null $error The error.
     * @return self Returns this instance.
     */
    public function setError(?string $error): self {
        $this->error = $error;
        return $this;
    }
}
