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
 * Clients favoris.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsFavoris {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code col.
     *
     * @var string|null
     */
    private $codeCol;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code col.
     *
     * @return string|null Returns the code col.
     */
    public function getCodeCol(): ?string {
        return $this->codeCol;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ClientsFavoris Returns this Clients favoris.
     */
    public function setCodeClient(?string $codeClient): ClientsFavoris {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string|null $codeCol The code col.
     * @return ClientsFavoris Returns this Clients favoris.
     */
    public function setCodeCol(?string $codeCol): ClientsFavoris {
        $this->codeCol = $codeCol;
        return $this;
    }
}
