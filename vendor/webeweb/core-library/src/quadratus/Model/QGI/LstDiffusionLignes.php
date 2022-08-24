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
 * Lst diffusion lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LstDiffusionLignes {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code groupe.
     *
     * @var string|null
     */
    private $codeGroupe;

    /**
     * Num lig.
     *
     * @var int|null
     */
    private $numLig;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

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
     * Get the code groupe.
     *
     * @return string|null Returns the code groupe.
     */
    public function getCodeGroupe(): ?string {
        return $this->codeGroupe;
    }

    /**
     * Get the num lig.
     *
     * @return int|null Returns the num lig.
     */
    public function getNumLig(): ?int {
        return $this->numLig;
    }

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return LstDiffusionLignes Returns this Lst diffusion lignes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): LstDiffusionLignes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code groupe.
     *
     * @param string|null $codeGroupe The code groupe.
     * @return LstDiffusionLignes Returns this Lst diffusion lignes.
     */
    public function setCodeGroupe(?string $codeGroupe): LstDiffusionLignes {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }

    /**
     * Set the num lig.
     *
     * @param int|null $numLig The num lig.
     * @return LstDiffusionLignes Returns this Lst diffusion lignes.
     */
    public function setNumLig(?int $numLig): LstDiffusionLignes {
        $this->numLig = $numLig;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return LstDiffusionLignes Returns this Lst diffusion lignes.
     */
    public function setType(?int $type): LstDiffusionLignes {
        $this->type = $type;
        return $this;
    }
}
