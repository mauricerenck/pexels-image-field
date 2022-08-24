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
 * Actions co suivi.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoSuivi {

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
     * Confirmes.
     *
     * @var int|null
     */
    private $confirmes;

    /**
     * Contrat.
     *
     * @var int|null
     */
    private $contrat;

    /**
     * Inscrits.
     *
     * @var int|null
     */
    private $inscrits;

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
     * Presents.
     *
     * @var int|null
     */
    private $presents;

    /**
     * Prise rdv.
     *
     * @var int|null
     */
    private $priseRdv;

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
     * Get the confirmes.
     *
     * @return int|null Returns the confirmes.
     */
    public function getConfirmes(): ?int {
        return $this->confirmes;
    }

    /**
     * Get the contrat.
     *
     * @return int|null Returns the contrat.
     */
    public function getContrat(): ?int {
        return $this->contrat;
    }

    /**
     * Get the inscrits.
     *
     * @return int|null Returns the inscrits.
     */
    public function getInscrits(): ?int {
        return $this->inscrits;
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
     * Get the presents.
     *
     * @return int|null Returns the presents.
     */
    public function getPresents(): ?int {
        return $this->presents;
    }

    /**
     * Get the prise rdv.
     *
     * @return int|null Returns the prise rdv.
     */
    public function getPriseRdv(): ?int {
        return $this->priseRdv;
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
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setCodeAction(?string $codeAction): ActionsCoSuivi {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setCodeClient(?string $codeClient): ActionsCoSuivi {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string|null $codeManif The code manif.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setCodeManif(?string $codeManif): ActionsCoSuivi {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the confirmes.
     *
     * @param int|null $confirmes The confirmes.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setConfirmes(?int $confirmes): ActionsCoSuivi {
        $this->confirmes = $confirmes;
        return $this;
    }

    /**
     * Set the contrat.
     *
     * @param int|null $contrat The contrat.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setContrat(?int $contrat): ActionsCoSuivi {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * Set the inscrits.
     *
     * @param int|null $inscrits The inscrits.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setInscrits(?int $inscrits): ActionsCoSuivi {
        $this->inscrits = $inscrits;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int|null $numInterlocuteur The num interlocuteur.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setNumInterlocuteur(?int $numInterlocuteur): ActionsCoSuivi {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int|null $numSeance The num seance.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setNumSeance(?int $numSeance): ActionsCoSuivi {
        $this->numSeance = $numSeance;
        return $this;
    }

    /**
     * Set the presents.
     *
     * @param int|null $presents The presents.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setPresents(?int $presents): ActionsCoSuivi {
        $this->presents = $presents;
        return $this;
    }

    /**
     * Set the prise rdv.
     *
     * @param int|null $priseRdv The prise rdv.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setPriseRdv(?int $priseRdv): ActionsCoSuivi {
        $this->priseRdv = $priseRdv;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string|null $typeInvite The type invite.
     * @return ActionsCoSuivi Returns this Actions co suivi.
     */
    public function setTypeInvite(?string $typeInvite): ActionsCoSuivi {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
