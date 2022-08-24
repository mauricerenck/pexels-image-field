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
 * Chapitres documents.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ChapitresDocuments {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Nom repertoire.
     *
     * @var string|null
     */
    private $nomRepertoire;

    /**
     * Position.
     *
     * @var int|null
     */
    private $position;

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
     * Get the nom repertoire.
     *
     * @return string|null Returns the nom repertoire.
     */
    public function getNomRepertoire(): ?string {
        return $this->nomRepertoire;
    }

    /**
     * Get the position.
     *
     * @return int|null Returns the position.
     */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return ChapitresDocuments Returns this Chapitres documents.
     */
    public function setCode(?string $code): ChapitresDocuments {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the nom repertoire.
     *
     * @param string|null $nomRepertoire The nom repertoire.
     * @return ChapitresDocuments Returns this Chapitres documents.
     */
    public function setNomRepertoire(?string $nomRepertoire): ChapitresDocuments {
        $this->nomRepertoire = $nomRepertoire;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return ChapitresDocuments Returns this Chapitres documents.
     */
    public function setPosition(?int $position): ChapitresDocuments {
        $this->position = $position;
        return $this;
    }
}
