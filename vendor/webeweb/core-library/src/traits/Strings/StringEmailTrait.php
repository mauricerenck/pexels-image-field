<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String email trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringEmailTrait {

    /**
     * Email.
     *
     * @var string|null
     */
    protected $email;

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return self Returns this instance.
     */
    public function setEmail(?string $email): self {
        $this->email = $email;
        return $this;
    }
}
