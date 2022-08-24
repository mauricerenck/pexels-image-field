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
 * Chantiers budget commande.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersBudgetCommande {

    /**
     * Budget commande1.
     *
     * @var float|null
     */
    private $budgetCommande1;

    /**
     * Budget commande10.
     *
     * @var float|null
     */
    private $budgetCommande10;

    /**
     * Budget commande11.
     *
     * @var float|null
     */
    private $budgetCommande11;

    /**
     * Budget commande12.
     *
     * @var float|null
     */
    private $budgetCommande12;

    /**
     * Budget commande2.
     *
     * @var float|null
     */
    private $budgetCommande2;

    /**
     * Budget commande3.
     *
     * @var float|null
     */
    private $budgetCommande3;

    /**
     * Budget commande4.
     *
     * @var float|null
     */
    private $budgetCommande4;

    /**
     * Budget commande5.
     *
     * @var float|null
     */
    private $budgetCommande5;

    /**
     * Budget commande6.
     *
     * @var float|null
     */
    private $budgetCommande6;

    /**
     * Budget commande7.
     *
     * @var float|null
     */
    private $budgetCommande7;

    /**
     * Budget commande8.
     *
     * @var float|null
     */
    private $budgetCommande8;

    /**
     * Budget commande9.
     *
     * @var float|null
     */
    private $budgetCommande9;

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
     * Get the budget commande1.
     *
     * @return float|null Returns the budget commande1.
     */
    public function getBudgetCommande1(): ?float {
        return $this->budgetCommande1;
    }

    /**
     * Get the budget commande10.
     *
     * @return float|null Returns the budget commande10.
     */
    public function getBudgetCommande10(): ?float {
        return $this->budgetCommande10;
    }

    /**
     * Get the budget commande11.
     *
     * @return float|null Returns the budget commande11.
     */
    public function getBudgetCommande11(): ?float {
        return $this->budgetCommande11;
    }

    /**
     * Get the budget commande12.
     *
     * @return float|null Returns the budget commande12.
     */
    public function getBudgetCommande12(): ?float {
        return $this->budgetCommande12;
    }

    /**
     * Get the budget commande2.
     *
     * @return float|null Returns the budget commande2.
     */
    public function getBudgetCommande2(): ?float {
        return $this->budgetCommande2;
    }

    /**
     * Get the budget commande3.
     *
     * @return float|null Returns the budget commande3.
     */
    public function getBudgetCommande3(): ?float {
        return $this->budgetCommande3;
    }

    /**
     * Get the budget commande4.
     *
     * @return float|null Returns the budget commande4.
     */
    public function getBudgetCommande4(): ?float {
        return $this->budgetCommande4;
    }

    /**
     * Get the budget commande5.
     *
     * @return float|null Returns the budget commande5.
     */
    public function getBudgetCommande5(): ?float {
        return $this->budgetCommande5;
    }

    /**
     * Get the budget commande6.
     *
     * @return float|null Returns the budget commande6.
     */
    public function getBudgetCommande6(): ?float {
        return $this->budgetCommande6;
    }

    /**
     * Get the budget commande7.
     *
     * @return float|null Returns the budget commande7.
     */
    public function getBudgetCommande7(): ?float {
        return $this->budgetCommande7;
    }

    /**
     * Get the budget commande8.
     *
     * @return float|null Returns the budget commande8.
     */
    public function getBudgetCommande8(): ?float {
        return $this->budgetCommande8;
    }

    /**
     * Get the budget commande9.
     *
     * @return float|null Returns the budget commande9.
     */
    public function getBudgetCommande9(): ?float {
        return $this->budgetCommande9;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Set the budget commande1.
     *
     * @param float|null $budgetCommande1 The budget commande1.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande1(?float $budgetCommande1): ChantiersBudgetCommande {
        $this->budgetCommande1 = $budgetCommande1;
        return $this;
    }

    /**
     * Set the budget commande10.
     *
     * @param float|null $budgetCommande10 The budget commande10.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande10(?float $budgetCommande10): ChantiersBudgetCommande {
        $this->budgetCommande10 = $budgetCommande10;
        return $this;
    }

    /**
     * Set the budget commande11.
     *
     * @param float|null $budgetCommande11 The budget commande11.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande11(?float $budgetCommande11): ChantiersBudgetCommande {
        $this->budgetCommande11 = $budgetCommande11;
        return $this;
    }

    /**
     * Set the budget commande12.
     *
     * @param float|null $budgetCommande12 The budget commande12.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande12(?float $budgetCommande12): ChantiersBudgetCommande {
        $this->budgetCommande12 = $budgetCommande12;
        return $this;
    }

    /**
     * Set the budget commande2.
     *
     * @param float|null $budgetCommande2 The budget commande2.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande2(?float $budgetCommande2): ChantiersBudgetCommande {
        $this->budgetCommande2 = $budgetCommande2;
        return $this;
    }

    /**
     * Set the budget commande3.
     *
     * @param float|null $budgetCommande3 The budget commande3.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande3(?float $budgetCommande3): ChantiersBudgetCommande {
        $this->budgetCommande3 = $budgetCommande3;
        return $this;
    }

    /**
     * Set the budget commande4.
     *
     * @param float|null $budgetCommande4 The budget commande4.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande4(?float $budgetCommande4): ChantiersBudgetCommande {
        $this->budgetCommande4 = $budgetCommande4;
        return $this;
    }

    /**
     * Set the budget commande5.
     *
     * @param float|null $budgetCommande5 The budget commande5.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande5(?float $budgetCommande5): ChantiersBudgetCommande {
        $this->budgetCommande5 = $budgetCommande5;
        return $this;
    }

    /**
     * Set the budget commande6.
     *
     * @param float|null $budgetCommande6 The budget commande6.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande6(?float $budgetCommande6): ChantiersBudgetCommande {
        $this->budgetCommande6 = $budgetCommande6;
        return $this;
    }

    /**
     * Set the budget commande7.
     *
     * @param float|null $budgetCommande7 The budget commande7.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande7(?float $budgetCommande7): ChantiersBudgetCommande {
        $this->budgetCommande7 = $budgetCommande7;
        return $this;
    }

    /**
     * Set the budget commande8.
     *
     * @param float|null $budgetCommande8 The budget commande8.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande8(?float $budgetCommande8): ChantiersBudgetCommande {
        $this->budgetCommande8 = $budgetCommande8;
        return $this;
    }

    /**
     * Set the budget commande9.
     *
     * @param float|null $budgetCommande9 The budget commande9.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setBudgetCommande9(?float $budgetCommande9): ChantiersBudgetCommande {
        $this->budgetCommande9 = $budgetCommande9;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersBudgetCommande {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersBudgetCommande {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setCodeClient(?string $codeClient): ChantiersBudgetCommande {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return ChantiersBudgetCommande Returns this Chantiers budget commande.
     */
    public function setPeriode(?DateTime $periode): ChantiersBudgetCommande {
        $this->periode = $periode;
        return $this;
    }
}
