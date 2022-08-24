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
 * Agenda lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaLignes {

    /**
     * Budget num uniq.
     *
     * @var string|null
     */
    private $budgetNumUniq;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Coll creation.
     *
     * @var string|null
     */
    private $collCreation;

    /**
     * Coll modif.
     *
     * @var string|null
     */
    private $collModif;

    /**
     * Confirme.
     *
     * @var bool|null
     */
    private $confirme;

    /**
     * Critere libre.
     *
     * @var string|null
     */
    private $critereLibre;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Heure debut.
     *
     * @var DateTime|null
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Interlocuteur.
     *
     * @var string|null
     */
    private $interlocuteur;

    /**
     * Is tache tp.
     *
     * @var int|null
     */
    private $isTacheTp;

    /**
     * Is transf.
     *
     * @var bool|null
     */
    private $isTransf;

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Memo plus.
     *
     * @var string|null
     */
    private $memoPlus;

    /**
     * Message.
     *
     * @var string|null
     */
    private $message;

    /**
     * Num ordre mission.
     *
     * @var string|null
     */
    private $numOrdreMission;

    /**
     * Num uniq.
     *
     * @var string|null
     */
    private $numUniq;

    /**
     * Num uniq2.
     *
     * @var string|null
     */
    private $numUniq2;

    /**
     * Piece jointe.
     *
     * @var string|null
     */
    private $pieceJointe;

    /**
     * Prive.
     *
     * @var bool|null
     */
    private $prive;

    /**
     * Recurrence.
     *
     * @var string|null
     */
    private $recurrence;

    /**
     * Type activite.
     *
     * @var string|null
     */
    private $typeActivite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the budget num uniq.
     *
     * @return string|null Returns the budget num uniq.
     */
    public function getBudgetNumUniq(): ?string {
        return $this->budgetNumUniq;
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the coll creation.
     *
     * @return string|null Returns the coll creation.
     */
    public function getCollCreation(): ?string {
        return $this->collCreation;
    }

    /**
     * Get the coll modif.
     *
     * @return string|null Returns the coll modif.
     */
    public function getCollModif(): ?string {
        return $this->collModif;
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
     * Get the critere libre.
     *
     * @return string|null Returns the critere libre.
     */
    public function getCritereLibre(): ?string {
        return $this->critereLibre;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime|null Returns the heure debut.
     */
    public function getHeureDebut(): ?DateTime {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin(): ?DateTime {
        return $this->heureFin;
    }

    /**
     * Get the interlocuteur.
     *
     * @return string|null Returns the interlocuteur.
     */
    public function getInterlocuteur(): ?string {
        return $this->interlocuteur;
    }

    /**
     * Get the is tache tp.
     *
     * @return int|null Returns the is tache tp.
     */
    public function getIsTacheTp(): ?int {
        return $this->isTacheTp;
    }

    /**
     * Get the is transf.
     *
     * @return bool|null Returns the is transf.
     */
    public function getIsTransf(): ?bool {
        return $this->isTransf;
    }

    /**
     * Get the jour.
     *
     * @return DateTime|null Returns the jour.
     */
    public function getJour(): ?DateTime {
        return $this->jour;
    }

    /**
     * Get the memo plus.
     *
     * @return string|null Returns the memo plus.
     */
    public function getMemoPlus(): ?string {
        return $this->memoPlus;
    }

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Get the num ordre mission.
     *
     * @return string|null Returns the num ordre mission.
     */
    public function getNumOrdreMission(): ?string {
        return $this->numOrdreMission;
    }

    /**
     * Get the num uniq.
     *
     * @return string|null Returns the num uniq.
     */
    public function getNumUniq(): ?string {
        return $this->numUniq;
    }

    /**
     * Get the num uniq2.
     *
     * @return string|null Returns the num uniq2.
     */
    public function getNumUniq2(): ?string {
        return $this->numUniq2;
    }

    /**
     * Get the piece jointe.
     *
     * @return string|null Returns the piece jointe.
     */
    public function getPieceJointe(): ?string {
        return $this->pieceJointe;
    }

    /**
     * Get the prive.
     *
     * @return bool|null Returns the prive.
     */
    public function getPrive(): ?bool {
        return $this->prive;
    }

    /**
     * Get the recurrence.
     *
     * @return string|null Returns the recurrence.
     */
    public function getRecurrence(): ?string {
        return $this->recurrence;
    }

    /**
     * Get the type activite.
     *
     * @return string|null Returns the type activite.
     */
    public function getTypeActivite(): ?string {
        return $this->typeActivite;
    }

    /**
     * Set the budget num uniq.
     *
     * @param string|null $budgetNumUniq The budget num uniq.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setBudgetNumUniq(?string $budgetNumUniq): AgendaLignes {
        $this->budgetNumUniq = $budgetNumUniq;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCodeClient(?string $codeClient): AgendaLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AgendaLignes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCodeMission(?string $codeMission): AgendaLignes {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCodeTache(?string $codeTache): AgendaLignes {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the coll creation.
     *
     * @param string|null $collCreation The coll creation.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCollCreation(?string $collCreation): AgendaLignes {
        $this->collCreation = $collCreation;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string|null $collModif The coll modif.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCollModif(?string $collModif): AgendaLignes {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the confirme.
     *
     * @param bool|null $confirme The confirme.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setConfirme(?bool $confirme): AgendaLignes {
        $this->confirme = $confirme;
        return $this;
    }

    /**
     * Set the critere libre.
     *
     * @param string|null $critereLibre The critere libre.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setCritereLibre(?string $critereLibre): AgendaLignes {
        $this->critereLibre = $critereLibre;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setDateCreation(?DateTime $dateCreation): AgendaLignes {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setDateModif(?DateTime $dateModif): AgendaLignes {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime|null $heureDebut The heure debut.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setHeureDebut(?DateTime $heureDebut): AgendaLignes {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setHeureFin(?DateTime $heureFin): AgendaLignes {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the interlocuteur.
     *
     * @param string|null $interlocuteur The interlocuteur.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setInterlocuteur(?string $interlocuteur): AgendaLignes {
        $this->interlocuteur = $interlocuteur;
        return $this;
    }

    /**
     * Set the is tache tp.
     *
     * @param int|null $isTacheTp The is tache tp.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setIsTacheTp(?int $isTacheTp): AgendaLignes {
        $this->isTacheTp = $isTacheTp;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param bool|null $isTransf The is transf.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setIsTransf(?bool $isTransf): AgendaLignes {
        $this->isTransf = $isTransf;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param DateTime|null $jour The jour.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setJour(?DateTime $jour): AgendaLignes {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the memo plus.
     *
     * @param string|null $memoPlus The memo plus.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setMemoPlus(?string $memoPlus): AgendaLignes {
        $this->memoPlus = $memoPlus;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string|null $message The message.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setMessage(?string $message): AgendaLignes {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the num ordre mission.
     *
     * @param string|null $numOrdreMission The num ordre mission.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setNumOrdreMission(?string $numOrdreMission): AgendaLignes {
        $this->numOrdreMission = $numOrdreMission;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string|null $numUniq The num uniq.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setNumUniq(?string $numUniq): AgendaLignes {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the num uniq2.
     *
     * @param string|null $numUniq2 The num uniq2.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setNumUniq2(?string $numUniq2): AgendaLignes {
        $this->numUniq2 = $numUniq2;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string|null $pieceJointe The piece jointe.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setPieceJointe(?string $pieceJointe): AgendaLignes {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the prive.
     *
     * @param bool|null $prive The prive.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setPrive(?bool $prive): AgendaLignes {
        $this->prive = $prive;
        return $this;
    }

    /**
     * Set the recurrence.
     *
     * @param string|null $recurrence The recurrence.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setRecurrence(?string $recurrence): AgendaLignes {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * Set the type activite.
     *
     * @param string|null $typeActivite The type activite.
     * @return AgendaLignes Returns this Agenda lignes.
     */
    public function setTypeActivite(?string $typeActivite): AgendaLignes {
        $this->typeActivite = $typeActivite;
        return $this;
    }
}
