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
 * Actions co invites.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoInvites {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code coll.
     *
     * @var string|null
     */
    private $codeColl;

    /**
     * Date ajout.
     *
     * @var DateTime|null
     */
    private $dateAjout;

    /**
     * Nom interlocuteur.
     *
     * @var string|null
     */
    private $nomInterlocuteur;

    /**
     * Num interlocuteur.
     *
     * @var int|null
     */
    private $numInterlocuteur;

    /**
     * Retour neg.
     *
     * @var bool|null
     */
    private $retourNeg;

    /**
     * Type invitation.
     *
     * @var int|null
     */
    private $typeInvitation;

    /**
     * Type invite.
     *
     * @var string|null
     */
    private $typeInvite;

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
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
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
     * Get the date ajout.
     *
     * @return DateTime|null Returns the date ajout.
     */
    public function getDateAjout(): ?DateTime {
        return $this->dateAjout;
    }

    /**
     * Get the nom interlocuteur.
     *
     * @return string|null Returns the nom interlocuteur.
     */
    public function getNomInterlocuteur(): ?string {
        return $this->nomInterlocuteur;
    }

    /**
     * Get the num interlocuteur.
     *
     * @return int|null Returns the num interlocuteur.
     */
    public function getNumInterlocuteur(): ?int {
        return $this->numInterlocuteur;
    }

    /**
     * Get the retour neg.
     *
     * @return bool|null Returns the retour neg.
     */
    public function getRetourNeg(): ?bool {
        return $this->retourNeg;
    }

    /**
     * Get the type invitation.
     *
     * @return int|null Returns the type invitation.
     */
    public function getTypeInvitation(): ?int {
        return $this->typeInvitation;
    }

    /**
     * Get the type invite.
     *
     * @return string|null Returns the type invite.
     */
    public function getTypeInvite(): ?string {
        return $this->typeInvite;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setCodeAction(?string $codeAction): ActionsCoInvites {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setCodeClient(?string $codeClient): ActionsCoInvites {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code coll.
     *
     * @param string|null $codeColl The code coll.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setCodeColl(?string $codeColl): ActionsCoInvites {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the date ajout.
     *
     * @param DateTime|null $dateAjout The date ajout.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setDateAjout(?DateTime $dateAjout): ActionsCoInvites {
        $this->dateAjout = $dateAjout;
        return $this;
    }

    /**
     * Set the nom interlocuteur.
     *
     * @param string|null $nomInterlocuteur The nom interlocuteur.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setNomInterlocuteur(?string $nomInterlocuteur): ActionsCoInvites {
        $this->nomInterlocuteur = $nomInterlocuteur;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int|null $numInterlocuteur The num interlocuteur.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setNumInterlocuteur(?int $numInterlocuteur): ActionsCoInvites {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the retour neg.
     *
     * @param bool|null $retourNeg The retour neg.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setRetourNeg(?bool $retourNeg): ActionsCoInvites {
        $this->retourNeg = $retourNeg;
        return $this;
    }

    /**
     * Set the type invitation.
     *
     * @param int|null $typeInvitation The type invitation.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setTypeInvitation(?int $typeInvitation): ActionsCoInvites {
        $this->typeInvitation = $typeInvitation;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string|null $typeInvite The type invite.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setTypeInvite(?string $typeInvite): ActionsCoInvites {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
