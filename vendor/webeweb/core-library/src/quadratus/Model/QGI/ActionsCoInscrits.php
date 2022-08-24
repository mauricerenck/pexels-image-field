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
 * Actions co inscrits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoInscrits {

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
     * Code manif.
     *
     * @var string|null
     */
    private $codeManif;

    /**
     * Confirme.
     *
     * @var bool|null
     */
    private $confirme;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Num interlocuteur.
     *
     * @var int|null
     */
    private $numInterlocuteur;

    /**
     * Num seance.
     *
     * @var int|null
     */
    private $numSeance;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Present.
     *
     * @var bool|null
     */
    private $present;

    /**
     * Telephone.
     *
     * @var string|null
     */
    private $telephone;

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
     * Get the code manif.
     *
     * @return string|null Returns the code manif.
     */
    public function getCodeManif(): ?string {
        return $this->codeManif;
    }

    /**
     * Get the confirme.
     *
     * @return bool|null Returns the confirme.
     */
    public function getConfirme(): ?bool {
        return $this->confirme;
    }

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
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
     * Get the num seance.
     *
     * @return int|null Returns the num seance.
     */
    public function getNumSeance(): ?int {
        return $this->numSeance;
    }

    /**
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the present.
     *
     * @return bool|null Returns the present.
     */
    public function getPresent(): ?bool {
        return $this->present;
    }

    /**
     * Get the telephone.
     *
     * @return string|null Returns the telephone.
     */
    public function getTelephone(): ?string {
        return $this->telephone;
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
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setCodeAction(?string $codeAction): ActionsCoInscrits {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setCodeClient(?string $codeClient): ActionsCoInscrits {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string|null $codeManif The code manif.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setCodeManif(?string $codeManif): ActionsCoInscrits {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the confirme.
     *
     * @param bool|null $confirme The confirme.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setConfirme(?bool $confirme): ActionsCoInscrits {
        $this->confirme = $confirme;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setEmail(?string $email): ActionsCoInscrits {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setFax(?string $fax): ActionsCoInscrits {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNom(?string $nom): ActionsCoInscrits {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int|null $numInterlocuteur The num interlocuteur.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNumInterlocuteur(?int $numInterlocuteur): ActionsCoInscrits {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int|null $numSeance The num seance.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNumSeance(?int $numSeance): ActionsCoInscrits {
        $this->numSeance = $numSeance;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNumero(?int $numero): ActionsCoInscrits {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setPrenom(?string $prenom): ActionsCoInscrits {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the present.
     *
     * @param bool|null $present The present.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setPresent(?bool $present): ActionsCoInscrits {
        $this->present = $present;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string|null $telephone The telephone.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setTelephone(?string $telephone): ActionsCoInscrits {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string|null $typeInvite The type invite.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setTypeInvite(?string $typeInvite): ActionsCoInscrits {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
