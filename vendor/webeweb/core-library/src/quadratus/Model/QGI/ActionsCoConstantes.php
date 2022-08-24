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
 * Actions co constantes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoConstantes {

    /**
     * Lieu edition.
     *
     * @var string|null
     */
    private $lieuEdition;

    /**
     * Num declaration.
     *
     * @var string|null
     */
    private $numDeclaration;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the lieu edition.
     *
     * @return string|null Returns the lieu edition.
     */
    public function getLieuEdition(): ?string {
        return $this->lieuEdition;
    }

    /**
     * Get the num declaration.
     *
     * @return string|null Returns the num declaration.
     */
    public function getNumDeclaration(): ?string {
        return $this->numDeclaration;
    }

    /**
     * Set the lieu edition.
     *
     * @param string|null $lieuEdition The lieu edition.
     * @return ActionsCoConstantes Returns this Actions co constantes.
     */
    public function setLieuEdition(?string $lieuEdition): ActionsCoConstantes {
        $this->lieuEdition = $lieuEdition;
        return $this;
    }

    /**
     * Set the num declaration.
     *
     * @param string|null $numDeclaration The num declaration.
     * @return ActionsCoConstantes Returns this Actions co constantes.
     */
    public function setNumDeclaration(?string $numDeclaration): ActionsCoConstantes {
        $this->numDeclaration = $numDeclaration;
        return $this;
    }
}
