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
 * Emp recap code penibilite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpRecapCodePenibilite {

    /**
     * Code penibilite.
     *
     * @var string|null
     */
    private $codePenibilite;

    /**
     * Id recap.
     *
     * @var int|null
     */
    private $idRecap;

    /**
     * Numero ordre.
     *
     * @var int|null
     */
    private $numeroOrdre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code penibilite.
     *
     * @return string|null Returns the code penibilite.
     */
    public function getCodePenibilite(): ?string {
        return $this->codePenibilite;
    }

    /**
     * Get the id recap.
     *
     * @return int|null Returns the id recap.
     */
    public function getIdRecap(): ?int {
        return $this->idRecap;
    }

    /**
     * Get the numero ordre.
     *
     * @return int|null Returns the numero ordre.
     */
    public function getNumeroOrdre(): ?int {
        return $this->numeroOrdre;
    }

    /**
     * Set the code penibilite.
     *
     * @param string|null $codePenibilite The code penibilite.
     * @return EmpRecapCodePenibilite Returns this Emp recap code penibilite.
     */
    public function setCodePenibilite(?string $codePenibilite): EmpRecapCodePenibilite {
        $this->codePenibilite = $codePenibilite;
        return $this;
    }

    /**
     * Set the id recap.
     *
     * @param int|null $idRecap The id recap.
     * @return EmpRecapCodePenibilite Returns this Emp recap code penibilite.
     */
    public function setIdRecap(?int $idRecap): EmpRecapCodePenibilite {
        $this->idRecap = $idRecap;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return EmpRecapCodePenibilite Returns this Emp recap code penibilite.
     */
    public function setNumeroOrdre(?int $numeroOrdre): EmpRecapCodePenibilite {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }
}
