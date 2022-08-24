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
 * Repartition activite ana.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RepartitionActiviteAna {

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

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
     * @return RepartitionActiviteAna Returns this Repartition activite ana.
     */
    public function setCentre(?string $centre): RepartitionActiviteAna {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return RepartitionActiviteAna Returns this Repartition activite ana.
     */
    public function setNature(?string $nature): RepartitionActiviteAna {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RepartitionActiviteAna Returns this Repartition activite ana.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RepartitionActiviteAna {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float|null $tauxVentilation The taux ventilation.
     * @return RepartitionActiviteAna Returns this Repartition activite ana.
     */
    public function setTauxVentilation(?float $tauxVentilation): RepartitionActiviteAna {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }
}
