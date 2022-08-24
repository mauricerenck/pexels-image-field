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
 * Mission visu taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class MissionVisuTaches {

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code tache visu.
     *
     * @var string|null
     */
    private $codeTacheVisu;

    /**
     * Is regroupement.
     *
     * @var bool|null
     */
    private $isRegroupement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code tache visu.
     *
     * @return string|null Returns the code tache visu.
     */
    public function getCodeTacheVisu(): ?string {
        return $this->codeTacheVisu;
    }

    /**
     * Get the is regroupement.
     *
     * @return bool|null Returns the is regroupement.
     */
    public function getIsRegroupement(): ?bool {
        return $this->isRegroupement;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return MissionVisuTaches Returns this Mission visu taches.
     */
    public function setCodeMission(?string $codeMission): MissionVisuTaches {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code tache visu.
     *
     * @param string|null $codeTacheVisu The code tache visu.
     * @return MissionVisuTaches Returns this Mission visu taches.
     */
    public function setCodeTacheVisu(?string $codeTacheVisu): MissionVisuTaches {
        $this->codeTacheVisu = $codeTacheVisu;
        return $this;
    }

    /**
     * Set the is regroupement.
     *
     * @param bool|null $isRegroupement The is regroupement.
     * @return MissionVisuTaches Returns this Mission visu taches.
     */
    public function setIsRegroupement(?bool $isRegroupement): MissionVisuTaches {
        $this->isRegroupement = $isRegroupement;
        return $this;
    }
}
