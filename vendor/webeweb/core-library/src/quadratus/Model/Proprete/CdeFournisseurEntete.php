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
 * Cde fournisseur entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CdeFournisseurEntete {

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
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code livraison.
     *
     * @var string|null
     */
    private $codeLivraison;

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
     * Code reglement.
     *
     * @var string|null
     */
    private $codeReglement;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Code ventil compta.
     *
     * @var string|null
     */
    private $codeVentilCompta;

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
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date piece.
     *
     * @var DateTime|null
     */
    private $datePiece;

    /**
     * Date reception prevue.
     *
     * @var DateTime|null
     */
    private $dateReceptionPrevue;

    /**
     * Echeance forcee.
     *
     * @var bool|null
     */
    private $echeanceForcee;

    /**
     * Edition.
     *
     * @var int|null
     */
    private $edition;

    /**
     * Facture euros.
     *
     * @var bool|null
     */
    private $factureEuros;

    /**
     * Montant acompte.
     *
     * @var float|null
     */
    private $montantAcompte;

    /**
     * Nb colis.
     *
     * @var int|null
     */
    private $nbColis;

    /**
     * No piece.
     *
     * @var string|null
     */
    private $noPiece;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Nom2.
     *
     * @var string|null
     */
    private $nom2;

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
     * Nombre echeances.
     *
     * @var int|null
     */
    private $nombreEcheances;

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
     * Paiement depart le.
     *
     * @var int|null
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var int|null
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int|null
     */
    private $paiementNombreDeJours;

    /**
     * Periode preparation.
     *
     * @var DateTime|null
     */
    private $periodePreparation;

    /**
     * Poids.
     *
     * @var float|null
     */
    private $poids;

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
     * Remise pied.
     *
     * @var float|null
     */
    private $remisePied;

    /**
     * Remise pied2.
     *
     * @var float|null
     */
    private $remisePied2;

    /**
     * Remise pied3.
     *
     * @var float|null
     */
    private $remisePied3;

    /**
     * Saisir adresse.
     *
     * @var bool|null
     */
    private $saisirAdresse;

    /**
     * Saisir adresse livraison.
     *
     * @var bool|null
     */
    private $saisirAdresseLivraison;

    /**
     * Soumis escompte.
     *
     * @var bool|null
     */
    private $soumisEscompte;

    /**
     * Soumis taxe1.
     *
     * @var bool|null
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var bool|null
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var bool|null
     */
    private $soumisTaxe3;

    /**
     * Taux devise.
     *
     * @var float|null
     */
    private $tauxDevise;

    /**
     * Transfert.
     *
     * @var int|null
     */
    private $transfert;

    /**
     * Transporteur.
     *
     * @var string|null
     */
    private $transporteur;

    /**
     * Tx escompte achat.
     *
     * @var float|null
     */
    private $txEscompteAchat;

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
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
    }

    /**
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
    }

    /**
     * Get the code livraison.
     *
     * @return string|null Returns the code livraison.
     */
    public function getCodeLivraison(): ?string {
        return $this->codeLivraison;
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
     * Get the code reglement.
     *
     * @return string|null Returns the code reglement.
     */
    public function getCodeReglement(): ?string {
        return $this->codeReglement;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the code ventil compta.
     *
     * @return string|null Returns the code ventil compta.
     */
    public function getCodeVentilCompta(): ?string {
        return $this->codeVentilCompta;
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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance(): ?DateTime {
        return $this->dateEcheance;
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
     * Get the date piece.
     *
     * @return DateTime|null Returns the date piece.
     */
    public function getDatePiece(): ?DateTime {
        return $this->datePiece;
    }

    /**
     * Get the date reception prevue.
     *
     * @return DateTime|null Returns the date reception prevue.
     */
    public function getDateReceptionPrevue(): ?DateTime {
        return $this->dateReceptionPrevue;
    }

    /**
     * Get the echeance forcee.
     *
     * @return bool|null Returns the echeance forcee.
     */
    public function getEcheanceForcee(): ?bool {
        return $this->echeanceForcee;
    }

    /**
     * Get the edition.
     *
     * @return int|null Returns the edition.
     */
    public function getEdition(): ?int {
        return $this->edition;
    }

    /**
     * Get the facture euros.
     *
     * @return bool|null Returns the facture euros.
     */
    public function getFactureEuros(): ?bool {
        return $this->factureEuros;
    }

    /**
     * Get the montant acompte.
     *
     * @return float|null Returns the montant acompte.
     */
    public function getMontantAcompte(): ?float {
        return $this->montantAcompte;
    }

    /**
     * Get the nb colis.
     *
     * @return int|null Returns the nb colis.
     */
    public function getNbColis(): ?int {
        return $this->nbColis;
    }

    /**
     * Get the no piece.
     *
     * @return string|null Returns the no piece.
     */
    public function getNoPiece(): ?string {
        return $this->noPiece;
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
     * Get the nom2.
     *
     * @return string|null Returns the nom2.
     */
    public function getNom2(): ?string {
        return $this->nom2;
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
     * Get the nombre echeances.
     *
     * @return int|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?int {
        return $this->nombreEcheances;
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
     * Get the paiement depart le.
     *
     * @return int|null Returns the paiement depart le.
     */
    public function getPaiementDepartLe(): ?int {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return int|null Returns the paiement le.
     */
    public function getPaiementLe(): ?int {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int|null Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours(): ?int {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the periode preparation.
     *
     * @return DateTime|null Returns the periode preparation.
     */
    public function getPeriodePreparation(): ?DateTime {
        return $this->periodePreparation;
    }

    /**
     * Get the poids.
     *
     * @return float|null Returns the poids.
     */
    public function getPoids(): ?float {
        return $this->poids;
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
     * Get the remise pied.
     *
     * @return float|null Returns the remise pied.
     */
    public function getRemisePied(): ?float {
        return $this->remisePied;
    }

    /**
     * Get the remise pied2.
     *
     * @return float|null Returns the remise pied2.
     */
    public function getRemisePied2(): ?float {
        return $this->remisePied2;
    }

    /**
     * Get the remise pied3.
     *
     * @return float|null Returns the remise pied3.
     */
    public function getRemisePied3(): ?float {
        return $this->remisePied3;
    }

    /**
     * Get the saisir adresse.
     *
     * @return bool|null Returns the saisir adresse.
     */
    public function getSaisirAdresse(): ?bool {
        return $this->saisirAdresse;
    }

    /**
     * Get the saisir adresse livraison.
     *
     * @return bool|null Returns the saisir adresse livraison.
     */
    public function getSaisirAdresseLivraison(): ?bool {
        return $this->saisirAdresseLivraison;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool|null Returns the soumis escompte.
     */
    public function getSoumisEscompte(): ?bool {
        return $this->soumisEscompte;
    }

    /**
     * Get the soumis taxe1.
     *
     * @return bool|null Returns the soumis taxe1.
     */
    public function getSoumisTaxe1(): ?bool {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return bool|null Returns the soumis taxe2.
     */
    public function getSoumisTaxe2(): ?bool {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return bool|null Returns the soumis taxe3.
     */
    public function getSoumisTaxe3(): ?bool {
        return $this->soumisTaxe3;
    }

    /**
     * Get the taux devise.
     *
     * @return float|null Returns the taux devise.
     */
    public function getTauxDevise(): ?float {
        return $this->tauxDevise;
    }

    /**
     * Get the transfert.
     *
     * @return int|null Returns the transfert.
     */
    public function getTransfert(): ?int {
        return $this->transfert;
    }

    /**
     * Get the transporteur.
     *
     * @return string|null Returns the transporteur.
     */
    public function getTransporteur(): ?string {
        return $this->transporteur;
    }

    /**
     * Get the tx escompte achat.
     *
     * @return float|null Returns the tx escompte achat.
     */
    public function getTxEscompteAchat(): ?float {
        return $this->txEscompteAchat;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setBtq(?string $btq): CdeFournisseurEntete {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the btq2.
     *
     * @param string|null $btq2 The btq2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setBtq2(?string $btq2): CdeFournisseurEntete {
        $this->btq2 = $btq2;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): CdeFournisseurEntete {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the bureau distributeur2.
     *
     * @param string|null $bureauDistributeur2 The bureau distributeur2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setBureauDistributeur2(?string $bureauDistributeur2): CdeFournisseurEntete {
        $this->bureauDistributeur2 = $bureauDistributeur2;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeDevise(?string $codeDevise): CdeFournisseurEntete {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeFournisseur(?string $codeFournisseur): CdeFournisseurEntete {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string|null $codeLivraison The code livraison.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeLivraison(?string $codeLivraison): CdeFournisseurEntete {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): CdeFournisseurEntete {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code officiel commune2.
     *
     * @param string|null $codeOfficielCommune2 The code officiel commune2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeOfficielCommune2(?string $codeOfficielCommune2): CdeFournisseurEntete {
        $this->codeOfficielCommune2 = $codeOfficielCommune2;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodePostal(?string $codePostal): CdeFournisseurEntete {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code postal2.
     *
     * @param string|null $codePostal2 The code postal2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodePostal2(?string $codePostal2): CdeFournisseurEntete {
        $this->codePostal2 = $codePostal2;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string|null $codeReglement The code reglement.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeReglement(?string $codeReglement): CdeFournisseurEntete {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeTva(?string $codeTva): CdeFournisseurEntete {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): CdeFournisseurEntete {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setComplement(?string $complement): CdeFournisseurEntete {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement2.
     *
     * @param string|null $complement2 The complement2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setComplement2(?string $complement2): CdeFournisseurEntete {
        $this->complement2 = $complement2;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setDateCreation(?DateTime $dateCreation): CdeFournisseurEntete {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setDateEcheance(?DateTime $dateEcheance): CdeFournisseurEntete {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setDateModification(?DateTime $dateModification): CdeFournisseurEntete {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date piece.
     *
     * @param DateTime|null $datePiece The date piece.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setDatePiece(?DateTime $datePiece): CdeFournisseurEntete {
        $this->datePiece = $datePiece;
        return $this;
    }

    /**
     * Set the date reception prevue.
     *
     * @param DateTime|null $dateReceptionPrevue The date reception prevue.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setDateReceptionPrevue(?DateTime $dateReceptionPrevue): CdeFournisseurEntete {
        $this->dateReceptionPrevue = $dateReceptionPrevue;
        return $this;
    }

    /**
     * Set the echeance forcee.
     *
     * @param bool|null $echeanceForcee The echeance forcee.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setEcheanceForcee(?bool $echeanceForcee): CdeFournisseurEntete {
        $this->echeanceForcee = $echeanceForcee;
        return $this;
    }

    /**
     * Set the edition.
     *
     * @param int|null $edition The edition.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setEdition(?int $edition): CdeFournisseurEntete {
        $this->edition = $edition;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool|null $factureEuros The facture euros.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setFactureEuros(?bool $factureEuros): CdeFournisseurEntete {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the montant acompte.
     *
     * @param float|null $montantAcompte The montant acompte.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setMontantAcompte(?float $montantAcompte): CdeFournisseurEntete {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }

    /**
     * Set the nb colis.
     *
     * @param int|null $nbColis The nb colis.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNbColis(?int $nbColis): CdeFournisseurEntete {
        $this->nbColis = $nbColis;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string|null $noPiece The no piece.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNoPiece(?string $noPiece): CdeFournisseurEntete {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNom(?string $nom): CdeFournisseurEntete {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom2.
     *
     * @param string|null $nom2 The nom2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNom2(?string $nom2): CdeFournisseurEntete {
        $this->nom2 = $nom2;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNomSuite(?string $nomSuite): CdeFournisseurEntete {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string|null $nomSuite2 The nom suite2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNomSuite2(?string $nomSuite2): CdeFournisseurEntete {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNomVille(?string $nomVille): CdeFournisseurEntete {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom ville2.
     *
     * @param string|null $nomVille2 The nom ville2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNomVille2(?string $nomVille2): CdeFournisseurEntete {
        $this->nomVille2 = $nomVille2;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNomVoie(?string $nomVoie): CdeFournisseurEntete {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nom voie2.
     *
     * @param string|null $nomVoie2 The nom voie2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNomVoie2(?string $nomVoie2): CdeFournisseurEntete {
        $this->nomVoie2 = $nomVoie2;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param int|null $nombreEcheances The nombre echeances.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNombreEcheances(?int $nombreEcheances): CdeFournisseurEntete {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNumVoie(?string $numVoie): CdeFournisseurEntete {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the num voie2.
     *
     * @param string|null $numVoie2 The num voie2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setNumVoie2(?string $numVoie2): CdeFournisseurEntete {
        $this->numVoie2 = $numVoie2;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int|null $paiementDepartLe The paiement depart le.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setPaiementDepartLe(?int $paiementDepartLe): CdeFournisseurEntete {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param int|null $paiementLe The paiement le.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setPaiementLe(?int $paiementLe): CdeFournisseurEntete {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): CdeFournisseurEntete {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime|null $periodePreparation The periode preparation.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setPeriodePreparation(?DateTime $periodePreparation): CdeFournisseurEntete {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }

    /**
     * Set the poids.
     *
     * @param float|null $poids The poids.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setPoids(?float $poids): CdeFournisseurEntete {
        $this->poids = $poids;
        return $this;
    }

    /**
     * Set the reference1.
     *
     * @param string|null $reference1 The reference1.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setReference1(?string $reference1): CdeFournisseurEntete {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * Set the reference2.
     *
     * @param string|null $reference2 The reference2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setReference2(?string $reference2): CdeFournisseurEntete {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * Set the reference3.
     *
     * @param string|null $reference3 The reference3.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setReference3(?string $reference3): CdeFournisseurEntete {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Set the reference4.
     *
     * @param string|null $reference4 The reference4.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setReference4(?string $reference4): CdeFournisseurEntete {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setRemisePied(?float $remisePied): CdeFournisseurEntete {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float|null $remisePied2 The remise pied2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setRemisePied2(?float $remisePied2): CdeFournisseurEntete {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float|null $remisePied3 The remise pied3.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setRemisePied3(?float $remisePied3): CdeFournisseurEntete {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the saisir adresse.
     *
     * @param bool|null $saisirAdresse The saisir adresse.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setSaisirAdresse(?bool $saisirAdresse): CdeFournisseurEntete {
        $this->saisirAdresse = $saisirAdresse;
        return $this;
    }

    /**
     * Set the saisir adresse livraison.
     *
     * @param bool|null $saisirAdresseLivraison The saisir adresse livraison.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setSaisirAdresseLivraison(?bool $saisirAdresseLivraison): CdeFournisseurEntete {
        $this->saisirAdresseLivraison = $saisirAdresseLivraison;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): CdeFournisseurEntete {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param bool|null $soumisTaxe1 The soumis taxe1.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setSoumisTaxe1(?bool $soumisTaxe1): CdeFournisseurEntete {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool|null $soumisTaxe2 The soumis taxe2.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setSoumisTaxe2(?bool $soumisTaxe2): CdeFournisseurEntete {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool|null $soumisTaxe3 The soumis taxe3.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setSoumisTaxe3(?bool $soumisTaxe3): CdeFournisseurEntete {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the taux devise.
     *
     * @param float|null $tauxDevise The taux devise.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setTauxDevise(?float $tauxDevise): CdeFournisseurEntete {
        $this->tauxDevise = $tauxDevise;
        return $this;
    }

    /**
     * Set the transfert.
     *
     * @param int|null $transfert The transfert.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setTransfert(?int $transfert): CdeFournisseurEntete {
        $this->transfert = $transfert;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string|null $transporteur The transporteur.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setTransporteur(?string $transporteur): CdeFournisseurEntete {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tx escompte achat.
     *
     * @param float|null $txEscompteAchat The tx escompte achat.
     * @return CdeFournisseurEntete Returns this Cde fournisseur entete.
     */
    public function setTxEscompteAchat(?float $txEscompteAchat): CdeFournisseurEntete {
        $this->txEscompteAchat = $txEscompteAchat;
        return $this;
    }
}
