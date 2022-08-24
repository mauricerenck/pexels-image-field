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
 * Envoi sms fact.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class EnvoiSmsFact {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Msg client.
     *
     * @var string|null
     */
    private $msgClient;

    /**
     * Msg representant.
     *
     * @var string|null
     */
    private $msgRepresentant;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
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
     * Get the msg client.
     *
     * @return string|null Returns the msg client.
     */
    public function getMsgClient(): ?string {
        return $this->msgClient;
    }

    /**
     * Get the msg representant.
     *
     * @return string|null Returns the msg representant.
     */
    public function getMsgRepresentant(): ?string {
        return $this->msgRepresentant;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return EnvoiSmsFact Returns this Envoi sms fact.
     */
    public function setCodeAction(?string $codeAction): EnvoiSmsFact {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return EnvoiSmsFact Returns this Envoi sms fact.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): EnvoiSmsFact {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the msg client.
     *
     * @param string|null $msgClient The msg client.
     * @return EnvoiSmsFact Returns this Envoi sms fact.
     */
    public function setMsgClient(?string $msgClient): EnvoiSmsFact {
        $this->msgClient = $msgClient;
        return $this;
    }

    /**
     * Set the msg representant.
     *
     * @param string|null $msgRepresentant The msg representant.
     * @return EnvoiSmsFact Returns this Envoi sms fact.
     */
    public function setMsgRepresentant(?string $msgRepresentant): EnvoiSmsFact {
        $this->msgRepresentant = $msgRepresentant;
        return $this;
    }
}
