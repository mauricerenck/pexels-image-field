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
 * Heures effectuees.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HeuresEffectuees {

    /**
     * Date jour.
     *
     * @var DateTime|null
     */
    private $dateJour;

    /**
     * H deb am.
     *
     * @var string|null
     */
    private $hDebAm;

    /**
     * H deb pm.
     *
     * @var string|null
     */
    private $hDebPm;

    /**
     * H fin am.
     *
     * @var string|null
     */
    private $hFinAm;

    /**
     * H fin pm.
     *
     * @var string|null
     */
    private $hFinPm;

    /**
     * Nb h absence cp.
     *
     * @var float|null
     */
    private $nbHAbsenceCp;

    /**
     * Nb h majo.
     *
     * @var float|null
     */
    private $nbHMajo;

    /**
     * Nb h nuit.
     *
     * @var float|null
     */
    private $nbHNuit;

    /**
     * Nb h repos comp pris.
     *
     * @var float|null
     */
    private $nbHReposCompPris;

    /**
     * Nb h repos remplace pris.
     *
     * @var float|null
     */
    private $nbHReposRemplacePris;

    /**
     * Nb h travail reel.
     *
     * @var float|null
     */
    private $nbHTravailReel;

    /**
     * Nb hjfnt.
     *
     * @var float|null
     */
    private $nbHjfnt;

    /**
     * Nb j repos recup pris.
     *
     * @var float|null
     */
    private $nbJReposRecupPris;

    /**
     * Nb jour cp pris.
     *
     * @var float|null
     */
    private $nbJourCpPris;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date jour.
     *
     * @return DateTime|null Returns the date jour.
     */
    public function getDateJour(): ?DateTime {
        return $this->dateJour;
    }

    /**
     * Get the h deb am.
     *
     * @return string|null Returns the h deb am.
     */
    public function getHDebAm(): ?string {
        return $this->hDebAm;
    }

    /**
     * Get the h deb pm.
     *
     * @return string|null Returns the h deb pm.
     */
    public function getHDebPm(): ?string {
        return $this->hDebPm;
    }

    /**
     * Get the h fin am.
     *
     * @return string|null Returns the h fin am.
     */
    public function getHFinAm(): ?string {
        return $this->hFinAm;
    }

    /**
     * Get the h fin pm.
     *
     * @return string|null Returns the h fin pm.
     */
    public function getHFinPm(): ?string {
        return $this->hFinPm;
    }

    /**
     * Get the nb h absence cp.
     *
     * @return float|null Returns the nb h absence cp.
     */
    public function getNbHAbsenceCp(): ?float {
        return $this->nbHAbsenceCp;
    }

    /**
     * Get the nb h majo.
     *
     * @return float|null Returns the nb h majo.
     */
    public function getNbHMajo(): ?float {
        return $this->nbHMajo;
    }

    /**
     * Get the nb h nuit.
     *
     * @return float|null Returns the nb h nuit.
     */
    public function getNbHNuit(): ?float {
        return $this->nbHNuit;
    }

    /**
     * Get the nb h repos comp pris.
     *
     * @return float|null Returns the nb h repos comp pris.
     */
    public function getNbHReposCompPris(): ?float {
        return $this->nbHReposCompPris;
    }

    /**
     * Get the nb h repos remplace pris.
     *
     * @return float|null Returns the nb h repos remplace pris.
     */
    public function getNbHReposRemplacePris(): ?float {
        return $this->nbHReposRemplacePris;
    }

    /**
     * Get the nb h travail reel.
     *
     * @return float|null Returns the nb h travail reel.
     */
    public function getNbHTravailReel(): ?float {
        return $this->nbHTravailReel;
    }

    /**
     * Get the nb hjfnt.
     *
     * @return float|null Returns the nb hjfnt.
     */
    public function getNbHjfnt(): ?float {
        return $this->nbHjfnt;
    }

    /**
     * Get the nb j repos recup pris.
     *
     * @return float|null Returns the nb j repos recup pris.
     */
    public function getNbJReposRecupPris(): ?float {
        return $this->nbJReposRecupPris;
    }

    /**
     * Get the nb jour cp pris.
     *
     * @return float|null Returns the nb jour cp pris.
     */
    public function getNbJourCpPris(): ?float {
        return $this->nbJourCpPris;
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
     * Set the date jour.
     *
     * @param DateTime|null $dateJour The date jour.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setDateJour(?DateTime $dateJour): HeuresEffectuees {
        $this->dateJour = $dateJour;
        return $this;
    }

    /**
     * Set the h deb am.
     *
     * @param string|null $hDebAm The h deb am.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setHDebAm(?string $hDebAm): HeuresEffectuees {
        $this->hDebAm = $hDebAm;
        return $this;
    }

    /**
     * Set the h deb pm.
     *
     * @param string|null $hDebPm The h deb pm.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setHDebPm(?string $hDebPm): HeuresEffectuees {
        $this->hDebPm = $hDebPm;
        return $this;
    }

    /**
     * Set the h fin am.
     *
     * @param string|null $hFinAm The h fin am.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setHFinAm(?string $hFinAm): HeuresEffectuees {
        $this->hFinAm = $hFinAm;
        return $this;
    }

    /**
     * Set the h fin pm.
     *
     * @param string|null $hFinPm The h fin pm.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setHFinPm(?string $hFinPm): HeuresEffectuees {
        $this->hFinPm = $hFinPm;
        return $this;
    }

    /**
     * Set the nb h absence cp.
     *
     * @param float|null $nbHAbsenceCp The nb h absence cp.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHAbsenceCp(?float $nbHAbsenceCp): HeuresEffectuees {
        $this->nbHAbsenceCp = $nbHAbsenceCp;
        return $this;
    }

    /**
     * Set the nb h majo.
     *
     * @param float|null $nbHMajo The nb h majo.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHMajo(?float $nbHMajo): HeuresEffectuees {
        $this->nbHMajo = $nbHMajo;
        return $this;
    }

    /**
     * Set the nb h nuit.
     *
     * @param float|null $nbHNuit The nb h nuit.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHNuit(?float $nbHNuit): HeuresEffectuees {
        $this->nbHNuit = $nbHNuit;
        return $this;
    }

    /**
     * Set the nb h repos comp pris.
     *
     * @param float|null $nbHReposCompPris The nb h repos comp pris.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHReposCompPris(?float $nbHReposCompPris): HeuresEffectuees {
        $this->nbHReposCompPris = $nbHReposCompPris;
        return $this;
    }

    /**
     * Set the nb h repos remplace pris.
     *
     * @param float|null $nbHReposRemplacePris The nb h repos remplace pris.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHReposRemplacePris(?float $nbHReposRemplacePris): HeuresEffectuees {
        $this->nbHReposRemplacePris = $nbHReposRemplacePris;
        return $this;
    }

    /**
     * Set the nb h travail reel.
     *
     * @param float|null $nbHTravailReel The nb h travail reel.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHTravailReel(?float $nbHTravailReel): HeuresEffectuees {
        $this->nbHTravailReel = $nbHTravailReel;
        return $this;
    }

    /**
     * Set the nb hjfnt.
     *
     * @param float|null $nbHjfnt The nb hjfnt.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbHjfnt(?float $nbHjfnt): HeuresEffectuees {
        $this->nbHjfnt = $nbHjfnt;
        return $this;
    }

    /**
     * Set the nb j repos recup pris.
     *
     * @param float|null $nbJReposRecupPris The nb j repos recup pris.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbJReposRecupPris(?float $nbJReposRecupPris): HeuresEffectuees {
        $this->nbJReposRecupPris = $nbJReposRecupPris;
        return $this;
    }

    /**
     * Set the nb jour cp pris.
     *
     * @param float|null $nbJourCpPris The nb jour cp pris.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNbJourCpPris(?float $nbJourCpPris): HeuresEffectuees {
        $this->nbJourCpPris = $nbJourCpPris;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return HeuresEffectuees Returns this Heures effectuees.
     */
    public function setNumeroEmploye(?string $numeroEmploye): HeuresEffectuees {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }
}
