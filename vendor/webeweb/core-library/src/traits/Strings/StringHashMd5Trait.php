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
 * String hash "MD5" trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringHashMd5Trait {

    /**
     * Hash "MD5".
     *
     * @var string|null
     */
    protected $hashMd5;

    /**
     * Get the hash "MD5".
     *
     * @return string|null Returns the hash "MD5".
     */
    public function getHashMd5(): ?string {
        return $this->hashMd5;
    }

    /**
     * Set the hash "MD5".
     *
     * @param string|null $hashMd5 The hash "MD5".
     * @return self Returns this instance.
     */
    public function setHashMd5(?string $hashMd5): self {
        $this->hashMd5 = $hashMd5;
        return $this;
    }
}
