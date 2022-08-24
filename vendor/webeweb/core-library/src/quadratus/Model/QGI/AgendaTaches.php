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
 * Agenda taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaTaches {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Liste groupes.
     *
     * @var string|null
     */
    private $listeGroupes;

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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the liste groupes.
     *
     * @return string|null Returns the liste groupes.
     */
    public function getListeGroupes(): ?string {
        return $this->listeGroupes;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return AgendaTaches Returns this Agenda taches.
     */
    public function setCode(?string $code): AgendaTaches {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return AgendaTaches Returns this Agenda taches.
     */
    public function setLibelle(?string $libelle): AgendaTaches {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the liste groupes.
     *
     * @param string|null $listeGroupes The liste groupes.
     * @return AgendaTaches Returns this Agenda taches.
     */
    public function setListeGroupes(?string $listeGroupes): AgendaTaches {
        $this->listeGroupes = $listeGroupes;
        return $this;
    }
}
