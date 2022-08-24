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
 * String phone trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringPhoneTrait {

    /**
     * Phone.
     *
     * @var string|null
     */
    protected $phone;

    /**
     * Get the phone.
     *
     * @return string|null Returns the phone.
     */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Set the phone.
     *
     * @param string|null $phone The phone.
     * @return self Returns this instance.
     */
    public function setPhone(?string $phone): self {
        $this->phone = $phone;
        return $this;
    }
}
