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
 * Lignes ijss tps partiel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesIjssTpsPartiel {

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Montant plein.
     *
     * @var float|null
     */
    private $montantPlein;

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
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the montant plein.
     *
     * @return float|null Returns the montant plein.
     */
    public function getMontantPlein(): ?float {
        return $this->montantPlein;
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
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesIjssTpsPartiel Returns this Lignes ijss tps partiel.
     */
    public function setMontant(?float $montant): LignesIjssTpsPartiel {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant plein.
     *
     * @param float|null $montantPlein The montant plein.
     * @return LignesIjssTpsPartiel Returns this Lignes ijss tps partiel.
     */
    public function setMontantPlein(?float $montantPlein): LignesIjssTpsPartiel {
        $this->montantPlein = $montantPlein;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesIjssTpsPartiel Returns this Lignes ijss tps partiel.
     */
    public function setNumLigne(?string $numLigne): LignesIjssTpsPartiel {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesIjssTpsPartiel Returns this Lignes ijss tps partiel.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesIjssTpsPartiel {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesIjssTpsPartiel Returns this Lignes ijss tps partiel.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): LignesIjssTpsPartiel {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesIjssTpsPartiel Returns this Lignes ijss tps partiel.
     */
    public function setPeriodeFin(?DateTime $periodeFin): LignesIjssTpsPartiel {
        $this->periodeFin = $periodeFin;
        return $this;
    }
}
