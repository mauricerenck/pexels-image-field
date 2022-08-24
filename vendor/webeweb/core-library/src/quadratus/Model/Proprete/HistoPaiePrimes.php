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
 * Histo paie primes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoPaiePrimes {

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
     * Nombre prime.
     *
     * @var float|null
     */
    private $nombrePrime;

    /**
     * Numero prime.
     *
     * @var int|null
     */
    private $numeroPrime;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periode rappel.
     *
     * @var DateTime|null
     */
    private $periodeRappel;

    /**
     * Taux prime.
     *
     * @var float|null
     */
    private $tauxPrime;

    /**
     * Type prime.
     *
     * @var string|null
     */
    private $typePrime;

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
     * Get the nombre prime.
     *
     * @return float|null Returns the nombre prime.
     */
    public function getNombrePrime(): ?float {
        return $this->nombrePrime;
    }

    /**
     * Get the numero prime.
     *
     * @return int|null Returns the numero prime.
     */
    public function getNumeroPrime(): ?int {
        return $this->numeroPrime;
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
     * Get the periode rappel.
     *
     * @return DateTime|null Returns the periode rappel.
     */
    public function getPeriodeRappel(): ?DateTime {
        return $this->periodeRappel;
    }

    /**
     * Get the taux prime.
     *
     * @return float|null Returns the taux prime.
     */
    public function getTauxPrime(): ?float {
        return $this->tauxPrime;
    }

    /**
     * Get the type prime.
     *
     * @return string|null Returns the type prime.
     */
    public function getTypePrime(): ?string {
        return $this->typePrime;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoPaiePrimes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string|null $codePrime The code prime.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setCodePrime(?string $codePrime): HistoPaiePrimes {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the nombre prime.
     *
     * @param float|null $nombrePrime The nombre prime.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setNombrePrime(?float $nombrePrime): HistoPaiePrimes {
        $this->nombrePrime = $nombrePrime;
        return $this;
    }

    /**
     * Set the numero prime.
     *
     * @param int|null $numeroPrime The numero prime.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setNumeroPrime(?int $numeroPrime): HistoPaiePrimes {
        $this->numeroPrime = $numeroPrime;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setPeriode(?DateTime $periode): HistoPaiePrimes {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode rappel.
     *
     * @param DateTime|null $periodeRappel The periode rappel.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setPeriodeRappel(?DateTime $periodeRappel): HistoPaiePrimes {
        $this->periodeRappel = $periodeRappel;
        return $this;
    }

    /**
     * Set the taux prime.
     *
     * @param float|null $tauxPrime The taux prime.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setTauxPrime(?float $tauxPrime): HistoPaiePrimes {
        $this->tauxPrime = $tauxPrime;
        return $this;
    }

    /**
     * Set the type prime.
     *
     * @param string|null $typePrime The type prime.
     * @return HistoPaiePrimes Returns this Histo paie primes.
     */
    public function setTypePrime(?string $typePrime): HistoPaiePrimes {
        $this->typePrime = $typePrime;
        return $this;
    }
}
