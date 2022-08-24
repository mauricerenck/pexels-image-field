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
 * Const primes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstPrimes {

    /**
     * Code prime q paie.
     *
     * @var string|null
     */
    private $codePrimeQPaie;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code prime q paie.
     *
     * @return string|null Returns the code prime q paie.
     */
    public function getCodePrimeQPaie(): ?string {
        return $this->codePrimeQPaie;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
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
     * Set the code prime q paie.
     *
     * @param string|null $codePrimeQPaie The code prime q paie.
     * @return ConstPrimes Returns this Const primes.
     */
    public function setCodePrimeQPaie(?string $codePrimeQPaie): ConstPrimes {
        $this->codePrimeQPaie = $codePrimeQPaie;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return ConstPrimes Returns this Const primes.
     */
    public function setIndice(?int $indice): ConstPrimes {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ConstPrimes Returns this Const primes.
     */
    public function setLibelle(?string $libelle): ConstPrimes {
        $this->libelle = $libelle;
        return $this;
    }
}
