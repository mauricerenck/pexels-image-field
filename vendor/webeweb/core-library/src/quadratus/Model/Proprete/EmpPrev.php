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
 * Emp prev.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class EmpPrev {

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
     * Dim type2.
     *
     * @var string|null
     */
    private $dimType2;

    /**
     * Discr tache.
     *
     * @var int|null
     */
    private $discrTache;

    /**
     * Duree.
     *
     * @var DateTime|null
     */
    private $duree;

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
     * H nuit type2.
     *
     * @var string|null
     */
    private $hNuitType2;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Jf type2.
     *
     * @var string|null
     */
    private $jfType2;

    /**
     * Nb chambres.
     *
     * @var float|null
     */
    private $nbChambres;

    /**
     * Note memo.
     *
     * @var string|null
     */
    private $noteMemo;

    /**
     * Num chrono.
     *
     * @var int|null
     */
    private $numChrono;

    /**
     * Pointage.
     *
     * @var bool|null
     */
    private $pointage;

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
     * Get the dim type2.
     *
     * @return string|null Returns the dim type2.
     */
    public function getDimType2(): ?string {
        return $this->dimType2;
    }

    /**
     * Get the discr tache.
     *
     * @return int|null Returns the discr tache.
     */
    public function getDiscrTache(): ?int {
        return $this->discrTache;
    }

    /**
     * Get the duree.
     *
     * @return DateTime|null Returns the duree.
     */
    public function getDuree(): ?DateTime {
        return $this->duree;
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
     * Get the h nuit type2.
     *
     * @return string|null Returns the h nuit type2.
     */
    public function getHNuitType2(): ?string {
        return $this->hNuitType2;
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
     * Get the jf type2.
     *
     * @return string|null Returns the jf type2.
     */
    public function getJfType2(): ?string {
        return $this->jfType2;
    }

    /**
     * Get the nb chambres.
     *
     * @return float|null Returns the nb chambres.
     */
    public function getNbChambres(): ?float {
        return $this->nbChambres;
    }

    /**
     * Get the note memo.
     *
     * @return string|null Returns the note memo.
     */
    public function getNoteMemo(): ?string {
        return $this->noteMemo;
    }

    /**
     * Get the num chrono.
     *
     * @return int|null Returns the num chrono.
     */
    public function getNumChrono(): ?int {
        return $this->numChrono;
    }

    /**
     * Get the pointage.
     *
     * @return bool|null Returns the pointage.
     */
    public function getPointage(): ?bool {
        return $this->pointage;
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
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): EmpPrev {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): EmpPrev {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setCodeEmploye(?string $codeEmploye): EmpPrev {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setDate(?DateTime $date): EmpPrev {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime|null $dateAbsDecalee The date abs decalee.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setDateAbsDecalee(?DateTime $dateAbsDecalee): EmpPrev {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): EmpPrev {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param string|null $dimType2 The dim type2.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setDimType2(?string $dimType2): EmpPrev {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int|null $discrTache The discr tache.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setDiscrTache(?int $discrTache): EmpPrev {
        $this->discrTache = $discrTache;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param DateTime|null $duree The duree.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setDuree(?DateTime $duree): EmpPrev {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the employe remplace.
     *
     * @param string|null $employeRemplace The employe remplace.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setEmployeRemplace(?string $employeRemplace): EmpPrev {
        $this->employeRemplace = $employeRemplace;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setEtat(?string $etat): EmpPrev {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param string|null $hNuitType2 The h nuit type2.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setHNuitType2(?string $hNuitType2): EmpPrev {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setHeureDeb(?DateTime $heureDeb): EmpPrev {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the jf type2.
     *
     * @param string|null $jfType2 The jf type2.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setJfType2(?string $jfType2): EmpPrev {
        $this->jfType2 = $jfType2;
        return $this;
    }

    /**
     * Set the nb chambres.
     *
     * @param float|null $nbChambres The nb chambres.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setNbChambres(?float $nbChambres): EmpPrev {
        $this->nbChambres = $nbChambres;
        return $this;
    }

    /**
     * Set the note memo.
     *
     * @param string|null $noteMemo The note memo.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setNoteMemo(?string $noteMemo): EmpPrev {
        $this->noteMemo = $noteMemo;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int|null $numChrono The num chrono.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setNumChrono(?int $numChrono): EmpPrev {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the pointage.
     *
     * @param bool|null $pointage The pointage.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setPointage(?bool $pointage): EmpPrev {
        $this->pointage = $pointage;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setUniqId(?string $uniqId): EmpPrev {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id planning.
     *
     * @param string|null $uniqIdPlanning The uniq id planning.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setUniqIdPlanning(?string $uniqIdPlanning): EmpPrev {
        $this->uniqIdPlanning = $uniqIdPlanning;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return EmpPrev Returns this Emp prev.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): EmpPrev {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
