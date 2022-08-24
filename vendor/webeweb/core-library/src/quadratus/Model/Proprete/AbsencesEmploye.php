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
 * Absences employe.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AbsencesEmploye {

    /**
     * Absence modifiee.
     *
     * @var string|null
     */
    private $absenceModifiee;

    /**
     * Code absence.
     *
     * @var string|null
     */
    private $codeAbsence;

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
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

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
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * From fermeture chantier.
     *
     * @var bool|null
     */
    private $fromFermetureChantier;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

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
     * Get the absence modifiee.
     *
     * @return string|null Returns the absence modifiee.
     */
    public function getAbsenceModifiee(): ?string {
        return $this->absenceModifiee;
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
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
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
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the from fermeture chantier.
     *
     * @return bool|null Returns the from fermeture chantier.
     */
    public function getFromFermetureChantier(): ?bool {
        return $this->fromFermetureChantier;
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
     * Set the absence modifiee.
     *
     * @param string|null $absenceModifiee The absence modifiee.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setAbsenceModifiee(?string $absenceModifiee): AbsencesEmploye {
        $this->absenceModifiee = $absenceModifiee;
        return $this;
    }

    /**
     * Set the code absence.
     *
     * @param string|null $codeAbsence The code absence.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeAbsence(?string $codeAbsence): AbsencesEmploye {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeAffaire(?string $codeAffaire): AbsencesEmploye {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeChantier(?string $codeChantier): AbsencesEmploye {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeClient(?string $codeClient): AbsencesEmploye {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): AbsencesEmploye {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AbsencesEmploye {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeEmploye(?string $codeEmploye): AbsencesEmploye {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setCodeTache(?string $codeTache): AbsencesEmploye {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setDateDebutAbs(?DateTime $dateDebutAbs): AbsencesEmploye {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date fin abs.
     *
     * @param DateTime|null $dateFinAbs The date fin abs.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setDateFinAbs(?DateTime $dateFinAbs): AbsencesEmploye {
        $this->dateFinAbs = $dateFinAbs;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): AbsencesEmploye {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setEtat(?string $etat): AbsencesEmploye {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the from fermeture chantier.
     *
     * @param bool|null $fromFermetureChantier The from fermeture chantier.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setFromFermetureChantier(?bool $fromFermetureChantier): AbsencesEmploye {
        $this->fromFermetureChantier = $fromFermetureChantier;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setNumBt(?int $numBt): AbsencesEmploye {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setUniqId(?string $uniqId): AbsencesEmploye {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return AbsencesEmploye Returns this Absences employe.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): AbsencesEmploye {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
