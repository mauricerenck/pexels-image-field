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
 * Cde type insp lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CdeTypeInspLignes {

    /**
     * Aou.
     *
     * @var bool|null
     */
    private $aou;

    /**
     * Avr.
     *
     * @var bool|null
     */
    private $avr;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code inspecteur.
     *
     * @var string|null
     */
    private $codeInspecteur;

    /**
     * Code livraison.
     *
     * @var string|null
     */
    private $codeLivraison;

    /**
     * Commande isolee.
     *
     * @var bool|null
     */
    private $commandeIsolee;

    /**
     * Date debut validite.
     *
     * @var DateTime|null
     */
    private $dateDebutValidite;

    /**
     * Date fin validite.
     *
     * @var DateTime|null
     */
    private $dateFinValidite;

    /**
     * Date validee.
     *
     * @var DateTime|null
     */
    private $dateValidee;

    /**
     * Dec.
     *
     * @var bool|null
     */
    private $dec;

    /**
     * Designation1.
     *
     * @var string|null
     */
    private $designation1;

    /**
     * Designation2.
     *
     * @var string|null
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string|null
     */
    private $designation3;

    /**
     * Fev.
     *
     * @var bool|null
     */
    private $fev;

    /**
     * Jan.
     *
     * @var bool|null
     */
    private $jan;

    /**
     * Jour livraison.
     *
     * @var string|null
     */
    private $jourLivraison;

    /**
     * Juil.
     *
     * @var bool|null
     */
    private $juil;

    /**
     * Juin.
     *
     * @var bool|null
     */
    private $juin;

    /**
     * Mai.
     *
     * @var bool|null
     */
    private $mai;

    /**
     * Maj stock by da.
     *
     * @var bool|null
     */
    private $majStockByDa;

    /**
     * Mar.
     *
     * @var bool|null
     */
    private $mar;

    /**
     * Nov.
     *
     * @var bool|null
     */
    private $nov;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Oct.
     *
     * @var bool|null
     */
    private $oct;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Saisir modalite liv.
     *
     * @var bool|null
     */
    private $saisirModaliteLiv;

    /**
     * Sep.
     *
     * @var bool|null
     */
    private $sep;

    /**
     * Type gestion.
     *
     * @var string|null
     */
    private $typeGestion;

    /**
     * Validee.
     *
     * @var bool|null
     */
    private $validee;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the aou.
     *
     * @return bool|null Returns the aou.
     */
    public function getAou(): ?bool {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return bool|null Returns the avr.
     */
    public function getAvr(): ?bool {
        return $this->avr;
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
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
    }

    /**
     * Get the code inspecteur.
     *
     * @return string|null Returns the code inspecteur.
     */
    public function getCodeInspecteur(): ?string {
        return $this->codeInspecteur;
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
     * Get the commande isolee.
     *
     * @return bool|null Returns the commande isolee.
     */
    public function getCommandeIsolee(): ?bool {
        return $this->commandeIsolee;
    }

    /**
     * Get the date debut validite.
     *
     * @return DateTime|null Returns the date debut validite.
     */
    public function getDateDebutValidite(): ?DateTime {
        return $this->dateDebutValidite;
    }

    /**
     * Get the date fin validite.
     *
     * @return DateTime|null Returns the date fin validite.
     */
    public function getDateFinValidite(): ?DateTime {
        return $this->dateFinValidite;
    }

    /**
     * Get the date validee.
     *
     * @return DateTime|null Returns the date validee.
     */
    public function getDateValidee(): ?DateTime {
        return $this->dateValidee;
    }

    /**
     * Get the dec.
     *
     * @return bool|null Returns the dec.
     */
    public function getDec(): ?bool {
        return $this->dec;
    }

    /**
     * Get the designation1.
     *
     * @return string|null Returns the designation1.
     */
    public function getDesignation1(): ?string {
        return $this->designation1;
    }

    /**
     * Get the designation2.
     *
     * @return string|null Returns the designation2.
     */
    public function getDesignation2(): ?string {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string|null Returns the designation3.
     */
    public function getDesignation3(): ?string {
        return $this->designation3;
    }

    /**
     * Get the fev.
     *
     * @return bool|null Returns the fev.
     */
    public function getFev(): ?bool {
        return $this->fev;
    }

    /**
     * Get the jan.
     *
     * @return bool|null Returns the jan.
     */
    public function getJan(): ?bool {
        return $this->jan;
    }

    /**
     * Get the jour livraison.
     *
     * @return string|null Returns the jour livraison.
     */
    public function getJourLivraison(): ?string {
        return $this->jourLivraison;
    }

    /**
     * Get the juil.
     *
     * @return bool|null Returns the juil.
     */
    public function getJuil(): ?bool {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return bool|null Returns the juin.
     */
    public function getJuin(): ?bool {
        return $this->juin;
    }

    /**
     * Get the mai.
     *
     * @return bool|null Returns the mai.
     */
    public function getMai(): ?bool {
        return $this->mai;
    }

    /**
     * Get the maj stock by da.
     *
     * @return bool|null Returns the maj stock by da.
     */
    public function getMajStockByDa(): ?bool {
        return $this->majStockByDa;
    }

    /**
     * Get the mar.
     *
     * @return bool|null Returns the mar.
     */
    public function getMar(): ?bool {
        return $this->mar;
    }

    /**
     * Get the nov.
     *
     * @return bool|null Returns the nov.
     */
    public function getNov(): ?bool {
        return $this->nov;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the oct.
     *
     * @return bool|null Returns the oct.
     */
    public function getOct(): ?bool {
        return $this->oct;
    }

    /**
     * Get the poste rent.
     *
     * @return string|null Returns the poste rent.
     */
    public function getPosteRent(): ?string {
        return $this->posteRent;
    }

    /**
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
    }

    /**
     * Get the saisir modalite liv.
     *
     * @return bool|null Returns the saisir modalite liv.
     */
    public function getSaisirModaliteLiv(): ?bool {
        return $this->saisirModaliteLiv;
    }

    /**
     * Get the sep.
     *
     * @return bool|null Returns the sep.
     */
    public function getSep(): ?bool {
        return $this->sep;
    }

    /**
     * Get the type gestion.
     *
     * @return string|null Returns the type gestion.
     */
    public function getTypeGestion(): ?string {
        return $this->typeGestion;
    }

    /**
     * Get the validee.
     *
     * @return bool|null Returns the validee.
     */
    public function getValidee(): ?bool {
        return $this->validee;
    }

    /**
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setAou(?bool $aou): CdeTypeInspLignes {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setAvr(?bool $avr): CdeTypeInspLignes {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): CdeTypeInspLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeArticle(?string $codeArticle): CdeTypeInspLignes {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeChantier(?string $codeChantier): CdeTypeInspLignes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeClient(?string $codeClient): CdeTypeInspLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeFournisseur(?string $codeFournisseur): CdeTypeInspLignes {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string|null $codeInspecteur The code inspecteur.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeInspecteur(?string $codeInspecteur): CdeTypeInspLignes {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string|null $codeLivraison The code livraison.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCodeLivraison(?string $codeLivraison): CdeTypeInspLignes {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool|null $commandeIsolee The commande isolee.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setCommandeIsolee(?bool $commandeIsolee): CdeTypeInspLignes {
        $this->commandeIsolee = $commandeIsolee;
        return $this;
    }

    /**
     * Set the date debut validite.
     *
     * @param DateTime|null $dateDebutValidite The date debut validite.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDateDebutValidite(?DateTime $dateDebutValidite): CdeTypeInspLignes {
        $this->dateDebutValidite = $dateDebutValidite;
        return $this;
    }

    /**
     * Set the date fin validite.
     *
     * @param DateTime|null $dateFinValidite The date fin validite.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDateFinValidite(?DateTime $dateFinValidite): CdeTypeInspLignes {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Set the date validee.
     *
     * @param DateTime|null $dateValidee The date validee.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDateValidee(?DateTime $dateValidee): CdeTypeInspLignes {
        $this->dateValidee = $dateValidee;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDec(?bool $dec): CdeTypeInspLignes {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the designation1.
     *
     * @param string|null $designation1 The designation1.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDesignation1(?string $designation1): CdeTypeInspLignes {
        $this->designation1 = $designation1;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDesignation2(?string $designation2): CdeTypeInspLignes {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setDesignation3(?string $designation3): CdeTypeInspLignes {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setFev(?bool $fev): CdeTypeInspLignes {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setJan(?bool $jan): CdeTypeInspLignes {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jour livraison.
     *
     * @param string|null $jourLivraison The jour livraison.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setJourLivraison(?string $jourLivraison): CdeTypeInspLignes {
        $this->jourLivraison = $jourLivraison;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool|null $juil The juil.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setJuil(?bool $juil): CdeTypeInspLignes {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setJuin(?bool $juin): CdeTypeInspLignes {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setMai(?bool $mai): CdeTypeInspLignes {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the maj stock by da.
     *
     * @param bool|null $majStockByDa The maj stock by da.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setMajStockByDa(?bool $majStockByDa): CdeTypeInspLignes {
        $this->majStockByDa = $majStockByDa;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setMar(?bool $mar): CdeTypeInspLignes {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setNov(?bool $nov): CdeTypeInspLignes {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setNumeroLigne(?int $numeroLigne): CdeTypeInspLignes {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setOct(?bool $oct): CdeTypeInspLignes {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setPosteRent(?string $posteRent): CdeTypeInspLignes {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setQuantite(?float $quantite): CdeTypeInspLignes {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the saisir modalite liv.
     *
     * @param bool|null $saisirModaliteLiv The saisir modalite liv.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setSaisirModaliteLiv(?bool $saisirModaliteLiv): CdeTypeInspLignes {
        $this->saisirModaliteLiv = $saisirModaliteLiv;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setSep(?bool $sep): CdeTypeInspLignes {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the type gestion.
     *
     * @param string|null $typeGestion The type gestion.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setTypeGestion(?string $typeGestion): CdeTypeInspLignes {
        $this->typeGestion = $typeGestion;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool|null $validee The validee.
     * @return CdeTypeInspLignes Returns this Cde type insp lignes.
     */
    public function setValidee(?bool $validee): CdeTypeInspLignes {
        $this->validee = $validee;
        return $this;
    }
}
