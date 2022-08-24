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
 * Prepa paie h sup.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class PrepaPaieHSup {

    /**
     * Code lib hs.
     *
     * @var string|null
     */
    private $codeLibHs;

    /**
     * Nb h sup.
     *
     * @var float|null
     */
    private $nbHSup;

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
     * Pourcent h sup.
     *
     * @var float|null
     */
    private $pourcentHSup;

    /**
     * Semaine.
     *
     * @var string|null
     */
    private $semaine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code lib hs.
     *
     * @return string|null Returns the code lib hs.
     */
    public function getCodeLibHs(): ?string {
        return $this->codeLibHs;
    }

    /**
     * Get the nb h sup.
     *
     * @return float|null Returns the nb h sup.
     */
    public function getNbHSup(): ?float {
        return $this->nbHSup;
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
     * Get the pourcent h sup.
     *
     * @return float|null Returns the pourcent h sup.
     */
    public function getPourcentHSup(): ?float {
        return $this->pourcentHSup;
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
     * Set the code lib hs.
     *
     * @param string|null $codeLibHs The code lib hs.
     * @return PrepaPaieHSup Returns this Prepa paie h sup.
     */
    public function setCodeLibHs(?string $codeLibHs): PrepaPaieHSup {
        $this->codeLibHs = $codeLibHs;
        return $this;
    }

    /**
     * Set the nb h sup.
     *
     * @param float|null $nbHSup The nb h sup.
     * @return PrepaPaieHSup Returns this Prepa paie h sup.
     */
    public function setNbHSup(?float $nbHSup): PrepaPaieHSup {
        $this->nbHSup = $nbHSup;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return PrepaPaieHSup Returns this Prepa paie h sup.
     */
    public function setNumeroEmploye(?string $numeroEmploye): PrepaPaieHSup {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PrepaPaieHSup Returns this Prepa paie h sup.
     */
    public function setPeriode(?DateTime $periode): PrepaPaieHSup {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float|null $pourcentHSup The pourcent h sup.
     * @return PrepaPaieHSup Returns this Prepa paie h sup.
     */
    public function setPourcentHSup(?float $pourcentHSup): PrepaPaieHSup {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string|null $semaine The semaine.
     * @return PrepaPaieHSup Returns this Prepa paie h sup.
     */
    public function setSemaine(?string $semaine): PrepaPaieHSup {
        $this->semaine = $semaine;
        return $this;
    }
}
