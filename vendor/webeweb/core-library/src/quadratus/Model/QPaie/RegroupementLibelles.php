<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Regroupement libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RegroupementLibelles {

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Num regroupement.
     *
     * @var int|null
     */
    private $numRegroupement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the num regroupement.
     *
     * @return int|null Returns the num regroupement.
     */
    public function getNumRegroupement(): ?int {
        return $this->numRegroupement;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return RegroupementLibelles Returns this Regroupement libelles.
     */
    public function setCodeLibelle(?string $codeLibelle): RegroupementLibelles {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the num regroupement.
     *
     * @param int|null $numRegroupement The num regroupement.
     * @return RegroupementLibelles Returns this Regroupement libelles.
     */
    public function setNumRegroupement(?int $numRegroupement): RegroupementLibelles {
        $this->numRegroupement = $numRegroupement;
        return $this;
    }
}
