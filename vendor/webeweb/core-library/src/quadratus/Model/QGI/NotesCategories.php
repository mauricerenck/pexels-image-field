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
 * Notes categories.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class NotesCategories {

    /**
     * Code categorie.
     *
     * @var string|null
     */
    private $codeCategorie;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Nom categorie.
     *
     * @var string|null
     */
    private $nomCategorie;

    /**
     * Position.
     *
     * @var int|null
     */
    private $position;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code categorie.
     *
     * @return string|null Returns the code categorie.
     */
    public function getCodeCategorie(): ?string {
        return $this->codeCategorie;
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
     * Get the nom categorie.
     *
     * @return string|null Returns the nom categorie.
     */
    public function getNomCategorie(): ?string {
        return $this->nomCategorie;
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
     * Set the code categorie.
     *
     * @param string|null $codeCategorie The code categorie.
     * @return NotesCategories Returns this Notes categories.
     */
    public function setCodeCategorie(?string $codeCategorie): NotesCategories {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return NotesCategories Returns this Notes categories.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): NotesCategories {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nom categorie.
     *
     * @param string|null $nomCategorie The nom categorie.
     * @return NotesCategories Returns this Notes categories.
     */
    public function setNomCategorie(?string $nomCategorie): NotesCategories {
        $this->nomCategorie = $nomCategorie;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return NotesCategories Returns this Notes categories.
     */
    public function setPosition(?int $position): NotesCategories {
        $this->position = $position;
        return $this;
    }
}
