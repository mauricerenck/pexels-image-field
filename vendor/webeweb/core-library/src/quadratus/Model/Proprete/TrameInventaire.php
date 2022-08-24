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
 * Trame inventaire.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class TrameInventaire {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code trame.
     *
     * @var string|null
     */
    private $codeTrame;

    /**
     * Num ordre.
     *
     * @var int|null
     */
    private $numOrdre;

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
     * Get the code trame.
     *
     * @return string|null Returns the code trame.
     */
    public function getCodeTrame(): ?string {
        return $this->codeTrame;
    }

    /**
     * Get the num ordre.
     *
     * @return int|null Returns the num ordre.
     */
    public function getNumOrdre(): ?int {
        return $this->numOrdre;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return TrameInventaire Returns this Trame inventaire.
     */
    public function setCodeArticle(?string $codeArticle): TrameInventaire {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code trame.
     *
     * @param string|null $codeTrame The code trame.
     * @return TrameInventaire Returns this Trame inventaire.
     */
    public function setCodeTrame(?string $codeTrame): TrameInventaire {
        $this->codeTrame = $codeTrame;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int|null $numOrdre The num ordre.
     * @return TrameInventaire Returns this Trame inventaire.
     */
    public function setNumOrdre(?int $numOrdre): TrameInventaire {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
