<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Temps passes deleted.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TempsPassesDeleted {

    /**
     * Contexte.
     *
     * @var string|null
     */
    private $contexte;

    /**
     * Date suppression.
     *
     * @var DateTime|null
     */
    private $dateSuppression;

    /**
     * G uniq id.
     *
     * @var string|null
     */
    private $gUniqId;

    /**
     * User.
     *
     * @var string|null
     */
    private $user;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the contexte.
     *
     * @return string|null Returns the contexte.
     */
    public function getContexte(): ?string {
        return $this->contexte;
    }

    /**
     * Get the date suppression.
     *
     * @return DateTime|null Returns the date suppression.
     */
    public function getDateSuppression(): ?DateTime {
        return $this->dateSuppression;
    }

    /**
     * Get the g uniq id.
     *
     * @return string|null Returns the g uniq id.
     */
    public function getGUniqId(): ?string {
        return $this->gUniqId;
    }

    /**
     * Get the user.
     *
     * @return string|null Returns the user.
     */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Set the contexte.
     *
     * @param string|null $contexte The contexte.
     * @return TempsPassesDeleted Returns this Temps passes deleted.
     */
    public function setContexte(?string $contexte): TempsPassesDeleted {
        $this->contexte = $contexte;
        return $this;
    }

    /**
     * Set the date suppression.
     *
     * @param DateTime|null $dateSuppression The date suppression.
     * @return TempsPassesDeleted Returns this Temps passes deleted.
     */
    public function setDateSuppression(?DateTime $dateSuppression): TempsPassesDeleted {
        $this->dateSuppression = $dateSuppression;
        return $this;
    }

    /**
     * Set the g uniq id.
     *
     * @param string|null $gUniqId The g uniq id.
     * @return TempsPassesDeleted Returns this Temps passes deleted.
     */
    public function setGUniqId(?string $gUniqId): TempsPassesDeleted {
        $this->gUniqId = $gUniqId;
        return $this;
    }

    /**
     * Set the user.
     *
     * @param string|null $user The user.
     * @return TempsPassesDeleted Returns this Temps passes deleted.
     */
    public function setUser(?string $user): TempsPassesDeleted {
        $this->user = $user;
        return $this;
    }
}
