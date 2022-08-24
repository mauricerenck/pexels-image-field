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
 * Emp report modulation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpReportModulation {

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Report mod ant.
     *
     * @var float|null
     */
    private $reportModAnt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication(): ?DateTime {
        return $this->dateApplication;
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
     * Get the report mod ant.
     *
     * @return float|null Returns the report mod ant.
     */
    public function getReportModAnt(): ?float {
        return $this->reportModAnt;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return EmpReportModulation Returns this Emp report modulation.
     */
    public function setDateApplication(?DateTime $dateApplication): EmpReportModulation {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpReportModulation Returns this Emp report modulation.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpReportModulation {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the report mod ant.
     *
     * @param float|null $reportModAnt The report mod ant.
     * @return EmpReportModulation Returns this Emp report modulation.
     */
    public function setReportModAnt(?float $reportModAnt): EmpReportModulation {
        $this->reportModAnt = $reportModAnt;
        return $this;
    }
}
