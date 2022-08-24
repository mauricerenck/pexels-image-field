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
 * Formations.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Formations {

    /**
     * Active.
     *
     * @var bool|null
     */
    private $active;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Lieu.
     *
     * @var string|null
     */
    private $lieu;

    /**
     * Nb h formation.
     *
     * @var float|null
     */
    private $nbHFormation;

    /**
     * Nbh di f pris w.
     *
     * @var float|null
     */
    private $nbhDiFPrisW;

    /**
     * Nbh dif pris hors w.
     *
     * @var float|null
     */
    private $nbhDifPrisHorsW;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

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
     * Type formation.
     *
     * @var int|null
     */
    private $typeFormation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the lieu.
     *
     * @return string|null Returns the lieu.
     */
    public function getLieu(): ?string {
        return $this->lieu;
    }

    /**
     * Get the nb h formation.
     *
     * @return float|null Returns the nb h formation.
     */
    public function getNbHFormation(): ?float {
        return $this->nbHFormation;
    }

    /**
     * Get the nbh di f pris w.
     *
     * @return float|null Returns the nbh di f pris w.
     */
    public function getNbhDiFPrisW(): ?float {
        return $this->nbhDiFPrisW;
    }

    /**
     * Get the nbh dif pris hors w.
     *
     * @return float|null Returns the nbh dif pris hors w.
     */
    public function getNbhDifPrisHorsW(): ?float {
        return $this->nbhDifPrisHorsW;
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
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
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
     * Get the type formation.
     *
     * @return int|null Returns the type formation.
     */
    public function getTypeFormation(): ?int {
        return $this->typeFormation;
    }

    /**
     * Set the active.
     *
     * @param bool|null $active The active.
     * @return Formations Returns this Formations.
     */
    public function setActive(?bool $active): Formations {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return Formations Returns this Formations.
     */
    public function setDescription(?string $description): Formations {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return Formations Returns this Formations.
     */
    public function setId(?string $id): Formations {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return Formations Returns this Formations.
     */
    public function setLienDocument(?string $lienDocument): Formations {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lieu.
     *
     * @param string|null $lieu The lieu.
     * @return Formations Returns this Formations.
     */
    public function setLieu(?string $lieu): Formations {
        $this->lieu = $lieu;
        return $this;
    }

    /**
     * Set the nb h formation.
     *
     * @param float|null $nbHFormation The nb h formation.
     * @return Formations Returns this Formations.
     */
    public function setNbHFormation(?float $nbHFormation): Formations {
        $this->nbHFormation = $nbHFormation;
        return $this;
    }

    /**
     * Set the nbh di f pris w.
     *
     * @param float|null $nbhDiFPrisW The nbh di f pris w.
     * @return Formations Returns this Formations.
     */
    public function setNbhDiFPrisW(?float $nbhDiFPrisW): Formations {
        $this->nbhDiFPrisW = $nbhDiFPrisW;
        return $this;
    }

    /**
     * Set the nbh dif pris hors w.
     *
     * @param float|null $nbhDifPrisHorsW The nbh dif pris hors w.
     * @return Formations Returns this Formations.
     */
    public function setNbhDifPrisHorsW(?float $nbhDifPrisHorsW): Formations {
        $this->nbhDifPrisHorsW = $nbhDifPrisHorsW;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Formations Returns this Formations.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Formations {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return Formations Returns this Formations.
     */
    public function setOrganisme(?string $organisme): Formations {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return Formations Returns this Formations.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): Formations {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return Formations Returns this Formations.
     */
    public function setPeriodeFin(?DateTime $periodeFin): Formations {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type formation.
     *
     * @param int|null $typeFormation The type formation.
     * @return Formations Returns this Formations.
     */
    public function setTypeFormation(?int $typeFormation): Formations {
        $this->typeFormation = $typeFormation;
        return $this;
    }
}
