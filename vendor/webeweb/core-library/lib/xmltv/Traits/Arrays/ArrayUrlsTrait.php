<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\Url;

/**
 * Array URLs trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayUrlsTrait {

    /**
     * URLs.
     *
     * @var Url[]
     */
    protected $urls;

    /**
     * Add a URL.
     *
     * @param Url $url The URL.
     * @return self Returns this instance.
     */
    public function addUrl(Url $url): self {
        $this->urls[] = $url;
        return $this;
    }

    /**
     * Get the number of URLs.
     *
     * @return int Returns the number of URLs.
     */
    public function getNumberUrls(): int {
        return count($this->getUrls());
    }

    /**
     * Get the URLs.
     *
     * @return Url[] Returns the URLs.
     */
    public function getUrls(): array {
        return $this->urls;
    }

    /**
     * Determine if this instance has URLs.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasUrls(): bool {
        return 1 <= $this->getNumberUrls();
    }

    /**
     * Set the URLs.
     *
     * @param Url[] $urls The URLs.
     * @return self Returns this instance.
     */
    protected function setUrls(array $urls): self {
        $this->urls = $urls;
        return $this;
    }
}
