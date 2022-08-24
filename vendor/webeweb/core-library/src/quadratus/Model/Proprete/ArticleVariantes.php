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
 * Article variantes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArticleVariantes {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code barre.
     *
     * @var string|null
     */
    private $codeBarre;

    /**
     * Code variante.
     *
     * @var string|null
     */
    private $codeVariante;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

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
     * Get the code barre.
     *
     * @return string|null Returns the code barre.
     */
    public function getCodeBarre(): ?string {
        return $this->codeBarre;
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticleVariantes Returns this Article variantes.
     */
    public function setCodeArticle(?string $codeArticle): ArticleVariantes {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param string|null $codeBarre The code barre.
     * @return ArticleVariantes Returns this Article variantes.
     */
    public function setCodeBarre(?string $codeBarre): ArticleVariantes {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string|null $codeVariante The code variante.
     * @return ArticleVariantes Returns this Article variantes.
     */
    public function setCodeVariante(?string $codeVariante): ArticleVariantes {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ArticleVariantes Returns this Article variantes.
     */
    public function setLibelle(?string $libelle): ArticleVariantes {
        $this->libelle = $libelle;
        return $this;
    }
}
