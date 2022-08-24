<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String URI trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringUriTrait {

    /**
     * URI.
     *
     * @var string|null
     */
    protected $uri;

    /**
     * Get the URI.
     *
     * @return string|null Returns the URI.
     */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * Set the URI.
     *
     * @param string|null $uri The URI.
     * @return self Returns this instance.
     */
    public function setUri(?string $uri): self {
        $this->uri = $uri;
        return $this;
    }
}
