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
 * Point emp heures abs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbs {

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
     * Heure abs.
     *
     * @var DateTime|null
     */
    private $heureAbs;

    /**
     * Heure abs nuit.
     *
     * @var DateTime|null
     */
    private $heureAbsNuit;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Type heure.
     *
     * @var string|null
     */
    private $typeHeure;

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
     * Get the heure abs.
     *
     * @return DateTime|null Returns the heure abs.
     */
    public function getHeureAbs(): ?DateTime {
        return $this->heureAbs;
    }

    /**
     * Get the heure abs nuit.
     *
     * @return DateTime|null Returns the heure abs nuit.
     */
    public function getHeureAbsNuit(): ?DateTime {
        return $this->heureAbsNuit;
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
     * Get the type heure.
     *
     * @return string|null Returns the type heure.
     */
    public function getTypeHeure(): ?string {
        return $this->typeHeure;
    }

    /**
     * Set the code absence.
     *
     * @param string|null $codeAbsence The code absence.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setCodeAbsence(?string $codeAbsence): PointEmpHeuresAbs {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setCodeAffaire(?string $codeAffaire): PointEmpHeuresAbs {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setCodeChantier(?string $codeChantier): PointEmpHeuresAbs {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setCodeClient(?string $codeClient): PointEmpHeuresAbs {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setCodeEmploye(?string $codeEmploye): PointEmpHeuresAbs {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setCodeTache(?string $codeTache): PointEmpHeuresAbs {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setDate(?DateTime $date): PointEmpHeuresAbs {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the heure abs.
     *
     * @param DateTime|null $heureAbs The heure abs.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setHeureAbs(?DateTime $heureAbs): PointEmpHeuresAbs {
        $this->heureAbs = $heureAbs;
        return $this;
    }

    /**
     * Set the heure abs nuit.
     *
     * @param DateTime|null $heureAbsNuit The heure abs nuit.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setHeureAbsNuit(?DateTime $heureAbsNuit): PointEmpHeuresAbs {
        $this->heureAbsNuit = $heureAbsNuit;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setNumBt(?int $numBt): PointEmpHeuresAbs {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string|null $typeHeure The type heure.
     * @return PointEmpHeuresAbs Returns this Point emp heures abs.
     */
    public function setTypeHeure(?string $typeHeure): PointEmpHeuresAbs {
        $this->typeHeure = $typeHeure;
        return $this;
    }
}
