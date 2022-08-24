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
 * Constantes majorations.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstantesMajorations {

    /**
     * Except.
     *
     * @var float|null
     */
    private $except;

    /**
     * Mai.
     *
     * @var float|null
     */
    private $mai;

    /**
     * Normal.
     *
     * @var float|null
     */
    private $normal;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Type2.
     *
     * @var float|null
     */
    private $type2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the except.
     *
     * @return float|null Returns the except.
     */
    public function getExcept(): ?float {
        return $this->except;
    }

    /**
     * Get the mai.
     *
     * @return float|null Returns the mai.
     */
    public function getMai(): ?float {
        return $this->mai;
    }

    /**
     * Get the normal.
     *
     * @return float|null Returns the normal.
     */
    public function getNormal(): ?float {
        return $this->normal;
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
     * Get the type2.
     *
     * @return float|null Returns the type2.
     */
    public function getType2(): ?float {
        return $this->type2;
    }

    /**
     * Set the except.
     *
     * @param float|null $except The except.
     * @return ConstantesMajorations Returns this Constantes majorations.
     */
    public function setExcept(?float $except): ConstantesMajorations {
        $this->except = $except;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param float|null $mai The mai.
     * @return ConstantesMajorations Returns this Constantes majorations.
     */
    public function setMai(?float $mai): ConstantesMajorations {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the normal.
     *
     * @param float|null $normal The normal.
     * @return ConstantesMajorations Returns this Constantes majorations.
     */
    public function setNormal(?float $normal): ConstantesMajorations {
        $this->normal = $normal;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ConstantesMajorations Returns this Constantes majorations.
     */
    public function setType(?string $type): ConstantesMajorations {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type2.
     *
     * @param float|null $type2 The type2.
     * @return ConstantesMajorations Returns this Constantes majorations.
     */
    public function setType2(?float $type2): ConstantesMajorations {
        $this->type2 = $type2;
        return $this;
    }
}
