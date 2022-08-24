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
 * Lignes ducs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesDucs {

    /**
     * Code at.
     *
     * @var int|null
     */
    private $codeAt;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code ducs.
     *
     * @var string|null
     */
    private $codeDucs;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code insee.
     *
     * @var string|null
     */
    private $codeInsee;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Condition spec.
     *
     * @var string|null
     */
    private $conditionSpec;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Exclure fusion.
     *
     * @var bool|null
     */
    private $exclureFusion;

    /**
     * Id institution.
     *
     * @var string|null
     */
    private $idInstitution;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Is taux.
     *
     * @var bool|null
     */
    private $isTaux;

    /**
     * Marque.
     *
     * @var bool|null
     */
    private $marque;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Mt patronal.
     *
     * @var float|null
     */
    private $mtPatronal;

    /**
     * Mt salarial.
     *
     * @var float|null
     */
    private $mtSalarial;

    /**
     * Nb cot.
     *
     * @var float|null
     */
    private $nbCot;

    /**
     * Nb patronal.
     *
     * @var float|null
     */
    private $nbPatronal;

    /**
     * Nb salarial.
     *
     * @var float|null
     */
    private $nbSalarial;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Qualifiant cotis.
     *
     * @var string|null
     */
    private $qualifiantCotis;

    /**
     * Somme base.
     *
     * @var float|null
     */
    private $sommeBase;

    /**
     * Taux at.
     *
     * @var float|null
     */
    private $tauxAt;

    /**
     * Taux patronal.
     *
     * @var float|null
     */
    private $tauxPatronal;

    /**
     * Taux salarial.
     *
     * @var float|null
     */
    private $tauxSalarial;

    /**
     * Type base unique.
     *
     * @var bool|null
     */
    private $typeBaseUnique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code at.
     *
     * @return int|null Returns the code at.
     */
    public function getCodeAt(): ?int {
        return $this->codeAt;
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
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
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code insee.
     *
     * @return string|null Returns the code insee.
     */
    public function getCodeInsee(): ?string {
        return $this->codeInsee;
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
     * Get the condition spec.
     *
     * @return string|null Returns the condition spec.
     */
    public function getConditionSpec(): ?string {
        return $this->conditionSpec;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication(): ?DateTime {
        return $this->dateApplication;
    }

    /**
     * Get the exclure fusion.
     *
     * @return bool|null Returns the exclure fusion.
     */
    public function getExclureFusion(): ?bool {
        return $this->exclureFusion;
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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the is taux.
     *
     * @return bool|null Returns the is taux.
     */
    public function getIsTaux(): ?bool {
        return $this->isTaux;
    }

    /**
     * Get the marque.
     *
     * @return bool|null Returns the marque.
     */
    public function getMarque(): ?bool {
        return $this->marque;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the mt patronal.
     *
     * @return float|null Returns the mt patronal.
     */
    public function getMtPatronal(): ?float {
        return $this->mtPatronal;
    }

    /**
     * Get the mt salarial.
     *
     * @return float|null Returns the mt salarial.
     */
    public function getMtSalarial(): ?float {
        return $this->mtSalarial;
    }

    /**
     * Get the nb cot.
     *
     * @return float|null Returns the nb cot.
     */
    public function getNbCot(): ?float {
        return $this->nbCot;
    }

    /**
     * Get the nb patronal.
     *
     * @return float|null Returns the nb patronal.
     */
    public function getNbPatronal(): ?float {
        return $this->nbPatronal;
    }

    /**
     * Get the nb salarial.
     *
     * @return float|null Returns the nb salarial.
     */
    public function getNbSalarial(): ?float {
        return $this->nbSalarial;
    }

    /**
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
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
     * Get the somme base.
     *
     * @return float|null Returns the somme base.
     */
    public function getSommeBase(): ?float {
        return $this->sommeBase;
    }

    /**
     * Get the taux at.
     *
     * @return float|null Returns the taux at.
     */
    public function getTauxAt(): ?float {
        return $this->tauxAt;
    }

    /**
     * Get the taux patronal.
     *
     * @return float|null Returns the taux patronal.
     */
    public function getTauxPatronal(): ?float {
        return $this->tauxPatronal;
    }

    /**
     * Get the taux salarial.
     *
     * @return float|null Returns the taux salarial.
     */
    public function getTauxSalarial(): ?float {
        return $this->tauxSalarial;
    }

    /**
     * Get the type base unique.
     *
     * @return bool|null Returns the type base unique.
     */
    public function getTypeBaseUnique(): ?bool {
        return $this->typeBaseUnique;
    }

    /**
     * Set the code at.
     *
     * @param int|null $codeAt The code at.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeAt(?int $codeAt): LignesDucs {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeCentre(?string $codeCentre): LignesDucs {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string|null $codeDucs The code ducs.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeDucs(?string $codeDucs): LignesDucs {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeEtablissement(?int $codeEtablissement): LignesDucs {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeInsee(?string $codeInsee): LignesDucs {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeLibelle(?string $codeLibelle): LignesDucs {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string|null $conditionSpec The condition spec.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setConditionSpec(?string $conditionSpec): LignesDucs {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setDateApplication(?DateTime $dateApplication): LignesDucs {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the exclure fusion.
     *
     * @param bool|null $exclureFusion The exclure fusion.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setExclureFusion(?bool $exclureFusion): LignesDucs {
        $this->exclureFusion = $exclureFusion;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string|null $idInstitution The id institution.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setIdInstitution(?string $idInstitution): LignesDucs {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setIntitule(?string $intitule): LignesDucs {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the is taux.
     *
     * @param bool|null $isTaux The is taux.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setIsTaux(?bool $isTaux): LignesDucs {
        $this->isTaux = $isTaux;
        return $this;
    }

    /**
     * Set the marque.
     *
     * @param bool|null $marque The marque.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMarque(?bool $marque): LignesDucs {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMontant(?float $montant): LignesDucs {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the mt patronal.
     *
     * @param float|null $mtPatronal The mt patronal.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMtPatronal(?float $mtPatronal): LignesDucs {
        $this->mtPatronal = $mtPatronal;
        return $this;
    }

    /**
     * Set the mt salarial.
     *
     * @param float|null $mtSalarial The mt salarial.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMtSalarial(?float $mtSalarial): LignesDucs {
        $this->mtSalarial = $mtSalarial;
        return $this;
    }

    /**
     * Set the nb cot.
     *
     * @param float|null $nbCot The nb cot.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setNbCot(?float $nbCot): LignesDucs {
        $this->nbCot = $nbCot;
        return $this;
    }

    /**
     * Set the nb patronal.
     *
     * @param float|null $nbPatronal The nb patronal.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setNbPatronal(?float $nbPatronal): LignesDucs {
        $this->nbPatronal = $nbPatronal;
        return $this;
    }

    /**
     * Set the nb salarial.
     *
     * @param float|null $nbSalarial The nb salarial.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setNbSalarial(?float $nbSalarial): LignesDucs {
        $this->nbSalarial = $nbSalarial;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setOrganisme(?string $organisme): LignesDucs {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): LignesDucs {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string|null $qualifiantCotis The qualifiant cotis.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setQualifiantCotis(?string $qualifiantCotis): LignesDucs {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the somme base.
     *
     * @param float|null $sommeBase The somme base.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setSommeBase(?float $sommeBase): LignesDucs {
        $this->sommeBase = $sommeBase;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float|null $tauxAt The taux at.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTauxAt(?float $tauxAt): LignesDucs {
        $this->tauxAt = $tauxAt;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float|null $tauxPatronal The taux patronal.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTauxPatronal(?float $tauxPatronal): LignesDucs {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float|null $tauxSalarial The taux salarial.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTauxSalarial(?float $tauxSalarial): LignesDucs {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }

    /**
     * Set the type base unique.
     *
     * @param bool|null $typeBaseUnique The type base unique.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTypeBaseUnique(?bool $typeBaseUnique): LignesDucs {
        $this->typeBaseUnique = $typeBaseUnique;
        return $this;
    }
}
