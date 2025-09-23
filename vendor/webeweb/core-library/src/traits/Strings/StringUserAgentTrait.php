<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String user agent trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringUserAgentTrait {

    /**
     * User agent.
     *
     * @var string|null
     */
    protected $userAgent;

    /**
     * Get the user agent.
     *
     * @return string|null Returns the user agent.
     */
    public function getUserAgent(): ?string {
        return $this->userAgent;
    }

    /**
     * Set the user agent.
     *
     * @param string|null $userAgent The user agent.
     * @return self Returns this instance.
     */
    public function setUserAgent(?string $userAgent): self {
        $this->userAgent = $userAgent;
        return $this;
    }
}
