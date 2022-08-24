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
 * Absences excel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AbsencesExcel {

    /**
     * Id.
     *
     * @var int|null
     */
    private $id;

    /**
     * Nbh sais.
     *
     * @var float|null
     */
    private $nbhSais;

    /**
     * Nbj sais.
     *
     * @var float|null
     */
    private $nbjSais;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

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
     * Type abs cp.
     *
     * @var string|null
     */
    private $typeAbsCp;

    /**
     * Type import.
     *
     * @var int|null
     */
    private $typeImport;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Get the nbh sais.
     *
     * @return float|null Returns the nbh sais.
     */
    public function getNbhSais(): ?float {
        return $this->nbhSais;
    }

    /**
     * Get the nbj sais.
     *
     * @return float|null Returns the nbj sais.
     */
    public function getNbjSais(): ?float {
        return $this->nbjSais;
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
     * Get the type abs cp.
     *
     * @return string|null Returns the type abs cp.
     */
    public function getTypeAbsCp(): ?string {
        return $this->typeAbsCp;
    }

    /**
     * Get the type import.
     *
     * @return int|null Returns the type import.
     */
    public function getTypeImport(): ?int {
        return $this->typeImport;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setId(?int $id): AbsencesExcel {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nbh sais.
     *
     * @param float|null $nbhSais The nbh sais.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setNbhSais(?float $nbhSais): AbsencesExcel {
        $this->nbhSais = $nbhSais;
        return $this;
    }

    /**
     * Set the nbj sais.
     *
     * @param float|null $nbjSais The nbj sais.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setNbjSais(?float $nbjSais): AbsencesExcel {
        $this->nbjSais = $nbjSais;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AbsencesExcel {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): AbsencesExcel {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setPeriodeFin(?DateTime $periodeFin): AbsencesExcel {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type abs cp.
     *
     * @param string|null $typeAbsCp The type abs cp.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setTypeAbsCp(?string $typeAbsCp): AbsencesExcel {
        $this->typeAbsCp = $typeAbsCp;
        return $this;
    }

    /**
     * Set the type import.
     *
     * @param int|null $typeImport The type import.
     * @return AbsencesExcel Returns this Absences excel.
     */
    public function setTypeImport(?int $typeImport): AbsencesExcel {
        $this->typeImport = $typeImport;
        return $this;
    }
}
