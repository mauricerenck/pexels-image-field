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
 * Cde type insp entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CdeTypeInspEntetes {

    /**
     * Code inspecteur.
     *
     * @var string|null
     */
    private $codeInspecteur;

    /**
     * Dt validite debut.
     *
     * @var DateTime|null
     */
    private $dtValiditeDebut;

    /**
     * Dt validite fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFin;

    /**
     * Montant budget.
     *
     * @var float|null
     */
    private $montantBudget;

    /**
     * Montant ht cde.
     *
     * @var float|null
     */
    private $montantHtCde;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code inspecteur.
     *
     * @return string|null Returns the code inspecteur.
     */
    public function getCodeInspecteur(): ?string {
        return $this->codeInspecteur;
    }

    /**
     * Get the dt validite debut.
     *
     * @return DateTime|null Returns the dt validite debut.
     */
    public function getDtValiditeDebut(): ?DateTime {
        return $this->dtValiditeDebut;
    }

    /**
     * Get the dt validite fin.
     *
     * @return DateTime|null Returns the dt validite fin.
     */
    public function getDtValiditeFin(): ?DateTime {
        return $this->dtValiditeFin;
    }

    /**
     * Get the montant budget.
     *
     * @return float|null Returns the montant budget.
     */
    public function getMontantBudget(): ?float {
        return $this->montantBudget;
    }

    /**
     * Get the montant ht cde.
     *
     * @return float|null Returns the montant ht cde.
     */
    public function getMontantHtCde(): ?float {
        return $this->montantHtCde;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string|null $codeInspecteur The code inspecteur.
     * @return CdeTypeInspEntetes Returns this Cde type insp entetes.
     */
    public function setCodeInspecteur(?string $codeInspecteur): CdeTypeInspEntetes {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the dt validite debut.
     *
     * @param DateTime|null $dtValiditeDebut The dt validite debut.
     * @return CdeTypeInspEntetes Returns this Cde type insp entetes.
     */
    public function setDtValiditeDebut(?DateTime $dtValiditeDebut): CdeTypeInspEntetes {
        $this->dtValiditeDebut = $dtValiditeDebut;
        return $this;
    }

    /**
     * Set the dt validite fin.
     *
     * @param DateTime|null $dtValiditeFin The dt validite fin.
     * @return CdeTypeInspEntetes Returns this Cde type insp entetes.
     */
    public function setDtValiditeFin(?DateTime $dtValiditeFin): CdeTypeInspEntetes {
        $this->dtValiditeFin = $dtValiditeFin;
        return $this;
    }

    /**
     * Set the montant budget.
     *
     * @param float|null $montantBudget The montant budget.
     * @return CdeTypeInspEntetes Returns this Cde type insp entetes.
     */
    public function setMontantBudget(?float $montantBudget): CdeTypeInspEntetes {
        $this->montantBudget = $montantBudget;
        return $this;
    }

    /**
     * Set the montant ht cde.
     *
     * @param float|null $montantHtCde The montant ht cde.
     * @return CdeTypeInspEntetes Returns this Cde type insp entetes.
     */
    public function setMontantHtCde(?float $montantHtCde): CdeTypeInspEntetes {
        $this->montantHtCde = $montantHtCde;
        return $this;
    }
}
