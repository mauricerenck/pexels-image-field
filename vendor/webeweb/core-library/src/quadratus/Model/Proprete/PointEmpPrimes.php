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
 * Point emp primes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointEmpPrimes {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

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
     * Code collabo valid.
     *
     * @var string|null
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string|null
     */
    private $codePrime;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Code tache type bt.
     *
     * @var string|null
     */
    private $codeTacheTypeBt;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Defaut.
     *
     * @var bool|null
     */
    private $defaut;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Nb heure majoration.
     *
     * @var float|null
     */
    private $nbHeureMajoration;

    /**
     * Nombre prime.
     *
     * @var float|null
     */
    private $nombrePrime;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Numero prime.
     *
     * @var int|null
     */
    private $numeroPrime;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Taux prime.
     *
     * @var float|null
     */
    private $tauxPrime;

    /**
     * Type majo.
     *
     * @var string|null
     */
    private $typeMajo;

    /**
     * Type prime.
     *
     * @var string|null
     */
    private $typePrime;

    /**
     * Uniq id synchro.
     *
     * @var string|null
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code collabo valid.
     *
     * @return string|null Returns the code collabo valid.
     */
    public function getCodeCollaboValid(): ?string {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string|null Returns the code prime.
     */
    public function getCodePrime(): ?string {
        return $this->codePrime;
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
     * Get the code tache type bt.
     *
     * @return string|null Returns the code tache type bt.
     */
    public function getCodeTacheTypeBt(): ?string {
        return $this->codeTacheTypeBt;
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
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
     */
    public function getDateValidationSynchro(): ?DateTime {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the defaut.
     *
     * @return bool|null Returns the defaut.
     */
    public function getDefaut(): ?bool {
        return $this->defaut;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the nb heure majoration.
     *
     * @return float|null Returns the nb heure majoration.
     */
    public function getNbHeureMajoration(): ?float {
        return $this->nbHeureMajoration;
    }

    /**
     * Get the nombre prime.
     *
     * @return float|null Returns the nombre prime.
     */
    public function getNombrePrime(): ?float {
        return $this->nombrePrime;
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
     * Get the numero prime.
     *
     * @return int|null Returns the numero prime.
     */
    public function getNumeroPrime(): ?int {
        return $this->numeroPrime;
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
     * Get the taux prime.
     *
     * @return float|null Returns the taux prime.
     */
    public function getTauxPrime(): ?float {
        return $this->tauxPrime;
    }

    /**
     * Get the type majo.
     *
     * @return string|null Returns the type majo.
     */
    public function getTypeMajo(): ?string {
        return $this->typeMajo;
    }

    /**
     * Get the type prime.
     *
     * @return string|null Returns the type prime.
     */
    public function getTypePrime(): ?string {
        return $this->typePrime;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string|null Returns the uniq id synchro.
     */
    public function getUniqIdSynchro(): ?string {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeAffaire(?string $codeAffaire): PointEmpPrimes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeChantier(?string $codeChantier): PointEmpPrimes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeClient(?string $codeClient): PointEmpPrimes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): PointEmpPrimes {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): PointEmpPrimes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeEmploye(?string $codeEmploye): PointEmpPrimes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string|null $codePrime The code prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodePrime(?string $codePrime): PointEmpPrimes {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeTache(?string $codeTache): PointEmpPrimes {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tache type bt.
     *
     * @param string|null $codeTacheTypeBt The code tache type bt.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeTacheTypeBt(?string $codeTacheTypeBt): PointEmpPrimes {
        $this->codeTacheTypeBt = $codeTacheTypeBt;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setDateApplication(?DateTime $dateApplication): PointEmpPrimes {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): PointEmpPrimes {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the defaut.
     *
     * @param bool|null $defaut The defaut.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setDefaut(?bool $defaut): PointEmpPrimes {
        $this->defaut = $defaut;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setEtat(?string $etat): PointEmpPrimes {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the nb heure majoration.
     *
     * @param float|null $nbHeureMajoration The nb heure majoration.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNbHeureMajoration(?float $nbHeureMajoration): PointEmpPrimes {
        $this->nbHeureMajoration = $nbHeureMajoration;
        return $this;
    }

    /**
     * Set the nombre prime.
     *
     * @param float|null $nombrePrime The nombre prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNombrePrime(?float $nombrePrime): PointEmpPrimes {
        $this->nombrePrime = $nombrePrime;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNumBt(?int $numBt): PointEmpPrimes {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero prime.
     *
     * @param int|null $numeroPrime The numero prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNumeroPrime(?int $numeroPrime): PointEmpPrimes {
        $this->numeroPrime = $numeroPrime;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setPeriode(?DateTime $periode): PointEmpPrimes {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux prime.
     *
     * @param float|null $tauxPrime The taux prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setTauxPrime(?float $tauxPrime): PointEmpPrimes {
        $this->tauxPrime = $tauxPrime;
        return $this;
    }

    /**
     * Set the type majo.
     *
     * @param string|null $typeMajo The type majo.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setTypeMajo(?string $typeMajo): PointEmpPrimes {
        $this->typeMajo = $typeMajo;
        return $this;
    }

    /**
     * Set the type prime.
     *
     * @param string|null $typePrime The type prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setTypePrime(?string $typePrime): PointEmpPrimes {
        $this->typePrime = $typePrime;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): PointEmpPrimes {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
