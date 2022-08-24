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
 * Budget t.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class BudgetT {

    /**
     * Code assistant juridique.
     *
     * @var string|null
     */
    private $codeAssistantJuridique;

    /**
     * Code assistant social.
     *
     * @var string|null
     */
    private $codeAssistantSocial;

    /**
     * Code autre1.
     *
     * @var string|null
     */
    private $codeAutre1;

    /**
     * Code autre2.
     *
     * @var string|null
     */
    private $codeAutre2;

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
     * Code expert.
     *
     * @var string|null
     */
    private $codeExpert;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code portefeuille.
     *
     * @var string|null
     */
    private $codePortefeuille;

    /**
     * Collab auteur.
     *
     * @var string|null
     */
    private $collabAuteur;

    /**
     * Collab valideur.
     *
     * @var string|null
     */
    private $collabValideur;

    /**
     * Comment1.
     *
     * @var string|null
     */
    private $comment1;

    /**
     * Comment2.
     *
     * @var string|null
     */
    private $comment2;

    /**
     * Comment3.
     *
     * @var string|null
     */
    private $comment3;

    /**
     * Comment4.
     *
     * @var string|null
     */
    private $comment4;

    /**
     * Comment5.
     *
     * @var string|null
     */
    private $comment5;

    /**
     * Comment6.
     *
     * @var string|null
     */
    private $comment6;

    /**
     * Comment7.
     *
     * @var string|null
     */
    private $comment7;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date valid.
     *
     * @var DateTime|null
     */
    private $dateValid;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Hono prev.
     *
     * @var float|null
     */
    private $honoPrev;

    /**
     * Libelle1.
     *
     * @var string|null
     */
    private $libelle1;

    /**
     * Libelle2.
     *
     * @var string|null
     */
    private $libelle2;

    /**
     * Libelle3.
     *
     * @var string|null
     */
    private $libelle3;

    /**
     * Libelle4.
     *
     * @var string|null
     */
    private $libelle4;

    /**
     * Libelle5.
     *
     * @var string|null
     */
    private $libelle5;

    /**
     * Libelle6.
     *
     * @var string|null
     */
    private $libelle6;

    /**
     * Libelle7.
     *
     * @var string|null
     */
    private $libelle7;

    /**
     * Nbr bulletins.
     *
     * @var int|null
     */
    private $nbrBulletins;

    /**
     * Nbr ecritures.
     *
     * @var int|null
     */
    private $nbrEcritures;

    /**
     * Nbr heures.
     *
     * @var float|null
     */
    private $nbrHeures;

    /**
     * Prix1.
     *
     * @var float|null
     */
    private $prix1;

    /**
     * Prix2.
     *
     * @var float|null
     */
    private $prix2;

    /**
     * Prix3.
     *
     * @var float|null
     */
    private $prix3;

    /**
     * Prix4.
     *
     * @var float|null
     */
    private $prix4;

    /**
     * Prix5.
     *
     * @var float|null
     */
    private $prix5;

    /**
     * Prix6.
     *
     * @var float|null
     */
    private $prix6;

    /**
     * Prix7.
     *
     * @var float|null
     */
    private $prix7;

    /**
     * Saisie tache.
     *
     * @var bool|null
     */
    private $saisieTache;

    /**
     * Type suivi.
     *
     * @var string|null
     */
    private $typeSuivi;

    /**
     * Valo recap.
     *
     * @var int|null
     */
    private $valoRecap;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code assistant juridique.
     *
     * @return string|null Returns the code assistant juridique.
     */
    public function getCodeAssistantJuridique(): ?string {
        return $this->codeAssistantJuridique;
    }

    /**
     * Get the code assistant social.
     *
     * @return string|null Returns the code assistant social.
     */
    public function getCodeAssistantSocial(): ?string {
        return $this->codeAssistantSocial;
    }

    /**
     * Get the code autre1.
     *
     * @return string|null Returns the code autre1.
     */
    public function getCodeAutre1(): ?string {
        return $this->codeAutre1;
    }

    /**
     * Get the code autre2.
     *
     * @return string|null Returns the code autre2.
     */
    public function getCodeAutre2(): ?string {
        return $this->codeAutre2;
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
     * Get the code expert.
     *
     * @return string|null Returns the code expert.
     */
    public function getCodeExpert(): ?string {
        return $this->codeExpert;
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
     * Get the code portefeuille.
     *
     * @return string|null Returns the code portefeuille.
     */
    public function getCodePortefeuille(): ?string {
        return $this->codePortefeuille;
    }

    /**
     * Get the collab auteur.
     *
     * @return string|null Returns the collab auteur.
     */
    public function getCollabAuteur(): ?string {
        return $this->collabAuteur;
    }

    /**
     * Get the collab valideur.
     *
     * @return string|null Returns the collab valideur.
     */
    public function getCollabValideur(): ?string {
        return $this->collabValideur;
    }

    /**
     * Get the comment1.
     *
     * @return string|null Returns the comment1.
     */
    public function getComment1(): ?string {
        return $this->comment1;
    }

    /**
     * Get the comment2.
     *
     * @return string|null Returns the comment2.
     */
    public function getComment2(): ?string {
        return $this->comment2;
    }

    /**
     * Get the comment3.
     *
     * @return string|null Returns the comment3.
     */
    public function getComment3(): ?string {
        return $this->comment3;
    }

    /**
     * Get the comment4.
     *
     * @return string|null Returns the comment4.
     */
    public function getComment4(): ?string {
        return $this->comment4;
    }

    /**
     * Get the comment5.
     *
     * @return string|null Returns the comment5.
     */
    public function getComment5(): ?string {
        return $this->comment5;
    }

    /**
     * Get the comment6.
     *
     * @return string|null Returns the comment6.
     */
    public function getComment6(): ?string {
        return $this->comment6;
    }

    /**
     * Get the comment7.
     *
     * @return string|null Returns the comment7.
     */
    public function getComment7(): ?string {
        return $this->comment7;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date valid.
     *
     * @return DateTime|null Returns the date valid.
     */
    public function getDateValid(): ?DateTime {
        return $this->dateValid;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the hono prev.
     *
     * @return float|null Returns the hono prev.
     */
    public function getHonoPrev(): ?float {
        return $this->honoPrev;
    }

    /**
     * Get the libelle1.
     *
     * @return string|null Returns the libelle1.
     */
    public function getLibelle1(): ?string {
        return $this->libelle1;
    }

    /**
     * Get the libelle2.
     *
     * @return string|null Returns the libelle2.
     */
    public function getLibelle2(): ?string {
        return $this->libelle2;
    }

    /**
     * Get the libelle3.
     *
     * @return string|null Returns the libelle3.
     */
    public function getLibelle3(): ?string {
        return $this->libelle3;
    }

    /**
     * Get the libelle4.
     *
     * @return string|null Returns the libelle4.
     */
    public function getLibelle4(): ?string {
        return $this->libelle4;
    }

    /**
     * Get the libelle5.
     *
     * @return string|null Returns the libelle5.
     */
    public function getLibelle5(): ?string {
        return $this->libelle5;
    }

    /**
     * Get the libelle6.
     *
     * @return string|null Returns the libelle6.
     */
    public function getLibelle6(): ?string {
        return $this->libelle6;
    }

    /**
     * Get the libelle7.
     *
     * @return string|null Returns the libelle7.
     */
    public function getLibelle7(): ?string {
        return $this->libelle7;
    }

    /**
     * Get the nbr bulletins.
     *
     * @return int|null Returns the nbr bulletins.
     */
    public function getNbrBulletins(): ?int {
        return $this->nbrBulletins;
    }

    /**
     * Get the nbr ecritures.
     *
     * @return int|null Returns the nbr ecritures.
     */
    public function getNbrEcritures(): ?int {
        return $this->nbrEcritures;
    }

    /**
     * Get the nbr heures.
     *
     * @return float|null Returns the nbr heures.
     */
    public function getNbrHeures(): ?float {
        return $this->nbrHeures;
    }

    /**
     * Get the prix1.
     *
     * @return float|null Returns the prix1.
     */
    public function getPrix1(): ?float {
        return $this->prix1;
    }

    /**
     * Get the prix2.
     *
     * @return float|null Returns the prix2.
     */
    public function getPrix2(): ?float {
        return $this->prix2;
    }

    /**
     * Get the prix3.
     *
     * @return float|null Returns the prix3.
     */
    public function getPrix3(): ?float {
        return $this->prix3;
    }

    /**
     * Get the prix4.
     *
     * @return float|null Returns the prix4.
     */
    public function getPrix4(): ?float {
        return $this->prix4;
    }

    /**
     * Get the prix5.
     *
     * @return float|null Returns the prix5.
     */
    public function getPrix5(): ?float {
        return $this->prix5;
    }

    /**
     * Get the prix6.
     *
     * @return float|null Returns the prix6.
     */
    public function getPrix6(): ?float {
        return $this->prix6;
    }

    /**
     * Get the prix7.
     *
     * @return float|null Returns the prix7.
     */
    public function getPrix7(): ?float {
        return $this->prix7;
    }

    /**
     * Get the saisie tache.
     *
     * @return bool|null Returns the saisie tache.
     */
    public function getSaisieTache(): ?bool {
        return $this->saisieTache;
    }

    /**
     * Get the type suivi.
     *
     * @return string|null Returns the type suivi.
     */
    public function getTypeSuivi(): ?string {
        return $this->typeSuivi;
    }

    /**
     * Get the valo recap.
     *
     * @return int|null Returns the valo recap.
     */
    public function getValoRecap(): ?int {
        return $this->valoRecap;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string|null $codeAssistantJuridique The code assistant juridique.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeAssistantJuridique(?string $codeAssistantJuridique): BudgetT {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string|null $codeAssistantSocial The code assistant social.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeAssistantSocial(?string $codeAssistantSocial): BudgetT {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string|null $codeAutre1 The code autre1.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeAutre1(?string $codeAutre1): BudgetT {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string|null $codeAutre2 The code autre2.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeAutre2(?string $codeAutre2): BudgetT {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeClient(?string $codeClient): BudgetT {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): BudgetT {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code expert.
     *
     * @param string|null $codeExpert The code expert.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeExpert(?string $codeExpert): BudgetT {
        $this->codeExpert = $codeExpert;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodeMission(?string $codeMission): BudgetT {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string|null $codePortefeuille The code portefeuille.
     * @return BudgetT Returns this Budget t.
     */
    public function setCodePortefeuille(?string $codePortefeuille): BudgetT {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }

    /**
     * Set the collab auteur.
     *
     * @param string|null $collabAuteur The collab auteur.
     * @return BudgetT Returns this Budget t.
     */
    public function setCollabAuteur(?string $collabAuteur): BudgetT {
        $this->collabAuteur = $collabAuteur;
        return $this;
    }

    /**
     * Set the collab valideur.
     *
     * @param string|null $collabValideur The collab valideur.
     * @return BudgetT Returns this Budget t.
     */
    public function setCollabValideur(?string $collabValideur): BudgetT {
        $this->collabValideur = $collabValideur;
        return $this;
    }

    /**
     * Set the comment1.
     *
     * @param string|null $comment1 The comment1.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment1(?string $comment1): BudgetT {
        $this->comment1 = $comment1;
        return $this;
    }

    /**
     * Set the comment2.
     *
     * @param string|null $comment2 The comment2.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment2(?string $comment2): BudgetT {
        $this->comment2 = $comment2;
        return $this;
    }

    /**
     * Set the comment3.
     *
     * @param string|null $comment3 The comment3.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment3(?string $comment3): BudgetT {
        $this->comment3 = $comment3;
        return $this;
    }

    /**
     * Set the comment4.
     *
     * @param string|null $comment4 The comment4.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment4(?string $comment4): BudgetT {
        $this->comment4 = $comment4;
        return $this;
    }

    /**
     * Set the comment5.
     *
     * @param string|null $comment5 The comment5.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment5(?string $comment5): BudgetT {
        $this->comment5 = $comment5;
        return $this;
    }

    /**
     * Set the comment6.
     *
     * @param string|null $comment6 The comment6.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment6(?string $comment6): BudgetT {
        $this->comment6 = $comment6;
        return $this;
    }

    /**
     * Set the comment7.
     *
     * @param string|null $comment7 The comment7.
     * @return BudgetT Returns this Budget t.
     */
    public function setComment7(?string $comment7): BudgetT {
        $this->comment7 = $comment7;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return BudgetT Returns this Budget t.
     */
    public function setDateDebut(?DateTime $dateDebut): BudgetT {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date valid.
     *
     * @param DateTime|null $dateValid The date valid.
     * @return BudgetT Returns this Budget t.
     */
    public function setDateValid(?DateTime $dateValid): BudgetT {
        $this->dateValid = $dateValid;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return BudgetT Returns this Budget t.
     */
    public function setEtat(?string $etat): BudgetT {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the hono prev.
     *
     * @param float|null $honoPrev The hono prev.
     * @return BudgetT Returns this Budget t.
     */
    public function setHonoPrev(?float $honoPrev): BudgetT {
        $this->honoPrev = $honoPrev;
        return $this;
    }

    /**
     * Set the libelle1.
     *
     * @param string|null $libelle1 The libelle1.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle1(?string $libelle1): BudgetT {
        $this->libelle1 = $libelle1;
        return $this;
    }

    /**
     * Set the libelle2.
     *
     * @param string|null $libelle2 The libelle2.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle2(?string $libelle2): BudgetT {
        $this->libelle2 = $libelle2;
        return $this;
    }

    /**
     * Set the libelle3.
     *
     * @param string|null $libelle3 The libelle3.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle3(?string $libelle3): BudgetT {
        $this->libelle3 = $libelle3;
        return $this;
    }

    /**
     * Set the libelle4.
     *
     * @param string|null $libelle4 The libelle4.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle4(?string $libelle4): BudgetT {
        $this->libelle4 = $libelle4;
        return $this;
    }

    /**
     * Set the libelle5.
     *
     * @param string|null $libelle5 The libelle5.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle5(?string $libelle5): BudgetT {
        $this->libelle5 = $libelle5;
        return $this;
    }

    /**
     * Set the libelle6.
     *
     * @param string|null $libelle6 The libelle6.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle6(?string $libelle6): BudgetT {
        $this->libelle6 = $libelle6;
        return $this;
    }

    /**
     * Set the libelle7.
     *
     * @param string|null $libelle7 The libelle7.
     * @return BudgetT Returns this Budget t.
     */
    public function setLibelle7(?string $libelle7): BudgetT {
        $this->libelle7 = $libelle7;
        return $this;
    }

    /**
     * Set the nbr bulletins.
     *
     * @param int|null $nbrBulletins The nbr bulletins.
     * @return BudgetT Returns this Budget t.
     */
    public function setNbrBulletins(?int $nbrBulletins): BudgetT {
        $this->nbrBulletins = $nbrBulletins;
        return $this;
    }

    /**
     * Set the nbr ecritures.
     *
     * @param int|null $nbrEcritures The nbr ecritures.
     * @return BudgetT Returns this Budget t.
     */
    public function setNbrEcritures(?int $nbrEcritures): BudgetT {
        $this->nbrEcritures = $nbrEcritures;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float|null $nbrHeures The nbr heures.
     * @return BudgetT Returns this Budget t.
     */
    public function setNbrHeures(?float $nbrHeures): BudgetT {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the prix1.
     *
     * @param float|null $prix1 The prix1.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix1(?float $prix1): BudgetT {
        $this->prix1 = $prix1;
        return $this;
    }

    /**
     * Set the prix2.
     *
     * @param float|null $prix2 The prix2.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix2(?float $prix2): BudgetT {
        $this->prix2 = $prix2;
        return $this;
    }

    /**
     * Set the prix3.
     *
     * @param float|null $prix3 The prix3.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix3(?float $prix3): BudgetT {
        $this->prix3 = $prix3;
        return $this;
    }

    /**
     * Set the prix4.
     *
     * @param float|null $prix4 The prix4.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix4(?float $prix4): BudgetT {
        $this->prix4 = $prix4;
        return $this;
    }

    /**
     * Set the prix5.
     *
     * @param float|null $prix5 The prix5.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix5(?float $prix5): BudgetT {
        $this->prix5 = $prix5;
        return $this;
    }

    /**
     * Set the prix6.
     *
     * @param float|null $prix6 The prix6.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix6(?float $prix6): BudgetT {
        $this->prix6 = $prix6;
        return $this;
    }

    /**
     * Set the prix7.
     *
     * @param float|null $prix7 The prix7.
     * @return BudgetT Returns this Budget t.
     */
    public function setPrix7(?float $prix7): BudgetT {
        $this->prix7 = $prix7;
        return $this;
    }

    /**
     * Set the saisie tache.
     *
     * @param bool|null $saisieTache The saisie tache.
     * @return BudgetT Returns this Budget t.
     */
    public function setSaisieTache(?bool $saisieTache): BudgetT {
        $this->saisieTache = $saisieTache;
        return $this;
    }

    /**
     * Set the type suivi.
     *
     * @param string|null $typeSuivi The type suivi.
     * @return BudgetT Returns this Budget t.
     */
    public function setTypeSuivi(?string $typeSuivi): BudgetT {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }

    /**
     * Set the valo recap.
     *
     * @param int|null $valoRecap The valo recap.
     * @return BudgetT Returns this Budget t.
     */
    public function setValoRecap(?int $valoRecap): BudgetT {
        $this->valoRecap = $valoRecap;
        return $this;
    }
}
