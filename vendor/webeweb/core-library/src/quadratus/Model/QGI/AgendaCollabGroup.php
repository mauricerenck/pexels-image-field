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
 * Agenda collab group.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaCollabGroup {

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
     * Num lig.
     *
     * @var int|null
     */
    private $numLig;

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
     * Get the num lig.
     *
     * @return int|null Returns the num lig.
     */
    public function getNumLig(): ?int {
        return $this->numLig;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AgendaCollabGroup Returns this Agenda collab group.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AgendaCollabGroup {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code groupe.
     *
     * @param string|null $codeGroupe The code groupe.
     * @return AgendaCollabGroup Returns this Agenda collab group.
     */
    public function setCodeGroupe(?string $codeGroupe): AgendaCollabGroup {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }

    /**
     * Set the num lig.
     *
     * @param int|null $numLig The num lig.
     * @return AgendaCollabGroup Returns this Agenda collab group.
     */
    public function setNumLig(?int $numLig): AgendaCollabGroup {
        $this->numLig = $numLig;
        return $this;
    }
}
