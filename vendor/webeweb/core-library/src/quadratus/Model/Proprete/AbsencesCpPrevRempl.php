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
 * Absences cp prev rempl.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AbsencesCpPrevRempl {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code remplacant.
     *
     * @var string|null
     */
    private $codeRemplacant;

    /**
     * Date debut cp.
     *
     * @var DateTime|null
     */
    private $dateDebutCp;

    /**
     * Date debut rempl.
     *
     * @var DateTime|null
     */
    private $dateDebutRempl;

    /**
     * Date fin rempl.
     *
     * @var DateTime|null
     */
    private $dateFinRempl;

    /**
     * Indice.
     *
     * @var string|null
     */
    private $indice;

    /**
     * Type rempl.
     *
     * @var string|null
     */
    private $typeRempl;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code remplacant.
     *
     * @return string|null Returns the code remplacant.
     */
    public function getCodeRemplacant(): ?string {
        return $this->codeRemplacant;
    }

    /**
     * Get the date debut cp.
     *
     * @return DateTime|null Returns the date debut cp.
     */
    public function getDateDebutCp(): ?DateTime {
        return $this->dateDebutCp;
    }

    /**
     * Get the date debut rempl.
     *
     * @return DateTime|null Returns the date debut rempl.
     */
    public function getDateDebutRempl(): ?DateTime {
        return $this->dateDebutRempl;
    }

    /**
     * Get the date fin rempl.
     *
     * @return DateTime|null Returns the date fin rempl.
     */
    public function getDateFinRempl(): ?DateTime {
        return $this->dateFinRempl;
    }

    /**
     * Get the indice.
     *
     * @return string|null Returns the indice.
     */
    public function getIndice(): ?string {
        return $this->indice;
    }

    /**
     * Get the type rempl.
     *
     * @return string|null Returns the type rempl.
     */
    public function getTypeRempl(): ?string {
        return $this->typeRempl;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setCodeEmploye(?string $codeEmploye): AbsencesCpPrevRempl {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string|null $codeRemplacant The code remplacant.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setCodeRemplacant(?string $codeRemplacant): AbsencesCpPrevRempl {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the date debut cp.
     *
     * @param DateTime|null $dateDebutCp The date debut cp.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setDateDebutCp(?DateTime $dateDebutCp): AbsencesCpPrevRempl {
        $this->dateDebutCp = $dateDebutCp;
        return $this;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime|null $dateDebutRempl The date debut rempl.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setDateDebutRempl(?DateTime $dateDebutRempl): AbsencesCpPrevRempl {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime|null $dateFinRempl The date fin rempl.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setDateFinRempl(?DateTime $dateFinRempl): AbsencesCpPrevRempl {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string|null $indice The indice.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setIndice(?string $indice): AbsencesCpPrevRempl {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the type rempl.
     *
     * @param string|null $typeRempl The type rempl.
     * @return AbsencesCpPrevRempl Returns this Absences cp prev rempl.
     */
    public function setTypeRempl(?string $typeRempl): AbsencesCpPrevRempl {
        $this->typeRempl = $typeRempl;
        return $this;
    }
}
