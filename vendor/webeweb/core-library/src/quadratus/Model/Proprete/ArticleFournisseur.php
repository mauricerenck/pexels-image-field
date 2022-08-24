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
 * Article fournisseur.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArticleFournisseur {

    /**
     * Avt der code devise.
     *
     * @var string|null
     */
    private $avtDerCodeDevise;

    /**
     * Avt der date achat.
     *
     * @var DateTime|null
     */
    private $avtDerDateAchat;

    /**
     * Avt der euros.
     *
     * @var bool|null
     */
    private $avtDerEuros;

    /**
     * Avt der px achat.
     *
     * @var float|null
     */
    private $avtDerPxAchat;

    /**
     * Avt der qte achat.
     *
     * @var float|null
     */
    private $avtDerQteAchat;

    /**
     * Avt der remise1.
     *
     * @var float|null
     */
    private $avtDerRemise1;

    /**
     * Avt der remise2.
     *
     * @var float|null
     */
    private $avtDerRemise2;

    /**
     * Avt der remise3.
     *
     * @var float|null
     */
    private $avtDerRemise3;

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
     * Commentaires.
     *
     * @var string|null
     */
    private $commentaires;

    /**
     * Conditionnement.
     *
     * @var string|null
     */
    private $conditionnement;

    /**
     * Delai le.
     *
     * @var int|null
     */
    private $delaiLe;

    /**
     * Delai nombre.
     *
     * @var int|null
     */
    private $delaiNombre;

    /**
     * Delai type.
     *
     * @var int|null
     */
    private $delaiType;

    /**
     * Der code devise.
     *
     * @var string|null
     */
    private $derCodeDevise;

    /**
     * Der date achat.
     *
     * @var DateTime|null
     */
    private $derDateAchat;

    /**
     * Der euros.
     *
     * @var bool|null
     */
    private $derEuros;

    /**
     * Der px achat.
     *
     * @var float|null
     */
    private $derPxAchat;

    /**
     * Der qte achat.
     *
     * @var float|null
     */
    private $derQteAchat;

    /**
     * Der remise1.
     *
     * @var float|null
     */
    private $derRemise1;

    /**
     * Der remise2.
     *
     * @var float|null
     */
    private $derRemise2;

    /**
     * Der remise3.
     *
     * @var float|null
     */
    private $derRemise3;

    /**
     * Mini code devise.
     *
     * @var string|null
     */
    private $miniCodeDevise;

    /**
     * Mini date achat.
     *
     * @var DateTime|null
     */
    private $miniDateAchat;

    /**
     * Mini euros.
     *
     * @var bool|null
     */
    private $miniEuros;

    /**
     * Mini px achat.
     *
     * @var float|null
     */
    private $miniPxAchat;

    /**
     * Mini qte achat.
     *
     * @var float|null
     */
    private $miniQteAchat;

    /**
     * Mini remise1.
     *
     * @var float|null
     */
    private $miniRemise1;

    /**
     * Mini remise2.
     *
     * @var float|null
     */
    private $miniRemise2;

    /**
     * Mini remise3.
     *
     * @var float|null
     */
    private $miniRemise3;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Qte economique.
     *
     * @var float|null
     */
    private $qteEconomique;

    /**
     * Ref article fournisseur.
     *
     * @var string|null
     */
    private $refArticleFournisseur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avt der code devise.
     *
     * @return string|null Returns the avt der code devise.
     */
    public function getAvtDerCodeDevise(): ?string {
        return $this->avtDerCodeDevise;
    }

    /**
     * Get the avt der date achat.
     *
     * @return DateTime|null Returns the avt der date achat.
     */
    public function getAvtDerDateAchat(): ?DateTime {
        return $this->avtDerDateAchat;
    }

    /**
     * Get the avt der euros.
     *
     * @return bool|null Returns the avt der euros.
     */
    public function getAvtDerEuros(): ?bool {
        return $this->avtDerEuros;
    }

    /**
     * Get the avt der px achat.
     *
     * @return float|null Returns the avt der px achat.
     */
    public function getAvtDerPxAchat(): ?float {
        return $this->avtDerPxAchat;
    }

    /**
     * Get the avt der qte achat.
     *
     * @return float|null Returns the avt der qte achat.
     */
    public function getAvtDerQteAchat(): ?float {
        return $this->avtDerQteAchat;
    }

    /**
     * Get the avt der remise1.
     *
     * @return float|null Returns the avt der remise1.
     */
    public function getAvtDerRemise1(): ?float {
        return $this->avtDerRemise1;
    }

    /**
     * Get the avt der remise2.
     *
     * @return float|null Returns the avt der remise2.
     */
    public function getAvtDerRemise2(): ?float {
        return $this->avtDerRemise2;
    }

    /**
     * Get the avt der remise3.
     *
     * @return float|null Returns the avt der remise3.
     */
    public function getAvtDerRemise3(): ?float {
        return $this->avtDerRemise3;
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
     * Get the commentaires.
     *
     * @return string|null Returns the commentaires.
     */
    public function getCommentaires(): ?string {
        return $this->commentaires;
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
     * Get the delai le.
     *
     * @return int|null Returns the delai le.
     */
    public function getDelaiLe(): ?int {
        return $this->delaiLe;
    }

    /**
     * Get the delai nombre.
     *
     * @return int|null Returns the delai nombre.
     */
    public function getDelaiNombre(): ?int {
        return $this->delaiNombre;
    }

    /**
     * Get the delai type.
     *
     * @return int|null Returns the delai type.
     */
    public function getDelaiType(): ?int {
        return $this->delaiType;
    }

    /**
     * Get the der code devise.
     *
     * @return string|null Returns the der code devise.
     */
    public function getDerCodeDevise(): ?string {
        return $this->derCodeDevise;
    }

    /**
     * Get the der date achat.
     *
     * @return DateTime|null Returns the der date achat.
     */
    public function getDerDateAchat(): ?DateTime {
        return $this->derDateAchat;
    }

    /**
     * Get the der euros.
     *
     * @return bool|null Returns the der euros.
     */
    public function getDerEuros(): ?bool {
        return $this->derEuros;
    }

    /**
     * Get the der px achat.
     *
     * @return float|null Returns the der px achat.
     */
    public function getDerPxAchat(): ?float {
        return $this->derPxAchat;
    }

    /**
     * Get the der qte achat.
     *
     * @return float|null Returns the der qte achat.
     */
    public function getDerQteAchat(): ?float {
        return $this->derQteAchat;
    }

    /**
     * Get the der remise1.
     *
     * @return float|null Returns the der remise1.
     */
    public function getDerRemise1(): ?float {
        return $this->derRemise1;
    }

    /**
     * Get the der remise2.
     *
     * @return float|null Returns the der remise2.
     */
    public function getDerRemise2(): ?float {
        return $this->derRemise2;
    }

    /**
     * Get the der remise3.
     *
     * @return float|null Returns the der remise3.
     */
    public function getDerRemise3(): ?float {
        return $this->derRemise3;
    }

    /**
     * Get the mini code devise.
     *
     * @return string|null Returns the mini code devise.
     */
    public function getMiniCodeDevise(): ?string {
        return $this->miniCodeDevise;
    }

    /**
     * Get the mini date achat.
     *
     * @return DateTime|null Returns the mini date achat.
     */
    public function getMiniDateAchat(): ?DateTime {
        return $this->miniDateAchat;
    }

    /**
     * Get the mini euros.
     *
     * @return bool|null Returns the mini euros.
     */
    public function getMiniEuros(): ?bool {
        return $this->miniEuros;
    }

    /**
     * Get the mini px achat.
     *
     * @return float|null Returns the mini px achat.
     */
    public function getMiniPxAchat(): ?float {
        return $this->miniPxAchat;
    }

    /**
     * Get the mini qte achat.
     *
     * @return float|null Returns the mini qte achat.
     */
    public function getMiniQteAchat(): ?float {
        return $this->miniQteAchat;
    }

    /**
     * Get the mini remise1.
     *
     * @return float|null Returns the mini remise1.
     */
    public function getMiniRemise1(): ?float {
        return $this->miniRemise1;
    }

    /**
     * Get the mini remise2.
     *
     * @return float|null Returns the mini remise2.
     */
    public function getMiniRemise2(): ?float {
        return $this->miniRemise2;
    }

    /**
     * Get the mini remise3.
     *
     * @return float|null Returns the mini remise3.
     */
    public function getMiniRemise3(): ?float {
        return $this->miniRemise3;
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
     * Get the qte economique.
     *
     * @return float|null Returns the qte economique.
     */
    public function getQteEconomique(): ?float {
        return $this->qteEconomique;
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
     * Set the avt der code devise.
     *
     * @param string|null $avtDerCodeDevise The avt der code devise.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerCodeDevise(?string $avtDerCodeDevise): ArticleFournisseur {
        $this->avtDerCodeDevise = $avtDerCodeDevise;
        return $this;
    }

    /**
     * Set the avt der date achat.
     *
     * @param DateTime|null $avtDerDateAchat The avt der date achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerDateAchat(?DateTime $avtDerDateAchat): ArticleFournisseur {
        $this->avtDerDateAchat = $avtDerDateAchat;
        return $this;
    }

    /**
     * Set the avt der euros.
     *
     * @param bool|null $avtDerEuros The avt der euros.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerEuros(?bool $avtDerEuros): ArticleFournisseur {
        $this->avtDerEuros = $avtDerEuros;
        return $this;
    }

    /**
     * Set the avt der px achat.
     *
     * @param float|null $avtDerPxAchat The avt der px achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerPxAchat(?float $avtDerPxAchat): ArticleFournisseur {
        $this->avtDerPxAchat = $avtDerPxAchat;
        return $this;
    }

    /**
     * Set the avt der qte achat.
     *
     * @param float|null $avtDerQteAchat The avt der qte achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerQteAchat(?float $avtDerQteAchat): ArticleFournisseur {
        $this->avtDerQteAchat = $avtDerQteAchat;
        return $this;
    }

    /**
     * Set the avt der remise1.
     *
     * @param float|null $avtDerRemise1 The avt der remise1.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerRemise1(?float $avtDerRemise1): ArticleFournisseur {
        $this->avtDerRemise1 = $avtDerRemise1;
        return $this;
    }

    /**
     * Set the avt der remise2.
     *
     * @param float|null $avtDerRemise2 The avt der remise2.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerRemise2(?float $avtDerRemise2): ArticleFournisseur {
        $this->avtDerRemise2 = $avtDerRemise2;
        return $this;
    }

    /**
     * Set the avt der remise3.
     *
     * @param float|null $avtDerRemise3 The avt der remise3.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setAvtDerRemise3(?float $avtDerRemise3): ArticleFournisseur {
        $this->avtDerRemise3 = $avtDerRemise3;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setCodeArticle(?string $codeArticle): ArticleFournisseur {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setCodeFournisseur(?string $codeFournisseur): ArticleFournisseur {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string|null $commentaires The commentaires.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setCommentaires(?string $commentaires): ArticleFournisseur {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the conditionnement.
     *
     * @param string|null $conditionnement The conditionnement.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setConditionnement(?string $conditionnement): ArticleFournisseur {
        $this->conditionnement = $conditionnement;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int|null $delaiLe The delai le.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDelaiLe(?int $delaiLe): ArticleFournisseur {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int|null $delaiNombre The delai nombre.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDelaiNombre(?int $delaiNombre): ArticleFournisseur {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int|null $delaiType The delai type.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDelaiType(?int $delaiType): ArticleFournisseur {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the der code devise.
     *
     * @param string|null $derCodeDevise The der code devise.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerCodeDevise(?string $derCodeDevise): ArticleFournisseur {
        $this->derCodeDevise = $derCodeDevise;
        return $this;
    }

    /**
     * Set the der date achat.
     *
     * @param DateTime|null $derDateAchat The der date achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerDateAchat(?DateTime $derDateAchat): ArticleFournisseur {
        $this->derDateAchat = $derDateAchat;
        return $this;
    }

    /**
     * Set the der euros.
     *
     * @param bool|null $derEuros The der euros.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerEuros(?bool $derEuros): ArticleFournisseur {
        $this->derEuros = $derEuros;
        return $this;
    }

    /**
     * Set the der px achat.
     *
     * @param float|null $derPxAchat The der px achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerPxAchat(?float $derPxAchat): ArticleFournisseur {
        $this->derPxAchat = $derPxAchat;
        return $this;
    }

    /**
     * Set the der qte achat.
     *
     * @param float|null $derQteAchat The der qte achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerQteAchat(?float $derQteAchat): ArticleFournisseur {
        $this->derQteAchat = $derQteAchat;
        return $this;
    }

    /**
     * Set the der remise1.
     *
     * @param float|null $derRemise1 The der remise1.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerRemise1(?float $derRemise1): ArticleFournisseur {
        $this->derRemise1 = $derRemise1;
        return $this;
    }

    /**
     * Set the der remise2.
     *
     * @param float|null $derRemise2 The der remise2.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerRemise2(?float $derRemise2): ArticleFournisseur {
        $this->derRemise2 = $derRemise2;
        return $this;
    }

    /**
     * Set the der remise3.
     *
     * @param float|null $derRemise3 The der remise3.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setDerRemise3(?float $derRemise3): ArticleFournisseur {
        $this->derRemise3 = $derRemise3;
        return $this;
    }

    /**
     * Set the mini code devise.
     *
     * @param string|null $miniCodeDevise The mini code devise.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniCodeDevise(?string $miniCodeDevise): ArticleFournisseur {
        $this->miniCodeDevise = $miniCodeDevise;
        return $this;
    }

    /**
     * Set the mini date achat.
     *
     * @param DateTime|null $miniDateAchat The mini date achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniDateAchat(?DateTime $miniDateAchat): ArticleFournisseur {
        $this->miniDateAchat = $miniDateAchat;
        return $this;
    }

    /**
     * Set the mini euros.
     *
     * @param bool|null $miniEuros The mini euros.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniEuros(?bool $miniEuros): ArticleFournisseur {
        $this->miniEuros = $miniEuros;
        return $this;
    }

    /**
     * Set the mini px achat.
     *
     * @param float|null $miniPxAchat The mini px achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniPxAchat(?float $miniPxAchat): ArticleFournisseur {
        $this->miniPxAchat = $miniPxAchat;
        return $this;
    }

    /**
     * Set the mini qte achat.
     *
     * @param float|null $miniQteAchat The mini qte achat.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniQteAchat(?float $miniQteAchat): ArticleFournisseur {
        $this->miniQteAchat = $miniQteAchat;
        return $this;
    }

    /**
     * Set the mini remise1.
     *
     * @param float|null $miniRemise1 The mini remise1.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniRemise1(?float $miniRemise1): ArticleFournisseur {
        $this->miniRemise1 = $miniRemise1;
        return $this;
    }

    /**
     * Set the mini remise2.
     *
     * @param float|null $miniRemise2 The mini remise2.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniRemise2(?float $miniRemise2): ArticleFournisseur {
        $this->miniRemise2 = $miniRemise2;
        return $this;
    }

    /**
     * Set the mini remise3.
     *
     * @param float|null $miniRemise3 The mini remise3.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setMiniRemise3(?float $miniRemise3): ArticleFournisseur {
        $this->miniRemise3 = $miniRemise3;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setNumeroLigne(?int $numeroLigne): ArticleFournisseur {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the qte economique.
     *
     * @param float|null $qteEconomique The qte economique.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setQteEconomique(?float $qteEconomique): ArticleFournisseur {
        $this->qteEconomique = $qteEconomique;
        return $this;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string|null $refArticleFournisseur The ref article fournisseur.
     * @return ArticleFournisseur Returns this Article fournisseur.
     */
    public function setRefArticleFournisseur(?string $refArticleFournisseur): ArticleFournisseur {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }
}
