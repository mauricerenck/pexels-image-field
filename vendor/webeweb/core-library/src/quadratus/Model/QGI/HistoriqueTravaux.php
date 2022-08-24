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
 * Historique travaux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class HistoriqueTravaux {

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
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Demandeur.
     *
     * @var string|null
     */
    private $demandeur;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

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
     * Reponse.
     *
     * @var string|null
     */
    private $reponse;

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
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie(): ?DateTime {
        return $this->dateSortie;
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
     * Get the duree.
     *
     * @return int|null Returns the duree.
     */
    public function getDuree(): ?int {
        return $this->duree;
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
     * Get the reponse.
     *
     * @return string|null Returns the reponse.
     */
    public function getReponse(): ?string {
        return $this->reponse;
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
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setCataloguee(?bool $cataloguee): HistoriqueTravaux {
        $this->cataloguee = $cataloguee;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setCodeClient(?string $codeClient): HistoriqueTravaux {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur clot.
     *
     * @param string|null $codeCollaborateurClot The code collaborateur clot.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setCodeCollaborateurClot(?string $codeCollaborateurClot): HistoriqueTravaux {
        $this->codeCollaborateurClot = $codeCollaborateurClot;
        return $this;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string|null $codeCollaborateurDest The code collaborateur dest.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setCodeCollaborateurDest(?string $codeCollaborateurDest): HistoriqueTravaux {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string|null $codeCollaborateurEntrant The code collaborateur entrant.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setCodeCollaborateurEntrant(?string $codeCollaborateurEntrant): HistoriqueTravaux {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }

    /**
     * Set the date alerte.
     *
     * @param DateTime|null $dateAlerte The date alerte.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setDateAlerte(?DateTime $dateAlerte): HistoriqueTravaux {
        $this->dateAlerte = $dateAlerte;
        return $this;
    }

    /**
     * Set the date butoir.
     *
     * @param DateTime|null $dateButoir The date butoir.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setDateButoir(?DateTime $dateButoir): HistoriqueTravaux {
        $this->dateButoir = $dateButoir;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setDateEntree(?DateTime $dateEntree): HistoriqueTravaux {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setDateSortie(?DateTime $dateSortie): HistoriqueTravaux {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the demandeur.
     *
     * @param string|null $demandeur The demandeur.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setDemandeur(?string $demandeur): HistoriqueTravaux {
        $this->demandeur = $demandeur;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setDuree(?int $duree): HistoriqueTravaux {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the id travail.
     *
     * @param int|null $idTravail The id travail.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setIdTravail(?int $idTravail): HistoriqueTravaux {
        $this->idTravail = $idTravail;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setIntitule(?string $intitule): HistoriqueTravaux {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setNomClient(?string $nomClient): HistoriqueTravaux {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string|null $pieceJointe The piece jointe.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setPieceJointe(?string $pieceJointe): HistoriqueTravaux {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the reponse.
     *
     * @param string|null $reponse The reponse.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setReponse(?string $reponse): HistoriqueTravaux {
        $this->reponse = $reponse;
        return $this;
    }

    /**
     * Set the travail fait.
     *
     * @param bool|null $travailFait The travail fait.
     * @return HistoriqueTravaux Returns this Historique travaux.
     */
    public function setTravailFait(?bool $travailFait): HistoriqueTravaux {
        $this->travailFait = $travailFait;
        return $this;
    }
}
