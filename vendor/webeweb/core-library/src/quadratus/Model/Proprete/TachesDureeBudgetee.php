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

use DateTime;

/**
 * Taches duree budgetee.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class TachesDureeBudgetee {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Duree budgetee1.
     *
     * @var float|null
     */
    private $dureeBudgetee1;

    /**
     * Duree budgetee10.
     *
     * @var float|null
     */
    private $dureeBudgetee10;

    /**
     * Duree budgetee11.
     *
     * @var float|null
     */
    private $dureeBudgetee11;

    /**
     * Duree budgetee12.
     *
     * @var float|null
     */
    private $dureeBudgetee12;

    /**
     * Duree budgetee2.
     *
     * @var float|null
     */
    private $dureeBudgetee2;

    /**
     * Duree budgetee3.
     *
     * @var float|null
     */
    private $dureeBudgetee3;

    /**
     * Duree budgetee4.
     *
     * @var float|null
     */
    private $dureeBudgetee4;

    /**
     * Duree budgetee5.
     *
     * @var float|null
     */
    private $dureeBudgetee5;

    /**
     * Duree budgetee6.
     *
     * @var float|null
     */
    private $dureeBudgetee6;

    /**
     * Duree budgetee7.
     *
     * @var float|null
     */
    private $dureeBudgetee7;

    /**
     * Duree budgetee8.
     *
     * @var float|null
     */
    private $dureeBudgetee8;

    /**
     * Duree budgetee9.
     *
     * @var float|null
     */
    private $dureeBudgetee9;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the duree budgetee1.
     *
     * @return float|null Returns the duree budgetee1.
     */
    public function getDureeBudgetee1(): ?float {
        return $this->dureeBudgetee1;
    }

    /**
     * Get the duree budgetee10.
     *
     * @return float|null Returns the duree budgetee10.
     */
    public function getDureeBudgetee10(): ?float {
        return $this->dureeBudgetee10;
    }

    /**
     * Get the duree budgetee11.
     *
     * @return float|null Returns the duree budgetee11.
     */
    public function getDureeBudgetee11(): ?float {
        return $this->dureeBudgetee11;
    }

    /**
     * Get the duree budgetee12.
     *
     * @return float|null Returns the duree budgetee12.
     */
    public function getDureeBudgetee12(): ?float {
        return $this->dureeBudgetee12;
    }

    /**
     * Get the duree budgetee2.
     *
     * @return float|null Returns the duree budgetee2.
     */
    public function getDureeBudgetee2(): ?float {
        return $this->dureeBudgetee2;
    }

    /**
     * Get the duree budgetee3.
     *
     * @return float|null Returns the duree budgetee3.
     */
    public function getDureeBudgetee3(): ?float {
        return $this->dureeBudgetee3;
    }

    /**
     * Get the duree budgetee4.
     *
     * @return float|null Returns the duree budgetee4.
     */
    public function getDureeBudgetee4(): ?float {
        return $this->dureeBudgetee4;
    }

    /**
     * Get the duree budgetee5.
     *
     * @return float|null Returns the duree budgetee5.
     */
    public function getDureeBudgetee5(): ?float {
        return $this->dureeBudgetee5;
    }

    /**
     * Get the duree budgetee6.
     *
     * @return float|null Returns the duree budgetee6.
     */
    public function getDureeBudgetee6(): ?float {
        return $this->dureeBudgetee6;
    }

    /**
     * Get the duree budgetee7.
     *
     * @return float|null Returns the duree budgetee7.
     */
    public function getDureeBudgetee7(): ?float {
        return $this->dureeBudgetee7;
    }

    /**
     * Get the duree budgetee8.
     *
     * @return float|null Returns the duree budgetee8.
     */
    public function getDureeBudgetee8(): ?float {
        return $this->dureeBudgetee8;
    }

    /**
     * Get the duree budgetee9.
     *
     * @return float|null Returns the duree budgetee9.
     */
    public function getDureeBudgetee9(): ?float {
        return $this->dureeBudgetee9;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setCodeAffaire(?string $codeAffaire): TachesDureeBudgetee {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setCodeChantier(?string $codeChantier): TachesDureeBudgetee {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setCodeClient(?string $codeClient): TachesDureeBudgetee {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setCodeTache(?string $codeTache): TachesDureeBudgetee {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the duree budgetee1.
     *
     * @param float|null $dureeBudgetee1 The duree budgetee1.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee1(?float $dureeBudgetee1): TachesDureeBudgetee {
        $this->dureeBudgetee1 = $dureeBudgetee1;
        return $this;
    }

    /**
     * Set the duree budgetee10.
     *
     * @param float|null $dureeBudgetee10 The duree budgetee10.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee10(?float $dureeBudgetee10): TachesDureeBudgetee {
        $this->dureeBudgetee10 = $dureeBudgetee10;
        return $this;
    }

    /**
     * Set the duree budgetee11.
     *
     * @param float|null $dureeBudgetee11 The duree budgetee11.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee11(?float $dureeBudgetee11): TachesDureeBudgetee {
        $this->dureeBudgetee11 = $dureeBudgetee11;
        return $this;
    }

    /**
     * Set the duree budgetee12.
     *
     * @param float|null $dureeBudgetee12 The duree budgetee12.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee12(?float $dureeBudgetee12): TachesDureeBudgetee {
        $this->dureeBudgetee12 = $dureeBudgetee12;
        return $this;
    }

    /**
     * Set the duree budgetee2.
     *
     * @param float|null $dureeBudgetee2 The duree budgetee2.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee2(?float $dureeBudgetee2): TachesDureeBudgetee {
        $this->dureeBudgetee2 = $dureeBudgetee2;
        return $this;
    }

    /**
     * Set the duree budgetee3.
     *
     * @param float|null $dureeBudgetee3 The duree budgetee3.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee3(?float $dureeBudgetee3): TachesDureeBudgetee {
        $this->dureeBudgetee3 = $dureeBudgetee3;
        return $this;
    }

    /**
     * Set the duree budgetee4.
     *
     * @param float|null $dureeBudgetee4 The duree budgetee4.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee4(?float $dureeBudgetee4): TachesDureeBudgetee {
        $this->dureeBudgetee4 = $dureeBudgetee4;
        return $this;
    }

    /**
     * Set the duree budgetee5.
     *
     * @param float|null $dureeBudgetee5 The duree budgetee5.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee5(?float $dureeBudgetee5): TachesDureeBudgetee {
        $this->dureeBudgetee5 = $dureeBudgetee5;
        return $this;
    }

    /**
     * Set the duree budgetee6.
     *
     * @param float|null $dureeBudgetee6 The duree budgetee6.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee6(?float $dureeBudgetee6): TachesDureeBudgetee {
        $this->dureeBudgetee6 = $dureeBudgetee6;
        return $this;
    }

    /**
     * Set the duree budgetee7.
     *
     * @param float|null $dureeBudgetee7 The duree budgetee7.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee7(?float $dureeBudgetee7): TachesDureeBudgetee {
        $this->dureeBudgetee7 = $dureeBudgetee7;
        return $this;
    }

    /**
     * Set the duree budgetee8.
     *
     * @param float|null $dureeBudgetee8 The duree budgetee8.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee8(?float $dureeBudgetee8): TachesDureeBudgetee {
        $this->dureeBudgetee8 = $dureeBudgetee8;
        return $this;
    }

    /**
     * Set the duree budgetee9.
     *
     * @param float|null $dureeBudgetee9 The duree budgetee9.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setDureeBudgetee9(?float $dureeBudgetee9): TachesDureeBudgetee {
        $this->dureeBudgetee9 = $dureeBudgetee9;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setNumBt(?int $numBt): TachesDureeBudgetee {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return TachesDureeBudgetee Returns this Taches duree budgetee.
     */
    public function setPeriode(?DateTime $periode): TachesDureeBudgetee {
        $this->periode = $periode;
        return $this;
    }
}
