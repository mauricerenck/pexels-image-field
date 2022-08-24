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
 * Dossier3.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Dossier3 {

    /**
     * Achat vente automate.
     *
     * @var bool|null
     */
    private $achatVenteAutomate;

    /**
     * Achat vente local tva.
     *
     * @var string|null
     */
    private $achatVenteLocalTva;

    /**
     * Achat vente stop tva.
     *
     * @var bool|null
     */
    private $achatVenteStopTva;

    /**
     * Bons a payer.
     *
     * @var bool|null
     */
    private $bonsAPayer;

    /**
     * Code ics.
     *
     * @var string|null
     */
    private $codeIcs;

    /**
     * Code journal revision.
     *
     * @var string|null
     */
    private $codeJournalRevision;

    /**
     * Code journal transf immo.
     *
     * @var string|null
     */
    private $codeJournalTransfImmo;

    /**
     * Comp cli frs.
     *
     * @var bool|null
     */
    private $compCliFrs;

    /**
     * Compte debut assurance.
     *
     * @var string|null
     */
    private $compteDebutAssurance;

    /**
     * Compte debut bail.
     *
     * @var string|null
     */
    private $compteDebutBail;

    /**
     * Compte debut car.
     *
     * @var string|null
     */
    private $compteDebutCar;

    /**
     * Compte debut subventions.
     *
     * @var string|null
     */
    private $compteDebutSubventions;

    /**
     * Compte fin assurance.
     *
     * @var string|null
     */
    private $compteFinAssurance;

    /**
     * Compte fin bail.
     *
     * @var string|null
     */
    private $compteFinBail;

    /**
     * Compte fin car.
     *
     * @var string|null
     */
    private $compteFinCar;

    /**
     * Compte fin subventions.
     *
     * @var string|null
     */
    private $compteFinSubventions;

    /**
     * Compte tvacar.
     *
     * @var string|null
     */
    private $compteTvacar;

    /**
     * Conserve mois rb.
     *
     * @var bool|null
     */
    private $conserveMoisRb;

    /**
     * Controle edition.
     *
     * @var bool|null
     */
    private $controleEdition;

    /**
     * Controle exist ecr.
     *
     * @var string|null
     */
    private $controleExistEcr;

    /**
     * Controle ref tire.
     *
     * @var bool|null
     */
    private $controleRefTire;

    /**
     * Cpt transf immo communs.
     *
     * @var bool|null
     */
    private $cptTransfImmoCommuns;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Date transf cb.
     *
     * @var DateTime|null
     */
    private $dateTransfCb;

    /**
     * Date transf cli douteux.
     *
     * @var DateTime|null
     */
    private $dateTransfCliDouteux;

    /**
     * Date transf int courus.
     *
     * @var DateTime|null
     */
    private $dateTransfIntCourus;

    /**
     * Date transf int extournes.
     *
     * @var DateTime|null
     */
    private $dateTransfIntExtournes;

    /**
     * Date transf lf.
     *
     * @var DateTime|null
     */
    private $dateTransfLf;

    /**
     * Date transf prov cp.
     *
     * @var DateTime|null
     */
    private $dateTransfProvCp;

    /**
     * Date transfert ech cb.
     *
     * @var DateTime|null
     */
    private $dateTransfertEchCb;

    /**
     * Date transfert ech lf.
     *
     * @var DateTime|null
     */
    private $dateTransfertEchLf;

    /**
     * Date transfert echeance.
     *
     * @var DateTime|null
     */
    private $dateTransfertEcheance;

    /**
     * Debut calcul immo.
     *
     * @var DateTime|null
     */
    private $debutCalculImmo;

    /**
     * Delai rejet effet.
     *
     * @var string|null
     */
    private $delaiRejetEffet;

    /**
     * Detail cb.
     *
     * @var bool|null
     */
    private $detailCb;

    /**
     * Detail immo.
     *
     * @var bool|null
     */
    private $detailImmo;

    /**
     * Dot franc centime.
     *
     * @var string|null
     */
    private $dotFrancCentime;

    /**
     * Edi400.
     *
     * @var bool|null
     */
    private $edi400;

    /**
     * Edit ana contrepasse.
     *
     * @var bool|null
     */
    private $editAnaContrepasse;

    /**
     * Fin calcul immo.
     *
     * @var DateTime|null
     */
    private $finCalculImmo;

    /**
     * Folio revision.
     *
     * @var int|null
     */
    private $folioRevision;

    /**
     * Folio transf immo.
     *
     * @var int|null
     */
    private $folioTransfImmo;

    /**
     * Gestion pmag client.
     *
     * @var bool|null
     */
    private $gestionPmagClient;

    /**
     * Gestion traite papier.
     *
     * @var bool|null
     */
    private $gestionTraitePapier;

    /**
     * Gestion virement frn.
     *
     * @var bool|null
     */
    private $gestionVirementFrn;

    /**
     * Immo detail lignes.
     *
     * @var bool|null
     */
    private $immoDetailLignes;

    /**
     * Immo detail par cpt.
     *
     * @var bool|null
     */
    private $immoDetailParCpt;

    /**
     * Immo edit ensemble.
     *
     * @var bool|null
     */
    private $immoEditEnsemble;

    /**
     * Immo jours par an.
     *
     * @var int|null
     */
    private $immoJoursParAn;

    /**
     * Immo ss tot immo.
     *
     * @var bool|null
     */
    private $immoSsTotImmo;

    /**
     * Immo tot par compte.
     *
     * @var bool|null
     */
    private $immoTotParCompte;

    /**
     * Immo transfert forfait vers reel.
     *
     * @var bool|null
     */
    private $immoTransfertForfaitVersReel;

    /**
     * Immo tri analytique.
     *
     * @var bool|null
     */
    private $immoTriAnalytique;

    /**
     * Immo tri par date.
     *
     * @var bool|null
     */
    private $immoTriParDate;

    /**
     * Immo tri par service.
     *
     * @var bool|null
     */
    private $immoTriParService;

    /**
     * Immo type liasse.
     *
     * @var string|null
     */
    private $immoTypeLiasse;

    /**
     * Is client exp.
     *
     * @var bool|null
     */
    private $isClientExp;

    /**
     * Lettre pvaut bo.
     *
     * @var bool|null
     */
    private $lettrePvautBo;

    /**
     * Lib variable1.
     *
     * @var string|null
     */
    private $libVariable1;

    /**
     * Lib variable2.
     *
     * @var string|null
     */
    private $libVariable2;

    /**
     * Lib variable3.
     *
     * @var string|null
     */
    private $libVariable3;

    /**
     * Mise en portefeuille bic f.
     *
     * @var string|null
     */
    private $miseEnPortefeuilleBicF;

    /**
     * Mise en portefeuille dom f.
     *
     * @var string|null
     */
    private $miseEnPortefeuilleDomF;

    /**
     * Mise en portefeuille iban f.
     *
     * @var string|null
     */
    private $miseEnPortefeuilleIbanF;

    /**
     * Mise en portefeuille rib f.
     *
     * @var string|null
     */
    private $miseEnPortefeuilleRibF;

    /**
     * Multi ech client.
     *
     * @var bool|null
     */
    private $multiEchClient;

    /**
     * Multi ech frn.
     *
     * @var bool|null
     */
    private $multiEchFrn;

    /**
     * Multi ech par code lib auto.
     *
     * @var bool|null
     */
    private $multiEchParCodeLibAuto;

    /**
     * Ne plus afficher.
     *
     * @var bool|null
     */
    private $nePlusAfficher;

    /**
     * Niv tri analytique.
     *
     * @var string|null
     */
    private $nivTriAnalytique;

    /**
     * Niv tri bureau.
     *
     * @var string|null
     */
    private $nivTriBureau;

    /**
     * Niv tri famille.
     *
     * @var string|null
     */
    private $nivTriFamille;

    /**
     * Niv tri nat.
     *
     * @var string|null
     */
    private $nivTriNat;

    /**
     * Niv tri service.
     *
     * @var string|null
     */
    private $nivTriService;

    /**
     * Niv tri site.
     *
     * @var string|null
     */
    private $nivTriSite;

    /**
     * Niv tri zl1.
     *
     * @var string|null
     */
    private $nivTriZl1;

    /**
     * Niv tri zl2.
     *
     * @var string|null
     */
    private $nivTriZl2;

    /**
     * Niv tri zl3.
     *
     * @var string|null
     */
    private $nivTriZl3;

    /**
     * Nom lettre p.
     *
     * @var string|null
     */
    private $nomLettreP;

    /**
     * Nom lettre pc.
     *
     * @var string|null
     */
    private $nomLettrePc;

    /**
     * Num chrono bo.
     *
     * @var int|null
     */
    private $numChronoBo;

    /**
     * Num lot cli douteux.
     *
     * @var int|null
     */
    private $numLotCliDouteux;

    /**
     * Num lot ecrit trans assurance.
     *
     * @var int|null
     */
    private $numLotEcritTransAssurance;

    /**
     * Num lot ecrit trans baux.
     *
     * @var int|null
     */
    private $numLotEcritTransBaux;

    /**
     * Num lot ecrit trans car.
     *
     * @var int|null
     */
    private $numLotEcritTransCar;

    /**
     * Num lot ecrit trans periodicite.
     *
     * @var int|null
     */
    private $numLotEcritTransPeriodicite;

    /**
     * Num lot ecrit trans subventions.
     *
     * @var int|null
     */
    private $numLotEcritTransSubventions;

    /**
     * Num lot ecrit transf cb.
     *
     * @var int|null
     */
    private $numLotEcritTransfCb;

    /**
     * Num lot ecrit transf immo.
     *
     * @var int|null
     */
    private $numLotEcritTransfImmo;

    /**
     * Num lot ecrit transf lf.
     *
     * @var int|null
     */
    private $numLotEcritTransfLf;

    /**
     * Num lot int courus.
     *
     * @var int|null
     */
    private $numLotIntCourus;

    /**
     * Num lot int extournes.
     *
     * @var int|null
     */
    private $numLotIntExtournes;

    /**
     * Num lot prov cp.
     *
     * @var int|null
     */
    private $numLotProvCp;

    /**
     * Option import mvt rb.
     *
     * @var string|null
     */
    private $optionImportMvtRb;

    /**
     * Periode revision.
     *
     * @var DateTime|null
     */
    private $periodeRevision;

    /**
     * Periode transf immo.
     *
     * @var DateTime|null
     */
    private $periodeTransfImmo;

    /**
     * Periodicite utiliser libelle.
     *
     * @var int|null
     */
    private $periodiciteUtiliserLibelle;

    /**
     * Prochain lot lcr.
     *
     * @var int|null
     */
    private $prochainLotLcr;

    /**
     * Prochain lot lettre p.
     *
     * @var int|null
     */
    private $prochainLotLettreP;

    /**
     * Prochain lot traite.
     *
     * @var int|null
     */
    private $prochainLotTraite;

    /**
     * Prochain num cb.
     *
     * @var int|null
     */
    private $prochainNumCb;

    /**
     * Prochain num immo.
     *
     * @var int|null
     */
    private $prochainNumImmo;

    /**
     * Prochain num lf.
     *
     * @var int|null
     */
    private $prochainNumLf;

    /**
     * Prochain num pj.
     *
     * @var int|null
     */
    private $prochainNumPj;

    /**
     * Racine import mvt rb.
     *
     * @var string|null
     */
    private $racineImportMvtRb;

    /**
     * Rebut vaut cession.
     *
     * @var bool|null
     */
    private $rebutVautCession;

    /**
     * Ref remise lcr.
     *
     * @var int|null
     */
    private $refRemiseLcr;

    /**
     * Ref virement frn.
     *
     * @var int|null
     */
    private $refVirementFrn;

    /**
     * Regroup four cpt ech.
     *
     * @var bool|null
     */
    private $regroupFourCptEch;

    /**
     * Rep ass.
     *
     * @var bool|null
     */
    private $repAss;

    /**
     * Rep budget.
     *
     * @var bool|null
     */
    private $repBudget;

    /**
     * Rep car.
     *
     * @var bool|null
     */
    private $repCar;

    /**
     * Rep cb.
     *
     * @var bool|null
     */
    private $repCb;

    /**
     * Rep cl.
     *
     * @var bool|null
     */
    private $repCl;

    /**
     * Rep compta gen.
     *
     * @var bool|null
     */
    private $repComptaGen;

    /**
     * Rep dec tva.
     *
     * @var bool|null
     */
    private $repDecTva;

    /**
     * Rep dos rev.
     *
     * @var bool|null
     */
    private $repDosRev;

    /**
     * Rep emprunts.
     *
     * @var bool|null
     */
    private $repEmprunts;

    /**
     * Rep es.
     *
     * @var bool|null
     */
    private $repEs;

    /**
     * Rep immo.
     *
     * @var bool|null
     */
    private $repImmo;

    /**
     * Rep loc fi.
     *
     * @var bool|null
     */
    private $repLocFi;

    /**
     * Rep partielle.
     *
     * @var bool|null
     */
    private $repPartielle;

    /**
     * Rep subv.
     *
     * @var bool|null
     */
    private $repSubv;

    /**
     * Rep vmp.
     *
     * @var bool|null
     */
    private $repVmp;

    /**
     * Revis solde en euro.
     *
     * @var bool|null
     */
    private $revisSoldeEnEuro;

    /**
     * Revis voir solde ex.
     *
     * @var bool|null
     */
    private $revisVoirSoldeEx;

    /**
     * Saisie caisse.
     *
     * @var bool|null
     */
    private $saisieCaisse;

    /**
     * Saisie num piece.
     *
     * @var string|null
     */
    private $saisieNumPiece;

    /**
     * Sauver periodicite.
     *
     * @var bool|null
     */
    private $sauverPeriodicite;

    /**
     * Suivi aux client.
     *
     * @var bool|null
     */
    private $suiviAuxClient;

    /**
     * Suivi aux frn.
     *
     * @var bool|null
     */
    private $suiviAuxFrn;

    /**
     * Suivi devises.
     *
     * @var bool|null
     */
    private $suiviDevises;

    /**
     * Transfert immo ok.
     *
     * @var bool|null
     */
    private $transfertImmoOk;

    /**
     * Type pmag client.
     *
     * @var int|null
     */
    private $typePmagClient;

    /**
     * Type transfert immo.
     *
     * @var string|null
     */
    private $typeTransfertImmo;

    /**
     * Type transfert tiers.
     *
     * @var string|null
     */
    private $typeTransfertTiers;

    /**
     * Type transfert tiers f.
     *
     * @var string|null
     */
    private $typeTransfertTiersF;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the achat vente automate.
     *
     * @return bool|null Returns the achat vente automate.
     */
    public function getAchatVenteAutomate(): ?bool {
        return $this->achatVenteAutomate;
    }

    /**
     * Get the achat vente local tva.
     *
     * @return string|null Returns the achat vente local tva.
     */
    public function getAchatVenteLocalTva(): ?string {
        return $this->achatVenteLocalTva;
    }

    /**
     * Get the achat vente stop tva.
     *
     * @return bool|null Returns the achat vente stop tva.
     */
    public function getAchatVenteStopTva(): ?bool {
        return $this->achatVenteStopTva;
    }

    /**
     * Get the bons a payer.
     *
     * @return bool|null Returns the bons a payer.
     */
    public function getBonsAPayer(): ?bool {
        return $this->bonsAPayer;
    }

    /**
     * Get the code ics.
     *
     * @return string|null Returns the code ics.
     */
    public function getCodeIcs(): ?string {
        return $this->codeIcs;
    }

    /**
     * Get the code journal revision.
     *
     * @return string|null Returns the code journal revision.
     */
    public function getCodeJournalRevision(): ?string {
        return $this->codeJournalRevision;
    }

    /**
     * Get the code journal transf immo.
     *
     * @return string|null Returns the code journal transf immo.
     */
    public function getCodeJournalTransfImmo(): ?string {
        return $this->codeJournalTransfImmo;
    }

    /**
     * Get the comp cli frs.
     *
     * @return bool|null Returns the comp cli frs.
     */
    public function getCompCliFrs(): ?bool {
        return $this->compCliFrs;
    }

    /**
     * Get the compte debut assurance.
     *
     * @return string|null Returns the compte debut assurance.
     */
    public function getCompteDebutAssurance(): ?string {
        return $this->compteDebutAssurance;
    }

    /**
     * Get the compte debut bail.
     *
     * @return string|null Returns the compte debut bail.
     */
    public function getCompteDebutBail(): ?string {
        return $this->compteDebutBail;
    }

    /**
     * Get the compte debut car.
     *
     * @return string|null Returns the compte debut car.
     */
    public function getCompteDebutCar(): ?string {
        return $this->compteDebutCar;
    }

    /**
     * Get the compte debut subventions.
     *
     * @return string|null Returns the compte debut subventions.
     */
    public function getCompteDebutSubventions(): ?string {
        return $this->compteDebutSubventions;
    }

    /**
     * Get the compte fin assurance.
     *
     * @return string|null Returns the compte fin assurance.
     */
    public function getCompteFinAssurance(): ?string {
        return $this->compteFinAssurance;
    }

    /**
     * Get the compte fin bail.
     *
     * @return string|null Returns the compte fin bail.
     */
    public function getCompteFinBail(): ?string {
        return $this->compteFinBail;
    }

    /**
     * Get the compte fin car.
     *
     * @return string|null Returns the compte fin car.
     */
    public function getCompteFinCar(): ?string {
        return $this->compteFinCar;
    }

    /**
     * Get the compte fin subventions.
     *
     * @return string|null Returns the compte fin subventions.
     */
    public function getCompteFinSubventions(): ?string {
        return $this->compteFinSubventions;
    }

    /**
     * Get the compte tvacar.
     *
     * @return string|null Returns the compte tvacar.
     */
    public function getCompteTvacar(): ?string {
        return $this->compteTvacar;
    }

    /**
     * Get the conserve mois rb.
     *
     * @return bool|null Returns the conserve mois rb.
     */
    public function getConserveMoisRb(): ?bool {
        return $this->conserveMoisRb;
    }

    /**
     * Get the controle edition.
     *
     * @return bool|null Returns the controle edition.
     */
    public function getControleEdition(): ?bool {
        return $this->controleEdition;
    }

    /**
     * Get the controle exist ecr.
     *
     * @return string|null Returns the controle exist ecr.
     */
    public function getControleExistEcr(): ?string {
        return $this->controleExistEcr;
    }

    /**
     * Get the controle ref tire.
     *
     * @return bool|null Returns the controle ref tire.
     */
    public function getControleRefTire(): ?bool {
        return $this->controleRefTire;
    }

    /**
     * Get the cpt transf immo communs.
     *
     * @return bool|null Returns the cpt transf immo communs.
     */
    public function getCptTransfImmoCommuns(): ?bool {
        return $this->cptTransfImmoCommuns;
    }

    /**
     * Get the date revision.
     *
     * @return DateTime|null Returns the date revision.
     */
    public function getDateRevision(): ?DateTime {
        return $this->dateRevision;
    }

    /**
     * Get the date transf cb.
     *
     * @return DateTime|null Returns the date transf cb.
     */
    public function getDateTransfCb(): ?DateTime {
        return $this->dateTransfCb;
    }

    /**
     * Get the date transf cli douteux.
     *
     * @return DateTime|null Returns the date transf cli douteux.
     */
    public function getDateTransfCliDouteux(): ?DateTime {
        return $this->dateTransfCliDouteux;
    }

    /**
     * Get the date transf int courus.
     *
     * @return DateTime|null Returns the date transf int courus.
     */
    public function getDateTransfIntCourus(): ?DateTime {
        return $this->dateTransfIntCourus;
    }

    /**
     * Get the date transf int extournes.
     *
     * @return DateTime|null Returns the date transf int extournes.
     */
    public function getDateTransfIntExtournes(): ?DateTime {
        return $this->dateTransfIntExtournes;
    }

    /**
     * Get the date transf lf.
     *
     * @return DateTime|null Returns the date transf lf.
     */
    public function getDateTransfLf(): ?DateTime {
        return $this->dateTransfLf;
    }

    /**
     * Get the date transf prov cp.
     *
     * @return DateTime|null Returns the date transf prov cp.
     */
    public function getDateTransfProvCp(): ?DateTime {
        return $this->dateTransfProvCp;
    }

    /**
     * Get the date transfert ech cb.
     *
     * @return DateTime|null Returns the date transfert ech cb.
     */
    public function getDateTransfertEchCb(): ?DateTime {
        return $this->dateTransfertEchCb;
    }

    /**
     * Get the date transfert ech lf.
     *
     * @return DateTime|null Returns the date transfert ech lf.
     */
    public function getDateTransfertEchLf(): ?DateTime {
        return $this->dateTransfertEchLf;
    }

    /**
     * Get the date transfert echeance.
     *
     * @return DateTime|null Returns the date transfert echeance.
     */
    public function getDateTransfertEcheance(): ?DateTime {
        return $this->dateTransfertEcheance;
    }

    /**
     * Get the debut calcul immo.
     *
     * @return DateTime|null Returns the debut calcul immo.
     */
    public function getDebutCalculImmo(): ?DateTime {
        return $this->debutCalculImmo;
    }

    /**
     * Get the delai rejet effet.
     *
     * @return string|null Returns the delai rejet effet.
     */
    public function getDelaiRejetEffet(): ?string {
        return $this->delaiRejetEffet;
    }

    /**
     * Get the detail cb.
     *
     * @return bool|null Returns the detail cb.
     */
    public function getDetailCb(): ?bool {
        return $this->detailCb;
    }

    /**
     * Get the detail immo.
     *
     * @return bool|null Returns the detail immo.
     */
    public function getDetailImmo(): ?bool {
        return $this->detailImmo;
    }

    /**
     * Get the dot franc centime.
     *
     * @return string|null Returns the dot franc centime.
     */
    public function getDotFrancCentime(): ?string {
        return $this->dotFrancCentime;
    }

    /**
     * Get the edi400.
     *
     * @return bool|null Returns the edi400.
     */
    public function getEdi400(): ?bool {
        return $this->edi400;
    }

    /**
     * Get the edit ana contrepasse.
     *
     * @return bool|null Returns the edit ana contrepasse.
     */
    public function getEditAnaContrepasse(): ?bool {
        return $this->editAnaContrepasse;
    }

    /**
     * Get the fin calcul immo.
     *
     * @return DateTime|null Returns the fin calcul immo.
     */
    public function getFinCalculImmo(): ?DateTime {
        return $this->finCalculImmo;
    }

    /**
     * Get the folio revision.
     *
     * @return int|null Returns the folio revision.
     */
    public function getFolioRevision(): ?int {
        return $this->folioRevision;
    }

    /**
     * Get the folio transf immo.
     *
     * @return int|null Returns the folio transf immo.
     */
    public function getFolioTransfImmo(): ?int {
        return $this->folioTransfImmo;
    }

    /**
     * Get the gestion pmag client.
     *
     * @return bool|null Returns the gestion pmag client.
     */
    public function getGestionPmagClient(): ?bool {
        return $this->gestionPmagClient;
    }

    /**
     * Get the gestion traite papier.
     *
     * @return bool|null Returns the gestion traite papier.
     */
    public function getGestionTraitePapier(): ?bool {
        return $this->gestionTraitePapier;
    }

    /**
     * Get the gestion virement frn.
     *
     * @return bool|null Returns the gestion virement frn.
     */
    public function getGestionVirementFrn(): ?bool {
        return $this->gestionVirementFrn;
    }

    /**
     * Get the immo detail lignes.
     *
     * @return bool|null Returns the immo detail lignes.
     */
    public function getImmoDetailLignes(): ?bool {
        return $this->immoDetailLignes;
    }

    /**
     * Get the immo detail par cpt.
     *
     * @return bool|null Returns the immo detail par cpt.
     */
    public function getImmoDetailParCpt(): ?bool {
        return $this->immoDetailParCpt;
    }

    /**
     * Get the immo edit ensemble.
     *
     * @return bool|null Returns the immo edit ensemble.
     */
    public function getImmoEditEnsemble(): ?bool {
        return $this->immoEditEnsemble;
    }

    /**
     * Get the immo jours par an.
     *
     * @return int|null Returns the immo jours par an.
     */
    public function getImmoJoursParAn(): ?int {
        return $this->immoJoursParAn;
    }

    /**
     * Get the immo ss tot immo.
     *
     * @return bool|null Returns the immo ss tot immo.
     */
    public function getImmoSsTotImmo(): ?bool {
        return $this->immoSsTotImmo;
    }

    /**
     * Get the immo tot par compte.
     *
     * @return bool|null Returns the immo tot par compte.
     */
    public function getImmoTotParCompte(): ?bool {
        return $this->immoTotParCompte;
    }

    /**
     * Get the immo transfert forfait vers reel.
     *
     * @return bool|null Returns the immo transfert forfait vers reel.
     */
    public function getImmoTransfertForfaitVersReel(): ?bool {
        return $this->immoTransfertForfaitVersReel;
    }

    /**
     * Get the immo tri analytique.
     *
     * @return bool|null Returns the immo tri analytique.
     */
    public function getImmoTriAnalytique(): ?bool {
        return $this->immoTriAnalytique;
    }

    /**
     * Get the immo tri par date.
     *
     * @return bool|null Returns the immo tri par date.
     */
    public function getImmoTriParDate(): ?bool {
        return $this->immoTriParDate;
    }

    /**
     * Get the immo tri par service.
     *
     * @return bool|null Returns the immo tri par service.
     */
    public function getImmoTriParService(): ?bool {
        return $this->immoTriParService;
    }

    /**
     * Get the immo type liasse.
     *
     * @return string|null Returns the immo type liasse.
     */
    public function getImmoTypeLiasse(): ?string {
        return $this->immoTypeLiasse;
    }

    /**
     * Get the is client exp.
     *
     * @return bool|null Returns the is client exp.
     */
    public function getIsClientExp(): ?bool {
        return $this->isClientExp;
    }

    /**
     * Get the lettre pvaut bo.
     *
     * @return bool|null Returns the lettre pvaut bo.
     */
    public function getLettrePvautBo(): ?bool {
        return $this->lettrePvautBo;
    }

    /**
     * Get the lib variable1.
     *
     * @return string|null Returns the lib variable1.
     */
    public function getLibVariable1(): ?string {
        return $this->libVariable1;
    }

    /**
     * Get the lib variable2.
     *
     * @return string|null Returns the lib variable2.
     */
    public function getLibVariable2(): ?string {
        return $this->libVariable2;
    }

    /**
     * Get the lib variable3.
     *
     * @return string|null Returns the lib variable3.
     */
    public function getLibVariable3(): ?string {
        return $this->libVariable3;
    }

    /**
     * Get the mise en portefeuille bic f.
     *
     * @return string|null Returns the mise en portefeuille bic f.
     */
    public function getMiseEnPortefeuilleBicF(): ?string {
        return $this->miseEnPortefeuilleBicF;
    }

    /**
     * Get the mise en portefeuille dom f.
     *
     * @return string|null Returns the mise en portefeuille dom f.
     */
    public function getMiseEnPortefeuilleDomF(): ?string {
        return $this->miseEnPortefeuilleDomF;
    }

    /**
     * Get the mise en portefeuille iban f.
     *
     * @return string|null Returns the mise en portefeuille iban f.
     */
    public function getMiseEnPortefeuilleIbanF(): ?string {
        return $this->miseEnPortefeuilleIbanF;
    }

    /**
     * Get the mise en portefeuille rib f.
     *
     * @return string|null Returns the mise en portefeuille rib f.
     */
    public function getMiseEnPortefeuilleRibF(): ?string {
        return $this->miseEnPortefeuilleRibF;
    }

    /**
     * Get the multi ech client.
     *
     * @return bool|null Returns the multi ech client.
     */
    public function getMultiEchClient(): ?bool {
        return $this->multiEchClient;
    }

    /**
     * Get the multi ech frn.
     *
     * @return bool|null Returns the multi ech frn.
     */
    public function getMultiEchFrn(): ?bool {
        return $this->multiEchFrn;
    }

    /**
     * Get the multi ech par code lib auto.
     *
     * @return bool|null Returns the multi ech par code lib auto.
     */
    public function getMultiEchParCodeLibAuto(): ?bool {
        return $this->multiEchParCodeLibAuto;
    }

    /**
     * Get the ne plus afficher.
     *
     * @return bool|null Returns the ne plus afficher.
     */
    public function getNePlusAfficher(): ?bool {
        return $this->nePlusAfficher;
    }

    /**
     * Get the niv tri analytique.
     *
     * @return string|null Returns the niv tri analytique.
     */
    public function getNivTriAnalytique(): ?string {
        return $this->nivTriAnalytique;
    }

    /**
     * Get the niv tri bureau.
     *
     * @return string|null Returns the niv tri bureau.
     */
    public function getNivTriBureau(): ?string {
        return $this->nivTriBureau;
    }

    /**
     * Get the niv tri famille.
     *
     * @return string|null Returns the niv tri famille.
     */
    public function getNivTriFamille(): ?string {
        return $this->nivTriFamille;
    }

    /**
     * Get the niv tri nat.
     *
     * @return string|null Returns the niv tri nat.
     */
    public function getNivTriNat(): ?string {
        return $this->nivTriNat;
    }

    /**
     * Get the niv tri service.
     *
     * @return string|null Returns the niv tri service.
     */
    public function getNivTriService(): ?string {
        return $this->nivTriService;
    }

    /**
     * Get the niv tri site.
     *
     * @return string|null Returns the niv tri site.
     */
    public function getNivTriSite(): ?string {
        return $this->nivTriSite;
    }

    /**
     * Get the niv tri zl1.
     *
     * @return string|null Returns the niv tri zl1.
     */
    public function getNivTriZl1(): ?string {
        return $this->nivTriZl1;
    }

    /**
     * Get the niv tri zl2.
     *
     * @return string|null Returns the niv tri zl2.
     */
    public function getNivTriZl2(): ?string {
        return $this->nivTriZl2;
    }

    /**
     * Get the niv tri zl3.
     *
     * @return string|null Returns the niv tri zl3.
     */
    public function getNivTriZl3(): ?string {
        return $this->nivTriZl3;
    }

    /**
     * Get the nom lettre p.
     *
     * @return string|null Returns the nom lettre p.
     */
    public function getNomLettreP(): ?string {
        return $this->nomLettreP;
    }

    /**
     * Get the nom lettre pc.
     *
     * @return string|null Returns the nom lettre pc.
     */
    public function getNomLettrePc(): ?string {
        return $this->nomLettrePc;
    }

    /**
     * Get the num chrono bo.
     *
     * @return int|null Returns the num chrono bo.
     */
    public function getNumChronoBo(): ?int {
        return $this->numChronoBo;
    }

    /**
     * Get the num lot cli douteux.
     *
     * @return int|null Returns the num lot cli douteux.
     */
    public function getNumLotCliDouteux(): ?int {
        return $this->numLotCliDouteux;
    }

    /**
     * Get the num lot ecrit trans assurance.
     *
     * @return int|null Returns the num lot ecrit trans assurance.
     */
    public function getNumLotEcritTransAssurance(): ?int {
        return $this->numLotEcritTransAssurance;
    }

    /**
     * Get the num lot ecrit trans baux.
     *
     * @return int|null Returns the num lot ecrit trans baux.
     */
    public function getNumLotEcritTransBaux(): ?int {
        return $this->numLotEcritTransBaux;
    }

    /**
     * Get the num lot ecrit trans car.
     *
     * @return int|null Returns the num lot ecrit trans car.
     */
    public function getNumLotEcritTransCar(): ?int {
        return $this->numLotEcritTransCar;
    }

    /**
     * Get the num lot ecrit trans periodicite.
     *
     * @return int|null Returns the num lot ecrit trans periodicite.
     */
    public function getNumLotEcritTransPeriodicite(): ?int {
        return $this->numLotEcritTransPeriodicite;
    }

    /**
     * Get the num lot ecrit trans subventions.
     *
     * @return int|null Returns the num lot ecrit trans subventions.
     */
    public function getNumLotEcritTransSubventions(): ?int {
        return $this->numLotEcritTransSubventions;
    }

    /**
     * Get the num lot ecrit transf cb.
     *
     * @return int|null Returns the num lot ecrit transf cb.
     */
    public function getNumLotEcritTransfCb(): ?int {
        return $this->numLotEcritTransfCb;
    }

    /**
     * Get the num lot ecrit transf immo.
     *
     * @return int|null Returns the num lot ecrit transf immo.
     */
    public function getNumLotEcritTransfImmo(): ?int {
        return $this->numLotEcritTransfImmo;
    }

    /**
     * Get the num lot ecrit transf lf.
     *
     * @return int|null Returns the num lot ecrit transf lf.
     */
    public function getNumLotEcritTransfLf(): ?int {
        return $this->numLotEcritTransfLf;
    }

    /**
     * Get the num lot int courus.
     *
     * @return int|null Returns the num lot int courus.
     */
    public function getNumLotIntCourus(): ?int {
        return $this->numLotIntCourus;
    }

    /**
     * Get the num lot int extournes.
     *
     * @return int|null Returns the num lot int extournes.
     */
    public function getNumLotIntExtournes(): ?int {
        return $this->numLotIntExtournes;
    }

    /**
     * Get the num lot prov cp.
     *
     * @return int|null Returns the num lot prov cp.
     */
    public function getNumLotProvCp(): ?int {
        return $this->numLotProvCp;
    }

    /**
     * Get the option import mvt rb.
     *
     * @return string|null Returns the option import mvt rb.
     */
    public function getOptionImportMvtRb(): ?string {
        return $this->optionImportMvtRb;
    }

    /**
     * Get the periode revision.
     *
     * @return DateTime|null Returns the periode revision.
     */
    public function getPeriodeRevision(): ?DateTime {
        return $this->periodeRevision;
    }

    /**
     * Get the periode transf immo.
     *
     * @return DateTime|null Returns the periode transf immo.
     */
    public function getPeriodeTransfImmo(): ?DateTime {
        return $this->periodeTransfImmo;
    }

    /**
     * Get the periodicite utiliser libelle.
     *
     * @return int|null Returns the periodicite utiliser libelle.
     */
    public function getPeriodiciteUtiliserLibelle(): ?int {
        return $this->periodiciteUtiliserLibelle;
    }

    /**
     * Get the prochain lot lcr.
     *
     * @return int|null Returns the prochain lot lcr.
     */
    public function getProchainLotLcr(): ?int {
        return $this->prochainLotLcr;
    }

    /**
     * Get the prochain lot lettre p.
     *
     * @return int|null Returns the prochain lot lettre p.
     */
    public function getProchainLotLettreP(): ?int {
        return $this->prochainLotLettreP;
    }

    /**
     * Get the prochain lot traite.
     *
     * @return int|null Returns the prochain lot traite.
     */
    public function getProchainLotTraite(): ?int {
        return $this->prochainLotTraite;
    }

    /**
     * Get the prochain num cb.
     *
     * @return int|null Returns the prochain num cb.
     */
    public function getProchainNumCb(): ?int {
        return $this->prochainNumCb;
    }

    /**
     * Get the prochain num immo.
     *
     * @return int|null Returns the prochain num immo.
     */
    public function getProchainNumImmo(): ?int {
        return $this->prochainNumImmo;
    }

    /**
     * Get the prochain num lf.
     *
     * @return int|null Returns the prochain num lf.
     */
    public function getProchainNumLf(): ?int {
        return $this->prochainNumLf;
    }

    /**
     * Get the prochain num pj.
     *
     * @return int|null Returns the prochain num pj.
     */
    public function getProchainNumPj(): ?int {
        return $this->prochainNumPj;
    }

    /**
     * Get the racine import mvt rb.
     *
     * @return string|null Returns the racine import mvt rb.
     */
    public function getRacineImportMvtRb(): ?string {
        return $this->racineImportMvtRb;
    }

    /**
     * Get the rebut vaut cession.
     *
     * @return bool|null Returns the rebut vaut cession.
     */
    public function getRebutVautCession(): ?bool {
        return $this->rebutVautCession;
    }

    /**
     * Get the ref remise lcr.
     *
     * @return int|null Returns the ref remise lcr.
     */
    public function getRefRemiseLcr(): ?int {
        return $this->refRemiseLcr;
    }

    /**
     * Get the ref virement frn.
     *
     * @return int|null Returns the ref virement frn.
     */
    public function getRefVirementFrn(): ?int {
        return $this->refVirementFrn;
    }

    /**
     * Get the regroup four cpt ech.
     *
     * @return bool|null Returns the regroup four cpt ech.
     */
    public function getRegroupFourCptEch(): ?bool {
        return $this->regroupFourCptEch;
    }

    /**
     * Get the rep ass.
     *
     * @return bool|null Returns the rep ass.
     */
    public function getRepAss(): ?bool {
        return $this->repAss;
    }

    /**
     * Get the rep budget.
     *
     * @return bool|null Returns the rep budget.
     */
    public function getRepBudget(): ?bool {
        return $this->repBudget;
    }

    /**
     * Get the rep car.
     *
     * @return bool|null Returns the rep car.
     */
    public function getRepCar(): ?bool {
        return $this->repCar;
    }

    /**
     * Get the rep cb.
     *
     * @return bool|null Returns the rep cb.
     */
    public function getRepCb(): ?bool {
        return $this->repCb;
    }

    /**
     * Get the rep cl.
     *
     * @return bool|null Returns the rep cl.
     */
    public function getRepCl(): ?bool {
        return $this->repCl;
    }

    /**
     * Get the rep compta gen.
     *
     * @return bool|null Returns the rep compta gen.
     */
    public function getRepComptaGen(): ?bool {
        return $this->repComptaGen;
    }

    /**
     * Get the rep dec tva.
     *
     * @return bool|null Returns the rep dec tva.
     */
    public function getRepDecTva(): ?bool {
        return $this->repDecTva;
    }

    /**
     * Get the rep dos rev.
     *
     * @return bool|null Returns the rep dos rev.
     */
    public function getRepDosRev(): ?bool {
        return $this->repDosRev;
    }

    /**
     * Get the rep emprunts.
     *
     * @return bool|null Returns the rep emprunts.
     */
    public function getRepEmprunts(): ?bool {
        return $this->repEmprunts;
    }

    /**
     * Get the rep es.
     *
     * @return bool|null Returns the rep es.
     */
    public function getRepEs(): ?bool {
        return $this->repEs;
    }

    /**
     * Get the rep immo.
     *
     * @return bool|null Returns the rep immo.
     */
    public function getRepImmo(): ?bool {
        return $this->repImmo;
    }

    /**
     * Get the rep loc fi.
     *
     * @return bool|null Returns the rep loc fi.
     */
    public function getRepLocFi(): ?bool {
        return $this->repLocFi;
    }

    /**
     * Get the rep partielle.
     *
     * @return bool|null Returns the rep partielle.
     */
    public function getRepPartielle(): ?bool {
        return $this->repPartielle;
    }

    /**
     * Get the rep subv.
     *
     * @return bool|null Returns the rep subv.
     */
    public function getRepSubv(): ?bool {
        return $this->repSubv;
    }

    /**
     * Get the rep vmp.
     *
     * @return bool|null Returns the rep vmp.
     */
    public function getRepVmp(): ?bool {
        return $this->repVmp;
    }

    /**
     * Get the revis solde en euro.
     *
     * @return bool|null Returns the revis solde en euro.
     */
    public function getRevisSoldeEnEuro(): ?bool {
        return $this->revisSoldeEnEuro;
    }

    /**
     * Get the revis voir solde ex.
     *
     * @return bool|null Returns the revis voir solde ex.
     */
    public function getRevisVoirSoldeEx(): ?bool {
        return $this->revisVoirSoldeEx;
    }

    /**
     * Get the saisie caisse.
     *
     * @return bool|null Returns the saisie caisse.
     */
    public function getSaisieCaisse(): ?bool {
        return $this->saisieCaisse;
    }

    /**
     * Get the saisie num piece.
     *
     * @return string|null Returns the saisie num piece.
     */
    public function getSaisieNumPiece(): ?string {
        return $this->saisieNumPiece;
    }

    /**
     * Get the sauver periodicite.
     *
     * @return bool|null Returns the sauver periodicite.
     */
    public function getSauverPeriodicite(): ?bool {
        return $this->sauverPeriodicite;
    }

    /**
     * Get the suivi aux client.
     *
     * @return bool|null Returns the suivi aux client.
     */
    public function getSuiviAuxClient(): ?bool {
        return $this->suiviAuxClient;
    }

    /**
     * Get the suivi aux frn.
     *
     * @return bool|null Returns the suivi aux frn.
     */
    public function getSuiviAuxFrn(): ?bool {
        return $this->suiviAuxFrn;
    }

    /**
     * Get the suivi devises.
     *
     * @return bool|null Returns the suivi devises.
     */
    public function getSuiviDevises(): ?bool {
        return $this->suiviDevises;
    }

    /**
     * Get the transfert immo ok.
     *
     * @return bool|null Returns the transfert immo ok.
     */
    public function getTransfertImmoOk(): ?bool {
        return $this->transfertImmoOk;
    }

    /**
     * Get the type pmag client.
     *
     * @return int|null Returns the type pmag client.
     */
    public function getTypePmagClient(): ?int {
        return $this->typePmagClient;
    }

    /**
     * Get the type transfert immo.
     *
     * @return string|null Returns the type transfert immo.
     */
    public function getTypeTransfertImmo(): ?string {
        return $this->typeTransfertImmo;
    }

    /**
     * Get the type transfert tiers.
     *
     * @return string|null Returns the type transfert tiers.
     */
    public function getTypeTransfertTiers(): ?string {
        return $this->typeTransfertTiers;
    }

    /**
     * Get the type transfert tiers f.
     *
     * @return string|null Returns the type transfert tiers f.
     */
    public function getTypeTransfertTiersF(): ?string {
        return $this->typeTransfertTiersF;
    }

    /**
     * Set the achat vente automate.
     *
     * @param bool|null $achatVenteAutomate The achat vente automate.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setAchatVenteAutomate(?bool $achatVenteAutomate): Dossier3 {
        $this->achatVenteAutomate = $achatVenteAutomate;
        return $this;
    }

    /**
     * Set the achat vente local tva.
     *
     * @param string|null $achatVenteLocalTva The achat vente local tva.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setAchatVenteLocalTva(?string $achatVenteLocalTva): Dossier3 {
        $this->achatVenteLocalTva = $achatVenteLocalTva;
        return $this;
    }

    /**
     * Set the achat vente stop tva.
     *
     * @param bool|null $achatVenteStopTva The achat vente stop tva.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setAchatVenteStopTva(?bool $achatVenteStopTva): Dossier3 {
        $this->achatVenteStopTva = $achatVenteStopTva;
        return $this;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool|null $bonsAPayer The bons a payer.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setBonsAPayer(?bool $bonsAPayer): Dossier3 {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }

    /**
     * Set the code ics.
     *
     * @param string|null $codeIcs The code ics.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCodeIcs(?string $codeIcs): Dossier3 {
        $this->codeIcs = $codeIcs;
        return $this;
    }

    /**
     * Set the code journal revision.
     *
     * @param string|null $codeJournalRevision The code journal revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCodeJournalRevision(?string $codeJournalRevision): Dossier3 {
        $this->codeJournalRevision = $codeJournalRevision;
        return $this;
    }

    /**
     * Set the code journal transf immo.
     *
     * @param string|null $codeJournalTransfImmo The code journal transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCodeJournalTransfImmo(?string $codeJournalTransfImmo): Dossier3 {
        $this->codeJournalTransfImmo = $codeJournalTransfImmo;
        return $this;
    }

    /**
     * Set the comp cli frs.
     *
     * @param bool|null $compCliFrs The comp cli frs.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompCliFrs(?bool $compCliFrs): Dossier3 {
        $this->compCliFrs = $compCliFrs;
        return $this;
    }

    /**
     * Set the compte debut assurance.
     *
     * @param string|null $compteDebutAssurance The compte debut assurance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutAssurance(?string $compteDebutAssurance): Dossier3 {
        $this->compteDebutAssurance = $compteDebutAssurance;
        return $this;
    }

    /**
     * Set the compte debut bail.
     *
     * @param string|null $compteDebutBail The compte debut bail.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutBail(?string $compteDebutBail): Dossier3 {
        $this->compteDebutBail = $compteDebutBail;
        return $this;
    }

    /**
     * Set the compte debut car.
     *
     * @param string|null $compteDebutCar The compte debut car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutCar(?string $compteDebutCar): Dossier3 {
        $this->compteDebutCar = $compteDebutCar;
        return $this;
    }

    /**
     * Set the compte debut subventions.
     *
     * @param string|null $compteDebutSubventions The compte debut subventions.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutSubventions(?string $compteDebutSubventions): Dossier3 {
        $this->compteDebutSubventions = $compteDebutSubventions;
        return $this;
    }

    /**
     * Set the compte fin assurance.
     *
     * @param string|null $compteFinAssurance The compte fin assurance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinAssurance(?string $compteFinAssurance): Dossier3 {
        $this->compteFinAssurance = $compteFinAssurance;
        return $this;
    }

    /**
     * Set the compte fin bail.
     *
     * @param string|null $compteFinBail The compte fin bail.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinBail(?string $compteFinBail): Dossier3 {
        $this->compteFinBail = $compteFinBail;
        return $this;
    }

    /**
     * Set the compte fin car.
     *
     * @param string|null $compteFinCar The compte fin car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinCar(?string $compteFinCar): Dossier3 {
        $this->compteFinCar = $compteFinCar;
        return $this;
    }

    /**
     * Set the compte fin subventions.
     *
     * @param string|null $compteFinSubventions The compte fin subventions.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinSubventions(?string $compteFinSubventions): Dossier3 {
        $this->compteFinSubventions = $compteFinSubventions;
        return $this;
    }

    /**
     * Set the compte tvacar.
     *
     * @param string|null $compteTvacar The compte tvacar.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteTvacar(?string $compteTvacar): Dossier3 {
        $this->compteTvacar = $compteTvacar;
        return $this;
    }

    /**
     * Set the conserve mois rb.
     *
     * @param bool|null $conserveMoisRb The conserve mois rb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setConserveMoisRb(?bool $conserveMoisRb): Dossier3 {
        $this->conserveMoisRb = $conserveMoisRb;
        return $this;
    }

    /**
     * Set the controle edition.
     *
     * @param bool|null $controleEdition The controle edition.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setControleEdition(?bool $controleEdition): Dossier3 {
        $this->controleEdition = $controleEdition;
        return $this;
    }

    /**
     * Set the controle exist ecr.
     *
     * @param string|null $controleExistEcr The controle exist ecr.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setControleExistEcr(?string $controleExistEcr): Dossier3 {
        $this->controleExistEcr = $controleExistEcr;
        return $this;
    }

    /**
     * Set the controle ref tire.
     *
     * @param bool|null $controleRefTire The controle ref tire.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setControleRefTire(?bool $controleRefTire): Dossier3 {
        $this->controleRefTire = $controleRefTire;
        return $this;
    }

    /**
     * Set the cpt transf immo communs.
     *
     * @param bool|null $cptTransfImmoCommuns The cpt transf immo communs.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCptTransfImmoCommuns(?bool $cptTransfImmoCommuns): Dossier3 {
        $this->cptTransfImmoCommuns = $cptTransfImmoCommuns;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateRevision(?DateTime $dateRevision): Dossier3 {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the date transf cb.
     *
     * @param DateTime|null $dateTransfCb The date transf cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfCb(?DateTime $dateTransfCb): Dossier3 {
        $this->dateTransfCb = $dateTransfCb;
        return $this;
    }

    /**
     * Set the date transf cli douteux.
     *
     * @param DateTime|null $dateTransfCliDouteux The date transf cli douteux.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfCliDouteux(?DateTime $dateTransfCliDouteux): Dossier3 {
        $this->dateTransfCliDouteux = $dateTransfCliDouteux;
        return $this;
    }

    /**
     * Set the date transf int courus.
     *
     * @param DateTime|null $dateTransfIntCourus The date transf int courus.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfIntCourus(?DateTime $dateTransfIntCourus): Dossier3 {
        $this->dateTransfIntCourus = $dateTransfIntCourus;
        return $this;
    }

    /**
     * Set the date transf int extournes.
     *
     * @param DateTime|null $dateTransfIntExtournes The date transf int extournes.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfIntExtournes(?DateTime $dateTransfIntExtournes): Dossier3 {
        $this->dateTransfIntExtournes = $dateTransfIntExtournes;
        return $this;
    }

    /**
     * Set the date transf lf.
     *
     * @param DateTime|null $dateTransfLf The date transf lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfLf(?DateTime $dateTransfLf): Dossier3 {
        $this->dateTransfLf = $dateTransfLf;
        return $this;
    }

    /**
     * Set the date transf prov cp.
     *
     * @param DateTime|null $dateTransfProvCp The date transf prov cp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfProvCp(?DateTime $dateTransfProvCp): Dossier3 {
        $this->dateTransfProvCp = $dateTransfProvCp;
        return $this;
    }

    /**
     * Set the date transfert ech cb.
     *
     * @param DateTime|null $dateTransfertEchCb The date transfert ech cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfertEchCb(?DateTime $dateTransfertEchCb): Dossier3 {
        $this->dateTransfertEchCb = $dateTransfertEchCb;
        return $this;
    }

    /**
     * Set the date transfert ech lf.
     *
     * @param DateTime|null $dateTransfertEchLf The date transfert ech lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfertEchLf(?DateTime $dateTransfertEchLf): Dossier3 {
        $this->dateTransfertEchLf = $dateTransfertEchLf;
        return $this;
    }

    /**
     * Set the date transfert echeance.
     *
     * @param DateTime|null $dateTransfertEcheance The date transfert echeance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfertEcheance(?DateTime $dateTransfertEcheance): Dossier3 {
        $this->dateTransfertEcheance = $dateTransfertEcheance;
        return $this;
    }

    /**
     * Set the debut calcul immo.
     *
     * @param DateTime|null $debutCalculImmo The debut calcul immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDebutCalculImmo(?DateTime $debutCalculImmo): Dossier3 {
        $this->debutCalculImmo = $debutCalculImmo;
        return $this;
    }

    /**
     * Set the delai rejet effet.
     *
     * @param string|null $delaiRejetEffet The delai rejet effet.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDelaiRejetEffet(?string $delaiRejetEffet): Dossier3 {
        $this->delaiRejetEffet = $delaiRejetEffet;
        return $this;
    }

    /**
     * Set the detail cb.
     *
     * @param bool|null $detailCb The detail cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDetailCb(?bool $detailCb): Dossier3 {
        $this->detailCb = $detailCb;
        return $this;
    }

    /**
     * Set the detail immo.
     *
     * @param bool|null $detailImmo The detail immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDetailImmo(?bool $detailImmo): Dossier3 {
        $this->detailImmo = $detailImmo;
        return $this;
    }

    /**
     * Set the dot franc centime.
     *
     * @param string|null $dotFrancCentime The dot franc centime.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDotFrancCentime(?string $dotFrancCentime): Dossier3 {
        $this->dotFrancCentime = $dotFrancCentime;
        return $this;
    }

    /**
     * Set the edi400.
     *
     * @param bool|null $edi400 The edi400.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setEdi400(?bool $edi400): Dossier3 {
        $this->edi400 = $edi400;
        return $this;
    }

    /**
     * Set the edit ana contrepasse.
     *
     * @param bool|null $editAnaContrepasse The edit ana contrepasse.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setEditAnaContrepasse(?bool $editAnaContrepasse): Dossier3 {
        $this->editAnaContrepasse = $editAnaContrepasse;
        return $this;
    }

    /**
     * Set the fin calcul immo.
     *
     * @param DateTime|null $finCalculImmo The fin calcul immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setFinCalculImmo(?DateTime $finCalculImmo): Dossier3 {
        $this->finCalculImmo = $finCalculImmo;
        return $this;
    }

    /**
     * Set the folio revision.
     *
     * @param int|null $folioRevision The folio revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setFolioRevision(?int $folioRevision): Dossier3 {
        $this->folioRevision = $folioRevision;
        return $this;
    }

    /**
     * Set the folio transf immo.
     *
     * @param int|null $folioTransfImmo The folio transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setFolioTransfImmo(?int $folioTransfImmo): Dossier3 {
        $this->folioTransfImmo = $folioTransfImmo;
        return $this;
    }

    /**
     * Set the gestion pmag client.
     *
     * @param bool|null $gestionPmagClient The gestion pmag client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setGestionPmagClient(?bool $gestionPmagClient): Dossier3 {
        $this->gestionPmagClient = $gestionPmagClient;
        return $this;
    }

    /**
     * Set the gestion traite papier.
     *
     * @param bool|null $gestionTraitePapier The gestion traite papier.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setGestionTraitePapier(?bool $gestionTraitePapier): Dossier3 {
        $this->gestionTraitePapier = $gestionTraitePapier;
        return $this;
    }

    /**
     * Set the gestion virement frn.
     *
     * @param bool|null $gestionVirementFrn The gestion virement frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setGestionVirementFrn(?bool $gestionVirementFrn): Dossier3 {
        $this->gestionVirementFrn = $gestionVirementFrn;
        return $this;
    }

    /**
     * Set the immo detail lignes.
     *
     * @param bool|null $immoDetailLignes The immo detail lignes.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoDetailLignes(?bool $immoDetailLignes): Dossier3 {
        $this->immoDetailLignes = $immoDetailLignes;
        return $this;
    }

    /**
     * Set the immo detail par cpt.
     *
     * @param bool|null $immoDetailParCpt The immo detail par cpt.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoDetailParCpt(?bool $immoDetailParCpt): Dossier3 {
        $this->immoDetailParCpt = $immoDetailParCpt;
        return $this;
    }

    /**
     * Set the immo edit ensemble.
     *
     * @param bool|null $immoEditEnsemble The immo edit ensemble.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoEditEnsemble(?bool $immoEditEnsemble): Dossier3 {
        $this->immoEditEnsemble = $immoEditEnsemble;
        return $this;
    }

    /**
     * Set the immo jours par an.
     *
     * @param int|null $immoJoursParAn The immo jours par an.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoJoursParAn(?int $immoJoursParAn): Dossier3 {
        $this->immoJoursParAn = $immoJoursParAn;
        return $this;
    }

    /**
     * Set the immo ss tot immo.
     *
     * @param bool|null $immoSsTotImmo The immo ss tot immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoSsTotImmo(?bool $immoSsTotImmo): Dossier3 {
        $this->immoSsTotImmo = $immoSsTotImmo;
        return $this;
    }

    /**
     * Set the immo tot par compte.
     *
     * @param bool|null $immoTotParCompte The immo tot par compte.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTotParCompte(?bool $immoTotParCompte): Dossier3 {
        $this->immoTotParCompte = $immoTotParCompte;
        return $this;
    }

    /**
     * Set the immo transfert forfait vers reel.
     *
     * @param bool|null $immoTransfertForfaitVersReel The immo transfert forfait vers reel.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTransfertForfaitVersReel(?bool $immoTransfertForfaitVersReel): Dossier3 {
        $this->immoTransfertForfaitVersReel = $immoTransfertForfaitVersReel;
        return $this;
    }

    /**
     * Set the immo tri analytique.
     *
     * @param bool|null $immoTriAnalytique The immo tri analytique.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTriAnalytique(?bool $immoTriAnalytique): Dossier3 {
        $this->immoTriAnalytique = $immoTriAnalytique;
        return $this;
    }

    /**
     * Set the immo tri par date.
     *
     * @param bool|null $immoTriParDate The immo tri par date.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTriParDate(?bool $immoTriParDate): Dossier3 {
        $this->immoTriParDate = $immoTriParDate;
        return $this;
    }

    /**
     * Set the immo tri par service.
     *
     * @param bool|null $immoTriParService The immo tri par service.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTriParService(?bool $immoTriParService): Dossier3 {
        $this->immoTriParService = $immoTriParService;
        return $this;
    }

    /**
     * Set the immo type liasse.
     *
     * @param string|null $immoTypeLiasse The immo type liasse.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTypeLiasse(?string $immoTypeLiasse): Dossier3 {
        $this->immoTypeLiasse = $immoTypeLiasse;
        return $this;
    }

    /**
     * Set the is client exp.
     *
     * @param bool|null $isClientExp The is client exp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setIsClientExp(?bool $isClientExp): Dossier3 {
        $this->isClientExp = $isClientExp;
        return $this;
    }

    /**
     * Set the lettre pvaut bo.
     *
     * @param bool|null $lettrePvautBo The lettre pvaut bo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLettrePvautBo(?bool $lettrePvautBo): Dossier3 {
        $this->lettrePvautBo = $lettrePvautBo;
        return $this;
    }

    /**
     * Set the lib variable1.
     *
     * @param string|null $libVariable1 The lib variable1.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLibVariable1(?string $libVariable1): Dossier3 {
        $this->libVariable1 = $libVariable1;
        return $this;
    }

    /**
     * Set the lib variable2.
     *
     * @param string|null $libVariable2 The lib variable2.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLibVariable2(?string $libVariable2): Dossier3 {
        $this->libVariable2 = $libVariable2;
        return $this;
    }

    /**
     * Set the lib variable3.
     *
     * @param string|null $libVariable3 The lib variable3.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLibVariable3(?string $libVariable3): Dossier3 {
        $this->libVariable3 = $libVariable3;
        return $this;
    }

    /**
     * Set the mise en portefeuille bic f.
     *
     * @param string|null $miseEnPortefeuilleBicF The mise en portefeuille bic f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleBicF(?string $miseEnPortefeuilleBicF): Dossier3 {
        $this->miseEnPortefeuilleBicF = $miseEnPortefeuilleBicF;
        return $this;
    }

    /**
     * Set the mise en portefeuille dom f.
     *
     * @param string|null $miseEnPortefeuilleDomF The mise en portefeuille dom f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleDomF(?string $miseEnPortefeuilleDomF): Dossier3 {
        $this->miseEnPortefeuilleDomF = $miseEnPortefeuilleDomF;
        return $this;
    }

    /**
     * Set the mise en portefeuille iban f.
     *
     * @param string|null $miseEnPortefeuilleIbanF The mise en portefeuille iban f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleIbanF(?string $miseEnPortefeuilleIbanF): Dossier3 {
        $this->miseEnPortefeuilleIbanF = $miseEnPortefeuilleIbanF;
        return $this;
    }

    /**
     * Set the mise en portefeuille rib f.
     *
     * @param string|null $miseEnPortefeuilleRibF The mise en portefeuille rib f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleRibF(?string $miseEnPortefeuilleRibF): Dossier3 {
        $this->miseEnPortefeuilleRibF = $miseEnPortefeuilleRibF;
        return $this;
    }

    /**
     * Set the multi ech client.
     *
     * @param bool|null $multiEchClient The multi ech client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMultiEchClient(?bool $multiEchClient): Dossier3 {
        $this->multiEchClient = $multiEchClient;
        return $this;
    }

    /**
     * Set the multi ech frn.
     *
     * @param bool|null $multiEchFrn The multi ech frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMultiEchFrn(?bool $multiEchFrn): Dossier3 {
        $this->multiEchFrn = $multiEchFrn;
        return $this;
    }

    /**
     * Set the multi ech par code lib auto.
     *
     * @param bool|null $multiEchParCodeLibAuto The multi ech par code lib auto.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMultiEchParCodeLibAuto(?bool $multiEchParCodeLibAuto): Dossier3 {
        $this->multiEchParCodeLibAuto = $multiEchParCodeLibAuto;
        return $this;
    }

    /**
     * Set the ne plus afficher.
     *
     * @param bool|null $nePlusAfficher The ne plus afficher.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNePlusAfficher(?bool $nePlusAfficher): Dossier3 {
        $this->nePlusAfficher = $nePlusAfficher;
        return $this;
    }

    /**
     * Set the niv tri analytique.
     *
     * @param string|null $nivTriAnalytique The niv tri analytique.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriAnalytique(?string $nivTriAnalytique): Dossier3 {
        $this->nivTriAnalytique = $nivTriAnalytique;
        return $this;
    }

    /**
     * Set the niv tri bureau.
     *
     * @param string|null $nivTriBureau The niv tri bureau.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriBureau(?string $nivTriBureau): Dossier3 {
        $this->nivTriBureau = $nivTriBureau;
        return $this;
    }

    /**
     * Set the niv tri famille.
     *
     * @param string|null $nivTriFamille The niv tri famille.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriFamille(?string $nivTriFamille): Dossier3 {
        $this->nivTriFamille = $nivTriFamille;
        return $this;
    }

    /**
     * Set the niv tri nat.
     *
     * @param string|null $nivTriNat The niv tri nat.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriNat(?string $nivTriNat): Dossier3 {
        $this->nivTriNat = $nivTriNat;
        return $this;
    }

    /**
     * Set the niv tri service.
     *
     * @param string|null $nivTriService The niv tri service.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriService(?string $nivTriService): Dossier3 {
        $this->nivTriService = $nivTriService;
        return $this;
    }

    /**
     * Set the niv tri site.
     *
     * @param string|null $nivTriSite The niv tri site.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriSite(?string $nivTriSite): Dossier3 {
        $this->nivTriSite = $nivTriSite;
        return $this;
    }

    /**
     * Set the niv tri zl1.
     *
     * @param string|null $nivTriZl1 The niv tri zl1.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriZl1(?string $nivTriZl1): Dossier3 {
        $this->nivTriZl1 = $nivTriZl1;
        return $this;
    }

    /**
     * Set the niv tri zl2.
     *
     * @param string|null $nivTriZl2 The niv tri zl2.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriZl2(?string $nivTriZl2): Dossier3 {
        $this->nivTriZl2 = $nivTriZl2;
        return $this;
    }

    /**
     * Set the niv tri zl3.
     *
     * @param string|null $nivTriZl3 The niv tri zl3.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriZl3(?string $nivTriZl3): Dossier3 {
        $this->nivTriZl3 = $nivTriZl3;
        return $this;
    }

    /**
     * Set the nom lettre p.
     *
     * @param string|null $nomLettreP The nom lettre p.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNomLettreP(?string $nomLettreP): Dossier3 {
        $this->nomLettreP = $nomLettreP;
        return $this;
    }

    /**
     * Set the nom lettre pc.
     *
     * @param string|null $nomLettrePc The nom lettre pc.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNomLettrePc(?string $nomLettrePc): Dossier3 {
        $this->nomLettrePc = $nomLettrePc;
        return $this;
    }

    /**
     * Set the num chrono bo.
     *
     * @param int|null $numChronoBo The num chrono bo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumChronoBo(?int $numChronoBo): Dossier3 {
        $this->numChronoBo = $numChronoBo;
        return $this;
    }

    /**
     * Set the num lot cli douteux.
     *
     * @param int|null $numLotCliDouteux The num lot cli douteux.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotCliDouteux(?int $numLotCliDouteux): Dossier3 {
        $this->numLotCliDouteux = $numLotCliDouteux;
        return $this;
    }

    /**
     * Set the num lot ecrit trans assurance.
     *
     * @param int|null $numLotEcritTransAssurance The num lot ecrit trans assurance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransAssurance(?int $numLotEcritTransAssurance): Dossier3 {
        $this->numLotEcritTransAssurance = $numLotEcritTransAssurance;
        return $this;
    }

    /**
     * Set the num lot ecrit trans baux.
     *
     * @param int|null $numLotEcritTransBaux The num lot ecrit trans baux.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransBaux(?int $numLotEcritTransBaux): Dossier3 {
        $this->numLotEcritTransBaux = $numLotEcritTransBaux;
        return $this;
    }

    /**
     * Set the num lot ecrit trans car.
     *
     * @param int|null $numLotEcritTransCar The num lot ecrit trans car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransCar(?int $numLotEcritTransCar): Dossier3 {
        $this->numLotEcritTransCar = $numLotEcritTransCar;
        return $this;
    }

    /**
     * Set the num lot ecrit trans periodicite.
     *
     * @param int|null $numLotEcritTransPeriodicite The num lot ecrit trans periodicite.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransPeriodicite(?int $numLotEcritTransPeriodicite): Dossier3 {
        $this->numLotEcritTransPeriodicite = $numLotEcritTransPeriodicite;
        return $this;
    }

    /**
     * Set the num lot ecrit trans subventions.
     *
     * @param int|null $numLotEcritTransSubventions The num lot ecrit trans subventions.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransSubventions(?int $numLotEcritTransSubventions): Dossier3 {
        $this->numLotEcritTransSubventions = $numLotEcritTransSubventions;
        return $this;
    }

    /**
     * Set the num lot ecrit transf cb.
     *
     * @param int|null $numLotEcritTransfCb The num lot ecrit transf cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransfCb(?int $numLotEcritTransfCb): Dossier3 {
        $this->numLotEcritTransfCb = $numLotEcritTransfCb;
        return $this;
    }

    /**
     * Set the num lot ecrit transf immo.
     *
     * @param int|null $numLotEcritTransfImmo The num lot ecrit transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransfImmo(?int $numLotEcritTransfImmo): Dossier3 {
        $this->numLotEcritTransfImmo = $numLotEcritTransfImmo;
        return $this;
    }

    /**
     * Set the num lot ecrit transf lf.
     *
     * @param int|null $numLotEcritTransfLf The num lot ecrit transf lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransfLf(?int $numLotEcritTransfLf): Dossier3 {
        $this->numLotEcritTransfLf = $numLotEcritTransfLf;
        return $this;
    }

    /**
     * Set the num lot int courus.
     *
     * @param int|null $numLotIntCourus The num lot int courus.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotIntCourus(?int $numLotIntCourus): Dossier3 {
        $this->numLotIntCourus = $numLotIntCourus;
        return $this;
    }

    /**
     * Set the num lot int extournes.
     *
     * @param int|null $numLotIntExtournes The num lot int extournes.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotIntExtournes(?int $numLotIntExtournes): Dossier3 {
        $this->numLotIntExtournes = $numLotIntExtournes;
        return $this;
    }

    /**
     * Set the num lot prov cp.
     *
     * @param int|null $numLotProvCp The num lot prov cp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotProvCp(?int $numLotProvCp): Dossier3 {
        $this->numLotProvCp = $numLotProvCp;
        return $this;
    }

    /**
     * Set the option import mvt rb.
     *
     * @param string|null $optionImportMvtRb The option import mvt rb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setOptionImportMvtRb(?string $optionImportMvtRb): Dossier3 {
        $this->optionImportMvtRb = $optionImportMvtRb;
        return $this;
    }

    /**
     * Set the periode revision.
     *
     * @param DateTime|null $periodeRevision The periode revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setPeriodeRevision(?DateTime $periodeRevision): Dossier3 {
        $this->periodeRevision = $periodeRevision;
        return $this;
    }

    /**
     * Set the periode transf immo.
     *
     * @param DateTime|null $periodeTransfImmo The periode transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setPeriodeTransfImmo(?DateTime $periodeTransfImmo): Dossier3 {
        $this->periodeTransfImmo = $periodeTransfImmo;
        return $this;
    }

    /**
     * Set the periodicite utiliser libelle.
     *
     * @param int|null $periodiciteUtiliserLibelle The periodicite utiliser libelle.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setPeriodiciteUtiliserLibelle(?int $periodiciteUtiliserLibelle): Dossier3 {
        $this->periodiciteUtiliserLibelle = $periodiciteUtiliserLibelle;
        return $this;
    }

    /**
     * Set the prochain lot lcr.
     *
     * @param int|null $prochainLotLcr The prochain lot lcr.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainLotLcr(?int $prochainLotLcr): Dossier3 {
        $this->prochainLotLcr = $prochainLotLcr;
        return $this;
    }

    /**
     * Set the prochain lot lettre p.
     *
     * @param int|null $prochainLotLettreP The prochain lot lettre p.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainLotLettreP(?int $prochainLotLettreP): Dossier3 {
        $this->prochainLotLettreP = $prochainLotLettreP;
        return $this;
    }

    /**
     * Set the prochain lot traite.
     *
     * @param int|null $prochainLotTraite The prochain lot traite.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainLotTraite(?int $prochainLotTraite): Dossier3 {
        $this->prochainLotTraite = $prochainLotTraite;
        return $this;
    }

    /**
     * Set the prochain num cb.
     *
     * @param int|null $prochainNumCb The prochain num cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumCb(?int $prochainNumCb): Dossier3 {
        $this->prochainNumCb = $prochainNumCb;
        return $this;
    }

    /**
     * Set the prochain num immo.
     *
     * @param int|null $prochainNumImmo The prochain num immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumImmo(?int $prochainNumImmo): Dossier3 {
        $this->prochainNumImmo = $prochainNumImmo;
        return $this;
    }

    /**
     * Set the prochain num lf.
     *
     * @param int|null $prochainNumLf The prochain num lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumLf(?int $prochainNumLf): Dossier3 {
        $this->prochainNumLf = $prochainNumLf;
        return $this;
    }

    /**
     * Set the prochain num pj.
     *
     * @param int|null $prochainNumPj The prochain num pj.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumPj(?int $prochainNumPj): Dossier3 {
        $this->prochainNumPj = $prochainNumPj;
        return $this;
    }

    /**
     * Set the racine import mvt rb.
     *
     * @param string|null $racineImportMvtRb The racine import mvt rb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRacineImportMvtRb(?string $racineImportMvtRb): Dossier3 {
        $this->racineImportMvtRb = $racineImportMvtRb;
        return $this;
    }

    /**
     * Set the rebut vaut cession.
     *
     * @param bool|null $rebutVautCession The rebut vaut cession.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRebutVautCession(?bool $rebutVautCession): Dossier3 {
        $this->rebutVautCession = $rebutVautCession;
        return $this;
    }

    /**
     * Set the ref remise lcr.
     *
     * @param int|null $refRemiseLcr The ref remise lcr.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRefRemiseLcr(?int $refRemiseLcr): Dossier3 {
        $this->refRemiseLcr = $refRemiseLcr;
        return $this;
    }

    /**
     * Set the ref virement frn.
     *
     * @param int|null $refVirementFrn The ref virement frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRefVirementFrn(?int $refVirementFrn): Dossier3 {
        $this->refVirementFrn = $refVirementFrn;
        return $this;
    }

    /**
     * Set the regroup four cpt ech.
     *
     * @param bool|null $regroupFourCptEch The regroup four cpt ech.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRegroupFourCptEch(?bool $regroupFourCptEch): Dossier3 {
        $this->regroupFourCptEch = $regroupFourCptEch;
        return $this;
    }

    /**
     * Set the rep ass.
     *
     * @param bool|null $repAss The rep ass.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepAss(?bool $repAss): Dossier3 {
        $this->repAss = $repAss;
        return $this;
    }

    /**
     * Set the rep budget.
     *
     * @param bool|null $repBudget The rep budget.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepBudget(?bool $repBudget): Dossier3 {
        $this->repBudget = $repBudget;
        return $this;
    }

    /**
     * Set the rep car.
     *
     * @param bool|null $repCar The rep car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepCar(?bool $repCar): Dossier3 {
        $this->repCar = $repCar;
        return $this;
    }

    /**
     * Set the rep cb.
     *
     * @param bool|null $repCb The rep cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepCb(?bool $repCb): Dossier3 {
        $this->repCb = $repCb;
        return $this;
    }

    /**
     * Set the rep cl.
     *
     * @param bool|null $repCl The rep cl.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepCl(?bool $repCl): Dossier3 {
        $this->repCl = $repCl;
        return $this;
    }

    /**
     * Set the rep compta gen.
     *
     * @param bool|null $repComptaGen The rep compta gen.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepComptaGen(?bool $repComptaGen): Dossier3 {
        $this->repComptaGen = $repComptaGen;
        return $this;
    }

    /**
     * Set the rep dec tva.
     *
     * @param bool|null $repDecTva The rep dec tva.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepDecTva(?bool $repDecTva): Dossier3 {
        $this->repDecTva = $repDecTva;
        return $this;
    }

    /**
     * Set the rep dos rev.
     *
     * @param bool|null $repDosRev The rep dos rev.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepDosRev(?bool $repDosRev): Dossier3 {
        $this->repDosRev = $repDosRev;
        return $this;
    }

    /**
     * Set the rep emprunts.
     *
     * @param bool|null $repEmprunts The rep emprunts.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepEmprunts(?bool $repEmprunts): Dossier3 {
        $this->repEmprunts = $repEmprunts;
        return $this;
    }

    /**
     * Set the rep es.
     *
     * @param bool|null $repEs The rep es.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepEs(?bool $repEs): Dossier3 {
        $this->repEs = $repEs;
        return $this;
    }

    /**
     * Set the rep immo.
     *
     * @param bool|null $repImmo The rep immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepImmo(?bool $repImmo): Dossier3 {
        $this->repImmo = $repImmo;
        return $this;
    }

    /**
     * Set the rep loc fi.
     *
     * @param bool|null $repLocFi The rep loc fi.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepLocFi(?bool $repLocFi): Dossier3 {
        $this->repLocFi = $repLocFi;
        return $this;
    }

    /**
     * Set the rep partielle.
     *
     * @param bool|null $repPartielle The rep partielle.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepPartielle(?bool $repPartielle): Dossier3 {
        $this->repPartielle = $repPartielle;
        return $this;
    }

    /**
     * Set the rep subv.
     *
     * @param bool|null $repSubv The rep subv.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepSubv(?bool $repSubv): Dossier3 {
        $this->repSubv = $repSubv;
        return $this;
    }

    /**
     * Set the rep vmp.
     *
     * @param bool|null $repVmp The rep vmp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepVmp(?bool $repVmp): Dossier3 {
        $this->repVmp = $repVmp;
        return $this;
    }

    /**
     * Set the revis solde en euro.
     *
     * @param bool|null $revisSoldeEnEuro The revis solde en euro.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRevisSoldeEnEuro(?bool $revisSoldeEnEuro): Dossier3 {
        $this->revisSoldeEnEuro = $revisSoldeEnEuro;
        return $this;
    }

    /**
     * Set the revis voir solde ex.
     *
     * @param bool|null $revisVoirSoldeEx The revis voir solde ex.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRevisVoirSoldeEx(?bool $revisVoirSoldeEx): Dossier3 {
        $this->revisVoirSoldeEx = $revisVoirSoldeEx;
        return $this;
    }

    /**
     * Set the saisie caisse.
     *
     * @param bool|null $saisieCaisse The saisie caisse.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSaisieCaisse(?bool $saisieCaisse): Dossier3 {
        $this->saisieCaisse = $saisieCaisse;
        return $this;
    }

    /**
     * Set the saisie num piece.
     *
     * @param string|null $saisieNumPiece The saisie num piece.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSaisieNumPiece(?string $saisieNumPiece): Dossier3 {
        $this->saisieNumPiece = $saisieNumPiece;
        return $this;
    }

    /**
     * Set the sauver periodicite.
     *
     * @param bool|null $sauverPeriodicite The sauver periodicite.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSauverPeriodicite(?bool $sauverPeriodicite): Dossier3 {
        $this->sauverPeriodicite = $sauverPeriodicite;
        return $this;
    }

    /**
     * Set the suivi aux client.
     *
     * @param bool|null $suiviAuxClient The suivi aux client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSuiviAuxClient(?bool $suiviAuxClient): Dossier3 {
        $this->suiviAuxClient = $suiviAuxClient;
        return $this;
    }

    /**
     * Set the suivi aux frn.
     *
     * @param bool|null $suiviAuxFrn The suivi aux frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSuiviAuxFrn(?bool $suiviAuxFrn): Dossier3 {
        $this->suiviAuxFrn = $suiviAuxFrn;
        return $this;
    }

    /**
     * Set the suivi devises.
     *
     * @param bool|null $suiviDevises The suivi devises.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSuiviDevises(?bool $suiviDevises): Dossier3 {
        $this->suiviDevises = $suiviDevises;
        return $this;
    }

    /**
     * Set the transfert immo ok.
     *
     * @param bool|null $transfertImmoOk The transfert immo ok.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTransfertImmoOk(?bool $transfertImmoOk): Dossier3 {
        $this->transfertImmoOk = $transfertImmoOk;
        return $this;
    }

    /**
     * Set the type pmag client.
     *
     * @param int|null $typePmagClient The type pmag client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypePmagClient(?int $typePmagClient): Dossier3 {
        $this->typePmagClient = $typePmagClient;
        return $this;
    }

    /**
     * Set the type transfert immo.
     *
     * @param string|null $typeTransfertImmo The type transfert immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypeTransfertImmo(?string $typeTransfertImmo): Dossier3 {
        $this->typeTransfertImmo = $typeTransfertImmo;
        return $this;
    }

    /**
     * Set the type transfert tiers.
     *
     * @param string|null $typeTransfertTiers The type transfert tiers.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypeTransfertTiers(?string $typeTransfertTiers): Dossier3 {
        $this->typeTransfertTiers = $typeTransfertTiers;
        return $this;
    }

    /**
     * Set the type transfert tiers f.
     *
     * @param string|null $typeTransfertTiersF The type transfert tiers f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypeTransfertTiersF(?string $typeTransfertTiersF): Dossier3 {
        $this->typeTransfertTiersF = $typeTransfertTiersF;
        return $this;
    }
}
