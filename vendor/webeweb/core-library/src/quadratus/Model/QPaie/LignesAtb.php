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
 * Lignes atb.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesAtb {

    /**
     * Date versement.
     *
     * @var DateTime|null
     */
    private $dateVersement;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Montant cotis.
     *
     * @var float|null
     */
    private $montantCotis;

    /**
     * Montant euro ou franc.
     *
     * @var string|null
     */
    private $montantEuroOuFranc;

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
     * Ps euro ou franc.
     *
     * @var string|null
     */
    private $psEuroOuFranc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date versement.
     *
     * @return DateTime|null Returns the date versement.
     */
    public function getDateVersement(): ?DateTime {
        return $this->dateVersement;
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
     * Get the montant cotis.
     *
     * @return float|null Returns the montant cotis.
     */
    public function getMontantCotis(): ?float {
        return $this->montantCotis;
    }

    /**
     * Get the montant euro ou franc.
     *
     * @return string|null Returns the montant euro ou franc.
     */
    public function getMontantEuroOuFranc(): ?string {
        return $this->montantEuroOuFranc;
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
     * Get the ps euro ou franc.
     *
     * @return string|null Returns the ps euro ou franc.
     */
    public function getPsEuroOuFranc(): ?string {
        return $this->psEuroOuFranc;
    }

    /**
     * Set the date versement.
     *
     * @param DateTime|null $dateVersement The date versement.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setDateVersement(?DateTime $dateVersement): LignesAtb {
        $this->dateVersement = $dateVersement;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setMontant(?float $montant): LignesAtb {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant cotis.
     *
     * @param float|null $montantCotis The montant cotis.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setMontantCotis(?float $montantCotis): LignesAtb {
        $this->montantCotis = $montantCotis;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string|null $montantEuroOuFranc The montant euro ou franc.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setMontantEuroOuFranc(?string $montantEuroOuFranc): LignesAtb {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setNumLigne(?string $numLigne): LignesAtb {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesAtb {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): LignesAtb {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setPeriodeFin(?DateTime $periodeFin): LignesAtb {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the ps euro ou franc.
     *
     * @param string|null $psEuroOuFranc The ps euro ou franc.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setPsEuroOuFranc(?string $psEuroOuFranc): LignesAtb {
        $this->psEuroOuFranc = $psEuroOuFranc;
        return $this;
    }
}
