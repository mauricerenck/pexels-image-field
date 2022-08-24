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

use DateTime;

/**
 * Dirigeants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Dirigeants {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code dirigeant.
     *
     * @var string|null
     */
    private $codeDirigeant;

    /**
     * Code fonction.
     *
     * @var string|null
     */
    private $codeFonction;

    /**
     * Date nomination.
     *
     * @var DateTime|null
     */
    private $dateNomination;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

    /**
     * Id.
     *
     * @var int|null
     */
    private $id;

    /**
     * Observations.
     *
     * @var string|null
     */
    private $observations;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code dirigeant.
     *
     * @return string|null Returns the code dirigeant.
     */
    public function getCodeDirigeant(): ?string {
        return $this->codeDirigeant;
    }

    /**
     * Get the code fonction.
     *
     * @return string|null Returns the code fonction.
     */
    public function getCodeFonction(): ?string {
        return $this->codeFonction;
    }

    /**
     * Get the date nomination.
     *
     * @return DateTime|null Returns the date nomination.
     */
    public function getDateNomination(): ?DateTime {
        return $this->dateNomination;
    }

    /**
     * Get the duree.
     *
     * @return int|null Returns the duree.
     */
    public function getDuree(): ?int {
        return $this->duree;
    }

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Get the observations.
     *
     * @return string|null Returns the observations.
     */
    public function getObservations(): ?string {
        return $this->observations;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setCodeClient(?string $codeClient): Dirigeants {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code dirigeant.
     *
     * @param string|null $codeDirigeant The code dirigeant.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setCodeDirigeant(?string $codeDirigeant): Dirigeants {
        $this->codeDirigeant = $codeDirigeant;
        return $this;
    }

    /**
     * Set the code fonction.
     *
     * @param string|null $codeFonction The code fonction.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setCodeFonction(?string $codeFonction): Dirigeants {
        $this->codeFonction = $codeFonction;
        return $this;
    }

    /**
     * Set the date nomination.
     *
     * @param DateTime|null $dateNomination The date nomination.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setDateNomination(?DateTime $dateNomination): Dirigeants {
        $this->dateNomination = $dateNomination;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setDuree(?int $duree): Dirigeants {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setId(?int $id): Dirigeants {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string|null $observations The observations.
     * @return Dirigeants Returns this Dirigeants.
     */
    public function setObservations(?string $observations): Dirigeants {
        $this->observations = $observations;
        return $this;
    }
}
