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
 * Cle repartition lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class CleRepartitionLignes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Valeur.
     *
     * @var float|null
     */
    private $valeur;

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
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the valeur.
     *
     * @return float|null Returns the valeur.
     */
    public function getValeur(): ?float {
        return $this->valeur;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return CleRepartitionLignes Returns this Cle repartition lignes.
     */
    public function setCode(?string $code): CleRepartitionLignes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return CleRepartitionLignes Returns this Cle repartition lignes.
     */
    public function setCodeCentre(?string $codeCentre): CleRepartitionLignes {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return CleRepartitionLignes Returns this Cle repartition lignes.
     */
    public function setNumLigne(?int $numLigne): CleRepartitionLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return CleRepartitionLignes Returns this Cle repartition lignes.
     */
    public function setValeur(?float $valeur): CleRepartitionLignes {
        $this->valeur = $valeur;
        return $this;
    }
}
