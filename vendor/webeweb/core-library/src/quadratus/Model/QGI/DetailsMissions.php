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
 * Details missions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class DetailsMissions {

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
     * Code travail.
     *
     * @var string|null
     */
    private $codeTravail;

    /**
     * Niveau.
     *
     * @var int|null
     */
    private $niveau;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Type affectation.
     *
     * @var string|null
     */
    private $typeAffectation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code travail.
     *
     * @return string|null Returns the code travail.
     */
    public function getCodeTravail(): ?string {
        return $this->codeTravail;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
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
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return DetailsMissions Returns this Details missions.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): DetailsMissions {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return DetailsMissions Returns this Details missions.
     */
    public function setCodeMission(?string $codeMission): DetailsMissions {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string|null $codeTravail The code travail.
     * @return DetailsMissions Returns this Details missions.
     */
    public function setCodeTravail(?string $codeTravail): DetailsMissions {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int|null $niveau The niveau.
     * @return DetailsMissions Returns this Details missions.
     */
    public function setNiveau(?int $niveau): DetailsMissions {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DetailsMissions Returns this Details missions.
     */
    public function setNumLigne(?int $numLigne): DetailsMissions {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string|null $typeAffectation The type affectation.
     * @return DetailsMissions Returns this Details missions.
     */
    public function setTypeAffectation(?string $typeAffectation): DetailsMissions {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }
}
