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
 * Conges spectacles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class CongesSpectacles {

    /**
     * Base conges.
     *
     * @var float|null
     */
    private $baseConges;

    /**
     * Brut.
     *
     * @var float|null
     */
    private $brut;

    /**
     * Ce initial.
     *
     * @var bool|null
     */
    private $ceInitial;

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
     * Date certificat emploi.
     *
     * @var DateTime|null
     */
    private $dateCertificatEmploi;

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
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date paiement.
     *
     * @var DateTime|null
     */
    private $datePaiement;

    /**
     * Debut periode attest.
     *
     * @var DateTime|null
     */
    private $debutPeriodeAttest;

    /**
     * Dept naissance.
     *
     * @var string|null
     */
    private $deptNaissance;

    /**
     * Disquette.
     *
     * @var bool|null
     */
    private $disquette;

    /**
     * Edite.
     *
     * @var bool|null
     */
    private $edite;

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
     * Indice ce.
     *
     * @var int|null
     */
    private $indiceCe;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Lieu certificat emploi.
     *
     * @var string|null
     */
    private $lieuCertificatEmploi;

    /**
     * Lieu naissance.
     *
     * @var string|null
     */
    private $lieuNaissance;

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
     * Nombre cachets.
     *
     * @var float|null
     */
    private $nombreCachets;

    /**
     * Nouvelle attest.
     *
     * @var bool|null
     */
    private $nouvelleAttest;

    /**
     * Num caisse spectacle.
     *
     * @var string|null
     */
    private $numCaisseSpectacle;

    /**
     * Numero attestation.
     *
     * @var string|null
     */
    private $numeroAttestation;

    /**
     * Numero ce initial.
     *
     * @var string|null
     */
    private $numeroCeInitial;

    /**
     * Numero conges spectacle.
     *
     * @var string|null
     */
    private $numeroCongesSpectacle;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Observations.
     *
     * @var string|null
     */
    private $observations;

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
     * Pseudonyme.
     *
     * @var string|null
     */
    private $pseudonyme;

    /**
     * Sexe.
     *
     * @var string|null
     */
    private $sexe;

    /**
     * Signataire certificat emploi.
     *
     * @var string|null
     */
    private $signataireCertificatEmploi;

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
     * Tel contact.
     *
     * @var string|null
     */
    private $telContact;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Type ce.
     *
     * @var string|null
     */
    private $typeCe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the base conges.
     *
     * @return float|null Returns the base conges.
     */
    public function getBaseConges(): ?float {
        return $this->baseConges;
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
     * Get the ce initial.
     *
     * @return bool|null Returns the ce initial.
     */
    public function getCeInitial(): ?bool {
        return $this->ceInitial;
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
     * Get the date certificat emploi.
     *
     * @return DateTime|null Returns the date certificat emploi.
     */
    public function getDateCertificatEmploi(): ?DateTime {
        return $this->dateCertificatEmploi;
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
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
    }

    /**
     * Get the date paiement.
     *
     * @return DateTime|null Returns the date paiement.
     */
    public function getDatePaiement(): ?DateTime {
        return $this->datePaiement;
    }

    /**
     * Get the debut periode attest.
     *
     * @return DateTime|null Returns the debut periode attest.
     */
    public function getDebutPeriodeAttest(): ?DateTime {
        return $this->debutPeriodeAttest;
    }

    /**
     * Get the dept naissance.
     *
     * @return string|null Returns the dept naissance.
     */
    public function getDeptNaissance(): ?string {
        return $this->deptNaissance;
    }

    /**
     * Get the disquette.
     *
     * @return bool|null Returns the disquette.
     */
    public function getDisquette(): ?bool {
        return $this->disquette;
    }

    /**
     * Get the edite.
     *
     * @return bool|null Returns the edite.
     */
    public function getEdite(): ?bool {
        return $this->edite;
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
     * Get the indice ce.
     *
     * @return int|null Returns the indice ce.
     */
    public function getIndiceCe(): ?int {
        return $this->indiceCe;
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
     * Get the lieu certificat emploi.
     *
     * @return string|null Returns the lieu certificat emploi.
     */
    public function getLieuCertificatEmploi(): ?string {
        return $this->lieuCertificatEmploi;
    }

    /**
     * Get the lieu naissance.
     *
     * @return string|null Returns the lieu naissance.
     */
    public function getLieuNaissance(): ?string {
        return $this->lieuNaissance;
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
     * Get the nombre cachets.
     *
     * @return float|null Returns the nombre cachets.
     */
    public function getNombreCachets(): ?float {
        return $this->nombreCachets;
    }

    /**
     * Get the nouvelle attest.
     *
     * @return bool|null Returns the nouvelle attest.
     */
    public function getNouvelleAttest(): ?bool {
        return $this->nouvelleAttest;
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
     * Get the numero attestation.
     *
     * @return string|null Returns the numero attestation.
     */
    public function getNumeroAttestation(): ?string {
        return $this->numeroAttestation;
    }

    /**
     * Get the numero ce initial.
     *
     * @return string|null Returns the numero ce initial.
     */
    public function getNumeroCeInitial(): ?string {
        return $this->numeroCeInitial;
    }

    /**
     * Get the numero conges spectacle.
     *
     * @return string|null Returns the numero conges spectacle.
     */
    public function getNumeroCongesSpectacle(): ?string {
        return $this->numeroCongesSpectacle;
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
     * Get the observations.
     *
     * @return string|null Returns the observations.
     */
    public function getObservations(): ?string {
        return $this->observations;
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
     * Get the pseudonyme.
     *
     * @return string|null Returns the pseudonyme.
     */
    public function getPseudonyme(): ?string {
        return $this->pseudonyme;
    }

    /**
     * Get the sexe.
     *
     * @return string|null Returns the sexe.
     */
    public function getSexe(): ?string {
        return $this->sexe;
    }

    /**
     * Get the signataire certificat emploi.
     *
     * @return string|null Returns the signataire certificat emploi.
     */
    public function getSignataireCertificatEmploi(): ?string {
        return $this->signataireCertificatEmploi;
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
     * Get the tel contact.
     *
     * @return string|null Returns the tel contact.
     */
    public function getTelContact(): ?string {
        return $this->telContact;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the type ce.
     *
     * @return string|null Returns the type ce.
     */
    public function getTypeCe(): ?string {
        return $this->typeCe;
    }

    /**
     * Set the base conges.
     *
     * @param float|null $baseConges The base conges.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setBaseConges(?float $baseConges): CongesSpectacles {
        $this->baseConges = $baseConges;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float|null $brut The brut.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setBrut(?float $brut): CongesSpectacles {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the ce initial.
     *
     * @param bool|null $ceInitial The ce initial.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setCeInitial(?bool $ceInitial): CongesSpectacles {
        $this->ceInitial = $ceInitial;
        return $this;
    }

    /**
     * Set the code emploi.
     *
     * @param string|null $codeEmploi The code emploi.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setCodeEmploi(?string $codeEmploi): CongesSpectacles {
        $this->codeEmploi = $codeEmploi;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setCodeEtablissement(?int $codeEtablissement): CongesSpectacles {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the contact.
     *
     * @param string|null $contact The contact.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setContact(?string $contact): CongesSpectacles {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Set the contrat en cours.
     *
     * @param bool|null $contratEnCours The contrat en cours.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setContratEnCours(?bool $contratEnCours): CongesSpectacles {
        $this->contratEnCours = $contratEnCours;
        return $this;
    }

    /**
     * Set the date certificat emploi.
     *
     * @param DateTime|null $dateCertificatEmploi The date certificat emploi.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDateCertificatEmploi(?DateTime $dateCertificatEmploi): CongesSpectacles {
        $this->dateCertificatEmploi = $dateCertificatEmploi;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime|null $dateEmbauche The date embauche.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDateEmbauche(?DateTime $dateEmbauche): CongesSpectacles {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDateFinContrat(?DateTime $dateFinContrat): CongesSpectacles {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDateNaissance(?DateTime $dateNaissance): CongesSpectacles {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date paiement.
     *
     * @param DateTime|null $datePaiement The date paiement.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDatePaiement(?DateTime $datePaiement): CongesSpectacles {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    /**
     * Set the debut periode attest.
     *
     * @param DateTime|null $debutPeriodeAttest The debut periode attest.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDebutPeriodeAttest(?DateTime $debutPeriodeAttest): CongesSpectacles {
        $this->debutPeriodeAttest = $debutPeriodeAttest;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string|null $deptNaissance The dept naissance.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDeptNaissance(?string $deptNaissance): CongesSpectacles {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the disquette.
     *
     * @param bool|null $disquette The disquette.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setDisquette(?bool $disquette): CongesSpectacles {
        $this->disquette = $disquette;
        return $this;
    }

    /**
     * Set the edite.
     *
     * @param bool|null $edite The edite.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEdite(?bool $edite): CongesSpectacles {
        $this->edite = $edite;
        return $this;
    }

    /**
     * Set the emp adresse1.
     *
     * @param string|null $empAdresse1 The emp adresse1.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEmpAdresse1(?string $empAdresse1): CongesSpectacles {
        $this->empAdresse1 = $empAdresse1;
        return $this;
    }

    /**
     * Set the emp adresse2.
     *
     * @param string|null $empAdresse2 The emp adresse2.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEmpAdresse2(?string $empAdresse2): CongesSpectacles {
        $this->empAdresse2 = $empAdresse2;
        return $this;
    }

    /**
     * Set the emp code postal.
     *
     * @param string|null $empCodePostal The emp code postal.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEmpCodePostal(?string $empCodePostal): CongesSpectacles {
        $this->empCodePostal = $empCodePostal;
        return $this;
    }

    /**
     * Set the emp commune.
     *
     * @param string|null $empCommune The emp commune.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEmpCommune(?string $empCommune): CongesSpectacles {
        $this->empCommune = $empCommune;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEmploi(?string $emploi): CongesSpectacles {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string|null $etblAdresse1 The etbl adresse1.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEtblAdresse1(?string $etblAdresse1): CongesSpectacles {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string|null $etblAdresse2 The etbl adresse2.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEtblAdresse2(?string $etblAdresse2): CongesSpectacles {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl code postal.
     *
     * @param string|null $etblCodePostal The etbl code postal.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEtblCodePostal(?string $etblCodePostal): CongesSpectacles {
        $this->etblCodePostal = $etblCodePostal;
        return $this;
    }

    /**
     * Set the etbl commune.
     *
     * @param string|null $etblCommune The etbl commune.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEtblCommune(?string $etblCommune): CongesSpectacles {
        $this->etblCommune = $etblCommune;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string|null $etblRaisonSociale The etbl raison sociale.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEtblRaisonSociale(?string $etblRaisonSociale): CongesSpectacles {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setEtblTel(?string $etblTel): CongesSpectacles {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the indice ce.
     *
     * @param int|null $indiceCe The indice ce.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setIndiceCe(?int $indiceCe): CongesSpectacles {
        $this->indiceCe = $indiceCe;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setLienDocument(?string $lienDocument): CongesSpectacles {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lieu certificat emploi.
     *
     * @param string|null $lieuCertificatEmploi The lieu certificat emploi.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setLieuCertificatEmploi(?string $lieuCertificatEmploi): CongesSpectacles {
        $this->lieuCertificatEmploi = $lieuCertificatEmploi;
        return $this;
    }

    /**
     * Set the lieu naissance.
     *
     * @param string|null $lieuNaissance The lieu naissance.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setLieuNaissance(?string $lieuNaissance): CongesSpectacles {
        $this->lieuNaissance = $lieuNaissance;
        return $this;
    }

    /**
     * Set the nb jour trav.
     *
     * @param float|null $nbJourTrav The nb jour trav.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNbJourTrav(?float $nbJourTrav): CongesSpectacles {
        $this->nbJourTrav = $nbJourTrav;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNir(?string $nir): CongesSpectacles {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNomEmploye(?string $nomEmploye): CongesSpectacles {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNomNaissance(?string $nomNaissance): CongesSpectacles {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nombre cachets.
     *
     * @param float|null $nombreCachets The nombre cachets.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNombreCachets(?float $nombreCachets): CongesSpectacles {
        $this->nombreCachets = $nombreCachets;
        return $this;
    }

    /**
     * Set the nouvelle attest.
     *
     * @param bool|null $nouvelleAttest The nouvelle attest.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNouvelleAttest(?bool $nouvelleAttest): CongesSpectacles {
        $this->nouvelleAttest = $nouvelleAttest;
        return $this;
    }

    /**
     * Set the num caisse spectacle.
     *
     * @param string|null $numCaisseSpectacle The num caisse spectacle.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNumCaisseSpectacle(?string $numCaisseSpectacle): CongesSpectacles {
        $this->numCaisseSpectacle = $numCaisseSpectacle;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNumeroAttestation(?string $numeroAttestation): CongesSpectacles {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero ce initial.
     *
     * @param string|null $numeroCeInitial The numero ce initial.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNumeroCeInitial(?string $numeroCeInitial): CongesSpectacles {
        $this->numeroCeInitial = $numeroCeInitial;
        return $this;
    }

    /**
     * Set the numero conges spectacle.
     *
     * @param string|null $numeroCongesSpectacle The numero conges spectacle.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNumeroCongesSpectacle(?string $numeroCongesSpectacle): CongesSpectacles {
        $this->numeroCongesSpectacle = $numeroCongesSpectacle;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setNumeroEmploye(?string $numeroEmploye): CongesSpectacles {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string|null $observations The observations.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setObservations(?string $observations): CongesSpectacles {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the periode attest.
     *
     * @param DateTime|null $periodeAttest The periode attest.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setPeriodeAttest(?DateTime $periodeAttest): CongesSpectacles {
        $this->periodeAttest = $periodeAttest;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setPrenom(?string $prenom): CongesSpectacles {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the pseudonyme.
     *
     * @param string|null $pseudonyme The pseudonyme.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setPseudonyme(?string $pseudonyme): CongesSpectacles {
        $this->pseudonyme = $pseudonyme;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setSexe(?string $sexe): CongesSpectacles {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the signataire certificat emploi.
     *
     * @param string|null $signataireCertificatEmploi The signataire certificat emploi.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setSignataireCertificatEmploi(?string $signataireCertificatEmploi): CongesSpectacles {
        $this->signataireCertificatEmploi = $signataireCertificatEmploi;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setSiret(?string $siret): CongesSpectacles {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool|null $statutCadre The statut cadre.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setStatutCadre(?bool $statutCadre): CongesSpectacles {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string|null $telContact The tel contact.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setTelContact(?string $telContact): CongesSpectacles {
        $this->telContact = $telContact;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setTitre(?string $titre): CongesSpectacles {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the type ce.
     *
     * @param string|null $typeCe The type ce.
     * @return CongesSpectacles Returns this Conges spectacles.
     */
    public function setTypeCe(?string $typeCe): CongesSpectacles {
        $this->typeCe = $typeCe;
        return $this;
    }
}
