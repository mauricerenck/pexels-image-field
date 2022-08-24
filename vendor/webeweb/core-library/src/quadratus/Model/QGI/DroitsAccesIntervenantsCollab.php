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
 * Droits acces intervenants collab.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class DroitsAccesIntervenantsCollab {

    /**
     * Acces libre.
     *
     * @var bool|null
     */
    private $accesLibre;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Type intervenant.
     *
     * @var string|null
     */
    private $typeIntervenant;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the acces libre.
     *
     * @return bool|null Returns the acces libre.
     */
    public function getAccesLibre(): ?bool {
        return $this->accesLibre;
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
     * Get the type intervenant.
     *
     * @return string|null Returns the type intervenant.
     */
    public function getTypeIntervenant(): ?string {
        return $this->typeIntervenant;
    }

    /**
     * Set the acces libre.
     *
     * @param bool|null $accesLibre The acces libre.
     * @return DroitsAccesIntervenantsCollab Returns this Droits acces intervenants collab.
     */
    public function setAccesLibre(?bool $accesLibre): DroitsAccesIntervenantsCollab {
        $this->accesLibre = $accesLibre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return DroitsAccesIntervenantsCollab Returns this Droits acces intervenants collab.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): DroitsAccesIntervenantsCollab {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the type intervenant.
     *
     * @param string|null $typeIntervenant The type intervenant.
     * @return DroitsAccesIntervenantsCollab Returns this Droits acces intervenants collab.
     */
    public function setTypeIntervenant(?string $typeIntervenant): DroitsAccesIntervenantsCollab {
        $this->typeIntervenant = $typeIntervenant;
        return $this;
    }
}
