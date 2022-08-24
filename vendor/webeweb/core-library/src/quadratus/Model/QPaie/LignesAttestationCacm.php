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
 * Lignes attestation cacm.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesAttestationCacm {

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
     * Date paiement.
     *
     * @var DateTime|null
     */
    private $datePaiement;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

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
     * Nb jour trav.
     *
     * @var float|null
     */
    private $nbJourTrav;

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
     * Salaire brut.
     *
     * @var float|null
     */
    private $salaireBrut;

    /**
     * Type ligne.
     *
     * @var int|null
     */
    private $typeLigne;

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
     * Get the date paiement.
     *
     * @return DateTime|null Returns the date paiement.
     */
    public function getDatePaiement(): ?DateTime {
        return $this->datePaiement;
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
     * Get the nb jour trav.
     *
     * @return float|null Returns the nb jour trav.
     */
    public function getNbJourTrav(): ?float {
        return $this->nbJourTrav;
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
     * Get the salaire brut.
     *
     * @return float|null Returns the salaire brut.
     */
    public function getSalaireBrut(): ?float {
        return $this->salaireBrut;
    }

    /**
     * Get the type ligne.
     *
     * @return int|null Returns the type ligne.
     */
    public function getTypeLigne(): ?int {
        return $this->typeLigne;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setDateDebut(?DateTime $dateDebut): LignesAttestationCacm {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setDateFin(?DateTime $dateFin): LignesAttestationCacm {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date paiement.
     *
     * @param DateTime|null $datePaiement The date paiement.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setDatePaiement(?DateTime $datePaiement): LignesAttestationCacm {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setMontant(?float $montant): LignesAttestationCacm {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant precompte.
     *
     * @param float|null $montantPrecompte The montant precompte.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setMontantPrecompte(?float $montantPrecompte): LignesAttestationCacm {
        $this->montantPrecompte = $montantPrecompte;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float|null $nbHeureTrav The nb heure trav.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setNbHeureTrav(?float $nbHeureTrav): LignesAttestationCacm {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb jour trav.
     *
     * @param float|null $nbJourTrav The nb jour trav.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setNbJourTrav(?float $nbJourTrav): LignesAttestationCacm {
        $this->nbJourTrav = $nbJourTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setNumLigne(?int $numLigne): LignesAttestationCacm {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesAttestationCacm {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float|null $salaireBrut The salaire brut.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setSalaireBrut(?float $salaireBrut): LignesAttestationCacm {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param int|null $typeLigne The type ligne.
     * @return LignesAttestationCacm Returns this Lignes attestation cacm.
     */
    public function setTypeLigne(?int $typeLigne): LignesAttestationCacm {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
