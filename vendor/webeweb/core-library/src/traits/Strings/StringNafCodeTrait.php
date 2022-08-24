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
 * String NAF code trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringNafCodeTrait {

    /**
     * NAF code.
     *
     * @var string|null
     */
    protected $nafCode;

    /**
     * Get the NAF code.
     *
     * @return string|null Returns the NAF code.
     */
    public function getNafCode(): ?string {
        return $this->nafCode;
    }

    /**
     * Set the NAF code.
     *
     * @param string|null $nafCode The NAF code.
     * @return self Returns this instance.
     */
    public function setNafCode(?string $nafCode): self {
        $this->nafCode = $nafCode;
        return $this;
    }
}
