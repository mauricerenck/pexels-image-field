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
 * Devis lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisLignes {

    /**
     * Batiment.
     *
     * @var string|null
     */
    private $batiment;

    /**
     * Code local.
     *
     * @var string|null
     */
    private $codeLocal;

    /**
     * Code revetement.
     *
     * @var string|null
     */
    private $codeRevetement;

    /**
     * Etage.
     *
     * @var string|null
     */
    private $etage;

    /**
     * Identification.
     *
     * @var string|null
     */
    private $identification;

    /**
     * Libelle local.
     *
     * @var string|null
     */
    private $libelleLocal;

    /**
     * Libelle revetement.
     *
     * @var string|null
     */
    private $libelleRevetement;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num programme.
     *
     * @var int|null
     */
    private $numProgramme;

    /**
     * Sol mur.
     *
     * @var string|null
     */
    private $solMur;

    /**
     * Surface.
     *
     * @var float|null
     */
    private $surface;

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
     * Get the code local.
     *
     * @return string|null Returns the code local.
     */
    public function getCodeLocal(): ?string {
        return $this->codeLocal;
    }

    /**
     * Get the code revetement.
     *
     * @return string|null Returns the code revetement.
     */
    public function getCodeRevetement(): ?string {
        return $this->codeRevetement;
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
     * Get the identification.
     *
     * @return string|null Returns the identification.
     */
    public function getIdentification(): ?string {
        return $this->identification;
    }

    /**
     * Get the libelle local.
     *
     * @return string|null Returns the libelle local.
     */
    public function getLibelleLocal(): ?string {
        return $this->libelleLocal;
    }

    /**
     * Get the libelle revetement.
     *
     * @return string|null Returns the libelle revetement.
     */
    public function getLibelleRevetement(): ?string {
        return $this->libelleRevetement;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the num programme.
     *
     * @return int|null Returns the num programme.
     */
    public function getNumProgramme(): ?int {
        return $this->numProgramme;
    }

    /**
     * Get the sol mur.
     *
     * @return string|null Returns the sol mur.
     */
    public function getSolMur(): ?string {
        return $this->solMur;
    }

    /**
     * Get the surface.
     *
     * @return float|null Returns the surface.
     */
    public function getSurface(): ?float {
        return $this->surface;
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
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setBatiment(?string $batiment): DevisLignes {
        $this->batiment = $batiment;
        return $this;
    }

    /**
     * Set the code local.
     *
     * @param string|null $codeLocal The code local.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setCodeLocal(?string $codeLocal): DevisLignes {
        $this->codeLocal = $codeLocal;
        return $this;
    }

    /**
     * Set the code revetement.
     *
     * @param string|null $codeRevetement The code revetement.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setCodeRevetement(?string $codeRevetement): DevisLignes {
        $this->codeRevetement = $codeRevetement;
        return $this;
    }

    /**
     * Set the etage.
     *
     * @param string|null $etage The etage.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setEtage(?string $etage): DevisLignes {
        $this->etage = $etage;
        return $this;
    }

    /**
     * Set the identification.
     *
     * @param string|null $identification The identification.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setIdentification(?string $identification): DevisLignes {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Set the libelle local.
     *
     * @param string|null $libelleLocal The libelle local.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setLibelleLocal(?string $libelleLocal): DevisLignes {
        $this->libelleLocal = $libelleLocal;
        return $this;
    }

    /**
     * Set the libelle revetement.
     *
     * @param string|null $libelleRevetement The libelle revetement.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setLibelleRevetement(?string $libelleRevetement): DevisLignes {
        $this->libelleRevetement = $libelleRevetement;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setNumDevis(?string $numDevis): DevisLignes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setNumLigne(?int $numLigne): DevisLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int|null $numProgramme The num programme.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setNumProgramme(?int $numProgramme): DevisLignes {
        $this->numProgramme = $numProgramme;
        return $this;
    }

    /**
     * Set the sol mur.
     *
     * @param string|null $solMur The sol mur.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setSolMur(?string $solMur): DevisLignes {
        $this->solMur = $solMur;
        return $this;
    }

    /**
     * Set the surface.
     *
     * @param float|null $surface The surface.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setSurface(?float $surface): DevisLignes {
        $this->surface = $surface;
        return $this;
    }

    /**
     * Set the zone geographique.
     *
     * @param string|null $zoneGeographique The zone geographique.
     * @return DevisLignes Returns this Devis lignes.
     */
    public function setZoneGeographique(?string $zoneGeographique): DevisLignes {
        $this->zoneGeographique = $zoneGeographique;
        return $this;
    }
}
