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

use DateTime;

/**
 * i collaborateurs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iCollaborateurs {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Numi key.
     *
     * @var string|null
     */
    private $numiKey;

    /**
     * Password.
     *
     * @var string|null
     */
    private $password;

    /**
     * Valide a.
     *
     * @var DateTime|null
     */
    private $valideA;

    /**
     * Valide de.
     *
     * @var DateTime|null
     */
    private $valideDe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the numi key.
     *
     * @return string|null Returns the numi key.
     */
    public function getNumiKey(): ?string {
        return $this->numiKey;
    }

    /**
     * Get the password.
     *
     * @return string|null Returns the password.
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Get the valide a.
     *
     * @return DateTime|null Returns the valide a.
     */
    public function getValideA(): ?DateTime {
        return $this->valideA;
    }

    /**
     * Get the valide de.
     *
     * @return DateTime|null Returns the valide de.
     */
    public function getValideDe(): ?DateTime {
        return $this->valideDe;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setCodeCollab(?string $codeCollab): iCollaborateurs {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string|null $numiKey The numi key.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setNumiKey(?string $numiKey): iCollaborateurs {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string|null $password The password.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setPassword(?string $password): iCollaborateurs {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the valide a.
     *
     * @param DateTime|null $valideA The valide a.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setValideA(?DateTime $valideA): iCollaborateurs {
        $this->valideA = $valideA;
        return $this;
    }

    /**
     * Set the valide de.
     *
     * @param DateTime|null $valideDe The valide de.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setValideDe(?DateTime $valideDe): iCollaborateurs {
        $this->valideDe = $valideDe;
        return $this;
    }
}
