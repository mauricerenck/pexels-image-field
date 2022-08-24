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
 * Agenda groupes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaGroupes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code coll.
     *
     * @var string|null
     */
    private $codeColl;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

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
     * Get the code coll.
     *
     * @return string|null Returns the code coll.
     */
    public function getCodeColl(): ?string {
        return $this->codeColl;
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
     * Set the code.
     *
     * @param string|null $code The code.
     * @return AgendaGroupes Returns this Agenda groupes.
     */
    public function setCode(?string $code): AgendaGroupes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code coll.
     *
     * @param string|null $codeColl The code coll.
     * @return AgendaGroupes Returns this Agenda groupes.
     */
    public function setCodeColl(?string $codeColl): AgendaGroupes {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return AgendaGroupes Returns this Agenda groupes.
     */
    public function setLibelle(?string $libelle): AgendaGroupes {
        $this->libelle = $libelle;
        return $this;
    }
}
