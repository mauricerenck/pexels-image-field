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
 * String version trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringVersionTrait {

    /**
     * Version.
     *
     * @var string|null
     */
    protected $version;

    /**
     * Get the version.
     *
     * @return string|null Returns the version.
     */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Set the version.
     *
     * @param string|null $version The version.
     * @return self Returns this instance.
     */
    public function setVersion(?string $version): self {
        $this->version = $version;
        return $this;
    }
}
