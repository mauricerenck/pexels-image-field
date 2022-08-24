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
 * Criteres liste.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CriteresListe {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Num libelle.
     *
     * @var string|null
     */
    private $numLibelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
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
     * Get the num libelle.
     *
     * @return string|null Returns the num libelle.
     */
    public function getNumLibelle(): ?string {
        return $this->numLibelle;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return CriteresListe Returns this Criteres liste.
     */
    public function setCode(?string $code): CriteresListe {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return CriteresListe Returns this Criteres liste.
     */
    public function setLibelle(?string $libelle): CriteresListe {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num libelle.
     *
     * @param string|null $numLibelle The num libelle.
     * @return CriteresListe Returns this Criteres liste.
     */
    public function setNumLibelle(?string $numLibelle): CriteresListe {
        $this->numLibelle = $numLibelle;
        return $this;
    }
}
