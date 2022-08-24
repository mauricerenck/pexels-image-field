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
 * Comptes recurrents.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ComptesRecurrents {

    /**
     * Compte.
     *
     * @var string|null
     */
    private $compte;

    /**
     * Compte recurrent.
     *
     * @var string|null
     */
    private $compteRecurrent;

    /**
     * Date dernier acces.
     *
     * @var DateTime|null
     */
    private $dateDernierAcces;

    /**
     * Nb acces.
     *
     * @var int|null
     */
    private $nbAcces;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the compte.
     *
     * @return string|null Returns the compte.
     */
    public function getCompte(): ?string {
        return $this->compte;
    }

    /**
     * Get the compte recurrent.
     *
     * @return string|null Returns the compte recurrent.
     */
    public function getCompteRecurrent(): ?string {
        return $this->compteRecurrent;
    }

    /**
     * Get the date dernier acces.
     *
     * @return DateTime|null Returns the date dernier acces.
     */
    public function getDateDernierAcces(): ?DateTime {
        return $this->dateDernierAcces;
    }

    /**
     * Get the nb acces.
     *
     * @return int|null Returns the nb acces.
     */
    public function getNbAcces(): ?int {
        return $this->nbAcces;
    }

    /**
     * Set the compte.
     *
     * @param string|null $compte The compte.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setCompte(?string $compte): ComptesRecurrents {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the compte recurrent.
     *
     * @param string|null $compteRecurrent The compte recurrent.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setCompteRecurrent(?string $compteRecurrent): ComptesRecurrents {
        $this->compteRecurrent = $compteRecurrent;
        return $this;
    }

    /**
     * Set the date dernier acces.
     *
     * @param DateTime|null $dateDernierAcces The date dernier acces.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setDateDernierAcces(?DateTime $dateDernierAcces): ComptesRecurrents {
        $this->dateDernierAcces = $dateDernierAcces;
        return $this;
    }

    /**
     * Set the nb acces.
     *
     * @param int|null $nbAcces The nb acces.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setNbAcces(?int $nbAcces): ComptesRecurrents {
        $this->nbAcces = $nbAcces;
        return $this;
    }
}
