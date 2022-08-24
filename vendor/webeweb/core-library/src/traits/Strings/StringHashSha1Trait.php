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
 * String hash "SHA1" trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringHashSha1Trait {

    /**
     * Hash "SHA1".
     *
     * @var string|null
     */
    protected $hashSha1;

    /**
     * Get the hash "SHA1".
     *
     * @return string|null Returns the hash "SHA1".
     */
    public function getHashSha1(): ?string {
        return $this->hashSha1;
    }

    /**
     * Set the hash "SHA1".
     *
     * @param string|null $hashSha1 The hash "SHA1".
     * @return self Returns this instance.
     */
    public function setHashSha1(?string $hashSha1): self {
        $this->hashSha1 = $hashSha1;
        return $this;
    }
}
