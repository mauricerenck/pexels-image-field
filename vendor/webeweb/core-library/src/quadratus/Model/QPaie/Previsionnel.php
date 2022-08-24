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
 * Previsionnel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Previsionnel {

    /**
     * Annee.
     *
     * @var int|null
     */
    private $annee;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Debut semaine.
     *
     * @var DateTime|null
     */
    private $debutSemaine;

    /**
     * Horaire prevu.
     *
     * @var float|null
     */
    private $horairePrevu;

    /**
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Numero semaine.
     *
     * @var string|null
     */
    private $numeroSemaine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return int|null Returns the annee.
     */
    public function getAnnee(): ?int {
        return $this->annee;
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
     * Get the debut semaine.
     *
     * @return DateTime|null Returns the debut semaine.
     */
    public function getDebutSemaine(): ?DateTime {
        return $this->debutSemaine;
    }

    /**
     * Get the horaire prevu.
     *
     * @return float|null Returns the horaire prevu.
     */
    public function getHorairePrevu(): ?float {
        return $this->horairePrevu;
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
     * Get the numero semaine.
     *
     * @return string|null Returns the numero semaine.
     */
    public function getNumeroSemaine(): ?string {
        return $this->numeroSemaine;
    }

    /**
     * Set the annee.
     *
     * @param int|null $annee The annee.
     * @return Previsionnel Returns this Previsionnel.
     */
    public function setAnnee(?int $annee): Previsionnel {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return Previsionnel Returns this Previsionnel.
     */
    public function setDateApplication(?DateTime $dateApplication): Previsionnel {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the debut semaine.
     *
     * @param DateTime|null $debutSemaine The debut semaine.
     * @return Previsionnel Returns this Previsionnel.
     */
    public function setDebutSemaine(?DateTime $debutSemaine): Previsionnel {
        $this->debutSemaine = $debutSemaine;
        return $this;
    }

    /**
     * Set the horaire prevu.
     *
     * @param float|null $horairePrevu The horaire prevu.
     * @return Previsionnel Returns this Previsionnel.
     */
    public function setHorairePrevu(?float $horairePrevu): Previsionnel {
        $this->horairePrevu = $horairePrevu;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return Previsionnel Returns this Previsionnel.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): Previsionnel {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the numero semaine.
     *
     * @param string|null $numeroSemaine The numero semaine.
     * @return Previsionnel Returns this Previsionnel.
     */
    public function setNumeroSemaine(?string $numeroSemaine): Previsionnel {
        $this->numeroSemaine = $numeroSemaine;
        return $this;
    }
}
