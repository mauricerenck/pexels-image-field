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
 * String VAT number trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringVatNumberTrait {

    /**
     * VAT number.
     *
     * @var string|null
     */
    protected $vatNumber;

    /**
     * Get the VAT number.
     *
     * @return string|null Returns the VAT number.
     */
    public function getVatNumber(): ?string {
        return $this->vatNumber;
    }

    /**
     * Set the VAT number.
     *
     * @param string|null $vatNumber The VAT number.
     * @return self Returns this instance.
     */
    public function setVatNumber(?string $vatNumber): self {
        $this->vatNumber = $vatNumber;
        return $this;
    }
}
