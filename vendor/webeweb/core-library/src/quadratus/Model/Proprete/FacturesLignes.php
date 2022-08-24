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
 * Factures lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FacturesLignes {

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
     * Coefficient bt.
     *
     * @var float|null
     */
    private $coefficientBt;

    /**
     * Date bt.
     *
     * @var DateTime|null
     */
    private $dateBt;

    /**
     * Date preparation.
     *
     * @var DateTime|null
     */
    private $datePreparation;

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
     * Duree bt.
     *
     * @var float|null
     */
    private $dureeBt;

    /**
     * From pointage bt.
     *
     * @var bool|null
     */
    private $fromPointageBt;

    /**
     * Heures prev.
     *
     * @var float|null
     */
    private $heuresPrev;

    /**
     * Heures reel.
     *
     * @var float|null
     */
    private $heuresReel;

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
     * No chrono preparation.
     *
     * @var int|null
     */
    private $noChronoPreparation;

    /**
     * No ligne ori.
     *
     * @var int|null
     */
    private $noLigneOri;

    /**
     * No piece origine.
     *
     * @var string|null
     */
    private $noPieceOrigine;

    /**
     * Numero bt.
     *
     * @var int|null
     */
    private $numeroBt;

    /**
     * Numero facture.
     *
     * @var string|null
     */
    private $numeroFacture;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Periode preparation.
     *
     * @var DateTime|null
     */
    private $periodePreparation;

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
     * Prix achat bt.
     *
     * @var float|null
     */
    private $prixAchatBt;

    /**
     * Prix unitaire.
     *
     * @var float|null
     */
    private $prixUnitaire;

    /**
     * Prix unitaire pdf.
     *
     * @var float|null
     */
    private $prixUnitairePdf;

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
     * Ref poste cde web ft.
     *
     * @var string|null
     */
    private $refPosteCdeWebFt;

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
     * Taux horaire bt.
     *
     * @var float|null
     */
    private $tauxHoraireBt;

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
     * Type piece.
     *
     * @var string|null
     */
    private $typePiece;

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
     * Get the coefficient bt.
     *
     * @return float|null Returns the coefficient bt.
     */
    public function getCoefficientBt(): ?float {
        return $this->coefficientBt;
    }

    /**
     * Get the date bt.
     *
     * @return DateTime|null Returns the date bt.
     */
    public function getDateBt(): ?DateTime {
        return $this->dateBt;
    }

    /**
     * Get the date preparation.
     *
     * @return DateTime|null Returns the date preparation.
     */
    public function getDatePreparation(): ?DateTime {
        return $this->datePreparation;
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
     * Get the duree bt.
     *
     * @return float|null Returns the duree bt.
     */
    public function getDureeBt(): ?float {
        return $this->dureeBt;
    }

    /**
     * Get the from pointage bt.
     *
     * @return bool|null Returns the from pointage bt.
     */
    public function getFromPointageBt(): ?bool {
        return $this->fromPointageBt;
    }

    /**
     * Get the heures prev.
     *
     * @return float|null Returns the heures prev.
     */
    public function getHeuresPrev(): ?float {
        return $this->heuresPrev;
    }

    /**
     * Get the heures reel.
     *
     * @return float|null Returns the heures reel.
     */
    public function getHeuresReel(): ?float {
        return $this->heuresReel;
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
     * Get the no chrono preparation.
     *
     * @return int|null Returns the no chrono preparation.
     */
    public function getNoChronoPreparation(): ?int {
        return $this->noChronoPreparation;
    }

    /**
     * Get the no ligne ori.
     *
     * @return int|null Returns the no ligne ori.
     */
    public function getNoLigneOri(): ?int {
        return $this->noLigneOri;
    }

    /**
     * Get the no piece origine.
     *
     * @return string|null Returns the no piece origine.
     */
    public function getNoPieceOrigine(): ?string {
        return $this->noPieceOrigine;
    }

    /**
     * Get the numero bt.
     *
     * @return int|null Returns the numero bt.
     */
    public function getNumeroBt(): ?int {
        return $this->numeroBt;
    }

    /**
     * Get the numero facture.
     *
     * @return string|null Returns the numero facture.
     */
    public function getNumeroFacture(): ?string {
        return $this->numeroFacture;
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
     * Get the periode preparation.
     *
     * @return DateTime|null Returns the periode preparation.
     */
    public function getPeriodePreparation(): ?DateTime {
        return $this->periodePreparation;
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
     * Get the prix achat bt.
     *
     * @return float|null Returns the prix achat bt.
     */
    public function getPrixAchatBt(): ?float {
        return $this->prixAchatBt;
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
     * Get the prix unitaire pdf.
     *
     * @return float|null Returns the prix unitaire pdf.
     */
    public function getPrixUnitairePdf(): ?float {
        return $this->prixUnitairePdf;
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
     * Get the ref poste cde web ft.
     *
     * @return string|null Returns the ref poste cde web ft.
     */
    public function getRefPosteCdeWebFt(): ?string {
        return $this->refPosteCdeWebFt;
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
     * Get the taux horaire bt.
     *
     * @return float|null Returns the taux horaire bt.
     */
    public function getTauxHoraireBt(): ?float {
        return $this->tauxHoraireBt;
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
     * Get the type piece.
     *
     * @return string|null Returns the type piece.
     */
    public function getTypePiece(): ?string {
        return $this->typePiece;
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
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): FacturesLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code affaire ligne.
     *
     * @param string|null $codeAffaireLigne The code affaire ligne.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeAffaireLigne(?string $codeAffaireLigne): FacturesLignes {
        $this->codeAffaireLigne = $codeAffaireLigne;
        return $this;
    }

    /**
     * Set the code anal article.
     *
     * @param string|null $codeAnalArticle The code anal article.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeAnalArticle(?string $codeAnalArticle): FacturesLignes {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeArticle(?string $codeArticle): FacturesLignes {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeChantier(?string $codeChantier): FacturesLignes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code chantier ligne.
     *
     * @param string|null $codeChantierLigne The code chantier ligne.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeChantierLigne(?string $codeChantierLigne): FacturesLignes {
        $this->codeChantierLigne = $codeChantierLigne;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeClient(?string $codeClient): FacturesLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeRegroupement(?string $codeRegroupement): FacturesLignes {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code tva article.
     *
     * @param string|null $codeTvaArticle The code tva article.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeTvaArticle(?string $codeTvaArticle): FacturesLignes {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeUnite(?string $codeUnite): FacturesLignes {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil article.
     *
     * @param string|null $codeVentilArticle The code ventil article.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCodeVentilArticle(?string $codeVentilArticle): FacturesLignes {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the coefficient bt.
     *
     * @param float|null $coefficientBt The coefficient bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setCoefficientBt(?float $coefficientBt): FacturesLignes {
        $this->coefficientBt = $coefficientBt;
        return $this;
    }

    /**
     * Set the date bt.
     *
     * @param DateTime|null $dateBt The date bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDateBt(?DateTime $dateBt): FacturesLignes {
        $this->dateBt = $dateBt;
        return $this;
    }

    /**
     * Set the date preparation.
     *
     * @param DateTime|null $datePreparation The date preparation.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDatePreparation(?DateTime $datePreparation): FacturesLignes {
        $this->datePreparation = $datePreparation;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool|null $depuisDebFac The depuis deb fac.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDepuisDebFac(?bool $depuisDebFac): FacturesLignes {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignation(?string $designation): FacturesLignes {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignation2(?string $designation2): FacturesLignes {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignation3(?string $designation3): FacturesLignes {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation bis.
     *
     * @param string|null $designationBis The designation bis.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignationBis(?string $designationBis): FacturesLignes {
        $this->designationBis = $designationBis;
        return $this;
    }

    /**
     * Set the designation bis2.
     *
     * @param string|null $designationBis2 The designation bis2.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignationBis2(?string $designationBis2): FacturesLignes {
        $this->designationBis2 = $designationBis2;
        return $this;
    }

    /**
     * Set the designation bis3.
     *
     * @param string|null $designationBis3 The designation bis3.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignationBis3(?string $designationBis3): FacturesLignes {
        $this->designationBis3 = $designationBis3;
        return $this;
    }

    /**
     * Set the designation rtf.
     *
     * @param string|null $designationRtf The designation rtf.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDesignationRtf(?string $designationRtf): FacturesLignes {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the duree bt.
     *
     * @param float|null $dureeBt The duree bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setDureeBt(?float $dureeBt): FacturesLignes {
        $this->dureeBt = $dureeBt;
        return $this;
    }

    /**
     * Set the from pointage bt.
     *
     * @param bool|null $fromPointageBt The from pointage bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setFromPointageBt(?bool $fromPointageBt): FacturesLignes {
        $this->fromPointageBt = $fromPointageBt;
        return $this;
    }

    /**
     * Set the heures prev.
     *
     * @param float|null $heuresPrev The heures prev.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setHeuresPrev(?float $heuresPrev): FacturesLignes {
        $this->heuresPrev = $heuresPrev;
        return $this;
    }

    /**
     * Set the heures reel.
     *
     * @param float|null $heuresReel The heures reel.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setHeuresReel(?float $heuresReel): FacturesLignes {
        $this->heuresReel = $heuresReel;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool|null $imprimerDansPied The imprimer dans pied.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setImprimerDansPied(?bool $imprimerDansPied): FacturesLignes {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float|null $montantUnitaireTaxe The montant unitaire taxe.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setMontantUnitaireTaxe(?float $montantUnitaireTaxe): FacturesLignes {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string|null $motCleDansPied The mot cle dans pied.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setMotCleDansPied(?string $motCleDansPied): FacturesLignes {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int|null $noChronoPreparation The no chrono preparation.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setNoChronoPreparation(?int $noChronoPreparation): FacturesLignes {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }

    /**
     * Set the no ligne ori.
     *
     * @param int|null $noLigneOri The no ligne ori.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setNoLigneOri(?int $noLigneOri): FacturesLignes {
        $this->noLigneOri = $noLigneOri;
        return $this;
    }

    /**
     * Set the no piece origine.
     *
     * @param string|null $noPieceOrigine The no piece origine.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setNoPieceOrigine(?string $noPieceOrigine): FacturesLignes {
        $this->noPieceOrigine = $noPieceOrigine;
        return $this;
    }

    /**
     * Set the numero bt.
     *
     * @param int|null $numeroBt The numero bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setNumeroBt(?int $numeroBt): FacturesLignes {
        $this->numeroBt = $numeroBt;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string|null $numeroFacture The numero facture.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setNumeroFacture(?string $numeroFacture): FacturesLignes {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setNumeroLigne(?int $numeroLigne): FacturesLignes {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime|null $periodePreparation The periode preparation.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPeriodePreparation(?DateTime $periodePreparation): FacturesLignes {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }

    /**
     * Set the periode ventil marge.
     *
     * @param DateTime|null $periodeVentilMarge The periode ventil marge.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPeriodeVentilMarge(?DateTime $periodeVentilMarge): FacturesLignes {
        $this->periodeVentilMarge = $periodeVentilMarge;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPosteRent(?string $posteRent): FacturesLignes {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float|null $prixAchat The prix achat.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPrixAchat(?float $prixAchat): FacturesLignes {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prix achat bt.
     *
     * @param float|null $prixAchatBt The prix achat bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPrixAchatBt(?float $prixAchatBt): FacturesLignes {
        $this->prixAchatBt = $prixAchatBt;
        return $this;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float|null $prixUnitaire The prix unitaire.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPrixUnitaire(?float $prixUnitaire): FacturesLignes {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    /**
     * Set the prix unitaire pdf.
     *
     * @param float|null $prixUnitairePdf The prix unitaire pdf.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPrixUnitairePdf(?float $prixUnitairePdf): FacturesLignes {
        $this->prixUnitairePdf = $prixUnitairePdf;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool|null $pxFacture The px facture.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setPxFacture(?bool $pxFacture): FacturesLignes {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setQuantite(?float $quantite): FacturesLignes {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the ref poste cde web ft.
     *
     * @param string|null $refPosteCdeWebFt The ref poste cde web ft.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setRefPosteCdeWebFt(?string $refPosteCdeWebFt): FacturesLignes {
        $this->refPosteCdeWebFt = $refPosteCdeWebFt;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setRemiseLigne1(?float $remiseLigne1): FacturesLignes {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setRemiseLigne2(?float $remiseLigne2): FacturesLignes {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setRemiseLigne3(?float $remiseLigne3): FacturesLignes {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux horaire bt.
     *
     * @param float|null $tauxHoraireBt The taux horaire bt.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setTauxHoraireBt(?float $tauxHoraireBt): FacturesLignes {
        $this->tauxHoraireBt = $tauxHoraireBt;
        return $this;
    }

    /**
     * Set the taux tva article.
     *
     * @param float|null $tauxTvaArticle The taux tva article.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setTauxTvaArticle(?float $tauxTvaArticle): FacturesLignes {
        $this->tauxTvaArticle = $tauxTvaArticle;
        return $this;
    }

    /**
     * Set the taux tva taxe.
     *
     * @param float|null $tauxTvaTaxe The taux tva taxe.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setTauxTvaTaxe(?float $tauxTvaTaxe): FacturesLignes {
        $this->tauxTvaTaxe = $tauxTvaTaxe;
        return $this;
    }

    /**
     * Set the type piece.
     *
     * @param string|null $typePiece The type piece.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setTypePiece(?string $typePiece): FacturesLignes {
        $this->typePiece = $typePiece;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool|null $ventilMarge The ventil marge.
     * @return FacturesLignes Returns this Factures lignes.
     */
    public function setVentilMarge(?bool $ventilMarge): FacturesLignes {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
