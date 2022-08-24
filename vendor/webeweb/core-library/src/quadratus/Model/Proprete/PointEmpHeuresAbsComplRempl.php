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
 * Point emp heures abs compl rempl.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbsComplRempl {

    /**
     * Avenant signe.
     *
     * @var bool|null
     */
    private $avenantSigne;

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
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Date abs decalee.
     *
     * @var DateTime|null
     */
    private $dateAbsDecalee;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Employe remplace.
     *
     * @var string|null
     */
    private $employeRemplace;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Heures jour.
     *
     * @var DateTime|null
     */
    private $heuresJour;

    /**
     * Heures nuit.
     *
     * @var DateTime|null
     */
    private $heuresNuit;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Type heure.
     *
     * @var string|null
     */
    private $typeHeure;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Uniq id planning.
     *
     * @var string|null
     */
    private $uniqIdPlanning;

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
     * Get the avenant signe.
     *
     * @return bool|null Returns the avenant signe.
     */
    public function getAvenantSigne(): ?bool {
        return $this->avenantSigne;
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
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the date abs decalee.
     *
     * @return DateTime|null Returns the date abs decalee.
     */
    public function getDateAbsDecalee(): ?DateTime {
        return $this->dateAbsDecalee;
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
     * Get the employe remplace.
     *
     * @return string|null Returns the employe remplace.
     */
    public function getEmployeRemplace(): ?string {
        return $this->employeRemplace;
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
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb(): ?DateTime {
        return $this->heureDeb;
    }

    /**
     * Get the heures jour.
     *
     * @return DateTime|null Returns the heures jour.
     */
    public function getHeuresJour(): ?DateTime {
        return $this->heuresJour;
    }

    /**
     * Get the heures nuit.
     *
     * @return DateTime|null Returns the heures nuit.
     */
    public function getHeuresNuit(): ?DateTime {
        return $this->heuresNuit;
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
     * Get the numero avenant.
     *
     * @return int|null Returns the numero avenant.
     */
    public function getNumeroAvenant(): ?int {
        return $this->numeroAvenant;
    }

    /**
     * Get the type heure.
     *
     * @return string|null Returns the type heure.
     */
    public function getTypeHeure(): ?string {
        return $this->typeHeure;
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
     * Get the uniq id planning.
     *
     * @return string|null Returns the uniq id planning.
     */
    public function getUniqIdPlanning(): ?string {
        return $this->uniqIdPlanning;
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
     * Set the avenant signe.
     *
     * @param bool|null $avenantSigne The avenant signe.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setAvenantSigne(?bool $avenantSigne): PointEmpHeuresAbsComplRempl {
        $this->avenantSigne = $avenantSigne;
        return $this;
    }

    /**
     * Set the code absence.
     *
     * @param string|null $codeAbsence The code absence.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeAbsence(?string $codeAbsence): PointEmpHeuresAbsComplRempl {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeAffaire(?string $codeAffaire): PointEmpHeuresAbsComplRempl {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeChantier(?string $codeChantier): PointEmpHeuresAbsComplRempl {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeClient(?string $codeClient): PointEmpHeuresAbsComplRempl {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): PointEmpHeuresAbsComplRempl {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): PointEmpHeuresAbsComplRempl {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeEmploye(?string $codeEmploye): PointEmpHeuresAbsComplRempl {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setCodeTache(?string $codeTache): PointEmpHeuresAbsComplRempl {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setDate(?DateTime $date): PointEmpHeuresAbsComplRempl {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime|null $dateAbsDecalee The date abs decalee.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setDateAbsDecalee(?DateTime $dateAbsDecalee): PointEmpHeuresAbsComplRempl {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): PointEmpHeuresAbsComplRempl {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the employe remplace.
     *
     * @param string|null $employeRemplace The employe remplace.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setEmployeRemplace(?string $employeRemplace): PointEmpHeuresAbsComplRempl {
        $this->employeRemplace = $employeRemplace;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setEtat(?string $etat): PointEmpHeuresAbsComplRempl {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setHeureDeb(?DateTime $heureDeb): PointEmpHeuresAbsComplRempl {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the heures jour.
     *
     * @param DateTime|null $heuresJour The heures jour.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setHeuresJour(?DateTime $heuresJour): PointEmpHeuresAbsComplRempl {
        $this->heuresJour = $heuresJour;
        return $this;
    }

    /**
     * Set the heures nuit.
     *
     * @param DateTime|null $heuresNuit The heures nuit.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setHeuresNuit(?DateTime $heuresNuit): PointEmpHeuresAbsComplRempl {
        $this->heuresNuit = $heuresNuit;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setNumBt(?int $numBt): PointEmpHeuresAbsComplRempl {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setNumeroAvenant(?int $numeroAvenant): PointEmpHeuresAbsComplRempl {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string|null $typeHeure The type heure.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setTypeHeure(?string $typeHeure): PointEmpHeuresAbsComplRempl {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setUniqId(?string $uniqId): PointEmpHeuresAbsComplRempl {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id planning.
     *
     * @param string|null $uniqIdPlanning The uniq id planning.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setUniqIdPlanning(?string $uniqIdPlanning): PointEmpHeuresAbsComplRempl {
        $this->uniqIdPlanning = $uniqIdPlanning;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return PointEmpHeuresAbsComplRempl Returns this Point emp heures abs compl rempl.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): PointEmpHeuresAbsComplRempl {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
