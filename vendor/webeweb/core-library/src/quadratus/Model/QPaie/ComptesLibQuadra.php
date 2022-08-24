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
 * Comptes lib quadra.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ComptesLibQuadra {

    /**
     * Code ducs.
     *
     * @var string|null
     */
    private $codeDucs;

    /**
     * Code edition histo.
     *
     * @var string|null
     */
    private $codeEditionHisto;

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
     * Code type b spec prev.
     *
     * @var string|null
     */
    private $codeTypeBSpecPrev;

    /**
     * Compte charge.
     *
     * @var string|null
     */
    private $compteCharge;

    /**
     * Condition spec.
     *
     * @var string|null
     */
    private $conditionSpec;

    /**
     * Edition forcee ds.
     *
     * @var string|null
     */
    private $editionForceeDs;

    /**
     * Exclure loi tepa.
     *
     * @var string|null
     */
    private $exclureLoiTepa;

    /**
     * Frais sante.
     *
     * @var string|null
     */
    private $fraisSante;

    /**
     * Prevoyance comp.
     *
     * @var string|null
     */
    private $prevoyanceComp;

    /**
     * Qualifiant cotis.
     *
     * @var string|null
     */
    private $qualifiantCotis;

    /**
     * Retraite obligatoire.
     *
     * @var string|null
     */
    private $retraiteObligatoire;

    /**
     * Retraite supp.
     *
     * @var string|null
     */
    private $retraiteSupp;

    /**
     * Sans reintegration sociale.
     *
     * @var string|null
     */
    private $sansReintegrationSociale;

    /**
     * Soumis crds100.
     *
     * @var string|null
     */
    private $soumisCrds100;

    /**
     * Soumis csg100.
     *
     * @var string|null
     */
    private $soumisCsg100;

    /**
     * Taux forfait social20.
     *
     * @var string|null
     */
    private $tauxForfaitSocial20;

    /**
     * Taux forfait social8.
     *
     * @var string|null
     */
    private $tauxForfaitSocial8;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code ducs.
     *
     * @return string|null Returns the code ducs.
     */
    public function getCodeDucs(): ?string {
        return $this->codeDucs;
    }

    /**
     * Get the code edition histo.
     *
     * @return string|null Returns the code edition histo.
     */
    public function getCodeEditionHisto(): ?string {
        return $this->codeEditionHisto;
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
     * Get the code type b spec prev.
     *
     * @return string|null Returns the code type b spec prev.
     */
    public function getCodeTypeBSpecPrev(): ?string {
        return $this->codeTypeBSpecPrev;
    }

    /**
     * Get the compte charge.
     *
     * @return string|null Returns the compte charge.
     */
    public function getCompteCharge(): ?string {
        return $this->compteCharge;
    }

    /**
     * Get the condition spec.
     *
     * @return string|null Returns the condition spec.
     */
    public function getConditionSpec(): ?string {
        return $this->conditionSpec;
    }

    /**
     * Get the edition forcee ds.
     *
     * @return string|null Returns the edition forcee ds.
     */
    public function getEditionForceeDs(): ?string {
        return $this->editionForceeDs;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return string|null Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa(): ?string {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the frais sante.
     *
     * @return string|null Returns the frais sante.
     */
    public function getFraisSante(): ?string {
        return $this->fraisSante;
    }

    /**
     * Get the prevoyance comp.
     *
     * @return string|null Returns the prevoyance comp.
     */
    public function getPrevoyanceComp(): ?string {
        return $this->prevoyanceComp;
    }

    /**
     * Get the qualifiant cotis.
     *
     * @return string|null Returns the qualifiant cotis.
     */
    public function getQualifiantCotis(): ?string {
        return $this->qualifiantCotis;
    }

    /**
     * Get the retraite obligatoire.
     *
     * @return string|null Returns the retraite obligatoire.
     */
    public function getRetraiteObligatoire(): ?string {
        return $this->retraiteObligatoire;
    }

    /**
     * Get the retraite supp.
     *
     * @return string|null Returns the retraite supp.
     */
    public function getRetraiteSupp(): ?string {
        return $this->retraiteSupp;
    }

    /**
     * Get the sans reintegration sociale.
     *
     * @return string|null Returns the sans reintegration sociale.
     */
    public function getSansReintegrationSociale(): ?string {
        return $this->sansReintegrationSociale;
    }

    /**
     * Get the soumis crds100.
     *
     * @return string|null Returns the soumis crds100.
     */
    public function getSoumisCrds100(): ?string {
        return $this->soumisCrds100;
    }

    /**
     * Get the soumis csg100.
     *
     * @return string|null Returns the soumis csg100.
     */
    public function getSoumisCsg100(): ?string {
        return $this->soumisCsg100;
    }

    /**
     * Get the taux forfait social20.
     *
     * @return string|null Returns the taux forfait social20.
     */
    public function getTauxForfaitSocial20(): ?string {
        return $this->tauxForfaitSocial20;
    }

    /**
     * Get the taux forfait social8.
     *
     * @return string|null Returns the taux forfait social8.
     */
    public function getTauxForfaitSocial8(): ?string {
        return $this->tauxForfaitSocial8;
    }

    /**
     * Set the code ducs.
     *
     * @param string|null $codeDucs The code ducs.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setCodeDucs(?string $codeDucs): ComptesLibQuadra {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string|null $codeEditionHisto The code edition histo.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setCodeEditionHisto(?string $codeEditionHisto): ComptesLibQuadra {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setCodeLibelle(?string $codeLibelle): ComptesLibQuadra {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setCodeOrganisme(?string $codeOrganisme): ComptesLibQuadra {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code type b spec prev.
     *
     * @param string|null $codeTypeBSpecPrev The code type b spec prev.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setCodeTypeBSpecPrev(?string $codeTypeBSpecPrev): ComptesLibQuadra {
        $this->codeTypeBSpecPrev = $codeTypeBSpecPrev;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string|null $compteCharge The compte charge.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setCompteCharge(?string $compteCharge): ComptesLibQuadra {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string|null $conditionSpec The condition spec.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setConditionSpec(?string $conditionSpec): ComptesLibQuadra {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the edition forcee ds.
     *
     * @param string|null $editionForceeDs The edition forcee ds.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setEditionForceeDs(?string $editionForceeDs): ComptesLibQuadra {
        $this->editionForceeDs = $editionForceeDs;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param string|null $exclureLoiTepa The exclure loi tepa.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setExclureLoiTepa(?string $exclureLoiTepa): ComptesLibQuadra {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the frais sante.
     *
     * @param string|null $fraisSante The frais sante.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setFraisSante(?string $fraisSante): ComptesLibQuadra {
        $this->fraisSante = $fraisSante;
        return $this;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param string|null $prevoyanceComp The prevoyance comp.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setPrevoyanceComp(?string $prevoyanceComp): ComptesLibQuadra {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string|null $qualifiantCotis The qualifiant cotis.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setQualifiantCotis(?string $qualifiantCotis): ComptesLibQuadra {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param string|null $retraiteObligatoire The retraite obligatoire.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setRetraiteObligatoire(?string $retraiteObligatoire): ComptesLibQuadra {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }

    /**
     * Set the retraite supp.
     *
     * @param string|null $retraiteSupp The retraite supp.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setRetraiteSupp(?string $retraiteSupp): ComptesLibQuadra {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param string|null $sansReintegrationSociale The sans reintegration sociale.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setSansReintegrationSociale(?string $sansReintegrationSociale): ComptesLibQuadra {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }

    /**
     * Set the soumis crds100.
     *
     * @param string|null $soumisCrds100 The soumis crds100.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setSoumisCrds100(?string $soumisCrds100): ComptesLibQuadra {
        $this->soumisCrds100 = $soumisCrds100;
        return $this;
    }

    /**
     * Set the soumis csg100.
     *
     * @param string|null $soumisCsg100 The soumis csg100.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setSoumisCsg100(?string $soumisCsg100): ComptesLibQuadra {
        $this->soumisCsg100 = $soumisCsg100;
        return $this;
    }

    /**
     * Set the taux forfait social20.
     *
     * @param string|null $tauxForfaitSocial20 The taux forfait social20.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setTauxForfaitSocial20(?string $tauxForfaitSocial20): ComptesLibQuadra {
        $this->tauxForfaitSocial20 = $tauxForfaitSocial20;
        return $this;
    }

    /**
     * Set the taux forfait social8.
     *
     * @param string|null $tauxForfaitSocial8 The taux forfait social8.
     * @return ComptesLibQuadra Returns this Comptes lib quadra.
     */
    public function setTauxForfaitSocial8(?string $tauxForfaitSocial8): ComptesLibQuadra {
        $this->tauxForfaitSocial8 = $tauxForfaitSocial8;
        return $this;
    }
}
