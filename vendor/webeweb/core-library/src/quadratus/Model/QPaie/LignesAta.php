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
 * Lignes ata.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesAta {

    /**
     * Avantages euro ou franc.
     *
     * @var string|null
     */
    private $avantagesEuroOuFranc;

    /**
     * Cs euro ou franc.
     *
     * @var string|null
     */
    private $csEuroOuFranc;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Frais pro soumis.
     *
     * @var float|null
     */
    private $fraisProSoumis;

    /**
     * Frais ps euro ou franc.
     *
     * @var string|null
     */
    private $fraisPsEuroOuFranc;

    /**
     * Indemnites euro ou franc.
     *
     * @var string|null
     */
    private $indemnitesEuroOuFranc;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Montant avantages.
     *
     * @var float|null
     */
    private $montantAvantages;

    /**
     * Montant cotis.
     *
     * @var float|null
     */
    private $montantCotis;

    /**
     * Montant euro ou franc.
     *
     * @var string|null
     */
    private $montantEuroOuFranc;

    /**
     * Montant indemnites.
     *
     * @var float|null
     */
    private $montantIndemnites;

    /**
     * Nb h trav.
     *
     * @var float|null
     */
    private $nbHTrav;

    /**
     * Num ligne.
     *
     * @var string|null
     */
    private $numLigne;

    /**
     * Numero attestation.
     *
     * @var string|null
     */
    private $numeroAttestation;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Taux ded sup.
     *
     * @var float|null
     */
    private $tauxDedSup;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avantages euro ou franc.
     *
     * @return string|null Returns the avantages euro ou franc.
     */
    public function getAvantagesEuroOuFranc(): ?string {
        return $this->avantagesEuroOuFranc;
    }

    /**
     * Get the cs euro ou franc.
     *
     * @return string|null Returns the cs euro ou franc.
     */
    public function getCsEuroOuFranc(): ?string {
        return $this->csEuroOuFranc;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance(): ?DateTime {
        return $this->dateEcheance;
    }

    /**
     * Get the frais pro soumis.
     *
     * @return float|null Returns the frais pro soumis.
     */
    public function getFraisProSoumis(): ?float {
        return $this->fraisProSoumis;
    }

    /**
     * Get the frais ps euro ou franc.
     *
     * @return string|null Returns the frais ps euro ou franc.
     */
    public function getFraisPsEuroOuFranc(): ?string {
        return $this->fraisPsEuroOuFranc;
    }

    /**
     * Get the indemnites euro ou franc.
     *
     * @return string|null Returns the indemnites euro ou franc.
     */
    public function getIndemnitesEuroOuFranc(): ?string {
        return $this->indemnitesEuroOuFranc;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the montant avantages.
     *
     * @return float|null Returns the montant avantages.
     */
    public function getMontantAvantages(): ?float {
        return $this->montantAvantages;
    }

    /**
     * Get the montant cotis.
     *
     * @return float|null Returns the montant cotis.
     */
    public function getMontantCotis(): ?float {
        return $this->montantCotis;
    }

    /**
     * Get the montant euro ou franc.
     *
     * @return string|null Returns the montant euro ou franc.
     */
    public function getMontantEuroOuFranc(): ?string {
        return $this->montantEuroOuFranc;
    }

    /**
     * Get the montant indemnites.
     *
     * @return float|null Returns the montant indemnites.
     */
    public function getMontantIndemnites(): ?float {
        return $this->montantIndemnites;
    }

    /**
     * Get the nb h trav.
     *
     * @return float|null Returns the nb h trav.
     */
    public function getNbHTrav(): ?float {
        return $this->nbHTrav;
    }

    /**
     * Get the num ligne.
     *
     * @return string|null Returns the num ligne.
     */
    public function getNumLigne(): ?string {
        return $this->numLigne;
    }

    /**
     * Get the numero attestation.
     *
     * @return string|null Returns the numero attestation.
     */
    public function getNumeroAttestation(): ?string {
        return $this->numeroAttestation;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb(): ?DateTime {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin(): ?DateTime {
        return $this->periodeFin;
    }

    /**
     * Get the taux ded sup.
     *
     * @return float|null Returns the taux ded sup.
     */
    public function getTauxDedSup(): ?float {
        return $this->tauxDedSup;
    }

    /**
     * Set the avantages euro ou franc.
     *
     * @param string|null $avantagesEuroOuFranc The avantages euro ou franc.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setAvantagesEuroOuFranc(?string $avantagesEuroOuFranc): LignesAta {
        $this->avantagesEuroOuFranc = $avantagesEuroOuFranc;
        return $this;
    }

    /**
     * Set the cs euro ou franc.
     *
     * @param string|null $csEuroOuFranc The cs euro ou franc.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setCsEuroOuFranc(?string $csEuroOuFranc): LignesAta {
        $this->csEuroOuFranc = $csEuroOuFranc;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setDateEcheance(?DateTime $dateEcheance): LignesAta {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the frais pro soumis.
     *
     * @param float|null $fraisProSoumis The frais pro soumis.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setFraisProSoumis(?float $fraisProSoumis): LignesAta {
        $this->fraisProSoumis = $fraisProSoumis;
        return $this;
    }

    /**
     * Set the frais ps euro ou franc.
     *
     * @param string|null $fraisPsEuroOuFranc The frais ps euro ou franc.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setFraisPsEuroOuFranc(?string $fraisPsEuroOuFranc): LignesAta {
        $this->fraisPsEuroOuFranc = $fraisPsEuroOuFranc;
        return $this;
    }

    /**
     * Set the indemnites euro ou franc.
     *
     * @param string|null $indemnitesEuroOuFranc The indemnites euro ou franc.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setIndemnitesEuroOuFranc(?string $indemnitesEuroOuFranc): LignesAta {
        $this->indemnitesEuroOuFranc = $indemnitesEuroOuFranc;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setMontant(?float $montant): LignesAta {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant avantages.
     *
     * @param float|null $montantAvantages The montant avantages.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setMontantAvantages(?float $montantAvantages): LignesAta {
        $this->montantAvantages = $montantAvantages;
        return $this;
    }

    /**
     * Set the montant cotis.
     *
     * @param float|null $montantCotis The montant cotis.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setMontantCotis(?float $montantCotis): LignesAta {
        $this->montantCotis = $montantCotis;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string|null $montantEuroOuFranc The montant euro ou franc.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setMontantEuroOuFranc(?string $montantEuroOuFranc): LignesAta {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the montant indemnites.
     *
     * @param float|null $montantIndemnites The montant indemnites.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setMontantIndemnites(?float $montantIndemnites): LignesAta {
        $this->montantIndemnites = $montantIndemnites;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float|null $nbHTrav The nb h trav.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setNbHTrav(?float $nbHTrav): LignesAta {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setNumLigne(?string $numLigne): LignesAta {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesAta {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): LignesAta {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setPeriodeFin(?DateTime $periodeFin): LignesAta {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the taux ded sup.
     *
     * @param float|null $tauxDedSup The taux ded sup.
     * @return LignesAta Returns this Lignes ata.
     */
    public function setTauxDedSup(?float $tauxDedSup): LignesAta {
        $this->tauxDedSup = $tauxDedSup;
        return $this;
    }
}
