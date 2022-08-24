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
 * Compteur ecritures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CompteurEcritures {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Date comptage.
     *
     * @var DateTime|null
     */
    private $dateComptage;

    /**
     * Millesime.
     *
     * @var string|null
     */
    private $millesime;

    /**
     * Nb ecritures.
     *
     * @var int|null
     */
    private $nbEcritures;

    /**
     * Nb ecritures a deduire.
     *
     * @var float|null
     */
    private $nbEcrituresADeduire;

    /**
     * No chrono preparation.
     *
     * @var int|null
     */
    private $noChronoPreparation;

    /**
     * Periode preparation.
     *
     * @var DateTime|null
     */
    private $periodePreparation;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Uniq id pdf.
     *
     * @var string|null
     */
    private $uniqIdPdf;

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
     * Get the date comptage.
     *
     * @return DateTime|null Returns the date comptage.
     */
    public function getDateComptage(): ?DateTime {
        return $this->dateComptage;
    }

    /**
     * Get the millesime.
     *
     * @return string|null Returns the millesime.
     */
    public function getMillesime(): ?string {
        return $this->millesime;
    }

    /**
     * Get the nb ecritures.
     *
     * @return int|null Returns the nb ecritures.
     */
    public function getNbEcritures(): ?int {
        return $this->nbEcritures;
    }

    /**
     * Get the nb ecritures a deduire.
     *
     * @return float|null Returns the nb ecritures a deduire.
     */
    public function getNbEcrituresADeduire(): ?float {
        return $this->nbEcrituresADeduire;
    }

    /**
     * Get the no chrono preparation.
     *
     * @return int|null Returns the no chrono preparation.
     */
    public function getNoChronoPreparation(): ?int {
        return $this->noChronoPreparation;
    }

    /**
     * Get the periode preparation.
     *
     * @return DateTime|null Returns the periode preparation.
     */
    public function getPeriodePreparation(): ?DateTime {
        return $this->periodePreparation;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Get the uniq id pdf.
     *
     * @return string|null Returns the uniq id pdf.
     */
    public function getUniqIdPdf(): ?string {
        return $this->uniqIdPdf;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setCodeClient(?string $codeClient): CompteurEcritures {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date comptage.
     *
     * @param DateTime|null $dateComptage The date comptage.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setDateComptage(?DateTime $dateComptage): CompteurEcritures {
        $this->dateComptage = $dateComptage;
        return $this;
    }

    /**
     * Set the millesime.
     *
     * @param string|null $millesime The millesime.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setMillesime(?string $millesime): CompteurEcritures {
        $this->millesime = $millesime;
        return $this;
    }

    /**
     * Set the nb ecritures.
     *
     * @param int|null $nbEcritures The nb ecritures.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setNbEcritures(?int $nbEcritures): CompteurEcritures {
        $this->nbEcritures = $nbEcritures;
        return $this;
    }

    /**
     * Set the nb ecritures a deduire.
     *
     * @param float|null $nbEcrituresADeduire The nb ecritures a deduire.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setNbEcrituresADeduire(?float $nbEcrituresADeduire): CompteurEcritures {
        $this->nbEcrituresADeduire = $nbEcrituresADeduire;
        return $this;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int|null $noChronoPreparation The no chrono preparation.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setNoChronoPreparation(?int $noChronoPreparation): CompteurEcritures {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime|null $periodePreparation The periode preparation.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setPeriodePreparation(?DateTime $periodePreparation): CompteurEcritures {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setType(?string $type): CompteurEcritures {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq id pdf.
     *
     * @param string|null $uniqIdPdf The uniq id pdf.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setUniqIdPdf(?string $uniqIdPdf): CompteurEcritures {
        $this->uniqIdPdf = $uniqIdPdf;
        return $this;
    }
}
