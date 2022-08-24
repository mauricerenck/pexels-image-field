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
 * Contenu.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Contenu {

    /**
     * Position.
     *
     * @var int|null
     */
    private $position;

    /**
     * Texte contenu.
     *
     * @var string|null
     */
    private $texteContenu;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the position.
     *
     * @return int|null Returns the position.
     */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Get the texte contenu.
     *
     * @return string|null Returns the texte contenu.
     */
    public function getTexteContenu(): ?string {
        return $this->texteContenu;
    }

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return Contenu Returns this Contenu.
     */
    public function setPosition(?int $position): Contenu {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the texte contenu.
     *
     * @param string|null $texteContenu The texte contenu.
     * @return Contenu Returns this Contenu.
     */
    public function setTexteContenu(?string $texteContenu): Contenu {
        $this->texteContenu = $texteContenu;
        return $this;
    }
}
