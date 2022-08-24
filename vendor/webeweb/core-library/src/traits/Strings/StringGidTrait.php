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
 * String GID trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringGidTrait {

    /**
     * GID.
     *
     * @var string|null
     */
    protected $gid;

    /**
     * Get the GID.
     *
     * @return string|null Returns the GID.
     */
    public function getGid(): ?string {
        return $this->gid;
    }

    /**
     * Set the GID.
     *
     * @param string|null $gid The GID.
     * @return self Returns this instance.
     */
    public function setGid(?string $gid): self {
        $this->gid = $gid;
        return $this;
    }
}
