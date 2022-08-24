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
 * Quadra db.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class QuadraDb {

    /**
     * Date envoi message.
     *
     * @var DateTime|null
     */
    private $dateEnvoiMessage;

    /**
     * Taille base.
     *
     * @var int|null
     */
    private $tailleBase;

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
     * Get the date envoi message.
     *
     * @return DateTime|null Returns the date envoi message.
     */
    public function getDateEnvoiMessage(): ?DateTime {
        return $this->dateEnvoiMessage;
    }

    /**
     * Get the taille base.
     *
     * @return int|null Returns the taille base.
     */
    public function getTailleBase(): ?int {
        return $this->tailleBase;
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
     * Set the date envoi message.
     *
     * @param DateTime|null $dateEnvoiMessage The date envoi message.
     * @return QuadraDb Returns this Quadra db.
     */
    public function setDateEnvoiMessage(?DateTime $dateEnvoiMessage): QuadraDb {
        $this->dateEnvoiMessage = $dateEnvoiMessage;
        return $this;
    }

    /**
     * Set the taille base.
     *
     * @param int|null $tailleBase The taille base.
     * @return QuadraDb Returns this Quadra db.
     */
    public function setTailleBase(?int $tailleBase): QuadraDb {
        $this->tailleBase = $tailleBase;
        return $this;
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
