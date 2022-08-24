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
 * String hash trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringHashTrait {

    /**
     * Hash.
     *
     * @var string|null
     */
    protected $hash;

    /**
     * Get the hash.
     *
     * @return string|null Returns the hash.
     */
    public function getHash(): ?string {
        return $this->hash;
    }

    /**
     * Set the hash.
     *
     * @param string|null $hash The hash.
     * @return self Returns this instance.
     */
    public function setHash(?string $hash): self {
        $this->hash = $hash;
        return $this;
    }
}
