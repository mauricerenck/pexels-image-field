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
 * e ws espace.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class eWsEspace {

    /**
     * Num doss.
     *
     * @var string|null
     */
    private $numDoss;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the num doss.
     *
     * @return string|null Returns the num doss.
     */
    public function getNumDoss(): ?string {
        return $this->numDoss;
    }

    /**
     * Set the num doss.
     *
     * @param string|null $numDoss The num doss.
     * @return eWsEspace Returns this e ws espace.
     */
    public function setNumDoss(?string $numDoss): eWsEspace {
        $this->numDoss = $numDoss;
        return $this;
    }
}
