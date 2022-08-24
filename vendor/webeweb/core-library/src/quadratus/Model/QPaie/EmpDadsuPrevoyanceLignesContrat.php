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

/**
 * Emp dadsu prevoyance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceLignesContrat {

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
     * Nb enfants.
     *
     * @var string|null
     */
    private $nbEnfants;

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
     * Get the nb enfants.
     *
     * @return string|null Returns the nb enfants.
     */
    public function getNbEnfants(): ?string {
        return $this->nbEnfants;
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
     * @return EmpDadsuPrevoyanceLignesContrat Returns this Emp dadsu prevoyance lignes contrat.
     */
    public function setCodeOption(?string $codeOption): EmpDadsuPrevoyanceLignesContrat {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpDadsuPrevoyanceLignesContrat Returns this Emp dadsu prevoyance lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpDadsuPrevoyanceLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string|null $codePopulation The code population.
     * @return EmpDadsuPrevoyanceLignesContrat Returns this Emp dadsu prevoyance lignes contrat.
     */
    public function setCodePopulation(?string $codePopulation): EmpDadsuPrevoyanceLignesContrat {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string|null $nbEnfants The nb enfants.
     * @return EmpDadsuPrevoyanceLignesContrat Returns this Emp dadsu prevoyance lignes contrat.
     */
    public function setNbEnfants(?string $nbEnfants): EmpDadsuPrevoyanceLignesContrat {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuPrevoyanceLignesContrat Returns this Emp dadsu prevoyance lignes contrat.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuPrevoyanceLignesContrat {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return EmpDadsuPrevoyanceLignesContrat Returns this Emp dadsu prevoyance lignes contrat.
     */
    public function setRefContrat(?string $refContrat): EmpDadsuPrevoyanceLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }
}
