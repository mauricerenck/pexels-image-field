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
 * String code sous-groupe trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Traits\Strings
 */
trait StringCodeSousGroupeTrait {

    /**
     * Code sous-groupe.
     *
     * @var string|null
     */
    protected $codeSousGroupe;

    /**
     * Get the code sous-groupe.
     *
     * @return string|null Returns the code sous-groupe.
     */
    public function getCodeSousGroupe(): ?string {
        return $this->codeSousGroupe;
    }

    /**
     * Set the code sous-groupe.
     *
     * @param string|null $codeSousGroupe The code sous-groupe.
     * @return self Returns this instance.
     */
    public function setCodeSousGroupe(?string $codeSousGroupe): self {
        $this->codeSousGroupe = $codeSousGroupe;
        return $this;
    }
}
