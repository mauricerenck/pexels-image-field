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
 * Attestation extras.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AttestationExtras {

    /**
     * Ancien assedic.
     *
     * @var bool|null
     */
    private $ancienAssedic;

    /**
     * Ancien garp.
     *
     * @var bool|null
     */
    private $ancienGarp;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code motif rupture.
     *
     * @var string|null
     */
    private $codeMotifRupture;

    /**
     * Code naf.
     *
     * @var string|null
     */
    private $codeNaf;

    /**
     * Effectif.
     *
     * @var int|null
     */
    private $effectif;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Etbl adresse.
     *
     * @var string|null
     */
    private $etblAdresse;

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
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

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
     * Nom pole emploi.
     *
     * @var string|null
     */
    private $nomPoleEmploi;

    /**
     * Nom regime retraite.
     *
     * @var string|null
     */
    private $nomRegimeRetraite;

    /**
     * Numero affiliation.
     *
     * @var string|null
     */
    private $numeroAffiliation;

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
     * Periode emploi deb.
     *
     * @var DateTime|null
     */
    private $periodeEmploiDeb;

    /**
     * Periode emploi fin.
     *
     * @var DateTime|null
     */
    private $periodeEmploiFin;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ancien assedic.
     *
     * @return bool|null Returns the ancien assedic.
     */
    public function getAncienAssedic(): ?bool {
        return $this->ancienAssedic;
    }

    /**
     * Get the ancien garp.
     *
     * @return bool|null Returns the ancien garp.
     */
    public function getAncienGarp(): ?bool {
        return $this->ancienGarp;
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
     * Get the code motif rupture.
     *
     * @return string|null Returns the code motif rupture.
     */
    public function getCodeMotifRupture(): ?string {
        return $this->codeMotifRupture;
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
     * Get the effectif.
     *
     * @return int|null Returns the effectif.
     */
    public function getEffectif(): ?int {
        return $this->effectif;
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
     * Get the etbl adresse.
     *
     * @return string|null Returns the etbl adresse.
     */
    public function getEtblAdresse(): ?string {
        return $this->etblAdresse;
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
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
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
     * Get the nom pole emploi.
     *
     * @return string|null Returns the nom pole emploi.
     */
    public function getNomPoleEmploi(): ?string {
        return $this->nomPoleEmploi;
    }

    /**
     * Get the nom regime retraite.
     *
     * @return string|null Returns the nom regime retraite.
     */
    public function getNomRegimeRetraite(): ?string {
        return $this->nomRegimeRetraite;
    }

    /**
     * Get the numero affiliation.
     *
     * @return string|null Returns the numero affiliation.
     */
    public function getNumeroAffiliation(): ?string {
        return $this->numeroAffiliation;
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
     * Get the periode emploi deb.
     *
     * @return DateTime|null Returns the periode emploi deb.
     */
    public function getPeriodeEmploiDeb(): ?DateTime {
        return $this->periodeEmploiDeb;
    }

    /**
     * Get the periode emploi fin.
     *
     * @return DateTime|null Returns the periode emploi fin.
     */
    public function getPeriodeEmploiFin(): ?DateTime {
        return $this->periodeEmploiFin;
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
     * Set the ancien assedic.
     *
     * @param bool|null $ancienAssedic The ancien assedic.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setAncienAssedic(?bool $ancienAssedic): AttestationExtras {
        $this->ancienAssedic = $ancienAssedic;
        return $this;
    }

    /**
     * Set the ancien garp.
     *
     * @param bool|null $ancienGarp The ancien garp.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setAncienGarp(?bool $ancienGarp): AttestationExtras {
        $this->ancienGarp = $ancienGarp;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setCodeEtablissement(?int $codeEtablissement): AttestationExtras {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string|null $codeMotifRupture The code motif rupture.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setCodeMotifRupture(?string $codeMotifRupture): AttestationExtras {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string|null $codeNaf The code naf.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setCodeNaf(?string $codeNaf): AttestationExtras {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param int|null $effectif The effectif.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setEffectif(?int $effectif): AttestationExtras {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setEmploi(?string $emploi): AttestationExtras {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse.
     *
     * @param string|null $etblAdresse The etbl adresse.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setEtblAdresse(?string $etblAdresse): AttestationExtras {
        $this->etblAdresse = $etblAdresse;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string|null $etblRaisonSociale The etbl raison sociale.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setEtblRaisonSociale(?string $etblRaisonSociale): AttestationExtras {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setEtblTel(?string $etblTel): AttestationExtras {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setLienDocument(?string $lienDocument): AttestationExtras {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNir(?string $nir): AttestationExtras {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNomEmploye(?string $nomEmploye): AttestationExtras {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom pole emploi.
     *
     * @param string|null $nomPoleEmploi The nom pole emploi.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNomPoleEmploi(?string $nomPoleEmploi): AttestationExtras {
        $this->nomPoleEmploi = $nomPoleEmploi;
        return $this;
    }

    /**
     * Set the nom regime retraite.
     *
     * @param string|null $nomRegimeRetraite The nom regime retraite.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNomRegimeRetraite(?string $nomRegimeRetraite): AttestationExtras {
        $this->nomRegimeRetraite = $nomRegimeRetraite;
        return $this;
    }

    /**
     * Set the numero affiliation.
     *
     * @param string|null $numeroAffiliation The numero affiliation.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNumeroAffiliation(?string $numeroAffiliation): AttestationExtras {
        $this->numeroAffiliation = $numeroAffiliation;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNumeroAttestation(?string $numeroAttestation): AttestationExtras {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AttestationExtras {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode emploi deb.
     *
     * @param DateTime|null $periodeEmploiDeb The periode emploi deb.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setPeriodeEmploiDeb(?DateTime $periodeEmploiDeb): AttestationExtras {
        $this->periodeEmploiDeb = $periodeEmploiDeb;
        return $this;
    }

    /**
     * Set the periode emploi fin.
     *
     * @param DateTime|null $periodeEmploiFin The periode emploi fin.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setPeriodeEmploiFin(?DateTime $periodeEmploiFin): AttestationExtras {
        $this->periodeEmploiFin = $periodeEmploiFin;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setPrenom(?string $prenom): AttestationExtras {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setSignatureDate(?DateTime $signatureDate): AttestationExtras {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string|null $signatureNom The signature nom.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setSignatureNom(?string $signatureNom): AttestationExtras {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string|null $signatureQualite The signature qualite.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setSignatureQualite(?string $signatureQualite): AttestationExtras {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string|null $signatureVille The signature ville.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setSignatureVille(?string $signatureVille): AttestationExtras {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return AttestationExtras Returns this Attestation extras.
     */
    public function setSiret(?string $siret): AttestationExtras {
        $this->siret = $siret;
        return $this;
    }
}
