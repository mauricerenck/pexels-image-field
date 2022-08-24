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
 * Devis commercial entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisCommercialEntetes {

    /**
     * Ad int btq.
     *
     * @var string|null
     */
    private $adIntBtq;

    /**
     * Ad int bureau distributeur.
     *
     * @var string|null
     */
    private $adIntBureauDistributeur;

    /**
     * Ad int code pays.
     *
     * @var string|null
     */
    private $adIntCodePays;

    /**
     * Ad int code postal.
     *
     * @var string|null
     */
    private $adIntCodePostal;

    /**
     * Ad int complement.
     *
     * @var string|null
     */
    private $adIntComplement;

    /**
     * Ad int nom.
     *
     * @var string|null
     */
    private $adIntNom;

    /**
     * Ad int nom voie.
     *
     * @var string|null
     */
    private $adIntNomVoie;

    /**
     * Ad int num voie.
     *
     * @var string|null
     */
    private $adIntNumVoie;

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
     * Code anal client.
     *
     * @var string|null
     */
    private $codeAnalClient;

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
     * Code client fact.
     *
     * @var string|null
     */
    private $codeClientFact;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code factor.
     *
     * @var string|null
     */
    private $codeFactor;

    /**
     * Code langue designation article.
     *
     * @var string|null
     */
    private $codeLangueDesignationArticle;

    /**
     * Code mode reglement.
     *
     * @var string|null
     */
    private $codeModeReglement;

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
     * Code representant.
     *
     * @var string|null
     */
    private $codeRepresentant;

    /**
     * Code tva client.
     *
     * @var string|null
     */
    private $codeTvaClient;

    /**
     * Code ventil client.
     *
     * @var string|null
     */
    private $codeVentilClient;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Date acceptation.
     *
     * @var DateTime|null
     */
    private $dateAcceptation;

    /**
     * Date devis.
     *
     * @var DateTime|null
     */
    private $dateDevis;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Date validation.
     *
     * @var DateTime|null
     */
    private $dateValidation;

    /**
     * Devis euros.
     *
     * @var bool|null
     */
    private $devisEuros;

    /**
     * Devis vm.
     *
     * @var bool|null
     */
    private $devisVm;

    /**
     * Echeance depart.
     *
     * @var string|null
     */
    private $echeanceDepart;

    /**
     * Echeance forcee.
     *
     * @var bool|null
     */
    private $echeanceForcee;

    /**
     * Echeance le.
     *
     * @var string|null
     */
    private $echeanceLe;

    /**
     * Echeance nb jours.
     *
     * @var int|null
     */
    private $echeanceNbJours;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Fonction commercial.
     *
     * @var string|null
     */
    private $fonctionCommercial;

    /**
     * Interlocuteur.
     *
     * @var string|null
     */
    private $interlocuteur;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle transf cpta.
     *
     * @var string|null
     */
    private $libelleTransfCpta;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Mention libre.
     *
     * @var string|null
     */
    private $mentionLibre;

    /**
     * Montant acompte.
     *
     * @var float|null
     */
    private $montantAcompte;

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
     * Montant ttc.
     *
     * @var float|null
     */
    private $montantTtc;

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
     * Nombre echeances.
     *
     * @var string|null
     */
    private $nombreEcheances;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Numero devis.
     *
     * @var string|null
     */
    private $numeroDevis;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Prestation.
     *
     * @var string|null
     */
    private $prestation;

    /**
     * Reference1.
     *
     * @var string|null
     */
    private $reference1;

    /**
     * Reference2.
     *
     * @var string|null
     */
    private $reference2;

    /**
     * Reference3.
     *
     * @var string|null
     */
    private $reference3;

    /**
     * Reference4.
     *
     * @var string|null
     */
    private $reference4;

    /**
     * Saisir adresse.
     *
     * @var bool|null
     */
    private $saisirAdresse;

    /**
     * Soumis escompte.
     *
     * @var bool|null
     */
    private $soumisEscompte;

    /**
     * Soumis taxe deee.
     *
     * @var bool|null
     */
    private $soumisTaxeDeee;

    /**
     * Taux devise.
     *
     * @var float|null
     */
    private $tauxDevise;

    /**
     * Taux escompte.
     *
     * @var float|null
     */
    private $tauxEscompte;

    /**
     * Taux remise1.
     *
     * @var float|null
     */
    private $tauxRemise1;

    /**
     * Taux remise2.
     *
     * @var float|null
     */
    private $tauxRemise2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ad int btq.
     *
     * @return string|null Returns the ad int btq.
     */
    public function getAdIntBtq(): ?string {
        return $this->adIntBtq;
    }

    /**
     * Get the ad int bureau distributeur.
     *
     * @return string|null Returns the ad int bureau distributeur.
     */
    public function getAdIntBureauDistributeur(): ?string {
        return $this->adIntBureauDistributeur;
    }

    /**
     * Get the ad int code pays.
     *
     * @return string|null Returns the ad int code pays.
     */
    public function getAdIntCodePays(): ?string {
        return $this->adIntCodePays;
    }

    /**
     * Get the ad int code postal.
     *
     * @return string|null Returns the ad int code postal.
     */
    public function getAdIntCodePostal(): ?string {
        return $this->adIntCodePostal;
    }

    /**
     * Get the ad int complement.
     *
     * @return string|null Returns the ad int complement.
     */
    public function getAdIntComplement(): ?string {
        return $this->adIntComplement;
    }

    /**
     * Get the ad int nom.
     *
     * @return string|null Returns the ad int nom.
     */
    public function getAdIntNom(): ?string {
        return $this->adIntNom;
    }

    /**
     * Get the ad int nom voie.
     *
     * @return string|null Returns the ad int nom voie.
     */
    public function getAdIntNomVoie(): ?string {
        return $this->adIntNomVoie;
    }

    /**
     * Get the ad int num voie.
     *
     * @return string|null Returns the ad int num voie.
     */
    public function getAdIntNumVoie(): ?string {
        return $this->adIntNumVoie;
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
     * Get the code anal client.
     *
     * @return string|null Returns the code anal client.
     */
    public function getCodeAnalClient(): ?string {
        return $this->codeAnalClient;
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
     * Get the code client fact.
     *
     * @return string|null Returns the code client fact.
     */
    public function getCodeClientFact(): ?string {
        return $this->codeClientFact;
    }

    /**
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
    }

    /**
     * Get the code factor.
     *
     * @return string|null Returns the code factor.
     */
    public function getCodeFactor(): ?string {
        return $this->codeFactor;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string|null Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle(): ?string {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code mode reglement.
     *
     * @return string|null Returns the code mode reglement.
     */
    public function getCodeModeReglement(): ?string {
        return $this->codeModeReglement;
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
     * Get the code representant.
     *
     * @return string|null Returns the code representant.
     */
    public function getCodeRepresentant(): ?string {
        return $this->codeRepresentant;
    }

    /**
     * Get the code tva client.
     *
     * @return string|null Returns the code tva client.
     */
    public function getCodeTvaClient(): ?string {
        return $this->codeTvaClient;
    }

    /**
     * Get the code ventil client.
     *
     * @return string|null Returns the code ventil client.
     */
    public function getCodeVentilClient(): ?string {
        return $this->codeVentilClient;
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
     * Get the date acceptation.
     *
     * @return DateTime|null Returns the date acceptation.
     */
    public function getDateAcceptation(): ?DateTime {
        return $this->dateAcceptation;
    }

    /**
     * Get the date devis.
     *
     * @return DateTime|null Returns the date devis.
     */
    public function getDateDevis(): ?DateTime {
        return $this->dateDevis;
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
     * Get the date validation.
     *
     * @return DateTime|null Returns the date validation.
     */
    public function getDateValidation(): ?DateTime {
        return $this->dateValidation;
    }

    /**
     * Get the devis euros.
     *
     * @return bool|null Returns the devis euros.
     */
    public function getDevisEuros(): ?bool {
        return $this->devisEuros;
    }

    /**
     * Get the devis vm.
     *
     * @return bool|null Returns the devis vm.
     */
    public function getDevisVm(): ?bool {
        return $this->devisVm;
    }

    /**
     * Get the echeance depart.
     *
     * @return string|null Returns the echeance depart.
     */
    public function getEcheanceDepart(): ?string {
        return $this->echeanceDepart;
    }

    /**
     * Get the echeance forcee.
     *
     * @return bool|null Returns the echeance forcee.
     */
    public function getEcheanceForcee(): ?bool {
        return $this->echeanceForcee;
    }

    /**
     * Get the echeance le.
     *
     * @return string|null Returns the echeance le.
     */
    public function getEcheanceLe(): ?string {
        return $this->echeanceLe;
    }

    /**
     * Get the echeance nb jours.
     *
     * @return int|null Returns the echeance nb jours.
     */
    public function getEcheanceNbJours(): ?int {
        return $this->echeanceNbJours;
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
     * Get the fonction commercial.
     *
     * @return string|null Returns the fonction commercial.
     */
    public function getFonctionCommercial(): ?string {
        return $this->fonctionCommercial;
    }

    /**
     * Get the interlocuteur.
     *
     * @return string|null Returns the interlocuteur.
     */
    public function getInterlocuteur(): ?string {
        return $this->interlocuteur;
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
     * Get the libelle transf cpta.
     *
     * @return string|null Returns the libelle transf cpta.
     */
    public function getLibelleTransfCpta(): ?string {
        return $this->libelleTransfCpta;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the mention libre.
     *
     * @return string|null Returns the mention libre.
     */
    public function getMentionLibre(): ?string {
        return $this->mentionLibre;
    }

    /**
     * Get the montant acompte.
     *
     * @return float|null Returns the montant acompte.
     */
    public function getMontantAcompte(): ?float {
        return $this->montantAcompte;
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
     * Get the montant ttc.
     *
     * @return float|null Returns the montant ttc.
     */
    public function getMontantTtc(): ?float {
        return $this->montantTtc;
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
     * Get the nombre echeances.
     *
     * @return string|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?string {
        return $this->nombreEcheances;
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
     * Get the numero devis.
     *
     * @return string|null Returns the numero devis.
     */
    public function getNumeroDevis(): ?string {
        return $this->numeroDevis;
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
     * Get the prestation.
     *
     * @return string|null Returns the prestation.
     */
    public function getPrestation(): ?string {
        return $this->prestation;
    }

    /**
     * Get the reference1.
     *
     * @return string|null Returns the reference1.
     */
    public function getReference1(): ?string {
        return $this->reference1;
    }

    /**
     * Get the reference2.
     *
     * @return string|null Returns the reference2.
     */
    public function getReference2(): ?string {
        return $this->reference2;
    }

    /**
     * Get the reference3.
     *
     * @return string|null Returns the reference3.
     */
    public function getReference3(): ?string {
        return $this->reference3;
    }

    /**
     * Get the reference4.
     *
     * @return string|null Returns the reference4.
     */
    public function getReference4(): ?string {
        return $this->reference4;
    }

    /**
     * Get the saisir adresse.
     *
     * @return bool|null Returns the saisir adresse.
     */
    public function getSaisirAdresse(): ?bool {
        return $this->saisirAdresse;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool|null Returns the soumis escompte.
     */
    public function getSoumisEscompte(): ?bool {
        return $this->soumisEscompte;
    }

    /**
     * Get the soumis taxe deee.
     *
     * @return bool|null Returns the soumis taxe deee.
     */
    public function getSoumisTaxeDeee(): ?bool {
        return $this->soumisTaxeDeee;
    }

    /**
     * Get the taux devise.
     *
     * @return float|null Returns the taux devise.
     */
    public function getTauxDevise(): ?float {
        return $this->tauxDevise;
    }

    /**
     * Get the taux escompte.
     *
     * @return float|null Returns the taux escompte.
     */
    public function getTauxEscompte(): ?float {
        return $this->tauxEscompte;
    }

    /**
     * Get the taux remise1.
     *
     * @return float|null Returns the taux remise1.
     */
    public function getTauxRemise1(): ?float {
        return $this->tauxRemise1;
    }

    /**
     * Get the taux remise2.
     *
     * @return float|null Returns the taux remise2.
     */
    public function getTauxRemise2(): ?float {
        return $this->tauxRemise2;
    }

    /**
     * Set the ad int btq.
     *
     * @param string|null $adIntBtq The ad int btq.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntBtq(?string $adIntBtq): DevisCommercialEntetes {
        $this->adIntBtq = $adIntBtq;
        return $this;
    }

    /**
     * Set the ad int bureau distributeur.
     *
     * @param string|null $adIntBureauDistributeur The ad int bureau distributeur.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntBureauDistributeur(?string $adIntBureauDistributeur): DevisCommercialEntetes {
        $this->adIntBureauDistributeur = $adIntBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad int code pays.
     *
     * @param string|null $adIntCodePays The ad int code pays.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntCodePays(?string $adIntCodePays): DevisCommercialEntetes {
        $this->adIntCodePays = $adIntCodePays;
        return $this;
    }

    /**
     * Set the ad int code postal.
     *
     * @param string|null $adIntCodePostal The ad int code postal.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntCodePostal(?string $adIntCodePostal): DevisCommercialEntetes {
        $this->adIntCodePostal = $adIntCodePostal;
        return $this;
    }

    /**
     * Set the ad int complement.
     *
     * @param string|null $adIntComplement The ad int complement.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntComplement(?string $adIntComplement): DevisCommercialEntetes {
        $this->adIntComplement = $adIntComplement;
        return $this;
    }

    /**
     * Set the ad int nom.
     *
     * @param string|null $adIntNom The ad int nom.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntNom(?string $adIntNom): DevisCommercialEntetes {
        $this->adIntNom = $adIntNom;
        return $this;
    }

    /**
     * Set the ad int nom voie.
     *
     * @param string|null $adIntNomVoie The ad int nom voie.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntNomVoie(?string $adIntNomVoie): DevisCommercialEntetes {
        $this->adIntNomVoie = $adIntNomVoie;
        return $this;
    }

    /**
     * Set the ad int num voie.
     *
     * @param string|null $adIntNumVoie The ad int num voie.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setAdIntNumVoie(?string $adIntNumVoie): DevisCommercialEntetes {
        $this->adIntNumVoie = $adIntNumVoie;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setBtq(?string $btq): DevisCommercialEntetes {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): DevisCommercialEntetes {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCivilite(?string $civilite): DevisCommercialEntetes {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisCommercialEntetes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code anal client.
     *
     * @param string|null $codeAnalClient The code anal client.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeAnalClient(?string $codeAnalClient): DevisCommercialEntetes {
        $this->codeAnalClient = $codeAnalClient;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeChantier(?string $codeChantier): DevisCommercialEntetes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeClient(?string $codeClient): DevisCommercialEntetes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string|null $codeClientFact The code client fact.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeClientFact(?string $codeClientFact): DevisCommercialEntetes {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeDevise(?string $codeDevise): DevisCommercialEntetes {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string|null $codeFactor The code factor.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeFactor(?string $codeFactor): DevisCommercialEntetes {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string|null $codeLangueDesignationArticle The code langue designation article.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeLangueDesignationArticle(?string $codeLangueDesignationArticle): DevisCommercialEntetes {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code mode reglement.
     *
     * @param string|null $codeModeReglement The code mode reglement.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeModeReglement(?string $codeModeReglement): DevisCommercialEntetes {
        $this->codeModeReglement = $codeModeReglement;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodePays(?string $codePays): DevisCommercialEntetes {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodePostal(?string $codePostal): DevisCommercialEntetes {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeRegroupement(?string $codeRegroupement): DevisCommercialEntetes {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code representant.
     *
     * @param string|null $codeRepresentant The code representant.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeRepresentant(?string $codeRepresentant): DevisCommercialEntetes {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }

    /**
     * Set the code tva client.
     *
     * @param string|null $codeTvaClient The code tva client.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeTvaClient(?string $codeTvaClient): DevisCommercialEntetes {
        $this->codeTvaClient = $codeTvaClient;
        return $this;
    }

    /**
     * Set the code ventil client.
     *
     * @param string|null $codeVentilClient The code ventil client.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setCodeVentilClient(?string $codeVentilClient): DevisCommercialEntetes {
        $this->codeVentilClient = $codeVentilClient;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setComplement(?string $complement): DevisCommercialEntetes {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date acceptation.
     *
     * @param DateTime|null $dateAcceptation The date acceptation.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setDateAcceptation(?DateTime $dateAcceptation): DevisCommercialEntetes {
        $this->dateAcceptation = $dateAcceptation;
        return $this;
    }

    /**
     * Set the date devis.
     *
     * @param DateTime|null $dateDevis The date devis.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setDateDevis(?DateTime $dateDevis): DevisCommercialEntetes {
        $this->dateDevis = $dateDevis;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setDateEcheance(?DateTime $dateEcheance): DevisCommercialEntetes {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date validation.
     *
     * @param DateTime|null $dateValidation The date validation.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setDateValidation(?DateTime $dateValidation): DevisCommercialEntetes {
        $this->dateValidation = $dateValidation;
        return $this;
    }

    /**
     * Set the devis euros.
     *
     * @param bool|null $devisEuros The devis euros.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setDevisEuros(?bool $devisEuros): DevisCommercialEntetes {
        $this->devisEuros = $devisEuros;
        return $this;
    }

    /**
     * Set the devis vm.
     *
     * @param bool|null $devisVm The devis vm.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setDevisVm(?bool $devisVm): DevisCommercialEntetes {
        $this->devisVm = $devisVm;
        return $this;
    }

    /**
     * Set the echeance depart.
     *
     * @param string|null $echeanceDepart The echeance depart.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setEcheanceDepart(?string $echeanceDepart): DevisCommercialEntetes {
        $this->echeanceDepart = $echeanceDepart;
        return $this;
    }

    /**
     * Set the echeance forcee.
     *
     * @param bool|null $echeanceForcee The echeance forcee.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setEcheanceForcee(?bool $echeanceForcee): DevisCommercialEntetes {
        $this->echeanceForcee = $echeanceForcee;
        return $this;
    }

    /**
     * Set the echeance le.
     *
     * @param string|null $echeanceLe The echeance le.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setEcheanceLe(?string $echeanceLe): DevisCommercialEntetes {
        $this->echeanceLe = $echeanceLe;
        return $this;
    }

    /**
     * Set the echeance nb jours.
     *
     * @param int|null $echeanceNbJours The echeance nb jours.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setEcheanceNbJours(?int $echeanceNbJours): DevisCommercialEntetes {
        $this->echeanceNbJours = $echeanceNbJours;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setEtat(?string $etat): DevisCommercialEntetes {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the fonction commercial.
     *
     * @param string|null $fonctionCommercial The fonction commercial.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setFonctionCommercial(?string $fonctionCommercial): DevisCommercialEntetes {
        $this->fonctionCommercial = $fonctionCommercial;
        return $this;
    }

    /**
     * Set the interlocuteur.
     *
     * @param string|null $interlocuteur The interlocuteur.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setInterlocuteur(?string $interlocuteur): DevisCommercialEntetes {
        $this->interlocuteur = $interlocuteur;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setLibelle(?string $libelle): DevisCommercialEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle transf cpta.
     *
     * @param string|null $libelleTransfCpta The libelle transf cpta.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setLibelleTransfCpta(?string $libelleTransfCpta): DevisCommercialEntetes {
        $this->libelleTransfCpta = $libelleTransfCpta;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setLienDocument(?string $lienDocument): DevisCommercialEntetes {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mention libre.
     *
     * @param string|null $mentionLibre The mention libre.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setMentionLibre(?string $mentionLibre): DevisCommercialEntetes {
        $this->mentionLibre = $mentionLibre;
        return $this;
    }

    /**
     * Set the montant acompte.
     *
     * @param float|null $montantAcompte The montant acompte.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setMontantAcompte(?float $montantAcompte): DevisCommercialEntetes {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }

    /**
     * Set the montant htpx.
     *
     * @param float|null $montantHtpx The montant htpx.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setMontantHtpx(?float $montantHtpx): DevisCommercialEntetes {
        $this->montantHtpx = $montantHtpx;
        return $this;
    }

    /**
     * Set the montant htvm.
     *
     * @param float|null $montantHtvm The montant htvm.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setMontantHtvm(?float $montantHtvm): DevisCommercialEntetes {
        $this->montantHtvm = $montantHtvm;
        return $this;
    }

    /**
     * Set the montant ttc.
     *
     * @param float|null $montantTtc The montant ttc.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setMontantTtc(?float $montantTtc): DevisCommercialEntetes {
        $this->montantTtc = $montantTtc;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNomClient(?string $nomClient): DevisCommercialEntetes {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNomSuite(?string $nomSuite): DevisCommercialEntetes {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string|null $nomSuite2 The nom suite2.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNomSuite2(?string $nomSuite2): DevisCommercialEntetes {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string|null $nomSuite3 The nom suite3.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNomSuite3(?string $nomSuite3): DevisCommercialEntetes {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNomVoie(?string $nomVoie): DevisCommercialEntetes {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNombreEcheances(?string $nombreEcheances): DevisCommercialEntetes {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNumVoie(?string $numVoie): DevisCommercialEntetes {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero devis.
     *
     * @param string|null $numeroDevis The numero devis.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNumeroDevis(?string $numeroDevis): DevisCommercialEntetes {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setNumeroPj(?int $numeroPj): DevisCommercialEntetes {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the prestation.
     *
     * @param string|null $prestation The prestation.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setPrestation(?string $prestation): DevisCommercialEntetes {
        $this->prestation = $prestation;
        return $this;
    }

    /**
     * Set the reference1.
     *
     * @param string|null $reference1 The reference1.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setReference1(?string $reference1): DevisCommercialEntetes {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * Set the reference2.
     *
     * @param string|null $reference2 The reference2.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setReference2(?string $reference2): DevisCommercialEntetes {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * Set the reference3.
     *
     * @param string|null $reference3 The reference3.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setReference3(?string $reference3): DevisCommercialEntetes {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Set the reference4.
     *
     * @param string|null $reference4 The reference4.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setReference4(?string $reference4): DevisCommercialEntetes {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * Set the saisir adresse.
     *
     * @param bool|null $saisirAdresse The saisir adresse.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setSaisirAdresse(?bool $saisirAdresse): DevisCommercialEntetes {
        $this->saisirAdresse = $saisirAdresse;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): DevisCommercialEntetes {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis taxe deee.
     *
     * @param bool|null $soumisTaxeDeee The soumis taxe deee.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setSoumisTaxeDeee(?bool $soumisTaxeDeee): DevisCommercialEntetes {
        $this->soumisTaxeDeee = $soumisTaxeDeee;
        return $this;
    }

    /**
     * Set the taux devise.
     *
     * @param float|null $tauxDevise The taux devise.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setTauxDevise(?float $tauxDevise): DevisCommercialEntetes {
        $this->tauxDevise = $tauxDevise;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setTauxEscompte(?float $tauxEscompte): DevisCommercialEntetes {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the taux remise1.
     *
     * @param float|null $tauxRemise1 The taux remise1.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setTauxRemise1(?float $tauxRemise1): DevisCommercialEntetes {
        $this->tauxRemise1 = $tauxRemise1;
        return $this;
    }

    /**
     * Set the taux remise2.
     *
     * @param float|null $tauxRemise2 The taux remise2.
     * @return DevisCommercialEntetes Returns this Devis commercial entetes.
     */
    public function setTauxRemise2(?float $tauxRemise2): DevisCommercialEntetes {
        $this->tauxRemise2 = $tauxRemise2;
        return $this;
    }
}
