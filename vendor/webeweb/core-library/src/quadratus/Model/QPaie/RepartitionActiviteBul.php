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
 * Repartition activite bul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RepartitionActiviteBul {

    /**
     * Code service.
     *
     * @var string|null
     */
    private $codeService;

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
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
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
     * @return RepartitionActiviteBul Returns this Repartition activite bul.
     */
    public function setCodeService(?string $codeService): RepartitionActiviteBul {
        $this->codeService = $codeService;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return RepartitionActiviteBul Returns this Repartition activite bul.
     */
    public function setIndicePeriode(?int $indicePeriode): RepartitionActiviteBul {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RepartitionActiviteBul Returns this Repartition activite bul.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RepartitionActiviteBul {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return RepartitionActiviteBul Returns this Repartition activite bul.
     */
    public function setPeriode(?DateTime $periode): RepartitionActiviteBul {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float|null $tauxVentilation The taux ventilation.
     * @return RepartitionActiviteBul Returns this Repartition activite bul.
     */
    public function setTauxVentilation(?float $tauxVentilation): RepartitionActiviteBul {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }
}
