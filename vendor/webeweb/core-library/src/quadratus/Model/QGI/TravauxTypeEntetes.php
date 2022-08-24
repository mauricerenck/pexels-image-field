<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Travaux type entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TravauxTypeEntetes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Police.
     *
     * @var string|null
     */
    private $police;

    /**
     * Police2.
     *
     * @var string|null
     */
    private $police2;

    /**
     * Police3.
     *
     * @var string|null
     */
    private $police3;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the police.
     *
     * @return string|null Returns the police.
     */
    public function getPolice(): ?string {
        return $this->police;
    }

    /**
     * Get the police2.
     *
     * @return string|null Returns the police2.
     */
    public function getPolice2(): ?string {
        return $this->police2;
    }

    /**
     * Get the police3.
     *
     * @return string|null Returns the police3.
     */
    public function getPolice3(): ?string {
        return $this->police3;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setCode(?string $code): TravauxTypeEntetes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setCodeMission(?string $codeMission): TravauxTypeEntetes {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setLibelle(?string $libelle): TravauxTypeEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the police.
     *
     * @param string|null $police The police.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setPolice(?string $police): TravauxTypeEntetes {
        $this->police = $police;
        return $this;
    }

    /**
     * Set the police2.
     *
     * @param string|null $police2 The police2.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setPolice2(?string $police2): TravauxTypeEntetes {
        $this->police2 = $police2;
        return $this;
    }

    /**
     * Set the police3.
     *
     * @param string|null $police3 The police3.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setPolice3(?string $police3): TravauxTypeEntetes {
        $this->police3 = $police3;
        return $this;
    }
}
