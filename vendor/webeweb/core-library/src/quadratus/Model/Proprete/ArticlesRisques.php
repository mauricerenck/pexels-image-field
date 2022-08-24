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
 * Articles risques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ArticlesRisques {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code risque.
     *
     * @var string|null
     */
    private $codeRisque;

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
     * Get the code risque.
     *
     * @return string|null Returns the code risque.
     */
    public function getCodeRisque(): ?string {
        return $this->codeRisque;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticlesRisques Returns this Articles risques.
     */
    public function setCodeArticle(?string $codeArticle): ArticlesRisques {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code risque.
     *
     * @param string|null $codeRisque The code risque.
     * @return ArticlesRisques Returns this Articles risques.
     */
    public function setCodeRisque(?string $codeRisque): ArticlesRisques {
        $this->codeRisque = $codeRisque;
        return $this;
    }
}
