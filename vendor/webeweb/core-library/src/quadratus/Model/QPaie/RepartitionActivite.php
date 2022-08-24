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

/**
 * Repartition activite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RepartitionActivite {

    /**
     * Code service.
     *
     * @var string|null
     */
    private $codeService;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Taux ventilation.
     *
     * @var float|null
     */
    private $tauxVentilation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code service.
     *
     * @return string|null Returns the code service.
     */
    public function getCodeService(): ?string {
        return $this->codeService;
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
     * Get the taux ventilation.
     *
     * @return float|null Returns the taux ventilation.
     */
    public function getTauxVentilation(): ?float {
        return $this->tauxVentilation;
    }

    /**
     * Set the code service.
     *
     * @param string|null $codeService The code service.
     * @return RepartitionActivite Returns this Repartition activite.
     */
    public function setCodeService(?string $codeService): RepartitionActivite {
        $this->codeService = $codeService;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RepartitionActivite Returns this Repartition activite.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RepartitionActivite {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float|null $tauxVentilation The taux ventilation.
     * @return RepartitionActivite Returns this Repartition activite.
     */
    public function setTauxVentilation(?float $tauxVentilation): RepartitionActivite {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }
}
