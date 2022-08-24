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
 * Coeff amortissement.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class CoeffAmortissement {

    /**
     * Coeff.
     *
     * @var float|null
     */
    private $coeff;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the coeff.
     *
     * @return float|null Returns the coeff.
     */
    public function getCoeff(): ?float {
        return $this->coeff;
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
     * Get the duree.
     *
     * @return int|null Returns the duree.
     */
    public function getDuree(): ?int {
        return $this->duree;
    }

    /**
     * Set the coeff.
     *
     * @param float|null $coeff The coeff.
     * @return CoeffAmortissement Returns this Coeff amortissement.
     */
    public function setCoeff(?float $coeff): CoeffAmortissement {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return CoeffAmortissement Returns this Coeff amortissement.
     */
    public function setDateDebut(?DateTime $dateDebut): CoeffAmortissement {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return CoeffAmortissement Returns this Coeff amortissement.
     */
    public function setDuree(?int $duree): CoeffAmortissement {
        $this->duree = $duree;
        return $this;
    }
}
