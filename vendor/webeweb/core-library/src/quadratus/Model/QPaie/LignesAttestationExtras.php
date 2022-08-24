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
 * Lignes attestation extras.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesAttestationExtras {

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Montant iccp.
     *
     * @var float|null
     */
    private $montantIccp;

    /**
     * Montant ipe.
     *
     * @var float|null
     */
    private $montantIpe;

    /**
     * Montant precompte.
     *
     * @var float|null
     */
    private $montantPrecompte;

    /**
     * Nb heure trav.
     *
     * @var float|null
     */
    private $nbHeureTrav;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero attestation.
     *
     * @var string|null
     */
    private $numeroAttestation;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Salaire brut.
     *
     * @var float|null
     */
    private $salaireBrut;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the montant iccp.
     *
     * @return float|null Returns the montant iccp.
     */
    public function getMontantIccp(): ?float {
        return $this->montantIccp;
    }

    /**
     * Get the montant ipe.
     *
     * @return float|null Returns the montant ipe.
     */
    public function getMontantIpe(): ?float {
        return $this->montantIpe;
    }

    /**
     * Get the montant precompte.
     *
     * @return float|null Returns the montant precompte.
     */
    public function getMontantPrecompte(): ?float {
        return $this->montantPrecompte;
    }

    /**
     * Get the nb heure trav.
     *
     * @return float|null Returns the nb heure trav.
     */
    public function getNbHeureTrav(): ?float {
        return $this->nbHeureTrav;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
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
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the salaire brut.
     *
     * @return float|null Returns the salaire brut.
     */
    public function getSalaireBrut(): ?float {
        return $this->salaireBrut;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setDateDebut(?DateTime $dateDebut): LignesAttestationExtras {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setDateFin(?DateTime $dateFin): LignesAttestationExtras {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the montant iccp.
     *
     * @param float|null $montantIccp The montant iccp.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setMontantIccp(?float $montantIccp): LignesAttestationExtras {
        $this->montantIccp = $montantIccp;
        return $this;
    }

    /**
     * Set the montant ipe.
     *
     * @param float|null $montantIpe The montant ipe.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setMontantIpe(?float $montantIpe): LignesAttestationExtras {
        $this->montantIpe = $montantIpe;
        return $this;
    }

    /**
     * Set the montant precompte.
     *
     * @param float|null $montantPrecompte The montant precompte.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setMontantPrecompte(?float $montantPrecompte): LignesAttestationExtras {
        $this->montantPrecompte = $montantPrecompte;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float|null $nbHeureTrav The nb heure trav.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setNbHeureTrav(?float $nbHeureTrav): LignesAttestationExtras {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setNumLigne(?int $numLigne): LignesAttestationExtras {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesAttestationExtras {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesAttestationExtras {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float|null $salaireBrut The salaire brut.
     * @return LignesAttestationExtras Returns this Lignes attestation extras.
     */
    public function setSalaireBrut(?float $salaireBrut): LignesAttestationExtras {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }
}
