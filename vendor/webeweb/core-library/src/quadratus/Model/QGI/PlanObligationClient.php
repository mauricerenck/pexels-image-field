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
 * Plan obligation client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class PlanObligationClient {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collab specif.
     *
     * @var string|null
     */
    private $codeCollabSpecif;

    /**
     * Code obligation.
     *
     * @var string|null
     */
    private $codeObligation;

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
     * Frequence.
     *
     * @var string|null
     */
    private $frequence;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Qui le fait.
     *
     * @var int|null
     */
    private $quiLeFait;

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
     * Get the code collab specif.
     *
     * @return string|null Returns the code collab specif.
     */
    public function getCodeCollabSpecif(): ?string {
        return $this->codeCollabSpecif;
    }

    /**
     * Get the code obligation.
     *
     * @return string|null Returns the code obligation.
     */
    public function getCodeObligation(): ?string {
        return $this->codeObligation;
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
     * Get the frequence.
     *
     * @return string|null Returns the frequence.
     */
    public function getFrequence(): ?string {
        return $this->frequence;
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
     * Get the qui le fait.
     *
     * @return int|null Returns the qui le fait.
     */
    public function getQuiLeFait(): ?int {
        return $this->quiLeFait;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setCodeClient(?string $codeClient): PlanObligationClient {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab specif.
     *
     * @param string|null $codeCollabSpecif The code collab specif.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setCodeCollabSpecif(?string $codeCollabSpecif): PlanObligationClient {
        $this->codeCollabSpecif = $codeCollabSpecif;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string|null $codeObligation The code obligation.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setCodeObligation(?string $codeObligation): PlanObligationClient {
        $this->codeObligation = $codeObligation;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setDateDebut(?DateTime $dateDebut): PlanObligationClient {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setDateFin(?DateTime $dateFin): PlanObligationClient {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string|null $frequence The frequence.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setFrequence(?string $frequence): PlanObligationClient {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setNumLigne(?int $numLigne): PlanObligationClient {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the qui le fait.
     *
     * @param int|null $quiLeFait The qui le fait.
     * @return PlanObligationClient Returns this Plan obligation client.
     */
    public function setQuiLeFait(?int $quiLeFait): PlanObligationClient {
        $this->quiLeFait = $quiLeFait;
        return $this;
    }
}
