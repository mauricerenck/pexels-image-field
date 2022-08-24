<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Security;

use WBW\Library\Traits\Integers\IntegerPortTrait;
use WBW\Library\Traits\Strings\StringHostnameTrait;

/**
 * Authenticator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Security
 */
class Authenticator {

    use IntegerPortTrait;
    use StringHostnameTrait;

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    private $passwordAuthentication;

    /**
     * Scheme.
     *
     * @var string|null
     */
    private $scheme;

    /**
     * Constructor.
     *
     * @param string|null $hostname The hostname.
     * @param PasswordAuthentication $passwordAuthentication
     */
    public function __construct(?string $hostname, PasswordAuthentication $passwordAuthentication) {
        $this->setHostname($hostname);
        $this->setPasswordAuthentication($passwordAuthentication);
    }

    /**
     * Get the password authentication.
     *
     * @return PasswordAuthentication Returns the password authentication.
     */
    public function getPasswordAuthentication(): PasswordAuthentication {
        return $this->passwordAuthentication;
    }

    /**
     * Get the scheme.
     *
     * @return string|null Returns the scheme.
     */
    public function getScheme(): ?string {
        return $this->scheme;
    }

    /**
     * Set the password authenticator.
     *
     * @param PasswordAuthentication $passwordAuthentication The password authentication.
     * @return Authenticator Returns this authenticator.
     */
    public function setPasswordAuthentication(PasswordAuthentication $passwordAuthentication): Authenticator {
        $this->passwordAuthentication = $passwordAuthentication;
        return $this;
    }

    /**
     * Set the scheme.
     *
     * @param string|null $scheme The scheme.
     * @return Authenticator Returns this authenticator.
     */
    public function setScheme(?string $scheme): Authenticator {
        $this->scheme = $scheme;
        return $this;
    }
}
