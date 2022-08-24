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

/**
 * Ventilations auto.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class VentilationsAuto {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Code ventilation.
     *
     * @var string|null
     */
    private $codeVentilation;

    /**
     * Compte ventilation.
     *
     * @var string|null
     */
    private $compteVentilation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the code ventilation.
     *
     * @return string|null Returns the code ventilation.
     */
    public function getCodeVentilation(): ?string {
        return $this->codeVentilation;
    }

    /**
     * Get the compte ventilation.
     *
     * @return string|null Returns the compte ventilation.
     */
    public function getCompteVentilation(): ?string {
        return $this->compteVentilation;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return VentilationsAuto Returns this Ventilations auto.
     */
    public function setCodeJournal(?string $codeJournal): VentilationsAuto {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code ventilation.
     *
     * @param string|null $codeVentilation The code ventilation.
     * @return VentilationsAuto Returns this Ventilations auto.
     */
    public function setCodeVentilation(?string $codeVentilation): VentilationsAuto {
        $this->codeVentilation = $codeVentilation;
        return $this;
    }

    /**
     * Set the compte ventilation.
     *
     * @param string|null $compteVentilation The compte ventilation.
     * @return VentilationsAuto Returns this Ventilations auto.
     */
    public function setCompteVentilation(?string $compteVentilation): VentilationsAuto {
        $this->compteVentilation = $compteVentilation;
        return $this;
    }
}
