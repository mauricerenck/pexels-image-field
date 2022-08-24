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
 * Alertes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Alertes {

    /**
     * Cloturee.
     *
     * @var bool|null
     */
    private $cloturee;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the cloturee.
     *
     * @return bool|null Returns the cloturee.
     */
    public function getCloturee(): ?bool {
        return $this->cloturee;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
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
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the cloturee.
     *
     * @param bool|null $cloturee The cloturee.
     * @return Alertes Returns this Alertes.
     */
    public function setCloturee(?bool $cloturee): Alertes {
        $this->cloturee = $cloturee;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Alertes Returns this Alertes.
     */
    public function setCommentaire(?string $commentaire): Alertes {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return Alertes Returns this Alertes.
     */
    public function setDateDebut(?DateTime $dateDebut): Alertes {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return Alertes Returns this Alertes.
     */
    public function setUniqId(?string $uniqId): Alertes {
        $this->uniqId = $uniqId;
        return $this;
    }
}
