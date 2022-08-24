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
 * Absences entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AbsencesEntete {

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
     * Set the code absence.
     *
     * @param string|null $codeAbsence The code absence.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setCodeAbsence(?string $codeAbsence): AbsencesEntete {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): AbsencesEntete {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AbsencesEntete {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setCodeEmploye(?string $codeEmploye): AbsencesEntete {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setDateDebutAbs(?DateTime $dateDebutAbs): AbsencesEntete {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date fin abs.
     *
     * @param DateTime|null $dateFinAbs The date fin abs.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setDateFinAbs(?DateTime $dateFinAbs): AbsencesEntete {
        $this->dateFinAbs = $dateFinAbs;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): AbsencesEntete {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setEtat(?string $etat): AbsencesEntete {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the from fermeture chantier.
     *
     * @param bool|null $fromFermetureChantier The from fermeture chantier.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setFromFermetureChantier(?bool $fromFermetureChantier): AbsencesEntete {
        $this->fromFermetureChantier = $fromFermetureChantier;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setUniqId(?string $uniqId): AbsencesEntete {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return AbsencesEntete Returns this Absences entete.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): AbsencesEntete {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
