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
 * Grilles type.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class GrillesType {

    /**
     * Code lib h nuit.
     *
     * @var string|null
     */
    private $codeLibHNuit;

    /**
     * Contingent h sup rc.
     *
     * @var float|null
     */
    private $contingentHSupRc;

    /**
     * Contingent h sup rcit.
     *
     * @var float|null
     */
    private $contingentHSupRcit;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Duree hebdo.
     *
     * @var float|null
     */
    private $dureeHebdo;

    /**
     * Duree max hebdo.
     *
     * @var float|null
     */
    private $dureeMaxHebdo;

    /**
     * Duree max hebdo modul.
     *
     * @var float|null
     */
    private $dureeMaxHebdoModul;

    /**
     * Duree max mens.
     *
     * @var float|null
     */
    private $dureeMaxMens;

    /**
     * Duree moy hebdo1.
     *
     * @var float|null
     */
    private $dureeMoyHebdo1;

    /**
     * Duree moy hebdo2.
     *
     * @var float|null
     */
    private $dureeMoyHebdo2;

    /**
     * Duree moy periode1.
     *
     * @var int|null
     */
    private $dureeMoyPeriode1;

    /**
     * Duree moy periode2.
     *
     * @var int|null
     */
    private $dureeMoyPeriode2;

    /**
     * Gestion h nuit.
     *
     * @var bool|null
     */
    private $gestionHNuit;

    /**
     * Gestion jfnt.
     *
     * @var bool|null
     */
    private $gestionJfnt;

    /**
     * Gestion plages horaires.
     *
     * @var bool|null
     */
    private $gestionPlagesHoraires;

    /**
     * H nuit deb.
     *
     * @var string|null
     */
    private $hNuitDeb;

    /**
     * H nuit fin.
     *
     * @var string|null
     */
    private $hNuitFin;

    /**
     * H nuit tx majo.
     *
     * @var float|null
     */
    private $hNuitTxMajo;

    /**
     * Hebdo mens.
     *
     * @var string|null
     */
    private $hebdoMens;

    /**
     * Modulation.
     *
     * @var bool|null
     */
    private $modulation;

    /**
     * Nb heures dans jour.
     *
     * @var float|null
     */
    private $nbHeuresDansJour;

    /**
     * Nb hjf1.
     *
     * @var float|null
     */
    private $nbHjf1;

    /**
     * Nb hjf2.
     *
     * @var float|null
     */
    private $nbHjf2;

    /**
     * Nb hjf3.
     *
     * @var float|null
     */
    private $nbHjf3;

    /**
     * Nb hjf4.
     *
     * @var float|null
     */
    private $nbHjf4;

    /**
     * Nb hjf5.
     *
     * @var float|null
     */
    private $nbHjf5;

    /**
     * Nb hjf6.
     *
     * @var float|null
     */
    private $nbHjf6;

    /**
     * Nb hjf7.
     *
     * @var float|null
     */
    private $nbHjf7;

    /**
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Repos recup.
     *
     * @var bool|null
     */
    private $reposRecup;

    /**
     * Taux repos comp.
     *
     * @var float|null
     */
    private $tauxReposComp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code lib h nuit.
     *
     * @return string|null Returns the code lib h nuit.
     */
    public function getCodeLibHNuit(): ?string {
        return $this->codeLibHNuit;
    }

    /**
     * Get the contingent h sup rc.
     *
     * @return float|null Returns the contingent h sup rc.
     */
    public function getContingentHSupRc(): ?float {
        return $this->contingentHSupRc;
    }

    /**
     * Get the contingent h sup rcit.
     *
     * @return float|null Returns the contingent h sup rcit.
     */
    public function getContingentHSupRcit(): ?float {
        return $this->contingentHSupRcit;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication(): ?DateTime {
        return $this->dateApplication;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the duree hebdo.
     *
     * @return float|null Returns the duree hebdo.
     */
    public function getDureeHebdo(): ?float {
        return $this->dureeHebdo;
    }

    /**
     * Get the duree max hebdo.
     *
     * @return float|null Returns the duree max hebdo.
     */
    public function getDureeMaxHebdo(): ?float {
        return $this->dureeMaxHebdo;
    }

    /**
     * Get the duree max hebdo modul.
     *
     * @return float|null Returns the duree max hebdo modul.
     */
    public function getDureeMaxHebdoModul(): ?float {
        return $this->dureeMaxHebdoModul;
    }

    /**
     * Get the duree max mens.
     *
     * @return float|null Returns the duree max mens.
     */
    public function getDureeMaxMens(): ?float {
        return $this->dureeMaxMens;
    }

    /**
     * Get the duree moy hebdo1.
     *
     * @return float|null Returns the duree moy hebdo1.
     */
    public function getDureeMoyHebdo1(): ?float {
        return $this->dureeMoyHebdo1;
    }

    /**
     * Get the duree moy hebdo2.
     *
     * @return float|null Returns the duree moy hebdo2.
     */
    public function getDureeMoyHebdo2(): ?float {
        return $this->dureeMoyHebdo2;
    }

    /**
     * Get the duree moy periode1.
     *
     * @return int|null Returns the duree moy periode1.
     */
    public function getDureeMoyPeriode1(): ?int {
        return $this->dureeMoyPeriode1;
    }

    /**
     * Get the duree moy periode2.
     *
     * @return int|null Returns the duree moy periode2.
     */
    public function getDureeMoyPeriode2(): ?int {
        return $this->dureeMoyPeriode2;
    }

    /**
     * Get the gestion h nuit.
     *
     * @return bool|null Returns the gestion h nuit.
     */
    public function getGestionHNuit(): ?bool {
        return $this->gestionHNuit;
    }

    /**
     * Get the gestion jfnt.
     *
     * @return bool|null Returns the gestion jfnt.
     */
    public function getGestionJfnt(): ?bool {
        return $this->gestionJfnt;
    }

    /**
     * Get the gestion plages horaires.
     *
     * @return bool|null Returns the gestion plages horaires.
     */
    public function getGestionPlagesHoraires(): ?bool {
        return $this->gestionPlagesHoraires;
    }

    /**
     * Get the h nuit deb.
     *
     * @return string|null Returns the h nuit deb.
     */
    public function getHNuitDeb(): ?string {
        return $this->hNuitDeb;
    }

    /**
     * Get the h nuit fin.
     *
     * @return string|null Returns the h nuit fin.
     */
    public function getHNuitFin(): ?string {
        return $this->hNuitFin;
    }

    /**
     * Get the h nuit tx majo.
     *
     * @return float|null Returns the h nuit tx majo.
     */
    public function getHNuitTxMajo(): ?float {
        return $this->hNuitTxMajo;
    }

    /**
     * Get the hebdo mens.
     *
     * @return string|null Returns the hebdo mens.
     */
    public function getHebdoMens(): ?string {
        return $this->hebdoMens;
    }

    /**
     * Get the modulation.
     *
     * @return bool|null Returns the modulation.
     */
    public function getModulation(): ?bool {
        return $this->modulation;
    }

    /**
     * Get the nb heures dans jour.
     *
     * @return float|null Returns the nb heures dans jour.
     */
    public function getNbHeuresDansJour(): ?float {
        return $this->nbHeuresDansJour;
    }

    /**
     * Get the nb hjf1.
     *
     * @return float|null Returns the nb hjf1.
     */
    public function getNbHjf1(): ?float {
        return $this->nbHjf1;
    }

    /**
     * Get the nb hjf2.
     *
     * @return float|null Returns the nb hjf2.
     */
    public function getNbHjf2(): ?float {
        return $this->nbHjf2;
    }

    /**
     * Get the nb hjf3.
     *
     * @return float|null Returns the nb hjf3.
     */
    public function getNbHjf3(): ?float {
        return $this->nbHjf3;
    }

    /**
     * Get the nb hjf4.
     *
     * @return float|null Returns the nb hjf4.
     */
    public function getNbHjf4(): ?float {
        return $this->nbHjf4;
    }

    /**
     * Get the nb hjf5.
     *
     * @return float|null Returns the nb hjf5.
     */
    public function getNbHjf5(): ?float {
        return $this->nbHjf5;
    }

    /**
     * Get the nb hjf6.
     *
     * @return float|null Returns the nb hjf6.
     */
    public function getNbHjf6(): ?float {
        return $this->nbHjf6;
    }

    /**
     * Get the nb hjf7.
     *
     * @return float|null Returns the nb hjf7.
     */
    public function getNbHjf7(): ?float {
        return $this->nbHjf7;
    }

    /**
     * Get the numero grille type.
     *
     * @return int|null Returns the numero grille type.
     */
    public function getNumeroGrilleType(): ?int {
        return $this->numeroGrilleType;
    }

    /**
     * Get the repos recup.
     *
     * @return bool|null Returns the repos recup.
     */
    public function getReposRecup(): ?bool {
        return $this->reposRecup;
    }

    /**
     * Get the taux repos comp.
     *
     * @return float|null Returns the taux repos comp.
     */
    public function getTauxReposComp(): ?float {
        return $this->tauxReposComp;
    }

    /**
     * Set the code lib h nuit.
     *
     * @param string|null $codeLibHNuit The code lib h nuit.
     * @return GrillesType Returns this Grilles type.
     */
    public function setCodeLibHNuit(?string $codeLibHNuit): GrillesType {
        $this->codeLibHNuit = $codeLibHNuit;
        return $this;
    }

    /**
     * Set the contingent h sup rc.
     *
     * @param float|null $contingentHSupRc The contingent h sup rc.
     * @return GrillesType Returns this Grilles type.
     */
    public function setContingentHSupRc(?float $contingentHSupRc): GrillesType {
        $this->contingentHSupRc = $contingentHSupRc;
        return $this;
    }

    /**
     * Set the contingent h sup rcit.
     *
     * @param float|null $contingentHSupRcit The contingent h sup rcit.
     * @return GrillesType Returns this Grilles type.
     */
    public function setContingentHSupRcit(?float $contingentHSupRcit): GrillesType {
        $this->contingentHSupRcit = $contingentHSupRcit;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDateApplication(?DateTime $dateApplication): GrillesType {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDateFin(?DateTime $dateFin): GrillesType {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the duree hebdo.
     *
     * @param float|null $dureeHebdo The duree hebdo.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeHebdo(?float $dureeHebdo): GrillesType {
        $this->dureeHebdo = $dureeHebdo;
        return $this;
    }

    /**
     * Set the duree max hebdo.
     *
     * @param float|null $dureeMaxHebdo The duree max hebdo.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMaxHebdo(?float $dureeMaxHebdo): GrillesType {
        $this->dureeMaxHebdo = $dureeMaxHebdo;
        return $this;
    }

    /**
     * Set the duree max hebdo modul.
     *
     * @param float|null $dureeMaxHebdoModul The duree max hebdo modul.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMaxHebdoModul(?float $dureeMaxHebdoModul): GrillesType {
        $this->dureeMaxHebdoModul = $dureeMaxHebdoModul;
        return $this;
    }

    /**
     * Set the duree max mens.
     *
     * @param float|null $dureeMaxMens The duree max mens.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMaxMens(?float $dureeMaxMens): GrillesType {
        $this->dureeMaxMens = $dureeMaxMens;
        return $this;
    }

    /**
     * Set the duree moy hebdo1.
     *
     * @param float|null $dureeMoyHebdo1 The duree moy hebdo1.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyHebdo1(?float $dureeMoyHebdo1): GrillesType {
        $this->dureeMoyHebdo1 = $dureeMoyHebdo1;
        return $this;
    }

    /**
     * Set the duree moy hebdo2.
     *
     * @param float|null $dureeMoyHebdo2 The duree moy hebdo2.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyHebdo2(?float $dureeMoyHebdo2): GrillesType {
        $this->dureeMoyHebdo2 = $dureeMoyHebdo2;
        return $this;
    }

    /**
     * Set the duree moy periode1.
     *
     * @param int|null $dureeMoyPeriode1 The duree moy periode1.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyPeriode1(?int $dureeMoyPeriode1): GrillesType {
        $this->dureeMoyPeriode1 = $dureeMoyPeriode1;
        return $this;
    }

    /**
     * Set the duree moy periode2.
     *
     * @param int|null $dureeMoyPeriode2 The duree moy periode2.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyPeriode2(?int $dureeMoyPeriode2): GrillesType {
        $this->dureeMoyPeriode2 = $dureeMoyPeriode2;
        return $this;
    }

    /**
     * Set the gestion h nuit.
     *
     * @param bool|null $gestionHNuit The gestion h nuit.
     * @return GrillesType Returns this Grilles type.
     */
    public function setGestionHNuit(?bool $gestionHNuit): GrillesType {
        $this->gestionHNuit = $gestionHNuit;
        return $this;
    }

    /**
     * Set the gestion jfnt.
     *
     * @param bool|null $gestionJfnt The gestion jfnt.
     * @return GrillesType Returns this Grilles type.
     */
    public function setGestionJfnt(?bool $gestionJfnt): GrillesType {
        $this->gestionJfnt = $gestionJfnt;
        return $this;
    }

    /**
     * Set the gestion plages horaires.
     *
     * @param bool|null $gestionPlagesHoraires The gestion plages horaires.
     * @return GrillesType Returns this Grilles type.
     */
    public function setGestionPlagesHoraires(?bool $gestionPlagesHoraires): GrillesType {
        $this->gestionPlagesHoraires = $gestionPlagesHoraires;
        return $this;
    }

    /**
     * Set the h nuit deb.
     *
     * @param string|null $hNuitDeb The h nuit deb.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHNuitDeb(?string $hNuitDeb): GrillesType {
        $this->hNuitDeb = $hNuitDeb;
        return $this;
    }

    /**
     * Set the h nuit fin.
     *
     * @param string|null $hNuitFin The h nuit fin.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHNuitFin(?string $hNuitFin): GrillesType {
        $this->hNuitFin = $hNuitFin;
        return $this;
    }

    /**
     * Set the h nuit tx majo.
     *
     * @param float|null $hNuitTxMajo The h nuit tx majo.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHNuitTxMajo(?float $hNuitTxMajo): GrillesType {
        $this->hNuitTxMajo = $hNuitTxMajo;
        return $this;
    }

    /**
     * Set the hebdo mens.
     *
     * @param string|null $hebdoMens The hebdo mens.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHebdoMens(?string $hebdoMens): GrillesType {
        $this->hebdoMens = $hebdoMens;
        return $this;
    }

    /**
     * Set the modulation.
     *
     * @param bool|null $modulation The modulation.
     * @return GrillesType Returns this Grilles type.
     */
    public function setModulation(?bool $modulation): GrillesType {
        $this->modulation = $modulation;
        return $this;
    }

    /**
     * Set the nb heures dans jour.
     *
     * @param float|null $nbHeuresDansJour The nb heures dans jour.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHeuresDansJour(?float $nbHeuresDansJour): GrillesType {
        $this->nbHeuresDansJour = $nbHeuresDansJour;
        return $this;
    }

    /**
     * Set the nb hjf1.
     *
     * @param float|null $nbHjf1 The nb hjf1.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf1(?float $nbHjf1): GrillesType {
        $this->nbHjf1 = $nbHjf1;
        return $this;
    }

    /**
     * Set the nb hjf2.
     *
     * @param float|null $nbHjf2 The nb hjf2.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf2(?float $nbHjf2): GrillesType {
        $this->nbHjf2 = $nbHjf2;
        return $this;
    }

    /**
     * Set the nb hjf3.
     *
     * @param float|null $nbHjf3 The nb hjf3.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf3(?float $nbHjf3): GrillesType {
        $this->nbHjf3 = $nbHjf3;
        return $this;
    }

    /**
     * Set the nb hjf4.
     *
     * @param float|null $nbHjf4 The nb hjf4.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf4(?float $nbHjf4): GrillesType {
        $this->nbHjf4 = $nbHjf4;
        return $this;
    }

    /**
     * Set the nb hjf5.
     *
     * @param float|null $nbHjf5 The nb hjf5.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf5(?float $nbHjf5): GrillesType {
        $this->nbHjf5 = $nbHjf5;
        return $this;
    }

    /**
     * Set the nb hjf6.
     *
     * @param float|null $nbHjf6 The nb hjf6.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf6(?float $nbHjf6): GrillesType {
        $this->nbHjf6 = $nbHjf6;
        return $this;
    }

    /**
     * Set the nb hjf7.
     *
     * @param float|null $nbHjf7 The nb hjf7.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf7(?float $nbHjf7): GrillesType {
        $this->nbHjf7 = $nbHjf7;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): GrillesType {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the repos recup.
     *
     * @param bool|null $reposRecup The repos recup.
     * @return GrillesType Returns this Grilles type.
     */
    public function setReposRecup(?bool $reposRecup): GrillesType {
        $this->reposRecup = $reposRecup;
        return $this;
    }

    /**
     * Set the taux repos comp.
     *
     * @param float|null $tauxReposComp The taux repos comp.
     * @return GrillesType Returns this Grilles type.
     */
    public function setTauxReposComp(?float $tauxReposComp): GrillesType {
        $this->tauxReposComp = $tauxReposComp;
        return $this;
    }
}
