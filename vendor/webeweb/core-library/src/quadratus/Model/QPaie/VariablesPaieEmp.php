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
 * Variables paie emp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class VariablesPaieEmp {

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Valeur1.
     *
     * @var float|null
     */
    private $valeur1;

    /**
     * Valeur2.
     *
     * @var float|null
     */
    private $valeur2;

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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the valeur1.
     *
     * @return float|null Returns the valeur1.
     */
    public function getValeur1(): ?float {
        return $this->valeur1;
    }

    /**
     * Get the valeur2.
     *
     * @return float|null Returns the valeur2.
     */
    public function getValeur2(): ?float {
        return $this->valeur2;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setCodeLibelle(?string $codeLibelle): VariablesPaieEmp {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setLibelle(?string $libelle): VariablesPaieEmp {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setNumeroEmploye(?string $numeroEmploye): VariablesPaieEmp {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float|null $valeur1 The valeur1.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setValeur1(?float $valeur1): VariablesPaieEmp {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float|null $valeur2 The valeur2.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setValeur2(?float $valeur2): VariablesPaieEmp {
        $this->valeur2 = $valeur2;
        return $this;
    }
}
