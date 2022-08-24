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
 * Agenda note du jour.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaNoteDuJour {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Ma j externe.
     *
     * @var bool|null
     */
    private $maJExterne;

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
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the jour.
     *
     * @return DateTime|null Returns the jour.
     */
    public function getJour(): ?DateTime {
        return $this->jour;
    }

    /**
     * Get the ma j externe.
     *
     * @return bool|null Returns the ma j externe.
     */
    public function getMaJExterne(): ?bool {
        return $this->maJExterne;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AgendaNoteDuJour Returns this Agenda note du jour.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AgendaNoteDuJour {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return AgendaNoteDuJour Returns this Agenda note du jour.
     */
    public function setCommentaire(?string $commentaire): AgendaNoteDuJour {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return AgendaNoteDuJour Returns this Agenda note du jour.
     */
    public function setDateModif(?DateTime $dateModif): AgendaNoteDuJour {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param DateTime|null $jour The jour.
     * @return AgendaNoteDuJour Returns this Agenda note du jour.
     */
    public function setJour(?DateTime $jour): AgendaNoteDuJour {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the ma j externe.
     *
     * @param bool|null $maJExterne The ma j externe.
     * @return AgendaNoteDuJour Returns this Agenda note du jour.
     */
    public function setMaJExterne(?bool $maJExterne): AgendaNoteDuJour {
        $this->maJExterne = $maJExterne;
        return $this;
    }
}
