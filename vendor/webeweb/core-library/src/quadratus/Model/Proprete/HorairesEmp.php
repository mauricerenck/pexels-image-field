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
 * Horaires emp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HorairesEmp {

    /**
     * Aou.
     *
     * @var bool|null
     */
    private $aou;

    /**
     * Avr.
     *
     * @var bool|null
     */
    private $avr;

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
     * Date debut affectation.
     *
     * @var DateTime|null
     */
    private $dateDebutAffectation;

    /**
     * Date fin affectation.
     *
     * @var DateTime|null
     */
    private $dateFinAffectation;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Dec.
     *
     * @var bool|null
     */
    private $dec;

    /**
     * Dim type2.
     *
     * @var string|null
     */
    private $dimType2;

    /**
     * Discr sem.
     *
     * @var int|null
     */
    private $discrSem;

    /**
     * Duree.
     *
     * @var DateTime|null
     */
    private $duree;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Fev.
     *
     * @var bool|null
     */
    private $fev;

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
     * Jan.
     *
     * @var bool|null
     */
    private $jan;

    /**
     * Jf type2.
     *
     * @var string|null
     */
    private $jfType2;

    /**
     * Juil.
     *
     * @var bool|null
     */
    private $juil;

    /**
     * Juin.
     *
     * @var bool|null
     */
    private $juin;

    /**
     * Mai.
     *
     * @var bool|null
     */
    private $mai;

    /**
     * Mar.
     *
     * @var bool|null
     */
    private $mar;

    /**
     * Note memo.
     *
     * @var string|null
     */
    private $noteMemo;

    /**
     * Nov.
     *
     * @var bool|null
     */
    private $nov;

    /**
     * Num chrono.
     *
     * @var int|null
     */
    private $numChrono;

    /**
     * Num jour.
     *
     * @var string|null
     */
    private $numJour;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Numero semaine.
     *
     * @var string|null
     */
    private $numeroSemaine;

    /**
     * Oct.
     *
     * @var bool|null
     */
    private $oct;

    /**
     * Sauf semaine complete.
     *
     * @var string|null
     */
    private $saufSemaineComplete;

    /**
     * Semaine complete.
     *
     * @var bool|null
     */
    private $semaineComplete;

    /**
     * Sep.
     *
     * @var bool|null
     */
    private $sep;

    /**
     * Travaille jf.
     *
     * @var string|null
     */
    private $travailleJf;

    /**
     * Type contrat.
     *
     * @var string|null
     */
    private $typeContrat;

    /**
     * Type freq.
     *
     * @var string|null
     */
    private $typeFreq;

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
     * Get the aou.
     *
     * @return bool|null Returns the aou.
     */
    public function getAou(): ?bool {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return bool|null Returns the avr.
     */
    public function getAvr(): ?bool {
        return $this->avr;
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
     * Get the date debut affectation.
     *
     * @return DateTime|null Returns the date debut affectation.
     */
    public function getDateDebutAffectation(): ?DateTime {
        return $this->dateDebutAffectation;
    }

    /**
     * Get the date fin affectation.
     *
     * @return DateTime|null Returns the date fin affectation.
     */
    public function getDateFinAffectation(): ?DateTime {
        return $this->dateFinAffectation;
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
     * Get the dec.
     *
     * @return bool|null Returns the dec.
     */
    public function getDec(): ?bool {
        return $this->dec;
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
     * Get the discr sem.
     *
     * @return int|null Returns the discr sem.
     */
    public function getDiscrSem(): ?int {
        return $this->discrSem;
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
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the fev.
     *
     * @return bool|null Returns the fev.
     */
    public function getFev(): ?bool {
        return $this->fev;
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
     * Get the jan.
     *
     * @return bool|null Returns the jan.
     */
    public function getJan(): ?bool {
        return $this->jan;
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
     * Get the juil.
     *
     * @return bool|null Returns the juil.
     */
    public function getJuil(): ?bool {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return bool|null Returns the juin.
     */
    public function getJuin(): ?bool {
        return $this->juin;
    }

    /**
     * Get the mai.
     *
     * @return bool|null Returns the mai.
     */
    public function getMai(): ?bool {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return bool|null Returns the mar.
     */
    public function getMar(): ?bool {
        return $this->mar;
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
     * Get the nov.
     *
     * @return bool|null Returns the nov.
     */
    public function getNov(): ?bool {
        return $this->nov;
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
     * Get the num jour.
     *
     * @return string|null Returns the num jour.
     */
    public function getNumJour(): ?string {
        return $this->numJour;
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
     * Get the numero semaine.
     *
     * @return string|null Returns the numero semaine.
     */
    public function getNumeroSemaine(): ?string {
        return $this->numeroSemaine;
    }

    /**
     * Get the oct.
     *
     * @return bool|null Returns the oct.
     */
    public function getOct(): ?bool {
        return $this->oct;
    }

    /**
     * Get the sauf semaine complete.
     *
     * @return string|null Returns the sauf semaine complete.
     */
    public function getSaufSemaineComplete(): ?string {
        return $this->saufSemaineComplete;
    }

    /**
     * Get the semaine complete.
     *
     * @return bool|null Returns the semaine complete.
     */
    public function getSemaineComplete(): ?bool {
        return $this->semaineComplete;
    }

    /**
     * Get the sep.
     *
     * @return bool|null Returns the sep.
     */
    public function getSep(): ?bool {
        return $this->sep;
    }

    /**
     * Get the travaille jf.
     *
     * @return string|null Returns the travaille jf.
     */
    public function getTravailleJf(): ?string {
        return $this->travailleJf;
    }

    /**
     * Get the type contrat.
     *
     * @return string|null Returns the type contrat.
     */
    public function getTypeContrat(): ?string {
        return $this->typeContrat;
    }

    /**
     * Get the type freq.
     *
     * @return string|null Returns the type freq.
     */
    public function getTypeFreq(): ?string {
        return $this->typeFreq;
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
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setAou(?bool $aou): HorairesEmp {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setAvr(?bool $avr): HorairesEmp {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): HorairesEmp {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): HorairesEmp {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setCodeEmploye(?string $codeEmploye): HorairesEmp {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date debut affectation.
     *
     * @param DateTime|null $dateDebutAffectation The date debut affectation.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDateDebutAffectation(?DateTime $dateDebutAffectation): HorairesEmp {
        $this->dateDebutAffectation = $dateDebutAffectation;
        return $this;
    }

    /**
     * Set the date fin affectation.
     *
     * @param DateTime|null $dateFinAffectation The date fin affectation.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDateFinAffectation(?DateTime $dateFinAffectation): HorairesEmp {
        $this->dateFinAffectation = $dateFinAffectation;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): HorairesEmp {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDec(?bool $dec): HorairesEmp {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param string|null $dimType2 The dim type2.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDimType2(?string $dimType2): HorairesEmp {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the discr sem.
     *
     * @param int|null $discrSem The discr sem.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDiscrSem(?int $discrSem): HorairesEmp {
        $this->discrSem = $discrSem;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param DateTime|null $duree The duree.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDuree(?DateTime $duree): HorairesEmp {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setEtat(?string $etat): HorairesEmp {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setFev(?bool $fev): HorairesEmp {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param string|null $hNuitType2 The h nuit type2.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setHNuitType2(?string $hNuitType2): HorairesEmp {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setHeureDeb(?DateTime $heureDeb): HorairesEmp {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJan(?bool $jan): HorairesEmp {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jf type2.
     *
     * @param string|null $jfType2 The jf type2.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJfType2(?string $jfType2): HorairesEmp {
        $this->jfType2 = $jfType2;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool|null $juil The juil.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJuil(?bool $juil): HorairesEmp {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJuin(?bool $juin): HorairesEmp {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setMai(?bool $mai): HorairesEmp {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setMar(?bool $mar): HorairesEmp {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the note memo.
     *
     * @param string|null $noteMemo The note memo.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNoteMemo(?string $noteMemo): HorairesEmp {
        $this->noteMemo = $noteMemo;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNov(?bool $nov): HorairesEmp {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int|null $numChrono The num chrono.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumChrono(?int $numChrono): HorairesEmp {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the num jour.
     *
     * @param string|null $numJour The num jour.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumJour(?string $numJour): HorairesEmp {
        $this->numJour = $numJour;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumeroAvenant(?int $numeroAvenant): HorairesEmp {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the numero semaine.
     *
     * @param string|null $numeroSemaine The numero semaine.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumeroSemaine(?string $numeroSemaine): HorairesEmp {
        $this->numeroSemaine = $numeroSemaine;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setOct(?bool $oct): HorairesEmp {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the sauf semaine complete.
     *
     * @param string|null $saufSemaineComplete The sauf semaine complete.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setSaufSemaineComplete(?string $saufSemaineComplete): HorairesEmp {
        $this->saufSemaineComplete = $saufSemaineComplete;
        return $this;
    }

    /**
     * Set the semaine complete.
     *
     * @param bool|null $semaineComplete The semaine complete.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setSemaineComplete(?bool $semaineComplete): HorairesEmp {
        $this->semaineComplete = $semaineComplete;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setSep(?bool $sep): HorairesEmp {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the travaille jf.
     *
     * @param string|null $travailleJf The travaille jf.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setTravailleJf(?string $travailleJf): HorairesEmp {
        $this->travailleJf = $travailleJf;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string|null $typeContrat The type contrat.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setTypeContrat(?string $typeContrat): HorairesEmp {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type freq.
     *
     * @param string|null $typeFreq The type freq.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setTypeFreq(?string $typeFreq): HorairesEmp {
        $this->typeFreq = $typeFreq;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setUniqId(?string $uniqId): HorairesEmp {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): HorairesEmp {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
