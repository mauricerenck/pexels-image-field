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
 * Dadsu prevoyance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuPrevoyanceLignesContrat {

    /**
     * Code deleg gestion.
     *
     * @var string|null
     */
    private $codeDelegGestion;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

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
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Periode affectation.
     *
     * @var string|null
     */
    private $periodeAffectation;

    /**
     * Qualification frais sante.
     *
     * @var string|null
     */
    private $qualificationFraisSante;

    /**
     * Ref contrat.
     *
     * @var string|null
     */
    private $refContrat;

    /**
     * Type cotis.
     *
     * @var string|null
     */
    private $typeCotis;

    /**
     * Type population.
     *
     * @var string|null
     */
    private $typePopulation;

    /**
     * Unite date ancien branche.
     *
     * @var string|null
     */
    private $uniteDateAncienBranche;

    /**
     * Unite date ancien college.
     *
     * @var string|null
     */
    private $uniteDateAncienCollege;

    /**
     * Unite date ancien poste.
     *
     * @var string|null
     */
    private $uniteDateAncienPoste;

    /**
     * Unite prem date entree.
     *
     * @var string|null
     */
    private $unitePremDateEntree;

    /**
     * Valeur cotis.
     *
     * @var float|null
     */
    private $valeurCotis;

    /**
     * Valeur cotis initiale.
     *
     * @var float|null
     */
    private $valeurCotisInitiale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code deleg gestion.
     *
     * @return string|null Returns the code deleg gestion.
     */
    public function getCodeDelegGestion(): ?string {
        return $this->codeDelegGestion;
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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the periode affectation.
     *
     * @return string|null Returns the periode affectation.
     */
    public function getPeriodeAffectation(): ?string {
        return $this->periodeAffectation;
    }

    /**
     * Get the qualification frais sante.
     *
     * @return string|null Returns the qualification frais sante.
     */
    public function getQualificationFraisSante(): ?string {
        return $this->qualificationFraisSante;
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
     * Get the type cotis.
     *
     * @return string|null Returns the type cotis.
     */
    public function getTypeCotis(): ?string {
        return $this->typeCotis;
    }

    /**
     * Get the type population.
     *
     * @return string|null Returns the type population.
     */
    public function getTypePopulation(): ?string {
        return $this->typePopulation;
    }

    /**
     * Get the unite date ancien branche.
     *
     * @return string|null Returns the unite date ancien branche.
     */
    public function getUniteDateAncienBranche(): ?string {
        return $this->uniteDateAncienBranche;
    }

    /**
     * Get the unite date ancien college.
     *
     * @return string|null Returns the unite date ancien college.
     */
    public function getUniteDateAncienCollege(): ?string {
        return $this->uniteDateAncienCollege;
    }

    /**
     * Get the unite date ancien poste.
     *
     * @return string|null Returns the unite date ancien poste.
     */
    public function getUniteDateAncienPoste(): ?string {
        return $this->uniteDateAncienPoste;
    }

    /**
     * Get the unite prem date entree.
     *
     * @return string|null Returns the unite prem date entree.
     */
    public function getUnitePremDateEntree(): ?string {
        return $this->unitePremDateEntree;
    }

    /**
     * Get the valeur cotis.
     *
     * @return float|null Returns the valeur cotis.
     */
    public function getValeurCotis(): ?float {
        return $this->valeurCotis;
    }

    /**
     * Get the valeur cotis initiale.
     *
     * @return float|null Returns the valeur cotis initiale.
     */
    public function getValeurCotisInitiale(): ?float {
        return $this->valeurCotisInitiale;
    }

    /**
     * Set the code deleg gestion.
     *
     * @param string|null $codeDelegGestion The code deleg gestion.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setCodeDelegGestion(?string $codeDelegGestion): DadsuPrevoyanceLignesContrat {
        $this->codeDelegGestion = $codeDelegGestion;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setCodeLibelle(?string $codeLibelle): DadsuPrevoyanceLignesContrat {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code option.
     *
     * @param string|null $codeOption The code option.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setCodeOption(?string $codeOption): DadsuPrevoyanceLignesContrat {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuPrevoyanceLignesContrat {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string|null $codePopulation The code population.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setCodePopulation(?string $codePopulation): DadsuPrevoyanceLignesContrat {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setIntitule(?string $intitule): DadsuPrevoyanceLignesContrat {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the periode affectation.
     *
     * @param string|null $periodeAffectation The periode affectation.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setPeriodeAffectation(?string $periodeAffectation): DadsuPrevoyanceLignesContrat {
        $this->periodeAffectation = $periodeAffectation;
        return $this;
    }

    /**
     * Set the qualification frais sante.
     *
     * @param string|null $qualificationFraisSante The qualification frais sante.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setQualificationFraisSante(?string $qualificationFraisSante): DadsuPrevoyanceLignesContrat {
        $this->qualificationFraisSante = $qualificationFraisSante;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setRefContrat(?string $refContrat): DadsuPrevoyanceLignesContrat {
        $this->refContrat = $refContrat;
        return $this;
    }

    /**
     * Set the type cotis.
     *
     * @param string|null $typeCotis The type cotis.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setTypeCotis(?string $typeCotis): DadsuPrevoyanceLignesContrat {
        $this->typeCotis = $typeCotis;
        return $this;
    }

    /**
     * Set the type population.
     *
     * @param string|null $typePopulation The type population.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setTypePopulation(?string $typePopulation): DadsuPrevoyanceLignesContrat {
        $this->typePopulation = $typePopulation;
        return $this;
    }

    /**
     * Set the unite date ancien branche.
     *
     * @param string|null $uniteDateAncienBranche The unite date ancien branche.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setUniteDateAncienBranche(?string $uniteDateAncienBranche): DadsuPrevoyanceLignesContrat {
        $this->uniteDateAncienBranche = $uniteDateAncienBranche;
        return $this;
    }

    /**
     * Set the unite date ancien college.
     *
     * @param string|null $uniteDateAncienCollege The unite date ancien college.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setUniteDateAncienCollege(?string $uniteDateAncienCollege): DadsuPrevoyanceLignesContrat {
        $this->uniteDateAncienCollege = $uniteDateAncienCollege;
        return $this;
    }

    /**
     * Set the unite date ancien poste.
     *
     * @param string|null $uniteDateAncienPoste The unite date ancien poste.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setUniteDateAncienPoste(?string $uniteDateAncienPoste): DadsuPrevoyanceLignesContrat {
        $this->uniteDateAncienPoste = $uniteDateAncienPoste;
        return $this;
    }

    /**
     * Set the unite prem date entree.
     *
     * @param string|null $unitePremDateEntree The unite prem date entree.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setUnitePremDateEntree(?string $unitePremDateEntree): DadsuPrevoyanceLignesContrat {
        $this->unitePremDateEntree = $unitePremDateEntree;
        return $this;
    }

    /**
     * Set the valeur cotis.
     *
     * @param float|null $valeurCotis The valeur cotis.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setValeurCotis(?float $valeurCotis): DadsuPrevoyanceLignesContrat {
        $this->valeurCotis = $valeurCotis;
        return $this;
    }

    /**
     * Set the valeur cotis initiale.
     *
     * @param float|null $valeurCotisInitiale The valeur cotis initiale.
     * @return DadsuPrevoyanceLignesContrat Returns this Dadsu prevoyance lignes contrat.
     */
    public function setValeurCotisInitiale(?float $valeurCotisInitiale): DadsuPrevoyanceLignesContrat {
        $this->valeurCotisInitiale = $valeurCotisInitiale;
        return $this;
    }
}
