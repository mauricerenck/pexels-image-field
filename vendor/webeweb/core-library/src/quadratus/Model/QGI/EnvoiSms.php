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

/**
 * Envoi sms.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class EnvoiSms {

    /**
     * Acces collaborateur.
     *
     * @var bool|null
     */
    private $accesCollaborateur;

    /**
     * Acces intervenants.
     *
     * @var bool|null
     */
    private $accesIntervenants;

    /**
     * Acces total.
     *
     * @var bool|null
     */
    private $accesTotal;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Nb sms.
     *
     * @var int|null
     */
    private $nbSms;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the acces collaborateur.
     *
     * @return bool|null Returns the acces collaborateur.
     */
    public function getAccesCollaborateur(): ?bool {
        return $this->accesCollaborateur;
    }

    /**
     * Get the acces intervenants.
     *
     * @return bool|null Returns the acces intervenants.
     */
    public function getAccesIntervenants(): ?bool {
        return $this->accesIntervenants;
    }

    /**
     * Get the acces total.
     *
     * @return bool|null Returns the acces total.
     */
    public function getAccesTotal(): ?bool {
        return $this->accesTotal;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the nb sms.
     *
     * @return int|null Returns the nb sms.
     */
    public function getNbSms(): ?int {
        return $this->nbSms;
    }

    /**
     * Set the acces collaborateur.
     *
     * @param bool|null $accesCollaborateur The acces collaborateur.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setAccesCollaborateur(?bool $accesCollaborateur): EnvoiSms {
        $this->accesCollaborateur = $accesCollaborateur;
        return $this;
    }

    /**
     * Set the acces intervenants.
     *
     * @param bool|null $accesIntervenants The acces intervenants.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setAccesIntervenants(?bool $accesIntervenants): EnvoiSms {
        $this->accesIntervenants = $accesIntervenants;
        return $this;
    }

    /**
     * Set the acces total.
     *
     * @param bool|null $accesTotal The acces total.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setAccesTotal(?bool $accesTotal): EnvoiSms {
        $this->accesTotal = $accesTotal;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): EnvoiSms {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nb sms.
     *
     * @param int|null $nbSms The nb sms.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setNbSms(?int $nbSms): EnvoiSms {
        $this->nbSms = $nbSms;
        return $this;
    }
}
