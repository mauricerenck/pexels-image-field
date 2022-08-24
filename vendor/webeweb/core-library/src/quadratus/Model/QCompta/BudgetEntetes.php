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

use DateTime;

/**
 * Budget entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class BudgetEntetes {

    /**
     * Arrondi.
     *
     * @var string|null
     */
    private $arrondi;

    /**
     * Code budget.
     *
     * @var string|null
     */
    private $codeBudget;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Num col ref.
     *
     * @var int|null
     */
    private $numColRef;

    /**
     * Periode debut.
     *
     * @var DateTime|null
     */
    private $periodeDebut;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Type col ref.
     *
     * @var string|null
     */
    private $typeColRef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the arrondi.
     *
     * @return string|null Returns the arrondi.
     */
    public function getArrondi(): ?string {
        return $this->arrondi;
    }

    /**
     * Get the code budget.
     *
     * @return string|null Returns the code budget.
     */
    public function getCodeBudget(): ?string {
        return $this->codeBudget;
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
     * Get the num col ref.
     *
     * @return int|null Returns the num col ref.
     */
    public function getNumColRef(): ?int {
        return $this->numColRef;
    }

    /**
     * Get the periode debut.
     *
     * @return DateTime|null Returns the periode debut.
     */
    public function getPeriodeDebut(): ?DateTime {
        return $this->periodeDebut;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin(): ?DateTime {
        return $this->periodeFin;
    }

    /**
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Get the type col ref.
     *
     * @return string|null Returns the type col ref.
     */
    public function getTypeColRef(): ?string {
        return $this->typeColRef;
    }

    /**
     * Set the arrondi.
     *
     * @param string|null $arrondi The arrondi.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setArrondi(?string $arrondi): BudgetEntetes {
        $this->arrondi = $arrondi;
        return $this;
    }

    /**
     * Set the code budget.
     *
     * @param string|null $codeBudget The code budget.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setCodeBudget(?string $codeBudget): BudgetEntetes {
        $this->codeBudget = $codeBudget;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setLibelle(?string $libelle): BudgetEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num col ref.
     *
     * @param int|null $numColRef The num col ref.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setNumColRef(?int $numColRef): BudgetEntetes {
        $this->numColRef = $numColRef;
        return $this;
    }

    /**
     * Set the periode debut.
     *
     * @param DateTime|null $periodeDebut The periode debut.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setPeriodeDebut(?DateTime $periodeDebut): BudgetEntetes {
        $this->periodeDebut = $periodeDebut;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setPeriodeFin(?DateTime $periodeFin): BudgetEntetes {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setRefImage(?string $refImage): BudgetEntetes {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the type col ref.
     *
     * @param string|null $typeColRef The type col ref.
     * @return BudgetEntetes Returns this Budget entetes.
     */
    public function setTypeColRef(?string $typeColRef): BudgetEntetes {
        $this->typeColRef = $typeColRef;
        return $this;
    }
}
