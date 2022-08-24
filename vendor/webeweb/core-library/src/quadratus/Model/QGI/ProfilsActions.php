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
 * Profils actions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ProfilsActions {

    /**
     * Code profil.
     *
     * @var string|null
     */
    private $codeProfil;

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
     * Get the code profil.
     *
     * @return string|null Returns the code profil.
     */
    public function getCodeProfil(): ?string {
        return $this->codeProfil;
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
     * Set the code profil.
     *
     * @param string|null $codeProfil The code profil.
     * @return ProfilsActions Returns this Profils actions.
     */
    public function setCodeProfil(?string $codeProfil): ProfilsActions {
        $this->codeProfil = $codeProfil;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return ProfilsActions Returns this Profils actions.
     */
    public function setIntitule(?string $intitule): ProfilsActions {
        $this->intitule = $intitule;
        return $this;
    }
}
