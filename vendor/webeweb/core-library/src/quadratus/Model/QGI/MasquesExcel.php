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
 * Masques excel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class MasquesExcel {

    /**
     * Modele.
     *
     * @var string|null
     */
    private $modele;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Type masque.
     *
     * @var string|null
     */
    private $typeMasque;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the modele.
     *
     * @return string|null Returns the modele.
     */
    public function getModele(): ?string {
        return $this->modele;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the type masque.
     *
     * @return string|null Returns the type masque.
     */
    public function getTypeMasque(): ?string {
        return $this->typeMasque;
    }

    /**
     * Set the modele.
     *
     * @param string|null $modele The modele.
     * @return MasquesExcel Returns this Masques excel.
     */
    public function setModele(?string $modele): MasquesExcel {
        $this->modele = $modele;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return MasquesExcel Returns this Masques excel.
     */
    public function setTitre(?string $titre): MasquesExcel {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the type masque.
     *
     * @param string|null $typeMasque The type masque.
     * @return MasquesExcel Returns this Masques excel.
     */
    public function setTypeMasque(?string $typeMasque): MasquesExcel {
        $this->typeMasque = $typeMasque;
        return $this;
    }
}
