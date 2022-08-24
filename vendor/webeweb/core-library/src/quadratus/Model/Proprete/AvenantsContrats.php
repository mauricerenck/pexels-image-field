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
 * Avenants contrats.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AvenantsContrats {

    /**
     * Chrono.
     *
     * @var string|null
     */
    private $chrono;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Date avenant.
     *
     * @var DateTime|null
     */
    private $dateAvenant;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Num avenant saisi.
     *
     * @var int|null
     */
    private $numAvenantSaisi;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Observation.
     *
     * @var string|null
     */
    private $observation;

    /**
     * Periode avenant.
     *
     * @var DateTime|null
     */
    private $periodeAvenant;

    /**
     * Signature employe.
     *
     * @var bool|null
     */
    private $signatureEmploye;

    /**
     * Type avenant.
     *
     * @var string|null
     */
    private $typeAvenant;

    /**
     * Type document.
     *
     * @var string|null
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chrono.
     *
     * @return string|null Returns the chrono.
     */
    public function getChrono(): ?string {
        return $this->chrono;
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
     * Get the date avenant.
     *
     * @return DateTime|null Returns the date avenant.
     */
    public function getDateAvenant(): ?DateTime {
        return $this->dateAvenant;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the num avenant saisi.
     *
     * @return int|null Returns the num avenant saisi.
     */
    public function getNumAvenantSaisi(): ?int {
        return $this->numAvenantSaisi;
    }

    /**
     * Get the numero avenant.
     *
     * @return int|null Returns the numero avenant.
     */
    public function getNumeroAvenant(): ?int {
        return $this->numeroAvenant;
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
     * Get the periode avenant.
     *
     * @return DateTime|null Returns the periode avenant.
     */
    public function getPeriodeAvenant(): ?DateTime {
        return $this->periodeAvenant;
    }

    /**
     * Get the signature employe.
     *
     * @return bool|null Returns the signature employe.
     */
    public function getSignatureEmploye(): ?bool {
        return $this->signatureEmploye;
    }

    /**
     * Get the type avenant.
     *
     * @return string|null Returns the type avenant.
     */
    public function getTypeAvenant(): ?string {
        return $this->typeAvenant;
    }

    /**
     * Get the type document.
     *
     * @return string|null Returns the type document.
     */
    public function getTypeDocument(): ?string {
        return $this->typeDocument;
    }

    /**
     * Set the chrono.
     *
     * @param string|null $chrono The chrono.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setChrono(?string $chrono): AvenantsContrats {
        $this->chrono = $chrono;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setCodeEmploye(?string $codeEmploye): AvenantsContrats {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date avenant.
     *
     * @param DateTime|null $dateAvenant The date avenant.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setDateAvenant(?DateTime $dateAvenant): AvenantsContrats {
        $this->dateAvenant = $dateAvenant;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setLienDocument(?string $lienDocument): AvenantsContrats {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the num avenant saisi.
     *
     * @param int|null $numAvenantSaisi The num avenant saisi.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setNumAvenantSaisi(?int $numAvenantSaisi): AvenantsContrats {
        $this->numAvenantSaisi = $numAvenantSaisi;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setNumeroAvenant(?int $numeroAvenant): AvenantsContrats {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the observation.
     *
     * @param string|null $observation The observation.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setObservation(?string $observation): AvenantsContrats {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Set the periode avenant.
     *
     * @param DateTime|null $periodeAvenant The periode avenant.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setPeriodeAvenant(?DateTime $periodeAvenant): AvenantsContrats {
        $this->periodeAvenant = $periodeAvenant;
        return $this;
    }

    /**
     * Set the signature employe.
     *
     * @param bool|null $signatureEmploye The signature employe.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setSignatureEmploye(?bool $signatureEmploye): AvenantsContrats {
        $this->signatureEmploye = $signatureEmploye;
        return $this;
    }

    /**
     * Set the type avenant.
     *
     * @param string|null $typeAvenant The type avenant.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setTypeAvenant(?string $typeAvenant): AvenantsContrats {
        $this->typeAvenant = $typeAvenant;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string|null $typeDocument The type document.
     * @return AvenantsContrats Returns this Avenants contrats.
     */
    public function setTypeDocument(?string $typeDocument): AvenantsContrats {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
