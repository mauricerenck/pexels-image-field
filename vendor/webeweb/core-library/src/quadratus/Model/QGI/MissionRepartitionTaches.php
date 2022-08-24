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
 * Mission repartition taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class MissionRepartitionTaches {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Repartition.
     *
     * @var float|null
     */
    private $repartition;

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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
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
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the repartition.
     *
     * @return float|null Returns the repartition.
     */
    public function getRepartition(): ?float {
        return $this->repartition;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return MissionRepartitionTaches Returns this Mission repartition taches.
     */
    public function setCodeClient(?string $codeClient): MissionRepartitionTaches {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return MissionRepartitionTaches Returns this Mission repartition taches.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): MissionRepartitionTaches {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return MissionRepartitionTaches Returns this Mission repartition taches.
     */
    public function setCodeMission(?string $codeMission): MissionRepartitionTaches {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return MissionRepartitionTaches Returns this Mission repartition taches.
     */
    public function setCodeTache(?string $codeTache): MissionRepartitionTaches {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the repartition.
     *
     * @param float|null $repartition The repartition.
     * @return MissionRepartitionTaches Returns this Mission repartition taches.
     */
    public function setRepartition(?float $repartition): MissionRepartitionTaches {
        $this->repartition = $repartition;
        return $this;
    }
}
