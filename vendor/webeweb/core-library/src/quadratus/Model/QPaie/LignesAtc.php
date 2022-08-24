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
 * Lignes atc.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesAtc {

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
     * Motif.
     *
     * @var string|null
     */
    private $motif;

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
     * Salaire euro ou franc.
     *
     * @var string|null
     */
    private $salaireEuroOuFranc;

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
     * Get the montant cotis.
     *
     * @return float|null Returns the montant cotis.
     */
    public function getMontantCotis(): ?float {
        return $this->montantCotis;
    }

    /**
     * Get the motif.
     *
     * @return string|null Returns the motif.
     */
    public function getMotif(): ?string {
        return $this->motif;
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
     * Get the salaire euro ou franc.
     *
     * @return string|null Returns the salaire euro ou franc.
     */
    public function getSalaireEuroOuFranc(): ?string {
        return $this->salaireEuroOuFranc;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setMontant(?float $montant): LignesAtc {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant cotis.
     *
     * @param float|null $montantCotis The montant cotis.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setMontantCotis(?float $montantCotis): LignesAtc {
        $this->montantCotis = $montantCotis;
        return $this;
    }

    /**
     * Set the motif.
     *
     * @param string|null $motif The motif.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setMotif(?string $motif): LignesAtc {
        $this->motif = $motif;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setNumLigne(?string $numLigne): LignesAtc {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesAtc {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): LignesAtc {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setPeriodeFin(?DateTime $periodeFin): LignesAtc {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the ps euro ou franc.
     *
     * @param string|null $psEuroOuFranc The ps euro ou franc.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setPsEuroOuFranc(?string $psEuroOuFranc): LignesAtc {
        $this->psEuroOuFranc = $psEuroOuFranc;
        return $this;
    }

    /**
     * Set the salaire euro ou franc.
     *
     * @param string|null $salaireEuroOuFranc The salaire euro ou franc.
     * @return LignesAtc Returns this Lignes atc.
     */
    public function setSalaireEuroOuFranc(?string $salaireEuroOuFranc): LignesAtc {
        $this->salaireEuroOuFranc = $salaireEuroOuFranc;
        return $this;
    }
}
