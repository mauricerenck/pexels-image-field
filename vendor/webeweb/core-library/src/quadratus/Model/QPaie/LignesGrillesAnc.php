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
 * Lignes grilles anc.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesGrillesAnc {

    /**
     * Code grille.
     *
     * @var string|null
     */
    private $codeGrille;

    /**
     * Nb mois ecoules.
     *
     * @var int|null
     */
    private $nbMoisEcoules;

    /**
     * Valeur.
     *
     * @var float|null
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code grille.
     *
     * @return string|null Returns the code grille.
     */
    public function getCodeGrille(): ?string {
        return $this->codeGrille;
    }

    /**
     * Get the nb mois ecoules.
     *
     * @return int|null Returns the nb mois ecoules.
     */
    public function getNbMoisEcoules(): ?int {
        return $this->nbMoisEcoules;
    }

    /**
     * Get the valeur.
     *
     * @return float|null Returns the valeur.
     */
    public function getValeur(): ?float {
        return $this->valeur;
    }

    /**
     * Set the code grille.
     *
     * @param string|null $codeGrille The code grille.
     * @return LignesGrillesAnc Returns this Lignes grilles anc.
     */
    public function setCodeGrille(?string $codeGrille): LignesGrillesAnc {
        $this->codeGrille = $codeGrille;
        return $this;
    }

    /**
     * Set the nb mois ecoules.
     *
     * @param int|null $nbMoisEcoules The nb mois ecoules.
     * @return LignesGrillesAnc Returns this Lignes grilles anc.
     */
    public function setNbMoisEcoules(?int $nbMoisEcoules): LignesGrillesAnc {
        $this->nbMoisEcoules = $nbMoisEcoules;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return LignesGrillesAnc Returns this Lignes grilles anc.
     */
    public function setValeur(?float $valeur): LignesGrillesAnc {
        $this->valeur = $valeur;
        return $this;
    }
}
