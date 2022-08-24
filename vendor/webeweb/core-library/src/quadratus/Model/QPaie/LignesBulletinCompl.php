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
 * Lignes bulletin compl.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesBulletinCompl {

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Num ligne bulletin.
     *
     * @var int|null
     */
    private $numLigneBulletin;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Type regul.
     *
     * @var string|null
     */
    private $typeRegul;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
    }

    /**
     * Get the num ligne bulletin.
     *
     * @return int|null Returns the num ligne bulletin.
     */
    public function getNumLigneBulletin(): ?int {
        return $this->numLigneBulletin;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the periodicite.
     *
     * @return string|null Returns the periodicite.
     */
    public function getPeriodicite(): ?string {
        return $this->periodicite;
    }

    /**
     * Get the type regul.
     *
     * @return string|null Returns the type regul.
     */
    public function getTypeRegul(): ?string {
        return $this->typeRegul;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setDateDebut(?DateTime $dateDebut): LignesBulletinCompl {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setDateFin(?DateTime $dateFin): LignesBulletinCompl {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setIndicePeriode(?int $indicePeriode): LignesBulletinCompl {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the num ligne bulletin.
     *
     * @param int|null $numLigneBulletin The num ligne bulletin.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setNumLigneBulletin(?int $numLigneBulletin): LignesBulletinCompl {
        $this->numLigneBulletin = $numLigneBulletin;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesBulletinCompl {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setPeriode(?DateTime $periode): LignesBulletinCompl {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setPeriodicite(?string $periodicite): LignesBulletinCompl {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the type regul.
     *
     * @param string|null $typeRegul The type regul.
     * @return LignesBulletinCompl Returns this Lignes bulletin compl.
     */
    public function setTypeRegul(?string $typeRegul): LignesBulletinCompl {
        $this->typeRegul = $typeRegul;
        return $this;
    }
}
