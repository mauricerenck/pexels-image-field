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
 * Declarations at.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DeclarationsAt {

    /**
     * Adresse.
     *
     * @var string|null
     */
    private $adresse;

    /**
     * Categorie.
     *
     * @var string|null
     */
    private $categorie;

    /**
     * Code etablissement.
     *
     * @var string|null
     */
    private $codeEtablissement;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Commune.
     *
     * @var string|null
     */
    private $commune;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Deduct forfait.
     *
     * @var int|null
     */
    private $deductForfait;

    /**
     * Dt accouchement.
     *
     * @var DateTime|null
     */
    private $dtAccouchement;

    /**
     * Dt deb at.
     *
     * @var DateTime|null
     */
    private $dtDebAt;

    /**
     * Dt deb conges.
     *
     * @var DateTime|null
     */
    private $dtDebConges;

    /**
     * Dt embauche.
     *
     * @var DateTime|null
     */
    private $dtEmbauche;

    /**
     * Dt fin conges.
     *
     * @var DateTime|null
     */
    private $dtFinConges;

    /**
     * Dt fin contrat.
     *
     * @var DateTime|null
     */
    private $dtFinContrat;

    /**
     * Dt fin preavis.
     *
     * @var DateTime|null
     */
    private $dtFinPreavis;

    /**
     * Etbl nom.
     *
     * @var string|null
     */
    private $etblNom;

    /**
     * Etbl responsable.
     *
     * @var string|null
     */
    private $etblResponsable;

    /**
     * Etbl signature.
     *
     * @var string|null
     */
    private $etblSignature;

    /**
     * Etbl siret.
     *
     * @var string|null
     */
    private $etblSiret;

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
     * Memo accident.
     *
     * @var string|null
     */
    private $memoAccident;

    /**
     * Memo correspondance.
     *
     * @var string|null
     */
    private $memoCorrespondance;

    /**
     * Motif at.
     *
     * @var string|null
     */
    private $motifAt;

    /**
     * Mt salaire brut.
     *
     * @var int|null
     */
    private $mtSalaireBrut;

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
     * Num dat.
     *
     * @var string|null
     */
    private $numDat;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Sign date.
     *
     * @var DateTime|null
     */
    private $signDate;

    /**
     * Type dat.
     *
     * @var string|null
     */
    private $typeDat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the categorie.
     *
     * @return string|null Returns the categorie.
     */
    public function getCategorie(): ?string {
        return $this->categorie;
    }

    /**
     * Get the code etablissement.
     *
     * @return string|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?string {
        return $this->codeEtablissement;
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
     * Get the commune.
     *
     * @return string|null Returns the commune.
     */
    public function getCommune(): ?string {
        return $this->commune;
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
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
    }

    /**
     * Get the deduct forfait.
     *
     * @return int|null Returns the deduct forfait.
     */
    public function getDeductForfait(): ?int {
        return $this->deductForfait;
    }

    /**
     * Get the dt accouchement.
     *
     * @return DateTime|null Returns the dt accouchement.
     */
    public function getDtAccouchement(): ?DateTime {
        return $this->dtAccouchement;
    }

    /**
     * Get the dt deb at.
     *
     * @return DateTime|null Returns the dt deb at.
     */
    public function getDtDebAt(): ?DateTime {
        return $this->dtDebAt;
    }

    /**
     * Get the dt deb conges.
     *
     * @return DateTime|null Returns the dt deb conges.
     */
    public function getDtDebConges(): ?DateTime {
        return $this->dtDebConges;
    }

    /**
     * Get the dt embauche.
     *
     * @return DateTime|null Returns the dt embauche.
     */
    public function getDtEmbauche(): ?DateTime {
        return $this->dtEmbauche;
    }

    /**
     * Get the dt fin conges.
     *
     * @return DateTime|null Returns the dt fin conges.
     */
    public function getDtFinConges(): ?DateTime {
        return $this->dtFinConges;
    }

    /**
     * Get the dt fin contrat.
     *
     * @return DateTime|null Returns the dt fin contrat.
     */
    public function getDtFinContrat(): ?DateTime {
        return $this->dtFinContrat;
    }

    /**
     * Get the dt fin preavis.
     *
     * @return DateTime|null Returns the dt fin preavis.
     */
    public function getDtFinPreavis(): ?DateTime {
        return $this->dtFinPreavis;
    }

    /**
     * Get the etbl nom.
     *
     * @return string|null Returns the etbl nom.
     */
    public function getEtblNom(): ?string {
        return $this->etblNom;
    }

    /**
     * Get the etbl responsable.
     *
     * @return string|null Returns the etbl responsable.
     */
    public function getEtblResponsable(): ?string {
        return $this->etblResponsable;
    }

    /**
     * Get the etbl signature.
     *
     * @return string|null Returns the etbl signature.
     */
    public function getEtblSignature(): ?string {
        return $this->etblSignature;
    }

    /**
     * Get the etbl siret.
     *
     * @return string|null Returns the etbl siret.
     */
    public function getEtblSiret(): ?string {
        return $this->etblSiret;
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
     * Get the memo accident.
     *
     * @return string|null Returns the memo accident.
     */
    public function getMemoAccident(): ?string {
        return $this->memoAccident;
    }

    /**
     * Get the memo correspondance.
     *
     * @return string|null Returns the memo correspondance.
     */
    public function getMemoCorrespondance(): ?string {
        return $this->memoCorrespondance;
    }

    /**
     * Get the motif at.
     *
     * @return string|null Returns the motif at.
     */
    public function getMotifAt(): ?string {
        return $this->motifAt;
    }

    /**
     * Get the mt salaire brut.
     *
     * @return int|null Returns the mt salaire brut.
     */
    public function getMtSalaireBrut(): ?int {
        return $this->mtSalaireBrut;
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
     * Get the num dat.
     *
     * @return string|null Returns the num dat.
     */
    public function getNumDat(): ?string {
        return $this->numDat;
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
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the sign date.
     *
     * @return DateTime|null Returns the sign date.
     */
    public function getSignDate(): ?DateTime {
        return $this->signDate;
    }

    /**
     * Get the type dat.
     *
     * @return string|null Returns the type dat.
     */
    public function getTypeDat(): ?string {
        return $this->typeDat;
    }

    /**
     * Set the adresse.
     *
     * @param string|null $adresse The adresse.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setAdresse(?string $adresse): DeclarationsAt {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string|null $categorie The categorie.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCategorie(?string $categorie): DeclarationsAt {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param string|null $codeEtablissement The code etablissement.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCodeEtablissement(?string $codeEtablissement): DeclarationsAt {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCodePostal(?string $codePostal): DeclarationsAt {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the commune.
     *
     * @param string|null $commune The commune.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCommune(?string $commune): DeclarationsAt {
        $this->commune = $commune;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setComplement(?string $complement): DeclarationsAt {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDateNaissance(?DateTime $dateNaissance): DeclarationsAt {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the deduct forfait.
     *
     * @param int|null $deductForfait The deduct forfait.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDeductForfait(?int $deductForfait): DeclarationsAt {
        $this->deductForfait = $deductForfait;
        return $this;
    }

    /**
     * Set the dt accouchement.
     *
     * @param DateTime|null $dtAccouchement The dt accouchement.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtAccouchement(?DateTime $dtAccouchement): DeclarationsAt {
        $this->dtAccouchement = $dtAccouchement;
        return $this;
    }

    /**
     * Set the dt deb at.
     *
     * @param DateTime|null $dtDebAt The dt deb at.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtDebAt(?DateTime $dtDebAt): DeclarationsAt {
        $this->dtDebAt = $dtDebAt;
        return $this;
    }

    /**
     * Set the dt deb conges.
     *
     * @param DateTime|null $dtDebConges The dt deb conges.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtDebConges(?DateTime $dtDebConges): DeclarationsAt {
        $this->dtDebConges = $dtDebConges;
        return $this;
    }

    /**
     * Set the dt embauche.
     *
     * @param DateTime|null $dtEmbauche The dt embauche.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtEmbauche(?DateTime $dtEmbauche): DeclarationsAt {
        $this->dtEmbauche = $dtEmbauche;
        return $this;
    }

    /**
     * Set the dt fin conges.
     *
     * @param DateTime|null $dtFinConges The dt fin conges.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtFinConges(?DateTime $dtFinConges): DeclarationsAt {
        $this->dtFinConges = $dtFinConges;
        return $this;
    }

    /**
     * Set the dt fin contrat.
     *
     * @param DateTime|null $dtFinContrat The dt fin contrat.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtFinContrat(?DateTime $dtFinContrat): DeclarationsAt {
        $this->dtFinContrat = $dtFinContrat;
        return $this;
    }

    /**
     * Set the dt fin preavis.
     *
     * @param DateTime|null $dtFinPreavis The dt fin preavis.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtFinPreavis(?DateTime $dtFinPreavis): DeclarationsAt {
        $this->dtFinPreavis = $dtFinPreavis;
        return $this;
    }

    /**
     * Set the etbl nom.
     *
     * @param string|null $etblNom The etbl nom.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblNom(?string $etblNom): DeclarationsAt {
        $this->etblNom = $etblNom;
        return $this;
    }

    /**
     * Set the etbl responsable.
     *
     * @param string|null $etblResponsable The etbl responsable.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblResponsable(?string $etblResponsable): DeclarationsAt {
        $this->etblResponsable = $etblResponsable;
        return $this;
    }

    /**
     * Set the etbl signature.
     *
     * @param string|null $etblSignature The etbl signature.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblSignature(?string $etblSignature): DeclarationsAt {
        $this->etblSignature = $etblSignature;
        return $this;
    }

    /**
     * Set the etbl siret.
     *
     * @param string|null $etblSiret The etbl siret.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblSiret(?string $etblSiret): DeclarationsAt {
        $this->etblSiret = $etblSiret;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblTel(?string $etblTel): DeclarationsAt {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setLienDocument(?string $lienDocument): DeclarationsAt {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the memo accident.
     *
     * @param string|null $memoAccident The memo accident.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMemoAccident(?string $memoAccident): DeclarationsAt {
        $this->memoAccident = $memoAccident;
        return $this;
    }

    /**
     * Set the memo correspondance.
     *
     * @param string|null $memoCorrespondance The memo correspondance.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMemoCorrespondance(?string $memoCorrespondance): DeclarationsAt {
        $this->memoCorrespondance = $memoCorrespondance;
        return $this;
    }

    /**
     * Set the motif at.
     *
     * @param string|null $motifAt The motif at.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMotifAt(?string $motifAt): DeclarationsAt {
        $this->motifAt = $motifAt;
        return $this;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param int|null $mtSalaireBrut The mt salaire brut.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMtSalaireBrut(?int $mtSalaireBrut): DeclarationsAt {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNir(?string $nir): DeclarationsAt {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNom(?string $nom): DeclarationsAt {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num dat.
     *
     * @param string|null $numDat The num dat.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNumDat(?string $numDat): DeclarationsAt {
        $this->numDat = $numDat;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNumeroEmploye(?string $numeroEmploye): DeclarationsAt {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setPrenom(?string $prenom): DeclarationsAt {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the sign date.
     *
     * @param DateTime|null $signDate The sign date.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setSignDate(?DateTime $signDate): DeclarationsAt {
        $this->signDate = $signDate;
        return $this;
    }

    /**
     * Set the type dat.
     *
     * @param string|null $typeDat The type dat.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setTypeDat(?string $typeDat): DeclarationsAt {
        $this->typeDat = $typeDat;
        return $this;
    }
}
