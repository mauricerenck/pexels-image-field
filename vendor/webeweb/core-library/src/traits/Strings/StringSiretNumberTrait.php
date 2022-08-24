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
 * String SIRET number trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringSiretNumberTrait {

    /**
     * SIRET number.
     *
     * @var string|null
     */
    protected $siretNumber;

    /**
     * Get the SIRET number.
     *
     * @return string|null Returns the SIRET number.
     */
    public function getSiretNumber(): ?string {
        return $this->siretNumber;
    }

    /**
     * Set the SIRET number.
     *
     * @param string|null $siretNumber The SIRET number.
     * @return self Returns this instance.
     */
    public function setSiretNumber(?string $siretNumber): self {
        $this->siretNumber = $siretNumber;
        return $this;
    }
}
