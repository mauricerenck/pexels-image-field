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
 * Affaires.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Affaires {

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Ca stat annuel.
     *
     * @var float|null
     */
    private $caStatAnnuel;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code analytique.
     *
     * @var string|null
     */
    private $codeAnalytique;

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
     * Code factor.
     *
     * @var string|null
     */
    private $codeFactor;

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
     * Code reg marge.
     *
     * @var string|null
     */
    private $codeRegMarge;

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
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date deb affaire.
     *
     * @var DateTime|null
     */
    private $dateDebAffaire;

    /**
     * Date deb affaire deb mois.
     *
     * @var DateTime|null
     */
    private $dateDebAffaireDebMois;

    /**
     * Date fin affaire.
     *
     * @var DateTime|null
     */
    private $dateFinAffaire;

    /**
     * Date fin affaire fin mois.
     *
     * @var DateTime|null
     */
    private $dateFinAffaireFinMois;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date vente.
     *
     * @var DateTime|null
     */
    private $dateVente;

    /**
     * Facture isolee.
     *
     * @var bool|null
     */
    private $factureIsolee;

    /**
     * Groupe sous traite.
     *
     * @var string|null
     */
    private $groupeSousTraite;

    /**
     * Nom adresse.
     *
     * @var string|null
     */
    private $nomAdresse;

    /**
     * Nom affaire.
     *
     * @var string|null
     */
    private $nomAffaire;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Reference facture.
     *
     * @var string|null
     */
    private $referenceFacture;

    /**
     * Reference facture2.
     *
     * @var string|null
     */
    private $referenceFacture2;

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
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
    }

    /**
     * Get the ca stat annuel.
     *
     * @return float|null Returns the ca stat annuel.
     */
    public function getCaStatAnnuel(): ?float {
        return $this->caStatAnnuel;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code analytique.
     *
     * @return string|null Returns the code analytique.
     */
    public function getCodeAnalytique(): ?string {
        return $this->codeAnalytique;
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
     * Get the code factor.
     *
     * @return string|null Returns the code factor.
     */
    public function getCodeFactor(): ?string {
        return $this->codeFactor;
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
     * Get the code reg marge.
     *
     * @return string|null Returns the code reg marge.
     */
    public function getCodeRegMarge(): ?string {
        return $this->codeRegMarge;
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
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
    }

    /**
     * Get the date deb affaire.
     *
     * @return DateTime|null Returns the date deb affaire.
     */
    public function getDateDebAffaire(): ?DateTime {
        return $this->dateDebAffaire;
    }

    /**
     * Get the date deb affaire deb mois.
     *
     * @return DateTime|null Returns the date deb affaire deb mois.
     */
    public function getDateDebAffaireDebMois(): ?DateTime {
        return $this->dateDebAffaireDebMois;
    }

    /**
     * Get the date fin affaire.
     *
     * @return DateTime|null Returns the date fin affaire.
     */
    public function getDateFinAffaire(): ?DateTime {
        return $this->dateFinAffaire;
    }

    /**
     * Get the date fin affaire fin mois.
     *
     * @return DateTime|null Returns the date fin affaire fin mois.
     */
    public function getDateFinAffaireFinMois(): ?DateTime {
        return $this->dateFinAffaireFinMois;
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
     * Get the date vente.
     *
     * @return DateTime|null Returns the date vente.
     */
    public function getDateVente(): ?DateTime {
        return $this->dateVente;
    }

    /**
     * Get the facture isolee.
     *
     * @return bool|null Returns the facture isolee.
     */
    public function getFactureIsolee(): ?bool {
        return $this->factureIsolee;
    }

    /**
     * Get the groupe sous traite.
     *
     * @return string|null Returns the groupe sous traite.
     */
    public function getGroupeSousTraite(): ?string {
        return $this->groupeSousTraite;
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
     * Get the nom affaire.
     *
     * @return string|null Returns the nom affaire.
     */
    public function getNomAffaire(): ?string {
        return $this->nomAffaire;
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
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
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
     * Get the reference facture.
     *
     * @return string|null Returns the reference facture.
     */
    public function getReferenceFacture(): ?string {
        return $this->referenceFacture;
    }

    /**
     * Get the reference facture2.
     *
     * @return string|null Returns the reference facture2.
     */
    public function getReferenceFacture2(): ?string {
        return $this->referenceFacture2;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Affaires Returns this Affaires.
     */
    public function setBtq(?string $btq): Affaires {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Affaires Returns this Affaires.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Affaires {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the ca stat annuel.
     *
     * @param float|null $caStatAnnuel The ca stat annuel.
     * @return Affaires Returns this Affaires.
     */
    public function setCaStatAnnuel(?float $caStatAnnuel): Affaires {
        $this->caStatAnnuel = $caStatAnnuel;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeAffaire(?string $codeAffaire): Affaires {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code analytique.
     *
     * @param string|null $codeAnalytique The code analytique.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeAnalytique(?string $codeAnalytique): Affaires {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeClient(?string $codeClient): Affaires {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code commercial.
     *
     * @param string|null $codeCommercial The code commercial.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeCommercial(?string $codeCommercial): Affaires {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string|null $codeFactor The code factor.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeFactor(?string $codeFactor): Affaires {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return Affaires Returns this Affaires.
     */
    public function setCodePays(?string $codePays): Affaires {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Affaires Returns this Affaires.
     */
    public function setCodePostal(?string $codePostal): Affaires {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code reg marge.
     *
     * @param string|null $codeRegMarge The code reg marge.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeRegMarge(?string $codeRegMarge): Affaires {
        $this->codeRegMarge = $codeRegMarge;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeTva(?string $codeTva): Affaires {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): Affaires {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Affaires Returns this Affaires.
     */
    public function setComplement(?string $complement): Affaires {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return Affaires Returns this Affaires.
     */
    public function setDateCreat(?DateTime $dateCreat): Affaires {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date deb affaire.
     *
     * @param DateTime|null $dateDebAffaire The date deb affaire.
     * @return Affaires Returns this Affaires.
     */
    public function setDateDebAffaire(?DateTime $dateDebAffaire): Affaires {
        $this->dateDebAffaire = $dateDebAffaire;
        return $this;
    }

    /**
     * Set the date deb affaire deb mois.
     *
     * @param DateTime|null $dateDebAffaireDebMois The date deb affaire deb mois.
     * @return Affaires Returns this Affaires.
     */
    public function setDateDebAffaireDebMois(?DateTime $dateDebAffaireDebMois): Affaires {
        $this->dateDebAffaireDebMois = $dateDebAffaireDebMois;
        return $this;
    }

    /**
     * Set the date fin affaire.
     *
     * @param DateTime|null $dateFinAffaire The date fin affaire.
     * @return Affaires Returns this Affaires.
     */
    public function setDateFinAffaire(?DateTime $dateFinAffaire): Affaires {
        $this->dateFinAffaire = $dateFinAffaire;
        return $this;
    }

    /**
     * Set the date fin affaire fin mois.
     *
     * @param DateTime|null $dateFinAffaireFinMois The date fin affaire fin mois.
     * @return Affaires Returns this Affaires.
     */
    public function setDateFinAffaireFinMois(?DateTime $dateFinAffaireFinMois): Affaires {
        $this->dateFinAffaireFinMois = $dateFinAffaireFinMois;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return Affaires Returns this Affaires.
     */
    public function setDateModif(?DateTime $dateModif): Affaires {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the date vente.
     *
     * @param DateTime|null $dateVente The date vente.
     * @return Affaires Returns this Affaires.
     */
    public function setDateVente(?DateTime $dateVente): Affaires {
        $this->dateVente = $dateVente;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool|null $factureIsolee The facture isolee.
     * @return Affaires Returns this Affaires.
     */
    public function setFactureIsolee(?bool $factureIsolee): Affaires {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the groupe sous traite.
     *
     * @param string|null $groupeSousTraite The groupe sous traite.
     * @return Affaires Returns this Affaires.
     */
    public function setGroupeSousTraite(?string $groupeSousTraite): Affaires {
        $this->groupeSousTraite = $groupeSousTraite;
        return $this;
    }

    /**
     * Set the nom adresse.
     *
     * @param string|null $nomAdresse The nom adresse.
     * @return Affaires Returns this Affaires.
     */
    public function setNomAdresse(?string $nomAdresse): Affaires {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }

    /**
     * Set the nom affaire.
     *
     * @param string|null $nomAffaire The nom affaire.
     * @return Affaires Returns this Affaires.
     */
    public function setNomAffaire(?string $nomAffaire): Affaires {
        $this->nomAffaire = $nomAffaire;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Affaires Returns this Affaires.
     */
    public function setNomSuite(?string $nomSuite): Affaires {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Affaires Returns this Affaires.
     */
    public function setNomVoie(?string $nomVoie): Affaires {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Affaires Returns this Affaires.
     */
    public function setNumVoie(?string $numVoie): Affaires {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string|null $referenceFacture The reference facture.
     * @return Affaires Returns this Affaires.
     */
    public function setReferenceFacture(?string $referenceFacture): Affaires {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string|null $referenceFacture2 The reference facture2.
     * @return Affaires Returns this Affaires.
     */
    public function setReferenceFacture2(?string $referenceFacture2): Affaires {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }
}
