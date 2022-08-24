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
 * Plans en tete bon trav.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PlansEnTeteBonTrav {

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

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
     * Code pays.
     *
     * @var string|null
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Dt avant dern prepa.
     *
     * @var DateTime|null
     */
    private $dtAvantDernPrepa;

    /**
     * Dt dern prepa.
     *
     * @var DateTime|null
     */
    private $dtDernPrepa;

    /**
     * Dt validite fact deb.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDeb;

    /**
     * Dt validite fact deb deb mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDebDebMois;

    /**
     * Dt validite fact fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFin;

    /**
     * Dt validite fact fin fin mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFinFinMois;

    /**
     * Jour fact.
     *
     * @var string|null
     */
    private $jourFact;

    /**
     * Montant htpx.
     *
     * @var float|null
     */
    private $montantHtpx;

    /**
     * Montant htvm.
     *
     * @var float|null
     */
    private $montantHtvm;

    /**
     * Nom client.
     *
     * @var string|null
     */
    private $nomClient;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom suite2.
     *
     * @var string|null
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string|null
     */
    private $nomSuite3;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Reference facture.
     *
     * @var string|null
     */
    private $referenceFacture;

    /**
     * Reference facture2.
     *
     * @var string|null
     */
    private $referenceFacture2;

    /**
     * Reprise dates employes.
     *
     * @var bool|null
     */
    private $repriseDatesEmployes;

    /**
     * Type adresse.
     *
     * @var string|null
     */
    private $typeAdresse;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the btq.
     *
     * @return string|null Returns the btq.
     */
    public function getBtq(): ?string {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
    }

    /**
     * Get the civilite.
     *
     * @return string|null Returns the civilite.
     */
    public function getCivilite(): ?string {
        return $this->civilite;
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
     * Get the code pays.
     *
     * @return string|null Returns the code pays.
     */
    public function getCodePays(): ?string {
        return $this->codePays;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
    }

    /**
     * Get the dt avant dern prepa.
     *
     * @return DateTime|null Returns the dt avant dern prepa.
     */
    public function getDtAvantDernPrepa(): ?DateTime {
        return $this->dtAvantDernPrepa;
    }

    /**
     * Get the dt dern prepa.
     *
     * @return DateTime|null Returns the dt dern prepa.
     */
    public function getDtDernPrepa(): ?DateTime {
        return $this->dtDernPrepa;
    }

    /**
     * Get the dt validite fact deb.
     *
     * @return DateTime|null Returns the dt validite fact deb.
     */
    public function getDtValiditeFactDeb(): ?DateTime {
        return $this->dtValiditeFactDeb;
    }

    /**
     * Get the dt validite fact deb deb mois.
     *
     * @return DateTime|null Returns the dt validite fact deb deb mois.
     */
    public function getDtValiditeFactDebDebMois(): ?DateTime {
        return $this->dtValiditeFactDebDebMois;
    }

    /**
     * Get the dt validite fact fin.
     *
     * @return DateTime|null Returns the dt validite fact fin.
     */
    public function getDtValiditeFactFin(): ?DateTime {
        return $this->dtValiditeFactFin;
    }

    /**
     * Get the dt validite fact fin fin mois.
     *
     * @return DateTime|null Returns the dt validite fact fin fin mois.
     */
    public function getDtValiditeFactFinFinMois(): ?DateTime {
        return $this->dtValiditeFactFinFinMois;
    }

    /**
     * Get the jour fact.
     *
     * @return string|null Returns the jour fact.
     */
    public function getJourFact(): ?string {
        return $this->jourFact;
    }

    /**
     * Get the montant htpx.
     *
     * @return float|null Returns the montant htpx.
     */
    public function getMontantHtpx(): ?float {
        return $this->montantHtpx;
    }

    /**
     * Get the montant htvm.
     *
     * @return float|null Returns the montant htvm.
     */
    public function getMontantHtvm(): ?float {
        return $this->montantHtvm;
    }

    /**
     * Get the nom client.
     *
     * @return string|null Returns the nom client.
     */
    public function getNomClient(): ?string {
        return $this->nomClient;
    }

    /**
     * Get the nom suite.
     *
     * @return string|null Returns the nom suite.
     */
    public function getNomSuite(): ?string {
        return $this->nomSuite;
    }

    /**
     * Get the nom suite2.
     *
     * @return string|null Returns the nom suite2.
     */
    public function getNomSuite2(): ?string {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string|null Returns the nom suite3.
     */
    public function getNomSuite3(): ?string {
        return $this->nomSuite3;
    }

    /**
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
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
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
    }

    /**
     * Get the reference facture.
     *
     * @return string|null Returns the reference facture.
     */
    public function getReferenceFacture(): ?string {
        return $this->referenceFacture;
    }

    /**
     * Get the reference facture2.
     *
     * @return string|null Returns the reference facture2.
     */
    public function getReferenceFacture2(): ?string {
        return $this->referenceFacture2;
    }

    /**
     * Get the reprise dates employes.
     *
     * @return bool|null Returns the reprise dates employes.
     */
    public function getRepriseDatesEmployes(): ?bool {
        return $this->repriseDatesEmployes;
    }

    /**
     * Get the type adresse.
     *
     * @return string|null Returns the type adresse.
     */
    public function getTypeAdresse(): ?string {
        return $this->typeAdresse;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setBtq(?string $btq): PlansEnTeteBonTrav {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): PlansEnTeteBonTrav {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCivilite(?string $civilite): PlansEnTeteBonTrav {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCodeAffaire(?string $codeAffaire): PlansEnTeteBonTrav {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCodeChantier(?string $codeChantier): PlansEnTeteBonTrav {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCodeClient(?string $codeClient): PlansEnTeteBonTrav {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCodePays(?string $codePays): PlansEnTeteBonTrav {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCodePostal(?string $codePostal): PlansEnTeteBonTrav {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setCodeRegroupement(?string $codeRegroupement): PlansEnTeteBonTrav {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setComplement(?string $complement): PlansEnTeteBonTrav {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the dt avant dern prepa.
     *
     * @param DateTime|null $dtAvantDernPrepa The dt avant dern prepa.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setDtAvantDernPrepa(?DateTime $dtAvantDernPrepa): PlansEnTeteBonTrav {
        $this->dtAvantDernPrepa = $dtAvantDernPrepa;
        return $this;
    }

    /**
     * Set the dt dern prepa.
     *
     * @param DateTime|null $dtDernPrepa The dt dern prepa.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setDtDernPrepa(?DateTime $dtDernPrepa): PlansEnTeteBonTrav {
        $this->dtDernPrepa = $dtDernPrepa;
        return $this;
    }

    /**
     * Set the dt validite fact deb.
     *
     * @param DateTime|null $dtValiditeFactDeb The dt validite fact deb.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setDtValiditeFactDeb(?DateTime $dtValiditeFactDeb): PlansEnTeteBonTrav {
        $this->dtValiditeFactDeb = $dtValiditeFactDeb;
        return $this;
    }

    /**
     * Set the dt validite fact deb deb mois.
     *
     * @param DateTime|null $dtValiditeFactDebDebMois The dt validite fact deb deb mois.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setDtValiditeFactDebDebMois(?DateTime $dtValiditeFactDebDebMois): PlansEnTeteBonTrav {
        $this->dtValiditeFactDebDebMois = $dtValiditeFactDebDebMois;
        return $this;
    }

    /**
     * Set the dt validite fact fin.
     *
     * @param DateTime|null $dtValiditeFactFin The dt validite fact fin.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setDtValiditeFactFin(?DateTime $dtValiditeFactFin): PlansEnTeteBonTrav {
        $this->dtValiditeFactFin = $dtValiditeFactFin;
        return $this;
    }

    /**
     * Set the dt validite fact fin fin mois.
     *
     * @param DateTime|null $dtValiditeFactFinFinMois The dt validite fact fin fin mois.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setDtValiditeFactFinFinMois(?DateTime $dtValiditeFactFinFinMois): PlansEnTeteBonTrav {
        $this->dtValiditeFactFinFinMois = $dtValiditeFactFinFinMois;
        return $this;
    }

    /**
     * Set the jour fact.
     *
     * @param string|null $jourFact The jour fact.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setJourFact(?string $jourFact): PlansEnTeteBonTrav {
        $this->jourFact = $jourFact;
        return $this;
    }

    /**
     * Set the montant htpx.
     *
     * @param float|null $montantHtpx The montant htpx.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setMontantHtpx(?float $montantHtpx): PlansEnTeteBonTrav {
        $this->montantHtpx = $montantHtpx;
        return $this;
    }

    /**
     * Set the montant htvm.
     *
     * @param float|null $montantHtvm The montant htvm.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setMontantHtvm(?float $montantHtvm): PlansEnTeteBonTrav {
        $this->montantHtvm = $montantHtvm;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNomClient(?string $nomClient): PlansEnTeteBonTrav {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNomSuite(?string $nomSuite): PlansEnTeteBonTrav {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string|null $nomSuite2 The nom suite2.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNomSuite2(?string $nomSuite2): PlansEnTeteBonTrav {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string|null $nomSuite3 The nom suite3.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNomSuite3(?string $nomSuite3): PlansEnTeteBonTrav {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNomVoie(?string $nomVoie): PlansEnTeteBonTrav {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNumBt(?int $numBt): PlansEnTeteBonTrav {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setNumVoie(?string $numVoie): PlansEnTeteBonTrav {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string|null $referenceFacture The reference facture.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setReferenceFacture(?string $referenceFacture): PlansEnTeteBonTrav {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string|null $referenceFacture2 The reference facture2.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setReferenceFacture2(?string $referenceFacture2): PlansEnTeteBonTrav {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }

    /**
     * Set the reprise dates employes.
     *
     * @param bool|null $repriseDatesEmployes The reprise dates employes.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setRepriseDatesEmployes(?bool $repriseDatesEmployes): PlansEnTeteBonTrav {
        $this->repriseDatesEmployes = $repriseDatesEmployes;
        return $this;
    }

    /**
     * Set the type adresse.
     *
     * @param string|null $typeAdresse The type adresse.
     * @return PlansEnTeteBonTrav Returns this Plans en tete bon trav.
     */
    public function setTypeAdresse(?string $typeAdresse): PlansEnTeteBonTrav {
        $this->typeAdresse = $typeAdresse;
        return $this;
    }
}
