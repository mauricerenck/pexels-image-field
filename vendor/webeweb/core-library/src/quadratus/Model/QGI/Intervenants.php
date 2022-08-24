<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Intervenants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Intervenants {

    /**
     * Adresse site client.
     *
     * @var string|null
     */
    private $adresseSiteClient;

    /**
     * Adresse transpac.
     *
     * @var string|null
     */
    private $adresseTranspac;

    /**
     * Age.
     *
     * @var string|null
     */
    private $age;

    /**
     * Autoriser acces internet.
     *
     * @var bool|null
     */
    private $autoriserAccesInternet;

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Btq2.
     *
     * @var string|null
     */
    private $btq2;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Bureau distributeur2.
     *
     * @var string|null
     */
    private $bureauDistributeur2;

    /**
     * Capital.
     *
     * @var float|null
     */
    private $capital;

    /**
     * Capital monnaie.
     *
     * @var string|null
     */
    private $capitalMonnaie;

    /**
     * Categorie juridique.
     *
     * @var string|null
     */
    private $categorieJuridique;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code epoux.
     *
     * @var string|null
     */
    private $codeEpoux;

    /**
     * Code insee.
     *
     * @var string|null
     */
    private $codeInsee;

    /**
     * Code naf.
     *
     * @var string|null
     */
    private $codeNaf;

    /**
     * Code naf2008.
     *
     * @var string|null
     */
    private $codeNaf2008;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code officiel commune2.
     *
     * @var string|null
     */
    private $codeOfficielCommune2;

    /**
     * Code pays iso.
     *
     * @var string|null
     */
    private $codePaysIso;

    /**
     * Code pays iso naiss.
     *
     * @var string|null
     */
    private $codePaysIsoNaiss;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Code postal2.
     *
     * @var string|null
     */
    private $codePostal2;

    /**
     * Code postal mariage.
     *
     * @var string|null
     */
    private $codePostalMariage;

    /**
     * Code postal naissance.
     *
     * @var string|null
     */
    private $codePostalNaissance;

    /**
     * Code postal rc.
     *
     * @var string|null
     */
    private $codePostalRc;

    /**
     * Code postal rm.
     *
     * @var string|null
     */
    private $codePostalRm;

    /**
     * Code responsable.
     *
     * @var string|null
     */
    private $codeResponsable;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Complement2.
     *
     * @var string|null
     */
    private $complement2;

    /**
     * Complement suite.
     *
     * @var string|null
     */
    private $complementSuite;

    /**
     * Compteur liens.
     *
     * @var int|null
     */
    private $compteurLiens;

    /**
     * Contact.
     *
     * @var string|null
     */
    private $contact;

    /**
     * Creation societe.
     *
     * @var DateTime|null
     */
    private $creationSociete;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date deb activite.
     *
     * @var DateTime|null
     */
    private $dateDebActivite;

    /**
     * Date divorce.
     *
     * @var DateTime|null
     */
    private $dateDivorce;

    /**
     * Date installation.
     *
     * @var DateTime|null
     */
    private $dateInstallation;

    /**
     * Date mariage.
     *
     * @var DateTime|null
     */
    private $dateMariage;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Donnees appel.
     *
     * @var string|null
     */
    private $donneesAppel;

    /**
     * Droit collab visu documents.
     *
     * @var string|null
     */
    private $droitCollabVisuDocuments;

    /**
     * Duree societe.
     *
     * @var string|null
     */
    private $dureeSociete;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Email2.
     *
     * @var string|null
     */
    private $email2;

    /**
     * Enseigne.
     *
     * @var string|null
     */
    private $enseigne;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Fax2.
     *
     * @var string|null
     */
    private $fax2;

    /**
     * Frp cle.
     *
     * @var string|null
     */
    private $frpCle;

    /**
     * Frp dossier.
     *
     * @var string|null
     */
    private $frpDossier;

    /**
     * Frp recette.
     *
     * @var string|null
     */
    private $frpRecette;

    /**
     * Gest juri.
     *
     * @var bool|null
     */
    private $gestJuri;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Ident tva.
     *
     * @var string|null
     */
    private $identTva;

    /**
     * Identifiant.
     *
     * @var string|null
     */
    private $identifiant;

    /**
     * Identifiant internet.
     *
     * @var string|null
     */
    private $identifiantInternet;

    /**
     * Inscription rc.
     *
     * @var DateTime|null
     */
    private $inscriptionRc;

    /**
     * Inscription rm.
     *
     * @var DateTime|null
     */
    private $inscriptionRm;

    /**
     * Is client.
     *
     * @var string|null
     */
    private $isClient;

    /**
     * Is fournisseur.
     *
     * @var string|null
     */
    private $isFournisseur;

    /**
     * Mdp internet.
     *
     * @var string|null
     */
    private $mdpInternet;

    /**
     * Mission principale.
     *
     * @var string|null
     */
    private $missionPrincipale;

    /**
     * Nationalite.
     *
     * @var string|null
     */
    private $nationalite;

    /**
     * Nb enfants.
     *
     * @var string|null
     */
    private $nbEnfants;

    /**
     * Nb km.
     *
     * @var float|null
     */
    private $nbKm;

    /**
     * Nie1.
     *
     * @var string|null
     */
    private $nie1;

    /**
     * Nie2.
     *
     * @var string|null
     */
    private $nie2;

    /**
     * Nir.
     *
     * @var string|null
     */
    private $nir;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Nom marital.
     *
     * @var string|null
     */
    private $nomMarital;

    /**
     * Nom mere.
     *
     * @var string|null
     */
    private $nomMere;

    /**
     * Nom pere.
     *
     * @var string|null
     */
    private $nomPere;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom ville2.
     *
     * @var string|null
     */
    private $nomVille2;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Nom voie2.
     *
     * @var string|null
     */
    private $nomVoie2;

    /**
     * Nombre actions.
     *
     * @var int|null
     */
    private $nombreActions;

    /**
     * Num agrement cga.
     *
     * @var string|null
     */
    private $numAgrementCga;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Num voie2.
     *
     * @var string|null
     */
    private $numVoie2;

    /**
     * Pays.
     *
     * @var string|null
     */
    private $pays;

    /**
     * Pays naissance.
     *
     * @var string|null
     */
    private $paysNaissance;

    /**
     * Personne physique.
     *
     * @var bool|null
     */
    private $personnePhysique;

    /**
     * Portable1.
     *
     * @var string|null
     */
    private $portable1;

    /**
     * Portable12.
     *
     * @var string|null
     */
    private $portable12;

    /**
     * Portable2.
     *
     * @var string|null
     */
    private $portable2;

    /**
     * Portable22.
     *
     * @var string|null
     */
    private $portable22;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Qualite.
     *
     * @var string|null
     */
    private $qualite;

    /**
     * Rc.
     *
     * @var string|null
     */
    private $rc;

    /**
     * Rc code.
     *
     * @var string|null
     */
    private $rcCode;

    /**
     * Regime matrimonial.
     *
     * @var string|null
     */
    private $regimeMatrimonial;

    /**
     * Regime matrimoniale.
     *
     * @var string|null
     */
    private $regimeMatrimoniale;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Rm.
     *
     * @var string|null
     */
    private $rm;

    /**
     * Rm code.
     *
     * @var string|null
     */
    private $rmCode;

    /**
     * Salarie independant.
     *
     * @var string|null
     */
    private $salarieIndependant;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Situation fam.
     *
     * @var string|null
     */
    private $situationFam;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Tel12.
     *
     * @var string|null
     */
    private $tel12;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Tel22.
     *
     * @var string|null
     */
    private $tel22;

    /**
     * Tel voiture.
     *
     * @var string|null
     */
    private $telVoiture;

    /**
     * Tel voiture2.
     *
     * @var string|null
     */
    private $telVoiture2;

    /**
     * Telex.
     *
     * @var string|null
     */
    private $telex;

    /**
     * Telex2.
     *
     * @var string|null
     */
    private $telex2;

    /**
     * Travail a domicile.
     *
     * @var bool|null
     */
    private $travailADomicile;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Type societe.
     *
     * @var string|null
     */
    private $typeSociete;

    /**
     * Ville mariage.
     *
     * @var string|null
     */
    private $villeMariage;

    /**
     * Ville naissance.
     *
     * @var string|null
     */
    private $villeNaissance;

    /**
     * Ville rc.
     *
     * @var string|null
     */
    private $villeRc;

    /**
     * Ville rm.
     *
     * @var string|null
     */
    private $villeRm;

    /**
     * Zip code.
     *
     * @var string|null
     */
    private $zipCode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse site client.
     *
     * @return string|null Returns the adresse site client.
     */
    public function getAdresseSiteClient(): ?string {
        return $this->adresseSiteClient;
    }

    /**
     * Get the adresse transpac.
     *
     * @return string|null Returns the adresse transpac.
     */
    public function getAdresseTranspac(): ?string {
        return $this->adresseTranspac;
    }

    /**
     * Get the age.
     *
     * @return string|null Returns the age.
     */
    public function getAge(): ?string {
        return $this->age;
    }

    /**
     * Get the autoriser acces internet.
     *
     * @return bool|null Returns the autoriser acces internet.
     */
    public function getAutoriserAccesInternet(): ?bool {
        return $this->autoriserAccesInternet;
    }

    /**
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
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
     * Get the btq2.
     *
     * @return string|null Returns the btq2.
     */
    public function getBtq2(): ?string {
        return $this->btq2;
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
     * Get the bureau distributeur2.
     *
     * @return string|null Returns the bureau distributeur2.
     */
    public function getBureauDistributeur2(): ?string {
        return $this->bureauDistributeur2;
    }

    /**
     * Get the capital.
     *
     * @return float|null Returns the capital.
     */
    public function getCapital(): ?float {
        return $this->capital;
    }

    /**
     * Get the capital monnaie.
     *
     * @return string|null Returns the capital monnaie.
     */
    public function getCapitalMonnaie(): ?string {
        return $this->capitalMonnaie;
    }

    /**
     * Get the categorie juridique.
     *
     * @return string|null Returns the categorie juridique.
     */
    public function getCategorieJuridique(): ?string {
        return $this->categorieJuridique;
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
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the code epoux.
     *
     * @return string|null Returns the code epoux.
     */
    public function getCodeEpoux(): ?string {
        return $this->codeEpoux;
    }

    /**
     * Get the code insee.
     *
     * @return string|null Returns the code insee.
     */
    public function getCodeInsee(): ?string {
        return $this->codeInsee;
    }

    /**
     * Get the code naf.
     *
     * @return string|null Returns the code naf.
     */
    public function getCodeNaf(): ?string {
        return $this->codeNaf;
    }

    /**
     * Get the code naf2008.
     *
     * @return string|null Returns the code naf2008.
     */
    public function getCodeNaf2008(): ?string {
        return $this->codeNaf2008;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string|null Returns the code officiel commune.
     */
    public function getCodeOfficielCommune(): ?string {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code officiel commune2.
     *
     * @return string|null Returns the code officiel commune2.
     */
    public function getCodeOfficielCommune2(): ?string {
        return $this->codeOfficielCommune2;
    }

    /**
     * Get the code pays iso.
     *
     * @return string|null Returns the code pays iso.
     */
    public function getCodePaysIso(): ?string {
        return $this->codePaysIso;
    }

    /**
     * Get the code pays iso naiss.
     *
     * @return string|null Returns the code pays iso naiss.
     */
    public function getCodePaysIsoNaiss(): ?string {
        return $this->codePaysIsoNaiss;
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
     * Get the code postal2.
     *
     * @return string|null Returns the code postal2.
     */
    public function getCodePostal2(): ?string {
        return $this->codePostal2;
    }

    /**
     * Get the code postal mariage.
     *
     * @return string|null Returns the code postal mariage.
     */
    public function getCodePostalMariage(): ?string {
        return $this->codePostalMariage;
    }

    /**
     * Get the code postal naissance.
     *
     * @return string|null Returns the code postal naissance.
     */
    public function getCodePostalNaissance(): ?string {
        return $this->codePostalNaissance;
    }

    /**
     * Get the code postal rc.
     *
     * @return string|null Returns the code postal rc.
     */
    public function getCodePostalRc(): ?string {
        return $this->codePostalRc;
    }

    /**
     * Get the code postal rm.
     *
     * @return string|null Returns the code postal rm.
     */
    public function getCodePostalRm(): ?string {
        return $this->codePostalRm;
    }

    /**
     * Get the code responsable.
     *
     * @return string|null Returns the code responsable.
     */
    public function getCodeResponsable(): ?string {
        return $this->codeResponsable;
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
     * Get the complement2.
     *
     * @return string|null Returns the complement2.
     */
    public function getComplement2(): ?string {
        return $this->complement2;
    }

    /**
     * Get the complement suite.
     *
     * @return string|null Returns the complement suite.
     */
    public function getComplementSuite(): ?string {
        return $this->complementSuite;
    }

    /**
     * Get the compteur liens.
     *
     * @return int|null Returns the compteur liens.
     */
    public function getCompteurLiens(): ?int {
        return $this->compteurLiens;
    }

    /**
     * Get the contact.
     *
     * @return string|null Returns the contact.
     */
    public function getContact(): ?string {
        return $this->contact;
    }

    /**
     * Get the creation societe.
     *
     * @return DateTime|null Returns the creation societe.
     */
    public function getCreationSociete(): ?DateTime {
        return $this->creationSociete;
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
     * Get the date deb activite.
     *
     * @return DateTime|null Returns the date deb activite.
     */
    public function getDateDebActivite(): ?DateTime {
        return $this->dateDebActivite;
    }

    /**
     * Get the date divorce.
     *
     * @return DateTime|null Returns the date divorce.
     */
    public function getDateDivorce(): ?DateTime {
        return $this->dateDivorce;
    }

    /**
     * Get the date installation.
     *
     * @return DateTime|null Returns the date installation.
     */
    public function getDateInstallation(): ?DateTime {
        return $this->dateInstallation;
    }

    /**
     * Get the date mariage.
     *
     * @return DateTime|null Returns the date mariage.
     */
    public function getDateMariage(): ?DateTime {
        return $this->dateMariage;
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
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
    }

    /**
     * Get the donnees appel.
     *
     * @return string|null Returns the donnees appel.
     */
    public function getDonneesAppel(): ?string {
        return $this->donneesAppel;
    }

    /**
     * Get the droit collab visu documents.
     *
     * @return string|null Returns the droit collab visu documents.
     */
    public function getDroitCollabVisuDocuments(): ?string {
        return $this->droitCollabVisuDocuments;
    }

    /**
     * Get the duree societe.
     *
     * @return string|null Returns the duree societe.
     */
    public function getDureeSociete(): ?string {
        return $this->dureeSociete;
    }

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Get the email2.
     *
     * @return string|null Returns the email2.
     */
    public function getEmail2(): ?string {
        return $this->email2;
    }

    /**
     * Get the enseigne.
     *
     * @return string|null Returns the enseigne.
     */
    public function getEnseigne(): ?string {
        return $this->enseigne;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the fax2.
     *
     * @return string|null Returns the fax2.
     */
    public function getFax2(): ?string {
        return $this->fax2;
    }

    /**
     * Get the frp cle.
     *
     * @return string|null Returns the frp cle.
     */
    public function getFrpCle(): ?string {
        return $this->frpCle;
    }

    /**
     * Get the frp dossier.
     *
     * @return string|null Returns the frp dossier.
     */
    public function getFrpDossier(): ?string {
        return $this->frpDossier;
    }

    /**
     * Get the frp recette.
     *
     * @return string|null Returns the frp recette.
     */
    public function getFrpRecette(): ?string {
        return $this->frpRecette;
    }

    /**
     * Get the gest juri.
     *
     * @return bool|null Returns the gest juri.
     */
    public function getGestJuri(): ?bool {
        return $this->gestJuri;
    }

    /**
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the ident tva.
     *
     * @return string|null Returns the ident tva.
     */
    public function getIdentTva(): ?string {
        return $this->identTva;
    }

    /**
     * Get the identifiant.
     *
     * @return string|null Returns the identifiant.
     */
    public function getIdentifiant(): ?string {
        return $this->identifiant;
    }

    /**
     * Get the identifiant internet.
     *
     * @return string|null Returns the identifiant internet.
     */
    public function getIdentifiantInternet(): ?string {
        return $this->identifiantInternet;
    }

    /**
     * Get the inscription rc.
     *
     * @return DateTime|null Returns the inscription rc.
     */
    public function getInscriptionRc(): ?DateTime {
        return $this->inscriptionRc;
    }

    /**
     * Get the inscription rm.
     *
     * @return DateTime|null Returns the inscription rm.
     */
    public function getInscriptionRm(): ?DateTime {
        return $this->inscriptionRm;
    }

    /**
     * Get the is client.
     *
     * @return string|null Returns the is client.
     */
    public function getIsClient(): ?string {
        return $this->isClient;
    }

    /**
     * Get the is fournisseur.
     *
     * @return string|null Returns the is fournisseur.
     */
    public function getIsFournisseur(): ?string {
        return $this->isFournisseur;
    }

    /**
     * Get the mdp internet.
     *
     * @return string|null Returns the mdp internet.
     */
    public function getMdpInternet(): ?string {
        return $this->mdpInternet;
    }

    /**
     * Get the mission principale.
     *
     * @return string|null Returns the mission principale.
     */
    public function getMissionPrincipale(): ?string {
        return $this->missionPrincipale;
    }

    /**
     * Get the nationalite.
     *
     * @return string|null Returns the nationalite.
     */
    public function getNationalite(): ?string {
        return $this->nationalite;
    }

    /**
     * Get the nb enfants.
     *
     * @return string|null Returns the nb enfants.
     */
    public function getNbEnfants(): ?string {
        return $this->nbEnfants;
    }

    /**
     * Get the nb km.
     *
     * @return float|null Returns the nb km.
     */
    public function getNbKm(): ?float {
        return $this->nbKm;
    }

    /**
     * Get the nie1.
     *
     * @return string|null Returns the nie1.
     */
    public function getNie1(): ?string {
        return $this->nie1;
    }

    /**
     * Get the nie2.
     *
     * @return string|null Returns the nie2.
     */
    public function getNie2(): ?string {
        return $this->nie2;
    }

    /**
     * Get the nir.
     *
     * @return string|null Returns the nir.
     */
    public function getNir(): ?string {
        return $this->nir;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the nom marital.
     *
     * @return string|null Returns the nom marital.
     */
    public function getNomMarital(): ?string {
        return $this->nomMarital;
    }

    /**
     * Get the nom mere.
     *
     * @return string|null Returns the nom mere.
     */
    public function getNomMere(): ?string {
        return $this->nomMere;
    }

    /**
     * Get the nom pere.
     *
     * @return string|null Returns the nom pere.
     */
    public function getNomPere(): ?string {
        return $this->nomPere;
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
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
    }

    /**
     * Get the nom ville2.
     *
     * @return string|null Returns the nom ville2.
     */
    public function getNomVille2(): ?string {
        return $this->nomVille2;
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
     * Get the nom voie2.
     *
     * @return string|null Returns the nom voie2.
     */
    public function getNomVoie2(): ?string {
        return $this->nomVoie2;
    }

    /**
     * Get the nombre actions.
     *
     * @return int|null Returns the nombre actions.
     */
    public function getNombreActions(): ?int {
        return $this->nombreActions;
    }

    /**
     * Get the num agrement cga.
     *
     * @return string|null Returns the num agrement cga.
     */
    public function getNumAgrementCga(): ?string {
        return $this->numAgrementCga;
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
     * Get the num voie2.
     *
     * @return string|null Returns the num voie2.
     */
    public function getNumVoie2(): ?string {
        return $this->numVoie2;
    }

    /**
     * Get the pays.
     *
     * @return string|null Returns the pays.
     */
    public function getPays(): ?string {
        return $this->pays;
    }

    /**
     * Get the pays naissance.
     *
     * @return string|null Returns the pays naissance.
     */
    public function getPaysNaissance(): ?string {
        return $this->paysNaissance;
    }

    /**
     * Get the personne physique.
     *
     * @return bool|null Returns the personne physique.
     */
    public function getPersonnePhysique(): ?bool {
        return $this->personnePhysique;
    }

    /**
     * Get the portable1.
     *
     * @return string|null Returns the portable1.
     */
    public function getPortable1(): ?string {
        return $this->portable1;
    }

    /**
     * Get the portable12.
     *
     * @return string|null Returns the portable12.
     */
    public function getPortable12(): ?string {
        return $this->portable12;
    }

    /**
     * Get the portable2.
     *
     * @return string|null Returns the portable2.
     */
    public function getPortable2(): ?string {
        return $this->portable2;
    }

    /**
     * Get the portable22.
     *
     * @return string|null Returns the portable22.
     */
    public function getPortable22(): ?string {
        return $this->portable22;
    }

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the qualite.
     *
     * @return string|null Returns the qualite.
     */
    public function getQualite(): ?string {
        return $this->qualite;
    }

    /**
     * Get the rc.
     *
     * @return string|null Returns the rc.
     */
    public function getRc(): ?string {
        return $this->rc;
    }

    /**
     * Get the rc code.
     *
     * @return string|null Returns the rc code.
     */
    public function getRcCode(): ?string {
        return $this->rcCode;
    }

    /**
     * Get the regime matrimonial.
     *
     * @return string|null Returns the regime matrimonial.
     */
    public function getRegimeMatrimonial(): ?string {
        return $this->regimeMatrimonial;
    }

    /**
     * Get the regime matrimoniale.
     *
     * @return string|null Returns the regime matrimoniale.
     */
    public function getRegimeMatrimoniale(): ?string {
        return $this->regimeMatrimoniale;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the rm.
     *
     * @return string|null Returns the rm.
     */
    public function getRm(): ?string {
        return $this->rm;
    }

    /**
     * Get the rm code.
     *
     * @return string|null Returns the rm code.
     */
    public function getRmCode(): ?string {
        return $this->rmCode;
    }

    /**
     * Get the salarie independant.
     *
     * @return string|null Returns the salarie independant.
     */
    public function getSalarieIndependant(): ?string {
        return $this->salarieIndependant;
    }

    /**
     * Get the siret.
     *
     * @return string|null Returns the siret.
     */
    public function getSiret(): ?string {
        return $this->siret;
    }

    /**
     * Get the situation fam.
     *
     * @return string|null Returns the situation fam.
     */
    public function getSituationFam(): ?string {
        return $this->situationFam;
    }

    /**
     * Get the tel1.
     *
     * @return string|null Returns the tel1.
     */
    public function getTel1(): ?string {
        return $this->tel1;
    }

    /**
     * Get the tel12.
     *
     * @return string|null Returns the tel12.
     */
    public function getTel12(): ?string {
        return $this->tel12;
    }

    /**
     * Get the tel2.
     *
     * @return string|null Returns the tel2.
     */
    public function getTel2(): ?string {
        return $this->tel2;
    }

    /**
     * Get the tel22.
     *
     * @return string|null Returns the tel22.
     */
    public function getTel22(): ?string {
        return $this->tel22;
    }

    /**
     * Get the tel voiture.
     *
     * @return string|null Returns the tel voiture.
     */
    public function getTelVoiture(): ?string {
        return $this->telVoiture;
    }

    /**
     * Get the tel voiture2.
     *
     * @return string|null Returns the tel voiture2.
     */
    public function getTelVoiture2(): ?string {
        return $this->telVoiture2;
    }

    /**
     * Get the telex.
     *
     * @return string|null Returns the telex.
     */
    public function getTelex(): ?string {
        return $this->telex;
    }

    /**
     * Get the telex2.
     *
     * @return string|null Returns the telex2.
     */
    public function getTelex2(): ?string {
        return $this->telex2;
    }

    /**
     * Get the travail a domicile.
     *
     * @return bool|null Returns the travail a domicile.
     */
    public function getTravailADomicile(): ?bool {
        return $this->travailADomicile;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Get the type societe.
     *
     * @return string|null Returns the type societe.
     */
    public function getTypeSociete(): ?string {
        return $this->typeSociete;
    }

    /**
     * Get the ville mariage.
     *
     * @return string|null Returns the ville mariage.
     */
    public function getVilleMariage(): ?string {
        return $this->villeMariage;
    }

    /**
     * Get the ville naissance.
     *
     * @return string|null Returns the ville naissance.
     */
    public function getVilleNaissance(): ?string {
        return $this->villeNaissance;
    }

    /**
     * Get the ville rc.
     *
     * @return string|null Returns the ville rc.
     */
    public function getVilleRc(): ?string {
        return $this->villeRc;
    }

    /**
     * Get the ville rm.
     *
     * @return string|null Returns the ville rm.
     */
    public function getVilleRm(): ?string {
        return $this->villeRm;
    }

    /**
     * Get the zip code.
     *
     * @return string|null Returns the zip code.
     */
    public function getZipCode(): ?string {
        return $this->zipCode;
    }

    /**
     * Set the adresse site client.
     *
     * @param string|null $adresseSiteClient The adresse site client.
     * @return Intervenants Returns this Intervenants.
     */
    public function setAdresseSiteClient(?string $adresseSiteClient): Intervenants {
        $this->adresseSiteClient = $adresseSiteClient;
        return $this;
    }

    /**
     * Set the adresse transpac.
     *
     * @param string|null $adresseTranspac The adresse transpac.
     * @return Intervenants Returns this Intervenants.
     */
    public function setAdresseTranspac(?string $adresseTranspac): Intervenants {
        $this->adresseTranspac = $adresseTranspac;
        return $this;
    }

    /**
     * Set the age.
     *
     * @param string|null $age The age.
     * @return Intervenants Returns this Intervenants.
     */
    public function setAge(?string $age): Intervenants {
        $this->age = $age;
        return $this;
    }

    /**
     * Set the autoriser acces internet.
     *
     * @param bool|null $autoriserAccesInternet The autoriser acces internet.
     * @return Intervenants Returns this Intervenants.
     */
    public function setAutoriserAccesInternet(?bool $autoriserAccesInternet): Intervenants {
        $this->autoriserAccesInternet = $autoriserAccesInternet;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBic(?string $bic): Intervenants {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBtq(?string $btq): Intervenants {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the btq2.
     *
     * @param string|null $btq2 The btq2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBtq2(?string $btq2): Intervenants {
        $this->btq2 = $btq2;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Intervenants {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the bureau distributeur2.
     *
     * @param string|null $bureauDistributeur2 The bureau distributeur2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBureauDistributeur2(?string $bureauDistributeur2): Intervenants {
        $this->bureauDistributeur2 = $bureauDistributeur2;
        return $this;
    }

    /**
     * Set the capital.
     *
     * @param float|null $capital The capital.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCapital(?float $capital): Intervenants {
        $this->capital = $capital;
        return $this;
    }

    /**
     * Set the capital monnaie.
     *
     * @param string|null $capitalMonnaie The capital monnaie.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCapitalMonnaie(?string $capitalMonnaie): Intervenants {
        $this->capitalMonnaie = $capitalMonnaie;
        return $this;
    }

    /**
     * Set the categorie juridique.
     *
     * @param string|null $categorieJuridique The categorie juridique.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCategorieJuridique(?string $categorieJuridique): Intervenants {
        $this->categorieJuridique = $categorieJuridique;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCivilite(?string $civilite): Intervenants {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCode(?string $code): Intervenants {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code epoux.
     *
     * @param string|null $codeEpoux The code epoux.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeEpoux(?string $codeEpoux): Intervenants {
        $this->codeEpoux = $codeEpoux;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeInsee(?string $codeInsee): Intervenants {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string|null $codeNaf The code naf.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeNaf(?string $codeNaf): Intervenants {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string|null $codeNaf2008 The code naf2008.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeNaf2008(?string $codeNaf2008): Intervenants {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Intervenants {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code officiel commune2.
     *
     * @param string|null $codeOfficielCommune2 The code officiel commune2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeOfficielCommune2(?string $codeOfficielCommune2): Intervenants {
        $this->codeOfficielCommune2 = $codeOfficielCommune2;
        return $this;
    }

    /**
     * Set the code pays iso.
     *
     * @param string|null $codePaysIso The code pays iso.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePaysIso(?string $codePaysIso): Intervenants {
        $this->codePaysIso = $codePaysIso;
        return $this;
    }

    /**
     * Set the code pays iso naiss.
     *
     * @param string|null $codePaysIsoNaiss The code pays iso naiss.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePaysIsoNaiss(?string $codePaysIsoNaiss): Intervenants {
        $this->codePaysIsoNaiss = $codePaysIsoNaiss;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostal(?string $codePostal): Intervenants {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code postal2.
     *
     * @param string|null $codePostal2 The code postal2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostal2(?string $codePostal2): Intervenants {
        $this->codePostal2 = $codePostal2;
        return $this;
    }

    /**
     * Set the code postal mariage.
     *
     * @param string|null $codePostalMariage The code postal mariage.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostalMariage(?string $codePostalMariage): Intervenants {
        $this->codePostalMariage = $codePostalMariage;
        return $this;
    }

    /**
     * Set the code postal naissance.
     *
     * @param string|null $codePostalNaissance The code postal naissance.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostalNaissance(?string $codePostalNaissance): Intervenants {
        $this->codePostalNaissance = $codePostalNaissance;
        return $this;
    }

    /**
     * Set the code postal rc.
     *
     * @param string|null $codePostalRc The code postal rc.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostalRc(?string $codePostalRc): Intervenants {
        $this->codePostalRc = $codePostalRc;
        return $this;
    }

    /**
     * Set the code postal rm.
     *
     * @param string|null $codePostalRm The code postal rm.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostalRm(?string $codePostalRm): Intervenants {
        $this->codePostalRm = $codePostalRm;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string|null $codeResponsable The code responsable.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeResponsable(?string $codeResponsable): Intervenants {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Intervenants Returns this Intervenants.
     */
    public function setComplement(?string $complement): Intervenants {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement2.
     *
     * @param string|null $complement2 The complement2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setComplement2(?string $complement2): Intervenants {
        $this->complement2 = $complement2;
        return $this;
    }

    /**
     * Set the complement suite.
     *
     * @param string|null $complementSuite The complement suite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setComplementSuite(?string $complementSuite): Intervenants {
        $this->complementSuite = $complementSuite;
        return $this;
    }

    /**
     * Set the compteur liens.
     *
     * @param int|null $compteurLiens The compteur liens.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCompteurLiens(?int $compteurLiens): Intervenants {
        $this->compteurLiens = $compteurLiens;
        return $this;
    }

    /**
     * Set the contact.
     *
     * @param string|null $contact The contact.
     * @return Intervenants Returns this Intervenants.
     */
    public function setContact(?string $contact): Intervenants {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Set the creation societe.
     *
     * @param DateTime|null $creationSociete The creation societe.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCreationSociete(?DateTime $creationSociete): Intervenants {
        $this->creationSociete = $creationSociete;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateCreat(?DateTime $dateCreat): Intervenants {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date deb activite.
     *
     * @param DateTime|null $dateDebActivite The date deb activite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateDebActivite(?DateTime $dateDebActivite): Intervenants {
        $this->dateDebActivite = $dateDebActivite;
        return $this;
    }

    /**
     * Set the date divorce.
     *
     * @param DateTime|null $dateDivorce The date divorce.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateDivorce(?DateTime $dateDivorce): Intervenants {
        $this->dateDivorce = $dateDivorce;
        return $this;
    }

    /**
     * Set the date installation.
     *
     * @param DateTime|null $dateInstallation The date installation.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateInstallation(?DateTime $dateInstallation): Intervenants {
        $this->dateInstallation = $dateInstallation;
        return $this;
    }

    /**
     * Set the date mariage.
     *
     * @param DateTime|null $dateMariage The date mariage.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateMariage(?DateTime $dateMariage): Intervenants {
        $this->dateMariage = $dateMariage;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateModif(?DateTime $dateModif): Intervenants {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateNaissance(?DateTime $dateNaissance): Intervenants {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the donnees appel.
     *
     * @param string|null $donneesAppel The donnees appel.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDonneesAppel(?string $donneesAppel): Intervenants {
        $this->donneesAppel = $donneesAppel;
        return $this;
    }

    /**
     * Set the droit collab visu documents.
     *
     * @param string|null $droitCollabVisuDocuments The droit collab visu documents.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDroitCollabVisuDocuments(?string $droitCollabVisuDocuments): Intervenants {
        $this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
        return $this;
    }

    /**
     * Set the duree societe.
     *
     * @param string|null $dureeSociete The duree societe.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDureeSociete(?string $dureeSociete): Intervenants {
        $this->dureeSociete = $dureeSociete;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return Intervenants Returns this Intervenants.
     */
    public function setEmail(?string $email): Intervenants {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the email2.
     *
     * @param string|null $email2 The email2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setEmail2(?string $email2): Intervenants {
        $this->email2 = $email2;
        return $this;
    }

    /**
     * Set the enseigne.
     *
     * @param string|null $enseigne The enseigne.
     * @return Intervenants Returns this Intervenants.
     */
    public function setEnseigne(?string $enseigne): Intervenants {
        $this->enseigne = $enseigne;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return Intervenants Returns this Intervenants.
     */
    public function setFax(?string $fax): Intervenants {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the fax2.
     *
     * @param string|null $fax2 The fax2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setFax2(?string $fax2): Intervenants {
        $this->fax2 = $fax2;
        return $this;
    }

    /**
     * Set the frp cle.
     *
     * @param string|null $frpCle The frp cle.
     * @return Intervenants Returns this Intervenants.
     */
    public function setFrpCle(?string $frpCle): Intervenants {
        $this->frpCle = $frpCle;
        return $this;
    }

    /**
     * Set the frp dossier.
     *
     * @param string|null $frpDossier The frp dossier.
     * @return Intervenants Returns this Intervenants.
     */
    public function setFrpDossier(?string $frpDossier): Intervenants {
        $this->frpDossier = $frpDossier;
        return $this;
    }

    /**
     * Set the frp recette.
     *
     * @param string|null $frpRecette The frp recette.
     * @return Intervenants Returns this Intervenants.
     */
    public function setFrpRecette(?string $frpRecette): Intervenants {
        $this->frpRecette = $frpRecette;
        return $this;
    }

    /**
     * Set the gest juri.
     *
     * @param bool|null $gestJuri The gest juri.
     * @return Intervenants Returns this Intervenants.
     */
    public function setGestJuri(?bool $gestJuri): Intervenants {
        $this->gestJuri = $gestJuri;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIban(?string $iban): Intervenants {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string|null $identTva The ident tva.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIdentTva(?string $identTva): Intervenants {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the identifiant.
     *
     * @param string|null $identifiant The identifiant.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIdentifiant(?string $identifiant): Intervenants {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * Set the identifiant internet.
     *
     * @param string|null $identifiantInternet The identifiant internet.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIdentifiantInternet(?string $identifiantInternet): Intervenants {
        $this->identifiantInternet = $identifiantInternet;
        return $this;
    }

    /**
     * Set the inscription rc.
     *
     * @param DateTime|null $inscriptionRc The inscription rc.
     * @return Intervenants Returns this Intervenants.
     */
    public function setInscriptionRc(?DateTime $inscriptionRc): Intervenants {
        $this->inscriptionRc = $inscriptionRc;
        return $this;
    }

    /**
     * Set the inscription rm.
     *
     * @param DateTime|null $inscriptionRm The inscription rm.
     * @return Intervenants Returns this Intervenants.
     */
    public function setInscriptionRm(?DateTime $inscriptionRm): Intervenants {
        $this->inscriptionRm = $inscriptionRm;
        return $this;
    }

    /**
     * Set the is client.
     *
     * @param string|null $isClient The is client.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIsClient(?string $isClient): Intervenants {
        $this->isClient = $isClient;
        return $this;
    }

    /**
     * Set the is fournisseur.
     *
     * @param string|null $isFournisseur The is fournisseur.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIsFournisseur(?string $isFournisseur): Intervenants {
        $this->isFournisseur = $isFournisseur;
        return $this;
    }

    /**
     * Set the mdp internet.
     *
     * @param string|null $mdpInternet The mdp internet.
     * @return Intervenants Returns this Intervenants.
     */
    public function setMdpInternet(?string $mdpInternet): Intervenants {
        $this->mdpInternet = $mdpInternet;
        return $this;
    }

    /**
     * Set the mission principale.
     *
     * @param string|null $missionPrincipale The mission principale.
     * @return Intervenants Returns this Intervenants.
     */
    public function setMissionPrincipale(?string $missionPrincipale): Intervenants {
        $this->missionPrincipale = $missionPrincipale;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string|null $nationalite The nationalite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNationalite(?string $nationalite): Intervenants {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string|null $nbEnfants The nb enfants.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNbEnfants(?string $nbEnfants): Intervenants {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the nb km.
     *
     * @param float|null $nbKm The nb km.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNbKm(?float $nbKm): Intervenants {
        $this->nbKm = $nbKm;
        return $this;
    }

    /**
     * Set the nie1.
     *
     * @param string|null $nie1 The nie1.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNie1(?string $nie1): Intervenants {
        $this->nie1 = $nie1;
        return $this;
    }

    /**
     * Set the nie2.
     *
     * @param string|null $nie2 The nie2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNie2(?string $nie2): Intervenants {
        $this->nie2 = $nie2;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNir(?string $nir): Intervenants {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNom(?string $nom): Intervenants {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomMarital(?string $nomMarital): Intervenants {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom mere.
     *
     * @param string|null $nomMere The nom mere.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomMere(?string $nomMere): Intervenants {
        $this->nomMere = $nomMere;
        return $this;
    }

    /**
     * Set the nom pere.
     *
     * @param string|null $nomPere The nom pere.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomPere(?string $nomPere): Intervenants {
        $this->nomPere = $nomPere;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomSuite(?string $nomSuite): Intervenants {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomVille(?string $nomVille): Intervenants {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom ville2.
     *
     * @param string|null $nomVille2 The nom ville2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomVille2(?string $nomVille2): Intervenants {
        $this->nomVille2 = $nomVille2;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomVoie(?string $nomVoie): Intervenants {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nom voie2.
     *
     * @param string|null $nomVoie2 The nom voie2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomVoie2(?string $nomVoie2): Intervenants {
        $this->nomVoie2 = $nomVoie2;
        return $this;
    }

    /**
     * Set the nombre actions.
     *
     * @param int|null $nombreActions The nombre actions.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNombreActions(?int $nombreActions): Intervenants {
        $this->nombreActions = $nombreActions;
        return $this;
    }

    /**
     * Set the num agrement cga.
     *
     * @param string|null $numAgrementCga The num agrement cga.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNumAgrementCga(?string $numAgrementCga): Intervenants {
        $this->numAgrementCga = $numAgrementCga;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNumVoie(?string $numVoie): Intervenants {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the num voie2.
     *
     * @param string|null $numVoie2 The num voie2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNumVoie2(?string $numVoie2): Intervenants {
        $this->numVoie2 = $numVoie2;
        return $this;
    }

    /**
     * Set the pays.
     *
     * @param string|null $pays The pays.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPays(?string $pays): Intervenants {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Set the pays naissance.
     *
     * @param string|null $paysNaissance The pays naissance.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPaysNaissance(?string $paysNaissance): Intervenants {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }

    /**
     * Set the personne physique.
     *
     * @param bool|null $personnePhysique The personne physique.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPersonnePhysique(?bool $personnePhysique): Intervenants {
        $this->personnePhysique = $personnePhysique;
        return $this;
    }

    /**
     * Set the portable1.
     *
     * @param string|null $portable1 The portable1.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPortable1(?string $portable1): Intervenants {
        $this->portable1 = $portable1;
        return $this;
    }

    /**
     * Set the portable12.
     *
     * @param string|null $portable12 The portable12.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPortable12(?string $portable12): Intervenants {
        $this->portable12 = $portable12;
        return $this;
    }

    /**
     * Set the portable2.
     *
     * @param string|null $portable2 The portable2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPortable2(?string $portable2): Intervenants {
        $this->portable2 = $portable2;
        return $this;
    }

    /**
     * Set the portable22.
     *
     * @param string|null $portable22 The portable22.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPortable22(?string $portable22): Intervenants {
        $this->portable22 = $portable22;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPrenom(?string $prenom): Intervenants {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the qualite.
     *
     * @param string|null $qualite The qualite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setQualite(?string $qualite): Intervenants {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string|null $rc The rc.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRc(?string $rc): Intervenants {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Set the rc code.
     *
     * @param string|null $rcCode The rc code.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRcCode(?string $rcCode): Intervenants {
        $this->rcCode = $rcCode;
        return $this;
    }

    /**
     * Set the regime matrimonial.
     *
     * @param string|null $regimeMatrimonial The regime matrimonial.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRegimeMatrimonial(?string $regimeMatrimonial): Intervenants {
        $this->regimeMatrimonial = $regimeMatrimonial;
        return $this;
    }

    /**
     * Set the regime matrimoniale.
     *
     * @param string|null $regimeMatrimoniale The regime matrimoniale.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRegimeMatrimoniale(?string $regimeMatrimoniale): Intervenants {
        $this->regimeMatrimoniale = $regimeMatrimoniale;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRib(?string $rib): Intervenants {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the rm.
     *
     * @param string|null $rm The rm.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRm(?string $rm): Intervenants {
        $this->rm = $rm;
        return $this;
    }

    /**
     * Set the rm code.
     *
     * @param string|null $rmCode The rm code.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRmCode(?string $rmCode): Intervenants {
        $this->rmCode = $rmCode;
        return $this;
    }

    /**
     * Set the salarie independant.
     *
     * @param string|null $salarieIndependant The salarie independant.
     * @return Intervenants Returns this Intervenants.
     */
    public function setSalarieIndependant(?string $salarieIndependant): Intervenants {
        $this->salarieIndependant = $salarieIndependant;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return Intervenants Returns this Intervenants.
     */
    public function setSiret(?string $siret): Intervenants {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string|null $situationFam The situation fam.
     * @return Intervenants Returns this Intervenants.
     */
    public function setSituationFam(?string $situationFam): Intervenants {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTel1(?string $tel1): Intervenants {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel12.
     *
     * @param string|null $tel12 The tel12.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTel12(?string $tel12): Intervenants {
        $this->tel12 = $tel12;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTel2(?string $tel2): Intervenants {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel22.
     *
     * @param string|null $tel22 The tel22.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTel22(?string $tel22): Intervenants {
        $this->tel22 = $tel22;
        return $this;
    }

    /**
     * Set the tel voiture.
     *
     * @param string|null $telVoiture The tel voiture.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTelVoiture(?string $telVoiture): Intervenants {
        $this->telVoiture = $telVoiture;
        return $this;
    }

    /**
     * Set the tel voiture2.
     *
     * @param string|null $telVoiture2 The tel voiture2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTelVoiture2(?string $telVoiture2): Intervenants {
        $this->telVoiture2 = $telVoiture2;
        return $this;
    }

    /**
     * Set the telex.
     *
     * @param string|null $telex The telex.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTelex(?string $telex): Intervenants {
        $this->telex = $telex;
        return $this;
    }

    /**
     * Set the telex2.
     *
     * @param string|null $telex2 The telex2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTelex2(?string $telex2): Intervenants {
        $this->telex2 = $telex2;
        return $this;
    }

    /**
     * Set the travail a domicile.
     *
     * @param bool|null $travailADomicile The travail a domicile.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTravailADomicile(?bool $travailADomicile): Intervenants {
        $this->travailADomicile = $travailADomicile;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Intervenants Returns this Intervenants.
     */
    public function setType(?string $type): Intervenants {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type societe.
     *
     * @param string|null $typeSociete The type societe.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTypeSociete(?string $typeSociete): Intervenants {
        $this->typeSociete = $typeSociete;
        return $this;
    }

    /**
     * Set the ville mariage.
     *
     * @param string|null $villeMariage The ville mariage.
     * @return Intervenants Returns this Intervenants.
     */
    public function setVilleMariage(?string $villeMariage): Intervenants {
        $this->villeMariage = $villeMariage;
        return $this;
    }

    /**
     * Set the ville naissance.
     *
     * @param string|null $villeNaissance The ville naissance.
     * @return Intervenants Returns this Intervenants.
     */
    public function setVilleNaissance(?string $villeNaissance): Intervenants {
        $this->villeNaissance = $villeNaissance;
        return $this;
    }

    /**
     * Set the ville rc.
     *
     * @param string|null $villeRc The ville rc.
     * @return Intervenants Returns this Intervenants.
     */
    public function setVilleRc(?string $villeRc): Intervenants {
        $this->villeRc = $villeRc;
        return $this;
    }

    /**
     * Set the ville rm.
     *
     * @param string|null $villeRm The ville rm.
     * @return Intervenants Returns this Intervenants.
     */
    public function setVilleRm(?string $villeRm): Intervenants {
        $this->villeRm = $villeRm;
        return $this;
    }

    /**
     * Set the zip code.
     *
     * @param string|null $zipCode The zip code.
     * @return Intervenants Returns this Intervenants.
     */
    public function setZipCode(?string $zipCode): Intervenants {
        $this->zipCode = $zipCode;
        return $this;
    }
}
