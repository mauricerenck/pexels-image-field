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
 * Plans facturation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PlansFacturation {

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
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Date fin validite.
     *
     * @var DateTime|null
     */
    private $dateFinValidite;

    /**
     * Dec.
     *
     * @var bool|null
     */
    private $dec;

    /**
     * Designation.
     *
     * @var string|null
     */
    private $designation;

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
     * Designation bis.
     *
     * @var string|null
     */
    private $designationBis;

    /**
     * Designation bis2.
     *
     * @var string|null
     */
    private $designationBis2;

    /**
     * Designation bis3.
     *
     * @var string|null
     */
    private $designationBis3;

    /**
     * Designation rtf.
     *
     * @var string|null
     */
    private $designationRtf;

    /**
     * Duree.
     *
     * @var float|null
     */
    private $duree;

    /**
     * Fev.
     *
     * @var bool|null
     */
    private $fev;

    /**
     * Fin periode tarif.
     *
     * @var DateTime|null
     */
    private $finPeriodeTarif;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Jan.
     *
     * @var bool|null
     */
    private $jan;

    /**
     * Jui.
     *
     * @var bool|null
     */
    private $jui;

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
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Numero devis.
     *
     * @var string|null
     */
    private $numeroDevis;

    /**
     * Numero historique.
     *
     * @var int|null
     */
    private $numeroHistorique;

    /**
     * Oct.
     *
     * @var bool|null
     */
    private $oct;

    /**
     * Periode tarif.
     *
     * @var DateTime|null
     */
    private $periodeTarif;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Prix achat.
     *
     * @var float|null
     */
    private $prixAchat;

    /**
     * Prix vente.
     *
     * @var float|null
     */
    private $prixVente;

    /**
     * Px facture.
     *
     * @var bool|null
     */
    private $pxFacture;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Ref article.
     *
     * @var bool|null
     */
    private $refArticle;

    /**
     * Ref poste cde web ft.
     *
     * @var string|null
     */
    private $refPosteCdeWebFt;

    /**
     * Sep.
     *
     * @var bool|null
     */
    private $sep;

    /**
     * Taux.
     *
     * @var float|null
     */
    private $taux;

    /**
     * Ventil marge.
     *
     * @var bool|null
     */
    private $ventilMarge;

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
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the coefficient.
     *
     * @return float|null Returns the coefficient.
     */
    public function getCoefficient(): ?float {
        return $this->coefficient;
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
     * Get the dec.
     *
     * @return bool|null Returns the dec.
     */
    public function getDec(): ?bool {
        return $this->dec;
    }

    /**
     * Get the designation.
     *
     * @return string|null Returns the designation.
     */
    public function getDesignation(): ?string {
        return $this->designation;
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
     * Get the designation bis.
     *
     * @return string|null Returns the designation bis.
     */
    public function getDesignationBis(): ?string {
        return $this->designationBis;
    }

    /**
     * Get the designation bis2.
     *
     * @return string|null Returns the designation bis2.
     */
    public function getDesignationBis2(): ?string {
        return $this->designationBis2;
    }

    /**
     * Get the designation bis3.
     *
     * @return string|null Returns the designation bis3.
     */
    public function getDesignationBis3(): ?string {
        return $this->designationBis3;
    }

    /**
     * Get the designation rtf.
     *
     * @return string|null Returns the designation rtf.
     */
    public function getDesignationRtf(): ?string {
        return $this->designationRtf;
    }

    /**
     * Get the duree.
     *
     * @return float|null Returns the duree.
     */
    public function getDuree(): ?float {
        return $this->duree;
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
     * Get the fin periode tarif.
     *
     * @return DateTime|null Returns the fin periode tarif.
     */
    public function getFinPeriodeTarif(): ?DateTime {
        return $this->finPeriodeTarif;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
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
     * Get the jui.
     *
     * @return bool|null Returns the jui.
     */
    public function getJui(): ?bool {
        return $this->jui;
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
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the numero devis.
     *
     * @return string|null Returns the numero devis.
     */
    public function getNumeroDevis(): ?string {
        return $this->numeroDevis;
    }

    /**
     * Get the numero historique.
     *
     * @return int|null Returns the numero historique.
     */
    public function getNumeroHistorique(): ?int {
        return $this->numeroHistorique;
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
     * Get the periode tarif.
     *
     * @return DateTime|null Returns the periode tarif.
     */
    public function getPeriodeTarif(): ?DateTime {
        return $this->periodeTarif;
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
     * Get the prix achat.
     *
     * @return float|null Returns the prix achat.
     */
    public function getPrixAchat(): ?float {
        return $this->prixAchat;
    }

    /**
     * Get the prix vente.
     *
     * @return float|null Returns the prix vente.
     */
    public function getPrixVente(): ?float {
        return $this->prixVente;
    }

    /**
     * Get the px facture.
     *
     * @return bool|null Returns the px facture.
     */
    public function getPxFacture(): ?bool {
        return $this->pxFacture;
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
     * Get the ref article.
     *
     * @return bool|null Returns the ref article.
     */
    public function getRefArticle(): ?bool {
        return $this->refArticle;
    }

    /**
     * Get the ref poste cde web ft.
     *
     * @return string|null Returns the ref poste cde web ft.
     */
    public function getRefPosteCdeWebFt(): ?string {
        return $this->refPosteCdeWebFt;
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
     * Get the taux.
     *
     * @return float|null Returns the taux.
     */
    public function getTaux(): ?float {
        return $this->taux;
    }

    /**
     * Get the ventil marge.
     *
     * @return bool|null Returns the ventil marge.
     */
    public function getVentilMarge(): ?bool {
        return $this->ventilMarge;
    }

    /**
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setAou(?bool $aou): PlansFacturation {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setAvr(?bool $avr): PlansFacturation {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setCodeAffaire(?string $codeAffaire): PlansFacturation {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setCodeArticle(?string $codeArticle): PlansFacturation {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setCodeChantier(?string $codeChantier): PlansFacturation {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setCodeClient(?string $codeClient): PlansFacturation {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setCodeRegroupement(?string $codeRegroupement): PlansFacturation {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setCoefficient(?float $coefficient): PlansFacturation {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the date fin validite.
     *
     * @param DateTime|null $dateFinValidite The date fin validite.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDateFinValidite(?DateTime $dateFinValidite): PlansFacturation {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDec(?bool $dec): PlansFacturation {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignation(?string $designation): PlansFacturation {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignation2(?string $designation2): PlansFacturation {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignation3(?string $designation3): PlansFacturation {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation bis.
     *
     * @param string|null $designationBis The designation bis.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignationBis(?string $designationBis): PlansFacturation {
        $this->designationBis = $designationBis;
        return $this;
    }

    /**
     * Set the designation bis2.
     *
     * @param string|null $designationBis2 The designation bis2.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignationBis2(?string $designationBis2): PlansFacturation {
        $this->designationBis2 = $designationBis2;
        return $this;
    }

    /**
     * Set the designation bis3.
     *
     * @param string|null $designationBis3 The designation bis3.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignationBis3(?string $designationBis3): PlansFacturation {
        $this->designationBis3 = $designationBis3;
        return $this;
    }

    /**
     * Set the designation rtf.
     *
     * @param string|null $designationRtf The designation rtf.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDesignationRtf(?string $designationRtf): PlansFacturation {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param float|null $duree The duree.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setDuree(?float $duree): PlansFacturation {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setFev(?bool $fev): PlansFacturation {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the fin periode tarif.
     *
     * @param DateTime|null $finPeriodeTarif The fin periode tarif.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setFinPeriodeTarif(?DateTime $finPeriodeTarif): PlansFacturation {
        $this->finPeriodeTarif = $finPeriodeTarif;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setIndice(?int $indice): PlansFacturation {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setJan(?bool $jan): PlansFacturation {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jui.
     *
     * @param bool|null $jui The jui.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setJui(?bool $jui): PlansFacturation {
        $this->jui = $jui;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setJuin(?bool $juin): PlansFacturation {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setMai(?bool $mai): PlansFacturation {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setMar(?bool $mar): PlansFacturation {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setNov(?bool $nov): PlansFacturation {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setNumBt(?int $numBt): PlansFacturation {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero devis.
     *
     * @param string|null $numeroDevis The numero devis.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setNumeroDevis(?string $numeroDevis): PlansFacturation {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the numero historique.
     *
     * @param int|null $numeroHistorique The numero historique.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setNumeroHistorique(?int $numeroHistorique): PlansFacturation {
        $this->numeroHistorique = $numeroHistorique;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setOct(?bool $oct): PlansFacturation {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the periode tarif.
     *
     * @param DateTime|null $periodeTarif The periode tarif.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setPeriodeTarif(?DateTime $periodeTarif): PlansFacturation {
        $this->periodeTarif = $periodeTarif;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setPosteRent(?string $posteRent): PlansFacturation {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float|null $prixAchat The prix achat.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setPrixAchat(?float $prixAchat): PlansFacturation {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float|null $prixVente The prix vente.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setPrixVente(?float $prixVente): PlansFacturation {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool|null $pxFacture The px facture.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setPxFacture(?bool $pxFacture): PlansFacturation {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setQuantite(?float $quantite): PlansFacturation {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the ref article.
     *
     * @param bool|null $refArticle The ref article.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setRefArticle(?bool $refArticle): PlansFacturation {
        $this->refArticle = $refArticle;
        return $this;
    }

    /**
     * Set the ref poste cde web ft.
     *
     * @param string|null $refPosteCdeWebFt The ref poste cde web ft.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setRefPosteCdeWebFt(?string $refPosteCdeWebFt): PlansFacturation {
        $this->refPosteCdeWebFt = $refPosteCdeWebFt;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setSep(?bool $sep): PlansFacturation {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float|null $taux The taux.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setTaux(?float $taux): PlansFacturation {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool|null $ventilMarge The ventil marge.
     * @return PlansFacturation Returns this Plans facturation.
     */
    public function setVentilMarge(?bool $ventilMarge): PlansFacturation {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
