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
 * Obligations.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Obligations {

    /**
     * Code famille.
     *
     * @var string|null
     */
    private $codeFamille;

    /**
     * Code obligation.
     *
     * @var string|null
     */
    private $codeObligation;

    /**
     * Frequence.
     *
     * @var string|null
     */
    private $frequence;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code famille.
     *
     * @return string|null Returns the code famille.
     */
    public function getCodeFamille(): ?string {
        return $this->codeFamille;
    }

    /**
     * Get the code obligation.
     *
     * @return string|null Returns the code obligation.
     */
    public function getCodeObligation(): ?string {
        return $this->codeObligation;
    }

    /**
     * Get the frequence.
     *
     * @return string|null Returns the frequence.
     */
    public function getFrequence(): ?string {
        return $this->frequence;
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
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return Obligations Returns this Obligations.
     */
    public function setCodeFamille(?string $codeFamille): Obligations {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string|null $codeObligation The code obligation.
     * @return Obligations Returns this Obligations.
     */
    public function setCodeObligation(?string $codeObligation): Obligations {
        $this->codeObligation = $codeObligation;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string|null $frequence The frequence.
     * @return Obligations Returns this Obligations.
     */
    public function setFrequence(?string $frequence): Obligations {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Obligations Returns this Obligations.
     */
    public function setIntitule(?string $intitule): Obligations {
        $this->intitule = $intitule;
        return $this;
    }
}
