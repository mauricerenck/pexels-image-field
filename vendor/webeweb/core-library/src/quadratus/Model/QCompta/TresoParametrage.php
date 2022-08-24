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
 * Treso parametrage.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class TresoParametrage {

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Regle.
     *
     * @var string|null
     */
    private $regle;

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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the regle.
     *
     * @return string|null Returns the regle.
     */
    public function getRegle(): ?string {
        return $this->regle;
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
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TresoParametrage Returns this Treso parametrage.
     */
    public function setLibelle(?string $libelle): TresoParametrage {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param string|null $regle The regle.
     * @return TresoParametrage Returns this Treso parametrage.
     */
    public function setRegle(?string $regle): TresoParametrage {
        $this->regle = $regle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return TresoParametrage Returns this Treso parametrage.
     */
    public function setType(?string $type): TresoParametrage {
        $this->type = $type;
        return $this;
    }
}
