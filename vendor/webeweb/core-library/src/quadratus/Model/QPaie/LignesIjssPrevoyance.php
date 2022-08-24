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
 * Lignes ijss prevoyance.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesIjssPrevoyance {

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
     * Set the date versement.
     *
     * @param DateTime|null $dateVersement The date versement.
     * @return LignesIjssPrevoyance Returns this Lignes ijss prevoyance.
     */
    public function setDateVersement(?DateTime $dateVersement): LignesIjssPrevoyance {
        $this->dateVersement = $dateVersement;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesIjssPrevoyance Returns this Lignes ijss prevoyance.
     */
    public function setMontant(?float $montant): LignesIjssPrevoyance {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesIjssPrevoyance Returns this Lignes ijss prevoyance.
     */
    public function setNumLigne(?string $numLigne): LignesIjssPrevoyance {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesIjssPrevoyance Returns this Lignes ijss prevoyance.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesIjssPrevoyance {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesIjssPrevoyance Returns this Lignes ijss prevoyance.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): LignesIjssPrevoyance {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesIjssPrevoyance Returns this Lignes ijss prevoyance.
     */
    public function setPeriodeFin(?DateTime $periodeFin): LignesIjssPrevoyance {
        $this->periodeFin = $periodeFin;
        return $this;
    }
}
