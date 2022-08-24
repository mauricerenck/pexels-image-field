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
 * Agenda droits acces.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaDroitsAcces {

    /**
     * Code coll droit.
     *
     * @var string|null
     */
    private $codeCollDroit;

    /**
     * Code coll suivi.
     *
     * @var string|null
     */
    private $codeCollSuivi;

    /**
     * Niveau droit.
     *
     * @var string|null
     */
    private $niveauDroit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code coll droit.
     *
     * @return string|null Returns the code coll droit.
     */
    public function getCodeCollDroit(): ?string {
        return $this->codeCollDroit;
    }

    /**
     * Get the code coll suivi.
     *
     * @return string|null Returns the code coll suivi.
     */
    public function getCodeCollSuivi(): ?string {
        return $this->codeCollSuivi;
    }

    /**
     * Get the niveau droit.
     *
     * @return string|null Returns the niveau droit.
     */
    public function getNiveauDroit(): ?string {
        return $this->niveauDroit;
    }

    /**
     * Set the code coll droit.
     *
     * @param string|null $codeCollDroit The code coll droit.
     * @return AgendaDroitsAcces Returns this Agenda droits acces.
     */
    public function setCodeCollDroit(?string $codeCollDroit): AgendaDroitsAcces {
        $this->codeCollDroit = $codeCollDroit;
        return $this;
    }

    /**
     * Set the code coll suivi.
     *
     * @param string|null $codeCollSuivi The code coll suivi.
     * @return AgendaDroitsAcces Returns this Agenda droits acces.
     */
    public function setCodeCollSuivi(?string $codeCollSuivi): AgendaDroitsAcces {
        $this->codeCollSuivi = $codeCollSuivi;
        return $this;
    }

    /**
     * Set the niveau droit.
     *
     * @param string|null $niveauDroit The niveau droit.
     * @return AgendaDroitsAcces Returns this Agenda droits acces.
     */
    public function setNiveauDroit(?string $niveauDroit): AgendaDroitsAcces {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }
}
