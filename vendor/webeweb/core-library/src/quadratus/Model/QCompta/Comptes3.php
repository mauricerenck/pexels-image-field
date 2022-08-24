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
 * Comptes3.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Comptes3 {

    /**
     * Code section.
     *
     * @var string|null
     */
    private $codeSection;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Pourcent repart.
     *
     * @var float|null
     */
    private $pourcentRepart;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code section.
     *
     * @return string|null Returns the code section.
     */
    public function getCodeSection(): ?string {
        return $this->codeSection;
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
     * Get the pourcent repart.
     *
     * @return float|null Returns the pourcent repart.
     */
    public function getPourcentRepart(): ?float {
        return $this->pourcentRepart;
    }

    /**
     * Set the code section.
     *
     * @param string|null $codeSection The code section.
     * @return Comptes3 Returns this Comptes3.
     */
    public function setCodeSection(?string $codeSection): Comptes3 {
        $this->codeSection = $codeSection;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Comptes3 Returns this Comptes3.
     */
    public function setNumeroCompte(?string $numeroCompte): Comptes3 {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the pourcent repart.
     *
     * @param float|null $pourcentRepart The pourcent repart.
     * @return Comptes3 Returns this Comptes3.
     */
    public function setPourcentRepart(?float $pourcentRepart): Comptes3 {
        $this->pourcentRepart = $pourcentRepart;
        return $this;
    }
}
