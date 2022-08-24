<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Comptes das2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ComptesDas2 {

    /**
     * Avantage nature.
     *
     * @var float|null
     */
    private $avantageNature;

    /**
     * Indemnite rbt.
     *
     * @var float|null
     */
    private $indemniteRbt;

    /**
     * Montant1.
     *
     * @var float|null
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float|null
     */
    private $montant2;

    /**
     * Nature1.
     *
     * @var string|null
     */
    private $nature1;

    /**
     * Nature2.
     *
     * @var string|null
     */
    private $nature2;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Retenue source.
     *
     * @var float|null
     */
    private $retenueSource;

    /**
     * Tvada.
     *
     * @var float|null
     */
    private $tvada;

    /**
     * Type an.
     *
     * @var string|null
     */
    private $typeAn;

    /**
     * Type ir.
     *
     * @var string|null
     */
    private $typeIr;

    /**
     * Type rs.
     *
     * @var string|null
     */
    private $typeRs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avantage nature.
     *
     * @return float|null Returns the avantage nature.
     */
    public function getAvantageNature(): ?float {
        return $this->avantageNature;
    }

    /**
     * Get the indemnite rbt.
     *
     * @return float|null Returns the indemnite rbt.
     */
    public function getIndemniteRbt(): ?float {
        return $this->indemniteRbt;
    }

    /**
     * Get the montant1.
     *
     * @return float|null Returns the montant1.
     */
    public function getMontant1(): ?float {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float|null Returns the montant2.
     */
    public function getMontant2(): ?float {
        return $this->montant2;
    }

    /**
     * Get the nature1.
     *
     * @return string|null Returns the nature1.
     */
    public function getNature1(): ?string {
        return $this->nature1;
    }

    /**
     * Get the nature2.
     *
     * @return string|null Returns the nature2.
     */
    public function getNature2(): ?string {
        return $this->nature2;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the retenue source.
     *
     * @return float|null Returns the retenue source.
     */
    public function getRetenueSource(): ?float {
        return $this->retenueSource;
    }

    /**
     * Get the tvada.
     *
     * @return float|null Returns the tvada.
     */
    public function getTvada(): ?float {
        return $this->tvada;
    }

    /**
     * Get the type an.
     *
     * @return string|null Returns the type an.
     */
    public function getTypeAn(): ?string {
        return $this->typeAn;
    }

    /**
     * Get the type ir.
     *
     * @return string|null Returns the type ir.
     */
    public function getTypeIr(): ?string {
        return $this->typeIr;
    }

    /**
     * Get the type rs.
     *
     * @return string|null Returns the type rs.
     */
    public function getTypeRs(): ?string {
        return $this->typeRs;
    }

    /**
     * Set the avantage nature.
     *
     * @param float|null $avantageNature The avantage nature.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setAvantageNature(?float $avantageNature): ComptesDas2 {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the indemnite rbt.
     *
     * @param float|null $indemniteRbt The indemnite rbt.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setIndemniteRbt(?float $indemniteRbt): ComptesDas2 {
        $this->indemniteRbt = $indemniteRbt;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setMontant1(?float $montant1): ComptesDas2 {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setMontant2(?float $montant2): ComptesDas2 {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the nature1.
     *
     * @param string|null $nature1 The nature1.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setNature1(?string $nature1): ComptesDas2 {
        $this->nature1 = $nature1;
        return $this;
    }

    /**
     * Set the nature2.
     *
     * @param string|null $nature2 The nature2.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setNature2(?string $nature2): ComptesDas2 {
        $this->nature2 = $nature2;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setNumeroCompte(?string $numeroCompte): ComptesDas2 {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the retenue source.
     *
     * @param float|null $retenueSource The retenue source.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setRetenueSource(?float $retenueSource): ComptesDas2 {
        $this->retenueSource = $retenueSource;
        return $this;
    }

    /**
     * Set the tvada.
     *
     * @param float|null $tvada The tvada.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setTvada(?float $tvada): ComptesDas2 {
        $this->tvada = $tvada;
        return $this;
    }

    /**
     * Set the type an.
     *
     * @param string|null $typeAn The type an.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setTypeAn(?string $typeAn): ComptesDas2 {
        $this->typeAn = $typeAn;
        return $this;
    }

    /**
     * Set the type ir.
     *
     * @param string|null $typeIr The type ir.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setTypeIr(?string $typeIr): ComptesDas2 {
        $this->typeIr = $typeIr;
        return $this;
    }

    /**
     * Set the type rs.
     *
     * @param string|null $typeRs The type rs.
     * @return ComptesDas2 Returns this Comptes das2.
     */
    public function setTypeRs(?string $typeRs): ComptesDas2 {
        $this->typeRs = $typeRs;
        return $this;
    }
}
