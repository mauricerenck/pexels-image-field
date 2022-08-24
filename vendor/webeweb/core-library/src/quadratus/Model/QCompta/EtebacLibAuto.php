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
 * Etebac lib auto.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class EtebacLibAuto {

    /**
     * Code etebac.
     *
     * @var string|null
     */
    private $codeEtebac;

    /**
     * Code lib auto.
     *
     * @var string|null
     */
    private $codeLibAuto;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etebac.
     *
     * @return string|null Returns the code etebac.
     */
    public function getCodeEtebac(): ?string {
        return $this->codeEtebac;
    }

    /**
     * Get the code lib auto.
     *
     * @return string|null Returns the code lib auto.
     */
    public function getCodeLibAuto(): ?string {
        return $this->codeLibAuto;
    }

    /**
     * Set the code etebac.
     *
     * @param string|null $codeEtebac The code etebac.
     * @return EtebacLibAuto Returns this Etebac lib auto.
     */
    public function setCodeEtebac(?string $codeEtebac): EtebacLibAuto {
        $this->codeEtebac = $codeEtebac;
        return $this;
    }

    /**
     * Set the code lib auto.
     *
     * @param string|null $codeLibAuto The code lib auto.
     * @return EtebacLibAuto Returns this Etebac lib auto.
     */
    public function setCodeLibAuto(?string $codeLibAuto): EtebacLibAuto {
        $this->codeLibAuto = $codeLibAuto;
        return $this;
    }
}
