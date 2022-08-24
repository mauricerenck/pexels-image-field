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

/**
 * Devis zbe.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisZbe {

    /**
     * Batiment.
     *
     * @var string|null
     */
    private $batiment;

    /**
     * Etage.
     *
     * @var string|null
     */
    private $etage;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Zone geographique.
     *
     * @var string|null
     */
    private $zoneGeographique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the batiment.
     *
     * @return string|null Returns the batiment.
     */
    public function getBatiment(): ?string {
        return $this->batiment;
    }

    /**
     * Get the etage.
     *
     * @return string|null Returns the etage.
     */
    public function getEtage(): ?string {
        return $this->etage;
    }

    /**
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
    }

    /**
     * Get the zone geographique.
     *
     * @return string|null Returns the zone geographique.
     */
    public function getZoneGeographique(): ?string {
        return $this->zoneGeographique;
    }

    /**
     * Set the batiment.
     *
     * @param string|null $batiment The batiment.
     * @return DevisZbe Returns this Devis zbe.
     */
    public function setBatiment(?string $batiment): DevisZbe {
        $this->batiment = $batiment;
        return $this;
    }

    /**
     * Set the etage.
     *
     * @param string|null $etage The etage.
     * @return DevisZbe Returns this Devis zbe.
     */
    public function setEtage(?string $etage): DevisZbe {
        $this->etage = $etage;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisZbe Returns this Devis zbe.
     */
    public function setNumDevis(?string $numDevis): DevisZbe {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the zone geographique.
     *
     * @param string|null $zoneGeographique The zone geographique.
     * @return DevisZbe Returns this Devis zbe.
     */
    public function setZoneGeographique(?string $zoneGeographique): DevisZbe {
        $this->zoneGeographique = $zoneGeographique;
        return $this;
    }
}
