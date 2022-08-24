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
 * Agenda groupes compos.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaGroupesCompos {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code groupe.
     *
     * @var string|null
     */
    private $codeGroupe;

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
     * Get the code groupe.
     *
     * @return string|null Returns the code groupe.
     */
    public function getCodeGroupe(): ?string {
        return $this->codeGroupe;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AgendaGroupesCompos Returns this Agenda groupes compos.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AgendaGroupesCompos {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code groupe.
     *
     * @param string|null $codeGroupe The code groupe.
     * @return AgendaGroupesCompos Returns this Agenda groupes compos.
     */
    public function setCodeGroupe(?string $codeGroupe): AgendaGroupesCompos {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }
}
