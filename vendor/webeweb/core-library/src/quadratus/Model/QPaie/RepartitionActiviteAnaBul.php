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
 * Repartition activite ana bul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RepartitionActiviteAnaBul {

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

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
     * Get the centre.
     *
     * @return string|null Returns the centre.
     */
    public function getCentre(): ?string {
        return $this->centre;
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
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
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
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return RepartitionActiviteAnaBul Returns this Repartition activite ana bul.
     */
    public function setCentre(?string $centre): RepartitionActiviteAnaBul {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return RepartitionActiviteAnaBul Returns this Repartition activite ana bul.
     */
    public function setIndicePeriode(?int $indicePeriode): RepartitionActiviteAnaBul {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return RepartitionActiviteAnaBul Returns this Repartition activite ana bul.
     */
    public function setNature(?string $nature): RepartitionActiviteAnaBul {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RepartitionActiviteAnaBul Returns this Repartition activite ana bul.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RepartitionActiviteAnaBul {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return RepartitionActiviteAnaBul Returns this Repartition activite ana bul.
     */
    public function setPeriode(?DateTime $periode): RepartitionActiviteAnaBul {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float|null $tauxVentilation The taux ventilation.
     * @return RepartitionActiviteAnaBul Returns this Repartition activite ana bul.
     */
    public function setTauxVentilation(?float $tauxVentilation): RepartitionActiviteAnaBul {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }
}
