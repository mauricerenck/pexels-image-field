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
 * String nom FR trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Traits\Strings
 */
trait StringNomFrTrait {

    /**
     * Nom FR.
     *
     * @var string|null
     */
    protected $nomFr;

    /**
     * Get the nom FR.
     *
     * @return string|null Returns the nom FR.
     */
    public function getNomFr(): ?string {
        return $this->nomFr;
    }

    /**
     * Set the nom FR.
     *
     * @param string|null $nomFr The nom FR.
     * @return self Returns this instance.
     */
    public function setNomFr(?string $nomFr): self {
        $this->nomFr = $nomFr;
        return $this;
    }
}
