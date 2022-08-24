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
 * Salaires attestation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class SalairesAttestation {

    /**
     * Date paie.
     *
     * @var DateTime|null
     */
    private $datePaie;

    /**
     * Euro ou franc.
     *
     * @var string|null
     */
    private $euroOuFranc;

    /**
     * Heures trav.
     *
     * @var float|null
     */
    private $heuresTrav;

    /**
     * Jours non payes.
     *
     * @var float|null
     */
    private $joursNonPayes;

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
     * Observation.
     *
     * @var string|null
     */
    private $observation;

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
     * Precompte.
     *
     * @var float|null
     */
    private $precompte;

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
     * Get the date paie.
     *
     * @return DateTime|null Returns the date paie.
     */
    public function getDatePaie(): ?DateTime {
        return $this->datePaie;
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
     * Get the heures trav.
     *
     * @return float|null Returns the heures trav.
     */
    public function getHeuresTrav(): ?float {
        return $this->heuresTrav;
    }

    /**
     * Get the jours non payes.
     *
     * @return float|null Returns the jours non payes.
     */
    public function getJoursNonPayes(): ?float {
        return $this->joursNonPayes;
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
     * Get the observation.
     *
     * @return string|null Returns the observation.
     */
    public function getObservation(): ?string {
        return $this->observation;
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
     * Get the precompte.
     *
     * @return float|null Returns the precompte.
     */
    public function getPrecompte(): ?float {
        return $this->precompte;
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
     * Set the date paie.
     *
     * @param DateTime|null $datePaie The date paie.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setDatePaie(?DateTime $datePaie): SalairesAttestation {
        $this->datePaie = $datePaie;
        return $this;
    }

    /**
     * Set the euro ou franc.
     *
     * @param string|null $euroOuFranc The euro ou franc.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setEuroOuFranc(?string $euroOuFranc): SalairesAttestation {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }

    /**
     * Set the heures trav.
     *
     * @param float|null $heuresTrav The heures trav.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setHeuresTrav(?float $heuresTrav): SalairesAttestation {
        $this->heuresTrav = $heuresTrav;
        return $this;
    }

    /**
     * Set the jours non payes.
     *
     * @param float|null $joursNonPayes The jours non payes.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setJoursNonPayes(?float $joursNonPayes): SalairesAttestation {
        $this->joursNonPayes = $joursNonPayes;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string|null $numLigne The num ligne.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setNumLigne(?string $numLigne): SalairesAttestation {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setNumeroAttestation(?string $numeroAttestation): SalairesAttestation {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the observation.
     *
     * @param string|null $observation The observation.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setObservation(?string $observation): SalairesAttestation {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): SalairesAttestation {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setPeriodeFin(?DateTime $periodeFin): SalairesAttestation {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the precompte.
     *
     * @param float|null $precompte The precompte.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setPrecompte(?float $precompte): SalairesAttestation {
        $this->precompte = $precompte;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float|null $salaireBrut The salaire brut.
     * @return SalairesAttestation Returns this Salaires attestation.
     */
    public function setSalaireBrut(?float $salaireBrut): SalairesAttestation {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }
}
