<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Interets.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Interets {

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Taux.
     *
     * @var float|null
     */
    private $taux;

    /**
     * Type cpt.
     *
     * @var string|null
     */
    private $typeCpt;

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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the taux.
     *
     * @return float|null Returns the taux.
     */
    public function getTaux(): ?float {
        return $this->taux;
    }

    /**
     * Get the type cpt.
     *
     * @return string|null Returns the type cpt.
     */
    public function getTypeCpt(): ?string {
        return $this->typeCpt;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return Interets Returns this Interets.
     */
    public function setDateDebut(?DateTime $dateDebut): Interets {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Interets Returns this Interets.
     */
    public function setNumeroCompte(?string $numeroCompte): Interets {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float|null $taux The taux.
     * @return Interets Returns this Interets.
     */
    public function setTaux(?float $taux): Interets {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the type cpt.
     *
     * @param string|null $typeCpt The type cpt.
     * @return Interets Returns this Interets.
     */
    public function setTypeCpt(?string $typeCpt): Interets {
        $this->typeCpt = $typeCpt;
        return $this;
    }
}
