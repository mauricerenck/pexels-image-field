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
 * Libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Libelles {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

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
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return Libelles Returns this Libelles.
     */
    public function setActif(?bool $actif): Libelles {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Libelles Returns this Libelles.
     */
    public function setCode(?string $code): Libelles {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Libelles Returns this Libelles.
     */
    public function setLibelle(?string $libelle): Libelles {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Libelles Returns this Libelles.
     */
    public function setType(?string $type): Libelles {
        $this->type = $type;
        return $this;
    }
}
