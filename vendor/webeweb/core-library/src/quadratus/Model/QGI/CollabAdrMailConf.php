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
 * Collab adr mail conf.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CollabAdrMailConf {

    /**
     * Adresse email.
     *
     * @var string|null
     */
    private $adresseEmail;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse email.
     *
     * @return string|null Returns the adresse email.
     */
    public function getAdresseEmail(): ?string {
        return $this->adresseEmail;
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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Set the adresse email.
     *
     * @param string|null $adresseEmail The adresse email.
     * @return CollabAdrMailConf Returns this Collab adr mail conf.
     */
    public function setAdresseEmail(?string $adresseEmail): CollabAdrMailConf {
        $this->adresseEmail = $adresseEmail;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return CollabAdrMailConf Returns this Collab adr mail conf.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): CollabAdrMailConf {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return CollabAdrMailConf Returns this Collab adr mail conf.
     */
    public function setIntitule(?string $intitule): CollabAdrMailConf {
        $this->intitule = $intitule;
        return $this;
    }
}
