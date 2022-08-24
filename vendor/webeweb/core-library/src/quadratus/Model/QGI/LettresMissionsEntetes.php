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
 * Lettres missions entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LettresMissionsEntetes {

    /**
     * Ca.
     *
     * @var float|null
     */
    private $ca;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

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
     * Date entretien.
     *
     * @var DateTime|null
     */
    private $dateEntretien;

    /**
     * Date signature.
     *
     * @var DateTime|null
     */
    private $dateSignature;

    /**
     * Debut mission.
     *
     * @var DateTime|null
     */
    private $debutMission;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Exercice courant.
     *
     * @var string|null
     */
    private $exerciceCourant;

    /**
     * Fin mission.
     *
     * @var DateTime|null
     */
    private $finMission;

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
     * Nb deplacements.
     *
     * @var string|null
     */
    private $nbDeplacements;

    /**
     * Nbr actes.
     *
     * @var float|null
     */
    private $nbrActes;

    /**
     * Nbr bulletins.
     *
     * @var float|null
     */
    private $nbrBulletins;

    /**
     * Nbr ecritures bq.
     *
     * @var float|null
     */
    private $nbrEcrituresBq;

    /**
     * Nbr ecritures depenses.
     *
     * @var float|null
     */
    private $nbrEcrituresDepenses;

    /**
     * Nbr ecritures od.
     *
     * @var float|null
     */
    private $nbrEcrituresOd;

    /**
     * Nbr ecritures recettes.
     *
     * @var float|null
     */
    private $nbrEcrituresRecettes;

    /**
     * Nbr employes.
     *
     * @var float|null
     */
    private $nbrEmployes;

    /**
     * Numero lettre.
     *
     * @var string|null
     */
    private $numeroLettre;

    /**
     * Police1.
     *
     * @var string|null
     */
    private $police1;

    /**
     * Police2.
     *
     * @var string|null
     */
    private $police2;

    /**
     * Police3.
     *
     * @var string|null
     */
    private $police3;

    /**
     * Premier exercice.
     *
     * @var int|null
     */
    private $premierExercice;

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
     * Type actionnaires associes.
     *
     * @var string|null
     */
    private $typeActionnairesAssocies;

    /**
     * Type ca.
     *
     * @var string|null
     */
    private $typeCa;

    /**
     * Type mission.
     *
     * @var string|null
     */
    private $typeMission;

    /**
     * Type systeme info.
     *
     * @var string|null
     */
    private $typeSystemeInfo;

    /**
     * Type volume.
     *
     * @var string|null
     */
    private $typeVolume;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ca.
     *
     * @return float|null Returns the ca.
     */
    public function getCa(): ?float {
        return $this->ca;
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
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
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
     * Get the date entretien.
     *
     * @return DateTime|null Returns the date entretien.
     */
    public function getDateEntretien(): ?DateTime {
        return $this->dateEntretien;
    }

    /**
     * Get the date signature.
     *
     * @return DateTime|null Returns the date signature.
     */
    public function getDateSignature(): ?DateTime {
        return $this->dateSignature;
    }

    /**
     * Get the debut mission.
     *
     * @return DateTime|null Returns the debut mission.
     */
    public function getDebutMission(): ?DateTime {
        return $this->debutMission;
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
     * Get the exercice courant.
     *
     * @return string|null Returns the exercice courant.
     */
    public function getExerciceCourant(): ?string {
        return $this->exerciceCourant;
    }

    /**
     * Get the fin mission.
     *
     * @return DateTime|null Returns the fin mission.
     */
    public function getFinMission(): ?DateTime {
        return $this->finMission;
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
     * Get the nb deplacements.
     *
     * @return string|null Returns the nb deplacements.
     */
    public function getNbDeplacements(): ?string {
        return $this->nbDeplacements;
    }

    /**
     * Get the nbr actes.
     *
     * @return float|null Returns the nbr actes.
     */
    public function getNbrActes(): ?float {
        return $this->nbrActes;
    }

    /**
     * Get the nbr bulletins.
     *
     * @return float|null Returns the nbr bulletins.
     */
    public function getNbrBulletins(): ?float {
        return $this->nbrBulletins;
    }

    /**
     * Get the nbr ecritures bq.
     *
     * @return float|null Returns the nbr ecritures bq.
     */
    public function getNbrEcrituresBq(): ?float {
        return $this->nbrEcrituresBq;
    }

    /**
     * Get the nbr ecritures depenses.
     *
     * @return float|null Returns the nbr ecritures depenses.
     */
    public function getNbrEcrituresDepenses(): ?float {
        return $this->nbrEcrituresDepenses;
    }

    /**
     * Get the nbr ecritures od.
     *
     * @return float|null Returns the nbr ecritures od.
     */
    public function getNbrEcrituresOd(): ?float {
        return $this->nbrEcrituresOd;
    }

    /**
     * Get the nbr ecritures recettes.
     *
     * @return float|null Returns the nbr ecritures recettes.
     */
    public function getNbrEcrituresRecettes(): ?float {
        return $this->nbrEcrituresRecettes;
    }

    /**
     * Get the nbr employes.
     *
     * @return float|null Returns the nbr employes.
     */
    public function getNbrEmployes(): ?float {
        return $this->nbrEmployes;
    }

    /**
     * Get the numero lettre.
     *
     * @return string|null Returns the numero lettre.
     */
    public function getNumeroLettre(): ?string {
        return $this->numeroLettre;
    }

    /**
     * Get the police1.
     *
     * @return string|null Returns the police1.
     */
    public function getPolice1(): ?string {
        return $this->police1;
    }

    /**
     * Get the police2.
     *
     * @return string|null Returns the police2.
     */
    public function getPolice2(): ?string {
        return $this->police2;
    }

    /**
     * Get the police3.
     *
     * @return string|null Returns the police3.
     */
    public function getPolice3(): ?string {
        return $this->police3;
    }

    /**
     * Get the premier exercice.
     *
     * @return int|null Returns the premier exercice.
     */
    public function getPremierExercice(): ?int {
        return $this->premierExercice;
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
     * Get the type actionnaires associes.
     *
     * @return string|null Returns the type actionnaires associes.
     */
    public function getTypeActionnairesAssocies(): ?string {
        return $this->typeActionnairesAssocies;
    }

    /**
     * Get the type ca.
     *
     * @return string|null Returns the type ca.
     */
    public function getTypeCa(): ?string {
        return $this->typeCa;
    }

    /**
     * Get the type mission.
     *
     * @return string|null Returns the type mission.
     */
    public function getTypeMission(): ?string {
        return $this->typeMission;
    }

    /**
     * Get the type systeme info.
     *
     * @return string|null Returns the type systeme info.
     */
    public function getTypeSystemeInfo(): ?string {
        return $this->typeSystemeInfo;
    }

    /**
     * Get the type volume.
     *
     * @return string|null Returns the type volume.
     */
    public function getTypeVolume(): ?string {
        return $this->typeVolume;
    }

    /**
     * Set the ca.
     *
     * @param float|null $ca The ca.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setCa(?float $ca): LettresMissionsEntetes {
        $this->ca = $ca;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setCodeClient(?string $codeClient): LettresMissionsEntetes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setCodeRegroupement(?string $codeRegroupement): LettresMissionsEntetes {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the comment1.
     *
     * @param string|null $comment1 The comment1.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment1(?string $comment1): LettresMissionsEntetes {
        $this->comment1 = $comment1;
        return $this;
    }

    /**
     * Set the comment2.
     *
     * @param string|null $comment2 The comment2.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment2(?string $comment2): LettresMissionsEntetes {
        $this->comment2 = $comment2;
        return $this;
    }

    /**
     * Set the comment3.
     *
     * @param string|null $comment3 The comment3.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment3(?string $comment3): LettresMissionsEntetes {
        $this->comment3 = $comment3;
        return $this;
    }

    /**
     * Set the comment4.
     *
     * @param string|null $comment4 The comment4.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment4(?string $comment4): LettresMissionsEntetes {
        $this->comment4 = $comment4;
        return $this;
    }

    /**
     * Set the comment5.
     *
     * @param string|null $comment5 The comment5.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment5(?string $comment5): LettresMissionsEntetes {
        $this->comment5 = $comment5;
        return $this;
    }

    /**
     * Set the comment6.
     *
     * @param string|null $comment6 The comment6.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment6(?string $comment6): LettresMissionsEntetes {
        $this->comment6 = $comment6;
        return $this;
    }

    /**
     * Set the comment7.
     *
     * @param string|null $comment7 The comment7.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setComment7(?string $comment7): LettresMissionsEntetes {
        $this->comment7 = $comment7;
        return $this;
    }

    /**
     * Set the date entretien.
     *
     * @param DateTime|null $dateEntretien The date entretien.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setDateEntretien(?DateTime $dateEntretien): LettresMissionsEntetes {
        $this->dateEntretien = $dateEntretien;
        return $this;
    }

    /**
     * Set the date signature.
     *
     * @param DateTime|null $dateSignature The date signature.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setDateSignature(?DateTime $dateSignature): LettresMissionsEntetes {
        $this->dateSignature = $dateSignature;
        return $this;
    }

    /**
     * Set the debut mission.
     *
     * @param DateTime|null $debutMission The debut mission.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setDebutMission(?DateTime $debutMission): LettresMissionsEntetes {
        $this->debutMission = $debutMission;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setEtat(?string $etat): LettresMissionsEntetes {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the exercice courant.
     *
     * @param string|null $exerciceCourant The exercice courant.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setExerciceCourant(?string $exerciceCourant): LettresMissionsEntetes {
        $this->exerciceCourant = $exerciceCourant;
        return $this;
    }

    /**
     * Set the fin mission.
     *
     * @param DateTime|null $finMission The fin mission.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setFinMission(?DateTime $finMission): LettresMissionsEntetes {
        $this->finMission = $finMission;
        return $this;
    }

    /**
     * Set the hono prev.
     *
     * @param float|null $honoPrev The hono prev.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setHonoPrev(?float $honoPrev): LettresMissionsEntetes {
        $this->honoPrev = $honoPrev;
        return $this;
    }

    /**
     * Set the libelle1.
     *
     * @param string|null $libelle1 The libelle1.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle1(?string $libelle1): LettresMissionsEntetes {
        $this->libelle1 = $libelle1;
        return $this;
    }

    /**
     * Set the libelle2.
     *
     * @param string|null $libelle2 The libelle2.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle2(?string $libelle2): LettresMissionsEntetes {
        $this->libelle2 = $libelle2;
        return $this;
    }

    /**
     * Set the libelle3.
     *
     * @param string|null $libelle3 The libelle3.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle3(?string $libelle3): LettresMissionsEntetes {
        $this->libelle3 = $libelle3;
        return $this;
    }

    /**
     * Set the libelle4.
     *
     * @param string|null $libelle4 The libelle4.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle4(?string $libelle4): LettresMissionsEntetes {
        $this->libelle4 = $libelle4;
        return $this;
    }

    /**
     * Set the libelle5.
     *
     * @param string|null $libelle5 The libelle5.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle5(?string $libelle5): LettresMissionsEntetes {
        $this->libelle5 = $libelle5;
        return $this;
    }

    /**
     * Set the libelle6.
     *
     * @param string|null $libelle6 The libelle6.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle6(?string $libelle6): LettresMissionsEntetes {
        $this->libelle6 = $libelle6;
        return $this;
    }

    /**
     * Set the libelle7.
     *
     * @param string|null $libelle7 The libelle7.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setLibelle7(?string $libelle7): LettresMissionsEntetes {
        $this->libelle7 = $libelle7;
        return $this;
    }

    /**
     * Set the nb deplacements.
     *
     * @param string|null $nbDeplacements The nb deplacements.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbDeplacements(?string $nbDeplacements): LettresMissionsEntetes {
        $this->nbDeplacements = $nbDeplacements;
        return $this;
    }

    /**
     * Set the nbr actes.
     *
     * @param float|null $nbrActes The nbr actes.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrActes(?float $nbrActes): LettresMissionsEntetes {
        $this->nbrActes = $nbrActes;
        return $this;
    }

    /**
     * Set the nbr bulletins.
     *
     * @param float|null $nbrBulletins The nbr bulletins.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrBulletins(?float $nbrBulletins): LettresMissionsEntetes {
        $this->nbrBulletins = $nbrBulletins;
        return $this;
    }

    /**
     * Set the nbr ecritures bq.
     *
     * @param float|null $nbrEcrituresBq The nbr ecritures bq.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrEcrituresBq(?float $nbrEcrituresBq): LettresMissionsEntetes {
        $this->nbrEcrituresBq = $nbrEcrituresBq;
        return $this;
    }

    /**
     * Set the nbr ecritures depenses.
     *
     * @param float|null $nbrEcrituresDepenses The nbr ecritures depenses.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrEcrituresDepenses(?float $nbrEcrituresDepenses): LettresMissionsEntetes {
        $this->nbrEcrituresDepenses = $nbrEcrituresDepenses;
        return $this;
    }

    /**
     * Set the nbr ecritures od.
     *
     * @param float|null $nbrEcrituresOd The nbr ecritures od.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrEcrituresOd(?float $nbrEcrituresOd): LettresMissionsEntetes {
        $this->nbrEcrituresOd = $nbrEcrituresOd;
        return $this;
    }

    /**
     * Set the nbr ecritures recettes.
     *
     * @param float|null $nbrEcrituresRecettes The nbr ecritures recettes.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrEcrituresRecettes(?float $nbrEcrituresRecettes): LettresMissionsEntetes {
        $this->nbrEcrituresRecettes = $nbrEcrituresRecettes;
        return $this;
    }

    /**
     * Set the nbr employes.
     *
     * @param float|null $nbrEmployes The nbr employes.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNbrEmployes(?float $nbrEmployes): LettresMissionsEntetes {
        $this->nbrEmployes = $nbrEmployes;
        return $this;
    }

    /**
     * Set the numero lettre.
     *
     * @param string|null $numeroLettre The numero lettre.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setNumeroLettre(?string $numeroLettre): LettresMissionsEntetes {
        $this->numeroLettre = $numeroLettre;
        return $this;
    }

    /**
     * Set the police1.
     *
     * @param string|null $police1 The police1.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPolice1(?string $police1): LettresMissionsEntetes {
        $this->police1 = $police1;
        return $this;
    }

    /**
     * Set the police2.
     *
     * @param string|null $police2 The police2.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPolice2(?string $police2): LettresMissionsEntetes {
        $this->police2 = $police2;
        return $this;
    }

    /**
     * Set the police3.
     *
     * @param string|null $police3 The police3.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPolice3(?string $police3): LettresMissionsEntetes {
        $this->police3 = $police3;
        return $this;
    }

    /**
     * Set the premier exercice.
     *
     * @param int|null $premierExercice The premier exercice.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPremierExercice(?int $premierExercice): LettresMissionsEntetes {
        $this->premierExercice = $premierExercice;
        return $this;
    }

    /**
     * Set the prix1.
     *
     * @param float|null $prix1 The prix1.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix1(?float $prix1): LettresMissionsEntetes {
        $this->prix1 = $prix1;
        return $this;
    }

    /**
     * Set the prix2.
     *
     * @param float|null $prix2 The prix2.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix2(?float $prix2): LettresMissionsEntetes {
        $this->prix2 = $prix2;
        return $this;
    }

    /**
     * Set the prix3.
     *
     * @param float|null $prix3 The prix3.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix3(?float $prix3): LettresMissionsEntetes {
        $this->prix3 = $prix3;
        return $this;
    }

    /**
     * Set the prix4.
     *
     * @param float|null $prix4 The prix4.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix4(?float $prix4): LettresMissionsEntetes {
        $this->prix4 = $prix4;
        return $this;
    }

    /**
     * Set the prix5.
     *
     * @param float|null $prix5 The prix5.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix5(?float $prix5): LettresMissionsEntetes {
        $this->prix5 = $prix5;
        return $this;
    }

    /**
     * Set the prix6.
     *
     * @param float|null $prix6 The prix6.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix6(?float $prix6): LettresMissionsEntetes {
        $this->prix6 = $prix6;
        return $this;
    }

    /**
     * Set the prix7.
     *
     * @param float|null $prix7 The prix7.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setPrix7(?float $prix7): LettresMissionsEntetes {
        $this->prix7 = $prix7;
        return $this;
    }

    /**
     * Set the type actionnaires associes.
     *
     * @param string|null $typeActionnairesAssocies The type actionnaires associes.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setTypeActionnairesAssocies(?string $typeActionnairesAssocies): LettresMissionsEntetes {
        $this->typeActionnairesAssocies = $typeActionnairesAssocies;
        return $this;
    }

    /**
     * Set the type ca.
     *
     * @param string|null $typeCa The type ca.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setTypeCa(?string $typeCa): LettresMissionsEntetes {
        $this->typeCa = $typeCa;
        return $this;
    }

    /**
     * Set the type mission.
     *
     * @param string|null $typeMission The type mission.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setTypeMission(?string $typeMission): LettresMissionsEntetes {
        $this->typeMission = $typeMission;
        return $this;
    }

    /**
     * Set the type systeme info.
     *
     * @param string|null $typeSystemeInfo The type systeme info.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setTypeSystemeInfo(?string $typeSystemeInfo): LettresMissionsEntetes {
        $this->typeSystemeInfo = $typeSystemeInfo;
        return $this;
    }

    /**
     * Set the type volume.
     *
     * @param string|null $typeVolume The type volume.
     * @return LettresMissionsEntetes Returns this Lettres missions entetes.
     */
    public function setTypeVolume(?string $typeVolume): LettresMissionsEntetes {
        $this->typeVolume = $typeVolume;
        return $this;
    }
}
