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
 * Filtre lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FiltreLignes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

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
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return FiltreLignes Returns this Filtre lignes.
     */
    public function setCode(?string $code): FiltreLignes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return FiltreLignes Returns this Filtre lignes.
     */
    public function setUniqId(?string $uniqId): FiltreLignes {
        $this->uniqId = $uniqId;
        return $this;
    }
}
