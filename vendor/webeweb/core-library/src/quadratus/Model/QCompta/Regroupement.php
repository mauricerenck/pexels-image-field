<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Regroupement.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Regroupement {

    /**
     * Classe.
     *
     * @var string|null
     */
    private $classe;

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
     * Get the classe.
     *
     * @return string|null Returns the classe.
     */
    public function getClasse(): ?string {
        return $this->classe;
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
     * Set the classe.
     *
     * @param string|null $classe The classe.
     * @return Regroupement Returns this Regroupement.
     */
    public function setClasse(?string $classe): Regroupement {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Regroupement Returns this Regroupement.
     */
    public function setIntitule(?string $intitule): Regroupement {
        $this->intitule = $intitule;
        return $this;
    }
}
