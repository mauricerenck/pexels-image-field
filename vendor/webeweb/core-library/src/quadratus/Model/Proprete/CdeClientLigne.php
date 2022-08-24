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
 * Cde client ligne.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CdeClientLigne {

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
     * Code depot.
     *
     * @var string|null
     */
    private $codeDepot;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Code unite.
     *
     * @var int|null
     */
    private $codeUnite;

    /**
     * Code variante.
     *
     * @var string|null
     */
    private $codeVariante;

    /**
     * Code ventil vente.
     *
     * @var string|null
     */
    private $codeVentilVente;

    /**
     * Commande recue.
     *
     * @var bool|null
     */
    private $commandeRecue;

    /**
     * Date reception prevue.
     *
     * @var DateTime|null
     */
    private $dateReceptionPrevue;

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
     * Indice ligne.
     *
     * @var int|null
     */
    private $indiceLigne;

    /**
     * No bl.
     *
     * @var string|null
     */
    private $noBl;

    /**
     * No ligne bl.
     *
     * @var int|null
     */
    private $noLigneBl;

    /**
     * No piece.
     *
     * @var string|null
     */
    private $noPiece;

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
     * Prix achat.
     *
     * @var float|null
     */
    private $prixAchat;

    /**
     * Prixbloque.
     *
     * @var bool|null
     */
    private $prixbloque;

    /**
     * Pu brut.
     *
     * @var float|null
     */
    private $puBrut;

    /**
     * Qte origine.
     *
     * @var float|null
     */
    private $qteOrigine;

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
     * Taux commission.
     *
     * @var float|null
     */
    private $tauxCommission;

    /**
     * Taux tva.
     *
     * @var float|null
     */
    private $tauxTva;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

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
     * Get the code depot.
     *
     * @return string|null Returns the code depot.
     */
    public function getCodeDepot(): ?string {
        return $this->codeDepot;
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
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the code unite.
     *
     * @return int|null Returns the code unite.
     */
    public function getCodeUnite(): ?int {
        return $this->codeUnite;
    }

    /**
     * Get the code variante.
     *
     * @return string|null Returns the code variante.
     */
    public function getCodeVariante(): ?string {
        return $this->codeVariante;
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
     * Get the commande recue.
     *
     * @return bool|null Returns the commande recue.
     */
    public function getCommandeRecue(): ?bool {
        return $this->commandeRecue;
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
     * Get the indice ligne.
     *
     * @return int|null Returns the indice ligne.
     */
    public function getIndiceLigne(): ?int {
        return $this->indiceLigne;
    }

    /**
     * Get the no bl.
     *
     * @return string|null Returns the no bl.
     */
    public function getNoBl(): ?string {
        return $this->noBl;
    }

    /**
     * Get the no ligne bl.
     *
     * @return int|null Returns the no ligne bl.
     */
    public function getNoLigneBl(): ?int {
        return $this->noLigneBl;
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
     * Get the prix achat.
     *
     * @return float|null Returns the prix achat.
     */
    public function getPrixAchat(): ?float {
        return $this->prixAchat;
    }

    /**
     * Get the prixbloque.
     *
     * @return bool|null Returns the prixbloque.
     */
    public function getPrixbloque(): ?bool {
        return $this->prixbloque;
    }

    /**
     * Get the pu brut.
     *
     * @return float|null Returns the pu brut.
     */
    public function getPuBrut(): ?float {
        return $this->puBrut;
    }

    /**
     * Get the qte origine.
     *
     * @return float|null Returns the qte origine.
     */
    public function getQteOrigine(): ?float {
        return $this->qteOrigine;
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
     * Get the taux commission.
     *
     * @return float|null Returns the taux commission.
     */
    public function getTauxCommission(): ?float {
        return $this->tauxCommission;
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
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeAffaire(?string $codeAffaire): CdeClientLigne {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeArticle(?string $codeArticle): CdeClientLigne {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeChantier(?string $codeChantier): CdeClientLigne {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeClient(?string $codeClient): CdeClientLigne {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeDepot(?string $codeDepot): CdeClientLigne {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeRegroupement(?string $codeRegroupement): CdeClientLigne {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeTva(?string $codeTva): CdeClientLigne {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param int|null $codeUnite The code unite.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeUnite(?int $codeUnite): CdeClientLigne {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string|null $codeVariante The code variante.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeVariante(?string $codeVariante): CdeClientLigne {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string|null $codeVentilVente The code ventil vente.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeVentilVente(?string $codeVentilVente): CdeClientLigne {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the commande recue.
     *
     * @param bool|null $commandeRecue The commande recue.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCommandeRecue(?bool $commandeRecue): CdeClientLigne {
        $this->commandeRecue = $commandeRecue;
        return $this;
    }

    /**
     * Set the date reception prevue.
     *
     * @param DateTime|null $dateReceptionPrevue The date reception prevue.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDateReceptionPrevue(?DateTime $dateReceptionPrevue): CdeClientLigne {
        $this->dateReceptionPrevue = $dateReceptionPrevue;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDesignation(?string $designation): CdeClientLigne {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDesignation2(?string $designation2): CdeClientLigne {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDesignation3(?string $designation3): CdeClientLigne {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the indice ligne.
     *
     * @param int|null $indiceLigne The indice ligne.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setIndiceLigne(?int $indiceLigne): CdeClientLigne {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }

    /**
     * Set the no bl.
     *
     * @param string|null $noBl The no bl.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNoBl(?string $noBl): CdeClientLigne {
        $this->noBl = $noBl;
        return $this;
    }

    /**
     * Set the no ligne bl.
     *
     * @param int|null $noLigneBl The no ligne bl.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNoLigneBl(?int $noLigneBl): CdeClientLigne {
        $this->noLigneBl = $noLigneBl;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string|null $noPiece The no piece.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNoPiece(?string $noPiece): CdeClientLigne {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string|null $numeroFacture The numero facture.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNumeroFacture(?string $numeroFacture): CdeClientLigne {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNumeroLigne(?int $numeroLigne): CdeClientLigne {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float|null $prixAchat The prix achat.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setPrixAchat(?float $prixAchat): CdeClientLigne {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prixbloque.
     *
     * @param bool|null $prixbloque The prixbloque.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setPrixbloque(?bool $prixbloque): CdeClientLigne {
        $this->prixbloque = $prixbloque;
        return $this;
    }

    /**
     * Set the pu brut.
     *
     * @param float|null $puBrut The pu brut.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setPuBrut(?float $puBrut): CdeClientLigne {
        $this->puBrut = $puBrut;
        return $this;
    }

    /**
     * Set the qte origine.
     *
     * @param float|null $qteOrigine The qte origine.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setQteOrigine(?float $qteOrigine): CdeClientLigne {
        $this->qteOrigine = $qteOrigine;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setQuantite(?float $quantite): CdeClientLigne {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setRemiseLigne1(?float $remiseLigne1): CdeClientLigne {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setRemiseLigne2(?float $remiseLigne2): CdeClientLigne {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setRemiseLigne3(?float $remiseLigne3): CdeClientLigne {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux commission.
     *
     * @param float|null $tauxCommission The taux commission.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setTauxCommission(?float $tauxCommission): CdeClientLigne {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setTauxTva(?float $tauxTva): CdeClientLigne {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setTypeLigne(?string $typeLigne): CdeClientLigne {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
