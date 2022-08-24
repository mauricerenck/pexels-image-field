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
 * Reglements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Reglements {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule2.
     *
     * @var string|null
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string|null
     */
    private $intitule3;

    /**
     * Type acceptation.
     *
     * @var string|null
     */
    private $typeAcceptation;

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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the intitule2.
     *
     * @return string|null Returns the intitule2.
     */
    public function getIntitule2(): ?string {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string|null Returns the intitule3.
     */
    public function getIntitule3(): ?string {
        return $this->intitule3;
    }

    /**
     * Get the type acceptation.
     *
     * @return string|null Returns the type acceptation.
     */
    public function getTypeAcceptation(): ?string {
        return $this->typeAcceptation;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Reglements Returns this Reglements.
     */
    public function setCode(?string $code): Reglements {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Reglements Returns this Reglements.
     */
    public function setIntitule(?string $intitule): Reglements {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string|null $intitule2 The intitule2.
     * @return Reglements Returns this Reglements.
     */
    public function setIntitule2(?string $intitule2): Reglements {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string|null $intitule3 The intitule3.
     * @return Reglements Returns this Reglements.
     */
    public function setIntitule3(?string $intitule3): Reglements {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the type acceptation.
     *
     * @param string|null $typeAcceptation The type acceptation.
     * @return Reglements Returns this Reglements.
     */
    public function setTypeAcceptation(?string $typeAcceptation): Reglements {
        $this->typeAcceptation = $typeAcceptation;
        return $this;
    }
}
