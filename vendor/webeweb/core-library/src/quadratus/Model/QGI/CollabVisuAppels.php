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
 * Collab visu appels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CollabVisuAppels {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Code collab visu.
     *
     * @var string|null
     */
    private $codeCollabVisu;

    /**
     * Type code.
     *
     * @var string|null
     */
    private $typeCode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the code collab visu.
     *
     * @return string|null Returns the code collab visu.
     */
    public function getCodeCollabVisu(): ?string {
        return $this->codeCollabVisu;
    }

    /**
     * Get the type code.
     *
     * @return string|null Returns the type code.
     */
    public function getTypeCode(): ?string {
        return $this->typeCode;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return CollabVisuAppels Returns this Collab visu appels.
     */
    public function setCodeCollab(?string $codeCollab): CollabVisuAppels {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code collab visu.
     *
     * @param string|null $codeCollabVisu The code collab visu.
     * @return CollabVisuAppels Returns this Collab visu appels.
     */
    public function setCodeCollabVisu(?string $codeCollabVisu): CollabVisuAppels {
        $this->codeCollabVisu = $codeCollabVisu;
        return $this;
    }

    /**
     * Set the type code.
     *
     * @param string|null $typeCode The type code.
     * @return CollabVisuAppels Returns this Collab visu appels.
     */
    public function setTypeCode(?string $typeCode): CollabVisuAppels {
        $this->typeCode = $typeCode;
        return $this;
    }
}
