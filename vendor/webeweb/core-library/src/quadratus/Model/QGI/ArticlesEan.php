<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Articles ean.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ArticlesEan {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Ean.
     *
     * @var string|null
     */
    private $ean;

    /**
     * Gamme.
     *
     * @var int|null
     */
    private $gamme;

    /**
     * Variante.
     *
     * @var string|null
     */
    private $variante;

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
     * Get the ean.
     *
     * @return string|null Returns the ean.
     */
    public function getEan(): ?string {
        return $this->ean;
    }

    /**
     * Get the gamme.
     *
     * @return int|null Returns the gamme.
     */
    public function getGamme(): ?int {
        return $this->gamme;
    }

    /**
     * Get the variante.
     *
     * @return string|null Returns the variante.
     */
    public function getVariante(): ?string {
        return $this->variante;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setCodeArticle(?string $codeArticle): ArticlesEan {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the ean.
     *
     * @param string|null $ean The ean.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setEan(?string $ean): ArticlesEan {
        $this->ean = $ean;
        return $this;
    }

    /**
     * Set the gamme.
     *
     * @param int|null $gamme The gamme.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setGamme(?int $gamme): ArticlesEan {
        $this->gamme = $gamme;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param string|null $variante The variante.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setVariante(?string $variante): ArticlesEan {
        $this->variante = $variante;
        return $this;
    }
}
