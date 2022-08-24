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
 * Articles frn prix a.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArticlesFrnPrixA {

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
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Prix cond.
     *
     * @var bool|null
     */
    private $prixCond;

    /**
     * Px achat.
     *
     * @var float|null
     */
    private $pxAchat;

    /**
     * Qte achat.
     *
     * @var float|null
     */
    private $qteAchat;

    /**
     * Qte cond.
     *
     * @var int|null
     */
    private $qteCond;

    /**
     * Remise1.
     *
     * @var float|null
     */
    private $remise1;

    /**
     * Remise2.
     *
     * @var float|null
     */
    private $remise2;

    /**
     * Remise3.
     *
     * @var float|null
     */
    private $remise3;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the prix cond.
     *
     * @return bool|null Returns the prix cond.
     */
    public function getPrixCond(): ?bool {
        return $this->prixCond;
    }

    /**
     * Get the px achat.
     *
     * @return float|null Returns the px achat.
     */
    public function getPxAchat(): ?float {
        return $this->pxAchat;
    }

    /**
     * Get the qte achat.
     *
     * @return float|null Returns the qte achat.
     */
    public function getQteAchat(): ?float {
        return $this->qteAchat;
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
     * Get the remise1.
     *
     * @return float|null Returns the remise1.
     */
    public function getRemise1(): ?float {
        return $this->remise1;
    }

    /**
     * Get the remise2.
     *
     * @return float|null Returns the remise2.
     */
    public function getRemise2(): ?float {
        return $this->remise2;
    }

    /**
     * Get the remise3.
     *
     * @return float|null Returns the remise3.
     */
    public function getRemise3(): ?float {
        return $this->remise3;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setCodeArticle(?string $codeArticle): ArticlesFrnPrixA {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setCodeFournisseur(?string $codeFournisseur): ArticlesFrnPrixA {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setDateDebut(?DateTime $dateDebut): ArticlesFrnPrixA {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the prix cond.
     *
     * @param bool|null $prixCond The prix cond.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setPrixCond(?bool $prixCond): ArticlesFrnPrixA {
        $this->prixCond = $prixCond;
        return $this;
    }

    /**
     * Set the px achat.
     *
     * @param float|null $pxAchat The px achat.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setPxAchat(?float $pxAchat): ArticlesFrnPrixA {
        $this->pxAchat = $pxAchat;
        return $this;
    }

    /**
     * Set the qte achat.
     *
     * @param float|null $qteAchat The qte achat.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setQteAchat(?float $qteAchat): ArticlesFrnPrixA {
        $this->qteAchat = $qteAchat;
        return $this;
    }

    /**
     * Set the qte cond.
     *
     * @param int|null $qteCond The qte cond.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setQteCond(?int $qteCond): ArticlesFrnPrixA {
        $this->qteCond = $qteCond;
        return $this;
    }

    /**
     * Set the remise1.
     *
     * @param float|null $remise1 The remise1.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setRemise1(?float $remise1): ArticlesFrnPrixA {
        $this->remise1 = $remise1;
        return $this;
    }

    /**
     * Set the remise2.
     *
     * @param float|null $remise2 The remise2.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setRemise2(?float $remise2): ArticlesFrnPrixA {
        $this->remise2 = $remise2;
        return $this;
    }

    /**
     * Set the remise3.
     *
     * @param float|null $remise3 The remise3.
     * @return ArticlesFrnPrixA Returns this Articles frn prix a.
     */
    public function setRemise3(?float $remise3): ArticlesFrnPrixA {
        $this->remise3 = $remise3;
        return $this;
    }
}
