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
 * Pointages employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointagesEmployes {

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
     * Compteur heures.
     *
     * @var float|null
     */
    private $compteurHeures;

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
     * Hp theo non affectees.
     *
     * @var float|null
     */
    private $hpTheoNonAffectees;

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
     * Get the compteur heures.
     *
     * @return float|null Returns the compteur heures.
     */
    public function getCompteurHeures(): ?float {
        return $this->compteurHeures;
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
     * Get the hp theo non affectees.
     *
     * @return float|null Returns the hp theo non affectees.
     */
    public function getHpTheoNonAffectees(): ?float {
        return $this->hpTheoNonAffectees;
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
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): PointagesEmployes {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): PointagesEmployes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setCodeEmploye(?string $codeEmploye): PointagesEmployes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the compteur heures.
     *
     * @param float|null $compteurHeures The compteur heures.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setCompteurHeures(?float $compteurHeures): PointagesEmployes {
        $this->compteurHeures = $compteurHeures;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): PointagesEmployes {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setEtat(?string $etat): PointagesEmployes {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the hp theo non affectees.
     *
     * @param float|null $hpTheoNonAffectees The hp theo non affectees.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setHpTheoNonAffectees(?float $hpTheoNonAffectees): PointagesEmployes {
        $this->hpTheoNonAffectees = $hpTheoNonAffectees;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setPeriode(?DateTime $periode): PointagesEmployes {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return PointagesEmployes Returns this Pointages employes.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): PointagesEmployes {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
