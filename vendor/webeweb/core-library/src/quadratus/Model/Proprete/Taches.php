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

use DateTime;

/**
 * Taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Taches {

    /**
     * Auto incr.
     *
     * @var int|null
     */
    private $autoIncr;

    /**
     * Cadence.
     *
     * @var float|null
     */
    private $cadence;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code analytique.
     *
     * @var string|null
     */
    private $codeAnalytique;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code dern sem gen.
     *
     * @var string|null
     */
    private $codeDernSemGen;

    /**
     * Code prime dimanche1 type2.
     *
     * @var string|null
     */
    private $codePrimeDimanche1Type2;

    /**
     * Code prime jf1 type2.
     *
     * @var string|null
     */
    private $codePrimeJf1Type2;

    /**
     * Code prime nuit1 type2.
     *
     * @var string|null
     */
    private $codePrimeNuit1Type2;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Code tache type.
     *
     * @var string|null
     */
    private $codeTacheType;

    /**
     * Descriptif.
     *
     * @var string|null
     */
    private $descriptif;

    /**
     * Dt dern sem gen.
     *
     * @var DateTime|null
     */
    private $dtDernSemGen;

    /**
     * Duree budget.
     *
     * @var float|null
     */
    private $dureeBudget;

    /**
     * Fiche poste.
     *
     * @var string|null
     */
    private $fichePoste;

    /**
     * Gestion hotellerie.
     *
     * @var bool|null
     */
    private $gestionHotellerie;

    /**
     * Maj dim normal type2.
     *
     * @var float|null
     */
    private $majDimNormalType2;

    /**
     * Maj jf normal type2.
     *
     * @var float|null
     */
    private $majJfNormalType2;

    /**
     * Maj nuit normal type2.
     *
     * @var float|null
     */
    private $majNuitNormalType2;

    /**
     * Niveau qualif.
     *
     * @var int|null
     */
    private $niveauQualif;

    /**
     * Non oeuvrant.
     *
     * @var bool|null
     */
    private $nonOeuvrant;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Planning dern sem prioritaire.
     *
     * @var bool|null
     */
    private $planningDernSemPrioritaire;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Suivi heures.
     *
     * @var bool|null
     */
    private $suiviHeures;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the auto incr.
     *
     * @return int|null Returns the auto incr.
     */
    public function getAutoIncr(): ?int {
        return $this->autoIncr;
    }

    /**
     * Get the cadence.
     *
     * @return float|null Returns the cadence.
     */
    public function getCadence(): ?float {
        return $this->cadence;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code analytique.
     *
     * @return string|null Returns the code analytique.
     */
    public function getCodeAnalytique(): ?string {
        return $this->codeAnalytique;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code dern sem gen.
     *
     * @return string|null Returns the code dern sem gen.
     */
    public function getCodeDernSemGen(): ?string {
        return $this->codeDernSemGen;
    }

    /**
     * Get the code prime dimanche1 type2.
     *
     * @return string|null Returns the code prime dimanche1 type2.
     */
    public function getCodePrimeDimanche1Type2(): ?string {
        return $this->codePrimeDimanche1Type2;
    }

    /**
     * Get the code prime jf1 type2.
     *
     * @return string|null Returns the code prime jf1 type2.
     */
    public function getCodePrimeJf1Type2(): ?string {
        return $this->codePrimeJf1Type2;
    }

    /**
     * Get the code prime nuit1 type2.
     *
     * @return string|null Returns the code prime nuit1 type2.
     */
    public function getCodePrimeNuit1Type2(): ?string {
        return $this->codePrimeNuit1Type2;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the code tache type.
     *
     * @return string|null Returns the code tache type.
     */
    public function getCodeTacheType(): ?string {
        return $this->codeTacheType;
    }

    /**
     * Get the descriptif.
     *
     * @return string|null Returns the descriptif.
     */
    public function getDescriptif(): ?string {
        return $this->descriptif;
    }

    /**
     * Get the dt dern sem gen.
     *
     * @return DateTime|null Returns the dt dern sem gen.
     */
    public function getDtDernSemGen(): ?DateTime {
        return $this->dtDernSemGen;
    }

    /**
     * Get the duree budget.
     *
     * @return float|null Returns the duree budget.
     */
    public function getDureeBudget(): ?float {
        return $this->dureeBudget;
    }

    /**
     * Get the fiche poste.
     *
     * @return string|null Returns the fiche poste.
     */
    public function getFichePoste(): ?string {
        return $this->fichePoste;
    }

    /**
     * Get the gestion hotellerie.
     *
     * @return bool|null Returns the gestion hotellerie.
     */
    public function getGestionHotellerie(): ?bool {
        return $this->gestionHotellerie;
    }

    /**
     * Get the maj dim normal type2.
     *
     * @return float|null Returns the maj dim normal type2.
     */
    public function getMajDimNormalType2(): ?float {
        return $this->majDimNormalType2;
    }

    /**
     * Get the maj jf normal type2.
     *
     * @return float|null Returns the maj jf normal type2.
     */
    public function getMajJfNormalType2(): ?float {
        return $this->majJfNormalType2;
    }

    /**
     * Get the maj nuit normal type2.
     *
     * @return float|null Returns the maj nuit normal type2.
     */
    public function getMajNuitNormalType2(): ?float {
        return $this->majNuitNormalType2;
    }

    /**
     * Get the niveau qualif.
     *
     * @return int|null Returns the niveau qualif.
     */
    public function getNiveauQualif(): ?int {
        return $this->niveauQualif;
    }

    /**
     * Get the non oeuvrant.
     *
     * @return bool|null Returns the non oeuvrant.
     */
    public function getNonOeuvrant(): ?bool {
        return $this->nonOeuvrant;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the planning dern sem prioritaire.
     *
     * @return bool|null Returns the planning dern sem prioritaire.
     */
    public function getPlanningDernSemPrioritaire(): ?bool {
        return $this->planningDernSemPrioritaire;
    }

    /**
     * Get the poste rent.
     *
     * @return string|null Returns the poste rent.
     */
    public function getPosteRent(): ?string {
        return $this->posteRent;
    }

    /**
     * Get the suivi heures.
     *
     * @return bool|null Returns the suivi heures.
     */
    public function getSuiviHeures(): ?bool {
        return $this->suiviHeures;
    }

    /**
     * Set the auto incr.
     *
     * @param int|null $autoIncr The auto incr.
     * @return Taches Returns this Taches.
     */
    public function setAutoIncr(?int $autoIncr): Taches {
        $this->autoIncr = $autoIncr;
        return $this;
    }

    /**
     * Set the cadence.
     *
     * @param float|null $cadence The cadence.
     * @return Taches Returns this Taches.
     */
    public function setCadence(?float $cadence): Taches {
        $this->cadence = $cadence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Taches Returns this Taches.
     */
    public function setCodeAffaire(?string $codeAffaire): Taches {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code analytique.
     *
     * @param string|null $codeAnalytique The code analytique.
     * @return Taches Returns this Taches.
     */
    public function setCodeAnalytique(?string $codeAnalytique): Taches {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return Taches Returns this Taches.
     */
    public function setCodeChantier(?string $codeChantier): Taches {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Taches Returns this Taches.
     */
    public function setCodeClient(?string $codeClient): Taches {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code dern sem gen.
     *
     * @param string|null $codeDernSemGen The code dern sem gen.
     * @return Taches Returns this Taches.
     */
    public function setCodeDernSemGen(?string $codeDernSemGen): Taches {
        $this->codeDernSemGen = $codeDernSemGen;
        return $this;
    }

    /**
     * Set the code prime dimanche1 type2.
     *
     * @param string|null $codePrimeDimanche1Type2 The code prime dimanche1 type2.
     * @return Taches Returns this Taches.
     */
    public function setCodePrimeDimanche1Type2(?string $codePrimeDimanche1Type2): Taches {
        $this->codePrimeDimanche1Type2 = $codePrimeDimanche1Type2;
        return $this;
    }

    /**
     * Set the code prime jf1 type2.
     *
     * @param string|null $codePrimeJf1Type2 The code prime jf1 type2.
     * @return Taches Returns this Taches.
     */
    public function setCodePrimeJf1Type2(?string $codePrimeJf1Type2): Taches {
        $this->codePrimeJf1Type2 = $codePrimeJf1Type2;
        return $this;
    }

    /**
     * Set the code prime nuit1 type2.
     *
     * @param string|null $codePrimeNuit1Type2 The code prime nuit1 type2.
     * @return Taches Returns this Taches.
     */
    public function setCodePrimeNuit1Type2(?string $codePrimeNuit1Type2): Taches {
        $this->codePrimeNuit1Type2 = $codePrimeNuit1Type2;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return Taches Returns this Taches.
     */
    public function setCodeTache(?string $codeTache): Taches {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tache type.
     *
     * @param string|null $codeTacheType The code tache type.
     * @return Taches Returns this Taches.
     */
    public function setCodeTacheType(?string $codeTacheType): Taches {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return Taches Returns this Taches.
     */
    public function setDescriptif(?string $descriptif): Taches {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the dt dern sem gen.
     *
     * @param DateTime|null $dtDernSemGen The dt dern sem gen.
     * @return Taches Returns this Taches.
     */
    public function setDtDernSemGen(?DateTime $dtDernSemGen): Taches {
        $this->dtDernSemGen = $dtDernSemGen;
        return $this;
    }

    /**
     * Set the duree budget.
     *
     * @param float|null $dureeBudget The duree budget.
     * @return Taches Returns this Taches.
     */
    public function setDureeBudget(?float $dureeBudget): Taches {
        $this->dureeBudget = $dureeBudget;
        return $this;
    }

    /**
     * Set the fiche poste.
     *
     * @param string|null $fichePoste The fiche poste.
     * @return Taches Returns this Taches.
     */
    public function setFichePoste(?string $fichePoste): Taches {
        $this->fichePoste = $fichePoste;
        return $this;
    }

    /**
     * Set the gestion hotellerie.
     *
     * @param bool|null $gestionHotellerie The gestion hotellerie.
     * @return Taches Returns this Taches.
     */
    public function setGestionHotellerie(?bool $gestionHotellerie): Taches {
        $this->gestionHotellerie = $gestionHotellerie;
        return $this;
    }

    /**
     * Set the maj dim normal type2.
     *
     * @param float|null $majDimNormalType2 The maj dim normal type2.
     * @return Taches Returns this Taches.
     */
    public function setMajDimNormalType2(?float $majDimNormalType2): Taches {
        $this->majDimNormalType2 = $majDimNormalType2;
        return $this;
    }

    /**
     * Set the maj jf normal type2.
     *
     * @param float|null $majJfNormalType2 The maj jf normal type2.
     * @return Taches Returns this Taches.
     */
    public function setMajJfNormalType2(?float $majJfNormalType2): Taches {
        $this->majJfNormalType2 = $majJfNormalType2;
        return $this;
    }

    /**
     * Set the maj nuit normal type2.
     *
     * @param float|null $majNuitNormalType2 The maj nuit normal type2.
     * @return Taches Returns this Taches.
     */
    public function setMajNuitNormalType2(?float $majNuitNormalType2): Taches {
        $this->majNuitNormalType2 = $majNuitNormalType2;
        return $this;
    }

    /**
     * Set the niveau qualif.
     *
     * @param int|null $niveauQualif The niveau qualif.
     * @return Taches Returns this Taches.
     */
    public function setNiveauQualif(?int $niveauQualif): Taches {
        $this->niveauQualif = $niveauQualif;
        return $this;
    }

    /**
     * Set the non oeuvrant.
     *
     * @param bool|null $nonOeuvrant The non oeuvrant.
     * @return Taches Returns this Taches.
     */
    public function setNonOeuvrant(?bool $nonOeuvrant): Taches {
        $this->nonOeuvrant = $nonOeuvrant;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return Taches Returns this Taches.
     */
    public function setNumBt(?int $numBt): Taches {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the planning dern sem prioritaire.
     *
     * @param bool|null $planningDernSemPrioritaire The planning dern sem prioritaire.
     * @return Taches Returns this Taches.
     */
    public function setPlanningDernSemPrioritaire(?bool $planningDernSemPrioritaire): Taches {
        $this->planningDernSemPrioritaire = $planningDernSemPrioritaire;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return Taches Returns this Taches.
     */
    public function setPosteRent(?string $posteRent): Taches {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the suivi heures.
     *
     * @param bool|null $suiviHeures The suivi heures.
     * @return Taches Returns this Taches.
     */
    public function setSuiviHeures(?bool $suiviHeures): Taches {
        $this->suiviHeures = $suiviHeures;
        return $this;
    }
}
