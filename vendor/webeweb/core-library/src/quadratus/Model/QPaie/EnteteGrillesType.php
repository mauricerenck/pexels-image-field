<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Entete grilles type.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EnteteGrillesType {

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the numero grille type.
     *
     * @return int|null Returns the numero grille type.
     */
    public function getNumeroGrilleType(): ?int {
        return $this->numeroGrilleType;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return EnteteGrillesType Returns this Entete grilles type.
     */
    public function setIntitule(?string $intitule): EnteteGrillesType {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return EnteteGrillesType Returns this Entete grilles type.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): EnteteGrillesType {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }
}
