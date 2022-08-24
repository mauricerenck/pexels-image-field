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
 * Historique appels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class HistoriqueAppels {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collaborateur clot.
     *
     * @var string|null
     */
    private $codeCollaborateurClot;

    /**
     * Code collaborateur dest.
     *
     * @var string|null
     */
    private $codeCollaborateurDest;

    /**
     * Code collaborateur entrant.
     *
     * @var string|null
     */
    private $codeCollaborateurEntrant;

    /**
     * Code produit.
     *
     * @var string|null
     */
    private $codeProduit;

    /**
     * Confidentiel.
     *
     * @var bool|null
     */
    private $confidentiel;

    /**
     * Consequence.
     *
     * @var string|null
     */
    private $consequence;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Email auteur.
     *
     * @var string|null
     */
    private $emailAuteur;

    /**
     * Groupe qualifiant.
     *
     * @var string|null
     */
    private $groupeQualifiant;

    /**
     * Id historique.
     *
     * @var int|null
     */
    private $idHistorique;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Nom client.
     *
     * @var string|null
     */
    private $nomClient;

    /**
     * Origine.
     *
     * @var string|null
     */
    private $origine;

    /**
     * Piece jointe.
     *
     * @var string|null
     */
    private $pieceJointe;

    /**
     * Reponse.
     *
     * @var string|null
     */
    private $reponse;

    /**
     * Special.
     *
     * @var string|null
     */
    private $special;

    /**
     * Tel.
     *
     * @var string|null
     */
    private $tel;

    /**
     * Type message.
     *
     * @var string|null
     */
    private $typeMessage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code collaborateur clot.
     *
     * @return string|null Returns the code collaborateur clot.
     */
    public function getCodeCollaborateurClot(): ?string {
        return $this->codeCollaborateurClot;
    }

    /**
     * Get the code collaborateur dest.
     *
     * @return string|null Returns the code collaborateur dest.
     */
    public function getCodeCollaborateurDest(): ?string {
        return $this->codeCollaborateurDest;
    }

    /**
     * Get the code collaborateur entrant.
     *
     * @return string|null Returns the code collaborateur entrant.
     */
    public function getCodeCollaborateurEntrant(): ?string {
        return $this->codeCollaborateurEntrant;
    }

    /**
     * Get the code produit.
     *
     * @return string|null Returns the code produit.
     */
    public function getCodeProduit(): ?string {
        return $this->codeProduit;
    }

    /**
     * Get the confidentiel.
     *
     * @return bool|null Returns the confidentiel.
     */
    public function getConfidentiel(): ?bool {
        return $this->confidentiel;
    }

    /**
     * Get the consequence.
     *
     * @return string|null Returns the consequence.
     */
    public function getConsequence(): ?string {
        return $this->consequence;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree(): ?DateTime {
        return $this->dateEntree;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie(): ?DateTime {
        return $this->dateSortie;
    }

    /**
     * Get the email auteur.
     *
     * @return string|null Returns the email auteur.
     */
    public function getEmailAuteur(): ?string {
        return $this->emailAuteur;
    }

    /**
     * Get the groupe qualifiant.
     *
     * @return string|null Returns the groupe qualifiant.
     */
    public function getGroupeQualifiant(): ?string {
        return $this->groupeQualifiant;
    }

    /**
     * Get the id historique.
     *
     * @return int|null Returns the id historique.
     */
    public function getIdHistorique(): ?int {
        return $this->idHistorique;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
    }

    /**
     * Get the nom client.
     *
     * @return string|null Returns the nom client.
     */
    public function getNomClient(): ?string {
        return $this->nomClient;
    }

    /**
     * Get the origine.
     *
     * @return string|null Returns the origine.
     */
    public function getOrigine(): ?string {
        return $this->origine;
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
     * Get the reponse.
     *
     * @return string|null Returns the reponse.
     */
    public function getReponse(): ?string {
        return $this->reponse;
    }

    /**
     * Get the special.
     *
     * @return string|null Returns the special.
     */
    public function getSpecial(): ?string {
        return $this->special;
    }

    /**
     * Get the tel.
     *
     * @return string|null Returns the tel.
     */
    public function getTel(): ?string {
        return $this->tel;
    }

    /**
     * Get the type message.
     *
     * @return string|null Returns the type message.
     */
    public function getTypeMessage(): ?string {
        return $this->typeMessage;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setCodeClient(?string $codeClient): HistoriqueAppels {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur clot.
     *
     * @param string|null $codeCollaborateurClot The code collaborateur clot.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setCodeCollaborateurClot(?string $codeCollaborateurClot): HistoriqueAppels {
        $this->codeCollaborateurClot = $codeCollaborateurClot;
        return $this;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string|null $codeCollaborateurDest The code collaborateur dest.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setCodeCollaborateurDest(?string $codeCollaborateurDest): HistoriqueAppels {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string|null $codeCollaborateurEntrant The code collaborateur entrant.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setCodeCollaborateurEntrant(?string $codeCollaborateurEntrant): HistoriqueAppels {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }

    /**
     * Set the code produit.
     *
     * @param string|null $codeProduit The code produit.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setCodeProduit(?string $codeProduit): HistoriqueAppels {
        $this->codeProduit = $codeProduit;
        return $this;
    }

    /**
     * Set the confidentiel.
     *
     * @param bool|null $confidentiel The confidentiel.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setConfidentiel(?bool $confidentiel): HistoriqueAppels {
        $this->confidentiel = $confidentiel;
        return $this;
    }

    /**
     * Set the consequence.
     *
     * @param string|null $consequence The consequence.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setConsequence(?string $consequence): HistoriqueAppels {
        $this->consequence = $consequence;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setDateEntree(?DateTime $dateEntree): HistoriqueAppels {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setDateSortie(?DateTime $dateSortie): HistoriqueAppels {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the email auteur.
     *
     * @param string|null $emailAuteur The email auteur.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setEmailAuteur(?string $emailAuteur): HistoriqueAppels {
        $this->emailAuteur = $emailAuteur;
        return $this;
    }

    /**
     * Set the groupe qualifiant.
     *
     * @param string|null $groupeQualifiant The groupe qualifiant.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setGroupeQualifiant(?string $groupeQualifiant): HistoriqueAppels {
        $this->groupeQualifiant = $groupeQualifiant;
        return $this;
    }

    /**
     * Set the id historique.
     *
     * @param int|null $idHistorique The id historique.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setIdHistorique(?int $idHistorique): HistoriqueAppels {
        $this->idHistorique = $idHistorique;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setIntitule(?string $intitule): HistoriqueAppels {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setNature(?string $nature): HistoriqueAppels {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setNomClient(?string $nomClient): HistoriqueAppels {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string|null $origine The origine.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setOrigine(?string $origine): HistoriqueAppels {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string|null $pieceJointe The piece jointe.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setPieceJointe(?string $pieceJointe): HistoriqueAppels {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the reponse.
     *
     * @param string|null $reponse The reponse.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setReponse(?string $reponse): HistoriqueAppels {
        $this->reponse = $reponse;
        return $this;
    }

    /**
     * Set the special.
     *
     * @param string|null $special The special.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setSpecial(?string $special): HistoriqueAppels {
        $this->special = $special;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string|null $tel The tel.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setTel(?string $tel): HistoriqueAppels {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the type message.
     *
     * @param string|null $typeMessage The type message.
     * @return HistoriqueAppels Returns this Historique appels.
     */
    public function setTypeMessage(?string $typeMessage): HistoriqueAppels {
        $this->typeMessage = $typeMessage;
        return $this;
    }
}
