<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String location trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringLocationTrait {

    /**
     * Location.
     *
     * @var string|null
     */
    protected $location;

    /**
     * Get the location.
     *
     * @return string|null Returns the location.
     */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Set the location.
     *
     * @param string|null $location The location.
     * @return self Returns this instance.
     */
    public function setLocation(?string $location): self {
        $this->location = $location;
        return $this;
    }
}
