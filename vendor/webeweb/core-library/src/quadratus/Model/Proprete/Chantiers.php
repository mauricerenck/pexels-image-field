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
 * Chantiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Chantiers {

    /**
     * Ad f bureau distributeur.
     *
     * @var string|null
     */
    private $adFBureauDistributeur;

    /**
     * Ad f civilite.
     *
     * @var string|null
     */
    private $adFCivilite;

    /**
     * Ad f code pays.
     *
     * @var string|null
     */
    private $adFCodePays;

    /**
     * Ad f code postal.
     *
     * @var string|null
     */
    private $adFCodePostal;

    /**
     * Ad f complement.
     *
     * @var string|null
     */
    private $adFComplement;

    /**
     * Ad f nom client.
     *
     * @var string|null
     */
    private $adFNomClient;

    /**
     * Ad f nom suite.
     *
     * @var string|null
     */
    private $adFNomSuite;

    /**
     * Ad f nom suite2.
     *
     * @var string|null
     */
    private $adFNomSuite2;

    /**
     * Ad f nom suite3.
     *
     * @var string|null
     */
    private $adFNomSuite3;

    /**
     * Ad f nom voie.
     *
     * @var string|null
     */
    private $adFNomVoie;

    /**
     * Ad f num voie.
     *
     * @var string|null
     */
    private $adFNumVoie;

    /**
     * Ad f type adresse.
     *
     * @var string|null
     */
    private $adFTypeAdresse;

    /**
     * Ad fbtq.
     *
     * @var string|null
     */
    private $adFbtq;

    /**
     * Adresse.
     *
     * @var string|null
     */
    private $adresse;

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Btq livraison.
     *
     * @var string|null
     */
    private $btqLivraison;

    /**
     * Budget commande.
     *
     * @var float|null
     */
    private $budgetCommande;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Bureau distributeur livraison.
     *
     * @var string|null
     */
    private $bureauDistributeurLivraison;

    /**
     * Chantier ponctuel.
     *
     * @var bool|null
     */
    private $chantierPonctuel;

    /**
     * Chef equipe.
     *
     * @var string|null
     */
    private $chefEquipe;

    /**
     * Cle alpha.
     *
     * @var string|null
     */
    private $cleAlpha;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code agence.
     *
     * @var string|null
     */
    private $codeAgence;

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
     * Code commercial.
     *
     * @var string|null
     */
    private $codeCommercial;

    /**
     * Code emp inspecteur.
     *
     * @var string|null
     */
    private $codeEmpInspecteur;

    /**
     * Code formule.
     *
     * @var string|null
     */
    private $codeFormule;

    /**
     * Code livraison.
     *
     * @var string|null
     */
    private $codeLivraison;

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
     * Code postal livraison.
     *
     * @var string|null
     */
    private $codePostalLivraison;

    /**
     * Code reg marge.
     *
     * @var string|null
     */
    private $codeRegMarge;

    /**
     * Code revision.
     *
     * @var string|null
     */
    private $codeRevision;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Code ventil compta.
     *
     * @var string|null
     */
    private $codeVentilCompta;

    /**
     * Collectif.
     *
     * @var string|null
     */
    private $collectif;

    /**
     * Commande isolee.
     *
     * @var bool|null
     */
    private $commandeIsolee;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Complement livraison.
     *
     * @var string|null
     */
    private $complementLivraison;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date echeance contrat.
     *
     * @var DateTime|null
     */
    private $dateEcheanceContrat;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Descriptif.
     *
     * @var string|null
     */
    private $descriptif;

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
     * Echeance annuelle.
     *
     * @var bool|null
     */
    private $echeanceAnnuelle;

    /**
     * Fact negoce isolee.
     *
     * @var bool|null
     */
    private $factNegoceIsolee;

    /**
     * Facture isolee.
     *
     * @var bool|null
     */
    private $factureIsolee;

    /**
     * Jour fact.
     *
     * @var string|null
     */
    private $jourFact;

    /**
     * Latitude.
     *
     * @var float|null
     */
    private $latitude;

    /**
     * Loi chatel sur facture.
     *
     * @var bool|null
     */
    private $loiChatelSurFacture;

    /**
     * Longitude.
     *
     * @var float|null
     */
    private $longitude;

    /**
     * Maj stock by da.
     *
     * @var bool|null
     */
    private $majStockByDa;

    /**
     * Nb controles prevus.
     *
     * @var int|null
     */
    private $nbControlesPrevus;

    /**
     * Nb mois preavis.
     *
     * @var string|null
     */
    private $nbMoisPreavis;

    /**
     * Nom adresse.
     *
     * @var string|null
     */
    private $nomAdresse;

    /**
     * Nom chantier.
     *
     * @var string|null
     */
    private $nomChantier;

    /**
     * Nom livraison.
     *
     * @var string|null
     */
    private $nomLivraison;

    /**
     * Nom responsable.
     *
     * @var string|null
     */
    private $nomResponsable;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom suite livraison.
     *
     * @var string|null
     */
    private $nomSuiteLivraison;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Nom voie livraison.
     *
     * @var string|null
     */
    private $nomVoieLivraison;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Num voie livraison.
     *
     * @var string|null
     */
    private $numVoieLivraison;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Plan fact.
     *
     * @var bool|null
     */
    private $planFact;

    /**
     * Pourc conso produit.
     *
     * @var float|null
     */
    private $pourcConsoProduit;

    /**
     * Pourc marge previs.
     *
     * @var float|null
     */
    private $pourcMargePrevis;

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
     * Rupt date livraison.
     *
     * @var bool|null
     */
    private $ruptDateLivraison;

    /**
     * Telephone.
     *
     * @var string|null
     */
    private $telephone;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ad f bureau distributeur.
     *
     * @return string|null Returns the ad f bureau distributeur.
     */
    public function getAdFBureauDistributeur(): ?string {
        return $this->adFBureauDistributeur;
    }

    /**
     * Get the ad f civilite.
     *
     * @return string|null Returns the ad f civilite.
     */
    public function getAdFCivilite(): ?string {
        return $this->adFCivilite;
    }

    /**
     * Get the ad f code pays.
     *
     * @return string|null Returns the ad f code pays.
     */
    public function getAdFCodePays(): ?string {
        return $this->adFCodePays;
    }

    /**
     * Get the ad f code postal.
     *
     * @return string|null Returns the ad f code postal.
     */
    public function getAdFCodePostal(): ?string {
        return $this->adFCodePostal;
    }

    /**
     * Get the ad f complement.
     *
     * @return string|null Returns the ad f complement.
     */
    public function getAdFComplement(): ?string {
        return $this->adFComplement;
    }

    /**
     * Get the ad f nom client.
     *
     * @return string|null Returns the ad f nom client.
     */
    public function getAdFNomClient(): ?string {
        return $this->adFNomClient;
    }

    /**
     * Get the ad f nom suite.
     *
     * @return string|null Returns the ad f nom suite.
     */
    public function getAdFNomSuite(): ?string {
        return $this->adFNomSuite;
    }

    /**
     * Get the ad f nom suite2.
     *
     * @return string|null Returns the ad f nom suite2.
     */
    public function getAdFNomSuite2(): ?string {
        return $this->adFNomSuite2;
    }

    /**
     * Get the ad f nom suite3.
     *
     * @return string|null Returns the ad f nom suite3.
     */
    public function getAdFNomSuite3(): ?string {
        return $this->adFNomSuite3;
    }

    /**
     * Get the ad f nom voie.
     *
     * @return string|null Returns the ad f nom voie.
     */
    public function getAdFNomVoie(): ?string {
        return $this->adFNomVoie;
    }

    /**
     * Get the ad f num voie.
     *
     * @return string|null Returns the ad f num voie.
     */
    public function getAdFNumVoie(): ?string {
        return $this->adFNumVoie;
    }

    /**
     * Get the ad f type adresse.
     *
     * @return string|null Returns the ad f type adresse.
     */
    public function getAdFTypeAdresse(): ?string {
        return $this->adFTypeAdresse;
    }

    /**
     * Get the ad fbtq.
     *
     * @return string|null Returns the ad fbtq.
     */
    public function getAdFbtq(): ?string {
        return $this->adFbtq;
    }

    /**
     * Get the adresse.
     *
     * @return string|null Returns the adresse.
     */
    public function getAdresse(): ?string {
        return $this->adresse;
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
     * Get the btq livraison.
     *
     * @return string|null Returns the btq livraison.
     */
    public function getBtqLivraison(): ?string {
        return $this->btqLivraison;
    }

    /**
     * Get the budget commande.
     *
     * @return float|null Returns the budget commande.
     */
    public function getBudgetCommande(): ?float {
        return $this->budgetCommande;
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
     * Get the bureau distributeur livraison.
     *
     * @return string|null Returns the bureau distributeur livraison.
     */
    public function getBureauDistributeurLivraison(): ?string {
        return $this->bureauDistributeurLivraison;
    }

    /**
     * Get the chantier ponctuel.
     *
     * @return bool|null Returns the chantier ponctuel.
     */
    public function getChantierPonctuel(): ?bool {
        return $this->chantierPonctuel;
    }

    /**
     * Get the chef equipe.
     *
     * @return string|null Returns the chef equipe.
     */
    public function getChefEquipe(): ?string {
        return $this->chefEquipe;
    }

    /**
     * Get the cle alpha.
     *
     * @return string|null Returns the cle alpha.
     */
    public function getCleAlpha(): ?string {
        return $this->cleAlpha;
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
     * Get the code agence.
     *
     * @return string|null Returns the code agence.
     */
    public function getCodeAgence(): ?string {
        return $this->codeAgence;
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
     * Get the code commercial.
     *
     * @return string|null Returns the code commercial.
     */
    public function getCodeCommercial(): ?string {
        return $this->codeCommercial;
    }

    /**
     * Get the code emp inspecteur.
     *
     * @return string|null Returns the code emp inspecteur.
     */
    public function getCodeEmpInspecteur(): ?string {
        return $this->codeEmpInspecteur;
    }

    /**
     * Get the code formule.
     *
     * @return string|null Returns the code formule.
     */
    public function getCodeFormule(): ?string {
        return $this->codeFormule;
    }

    /**
     * Get the code livraison.
     *
     * @return string|null Returns the code livraison.
     */
    public function getCodeLivraison(): ?string {
        return $this->codeLivraison;
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
     * Get the code postal livraison.
     *
     * @return string|null Returns the code postal livraison.
     */
    public function getCodePostalLivraison(): ?string {
        return $this->codePostalLivraison;
    }

    /**
     * Get the code reg marge.
     *
     * @return string|null Returns the code reg marge.
     */
    public function getCodeRegMarge(): ?string {
        return $this->codeRegMarge;
    }

    /**
     * Get the code revision.
     *
     * @return string|null Returns the code revision.
     */
    public function getCodeRevision(): ?string {
        return $this->codeRevision;
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
     * Get the code ventil compta.
     *
     * @return string|null Returns the code ventil compta.
     */
    public function getCodeVentilCompta(): ?string {
        return $this->codeVentilCompta;
    }

    /**
     * Get the collectif.
     *
     * @return string|null Returns the collectif.
     */
    public function getCollectif(): ?string {
        return $this->collectif;
    }

    /**
     * Get the commande isolee.
     *
     * @return bool|null Returns the commande isolee.
     */
    public function getCommandeIsolee(): ?bool {
        return $this->commandeIsolee;
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
     * Get the complement livraison.
     *
     * @return string|null Returns the complement livraison.
     */
    public function getComplementLivraison(): ?string {
        return $this->complementLivraison;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date echeance contrat.
     *
     * @return DateTime|null Returns the date echeance contrat.
     */
    public function getDateEcheanceContrat(): ?DateTime {
        return $this->dateEcheanceContrat;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
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
     * Get the descriptif.
     *
     * @return string|null Returns the descriptif.
     */
    public function getDescriptif(): ?string {
        return $this->descriptif;
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
     * Get the echeance annuelle.
     *
     * @return bool|null Returns the echeance annuelle.
     */
    public function getEcheanceAnnuelle(): ?bool {
        return $this->echeanceAnnuelle;
    }

    /**
     * Get the fact negoce isolee.
     *
     * @return bool|null Returns the fact negoce isolee.
     */
    public function getFactNegoceIsolee(): ?bool {
        return $this->factNegoceIsolee;
    }

    /**
     * Get the facture isolee.
     *
     * @return bool|null Returns the facture isolee.
     */
    public function getFactureIsolee(): ?bool {
        return $this->factureIsolee;
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
     * Get the latitude.
     *
     * @return float|null Returns the latitude.
     */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Get the loi chatel sur facture.
     *
     * @return bool|null Returns the loi chatel sur facture.
     */
    public function getLoiChatelSurFacture(): ?bool {
        return $this->loiChatelSurFacture;
    }

    /**
     * Get the longitude.
     *
     * @return float|null Returns the longitude.
     */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Get the maj stock by da.
     *
     * @return bool|null Returns the maj stock by da.
     */
    public function getMajStockByDa(): ?bool {
        return $this->majStockByDa;
    }

    /**
     * Get the nb controles prevus.
     *
     * @return int|null Returns the nb controles prevus.
     */
    public function getNbControlesPrevus(): ?int {
        return $this->nbControlesPrevus;
    }

    /**
     * Get the nb mois preavis.
     *
     * @return string|null Returns the nb mois preavis.
     */
    public function getNbMoisPreavis(): ?string {
        return $this->nbMoisPreavis;
    }

    /**
     * Get the nom adresse.
     *
     * @return string|null Returns the nom adresse.
     */
    public function getNomAdresse(): ?string {
        return $this->nomAdresse;
    }

    /**
     * Get the nom chantier.
     *
     * @return string|null Returns the nom chantier.
     */
    public function getNomChantier(): ?string {
        return $this->nomChantier;
    }

    /**
     * Get the nom livraison.
     *
     * @return string|null Returns the nom livraison.
     */
    public function getNomLivraison(): ?string {
        return $this->nomLivraison;
    }

    /**
     * Get the nom responsable.
     *
     * @return string|null Returns the nom responsable.
     */
    public function getNomResponsable(): ?string {
        return $this->nomResponsable;
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
     * Get the nom suite livraison.
     *
     * @return string|null Returns the nom suite livraison.
     */
    public function getNomSuiteLivraison(): ?string {
        return $this->nomSuiteLivraison;
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
     * Get the nom voie livraison.
     *
     * @return string|null Returns the nom voie livraison.
     */
    public function getNomVoieLivraison(): ?string {
        return $this->nomVoieLivraison;
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
     * Get the num voie livraison.
     *
     * @return string|null Returns the num voie livraison.
     */
    public function getNumVoieLivraison(): ?string {
        return $this->numVoieLivraison;
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
     * Get the plan fact.
     *
     * @return bool|null Returns the plan fact.
     */
    public function getPlanFact(): ?bool {
        return $this->planFact;
    }

    /**
     * Get the pourc conso produit.
     *
     * @return float|null Returns the pourc conso produit.
     */
    public function getPourcConsoProduit(): ?float {
        return $this->pourcConsoProduit;
    }

    /**
     * Get the pourc marge previs.
     *
     * @return float|null Returns the pourc marge previs.
     */
    public function getPourcMargePrevis(): ?float {
        return $this->pourcMargePrevis;
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
     * Get the rupt date livraison.
     *
     * @return bool|null Returns the rupt date livraison.
     */
    public function getRuptDateLivraison(): ?bool {
        return $this->ruptDateLivraison;
    }

    /**
     * Get the telephone.
     *
     * @return string|null Returns the telephone.
     */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string|null $adFBureauDistributeur The ad f bureau distributeur.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFBureauDistributeur(?string $adFBureauDistributeur): Chantiers {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string|null $adFCivilite The ad f civilite.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFCivilite(?string $adFCivilite): Chantiers {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string|null $adFCodePays The ad f code pays.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFCodePays(?string $adFCodePays): Chantiers {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string|null $adFCodePostal The ad f code postal.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFCodePostal(?string $adFCodePostal): Chantiers {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }

    /**
     * Set the ad f complement.
     *
     * @param string|null $adFComplement The ad f complement.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFComplement(?string $adFComplement): Chantiers {
        $this->adFComplement = $adFComplement;
        return $this;
    }

    /**
     * Set the ad f nom client.
     *
     * @param string|null $adFNomClient The ad f nom client.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFNomClient(?string $adFNomClient): Chantiers {
        $this->adFNomClient = $adFNomClient;
        return $this;
    }

    /**
     * Set the ad f nom suite.
     *
     * @param string|null $adFNomSuite The ad f nom suite.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFNomSuite(?string $adFNomSuite): Chantiers {
        $this->adFNomSuite = $adFNomSuite;
        return $this;
    }

    /**
     * Set the ad f nom suite2.
     *
     * @param string|null $adFNomSuite2 The ad f nom suite2.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFNomSuite2(?string $adFNomSuite2): Chantiers {
        $this->adFNomSuite2 = $adFNomSuite2;
        return $this;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string|null $adFNomSuite3 The ad f nom suite3.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFNomSuite3(?string $adFNomSuite3): Chantiers {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string|null $adFNomVoie The ad f nom voie.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFNomVoie(?string $adFNomVoie): Chantiers {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string|null $adFNumVoie The ad f num voie.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFNumVoie(?string $adFNumVoie): Chantiers {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }

    /**
     * Set the ad f type adresse.
     *
     * @param string|null $adFTypeAdresse The ad f type adresse.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFTypeAdresse(?string $adFTypeAdresse): Chantiers {
        $this->adFTypeAdresse = $adFTypeAdresse;
        return $this;
    }

    /**
     * Set the ad fbtq.
     *
     * @param string|null $adFbtq The ad fbtq.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdFbtq(?string $adFbtq): Chantiers {
        $this->adFbtq = $adFbtq;
        return $this;
    }

    /**
     * Set the adresse.
     *
     * @param string|null $adresse The adresse.
     * @return Chantiers Returns this Chantiers.
     */
    public function setAdresse(?string $adresse): Chantiers {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Chantiers Returns this Chantiers.
     */
    public function setBtq(?string $btq): Chantiers {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the btq livraison.
     *
     * @param string|null $btqLivraison The btq livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setBtqLivraison(?string $btqLivraison): Chantiers {
        $this->btqLivraison = $btqLivraison;
        return $this;
    }

    /**
     * Set the budget commande.
     *
     * @param float|null $budgetCommande The budget commande.
     * @return Chantiers Returns this Chantiers.
     */
    public function setBudgetCommande(?float $budgetCommande): Chantiers {
        $this->budgetCommande = $budgetCommande;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Chantiers Returns this Chantiers.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Chantiers {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the bureau distributeur livraison.
     *
     * @param string|null $bureauDistributeurLivraison The bureau distributeur livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setBureauDistributeurLivraison(?string $bureauDistributeurLivraison): Chantiers {
        $this->bureauDistributeurLivraison = $bureauDistributeurLivraison;
        return $this;
    }

    /**
     * Set the chantier ponctuel.
     *
     * @param bool|null $chantierPonctuel The chantier ponctuel.
     * @return Chantiers Returns this Chantiers.
     */
    public function setChantierPonctuel(?bool $chantierPonctuel): Chantiers {
        $this->chantierPonctuel = $chantierPonctuel;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param string|null $chefEquipe The chef equipe.
     * @return Chantiers Returns this Chantiers.
     */
    public function setChefEquipe(?string $chefEquipe): Chantiers {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the cle alpha.
     *
     * @param string|null $cleAlpha The cle alpha.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCleAlpha(?string $cleAlpha): Chantiers {
        $this->cleAlpha = $cleAlpha;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeAffaire(?string $codeAffaire): Chantiers {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code agence.
     *
     * @param string|null $codeAgence The code agence.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeAgence(?string $codeAgence): Chantiers {
        $this->codeAgence = $codeAgence;
        return $this;
    }

    /**
     * Set the code analytique.
     *
     * @param string|null $codeAnalytique The code analytique.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeAnalytique(?string $codeAnalytique): Chantiers {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeChantier(?string $codeChantier): Chantiers {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeClient(?string $codeClient): Chantiers {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code commercial.
     *
     * @param string|null $codeCommercial The code commercial.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeCommercial(?string $codeCommercial): Chantiers {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }

    /**
     * Set the code emp inspecteur.
     *
     * @param string|null $codeEmpInspecteur The code emp inspecteur.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeEmpInspecteur(?string $codeEmpInspecteur): Chantiers {
        $this->codeEmpInspecteur = $codeEmpInspecteur;
        return $this;
    }

    /**
     * Set the code formule.
     *
     * @param string|null $codeFormule The code formule.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeFormule(?string $codeFormule): Chantiers {
        $this->codeFormule = $codeFormule;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string|null $codeLivraison The code livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeLivraison(?string $codeLivraison): Chantiers {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodePays(?string $codePays): Chantiers {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodePostal(?string $codePostal): Chantiers {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code postal livraison.
     *
     * @param string|null $codePostalLivraison The code postal livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodePostalLivraison(?string $codePostalLivraison): Chantiers {
        $this->codePostalLivraison = $codePostalLivraison;
        return $this;
    }

    /**
     * Set the code reg marge.
     *
     * @param string|null $codeRegMarge The code reg marge.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeRegMarge(?string $codeRegMarge): Chantiers {
        $this->codeRegMarge = $codeRegMarge;
        return $this;
    }

    /**
     * Set the code revision.
     *
     * @param string|null $codeRevision The code revision.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeRevision(?string $codeRevision): Chantiers {
        $this->codeRevision = $codeRevision;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeTva(?string $codeTva): Chantiers {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): Chantiers {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCollectif(?string $collectif): Chantiers {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool|null $commandeIsolee The commande isolee.
     * @return Chantiers Returns this Chantiers.
     */
    public function setCommandeIsolee(?bool $commandeIsolee): Chantiers {
        $this->commandeIsolee = $commandeIsolee;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Chantiers Returns this Chantiers.
     */
    public function setComplement(?string $complement): Chantiers {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement livraison.
     *
     * @param string|null $complementLivraison The complement livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setComplementLivraison(?string $complementLivraison): Chantiers {
        $this->complementLivraison = $complementLivraison;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDateCreat(?DateTime $dateCreat): Chantiers {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDateDebut(?DateTime $dateDebut): Chantiers {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date echeance contrat.
     *
     * @param DateTime|null $dateEcheanceContrat The date echeance contrat.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDateEcheanceContrat(?DateTime $dateEcheanceContrat): Chantiers {
        $this->dateEcheanceContrat = $dateEcheanceContrat;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDateFin(?DateTime $dateFin): Chantiers {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDateModif(?DateTime $dateModif): Chantiers {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDateRevision(?DateTime $dateRevision): Chantiers {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDescriptif(?string $descriptif): Chantiers {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the dt avant dern prepa.
     *
     * @param DateTime|null $dtAvantDernPrepa The dt avant dern prepa.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDtAvantDernPrepa(?DateTime $dtAvantDernPrepa): Chantiers {
        $this->dtAvantDernPrepa = $dtAvantDernPrepa;
        return $this;
    }

    /**
     * Set the dt dern prepa.
     *
     * @param DateTime|null $dtDernPrepa The dt dern prepa.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDtDernPrepa(?DateTime $dtDernPrepa): Chantiers {
        $this->dtDernPrepa = $dtDernPrepa;
        return $this;
    }

    /**
     * Set the dt validite fact deb.
     *
     * @param DateTime|null $dtValiditeFactDeb The dt validite fact deb.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDtValiditeFactDeb(?DateTime $dtValiditeFactDeb): Chantiers {
        $this->dtValiditeFactDeb = $dtValiditeFactDeb;
        return $this;
    }

    /**
     * Set the dt validite fact deb deb mois.
     *
     * @param DateTime|null $dtValiditeFactDebDebMois The dt validite fact deb deb mois.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDtValiditeFactDebDebMois(?DateTime $dtValiditeFactDebDebMois): Chantiers {
        $this->dtValiditeFactDebDebMois = $dtValiditeFactDebDebMois;
        return $this;
    }

    /**
     * Set the dt validite fact fin.
     *
     * @param DateTime|null $dtValiditeFactFin The dt validite fact fin.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDtValiditeFactFin(?DateTime $dtValiditeFactFin): Chantiers {
        $this->dtValiditeFactFin = $dtValiditeFactFin;
        return $this;
    }

    /**
     * Set the dt validite fact fin fin mois.
     *
     * @param DateTime|null $dtValiditeFactFinFinMois The dt validite fact fin fin mois.
     * @return Chantiers Returns this Chantiers.
     */
    public function setDtValiditeFactFinFinMois(?DateTime $dtValiditeFactFinFinMois): Chantiers {
        $this->dtValiditeFactFinFinMois = $dtValiditeFactFinFinMois;
        return $this;
    }

    /**
     * Set the echeance annuelle.
     *
     * @param bool|null $echeanceAnnuelle The echeance annuelle.
     * @return Chantiers Returns this Chantiers.
     */
    public function setEcheanceAnnuelle(?bool $echeanceAnnuelle): Chantiers {
        $this->echeanceAnnuelle = $echeanceAnnuelle;
        return $this;
    }

    /**
     * Set the fact negoce isolee.
     *
     * @param bool|null $factNegoceIsolee The fact negoce isolee.
     * @return Chantiers Returns this Chantiers.
     */
    public function setFactNegoceIsolee(?bool $factNegoceIsolee): Chantiers {
        $this->factNegoceIsolee = $factNegoceIsolee;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool|null $factureIsolee The facture isolee.
     * @return Chantiers Returns this Chantiers.
     */
    public function setFactureIsolee(?bool $factureIsolee): Chantiers {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the jour fact.
     *
     * @param string|null $jourFact The jour fact.
     * @return Chantiers Returns this Chantiers.
     */
    public function setJourFact(?string $jourFact): Chantiers {
        $this->jourFact = $jourFact;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $latitude The latitude.
     * @return Chantiers Returns this Chantiers.
     */
    public function setLatitude(?float $latitude): Chantiers {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the loi chatel sur facture.
     *
     * @param bool|null $loiChatelSurFacture The loi chatel sur facture.
     * @return Chantiers Returns this Chantiers.
     */
    public function setLoiChatelSurFacture(?bool $loiChatelSurFacture): Chantiers {
        $this->loiChatelSurFacture = $loiChatelSurFacture;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float|null $longitude The longitude.
     * @return Chantiers Returns this Chantiers.
     */
    public function setLongitude(?float $longitude): Chantiers {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the maj stock by da.
     *
     * @param bool|null $majStockByDa The maj stock by da.
     * @return Chantiers Returns this Chantiers.
     */
    public function setMajStockByDa(?bool $majStockByDa): Chantiers {
        $this->majStockByDa = $majStockByDa;
        return $this;
    }

    /**
     * Set the nb controles prevus.
     *
     * @param int|null $nbControlesPrevus The nb controles prevus.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNbControlesPrevus(?int $nbControlesPrevus): Chantiers {
        $this->nbControlesPrevus = $nbControlesPrevus;
        return $this;
    }

    /**
     * Set the nb mois preavis.
     *
     * @param string|null $nbMoisPreavis The nb mois preavis.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNbMoisPreavis(?string $nbMoisPreavis): Chantiers {
        $this->nbMoisPreavis = $nbMoisPreavis;
        return $this;
    }

    /**
     * Set the nom adresse.
     *
     * @param string|null $nomAdresse The nom adresse.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomAdresse(?string $nomAdresse): Chantiers {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }

    /**
     * Set the nom chantier.
     *
     * @param string|null $nomChantier The nom chantier.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomChantier(?string $nomChantier): Chantiers {
        $this->nomChantier = $nomChantier;
        return $this;
    }

    /**
     * Set the nom livraison.
     *
     * @param string|null $nomLivraison The nom livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomLivraison(?string $nomLivraison): Chantiers {
        $this->nomLivraison = $nomLivraison;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string|null $nomResponsable The nom responsable.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomResponsable(?string $nomResponsable): Chantiers {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomSuite(?string $nomSuite): Chantiers {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite livraison.
     *
     * @param string|null $nomSuiteLivraison The nom suite livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomSuiteLivraison(?string $nomSuiteLivraison): Chantiers {
        $this->nomSuiteLivraison = $nomSuiteLivraison;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomVoie(?string $nomVoie): Chantiers {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nom voie livraison.
     *
     * @param string|null $nomVoieLivraison The nom voie livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNomVoieLivraison(?string $nomVoieLivraison): Chantiers {
        $this->nomVoieLivraison = $nomVoieLivraison;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNumVoie(?string $numVoie): Chantiers {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the num voie livraison.
     *
     * @param string|null $numVoieLivraison The num voie livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNumVoieLivraison(?string $numVoieLivraison): Chantiers {
        $this->numVoieLivraison = $numVoieLivraison;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Chantiers Returns this Chantiers.
     */
    public function setNumeroCompte(?string $numeroCompte): Chantiers {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the plan fact.
     *
     * @param bool|null $planFact The plan fact.
     * @return Chantiers Returns this Chantiers.
     */
    public function setPlanFact(?bool $planFact): Chantiers {
        $this->planFact = $planFact;
        return $this;
    }

    /**
     * Set the pourc conso produit.
     *
     * @param float|null $pourcConsoProduit The pourc conso produit.
     * @return Chantiers Returns this Chantiers.
     */
    public function setPourcConsoProduit(?float $pourcConsoProduit): Chantiers {
        $this->pourcConsoProduit = $pourcConsoProduit;
        return $this;
    }

    /**
     * Set the pourc marge previs.
     *
     * @param float|null $pourcMargePrevis The pourc marge previs.
     * @return Chantiers Returns this Chantiers.
     */
    public function setPourcMargePrevis(?float $pourcMargePrevis): Chantiers {
        $this->pourcMargePrevis = $pourcMargePrevis;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string|null $referenceFacture The reference facture.
     * @return Chantiers Returns this Chantiers.
     */
    public function setReferenceFacture(?string $referenceFacture): Chantiers {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string|null $referenceFacture2 The reference facture2.
     * @return Chantiers Returns this Chantiers.
     */
    public function setReferenceFacture2(?string $referenceFacture2): Chantiers {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }

    /**
     * Set the rupt date livraison.
     *
     * @param bool|null $ruptDateLivraison The rupt date livraison.
     * @return Chantiers Returns this Chantiers.
     */
    public function setRuptDateLivraison(?bool $ruptDateLivraison): Chantiers {
        $this->ruptDateLivraison = $ruptDateLivraison;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string|null $telephone The telephone.
     * @return Chantiers Returns this Chantiers.
     */
    public function setTelephone(?string $telephone): Chantiers {
        $this->telephone = $telephone;
        return $this;
    }
}
