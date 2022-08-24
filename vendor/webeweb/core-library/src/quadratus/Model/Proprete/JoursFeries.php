<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Jours feries.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class JoursFeries {

    /**
     * Code pays.
     *
     * @var string|null
     */
    private $codePays;

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Numero jf.
     *
     * @var int|null
     */
    private $numeroJf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code pays.
     *
     * @return string|null Returns the code pays.
     */
    public function getCodePays(): ?string {
        return $this->codePays;
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
     * Get the numero jf.
     *
     * @return int|null Returns the numero jf.
     */
    public function getNumeroJf(): ?int {
        return $this->numeroJf;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return JoursFeries Returns this Jours feries.
     */
    public function setCodePays(?string $codePays): JoursFeries {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param DateTime|null $jour The jour.
     * @return JoursFeries Returns this Jours feries.
     */
    public function setJour(?DateTime $jour): JoursFeries {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the numero jf.
     *
     * @param int|null $numeroJf The numero jf.
     * @return JoursFeries Returns this Jours feries.
     */
    public function setNumeroJf(?int $numeroJf): JoursFeries {
        $this->numeroJf = $numeroJf;
        return $this;
    }
}
