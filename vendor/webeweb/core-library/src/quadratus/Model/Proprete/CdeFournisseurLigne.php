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
 * Cde fournisseur ligne.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CdeFournisseurLigne {

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
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

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
     * Code ventil achat.
     *
     * @var string|null
     */
    private $codeVentilAchat;

    /**
     * Commande recue.
     *
     * @var bool|null
     */
    private $commandeRecue;

    /**
     * Conditionnement.
     *
     * @var string|null
     */
    private $conditionnement;

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
     * No br.
     *
     * @var string|null
     */
    private $noBr;

    /**
     * No ligne br.
     *
     * @var int|null
     */
    private $noLigneBr;

    /**
     * No piece.
     *
     * @var string|null
     */
    private $noPiece;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Pu brut.
     *
     * @var float|null
     */
    private $puBrut;

    /**
     * Qte cond.
     *
     * @var int|null
     */
    private $qteCond;

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
     * Ref article fournisseur.
     *
     * @var string|null
     */
    private $refArticleFournisseur;

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
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
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
     * Get the code ventil achat.
     *
     * @return string|null Returns the code ventil achat.
     */
    public function getCodeVentilAchat(): ?string {
        return $this->codeVentilAchat;
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
     * Get the conditionnement.
     *
     * @return string|null Returns the conditionnement.
     */
    public function getConditionnement(): ?string {
        return $this->conditionnement;
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
     * Get the no br.
     *
     * @return string|null Returns the no br.
     */
    public function getNoBr(): ?string {
        return $this->noBr;
    }

    /**
     * Get the no ligne br.
     *
     * @return int|null Returns the no ligne br.
     */
    public function getNoLigneBr(): ?int {
        return $this->noLigneBr;
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
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
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
     * Get the pu brut.
     *
     * @return float|null Returns the pu brut.
     */
    public function getPuBrut(): ?float {
        return $this->puBrut;
    }

    /**
     * Get the qte cond.
     *
     * @return int|null Returns the qte cond.
     */
    public function getQteCond(): ?int {
        return $this->qteCond;
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
     * Get the ref article fournisseur.
     *
     * @return string|null Returns the ref article fournisseur.
     */
    public function getRefArticleFournisseur(): ?string {
        return $this->refArticleFournisseur;
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
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeAffaire(?string $codeAffaire): CdeFournisseurLigne {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeArticle(?string $codeArticle): CdeFournisseurLigne {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeChantier(?string $codeChantier): CdeFournisseurLigne {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeClient(?string $codeClient): CdeFournisseurLigne {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeDepot(?string $codeDepot): CdeFournisseurLigne {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeFournisseur(?string $codeFournisseur): CdeFournisseurLigne {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeTva(?string $codeTva): CdeFournisseurLigne {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param int|null $codeUnite The code unite.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeUnite(?int $codeUnite): CdeFournisseurLigne {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string|null $codeVariante The code variante.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeVariante(?string $codeVariante): CdeFournisseurLigne {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string|null $codeVentilAchat The code ventil achat.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCodeVentilAchat(?string $codeVentilAchat): CdeFournisseurLigne {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the commande recue.
     *
     * @param bool|null $commandeRecue The commande recue.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setCommandeRecue(?bool $commandeRecue): CdeFournisseurLigne {
        $this->commandeRecue = $commandeRecue;
        return $this;
    }

    /**
     * Set the conditionnement.
     *
     * @param string|null $conditionnement The conditionnement.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setConditionnement(?string $conditionnement): CdeFournisseurLigne {
        $this->conditionnement = $conditionnement;
        return $this;
    }

    /**
     * Set the date reception prevue.
     *
     * @param DateTime|null $dateReceptionPrevue The date reception prevue.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setDateReceptionPrevue(?DateTime $dateReceptionPrevue): CdeFournisseurLigne {
        $this->dateReceptionPrevue = $dateReceptionPrevue;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setDesignation(?string $designation): CdeFournisseurLigne {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setDesignation2(?string $designation2): CdeFournisseurLigne {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setDesignation3(?string $designation3): CdeFournisseurLigne {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the indice ligne.
     *
     * @param int|null $indiceLigne The indice ligne.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setIndiceLigne(?int $indiceLigne): CdeFournisseurLigne {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }

    /**
     * Set the no br.
     *
     * @param string|null $noBr The no br.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setNoBr(?string $noBr): CdeFournisseurLigne {
        $this->noBr = $noBr;
        return $this;
    }

    /**
     * Set the no ligne br.
     *
     * @param int|null $noLigneBr The no ligne br.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setNoLigneBr(?int $noLigneBr): CdeFournisseurLigne {
        $this->noLigneBr = $noLigneBr;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string|null $noPiece The no piece.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setNoPiece(?string $noPiece): CdeFournisseurLigne {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setNumeroLigne(?int $numeroLigne): CdeFournisseurLigne {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setPosteRent(?string $posteRent): CdeFournisseurLigne {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the pu brut.
     *
     * @param float|null $puBrut The pu brut.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setPuBrut(?float $puBrut): CdeFournisseurLigne {
        $this->puBrut = $puBrut;
        return $this;
    }

    /**
     * Set the qte cond.
     *
     * @param int|null $qteCond The qte cond.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setQteCond(?int $qteCond): CdeFournisseurLigne {
        $this->qteCond = $qteCond;
        return $this;
    }

    /**
     * Set the qte origine.
     *
     * @param float|null $qteOrigine The qte origine.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setQteOrigine(?float $qteOrigine): CdeFournisseurLigne {
        $this->qteOrigine = $qteOrigine;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setQuantite(?float $quantite): CdeFournisseurLigne {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string|null $refArticleFournisseur The ref article fournisseur.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setRefArticleFournisseur(?string $refArticleFournisseur): CdeFournisseurLigne {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setRemiseLigne1(?float $remiseLigne1): CdeFournisseurLigne {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setRemiseLigne2(?float $remiseLigne2): CdeFournisseurLigne {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setRemiseLigne3(?float $remiseLigne3): CdeFournisseurLigne {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setTauxTva(?float $tauxTva): CdeFournisseurLigne {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return CdeFournisseurLigne Returns this Cde fournisseur ligne.
     */
    public function setTypeLigne(?string $typeLigne): CdeFournisseurLigne {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
