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

/**
 * Temps previsionnels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TempsPrevisionnels {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string|null
     */
    private $codeAvenant;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Cout horaire.
     *
     * @var float|null
     */
    private $coutHoraire;

    /**
     * Nb heures.
     *
     * @var float|null
     */
    private $nbHeures;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code avenant.
     *
     * @return string|null Returns the code avenant.
     */
    public function getCodeAvenant(): ?string {
        return $this->codeAvenant;
    }

    /**
     * Get the code phase.
     *
     * @return string|null Returns the code phase.
     */
    public function getCodePhase(): ?string {
        return $this->codePhase;
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
     * Get the cout horaire.
     *
     * @return float|null Returns the cout horaire.
     */
    public function getCoutHoraire(): ?float {
        return $this->coutHoraire;
    }

    /**
     * Get the nb heures.
     *
     * @return float|null Returns the nb heures.
     */
    public function getNbHeures(): ?float {
        return $this->nbHeures;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return TempsPrevisionnels Returns this Temps previsionnels.
     */
    public function setCodeAffaire(?string $codeAffaire): TempsPrevisionnels {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string|null $codeAvenant The code avenant.
     * @return TempsPrevisionnels Returns this Temps previsionnels.
     */
    public function setCodeAvenant(?string $codeAvenant): TempsPrevisionnels {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return TempsPrevisionnels Returns this Temps previsionnels.
     */
    public function setCodePhase(?string $codePhase): TempsPrevisionnels {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return TempsPrevisionnels Returns this Temps previsionnels.
     */
    public function setCodeTache(?string $codeTache): TempsPrevisionnels {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the cout horaire.
     *
     * @param float|null $coutHoraire The cout horaire.
     * @return TempsPrevisionnels Returns this Temps previsionnels.
     */
    public function setCoutHoraire(?float $coutHoraire): TempsPrevisionnels {
        $this->coutHoraire = $coutHoraire;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float|null $nbHeures The nb heures.
     * @return TempsPrevisionnels Returns this Temps previsionnels.
     */
    public function setNbHeures(?float $nbHeures): TempsPrevisionnels {
        $this->nbHeures = $nbHeures;
        return $this;
    }
}
