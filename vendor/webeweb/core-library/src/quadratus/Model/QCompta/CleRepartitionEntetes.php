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
 * Cle repartition entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class CleRepartitionEntetes {

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
     * Total.
     *
     * @var float|null
     */
    private $total;

    /**
     * Type cle.
     *
     * @var string|null
     */
    private $typeCle;

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
     * Get the total.
     *
     * @return float|null Returns the total.
     */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Get the type cle.
     *
     * @return string|null Returns the type cle.
     */
    public function getTypeCle(): ?string {
        return $this->typeCle;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return CleRepartitionEntetes Returns this Cle repartition entetes.
     */
    public function setCode(?string $code): CleRepartitionEntetes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return CleRepartitionEntetes Returns this Cle repartition entetes.
     */
    public function setLibelle(?string $libelle): CleRepartitionEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param float|null $total The total.
     * @return CleRepartitionEntetes Returns this Cle repartition entetes.
     */
    public function setTotal(?float $total): CleRepartitionEntetes {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the type cle.
     *
     * @param string|null $typeCle The type cle.
     * @return CleRepartitionEntetes Returns this Cle repartition entetes.
     */
    public function setTypeCle(?string $typeCle): CleRepartitionEntetes {
        $this->typeCle = $typeCle;
        return $this;
    }
}
