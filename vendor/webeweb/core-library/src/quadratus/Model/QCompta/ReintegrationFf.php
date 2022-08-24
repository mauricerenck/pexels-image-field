<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Reintegration ff.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ReintegrationFf {

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Id tableau.
     *
     * @var int|null
     */
    private $idTableau;

    /**
     * Mtt apports.
     *
     * @var float|null
     */
    private $mttApports;

    /**
     * Mtt emprunts.
     *
     * @var float|null
     */
    private $mttEmprunts;

    /**
     * Mtt prelev.
     *
     * @var float|null
     */
    private $mttPrelev;

    /**
     * Mtt treso.
     *
     * @var float|null
     */
    private $mttTreso;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the id tableau.
     *
     * @return int|null Returns the id tableau.
     */
    public function getIdTableau(): ?int {
        return $this->idTableau;
    }

    /**
     * Get the mtt apports.
     *
     * @return float|null Returns the mtt apports.
     */
    public function getMttApports(): ?float {
        return $this->mttApports;
    }

    /**
     * Get the mtt emprunts.
     *
     * @return float|null Returns the mtt emprunts.
     */
    public function getMttEmprunts(): ?float {
        return $this->mttEmprunts;
    }

    /**
     * Get the mtt prelev.
     *
     * @return float|null Returns the mtt prelev.
     */
    public function getMttPrelev(): ?float {
        return $this->mttPrelev;
    }

    /**
     * Get the mtt treso.
     *
     * @return float|null Returns the mtt treso.
     */
    public function getMttTreso(): ?float {
        return $this->mttTreso;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return ReintegrationFf Returns this Reintegration ff.
     */
    public function setDate(?DateTime $date): ReintegrationFf {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the id tableau.
     *
     * @param int|null $idTableau The id tableau.
     * @return ReintegrationFf Returns this Reintegration ff.
     */
    public function setIdTableau(?int $idTableau): ReintegrationFf {
        $this->idTableau = $idTableau;
        return $this;
    }

    /**
     * Set the mtt apports.
     *
     * @param float|null $mttApports The mtt apports.
     * @return ReintegrationFf Returns this Reintegration ff.
     */
    public function setMttApports(?float $mttApports): ReintegrationFf {
        $this->mttApports = $mttApports;
        return $this;
    }

    /**
     * Set the mtt emprunts.
     *
     * @param float|null $mttEmprunts The mtt emprunts.
     * @return ReintegrationFf Returns this Reintegration ff.
     */
    public function setMttEmprunts(?float $mttEmprunts): ReintegrationFf {
        $this->mttEmprunts = $mttEmprunts;
        return $this;
    }

    /**
     * Set the mtt prelev.
     *
     * @param float|null $mttPrelev The mtt prelev.
     * @return ReintegrationFf Returns this Reintegration ff.
     */
    public function setMttPrelev(?float $mttPrelev): ReintegrationFf {
        $this->mttPrelev = $mttPrelev;
        return $this;
    }

    /**
     * Set the mtt treso.
     *
     * @param float|null $mttTreso The mtt treso.
     * @return ReintegrationFf Returns this Reintegration ff.
     */
    public function setMttTreso(?float $mttTreso): ReintegrationFf {
        $this->mttTreso = $mttTreso;
        return $this;
    }
}
