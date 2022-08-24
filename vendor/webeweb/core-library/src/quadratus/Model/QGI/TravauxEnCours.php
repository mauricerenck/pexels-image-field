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
 * Travaux en cours.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TravauxEnCours {

    /**
     * Cataloguee.
     *
     * @var bool|null
     */
    private $cataloguee;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

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
     * Date alerte.
     *
     * @var DateTime|null
     */
    private $dateAlerte;

    /**
     * Date butoir.
     *
     * @var DateTime|null
     */
    private $dateButoir;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Demandeur.
     *
     * @var string|null
     */
    private $demandeur;

    /**
     * Envoi post it.
     *
     * @var bool|null
     */
    private $envoiPostIt;

    /**
     * Id travail.
     *
     * @var int|null
     */
    private $idTravail;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Nom client.
     *
     * @var string|null
     */
    private $nomClient;

    /**
     * Piece jointe.
     *
     * @var string|null
     */
    private $pieceJointe;

    /**
     * Travail fait.
     *
     * @var bool|null
     */
    private $travailFait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the cataloguee.
     *
     * @return bool|null Returns the cataloguee.
     */
    public function getCataloguee(): ?bool {
        return $this->cataloguee;
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
     * Get the date alerte.
     *
     * @return DateTime|null Returns the date alerte.
     */
    public function getDateAlerte(): ?DateTime {
        return $this->dateAlerte;
    }

    /**
     * Get the date butoir.
     *
     * @return DateTime|null Returns the date butoir.
     */
    public function getDateButoir(): ?DateTime {
        return $this->dateButoir;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the demandeur.
     *
     * @return string|null Returns the demandeur.
     */
    public function getDemandeur(): ?string {
        return $this->demandeur;
    }

    /**
     * Get the envoi post it.
     *
     * @return bool|null Returns the envoi post it.
     */
    public function getEnvoiPostIt(): ?bool {
        return $this->envoiPostIt;
    }

    /**
     * Get the id travail.
     *
     * @return int|null Returns the id travail.
     */
    public function getIdTravail(): ?int {
        return $this->idTravail;
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
     * Get the nom client.
     *
     * @return string|null Returns the nom client.
     */
    public function getNomClient(): ?string {
        return $this->nomClient;
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
     * Get the travail fait.
     *
     * @return bool|null Returns the travail fait.
     */
    public function getTravailFait(): ?bool {
        return $this->travailFait;
    }

    /**
     * Set the cataloguee.
     *
     * @param bool|null $cataloguee The cataloguee.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setCataloguee(?bool $cataloguee): TravauxEnCours {
        $this->cataloguee = $cataloguee;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setCodeClient(?string $codeClient): TravauxEnCours {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string|null $codeCollaborateurDest The code collaborateur dest.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setCodeCollaborateurDest(?string $codeCollaborateurDest): TravauxEnCours {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string|null $codeCollaborateurEntrant The code collaborateur entrant.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setCodeCollaborateurEntrant(?string $codeCollaborateurEntrant): TravauxEnCours {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }

    /**
     * Set the date alerte.
     *
     * @param DateTime|null $dateAlerte The date alerte.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setDateAlerte(?DateTime $dateAlerte): TravauxEnCours {
        $this->dateAlerte = $dateAlerte;
        return $this;
    }

    /**
     * Set the date butoir.
     *
     * @param DateTime|null $dateButoir The date butoir.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setDateButoir(?DateTime $dateButoir): TravauxEnCours {
        $this->dateButoir = $dateButoir;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setDateEntree(?DateTime $dateEntree): TravauxEnCours {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setDateModif(?DateTime $dateModif): TravauxEnCours {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the demandeur.
     *
     * @param string|null $demandeur The demandeur.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setDemandeur(?string $demandeur): TravauxEnCours {
        $this->demandeur = $demandeur;
        return $this;
    }

    /**
     * Set the envoi post it.
     *
     * @param bool|null $envoiPostIt The envoi post it.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setEnvoiPostIt(?bool $envoiPostIt): TravauxEnCours {
        $this->envoiPostIt = $envoiPostIt;
        return $this;
    }

    /**
     * Set the id travail.
     *
     * @param int|null $idTravail The id travail.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setIdTravail(?int $idTravail): TravauxEnCours {
        $this->idTravail = $idTravail;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setIntitule(?string $intitule): TravauxEnCours {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setNomClient(?string $nomClient): TravauxEnCours {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string|null $pieceJointe The piece jointe.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setPieceJointe(?string $pieceJointe): TravauxEnCours {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the travail fait.
     *
     * @param bool|null $travailFait The travail fait.
     * @return TravauxEnCours Returns this Travaux en cours.
     */
    public function setTravailFait(?bool $travailFait): TravauxEnCours {
        $this->travailFait = $travailFait;
        return $this;
    }
}
