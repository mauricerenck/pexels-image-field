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
 * Bulletins navigo.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class BulletinsNavigo {

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Nb semaine.
     *
     * @var string|null
     */
    private $nbSemaine;

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
     * Rbt non proratise.
     *
     * @var bool|null
     */
    private $rbtNonProratise;

    /**
     * Type abonnement.
     *
     * @var string|null
     */
    private $typeAbonnement;

    /**
     * Zone.
     *
     * @var string|null
     */
    private $zone;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the nb semaine.
     *
     * @return string|null Returns the nb semaine.
     */
    public function getNbSemaine(): ?string {
        return $this->nbSemaine;
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
     * Get the rbt non proratise.
     *
     * @return bool|null Returns the rbt non proratise.
     */
    public function getRbtNonProratise(): ?bool {
        return $this->rbtNonProratise;
    }

    /**
     * Get the type abonnement.
     *
     * @return string|null Returns the type abonnement.
     */
    public function getTypeAbonnement(): ?string {
        return $this->typeAbonnement;
    }

    /**
     * Get the zone.
     *
     * @return string|null Returns the zone.
     */
    public function getZone(): ?string {
        return $this->zone;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setIndicePeriode(?int $indicePeriode): BulletinsNavigo {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb semaine.
     *
     * @param string|null $nbSemaine The nb semaine.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setNbSemaine(?string $nbSemaine): BulletinsNavigo {
        $this->nbSemaine = $nbSemaine;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setNumeroEmploye(?string $numeroEmploye): BulletinsNavigo {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setPeriode(?DateTime $periode): BulletinsNavigo {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the rbt non proratise.
     *
     * @param bool|null $rbtNonProratise The rbt non proratise.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setRbtNonProratise(?bool $rbtNonProratise): BulletinsNavigo {
        $this->rbtNonProratise = $rbtNonProratise;
        return $this;
    }

    /**
     * Set the type abonnement.
     *
     * @param string|null $typeAbonnement The type abonnement.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setTypeAbonnement(?string $typeAbonnement): BulletinsNavigo {
        $this->typeAbonnement = $typeAbonnement;
        return $this;
    }

    /**
     * Set the zone.
     *
     * @param string|null $zone The zone.
     * @return BulletinsNavigo Returns this Bulletins navigo.
     */
    public function setZone(?string $zone): BulletinsNavigo {
        $this->zone = $zone;
        return $this;
    }
}
