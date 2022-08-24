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
 * Langues.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Langues {

    /**
     * Code langue.
     *
     * @var string|null
     */
    private $codeLangue;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code langue.
     *
     * @return string|null Returns the code langue.
     */
    public function getCodeLangue(): ?string {
        return $this->codeLangue;
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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Set the code langue.
     *
     * @param string|null $codeLangue The code langue.
     * @return Langues Returns this Langues.
     */
    public function setCodeLangue(?string $codeLangue): Langues {
        $this->codeLangue = $codeLangue;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Langues Returns this Langues.
     */
    public function setIntitule(?string $intitule): Langues {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Langues Returns this Langues.
     */
    public function setNumeroCompte(?string $numeroCompte): Langues {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
