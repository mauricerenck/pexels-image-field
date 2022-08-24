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
 * Immobilisations.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Immobilisations {

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
     * Ad deduction amort anterieur.
     *
     * @var float|null
     */
    private $adDeductionAmortAnterieur;

    /**
     * Ad deduction dotation.
     *
     * @var float|null
     */
    private $adDeductionDotation;

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
     * Ad duree tot.
     *
     * @var string|null
     */
    private $adDureeTot;

    /**
     * Ad garder dot saisie.
     *
     * @var bool|null
     */
    private $adGarderDotSaisie;

    /**
     * Ad quantite.
     *
     * @var float|null
     */
    private $adQuantite;

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
     * Art151 duree deja etalee.
     *
     * @var string|null
     */
    private $art151DureeDejaEtalee;

    /**
     * Art151 duree etalement.
     *
     * @var string|null
     */
    private $art151DureeEtalement;

    /**
     * Art151 montant deja etale.
     *
     * @var float|null
     */
    private $art151MontantDejaEtale;

    /**
     * Art151 montant etale annee.
     *
     * @var float|null
     */
    private $art151MontantEtaleAnnee;

    /**
     * Base calcul.
     *
     * @var int|null
     */
    private $baseCalcul;

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
     * C taux imp.
     *
     * @var float|null
     */
    private $cTauxImp;

    /**
     * C valeur euros.
     *
     * @var float|null
     */
    private $cValeurEuros;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

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
     * Cr is dot.
     *
     * @var bool|null
     */
    private $crIsDot;

    /**
     * Crr151 motif.
     *
     * @var bool|null
     */
    private $crr151Motif;

    /**
     * Crr151 pm value ct.
     *
     * @var float|null
     */
    private $crr151PmValueCt;

    /**
     * Crr151 pm value lt.
     *
     * @var float|null
     */
    private $crr151PmValueLt;

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
     * Crrpm value ctf.
     *
     * @var float|null
     */
    private $crrpmValueCtf;

    /**
     * Crrpm value lt.
     *
     * @var float|null
     */
    private $crrpmValueLt;

    /**
     * Crrpm value ltf.
     *
     * @var float|null
     */
    private $crrpmValueLtf;

    /**
     * Date acq forfait.
     *
     * @var DateTime|null
     */
    private $dateAcqForfait;

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
     * Date reeval.
     *
     * @var DateTime|null
     */
    private $dateReeval;

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
     * Famille.
     *
     * @var string|null
     */
    private $famille;

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
     * Libelle quantite.
     *
     * @var string|null
     */
    private $libelleQuantite;

    /**
     * Limite amort.
     *
     * @var float|null
     */
    private $limiteAmort;

    /**
     * Majoration.
     *
     * @var bool|null
     */
    private $majoration;

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
     * Nb mois majoration.
     *
     * @var string|null
     */
    private $nbMoisMajoration;

    /**
     * Num cpt trans dot.
     *
     * @var string|null
     */
    private $numCptTransDot;

    /**
     * Num doss org.
     *
     * @var string|null
     */
    private $numDossOrg;

    /**
     * Num ens realloc.
     *
     * @var int|null
     */
    private $numEnsRealloc;

    /**
     * Num ensemble.
     *
     * @var int|null
     */
    private $numEnsemble;

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
     * Pilotage.
     *
     * @var bool|null
     */
    private $pilotage;

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
     * Site.
     *
     * @var string|null
     */
    private $site;

    /**
     * Taux tva.
     *
     * @var float|null
     */
    private $tauxTva;

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
     * Tp date origine.
     *
     * @var DateTime|null
     */
    private $tpDateOrigine;

    /**
     * V date.
     *
     * @var DateTime|null
     */
    private $vDate;

    /**
     * V numero.
     *
     * @var int|null
     */
    private $vNumero;

    /**
     * V numero compte.
     *
     * @var string|null
     */
    private $vNumeroCompte;

    /**
     * V numero compte ini.
     *
     * @var string|null
     */
    private $vNumeroCompteIni;

    /**
     * V numero deux.
     *
     * @var int|null
     */
    private $vNumeroDeux;

    /**
     * V numero deux ini.
     *
     * @var int|null
     */
    private $vNumeroDeuxIni;

    /**
     * V numero ini.
     *
     * @var int|null
     */
    private $vNumeroIni;

    /**
     * Valeur acq forfait.
     *
     * @var float|null
     */
    private $valeurAcqForfait;

    /**
     * Valeur base amortissement.
     *
     * @var float|null
     */
    private $valeurBaseAmortissement;

    /**
     * Valeur deduction.
     *
     * @var float|null
     */
    private $valeurDeduction;

    /**
     * Valeur ht.
     *
     * @var float|null
     */
    private $valeurHt;

    /**
     * Valeur ht origine.
     *
     * @var float|null
     */
    private $valeurHtOrigine;

    /**
     * Vnc realloc.
     *
     * @var float|null
     */
    private $vncRealloc;

    /**
     * Zone libre1.
     *
     * @var string|null
     */
    private $zoneLibre1;

    /**
     * Zone libre2.
     *
     * @var string|null
     */
    private $zoneLibre2;

    /**
     * Zone libre3.
     *
     * @var string|null
     */
    private $zoneLibre3;

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
     * Get the ad deduction amort anterieur.
     *
     * @return float|null Returns the ad deduction amort anterieur.
     */
    public function getAdDeductionAmortAnterieur(): ?float {
        return $this->adDeductionAmortAnterieur;
    }

    /**
     * Get the ad deduction dotation.
     *
     * @return float|null Returns the ad deduction dotation.
     */
    public function getAdDeductionDotation(): ?float {
        return $this->adDeductionDotation;
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
     * Get the ad duree tot.
     *
     * @return string|null Returns the ad duree tot.
     */
    public function getAdDureeTot(): ?string {
        return $this->adDureeTot;
    }

    /**
     * Get the ad garder dot saisie.
     *
     * @return bool|null Returns the ad garder dot saisie.
     */
    public function getAdGarderDotSaisie(): ?bool {
        return $this->adGarderDotSaisie;
    }

    /**
     * Get the ad quantite.
     *
     * @return float|null Returns the ad quantite.
     */
    public function getAdQuantite(): ?float {
        return $this->adQuantite;
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
     * Get the art151 duree deja etalee.
     *
     * @return string|null Returns the art151 duree deja etalee.
     */
    public function getArt151DureeDejaEtalee(): ?string {
        return $this->art151DureeDejaEtalee;
    }

    /**
     * Get the art151 duree etalement.
     *
     * @return string|null Returns the art151 duree etalement.
     */
    public function getArt151DureeEtalement(): ?string {
        return $this->art151DureeEtalement;
    }

    /**
     * Get the art151 montant deja etale.
     *
     * @return float|null Returns the art151 montant deja etale.
     */
    public function getArt151MontantDejaEtale(): ?float {
        return $this->art151MontantDejaEtale;
    }

    /**
     * Get the art151 montant etale annee.
     *
     * @return float|null Returns the art151 montant etale annee.
     */
    public function getArt151MontantEtaleAnnee(): ?float {
        return $this->art151MontantEtaleAnnee;
    }

    /**
     * Get the base calcul.
     *
     * @return int|null Returns the base calcul.
     */
    public function getBaseCalcul(): ?int {
        return $this->baseCalcul;
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
     * Get the c taux imp.
     *
     * @return float|null Returns the c taux imp.
     */
    public function getCTauxImp(): ?float {
        return $this->cTauxImp;
    }

    /**
     * Get the c valeur euros.
     *
     * @return float|null Returns the c valeur euros.
     */
    public function getCValeurEuros(): ?float {
        return $this->cValeurEuros;
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
     * Get the cr is dot.
     *
     * @return bool|null Returns the cr is dot.
     */
    public function getCrIsDot(): ?bool {
        return $this->crIsDot;
    }

    /**
     * Get the crr151 motif.
     *
     * @return bool|null Returns the crr151 motif.
     */
    public function getCrr151Motif(): ?bool {
        return $this->crr151Motif;
    }

    /**
     * Get the crr151 pm value ct.
     *
     * @return float|null Returns the crr151 pm value ct.
     */
    public function getCrr151PmValueCt(): ?float {
        return $this->crr151PmValueCt;
    }

    /**
     * Get the crr151 pm value lt.
     *
     * @return float|null Returns the crr151 pm value lt.
     */
    public function getCrr151PmValueLt(): ?float {
        return $this->crr151PmValueLt;
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
     * Get the crrpm value ctf.
     *
     * @return float|null Returns the crrpm value ctf.
     */
    public function getCrrpmValueCtf(): ?float {
        return $this->crrpmValueCtf;
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
     * Get the crrpm value ltf.
     *
     * @return float|null Returns the crrpm value ltf.
     */
    public function getCrrpmValueLtf(): ?float {
        return $this->crrpmValueLtf;
    }

    /**
     * Get the date acq forfait.
     *
     * @return DateTime|null Returns the date acq forfait.
     */
    public function getDateAcqForfait(): ?DateTime {
        return $this->dateAcqForfait;
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
     * Get the date reeval.
     *
     * @return DateTime|null Returns the date reeval.
     */
    public function getDateReeval(): ?DateTime {
        return $this->dateReeval;
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
     * Get the famille.
     *
     * @return string|null Returns the famille.
     */
    public function getFamille(): ?string {
        return $this->famille;
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
     * Get the libelle quantite.
     *
     * @return string|null Returns the libelle quantite.
     */
    public function getLibelleQuantite(): ?string {
        return $this->libelleQuantite;
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
     * Get the majoration.
     *
     * @return bool|null Returns the majoration.
     */
    public function getMajoration(): ?bool {
        return $this->majoration;
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
     * Get the nb mois majoration.
     *
     * @return string|null Returns the nb mois majoration.
     */
    public function getNbMoisMajoration(): ?string {
        return $this->nbMoisMajoration;
    }

    /**
     * Get the num cpt trans dot.
     *
     * @return string|null Returns the num cpt trans dot.
     */
    public function getNumCptTransDot(): ?string {
        return $this->numCptTransDot;
    }

    /**
     * Get the num doss org.
     *
     * @return string|null Returns the num doss org.
     */
    public function getNumDossOrg(): ?string {
        return $this->numDossOrg;
    }

    /**
     * Get the num ens realloc.
     *
     * @return int|null Returns the num ens realloc.
     */
    public function getNumEnsRealloc(): ?int {
        return $this->numEnsRealloc;
    }

    /**
     * Get the num ensemble.
     *
     * @return int|null Returns the num ensemble.
     */
    public function getNumEnsemble(): ?int {
        return $this->numEnsemble;
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
     * Get the pilotage.
     *
     * @return bool|null Returns the pilotage.
     */
    public function getPilotage(): ?bool {
        return $this->pilotage;
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
     * Get the site.
     *
     * @return string|null Returns the site.
     */
    public function getSite(): ?string {
        return $this->site;
    }

    /**
     * Get the taux tva.
     *
     * @return float|null Returns the taux tva.
     */
    public function getTauxTva(): ?float {
        return $this->tauxTva;
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
     * Get the tp date origine.
     *
     * @return DateTime|null Returns the tp date origine.
     */
    public function getTpDateOrigine(): ?DateTime {
        return $this->tpDateOrigine;
    }

    /**
     * Get the v date.
     *
     * @return DateTime|null Returns the v date.
     */
    public function getVDate(): ?DateTime {
        return $this->vDate;
    }

    /**
     * Get the v numero.
     *
     * @return int|null Returns the v numero.
     */
    public function getVNumero(): ?int {
        return $this->vNumero;
    }

    /**
     * Get the v numero compte.
     *
     * @return string|null Returns the v numero compte.
     */
    public function getVNumeroCompte(): ?string {
        return $this->vNumeroCompte;
    }

    /**
     * Get the v numero compte ini.
     *
     * @return string|null Returns the v numero compte ini.
     */
    public function getVNumeroCompteIni(): ?string {
        return $this->vNumeroCompteIni;
    }

    /**
     * Get the v numero deux.
     *
     * @return int|null Returns the v numero deux.
     */
    public function getVNumeroDeux(): ?int {
        return $this->vNumeroDeux;
    }

    /**
     * Get the v numero deux ini.
     *
     * @return int|null Returns the v numero deux ini.
     */
    public function getVNumeroDeuxIni(): ?int {
        return $this->vNumeroDeuxIni;
    }

    /**
     * Get the v numero ini.
     *
     * @return int|null Returns the v numero ini.
     */
    public function getVNumeroIni(): ?int {
        return $this->vNumeroIni;
    }

    /**
     * Get the valeur acq forfait.
     *
     * @return float|null Returns the valeur acq forfait.
     */
    public function getValeurAcqForfait(): ?float {
        return $this->valeurAcqForfait;
    }

    /**
     * Get the valeur base amortissement.
     *
     * @return float|null Returns the valeur base amortissement.
     */
    public function getValeurBaseAmortissement(): ?float {
        return $this->valeurBaseAmortissement;
    }

    /**
     * Get the valeur deduction.
     *
     * @return float|null Returns the valeur deduction.
     */
    public function getValeurDeduction(): ?float {
        return $this->valeurDeduction;
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
     * Get the valeur ht origine.
     *
     * @return float|null Returns the valeur ht origine.
     */
    public function getValeurHtOrigine(): ?float {
        return $this->valeurHtOrigine;
    }

    /**
     * Get the vnc realloc.
     *
     * @return float|null Returns the vnc realloc.
     */
    public function getVncRealloc(): ?float {
        return $this->vncRealloc;
    }

    /**
     * Get the zone libre1.
     *
     * @return string|null Returns the zone libre1.
     */
    public function getZoneLibre1(): ?string {
        return $this->zoneLibre1;
    }

    /**
     * Get the zone libre2.
     *
     * @return string|null Returns the zone libre2.
     */
    public function getZoneLibre2(): ?string {
        return $this->zoneLibre2;
    }

    /**
     * Get the zone libre3.
     *
     * @return string|null Returns the zone libre3.
     */
    public function getZoneLibre3(): ?string {
        return $this->zoneLibre3;
    }

    /**
     * Set the ad amort anterieur.
     *
     * @param float|null $adAmortAnterieur The ad amort anterieur.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdAmortAnterieur(?float $adAmortAnterieur): Immobilisations {
        $this->adAmortAnterieur = $adAmortAnterieur;
        return $this;
    }

    /**
     * Set the ad amort anterieur2.
     *
     * @param float|null $adAmortAnterieur2 The ad amort anterieur2.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdAmortAnterieur2(?float $adAmortAnterieur2): Immobilisations {
        $this->adAmortAnterieur2 = $adAmortAnterieur2;
        return $this;
    }

    /**
     * Set the ad annees amort.
     *
     * @param float|null $adAnneesAmort The ad annees amort.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdAnneesAmort(?float $adAnneesAmort): Immobilisations {
        $this->adAnneesAmort = $adAnneesAmort;
        return $this;
    }

    /**
     * Set the ad coeff degressif.
     *
     * @param float|null $adCoeffDegressif The ad coeff degressif.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdCoeffDegressif(?float $adCoeffDegressif): Immobilisations {
        $this->adCoeffDegressif = $adCoeffDegressif;
        return $this;
    }

    /**
     * Set the ad deduction amort anterieur.
     *
     * @param float|null $adDeductionAmortAnterieur The ad deduction amort anterieur.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDeductionAmortAnterieur(?float $adDeductionAmortAnterieur): Immobilisations {
        $this->adDeductionAmortAnterieur = $adDeductionAmortAnterieur;
        return $this;
    }

    /**
     * Set the ad deduction dotation.
     *
     * @param float|null $adDeductionDotation The ad deduction dotation.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDeductionDotation(?float $adDeductionDotation): Immobilisations {
        $this->adDeductionDotation = $adDeductionDotation;
        return $this;
    }

    /**
     * Set the ad dotation.
     *
     * @param float|null $adDotation The ad dotation.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDotation(?float $adDotation): Immobilisations {
        $this->adDotation = $adDotation;
        return $this;
    }

    /**
     * Set the ad dotation2.
     *
     * @param float|null $adDotation2 The ad dotation2.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDotation2(?float $adDotation2): Immobilisations {
        $this->adDotation2 = $adDotation2;
        return $this;
    }

    /**
     * Set the ad dotation except.
     *
     * @param float|null $adDotationExcept The ad dotation except.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDotationExcept(?float $adDotationExcept): Immobilisations {
        $this->adDotationExcept = $adDotationExcept;
        return $this;
    }

    /**
     * Set the ad duree.
     *
     * @param float|null $adDuree The ad duree.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDuree(?float $adDuree): Immobilisations {
        $this->adDuree = $adDuree;
        return $this;
    }

    /**
     * Set the ad duree tot.
     *
     * @param string|null $adDureeTot The ad duree tot.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdDureeTot(?string $adDureeTot): Immobilisations {
        $this->adDureeTot = $adDureeTot;
        return $this;
    }

    /**
     * Set the ad garder dot saisie.
     *
     * @param bool|null $adGarderDotSaisie The ad garder dot saisie.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdGarderDotSaisie(?bool $adGarderDotSaisie): Immobilisations {
        $this->adGarderDotSaisie = $adGarderDotSaisie;
        return $this;
    }

    /**
     * Set the ad quantite.
     *
     * @param float|null $adQuantite The ad quantite.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdQuantite(?float $adQuantite): Immobilisations {
        $this->adQuantite = $adQuantite;
        return $this;
    }

    /**
     * Set the ad taux lineaire.
     *
     * @param float|null $adTauxLineaire The ad taux lineaire.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdTauxLineaire(?float $adTauxLineaire): Immobilisations {
        $this->adTauxLineaire = $adTauxLineaire;
        return $this;
    }

    /**
     * Set the ad type.
     *
     * @param string|null $adType The ad type.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAdType(?string $adType): Immobilisations {
        $this->adType = $adType;
        return $this;
    }

    /**
     * Set the af amort anterieur.
     *
     * @param float|null $afAmortAnterieur The af amort anterieur.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfAmortAnterieur(?float $afAmortAnterieur): Immobilisations {
        $this->afAmortAnterieur = $afAmortAnterieur;
        return $this;
    }

    /**
     * Set the af annees amort.
     *
     * @param float|null $afAnneesAmort The af annees amort.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfAnneesAmort(?float $afAnneesAmort): Immobilisations {
        $this->afAnneesAmort = $afAnneesAmort;
        return $this;
    }

    /**
     * Set the af coeff degressif.
     *
     * @param float|null $afCoeffDegressif The af coeff degressif.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfCoeffDegressif(?float $afCoeffDegressif): Immobilisations {
        $this->afCoeffDegressif = $afCoeffDegressif;
        return $this;
    }

    /**
     * Set the af dotation.
     *
     * @param float|null $afDotation The af dotation.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfDotation(?float $afDotation): Immobilisations {
        $this->afDotation = $afDotation;
        return $this;
    }

    /**
     * Set the af duree.
     *
     * @param float|null $afDuree The af duree.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfDuree(?float $afDuree): Immobilisations {
        $this->afDuree = $afDuree;
        return $this;
    }

    /**
     * Set the af taux except.
     *
     * @param float|null $afTauxExcept The af taux except.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfTauxExcept(?float $afTauxExcept): Immobilisations {
        $this->afTauxExcept = $afTauxExcept;
        return $this;
    }

    /**
     * Set the af taux lineaire.
     *
     * @param float|null $afTauxLineaire The af taux lineaire.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfTauxLineaire(?float $afTauxLineaire): Immobilisations {
        $this->afTauxLineaire = $afTauxLineaire;
        return $this;
    }

    /**
     * Set the af type.
     *
     * @param string|null $afType The af type.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfType(?string $afType): Immobilisations {
        $this->afType = $afType;
        return $this;
    }

    /**
     * Set the afsii.
     *
     * @param bool|null $afsii The afsii.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setAfsii(?bool $afsii): Immobilisations {
        $this->afsii = $afsii;
        return $this;
    }

    /**
     * Set the art151 duree deja etalee.
     *
     * @param string|null $art151DureeDejaEtalee The art151 duree deja etalee.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setArt151DureeDejaEtalee(?string $art151DureeDejaEtalee): Immobilisations {
        $this->art151DureeDejaEtalee = $art151DureeDejaEtalee;
        return $this;
    }

    /**
     * Set the art151 duree etalement.
     *
     * @param string|null $art151DureeEtalement The art151 duree etalement.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setArt151DureeEtalement(?string $art151DureeEtalement): Immobilisations {
        $this->art151DureeEtalement = $art151DureeEtalement;
        return $this;
    }

    /**
     * Set the art151 montant deja etale.
     *
     * @param float|null $art151MontantDejaEtale The art151 montant deja etale.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setArt151MontantDejaEtale(?float $art151MontantDejaEtale): Immobilisations {
        $this->art151MontantDejaEtale = $art151MontantDejaEtale;
        return $this;
    }

    /**
     * Set the art151 montant etale annee.
     *
     * @param float|null $art151MontantEtaleAnnee The art151 montant etale annee.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setArt151MontantEtaleAnnee(?float $art151MontantEtaleAnnee): Immobilisations {
        $this->art151MontantEtaleAnnee = $art151MontantEtaleAnnee;
        return $this;
    }

    /**
     * Set the base calcul.
     *
     * @param int|null $baseCalcul The base calcul.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setBaseCalcul(?int $baseCalcul): Immobilisations {
        $this->baseCalcul = $baseCalcul;
        return $this;
    }

    /**
     * Set the base taxe pro.
     *
     * @param float|null $baseTaxePro The base taxe pro.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setBaseTaxePro(?float $baseTaxePro): Immobilisations {
        $this->baseTaxePro = $baseTaxePro;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string|null $bureau The bureau.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setBureau(?string $bureau): Immobilisations {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the c taux imp.
     *
     * @param float|null $cTauxImp The c taux imp.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCTauxImp(?float $cTauxImp): Immobilisations {
        $this->cTauxImp = $cTauxImp;
        return $this;
    }

    /**
     * Set the c valeur euros.
     *
     * @param float|null $cValeurEuros The c valeur euros.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCValeurEuros(?float $cValeurEuros): Immobilisations {
        $this->cValeurEuros = $cValeurEuros;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCentreAnalytique(?string $centreAnalytique): Immobilisations {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCodeTva(?string $codeTva): Immobilisations {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compte frn.
     *
     * @param string|null $compteFrn The compte frn.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCompteFrn(?string $compteFrn): Immobilisations {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the cr is dot.
     *
     * @param bool|null $crIsDot The cr is dot.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrIsDot(?bool $crIsDot): Immobilisations {
        $this->crIsDot = $crIsDot;
        return $this;
    }

    /**
     * Set the crr151 motif.
     *
     * @param bool|null $crr151Motif The crr151 motif.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrr151Motif(?bool $crr151Motif): Immobilisations {
        $this->crr151Motif = $crr151Motif;
        return $this;
    }

    /**
     * Set the crr151 pm value ct.
     *
     * @param float|null $crr151PmValueCt The crr151 pm value ct.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrr151PmValueCt(?float $crr151PmValueCt): Immobilisations {
        $this->crr151PmValueCt = $crr151PmValueCt;
        return $this;
    }

    /**
     * Set the crr151 pm value lt.
     *
     * @param float|null $crr151PmValueLt The crr151 pm value lt.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrr151PmValueLt(?float $crr151PmValueLt): Immobilisations {
        $this->crr151PmValueLt = $crr151PmValueLt;
        return $this;
    }

    /**
     * Set the crr date.
     *
     * @param DateTime|null $crrDate The crr date.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrDate(?DateTime $crrDate): Immobilisations {
        $this->crrDate = $crrDate;
        return $this;
    }

    /**
     * Set the crr px cession ht.
     *
     * @param float|null $crrPxCessionHt The crr px cession ht.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrPxCessionHt(?float $crrPxCessionHt): Immobilisations {
        $this->crrPxCessionHt = $crrPxCessionHt;
        return $this;
    }

    /**
     * Set the crr qte vendue.
     *
     * @param float|null $crrQteVendue The crr qte vendue.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrQteVendue(?float $crrQteVendue): Immobilisations {
        $this->crrQteVendue = $crrQteVendue;
        return $this;
    }

    /**
     * Set the crr suppl amort.
     *
     * @param float|null $crrSupplAmort The crr suppl amort.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrSupplAmort(?float $crrSupplAmort): Immobilisations {
        $this->crrSupplAmort = $crrSupplAmort;
        return $this;
    }

    /**
     * Set the crr suppl valeur.
     *
     * @param float|null $crrSupplValeur The crr suppl valeur.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrSupplValeur(?float $crrSupplValeur): Immobilisations {
        $this->crrSupplValeur = $crrSupplValeur;
        return $this;
    }

    /**
     * Set the crr type.
     *
     * @param string|null $crrType The crr type.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrType(?string $crrType): Immobilisations {
        $this->crrType = $crrType;
        return $this;
    }

    /**
     * Set the crrpm value ct.
     *
     * @param float|null $crrpmValueCt The crrpm value ct.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrpmValueCt(?float $crrpmValueCt): Immobilisations {
        $this->crrpmValueCt = $crrpmValueCt;
        return $this;
    }

    /**
     * Set the crrpm value ctf.
     *
     * @param float|null $crrpmValueCtf The crrpm value ctf.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrpmValueCtf(?float $crrpmValueCtf): Immobilisations {
        $this->crrpmValueCtf = $crrpmValueCtf;
        return $this;
    }

    /**
     * Set the crrpm value lt.
     *
     * @param float|null $crrpmValueLt The crrpm value lt.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrpmValueLt(?float $crrpmValueLt): Immobilisations {
        $this->crrpmValueLt = $crrpmValueLt;
        return $this;
    }

    /**
     * Set the crrpm value ltf.
     *
     * @param float|null $crrpmValueLtf The crrpm value ltf.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setCrrpmValueLtf(?float $crrpmValueLtf): Immobilisations {
        $this->crrpmValueLtf = $crrpmValueLtf;
        return $this;
    }

    /**
     * Set the date acq forfait.
     *
     * @param DateTime|null $dateAcqForfait The date acq forfait.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setDateAcqForfait(?DateTime $dateAcqForfait): Immobilisations {
        $this->dateAcqForfait = $dateAcqForfait;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime|null $dateAcquisition The date acquisition.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setDateAcquisition(?DateTime $dateAcquisition): Immobilisations {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime|null $dateMiseService The date mise service.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setDateMiseService(?DateTime $dateMiseService): Immobilisations {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the date reeval.
     *
     * @param DateTime|null $dateReeval The date reeval.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setDateReeval(?DateTime $dateReeval): Immobilisations {
        $this->dateReeval = $dateReeval;
        return $this;
    }

    /**
     * Set the din.
     *
     * @param bool|null $din The din.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setDin(?bool $din): Immobilisations {
        $this->din = $din;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setEtat(?string $etat): Immobilisations {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the famille.
     *
     * @param string|null $famille The famille.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setFamille(?string $famille): Immobilisations {
        $this->famille = $famille;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string|null $guidVehicule The guid vehicule.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setGuidVehicule(?string $guidVehicule): Immobilisations {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setLibelle(?string $libelle): Immobilisations {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string|null $libelleFrn The libelle frn.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setLibelleFrn(?string $libelleFrn): Immobilisations {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the libelle quantite.
     *
     * @param string|null $libelleQuantite The libelle quantite.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setLibelleQuantite(?string $libelleQuantite): Immobilisations {
        $this->libelleQuantite = $libelleQuantite;
        return $this;
    }

    /**
     * Set the limite amort.
     *
     * @param float|null $limiteAmort The limite amort.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setLimiteAmort(?float $limiteAmort): Immobilisations {
        $this->limiteAmort = $limiteAmort;
        return $this;
    }

    /**
     * Set the majoration.
     *
     * @param bool|null $majoration The majoration.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setMajoration(?bool $majoration): Immobilisations {
        $this->majoration = $majoration;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool|null $materiauxAgricole The materiaux agricole.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setMateriauxAgricole(?bool $materiauxAgricole): Immobilisations {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float|null $montantTva The montant tva.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setMontantTva(?float $montantTva): Immobilisations {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string|null $natureAnalytique The nature analytique.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNatureAnalytique(?string $natureAnalytique): Immobilisations {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb mois majoration.
     *
     * @param string|null $nbMoisMajoration The nb mois majoration.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNbMoisMajoration(?string $nbMoisMajoration): Immobilisations {
        $this->nbMoisMajoration = $nbMoisMajoration;
        return $this;
    }

    /**
     * Set the num cpt trans dot.
     *
     * @param string|null $numCptTransDot The num cpt trans dot.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumCptTransDot(?string $numCptTransDot): Immobilisations {
        $this->numCptTransDot = $numCptTransDot;
        return $this;
    }

    /**
     * Set the num doss org.
     *
     * @param string|null $numDossOrg The num doss org.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumDossOrg(?string $numDossOrg): Immobilisations {
        $this->numDossOrg = $numDossOrg;
        return $this;
    }

    /**
     * Set the num ens realloc.
     *
     * @param int|null $numEnsRealloc The num ens realloc.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumEnsRealloc(?int $numEnsRealloc): Immobilisations {
        $this->numEnsRealloc = $numEnsRealloc;
        return $this;
    }

    /**
     * Set the num ensemble.
     *
     * @param int|null $numEnsemble The num ensemble.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumEnsemble(?int $numEnsemble): Immobilisations {
        $this->numEnsemble = $numEnsemble;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumero(?int $numero): Immobilisations {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumeroCompte(?string $numeroCompte): Immobilisations {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int|null $numeroDeux The numero deux.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumeroDeux(?int $numeroDeux): Immobilisations {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setNumeroPj(?int $numeroPj): Immobilisations {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the pilotage.
     *
     * @param bool|null $pilotage The pilotage.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setPilotage(?bool $pilotage): Immobilisations {
        $this->pilotage = $pilotage;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setQuantite(?float $quantite): Immobilisations {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setService(?string $service): Immobilisations {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the site.
     *
     * @param string|null $site The site.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setSite(?string $site): Immobilisations {
        $this->site = $site;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setTauxTva(?float $tauxTva): Immobilisations {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the taxe fonciere.
     *
     * @param bool|null $taxeFonciere The taxe fonciere.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setTaxeFonciere(?bool $taxeFonciere): Immobilisations {
        $this->taxeFonciere = $taxeFonciere;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool|null $taxePro The taxe pro.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setTaxePro(?bool $taxePro): Immobilisations {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the tp date origine.
     *
     * @param DateTime|null $tpDateOrigine The tp date origine.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setTpDateOrigine(?DateTime $tpDateOrigine): Immobilisations {
        $this->tpDateOrigine = $tpDateOrigine;
        return $this;
    }

    /**
     * Set the v date.
     *
     * @param DateTime|null $vDate The v date.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVDate(?DateTime $vDate): Immobilisations {
        $this->vDate = $vDate;
        return $this;
    }

    /**
     * Set the v numero.
     *
     * @param int|null $vNumero The v numero.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVNumero(?int $vNumero): Immobilisations {
        $this->vNumero = $vNumero;
        return $this;
    }

    /**
     * Set the v numero compte.
     *
     * @param string|null $vNumeroCompte The v numero compte.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVNumeroCompte(?string $vNumeroCompte): Immobilisations {
        $this->vNumeroCompte = $vNumeroCompte;
        return $this;
    }

    /**
     * Set the v numero compte ini.
     *
     * @param string|null $vNumeroCompteIni The v numero compte ini.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVNumeroCompteIni(?string $vNumeroCompteIni): Immobilisations {
        $this->vNumeroCompteIni = $vNumeroCompteIni;
        return $this;
    }

    /**
     * Set the v numero deux.
     *
     * @param int|null $vNumeroDeux The v numero deux.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVNumeroDeux(?int $vNumeroDeux): Immobilisations {
        $this->vNumeroDeux = $vNumeroDeux;
        return $this;
    }

    /**
     * Set the v numero deux ini.
     *
     * @param int|null $vNumeroDeuxIni The v numero deux ini.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVNumeroDeuxIni(?int $vNumeroDeuxIni): Immobilisations {
        $this->vNumeroDeuxIni = $vNumeroDeuxIni;
        return $this;
    }

    /**
     * Set the v numero ini.
     *
     * @param int|null $vNumeroIni The v numero ini.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVNumeroIni(?int $vNumeroIni): Immobilisations {
        $this->vNumeroIni = $vNumeroIni;
        return $this;
    }

    /**
     * Set the valeur acq forfait.
     *
     * @param float|null $valeurAcqForfait The valeur acq forfait.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setValeurAcqForfait(?float $valeurAcqForfait): Immobilisations {
        $this->valeurAcqForfait = $valeurAcqForfait;
        return $this;
    }

    /**
     * Set the valeur base amortissement.
     *
     * @param float|null $valeurBaseAmortissement The valeur base amortissement.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setValeurBaseAmortissement(?float $valeurBaseAmortissement): Immobilisations {
        $this->valeurBaseAmortissement = $valeurBaseAmortissement;
        return $this;
    }

    /**
     * Set the valeur deduction.
     *
     * @param float|null $valeurDeduction The valeur deduction.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setValeurDeduction(?float $valeurDeduction): Immobilisations {
        $this->valeurDeduction = $valeurDeduction;
        return $this;
    }

    /**
     * Set the valeur ht.
     *
     * @param float|null $valeurHt The valeur ht.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setValeurHt(?float $valeurHt): Immobilisations {
        $this->valeurHt = $valeurHt;
        return $this;
    }

    /**
     * Set the valeur ht origine.
     *
     * @param float|null $valeurHtOrigine The valeur ht origine.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setValeurHtOrigine(?float $valeurHtOrigine): Immobilisations {
        $this->valeurHtOrigine = $valeurHtOrigine;
        return $this;
    }

    /**
     * Set the vnc realloc.
     *
     * @param float|null $vncRealloc The vnc realloc.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setVncRealloc(?float $vncRealloc): Immobilisations {
        $this->vncRealloc = $vncRealloc;
        return $this;
    }

    /**
     * Set the zone libre1.
     *
     * @param string|null $zoneLibre1 The zone libre1.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setZoneLibre1(?string $zoneLibre1): Immobilisations {
        $this->zoneLibre1 = $zoneLibre1;
        return $this;
    }

    /**
     * Set the zone libre2.
     *
     * @param string|null $zoneLibre2 The zone libre2.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setZoneLibre2(?string $zoneLibre2): Immobilisations {
        $this->zoneLibre2 = $zoneLibre2;
        return $this;
    }

    /**
     * Set the zone libre3.
     *
     * @param string|null $zoneLibre3 The zone libre3.
     * @return Immobilisations Returns this Immobilisations.
     */
    public function setZoneLibre3(?string $zoneLibre3): Immobilisations {
        $this->zoneLibre3 = $zoneLibre3;
        return $this;
    }
}
