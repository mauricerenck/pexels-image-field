<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Variantes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Variantes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code variante.
     *
     * @var string|null
     */
    private $codeVariante;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

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
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the code variante.
     *
     * @return string|null Returns the code variante.
     */
    public function getCodeVariante(): ?string {
        return $this->codeVariante;
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
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
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
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Variantes Returns this Variantes.
     */
    public function setCode(?string $code): Variantes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string|null $codeVariante The code variante.
     * @return Variantes Returns this Variantes.
     */
    public function setCodeVariante(?string $codeVariante): Variantes {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Variantes Returns this Variantes.
     */
    public function setLibelle(?string $libelle): Variantes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return Variantes Returns this Variantes.
     */
    public function setNumero(?int $numero): Variantes {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Variantes Returns this Variantes.
     */
    public function setType(?string $type): Variantes {
        $this->type = $type;
        return $this;
    }
}
