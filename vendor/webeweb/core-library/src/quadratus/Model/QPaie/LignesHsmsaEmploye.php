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

use DateTime;

/**
 * Lignes hsmsa employe.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesHsmsaEmploye {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Mt hs.
     *
     * @var int|null
     */
    private $mtHs;

    /**
     * Nb hs.
     *
     * @var float|null
     */
    private $nbHs;

    /**
     * Num ligne.
     *
     * @var string|null
     */
    private $numLigne;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Numero employe2.
     *
     * @var string|null
     */
    private $numeroEmploye2;

    /**
     * Per deb.
     *
     * @var DateTime|null
     */
    private $perDeb;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Taux hs.
     *
     * @var int|null
     */
    private $tauxHs;

    /**
     * Type remun hs.
     *
     * @var string|null
     */
    private $typeRemunHs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code unite.
     *
     * @return string|null Returns the code unite.
     */
    public function getCodeUnite(): ?string {
        return $this->codeUnite;
    }

    /**
     * Get the mt hs.
     *
     * @return int|null Returns the mt hs.
     */
    public function getMtHs(): ?int {
        return $this->mtHs;
    }

    /**
     * Get the nb hs.
     *
     * @return float|null Returns the nb hs.
     */
    public function getNbHs(): ?float {
        return $this->nbHs;
    }

    /**
     * Get the num ligne.
     *
     * @return string|null Returns the num ligne.
     */
    public function getNumLigne(): ?string {
        return $this->numLigne;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the numero employe2.
     *
     * @return string|null Returns the numero employe2.
     */
    public function getNumeroEmploye2(): ?string {
        return $this->numeroEmploye2;
    }

    /**
     * Get the per deb.
     *
     * @return DateTime|null Returns the per deb.
     */
    public function getPerDeb(): ?DateTime {
        return $this->perDeb;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
    }

    /**
     * Get the taux hs.
     *
     * @return int|null Returns the taux hs.
     */
    public function getTauxHs(): ?int {
        return $this->tauxHs;
    }

    /**
     * Get the type remun hs.
     *
     * @return string|null Returns the type remun hs.
     */
    public function getTypeRemunHs(): ?string {
        return $this->typeRemunHs;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setCodeEtablissement(?int $codeEtablissement): LignesHsmsaEmploye {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setCodeUnite(?string $codeUnite): LignesHsmsaEmploye {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the mt hs.
     *
     * @param int|null $mtHs The mt hs.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setMtHs(?int $mtHs): LignesHsmsaEmploye {
        $this->mtHs = $mtHs;
        return $this;
    }

    /**
     * Set the nb hs.
     *
     * @param float|null $nbHs The nb hs.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setNbHs(?float $nbHs): LignesHsmsaEmploye {
        $this->nbHs = $nbHs;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setNumLigne(?string $numLigne): LignesHsmsaEmploye {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesHsmsaEmploye {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero employe2.
     *
     * @param string|null $numeroEmploye2 The numero employe2.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setNumeroEmploye2(?string $numeroEmploye2): LignesHsmsaEmploye {
        $this->numeroEmploye2 = $numeroEmploye2;
        return $this;
    }

    /**
     * Set the per deb.
     *
     * @param DateTime|null $perDeb The per deb.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setPerDeb(?DateTime $perDeb): LignesHsmsaEmploye {
        $this->perDeb = $perDeb;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): LignesHsmsaEmploye {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the taux hs.
     *
     * @param int|null $tauxHs The taux hs.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setTauxHs(?int $tauxHs): LignesHsmsaEmploye {
        $this->tauxHs = $tauxHs;
        return $this;
    }

    /**
     * Set the type remun hs.
     *
     * @param string|null $typeRemunHs The type remun hs.
     * @return LignesHsmsaEmploye Returns this Lignes hsmsa employe.
     */
    public function setTypeRemunHs(?string $typeRemunHs): LignesHsmsaEmploye {
        $this->typeRemunHs = $typeRemunHs;
        return $this;
    }
}
