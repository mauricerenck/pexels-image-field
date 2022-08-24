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

/**
 * Intit cumuls libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class IntitCumulsLibelles {

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Num cumul bulletin.
     *
     * @var int|null
     */
    private $numCumulBulletin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int|null Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin(): ?int {
        return $this->numCumulBulletin;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return IntitCumulsLibelles Returns this Intit cumuls libelles.
     */
    public function setIntitule(?string $intitule): IntitCumulsLibelles {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int|null $numCumulBulletin The num cumul bulletin.
     * @return IntitCumulsLibelles Returns this Intit cumuls libelles.
     */
    public function setNumCumulBulletin(?int $numCumulBulletin): IntitCumulsLibelles {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }
}
