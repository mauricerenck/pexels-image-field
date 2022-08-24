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
 * H abs prepa paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HAbsPrepaPaie {

    /**
     * Nb h non effectue.
     *
     * @var float|null
     */
    private $nbHNonEffectue;

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
     * Semaine.
     *
     * @var string|null
     */
    private $semaine;

    /**
     * Type absence.
     *
     * @var string|null
     */
    private $typeAbsence;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the nb h non effectue.
     *
     * @return float|null Returns the nb h non effectue.
     */
    public function getNbHNonEffectue(): ?float {
        return $this->nbHNonEffectue;
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
     * Get the semaine.
     *
     * @return string|null Returns the semaine.
     */
    public function getSemaine(): ?string {
        return $this->semaine;
    }

    /**
     * Get the type absence.
     *
     * @return string|null Returns the type absence.
     */
    public function getTypeAbsence(): ?string {
        return $this->typeAbsence;
    }

    /**
     * Set the nb h non effectue.
     *
     * @param float|null $nbHNonEffectue The nb h non effectue.
     * @return HAbsPrepaPaie Returns this H abs prepa paie.
     */
    public function setNbHNonEffectue(?float $nbHNonEffectue): HAbsPrepaPaie {
        $this->nbHNonEffectue = $nbHNonEffectue;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return HAbsPrepaPaie Returns this H abs prepa paie.
     */
    public function setNumeroEmploye(?string $numeroEmploye): HAbsPrepaPaie {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HAbsPrepaPaie Returns this H abs prepa paie.
     */
    public function setPeriode(?DateTime $periode): HAbsPrepaPaie {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string|null $semaine The semaine.
     * @return HAbsPrepaPaie Returns this H abs prepa paie.
     */
    public function setSemaine(?string $semaine): HAbsPrepaPaie {
        $this->semaine = $semaine;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string|null $typeAbsence The type absence.
     * @return HAbsPrepaPaie Returns this H abs prepa paie.
     */
    public function setTypeAbsence(?string $typeAbsence): HAbsPrepaPaie {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }
}
