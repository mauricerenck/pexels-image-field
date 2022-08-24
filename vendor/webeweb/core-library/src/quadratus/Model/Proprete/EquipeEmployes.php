<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

/**
 * Equipe employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class EquipeEmployes {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code equipe.
     *
     * @var string|null
     */
    private $codeEquipe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code equipe.
     *
     * @return string|null Returns the code equipe.
     */
    public function getCodeEquipe(): ?string {
        return $this->codeEquipe;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return EquipeEmployes Returns this Equipe employes.
     */
    public function setCodeEmploye(?string $codeEmploye): EquipeEmployes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string|null $codeEquipe The code equipe.
     * @return EquipeEmployes Returns this Equipe employes.
     */
    public function setCodeEquipe(?string $codeEquipe): EquipeEmployes {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }
}
