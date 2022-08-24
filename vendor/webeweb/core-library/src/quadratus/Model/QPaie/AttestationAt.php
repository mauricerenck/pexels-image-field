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
 * Attestation at.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AttestationAt {

    /**
     * Accident.
     *
     * @var bool|null
     */
    private $accident;

    /**
     * Accident mois embauche.
     *
     * @var bool|null
     */
    private $accidentMoisEmbauche;

    /**
     * Adresse1.
     *
     * @var string|null
     */
    private $adresse1;

    /**
     * Adresse3.
     *
     * @var string|null
     */
    private $adresse3;

    /**
     * Anciennete.
     *
     * @var string|null
     */
    private $anciennete;

    /**
     * Autre vivtime.
     *
     * @var bool|null
     */
    private $autreVivtime;

    /**
     * Cas part.
     *
     * @var string|null
     */
    private $casPart;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Date accident.
     *
     * @var DateTime|null
     */
    private $dateAccident;

    /**
     * Date contrat.
     *
     * @var DateTime|null
     */
    private $dateContrat;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Dern heure.
     *
     * @var DateTime|null
     */
    private $dernHeure;

    /**
     * Dern j.
     *
     * @var DateTime|null
     */
    private $dernJ;

    /**
     * Embauche.
     *
     * @var DateTime|null
     */
    private $embauche;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Etbl a adresse1.
     *
     * @var string|null
     */
    private $etblAAdresse1;

    /**
     * Etbl a adresse2.
     *
     * @var string|null
     */
    private $etblAAdresse2;

    /**
     * Etbl a adresse3.
     *
     * @var string|null
     */
    private $etblAAdresse3;

    /**
     * Etbl a tel.
     *
     * @var string|null
     */
    private $etblATel;

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
     * Etbl nature activite.
     *
     * @var string|null
     */
    private $etblNatureActivite;

    /**
     * Etbl no adherent.
     *
     * @var string|null
     */
    private $etblNoAdherent;

    /**
     * Etbl nom prenom.
     *
     * @var string|null
     */
    private $etblNomPrenom;

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
     * Integral.
     *
     * @var bool|null
     */
    private $integral;

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
     * Lieu naissance.
     *
     * @var string|null
     */
    private $lieuNaissance;

    /**
     * Maintien.
     *
     * @var bool|null
     */
    private $maintien;

    /**
     * Maladie pro.
     *
     * @var bool|null
     */
    private $maladiePro;

    /**
     * Medecin.
     *
     * @var string|null
     */
    private $medecin;

    /**
     * Montant cotis theo.
     *
     * @var float|null
     */
    private $montantCotisTheo;

    /**
     * Montant sal theo.
     *
     * @var float|null
     */
    private $montantSalTheo;

    /**
     * Nationalite autre.
     *
     * @var bool|null
     */
    private $nationaliteAutre;

    /**
     * Nationalite cee.
     *
     * @var bool|null
     */
    private $nationaliteCee;

    /**
     * Nationalite fr.
     *
     * @var bool|null
     */
    private $nationaliteFr;

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
     * Num contrat.
     *
     * @var string|null
     */
    private $numContrat;

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
     * Partiel.
     *
     * @var bool|null
     */
    private $partiel;

    /**
     * Per reference au.
     *
     * @var DateTime|null
     */
    private $perReferenceAu;

    /**
     * Per reference cotisations.
     *
     * @var float|null
     */
    private $perReferenceCotisations;

    /**
     * Per reference du.
     *
     * @var DateTime|null
     */
    private $perReferenceDu;

    /**
     * Per reference montant.
     *
     * @var float|null
     */
    private $perReferenceMontant;

    /**
     * Per reference nb heures.
     *
     * @var float|null
     */
    private $perReferenceNbHeures;

    /**
     * Per reference salaires.
     *
     * @var float|null
     */
    private $perReferenceSalaires;

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
     * Prenom employe.
     *
     * @var string|null
     */
    private $prenomEmploye;

    /**
     * Qualification.
     *
     * @var string|null
     */
    private $qualification;

    /**
     * Reprise.
     *
     * @var DateTime|null
     */
    private $reprise;

    /**
     * Risque at.
     *
     * @var string|null
     */
    private $risqueAt;

    /**
     * Salaire mini.
     *
     * @var float|null
     */
    private $salaireMini;

    /**
     * Sexe.
     *
     * @var string|null
     */
    private $sexe;

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
     * Sub integral.
     *
     * @var bool|null
     */
    private $subIntegral;

    /**
     * Sub partiel.
     *
     * @var bool|null
     */
    private $subPartiel;

    /**
     * Subrogation duree max.
     *
     * @var string|null
     */
    private $subrogationDureeMax;

    /**
     * Subrogation montant.
     *
     * @var float|null
     */
    private $subrogationMontant;

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
     * Get the accident.
     *
     * @return bool|null Returns the accident.
     */
    public function getAccident(): ?bool {
        return $this->accident;
    }

    /**
     * Get the accident mois embauche.
     *
     * @return bool|null Returns the accident mois embauche.
     */
    public function getAccidentMoisEmbauche(): ?bool {
        return $this->accidentMoisEmbauche;
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
     * Get the adresse3.
     *
     * @return string|null Returns the adresse3.
     */
    public function getAdresse3(): ?string {
        return $this->adresse3;
    }

    /**
     * Get the anciennete.
     *
     * @return string|null Returns the anciennete.
     */
    public function getAnciennete(): ?string {
        return $this->anciennete;
    }

    /**
     * Get the autre vivtime.
     *
     * @return bool|null Returns the autre vivtime.
     */
    public function getAutreVivtime(): ?bool {
        return $this->autreVivtime;
    }

    /**
     * Get the cas part.
     *
     * @return string|null Returns the cas part.
     */
    public function getCasPart(): ?string {
        return $this->casPart;
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
     * Get the date accident.
     *
     * @return DateTime|null Returns the date accident.
     */
    public function getDateAccident(): ?DateTime {
        return $this->dateAccident;
    }

    /**
     * Get the date contrat.
     *
     * @return DateTime|null Returns the date contrat.
     */
    public function getDateContrat(): ?DateTime {
        return $this->dateContrat;
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
     * Get the dern heure.
     *
     * @return DateTime|null Returns the dern heure.
     */
    public function getDernHeure(): ?DateTime {
        return $this->dernHeure;
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
     * Get the embauche.
     *
     * @return DateTime|null Returns the embauche.
     */
    public function getEmbauche(): ?DateTime {
        return $this->embauche;
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
     * Get the etbl a adresse1.
     *
     * @return string|null Returns the etbl a adresse1.
     */
    public function getEtblAAdresse1(): ?string {
        return $this->etblAAdresse1;
    }

    /**
     * Get the etbl a adresse2.
     *
     * @return string|null Returns the etbl a adresse2.
     */
    public function getEtblAAdresse2(): ?string {
        return $this->etblAAdresse2;
    }

    /**
     * Get the etbl a adresse3.
     *
     * @return string|null Returns the etbl a adresse3.
     */
    public function getEtblAAdresse3(): ?string {
        return $this->etblAAdresse3;
    }

    /**
     * Get the etbl a tel.
     *
     * @return string|null Returns the etbl a tel.
     */
    public function getEtblATel(): ?string {
        return $this->etblATel;
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
     * Get the etbl nature activite.
     *
     * @return string|null Returns the etbl nature activite.
     */
    public function getEtblNatureActivite(): ?string {
        return $this->etblNatureActivite;
    }

    /**
     * Get the etbl no adherent.
     *
     * @return string|null Returns the etbl no adherent.
     */
    public function getEtblNoAdherent(): ?string {
        return $this->etblNoAdherent;
    }

    /**
     * Get the etbl nom prenom.
     *
     * @return string|null Returns the etbl nom prenom.
     */
    public function getEtblNomPrenom(): ?string {
        return $this->etblNomPrenom;
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
     * Get the integral.
     *
     * @return bool|null Returns the integral.
     */
    public function getIntegral(): ?bool {
        return $this->integral;
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
     * Get the lieu naissance.
     *
     * @return string|null Returns the lieu naissance.
     */
    public function getLieuNaissance(): ?string {
        return $this->lieuNaissance;
    }

    /**
     * Get the maintien.
     *
     * @return bool|null Returns the maintien.
     */
    public function getMaintien(): ?bool {
        return $this->maintien;
    }

    /**
     * Get the maladie pro.
     *
     * @return bool|null Returns the maladie pro.
     */
    public function getMaladiePro(): ?bool {
        return $this->maladiePro;
    }

    /**
     * Get the medecin.
     *
     * @return string|null Returns the medecin.
     */
    public function getMedecin(): ?string {
        return $this->medecin;
    }

    /**
     * Get the montant cotis theo.
     *
     * @return float|null Returns the montant cotis theo.
     */
    public function getMontantCotisTheo(): ?float {
        return $this->montantCotisTheo;
    }

    /**
     * Get the montant sal theo.
     *
     * @return float|null Returns the montant sal theo.
     */
    public function getMontantSalTheo(): ?float {
        return $this->montantSalTheo;
    }

    /**
     * Get the nationalite autre.
     *
     * @return bool|null Returns the nationalite autre.
     */
    public function getNationaliteAutre(): ?bool {
        return $this->nationaliteAutre;
    }

    /**
     * Get the nationalite cee.
     *
     * @return bool|null Returns the nationalite cee.
     */
    public function getNationaliteCee(): ?bool {
        return $this->nationaliteCee;
    }

    /**
     * Get the nationalite fr.
     *
     * @return bool|null Returns the nationalite fr.
     */
    public function getNationaliteFr(): ?bool {
        return $this->nationaliteFr;
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
     * Get the num contrat.
     *
     * @return string|null Returns the num contrat.
     */
    public function getNumContrat(): ?string {
        return $this->numContrat;
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
     * Get the partiel.
     *
     * @return bool|null Returns the partiel.
     */
    public function getPartiel(): ?bool {
        return $this->partiel;
    }

    /**
     * Get the per reference au.
     *
     * @return DateTime|null Returns the per reference au.
     */
    public function getPerReferenceAu(): ?DateTime {
        return $this->perReferenceAu;
    }

    /**
     * Get the per reference cotisations.
     *
     * @return float|null Returns the per reference cotisations.
     */
    public function getPerReferenceCotisations(): ?float {
        return $this->perReferenceCotisations;
    }

    /**
     * Get the per reference du.
     *
     * @return DateTime|null Returns the per reference du.
     */
    public function getPerReferenceDu(): ?DateTime {
        return $this->perReferenceDu;
    }

    /**
     * Get the per reference montant.
     *
     * @return float|null Returns the per reference montant.
     */
    public function getPerReferenceMontant(): ?float {
        return $this->perReferenceMontant;
    }

    /**
     * Get the per reference nb heures.
     *
     * @return float|null Returns the per reference nb heures.
     */
    public function getPerReferenceNbHeures(): ?float {
        return $this->perReferenceNbHeures;
    }

    /**
     * Get the per reference salaires.
     *
     * @return float|null Returns the per reference salaires.
     */
    public function getPerReferenceSalaires(): ?float {
        return $this->perReferenceSalaires;
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
     * Get the prenom employe.
     *
     * @return string|null Returns the prenom employe.
     */
    public function getPrenomEmploye(): ?string {
        return $this->prenomEmploye;
    }

    /**
     * Get the qualification.
     *
     * @return string|null Returns the qualification.
     */
    public function getQualification(): ?string {
        return $this->qualification;
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
     * Get the risque at.
     *
     * @return string|null Returns the risque at.
     */
    public function getRisqueAt(): ?string {
        return $this->risqueAt;
    }

    /**
     * Get the salaire mini.
     *
     * @return float|null Returns the salaire mini.
     */
    public function getSalaireMini(): ?float {
        return $this->salaireMini;
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
     * Get the sub integral.
     *
     * @return bool|null Returns the sub integral.
     */
    public function getSubIntegral(): ?bool {
        return $this->subIntegral;
    }

    /**
     * Get the sub partiel.
     *
     * @return bool|null Returns the sub partiel.
     */
    public function getSubPartiel(): ?bool {
        return $this->subPartiel;
    }

    /**
     * Get the subrogation duree max.
     *
     * @return string|null Returns the subrogation duree max.
     */
    public function getSubrogationDureeMax(): ?string {
        return $this->subrogationDureeMax;
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
     * Get the type attestation.
     *
     * @return string|null Returns the type attestation.
     */
    public function getTypeAttestation(): ?string {
        return $this->typeAttestation;
    }

    /**
     * Set the accident.
     *
     * @param bool|null $accident The accident.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setAccident(?bool $accident): AttestationAt {
        $this->accident = $accident;
        return $this;
    }

    /**
     * Set the accident mois embauche.
     *
     * @param bool|null $accidentMoisEmbauche The accident mois embauche.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setAccidentMoisEmbauche(?bool $accidentMoisEmbauche): AttestationAt {
        $this->accidentMoisEmbauche = $accidentMoisEmbauche;
        return $this;
    }

    /**
     * Set the adresse1.
     *
     * @param string|null $adresse1 The adresse1.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setAdresse1(?string $adresse1): AttestationAt {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string|null $adresse3 The adresse3.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setAdresse3(?string $adresse3): AttestationAt {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the anciennete.
     *
     * @param string|null $anciennete The anciennete.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setAnciennete(?string $anciennete): AttestationAt {
        $this->anciennete = $anciennete;
        return $this;
    }

    /**
     * Set the autre vivtime.
     *
     * @param bool|null $autreVivtime The autre vivtime.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setAutreVivtime(?bool $autreVivtime): AttestationAt {
        $this->autreVivtime = $autreVivtime;
        return $this;
    }

    /**
     * Set the cas part.
     *
     * @param string|null $casPart The cas part.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setCasPart(?string $casPart): AttestationAt {
        $this->casPart = $casPart;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setCodeEtablissement(?int $codeEtablissement): AttestationAt {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date accident.
     *
     * @param DateTime|null $dateAccident The date accident.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setDateAccident(?DateTime $dateAccident): AttestationAt {
        $this->dateAccident = $dateAccident;
        return $this;
    }

    /**
     * Set the date contrat.
     *
     * @param DateTime|null $dateContrat The date contrat.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setDateContrat(?DateTime $dateContrat): AttestationAt {
        $this->dateContrat = $dateContrat;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setDateNaissance(?DateTime $dateNaissance): AttestationAt {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the dern heure.
     *
     * @param DateTime|null $dernHeure The dern heure.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setDernHeure(?DateTime $dernHeure): AttestationAt {
        $this->dernHeure = $dernHeure;
        return $this;
    }

    /**
     * Set the dern j.
     *
     * @param DateTime|null $dernJ The dern j.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setDernJ(?DateTime $dernJ): AttestationAt {
        $this->dernJ = $dernJ;
        return $this;
    }

    /**
     * Set the embauche.
     *
     * @param DateTime|null $embauche The embauche.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEmbauche(?DateTime $embauche): AttestationAt {
        $this->embauche = $embauche;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEmploi(?string $emploi): AttestationAt {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl a adresse1.
     *
     * @param string|null $etblAAdresse1 The etbl a adresse1.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblAAdresse1(?string $etblAAdresse1): AttestationAt {
        $this->etblAAdresse1 = $etblAAdresse1;
        return $this;
    }

    /**
     * Set the etbl a adresse2.
     *
     * @param string|null $etblAAdresse2 The etbl a adresse2.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblAAdresse2(?string $etblAAdresse2): AttestationAt {
        $this->etblAAdresse2 = $etblAAdresse2;
        return $this;
    }

    /**
     * Set the etbl a adresse3.
     *
     * @param string|null $etblAAdresse3 The etbl a adresse3.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblAAdresse3(?string $etblAAdresse3): AttestationAt {
        $this->etblAAdresse3 = $etblAAdresse3;
        return $this;
    }

    /**
     * Set the etbl a tel.
     *
     * @param string|null $etblATel The etbl a tel.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblATel(?string $etblATel): AttestationAt {
        $this->etblATel = $etblATel;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string|null $etblAdresse1 The etbl adresse1.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblAdresse1(?string $etblAdresse1): AttestationAt {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string|null $etblAdresse2 The etbl adresse2.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblAdresse2(?string $etblAdresse2): AttestationAt {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string|null $etblAdresse3 The etbl adresse3.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblAdresse3(?string $etblAdresse3): AttestationAt {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }

    /**
     * Set the etbl nature activite.
     *
     * @param string|null $etblNatureActivite The etbl nature activite.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblNatureActivite(?string $etblNatureActivite): AttestationAt {
        $this->etblNatureActivite = $etblNatureActivite;
        return $this;
    }

    /**
     * Set the etbl no adherent.
     *
     * @param string|null $etblNoAdherent The etbl no adherent.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblNoAdherent(?string $etblNoAdherent): AttestationAt {
        $this->etblNoAdherent = $etblNoAdherent;
        return $this;
    }

    /**
     * Set the etbl nom prenom.
     *
     * @param string|null $etblNomPrenom The etbl nom prenom.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblNomPrenom(?string $etblNomPrenom): AttestationAt {
        $this->etblNomPrenom = $etblNomPrenom;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string|null $etblRaisonSociale The etbl raison sociale.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblRaisonSociale(?string $etblRaisonSociale): AttestationAt {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setEtblTel(?string $etblTel): AttestationAt {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setIban(?string $iban): AttestationAt {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the integral.
     *
     * @param bool|null $integral The integral.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setIntegral(?bool $integral): AttestationAt {
        $this->integral = $integral;
        return $this;
    }

    /**
     * Set the intitule compte.
     *
     * @param string|null $intituleCompte The intitule compte.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setIntituleCompte(?string $intituleCompte): AttestationAt {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setLienDocument(?string $lienDocument): AttestationAt {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lieu naissance.
     *
     * @param string|null $lieuNaissance The lieu naissance.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setLieuNaissance(?string $lieuNaissance): AttestationAt {
        $this->lieuNaissance = $lieuNaissance;
        return $this;
    }

    /**
     * Set the maintien.
     *
     * @param bool|null $maintien The maintien.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setMaintien(?bool $maintien): AttestationAt {
        $this->maintien = $maintien;
        return $this;
    }

    /**
     * Set the maladie pro.
     *
     * @param bool|null $maladiePro The maladie pro.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setMaladiePro(?bool $maladiePro): AttestationAt {
        $this->maladiePro = $maladiePro;
        return $this;
    }

    /**
     * Set the medecin.
     *
     * @param string|null $medecin The medecin.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setMedecin(?string $medecin): AttestationAt {
        $this->medecin = $medecin;
        return $this;
    }

    /**
     * Set the montant cotis theo.
     *
     * @param float|null $montantCotisTheo The montant cotis theo.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setMontantCotisTheo(?float $montantCotisTheo): AttestationAt {
        $this->montantCotisTheo = $montantCotisTheo;
        return $this;
    }

    /**
     * Set the montant sal theo.
     *
     * @param float|null $montantSalTheo The montant sal theo.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setMontantSalTheo(?float $montantSalTheo): AttestationAt {
        $this->montantSalTheo = $montantSalTheo;
        return $this;
    }

    /**
     * Set the nationalite autre.
     *
     * @param bool|null $nationaliteAutre The nationalite autre.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNationaliteAutre(?bool $nationaliteAutre): AttestationAt {
        $this->nationaliteAutre = $nationaliteAutre;
        return $this;
    }

    /**
     * Set the nationalite cee.
     *
     * @param bool|null $nationaliteCee The nationalite cee.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNationaliteCee(?bool $nationaliteCee): AttestationAt {
        $this->nationaliteCee = $nationaliteCee;
        return $this;
    }

    /**
     * Set the nationalite fr.
     *
     * @param bool|null $nationaliteFr The nationalite fr.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNationaliteFr(?bool $nationaliteFr): AttestationAt {
        $this->nationaliteFr = $nationaliteFr;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNir(?string $nir): AttestationAt {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNomEmploye(?string $nomEmploye): AttestationAt {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNomMarital(?string $nomMarital): AttestationAt {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the non repris.
     *
     * @param bool|null $nonRepris The non repris.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNonRepris(?bool $nonRepris): AttestationAt {
        $this->nonRepris = $nonRepris;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string|null $numContrat The num contrat.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNumContrat(?string $numContrat): AttestationAt {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNumeroAttestation(?string $numeroAttestation): AttestationAt {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AttestationAt {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the partiel.
     *
     * @param bool|null $partiel The partiel.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPartiel(?bool $partiel): AttestationAt {
        $this->partiel = $partiel;
        return $this;
    }

    /**
     * Set the per reference au.
     *
     * @param DateTime|null $perReferenceAu The per reference au.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPerReferenceAu(?DateTime $perReferenceAu): AttestationAt {
        $this->perReferenceAu = $perReferenceAu;
        return $this;
    }

    /**
     * Set the per reference cotisations.
     *
     * @param float|null $perReferenceCotisations The per reference cotisations.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPerReferenceCotisations(?float $perReferenceCotisations): AttestationAt {
        $this->perReferenceCotisations = $perReferenceCotisations;
        return $this;
    }

    /**
     * Set the per reference du.
     *
     * @param DateTime|null $perReferenceDu The per reference du.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPerReferenceDu(?DateTime $perReferenceDu): AttestationAt {
        $this->perReferenceDu = $perReferenceDu;
        return $this;
    }

    /**
     * Set the per reference montant.
     *
     * @param float|null $perReferenceMontant The per reference montant.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPerReferenceMontant(?float $perReferenceMontant): AttestationAt {
        $this->perReferenceMontant = $perReferenceMontant;
        return $this;
    }

    /**
     * Set the per reference nb heures.
     *
     * @param float|null $perReferenceNbHeures The per reference nb heures.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPerReferenceNbHeures(?float $perReferenceNbHeures): AttestationAt {
        $this->perReferenceNbHeures = $perReferenceNbHeures;
        return $this;
    }

    /**
     * Set the per reference salaires.
     *
     * @param float|null $perReferenceSalaires The per reference salaires.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPerReferenceSalaires(?float $perReferenceSalaires): AttestationAt {
        $this->perReferenceSalaires = $perReferenceSalaires;
        return $this;
    }

    /**
     * Set the periode subr au.
     *
     * @param DateTime|null $periodeSubrAu The periode subr au.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPeriodeSubrAu(?DateTime $periodeSubrAu): AttestationAt {
        $this->periodeSubrAu = $periodeSubrAu;
        return $this;
    }

    /**
     * Set the periode subr du.
     *
     * @param DateTime|null $periodeSubrDu The periode subr du.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPeriodeSubrDu(?DateTime $periodeSubrDu): AttestationAt {
        $this->periodeSubrDu = $periodeSubrDu;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string|null $prenomEmploye The prenom employe.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setPrenomEmploye(?string $prenomEmploye): AttestationAt {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification The qualification.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setQualification(?string $qualification): AttestationAt {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the reprise.
     *
     * @param DateTime|null $reprise The reprise.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setReprise(?DateTime $reprise): AttestationAt {
        $this->reprise = $reprise;
        return $this;
    }

    /**
     * Set the risque at.
     *
     * @param string|null $risqueAt The risque at.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setRisqueAt(?string $risqueAt): AttestationAt {
        $this->risqueAt = $risqueAt;
        return $this;
    }

    /**
     * Set the salaire mini.
     *
     * @param float|null $salaireMini The salaire mini.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSalaireMini(?float $salaireMini): AttestationAt {
        $this->salaireMini = $salaireMini;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSexe(?string $sexe): AttestationAt {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSignatureDate(?DateTime $signatureDate): AttestationAt {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string|null $signatureNom The signature nom.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSignatureNom(?string $signatureNom): AttestationAt {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string|null $signatureQualite The signature qualite.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSignatureQualite(?string $signatureQualite): AttestationAt {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string|null $signatureVille The signature ville.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSignatureVille(?string $signatureVille): AttestationAt {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSiret(?string $siret): AttestationAt {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the sub integral.
     *
     * @param bool|null $subIntegral The sub integral.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSubIntegral(?bool $subIntegral): AttestationAt {
        $this->subIntegral = $subIntegral;
        return $this;
    }

    /**
     * Set the sub partiel.
     *
     * @param bool|null $subPartiel The sub partiel.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSubPartiel(?bool $subPartiel): AttestationAt {
        $this->subPartiel = $subPartiel;
        return $this;
    }

    /**
     * Set the subrogation duree max.
     *
     * @param string|null $subrogationDureeMax The subrogation duree max.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSubrogationDureeMax(?string $subrogationDureeMax): AttestationAt {
        $this->subrogationDureeMax = $subrogationDureeMax;
        return $this;
    }

    /**
     * Set the subrogation montant.
     *
     * @param float|null $subrogationMontant The subrogation montant.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setSubrogationMontant(?float $subrogationMontant): AttestationAt {
        $this->subrogationMontant = $subrogationMontant;
        return $this;
    }

    /**
     * Set the type attestation.
     *
     * @param string|null $typeAttestation The type attestation.
     * @return AttestationAt Returns this Attestation at.
     */
    public function setTypeAttestation(?string $typeAttestation): AttestationAt {
        $this->typeAttestation = $typeAttestation;
        return $this;
    }
}
