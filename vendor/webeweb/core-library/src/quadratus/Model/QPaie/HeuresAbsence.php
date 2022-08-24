<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Heures absence.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HeuresAbsence {

    /**
     * Absence au.
     *
     * @var DateTime|null
     */
    private $absenceAu;

    /**
     * Absence du.
     *
     * @var DateTime|null
     */
    private $absenceDu;

    /**
     * Date jour.
     *
     * @var DateTime|null
     */
    private $dateJour;

    /**
     * Nb h non effectue.
     *
     * @var float|null
     */
    private $nbHNonEffectue;

    /**
     * Nb h retenue salaire.
     *
     * @var float|null
     */
    private $nbHRetenueSalaire;

    /**
     * Nb ha reintegrer.
     *
     * @var float|null
     */
    private $nbHaReintegrer;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Transfere.
     *
     * @var string|null
     */
    private $transfere;

    /**
     * Type absence.
     *
     * @var string|null
     */
    private $typeAbsence;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the absence au.
     *
     * @return DateTime|null Returns the absence au.
     */
    public function getAbsenceAu(): ?DateTime {
        return $this->absenceAu;
    }

    /**
     * Get the absence du.
     *
     * @return DateTime|null Returns the absence du.
     */
    public function getAbsenceDu(): ?DateTime {
        return $this->absenceDu;
    }

    /**
     * Get the date jour.
     *
     * @return DateTime|null Returns the date jour.
     */
    public function getDateJour(): ?DateTime {
        return $this->dateJour;
    }

    /**
     * Get the nb h non effectue.
     *
     * @return float|null Returns the nb h non effectue.
     */
    public function getNbHNonEffectue(): ?float {
        return $this->nbHNonEffectue;
    }

    /**
     * Get the nb h retenue salaire.
     *
     * @return float|null Returns the nb h retenue salaire.
     */
    public function getNbHRetenueSalaire(): ?float {
        return $this->nbHRetenueSalaire;
    }

    /**
     * Get the nb ha reintegrer.
     *
     * @return float|null Returns the nb ha reintegrer.
     */
    public function getNbHaReintegrer(): ?float {
        return $this->nbHaReintegrer;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the transfere.
     *
     * @return string|null Returns the transfere.
     */
    public function getTransfere(): ?string {
        return $this->transfere;
    }

    /**
     * Get the type absence.
     *
     * @return string|null Returns the type absence.
     */
    public function getTypeAbsence(): ?string {
        return $this->typeAbsence;
    }

    /**
     * Set the absence au.
     *
     * @param DateTime|null $absenceAu The absence au.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setAbsenceAu(?DateTime $absenceAu): HeuresAbsence {
        $this->absenceAu = $absenceAu;
        return $this;
    }

    /**
     * Set the absence du.
     *
     * @param DateTime|null $absenceDu The absence du.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setAbsenceDu(?DateTime $absenceDu): HeuresAbsence {
        $this->absenceDu = $absenceDu;
        return $this;
    }

    /**
     * Set the date jour.
     *
     * @param DateTime|null $dateJour The date jour.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setDateJour(?DateTime $dateJour): HeuresAbsence {
        $this->dateJour = $dateJour;
        return $this;
    }

    /**
     * Set the nb h non effectue.
     *
     * @param float|null $nbHNonEffectue The nb h non effectue.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setNbHNonEffectue(?float $nbHNonEffectue): HeuresAbsence {
        $this->nbHNonEffectue = $nbHNonEffectue;
        return $this;
    }

    /**
     * Set the nb h retenue salaire.
     *
     * @param float|null $nbHRetenueSalaire The nb h retenue salaire.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setNbHRetenueSalaire(?float $nbHRetenueSalaire): HeuresAbsence {
        $this->nbHRetenueSalaire = $nbHRetenueSalaire;
        return $this;
    }

    /**
     * Set the nb ha reintegrer.
     *
     * @param float|null $nbHaReintegrer The nb ha reintegrer.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setNbHaReintegrer(?float $nbHaReintegrer): HeuresAbsence {
        $this->nbHaReintegrer = $nbHaReintegrer;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setNumeroEmploye(?string $numeroEmploye): HeuresAbsence {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the transfere.
     *
     * @param string|null $transfere The transfere.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setTransfere(?string $transfere): HeuresAbsence {
        $this->transfere = $transfere;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string|null $typeAbsence The type absence.
     * @return HeuresAbsence Returns this Heures absence.
     */
    public function setTypeAbsence(?string $typeAbsence): HeuresAbsence {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }
}
