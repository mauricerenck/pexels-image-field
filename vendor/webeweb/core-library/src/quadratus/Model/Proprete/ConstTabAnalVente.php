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
 * Const tab anal vente.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstTabAnalVente {

    /**
     * Code anal article.
     *
     * @var string|null
     */
    private $codeAnalArticle;

    /**
     * Code anal client.
     *
     * @var string|null
     */
    private $codeAnalClient;

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
     * Type.
     *
     * @var string|null
     */
    private $type;

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
     * Get the code anal client.
     *
     * @return string|null Returns the code anal client.
     */
    public function getCodeAnalClient(): ?string {
        return $this->codeAnalClient;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the code anal article.
     *
     * @param string|null $codeAnalArticle The code anal article.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeAnalArticle(?string $codeAnalArticle): ConstTabAnalVente {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code anal client.
     *
     * @param string|null $codeAnalClient The code anal client.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeAnalClient(?string $codeAnalClient): ConstTabAnalVente {
        $this->codeAnalClient = $codeAnalClient;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeCentre(?string $codeCentre): ConstTabAnalVente {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeNature(?string $codeNature): ConstTabAnalVente {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setType(?string $type): ConstTabAnalVente {
        $this->type = $type;
        return $this;
    }
}
