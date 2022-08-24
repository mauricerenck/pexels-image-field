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
 * Employes pointages.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class EmployesPointages {

    /**
     * Code collabo valid.
     *
     * @var string|null
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Periode pointage cloturee.
     *
     * @var DateTime|null
     */
    private $periodePointageCloturee;

    /**
     * Periode previsionnel generee.
     *
     * @var DateTime|null
     */
    private $periodePrevisionnelGeneree;

    /**
     * Uniq id synchro.
     *
     * @var string|null
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collabo valid.
     *
     * @return string|null Returns the code collabo valid.
     */
    public function getCodeCollaboValid(): ?string {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
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
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
     */
    public function getDateValidationSynchro(): ?DateTime {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the periode pointage cloturee.
     *
     * @return DateTime|null Returns the periode pointage cloturee.
     */
    public function getPeriodePointageCloturee(): ?DateTime {
        return $this->periodePointageCloturee;
    }

    /**
     * Get the periode previsionnel generee.
     *
     * @return DateTime|null Returns the periode previsionnel generee.
     */
    public function getPeriodePrevisionnelGeneree(): ?DateTime {
        return $this->periodePrevisionnelGeneree;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string|null Returns the uniq id synchro.
     */
    public function getUniqIdSynchro(): ?string {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): EmployesPointages {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): EmployesPointages {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setCodeEmploye(?string $codeEmploye): EmployesPointages {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): EmployesPointages {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setEtat(?string $etat): EmployesPointages {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime|null $periodePointageCloturee The periode pointage cloturee.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setPeriodePointageCloturee(?DateTime $periodePointageCloturee): EmployesPointages {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }

    /**
     * Set the periode previsionnel generee.
     *
     * @param DateTime|null $periodePrevisionnelGeneree The periode previsionnel generee.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setPeriodePrevisionnelGeneree(?DateTime $periodePrevisionnelGeneree): EmployesPointages {
        $this->periodePrevisionnelGeneree = $periodePrevisionnelGeneree;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return EmployesPointages Returns this Employes pointages.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): EmployesPointages {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
