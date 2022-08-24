<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Budget l.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class BudgetL {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code travail.
     *
     * @var string|null
     */
    private $codeTravail;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * H soldees.
     *
     * @var bool|null
     */
    private $hSoldees;

    /**
     * Nbr heures.
     *
     * @var float|null
     */
    private $nbrHeures;

    /**
     * Niveau.
     *
     * @var int|null
     */
    private $niveau;

    /**
     * Nom travail.
     *
     * @var string|null
     */
    private $nomTravail;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num uniq.
     *
     * @var string|null
     */
    private $numUniq;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prix heure.
     *
     * @var float|null
     */
    private $prixHeure;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Type affectation.
     *
     * @var string|null
     */
    private $typeAffectation;

    /**
     * Uniq id lm.
     *
     * @var string|null
     */
    private $uniqIdLm;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the code travail.
     *
     * @return string|null Returns the code travail.
     */
    public function getCodeTravail(): ?string {
        return $this->codeTravail;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the h soldees.
     *
     * @return bool|null Returns the h soldees.
     */
    public function getHSoldees(): ?bool {
        return $this->hSoldees;
    }

    /**
     * Get the nbr heures.
     *
     * @return float|null Returns the nbr heures.
     */
    public function getNbrHeures(): ?float {
        return $this->nbrHeures;
    }

    /**
     * Get the niveau.
     *
     * @return int|null Returns the niveau.
     */
    public function getNiveau(): ?int {
        return $this->niveau;
    }

    /**
     * Get the nom travail.
     *
     * @return string|null Returns the nom travail.
     */
    public function getNomTravail(): ?string {
        return $this->nomTravail;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the num uniq.
     *
     * @return string|null Returns the num uniq.
     */
    public function getNumUniq(): ?string {
        return $this->numUniq;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the prix heure.
     *
     * @return float|null Returns the prix heure.
     */
    public function getPrixHeure(): ?float {
        return $this->prixHeure;
    }

    /**
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
    }

    /**
     * Get the type affectation.
     *
     * @return string|null Returns the type affectation.
     */
    public function getTypeAffectation(): ?string {
        return $this->typeAffectation;
    }

    /**
     * Get the uniq id lm.
     *
     * @return string|null Returns the uniq id lm.
     */
    public function getUniqIdLm(): ?string {
        return $this->uniqIdLm;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeClient(?string $codeClient): BudgetL {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeCollab(?string $codeCollab): BudgetL {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeMission(?string $codeMission): BudgetL {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string|null $codeTravail The code travail.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeTravail(?string $codeTravail): BudgetL {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeTva(?string $codeTva): BudgetL {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the h soldees.
     *
     * @param bool|null $hSoldees The h soldees.
     * @return BudgetL Returns this Budget l.
     */
    public function setHSoldees(?bool $hSoldees): BudgetL {
        $this->hSoldees = $hSoldees;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float|null $nbrHeures The nbr heures.
     * @return BudgetL Returns this Budget l.
     */
    public function setNbrHeures(?float $nbrHeures): BudgetL {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int|null $niveau The niveau.
     * @return BudgetL Returns this Budget l.
     */
    public function setNiveau(?int $niveau): BudgetL {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom travail.
     *
     * @param string|null $nomTravail The nom travail.
     * @return BudgetL Returns this Budget l.
     */
    public function setNomTravail(?string $nomTravail): BudgetL {
        $this->nomTravail = $nomTravail;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return BudgetL Returns this Budget l.
     */
    public function setNumLigne(?int $numLigne): BudgetL {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string|null $numUniq The num uniq.
     * @return BudgetL Returns this Budget l.
     */
    public function setNumUniq(?string $numUniq): BudgetL {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return BudgetL Returns this Budget l.
     */
    public function setPeriode(?DateTime $periode): BudgetL {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prix heure.
     *
     * @param float|null $prixHeure The prix heure.
     * @return BudgetL Returns this Budget l.
     */
    public function setPrixHeure(?float $prixHeure): BudgetL {
        $this->prixHeure = $prixHeure;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return BudgetL Returns this Budget l.
     */
    public function setQuantite(?float $quantite): BudgetL {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string|null $typeAffectation The type affectation.
     * @return BudgetL Returns this Budget l.
     */
    public function setTypeAffectation(?string $typeAffectation): BudgetL {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }

    /**
     * Set the uniq id lm.
     *
     * @param string|null $uniqIdLm The uniq id lm.
     * @return BudgetL Returns this Budget l.
     */
    public function setUniqIdLm(?string $uniqIdLm): BudgetL {
        $this->uniqIdLm = $uniqIdLm;
        return $this;
    }
}
