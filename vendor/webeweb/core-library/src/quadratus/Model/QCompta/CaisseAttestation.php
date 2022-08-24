<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Caisse attestation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class CaisseAttestation {

    /**
     * Collaborateur.
     *
     * @var string|null
     */
    private $collaborateur;

    /**
     * Date acquisition.
     *
     * @var DateTime|null
     */
    private $dateAcquisition;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date attestation.
     *
     * @var DateTime|null
     */
    private $dateAttestation;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Info fichier.
     *
     * @var string|null
     */
    private $infoFichier;

    /**
     * Licence.
     *
     * @var string|null
     */
    private $licence;

    /**
     * Nom responsable.
     *
     * @var string|null
     */
    private $nomResponsable;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Num version.
     *
     * @var string|null
     */
    private $numVersion;

    /**
     * Ordinateur.
     *
     * @var string|null
     */
    private $ordinateur;

    /**
     * Origine.
     *
     * @var string|null
     */
    private $origine;

    /**
     * Prenom responsable.
     *
     * @var string|null
     */
    private $prenomResponsable;

    /**
     * Raison sociale distri.
     *
     * @var string|null
     */
    private $raisonSocialeDistri;

    /**
     * Raison sociale societe.
     *
     * @var string|null
     */
    private $raisonSocialeSociete;

    /**
     * Uniq id.
     *
     * @var int|null
     */
    private $uniqId;

    /**
     * Utilisateur.
     *
     * @var string|null
     */
    private $utilisateur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the collaborateur.
     *
     * @return string|null Returns the collaborateur.
     */
    public function getCollaborateur(): ?string {
        return $this->collaborateur;
    }

    /**
     * Get the date acquisition.
     *
     * @return DateTime|null Returns the date acquisition.
     */
    public function getDateAcquisition(): ?DateTime {
        return $this->dateAcquisition;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication(): ?DateTime {
        return $this->dateApplication;
    }

    /**
     * Get the date attestation.
     *
     * @return DateTime|null Returns the date attestation.
     */
    public function getDateAttestation(): ?DateTime {
        return $this->dateAttestation;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the info fichier.
     *
     * @return string|null Returns the info fichier.
     */
    public function getInfoFichier(): ?string {
        return $this->infoFichier;
    }

    /**
     * Get the licence.
     *
     * @return string|null Returns the licence.
     */
    public function getLicence(): ?string {
        return $this->licence;
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
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
    }

    /**
     * Get the num version.
     *
     * @return string|null Returns the num version.
     */
    public function getNumVersion(): ?string {
        return $this->numVersion;
    }

    /**
     * Get the ordinateur.
     *
     * @return string|null Returns the ordinateur.
     */
    public function getOrdinateur(): ?string {
        return $this->ordinateur;
    }

    /**
     * Get the origine.
     *
     * @return string|null Returns the origine.
     */
    public function getOrigine(): ?string {
        return $this->origine;
    }

    /**
     * Get the prenom responsable.
     *
     * @return string|null Returns the prenom responsable.
     */
    public function getPrenomResponsable(): ?string {
        return $this->prenomResponsable;
    }

    /**
     * Get the raison sociale distri.
     *
     * @return string|null Returns the raison sociale distri.
     */
    public function getRaisonSocialeDistri(): ?string {
        return $this->raisonSocialeDistri;
    }

    /**
     * Get the raison sociale societe.
     *
     * @return string|null Returns the raison sociale societe.
     */
    public function getRaisonSocialeSociete(): ?string {
        return $this->raisonSocialeSociete;
    }

    /**
     * Get the uniq id.
     *
     * @return int|null Returns the uniq id.
     */
    public function getUniqId(): ?int {
        return $this->uniqId;
    }

    /**
     * Get the utilisateur.
     *
     * @return string|null Returns the utilisateur.
     */
    public function getUtilisateur(): ?string {
        return $this->utilisateur;
    }

    /**
     * Set the collaborateur.
     *
     * @param string|null $collaborateur The collaborateur.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setCollaborateur(?string $collaborateur): CaisseAttestation {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime|null $dateAcquisition The date acquisition.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateAcquisition(?DateTime $dateAcquisition): CaisseAttestation {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateApplication(?DateTime $dateApplication): CaisseAttestation {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date attestation.
     *
     * @param DateTime|null $dateAttestation The date attestation.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateAttestation(?DateTime $dateAttestation): CaisseAttestation {
        $this->dateAttestation = $dateAttestation;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateCreation(?DateTime $dateCreation): CaisseAttestation {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the info fichier.
     *
     * @param string|null $infoFichier The info fichier.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setInfoFichier(?string $infoFichier): CaisseAttestation {
        $this->infoFichier = $infoFichier;
        return $this;
    }

    /**
     * Set the licence.
     *
     * @param string|null $licence The licence.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setLicence(?string $licence): CaisseAttestation {
        $this->licence = $licence;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string|null $nomResponsable The nom responsable.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setNomResponsable(?string $nomResponsable): CaisseAttestation {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setNomVille(?string $nomVille): CaisseAttestation {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the num version.
     *
     * @param string|null $numVersion The num version.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setNumVersion(?string $numVersion): CaisseAttestation {
        $this->numVersion = $numVersion;
        return $this;
    }

    /**
     * Set the ordinateur.
     *
     * @param string|null $ordinateur The ordinateur.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setOrdinateur(?string $ordinateur): CaisseAttestation {
        $this->ordinateur = $ordinateur;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string|null $origine The origine.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setOrigine(?string $origine): CaisseAttestation {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the prenom responsable.
     *
     * @param string|null $prenomResponsable The prenom responsable.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setPrenomResponsable(?string $prenomResponsable): CaisseAttestation {
        $this->prenomResponsable = $prenomResponsable;
        return $this;
    }

    /**
     * Set the raison sociale distri.
     *
     * @param string|null $raisonSocialeDistri The raison sociale distri.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setRaisonSocialeDistri(?string $raisonSocialeDistri): CaisseAttestation {
        $this->raisonSocialeDistri = $raisonSocialeDistri;
        return $this;
    }

    /**
     * Set the raison sociale societe.
     *
     * @param string|null $raisonSocialeSociete The raison sociale societe.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setRaisonSocialeSociete(?string $raisonSocialeSociete): CaisseAttestation {
        $this->raisonSocialeSociete = $raisonSocialeSociete;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param int|null $uniqId The uniq id.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setUniqId(?int $uniqId): CaisseAttestation {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the utilisateur.
     *
     * @param string|null $utilisateur The utilisateur.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setUtilisateur(?string $utilisateur): CaisseAttestation {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}
