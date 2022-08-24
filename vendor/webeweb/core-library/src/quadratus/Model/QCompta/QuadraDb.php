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

/**
 * Quadra db.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class QuadraDb {

    /**
     * Version.
     *
     * @var int|null
     */
    private $version;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the version.
     *
     * @return int|null Returns the version.
     */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Set the version.
     *
     * @param int|null $version The version.
     * @return QuadraDb Returns this Quadra db.
     */
    public function setVersion(?int $version): QuadraDb {
        $this->version = $version;
        return $this;
    }
}
