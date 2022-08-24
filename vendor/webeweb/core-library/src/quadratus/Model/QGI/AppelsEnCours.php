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
 * Appels en cours.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AppelsEnCours {

    /**
     * Avec mise en somm.
     *
     * @var bool|null
     */
    private $avecMiseEnSomm;

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
     * Code collaborateur redir.
     *
     * @var string|null
     */
    private $codeCollaborateurRedir;

    /**
     * Code produit.
     *
     * @var string|null
     */
    private $codeProduit;

    /**
     * Compteur temps.
     *
     * @var int|null
     */
    private $compteurTemps;

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
     * Date creation client.
     *
     * @var DateTime|null
     */
    private $dateCreationClient;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date message lu.
     *
     * @var DateTime|null
     */
    private $dateMessageLu;

    /**
     * Date redir.
     *
     * @var DateTime|null
     */
    private $dateRedir;

    /**
     * Demande ar.
     *
     * @var bool|null
     */
    private $demandeAr;

    /**
     * Destinataires a.
     *
     * @var string|null
     */
    private $destinatairesA;

    /**
     * Destinataires cc.
     *
     * @var string|null
     */
    private $destinatairesCc;

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
     * Id appel.
     *
     * @var int|null
     */
    private $idAppel;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Message lu.
     *
     * @var bool|null
     */
    private $messageLu;

    /**
     * Mise en somm date heure.
     *
     * @var DateTime|null
     */
    private $miseEnSommDateHeure;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Nb appels en cours.
     *
     * @var int|null
     */
    private $nbAppelsEnCours;

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
     * Sous rep ref guid.
     *
     * @var string|null
     */
    private $sousRepRefGuid;

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
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Urgent.
     *
     * @var bool|null
     */
    private $urgent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avec mise en somm.
     *
     * @return bool|null Returns the avec mise en somm.
     */
    public function getAvecMiseEnSomm(): ?bool {
        return $this->avecMiseEnSomm;
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
     * Get the code collaborateur redir.
     *
     * @return string|null Returns the code collaborateur redir.
     */
    public function getCodeCollaborateurRedir(): ?string {
        return $this->codeCollaborateurRedir;
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
     * Get the compteur temps.
     *
     * @return int|null Returns the compteur temps.
     */
    public function getCompteurTemps(): ?int {
        return $this->compteurTemps;
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
     * Get the date creation client.
     *
     * @return DateTime|null Returns the date creation client.
     */
    public function getDateCreationClient(): ?DateTime {
        return $this->dateCreationClient;
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
     * Get the date message lu.
     *
     * @return DateTime|null Returns the date message lu.
     */
    public function getDateMessageLu(): ?DateTime {
        return $this->dateMessageLu;
    }

    /**
     * Get the date redir.
     *
     * @return DateTime|null Returns the date redir.
     */
    public function getDateRedir(): ?DateTime {
        return $this->dateRedir;
    }

    /**
     * Get the demande ar.
     *
     * @return bool|null Returns the demande ar.
     */
    public function getDemandeAr(): ?bool {
        return $this->demandeAr;
    }

    /**
     * Get the destinataires a.
     *
     * @return string|null Returns the destinataires a.
     */
    public function getDestinatairesA(): ?string {
        return $this->destinatairesA;
    }

    /**
     * Get the destinataires cc.
     *
     * @return string|null Returns the destinataires cc.
     */
    public function getDestinatairesCc(): ?string {
        return $this->destinatairesCc;
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
     * Get the id appel.
     *
     * @return int|null Returns the id appel.
     */
    public function getIdAppel(): ?int {
        return $this->idAppel;
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
     * Get the message lu.
     *
     * @return bool|null Returns the message lu.
     */
    public function getMessageLu(): ?bool {
        return $this->messageLu;
    }

    /**
     * Get the mise en somm date heure.
     *
     * @return DateTime|null Returns the mise en somm date heure.
     */
    public function getMiseEnSommDateHeure(): ?DateTime {
        return $this->miseEnSommDateHeure;
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
     * Get the nb appels en cours.
     *
     * @return int|null Returns the nb appels en cours.
     */
    public function getNbAppelsEnCours(): ?int {
        return $this->nbAppelsEnCours;
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
     * Get the sous rep ref guid.
     *
     * @return string|null Returns the sous rep ref guid.
     */
    public function getSousRepRefGuid(): ?string {
        return $this->sousRepRefGuid;
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
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Get the urgent.
     *
     * @return bool|null Returns the urgent.
     */
    public function getUrgent(): ?bool {
        return $this->urgent;
    }

    /**
     * Set the avec mise en somm.
     *
     * @param bool|null $avecMiseEnSomm The avec mise en somm.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setAvecMiseEnSomm(?bool $avecMiseEnSomm): AppelsEnCours {
        $this->avecMiseEnSomm = $avecMiseEnSomm;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setCodeClient(?string $codeClient): AppelsEnCours {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string|null $codeCollaborateurDest The code collaborateur dest.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setCodeCollaborateurDest(?string $codeCollaborateurDest): AppelsEnCours {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string|null $codeCollaborateurEntrant The code collaborateur entrant.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setCodeCollaborateurEntrant(?string $codeCollaborateurEntrant): AppelsEnCours {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }

    /**
     * Set the code collaborateur redir.
     *
     * @param string|null $codeCollaborateurRedir The code collaborateur redir.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setCodeCollaborateurRedir(?string $codeCollaborateurRedir): AppelsEnCours {
        $this->codeCollaborateurRedir = $codeCollaborateurRedir;
        return $this;
    }

    /**
     * Set the code produit.
     *
     * @param string|null $codeProduit The code produit.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setCodeProduit(?string $codeProduit): AppelsEnCours {
        $this->codeProduit = $codeProduit;
        return $this;
    }

    /**
     * Set the compteur temps.
     *
     * @param int|null $compteurTemps The compteur temps.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setCompteurTemps(?int $compteurTemps): AppelsEnCours {
        $this->compteurTemps = $compteurTemps;
        return $this;
    }

    /**
     * Set the confidentiel.
     *
     * @param bool|null $confidentiel The confidentiel.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setConfidentiel(?bool $confidentiel): AppelsEnCours {
        $this->confidentiel = $confidentiel;
        return $this;
    }

    /**
     * Set the consequence.
     *
     * @param string|null $consequence The consequence.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setConsequence(?string $consequence): AppelsEnCours {
        $this->consequence = $consequence;
        return $this;
    }

    /**
     * Set the date creation client.
     *
     * @param DateTime|null $dateCreationClient The date creation client.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDateCreationClient(?DateTime $dateCreationClient): AppelsEnCours {
        $this->dateCreationClient = $dateCreationClient;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDateEntree(?DateTime $dateEntree): AppelsEnCours {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date message lu.
     *
     * @param DateTime|null $dateMessageLu The date message lu.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDateMessageLu(?DateTime $dateMessageLu): AppelsEnCours {
        $this->dateMessageLu = $dateMessageLu;
        return $this;
    }

    /**
     * Set the date redir.
     *
     * @param DateTime|null $dateRedir The date redir.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDateRedir(?DateTime $dateRedir): AppelsEnCours {
        $this->dateRedir = $dateRedir;
        return $this;
    }

    /**
     * Set the demande ar.
     *
     * @param bool|null $demandeAr The demande ar.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDemandeAr(?bool $demandeAr): AppelsEnCours {
        $this->demandeAr = $demandeAr;
        return $this;
    }

    /**
     * Set the destinataires a.
     *
     * @param string|null $destinatairesA The destinataires a.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDestinatairesA(?string $destinatairesA): AppelsEnCours {
        $this->destinatairesA = $destinatairesA;
        return $this;
    }

    /**
     * Set the destinataires cc.
     *
     * @param string|null $destinatairesCc The destinataires cc.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setDestinatairesCc(?string $destinatairesCc): AppelsEnCours {
        $this->destinatairesCc = $destinatairesCc;
        return $this;
    }

    /**
     * Set the email auteur.
     *
     * @param string|null $emailAuteur The email auteur.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setEmailAuteur(?string $emailAuteur): AppelsEnCours {
        $this->emailAuteur = $emailAuteur;
        return $this;
    }

    /**
     * Set the groupe qualifiant.
     *
     * @param string|null $groupeQualifiant The groupe qualifiant.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setGroupeQualifiant(?string $groupeQualifiant): AppelsEnCours {
        $this->groupeQualifiant = $groupeQualifiant;
        return $this;
    }

    /**
     * Set the id appel.
     *
     * @param int|null $idAppel The id appel.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setIdAppel(?int $idAppel): AppelsEnCours {
        $this->idAppel = $idAppel;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setIntitule(?string $intitule): AppelsEnCours {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the message lu.
     *
     * @param bool|null $messageLu The message lu.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setMessageLu(?bool $messageLu): AppelsEnCours {
        $this->messageLu = $messageLu;
        return $this;
    }

    /**
     * Set the mise en somm date heure.
     *
     * @param DateTime|null $miseEnSommDateHeure The mise en somm date heure.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setMiseEnSommDateHeure(?DateTime $miseEnSommDateHeure): AppelsEnCours {
        $this->miseEnSommDateHeure = $miseEnSommDateHeure;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setNature(?string $nature): AppelsEnCours {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nb appels en cours.
     *
     * @param int|null $nbAppelsEnCours The nb appels en cours.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setNbAppelsEnCours(?int $nbAppelsEnCours): AppelsEnCours {
        $this->nbAppelsEnCours = $nbAppelsEnCours;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setNomClient(?string $nomClient): AppelsEnCours {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string|null $origine The origine.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setOrigine(?string $origine): AppelsEnCours {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string|null $pieceJointe The piece jointe.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setPieceJointe(?string $pieceJointe): AppelsEnCours {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the reponse.
     *
     * @param string|null $reponse The reponse.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setReponse(?string $reponse): AppelsEnCours {
        $this->reponse = $reponse;
        return $this;
    }

    /**
     * Set the sous rep ref guid.
     *
     * @param string|null $sousRepRefGuid The sous rep ref guid.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setSousRepRefGuid(?string $sousRepRefGuid): AppelsEnCours {
        $this->sousRepRefGuid = $sousRepRefGuid;
        return $this;
    }

    /**
     * Set the special.
     *
     * @param string|null $special The special.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setSpecial(?string $special): AppelsEnCours {
        $this->special = $special;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string|null $tel The tel.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setTel(?string $tel): AppelsEnCours {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the type message.
     *
     * @param string|null $typeMessage The type message.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setTypeMessage(?string $typeMessage): AppelsEnCours {
        $this->typeMessage = $typeMessage;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setUniqId(?string $uniqId): AppelsEnCours {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the urgent.
     *
     * @param bool|null $urgent The urgent.
     * @return AppelsEnCours Returns this Appels en cours.
     */
    public function setUrgent(?bool $urgent): AppelsEnCours {
        $this->urgent = $urgent;
        return $this;
    }
}
