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
 * String API token trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringApiTokenTrait {

    /**
     * API token.
     *
     * @var string|null
     */
    protected $apiToken;

    /**
     * Get the API token.
     *
     * @return string|null Returns the API token.
     */
    public function getApiToken(): ?string {
        return $this->apiToken;
    }

    /**
     * Set the API token.
     *
     * @param string|null $apiToken The API token.
     * @return self Returns this instance.
     */
    public function setApiToken(?string $apiToken): self {
        $this->apiToken = $apiToken;
        return $this;
    }
}
