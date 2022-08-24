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
 * Absences excel histo.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AbsencesExcelHisto {

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Nbh sais.
     *
     * @var float|null
     */
    private $nbhSais;

    /**
     * Nbh sais corr.
     *
     * @var float|null
     */
    private $nbhSaisCorr;

    /**
     * Nbj sais.
     *
     * @var float|null
     */
    private $nbjSais;

    /**
     * Nbj sais corr.
     *
     * @var float|null
     */
    private $nbjSaisCorr;

    /**
     * Num evenement.
     *
     * @var int|null
     */
    private $numEvenement;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Per paie.
     *
     * @var DateTime|null
     */
    private $perPaie;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode deb corr.
     *
     * @var DateTime|null
     */
    private $periodeDebCorr;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Periode fin corr.
     *
     * @var DateTime|null
     */
    private $periodeFinCorr;

    /**
     * Transfert abs.
     *
     * @var bool|null
     */
    private $transfertAbs;

    /**
     * Type abs cp.
     *
     * @var string|null
     */
    private $typeAbsCp;

    /**
     * Type abs cp corr.
     *
     * @var string|null
     */
    private $typeAbsCpCorr;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
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
     * Get the nbh sais corr.
     *
     * @return float|null Returns the nbh sais corr.
     */
    public function getNbhSaisCorr(): ?float {
        return $this->nbhSaisCorr;
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
     * Get the nbj sais corr.
     *
     * @return float|null Returns the nbj sais corr.
     */
    public function getNbjSaisCorr(): ?float {
        return $this->nbjSaisCorr;
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
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the per paie.
     *
     * @return DateTime|null Returns the per paie.
     */
    public function getPerPaie(): ?DateTime {
        return $this->perPaie;
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
     * Get the periode deb corr.
     *
     * @return DateTime|null Returns the periode deb corr.
     */
    public function getPeriodeDebCorr(): ?DateTime {
        return $this->periodeDebCorr;
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
     * Get the periode fin corr.
     *
     * @return DateTime|null Returns the periode fin corr.
     */
    public function getPeriodeFinCorr(): ?DateTime {
        return $this->periodeFinCorr;
    }

    /**
     * Get the transfert abs.
     *
     * @return bool|null Returns the transfert abs.
     */
    public function getTransfertAbs(): ?bool {
        return $this->transfertAbs;
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
     * Get the type abs cp corr.
     *
     * @return string|null Returns the type abs cp corr.
     */
    public function getTypeAbsCpCorr(): ?string {
        return $this->typeAbsCpCorr;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setDateAdded(?DateTime $dateAdded): AbsencesExcelHisto {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setId(?string $id): AbsencesExcelHisto {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nbh sais.
     *
     * @param float|null $nbhSais The nbh sais.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setNbhSais(?float $nbhSais): AbsencesExcelHisto {
        $this->nbhSais = $nbhSais;
        return $this;
    }

    /**
     * Set the nbh sais corr.
     *
     * @param float|null $nbhSaisCorr The nbh sais corr.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setNbhSaisCorr(?float $nbhSaisCorr): AbsencesExcelHisto {
        $this->nbhSaisCorr = $nbhSaisCorr;
        return $this;
    }

    /**
     * Set the nbj sais.
     *
     * @param float|null $nbjSais The nbj sais.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setNbjSais(?float $nbjSais): AbsencesExcelHisto {
        $this->nbjSais = $nbjSais;
        return $this;
    }

    /**
     * Set the nbj sais corr.
     *
     * @param float|null $nbjSaisCorr The nbj sais corr.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setNbjSaisCorr(?float $nbjSaisCorr): AbsencesExcelHisto {
        $this->nbjSaisCorr = $nbjSaisCorr;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int|null $numEvenement The num evenement.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setNumEvenement(?int $numEvenement): AbsencesExcelHisto {
        $this->numEvenement = $numEvenement;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AbsencesExcelHisto {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the per paie.
     *
     * @param DateTime|null $perPaie The per paie.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setPerPaie(?DateTime $perPaie): AbsencesExcelHisto {
        $this->perPaie = $perPaie;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): AbsencesExcelHisto {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode deb corr.
     *
     * @param DateTime|null $periodeDebCorr The periode deb corr.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setPeriodeDebCorr(?DateTime $periodeDebCorr): AbsencesExcelHisto {
        $this->periodeDebCorr = $periodeDebCorr;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setPeriodeFin(?DateTime $periodeFin): AbsencesExcelHisto {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the periode fin corr.
     *
     * @param DateTime|null $periodeFinCorr The periode fin corr.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setPeriodeFinCorr(?DateTime $periodeFinCorr): AbsencesExcelHisto {
        $this->periodeFinCorr = $periodeFinCorr;
        return $this;
    }

    /**
     * Set the transfert abs.
     *
     * @param bool|null $transfertAbs The transfert abs.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setTransfertAbs(?bool $transfertAbs): AbsencesExcelHisto {
        $this->transfertAbs = $transfertAbs;
        return $this;
    }

    /**
     * Set the type abs cp.
     *
     * @param string|null $typeAbsCp The type abs cp.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setTypeAbsCp(?string $typeAbsCp): AbsencesExcelHisto {
        $this->typeAbsCp = $typeAbsCp;
        return $this;
    }

    /**
     * Set the type abs cp corr.
     *
     * @param string|null $typeAbsCpCorr The type abs cp corr.
     * @return AbsencesExcelHisto Returns this Absences excel histo.
     */
    public function setTypeAbsCpCorr(?string $typeAbsCpCorr): AbsencesExcelHisto {
        $this->typeAbsCpCorr = $typeAbsCpCorr;
        return $this;
    }
}
