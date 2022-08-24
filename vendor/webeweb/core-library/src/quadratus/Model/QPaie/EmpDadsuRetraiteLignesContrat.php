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
 * Emp dadsu retraite lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuRetraiteLignesContrat {

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
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpDadsuRetraiteLignesContrat Returns this Emp dadsu retraite lignes contrat.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpDadsuRetraiteLignesContrat {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpDadsuRetraiteLignesContrat Returns this Emp dadsu retraite lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpDadsuRetraiteLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuRetraiteLignesContrat Returns this Emp dadsu retraite lignes contrat.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuRetraiteLignesContrat {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return EmpDadsuRetraiteLignesContrat Returns this Emp dadsu retraite lignes contrat.
     */
    public function setRefContrat(?string $refContrat): EmpDadsuRetraiteLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }
}
