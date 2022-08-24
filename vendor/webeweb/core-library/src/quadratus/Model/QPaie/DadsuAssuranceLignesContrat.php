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
 * Dadsu assurance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuAssuranceLignesContrat {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code porteur risque.
     *
     * @var string|null
     */
    private $codePorteurRisque;

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
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
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
     * Get the code porteur risque.
     *
     * @return string|null Returns the code porteur risque.
     */
    public function getCodePorteurRisque(): ?string {
        return $this->codePorteurRisque;
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
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DadsuAssuranceLignesContrat {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setCodeLibelle(?string $codeLibelle): DadsuAssuranceLignesContrat {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuAssuranceLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code porteur risque.
     *
     * @param string|null $codePorteurRisque The code porteur risque.
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setCodePorteurRisque(?string $codePorteurRisque): DadsuAssuranceLignesContrat {
        $this->codePorteurRisque = $codePorteurRisque;
        return $this;
    }

    /**
     * Set the designation commerciale.
     *
     * @param string|null $designationCommerciale The designation commerciale.
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setDesignationCommerciale(?string $designationCommerciale): DadsuAssuranceLignesContrat {
        $this->designationCommerciale = $designationCommerciale;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setRefContrat(?string $refContrat): DadsuAssuranceLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }

    /**
     * Set the unite gestion.
     *
     * @param string|null $uniteGestion The unite gestion.
     * @return DadsuAssuranceLignesContrat Returns this Dadsu assurance lignes contrat.
     */
    public function setUniteGestion(?string $uniteGestion): DadsuAssuranceLignesContrat {
        $this->uniteGestion = $uniteGestion;
        return $this;
    }
}
