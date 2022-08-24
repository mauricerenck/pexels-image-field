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
 * String access token trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringAccessTokenTrait {

    /**
     * Access token.
     *
     * @var string|null
     */
    protected $accessToken;

    /**
     * Get the access token.
     *
     * @return string|null Returns the access token.
     */
    public function getAccessToken(): ?string {
        return $this->accessToken;
    }

    /**
     * Set the access token.
     *
     * @param string|null $accessToken The access token.
     * @return self Returns this instance.
     */
    public function setAccessToken(?string $accessToken): self {
        $this->accessToken = $accessToken;
        return $this;
    }
}
