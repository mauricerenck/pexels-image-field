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
 * Attestation aem.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AttestationAem {

    /**
     * Activite.
     *
     * @var string|null
     */
    private $activite;

    /**
     * Aem initiale.
     *
     * @var bool|null
     */
    private $aemInitiale;

    /**
     * Autres contributions.
     *
     * @var float|null
     */
    private $autresContributions;

    /**
     * Autres remun brut.
     *
     * @var float|null
     */
    private $autresRemunBrut;

    /**
     * Autres taux cotis.
     *
     * @var float|null
     */
    private $autresTauxCotis;

    /**
     * Brut.
     *
     * @var float|null
     */
    private $brut;

    /**
     * Brut al.
     *
     * @var float|null
     */
    private $brutAl;

    /**
     * Certification sociale.
     *
     * @var bool|null
     */
    private $certificationSociale;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

    /**
     * Code emploi.
     *
     * @var string|null
     */
    private $codeEmploi;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code naf2008.
     *
     * @var string|null
     */
    private $codeNaf2008;

    /**
     * Code qualif.
     *
     * @var string|null
     */
    private $codeQualif;

    /**
     * Contact.
     *
     * @var string|null
     */
    private $contact;

    /**
     * Contrat en cours.
     *
     * @var bool|null
     */
    private $contratEnCours;

    /**
     * Contributions.
     *
     * @var float|null
     */
    private $contributions;

    /**
     * Date embauche.
     *
     * @var DateTime|null
     */
    private $dateEmbauche;

    /**
     * Date fin contrat.
     *
     * @var DateTime|null
     */
    private $dateFinContrat;

    /**
     * Date fin contrat initiale.
     *
     * @var DateTime|null
     */
    private $dateFinContratInitiale;

    /**
     * Date naiss.
     *
     * @var DateTime|null
     */
    private $dateNaiss;

    /**
     * Emp adresse1.
     *
     * @var string|null
     */
    private $empAdresse1;

    /**
     * Emp adresse2.
     *
     * @var string|null
     */
    private $empAdresse2;

    /**
     * Emp code postal.
     *
     * @var string|null
     */
    private $empCodePostal;

    /**
     * Emp commune.
     *
     * @var string|null
     */
    private $empCommune;

    /**
     * Emp tel.
     *
     * @var string|null
     */
    private $empTel;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Etbl adresse1.
     *
     * @var string|null
     */
    private $etblAdresse1;

    /**
     * Etbl adresse2.
     *
     * @var string|null
     */
    private $etblAdresse2;

    /**
     * Etbl code postal.
     *
     * @var string|null
     */
    private $etblCodePostal;

    /**
     * Etbl commune.
     *
     * @var string|null
     */
    private $etblCommune;

    /**
     * Etbl fax.
     *
     * @var string|null
     */
    private $etblFax;

    /**
     * Etbl mail.
     *
     * @var string|null
     */
    private $etblMail;

    /**
     * Etbl raison sociale.
     *
     * @var string|null
     */
    private $etblRaisonSociale;

    /**
     * Etbl tel.
     *
     * @var string|null
     */
    private $etblTel;

    /**
     * Indice aem.
     *
     * @var int|null
     */
    private $indiceAem;

    /**
     * Label prestataire.
     *
     * @var bool|null
     */
    private $labelPrestataire;

    /**
     * Licence spectacle.
     *
     * @var bool|null
     */
    private $licenceSpectacle;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Lien parente.
     *
     * @var bool|null
     */
    private $lienParente;

    /**
     * Motif fin contrat.
     *
     * @var string|null
     */
    private $motifFinContrat;

    /**
     * Motif rupture.
     *
     * @var string|null
     */
    private $motifRupture;

    /**
     * Naf.
     *
     * @var string|null
     */
    private $naf;

    /**
     * Nb jour trav.
     *
     * @var float|null
     */
    private $nbJourTrav;

    /**
     * Nir.
     *
     * @var string|null
     */
    private $nir;

    /**
     * Nom employe.
     *
     * @var string|null
     */
    private $nomEmploye;

    /**
     * Nom naissance.
     *
     * @var string|null
     */
    private $nomNaissance;

    /**
     * Nom retraite.
     *
     * @var string|null
     */
    private $nomRetraite;

    /**
     * Nombre cachets.
     *
     * @var float|null
     */
    private $nombreCachets;

    /**
     * Nombre cachets isoles.
     *
     * @var float|null
     */
    private $nombreCachetsIsoles;

    /**
     * Nombre heures.
     *
     * @var float|null
     */
    private $nombreHeures;

    /**
     * Num assedic.
     *
     * @var string|null
     */
    private $numAssedic;

    /**
     * Num caisse spectacle.
     *
     * @var string|null
     */
    private $numCaisseSpectacle;

    /**
     * Num certification sociale.
     *
     * @var string|null
     */
    private $numCertificationSociale;

    /**
     * Num idcc employeur.
     *
     * @var string|null
     */
    private $numIdccEmployeur;

    /**
     * Num idcc prestation travail.
     *
     * @var string|null
     */
    private $numIdccPrestationTravail;

    /**
     * Num objet.
     *
     * @var string|null
     */
    private $numObjet;

    /**
     * Numero aem initiale.
     *
     * @var string|null
     */
    private $numeroAemInitiale;

    /**
     * Numero attestation.
     *
     * @var string|null
     */
    private $numeroAttestation;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Numero label.
     *
     * @var string|null
     */
    private $numeroLabel;

    /**
     * Numero licence.
     *
     * @var string|null
     */
    private $numeroLicence;

    /**
     * Organisateur spectacle.
     *
     * @var bool|null
     */
    private $organisateurSpectacle;

    /**
     * Organisme assedic.
     *
     * @var string|null
     */
    private $organismeAssedic;

    /**
     * Organisme retraite.
     *
     * @var string|null
     */
    private $organismeRetraite;

    /**
     * Periode attest.
     *
     * @var DateTime|null
     */
    private $periodeAttest;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Signature date.
     *
     * @var DateTime|null
     */
    private $signatureDate;

    /**
     * Signature nom.
     *
     * @var string|null
     */
    private $signatureNom;

    /**
     * Signature prenom.
     *
     * @var string|null
     */
    private $signaturePrenom;

    /**
     * Signature qualite.
     *
     * @var string|null
     */
    private $signatureQualite;

    /**
     * Signature qualite code.
     *
     * @var string|null
     */
    private $signatureQualiteCode;

    /**
     * Signature ville.
     *
     * @var string|null
     */
    private $signatureVille;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Statut cadre.
     *
     * @var bool|null
     */
    private $statutCadre;

    /**
     * Taux cotis.
     *
     * @var float|null
     */
    private $tauxCotis;

    /**
     * Tel contact.
     *
     * @var string|null
     */
    private $telContact;

    /**
     * Type aem.
     *
     * @var string|null
     */
    private $typeAem;

    /**
     * Type lien parente.
     *
     * @var string|null
     */
    private $typeLienParente;

    /**
     * Type nationalite.
     *
     * @var string|null
     */
    private $typeNationalite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the activite.
     *
     * @return string|null Returns the activite.
     */
    public function getActivite(): ?string {
        return $this->activite;
    }

    /**
     * Get the aem initiale.
     *
     * @return bool|null Returns the aem initiale.
     */
    public function getAemInitiale(): ?bool {
        return $this->aemInitiale;
    }

    /**
     * Get the autres contributions.
     *
     * @return float|null Returns the autres contributions.
     */
    public function getAutresContributions(): ?float {
        return $this->autresContributions;
    }

    /**
     * Get the autres remun brut.
     *
     * @return float|null Returns the autres remun brut.
     */
    public function getAutresRemunBrut(): ?float {
        return $this->autresRemunBrut;
    }

    /**
     * Get the autres taux cotis.
     *
     * @return float|null Returns the autres taux cotis.
     */
    public function getAutresTauxCotis(): ?float {
        return $this->autresTauxCotis;
    }

    /**
     * Get the brut.
     *
     * @return float|null Returns the brut.
     */
    public function getBrut(): ?float {
        return $this->brut;
    }

    /**
     * Get the brut al.
     *
     * @return float|null Returns the brut al.
     */
    public function getBrutAl(): ?float {
        return $this->brutAl;
    }

    /**
     * Get the certification sociale.
     *
     * @return bool|null Returns the certification sociale.
     */
    public function getCertificationSociale(): ?bool {
        return $this->certificationSociale;
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
     * Get the code emploi.
     *
     * @return string|null Returns the code emploi.
     */
    public function getCodeEmploi(): ?string {
        return $this->codeEmploi;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
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
     * Get the code qualif.
     *
     * @return string|null Returns the code qualif.
     */
    public function getCodeQualif(): ?string {
        return $this->codeQualif;
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
     * Get the contrat en cours.
     *
     * @return bool|null Returns the contrat en cours.
     */
    public function getContratEnCours(): ?bool {
        return $this->contratEnCours;
    }

    /**
     * Get the contributions.
     *
     * @return float|null Returns the contributions.
     */
    public function getContributions(): ?float {
        return $this->contributions;
    }

    /**
     * Get the date embauche.
     *
     * @return DateTime|null Returns the date embauche.
     */
    public function getDateEmbauche(): ?DateTime {
        return $this->dateEmbauche;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime|null Returns the date fin contrat.
     */
    public function getDateFinContrat(): ?DateTime {
        return $this->dateFinContrat;
    }

    /**
     * Get the date fin contrat initiale.
     *
     * @return DateTime|null Returns the date fin contrat initiale.
     */
    public function getDateFinContratInitiale(): ?DateTime {
        return $this->dateFinContratInitiale;
    }

    /**
     * Get the date naiss.
     *
     * @return DateTime|null Returns the date naiss.
     */
    public function getDateNaiss(): ?DateTime {
        return $this->dateNaiss;
    }

    /**
     * Get the emp adresse1.
     *
     * @return string|null Returns the emp adresse1.
     */
    public function getEmpAdresse1(): ?string {
        return $this->empAdresse1;
    }

    /**
     * Get the emp adresse2.
     *
     * @return string|null Returns the emp adresse2.
     */
    public function getEmpAdresse2(): ?string {
        return $this->empAdresse2;
    }

    /**
     * Get the emp code postal.
     *
     * @return string|null Returns the emp code postal.
     */
    public function getEmpCodePostal(): ?string {
        return $this->empCodePostal;
    }

    /**
     * Get the emp commune.
     *
     * @return string|null Returns the emp commune.
     */
    public function getEmpCommune(): ?string {
        return $this->empCommune;
    }

    /**
     * Get the emp tel.
     *
     * @return string|null Returns the emp tel.
     */
    public function getEmpTel(): ?string {
        return $this->empTel;
    }

    /**
     * Get the emploi.
     *
     * @return string|null Returns the emploi.
     */
    public function getEmploi(): ?string {
        return $this->emploi;
    }

    /**
     * Get the etbl adresse1.
     *
     * @return string|null Returns the etbl adresse1.
     */
    public function getEtblAdresse1(): ?string {
        return $this->etblAdresse1;
    }

    /**
     * Get the etbl adresse2.
     *
     * @return string|null Returns the etbl adresse2.
     */
    public function getEtblAdresse2(): ?string {
        return $this->etblAdresse2;
    }

    /**
     * Get the etbl code postal.
     *
     * @return string|null Returns the etbl code postal.
     */
    public function getEtblCodePostal(): ?string {
        return $this->etblCodePostal;
    }

    /**
     * Get the etbl commune.
     *
     * @return string|null Returns the etbl commune.
     */
    public function getEtblCommune(): ?string {
        return $this->etblCommune;
    }

    /**
     * Get the etbl fax.
     *
     * @return string|null Returns the etbl fax.
     */
    public function getEtblFax(): ?string {
        return $this->etblFax;
    }

    /**
     * Get the etbl mail.
     *
     * @return string|null Returns the etbl mail.
     */
    public function getEtblMail(): ?string {
        return $this->etblMail;
    }

    /**
     * Get the etbl raison sociale.
     *
     * @return string|null Returns the etbl raison sociale.
     */
    public function getEtblRaisonSociale(): ?string {
        return $this->etblRaisonSociale;
    }

    /**
     * Get the etbl tel.
     *
     * @return string|null Returns the etbl tel.
     */
    public function getEtblTel(): ?string {
        return $this->etblTel;
    }

    /**
     * Get the indice aem.
     *
     * @return int|null Returns the indice aem.
     */
    public function getIndiceAem(): ?int {
        return $this->indiceAem;
    }

    /**
     * Get the label prestataire.
     *
     * @return bool|null Returns the label prestataire.
     */
    public function getLabelPrestataire(): ?bool {
        return $this->labelPrestataire;
    }

    /**
     * Get the licence spectacle.
     *
     * @return bool|null Returns the licence spectacle.
     */
    public function getLicenceSpectacle(): ?bool {
        return $this->licenceSpectacle;
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
     * Get the lien parente.
     *
     * @return bool|null Returns the lien parente.
     */
    public function getLienParente(): ?bool {
        return $this->lienParente;
    }

    /**
     * Get the motif fin contrat.
     *
     * @return string|null Returns the motif fin contrat.
     */
    public function getMotifFinContrat(): ?string {
        return $this->motifFinContrat;
    }

    /**
     * Get the motif rupture.
     *
     * @return string|null Returns the motif rupture.
     */
    public function getMotifRupture(): ?string {
        return $this->motifRupture;
    }

    /**
     * Get the naf.
     *
     * @return string|null Returns the naf.
     */
    public function getNaf(): ?string {
        return $this->naf;
    }

    /**
     * Get the nb jour trav.
     *
     * @return float|null Returns the nb jour trav.
     */
    public function getNbJourTrav(): ?float {
        return $this->nbJourTrav;
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
     * Get the nom employe.
     *
     * @return string|null Returns the nom employe.
     */
    public function getNomEmploye(): ?string {
        return $this->nomEmploye;
    }

    /**
     * Get the nom naissance.
     *
     * @return string|null Returns the nom naissance.
     */
    public function getNomNaissance(): ?string {
        return $this->nomNaissance;
    }

    /**
     * Get the nom retraite.
     *
     * @return string|null Returns the nom retraite.
     */
    public function getNomRetraite(): ?string {
        return $this->nomRetraite;
    }

    /**
     * Get the nombre cachets.
     *
     * @return float|null Returns the nombre cachets.
     */
    public function getNombreCachets(): ?float {
        return $this->nombreCachets;
    }

    /**
     * Get the nombre cachets isoles.
     *
     * @return float|null Returns the nombre cachets isoles.
     */
    public function getNombreCachetsIsoles(): ?float {
        return $this->nombreCachetsIsoles;
    }

    /**
     * Get the nombre heures.
     *
     * @return float|null Returns the nombre heures.
     */
    public function getNombreHeures(): ?float {
        return $this->nombreHeures;
    }

    /**
     * Get the num assedic.
     *
     * @return string|null Returns the num assedic.
     */
    public function getNumAssedic(): ?string {
        return $this->numAssedic;
    }

    /**
     * Get the num caisse spectacle.
     *
     * @return string|null Returns the num caisse spectacle.
     */
    public function getNumCaisseSpectacle(): ?string {
        return $this->numCaisseSpectacle;
    }

    /**
     * Get the num certification sociale.
     *
     * @return string|null Returns the num certification sociale.
     */
    public function getNumCertificationSociale(): ?string {
        return $this->numCertificationSociale;
    }

    /**
     * Get the num idcc employeur.
     *
     * @return string|null Returns the num idcc employeur.
     */
    public function getNumIdccEmployeur(): ?string {
        return $this->numIdccEmployeur;
    }

    /**
     * Get the num idcc prestation travail.
     *
     * @return string|null Returns the num idcc prestation travail.
     */
    public function getNumIdccPrestationTravail(): ?string {
        return $this->numIdccPrestationTravail;
    }

    /**
     * Get the num objet.
     *
     * @return string|null Returns the num objet.
     */
    public function getNumObjet(): ?string {
        return $this->numObjet;
    }

    /**
     * Get the numero aem initiale.
     *
     * @return string|null Returns the numero aem initiale.
     */
    public function getNumeroAemInitiale(): ?string {
        return $this->numeroAemInitiale;
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
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the numero label.
     *
     * @return string|null Returns the numero label.
     */
    public function getNumeroLabel(): ?string {
        return $this->numeroLabel;
    }

    /**
     * Get the numero licence.
     *
     * @return string|null Returns the numero licence.
     */
    public function getNumeroLicence(): ?string {
        return $this->numeroLicence;
    }

    /**
     * Get the organisateur spectacle.
     *
     * @return bool|null Returns the organisateur spectacle.
     */
    public function getOrganisateurSpectacle(): ?bool {
        return $this->organisateurSpectacle;
    }

    /**
     * Get the organisme assedic.
     *
     * @return string|null Returns the organisme assedic.
     */
    public function getOrganismeAssedic(): ?string {
        return $this->organismeAssedic;
    }

    /**
     * Get the organisme retraite.
     *
     * @return string|null Returns the organisme retraite.
     */
    public function getOrganismeRetraite(): ?string {
        return $this->organismeRetraite;
    }

    /**
     * Get the periode attest.
     *
     * @return DateTime|null Returns the periode attest.
     */
    public function getPeriodeAttest(): ?DateTime {
        return $this->periodeAttest;
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
     * Get the signature date.
     *
     * @return DateTime|null Returns the signature date.
     */
    public function getSignatureDate(): ?DateTime {
        return $this->signatureDate;
    }

    /**
     * Get the signature nom.
     *
     * @return string|null Returns the signature nom.
     */
    public function getSignatureNom(): ?string {
        return $this->signatureNom;
    }

    /**
     * Get the signature prenom.
     *
     * @return string|null Returns the signature prenom.
     */
    public function getSignaturePrenom(): ?string {
        return $this->signaturePrenom;
    }

    /**
     * Get the signature qualite.
     *
     * @return string|null Returns the signature qualite.
     */
    public function getSignatureQualite(): ?string {
        return $this->signatureQualite;
    }

    /**
     * Get the signature qualite code.
     *
     * @return string|null Returns the signature qualite code.
     */
    public function getSignatureQualiteCode(): ?string {
        return $this->signatureQualiteCode;
    }

    /**
     * Get the signature ville.
     *
     * @return string|null Returns the signature ville.
     */
    public function getSignatureVille(): ?string {
        return $this->signatureVille;
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
     * Get the statut cadre.
     *
     * @return bool|null Returns the statut cadre.
     */
    public function getStatutCadre(): ?bool {
        return $this->statutCadre;
    }

    /**
     * Get the taux cotis.
     *
     * @return float|null Returns the taux cotis.
     */
    public function getTauxCotis(): ?float {
        return $this->tauxCotis;
    }

    /**
     * Get the tel contact.
     *
     * @return string|null Returns the tel contact.
     */
    public function getTelContact(): ?string {
        return $this->telContact;
    }

    /**
     * Get the type aem.
     *
     * @return string|null Returns the type aem.
     */
    public function getTypeAem(): ?string {
        return $this->typeAem;
    }

    /**
     * Get the type lien parente.
     *
     * @return string|null Returns the type lien parente.
     */
    public function getTypeLienParente(): ?string {
        return $this->typeLienParente;
    }

    /**
     * Get the type nationalite.
     *
     * @return string|null Returns the type nationalite.
     */
    public function getTypeNationalite(): ?string {
        return $this->typeNationalite;
    }

    /**
     * Set the activite.
     *
     * @param string|null $activite The activite.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setActivite(?string $activite): AttestationAem {
        $this->activite = $activite;
        return $this;
    }

    /**
     * Set the aem initiale.
     *
     * @param bool|null $aemInitiale The aem initiale.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setAemInitiale(?bool $aemInitiale): AttestationAem {
        $this->aemInitiale = $aemInitiale;
        return $this;
    }

    /**
     * Set the autres contributions.
     *
     * @param float|null $autresContributions The autres contributions.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setAutresContributions(?float $autresContributions): AttestationAem {
        $this->autresContributions = $autresContributions;
        return $this;
    }

    /**
     * Set the autres remun brut.
     *
     * @param float|null $autresRemunBrut The autres remun brut.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setAutresRemunBrut(?float $autresRemunBrut): AttestationAem {
        $this->autresRemunBrut = $autresRemunBrut;
        return $this;
    }

    /**
     * Set the autres taux cotis.
     *
     * @param float|null $autresTauxCotis The autres taux cotis.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setAutresTauxCotis(?float $autresTauxCotis): AttestationAem {
        $this->autresTauxCotis = $autresTauxCotis;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float|null $brut The brut.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setBrut(?float $brut): AttestationAem {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the brut al.
     *
     * @param float|null $brutAl The brut al.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setBrutAl(?float $brutAl): AttestationAem {
        $this->brutAl = $brutAl;
        return $this;
    }

    /**
     * Set the certification sociale.
     *
     * @param bool|null $certificationSociale The certification sociale.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setCertificationSociale(?bool $certificationSociale): AttestationAem {
        $this->certificationSociale = $certificationSociale;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setCivilite(?string $civilite): AttestationAem {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code emploi.
     *
     * @param string|null $codeEmploi The code emploi.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setCodeEmploi(?string $codeEmploi): AttestationAem {
        $this->codeEmploi = $codeEmploi;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setCodeEtablissement(?int $codeEtablissement): AttestationAem {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string|null $codeNaf2008 The code naf2008.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setCodeNaf2008(?string $codeNaf2008): AttestationAem {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }

    /**
     * Set the code qualif.
     *
     * @param string|null $codeQualif The code qualif.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setCodeQualif(?string $codeQualif): AttestationAem {
        $this->codeQualif = $codeQualif;
        return $this;
    }

    /**
     * Set the contact.
     *
     * @param string|null $contact The contact.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setContact(?string $contact): AttestationAem {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Set the contrat en cours.
     *
     * @param bool|null $contratEnCours The contrat en cours.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setContratEnCours(?bool $contratEnCours): AttestationAem {
        $this->contratEnCours = $contratEnCours;
        return $this;
    }

    /**
     * Set the contributions.
     *
     * @param float|null $contributions The contributions.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setContributions(?float $contributions): AttestationAem {
        $this->contributions = $contributions;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime|null $dateEmbauche The date embauche.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setDateEmbauche(?DateTime $dateEmbauche): AttestationAem {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setDateFinContrat(?DateTime $dateFinContrat): AttestationAem {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date fin contrat initiale.
     *
     * @param DateTime|null $dateFinContratInitiale The date fin contrat initiale.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setDateFinContratInitiale(?DateTime $dateFinContratInitiale): AttestationAem {
        $this->dateFinContratInitiale = $dateFinContratInitiale;
        return $this;
    }

    /**
     * Set the date naiss.
     *
     * @param DateTime|null $dateNaiss The date naiss.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setDateNaiss(?DateTime $dateNaiss): AttestationAem {
        $this->dateNaiss = $dateNaiss;
        return $this;
    }

    /**
     * Set the emp adresse1.
     *
     * @param string|null $empAdresse1 The emp adresse1.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEmpAdresse1(?string $empAdresse1): AttestationAem {
        $this->empAdresse1 = $empAdresse1;
        return $this;
    }

    /**
     * Set the emp adresse2.
     *
     * @param string|null $empAdresse2 The emp adresse2.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEmpAdresse2(?string $empAdresse2): AttestationAem {
        $this->empAdresse2 = $empAdresse2;
        return $this;
    }

    /**
     * Set the emp code postal.
     *
     * @param string|null $empCodePostal The emp code postal.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEmpCodePostal(?string $empCodePostal): AttestationAem {
        $this->empCodePostal = $empCodePostal;
        return $this;
    }

    /**
     * Set the emp commune.
     *
     * @param string|null $empCommune The emp commune.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEmpCommune(?string $empCommune): AttestationAem {
        $this->empCommune = $empCommune;
        return $this;
    }

    /**
     * Set the emp tel.
     *
     * @param string|null $empTel The emp tel.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEmpTel(?string $empTel): AttestationAem {
        $this->empTel = $empTel;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEmploi(?string $emploi): AttestationAem {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string|null $etblAdresse1 The etbl adresse1.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblAdresse1(?string $etblAdresse1): AttestationAem {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string|null $etblAdresse2 The etbl adresse2.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblAdresse2(?string $etblAdresse2): AttestationAem {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl code postal.
     *
     * @param string|null $etblCodePostal The etbl code postal.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblCodePostal(?string $etblCodePostal): AttestationAem {
        $this->etblCodePostal = $etblCodePostal;
        return $this;
    }

    /**
     * Set the etbl commune.
     *
     * @param string|null $etblCommune The etbl commune.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblCommune(?string $etblCommune): AttestationAem {
        $this->etblCommune = $etblCommune;
        return $this;
    }

    /**
     * Set the etbl fax.
     *
     * @param string|null $etblFax The etbl fax.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblFax(?string $etblFax): AttestationAem {
        $this->etblFax = $etblFax;
        return $this;
    }

    /**
     * Set the etbl mail.
     *
     * @param string|null $etblMail The etbl mail.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblMail(?string $etblMail): AttestationAem {
        $this->etblMail = $etblMail;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string|null $etblRaisonSociale The etbl raison sociale.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblRaisonSociale(?string $etblRaisonSociale): AttestationAem {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setEtblTel(?string $etblTel): AttestationAem {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the indice aem.
     *
     * @param int|null $indiceAem The indice aem.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setIndiceAem(?int $indiceAem): AttestationAem {
        $this->indiceAem = $indiceAem;
        return $this;
    }

    /**
     * Set the label prestataire.
     *
     * @param bool|null $labelPrestataire The label prestataire.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setLabelPrestataire(?bool $labelPrestataire): AttestationAem {
        $this->labelPrestataire = $labelPrestataire;
        return $this;
    }

    /**
     * Set the licence spectacle.
     *
     * @param bool|null $licenceSpectacle The licence spectacle.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setLicenceSpectacle(?bool $licenceSpectacle): AttestationAem {
        $this->licenceSpectacle = $licenceSpectacle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setLienDocument(?string $lienDocument): AttestationAem {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien parente.
     *
     * @param bool|null $lienParente The lien parente.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setLienParente(?bool $lienParente): AttestationAem {
        $this->lienParente = $lienParente;
        return $this;
    }

    /**
     * Set the motif fin contrat.
     *
     * @param string|null $motifFinContrat The motif fin contrat.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setMotifFinContrat(?string $motifFinContrat): AttestationAem {
        $this->motifFinContrat = $motifFinContrat;
        return $this;
    }

    /**
     * Set the motif rupture.
     *
     * @param string|null $motifRupture The motif rupture.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setMotifRupture(?string $motifRupture): AttestationAem {
        $this->motifRupture = $motifRupture;
        return $this;
    }

    /**
     * Set the naf.
     *
     * @param string|null $naf The naf.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNaf(?string $naf): AttestationAem {
        $this->naf = $naf;
        return $this;
    }

    /**
     * Set the nb jour trav.
     *
     * @param float|null $nbJourTrav The nb jour trav.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNbJourTrav(?float $nbJourTrav): AttestationAem {
        $this->nbJourTrav = $nbJourTrav;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNir(?string $nir): AttestationAem {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNomEmploye(?string $nomEmploye): AttestationAem {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNomNaissance(?string $nomNaissance): AttestationAem {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom retraite.
     *
     * @param string|null $nomRetraite The nom retraite.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNomRetraite(?string $nomRetraite): AttestationAem {
        $this->nomRetraite = $nomRetraite;
        return $this;
    }

    /**
     * Set the nombre cachets.
     *
     * @param float|null $nombreCachets The nombre cachets.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNombreCachets(?float $nombreCachets): AttestationAem {
        $this->nombreCachets = $nombreCachets;
        return $this;
    }

    /**
     * Set the nombre cachets isoles.
     *
     * @param float|null $nombreCachetsIsoles The nombre cachets isoles.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNombreCachetsIsoles(?float $nombreCachetsIsoles): AttestationAem {
        $this->nombreCachetsIsoles = $nombreCachetsIsoles;
        return $this;
    }

    /**
     * Set the nombre heures.
     *
     * @param float|null $nombreHeures The nombre heures.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNombreHeures(?float $nombreHeures): AttestationAem {
        $this->nombreHeures = $nombreHeures;
        return $this;
    }

    /**
     * Set the num assedic.
     *
     * @param string|null $numAssedic The num assedic.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumAssedic(?string $numAssedic): AttestationAem {
        $this->numAssedic = $numAssedic;
        return $this;
    }

    /**
     * Set the num caisse spectacle.
     *
     * @param string|null $numCaisseSpectacle The num caisse spectacle.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumCaisseSpectacle(?string $numCaisseSpectacle): AttestationAem {
        $this->numCaisseSpectacle = $numCaisseSpectacle;
        return $this;
    }

    /**
     * Set the num certification sociale.
     *
     * @param string|null $numCertificationSociale The num certification sociale.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumCertificationSociale(?string $numCertificationSociale): AttestationAem {
        $this->numCertificationSociale = $numCertificationSociale;
        return $this;
    }

    /**
     * Set the num idcc employeur.
     *
     * @param string|null $numIdccEmployeur The num idcc employeur.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumIdccEmployeur(?string $numIdccEmployeur): AttestationAem {
        $this->numIdccEmployeur = $numIdccEmployeur;
        return $this;
    }

    /**
     * Set the num idcc prestation travail.
     *
     * @param string|null $numIdccPrestationTravail The num idcc prestation travail.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumIdccPrestationTravail(?string $numIdccPrestationTravail): AttestationAem {
        $this->numIdccPrestationTravail = $numIdccPrestationTravail;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string|null $numObjet The num objet.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumObjet(?string $numObjet): AttestationAem {
        $this->numObjet = $numObjet;
        return $this;
    }

    /**
     * Set the numero aem initiale.
     *
     * @param string|null $numeroAemInitiale The numero aem initiale.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumeroAemInitiale(?string $numeroAemInitiale): AttestationAem {
        $this->numeroAemInitiale = $numeroAemInitiale;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumeroAttestation(?string $numeroAttestation): AttestationAem {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AttestationAem {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero label.
     *
     * @param string|null $numeroLabel The numero label.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumeroLabel(?string $numeroLabel): AttestationAem {
        $this->numeroLabel = $numeroLabel;
        return $this;
    }

    /**
     * Set the numero licence.
     *
     * @param string|null $numeroLicence The numero licence.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setNumeroLicence(?string $numeroLicence): AttestationAem {
        $this->numeroLicence = $numeroLicence;
        return $this;
    }

    /**
     * Set the organisateur spectacle.
     *
     * @param bool|null $organisateurSpectacle The organisateur spectacle.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setOrganisateurSpectacle(?bool $organisateurSpectacle): AttestationAem {
        $this->organisateurSpectacle = $organisateurSpectacle;
        return $this;
    }

    /**
     * Set the organisme assedic.
     *
     * @param string|null $organismeAssedic The organisme assedic.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setOrganismeAssedic(?string $organismeAssedic): AttestationAem {
        $this->organismeAssedic = $organismeAssedic;
        return $this;
    }

    /**
     * Set the organisme retraite.
     *
     * @param string|null $organismeRetraite The organisme retraite.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setOrganismeRetraite(?string $organismeRetraite): AttestationAem {
        $this->organismeRetraite = $organismeRetraite;
        return $this;
    }

    /**
     * Set the periode attest.
     *
     * @param DateTime|null $periodeAttest The periode attest.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setPeriodeAttest(?DateTime $periodeAttest): AttestationAem {
        $this->periodeAttest = $periodeAttest;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setPrenom(?string $prenom): AttestationAem {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSignatureDate(?DateTime $signatureDate): AttestationAem {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string|null $signatureNom The signature nom.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSignatureNom(?string $signatureNom): AttestationAem {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature prenom.
     *
     * @param string|null $signaturePrenom The signature prenom.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSignaturePrenom(?string $signaturePrenom): AttestationAem {
        $this->signaturePrenom = $signaturePrenom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string|null $signatureQualite The signature qualite.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSignatureQualite(?string $signatureQualite): AttestationAem {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature qualite code.
     *
     * @param string|null $signatureQualiteCode The signature qualite code.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSignatureQualiteCode(?string $signatureQualiteCode): AttestationAem {
        $this->signatureQualiteCode = $signatureQualiteCode;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string|null $signatureVille The signature ville.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSignatureVille(?string $signatureVille): AttestationAem {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setSiret(?string $siret): AttestationAem {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool|null $statutCadre The statut cadre.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setStatutCadre(?bool $statutCadre): AttestationAem {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the taux cotis.
     *
     * @param float|null $tauxCotis The taux cotis.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setTauxCotis(?float $tauxCotis): AttestationAem {
        $this->tauxCotis = $tauxCotis;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string|null $telContact The tel contact.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setTelContact(?string $telContact): AttestationAem {
        $this->telContact = $telContact;
        return $this;
    }

    /**
     * Set the type aem.
     *
     * @param string|null $typeAem The type aem.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setTypeAem(?string $typeAem): AttestationAem {
        $this->typeAem = $typeAem;
        return $this;
    }

    /**
     * Set the type lien parente.
     *
     * @param string|null $typeLienParente The type lien parente.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setTypeLienParente(?string $typeLienParente): AttestationAem {
        $this->typeLienParente = $typeLienParente;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string|null $typeNationalite The type nationalite.
     * @return AttestationAem Returns this Attestation aem.
     */
    public function setTypeNationalite(?string $typeNationalite): AttestationAem {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }
}
