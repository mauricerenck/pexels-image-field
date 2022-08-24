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
 * Acces web agenda.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AccesWebAgenda {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Droit modif.
     *
     * @var bool|null
     */
    private $droitModif;

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
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
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
     * Get the droit modif.
     *
     * @return bool|null Returns the droit modif.
     */
    public function getDroitModif(): ?bool {
        return $this->droitModif;
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
     * Set the code.
     *
     * @param string|null $code The code.
     * @return AccesWebAgenda Returns this Acces web agenda.
     */
    public function setCode(?string $code): AccesWebAgenda {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AccesWebAgenda Returns this Acces web agenda.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AccesWebAgenda {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the droit modif.
     *
     * @param bool|null $droitModif The droit modif.
     * @return AccesWebAgenda Returns this Acces web agenda.
     */
    public function setDroitModif(?bool $droitModif): AccesWebAgenda {
        $this->droitModif = $droitModif;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AccesWebAgenda Returns this Acces web agenda.
     */
    public function setType(?string $type): AccesWebAgenda {
        $this->type = $type;
        return $this;
    }
}
