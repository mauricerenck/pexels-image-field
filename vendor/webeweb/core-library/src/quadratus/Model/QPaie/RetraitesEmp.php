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
 * Retraites emp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RetraitesEmp {

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Id institution.
     *
     * @var string|null
     */
    private $idInstitution;

    /**
     * Indice contrat.
     *
     * @var int|null
     */
    private $indiceContrat;

    /**
     * Non gere.
     *
     * @var bool|null
     */
    private $nonGere;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Type orga.
     *
     * @var string|null
     */
    private $typeOrga;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the id institution.
     *
     * @return string|null Returns the id institution.
     */
    public function getIdInstitution(): ?string {
        return $this->idInstitution;
    }

    /**
     * Get the indice contrat.
     *
     * @return int|null Returns the indice contrat.
     */
    public function getIndiceContrat(): ?int {
        return $this->indiceContrat;
    }

    /**
     * Get the non gere.
     *
     * @return bool|null Returns the non gere.
     */
    public function getNonGere(): ?bool {
        return $this->nonGere;
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
     * Get the type orga.
     *
     * @return string|null Returns the type orga.
     */
    public function getTypeOrga(): ?string {
        return $this->typeOrga;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setCodeOrganisme(?string $codeOrganisme): RetraitesEmp {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string|null $idInstitution The id institution.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setIdInstitution(?string $idInstitution): RetraitesEmp {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the indice contrat.
     *
     * @param int|null $indiceContrat The indice contrat.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setIndiceContrat(?int $indiceContrat): RetraitesEmp {
        $this->indiceContrat = $indiceContrat;
        return $this;
    }

    /**
     * Set the non gere.
     *
     * @param bool|null $nonGere The non gere.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setNonGere(?bool $nonGere): RetraitesEmp {
        $this->nonGere = $nonGere;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RetraitesEmp {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the type orga.
     *
     * @param string|null $typeOrga The type orga.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setTypeOrga(?string $typeOrga): RetraitesEmp {
        $this->typeOrga = $typeOrga;
        return $this;
    }
}
