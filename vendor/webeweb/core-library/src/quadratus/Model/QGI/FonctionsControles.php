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
 * Fonctions controles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class FonctionsControles {

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Mot controle.
     *
     * @var string|null
     */
    private $motControle;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the mot controle.
     *
     * @return string|null Returns the mot controle.
     */
    public function getMotControle(): ?string {
        return $this->motControle;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return FonctionsControles Returns this Fonctions controles.
     */
    public function setIntitule(?string $intitule): FonctionsControles {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mot controle.
     *
     * @param string|null $motControle The mot controle.
     * @return FonctionsControles Returns this Fonctions controles.
     */
    public function setMotControle(?string $motControle): FonctionsControles {
        $this->motControle = $motControle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return FonctionsControles Returns this Fonctions controles.
     */
    public function setType(?string $type): FonctionsControles {
        $this->type = $type;
        return $this;
    }
}
