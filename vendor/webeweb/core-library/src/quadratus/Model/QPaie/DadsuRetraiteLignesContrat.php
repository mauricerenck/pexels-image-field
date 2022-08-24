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
 * Dadsu retraite lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuRetraiteLignesContrat {

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
     * Designation commerciale.
     *
     * @var string|null
     */
    private $designationCommerciale;

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
     * Get the designation commerciale.
     *
     * @return string|null Returns the designation commerciale.
     */
    public function getDesignationCommerciale(): ?string {
        return $this->designationCommerciale;
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
     * @return DadsuRetraiteLignesContrat Returns this Dadsu retraite lignes contrat.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DadsuRetraiteLignesContrat {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuRetraiteLignesContrat Returns this Dadsu retraite lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuRetraiteLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the designation commerciale.
     *
     * @param string|null $designationCommerciale The designation commerciale.
     * @return DadsuRetraiteLignesContrat Returns this Dadsu retraite lignes contrat.
     */
    public function setDesignationCommerciale(?string $designationCommerciale): DadsuRetraiteLignesContrat {
        $this->designationCommerciale = $designationCommerciale;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return DadsuRetraiteLignesContrat Returns this Dadsu retraite lignes contrat.
     */
    public function setRefContrat(?string $refContrat): DadsuRetraiteLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }
}
