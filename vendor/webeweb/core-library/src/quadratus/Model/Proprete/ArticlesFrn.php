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
 * Articles frn.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArticlesFrn {

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
     * Delai local.
     *
     * @var bool|null
     */
    private $delaiLocal;

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
     * Get the delai local.
     *
     * @return bool|null Returns the delai local.
     */
    public function getDelaiLocal(): ?bool {
        return $this->delaiLocal;
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
     * Get the ref article fournisseur.
     *
     * @return string|null Returns the ref article fournisseur.
     */
    public function getRefArticleFournisseur(): ?string {
        return $this->refArticleFournisseur;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setCodeArticle(?string $codeArticle): ArticlesFrn {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setCodeFournisseur(?string $codeFournisseur): ArticlesFrn {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string|null $commentaires The commentaires.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setCommentaires(?string $commentaires): ArticlesFrn {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the conditionnement.
     *
     * @param string|null $conditionnement The conditionnement.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setConditionnement(?string $conditionnement): ArticlesFrn {
        $this->conditionnement = $conditionnement;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int|null $delaiLe The delai le.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setDelaiLe(?int $delaiLe): ArticlesFrn {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai local.
     *
     * @param bool|null $delaiLocal The delai local.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setDelaiLocal(?bool $delaiLocal): ArticlesFrn {
        $this->delaiLocal = $delaiLocal;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int|null $delaiNombre The delai nombre.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setDelaiNombre(?int $delaiNombre): ArticlesFrn {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int|null $delaiType The delai type.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setDelaiType(?int $delaiType): ArticlesFrn {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string|null $refArticleFournisseur The ref article fournisseur.
     * @return ArticlesFrn Returns this Articles frn.
     */
    public function setRefArticleFournisseur(?string $refArticleFournisseur): ArticlesFrn {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }
}
