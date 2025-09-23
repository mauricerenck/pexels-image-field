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
 * String code sous sous-groupe trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Traits\Strings
 */
trait StringCodeSousSousGroupeTrait {

    /**
     * Code sous sous-groupe.
     *
     * @var string|null
     */
    protected $codeSousSousGroupe;

    /**
     * Get the code sous sous-groupe.
     *
     * @return string|null Returns the code sous sous-groupe.
     */
    public function getCodeSousSousGroupe(): ?string {
        return $this->codeSousSousGroupe;
    }

    /**
     * Set the code sous sous-groupe.
     *
     * @param string|null $codeSousSousGroupe The code sous sous-groupe.
     * @return self Returns this instance.
     */
    public function setCodeSousSousGroupe(?string $codeSousSousGroupe): self {
        $this->codeSousSousGroupe = $codeSousSousGroupe;
        return $this;
    }
}
