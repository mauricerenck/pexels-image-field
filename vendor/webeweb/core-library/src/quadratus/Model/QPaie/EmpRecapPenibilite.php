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
 * Emp recap penibilite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpRecapPenibilite {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Id recap.
     *
     * @var int|null
     */
    private $idRecap;

    /**
     * Indice bul.
     *
     * @var string|null
     */
    private $indiceBul;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Numero ordre.
     *
     * @var int|null
     */
    private $numeroOrdre;

    /**
     * Regule traitee.
     *
     * @var DateTime|null
     */
    private $reguleTraitee;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
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
     * Get the id recap.
     *
     * @return int|null Returns the id recap.
     */
    public function getIdRecap(): ?int {
        return $this->idRecap;
    }

    /**
     * Get the indice bul.
     *
     * @return string|null Returns the indice bul.
     */
    public function getIndiceBul(): ?string {
        return $this->indiceBul;
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
     * Get the numero ordre.
     *
     * @return int|null Returns the numero ordre.
     */
    public function getNumeroOrdre(): ?int {
        return $this->numeroOrdre;
    }

    /**
     * Get the regule traitee.
     *
     * @return DateTime|null Returns the regule traitee.
     */
    public function getReguleTraitee(): ?DateTime {
        return $this->reguleTraitee;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setCodeCollab(?string $codeCollab): EmpRecapPenibilite {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateCreat(?DateTime $dateCreat): EmpRecapPenibilite {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateDebut(?DateTime $dateDebut): EmpRecapPenibilite {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateFin(?DateTime $dateFin): EmpRecapPenibilite {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateModif(?DateTime $dateModif): EmpRecapPenibilite {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setEtat(?string $etat): EmpRecapPenibilite {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the id recap.
     *
     * @param int|null $idRecap The id recap.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setIdRecap(?int $idRecap): EmpRecapPenibilite {
        $this->idRecap = $idRecap;
        return $this;
    }

    /**
     * Set the indice bul.
     *
     * @param string|null $indiceBul The indice bul.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setIndiceBul(?string $indiceBul): EmpRecapPenibilite {
        $this->indiceBul = $indiceBul;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpRecapPenibilite {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setNumeroOrdre(?int $numeroOrdre): EmpRecapPenibilite {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the regule traitee.
     *
     * @param DateTime|null $reguleTraitee The regule traitee.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setReguleTraitee(?DateTime $reguleTraitee): EmpRecapPenibilite {
        $this->reguleTraitee = $reguleTraitee;
        return $this;
    }
}
