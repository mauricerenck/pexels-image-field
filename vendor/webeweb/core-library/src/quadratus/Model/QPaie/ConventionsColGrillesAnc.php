<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Conventions col grilles anc.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ConventionsColGrillesAnc {

    /**
     * Code convention.
     *
     * @var string|null
     */
    private $codeConvention;

    /**
     * Code grille.
     *
     * @var string|null
     */
    private $codeGrille;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Type grille.
     *
     * @var int|null
     */
    private $typeGrille;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code convention.
     *
     * @return string|null Returns the code convention.
     */
    public function getCodeConvention(): ?string {
        return $this->codeConvention;
    }

    /**
     * Get the code grille.
     *
     * @return string|null Returns the code grille.
     */
    public function getCodeGrille(): ?string {
        return $this->codeGrille;
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
     * Get the type grille.
     *
     * @return int|null Returns the type grille.
     */
    public function getTypeGrille(): ?int {
        return $this->typeGrille;
    }

    /**
     * Set the code convention.
     *
     * @param string|null $codeConvention The code convention.
     * @return ConventionsColGrillesAnc Returns this Conventions col grilles anc.
     */
    public function setCodeConvention(?string $codeConvention): ConventionsColGrillesAnc {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code grille.
     *
     * @param string|null $codeGrille The code grille.
     * @return ConventionsColGrillesAnc Returns this Conventions col grilles anc.
     */
    public function setCodeGrille(?string $codeGrille): ConventionsColGrillesAnc {
        $this->codeGrille = $codeGrille;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return ConventionsColGrillesAnc Returns this Conventions col grilles anc.
     */
    public function setIntitule(?string $intitule): ConventionsColGrillesAnc {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the type grille.
     *
     * @param int|null $typeGrille The type grille.
     * @return ConventionsColGrillesAnc Returns this Conventions col grilles anc.
     */
    public function setTypeGrille(?int $typeGrille): ConventionsColGrillesAnc {
        $this->typeGrille = $typeGrille;
        return $this;
    }
}
