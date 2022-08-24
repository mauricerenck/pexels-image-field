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
 * Dern prepa fact.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DernPrepaFact {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Dt prepa.
     *
     * @var DateTime|null
     */
    private $dtPrepa;

    /**
     * No chrono preparation.
     *
     * @var int|null
     */
    private $noChronoPreparation;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the dt prepa.
     *
     * @return DateTime|null Returns the dt prepa.
     */
    public function getDtPrepa(): ?DateTime {
        return $this->dtPrepa;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setCodeAffaire(?string $codeAffaire): DernPrepaFact {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setCodeChantier(?string $codeChantier): DernPrepaFact {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setCodeClient(?string $codeClient): DernPrepaFact {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setCodeRegroupement(?string $codeRegroupement): DernPrepaFact {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the dt prepa.
     *
     * @param DateTime|null $dtPrepa The dt prepa.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setDtPrepa(?DateTime $dtPrepa): DernPrepaFact {
        $this->dtPrepa = $dtPrepa;
        return $this;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int|null $noChronoPreparation The no chrono preparation.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setNoChronoPreparation(?int $noChronoPreparation): DernPrepaFact {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DernPrepaFact Returns this Dern prepa fact.
     */
    public function setPeriode(?DateTime $periode): DernPrepaFact {
        $this->periode = $periode;
        return $this;
    }
}
