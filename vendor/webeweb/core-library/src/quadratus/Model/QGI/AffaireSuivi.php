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
 * Affaire suivi.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AffaireSuivi {

    /**
     * Avancement.
     *
     * @var float|null
     */
    private $avancement;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date bilan.
     *
     * @var DateTime|null
     */
    private $dateBilan;

    /**
     * Liste collab.
     *
     * @var string|null
     */
    private $listeCollab;

    /**
     * Nb heures previsionnel.
     *
     * @var float|null
     */
    private $nbHeuresPrevisionnel;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avancement.
     *
     * @return float|null Returns the avancement.
     */
    public function getAvancement(): ?float {
        return $this->avancement;
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
     * Get the code phase.
     *
     * @return string|null Returns the code phase.
     */
    public function getCodePhase(): ?string {
        return $this->codePhase;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the date bilan.
     *
     * @return DateTime|null Returns the date bilan.
     */
    public function getDateBilan(): ?DateTime {
        return $this->dateBilan;
    }

    /**
     * Get the liste collab.
     *
     * @return string|null Returns the liste collab.
     */
    public function getListeCollab(): ?string {
        return $this->listeCollab;
    }

    /**
     * Get the nb heures previsionnel.
     *
     * @return float|null Returns the nb heures previsionnel.
     */
    public function getNbHeuresPrevisionnel(): ?float {
        return $this->nbHeuresPrevisionnel;
    }

    /**
     * Set the avancement.
     *
     * @param float|null $avancement The avancement.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setAvancement(?float $avancement): AffaireSuivi {
        $this->avancement = $avancement;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setCodeAffaire(?string $codeAffaire): AffaireSuivi {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setCodePhase(?string $codePhase): AffaireSuivi {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setCommentaire(?string $commentaire): AffaireSuivi {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date bilan.
     *
     * @param DateTime|null $dateBilan The date bilan.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setDateBilan(?DateTime $dateBilan): AffaireSuivi {
        $this->dateBilan = $dateBilan;
        return $this;
    }

    /**
     * Set the liste collab.
     *
     * @param string|null $listeCollab The liste collab.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setListeCollab(?string $listeCollab): AffaireSuivi {
        $this->listeCollab = $listeCollab;
        return $this;
    }

    /**
     * Set the nb heures previsionnel.
     *
     * @param float|null $nbHeuresPrevisionnel The nb heures previsionnel.
     * @return AffaireSuivi Returns this Affaire suivi.
     */
    public function setNbHeuresPrevisionnel(?float $nbHeuresPrevisionnel): AffaireSuivi {
        $this->nbHeuresPrevisionnel = $nbHeuresPrevisionnel;
        return $this;
    }
}
