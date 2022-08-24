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
 * Articles prevention.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArticlesPrevention {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code prev.
     *
     * @var string|null
     */
    private $codePrev;

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
     * Get the code prev.
     *
     * @return string|null Returns the code prev.
     */
    public function getCodePrev(): ?string {
        return $this->codePrev;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticlesPrevention Returns this Articles prevention.
     */
    public function setCodeArticle(?string $codeArticle): ArticlesPrevention {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code prev.
     *
     * @param string|null $codePrev The code prev.
     * @return ArticlesPrevention Returns this Articles prevention.
     */
    public function setCodePrev(?string $codePrev): ArticlesPrevention {
        $this->codePrev = $codePrev;
        return $this;
    }
}
