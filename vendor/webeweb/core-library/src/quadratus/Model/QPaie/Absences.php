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
 * Absences.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Absences {

    /**
     * Abs jour.
     *
     * @var bool|null
     */
    private $absJour;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Conges payes.
     *
     * @var bool|null
     */
    private $congesPayes;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Date added coll.
     *
     * @var DateTime|null
     */
    private $dateAddedColl;

    /**
     * In bul.
     *
     * @var bool|null
     */
    private $inBul;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Nb30.
     *
     * @var float|null
     */
    private $nb30;

    /**
     * Nb h ab cp calcule.
     *
     * @var float|null
     */
    private $nbHAbCpCalcule;

    /**
     * Nb h ab cp saisi.
     *
     * @var float|null
     */
    private $nbHAbCpSaisi;

    /**
     * Nb jh.
     *
     * @var float|null
     */
    private $nbJh;

    /**
     * Nb jh calcule.
     *
     * @var float|null
     */
    private $nbJhCalcule;

    /**
     * Num evenement.
     *
     * @var int|null
     */
    private $numEvenement;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode bul.
     *
     * @var DateTime|null
     */
    private $periodeBul;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Prolongation.
     *
     * @var bool|null
     */
    private $prolongation;

    /**
     * Reprise.
     *
     * @var bool|null
     */
    private $reprise;

    /**
     * Type abs.
     *
     * @var string|null
     */
    private $typeAbs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the abs jour.
     *
     * @return bool|null Returns the abs jour.
     */
    public function getAbsJour(): ?bool {
        return $this->absJour;
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
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the conges payes.
     *
     * @return bool|null Returns the conges payes.
     */
    public function getCongesPayes(): ?bool {
        return $this->congesPayes;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
     */
    public function getDateAdded(): ?DateTime {
        return $this->dateAdded;
    }

    /**
     * Get the date added coll.
     *
     * @return DateTime|null Returns the date added coll.
     */
    public function getDateAddedColl(): ?DateTime {
        return $this->dateAddedColl;
    }

    /**
     * Get the in bul.
     *
     * @return bool|null Returns the in bul.
     */
    public function getInBul(): ?bool {
        return $this->inBul;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
    }

    /**
     * Get the nb30.
     *
     * @return float|null Returns the nb30.
     */
    public function getNb30(): ?float {
        return $this->nb30;
    }

    /**
     * Get the nb h ab cp calcule.
     *
     * @return float|null Returns the nb h ab cp calcule.
     */
    public function getNbHAbCpCalcule(): ?float {
        return $this->nbHAbCpCalcule;
    }

    /**
     * Get the nb h ab cp saisi.
     *
     * @return float|null Returns the nb h ab cp saisi.
     */
    public function getNbHAbCpSaisi(): ?float {
        return $this->nbHAbCpSaisi;
    }

    /**
     * Get the nb jh.
     *
     * @return float|null Returns the nb jh.
     */
    public function getNbJh(): ?float {
        return $this->nbJh;
    }

    /**
     * Get the nb jh calcule.
     *
     * @return float|null Returns the nb jh calcule.
     */
    public function getNbJhCalcule(): ?float {
        return $this->nbJhCalcule;
    }

    /**
     * Get the num evenement.
     *
     * @return int|null Returns the num evenement.
     */
    public function getNumEvenement(): ?int {
        return $this->numEvenement;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Get the periode bul.
     *
     * @return DateTime|null Returns the periode bul.
     */
    public function getPeriodeBul(): ?DateTime {
        return $this->periodeBul;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb(): ?DateTime {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin(): ?DateTime {
        return $this->periodeFin;
    }

    /**
     * Get the prolongation.
     *
     * @return bool|null Returns the prolongation.
     */
    public function getProlongation(): ?bool {
        return $this->prolongation;
    }

    /**
     * Get the reprise.
     *
     * @return bool|null Returns the reprise.
     */
    public function getReprise(): ?bool {
        return $this->reprise;
    }

    /**
     * Get the type abs.
     *
     * @return string|null Returns the type abs.
     */
    public function getTypeAbs(): ?string {
        return $this->typeAbs;
    }

    /**
     * Set the abs jour.
     *
     * @param bool|null $absJour The abs jour.
     * @return Absences Returns this Absences.
     */
    public function setAbsJour(?bool $absJour): Absences {
        $this->absJour = $absJour;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Absences Returns this Absences.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Absences {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return Absences Returns this Absences.
     */
    public function setCodeUser(?string $codeUser): Absences {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the conges payes.
     *
     * @param bool|null $congesPayes The conges payes.
     * @return Absences Returns this Absences.
     */
    public function setCongesPayes(?bool $congesPayes): Absences {
        $this->congesPayes = $congesPayes;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     * @return Absences Returns this Absences.
     */
    public function setDateAdded(?DateTime $dateAdded): Absences {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the date added coll.
     *
     * @param DateTime|null $dateAddedColl The date added coll.
     * @return Absences Returns this Absences.
     */
    public function setDateAddedColl(?DateTime $dateAddedColl): Absences {
        $this->dateAddedColl = $dateAddedColl;
        return $this;
    }

    /**
     * Set the in bul.
     *
     * @param bool|null $inBul The in bul.
     * @return Absences Returns this Absences.
     */
    public function setInBul(?bool $inBul): Absences {
        $this->inBul = $inBul;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return Absences Returns this Absences.
     */
    public function setIndicePeriode(?int $indicePeriode): Absences {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb30.
     *
     * @param float|null $nb30 The nb30.
     * @return Absences Returns this Absences.
     */
    public function setNb30(?float $nb30): Absences {
        $this->nb30 = $nb30;
        return $this;
    }

    /**
     * Set the nb h ab cp calcule.
     *
     * @param float|null $nbHAbCpCalcule The nb h ab cp calcule.
     * @return Absences Returns this Absences.
     */
    public function setNbHAbCpCalcule(?float $nbHAbCpCalcule): Absences {
        $this->nbHAbCpCalcule = $nbHAbCpCalcule;
        return $this;
    }

    /**
     * Set the nb h ab cp saisi.
     *
     * @param float|null $nbHAbCpSaisi The nb h ab cp saisi.
     * @return Absences Returns this Absences.
     */
    public function setNbHAbCpSaisi(?float $nbHAbCpSaisi): Absences {
        $this->nbHAbCpSaisi = $nbHAbCpSaisi;
        return $this;
    }

    /**
     * Set the nb jh.
     *
     * @param float|null $nbJh The nb jh.
     * @return Absences Returns this Absences.
     */
    public function setNbJh(?float $nbJh): Absences {
        $this->nbJh = $nbJh;
        return $this;
    }

    /**
     * Set the nb jh calcule.
     *
     * @param float|null $nbJhCalcule The nb jh calcule.
     * @return Absences Returns this Absences.
     */
    public function setNbJhCalcule(?float $nbJhCalcule): Absences {
        $this->nbJhCalcule = $nbJhCalcule;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int|null $numEvenement The num evenement.
     * @return Absences Returns this Absences.
     */
    public function setNumEvenement(?int $numEvenement): Absences {
        $this->numEvenement = $numEvenement;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return Absences Returns this Absences.
     */
    public function setNumUniq(?int $numUniq): Absences {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Absences Returns this Absences.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Absences {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode bul.
     *
     * @param DateTime|null $periodeBul The periode bul.
     * @return Absences Returns this Absences.
     */
    public function setPeriodeBul(?DateTime $periodeBul): Absences {
        $this->periodeBul = $periodeBul;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return Absences Returns this Absences.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): Absences {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return Absences Returns this Absences.
     */
    public function setPeriodeFin(?DateTime $periodeFin): Absences {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the prolongation.
     *
     * @param bool|null $prolongation The prolongation.
     * @return Absences Returns this Absences.
     */
    public function setProlongation(?bool $prolongation): Absences {
        $this->prolongation = $prolongation;
        return $this;
    }

    /**
     * Set the reprise.
     *
     * @param bool|null $reprise The reprise.
     * @return Absences Returns this Absences.
     */
    public function setReprise(?bool $reprise): Absences {
        $this->reprise = $reprise;
        return $this;
    }

    /**
     * Set the type abs.
     *
     * @param string|null $typeAbs The type abs.
     * @return Absences Returns this Absences.
     */
    public function setTypeAbs(?string $typeAbs): Absences {
        $this->typeAbs = $typeAbs;
        return $this;
    }
}
