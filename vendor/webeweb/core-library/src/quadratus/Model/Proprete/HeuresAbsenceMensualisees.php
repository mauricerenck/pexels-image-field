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
 * Heures absence mensualisees.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HeuresAbsenceMensualisees {

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
     * H abs mens.
     *
     * @var float|null
     */
    private $hAbsMens;

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
     * Get the h abs mens.
     *
     * @return float|null Returns the h abs mens.
     */
    public function getHAbsMens(): ?float {
        return $this->hAbsMens;
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
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeAbsence(?string $codeAbsence): HeuresAbsenceMensualisees {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeAffaire(?string $codeAffaire): HeuresAbsenceMensualisees {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeChantier(?string $codeChantier): HeuresAbsenceMensualisees {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeClient(?string $codeClient): HeuresAbsenceMensualisees {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): HeuresAbsenceMensualisees {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): HeuresAbsenceMensualisees {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeEmploye(?string $codeEmploye): HeuresAbsenceMensualisees {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setCodeTache(?string $codeTache): HeuresAbsenceMensualisees {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setDateDebutAbs(?DateTime $dateDebutAbs): HeuresAbsenceMensualisees {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date fin abs.
     *
     * @param DateTime|null $dateFinAbs The date fin abs.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setDateFinAbs(?DateTime $dateFinAbs): HeuresAbsenceMensualisees {
        $this->dateFinAbs = $dateFinAbs;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): HeuresAbsenceMensualisees {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setEtat(?string $etat): HeuresAbsenceMensualisees {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h abs mens.
     *
     * @param float|null $hAbsMens The h abs mens.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setHAbsMens(?float $hAbsMens): HeuresAbsenceMensualisees {
        $this->hAbsMens = $hAbsMens;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setNumBt(?int $numBt): HeuresAbsenceMensualisees {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setPeriode(?DateTime $periode): HeuresAbsenceMensualisees {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return HeuresAbsenceMensualisees Returns this Heures absence mensualisees.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): HeuresAbsenceMensualisees {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
