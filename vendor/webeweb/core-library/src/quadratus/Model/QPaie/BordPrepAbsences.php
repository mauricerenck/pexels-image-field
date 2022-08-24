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
 * Bord prep absences.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class BordPrepAbsences {

    /**
     * Id.
     *
     * @var int|null
     */
    private $id;

    /**
     * Nbh sais.
     *
     * @var float|null
     */
    private $nbhSais;

    /**
     * Nbj sais.
     *
     * @var float|null
     */
    private $nbjSais;

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
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Type abs cp.
     *
     * @var string|null
     */
    private $typeAbsCp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Get the nbh sais.
     *
     * @return float|null Returns the nbh sais.
     */
    public function getNbhSais(): ?float {
        return $this->nbhSais;
    }

    /**
     * Get the nbj sais.
     *
     * @return float|null Returns the nbj sais.
     */
    public function getNbjSais(): ?float {
        return $this->nbjSais;
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
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb(): ?DateTime {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin(): ?DateTime {
        return $this->periodeFin;
    }

    /**
     * Get the type abs cp.
     *
     * @return string|null Returns the type abs cp.
     */
    public function getTypeAbsCp(): ?string {
        return $this->typeAbsCp;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setId(?int $id): BordPrepAbsences {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nbh sais.
     *
     * @param float|null $nbhSais The nbh sais.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setNbhSais(?float $nbhSais): BordPrepAbsences {
        $this->nbhSais = $nbhSais;
        return $this;
    }

    /**
     * Set the nbj sais.
     *
     * @param float|null $nbjSais The nbj sais.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setNbjSais(?float $nbjSais): BordPrepAbsences {
        $this->nbjSais = $nbjSais;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setNumeroEmploye(?string $numeroEmploye): BordPrepAbsences {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setPeriode(?DateTime $periode): BordPrepAbsences {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): BordPrepAbsences {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setPeriodeFin(?DateTime $periodeFin): BordPrepAbsences {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type abs cp.
     *
     * @param string|null $typeAbsCp The type abs cp.
     * @return BordPrepAbsences Returns this Bord prep absences.
     */
    public function setTypeAbsCp(?string $typeAbsCp): BordPrepAbsences {
        $this->typeAbsCp = $typeAbsCp;
        return $this;
    }
}
