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
 * Emp dadsu prevoyance ayant droit lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroitLignesContrat {

    /**
     * Code option.
     *
     * @var string|null
     */
    private $codeOption;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code population.
     *
     * @var string|null
     */
    private $codePopulation;

    /**
     * Debut periode.
     *
     * @var DateTime|null
     */
    private $debutPeriode;

    /**
     * Fin periode.
     *
     * @var DateTime|null
     */
    private $finPeriode;

    /**
     * Numero ayant droit.
     *
     * @var int|null
     */
    private $numeroAyantDroit;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Ref contrat.
     *
     * @var string|null
     */
    private $refContrat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code option.
     *
     * @return string|null Returns the code option.
     */
    public function getCodeOption(): ?string {
        return $this->codeOption;
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the code population.
     *
     * @return string|null Returns the code population.
     */
    public function getCodePopulation(): ?string {
        return $this->codePopulation;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime|null Returns the debut periode.
     */
    public function getDebutPeriode(): ?DateTime {
        return $this->debutPeriode;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime|null Returns the fin periode.
     */
    public function getFinPeriode(): ?DateTime {
        return $this->finPeriode;
    }

    /**
     * Get the numero ayant droit.
     *
     * @return int|null Returns the numero ayant droit.
     */
    public function getNumeroAyantDroit(): ?int {
        return $this->numeroAyantDroit;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the ref contrat.
     *
     * @return string|null Returns the ref contrat.
     */
    public function getRefContrat(): ?string {
        return $this->refContrat;
    }

    /**
     * Set the code option.
     *
     * @param string|null $codeOption The code option.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setCodeOption(?string $codeOption): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string|null $codePopulation The code population.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setCodePopulation(?string $codePopulation): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime|null $debutPeriode The debut periode.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setDebutPeriode(?DateTime $debutPeriode): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime|null $finPeriode The fin periode.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setFinPeriode(?DateTime $finPeriode): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the numero ayant droit.
     *
     * @param int|null $numeroAyantDroit The numero ayant droit.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setNumeroAyantDroit(?int $numeroAyantDroit): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->numeroAyantDroit = $numeroAyantDroit;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return EmpDadsuPrevoyanceAyantDroitLignesContrat Returns this Emp dadsu prevoyance ayant droit lignes contrat.
     */
    public function setRefContrat(?string $refContrat): EmpDadsuPrevoyanceAyantDroitLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }
}
