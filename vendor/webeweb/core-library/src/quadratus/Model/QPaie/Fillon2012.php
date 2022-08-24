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
 * Fillon2012.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Fillon2012 {

    /**
     * Coeff.
     *
     * @var float|null
     */
    private $coeff;

    /**
     * Force.
     *
     * @var bool|null
     */
    private $force;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Nb h sup fillon.
     *
     * @var float|null
     */
    private $nbHSupFillon;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Reduc fillon.
     *
     * @var float|null
     */
    private $reducFillon;

    /**
     * Reduc fillon majo he.
     *
     * @var float|null
     */
    private $reducFillonMajoHe;

    /**
     * Rmb.
     *
     * @var float|null
     */
    private $rmb;

    /**
     * Rmb majo he.
     *
     * @var float|null
     */
    private $rmbMajoHe;

    /**
     * Smic m.
     *
     * @var float|null
     */
    private $smicM;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the coeff.
     *
     * @return float|null Returns the coeff.
     */
    public function getCoeff(): ?float {
        return $this->coeff;
    }

    /**
     * Get the force.
     *
     * @return bool|null Returns the force.
     */
    public function getForce(): ?bool {
        return $this->force;
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
     * Get the nb h sup fillon.
     *
     * @return float|null Returns the nb h sup fillon.
     */
    public function getNbHSupFillon(): ?float {
        return $this->nbHSupFillon;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the reduc fillon.
     *
     * @return float|null Returns the reduc fillon.
     */
    public function getReducFillon(): ?float {
        return $this->reducFillon;
    }

    /**
     * Get the reduc fillon majo he.
     *
     * @return float|null Returns the reduc fillon majo he.
     */
    public function getReducFillonMajoHe(): ?float {
        return $this->reducFillonMajoHe;
    }

    /**
     * Get the rmb.
     *
     * @return float|null Returns the rmb.
     */
    public function getRmb(): ?float {
        return $this->rmb;
    }

    /**
     * Get the rmb majo he.
     *
     * @return float|null Returns the rmb majo he.
     */
    public function getRmbMajoHe(): ?float {
        return $this->rmbMajoHe;
    }

    /**
     * Get the smic m.
     *
     * @return float|null Returns the smic m.
     */
    public function getSmicM(): ?float {
        return $this->smicM;
    }

    /**
     * Set the coeff.
     *
     * @param float|null $coeff The coeff.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setCoeff(?float $coeff): Fillon2012 {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Set the force.
     *
     * @param bool|null $force The force.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setForce(?bool $force): Fillon2012 {
        $this->force = $force;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setIndicePeriode(?int $indicePeriode): Fillon2012 {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb h sup fillon.
     *
     * @param float|null $nbHSupFillon The nb h sup fillon.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setNbHSupFillon(?float $nbHSupFillon): Fillon2012 {
        $this->nbHSupFillon = $nbHSupFillon;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Fillon2012 {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setPeriode(?DateTime $periode): Fillon2012 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the reduc fillon.
     *
     * @param float|null $reducFillon The reduc fillon.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setReducFillon(?float $reducFillon): Fillon2012 {
        $this->reducFillon = $reducFillon;
        return $this;
    }

    /**
     * Set the reduc fillon majo he.
     *
     * @param float|null $reducFillonMajoHe The reduc fillon majo he.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setReducFillonMajoHe(?float $reducFillonMajoHe): Fillon2012 {
        $this->reducFillonMajoHe = $reducFillonMajoHe;
        return $this;
    }

    /**
     * Set the rmb.
     *
     * @param float|null $rmb The rmb.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setRmb(?float $rmb): Fillon2012 {
        $this->rmb = $rmb;
        return $this;
    }

    /**
     * Set the rmb majo he.
     *
     * @param float|null $rmbMajoHe The rmb majo he.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setRmbMajoHe(?float $rmbMajoHe): Fillon2012 {
        $this->rmbMajoHe = $rmbMajoHe;
        return $this;
    }

    /**
     * Set the smic m.
     *
     * @param float|null $smicM The smic m.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setSmicM(?float $smicM): Fillon2012 {
        $this->smicM = $smicM;
        return $this;
    }
}
