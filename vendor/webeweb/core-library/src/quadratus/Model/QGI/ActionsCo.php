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
 * Actions co.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCo {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date fin vie.
     *
     * @var DateTime|null
     */
    private $dateFinVie;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle memo.
     *
     * @var string|null
     */
    private $libelleMemo;

    /**
     * Op confirmation.
     *
     * @var bool|null
     */
    private $opConfirmation;

    /**
     * Op contrat signe.
     *
     * @var bool|null
     */
    private $opContratSigne;

    /**
     * Op explication.
     *
     * @var bool|null
     */
    private $opExplication;

    /**
     * Op invitation indiv.
     *
     * @var bool|null
     */
    private $opInvitationIndiv;

    /**
     * Op invitation masse.
     *
     * @var bool|null
     */
    private $opInvitationMasse;

    /**
     * Op presence.
     *
     * @var bool|null
     */
    private $opPresence;

    /**
     * Op prise rdv.
     *
     * @var bool|null
     */
    private $opPriseRdv;

    /**
     * Op relance.
     *
     * @var bool|null
     */
    private $opRelance;

    /**
     * Op reponse inscrip.
     *
     * @var bool|null
     */
    private $opReponseInscrip;

    /**
     * Op reponse negative.
     *
     * @var bool|null
     */
    private $opReponseNegative;

    /**
     * Op reservation.
     *
     * @var bool|null
     */
    private $opReservation;

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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date fin vie.
     *
     * @return DateTime|null Returns the date fin vie.
     */
    public function getDateFinVie(): ?DateTime {
        return $this->dateFinVie;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
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
     * Get the libelle memo.
     *
     * @return string|null Returns the libelle memo.
     */
    public function getLibelleMemo(): ?string {
        return $this->libelleMemo;
    }

    /**
     * Get the op confirmation.
     *
     * @return bool|null Returns the op confirmation.
     */
    public function getOpConfirmation(): ?bool {
        return $this->opConfirmation;
    }

    /**
     * Get the op contrat signe.
     *
     * @return bool|null Returns the op contrat signe.
     */
    public function getOpContratSigne(): ?bool {
        return $this->opContratSigne;
    }

    /**
     * Get the op explication.
     *
     * @return bool|null Returns the op explication.
     */
    public function getOpExplication(): ?bool {
        return $this->opExplication;
    }

    /**
     * Get the op invitation indiv.
     *
     * @return bool|null Returns the op invitation indiv.
     */
    public function getOpInvitationIndiv(): ?bool {
        return $this->opInvitationIndiv;
    }

    /**
     * Get the op invitation masse.
     *
     * @return bool|null Returns the op invitation masse.
     */
    public function getOpInvitationMasse(): ?bool {
        return $this->opInvitationMasse;
    }

    /**
     * Get the op presence.
     *
     * @return bool|null Returns the op presence.
     */
    public function getOpPresence(): ?bool {
        return $this->opPresence;
    }

    /**
     * Get the op prise rdv.
     *
     * @return bool|null Returns the op prise rdv.
     */
    public function getOpPriseRdv(): ?bool {
        return $this->opPriseRdv;
    }

    /**
     * Get the op relance.
     *
     * @return bool|null Returns the op relance.
     */
    public function getOpRelance(): ?bool {
        return $this->opRelance;
    }

    /**
     * Get the op reponse inscrip.
     *
     * @return bool|null Returns the op reponse inscrip.
     */
    public function getOpReponseInscrip(): ?bool {
        return $this->opReponseInscrip;
    }

    /**
     * Get the op reponse negative.
     *
     * @return bool|null Returns the op reponse negative.
     */
    public function getOpReponseNegative(): ?bool {
        return $this->opReponseNegative;
    }

    /**
     * Get the op reservation.
     *
     * @return bool|null Returns the op reservation.
     */
    public function getOpReservation(): ?bool {
        return $this->opReservation;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return ActionsCo Returns this Actions co.
     */
    public function setCode(?string $code): ActionsCo {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return ActionsCo Returns this Actions co.
     */
    public function setDateCreation(?DateTime $dateCreation): ActionsCo {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date fin vie.
     *
     * @param DateTime|null $dateFinVie The date fin vie.
     * @return ActionsCo Returns this Actions co.
     */
    public function setDateFinVie(?DateTime $dateFinVie): ActionsCo {
        $this->dateFinVie = $dateFinVie;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return ActionsCo Returns this Actions co.
     */
    public function setDateModification(?DateTime $dateModification): ActionsCo {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ActionsCo Returns this Actions co.
     */
    public function setLibelle(?string $libelle): ActionsCo {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle memo.
     *
     * @param string|null $libelleMemo The libelle memo.
     * @return ActionsCo Returns this Actions co.
     */
    public function setLibelleMemo(?string $libelleMemo): ActionsCo {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }

    /**
     * Set the op confirmation.
     *
     * @param bool|null $opConfirmation The op confirmation.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpConfirmation(?bool $opConfirmation): ActionsCo {
        $this->opConfirmation = $opConfirmation;
        return $this;
    }

    /**
     * Set the op contrat signe.
     *
     * @param bool|null $opContratSigne The op contrat signe.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpContratSigne(?bool $opContratSigne): ActionsCo {
        $this->opContratSigne = $opContratSigne;
        return $this;
    }

    /**
     * Set the op explication.
     *
     * @param bool|null $opExplication The op explication.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpExplication(?bool $opExplication): ActionsCo {
        $this->opExplication = $opExplication;
        return $this;
    }

    /**
     * Set the op invitation indiv.
     *
     * @param bool|null $opInvitationIndiv The op invitation indiv.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpInvitationIndiv(?bool $opInvitationIndiv): ActionsCo {
        $this->opInvitationIndiv = $opInvitationIndiv;
        return $this;
    }

    /**
     * Set the op invitation masse.
     *
     * @param bool|null $opInvitationMasse The op invitation masse.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpInvitationMasse(?bool $opInvitationMasse): ActionsCo {
        $this->opInvitationMasse = $opInvitationMasse;
        return $this;
    }

    /**
     * Set the op presence.
     *
     * @param bool|null $opPresence The op presence.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpPresence(?bool $opPresence): ActionsCo {
        $this->opPresence = $opPresence;
        return $this;
    }

    /**
     * Set the op prise rdv.
     *
     * @param bool|null $opPriseRdv The op prise rdv.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpPriseRdv(?bool $opPriseRdv): ActionsCo {
        $this->opPriseRdv = $opPriseRdv;
        return $this;
    }

    /**
     * Set the op relance.
     *
     * @param bool|null $opRelance The op relance.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpRelance(?bool $opRelance): ActionsCo {
        $this->opRelance = $opRelance;
        return $this;
    }

    /**
     * Set the op reponse inscrip.
     *
     * @param bool|null $opReponseInscrip The op reponse inscrip.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpReponseInscrip(?bool $opReponseInscrip): ActionsCo {
        $this->opReponseInscrip = $opReponseInscrip;
        return $this;
    }

    /**
     * Set the op reponse negative.
     *
     * @param bool|null $opReponseNegative The op reponse negative.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpReponseNegative(?bool $opReponseNegative): ActionsCo {
        $this->opReponseNegative = $opReponseNegative;
        return $this;
    }

    /**
     * Set the op reservation.
     *
     * @param bool|null $opReservation The op reservation.
     * @return ActionsCo Returns this Actions co.
     */
    public function setOpReservation(?bool $opReservation): ActionsCo {
        $this->opReservation = $opReservation;
        return $this;
    }
}
