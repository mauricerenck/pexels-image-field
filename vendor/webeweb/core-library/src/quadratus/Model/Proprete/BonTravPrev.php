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
 * Bon trav prev.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class BonTravPrev {

    /**
     * Ad bt bureau distributeur.
     *
     * @var string|null
     */
    private $adBtBureauDistributeur;

    /**
     * Ad bt civilite.
     *
     * @var string|null
     */
    private $adBtCivilite;

    /**
     * Ad bt code pays.
     *
     * @var string|null
     */
    private $adBtCodePays;

    /**
     * Ad bt code postal.
     *
     * @var string|null
     */
    private $adBtCodePostal;

    /**
     * Ad bt complement.
     *
     * @var string|null
     */
    private $adBtComplement;

    /**
     * Ad bt nom.
     *
     * @var string|null
     */
    private $adBtNom;

    /**
     * Ad bt nom suite.
     *
     * @var string|null
     */
    private $adBtNomSuite;

    /**
     * Ad bt nom voie.
     *
     * @var string|null
     */
    private $adBtNomVoie;

    /**
     * Ad bt num voie.
     *
     * @var string|null
     */
    private $adBtNumVoie;

    /**
     * Ad btbtq.
     *
     * @var string|null
     */
    private $adBtbtq;

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
     * Ad f nom.
     *
     * @var string|null
     */
    private $adFNom;

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
     * Ad fbtq.
     *
     * @var string|null
     */
    private $adFbtq;

    /**
     * Adresse bt saisie.
     *
     * @var bool|null
     */
    private $adresseBtSaisie;

    /**
     * Adresse facturation saisie.
     *
     * @var bool|null
     */
    private $adresseFacturationSaisie;

    /**
     * Bt copie.
     *
     * @var bool|null
     */
    private $btCopie;

    /**
     * Bt devis deja facture.
     *
     * @var bool|null
     */
    private $btDevisDejaFacture;

    /**
     * Bt valide.
     *
     * @var bool|null
     */
    private $btValide;

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
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code equipe.
     *
     * @var string|null
     */
    private $codeEquipe;

    /**
     * Code regroupement devis.
     *
     * @var string|null
     */
    private $codeRegroupementDevis;

    /**
     * Code tache type.
     *
     * @var string|null
     */
    private $codeTacheType;

    /**
     * Code tournee.
     *
     * @var string|null
     */
    private $codeTournee;

    /**
     * Critere bool1.
     *
     * @var bool|null
     */
    private $critereBool1;

    /**
     * Critere bool2.
     *
     * @var bool|null
     */
    private $critereBool2;

    /**
     * Critere byte1.
     *
     * @var string|null
     */
    private $critereByte1;

    /**
     * Critere liste1.
     *
     * @var string|null
     */
    private $critereListe1;

    /**
     * Critere liste2.
     *
     * @var string|null
     */
    private $critereListe2;

    /**
     * Critere numerique1.
     *
     * @var float|null
     */
    private $critereNumerique1;

    /**
     * Critere numerique2.
     *
     * @var float|null
     */
    private $critereNumerique2;

    /**
     * Critere texte1.
     *
     * @var string|null
     */
    private $critereTexte1;

    /**
     * Critere texte2.
     *
     * @var string|null
     */
    private $critereTexte2;

    /**
     * Date passage.
     *
     * @var DateTime|null
     */
    private $datePassage;

    /**
     * Date premier passage.
     *
     * @var DateTime|null
     */
    private $datePremierPassage;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Duree pointee.
     *
     * @var float|null
     */
    private $dureePointee;

    /**
     * Duree prevue.
     *
     * @var float|null
     */
    private $dureePrevue;

    /**
     * Duree validee.
     *
     * @var float|null
     */
    private $dureeValidee;

    /**
     * Employe signe mob.
     *
     * @var string|null
     */
    private $employeSigneMob;

    /**
     * Gestion planning.
     *
     * @var bool|null
     */
    private $gestionPlanning;

    /**
     * Guid mob.
     *
     * @var string|null
     */
    private $guidMob;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Latitude.
     *
     * @var float|null
     */
    private $latitude;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Longitude.
     *
     * @var float|null
     */
    private $longitude;

    /**
     * Montant ht devis.
     *
     * @var float|null
     */
    private $montantHtDevis;

    /**
     * Nb jours pointes.
     *
     * @var float|null
     */
    private $nbJoursPointes;

    /**
     * Nb jours prevus.
     *
     * @var float|null
     */
    private $nbJoursPrevus;

    /**
     * Nombre employes.
     *
     * @var int|null
     */
    private $nombreEmployes;

    /**
     * Non traite.
     *
     * @var bool|null
     */
    private $nonTraite;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Numero devis.
     *
     * @var string|null
     */
    private $numeroDevis;

    /**
     * Numero facture.
     *
     * @var string|null
     */
    private $numeroFacture;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Observation client.
     *
     * @var string|null
     */
    private $observationClient;

    /**
     * Observation interne.
     *
     * @var string|null
     */
    private $observationInterne;

    /**
     * Occasionnel.
     *
     * @var bool|null
     */
    private $occasionnel;

    /**
     * Plusieurs jours.
     *
     * @var bool|null
     */
    private $plusieursJours;

    /**
     * Plusieurs mois.
     *
     * @var bool|null
     */
    private $plusieursMois;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Proratise.
     *
     * @var bool|null
     */
    private $proratise;

    /**
     * reference1 devis.
     *
     * @var string|null
     */
    private $reference1Devis;

    /**
     * reference2 devis.
     *
     * @var string|null
     */
    private $reference2Devis;

    /**
     * Signataire.
     *
     * @var string|null
     */
    private $signataire;

    /**
     * Signe.
     *
     * @var bool|null
     */
    private $signe;

    /**
     * Start mob.
     *
     * @var string|null
     */
    private $startMob;

    /**
     * Type bt.
     *
     * @var string|null
     */
    private $typeBt;

    /**
     * Type bt saisi.
     *
     * @var string|null
     */
    private $typeBtSaisi;

    /**
     * Uniq id blocage.
     *
     * @var string|null
     */
    private $uniqIdBlocage;

    /**
     * Via.
     *
     * @var string|null
     */
    private $via;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ad bt bureau distributeur.
     *
     * @return string|null Returns the ad bt bureau distributeur.
     */
    public function getAdBtBureauDistributeur(): ?string {
        return $this->adBtBureauDistributeur;
    }

    /**
     * Get the ad bt civilite.
     *
     * @return string|null Returns the ad bt civilite.
     */
    public function getAdBtCivilite(): ?string {
        return $this->adBtCivilite;
    }

    /**
     * Get the ad bt code pays.
     *
     * @return string|null Returns the ad bt code pays.
     */
    public function getAdBtCodePays(): ?string {
        return $this->adBtCodePays;
    }

    /**
     * Get the ad bt code postal.
     *
     * @return string|null Returns the ad bt code postal.
     */
    public function getAdBtCodePostal(): ?string {
        return $this->adBtCodePostal;
    }

    /**
     * Get the ad bt complement.
     *
     * @return string|null Returns the ad bt complement.
     */
    public function getAdBtComplement(): ?string {
        return $this->adBtComplement;
    }

    /**
     * Get the ad bt nom.
     *
     * @return string|null Returns the ad bt nom.
     */
    public function getAdBtNom(): ?string {
        return $this->adBtNom;
    }

    /**
     * Get the ad bt nom suite.
     *
     * @return string|null Returns the ad bt nom suite.
     */
    public function getAdBtNomSuite(): ?string {
        return $this->adBtNomSuite;
    }

    /**
     * Get the ad bt nom voie.
     *
     * @return string|null Returns the ad bt nom voie.
     */
    public function getAdBtNomVoie(): ?string {
        return $this->adBtNomVoie;
    }

    /**
     * Get the ad bt num voie.
     *
     * @return string|null Returns the ad bt num voie.
     */
    public function getAdBtNumVoie(): ?string {
        return $this->adBtNumVoie;
    }

    /**
     * Get the ad btbtq.
     *
     * @return string|null Returns the ad btbtq.
     */
    public function getAdBtbtq(): ?string {
        return $this->adBtbtq;
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
     * Get the ad f nom.
     *
     * @return string|null Returns the ad f nom.
     */
    public function getAdFNom(): ?string {
        return $this->adFNom;
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
     * Get the ad fbtq.
     *
     * @return string|null Returns the ad fbtq.
     */
    public function getAdFbtq(): ?string {
        return $this->adFbtq;
    }

    /**
     * Get the adresse bt saisie.
     *
     * @return bool|null Returns the adresse bt saisie.
     */
    public function getAdresseBtSaisie(): ?bool {
        return $this->adresseBtSaisie;
    }

    /**
     * Get the adresse facturation saisie.
     *
     * @return bool|null Returns the adresse facturation saisie.
     */
    public function getAdresseFacturationSaisie(): ?bool {
        return $this->adresseFacturationSaisie;
    }

    /**
     * Get the bt copie.
     *
     * @return bool|null Returns the bt copie.
     */
    public function getBtCopie(): ?bool {
        return $this->btCopie;
    }

    /**
     * Get the bt devis deja facture.
     *
     * @return bool|null Returns the bt devis deja facture.
     */
    public function getBtDevisDejaFacture(): ?bool {
        return $this->btDevisDejaFacture;
    }

    /**
     * Get the bt valide.
     *
     * @return bool|null Returns the bt valide.
     */
    public function getBtValide(): ?bool {
        return $this->btValide;
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code equipe.
     *
     * @return string|null Returns the code equipe.
     */
    public function getCodeEquipe(): ?string {
        return $this->codeEquipe;
    }

    /**
     * Get the code regroupement devis.
     *
     * @return string|null Returns the code regroupement devis.
     */
    public function getCodeRegroupementDevis(): ?string {
        return $this->codeRegroupementDevis;
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
     * Get the code tournee.
     *
     * @return string|null Returns the code tournee.
     */
    public function getCodeTournee(): ?string {
        return $this->codeTournee;
    }

    /**
     * Get the critere bool1.
     *
     * @return bool|null Returns the critere bool1.
     */
    public function getCritereBool1(): ?bool {
        return $this->critereBool1;
    }

    /**
     * Get the critere bool2.
     *
     * @return bool|null Returns the critere bool2.
     */
    public function getCritereBool2(): ?bool {
        return $this->critereBool2;
    }

    /**
     * Get the critere byte1.
     *
     * @return string|null Returns the critere byte1.
     */
    public function getCritereByte1(): ?string {
        return $this->critereByte1;
    }

    /**
     * Get the critere liste1.
     *
     * @return string|null Returns the critere liste1.
     */
    public function getCritereListe1(): ?string {
        return $this->critereListe1;
    }

    /**
     * Get the critere liste2.
     *
     * @return string|null Returns the critere liste2.
     */
    public function getCritereListe2(): ?string {
        return $this->critereListe2;
    }

    /**
     * Get the critere numerique1.
     *
     * @return float|null Returns the critere numerique1.
     */
    public function getCritereNumerique1(): ?float {
        return $this->critereNumerique1;
    }

    /**
     * Get the critere numerique2.
     *
     * @return float|null Returns the critere numerique2.
     */
    public function getCritereNumerique2(): ?float {
        return $this->critereNumerique2;
    }

    /**
     * Get the critere texte1.
     *
     * @return string|null Returns the critere texte1.
     */
    public function getCritereTexte1(): ?string {
        return $this->critereTexte1;
    }

    /**
     * Get the critere texte2.
     *
     * @return string|null Returns the critere texte2.
     */
    public function getCritereTexte2(): ?string {
        return $this->critereTexte2;
    }

    /**
     * Get the date passage.
     *
     * @return DateTime|null Returns the date passage.
     */
    public function getDatePassage(): ?DateTime {
        return $this->datePassage;
    }

    /**
     * Get the date premier passage.
     *
     * @return DateTime|null Returns the date premier passage.
     */
    public function getDatePremierPassage(): ?DateTime {
        return $this->datePremierPassage;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert(): ?DateTime {
        return $this->dateTransfert;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the duree pointee.
     *
     * @return float|null Returns the duree pointee.
     */
    public function getDureePointee(): ?float {
        return $this->dureePointee;
    }

    /**
     * Get the duree prevue.
     *
     * @return float|null Returns the duree prevue.
     */
    public function getDureePrevue(): ?float {
        return $this->dureePrevue;
    }

    /**
     * Get the duree validee.
     *
     * @return float|null Returns the duree validee.
     */
    public function getDureeValidee(): ?float {
        return $this->dureeValidee;
    }

    /**
     * Get the employe signe mob.
     *
     * @return string|null Returns the employe signe mob.
     */
    public function getEmployeSigneMob(): ?string {
        return $this->employeSigneMob;
    }

    /**
     * Get the gestion planning.
     *
     * @return bool|null Returns the gestion planning.
     */
    public function getGestionPlanning(): ?bool {
        return $this->gestionPlanning;
    }

    /**
     * Get the guid mob.
     *
     * @return string|null Returns the guid mob.
     */
    public function getGuidMob(): ?string {
        return $this->guidMob;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb(): ?DateTime {
        return $this->heureDeb;
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
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
     * Get the longitude.
     *
     * @return float|null Returns the longitude.
     */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Get the montant ht devis.
     *
     * @return float|null Returns the montant ht devis.
     */
    public function getMontantHtDevis(): ?float {
        return $this->montantHtDevis;
    }

    /**
     * Get the nb jours pointes.
     *
     * @return float|null Returns the nb jours pointes.
     */
    public function getNbJoursPointes(): ?float {
        return $this->nbJoursPointes;
    }

    /**
     * Get the nb jours prevus.
     *
     * @return float|null Returns the nb jours prevus.
     */
    public function getNbJoursPrevus(): ?float {
        return $this->nbJoursPrevus;
    }

    /**
     * Get the nombre employes.
     *
     * @return int|null Returns the nombre employes.
     */
    public function getNombreEmployes(): ?int {
        return $this->nombreEmployes;
    }

    /**
     * Get the non traite.
     *
     * @return bool|null Returns the non traite.
     */
    public function getNonTraite(): ?bool {
        return $this->nonTraite;
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
     * Get the numero devis.
     *
     * @return string|null Returns the numero devis.
     */
    public function getNumeroDevis(): ?string {
        return $this->numeroDevis;
    }

    /**
     * Get the numero facture.
     *
     * @return string|null Returns the numero facture.
     */
    public function getNumeroFacture(): ?string {
        return $this->numeroFacture;
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
     * Get the observation client.
     *
     * @return string|null Returns the observation client.
     */
    public function getObservationClient(): ?string {
        return $this->observationClient;
    }

    /**
     * Get the observation interne.
     *
     * @return string|null Returns the observation interne.
     */
    public function getObservationInterne(): ?string {
        return $this->observationInterne;
    }

    /**
     * Get the occasionnel.
     *
     * @return bool|null Returns the occasionnel.
     */
    public function getOccasionnel(): ?bool {
        return $this->occasionnel;
    }

    /**
     * Get the plusieurs jours.
     *
     * @return bool|null Returns the plusieurs jours.
     */
    public function getPlusieursJours(): ?bool {
        return $this->plusieursJours;
    }

    /**
     * Get the plusieurs mois.
     *
     * @return bool|null Returns the plusieurs mois.
     */
    public function getPlusieursMois(): ?bool {
        return $this->plusieursMois;
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
     * Get the proratise.
     *
     * @return bool|null Returns the proratise.
     */
    public function getProratise(): ?bool {
        return $this->proratise;
    }

    /**
     * Get the signataire.
     *
     * @return string|null Returns the signataire.
     */
    public function getSignataire(): ?string {
        return $this->signataire;
    }

    /**
     * Get the signe.
     *
     * @return bool|null Returns the signe.
     */
    public function getSigne(): ?bool {
        return $this->signe;
    }

    /**
     * Get the start mob.
     *
     * @return string|null Returns the start mob.
     */
    public function getStartMob(): ?string {
        return $this->startMob;
    }

    /**
     * Get the type bt.
     *
     * @return string|null Returns the type bt.
     */
    public function getTypeBt(): ?string {
        return $this->typeBt;
    }

    /**
     * Get the type bt saisi.
     *
     * @return string|null Returns the type bt saisi.
     */
    public function getTypeBtSaisi(): ?string {
        return $this->typeBtSaisi;
    }

    /**
     * Get the uniq id blocage.
     *
     * @return string|null Returns the uniq id blocage.
     */
    public function getUniqIdBlocage(): ?string {
        return $this->uniqIdBlocage;
    }

    /**
     * Get the via.
     *
     * @return string|null Returns the via.
     */
    public function getVia(): ?string {
        return $this->via;
    }

    /**
     * Get the reference1 devis.
     *
     * @return string|null Returns the reference1 devis.
     */
    public function getreference1Devis(): ?string {
        return $this->reference1Devis;
    }

    /**
     * Get the reference2 devis.
     *
     * @return string|null Returns the reference2 devis.
     */
    public function getreference2Devis(): ?string {
        return $this->reference2Devis;
    }

    /**
     * Set the ad bt bureau distributeur.
     *
     * @param string|null $adBtBureauDistributeur The ad bt bureau distributeur.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtBureauDistributeur(?string $adBtBureauDistributeur): BonTravPrev {
        $this->adBtBureauDistributeur = $adBtBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad bt civilite.
     *
     * @param string|null $adBtCivilite The ad bt civilite.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtCivilite(?string $adBtCivilite): BonTravPrev {
        $this->adBtCivilite = $adBtCivilite;
        return $this;
    }

    /**
     * Set the ad bt code pays.
     *
     * @param string|null $adBtCodePays The ad bt code pays.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtCodePays(?string $adBtCodePays): BonTravPrev {
        $this->adBtCodePays = $adBtCodePays;
        return $this;
    }

    /**
     * Set the ad bt code postal.
     *
     * @param string|null $adBtCodePostal The ad bt code postal.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtCodePostal(?string $adBtCodePostal): BonTravPrev {
        $this->adBtCodePostal = $adBtCodePostal;
        return $this;
    }

    /**
     * Set the ad bt complement.
     *
     * @param string|null $adBtComplement The ad bt complement.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtComplement(?string $adBtComplement): BonTravPrev {
        $this->adBtComplement = $adBtComplement;
        return $this;
    }

    /**
     * Set the ad bt nom.
     *
     * @param string|null $adBtNom The ad bt nom.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtNom(?string $adBtNom): BonTravPrev {
        $this->adBtNom = $adBtNom;
        return $this;
    }

    /**
     * Set the ad bt nom suite.
     *
     * @param string|null $adBtNomSuite The ad bt nom suite.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtNomSuite(?string $adBtNomSuite): BonTravPrev {
        $this->adBtNomSuite = $adBtNomSuite;
        return $this;
    }

    /**
     * Set the ad bt nom voie.
     *
     * @param string|null $adBtNomVoie The ad bt nom voie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtNomVoie(?string $adBtNomVoie): BonTravPrev {
        $this->adBtNomVoie = $adBtNomVoie;
        return $this;
    }

    /**
     * Set the ad bt num voie.
     *
     * @param string|null $adBtNumVoie The ad bt num voie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtNumVoie(?string $adBtNumVoie): BonTravPrev {
        $this->adBtNumVoie = $adBtNumVoie;
        return $this;
    }

    /**
     * Set the ad btbtq.
     *
     * @param string|null $adBtbtq The ad btbtq.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdBtbtq(?string $adBtbtq): BonTravPrev {
        $this->adBtbtq = $adBtbtq;
        return $this;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string|null $adFBureauDistributeur The ad f bureau distributeur.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFBureauDistributeur(?string $adFBureauDistributeur): BonTravPrev {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string|null $adFCivilite The ad f civilite.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFCivilite(?string $adFCivilite): BonTravPrev {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string|null $adFCodePays The ad f code pays.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFCodePays(?string $adFCodePays): BonTravPrev {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string|null $adFCodePostal The ad f code postal.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFCodePostal(?string $adFCodePostal): BonTravPrev {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }

    /**
     * Set the ad f complement.
     *
     * @param string|null $adFComplement The ad f complement.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFComplement(?string $adFComplement): BonTravPrev {
        $this->adFComplement = $adFComplement;
        return $this;
    }

    /**
     * Set the ad f nom.
     *
     * @param string|null $adFNom The ad f nom.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFNom(?string $adFNom): BonTravPrev {
        $this->adFNom = $adFNom;
        return $this;
    }

    /**
     * Set the ad f nom suite.
     *
     * @param string|null $adFNomSuite The ad f nom suite.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFNomSuite(?string $adFNomSuite): BonTravPrev {
        $this->adFNomSuite = $adFNomSuite;
        return $this;
    }

    /**
     * Set the ad f nom suite2.
     *
     * @param string|null $adFNomSuite2 The ad f nom suite2.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFNomSuite2(?string $adFNomSuite2): BonTravPrev {
        $this->adFNomSuite2 = $adFNomSuite2;
        return $this;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string|null $adFNomSuite3 The ad f nom suite3.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFNomSuite3(?string $adFNomSuite3): BonTravPrev {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string|null $adFNomVoie The ad f nom voie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFNomVoie(?string $adFNomVoie): BonTravPrev {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string|null $adFNumVoie The ad f num voie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFNumVoie(?string $adFNumVoie): BonTravPrev {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }

    /**
     * Set the ad fbtq.
     *
     * @param string|null $adFbtq The ad fbtq.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdFbtq(?string $adFbtq): BonTravPrev {
        $this->adFbtq = $adFbtq;
        return $this;
    }

    /**
     * Set the adresse bt saisie.
     *
     * @param bool|null $adresseBtSaisie The adresse bt saisie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdresseBtSaisie(?bool $adresseBtSaisie): BonTravPrev {
        $this->adresseBtSaisie = $adresseBtSaisie;
        return $this;
    }

    /**
     * Set the adresse facturation saisie.
     *
     * @param bool|null $adresseFacturationSaisie The adresse facturation saisie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setAdresseFacturationSaisie(?bool $adresseFacturationSaisie): BonTravPrev {
        $this->adresseFacturationSaisie = $adresseFacturationSaisie;
        return $this;
    }

    /**
     * Set the bt copie.
     *
     * @param bool|null $btCopie The bt copie.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setBtCopie(?bool $btCopie): BonTravPrev {
        $this->btCopie = $btCopie;
        return $this;
    }

    /**
     * Set the bt devis deja facture.
     *
     * @param bool|null $btDevisDejaFacture The bt devis deja facture.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setBtDevisDejaFacture(?bool $btDevisDejaFacture): BonTravPrev {
        $this->btDevisDejaFacture = $btDevisDejaFacture;
        return $this;
    }

    /**
     * Set the bt valide.
     *
     * @param bool|null $btValide The bt valide.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setBtValide(?bool $btValide): BonTravPrev {
        $this->btValide = $btValide;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeAffaire(?string $codeAffaire): BonTravPrev {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeChantier(?string $codeChantier): BonTravPrev {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeClient(?string $codeClient): BonTravPrev {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): BonTravPrev {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string|null $codeEquipe The code equipe.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeEquipe(?string $codeEquipe): BonTravPrev {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }

    /**
     * Set the code regroupement devis.
     *
     * @param string|null $codeRegroupementDevis The code regroupement devis.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeRegroupementDevis(?string $codeRegroupementDevis): BonTravPrev {
        $this->codeRegroupementDevis = $codeRegroupementDevis;
        return $this;
    }

    /**
     * Set the code tache type.
     *
     * @param string|null $codeTacheType The code tache type.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeTacheType(?string $codeTacheType): BonTravPrev {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string|null $codeTournee The code tournee.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCodeTournee(?string $codeTournee): BonTravPrev {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the critere bool1.
     *
     * @param bool|null $critereBool1 The critere bool1.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereBool1(?bool $critereBool1): BonTravPrev {
        $this->critereBool1 = $critereBool1;
        return $this;
    }

    /**
     * Set the critere bool2.
     *
     * @param bool|null $critereBool2 The critere bool2.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereBool2(?bool $critereBool2): BonTravPrev {
        $this->critereBool2 = $critereBool2;
        return $this;
    }

    /**
     * Set the critere byte1.
     *
     * @param string|null $critereByte1 The critere byte1.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereByte1(?string $critereByte1): BonTravPrev {
        $this->critereByte1 = $critereByte1;
        return $this;
    }

    /**
     * Set the critere liste1.
     *
     * @param string|null $critereListe1 The critere liste1.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereListe1(?string $critereListe1): BonTravPrev {
        $this->critereListe1 = $critereListe1;
        return $this;
    }

    /**
     * Set the critere liste2.
     *
     * @param string|null $critereListe2 The critere liste2.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereListe2(?string $critereListe2): BonTravPrev {
        $this->critereListe2 = $critereListe2;
        return $this;
    }

    /**
     * Set the critere numerique1.
     *
     * @param float|null $critereNumerique1 The critere numerique1.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereNumerique1(?float $critereNumerique1): BonTravPrev {
        $this->critereNumerique1 = $critereNumerique1;
        return $this;
    }

    /**
     * Set the critere numerique2.
     *
     * @param float|null $critereNumerique2 The critere numerique2.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereNumerique2(?float $critereNumerique2): BonTravPrev {
        $this->critereNumerique2 = $critereNumerique2;
        return $this;
    }

    /**
     * Set the critere texte1.
     *
     * @param string|null $critereTexte1 The critere texte1.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereTexte1(?string $critereTexte1): BonTravPrev {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }

    /**
     * Set the critere texte2.
     *
     * @param string|null $critereTexte2 The critere texte2.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setCritereTexte2(?string $critereTexte2): BonTravPrev {
        $this->critereTexte2 = $critereTexte2;
        return $this;
    }

    /**
     * Set the date passage.
     *
     * @param DateTime|null $datePassage The date passage.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDatePassage(?DateTime $datePassage): BonTravPrev {
        $this->datePassage = $datePassage;
        return $this;
    }

    /**
     * Set the date premier passage.
     *
     * @param DateTime|null $datePremierPassage The date premier passage.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDatePremierPassage(?DateTime $datePremierPassage): BonTravPrev {
        $this->datePremierPassage = $datePremierPassage;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDateTransfert(?DateTime $dateTransfert): BonTravPrev {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDescription(?string $description): BonTravPrev {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the duree pointee.
     *
     * @param float|null $dureePointee The duree pointee.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDureePointee(?float $dureePointee): BonTravPrev {
        $this->dureePointee = $dureePointee;
        return $this;
    }

    /**
     * Set the duree prevue.
     *
     * @param float|null $dureePrevue The duree prevue.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDureePrevue(?float $dureePrevue): BonTravPrev {
        $this->dureePrevue = $dureePrevue;
        return $this;
    }

    /**
     * Set the duree validee.
     *
     * @param float|null $dureeValidee The duree validee.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setDureeValidee(?float $dureeValidee): BonTravPrev {
        $this->dureeValidee = $dureeValidee;
        return $this;
    }

    /**
     * Set the employe signe mob.
     *
     * @param string|null $employeSigneMob The employe signe mob.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setEmployeSigneMob(?string $employeSigneMob): BonTravPrev {
        $this->employeSigneMob = $employeSigneMob;
        return $this;
    }

    /**
     * Set the gestion planning.
     *
     * @param bool|null $gestionPlanning The gestion planning.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setGestionPlanning(?bool $gestionPlanning): BonTravPrev {
        $this->gestionPlanning = $gestionPlanning;
        return $this;
    }

    /**
     * Set the guid mob.
     *
     * @param string|null $guidMob The guid mob.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setGuidMob(?string $guidMob): BonTravPrev {
        $this->guidMob = $guidMob;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setHeureDeb(?DateTime $heureDeb): BonTravPrev {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $latitude The latitude.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setLatitude(?float $latitude): BonTravPrev {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setLibelle(?string $libelle): BonTravPrev {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setLienDocument(?string $lienDocument): BonTravPrev {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float|null $longitude The longitude.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setLongitude(?float $longitude): BonTravPrev {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the montant ht devis.
     *
     * @param float|null $montantHtDevis The montant ht devis.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setMontantHtDevis(?float $montantHtDevis): BonTravPrev {
        $this->montantHtDevis = $montantHtDevis;
        return $this;
    }

    /**
     * Set the nb jours pointes.
     *
     * @param float|null $nbJoursPointes The nb jours pointes.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNbJoursPointes(?float $nbJoursPointes): BonTravPrev {
        $this->nbJoursPointes = $nbJoursPointes;
        return $this;
    }

    /**
     * Set the nb jours prevus.
     *
     * @param float|null $nbJoursPrevus The nb jours prevus.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNbJoursPrevus(?float $nbJoursPrevus): BonTravPrev {
        $this->nbJoursPrevus = $nbJoursPrevus;
        return $this;
    }

    /**
     * Set the nombre employes.
     *
     * @param int|null $nombreEmployes The nombre employes.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNombreEmployes(?int $nombreEmployes): BonTravPrev {
        $this->nombreEmployes = $nombreEmployes;
        return $this;
    }

    /**
     * Set the non traite.
     *
     * @param bool|null $nonTraite The non traite.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNonTraite(?bool $nonTraite): BonTravPrev {
        $this->nonTraite = $nonTraite;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNumBt(?int $numBt): BonTravPrev {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero devis.
     *
     * @param string|null $numeroDevis The numero devis.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNumeroDevis(?string $numeroDevis): BonTravPrev {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string|null $numeroFacture The numero facture.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNumeroFacture(?string $numeroFacture): BonTravPrev {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setNumeroPj(?int $numeroPj): BonTravPrev {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the observation client.
     *
     * @param string|null $observationClient The observation client.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setObservationClient(?string $observationClient): BonTravPrev {
        $this->observationClient = $observationClient;
        return $this;
    }

    /**
     * Set the observation interne.
     *
     * @param string|null $observationInterne The observation interne.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setObservationInterne(?string $observationInterne): BonTravPrev {
        $this->observationInterne = $observationInterne;
        return $this;
    }

    /**
     * Set the occasionnel.
     *
     * @param bool|null $occasionnel The occasionnel.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setOccasionnel(?bool $occasionnel): BonTravPrev {
        $this->occasionnel = $occasionnel;
        return $this;
    }

    /**
     * Set the plusieurs jours.
     *
     * @param bool|null $plusieursJours The plusieurs jours.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setPlusieursJours(?bool $plusieursJours): BonTravPrev {
        $this->plusieursJours = $plusieursJours;
        return $this;
    }

    /**
     * Set the plusieurs mois.
     *
     * @param bool|null $plusieursMois The plusieurs mois.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setPlusieursMois(?bool $plusieursMois): BonTravPrev {
        $this->plusieursMois = $plusieursMois;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setPosteRent(?string $posteRent): BonTravPrev {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the proratise.
     *
     * @param bool|null $proratise The proratise.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setProratise(?bool $proratise): BonTravPrev {
        $this->proratise = $proratise;
        return $this;
    }

    /**
     * Set the signataire.
     *
     * @param string|null $signataire The signataire.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setSignataire(?string $signataire): BonTravPrev {
        $this->signataire = $signataire;
        return $this;
    }

    /**
     * Set the signe.
     *
     * @param bool|null $signe The signe.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setSigne(?bool $signe): BonTravPrev {
        $this->signe = $signe;
        return $this;
    }

    /**
     * Set the start mob.
     *
     * @param string|null $startMob The start mob.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setStartMob(?string $startMob): BonTravPrev {
        $this->startMob = $startMob;
        return $this;
    }

    /**
     * Set the type bt.
     *
     * @param string|null $typeBt The type bt.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setTypeBt(?string $typeBt): BonTravPrev {
        $this->typeBt = $typeBt;
        return $this;
    }

    /**
     * Set the type bt saisi.
     *
     * @param string|null $typeBtSaisi The type bt saisi.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setTypeBtSaisi(?string $typeBtSaisi): BonTravPrev {
        $this->typeBtSaisi = $typeBtSaisi;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string|null $uniqIdBlocage The uniq id blocage.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setUniqIdBlocage(?string $uniqIdBlocage): BonTravPrev {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }

    /**
     * Set the via.
     *
     * @param string|null $via The via.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setVia(?string $via): BonTravPrev {
        $this->via = $via;
        return $this;
    }

    /**
     * Set the reference1 devis.
     *
     * @param string|null $reference1Devis The reference1 devis.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setreference1Devis(?string $reference1Devis): BonTravPrev {
        $this->reference1Devis = $reference1Devis;
        return $this;
    }

    /**
     * Set the reference2 devis.
     *
     * @param string|null $reference2Devis The reference2 devis.
     * @return BonTravPrev Returns this Bon trav prev.
     */
    public function setreference2Devis(?string $reference2Devis): BonTravPrev {
        $this->reference2Devis = $reference2Devis;
        return $this;
    }
}
