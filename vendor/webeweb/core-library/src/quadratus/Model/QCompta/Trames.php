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
 * Trames.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Trames {

    /**
     * Code.
     *
     * @var int|null
     */
    private $code;

    /**
     * Garde montants.
     *
     * @var bool|null
     */
    private $gardeMontants;

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
     * Get the code.
     *
     * @return int|null Returns the code.
     */
    public function getCode(): ?int {
        return $this->code;
    }

    /**
     * Get the garde montants.
     *
     * @return bool|null Returns the garde montants.
     */
    public function getGardeMontants(): ?bool {
        return $this->gardeMontants;
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
     * Set the code.
     *
     * @param int|null $code The code.
     * @return Trames Returns this Trames.
     */
    public function setCode(?int $code): Trames {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the garde montants.
     *
     * @param bool|null $gardeMontants The garde montants.
     * @return Trames Returns this Trames.
     */
    public function setGardeMontants(?bool $gardeMontants): Trames {
        $this->gardeMontants = $gardeMontants;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Trames Returns this Trames.
     */
    public function setLibelle(?string $libelle): Trames {
        $this->libelle = $libelle;
        return $this;
    }
}
