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
 * Histo paie absences.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoPaieAbsences {

    /**
     * Code abs paie.
     *
     * @var string|null
     */
    private $codeAbsPaie;

    /**
     * Code absence.
     *
     * @var string|null
     */
    private $codeAbsence;

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
     * Date debut abs.
     *
     * @var DateTime|null
     */
    private $dateDebutAbs;

    /**
     * Date fin abs.
     *
     * @var DateTime|null
     */
    private $dateFinAbs;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Duree absence.
     *
     * @var float|null
     */
    private $dureeAbsence;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Nb jours abs.
     *
     * @var float|null
     */
    private $nbJoursAbs;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

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
     * Get the code abs paie.
     *
     * @return string|null Returns the code abs paie.
     */
    public function getCodeAbsPaie(): ?string {
        return $this->codeAbsPaie;
    }

    /**
     * Get the code absence.
     *
     * @return string|null Returns the code absence.
     */
    public function getCodeAbsence(): ?string {
        return $this->codeAbsence;
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
     * Get the date debut abs.
     *
     * @return DateTime|null Returns the date debut abs.
     */
    public function getDateDebutAbs(): ?DateTime {
        return $this->dateDebutAbs;
    }

    /**
     * Get the date fin abs.
     *
     * @return DateTime|null Returns the date fin abs.
     */
    public function getDateFinAbs(): ?DateTime {
        return $this->dateFinAbs;
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
     * Get the duree absence.
     *
     * @return float|null Returns the duree absence.
     */
    public function getDureeAbsence(): ?float {
        return $this->dureeAbsence;
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
     * Get the nb jours abs.
     *
     * @return float|null Returns the nb jours abs.
     */
    public function getNbJoursAbs(): ?float {
        return $this->nbJoursAbs;
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
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
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
     * Set the code abs paie.
     *
     * @param string|null $codeAbsPaie The code abs paie.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeAbsPaie(?string $codeAbsPaie): HistoPaieAbsences {
        $this->codeAbsPaie = $codeAbsPaie;
        return $this;
    }

    /**
     * Set the code absence.
     *
     * @param string|null $codeAbsence The code absence.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeAbsence(?string $codeAbsence): HistoPaieAbsences {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): HistoPaieAbsences {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): HistoPaieAbsences {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoPaieAbsences {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDateDebutAbs(?DateTime $dateDebutAbs): HistoPaieAbsences {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date fin abs.
     *
     * @param DateTime|null $dateFinAbs The date fin abs.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDateFinAbs(?DateTime $dateFinAbs): HistoPaieAbsences {
        $this->dateFinAbs = $dateFinAbs;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): HistoPaieAbsences {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the duree absence.
     *
     * @param float|null $dureeAbsence The duree absence.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDureeAbsence(?float $dureeAbsence): HistoPaieAbsences {
        $this->dureeAbsence = $dureeAbsence;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setEtat(?string $etat): HistoPaieAbsences {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the nb jours abs.
     *
     * @param float|null $nbJoursAbs The nb jours abs.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setNbJoursAbs(?float $nbJoursAbs): HistoPaieAbsences {
        $this->nbJoursAbs = $nbJoursAbs;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setPeriode(?DateTime $periode): HistoPaieAbsences {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setUniqId(?string $uniqId): HistoPaieAbsences {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): HistoPaieAbsences {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
