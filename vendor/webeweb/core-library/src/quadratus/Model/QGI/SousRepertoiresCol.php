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
 * Sous repertoires col.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class SousRepertoiresCol {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Num sous rep.
     *
     * @var int|null
     */
    private $numSousRep;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the num sous rep.
     *
     * @return int|null Returns the num sous rep.
     */
    public function getNumSousRep(): ?int {
        return $this->numSousRep;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return SousRepertoiresCol Returns this Sous repertoires col.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): SousRepertoiresCol {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return SousRepertoiresCol Returns this Sous repertoires col.
     */
    public function setNom(?string $nom): SousRepertoiresCol {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num sous rep.
     *
     * @param int|null $numSousRep The num sous rep.
     * @return SousRepertoiresCol Returns this Sous repertoires col.
     */
    public function setNumSousRep(?int $numSousRep): SousRepertoiresCol {
        $this->numSousRep = $numSousRep;
        return $this;
    }
}
