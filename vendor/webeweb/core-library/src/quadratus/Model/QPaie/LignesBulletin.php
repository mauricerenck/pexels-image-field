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
 * Lignes bulletin.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesBulletin {

    /**
     * Anal diff.
     *
     * @var bool|null
     */
    private $analDiff;

    /**
     * Avantage nature.
     *
     * @var bool|null
     */
    private $avantageNature;

    /**
     * Base sans reintegration.
     *
     * @var float|null
     */
    private $baseSansReintegration;

    /**
     * Cle lig bul.
     *
     * @var string|null
     */
    private $cleLigBul;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code calcul.
     *
     * @var string|null
     */
    private $codeCalcul;

    /**
     * Condition spec.
     *
     * @var string|null
     */
    private $conditionSpec;

    /**
     * Conge paye.
     *
     * @var bool|null
     */
    private $congePaye;

    /**
     * Cumul cout glob.
     *
     * @var bool|null
     */
    private $cumulCoutGlob;

    /**
     * Edition base.
     *
     * @var bool|null
     */
    private $editionBase;

    /**
     * Edition cot patronale.
     *
     * @var bool|null
     */
    private $editionCotPatronale;

    /**
     * Edition resultat.
     *
     * @var bool|null
     */
    private $editionResultat;

    /**
     * Edition taux sal.
     *
     * @var bool|null
     */
    private $editionTauxSal;

    /**
     * Flag force.
     *
     * @var bool|null
     */
    private $flagForce;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Integ net paye.
     *
     * @var bool|null
     */
    private $integNetPaye;

    /**
     * Intervient brut al.
     *
     * @var bool|null
     */
    private $intervientBrutAl;

    /**
     * Intervient indem preca.
     *
     * @var bool|null
     */
    private $intervientIndemPreca;

    /**
     * Intervient taux h ab cp.
     *
     * @var string|null
     */
    private $intervientTauxHAbCp;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien.
     *
     * @var int|null
     */
    private $lien;

    /**
     * Montant1.
     *
     * @var float|null
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float|null
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float|null
     */
    private $montant3;

    /**
     * Montant4.
     *
     * @var float|null
     */
    private $montant4;

    /**
     * Montant global.
     *
     * @var float|null
     */
    private $montantGlobal;

    /**
     * Montant salarial.
     *
     * @var float|null
     */
    private $montantSalarial;

    /**
     * Neutre.
     *
     * @var bool|null
     */
    private $neutre;

    /**
     * Num cumul bulletin.
     *
     * @var int|null
     */
    private $numCumulBulletin;

    /**
     * Num cumul patron.
     *
     * @var int|null
     */
    private $numCumulPatron;

    /**
     * Num ligne bulletin.
     *
     * @var int|null
     */
    private $numLigneBulletin;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Pas editer.
     *
     * @var bool|null
     */
    private $pasEditer;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pp soumis taxe.
     *
     * @var bool|null
     */
    private $ppSoumisTaxe;

    /**
     * Prime non proratisee.
     *
     * @var bool|null
     */
    private $primeNonProratisee;

    /**
     * Regle calcul.
     *
     * @var string|null
     */
    private $regleCalcul;

    /**
     * Regle taux.
     *
     * @var string|null
     */
    private $regleTaux;

    /**
     * Soumis abattement.
     *
     * @var bool|null
     */
    private $soumisAbattement;

    /**
     * Soumis crds.
     *
     * @var bool|null
     */
    private $soumisCrds;

    /**
     * Soumis csg.
     *
     * @var bool|null
     */
    private $soumisCsg;

    /**
     * Type absence.
     *
     * @var string|null
     */
    private $typeAbsence;

    /**
     * Type acompte.
     *
     * @var string|null
     */
    private $typeAcompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the anal diff.
     *
     * @return bool|null Returns the anal diff.
     */
    public function getAnalDiff(): ?bool {
        return $this->analDiff;
    }

    /**
     * Get the avantage nature.
     *
     * @return bool|null Returns the avantage nature.
     */
    public function getAvantageNature(): ?bool {
        return $this->avantageNature;
    }

    /**
     * Get the base sans reintegration.
     *
     * @return float|null Returns the base sans reintegration.
     */
    public function getBaseSansReintegration(): ?float {
        return $this->baseSansReintegration;
    }

    /**
     * Get the cle lig bul.
     *
     * @return string|null Returns the cle lig bul.
     */
    public function getCleLigBul(): ?string {
        return $this->cleLigBul;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the code calcul.
     *
     * @return string|null Returns the code calcul.
     */
    public function getCodeCalcul(): ?string {
        return $this->codeCalcul;
    }

    /**
     * Get the condition spec.
     *
     * @return string|null Returns the condition spec.
     */
    public function getConditionSpec(): ?string {
        return $this->conditionSpec;
    }

    /**
     * Get the conge paye.
     *
     * @return bool|null Returns the conge paye.
     */
    public function getCongePaye(): ?bool {
        return $this->congePaye;
    }

    /**
     * Get the cumul cout glob.
     *
     * @return bool|null Returns the cumul cout glob.
     */
    public function getCumulCoutGlob(): ?bool {
        return $this->cumulCoutGlob;
    }

    /**
     * Get the edition base.
     *
     * @return bool|null Returns the edition base.
     */
    public function getEditionBase(): ?bool {
        return $this->editionBase;
    }

    /**
     * Get the edition cot patronale.
     *
     * @return bool|null Returns the edition cot patronale.
     */
    public function getEditionCotPatronale(): ?bool {
        return $this->editionCotPatronale;
    }

    /**
     * Get the edition resultat.
     *
     * @return bool|null Returns the edition resultat.
     */
    public function getEditionResultat(): ?bool {
        return $this->editionResultat;
    }

    /**
     * Get the edition taux sal.
     *
     * @return bool|null Returns the edition taux sal.
     */
    public function getEditionTauxSal(): ?bool {
        return $this->editionTauxSal;
    }

    /**
     * Get the flag force.
     *
     * @return bool|null Returns the flag force.
     */
    public function getFlagForce(): ?bool {
        return $this->flagForce;
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
     * Get the integ net paye.
     *
     * @return bool|null Returns the integ net paye.
     */
    public function getIntegNetPaye(): ?bool {
        return $this->integNetPaye;
    }

    /**
     * Get the intervient brut al.
     *
     * @return bool|null Returns the intervient brut al.
     */
    public function getIntervientBrutAl(): ?bool {
        return $this->intervientBrutAl;
    }

    /**
     * Get the intervient indem preca.
     *
     * @return bool|null Returns the intervient indem preca.
     */
    public function getIntervientIndemPreca(): ?bool {
        return $this->intervientIndemPreca;
    }

    /**
     * Get the intervient taux h ab cp.
     *
     * @return string|null Returns the intervient taux h ab cp.
     */
    public function getIntervientTauxHAbCp(): ?string {
        return $this->intervientTauxHAbCp;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the lien.
     *
     * @return int|null Returns the lien.
     */
    public function getLien(): ?int {
        return $this->lien;
    }

    /**
     * Get the montant1.
     *
     * @return float|null Returns the montant1.
     */
    public function getMontant1(): ?float {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float|null Returns the montant2.
     */
    public function getMontant2(): ?float {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float|null Returns the montant3.
     */
    public function getMontant3(): ?float {
        return $this->montant3;
    }

    /**
     * Get the montant4.
     *
     * @return float|null Returns the montant4.
     */
    public function getMontant4(): ?float {
        return $this->montant4;
    }

    /**
     * Get the montant global.
     *
     * @return float|null Returns the montant global.
     */
    public function getMontantGlobal(): ?float {
        return $this->montantGlobal;
    }

    /**
     * Get the montant salarial.
     *
     * @return float|null Returns the montant salarial.
     */
    public function getMontantSalarial(): ?float {
        return $this->montantSalarial;
    }

    /**
     * Get the neutre.
     *
     * @return bool|null Returns the neutre.
     */
    public function getNeutre(): ?bool {
        return $this->neutre;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int|null Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin(): ?int {
        return $this->numCumulBulletin;
    }

    /**
     * Get the num cumul patron.
     *
     * @return int|null Returns the num cumul patron.
     */
    public function getNumCumulPatron(): ?int {
        return $this->numCumulPatron;
    }

    /**
     * Get the num ligne bulletin.
     *
     * @return int|null Returns the num ligne bulletin.
     */
    public function getNumLigneBulletin(): ?int {
        return $this->numLigneBulletin;
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
     * Get the pas editer.
     *
     * @return bool|null Returns the pas editer.
     */
    public function getPasEditer(): ?bool {
        return $this->pasEditer;
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
     * Get the pp soumis taxe.
     *
     * @return bool|null Returns the pp soumis taxe.
     */
    public function getPpSoumisTaxe(): ?bool {
        return $this->ppSoumisTaxe;
    }

    /**
     * Get the prime non proratisee.
     *
     * @return bool|null Returns the prime non proratisee.
     */
    public function getPrimeNonProratisee(): ?bool {
        return $this->primeNonProratisee;
    }

    /**
     * Get the regle calcul.
     *
     * @return string|null Returns the regle calcul.
     */
    public function getRegleCalcul(): ?string {
        return $this->regleCalcul;
    }

    /**
     * Get the regle taux.
     *
     * @return string|null Returns the regle taux.
     */
    public function getRegleTaux(): ?string {
        return $this->regleTaux;
    }

    /**
     * Get the soumis abattement.
     *
     * @return bool|null Returns the soumis abattement.
     */
    public function getSoumisAbattement(): ?bool {
        return $this->soumisAbattement;
    }

    /**
     * Get the soumis crds.
     *
     * @return bool|null Returns the soumis crds.
     */
    public function getSoumisCrds(): ?bool {
        return $this->soumisCrds;
    }

    /**
     * Get the soumis csg.
     *
     * @return bool|null Returns the soumis csg.
     */
    public function getSoumisCsg(): ?bool {
        return $this->soumisCsg;
    }

    /**
     * Get the type absence.
     *
     * @return string|null Returns the type absence.
     */
    public function getTypeAbsence(): ?string {
        return $this->typeAbsence;
    }

    /**
     * Get the type acompte.
     *
     * @return string|null Returns the type acompte.
     */
    public function getTypeAcompte(): ?string {
        return $this->typeAcompte;
    }

    /**
     * Set the anal diff.
     *
     * @param bool|null $analDiff The anal diff.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setAnalDiff(?bool $analDiff): LignesBulletin {
        $this->analDiff = $analDiff;
        return $this;
    }

    /**
     * Set the avantage nature.
     *
     * @param bool|null $avantageNature The avantage nature.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setAvantageNature(?bool $avantageNature): LignesBulletin {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the base sans reintegration.
     *
     * @param float|null $baseSansReintegration The base sans reintegration.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setBaseSansReintegration(?float $baseSansReintegration): LignesBulletin {
        $this->baseSansReintegration = $baseSansReintegration;
        return $this;
    }

    /**
     * Set the cle lig bul.
     *
     * @param string|null $cleLigBul The cle lig bul.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setCleLigBul(?string $cleLigBul): LignesBulletin {
        $this->cleLigBul = $cleLigBul;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setCode(?string $code): LignesBulletin {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code calcul.
     *
     * @param string|null $codeCalcul The code calcul.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setCodeCalcul(?string $codeCalcul): LignesBulletin {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string|null $conditionSpec The condition spec.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setConditionSpec(?string $conditionSpec): LignesBulletin {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the conge paye.
     *
     * @param bool|null $congePaye The conge paye.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setCongePaye(?bool $congePaye): LignesBulletin {
        $this->congePaye = $congePaye;
        return $this;
    }

    /**
     * Set the cumul cout glob.
     *
     * @param bool|null $cumulCoutGlob The cumul cout glob.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setCumulCoutGlob(?bool $cumulCoutGlob): LignesBulletin {
        $this->cumulCoutGlob = $cumulCoutGlob;
        return $this;
    }

    /**
     * Set the edition base.
     *
     * @param bool|null $editionBase The edition base.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setEditionBase(?bool $editionBase): LignesBulletin {
        $this->editionBase = $editionBase;
        return $this;
    }

    /**
     * Set the edition cot patronale.
     *
     * @param bool|null $editionCotPatronale The edition cot patronale.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setEditionCotPatronale(?bool $editionCotPatronale): LignesBulletin {
        $this->editionCotPatronale = $editionCotPatronale;
        return $this;
    }

    /**
     * Set the edition resultat.
     *
     * @param bool|null $editionResultat The edition resultat.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setEditionResultat(?bool $editionResultat): LignesBulletin {
        $this->editionResultat = $editionResultat;
        return $this;
    }

    /**
     * Set the edition taux sal.
     *
     * @param bool|null $editionTauxSal The edition taux sal.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setEditionTauxSal(?bool $editionTauxSal): LignesBulletin {
        $this->editionTauxSal = $editionTauxSal;
        return $this;
    }

    /**
     * Set the flag force.
     *
     * @param bool|null $flagForce The flag force.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setFlagForce(?bool $flagForce): LignesBulletin {
        $this->flagForce = $flagForce;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setIndicePeriode(?int $indicePeriode): LignesBulletin {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the integ net paye.
     *
     * @param bool|null $integNetPaye The integ net paye.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setIntegNetPaye(?bool $integNetPaye): LignesBulletin {
        $this->integNetPaye = $integNetPaye;
        return $this;
    }

    /**
     * Set the intervient brut al.
     *
     * @param bool|null $intervientBrutAl The intervient brut al.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setIntervientBrutAl(?bool $intervientBrutAl): LignesBulletin {
        $this->intervientBrutAl = $intervientBrutAl;
        return $this;
    }

    /**
     * Set the intervient indem preca.
     *
     * @param bool|null $intervientIndemPreca The intervient indem preca.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setIntervientIndemPreca(?bool $intervientIndemPreca): LignesBulletin {
        $this->intervientIndemPreca = $intervientIndemPreca;
        return $this;
    }

    /**
     * Set the intervient taux h ab cp.
     *
     * @param string|null $intervientTauxHAbCp The intervient taux h ab cp.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setIntervientTauxHAbCp(?string $intervientTauxHAbCp): LignesBulletin {
        $this->intervientTauxHAbCp = $intervientTauxHAbCp;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setLibelle(?string $libelle): LignesBulletin {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien.
     *
     * @param int|null $lien The lien.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setLien(?int $lien): LignesBulletin {
        $this->lien = $lien;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setMontant1(?float $montant1): LignesBulletin {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setMontant2(?float $montant2): LignesBulletin {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float|null $montant3 The montant3.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setMontant3(?float $montant3): LignesBulletin {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float|null $montant4 The montant4.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setMontant4(?float $montant4): LignesBulletin {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant global.
     *
     * @param float|null $montantGlobal The montant global.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setMontantGlobal(?float $montantGlobal): LignesBulletin {
        $this->montantGlobal = $montantGlobal;
        return $this;
    }

    /**
     * Set the montant salarial.
     *
     * @param float|null $montantSalarial The montant salarial.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setMontantSalarial(?float $montantSalarial): LignesBulletin {
        $this->montantSalarial = $montantSalarial;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool|null $neutre The neutre.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setNeutre(?bool $neutre): LignesBulletin {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int|null $numCumulBulletin The num cumul bulletin.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setNumCumulBulletin(?int $numCumulBulletin): LignesBulletin {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }

    /**
     * Set the num cumul patron.
     *
     * @param int|null $numCumulPatron The num cumul patron.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setNumCumulPatron(?int $numCumulPatron): LignesBulletin {
        $this->numCumulPatron = $numCumulPatron;
        return $this;
    }

    /**
     * Set the num ligne bulletin.
     *
     * @param int|null $numLigneBulletin The num ligne bulletin.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setNumLigneBulletin(?int $numLigneBulletin): LignesBulletin {
        $this->numLigneBulletin = $numLigneBulletin;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesBulletin {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the pas editer.
     *
     * @param bool|null $pasEditer The pas editer.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setPasEditer(?bool $pasEditer): LignesBulletin {
        $this->pasEditer = $pasEditer;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setPeriode(?DateTime $periode): LignesBulletin {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pp soumis taxe.
     *
     * @param bool|null $ppSoumisTaxe The pp soumis taxe.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setPpSoumisTaxe(?bool $ppSoumisTaxe): LignesBulletin {
        $this->ppSoumisTaxe = $ppSoumisTaxe;
        return $this;
    }

    /**
     * Set the prime non proratisee.
     *
     * @param bool|null $primeNonProratisee The prime non proratisee.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setPrimeNonProratisee(?bool $primeNonProratisee): LignesBulletin {
        $this->primeNonProratisee = $primeNonProratisee;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string|null $regleCalcul The regle calcul.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setRegleCalcul(?string $regleCalcul): LignesBulletin {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regle taux.
     *
     * @param string|null $regleTaux The regle taux.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setRegleTaux(?string $regleTaux): LignesBulletin {
        $this->regleTaux = $regleTaux;
        return $this;
    }

    /**
     * Set the soumis abattement.
     *
     * @param bool|null $soumisAbattement The soumis abattement.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setSoumisAbattement(?bool $soumisAbattement): LignesBulletin {
        $this->soumisAbattement = $soumisAbattement;
        return $this;
    }

    /**
     * Set the soumis crds.
     *
     * @param bool|null $soumisCrds The soumis crds.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setSoumisCrds(?bool $soumisCrds): LignesBulletin {
        $this->soumisCrds = $soumisCrds;
        return $this;
    }

    /**
     * Set the soumis csg.
     *
     * @param bool|null $soumisCsg The soumis csg.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setSoumisCsg(?bool $soumisCsg): LignesBulletin {
        $this->soumisCsg = $soumisCsg;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string|null $typeAbsence The type absence.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setTypeAbsence(?string $typeAbsence): LignesBulletin {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }

    /**
     * Set the type acompte.
     *
     * @param string|null $typeAcompte The type acompte.
     * @return LignesBulletin Returns this Lignes bulletin.
     */
    public function setTypeAcompte(?string $typeAcompte): LignesBulletin {
        $this->typeAcompte = $typeAcompte;
        return $this;
    }
}
