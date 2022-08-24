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
 * Categories.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Categories {

    /**
     * Car tec.
     *
     * @var string|null
     */
    private $carTec;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Parent.
     *
     * @var string|null
     */
    private $parent;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the car tec.
     *
     * @return string|null Returns the car tec.
     */
    public function getCarTec(): ?string {
        return $this->carTec;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the parent.
     *
     * @return string|null Returns the parent.
     */
    public function getParent(): ?string {
        return $this->parent;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the car tec.
     *
     * @param string|null $carTec The car tec.
     * @return Categories Returns this Categories.
     */
    public function setCarTec(?string $carTec): Categories {
        $this->carTec = $carTec;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Categories Returns this Categories.
     */
    public function setLibelle(?string $libelle): Categories {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param string|null $parent The parent.
     * @return Categories Returns this Categories.
     */
    public function setParent(?string $parent): Categories {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Categories Returns this Categories.
     */
    public function setType(?string $type): Categories {
        $this->type = $type;
        return $this;
    }
}
