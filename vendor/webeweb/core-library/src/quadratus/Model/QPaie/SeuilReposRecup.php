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
 * Seuil repos recup.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class SeuilReposRecup {

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Nb jour repos recup.
     *
     * @var float|null
     */
    private $nbJourReposRecup;

    /**
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Seuil declenche.
     *
     * @var float|null
     */
    private $seuilDeclenche;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the nb jour repos recup.
     *
     * @return float|null Returns the nb jour repos recup.
     */
    public function getNbJourReposRecup(): ?float {
        return $this->nbJourReposRecup;
    }

    /**
     * Get the numero grille type.
     *
     * @return int|null Returns the numero grille type.
     */
    public function getNumeroGrilleType(): ?int {
        return $this->numeroGrilleType;
    }

    /**
     * Get the seuil declenche.
     *
     * @return float|null Returns the seuil declenche.
     */
    public function getSeuilDeclenche(): ?float {
        return $this->seuilDeclenche;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return SeuilReposRecup Returns this Seuil repos recup.
     */
    public function setDateApplication(?DateTime $dateApplication): SeuilReposRecup {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the nb jour repos recup.
     *
     * @param float|null $nbJourReposRecup The nb jour repos recup.
     * @return SeuilReposRecup Returns this Seuil repos recup.
     */
    public function setNbJourReposRecup(?float $nbJourReposRecup): SeuilReposRecup {
        $this->nbJourReposRecup = $nbJourReposRecup;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return SeuilReposRecup Returns this Seuil repos recup.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): SeuilReposRecup {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the seuil declenche.
     *
     * @param float|null $seuilDeclenche The seuil declenche.
     * @return SeuilReposRecup Returns this Seuil repos recup.
     */
    public function setSeuilDeclenche(?float $seuilDeclenche): SeuilReposRecup {
        $this->seuilDeclenche = $seuilDeclenche;
        return $this;
    }
}
