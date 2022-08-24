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
 * Regroupements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Regroupements {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

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
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
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
     * Get the num ordre.
     *
     * @return int|null Returns the num ordre.
     */
    public function getNumOrdre(): ?int {
        return $this->numOrdre;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Regroupements Returns this Regroupements.
     */
    public function setCode(?string $code): Regroupements {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Regroupements Returns this Regroupements.
     */
    public function setLibelle(?string $libelle): Regroupements {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int|null $numOrdre The num ordre.
     * @return Regroupements Returns this Regroupements.
     */
    public function setNumOrdre(?int $numOrdre): Regroupements {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
