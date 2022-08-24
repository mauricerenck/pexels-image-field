<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Controle salaires.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ControleSalaires {

    /**
     * Brut.
     *
     * @var float|null
     */
    private $brut;

    /**
     * Cotis patronales.
     *
     * @var float|null
     */
    private $cotisPatronales;

    /**
     * Cotis salariales.
     *
     * @var float|null
     */
    private $cotisSalariales;

    /**
     * Heures.
     *
     * @var float|null
     */
    private $heures;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Plafond.
     *
     * @var float|null
     */
    private $plafond;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the brut.
     *
     * @return float|null Returns the brut.
     */
    public function getBrut(): ?float {
        return $this->brut;
    }

    /**
     * Get the cotis patronales.
     *
     * @return float|null Returns the cotis patronales.
     */
    public function getCotisPatronales(): ?float {
        return $this->cotisPatronales;
    }

    /**
     * Get the cotis salariales.
     *
     * @return float|null Returns the cotis salariales.
     */
    public function getCotisSalariales(): ?float {
        return $this->cotisSalariales;
    }

    /**
     * Get the heures.
     *
     * @return float|null Returns the heures.
     */
    public function getHeures(): ?float {
        return $this->heures;
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
     * Get the plafond.
     *
     * @return float|null Returns the plafond.
     */
    public function getPlafond(): ?float {
        return $this->plafond;
    }

    /**
     * Set the brut.
     *
     * @param float|null $brut The brut.
     * @return ControleSalaires Returns this Controle salaires.
     */
    public function setBrut(?float $brut): ControleSalaires {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the cotis patronales.
     *
     * @param float|null $cotisPatronales The cotis patronales.
     * @return ControleSalaires Returns this Controle salaires.
     */
    public function setCotisPatronales(?float $cotisPatronales): ControleSalaires {
        $this->cotisPatronales = $cotisPatronales;
        return $this;
    }

    /**
     * Set the cotis salariales.
     *
     * @param float|null $cotisSalariales The cotis salariales.
     * @return ControleSalaires Returns this Controle salaires.
     */
    public function setCotisSalariales(?float $cotisSalariales): ControleSalaires {
        $this->cotisSalariales = $cotisSalariales;
        return $this;
    }

    /**
     * Set the heures.
     *
     * @param float|null $heures The heures.
     * @return ControleSalaires Returns this Controle salaires.
     */
    public function setHeures(?float $heures): ControleSalaires {
        $this->heures = $heures;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return ControleSalaires Returns this Controle salaires.
     */
    public function setPeriode(?DateTime $periode): ControleSalaires {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the plafond.
     *
     * @param float|null $plafond The plafond.
     * @return ControleSalaires Returns this Controle salaires.
     */
    public function setPlafond(?float $plafond): ControleSalaires {
        $this->plafond = $plafond;
        return $this;
    }
}
