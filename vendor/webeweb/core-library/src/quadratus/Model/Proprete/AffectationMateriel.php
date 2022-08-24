<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Affectation materiel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AffectationMateriel {

    /**
     * Budget depense euro.
     *
     * @var float|null
     */
    private $budgetDepenseEuro;

    /**
     * Budget depense frf.
     *
     * @var float|null
     */
    private $budgetDepenseFrf;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code materiel.
     *
     * @var string|null
     */
    private $codeMateriel;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Debut affect.
     *
     * @var DateTime|null
     */
    private $debutAffect;

    /**
     * Fin affect.
     *
     * @var DateTime|null
     */
    private $finAffect;

    /**
     * Pourcent utilise.
     *
     * @var float|null
     */
    private $pourcentUtilise;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the budget depense euro.
     *
     * @return float|null Returns the budget depense euro.
     */
    public function getBudgetDepenseEuro(): ?float {
        return $this->budgetDepenseEuro;
    }

    /**
     * Get the budget depense frf.
     *
     * @return float|null Returns the budget depense frf.
     */
    public function getBudgetDepenseFrf(): ?float {
        return $this->budgetDepenseFrf;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the code materiel.
     *
     * @return string|null Returns the code materiel.
     */
    public function getCodeMateriel(): ?string {
        return $this->codeMateriel;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the debut affect.
     *
     * @return DateTime|null Returns the debut affect.
     */
    public function getDebutAffect(): ?DateTime {
        return $this->debutAffect;
    }

    /**
     * Get the fin affect.
     *
     * @return DateTime|null Returns the fin affect.
     */
    public function getFinAffect(): ?DateTime {
        return $this->finAffect;
    }

    /**
     * Get the pourcent utilise.
     *
     * @return float|null Returns the pourcent utilise.
     */
    public function getPourcentUtilise(): ?float {
        return $this->pourcentUtilise;
    }

    /**
     * Set the budget depense euro.
     *
     * @param float|null $budgetDepenseEuro The budget depense euro.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setBudgetDepenseEuro(?float $budgetDepenseEuro): AffectationMateriel {
        $this->budgetDepenseEuro = $budgetDepenseEuro;
        return $this;
    }

    /**
     * Set the budget depense frf.
     *
     * @param float|null $budgetDepenseFrf The budget depense frf.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setBudgetDepenseFrf(?float $budgetDepenseFrf): AffectationMateriel {
        $this->budgetDepenseFrf = $budgetDepenseFrf;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setCodeAffaire(?string $codeAffaire): AffectationMateriel {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setCodeChantier(?string $codeChantier): AffectationMateriel {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setCodeClient(?string $codeClient): AffectationMateriel {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code materiel.
     *
     * @param string|null $codeMateriel The code materiel.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setCodeMateriel(?string $codeMateriel): AffectationMateriel {
        $this->codeMateriel = $codeMateriel;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setCodeTache(?string $codeTache): AffectationMateriel {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the debut affect.
     *
     * @param DateTime|null $debutAffect The debut affect.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setDebutAffect(?DateTime $debutAffect): AffectationMateriel {
        $this->debutAffect = $debutAffect;
        return $this;
    }

    /**
     * Set the fin affect.
     *
     * @param DateTime|null $finAffect The fin affect.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setFinAffect(?DateTime $finAffect): AffectationMateriel {
        $this->finAffect = $finAffect;
        return $this;
    }

    /**
     * Set the pourcent utilise.
     *
     * @param float|null $pourcentUtilise The pourcent utilise.
     * @return AffectationMateriel Returns this Affectation materiel.
     */
    public function setPourcentUtilise(?float $pourcentUtilise): AffectationMateriel {
        $this->pourcentUtilise = $pourcentUtilise;
        return $this;
    }
}
