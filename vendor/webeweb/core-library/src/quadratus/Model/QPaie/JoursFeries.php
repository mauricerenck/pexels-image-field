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
 * Jours feries.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class JoursFeries {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
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
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return JoursFeries Returns this Jours feries.
     */
    public function setCodeEtablissement(?int $codeEtablissement): JoursFeries {
        $this->codeEtablissement = $codeEtablissement;
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
}
