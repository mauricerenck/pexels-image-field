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
 * String key trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringKeyTrait {

    /**
     * Key.
     *
     * @var string|null
     */
    protected $key;

    /**
     * Get the key.
     *
     * @return string|null Returns the key.
     */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Set the key.
     *
     * @param string|null $key The key.
     * @return self Returns this instance.
     */
    public function setKey(?string $key): self {
        $this->key = $key;
        return $this;
    }
}
