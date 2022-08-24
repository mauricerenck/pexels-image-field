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
 * String firstname trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringFirstNameTrait {

    /**
     * First name.
     *
     * @var string|null
     */
    protected $firstName;

    /**
     * Get the first name.
     *
     * @return string|null Returns the first name.
     */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Set the first name.
     *
     * @param string|null $firstName The first name.
     * @return self Returns this instance.
     */
    public function setFirstName(?string $firstName): self {
        $this->firstName = $firstName;
        return $this;
    }
}
