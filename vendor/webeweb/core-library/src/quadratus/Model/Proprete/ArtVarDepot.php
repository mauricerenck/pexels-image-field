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

/**
 * Art var depot.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArtVarDepot {

    /**
     * Allee casier.
     *
     * @var string|null
     */
    private $alleeCasier;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code depot.
     *
     * @var string|null
     */
    private $codeDepot;

    /**
     * Code variante.
     *
     * @var string|null
     */
    private $codeVariante;

    /**
     * Qte stock attente.
     *
     * @var float|null
     */
    private $qteStockAttente;

    /**
     * Qte stock maxi.
     *
     * @var float|null
     */
    private $qteStockMaxi;

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
     * Qte stock reserve.
     *
     * @var float|null
     */
    private $qteStockReserve;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the allee casier.
     *
     * @return string|null Returns the allee casier.
     */
    public function getAlleeCasier(): ?string {
        return $this->alleeCasier;
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
     * Get the code depot.
     *
     * @return string|null Returns the code depot.
     */
    public function getCodeDepot(): ?string {
        return $this->codeDepot;
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
     * Get the qte stock attente.
     *
     * @return float|null Returns the qte stock attente.
     */
    public function getQteStockAttente(): ?float {
        return $this->qteStockAttente;
    }

    /**
     * Get the qte stock maxi.
     *
     * @return float|null Returns the qte stock maxi.
     */
    public function getQteStockMaxi(): ?float {
        return $this->qteStockMaxi;
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
     * Get the qte stock reserve.
     *
     * @return float|null Returns the qte stock reserve.
     */
    public function getQteStockReserve(): ?float {
        return $this->qteStockReserve;
    }

    /**
     * Set the allee casier.
     *
     * @param string|null $alleeCasier The allee casier.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setAlleeCasier(?string $alleeCasier): ArtVarDepot {
        $this->alleeCasier = $alleeCasier;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setCodeArticle(?string $codeArticle): ArtVarDepot {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setCodeDepot(?string $codeDepot): ArtVarDepot {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string|null $codeVariante The code variante.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setCodeVariante(?string $codeVariante): ArtVarDepot {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the qte stock attente.
     *
     * @param float|null $qteStockAttente The qte stock attente.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockAttente(?float $qteStockAttente): ArtVarDepot {
        $this->qteStockAttente = $qteStockAttente;
        return $this;
    }

    /**
     * Set the qte stock maxi.
     *
     * @param float|null $qteStockMaxi The qte stock maxi.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockMaxi(?float $qteStockMaxi): ArtVarDepot {
        $this->qteStockMaxi = $qteStockMaxi;
        return $this;
    }

    /**
     * Set the qte stock mini.
     *
     * @param float|null $qteStockMini The qte stock mini.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockMini(?float $qteStockMini): ArtVarDepot {
        $this->qteStockMini = $qteStockMini;
        return $this;
    }

    /**
     * Set the qte stock reel.
     *
     * @param float|null $qteStockReel The qte stock reel.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockReel(?float $qteStockReel): ArtVarDepot {
        $this->qteStockReel = $qteStockReel;
        return $this;
    }

    /**
     * Set the qte stock reserve.
     *
     * @param float|null $qteStockReserve The qte stock reserve.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockReserve(?float $qteStockReserve): ArtVarDepot {
        $this->qteStockReserve = $qteStockReserve;
        return $this;
    }
}
