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
 * Lignes msa penibilite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesMsaPenibilite {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code risque1.
     *
     * @var string|null
     */
    private $codeRisque1;

    /**
     * Code risque10.
     *
     * @var string|null
     */
    private $codeRisque10;

    /**
     * Code risque2.
     *
     * @var string|null
     */
    private $codeRisque2;

    /**
     * Code risque3.
     *
     * @var string|null
     */
    private $codeRisque3;

    /**
     * Code risque4.
     *
     * @var string|null
     */
    private $codeRisque4;

    /**
     * Code risque5.
     *
     * @var string|null
     */
    private $codeRisque5;

    /**
     * Code risque6.
     *
     * @var string|null
     */
    private $codeRisque6;

    /**
     * Code risque7.
     *
     * @var string|null
     */
    private $codeRisque7;

    /**
     * Code risque8.
     *
     * @var string|null
     */
    private $codeRisque8;

    /**
     * Code risque9.
     *
     * @var string|null
     */
    private $codeRisque9;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Dt deb penibilite.
     *
     * @var DateTime|null
     */
    private $dtDebPenibilite;

    /**
     * Dt deb per.
     *
     * @var DateTime|null
     */
    private $dtDebPer;

    /**
     * Dt fin penibilite.
     *
     * @var DateTime|null
     */
    private $dtFinPenibilite;

    /**
     * Dt fin per.
     *
     * @var DateTime|null
     */
    private $dtFinPer;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

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
     * Get the code risque1.
     *
     * @return string|null Returns the code risque1.
     */
    public function getCodeRisque1(): ?string {
        return $this->codeRisque1;
    }

    /**
     * Get the code risque10.
     *
     * @return string|null Returns the code risque10.
     */
    public function getCodeRisque10(): ?string {
        return $this->codeRisque10;
    }

    /**
     * Get the code risque2.
     *
     * @return string|null Returns the code risque2.
     */
    public function getCodeRisque2(): ?string {
        return $this->codeRisque2;
    }

    /**
     * Get the code risque3.
     *
     * @return string|null Returns the code risque3.
     */
    public function getCodeRisque3(): ?string {
        return $this->codeRisque3;
    }

    /**
     * Get the code risque4.
     *
     * @return string|null Returns the code risque4.
     */
    public function getCodeRisque4(): ?string {
        return $this->codeRisque4;
    }

    /**
     * Get the code risque5.
     *
     * @return string|null Returns the code risque5.
     */
    public function getCodeRisque5(): ?string {
        return $this->codeRisque5;
    }

    /**
     * Get the code risque6.
     *
     * @return string|null Returns the code risque6.
     */
    public function getCodeRisque6(): ?string {
        return $this->codeRisque6;
    }

    /**
     * Get the code risque7.
     *
     * @return string|null Returns the code risque7.
     */
    public function getCodeRisque7(): ?string {
        return $this->codeRisque7;
    }

    /**
     * Get the code risque8.
     *
     * @return string|null Returns the code risque8.
     */
    public function getCodeRisque8(): ?string {
        return $this->codeRisque8;
    }

    /**
     * Get the code risque9.
     *
     * @return string|null Returns the code risque9.
     */
    public function getCodeRisque9(): ?string {
        return $this->codeRisque9;
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
     * Get the dt deb penibilite.
     *
     * @return DateTime|null Returns the dt deb penibilite.
     */
    public function getDtDebPenibilite(): ?DateTime {
        return $this->dtDebPenibilite;
    }

    /**
     * Get the dt deb per.
     *
     * @return DateTime|null Returns the dt deb per.
     */
    public function getDtDebPer(): ?DateTime {
        return $this->dtDebPer;
    }

    /**
     * Get the dt fin penibilite.
     *
     * @return DateTime|null Returns the dt fin penibilite.
     */
    public function getDtFinPenibilite(): ?DateTime {
        return $this->dtFinPenibilite;
    }

    /**
     * Get the dt fin per.
     *
     * @return DateTime|null Returns the dt fin per.
     */
    public function getDtFinPer(): ?DateTime {
        return $this->dtFinPer;
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
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeEtablissement(?int $codeEtablissement): LignesMsaPenibilite {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code risque1.
     *
     * @param string|null $codeRisque1 The code risque1.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque1(?string $codeRisque1): LignesMsaPenibilite {
        $this->codeRisque1 = $codeRisque1;
        return $this;
    }

    /**
     * Set the code risque10.
     *
     * @param string|null $codeRisque10 The code risque10.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque10(?string $codeRisque10): LignesMsaPenibilite {
        $this->codeRisque10 = $codeRisque10;
        return $this;
    }

    /**
     * Set the code risque2.
     *
     * @param string|null $codeRisque2 The code risque2.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque2(?string $codeRisque2): LignesMsaPenibilite {
        $this->codeRisque2 = $codeRisque2;
        return $this;
    }

    /**
     * Set the code risque3.
     *
     * @param string|null $codeRisque3 The code risque3.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque3(?string $codeRisque3): LignesMsaPenibilite {
        $this->codeRisque3 = $codeRisque3;
        return $this;
    }

    /**
     * Set the code risque4.
     *
     * @param string|null $codeRisque4 The code risque4.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque4(?string $codeRisque4): LignesMsaPenibilite {
        $this->codeRisque4 = $codeRisque4;
        return $this;
    }

    /**
     * Set the code risque5.
     *
     * @param string|null $codeRisque5 The code risque5.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque5(?string $codeRisque5): LignesMsaPenibilite {
        $this->codeRisque5 = $codeRisque5;
        return $this;
    }

    /**
     * Set the code risque6.
     *
     * @param string|null $codeRisque6 The code risque6.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque6(?string $codeRisque6): LignesMsaPenibilite {
        $this->codeRisque6 = $codeRisque6;
        return $this;
    }

    /**
     * Set the code risque7.
     *
     * @param string|null $codeRisque7 The code risque7.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque7(?string $codeRisque7): LignesMsaPenibilite {
        $this->codeRisque7 = $codeRisque7;
        return $this;
    }

    /**
     * Set the code risque8.
     *
     * @param string|null $codeRisque8 The code risque8.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque8(?string $codeRisque8): LignesMsaPenibilite {
        $this->codeRisque8 = $codeRisque8;
        return $this;
    }

    /**
     * Set the code risque9.
     *
     * @param string|null $codeRisque9 The code risque9.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeRisque9(?string $codeRisque9): LignesMsaPenibilite {
        $this->codeRisque9 = $codeRisque9;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setCodeUnite(?string $codeUnite): LignesMsaPenibilite {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the dt deb penibilite.
     *
     * @param DateTime|null $dtDebPenibilite The dt deb penibilite.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setDtDebPenibilite(?DateTime $dtDebPenibilite): LignesMsaPenibilite {
        $this->dtDebPenibilite = $dtDebPenibilite;
        return $this;
    }

    /**
     * Set the dt deb per.
     *
     * @param DateTime|null $dtDebPer The dt deb per.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setDtDebPer(?DateTime $dtDebPer): LignesMsaPenibilite {
        $this->dtDebPer = $dtDebPer;
        return $this;
    }

    /**
     * Set the dt fin penibilite.
     *
     * @param DateTime|null $dtFinPenibilite The dt fin penibilite.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setDtFinPenibilite(?DateTime $dtFinPenibilite): LignesMsaPenibilite {
        $this->dtFinPenibilite = $dtFinPenibilite;
        return $this;
    }

    /**
     * Set the dt fin per.
     *
     * @param DateTime|null $dtFinPer The dt fin per.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setDtFinPer(?DateTime $dtFinPer): LignesMsaPenibilite {
        $this->dtFinPer = $dtFinPer;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesMsaPenibilite {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesMsaPenibilite Returns this Lignes msa penibilite.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): LignesMsaPenibilite {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }
}
