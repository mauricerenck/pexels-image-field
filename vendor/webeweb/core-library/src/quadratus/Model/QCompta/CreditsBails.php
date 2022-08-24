<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Credits bails.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class CreditsBails {

    /**
     * Ad amort anterieur.
     *
     * @var float|null
     */
    private $adAmortAnterieur;

    /**
     * Ad amort anterieur2.
     *
     * @var float|null
     */
    private $adAmortAnterieur2;

    /**
     * Ad annees amort.
     *
     * @var float|null
     */
    private $adAnneesAmort;

    /**
     * Ad coeff degressif.
     *
     * @var float|null
     */
    private $adCoeffDegressif;

    /**
     * Ad dotation.
     *
     * @var float|null
     */
    private $adDotation;

    /**
     * Ad dotation2.
     *
     * @var float|null
     */
    private $adDotation2;

    /**
     * Ad dotation except.
     *
     * @var float|null
     */
    private $adDotationExcept;

    /**
     * Ad duree.
     *
     * @var float|null
     */
    private $adDuree;

    /**
     * Ad taux lineaire.
     *
     * @var float|null
     */
    private $adTauxLineaire;

    /**
     * Ad type.
     *
     * @var string|null
     */
    private $adType;

    /**
     * Af amort anterieur.
     *
     * @var float|null
     */
    private $afAmortAnterieur;

    /**
     * Af annees amort.
     *
     * @var float|null
     */
    private $afAnneesAmort;

    /**
     * Af coeff degressif.
     *
     * @var float|null
     */
    private $afCoeffDegressif;

    /**
     * Af dotation.
     *
     * @var float|null
     */
    private $afDotation;

    /**
     * Af duree.
     *
     * @var float|null
     */
    private $afDuree;

    /**
     * Af taux except.
     *
     * @var float|null
     */
    private $afTauxExcept;

    /**
     * Af taux lineaire.
     *
     * @var float|null
     */
    private $afTauxLineaire;

    /**
     * Af type.
     *
     * @var string|null
     */
    private $afType;

    /**
     * Afsii.
     *
     * @var bool|null
     */
    private $afsii;

    /**
     * Base taxe pro.
     *
     * @var float|null
     */
    private $baseTaxePro;

    /**
     * Bureau.
     *
     * @var string|null
     */
    private $bureau;

    /**
     * Cb en francs.
     *
     * @var bool|null
     */
    private $cbEnFrancs;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Code journal echeance.
     *
     * @var string|null
     */
    private $codeJournalEcheance;

    /**
     * Code journal paiement.
     *
     * @var string|null
     */
    private $codeJournalPaiement;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Compte frn.
     *
     * @var string|null
     */
    private $compteFrn;

    /**
     * Cpt assurance.
     *
     * @var string|null
     */
    private $cptAssurance;

    /**
     * Cpt charge.
     *
     * @var string|null
     */
    private $cptCharge;

    /**
     * Cpt entretien.
     *
     * @var string|null
     */
    private $cptEntretien;

    /**
     * Cpt tva.
     *
     * @var string|null
     */
    private $cptTva;

    /**
     * Cpt tva assu.
     *
     * @var string|null
     */
    private $cptTvaAssu;

    /**
     * Cr valeur euros.
     *
     * @var float|null
     */
    private $crValeurEuros;

    /**
     * Crr date.
     *
     * @var DateTime|null
     */
    private $crrDate;

    /**
     * Crr px cession ht.
     *
     * @var float|null
     */
    private $crrPxCessionHt;

    /**
     * Crr qte vendue.
     *
     * @var float|null
     */
    private $crrQteVendue;

    /**
     * Crr suppl amort.
     *
     * @var float|null
     */
    private $crrSupplAmort;

    /**
     * Crr suppl valeur.
     *
     * @var float|null
     */
    private $crrSupplValeur;

    /**
     * Crr type.
     *
     * @var string|null
     */
    private $crrType;

    /**
     * Crrpm value ct.
     *
     * @var float|null
     */
    private $crrpmValueCt;

    /**
     * Crrpm value lt.
     *
     * @var float|null
     */
    private $crrpmValueLt;

    /**
     * Date acquisition.
     *
     * @var DateTime|null
     */
    private $dateAcquisition;

    /**
     * Date mise service.
     *
     * @var DateTime|null
     */
    private $dateMiseService;

    /**
     * Din.
     *
     * @var bool|null
     */
    private $din;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Guid vehicule.
     *
     * @var string|null
     */
    private $guidVehicule;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle frn.
     *
     * @var string|null
     */
    private $libelleFrn;

    /**
     * Limite amort.
     *
     * @var float|null
     */
    private $limiteAmort;

    /**
     * Materiaux agricole.
     *
     * @var bool|null
     */
    private $materiauxAgricole;

    /**
     * Montant tva.
     *
     * @var float|null
     */
    private $montantTva;

    /**
     * Nature analytique.
     *
     * @var string|null
     */
    private $natureAnalytique;

    /**
     * Num deux immo rachat.
     *
     * @var int|null
     */
    private $numDeuxImmoRachat;

    /**
     * Num immo rachat.
     *
     * @var int|null
     */
    private $numImmoRachat;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero deux.
     *
     * @var int|null
     */
    private $numeroDeux;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Taxe fonciere.
     *
     * @var bool|null
     */
    private $taxeFonciere;

    /**
     * Taxe pro.
     *
     * @var bool|null
     */
    private $taxePro;

    /**
     * Tp duree.
     *
     * @var int|null
     */
    private $tpDuree;

    /**
     * Tp echoir echu.
     *
     * @var string|null
     */
    private $tpEchoirEchu;

    /**
     * Tp mois annee.
     *
     * @var string|null
     */
    private $tpMoisAnnee;

    /**
     * Tp montt depot.
     *
     * @var float|null
     */
    private $tpMonttDepot;

    /**
     * Tp periodicite.
     *
     * @var string|null
     */
    private $tpPeriodicite;

    /**
     * Tp premier paiement.
     *
     * @var DateTime|null
     */
    private $tpPremierPaiement;

    /**
     * Valeur euros.
     *
     * @var float|null
     */
    private $valeurEuros;

    /**
     * Valeur ht.
     *
     * @var float|null
     */
    private $valeurHt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ad amort anterieur.
     *
     * @return float|null Returns the ad amort anterieur.
     */
    public function getAdAmortAnterieur(): ?float {
        return $this->adAmortAnterieur;
    }

    /**
     * Get the ad amort anterieur2.
     *
     * @return float|null Returns the ad amort anterieur2.
     */
    public function getAdAmortAnterieur2(): ?float {
        return $this->adAmortAnterieur2;
    }

    /**
     * Get the ad annees amort.
     *
     * @return float|null Returns the ad annees amort.
     */
    public function getAdAnneesAmort(): ?float {
        return $this->adAnneesAmort;
    }

    /**
     * Get the ad coeff degressif.
     *
     * @return float|null Returns the ad coeff degressif.
     */
    public function getAdCoeffDegressif(): ?float {
        return $this->adCoeffDegressif;
    }

    /**
     * Get the ad dotation.
     *
     * @return float|null Returns the ad dotation.
     */
    public function getAdDotation(): ?float {
        return $this->adDotation;
    }

    /**
     * Get the ad dotation2.
     *
     * @return float|null Returns the ad dotation2.
     */
    public function getAdDotation2(): ?float {
        return $this->adDotation2;
    }

    /**
     * Get the ad dotation except.
     *
     * @return float|null Returns the ad dotation except.
     */
    public function getAdDotationExcept(): ?float {
        return $this->adDotationExcept;
    }

    /**
     * Get the ad duree.
     *
     * @return float|null Returns the ad duree.
     */
    public function getAdDuree(): ?float {
        return $this->adDuree;
    }

    /**
     * Get the ad taux lineaire.
     *
     * @return float|null Returns the ad taux lineaire.
     */
    public function getAdTauxLineaire(): ?float {
        return $this->adTauxLineaire;
    }

    /**
     * Get the ad type.
     *
     * @return string|null Returns the ad type.
     */
    public function getAdType(): ?string {
        return $this->adType;
    }

    /**
     * Get the af amort anterieur.
     *
     * @return float|null Returns the af amort anterieur.
     */
    public function getAfAmortAnterieur(): ?float {
        return $this->afAmortAnterieur;
    }

    /**
     * Get the af annees amort.
     *
     * @return float|null Returns the af annees amort.
     */
    public function getAfAnneesAmort(): ?float {
        return $this->afAnneesAmort;
    }

    /**
     * Get the af coeff degressif.
     *
     * @return float|null Returns the af coeff degressif.
     */
    public function getAfCoeffDegressif(): ?float {
        return $this->afCoeffDegressif;
    }

    /**
     * Get the af dotation.
     *
     * @return float|null Returns the af dotation.
     */
    public function getAfDotation(): ?float {
        return $this->afDotation;
    }

    /**
     * Get the af duree.
     *
     * @return float|null Returns the af duree.
     */
    public function getAfDuree(): ?float {
        return $this->afDuree;
    }

    /**
     * Get the af taux except.
     *
     * @return float|null Returns the af taux except.
     */
    public function getAfTauxExcept(): ?float {
        return $this->afTauxExcept;
    }

    /**
     * Get the af taux lineaire.
     *
     * @return float|null Returns the af taux lineaire.
     */
    public function getAfTauxLineaire(): ?float {
        return $this->afTauxLineaire;
    }

    /**
     * Get the af type.
     *
     * @return string|null Returns the af type.
     */
    public function getAfType(): ?string {
        return $this->afType;
    }

    /**
     * Get the afsii.
     *
     * @return bool|null Returns the afsii.
     */
    public function getAfsii(): ?bool {
        return $this->afsii;
    }

    /**
     * Get the base taxe pro.
     *
     * @return float|null Returns the base taxe pro.
     */
    public function getBaseTaxePro(): ?float {
        return $this->baseTaxePro;
    }

    /**
     * Get the bureau.
     *
     * @return string|null Returns the bureau.
     */
    public function getBureau(): ?string {
        return $this->bureau;
    }

    /**
     * Get the cb en francs.
     *
     * @return bool|null Returns the cb en francs.
     */
    public function getCbEnFrancs(): ?bool {
        return $this->cbEnFrancs;
    }

    /**
     * Get the centre analytique.
     *
     * @return string|null Returns the centre analytique.
     */
    public function getCentreAnalytique(): ?string {
        return $this->centreAnalytique;
    }

    /**
     * Get the code journal echeance.
     *
     * @return string|null Returns the code journal echeance.
     */
    public function getCodeJournalEcheance(): ?string {
        return $this->codeJournalEcheance;
    }

    /**
     * Get the code journal paiement.
     *
     * @return string|null Returns the code journal paiement.
     */
    public function getCodeJournalPaiement(): ?string {
        return $this->codeJournalPaiement;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the compte frn.
     *
     * @return string|null Returns the compte frn.
     */
    public function getCompteFrn(): ?string {
        return $this->compteFrn;
    }

    /**
     * Get the cpt assurance.
     *
     * @return string|null Returns the cpt assurance.
     */
    public function getCptAssurance(): ?string {
        return $this->cptAssurance;
    }

    /**
     * Get the cpt charge.
     *
     * @return string|null Returns the cpt charge.
     */
    public function getCptCharge(): ?string {
        return $this->cptCharge;
    }

    /**
     * Get the cpt entretien.
     *
     * @return string|null Returns the cpt entretien.
     */
    public function getCptEntretien(): ?string {
        return $this->cptEntretien;
    }

    /**
     * Get the cpt tva.
     *
     * @return string|null Returns the cpt tva.
     */
    public function getCptTva(): ?string {
        return $this->cptTva;
    }

    /**
     * Get the cpt tva assu.
     *
     * @return string|null Returns the cpt tva assu.
     */
    public function getCptTvaAssu(): ?string {
        return $this->cptTvaAssu;
    }

    /**
     * Get the cr valeur euros.
     *
     * @return float|null Returns the cr valeur euros.
     */
    public function getCrValeurEuros(): ?float {
        return $this->crValeurEuros;
    }

    /**
     * Get the crr date.
     *
     * @return DateTime|null Returns the crr date.
     */
    public function getCrrDate(): ?DateTime {
        return $this->crrDate;
    }

    /**
     * Get the crr px cession ht.
     *
     * @return float|null Returns the crr px cession ht.
     */
    public function getCrrPxCessionHt(): ?float {
        return $this->crrPxCessionHt;
    }

    /**
     * Get the crr qte vendue.
     *
     * @return float|null Returns the crr qte vendue.
     */
    public function getCrrQteVendue(): ?float {
        return $this->crrQteVendue;
    }

    /**
     * Get the crr suppl amort.
     *
     * @return float|null Returns the crr suppl amort.
     */
    public function getCrrSupplAmort(): ?float {
        return $this->crrSupplAmort;
    }

    /**
     * Get the crr suppl valeur.
     *
     * @return float|null Returns the crr suppl valeur.
     */
    public function getCrrSupplValeur(): ?float {
        return $this->crrSupplValeur;
    }

    /**
     * Get the crr type.
     *
     * @return string|null Returns the crr type.
     */
    public function getCrrType(): ?string {
        return $this->crrType;
    }

    /**
     * Get the crrpm value ct.
     *
     * @return float|null Returns the crrpm value ct.
     */
    public function getCrrpmValueCt(): ?float {
        return $this->crrpmValueCt;
    }

    /**
     * Get the crrpm value lt.
     *
     * @return float|null Returns the crrpm value lt.
     */
    public function getCrrpmValueLt(): ?float {
        return $this->crrpmValueLt;
    }

    /**
     * Get the date acquisition.
     *
     * @return DateTime|null Returns the date acquisition.
     */
    public function getDateAcquisition(): ?DateTime {
        return $this->dateAcquisition;
    }

    /**
     * Get the date mise service.
     *
     * @return DateTime|null Returns the date mise service.
     */
    public function getDateMiseService(): ?DateTime {
        return $this->dateMiseService;
    }

    /**
     * Get the din.
     *
     * @return bool|null Returns the din.
     */
    public function getDin(): ?bool {
        return $this->din;
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
     * Get the guid vehicule.
     *
     * @return string|null Returns the guid vehicule.
     */
    public function getGuidVehicule(): ?string {
        return $this->guidVehicule;
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
     * Get the libelle frn.
     *
     * @return string|null Returns the libelle frn.
     */
    public function getLibelleFrn(): ?string {
        return $this->libelleFrn;
    }

    /**
     * Get the limite amort.
     *
     * @return float|null Returns the limite amort.
     */
    public function getLimiteAmort(): ?float {
        return $this->limiteAmort;
    }

    /**
     * Get the materiaux agricole.
     *
     * @return bool|null Returns the materiaux agricole.
     */
    public function getMateriauxAgricole(): ?bool {
        return $this->materiauxAgricole;
    }

    /**
     * Get the montant tva.
     *
     * @return float|null Returns the montant tva.
     */
    public function getMontantTva(): ?float {
        return $this->montantTva;
    }

    /**
     * Get the nature analytique.
     *
     * @return string|null Returns the nature analytique.
     */
    public function getNatureAnalytique(): ?string {
        return $this->natureAnalytique;
    }

    /**
     * Get the num deux immo rachat.
     *
     * @return int|null Returns the num deux immo rachat.
     */
    public function getNumDeuxImmoRachat(): ?int {
        return $this->numDeuxImmoRachat;
    }

    /**
     * Get the num immo rachat.
     *
     * @return int|null Returns the num immo rachat.
     */
    public function getNumImmoRachat(): ?int {
        return $this->numImmoRachat;
    }

    /**
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the numero deux.
     *
     * @return int|null Returns the numero deux.
     */
    public function getNumeroDeux(): ?int {
        return $this->numeroDeux;
    }

    /**
     * Get the numero pj.
     *
     * @return int|null Returns the numero pj.
     */
    public function getNumeroPj(): ?int {
        return $this->numeroPj;
    }

    /**
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the taxe fonciere.
     *
     * @return bool|null Returns the taxe fonciere.
     */
    public function getTaxeFonciere(): ?bool {
        return $this->taxeFonciere;
    }

    /**
     * Get the taxe pro.
     *
     * @return bool|null Returns the taxe pro.
     */
    public function getTaxePro(): ?bool {
        return $this->taxePro;
    }

    /**
     * Get the tp duree.
     *
     * @return int|null Returns the tp duree.
     */
    public function getTpDuree(): ?int {
        return $this->tpDuree;
    }

    /**
     * Get the tp echoir echu.
     *
     * @return string|null Returns the tp echoir echu.
     */
    public function getTpEchoirEchu(): ?string {
        return $this->tpEchoirEchu;
    }

    /**
     * Get the tp mois annee.
     *
     * @return string|null Returns the tp mois annee.
     */
    public function getTpMoisAnnee(): ?string {
        return $this->tpMoisAnnee;
    }

    /**
     * Get the tp montt depot.
     *
     * @return float|null Returns the tp montt depot.
     */
    public function getTpMonttDepot(): ?float {
        return $this->tpMonttDepot;
    }

    /**
     * Get the tp periodicite.
     *
     * @return string|null Returns the tp periodicite.
     */
    public function getTpPeriodicite(): ?string {
        return $this->tpPeriodicite;
    }

    /**
     * Get the tp premier paiement.
     *
     * @return DateTime|null Returns the tp premier paiement.
     */
    public function getTpPremierPaiement(): ?DateTime {
        return $this->tpPremierPaiement;
    }

    /**
     * Get the valeur euros.
     *
     * @return float|null Returns the valeur euros.
     */
    public function getValeurEuros(): ?float {
        return $this->valeurEuros;
    }

    /**
     * Get the valeur ht.
     *
     * @return float|null Returns the valeur ht.
     */
    public function getValeurHt(): ?float {
        return $this->valeurHt;
    }

    /**
     * Set the ad amort anterieur.
     *
     * @param float|null $adAmortAnterieur The ad amort anterieur.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdAmortAnterieur(?float $adAmortAnterieur): CreditsBails {
        $this->adAmortAnterieur = $adAmortAnterieur;
        return $this;
    }

    /**
     * Set the ad amort anterieur2.
     *
     * @param float|null $adAmortAnterieur2 The ad amort anterieur2.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdAmortAnterieur2(?float $adAmortAnterieur2): CreditsBails {
        $this->adAmortAnterieur2 = $adAmortAnterieur2;
        return $this;
    }

    /**
     * Set the ad annees amort.
     *
     * @param float|null $adAnneesAmort The ad annees amort.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdAnneesAmort(?float $adAnneesAmort): CreditsBails {
        $this->adAnneesAmort = $adAnneesAmort;
        return $this;
    }

    /**
     * Set the ad coeff degressif.
     *
     * @param float|null $adCoeffDegressif The ad coeff degressif.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdCoeffDegressif(?float $adCoeffDegressif): CreditsBails {
        $this->adCoeffDegressif = $adCoeffDegressif;
        return $this;
    }

    /**
     * Set the ad dotation.
     *
     * @param float|null $adDotation The ad dotation.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdDotation(?float $adDotation): CreditsBails {
        $this->adDotation = $adDotation;
        return $this;
    }

    /**
     * Set the ad dotation2.
     *
     * @param float|null $adDotation2 The ad dotation2.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdDotation2(?float $adDotation2): CreditsBails {
        $this->adDotation2 = $adDotation2;
        return $this;
    }

    /**
     * Set the ad dotation except.
     *
     * @param float|null $adDotationExcept The ad dotation except.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdDotationExcept(?float $adDotationExcept): CreditsBails {
        $this->adDotationExcept = $adDotationExcept;
        return $this;
    }

    /**
     * Set the ad duree.
     *
     * @param float|null $adDuree The ad duree.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdDuree(?float $adDuree): CreditsBails {
        $this->adDuree = $adDuree;
        return $this;
    }

    /**
     * Set the ad taux lineaire.
     *
     * @param float|null $adTauxLineaire The ad taux lineaire.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdTauxLineaire(?float $adTauxLineaire): CreditsBails {
        $this->adTauxLineaire = $adTauxLineaire;
        return $this;
    }

    /**
     * Set the ad type.
     *
     * @param string|null $adType The ad type.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAdType(?string $adType): CreditsBails {
        $this->adType = $adType;
        return $this;
    }

    /**
     * Set the af amort anterieur.
     *
     * @param float|null $afAmortAnterieur The af amort anterieur.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfAmortAnterieur(?float $afAmortAnterieur): CreditsBails {
        $this->afAmortAnterieur = $afAmortAnterieur;
        return $this;
    }

    /**
     * Set the af annees amort.
     *
     * @param float|null $afAnneesAmort The af annees amort.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfAnneesAmort(?float $afAnneesAmort): CreditsBails {
        $this->afAnneesAmort = $afAnneesAmort;
        return $this;
    }

    /**
     * Set the af coeff degressif.
     *
     * @param float|null $afCoeffDegressif The af coeff degressif.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfCoeffDegressif(?float $afCoeffDegressif): CreditsBails {
        $this->afCoeffDegressif = $afCoeffDegressif;
        return $this;
    }

    /**
     * Set the af dotation.
     *
     * @param float|null $afDotation The af dotation.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfDotation(?float $afDotation): CreditsBails {
        $this->afDotation = $afDotation;
        return $this;
    }

    /**
     * Set the af duree.
     *
     * @param float|null $afDuree The af duree.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfDuree(?float $afDuree): CreditsBails {
        $this->afDuree = $afDuree;
        return $this;
    }

    /**
     * Set the af taux except.
     *
     * @param float|null $afTauxExcept The af taux except.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfTauxExcept(?float $afTauxExcept): CreditsBails {
        $this->afTauxExcept = $afTauxExcept;
        return $this;
    }

    /**
     * Set the af taux lineaire.
     *
     * @param float|null $afTauxLineaire The af taux lineaire.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfTauxLineaire(?float $afTauxLineaire): CreditsBails {
        $this->afTauxLineaire = $afTauxLineaire;
        return $this;
    }

    /**
     * Set the af type.
     *
     * @param string|null $afType The af type.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfType(?string $afType): CreditsBails {
        $this->afType = $afType;
        return $this;
    }

    /**
     * Set the afsii.
     *
     * @param bool|null $afsii The afsii.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setAfsii(?bool $afsii): CreditsBails {
        $this->afsii = $afsii;
        return $this;
    }

    /**
     * Set the base taxe pro.
     *
     * @param float|null $baseTaxePro The base taxe pro.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setBaseTaxePro(?float $baseTaxePro): CreditsBails {
        $this->baseTaxePro = $baseTaxePro;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string|null $bureau The bureau.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setBureau(?string $bureau): CreditsBails {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the cb en francs.
     *
     * @param bool|null $cbEnFrancs The cb en francs.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCbEnFrancs(?bool $cbEnFrancs): CreditsBails {
        $this->cbEnFrancs = $cbEnFrancs;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCentreAnalytique(?string $centreAnalytique): CreditsBails {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal echeance.
     *
     * @param string|null $codeJournalEcheance The code journal echeance.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCodeJournalEcheance(?string $codeJournalEcheance): CreditsBails {
        $this->codeJournalEcheance = $codeJournalEcheance;
        return $this;
    }

    /**
     * Set the code journal paiement.
     *
     * @param string|null $codeJournalPaiement The code journal paiement.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCodeJournalPaiement(?string $codeJournalPaiement): CreditsBails {
        $this->codeJournalPaiement = $codeJournalPaiement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCodeTva(?string $codeTva): CreditsBails {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compte frn.
     *
     * @param string|null $compteFrn The compte frn.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCompteFrn(?string $compteFrn): CreditsBails {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the cpt assurance.
     *
     * @param string|null $cptAssurance The cpt assurance.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCptAssurance(?string $cptAssurance): CreditsBails {
        $this->cptAssurance = $cptAssurance;
        return $this;
    }

    /**
     * Set the cpt charge.
     *
     * @param string|null $cptCharge The cpt charge.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCptCharge(?string $cptCharge): CreditsBails {
        $this->cptCharge = $cptCharge;
        return $this;
    }

    /**
     * Set the cpt entretien.
     *
     * @param string|null $cptEntretien The cpt entretien.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCptEntretien(?string $cptEntretien): CreditsBails {
        $this->cptEntretien = $cptEntretien;
        return $this;
    }

    /**
     * Set the cpt tva.
     *
     * @param string|null $cptTva The cpt tva.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCptTva(?string $cptTva): CreditsBails {
        $this->cptTva = $cptTva;
        return $this;
    }

    /**
     * Set the cpt tva assu.
     *
     * @param string|null $cptTvaAssu The cpt tva assu.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCptTvaAssu(?string $cptTvaAssu): CreditsBails {
        $this->cptTvaAssu = $cptTvaAssu;
        return $this;
    }

    /**
     * Set the cr valeur euros.
     *
     * @param float|null $crValeurEuros The cr valeur euros.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrValeurEuros(?float $crValeurEuros): CreditsBails {
        $this->crValeurEuros = $crValeurEuros;
        return $this;
    }

    /**
     * Set the crr date.
     *
     * @param DateTime|null $crrDate The crr date.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrDate(?DateTime $crrDate): CreditsBails {
        $this->crrDate = $crrDate;
        return $this;
    }

    /**
     * Set the crr px cession ht.
     *
     * @param float|null $crrPxCessionHt The crr px cession ht.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrPxCessionHt(?float $crrPxCessionHt): CreditsBails {
        $this->crrPxCessionHt = $crrPxCessionHt;
        return $this;
    }

    /**
     * Set the crr qte vendue.
     *
     * @param float|null $crrQteVendue The crr qte vendue.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrQteVendue(?float $crrQteVendue): CreditsBails {
        $this->crrQteVendue = $crrQteVendue;
        return $this;
    }

    /**
     * Set the crr suppl amort.
     *
     * @param float|null $crrSupplAmort The crr suppl amort.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrSupplAmort(?float $crrSupplAmort): CreditsBails {
        $this->crrSupplAmort = $crrSupplAmort;
        return $this;
    }

    /**
     * Set the crr suppl valeur.
     *
     * @param float|null $crrSupplValeur The crr suppl valeur.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrSupplValeur(?float $crrSupplValeur): CreditsBails {
        $this->crrSupplValeur = $crrSupplValeur;
        return $this;
    }

    /**
     * Set the crr type.
     *
     * @param string|null $crrType The crr type.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrType(?string $crrType): CreditsBails {
        $this->crrType = $crrType;
        return $this;
    }

    /**
     * Set the crrpm value ct.
     *
     * @param float|null $crrpmValueCt The crrpm value ct.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrpmValueCt(?float $crrpmValueCt): CreditsBails {
        $this->crrpmValueCt = $crrpmValueCt;
        return $this;
    }

    /**
     * Set the crrpm value lt.
     *
     * @param float|null $crrpmValueLt The crrpm value lt.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setCrrpmValueLt(?float $crrpmValueLt): CreditsBails {
        $this->crrpmValueLt = $crrpmValueLt;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime|null $dateAcquisition The date acquisition.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setDateAcquisition(?DateTime $dateAcquisition): CreditsBails {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime|null $dateMiseService The date mise service.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setDateMiseService(?DateTime $dateMiseService): CreditsBails {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the din.
     *
     * @param bool|null $din The din.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setDin(?bool $din): CreditsBails {
        $this->din = $din;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setEtat(?string $etat): CreditsBails {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string|null $guidVehicule The guid vehicule.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setGuidVehicule(?string $guidVehicule): CreditsBails {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setLibelle(?string $libelle): CreditsBails {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string|null $libelleFrn The libelle frn.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setLibelleFrn(?string $libelleFrn): CreditsBails {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the limite amort.
     *
     * @param float|null $limiteAmort The limite amort.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setLimiteAmort(?float $limiteAmort): CreditsBails {
        $this->limiteAmort = $limiteAmort;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool|null $materiauxAgricole The materiaux agricole.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setMateriauxAgricole(?bool $materiauxAgricole): CreditsBails {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float|null $montantTva The montant tva.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setMontantTva(?float $montantTva): CreditsBails {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string|null $natureAnalytique The nature analytique.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNatureAnalytique(?string $natureAnalytique): CreditsBails {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the num deux immo rachat.
     *
     * @param int|null $numDeuxImmoRachat The num deux immo rachat.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNumDeuxImmoRachat(?int $numDeuxImmoRachat): CreditsBails {
        $this->numDeuxImmoRachat = $numDeuxImmoRachat;
        return $this;
    }

    /**
     * Set the num immo rachat.
     *
     * @param int|null $numImmoRachat The num immo rachat.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNumImmoRachat(?int $numImmoRachat): CreditsBails {
        $this->numImmoRachat = $numImmoRachat;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNumero(?int $numero): CreditsBails {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNumeroCompte(?string $numeroCompte): CreditsBails {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int|null $numeroDeux The numero deux.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNumeroDeux(?int $numeroDeux): CreditsBails {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setNumeroPj(?int $numeroPj): CreditsBails {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setQuantite(?float $quantite): CreditsBails {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setService(?string $service): CreditsBails {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the taxe fonciere.
     *
     * @param bool|null $taxeFonciere The taxe fonciere.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTaxeFonciere(?bool $taxeFonciere): CreditsBails {
        $this->taxeFonciere = $taxeFonciere;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool|null $taxePro The taxe pro.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTaxePro(?bool $taxePro): CreditsBails {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the tp duree.
     *
     * @param int|null $tpDuree The tp duree.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTpDuree(?int $tpDuree): CreditsBails {
        $this->tpDuree = $tpDuree;
        return $this;
    }

    /**
     * Set the tp echoir echu.
     *
     * @param string|null $tpEchoirEchu The tp echoir echu.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTpEchoirEchu(?string $tpEchoirEchu): CreditsBails {
        $this->tpEchoirEchu = $tpEchoirEchu;
        return $this;
    }

    /**
     * Set the tp mois annee.
     *
     * @param string|null $tpMoisAnnee The tp mois annee.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTpMoisAnnee(?string $tpMoisAnnee): CreditsBails {
        $this->tpMoisAnnee = $tpMoisAnnee;
        return $this;
    }

    /**
     * Set the tp montt depot.
     *
     * @param float|null $tpMonttDepot The tp montt depot.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTpMonttDepot(?float $tpMonttDepot): CreditsBails {
        $this->tpMonttDepot = $tpMonttDepot;
        return $this;
    }

    /**
     * Set the tp periodicite.
     *
     * @param string|null $tpPeriodicite The tp periodicite.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTpPeriodicite(?string $tpPeriodicite): CreditsBails {
        $this->tpPeriodicite = $tpPeriodicite;
        return $this;
    }

    /**
     * Set the tp premier paiement.
     *
     * @param DateTime|null $tpPremierPaiement The tp premier paiement.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setTpPremierPaiement(?DateTime $tpPremierPaiement): CreditsBails {
        $this->tpPremierPaiement = $tpPremierPaiement;
        return $this;
    }

    /**
     * Set the valeur euros.
     *
     * @param float|null $valeurEuros The valeur euros.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setValeurEuros(?float $valeurEuros): CreditsBails {
        $this->valeurEuros = $valeurEuros;
        return $this;
    }

    /**
     * Set the valeur ht.
     *
     * @param float|null $valeurHt The valeur ht.
     * @return CreditsBails Returns this Credits bails.
     */
    public function setValeurHt(?float $valeurHt): CreditsBails {
        $this->valeurHt = $valeurHt;
        return $this;
    }
}
