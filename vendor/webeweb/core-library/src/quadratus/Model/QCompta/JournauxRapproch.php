<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Journaux rapproch.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class JournauxRapproch {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Methode.
     *
     * @var string|null
     */
    private $methode;

    /**
     * Ne pas saisir solde fin.
     *
     * @var bool|null
     */
    private $nePasSaisirSoldeFin;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Solde fin.
     *
     * @var float|null
     */
    private $soldeFin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the methode.
     *
     * @return string|null Returns the methode.
     */
    public function getMethode(): ?string {
        return $this->methode;
    }

    /**
     * Get the ne pas saisir solde fin.
     *
     * @return bool|null Returns the ne pas saisir solde fin.
     */
    public function getNePasSaisirSoldeFin(): ?bool {
        return $this->nePasSaisirSoldeFin;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the solde fin.
     *
     * @return float|null Returns the solde fin.
     */
    public function getSoldeFin(): ?float {
        return $this->soldeFin;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return JournauxRapproch Returns this Journaux rapproch.
     */
    public function setCodeJournal(?string $codeJournal): JournauxRapproch {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the methode.
     *
     * @param string|null $methode The methode.
     * @return JournauxRapproch Returns this Journaux rapproch.
     */
    public function setMethode(?string $methode): JournauxRapproch {
        $this->methode = $methode;
        return $this;
    }

    /**
     * Set the ne pas saisir solde fin.
     *
     * @param bool|null $nePasSaisirSoldeFin The ne pas saisir solde fin.
     * @return JournauxRapproch Returns this Journaux rapproch.
     */
    public function setNePasSaisirSoldeFin(?bool $nePasSaisirSoldeFin): JournauxRapproch {
        $this->nePasSaisirSoldeFin = $nePasSaisirSoldeFin;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return JournauxRapproch Returns this Journaux rapproch.
     */
    public function setPeriode(?DateTime $periode): JournauxRapproch {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the solde fin.
     *
     * @param float|null $soldeFin The solde fin.
     * @return JournauxRapproch Returns this Journaux rapproch.
     */
    public function setSoldeFin(?float $soldeFin): JournauxRapproch {
        $this->soldeFin = $soldeFin;
        return $this;
    }
}
