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

/**
 * Cumuls libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class CumulsLibelles {

    /**
     * Montant cumul.
     *
     * @var float|null
     */
    private $montantCumul;

    /**
     * Num cumul bulletin.
     *
     * @var int|null
     */
    private $numCumulBulletin;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the montant cumul.
     *
     * @return float|null Returns the montant cumul.
     */
    public function getMontantCumul(): ?float {
        return $this->montantCumul;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int|null Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin(): ?int {
        return $this->numCumulBulletin;
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
     * Set the montant cumul.
     *
     * @param float|null $montantCumul The montant cumul.
     * @return CumulsLibelles Returns this Cumuls libelles.
     */
    public function setMontantCumul(?float $montantCumul): CumulsLibelles {
        $this->montantCumul = $montantCumul;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int|null $numCumulBulletin The num cumul bulletin.
     * @return CumulsLibelles Returns this Cumuls libelles.
     */
    public function setNumCumulBulletin(?int $numCumulBulletin): CumulsLibelles {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return CumulsLibelles Returns this Cumuls libelles.
     */
    public function setNumeroEmploye(?string $numeroEmploye): CumulsLibelles {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }
}
