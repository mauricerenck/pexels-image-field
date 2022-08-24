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
 * Actions co seances.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoSeances {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code manif.
     *
     * @var string|null
     */
    private $codeManif;

    /**
     * Date seance.
     *
     * @var DateTime|null
     */
    private $dateSeance;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Libelle seance.
     *
     * @var string|null
     */
    private $libelleSeance;

    /**
     * Num seance.
     *
     * @var int|null
     */
    private $numSeance;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
    }

    /**
     * Get the code manif.
     *
     * @return string|null Returns the code manif.
     */
    public function getCodeManif(): ?string {
        return $this->codeManif;
    }

    /**
     * Get the date seance.
     *
     * @return DateTime|null Returns the date seance.
     */
    public function getDateSeance(): ?DateTime {
        return $this->dateSeance;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb(): ?DateTime {
        return $this->heureDeb;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin(): ?DateTime {
        return $this->heureFin;
    }

    /**
     * Get the libelle seance.
     *
     * @return string|null Returns the libelle seance.
     */
    public function getLibelleSeance(): ?string {
        return $this->libelleSeance;
    }

    /**
     * Get the num seance.
     *
     * @return int|null Returns the num seance.
     */
    public function getNumSeance(): ?int {
        return $this->numSeance;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setCodeAction(?string $codeAction): ActionsCoSeances {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string|null $codeManif The code manif.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setCodeManif(?string $codeManif): ActionsCoSeances {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the date seance.
     *
     * @param DateTime|null $dateSeance The date seance.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setDateSeance(?DateTime $dateSeance): ActionsCoSeances {
        $this->dateSeance = $dateSeance;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setHeureDeb(?DateTime $heureDeb): ActionsCoSeances {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setHeureFin(?DateTime $heureFin): ActionsCoSeances {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the libelle seance.
     *
     * @param string|null $libelleSeance The libelle seance.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setLibelleSeance(?string $libelleSeance): ActionsCoSeances {
        $this->libelleSeance = $libelleSeance;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int|null $numSeance The num seance.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setNumSeance(?int $numSeance): ActionsCoSeances {
        $this->numSeance = $numSeance;
        return $this;
    }
}
