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
 * Const tab anal achat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstTabAnalAchat {

    /**
     * Code anal article.
     *
     * @var string|null
     */
    private $codeAnalArticle;

    /**
     * Code anal fourn.
     *
     * @var string|null
     */
    private $codeAnalFourn;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code anal article.
     *
     * @return string|null Returns the code anal article.
     */
    public function getCodeAnalArticle(): ?string {
        return $this->codeAnalArticle;
    }

    /**
     * Get the code anal fourn.
     *
     * @return string|null Returns the code anal fourn.
     */
    public function getCodeAnalFourn(): ?string {
        return $this->codeAnalFourn;
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Set the code anal article.
     *
     * @param string|null $codeAnalArticle The code anal article.
     * @return ConstTabAnalAchat Returns this Const tab anal achat.
     */
    public function setCodeAnalArticle(?string $codeAnalArticle): ConstTabAnalAchat {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code anal fourn.
     *
     * @param string|null $codeAnalFourn The code anal fourn.
     * @return ConstTabAnalAchat Returns this Const tab anal achat.
     */
    public function setCodeAnalFourn(?string $codeAnalFourn): ConstTabAnalAchat {
        $this->codeAnalFourn = $codeAnalFourn;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return ConstTabAnalAchat Returns this Const tab anal achat.
     */
    public function setCodeCentre(?string $codeCentre): ConstTabAnalAchat {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return ConstTabAnalAchat Returns this Const tab anal achat.
     */
    public function setCodeNature(?string $codeNature): ConstTabAnalAchat {
        $this->codeNature = $codeNature;
        return $this;
    }
}
