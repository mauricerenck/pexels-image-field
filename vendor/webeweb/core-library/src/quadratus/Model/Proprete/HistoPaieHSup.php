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
 * Histo paie h sup.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoPaieHSup {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Nb h sup.
     *
     * @var float|null
     */
    private $nbHSup;

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
     * Get the nb h sup.
     *
     * @return float|null Returns the nb h sup.
     */
    public function getNbHSup(): ?float {
        return $this->nbHSup;
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
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoPaieHSup Returns this Histo paie h sup.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoPaieHSup {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the nb h sup.
     *
     * @param float|null $nbHSup The nb h sup.
     * @return HistoPaieHSup Returns this Histo paie h sup.
     */
    public function setNbHSup(?float $nbHSup): HistoPaieHSup {
        $this->nbHSup = $nbHSup;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaieHSup Returns this Histo paie h sup.
     */
    public function setPeriode(?DateTime $periode): HistoPaieHSup {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float|null $pourcentHSup The pourcent h sup.
     * @return HistoPaieHSup Returns this Histo paie h sup.
     */
    public function setPourcentHSup(?float $pourcentHSup): HistoPaieHSup {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }
}
