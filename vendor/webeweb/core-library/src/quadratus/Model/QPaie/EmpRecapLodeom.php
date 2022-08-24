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
 * Emp recap lodeom.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpRecapLodeom {

    /**
     * Brut.
     *
     * @var float|null
     */
    private $brut;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var string|null
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Difference.
     *
     * @var float|null
     */
    private $difference;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Nbhr.
     *
     * @var float|null
     */
    private $nbhr;

    /**
     * Nom employe.
     *
     * @var string|null
     */
    private $nomEmploye;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Reduc bul.
     *
     * @var float|null
     */
    private $reducBul;

    /**
     * Reduc recalc.
     *
     * @var float|null
     */
    private $reducRecalc;

    /**
     * Shb.
     *
     * @var float|null
     */
    private $shb;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the brut.
     *
     * @return float|null Returns the brut.
     */
    public function getBrut(): ?float {
        return $this->brut;
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code etablissement.
     *
     * @return string|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?string {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the difference.
     *
     * @return float|null Returns the difference.
     */
    public function getDifference(): ?float {
        return $this->difference;
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
     * Get the nbhr.
     *
     * @return float|null Returns the nbhr.
     */
    public function getNbhr(): ?float {
        return $this->nbhr;
    }

    /**
     * Get the nom employe.
     *
     * @return string|null Returns the nom employe.
     */
    public function getNomEmploye(): ?string {
        return $this->nomEmploye;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the reduc bul.
     *
     * @return float|null Returns the reduc bul.
     */
    public function getReducBul(): ?float {
        return $this->reducBul;
    }

    /**
     * Get the reduc recalc.
     *
     * @return float|null Returns the reduc recalc.
     */
    public function getReducRecalc(): ?float {
        return $this->reducRecalc;
    }

    /**
     * Get the shb.
     *
     * @return float|null Returns the shb.
     */
    public function getShb(): ?float {
        return $this->shb;
    }

    /**
     * Set the brut.
     *
     * @param float|null $brut The brut.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setBrut(?float $brut): EmpRecapLodeom {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setCodeCentre(?string $codeCentre): EmpRecapLodeom {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param string|null $codeEtablissement The code etablissement.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setCodeEtablissement(?string $codeEtablissement): EmpRecapLodeom {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpRecapLodeom {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the difference.
     *
     * @param float|null $difference The difference.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setDifference(?float $difference): EmpRecapLodeom {
        $this->difference = $difference;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setIndicePeriode(?int $indicePeriode): EmpRecapLodeom {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nbhr.
     *
     * @param float|null $nbhr The nbhr.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setNbhr(?float $nbhr): EmpRecapLodeom {
        $this->nbhr = $nbhr;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setNomEmploye(?string $nomEmploye): EmpRecapLodeom {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpRecapLodeom {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setPeriode(?DateTime $periode): EmpRecapLodeom {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the reduc bul.
     *
     * @param float|null $reducBul The reduc bul.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setReducBul(?float $reducBul): EmpRecapLodeom {
        $this->reducBul = $reducBul;
        return $this;
    }

    /**
     * Set the reduc recalc.
     *
     * @param float|null $reducRecalc The reduc recalc.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setReducRecalc(?float $reducRecalc): EmpRecapLodeom {
        $this->reducRecalc = $reducRecalc;
        return $this;
    }

    /**
     * Set the shb.
     *
     * @param float|null $shb The shb.
     * @return EmpRecapLodeom Returns this Emp recap lodeom.
     */
    public function setShb(?float $shb): EmpRecapLodeom {
        $this->shb = $shb;
        return $this;
    }
}
