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
 * Tranches si bul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TranchesSiBul {

    /**
     * Brut al sans si.
     *
     * @var float|null
     */
    private $brutAlSansSi;

    /**
     * Cum brut al sans si.
     *
     * @var float|null
     */
    private $cumBrutAlSansSi;

    /**
     * Cum tot si.
     *
     * @var float|null
     */
    private $cumTotSi;

    /**
     * Cum tranche2 sans si.
     *
     * @var float|null
     */
    private $cumTranche2SansSi;

    /**
     * Cum tranche2 si.
     *
     * @var float|null
     */
    private $cumTranche2Si;

    /**
     * Cum tranche a sans si.
     *
     * @var float|null
     */
    private $cumTrancheASansSi;

    /**
     * Cum tranche asi.
     *
     * @var float|null
     */
    private $cumTrancheAsi;

    /**
     * Cum tranche b sans si.
     *
     * @var float|null
     */
    private $cumTrancheBSansSi;

    /**
     * Cum tranche bsi.
     *
     * @var float|null
     */
    private $cumTrancheBsi;

    /**
     * Cum tranche c sans si.
     *
     * @var float|null
     */
    private $cumTrancheCSansSi;

    /**
     * Cum tranche csi.
     *
     * @var float|null
     */
    private $cumTrancheCsi;

    /**
     * Cum tranche d1 sans si.
     *
     * @var float|null
     */
    private $cumTrancheD1SansSi;

    /**
     * Cum tranche d sans si.
     *
     * @var float|null
     */
    private $cumTrancheDSansSi;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

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
     * Tot si.
     *
     * @var float|null
     */
    private $totSi;

    /**
     * Tranche2 sans si.
     *
     * @var float|null
     */
    private $tranche2SansSi;

    /**
     * Tranche2 si.
     *
     * @var float|null
     */
    private $tranche2Si;

    /**
     * Tranche a sans si.
     *
     * @var float|null
     */
    private $trancheASansSi;

    /**
     * Tranche asi.
     *
     * @var float|null
     */
    private $trancheAsi;

    /**
     * Tranche b sans si.
     *
     * @var float|null
     */
    private $trancheBSansSi;

    /**
     * Tranche bsi.
     *
     * @var float|null
     */
    private $trancheBsi;

    /**
     * Tranche c sans si.
     *
     * @var float|null
     */
    private $trancheCSansSi;

    /**
     * Tranche csi.
     *
     * @var float|null
     */
    private $trancheCsi;

    /**
     * Tranche d1 sans si.
     *
     * @var float|null
     */
    private $trancheD1SansSi;

    /**
     * Tranche d sans si.
     *
     * @var float|null
     */
    private $trancheDSansSi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the brut al sans si.
     *
     * @return float|null Returns the brut al sans si.
     */
    public function getBrutAlSansSi(): ?float {
        return $this->brutAlSansSi;
    }

    /**
     * Get the cum brut al sans si.
     *
     * @return float|null Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi(): ?float {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Get the cum tot si.
     *
     * @return float|null Returns the cum tot si.
     */
    public function getCumTotSi(): ?float {
        return $this->cumTotSi;
    }

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float|null Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi(): ?float {
        return $this->cumTranche2SansSi;
    }

    /**
     * Get the cum tranche2 si.
     *
     * @return float|null Returns the cum tranche2 si.
     */
    public function getCumTranche2Si(): ?float {
        return $this->cumTranche2Si;
    }

    /**
     * Get the cum tranche a sans si.
     *
     * @return float|null Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi(): ?float {
        return $this->cumTrancheASansSi;
    }

    /**
     * Get the cum tranche asi.
     *
     * @return float|null Returns the cum tranche asi.
     */
    public function getCumTrancheAsi(): ?float {
        return $this->cumTrancheAsi;
    }

    /**
     * Get the cum tranche b sans si.
     *
     * @return float|null Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi(): ?float {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Get the cum tranche bsi.
     *
     * @return float|null Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi(): ?float {
        return $this->cumTrancheBsi;
    }

    /**
     * Get the cum tranche c sans si.
     *
     * @return float|null Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi(): ?float {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Get the cum tranche csi.
     *
     * @return float|null Returns the cum tranche csi.
     */
    public function getCumTrancheCsi(): ?float {
        return $this->cumTrancheCsi;
    }

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float|null Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi(): ?float {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Get the cum tranche d sans si.
     *
     * @return float|null Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi(): ?float {
        return $this->cumTrancheDSansSi;
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
     * Get the tot si.
     *
     * @return float|null Returns the tot si.
     */
    public function getTotSi(): ?float {
        return $this->totSi;
    }

    /**
     * Get the tranche2 sans si.
     *
     * @return float|null Returns the tranche2 sans si.
     */
    public function getTranche2SansSi(): ?float {
        return $this->tranche2SansSi;
    }

    /**
     * Get the tranche2 si.
     *
     * @return float|null Returns the tranche2 si.
     */
    public function getTranche2Si(): ?float {
        return $this->tranche2Si;
    }

    /**
     * Get the tranche a sans si.
     *
     * @return float|null Returns the tranche a sans si.
     */
    public function getTrancheASansSi(): ?float {
        return $this->trancheASansSi;
    }

    /**
     * Get the tranche asi.
     *
     * @return float|null Returns the tranche asi.
     */
    public function getTrancheAsi(): ?float {
        return $this->trancheAsi;
    }

    /**
     * Get the tranche b sans si.
     *
     * @return float|null Returns the tranche b sans si.
     */
    public function getTrancheBSansSi(): ?float {
        return $this->trancheBSansSi;
    }

    /**
     * Get the tranche bsi.
     *
     * @return float|null Returns the tranche bsi.
     */
    public function getTrancheBsi(): ?float {
        return $this->trancheBsi;
    }

    /**
     * Get the tranche c sans si.
     *
     * @return float|null Returns the tranche c sans si.
     */
    public function getTrancheCSansSi(): ?float {
        return $this->trancheCSansSi;
    }

    /**
     * Get the tranche csi.
     *
     * @return float|null Returns the tranche csi.
     */
    public function getTrancheCsi(): ?float {
        return $this->trancheCsi;
    }

    /**
     * Get the tranche d1 sans si.
     *
     * @return float|null Returns the tranche d1 sans si.
     */
    public function getTrancheD1SansSi(): ?float {
        return $this->trancheD1SansSi;
    }

    /**
     * Get the tranche d sans si.
     *
     * @return float|null Returns the tranche d sans si.
     */
    public function getTrancheDSansSi(): ?float {
        return $this->trancheDSansSi;
    }

    /**
     * Set the brut al sans si.
     *
     * @param float|null $brutAlSansSi The brut al sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setBrutAlSansSi(?float $brutAlSansSi): TranchesSiBul {
        $this->brutAlSansSi = $brutAlSansSi;
        return $this;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float|null $cumBrutAlSansSi The cum brut al sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumBrutAlSansSi(?float $cumBrutAlSansSi): TranchesSiBul {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }

    /**
     * Set the cum tot si.
     *
     * @param float|null $cumTotSi The cum tot si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTotSi(?float $cumTotSi): TranchesSiBul {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float|null $cumTranche2SansSi The cum tranche2 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTranche2SansSi(?float $cumTranche2SansSi): TranchesSiBul {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float|null $cumTranche2Si The cum tranche2 si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTranche2Si(?float $cumTranche2Si): TranchesSiBul {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float|null $cumTrancheASansSi The cum tranche a sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheASansSi(?float $cumTrancheASansSi): TranchesSiBul {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float|null $cumTrancheAsi The cum tranche asi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheAsi(?float $cumTrancheAsi): TranchesSiBul {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float|null $cumTrancheBSansSi The cum tranche b sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheBSansSi(?float $cumTrancheBSansSi): TranchesSiBul {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float|null $cumTrancheBsi The cum tranche bsi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheBsi(?float $cumTrancheBsi): TranchesSiBul {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float|null $cumTrancheCSansSi The cum tranche c sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheCSansSi(?float $cumTrancheCSansSi): TranchesSiBul {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float|null $cumTrancheCsi The cum tranche csi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheCsi(?float $cumTrancheCsi): TranchesSiBul {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float|null $cumTrancheD1SansSi The cum tranche d1 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheD1SansSi(?float $cumTrancheD1SansSi): TranchesSiBul {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float|null $cumTrancheDSansSi The cum tranche d sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheDSansSi(?float $cumTrancheDSansSi): TranchesSiBul {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setIndicePeriode(?int $indicePeriode): TranchesSiBul {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setNumeroEmploye(?string $numeroEmploye): TranchesSiBul {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setPeriode(?DateTime $periode): TranchesSiBul {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tot si.
     *
     * @param float|null $totSi The tot si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTotSi(?float $totSi): TranchesSiBul {
        $this->totSi = $totSi;
        return $this;
    }

    /**
     * Set the tranche2 sans si.
     *
     * @param float|null $tranche2SansSi The tranche2 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTranche2SansSi(?float $tranche2SansSi): TranchesSiBul {
        $this->tranche2SansSi = $tranche2SansSi;
        return $this;
    }

    /**
     * Set the tranche2 si.
     *
     * @param float|null $tranche2Si The tranche2 si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTranche2Si(?float $tranche2Si): TranchesSiBul {
        $this->tranche2Si = $tranche2Si;
        return $this;
    }

    /**
     * Set the tranche a sans si.
     *
     * @param float|null $trancheASansSi The tranche a sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheASansSi(?float $trancheASansSi): TranchesSiBul {
        $this->trancheASansSi = $trancheASansSi;
        return $this;
    }

    /**
     * Set the tranche asi.
     *
     * @param float|null $trancheAsi The tranche asi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheAsi(?float $trancheAsi): TranchesSiBul {
        $this->trancheAsi = $trancheAsi;
        return $this;
    }

    /**
     * Set the tranche b sans si.
     *
     * @param float|null $trancheBSansSi The tranche b sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheBSansSi(?float $trancheBSansSi): TranchesSiBul {
        $this->trancheBSansSi = $trancheBSansSi;
        return $this;
    }

    /**
     * Set the tranche bsi.
     *
     * @param float|null $trancheBsi The tranche bsi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheBsi(?float $trancheBsi): TranchesSiBul {
        $this->trancheBsi = $trancheBsi;
        return $this;
    }

    /**
     * Set the tranche c sans si.
     *
     * @param float|null $trancheCSansSi The tranche c sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheCSansSi(?float $trancheCSansSi): TranchesSiBul {
        $this->trancheCSansSi = $trancheCSansSi;
        return $this;
    }

    /**
     * Set the tranche csi.
     *
     * @param float|null $trancheCsi The tranche csi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheCsi(?float $trancheCsi): TranchesSiBul {
        $this->trancheCsi = $trancheCsi;
        return $this;
    }

    /**
     * Set the tranche d1 sans si.
     *
     * @param float|null $trancheD1SansSi The tranche d1 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheD1SansSi(?float $trancheD1SansSi): TranchesSiBul {
        $this->trancheD1SansSi = $trancheD1SansSi;
        return $this;
    }

    /**
     * Set the tranche d sans si.
     *
     * @param float|null $trancheDSansSi The tranche d sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheDSansSi(?float $trancheDSansSi): TranchesSiBul {
        $this->trancheDSansSi = $trancheDSansSi;
        return $this;
    }
}
