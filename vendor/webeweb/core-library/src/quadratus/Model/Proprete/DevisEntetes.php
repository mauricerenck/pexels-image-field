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
 * Devis entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisEntetes {

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

    /**
     * Client prospect.
     *
     * @var bool|null
     */
    private $clientProspect;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code commercial.
     *
     * @var string|null
     */
    private $codeCommercial;

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
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date devis.
     *
     * @var DateTime|null
     */
    private $dateDevis;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

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
     * Montant ht.
     *
     * @var float|null
     */
    private $montantHt;

    /**
     * Nom adresse.
     *
     * @var string|null
     */
    private $nomAdresse;

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
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

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
     * Taux tva.
     *
     * @var float|null
     */
    private $tauxTva;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the civilite.
     *
     * @return string|null Returns the civilite.
     */
    public function getCivilite(): ?string {
        return $this->civilite;
    }

    /**
     * Get the client prospect.
     *
     * @return bool|null Returns the client prospect.
     */
    public function getClientProspect(): ?bool {
        return $this->clientProspect;
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
     * Get the code commercial.
     *
     * @return string|null Returns the code commercial.
     */
    public function getCodeCommercial(): ?string {
        return $this->codeCommercial;
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
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
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
     * Get the date devis.
     *
     * @return DateTime|null Returns the date devis.
     */
    public function getDateDevis(): ?DateTime {
        return $this->dateDevis;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
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
     * Get the montant ht.
     *
     * @return float|null Returns the montant ht.
     */
    public function getMontantHt(): ?float {
        return $this->montantHt;
    }

    /**
     * Get the nom adresse.
     *
     * @return string|null Returns the nom adresse.
     */
    public function getNomAdresse(): ?string {
        return $this->nomAdresse;
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
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
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
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
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
     * Get the numero pj.
     *
     * @return int|null Returns the numero pj.
     */
    public function getNumeroPj(): ?int {
        return $this->numeroPj;
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
     * Get the taux tva.
     *
     * @return float|null Returns the taux tva.
     */
    public function getTauxTva(): ?float {
        return $this->tauxTva;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setBtq(?string $btq): DevisEntetes {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setCivilite(?string $civilite): DevisEntetes {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the client prospect.
     *
     * @param bool|null $clientProspect The client prospect.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setClientProspect(?bool $clientProspect): DevisEntetes {
        $this->clientProspect = $clientProspect;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setCodeClient(?string $codeClient): DevisEntetes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code commercial.
     *
     * @param string|null $codeCommercial The code commercial.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setCodeCommercial(?string $codeCommercial): DevisEntetes {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setCodePays(?string $codePays): DevisEntetes {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setCodePostal(?string $codePostal): DevisEntetes {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setComplement(?string $complement): DevisEntetes {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setDateCreation(?DateTime $dateCreation): DevisEntetes {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date devis.
     *
     * @param DateTime|null $dateDevis The date devis.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setDateDevis(?DateTime $dateDevis): DevisEntetes {
        $this->dateDevis = $dateDevis;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setDateModification(?DateTime $dateModification): DevisEntetes {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setEtat(?string $etat): DevisEntetes {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setLibelle(?string $libelle): DevisEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setLienDocument(?string $lienDocument): DevisEntetes {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float|null $montantHt The montant ht.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setMontantHt(?float $montantHt): DevisEntetes {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the nom adresse.
     *
     * @param string|null $nomAdresse The nom adresse.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNomAdresse(?string $nomAdresse): DevisEntetes {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNomSuite(?string $nomSuite): DevisEntetes {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string|null $nomSuite2 The nom suite2.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNomSuite2(?string $nomSuite2): DevisEntetes {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string|null $nomSuite3 The nom suite3.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNomSuite3(?string $nomSuite3): DevisEntetes {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNomVille(?string $nomVille): DevisEntetes {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNomVoie(?string $nomVoie): DevisEntetes {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNumDevis(?string $numDevis): DevisEntetes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNumVoie(?string $numVoie): DevisEntetes {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setNumeroPj(?int $numeroPj): DevisEntetes {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the reference1.
     *
     * @param string|null $reference1 The reference1.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setReference1(?string $reference1): DevisEntetes {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * Set the reference2.
     *
     * @param string|null $reference2 The reference2.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setReference2(?string $reference2): DevisEntetes {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * Set the reference3.
     *
     * @param string|null $reference3 The reference3.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setReference3(?string $reference3): DevisEntetes {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Set the reference4.
     *
     * @param string|null $reference4 The reference4.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setReference4(?string $reference4): DevisEntetes {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return DevisEntetes Returns this Devis entetes.
     */
    public function setTauxTva(?float $tauxTva): DevisEntetes {
        $this->tauxTva = $tauxTva;
        return $this;
    }
}
