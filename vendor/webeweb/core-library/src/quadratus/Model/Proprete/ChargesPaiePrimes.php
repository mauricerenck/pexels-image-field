<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Charges paie primes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChargesPaiePrimes {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string|null
     */
    private $codePrime;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string|null Returns the code prime.
     */
    public function getCodePrime(): ?string {
        return $this->codePrime;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
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
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return ChargesPaiePrimes Returns this Charges paie primes.
     */
    public function setCodeEmploye(?string $codeEmploye): ChargesPaiePrimes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string|null $codePrime The code prime.
     * @return ChargesPaiePrimes Returns this Charges paie primes.
     */
    public function setCodePrime(?string $codePrime): ChargesPaiePrimes {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return ChargesPaiePrimes Returns this Charges paie primes.
     */
    public function setMontant(?float $montant): ChargesPaiePrimes {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return ChargesPaiePrimes Returns this Charges paie primes.
     */
    public function setPeriode(?DateTime $periode): ChargesPaiePrimes {
        $this->periode = $periode;
        return $this;
    }
}
