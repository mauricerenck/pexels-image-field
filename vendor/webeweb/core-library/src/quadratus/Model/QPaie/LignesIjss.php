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
 * Lignes ijss.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesIjss {

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Montant2.
     *
     * @var float|null
     */
    private $montant2;

    /**
     * Montant euro ou franc.
     *
     * @var string|null
     */
    private $montantEuroOuFranc;

    /**
     * Motif.
     *
     * @var string|null
     */
    private $motif;

    /**
     * Mt brut perte salaire.
     *
     * @var float|null
     */
    private $mtBrutPerteSalaire;

    /**
     * Nb c.
     *
     * @var float|null
     */
    private $nbC;

    /**
     * Nb e.
     *
     * @var float|null
     */
    private $nbE;

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
     * Sal ret euro ou franc.
     *
     * @var string|null
     */
    private $salRetEuroOuFranc;

    /**
     * Salaire ret.
     *
     * @var float|null
     */
    private $salaireRet;

    /**
     * Somme regul1.
     *
     * @var float|null
     */
    private $sommeRegul1;

    /**
     * Somme regul2.
     *
     * @var float|null
     */
    private $sommeRegul2;

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
     * Get the montant2.
     *
     * @return float|null Returns the montant2.
     */
    public function getMontant2(): ?float {
        return $this->montant2;
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
     * Get the motif.
     *
     * @return string|null Returns the motif.
     */
    public function getMotif(): ?string {
        return $this->motif;
    }

    /**
     * Get the mt brut perte salaire.
     *
     * @return float|null Returns the mt brut perte salaire.
     */
    public function getMtBrutPerteSalaire(): ?float {
        return $this->mtBrutPerteSalaire;
    }

    /**
     * Get the nb c.
     *
     * @return float|null Returns the nb c.
     */
    public function getNbC(): ?float {
        return $this->nbC;
    }

    /**
     * Get the nb e.
     *
     * @return float|null Returns the nb e.
     */
    public function getNbE(): ?float {
        return $this->nbE;
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
     * Get the sal ret euro ou franc.
     *
     * @return string|null Returns the sal ret euro ou franc.
     */
    public function getSalRetEuroOuFranc(): ?string {
        return $this->salRetEuroOuFranc;
    }

    /**
     * Get the salaire ret.
     *
     * @return float|null Returns the salaire ret.
     */
    public function getSalaireRet(): ?float {
        return $this->salaireRet;
    }

    /**
     * Get the somme regul1.
     *
     * @return float|null Returns the somme regul1.
     */
    public function getSommeRegul1(): ?float {
        return $this->sommeRegul1;
    }

    /**
     * Get the somme regul2.
     *
     * @return float|null Returns the somme regul2.
     */
    public function getSommeRegul2(): ?float {
        return $this->sommeRegul2;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setMontant(?float $montant): LignesIjss {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setMontant2(?float $montant2): LignesIjss {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string|null $montantEuroOuFranc The montant euro ou franc.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setMontantEuroOuFranc(?string $montantEuroOuFranc): LignesIjss {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the motif.
     *
     * @param string|null $motif The motif.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setMotif(?string $motif): LignesIjss {
        $this->motif = $motif;
        return $this;
    }

    /**
     * Set the mt brut perte salaire.
     *
     * @param float|null $mtBrutPerteSalaire The mt brut perte salaire.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setMtBrutPerteSalaire(?float $mtBrutPerteSalaire): LignesIjss {
        $this->mtBrutPerteSalaire = $mtBrutPerteSalaire;
        return $this;
    }

    /**
     * Set the nb c.
     *
     * @param float|null $nbC The nb c.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setNbC(?float $nbC): LignesIjss {
        $this->nbC = $nbC;
        return $this;
    }

    /**
     * Set the nb e.
     *
     * @param float|null $nbE The nb e.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setNbE(?float $nbE): LignesIjss {
        $this->nbE = $nbE;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setNumLigne(?string $numLigne): LignesIjss {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setNumeroAttestation(?string $numeroAttestation): LignesIjss {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): LignesIjss {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setPeriodeFin(?DateTime $periodeFin): LignesIjss {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the sal ret euro ou franc.
     *
     * @param string|null $salRetEuroOuFranc The sal ret euro ou franc.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setSalRetEuroOuFranc(?string $salRetEuroOuFranc): LignesIjss {
        $this->salRetEuroOuFranc = $salRetEuroOuFranc;
        return $this;
    }

    /**
     * Set the salaire ret.
     *
     * @param float|null $salaireRet The salaire ret.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setSalaireRet(?float $salaireRet): LignesIjss {
        $this->salaireRet = $salaireRet;
        return $this;
    }

    /**
     * Set the somme regul1.
     *
     * @param float|null $sommeRegul1 The somme regul1.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setSommeRegul1(?float $sommeRegul1): LignesIjss {
        $this->sommeRegul1 = $sommeRegul1;
        return $this;
    }

    /**
     * Set the somme regul2.
     *
     * @param float|null $sommeRegul2 The somme regul2.
     * @return LignesIjss Returns this Lignes ijss.
     */
    public function setSommeRegul2(?float $sommeRegul2): LignesIjss {
        $this->sommeRegul2 = $sommeRegul2;
        return $this;
    }
}
