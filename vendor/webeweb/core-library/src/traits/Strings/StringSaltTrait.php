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
 * String salt trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringSaltTrait {

    /**
     * Salt.
     *
     * @var string|null
     */
    protected $salt;

    /**
     * Get the salt.
     *
     * @return string|null Returns the salt.
     */
    public function getSalt(): ?string {
        return $this->salt;
    }

    /**
     * Set the salt.
     *
     * @param string|null $salt The salt.
     * @return self Returns this instance.
     */
    public function setSalt(?string $salt): self {
        $this->salt = $salt;
        return $this;
    }
}
