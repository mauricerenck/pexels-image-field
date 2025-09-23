<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Traits\Strings;

/**
 * String nom ENG trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Traits\Strings
 */
trait StringNomEngTrait {

    /**
     * Nom ENG.
     *
     * @var string|null
     */
    protected $nomEng;

    /**
     * Get the nom ENG.
     *
     * @return string|null Returns the nom ENG.
     */
    public function getNomEng(): ?string {
        return $this->nomEng;
    }

    /**
     * Set the nom ENG.
     *
     * @param string|null $nomEng The nom ENG.
     * @return self Returns this instance.
     */
    public function setNomEng(?string $nomEng): self {
        $this->nomEng = $nomEng;
        return $this;
    }
}
