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
 * i sessions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iSessions {

    /**
     * Adresse ip.
     *
     * @var string|null
     */
    private $adresseIp;

    /**
     * Appli.
     *
     * @var string|null
     */
    private $appli;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Date active.
     *
     * @var DateTime|null
     */
    private $dateActive;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Dossier.
     *
     * @var string|null
     */
    private $dossier;

    /**
     * Id.
     *
     * @var int|null
     */
    private $id;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse ip.
     *
     * @return string|null Returns the adresse ip.
     */
    public function getAdresseIp(): ?string {
        return $this->adresseIp;
    }

    /**
     * Get the appli.
     *
     * @return string|null Returns the appli.
     */
    public function getAppli(): ?string {
        return $this->appli;
    }

    /**
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the date active.
     *
     * @return DateTime|null Returns the date active.
     */
    public function getDateActive(): ?DateTime {
        return $this->dateActive;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
     */
    public function getDateAdded(): ?DateTime {
        return $this->dateAdded;
    }

    /**
     * Get the dossier.
     *
     * @return string|null Returns the dossier.
     */
    public function getDossier(): ?string {
        return $this->dossier;
    }

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set the adresse ip.
     *
     * @param string|null $adresseIp The adresse ip.
     * @return iSessions Returns this i sessions.
     */
    public function setAdresseIp(?string $adresseIp): iSessions {
        $this->adresseIp = $adresseIp;
        return $this;
    }

    /**
     * Set the appli.
     *
     * @param string|null $appli The appli.
     * @return iSessions Returns this i sessions.
     */
    public function setAppli(?string $appli): iSessions {
        $this->appli = $appli;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return iSessions Returns this i sessions.
     */
    public function setCodeUser(?string $codeUser): iSessions {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date active.
     *
     * @param DateTime|null $dateActive The date active.
     * @return iSessions Returns this i sessions.
     */
    public function setDateActive(?DateTime $dateActive): iSessions {
        $this->dateActive = $dateActive;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     * @return iSessions Returns this i sessions.
     */
    public function setDateAdded(?DateTime $dateAdded): iSessions {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the dossier.
     *
     * @param string|null $dossier The dossier.
     * @return iSessions Returns this i sessions.
     */
    public function setDossier(?string $dossier): iSessions {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return iSessions Returns this i sessions.
     */
    public function setId(?int $id): iSessions {
        $this->id = $id;
        return $this;
    }
}
