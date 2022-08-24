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
 * Conventions col lignes grilles anc.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ConventionsColLignesGrillesAnc {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code convention.
     *
     * @var string|null
     */
    private $codeConvention;

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
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the code convention.
     *
     * @return string|null Returns the code convention.
     */
    public function getCodeConvention(): ?string {
        return $this->codeConvention;
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
     * Set the code.
     *
     * @param string|null $code The code.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setCode(?string $code): ConventionsColLignesGrillesAnc {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string|null $codeConvention The code convention.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setCodeConvention(?string $codeConvention): ConventionsColLignesGrillesAnc {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the nb mois ecoules.
     *
     * @param int|null $nbMoisEcoules The nb mois ecoules.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setNbMoisEcoules(?int $nbMoisEcoules): ConventionsColLignesGrillesAnc {
        $this->nbMoisEcoules = $nbMoisEcoules;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setValeur(?float $valeur): ConventionsColLignesGrillesAnc {
        $this->valeur = $valeur;
        return $this;
    }
}
