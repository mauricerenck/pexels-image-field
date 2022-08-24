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
 * Attestation ijss.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AttestationIjss {

    /**
     * Adresse1.
     *
     * @var string|null
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string|null
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string|null
     */
    private $adresse3;

    /**
     * Cas general.
     *
     * @var bool|null
     */
    private $casGeneral;

    /**
     * Cas particulier.
     *
     * @var bool|null
     */
    private $casParticulier;

    /**
     * Categorie sal.
     *
     * @var string|null
     */
    private $categorieSal;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Date debut paternite.
     *
     * @var DateTime|null
     */
    private $dateDebutPaternite;

    /**
     * Date dern j mens.
     *
     * @var DateTime|null
     */
    private $dateDernJMens;

    /**
     * Date naissance employe.
     *
     * @var DateTime|null
     */
    private $dateNaissanceEmploye;

    /**
     * Date naissance enfant.
     *
     * @var DateTime|null
     */
    private $dateNaissanceEnfant;

    /**
     * Dern j.
     *
     * @var DateTime|null
     */
    private $dernJ;

    /**
     * Dispense travail.
     *
     * @var bool|null
     */
    private $dispenseTravail;

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
     * Etbl adresse3.
     *
     * @var string|null
     */
    private $etblAdresse3;

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
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Intitule compte.
     *
     * @var string|null
     */
    private $intituleCompte;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Maladie.
     *
     * @var bool|null
     */
    private $maladie;

    /**
     * Maternite.
     *
     * @var bool|null
     */
    private $maternite;

    /**
     * Matricule.
     *
     * @var string|null
     */
    private $matricule;

    /**
     * Montant general.
     *
     * @var float|null
     */
    private $montantGeneral;

    /**
     * Montant particulier.
     *
     * @var float|null
     */
    private $montantParticulier;

    /**
     * Mt cg euro ou franc.
     *
     * @var string|null
     */
    private $mtCgEuroOuFranc;

    /**
     * Mt cp euro ou franc.
     *
     * @var string|null
     */
    private $mtCpEuroOuFranc;

    /**
     * Mt sal brut moins150 h.
     *
     * @var float|null
     */
    private $mtSalBrutMoins150H;

    /**
     * Mt sal brut moins600 h.
     *
     * @var float|null
     */
    private $mtSalBrutMoins600H;

    /**
     * Nb enfants a charge.
     *
     * @var string|null
     */
    private $nbEnfantsACharge;

    /**
     * Nb h cas part.
     *
     * @var float|null
     */
    private $nbHCasPart;

    /**
     * Nb h general.
     *
     * @var float|null
     */
    private $nbHGeneral;

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
     * Nom marital.
     *
     * @var string|null
     */
    private $nomMarital;

    /**
     * Non repris.
     *
     * @var bool|null
     */
    private $nonRepris;

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
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Paiement en euro.
     *
     * @var bool|null
     */
    private $paiementEnEuro;

    /**
     * Paternite.
     *
     * @var bool|null
     */
    private $paternite;

    /**
     * Periode au.
     *
     * @var DateTime|null
     */
    private $periodeAu;

    /**
     * Periode du.
     *
     * @var DateTime|null
     */
    private $periodeDu;

    /**
     * Periode subr au.
     *
     * @var DateTime|null
     */
    private $periodeSubrAu;

    /**
     * Periode subr du.
     *
     * @var DateTime|null
     */
    private $periodeSubrDu;

    /**
     * Plusde200h.
     *
     * @var bool|null
     */
    private $plusde200h;

    /**
     * Plusde800h.
     *
     * @var bool|null
     */
    private $plusde800h;

    /**
     * Prenom employe.
     *
     * @var string|null
     */
    private $prenomEmploye;

    /**
     * Rectificative.
     *
     * @var bool|null
     */
    private $rectificative;

    /**
     * Reprise.
     *
     * @var DateTime|null
     */
    private $reprise;

    /**
     * Reprise motif med.
     *
     * @var bool|null
     */
    private $repriseMotifMed;

    /**
     * Reprise raison pers.
     *
     * @var bool|null
     */
    private $repriseRaisonPers;

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
     * Signature qualite.
     *
     * @var string|null
     */
    private $signatureQualite;

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
     * Situation.
     *
     * @var string|null
     */
    private $situation;

    /**
     * Subrogation constantes.
     *
     * @var bool|null
     */
    private $subrogationConstantes;

    /**
     * Subrogation montant.
     *
     * @var float|null
     */
    private $subrogationMontant;

    /**
     * Subrogation partielle.
     *
     * @var bool|null
     */
    private $subrogationPartielle;

    /**
     * Suspension date.
     *
     * @var DateTime|null
     */
    private $suspensionDate;

    /**
     * Suspension motif.
     *
     * @var string|null
     */
    private $suspensionMotif;

    /**
     * Travail temp.
     *
     * @var bool|null
     */
    private $travailTemp;

    /**
     * Type attestation.
     *
     * @var string|null
     */
    private $typeAttestation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse1.
     *
     * @return string|null Returns the adresse1.
     */
    public function getAdresse1(): ?string {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string|null Returns the adresse2.
     */
    public function getAdresse2(): ?string {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string|null Returns the adresse3.
     */
    public function getAdresse3(): ?string {
        return $this->adresse3;
    }

    /**
     * Get the cas general.
     *
     * @return bool|null Returns the cas general.
     */
    public function getCasGeneral(): ?bool {
        return $this->casGeneral;
    }

    /**
     * Get the cas particulier.
     *
     * @return bool|null Returns the cas particulier.
     */
    public function getCasParticulier(): ?bool {
        return $this->casParticulier;
    }

    /**
     * Get the categorie sal.
     *
     * @return string|null Returns the categorie sal.
     */
    public function getCategorieSal(): ?string {
        return $this->categorieSal;
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
     * Get the date debut paternite.
     *
     * @return DateTime|null Returns the date debut paternite.
     */
    public function getDateDebutPaternite(): ?DateTime {
        return $this->dateDebutPaternite;
    }

    /**
     * Get the date dern j mens.
     *
     * @return DateTime|null Returns the date dern j mens.
     */
    public function getDateDernJMens(): ?DateTime {
        return $this->dateDernJMens;
    }

    /**
     * Get the date naissance employe.
     *
     * @return DateTime|null Returns the date naissance employe.
     */
    public function getDateNaissanceEmploye(): ?DateTime {
        return $this->dateNaissanceEmploye;
    }

    /**
     * Get the date naissance enfant.
     *
     * @return DateTime|null Returns the date naissance enfant.
     */
    public function getDateNaissanceEnfant(): ?DateTime {
        return $this->dateNaissanceEnfant;
    }

    /**
     * Get the dern j.
     *
     * @return DateTime|null Returns the dern j.
     */
    public function getDernJ(): ?DateTime {
        return $this->dernJ;
    }

    /**
     * Get the dispense travail.
     *
     * @return bool|null Returns the dispense travail.
     */
    public function getDispenseTravail(): ?bool {
        return $this->dispenseTravail;
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
     * Get the etbl adresse3.
     *
     * @return string|null Returns the etbl adresse3.
     */
    public function getEtblAdresse3(): ?string {
        return $this->etblAdresse3;
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
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the intitule compte.
     *
     * @return string|null Returns the intitule compte.
     */
    public function getIntituleCompte(): ?string {
        return $this->intituleCompte;
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
     * Get the maladie.
     *
     * @return bool|null Returns the maladie.
     */
    public function getMaladie(): ?bool {
        return $this->maladie;
    }

    /**
     * Get the maternite.
     *
     * @return bool|null Returns the maternite.
     */
    public function getMaternite(): ?bool {
        return $this->maternite;
    }

    /**
     * Get the matricule.
     *
     * @return string|null Returns the matricule.
     */
    public function getMatricule(): ?string {
        return $this->matricule;
    }

    /**
     * Get the montant general.
     *
     * @return float|null Returns the montant general.
     */
    public function getMontantGeneral(): ?float {
        return $this->montantGeneral;
    }

    /**
     * Get the montant particulier.
     *
     * @return float|null Returns the montant particulier.
     */
    public function getMontantParticulier(): ?float {
        return $this->montantParticulier;
    }

    /**
     * Get the mt cg euro ou franc.
     *
     * @return string|null Returns the mt cg euro ou franc.
     */
    public function getMtCgEuroOuFranc(): ?string {
        return $this->mtCgEuroOuFranc;
    }

    /**
     * Get the mt cp euro ou franc.
     *
     * @return string|null Returns the mt cp euro ou franc.
     */
    public function getMtCpEuroOuFranc(): ?string {
        return $this->mtCpEuroOuFranc;
    }

    /**
     * Get the mt sal brut moins150 h.
     *
     * @return float|null Returns the mt sal brut moins150 h.
     */
    public function getMtSalBrutMoins150H(): ?float {
        return $this->mtSalBrutMoins150H;
    }

    /**
     * Get the mt sal brut moins600 h.
     *
     * @return float|null Returns the mt sal brut moins600 h.
     */
    public function getMtSalBrutMoins600H(): ?float {
        return $this->mtSalBrutMoins600H;
    }

    /**
     * Get the nb enfants a charge.
     *
     * @return string|null Returns the nb enfants a charge.
     */
    public function getNbEnfantsACharge(): ?string {
        return $this->nbEnfantsACharge;
    }

    /**
     * Get the nb h cas part.
     *
     * @return float|null Returns the nb h cas part.
     */
    public function getNbHCasPart(): ?float {
        return $this->nbHCasPart;
    }

    /**
     * Get the nb h general.
     *
     * @return float|null Returns the nb h general.
     */
    public function getNbHGeneral(): ?float {
        return $this->nbHGeneral;
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
     * Get the nom marital.
     *
     * @return string|null Returns the nom marital.
     */
    public function getNomMarital(): ?string {
        return $this->nomMarital;
    }

    /**
     * Get the non repris.
     *
     * @return bool|null Returns the non repris.
     */
    public function getNonRepris(): ?bool {
        return $this->nonRepris;
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
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
    }

    /**
     * Get the paiement en euro.
     *
     * @return bool|null Returns the paiement en euro.
     */
    public function getPaiementEnEuro(): ?bool {
        return $this->paiementEnEuro;
    }

    /**
     * Get the paternite.
     *
     * @return bool|null Returns the paternite.
     */
    public function getPaternite(): ?bool {
        return $this->paternite;
    }

    /**
     * Get the periode au.
     *
     * @return DateTime|null Returns the periode au.
     */
    public function getPeriodeAu(): ?DateTime {
        return $this->periodeAu;
    }

    /**
     * Get the periode du.
     *
     * @return DateTime|null Returns the periode du.
     */
    public function getPeriodeDu(): ?DateTime {
        return $this->periodeDu;
    }

    /**
     * Get the periode subr au.
     *
     * @return DateTime|null Returns the periode subr au.
     */
    public function getPeriodeSubrAu(): ?DateTime {
        return $this->periodeSubrAu;
    }

    /**
     * Get the periode subr du.
     *
     * @return DateTime|null Returns the periode subr du.
     */
    public function getPeriodeSubrDu(): ?DateTime {
        return $this->periodeSubrDu;
    }

    /**
     * Get the plusde200h.
     *
     * @return bool|null Returns the plusde200h.
     */
    public function getPlusde200h(): ?bool {
        return $this->plusde200h;
    }

    /**
     * Get the plusde800h.
     *
     * @return bool|null Returns the plusde800h.
     */
    public function getPlusde800h(): ?bool {
        return $this->plusde800h;
    }

    /**
     * Get the prenom employe.
     *
     * @return string|null Returns the prenom employe.
     */
    public function getPrenomEmploye(): ?string {
        return $this->prenomEmploye;
    }

    /**
     * Get the rectificative.
     *
     * @return bool|null Returns the rectificative.
     */
    public function getRectificative(): ?bool {
        return $this->rectificative;
    }

    /**
     * Get the reprise.
     *
     * @return DateTime|null Returns the reprise.
     */
    public function getReprise(): ?DateTime {
        return $this->reprise;
    }

    /**
     * Get the reprise motif med.
     *
     * @return bool|null Returns the reprise motif med.
     */
    public function getRepriseMotifMed(): ?bool {
        return $this->repriseMotifMed;
    }

    /**
     * Get the reprise raison pers.
     *
     * @return bool|null Returns the reprise raison pers.
     */
    public function getRepriseRaisonPers(): ?bool {
        return $this->repriseRaisonPers;
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
     * Get the signature qualite.
     *
     * @return string|null Returns the signature qualite.
     */
    public function getSignatureQualite(): ?string {
        return $this->signatureQualite;
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
     * Get the situation.
     *
     * @return string|null Returns the situation.
     */
    public function getSituation(): ?string {
        return $this->situation;
    }

    /**
     * Get the subrogation constantes.
     *
     * @return bool|null Returns the subrogation constantes.
     */
    public function getSubrogationConstantes(): ?bool {
        return $this->subrogationConstantes;
    }

    /**
     * Get the subrogation montant.
     *
     * @return float|null Returns the subrogation montant.
     */
    public function getSubrogationMontant(): ?float {
        return $this->subrogationMontant;
    }

    /**
     * Get the subrogation partielle.
     *
     * @return bool|null Returns the subrogation partielle.
     */
    public function getSubrogationPartielle(): ?bool {
        return $this->subrogationPartielle;
    }

    /**
     * Get the suspension date.
     *
     * @return DateTime|null Returns the suspension date.
     */
    public function getSuspensionDate(): ?DateTime {
        return $this->suspensionDate;
    }

    /**
     * Get the suspension motif.
     *
     * @return string|null Returns the suspension motif.
     */
    public function getSuspensionMotif(): ?string {
        return $this->suspensionMotif;
    }

    /**
     * Get the travail temp.
     *
     * @return bool|null Returns the travail temp.
     */
    public function getTravailTemp(): ?bool {
        return $this->travailTemp;
    }

    /**
     * Get the type attestation.
     *
     * @return string|null Returns the type attestation.
     */
    public function getTypeAttestation(): ?string {
        return $this->typeAttestation;
    }

    /**
     * Set the adresse1.
     *
     * @param string|null $adresse1 The adresse1.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setAdresse1(?string $adresse1): AttestationIjss {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string|null $adresse2 The adresse2.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setAdresse2(?string $adresse2): AttestationIjss {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string|null $adresse3 The adresse3.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setAdresse3(?string $adresse3): AttestationIjss {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the cas general.
     *
     * @param bool|null $casGeneral The cas general.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCasGeneral(?bool $casGeneral): AttestationIjss {
        $this->casGeneral = $casGeneral;
        return $this;
    }

    /**
     * Set the cas particulier.
     *
     * @param bool|null $casParticulier The cas particulier.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCasParticulier(?bool $casParticulier): AttestationIjss {
        $this->casParticulier = $casParticulier;
        return $this;
    }

    /**
     * Set the categorie sal.
     *
     * @param string|null $categorieSal The categorie sal.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCategorieSal(?string $categorieSal): AttestationIjss {
        $this->categorieSal = $categorieSal;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCodeEtablissement(?int $codeEtablissement): AttestationIjss {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date debut paternite.
     *
     * @param DateTime|null $dateDebutPaternite The date debut paternite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateDebutPaternite(?DateTime $dateDebutPaternite): AttestationIjss {
        $this->dateDebutPaternite = $dateDebutPaternite;
        return $this;
    }

    /**
     * Set the date dern j mens.
     *
     * @param DateTime|null $dateDernJMens The date dern j mens.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateDernJMens(?DateTime $dateDernJMens): AttestationIjss {
        $this->dateDernJMens = $dateDernJMens;
        return $this;
    }

    /**
     * Set the date naissance employe.
     *
     * @param DateTime|null $dateNaissanceEmploye The date naissance employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateNaissanceEmploye(?DateTime $dateNaissanceEmploye): AttestationIjss {
        $this->dateNaissanceEmploye = $dateNaissanceEmploye;
        return $this;
    }

    /**
     * Set the date naissance enfant.
     *
     * @param DateTime|null $dateNaissanceEnfant The date naissance enfant.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateNaissanceEnfant(?DateTime $dateNaissanceEnfant): AttestationIjss {
        $this->dateNaissanceEnfant = $dateNaissanceEnfant;
        return $this;
    }

    /**
     * Set the dern j.
     *
     * @param DateTime|null $dernJ The dern j.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDernJ(?DateTime $dernJ): AttestationIjss {
        $this->dernJ = $dernJ;
        return $this;
    }

    /**
     * Set the dispense travail.
     *
     * @param bool|null $dispenseTravail The dispense travail.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDispenseTravail(?bool $dispenseTravail): AttestationIjss {
        $this->dispenseTravail = $dispenseTravail;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEmploi(?string $emploi): AttestationIjss {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string|null $etblAdresse1 The etbl adresse1.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblAdresse1(?string $etblAdresse1): AttestationIjss {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string|null $etblAdresse2 The etbl adresse2.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblAdresse2(?string $etblAdresse2): AttestationIjss {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string|null $etblAdresse3 The etbl adresse3.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblAdresse3(?string $etblAdresse3): AttestationIjss {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string|null $etblRaisonSociale The etbl raison sociale.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblRaisonSociale(?string $etblRaisonSociale): AttestationIjss {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblTel(?string $etblTel): AttestationIjss {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setIban(?string $iban): AttestationIjss {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the intitule compte.
     *
     * @param string|null $intituleCompte The intitule compte.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setIntituleCompte(?string $intituleCompte): AttestationIjss {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setLienDocument(?string $lienDocument): AttestationIjss {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the maladie.
     *
     * @param bool|null $maladie The maladie.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMaladie(?bool $maladie): AttestationIjss {
        $this->maladie = $maladie;
        return $this;
    }

    /**
     * Set the maternite.
     *
     * @param bool|null $maternite The maternite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMaternite(?bool $maternite): AttestationIjss {
        $this->maternite = $maternite;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string|null $matricule The matricule.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMatricule(?string $matricule): AttestationIjss {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the montant general.
     *
     * @param float|null $montantGeneral The montant general.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMontantGeneral(?float $montantGeneral): AttestationIjss {
        $this->montantGeneral = $montantGeneral;
        return $this;
    }

    /**
     * Set the montant particulier.
     *
     * @param float|null $montantParticulier The montant particulier.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMontantParticulier(?float $montantParticulier): AttestationIjss {
        $this->montantParticulier = $montantParticulier;
        return $this;
    }

    /**
     * Set the mt cg euro ou franc.
     *
     * @param string|null $mtCgEuroOuFranc The mt cg euro ou franc.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtCgEuroOuFranc(?string $mtCgEuroOuFranc): AttestationIjss {
        $this->mtCgEuroOuFranc = $mtCgEuroOuFranc;
        return $this;
    }

    /**
     * Set the mt cp euro ou franc.
     *
     * @param string|null $mtCpEuroOuFranc The mt cp euro ou franc.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtCpEuroOuFranc(?string $mtCpEuroOuFranc): AttestationIjss {
        $this->mtCpEuroOuFranc = $mtCpEuroOuFranc;
        return $this;
    }

    /**
     * Set the mt sal brut moins150 h.
     *
     * @param float|null $mtSalBrutMoins150H The mt sal brut moins150 h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtSalBrutMoins150H(?float $mtSalBrutMoins150H): AttestationIjss {
        $this->mtSalBrutMoins150H = $mtSalBrutMoins150H;
        return $this;
    }

    /**
     * Set the mt sal brut moins600 h.
     *
     * @param float|null $mtSalBrutMoins600H The mt sal brut moins600 h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtSalBrutMoins600H(?float $mtSalBrutMoins600H): AttestationIjss {
        $this->mtSalBrutMoins600H = $mtSalBrutMoins600H;
        return $this;
    }

    /**
     * Set the nb enfants a charge.
     *
     * @param string|null $nbEnfantsACharge The nb enfants a charge.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNbEnfantsACharge(?string $nbEnfantsACharge): AttestationIjss {
        $this->nbEnfantsACharge = $nbEnfantsACharge;
        return $this;
    }

    /**
     * Set the nb h cas part.
     *
     * @param float|null $nbHCasPart The nb h cas part.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNbHCasPart(?float $nbHCasPart): AttestationIjss {
        $this->nbHCasPart = $nbHCasPart;
        return $this;
    }

    /**
     * Set the nb h general.
     *
     * @param float|null $nbHGeneral The nb h general.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNbHGeneral(?float $nbHGeneral): AttestationIjss {
        $this->nbHGeneral = $nbHGeneral;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNir(?string $nir): AttestationIjss {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNomEmploye(?string $nomEmploye): AttestationIjss {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNomMarital(?string $nomMarital): AttestationIjss {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the non repris.
     *
     * @param bool|null $nonRepris The non repris.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNonRepris(?bool $nonRepris): AttestationIjss {
        $this->nonRepris = $nonRepris;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNumeroAttestation(?string $numeroAttestation): AttestationIjss {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AttestationIjss {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setOrganisme(?string $organisme): AttestationIjss {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the paiement en euro.
     *
     * @param bool|null $paiementEnEuro The paiement en euro.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPaiementEnEuro(?bool $paiementEnEuro): AttestationIjss {
        $this->paiementEnEuro = $paiementEnEuro;
        return $this;
    }

    /**
     * Set the paternite.
     *
     * @param bool|null $paternite The paternite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPaternite(?bool $paternite): AttestationIjss {
        $this->paternite = $paternite;
        return $this;
    }

    /**
     * Set the periode au.
     *
     * @param DateTime|null $periodeAu The periode au.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeAu(?DateTime $periodeAu): AttestationIjss {
        $this->periodeAu = $periodeAu;
        return $this;
    }

    /**
     * Set the periode du.
     *
     * @param DateTime|null $periodeDu The periode du.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeDu(?DateTime $periodeDu): AttestationIjss {
        $this->periodeDu = $periodeDu;
        return $this;
    }

    /**
     * Set the periode subr au.
     *
     * @param DateTime|null $periodeSubrAu The periode subr au.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeSubrAu(?DateTime $periodeSubrAu): AttestationIjss {
        $this->periodeSubrAu = $periodeSubrAu;
        return $this;
    }

    /**
     * Set the periode subr du.
     *
     * @param DateTime|null $periodeSubrDu The periode subr du.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeSubrDu(?DateTime $periodeSubrDu): AttestationIjss {
        $this->periodeSubrDu = $periodeSubrDu;
        return $this;
    }

    /**
     * Set the plusde200h.
     *
     * @param bool|null $plusde200h The plusde200h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPlusde200h(?bool $plusde200h): AttestationIjss {
        $this->plusde200h = $plusde200h;
        return $this;
    }

    /**
     * Set the plusde800h.
     *
     * @param bool|null $plusde800h The plusde800h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPlusde800h(?bool $plusde800h): AttestationIjss {
        $this->plusde800h = $plusde800h;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string|null $prenomEmploye The prenom employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPrenomEmploye(?string $prenomEmploye): AttestationIjss {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the rectificative.
     *
     * @param bool|null $rectificative The rectificative.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setRectificative(?bool $rectificative): AttestationIjss {
        $this->rectificative = $rectificative;
        return $this;
    }

    /**
     * Set the reprise.
     *
     * @param DateTime|null $reprise The reprise.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setReprise(?DateTime $reprise): AttestationIjss {
        $this->reprise = $reprise;
        return $this;
    }

    /**
     * Set the reprise motif med.
     *
     * @param bool|null $repriseMotifMed The reprise motif med.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setRepriseMotifMed(?bool $repriseMotifMed): AttestationIjss {
        $this->repriseMotifMed = $repriseMotifMed;
        return $this;
    }

    /**
     * Set the reprise raison pers.
     *
     * @param bool|null $repriseRaisonPers The reprise raison pers.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setRepriseRaisonPers(?bool $repriseRaisonPers): AttestationIjss {
        $this->repriseRaisonPers = $repriseRaisonPers;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureDate(?DateTime $signatureDate): AttestationIjss {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string|null $signatureNom The signature nom.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureNom(?string $signatureNom): AttestationIjss {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string|null $signatureQualite The signature qualite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureQualite(?string $signatureQualite): AttestationIjss {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string|null $signatureVille The signature ville.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureVille(?string $signatureVille): AttestationIjss {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSiret(?string $siret): AttestationIjss {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the situation.
     *
     * @param string|null $situation The situation.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSituation(?string $situation): AttestationIjss {
        $this->situation = $situation;
        return $this;
    }

    /**
     * Set the subrogation constantes.
     *
     * @param bool|null $subrogationConstantes The subrogation constantes.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSubrogationConstantes(?bool $subrogationConstantes): AttestationIjss {
        $this->subrogationConstantes = $subrogationConstantes;
        return $this;
    }

    /**
     * Set the subrogation montant.
     *
     * @param float|null $subrogationMontant The subrogation montant.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSubrogationMontant(?float $subrogationMontant): AttestationIjss {
        $this->subrogationMontant = $subrogationMontant;
        return $this;
    }

    /**
     * Set the subrogation partielle.
     *
     * @param bool|null $subrogationPartielle The subrogation partielle.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSubrogationPartielle(?bool $subrogationPartielle): AttestationIjss {
        $this->subrogationPartielle = $subrogationPartielle;
        return $this;
    }

    /**
     * Set the suspension date.
     *
     * @param DateTime|null $suspensionDate The suspension date.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSuspensionDate(?DateTime $suspensionDate): AttestationIjss {
        $this->suspensionDate = $suspensionDate;
        return $this;
    }

    /**
     * Set the suspension motif.
     *
     * @param string|null $suspensionMotif The suspension motif.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSuspensionMotif(?string $suspensionMotif): AttestationIjss {
        $this->suspensionMotif = $suspensionMotif;
        return $this;
    }

    /**
     * Set the travail temp.
     *
     * @param bool|null $travailTemp The travail temp.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setTravailTemp(?bool $travailTemp): AttestationIjss {
        $this->travailTemp = $travailTemp;
        return $this;
    }

    /**
     * Set the type attestation.
     *
     * @param string|null $typeAttestation The type attestation.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setTypeAttestation(?string $typeAttestation): AttestationIjss {
        $this->typeAttestation = $typeAttestation;
        return $this;
    }
}
