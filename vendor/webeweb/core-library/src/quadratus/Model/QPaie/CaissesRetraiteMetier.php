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
 * Caisses retraite metier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class CaissesRetraiteMetier {

    /**
     * Categ salarie.
     *
     * @var int|null
     */
    private $categSalarie;

    /**
     * Categ salarie equiv.
     *
     * @var string|null
     */
    private $categSalarieEquiv;

    /**
     * Code activite.
     *
     * @var string|null
     */
    private $codeActivite;

    /**
     * Code metier.
     *
     * @var string|null
     */
    private $codeMetier;

    /**
     * Code organisme agirc.
     *
     * @var string|null
     */
    private $codeOrganismeAgirc;

    /**
     * Code organisme arrco.
     *
     * @var string|null
     */
    private $codeOrganismeArrco;

    /**
     * Code organisme ccca.
     *
     * @var string|null
     */
    private $codeOrganismeCcca;

    /**
     * Code organisme frais sante.
     *
     * @var string|null
     */
    private $codeOrganismeFraisSante;

    /**
     * Code organisme prev.
     *
     * @var string|null
     */
    private $codeOrganismePrev;

    /**
     * Code organisme prev comp.
     *
     * @var string|null
     */
    private $codeOrganismePrevComp;

    /**
     * Id institution agirc.
     *
     * @var string|null
     */
    private $idInstitutionAgirc;

    /**
     * Id institution arrco.
     *
     * @var string|null
     */
    private $idInstitutionArrco;

    /**
     * Id institution ccca.
     *
     * @var string|null
     */
    private $idInstitutionCcca;

    /**
     * Id institution frais sante.
     *
     * @var string|null
     */
    private $idInstitutionFraisSante;

    /**
     * Id institution prev.
     *
     * @var string|null
     */
    private $idInstitutionPrev;

    /**
     * Id institution prev comp.
     *
     * @var string|null
     */
    private $idInstitutionPrevComp;

    /**
     * Indice categ.
     *
     * @var int|null
     */
    private $indiceCateg;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Pas active.
     *
     * @var bool|null
     */
    private $pasActive;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the categ salarie.
     *
     * @return int|null Returns the categ salarie.
     */
    public function getCategSalarie(): ?int {
        return $this->categSalarie;
    }

    /**
     * Get the categ salarie equiv.
     *
     * @return string|null Returns the categ salarie equiv.
     */
    public function getCategSalarieEquiv(): ?string {
        return $this->categSalarieEquiv;
    }

    /**
     * Get the code activite.
     *
     * @return string|null Returns the code activite.
     */
    public function getCodeActivite(): ?string {
        return $this->codeActivite;
    }

    /**
     * Get the code metier.
     *
     * @return string|null Returns the code metier.
     */
    public function getCodeMetier(): ?string {
        return $this->codeMetier;
    }

    /**
     * Get the code organisme agirc.
     *
     * @return string|null Returns the code organisme agirc.
     */
    public function getCodeOrganismeAgirc(): ?string {
        return $this->codeOrganismeAgirc;
    }

    /**
     * Get the code organisme arrco.
     *
     * @return string|null Returns the code organisme arrco.
     */
    public function getCodeOrganismeArrco(): ?string {
        return $this->codeOrganismeArrco;
    }

    /**
     * Get the code organisme ccca.
     *
     * @return string|null Returns the code organisme ccca.
     */
    public function getCodeOrganismeCcca(): ?string {
        return $this->codeOrganismeCcca;
    }

    /**
     * Get the code organisme frais sante.
     *
     * @return string|null Returns the code organisme frais sante.
     */
    public function getCodeOrganismeFraisSante(): ?string {
        return $this->codeOrganismeFraisSante;
    }

    /**
     * Get the code organisme prev.
     *
     * @return string|null Returns the code organisme prev.
     */
    public function getCodeOrganismePrev(): ?string {
        return $this->codeOrganismePrev;
    }

    /**
     * Get the code organisme prev comp.
     *
     * @return string|null Returns the code organisme prev comp.
     */
    public function getCodeOrganismePrevComp(): ?string {
        return $this->codeOrganismePrevComp;
    }

    /**
     * Get the id institution agirc.
     *
     * @return string|null Returns the id institution agirc.
     */
    public function getIdInstitutionAgirc(): ?string {
        return $this->idInstitutionAgirc;
    }

    /**
     * Get the id institution arrco.
     *
     * @return string|null Returns the id institution arrco.
     */
    public function getIdInstitutionArrco(): ?string {
        return $this->idInstitutionArrco;
    }

    /**
     * Get the id institution ccca.
     *
     * @return string|null Returns the id institution ccca.
     */
    public function getIdInstitutionCcca(): ?string {
        return $this->idInstitutionCcca;
    }

    /**
     * Get the id institution frais sante.
     *
     * @return string|null Returns the id institution frais sante.
     */
    public function getIdInstitutionFraisSante(): ?string {
        return $this->idInstitutionFraisSante;
    }

    /**
     * Get the id institution prev.
     *
     * @return string|null Returns the id institution prev.
     */
    public function getIdInstitutionPrev(): ?string {
        return $this->idInstitutionPrev;
    }

    /**
     * Get the id institution prev comp.
     *
     * @return string|null Returns the id institution prev comp.
     */
    public function getIdInstitutionPrevComp(): ?string {
        return $this->idInstitutionPrevComp;
    }

    /**
     * Get the indice categ.
     *
     * @return int|null Returns the indice categ.
     */
    public function getIndiceCateg(): ?int {
        return $this->indiceCateg;
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
     * Get the pas active.
     *
     * @return bool|null Returns the pas active.
     */
    public function getPasActive(): ?bool {
        return $this->pasActive;
    }

    /**
     * Set the categ salarie.
     *
     * @param int|null $categSalarie The categ salarie.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCategSalarie(?int $categSalarie): CaissesRetraiteMetier {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the categ salarie equiv.
     *
     * @param string|null $categSalarieEquiv The categ salarie equiv.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCategSalarieEquiv(?string $categSalarieEquiv): CaissesRetraiteMetier {
        $this->categSalarieEquiv = $categSalarieEquiv;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string|null $codeActivite The code activite.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeActivite(?string $codeActivite): CaissesRetraiteMetier {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code metier.
     *
     * @param string|null $codeMetier The code metier.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeMetier(?string $codeMetier): CaissesRetraiteMetier {
        $this->codeMetier = $codeMetier;
        return $this;
    }

    /**
     * Set the code organisme agirc.
     *
     * @param string|null $codeOrganismeAgirc The code organisme agirc.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeOrganismeAgirc(?string $codeOrganismeAgirc): CaissesRetraiteMetier {
        $this->codeOrganismeAgirc = $codeOrganismeAgirc;
        return $this;
    }

    /**
     * Set the code organisme arrco.
     *
     * @param string|null $codeOrganismeArrco The code organisme arrco.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeOrganismeArrco(?string $codeOrganismeArrco): CaissesRetraiteMetier {
        $this->codeOrganismeArrco = $codeOrganismeArrco;
        return $this;
    }

    /**
     * Set the code organisme ccca.
     *
     * @param string|null $codeOrganismeCcca The code organisme ccca.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeOrganismeCcca(?string $codeOrganismeCcca): CaissesRetraiteMetier {
        $this->codeOrganismeCcca = $codeOrganismeCcca;
        return $this;
    }

    /**
     * Set the code organisme frais sante.
     *
     * @param string|null $codeOrganismeFraisSante The code organisme frais sante.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeOrganismeFraisSante(?string $codeOrganismeFraisSante): CaissesRetraiteMetier {
        $this->codeOrganismeFraisSante = $codeOrganismeFraisSante;
        return $this;
    }

    /**
     * Set the code organisme prev.
     *
     * @param string|null $codeOrganismePrev The code organisme prev.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeOrganismePrev(?string $codeOrganismePrev): CaissesRetraiteMetier {
        $this->codeOrganismePrev = $codeOrganismePrev;
        return $this;
    }

    /**
     * Set the code organisme prev comp.
     *
     * @param string|null $codeOrganismePrevComp The code organisme prev comp.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setCodeOrganismePrevComp(?string $codeOrganismePrevComp): CaissesRetraiteMetier {
        $this->codeOrganismePrevComp = $codeOrganismePrevComp;
        return $this;
    }

    /**
     * Set the id institution agirc.
     *
     * @param string|null $idInstitutionAgirc The id institution agirc.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIdInstitutionAgirc(?string $idInstitutionAgirc): CaissesRetraiteMetier {
        $this->idInstitutionAgirc = $idInstitutionAgirc;
        return $this;
    }

    /**
     * Set the id institution arrco.
     *
     * @param string|null $idInstitutionArrco The id institution arrco.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIdInstitutionArrco(?string $idInstitutionArrco): CaissesRetraiteMetier {
        $this->idInstitutionArrco = $idInstitutionArrco;
        return $this;
    }

    /**
     * Set the id institution ccca.
     *
     * @param string|null $idInstitutionCcca The id institution ccca.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIdInstitutionCcca(?string $idInstitutionCcca): CaissesRetraiteMetier {
        $this->idInstitutionCcca = $idInstitutionCcca;
        return $this;
    }

    /**
     * Set the id institution frais sante.
     *
     * @param string|null $idInstitutionFraisSante The id institution frais sante.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIdInstitutionFraisSante(?string $idInstitutionFraisSante): CaissesRetraiteMetier {
        $this->idInstitutionFraisSante = $idInstitutionFraisSante;
        return $this;
    }

    /**
     * Set the id institution prev.
     *
     * @param string|null $idInstitutionPrev The id institution prev.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIdInstitutionPrev(?string $idInstitutionPrev): CaissesRetraiteMetier {
        $this->idInstitutionPrev = $idInstitutionPrev;
        return $this;
    }

    /**
     * Set the id institution prev comp.
     *
     * @param string|null $idInstitutionPrevComp The id institution prev comp.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIdInstitutionPrevComp(?string $idInstitutionPrevComp): CaissesRetraiteMetier {
        $this->idInstitutionPrevComp = $idInstitutionPrevComp;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int|null $indiceCateg The indice categ.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIndiceCateg(?int $indiceCateg): CaissesRetraiteMetier {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setIntitule(?string $intitule): CaissesRetraiteMetier {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the pas active.
     *
     * @param bool|null $pasActive The pas active.
     * @return CaissesRetraiteMetier Returns this Caisses retraite metier.
     */
    public function setPasActive(?bool $pasActive): CaissesRetraiteMetier {
        $this->pasActive = $pasActive;
        return $this;
    }
}
