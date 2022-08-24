<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String last name trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringLastNameTrait {

    /**
     * Last name.
     *
     * @var string|null
     */
    protected $lastName;

    /**
     * Get the last name.
     *
     * @return string|null Returns the last name.
     */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Set the last name.
     *
     * @param string|null $lastName The last name.
     * @return self Returns this instance.
     */
    public function setLastName(?string $lastName): self {
        $this->lastName = $lastName;
        return $this;
    }
}
