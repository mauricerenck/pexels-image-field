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
 * Enchainement semaines.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class EnchainementSemaines {

    /**
     * Discr sem.
     *
     * @var int|null
     */
    private $discrSem;

    /**
     * Num ordre.
     *
     * @var int|null
     */
    private $numOrdre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the discr sem.
     *
     * @return int|null Returns the discr sem.
     */
    public function getDiscrSem(): ?int {
        return $this->discrSem;
    }

    /**
     * Get the num ordre.
     *
     * @return int|null Returns the num ordre.
     */
    public function getNumOrdre(): ?int {
        return $this->numOrdre;
    }

    /**
     * Set the discr sem.
     *
     * @param int|null $discrSem The discr sem.
     * @return EnchainementSemaines Returns this Enchainement semaines.
     */
    public function setDiscrSem(?int $discrSem): EnchainementSemaines {
        $this->discrSem = $discrSem;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int|null $numOrdre The num ordre.
     * @return EnchainementSemaines Returns this Enchainement semaines.
     */
    public function setNumOrdre(?int $numOrdre): EnchainementSemaines {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
