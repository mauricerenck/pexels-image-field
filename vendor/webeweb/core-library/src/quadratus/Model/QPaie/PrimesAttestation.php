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
 * Primes attestation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class PrimesAttestation {

    /**
     * Euro ou franc.
     *
     * @var string|null
     */
    private $euroOuFranc;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Num ligne.
     *
     * @var string|null
     */
    private $numLigne;

    /**
     * Numero attestation.
     *
     * @var string|null
     */
    private $numeroAttestation;

    /**
     * Paye le.
     *
     * @var DateTime|null
     */
    private $payeLe;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the euro ou franc.
     *
     * @return string|null Returns the euro ou franc.
     */
    public function getEuroOuFranc(): ?string {
        return $this->euroOuFranc;
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
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
    }

    /**
     * Get the num ligne.
     *
     * @return string|null Returns the num ligne.
     */
    public function getNumLigne(): ?string {
        return $this->numLigne;
    }

    /**
     * Get the numero attestation.
     *
     * @return string|null Returns the numero attestation.
     */
    public function getNumeroAttestation(): ?string {
        return $this->numeroAttestation;
    }

    /**
     * Get the paye le.
     *
     * @return DateTime|null Returns the paye le.
     */
    public function getPayeLe(): ?DateTime {
        return $this->payeLe;
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
     * Set the euro ou franc.
     *
     * @param string|null $euroOuFranc The euro ou franc.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setEuroOuFranc(?string $euroOuFranc): PrimesAttestation {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setMontant(?float $montant): PrimesAttestation {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setNature(?string $nature): PrimesAttestation {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setNumLigne(?string $numLigne): PrimesAttestation {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setNumeroAttestation(?string $numeroAttestation): PrimesAttestation {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the paye le.
     *
     * @param DateTime|null $payeLe The paye le.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setPayeLe(?DateTime $payeLe): PrimesAttestation {
        $this->payeLe = $payeLe;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): PrimesAttestation {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return PrimesAttestation Returns this Primes attestation.
     */
    public function setPeriodeFin(?DateTime $periodeFin): PrimesAttestation {
        $this->periodeFin = $periodeFin;
        return $this;
    }
}
