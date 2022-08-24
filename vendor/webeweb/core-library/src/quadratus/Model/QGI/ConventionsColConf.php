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
 * Conventions col conf.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ConventionsColConf {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Droit.
     *
     * @var string|null
     */
    private $droit;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the droit.
     *
     * @return string|null Returns the droit.
     */
    public function getDroit(): ?string {
        return $this->droit;
    }

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ConventionsColConf Returns this Conventions col conf.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ConventionsColConf {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the droit.
     *
     * @param string|null $droit The droit.
     * @return ConventionsColConf Returns this Conventions col conf.
     */
    public function setDroit(?string $droit): ConventionsColConf {
        $this->droit = $droit;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return ConventionsColConf Returns this Conventions col conf.
     */
    public function setType(?int $type): ConventionsColConf {
        $this->type = $type;
        return $this;
    }
}
