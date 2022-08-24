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
 * Devis commercial lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisCommercialLignes {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code affaire ligne.
     *
     * @var string|null
     */
    private $codeAffaireLigne;

    /**
     * Code anal article.
     *
     * @var string|null
     */
    private $codeAnalArticle;

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
     * Code chantier ligne.
     *
     * @var string|null
     */
    private $codeChantierLigne;

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
     * Code tva article.
     *
     * @var string|null
     */
    private $codeTvaArticle;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Code ventil article.
     *
     * @var string|null
     */
    private $codeVentilArticle;

    /**
     * Depuis deb fac.
     *
     * @var bool|null
     */
    private $depuisDebFac;

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
     * Numero devis.
     *
     * @var string|null
     */
    private $numeroDevis;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Periode ventil marge.
     *
     * @var DateTime|null
     */
    private $periodeVentilMarge;

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
     * Prix unitaire.
     *
     * @var float|null
     */
    private $prixUnitaire;

    /**
     * Px devis.
     *
     * @var bool|null
     */
    private $pxDevis;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Remise ligne1.
     *
     * @var float|null
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float|null
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float|null
     */
    private $remiseLigne3;

    /**
     * Taux tva article.
     *
     * @var float|null
     */
    private $tauxTvaArticle;

    /**
     * Taux tva taxe.
     *
     * @var float|null
     */
    private $tauxTvaTaxe;

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
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code affaire ligne.
     *
     * @return string|null Returns the code affaire ligne.
     */
    public function getCodeAffaireLigne(): ?string {
        return $this->codeAffaireLigne;
    }

    /**
     * Get the code anal article.
     *
     * @return string|null Returns the code anal article.
     */
    public function getCodeAnalArticle(): ?string {
        return $this->codeAnalArticle;
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
     * Get the code chantier ligne.
     *
     * @return string|null Returns the code chantier ligne.
     */
    public function getCodeChantierLigne(): ?string {
        return $this->codeChantierLigne;
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
     * Get the code tva article.
     *
     * @return string|null Returns the code tva article.
     */
    public function getCodeTvaArticle(): ?string {
        return $this->codeTvaArticle;
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
     * Get the code ventil article.
     *
     * @return string|null Returns the code ventil article.
     */
    public function getCodeVentilArticle(): ?string {
        return $this->codeVentilArticle;
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
     * Get the numero devis.
     *
     * @return string|null Returns the numero devis.
     */
    public function getNumeroDevis(): ?string {
        return $this->numeroDevis;
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
     * Get the periode ventil marge.
     *
     * @return DateTime|null Returns the periode ventil marge.
     */
    public function getPeriodeVentilMarge(): ?DateTime {
        return $this->periodeVentilMarge;
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
     * Get the prix unitaire.
     *
     * @return float|null Returns the prix unitaire.
     */
    public function getPrixUnitaire(): ?float {
        return $this->prixUnitaire;
    }

    /**
     * Get the px devis.
     *
     * @return bool|null Returns the px devis.
     */
    public function getPxDevis(): ?bool {
        return $this->pxDevis;
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
     * Get the remise ligne1.
     *
     * @return float|null Returns the remise ligne1.
     */
    public function getRemiseLigne1(): ?float {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float|null Returns the remise ligne2.
     */
    public function getRemiseLigne2(): ?float {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float|null Returns the remise ligne3.
     */
    public function getRemiseLigne3(): ?float {
        return $this->remiseLigne3;
    }

    /**
     * Get the taux tva article.
     *
     * @return float|null Returns the taux tva article.
     */
    public function getTauxTvaArticle(): ?float {
        return $this->tauxTvaArticle;
    }

    /**
     * Get the taux tva taxe.
     *
     * @return float|null Returns the taux tva taxe.
     */
    public function getTauxTvaTaxe(): ?float {
        return $this->tauxTvaTaxe;
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
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisCommercialLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code affaire ligne.
     *
     * @param string|null $codeAffaireLigne The code affaire ligne.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeAffaireLigne(?string $codeAffaireLigne): DevisCommercialLignes {
        $this->codeAffaireLigne = $codeAffaireLigne;
        return $this;
    }

    /**
     * Set the code anal article.
     *
     * @param string|null $codeAnalArticle The code anal article.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeAnalArticle(?string $codeAnalArticle): DevisCommercialLignes {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeArticle(?string $codeArticle): DevisCommercialLignes {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeChantier(?string $codeChantier): DevisCommercialLignes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code chantier ligne.
     *
     * @param string|null $codeChantierLigne The code chantier ligne.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeChantierLigne(?string $codeChantierLigne): DevisCommercialLignes {
        $this->codeChantierLigne = $codeChantierLigne;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeClient(?string $codeClient): DevisCommercialLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeRegroupement(?string $codeRegroupement): DevisCommercialLignes {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code tva article.
     *
     * @param string|null $codeTvaArticle The code tva article.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeTvaArticle(?string $codeTvaArticle): DevisCommercialLignes {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeUnite(?string $codeUnite): DevisCommercialLignes {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil article.
     *
     * @param string|null $codeVentilArticle The code ventil article.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setCodeVentilArticle(?string $codeVentilArticle): DevisCommercialLignes {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool|null $depuisDebFac The depuis deb fac.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDepuisDebFac(?bool $depuisDebFac): DevisCommercialLignes {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignation(?string $designation): DevisCommercialLignes {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignation2(?string $designation2): DevisCommercialLignes {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignation3(?string $designation3): DevisCommercialLignes {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation bis.
     *
     * @param string|null $designationBis The designation bis.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignationBis(?string $designationBis): DevisCommercialLignes {
        $this->designationBis = $designationBis;
        return $this;
    }

    /**
     * Set the designation bis2.
     *
     * @param string|null $designationBis2 The designation bis2.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignationBis2(?string $designationBis2): DevisCommercialLignes {
        $this->designationBis2 = $designationBis2;
        return $this;
    }

    /**
     * Set the designation bis3.
     *
     * @param string|null $designationBis3 The designation bis3.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignationBis3(?string $designationBis3): DevisCommercialLignes {
        $this->designationBis3 = $designationBis3;
        return $this;
    }

    /**
     * Set the designation rtf.
     *
     * @param string|null $designationRtf The designation rtf.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setDesignationRtf(?string $designationRtf): DevisCommercialLignes {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool|null $imprimerDansPied The imprimer dans pied.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setImprimerDansPied(?bool $imprimerDansPied): DevisCommercialLignes {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float|null $montantUnitaireTaxe The montant unitaire taxe.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setMontantUnitaireTaxe(?float $montantUnitaireTaxe): DevisCommercialLignes {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string|null $motCleDansPied The mot cle dans pied.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setMotCleDansPied(?string $motCleDansPied): DevisCommercialLignes {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the numero devis.
     *
     * @param string|null $numeroDevis The numero devis.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setNumeroDevis(?string $numeroDevis): DevisCommercialLignes {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setNumeroLigne(?int $numeroLigne): DevisCommercialLignes {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the periode ventil marge.
     *
     * @param DateTime|null $periodeVentilMarge The periode ventil marge.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setPeriodeVentilMarge(?DateTime $periodeVentilMarge): DevisCommercialLignes {
        $this->periodeVentilMarge = $periodeVentilMarge;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setPosteRent(?string $posteRent): DevisCommercialLignes {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float|null $prixAchat The prix achat.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setPrixAchat(?float $prixAchat): DevisCommercialLignes {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float|null $prixUnitaire The prix unitaire.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setPrixUnitaire(?float $prixUnitaire): DevisCommercialLignes {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    /**
     * Set the px devis.
     *
     * @param bool|null $pxDevis The px devis.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setPxDevis(?bool $pxDevis): DevisCommercialLignes {
        $this->pxDevis = $pxDevis;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setQuantite(?float $quantite): DevisCommercialLignes {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setRemiseLigne1(?float $remiseLigne1): DevisCommercialLignes {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setRemiseLigne2(?float $remiseLigne2): DevisCommercialLignes {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setRemiseLigne3(?float $remiseLigne3): DevisCommercialLignes {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux tva article.
     *
     * @param float|null $tauxTvaArticle The taux tva article.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setTauxTvaArticle(?float $tauxTvaArticle): DevisCommercialLignes {
        $this->tauxTvaArticle = $tauxTvaArticle;
        return $this;
    }

    /**
     * Set the taux tva taxe.
     *
     * @param float|null $tauxTvaTaxe The taux tva taxe.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setTauxTvaTaxe(?float $tauxTvaTaxe): DevisCommercialLignes {
        $this->tauxTvaTaxe = $tauxTvaTaxe;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool|null $ventilMarge The ventil marge.
     * @return DevisCommercialLignes Returns this Devis commercial lignes.
     */
    public function setVentilMarge(?bool $ventilMarge): DevisCommercialLignes {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
