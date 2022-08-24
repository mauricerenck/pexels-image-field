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
 * String URL trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringUrlTrait {

    /**
     * URL.
     *
     * @var string|null
     */
    protected $url;

    /**
     * Get the URL.
     *
     * @return string|null Returns the URL.
     */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Set the URL.
     *
     * @param string|null $url The URL.
     * @return self Returns this instance.
     */
    public function setUrl(?string $url): self {
        $this->url = $url;
        return $this;
    }
}
