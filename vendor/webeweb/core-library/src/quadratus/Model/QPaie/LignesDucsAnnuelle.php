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
 * Lignes ducs annuelle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesDucsAnnuelle {

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
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setCodeAt(?int $codeAt): LignesDucsAnnuelle {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setCodeCentre(?string $codeCentre): LignesDucsAnnuelle {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string|null $codeDucs The code ducs.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setCodeDucs(?string $codeDucs): LignesDucsAnnuelle {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setCodeEtablissement(?int $codeEtablissement): LignesDucsAnnuelle {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setCodeInsee(?string $codeInsee): LignesDucsAnnuelle {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setCodeLibelle(?string $codeLibelle): LignesDucsAnnuelle {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string|null $conditionSpec The condition spec.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setConditionSpec(?string $conditionSpec): LignesDucsAnnuelle {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setDateApplication(?DateTime $dateApplication): LignesDucsAnnuelle {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the exclure fusion.
     *
     * @param bool|null $exclureFusion The exclure fusion.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setExclureFusion(?bool $exclureFusion): LignesDucsAnnuelle {
        $this->exclureFusion = $exclureFusion;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string|null $idInstitution The id institution.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setIdInstitution(?string $idInstitution): LignesDucsAnnuelle {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setIntitule(?string $intitule): LignesDucsAnnuelle {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the is taux.
     *
     * @param bool|null $isTaux The is taux.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setIsTaux(?bool $isTaux): LignesDucsAnnuelle {
        $this->isTaux = $isTaux;
        return $this;
    }

    /**
     * Set the marque.
     *
     * @param bool|null $marque The marque.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setMarque(?bool $marque): LignesDucsAnnuelle {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setMontant(?float $montant): LignesDucsAnnuelle {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the mt patronal.
     *
     * @param float|null $mtPatronal The mt patronal.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setMtPatronal(?float $mtPatronal): LignesDucsAnnuelle {
        $this->mtPatronal = $mtPatronal;
        return $this;
    }

    /**
     * Set the mt salarial.
     *
     * @param float|null $mtSalarial The mt salarial.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setMtSalarial(?float $mtSalarial): LignesDucsAnnuelle {
        $this->mtSalarial = $mtSalarial;
        return $this;
    }

    /**
     * Set the nb cot.
     *
     * @param float|null $nbCot The nb cot.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setNbCot(?float $nbCot): LignesDucsAnnuelle {
        $this->nbCot = $nbCot;
        return $this;
    }

    /**
     * Set the nb patronal.
     *
     * @param float|null $nbPatronal The nb patronal.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setNbPatronal(?float $nbPatronal): LignesDucsAnnuelle {
        $this->nbPatronal = $nbPatronal;
        return $this;
    }

    /**
     * Set the nb salarial.
     *
     * @param float|null $nbSalarial The nb salarial.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setNbSalarial(?float $nbSalarial): LignesDucsAnnuelle {
        $this->nbSalarial = $nbSalarial;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setOrganisme(?string $organisme): LignesDucsAnnuelle {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): LignesDucsAnnuelle {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string|null $qualifiantCotis The qualifiant cotis.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setQualifiantCotis(?string $qualifiantCotis): LignesDucsAnnuelle {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the somme base.
     *
     * @param float|null $sommeBase The somme base.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setSommeBase(?float $sommeBase): LignesDucsAnnuelle {
        $this->sommeBase = $sommeBase;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float|null $tauxAt The taux at.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setTauxAt(?float $tauxAt): LignesDucsAnnuelle {
        $this->tauxAt = $tauxAt;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float|null $tauxPatronal The taux patronal.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setTauxPatronal(?float $tauxPatronal): LignesDucsAnnuelle {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float|null $tauxSalarial The taux salarial.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setTauxSalarial(?float $tauxSalarial): LignesDucsAnnuelle {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }

    /**
     * Set the type base unique.
     *
     * @param bool|null $typeBaseUnique The type base unique.
     * @return LignesDucsAnnuelle Returns this Lignes ducs annuelle.
     */
    public function setTypeBaseUnique(?bool $typeBaseUnique): LignesDucsAnnuelle {
        $this->typeBaseUnique = $typeBaseUnique;
        return $this;
    }
}
