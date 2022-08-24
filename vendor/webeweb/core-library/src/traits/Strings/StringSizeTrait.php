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
 * String size trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringSizeTrait {

    /**
     * Size.
     *
     * @var string|null
     */
    protected $size;

    /**
     * Get the size.
     *
     * @return string|null Returns the size.
     */
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * Set the size.
     *
     * @param string|null $size The size.
     * @return self Returns this instance.
     */
    public function setSize(?string $size): self {
        $this->size = $size;
        return $this;
    }
}
