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
 * Libelles auto.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class LibellesAuto {

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
     * Suivi date echeance.
     *
     * @var bool|null
     */
    private $suiviDateEcheance;

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
     * Get the suivi date echeance.
     *
     * @return bool|null Returns the suivi date echeance.
     */
    public function getSuiviDateEcheance(): ?bool {
        return $this->suiviDateEcheance;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LibellesAuto Returns this Libelles auto.
     */
    public function setCode(?string $code): LibellesAuto {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return LibellesAuto Returns this Libelles auto.
     */
    public function setLibelle(?string $libelle): LibellesAuto {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the suivi date echeance.
     *
     * @param bool|null $suiviDateEcheance The suivi date echeance.
     * @return LibellesAuto Returns this Libelles auto.
     */
    public function setSuiviDateEcheance(?bool $suiviDateEcheance): LibellesAuto {
        $this->suiviDateEcheance = $suiviDateEcheance;
        return $this;
    }
}
