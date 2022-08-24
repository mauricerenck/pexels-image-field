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
 * Regularisation af.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RegularisationAf {

    /**
     * Base af.
     *
     * @var float|null
     */
    private $baseAf;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Indice bul deb.
     *
     * @var int|null
     */
    private $indiceBulDeb;

    /**
     * Indice bul fin.
     *
     * @var int|null
     */
    private $indiceBulFin;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Per bul deb.
     *
     * @var DateTime|null
     */
    private $perBulDeb;

    /**
     * Per bul fin.
     *
     * @var DateTime|null
     */
    private $perBulFin;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the base af.
     *
     * @return float|null Returns the base af.
     */
    public function getBaseAf(): ?float {
        return $this->baseAf;
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the indice bul deb.
     *
     * @return int|null Returns the indice bul deb.
     */
    public function getIndiceBulDeb(): ?int {
        return $this->indiceBulDeb;
    }

    /**
     * Get the indice bul fin.
     *
     * @return int|null Returns the indice bul fin.
     */
    public function getIndiceBulFin(): ?int {
        return $this->indiceBulFin;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
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
     * Get the per bul deb.
     *
     * @return DateTime|null Returns the per bul deb.
     */
    public function getPerBulDeb(): ?DateTime {
        return $this->perBulDeb;
    }

    /**
     * Get the per bul fin.
     *
     * @return DateTime|null Returns the per bul fin.
     */
    public function getPerBulFin(): ?DateTime {
        return $this->perBulFin;
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
     * Set the base af.
     *
     * @param float|null $baseAf The base af.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setBaseAf(?float $baseAf): RegularisationAf {
        $this->baseAf = $baseAf;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setCodeLibelle(?string $codeLibelle): RegularisationAf {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the indice bul deb.
     *
     * @param int|null $indiceBulDeb The indice bul deb.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setIndiceBulDeb(?int $indiceBulDeb): RegularisationAf {
        $this->indiceBulDeb = $indiceBulDeb;
        return $this;
    }

    /**
     * Set the indice bul fin.
     *
     * @param int|null $indiceBulFin The indice bul fin.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setIndiceBulFin(?int $indiceBulFin): RegularisationAf {
        $this->indiceBulFin = $indiceBulFin;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setIndicePeriode(?int $indicePeriode): RegularisationAf {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RegularisationAf {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the per bul deb.
     *
     * @param DateTime|null $perBulDeb The per bul deb.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setPerBulDeb(?DateTime $perBulDeb): RegularisationAf {
        $this->perBulDeb = $perBulDeb;
        return $this;
    }

    /**
     * Set the per bul fin.
     *
     * @param DateTime|null $perBulFin The per bul fin.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setPerBulFin(?DateTime $perBulFin): RegularisationAf {
        $this->perBulFin = $perBulFin;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return RegularisationAf Returns this Regularisation af.
     */
    public function setPeriode(?DateTime $periode): RegularisationAf {
        $this->periode = $periode;
        return $this;
    }
}
