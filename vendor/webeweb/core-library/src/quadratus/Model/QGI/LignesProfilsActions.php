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
 * Lignes profils actions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LignesProfilsActions {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code profil.
     *
     * @var string|null
     */
    private $codeProfil;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return LignesProfilsActions Returns this Lignes profils actions.
     */
    public function setCodeAction(?string $codeAction): LignesProfilsActions {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code profil.
     *
     * @param string|null $codeProfil The code profil.
     * @return LignesProfilsActions Returns this Lignes profils actions.
     */
    public function setCodeProfil(?string $codeProfil): LignesProfilsActions {
        $this->codeProfil = $codeProfil;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return LignesProfilsActions Returns this Lignes profils actions.
     */
    public function setNumLigne(?int $numLigne): LignesProfilsActions {
        $this->numLigne = $numLigne;
        return $this;
    }
}
