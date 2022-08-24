<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Histo paie type2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoPaieType2 {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string|null
     */
    private $codePrime;

    /**
     * Nb heures.
     *
     * @var float|null
     */
    private $nbHeures;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Taux majoration.
     *
     * @var float|null
     */
    private $tauxMajoration;

    /**
     * Type dnjf.
     *
     * @var string|null
     */
    private $typeDnjf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string|null Returns the code prime.
     */
    public function getCodePrime(): ?string {
        return $this->codePrime;
    }

    /**
     * Get the nb heures.
     *
     * @return float|null Returns the nb heures.
     */
    public function getNbHeures(): ?float {
        return $this->nbHeures;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the taux majoration.
     *
     * @return float|null Returns the taux majoration.
     */
    public function getTauxMajoration(): ?float {
        return $this->tauxMajoration;
    }

    /**
     * Get the type dnjf.
     *
     * @return string|null Returns the type dnjf.
     */
    public function getTypeDnjf(): ?string {
        return $this->typeDnjf;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoPaieType2 Returns this Histo paie type2.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoPaieType2 {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string|null $codePrime The code prime.
     * @return HistoPaieType2 Returns this Histo paie type2.
     */
    public function setCodePrime(?string $codePrime): HistoPaieType2 {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float|null $nbHeures The nb heures.
     * @return HistoPaieType2 Returns this Histo paie type2.
     */
    public function setNbHeures(?float $nbHeures): HistoPaieType2 {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaieType2 Returns this Histo paie type2.
     */
    public function setPeriode(?DateTime $periode): HistoPaieType2 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux majoration.
     *
     * @param float|null $tauxMajoration The taux majoration.
     * @return HistoPaieType2 Returns this Histo paie type2.
     */
    public function setTauxMajoration(?float $tauxMajoration): HistoPaieType2 {
        $this->tauxMajoration = $tauxMajoration;
        return $this;
    }

    /**
     * Set the type dnjf.
     *
     * @param string|null $typeDnjf The type dnjf.
     * @return HistoPaieType2 Returns this Histo paie type2.
     */
    public function setTypeDnjf(?string $typeDnjf): HistoPaieType2 {
        $this->typeDnjf = $typeDnjf;
        return $this;
    }
}
