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
 * Historique.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Historique {

    /**
     * Annees.
     *
     * @var int|null
     */
    private $annees;

    /**
     * Annees plus.
     *
     * @var int|null
     */
    private $anneesPlus;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Cs valide.
     *
     * @var DateTime|null
     */
    private $csValide;

    /**
     * Ct valide.
     *
     * @var DateTime|null
     */
    private $ctValide;

    /**
     * Rub.
     *
     * @var string|null
     */
    private $rub;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Visite medicale.
     *
     * @var DateTime|null
     */
    private $visiteMedicale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annees.
     *
     * @return int|null Returns the annees.
     */
    public function getAnnees(): ?int {
        return $this->annees;
    }

    /**
     * Get the annees plus.
     *
     * @return int|null Returns the annees plus.
     */
    public function getAnneesPlus(): ?int {
        return $this->anneesPlus;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the cs valide.
     *
     * @return DateTime|null Returns the cs valide.
     */
    public function getCsValide(): ?DateTime {
        return $this->csValide;
    }

    /**
     * Get the ct valide.
     *
     * @return DateTime|null Returns the ct valide.
     */
    public function getCtValide(): ?DateTime {
        return $this->ctValide;
    }

    /**
     * Get the rub.
     *
     * @return string|null Returns the rub.
     */
    public function getRub(): ?string {
        return $this->rub;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the visite medicale.
     *
     * @return DateTime|null Returns the visite medicale.
     */
    public function getVisiteMedicale(): ?DateTime {
        return $this->visiteMedicale;
    }

    /**
     * Set the annees.
     *
     * @param int|null $annees The annees.
     * @return Historique Returns this Historique.
     */
    public function setAnnees(?int $annees): Historique {
        $this->annees = $annees;
        return $this;
    }

    /**
     * Set the annees plus.
     *
     * @param int|null $anneesPlus The annees plus.
     * @return Historique Returns this Historique.
     */
    public function setAnneesPlus(?int $anneesPlus): Historique {
        $this->anneesPlus = $anneesPlus;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Historique Returns this Historique.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Historique {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the cs valide.
     *
     * @param DateTime|null $csValide The cs valide.
     * @return Historique Returns this Historique.
     */
    public function setCsValide(?DateTime $csValide): Historique {
        $this->csValide = $csValide;
        return $this;
    }

    /**
     * Set the ct valide.
     *
     * @param DateTime|null $ctValide The ct valide.
     * @return Historique Returns this Historique.
     */
    public function setCtValide(?DateTime $ctValide): Historique {
        $this->ctValide = $ctValide;
        return $this;
    }

    /**
     * Set the rub.
     *
     * @param string|null $rub The rub.
     * @return Historique Returns this Historique.
     */
    public function setRub(?string $rub): Historique {
        $this->rub = $rub;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return Historique Returns this Historique.
     */
    public function setService(?string $service): Historique {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the visite medicale.
     *
     * @param DateTime|null $visiteMedicale The visite medicale.
     * @return Historique Returns this Historique.
     */
    public function setVisiteMedicale(?DateTime $visiteMedicale): Historique {
        $this->visiteMedicale = $visiteMedicale;
        return $this;
    }
}
