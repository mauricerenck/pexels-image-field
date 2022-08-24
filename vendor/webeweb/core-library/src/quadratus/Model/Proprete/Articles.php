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
 * Articles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Articles {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Article remplacement.
     *
     * @var string|null
     */
    private $articleRemplacement;

    /**
     * Classification four.
     *
     * @var string|null
     */
    private $classificationFour;

    /**
     * Classification util.
     *
     * @var string|null
     */
    private $classificationUtil;

    /**
     * Code affect rent.
     *
     * @var string|null
     */
    private $codeAffectRent;

    /**
     * Code anal achat.
     *
     * @var string|null
     */
    private $codeAnalAchat;

    /**
     * Code anal vente.
     *
     * @var string|null
     */
    private $codeAnalVente;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code tva achat.
     *
     * @var string|null
     */
    private $codeTvaAchat;

    /**
     * Code tva vente.
     *
     * @var string|null
     */
    private $codeTvaVente;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Code ventil achat.
     *
     * @var string|null
     */
    private $codeVentilAchat;

    /**
     * Code ventil vente.
     *
     * @var string|null
     */
    private $codeVentilVente;

    /**
     * Coef.
     *
     * @var float|null
     */
    private $coef;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Depuis deb fac.
     *
     * @var bool|null
     */
    private $depuisDebFac;

    /**
     * Dernier prix achat.
     *
     * @var float|null
     */
    private $dernierPrixAchat;

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
     * Designation rtf.
     *
     * @var string|null
     */
    private $designationRtf;

    /**
     * Famille article.
     *
     * @var string|null
     */
    private $familleArticle;

    /**
     * Imprimer dans pied.
     *
     * @var bool|null
     */
    private $imprimerDansPied;

    /**
     * Montant unitaire taxe.
     *
     * @var float|null
     */
    private $montantUnitaireTaxe;

    /**
     * Mot cle dans pied.
     *
     * @var string|null
     */
    private $motCleDansPied;

    /**
     * Ne pas reviser.
     *
     * @var bool|null
     */
    private $nePasReviser;

    /**
     * Nombre echeances.
     *
     * @var string|null
     */
    private $nombreEcheances;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Pamp.
     *
     * @var float|null
     */
    private $pamp;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Prix net.
     *
     * @var bool|null
     */
    private $prixNet;

    /**
     * Prix revient.
     *
     * @var float|null
     */
    private $prixRevient;

    /**
     * Prix vente.
     *
     * @var float|null
     */
    private $prixVente;

    /**
     * Prix vente euros.
     *
     * @var float|null
     */
    private $prixVenteEuros;

    /**
     * Produit.
     *
     * @var bool|null
     */
    private $produit;

    /**
     * Produit chimique.
     *
     * @var bool|null
     */
    private $produitChimique;

    /**
     * Px facture.
     *
     * @var bool|null
     */
    private $pxFacture;

    /**
     * Qte stock mini.
     *
     * @var float|null
     */
    private $qteStockMini;

    /**
     * Qte stock reel.
     *
     * @var float|null
     */
    private $qteStockReel;

    /**
     * Soumis escompte.
     *
     * @var bool|null
     */
    private $soumisEscompte;

    /**
     * Suivi stock.
     *
     * @var bool|null
     */
    private $suiviStock;

    /**
     * Taux escompte.
     *
     * @var float|null
     */
    private $tauxEscompte;

    /**
     * Type article.
     *
     * @var string|null
     */
    private $typeArticle;

    /**
     * Variante.
     *
     * @var bool|null
     */
    private $variante;

    /**
     * Ventil marge.
     *
     * @var bool|null
     */
    private $ventilMarge;

    /**
     * Visu dans att fisc.
     *
     * @var bool|null
     */
    private $visuDansAttFisc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
    }

    /**
     * Get the article remplacement.
     *
     * @return string|null Returns the article remplacement.
     */
    public function getArticleRemplacement(): ?string {
        return $this->articleRemplacement;
    }

    /**
     * Get the classification four.
     *
     * @return string|null Returns the classification four.
     */
    public function getClassificationFour(): ?string {
        return $this->classificationFour;
    }

    /**
     * Get the classification util.
     *
     * @return string|null Returns the classification util.
     */
    public function getClassificationUtil(): ?string {
        return $this->classificationUtil;
    }

    /**
     * Get the code affect rent.
     *
     * @return string|null Returns the code affect rent.
     */
    public function getCodeAffectRent(): ?string {
        return $this->codeAffectRent;
    }

    /**
     * Get the code anal achat.
     *
     * @return string|null Returns the code anal achat.
     */
    public function getCodeAnalAchat(): ?string {
        return $this->codeAnalAchat;
    }

    /**
     * Get the code anal vente.
     *
     * @return string|null Returns the code anal vente.
     */
    public function getCodeAnalVente(): ?string {
        return $this->codeAnalVente;
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
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
    }

    /**
     * Get the code tva achat.
     *
     * @return string|null Returns the code tva achat.
     */
    public function getCodeTvaAchat(): ?string {
        return $this->codeTvaAchat;
    }

    /**
     * Get the code tva vente.
     *
     * @return string|null Returns the code tva vente.
     */
    public function getCodeTvaVente(): ?string {
        return $this->codeTvaVente;
    }

    /**
     * Get the code unite.
     *
     * @return string|null Returns the code unite.
     */
    public function getCodeUnite(): ?string {
        return $this->codeUnite;
    }

    /**
     * Get the code ventil achat.
     *
     * @return string|null Returns the code ventil achat.
     */
    public function getCodeVentilAchat(): ?string {
        return $this->codeVentilAchat;
    }

    /**
     * Get the code ventil vente.
     *
     * @return string|null Returns the code ventil vente.
     */
    public function getCodeVentilVente(): ?string {
        return $this->codeVentilVente;
    }

    /**
     * Get the coef.
     *
     * @return float|null Returns the coef.
     */
    public function getCoef(): ?float {
        return $this->coef;
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
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the depuis deb fac.
     *
     * @return bool|null Returns the depuis deb fac.
     */
    public function getDepuisDebFac(): ?bool {
        return $this->depuisDebFac;
    }

    /**
     * Get the dernier prix achat.
     *
     * @return float|null Returns the dernier prix achat.
     */
    public function getDernierPrixAchat(): ?float {
        return $this->dernierPrixAchat;
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
     * Get the designation rtf.
     *
     * @return string|null Returns the designation rtf.
     */
    public function getDesignationRtf(): ?string {
        return $this->designationRtf;
    }

    /**
     * Get the famille article.
     *
     * @return string|null Returns the famille article.
     */
    public function getFamilleArticle(): ?string {
        return $this->familleArticle;
    }

    /**
     * Get the imprimer dans pied.
     *
     * @return bool|null Returns the imprimer dans pied.
     */
    public function getImprimerDansPied(): ?bool {
        return $this->imprimerDansPied;
    }

    /**
     * Get the montant unitaire taxe.
     *
     * @return float|null Returns the montant unitaire taxe.
     */
    public function getMontantUnitaireTaxe(): ?float {
        return $this->montantUnitaireTaxe;
    }

    /**
     * Get the mot cle dans pied.
     *
     * @return string|null Returns the mot cle dans pied.
     */
    public function getMotCleDansPied(): ?string {
        return $this->motCleDansPied;
    }

    /**
     * Get the ne pas reviser.
     *
     * @return bool|null Returns the ne pas reviser.
     */
    public function getNePasReviser(): ?bool {
        return $this->nePasReviser;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?string {
        return $this->nombreEcheances;
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
     * Get the pamp.
     *
     * @return float|null Returns the pamp.
     */
    public function getPamp(): ?float {
        return $this->pamp;
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
     * Get the prix net.
     *
     * @return bool|null Returns the prix net.
     */
    public function getPrixNet(): ?bool {
        return $this->prixNet;
    }

    /**
     * Get the prix revient.
     *
     * @return float|null Returns the prix revient.
     */
    public function getPrixRevient(): ?float {
        return $this->prixRevient;
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
     * Get the prix vente euros.
     *
     * @return float|null Returns the prix vente euros.
     */
    public function getPrixVenteEuros(): ?float {
        return $this->prixVenteEuros;
    }

    /**
     * Get the produit.
     *
     * @return bool|null Returns the produit.
     */
    public function getProduit(): ?bool {
        return $this->produit;
    }

    /**
     * Get the produit chimique.
     *
     * @return bool|null Returns the produit chimique.
     */
    public function getProduitChimique(): ?bool {
        return $this->produitChimique;
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
     * Get the qte stock mini.
     *
     * @return float|null Returns the qte stock mini.
     */
    public function getQteStockMini(): ?float {
        return $this->qteStockMini;
    }

    /**
     * Get the qte stock reel.
     *
     * @return float|null Returns the qte stock reel.
     */
    public function getQteStockReel(): ?float {
        return $this->qteStockReel;
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
     * Get the suivi stock.
     *
     * @return bool|null Returns the suivi stock.
     */
    public function getSuiviStock(): ?bool {
        return $this->suiviStock;
    }

    /**
     * Get the taux escompte.
     *
     * @return float|null Returns the taux escompte.
     */
    public function getTauxEscompte(): ?float {
        return $this->tauxEscompte;
    }

    /**
     * Get the type article.
     *
     * @return string|null Returns the type article.
     */
    public function getTypeArticle(): ?string {
        return $this->typeArticle;
    }

    /**
     * Get the variante.
     *
     * @return bool|null Returns the variante.
     */
    public function getVariante(): ?bool {
        return $this->variante;
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
     * Get the visu dans att fisc.
     *
     * @return bool|null Returns the visu dans att fisc.
     */
    public function getVisuDansAttFisc(): ?bool {
        return $this->visuDansAttFisc;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return Articles Returns this Articles.
     */
    public function setActif(?bool $actif): Articles {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the article remplacement.
     *
     * @param string|null $articleRemplacement The article remplacement.
     * @return Articles Returns this Articles.
     */
    public function setArticleRemplacement(?string $articleRemplacement): Articles {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }

    /**
     * Set the classification four.
     *
     * @param string|null $classificationFour The classification four.
     * @return Articles Returns this Articles.
     */
    public function setClassificationFour(?string $classificationFour): Articles {
        $this->classificationFour = $classificationFour;
        return $this;
    }

    /**
     * Set the classification util.
     *
     * @param string|null $classificationUtil The classification util.
     * @return Articles Returns this Articles.
     */
    public function setClassificationUtil(?string $classificationUtil): Articles {
        $this->classificationUtil = $classificationUtil;
        return $this;
    }

    /**
     * Set the code affect rent.
     *
     * @param string|null $codeAffectRent The code affect rent.
     * @return Articles Returns this Articles.
     */
    public function setCodeAffectRent(?string $codeAffectRent): Articles {
        $this->codeAffectRent = $codeAffectRent;
        return $this;
    }

    /**
     * Set the code anal achat.
     *
     * @param string|null $codeAnalAchat The code anal achat.
     * @return Articles Returns this Articles.
     */
    public function setCodeAnalAchat(?string $codeAnalAchat): Articles {
        $this->codeAnalAchat = $codeAnalAchat;
        return $this;
    }

    /**
     * Set the code anal vente.
     *
     * @param string|null $codeAnalVente The code anal vente.
     * @return Articles Returns this Articles.
     */
    public function setCodeAnalVente(?string $codeAnalVente): Articles {
        $this->codeAnalVente = $codeAnalVente;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return Articles Returns this Articles.
     */
    public function setCodeArticle(?string $codeArticle): Articles {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return Articles Returns this Articles.
     */
    public function setCodeFournisseur(?string $codeFournisseur): Articles {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code tva achat.
     *
     * @param string|null $codeTvaAchat The code tva achat.
     * @return Articles Returns this Articles.
     */
    public function setCodeTvaAchat(?string $codeTvaAchat): Articles {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }

    /**
     * Set the code tva vente.
     *
     * @param string|null $codeTvaVente The code tva vente.
     * @return Articles Returns this Articles.
     */
    public function setCodeTvaVente(?string $codeTvaVente): Articles {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return Articles Returns this Articles.
     */
    public function setCodeUnite(?string $codeUnite): Articles {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string|null $codeVentilAchat The code ventil achat.
     * @return Articles Returns this Articles.
     */
    public function setCodeVentilAchat(?string $codeVentilAchat): Articles {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string|null $codeVentilVente The code ventil vente.
     * @return Articles Returns this Articles.
     */
    public function setCodeVentilVente(?string $codeVentilVente): Articles {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the coef.
     *
     * @param float|null $coef The coef.
     * @return Articles Returns this Articles.
     */
    public function setCoef(?float $coef): Articles {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Articles Returns this Articles.
     */
    public function setDateCreation(?DateTime $dateCreation): Articles {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Articles Returns this Articles.
     */
    public function setDateModification(?DateTime $dateModification): Articles {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool|null $depuisDebFac The depuis deb fac.
     * @return Articles Returns this Articles.
     */
    public function setDepuisDebFac(?bool $depuisDebFac): Articles {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the dernier prix achat.
     *
     * @param float|null $dernierPrixAchat The dernier prix achat.
     * @return Articles Returns this Articles.
     */
    public function setDernierPrixAchat(?float $dernierPrixAchat): Articles {
        $this->dernierPrixAchat = $dernierPrixAchat;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return Articles Returns this Articles.
     */
    public function setDesignation(?string $designation): Articles {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return Articles Returns this Articles.
     */
    public function setDesignation2(?string $designation2): Articles {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return Articles Returns this Articles.
     */
    public function setDesignation3(?string $designation3): Articles {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation rtf.
     *
     * @param string|null $designationRtf The designation rtf.
     * @return Articles Returns this Articles.
     */
    public function setDesignationRtf(?string $designationRtf): Articles {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the famille article.
     *
     * @param string|null $familleArticle The famille article.
     * @return Articles Returns this Articles.
     */
    public function setFamilleArticle(?string $familleArticle): Articles {
        $this->familleArticle = $familleArticle;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool|null $imprimerDansPied The imprimer dans pied.
     * @return Articles Returns this Articles.
     */
    public function setImprimerDansPied(?bool $imprimerDansPied): Articles {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float|null $montantUnitaireTaxe The montant unitaire taxe.
     * @return Articles Returns this Articles.
     */
    public function setMontantUnitaireTaxe(?float $montantUnitaireTaxe): Articles {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string|null $motCleDansPied The mot cle dans pied.
     * @return Articles Returns this Articles.
     */
    public function setMotCleDansPied(?string $motCleDansPied): Articles {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the ne pas reviser.
     *
     * @param bool|null $nePasReviser The ne pas reviser.
     * @return Articles Returns this Articles.
     */
    public function setNePasReviser(?bool $nePasReviser): Articles {
        $this->nePasReviser = $nePasReviser;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return Articles Returns this Articles.
     */
    public function setNombreEcheances(?string $nombreEcheances): Articles {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Articles Returns this Articles.
     */
    public function setNumeroPj(?int $numeroPj): Articles {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the pamp.
     *
     * @param float|null $pamp The pamp.
     * @return Articles Returns this Articles.
     */
    public function setPamp(?float $pamp): Articles {
        $this->pamp = $pamp;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return Articles Returns this Articles.
     */
    public function setPosteRent(?string $posteRent): Articles {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix net.
     *
     * @param bool|null $prixNet The prix net.
     * @return Articles Returns this Articles.
     */
    public function setPrixNet(?bool $prixNet): Articles {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix revient.
     *
     * @param float|null $prixRevient The prix revient.
     * @return Articles Returns this Articles.
     */
    public function setPrixRevient(?float $prixRevient): Articles {
        $this->prixRevient = $prixRevient;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float|null $prixVente The prix vente.
     * @return Articles Returns this Articles.
     */
    public function setPrixVente(?float $prixVente): Articles {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the prix vente euros.
     *
     * @param float|null $prixVenteEuros The prix vente euros.
     * @return Articles Returns this Articles.
     */
    public function setPrixVenteEuros(?float $prixVenteEuros): Articles {
        $this->prixVenteEuros = $prixVenteEuros;
        return $this;
    }

    /**
     * Set the produit.
     *
     * @param bool|null $produit The produit.
     * @return Articles Returns this Articles.
     */
    public function setProduit(?bool $produit): Articles {
        $this->produit = $produit;
        return $this;
    }

    /**
     * Set the produit chimique.
     *
     * @param bool|null $produitChimique The produit chimique.
     * @return Articles Returns this Articles.
     */
    public function setProduitChimique(?bool $produitChimique): Articles {
        $this->produitChimique = $produitChimique;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool|null $pxFacture The px facture.
     * @return Articles Returns this Articles.
     */
    public function setPxFacture(?bool $pxFacture): Articles {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the qte stock mini.
     *
     * @param float|null $qteStockMini The qte stock mini.
     * @return Articles Returns this Articles.
     */
    public function setQteStockMini(?float $qteStockMini): Articles {
        $this->qteStockMini = $qteStockMini;
        return $this;
    }

    /**
     * Set the qte stock reel.
     *
     * @param float|null $qteStockReel The qte stock reel.
     * @return Articles Returns this Articles.
     */
    public function setQteStockReel(?float $qteStockReel): Articles {
        $this->qteStockReel = $qteStockReel;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return Articles Returns this Articles.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): Articles {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool|null $suiviStock The suivi stock.
     * @return Articles Returns this Articles.
     */
    public function setSuiviStock(?bool $suiviStock): Articles {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return Articles Returns this Articles.
     */
    public function setTauxEscompte(?float $tauxEscompte): Articles {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the type article.
     *
     * @param string|null $typeArticle The type article.
     * @return Articles Returns this Articles.
     */
    public function setTypeArticle(?string $typeArticle): Articles {
        $this->typeArticle = $typeArticle;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param bool|null $variante The variante.
     * @return Articles Returns this Articles.
     */
    public function setVariante(?bool $variante): Articles {
        $this->variante = $variante;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool|null $ventilMarge The ventil marge.
     * @return Articles Returns this Articles.
     */
    public function setVentilMarge(?bool $ventilMarge): Articles {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }

    /**
     * Set the visu dans att fisc.
     *
     * @param bool|null $visuDansAttFisc The visu dans att fisc.
     * @return Articles Returns this Articles.
     */
    public function setVisuDansAttFisc(?bool $visuDansAttFisc): Articles {
        $this->visuDansAttFisc = $visuDansAttFisc;
        return $this;
    }
}
