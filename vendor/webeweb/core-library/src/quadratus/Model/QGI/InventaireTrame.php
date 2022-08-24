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
 * Inventaire trame.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class InventaireTrame {

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
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

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
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return InventaireTrame Returns this Inventaire trame.
     */
    public function setCodeArticle(?string $codeArticle): InventaireTrame {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code trame.
     *
     * @param string|null $codeTrame The code trame.
     * @return InventaireTrame Returns this Inventaire trame.
     */
    public function setCodeTrame(?string $codeTrame): InventaireTrame {
        $this->codeTrame = $codeTrame;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return InventaireTrame Returns this Inventaire trame.
     */
    public function setNumeroLigne(?int $numeroLigne): InventaireTrame {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }
}
