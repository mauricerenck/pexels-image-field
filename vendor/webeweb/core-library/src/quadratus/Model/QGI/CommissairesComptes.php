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
 * Commissaires comptes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CommissairesComptes {

    /**
     * Code cac.
     *
     * @var string|null
     */
    private $codeCac;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Date nomination.
     *
     * @var DateTime|null
     */
    private $dateNomination;

    /**
     * Duree mandat.
     *
     * @var int|null
     */
    private $dureeMandat;

    /**
     * Observations.
     *
     * @var string|null
     */
    private $observations;

    /**
     * Position.
     *
     * @var int|null
     */
    private $position;

    /**
     * Titulaire.
     *
     * @var bool|null
     */
    private $titulaire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code cac.
     *
     * @return string|null Returns the code cac.
     */
    public function getCodeCac(): ?string {
        return $this->codeCac;
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
     * Get the date nomination.
     *
     * @return DateTime|null Returns the date nomination.
     */
    public function getDateNomination(): ?DateTime {
        return $this->dateNomination;
    }

    /**
     * Get the duree mandat.
     *
     * @return int|null Returns the duree mandat.
     */
    public function getDureeMandat(): ?int {
        return $this->dureeMandat;
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
     * Get the position.
     *
     * @return int|null Returns the position.
     */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Get the titulaire.
     *
     * @return bool|null Returns the titulaire.
     */
    public function getTitulaire(): ?bool {
        return $this->titulaire;
    }

    /**
     * Set the code cac.
     *
     * @param string|null $codeCac The code cac.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setCodeCac(?string $codeCac): CommissairesComptes {
        $this->codeCac = $codeCac;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setCodeClient(?string $codeClient): CommissairesComptes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date nomination.
     *
     * @param DateTime|null $dateNomination The date nomination.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setDateNomination(?DateTime $dateNomination): CommissairesComptes {
        $this->dateNomination = $dateNomination;
        return $this;
    }

    /**
     * Set the duree mandat.
     *
     * @param int|null $dureeMandat The duree mandat.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setDureeMandat(?int $dureeMandat): CommissairesComptes {
        $this->dureeMandat = $dureeMandat;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string|null $observations The observations.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setObservations(?string $observations): CommissairesComptes {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setPosition(?int $position): CommissairesComptes {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the titulaire.
     *
     * @param bool|null $titulaire The titulaire.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setTitulaire(?bool $titulaire): CommissairesComptes {
        $this->titulaire = $titulaire;
        return $this;
    }
}
