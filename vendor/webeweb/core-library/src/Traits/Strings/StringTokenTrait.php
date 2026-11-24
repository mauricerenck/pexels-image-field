<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String token trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringTokenTrait {

    /**
     * Token.
     *
     * @var string|null
     */
    protected $Token;

    /**
     * Get the Token.
     *
     * @return string|null Returns the Token.
     */
    public function getToken(): ?string {
        return $this->Token;
    }

    /**
     * Set the Token.
     *
     * @param string|null $Token The Token.
     * @return self Returns this instance.
     */
    public function setToken(?string $Token): self {
        $this->Token = $Token;
        return $this;
    }
}
