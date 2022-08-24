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
 * Emp dadsu assurance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuAssuranceLignesContrat {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

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
     * Unite gestion.
     *
     * @var string|null
     */
    private $uniteGestion;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
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
     * Get the unite gestion.
     *
     * @return string|null Returns the unite gestion.
     */
    public function getUniteGestion(): ?string {
        return $this->uniteGestion;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpDadsuAssuranceLignesContrat {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpDadsuAssuranceLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string|null $nbEnfants The nb enfants.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setNbEnfants(?string $nbEnfants): EmpDadsuAssuranceLignesContrat {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuAssuranceLignesContrat {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setRefContrat(?string $refContrat): EmpDadsuAssuranceLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }

    /**
     * Set the unite gestion.
     *
     * @param string|null $uniteGestion The unite gestion.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setUniteGestion(?string $uniteGestion): EmpDadsuAssuranceLignesContrat {
        $this->uniteGestion = $uniteGestion;
        return $this;
    }
}
