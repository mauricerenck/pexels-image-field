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
 * Immo ensemble.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ImmoEnsemble {

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero ensemble.
     *
     * @var int|null
     */
    private $numeroEnsemble;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
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
     * Get the numero ensemble.
     *
     * @return int|null Returns the numero ensemble.
     */
    public function getNumeroEnsemble(): ?int {
        return $this->numeroEnsemble;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ImmoEnsemble Returns this Immo ensemble.
     */
    public function setLibelle(?string $libelle): ImmoEnsemble {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return ImmoEnsemble Returns this Immo ensemble.
     */
    public function setNumeroCompte(?string $numeroCompte): ImmoEnsemble {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero ensemble.
     *
     * @param int|null $numeroEnsemble The numero ensemble.
     * @return ImmoEnsemble Returns this Immo ensemble.
     */
    public function setNumeroEnsemble(?int $numeroEnsemble): ImmoEnsemble {
        $this->numeroEnsemble = $numeroEnsemble;
        return $this;
    }
}
