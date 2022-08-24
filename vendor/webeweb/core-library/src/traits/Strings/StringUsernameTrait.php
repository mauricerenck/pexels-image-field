<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String username trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringUsernameTrait {

    /**
     * Username.
     *
     * @var string|null
     */
    protected $username;

    /**
     * Get the username.
     *
     * @return string|null Returns the username.
     */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Set the username.
     *
     * @param string|null $username The username.
     * @return self Returns this instance.
     */
    public function setUsername(?string $username): self {
        $this->username = $username;
        return $this;
    }
}
