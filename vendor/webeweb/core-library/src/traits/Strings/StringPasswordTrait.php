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
 * String password trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringPasswordTrait {

    /**
     * Password.
     *
     * @var string|null
     */
    protected $password;

    /**
     * Get the password.
     *
     * @return string|null Returns the password.
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Set the password.
     *
     * @param string|null $password The password.
     * @return self Returns this instance.
     */
    public function setPassword(?string $password): self {
        $this->password = $password;
        return $this;
    }
}
