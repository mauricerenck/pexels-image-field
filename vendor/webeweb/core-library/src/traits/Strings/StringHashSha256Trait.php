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
 * String hash "SHA256" trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringHashSha256Trait {

    /**
     * Hash "SHA256".
     *
     * @var string|null
     */
    protected $hashSha256;

    /**
     * Get the hash "SHA256".
     *
     * @return string|null Returns the hash "SHA256".
     */
    public function getHashSha256(): ?string {
        return $this->hashSha256;
    }

    /**
     * Set the hash "SHA256".
     *
     * @param string|null $hashSha256 The hash "SHA256".
     * @return self Returns this instance.
     */
    public function setHashSha256(?string $hashSha256): self {
        $this->hashSha256 = $hashSha256;
        return $this;
    }
}
