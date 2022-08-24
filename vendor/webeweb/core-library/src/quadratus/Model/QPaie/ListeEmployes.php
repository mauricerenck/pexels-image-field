<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Liste employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ListeEmployes {

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime|null
     */
    private $carteSejourDelivreeLe;

    /**
     * Carte sejour expire le.
     *
     * @var DateTime|null
     */
    private $carteSejourExpireLe;

    /**
     * Carte travail delivree le.
     *
     * @var DateTime|null
     */
    private $carteTravailDelivreeLe;

    /**
     * Carte travail expire le.
     *
     * @var DateTime|null
     */
    private $carteTravailExpireLe;

    /**
     * Categorie permis.
     *
     * @var string|null
     */
    private $categoriePermis;

    /**
     * Cddcdi.
     *
     * @var bool|null
     */
    private $cddcdi;

    /**
     * Cle deux.
     *
     * @var string|null
     */
    private $cleDeux;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code motif rupture.
     *
     * @var string|null
     */
    private $codeMotifRupture;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Code type sal.
     *
     * @var string|null
     */
    private $codeTypeSal;

    /**
     * Commune naissance.
     *
     * @var string|null
     */
    private $communeNaissance;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Cum30 ss.
     *
     * @var float|null
     */
    private $cum30Ss;

    /**
     * Cum base gmp.
     *
     * @var float|null
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float|null
     */
    private $cumBaseSs;

    /**
     * Cum base tr a.
     *
     * @var float|null
     */
    private $cumBaseTrA;

    /**
     * Cum base tr b.
     *
     * @var float|null
     */
    private $cumBaseTrB;

    /**
     * Cum base tr c.
     *
     * @var float|null
     */
    private $cumBaseTrC;

    /**
     * Cum brut abat non lim.
     *
     * @var float|null
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut al.
     *
     * @var float|null
     */
    private $cumBrutAl;

    /**
     * Cum brut non abattu.
     *
     * @var float|null
     */
    private $cumBrutNonAbattu;

    /**
     * Cum cp dus.
     *
     * @var float|null
     */
    private $cumCpDus;

    /**
     * Cum cp dus1.
     *
     * @var float|null
     */
    private $cumCpDus1;

    /**
     * Cum cp pris.
     *
     * @var float|null
     */
    private $cumCpPris;

    /**
     * Cum cp pris1.
     *
     * @var float|null
     */
    private $cumCpPris1;

    /**
     * Cum h sup.
     *
     * @var float|null
     */
    private $cumHSup;

    /**
     * Cum heure paye.
     *
     * @var float|null
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float|null
     */
    private $cumHeureTrav;

    /**
     * Cum jour paye.
     *
     * @var float|null
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float|null
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float|null
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris1.
     *
     * @var float|null
     */
    private $cumMtCpPris1;

    /**
     * Cum net a payer.
     *
     * @var float|null
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float|null
     */
    private $cumNetImposable;

    /**
     * Cum plafond gmp.
     *
     * @var float|null
     */
    private $cumPlafondGmp;

    /**
     * Cum plafond ss1.
     *
     * @var float|null
     */
    private $cumPlafondSs1;

    /**
     * Cum plafond ss2.
     *
     * @var float|null
     */
    private $cumPlafondSs2;

    /**
     * Cum prov cp.
     *
     * @var float|null
     */
    private $cumProvCp;

    /**
     * Cum prov cp1.
     *
     * @var float|null
     */
    private $cumProvCp1;

    /**
     * Cum repos comp.
     *
     * @var float|null
     */
    private $cumReposComp;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date naiss conjoint.
     *
     * @var DateTime|null
     */
    private $dateNaissConjoint;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Date visite medicale.
     *
     * @var DateTime|null
     */
    private $dateVisiteMedicale;

    /**
     * Date visite reprise.
     *
     * @var DateTime|null
     */
    private $dateVisiteReprise;

    /**
     * Dept naissance.
     *
     * @var string|null
     */
    private $deptNaissance;

    /**
     * Derniere visite medicale.
     *
     * @var DateTime|null
     */
    private $derniereVisiteMedicale;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Fictif.
     *
     * @var bool|null
     */
    private $fictif;

    /**
     * Gestion mail bulletin.
     *
     * @var bool|null
     */
    private $gestionMailBulletin;

    /**
     * Handicape.
     *
     * @var bool|null
     */
    private $handicape;

    /**
     * Lieu travail conjoint.
     *
     * @var string|null
     */
    private $lieuTravailConjoint;

    /**
     * Matricule.
     *
     * @var string|null
     */
    private $matricule;

    /**
     * Nationalite.
     *
     * @var string|null
     */
    private $nationalite;

    /**
     * Nb heure mois.
     *
     * @var float|null
     */
    private $nbHeureMois;

    /**
     * Nb jours anc.
     *
     * @var int|null
     */
    private $nbJoursAnc;

    /**
     * Nb jours visite med.
     *
     * @var int|null
     */
    private $nbJoursVisiteMed;

    /**
     * Niveau confidentialite.
     *
     * @var string|null
     */
    private $niveauConfidentialite;

    /**
     * Nom conjoint.
     *
     * @var string|null
     */
    private $nomConjoint;

    /**
     * Nom marital.
     *
     * @var string|null
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string|null
     */
    private $nomNaissance;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Nombre enfants.
     *
     * @var string|null
     */
    private $nombreEnfants;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero carte sejour.
     *
     * @var string|null
     */
    private $numeroCarteSejour;

    /**
     * Numero carte travail.
     *
     * @var string|null
     */
    private $numeroCarteTravail;

    /**
     * Numero insee.
     *
     * @var string|null
     */
    private $numeroInsee;

    /**
     * Numero permis.
     *
     * @var string|null
     */
    private $numeroPermis;

    /**
     * Orphelin.
     *
     * @var bool|null
     */
    private $orphelin;

    /**
     * Pas gestion pdp.
     *
     * @var bool|null
     */
    private $pasGestionPdp;

    /**
     * Pension.
     *
     * @var bool|null
     */
    private $pension;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Permis delivre le.
     *
     * @var DateTime|null
     */
    private $permisDelivreLe;

    /**
     * Permis delivre par.
     *
     * @var string|null
     */
    private $permisDelivrePar;

    /**
     * Permis expire le.
     *
     * @var DateTime|null
     */
    private $permisExpireLe;

    /**
     * Personne a prevenir.
     *
     * @var string|null
     */
    private $personneAPrevenir;

    /**
     * Pourcent act.
     *
     * @var float|null
     */
    private $pourcentAct;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Prenom conjoint.
     *
     * @var string|null
     */
    private $prenomConjoint;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Salaire base.
     *
     * @var float|null
     */
    private $salaireBase;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Sexe.
     *
     * @var string|null
     */
    private $sexe;

    /**
     * Situation fam.
     *
     * @var string|null
     */
    private $situationFam;

    /**
     * Taux pension civile.
     *
     * @var float|null
     */
    private $tauxPensionCivile;

    /**
     * Taux pension militaire.
     *
     * @var float|null
     */
    private $tauxPensionMilitaire;

    /**
     * Tds138.
     *
     * @var string|null
     */
    private $tds138;

    /**
     * Tds60.
     *
     * @var bool|null
     */
    private $tds60;

    /**
     * Tds61.
     *
     * @var string|null
     */
    private $tds61;

    /**
     * Tds76.
     *
     * @var string|null
     */
    private $tds76;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Tel conjoint.
     *
     * @var string|null
     */
    private $telConjoint;

    /**
     * Tel pers a prevenir.
     *
     * @var string|null
     */
    private $telPersAPrevenir;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Transfert entree.
     *
     * @var bool|null
     */
    private $transfertEntree;

    /**
     * Transfert sortie.
     *
     * @var bool|null
     */
    private $transfertSortie;

    /**
     * Type nationalite.
     *
     * @var string|null
     */
    private $typeNationalite;

    /**
     * Type paiement.
     *
     * @var string|null
     */
    private $typePaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the btq.
     *
     * @return string|null Returns the btq.
     */
    public function getBtq(): ?string {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
    }

    /**
     * Get the carte sejour delivree le.
     *
     * @return DateTime|null Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe(): ?DateTime {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime|null Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe(): ?DateTime {
        return $this->carteSejourExpireLe;
    }

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime|null Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe(): ?DateTime {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime|null Returns the carte travail expire le.
     */
    public function getCarteTravailExpireLe(): ?DateTime {
        return $this->carteTravailExpireLe;
    }

    /**
     * Get the categorie permis.
     *
     * @return string|null Returns the categorie permis.
     */
    public function getCategoriePermis(): ?string {
        return $this->categoriePermis;
    }

    /**
     * Get the cddcdi.
     *
     * @return bool|null Returns the cddcdi.
     */
    public function getCddcdi(): ?bool {
        return $this->cddcdi;
    }

    /**
     * Get the cle deux.
     *
     * @return string|null Returns the cle deux.
     */
    public function getCleDeux(): ?string {
        return $this->cleDeux;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code motif rupture.
     *
     * @return string|null Returns the code motif rupture.
     */
    public function getCodeMotifRupture(): ?string {
        return $this->codeMotifRupture;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string|null Returns the code officiel commune.
     */
    public function getCodeOfficielCommune(): ?string {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the code type sal.
     *
     * @return string|null Returns the code type sal.
     */
    public function getCodeTypeSal(): ?string {
        return $this->codeTypeSal;
    }

    /**
     * Get the commune naissance.
     *
     * @return string|null Returns the commune naissance.
     */
    public function getCommuneNaissance(): ?string {
        return $this->communeNaissance;
    }

    /**
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
    }

    /**
     * Get the cum30 ss.
     *
     * @return float|null Returns the cum30 ss.
     */
    public function getCum30Ss(): ?float {
        return $this->cum30Ss;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float|null Returns the cum base gmp.
     */
    public function getCumBaseGmp(): ?float {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float|null Returns the cum base ss.
     */
    public function getCumBaseSs(): ?float {
        return $this->cumBaseSs;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float|null Returns the cum base tr a.
     */
    public function getCumBaseTrA(): ?float {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float|null Returns the cum base tr b.
     */
    public function getCumBaseTrB(): ?float {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float|null Returns the cum base tr c.
     */
    public function getCumBaseTrC(): ?float {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float|null Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim(): ?float {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut al.
     *
     * @return float|null Returns the cum brut al.
     */
    public function getCumBrutAl(): ?float {
        return $this->cumBrutAl;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float|null Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu(): ?float {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float|null Returns the cum cp dus.
     */
    public function getCumCpDus(): ?float {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus1.
     *
     * @return float|null Returns the cum cp dus1.
     */
    public function getCumCpDus1(): ?float {
        return $this->cumCpDus1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float|null Returns the cum cp pris.
     */
    public function getCumCpPris(): ?float {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris1.
     *
     * @return float|null Returns the cum cp pris1.
     */
    public function getCumCpPris1(): ?float {
        return $this->cumCpPris1;
    }

    /**
     * Get the cum h sup.
     *
     * @return float|null Returns the cum h sup.
     */
    public function getCumHSup(): ?float {
        return $this->cumHSup;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float|null Returns the cum heure paye.
     */
    public function getCumHeurePaye(): ?float {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float|null Returns the cum heure trav.
     */
    public function getCumHeureTrav(): ?float {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float|null Returns the cum jour paye.
     */
    public function getCumJourPaye(): ?float {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float|null Returns the cum jour trav.
     */
    public function getCumJourTrav(): ?float {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float|null Returns the cum mt cp pris.
     */
    public function getCumMtCpPris(): ?float {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris1.
     *
     * @return float|null Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1(): ?float {
        return $this->cumMtCpPris1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float|null Returns the cum net a payer.
     */
    public function getCumNetAPayer(): ?float {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float|null Returns the cum net imposable.
     */
    public function getCumNetImposable(): ?float {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plafond gmp.
     *
     * @return float|null Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp(): ?float {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum plafond ss1.
     *
     * @return float|null Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1(): ?float {
        return $this->cumPlafondSs1;
    }

    /**
     * Get the cum plafond ss2.
     *
     * @return float|null Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2(): ?float {
        return $this->cumPlafondSs2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float|null Returns the cum prov cp.
     */
    public function getCumProvCp(): ?float {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp1.
     *
     * @return float|null Returns the cum prov cp1.
     */
    public function getCumProvCp1(): ?float {
        return $this->cumProvCp1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float|null Returns the cum repos comp.
     */
    public function getCumReposComp(): ?float {
        return $this->cumReposComp;
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
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the date naiss conjoint.
     *
     * @return DateTime|null Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint(): ?DateTime {
        return $this->dateNaissConjoint;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
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
     * Get the date visite medicale.
     *
     * @return DateTime|null Returns the date visite medicale.
     */
    public function getDateVisiteMedicale(): ?DateTime {
        return $this->dateVisiteMedicale;
    }

    /**
     * Get the date visite reprise.
     *
     * @return DateTime|null Returns the date visite reprise.
     */
    public function getDateVisiteReprise(): ?DateTime {
        return $this->dateVisiteReprise;
    }

    /**
     * Get the dept naissance.
     *
     * @return string|null Returns the dept naissance.
     */
    public function getDeptNaissance(): ?string {
        return $this->deptNaissance;
    }

    /**
     * Get the derniere visite medicale.
     *
     * @return DateTime|null Returns the derniere visite medicale.
     */
    public function getDerniereVisiteMedicale(): ?DateTime {
        return $this->derniereVisiteMedicale;
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
     * Get the fictif.
     *
     * @return bool|null Returns the fictif.
     */
    public function getFictif(): ?bool {
        return $this->fictif;
    }

    /**
     * Get the gestion mail bulletin.
     *
     * @return bool|null Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin(): ?bool {
        return $this->gestionMailBulletin;
    }

    /**
     * Get the handicape.
     *
     * @return bool|null Returns the handicape.
     */
    public function getHandicape(): ?bool {
        return $this->handicape;
    }

    /**
     * Get the lieu travail conjoint.
     *
     * @return string|null Returns the lieu travail conjoint.
     */
    public function getLieuTravailConjoint(): ?string {
        return $this->lieuTravailConjoint;
    }

    /**
     * Get the matricule.
     *
     * @return string|null Returns the matricule.
     */
    public function getMatricule(): ?string {
        return $this->matricule;
    }

    /**
     * Get the nationalite.
     *
     * @return string|null Returns the nationalite.
     */
    public function getNationalite(): ?string {
        return $this->nationalite;
    }

    /**
     * Get the nb heure mois.
     *
     * @return float|null Returns the nb heure mois.
     */
    public function getNbHeureMois(): ?float {
        return $this->nbHeureMois;
    }

    /**
     * Get the nb jours anc.
     *
     * @return int|null Returns the nb jours anc.
     */
    public function getNbJoursAnc(): ?int {
        return $this->nbJoursAnc;
    }

    /**
     * Get the nb jours visite med.
     *
     * @return int|null Returns the nb jours visite med.
     */
    public function getNbJoursVisiteMed(): ?int {
        return $this->nbJoursVisiteMed;
    }

    /**
     * Get the niveau confidentialite.
     *
     * @return string|null Returns the niveau confidentialite.
     */
    public function getNiveauConfidentialite(): ?string {
        return $this->niveauConfidentialite;
    }

    /**
     * Get the nom conjoint.
     *
     * @return string|null Returns the nom conjoint.
     */
    public function getNomConjoint(): ?string {
        return $this->nomConjoint;
    }

    /**
     * Get the nom marital.
     *
     * @return string|null Returns the nom marital.
     */
    public function getNomMarital(): ?string {
        return $this->nomMarital;
    }

    /**
     * Get the nom naissance.
     *
     * @return string|null Returns the nom naissance.
     */
    public function getNomNaissance(): ?string {
        return $this->nomNaissance;
    }

    /**
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
    }

    /**
     * Get the nombre enfants.
     *
     * @return string|null Returns the nombre enfants.
     */
    public function getNombreEnfants(): ?string {
        return $this->nombreEnfants;
    }

    /**
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero carte sejour.
     *
     * @return string|null Returns the numero carte sejour.
     */
    public function getNumeroCarteSejour(): ?string {
        return $this->numeroCarteSejour;
    }

    /**
     * Get the numero carte travail.
     *
     * @return string|null Returns the numero carte travail.
     */
    public function getNumeroCarteTravail(): ?string {
        return $this->numeroCarteTravail;
    }

    /**
     * Get the numero insee.
     *
     * @return string|null Returns the numero insee.
     */
    public function getNumeroInsee(): ?string {
        return $this->numeroInsee;
    }

    /**
     * Get the numero permis.
     *
     * @return string|null Returns the numero permis.
     */
    public function getNumeroPermis(): ?string {
        return $this->numeroPermis;
    }

    /**
     * Get the orphelin.
     *
     * @return bool|null Returns the orphelin.
     */
    public function getOrphelin(): ?bool {
        return $this->orphelin;
    }

    /**
     * Get the pas gestion pdp.
     *
     * @return bool|null Returns the pas gestion pdp.
     */
    public function getPasGestionPdp(): ?bool {
        return $this->pasGestionPdp;
    }

    /**
     * Get the pension.
     *
     * @return bool|null Returns the pension.
     */
    public function getPension(): ?bool {
        return $this->pension;
    }

    /**
     * Get the periodicite.
     *
     * @return string|null Returns the periodicite.
     */
    public function getPeriodicite(): ?string {
        return $this->periodicite;
    }

    /**
     * Get the permis delivre le.
     *
     * @return DateTime|null Returns the permis delivre le.
     */
    public function getPermisDelivreLe(): ?DateTime {
        return $this->permisDelivreLe;
    }

    /**
     * Get the permis delivre par.
     *
     * @return string|null Returns the permis delivre par.
     */
    public function getPermisDelivrePar(): ?string {
        return $this->permisDelivrePar;
    }

    /**
     * Get the permis expire le.
     *
     * @return DateTime|null Returns the permis expire le.
     */
    public function getPermisExpireLe(): ?DateTime {
        return $this->permisExpireLe;
    }

    /**
     * Get the personne a prevenir.
     *
     * @return string|null Returns the personne a prevenir.
     */
    public function getPersonneAPrevenir(): ?string {
        return $this->personneAPrevenir;
    }

    /**
     * Get the pourcent act.
     *
     * @return float|null Returns the pourcent act.
     */
    public function getPourcentAct(): ?float {
        return $this->pourcentAct;
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
     * Get the prenom conjoint.
     *
     * @return string|null Returns the prenom conjoint.
     */
    public function getPrenomConjoint(): ?string {
        return $this->prenomConjoint;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the salaire base.
     *
     * @return float|null Returns the salaire base.
     */
    public function getSalaireBase(): ?float {
        return $this->salaireBase;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the sexe.
     *
     * @return string|null Returns the sexe.
     */
    public function getSexe(): ?string {
        return $this->sexe;
    }

    /**
     * Get the situation fam.
     *
     * @return string|null Returns the situation fam.
     */
    public function getSituationFam(): ?string {
        return $this->situationFam;
    }

    /**
     * Get the taux pension civile.
     *
     * @return float|null Returns the taux pension civile.
     */
    public function getTauxPensionCivile(): ?float {
        return $this->tauxPensionCivile;
    }

    /**
     * Get the taux pension militaire.
     *
     * @return float|null Returns the taux pension militaire.
     */
    public function getTauxPensionMilitaire(): ?float {
        return $this->tauxPensionMilitaire;
    }

    /**
     * Get the tds138.
     *
     * @return string|null Returns the tds138.
     */
    public function getTds138(): ?string {
        return $this->tds138;
    }

    /**
     * Get the tds60.
     *
     * @return bool|null Returns the tds60.
     */
    public function getTds60(): ?bool {
        return $this->tds60;
    }

    /**
     * Get the tds61.
     *
     * @return string|null Returns the tds61.
     */
    public function getTds61(): ?string {
        return $this->tds61;
    }

    /**
     * Get the tds76.
     *
     * @return string|null Returns the tds76.
     */
    public function getTds76(): ?string {
        return $this->tds76;
    }

    /**
     * Get the tel1.
     *
     * @return string|null Returns the tel1.
     */
    public function getTel1(): ?string {
        return $this->tel1;
    }

    /**
     * Get the tel2.
     *
     * @return string|null Returns the tel2.
     */
    public function getTel2(): ?string {
        return $this->tel2;
    }

    /**
     * Get the tel conjoint.
     *
     * @return string|null Returns the tel conjoint.
     */
    public function getTelConjoint(): ?string {
        return $this->telConjoint;
    }

    /**
     * Get the tel pers a prevenir.
     *
     * @return string|null Returns the tel pers a prevenir.
     */
    public function getTelPersAPrevenir(): ?string {
        return $this->telPersAPrevenir;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the transfert entree.
     *
     * @return bool|null Returns the transfert entree.
     */
    public function getTransfertEntree(): ?bool {
        return $this->transfertEntree;
    }

    /**
     * Get the transfert sortie.
     *
     * @return bool|null Returns the transfert sortie.
     */
    public function getTransfertSortie(): ?bool {
        return $this->transfertSortie;
    }

    /**
     * Get the type nationalite.
     *
     * @return string|null Returns the type nationalite.
     */
    public function getTypeNationalite(): ?string {
        return $this->typeNationalite;
    }

    /**
     * Get the type paiement.
     *
     * @return string|null Returns the type paiement.
     */
    public function getTypePaiement(): ?string {
        return $this->typePaiement;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setBtq(?string $btq): ListeEmployes {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): ListeEmployes {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime|null $carteSejourDelivreeLe The carte sejour delivree le.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCarteSejourDelivreeLe(?DateTime $carteSejourDelivreeLe): ListeEmployes {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime|null $carteSejourExpireLe The carte sejour expire le.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCarteSejourExpireLe(?DateTime $carteSejourExpireLe): ListeEmployes {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime|null $carteTravailDelivreeLe The carte travail delivree le.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCarteTravailDelivreeLe(?DateTime $carteTravailDelivreeLe): ListeEmployes {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime|null $carteTravailExpireLe The carte travail expire le.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCarteTravailExpireLe(?DateTime $carteTravailExpireLe): ListeEmployes {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }

    /**
     * Set the categorie permis.
     *
     * @param string|null $categoriePermis The categorie permis.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCategoriePermis(?string $categoriePermis): ListeEmployes {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param bool|null $cddcdi The cddcdi.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCddcdi(?bool $cddcdi): ListeEmployes {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string|null $cleDeux The cle deux.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCleDeux(?string $cleDeux): ListeEmployes {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCodeEtablissement(?int $codeEtablissement): ListeEmployes {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string|null $codeMotifRupture The code motif rupture.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCodeMotifRupture(?string $codeMotifRupture): ListeEmployes {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): ListeEmployes {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCodePostal(?string $codePostal): ListeEmployes {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string|null $codeTypeSal The code type sal.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCodeTypeSal(?string $codeTypeSal): ListeEmployes {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string|null $communeNaissance The commune naissance.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCommuneNaissance(?string $communeNaissance): ListeEmployes {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setComplement(?string $complement): ListeEmployes {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float|null $cum30Ss The cum30 ss.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCum30Ss(?float $cum30Ss): ListeEmployes {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float|null $cumBaseGmp The cum base gmp.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBaseGmp(?float $cumBaseGmp): ListeEmployes {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float|null $cumBaseSs The cum base ss.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBaseSs(?float $cumBaseSs): ListeEmployes {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float|null $cumBaseTrA The cum base tr a.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBaseTrA(?float $cumBaseTrA): ListeEmployes {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float|null $cumBaseTrB The cum base tr b.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBaseTrB(?float $cumBaseTrB): ListeEmployes {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float|null $cumBaseTrC The cum base tr c.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBaseTrC(?float $cumBaseTrC): ListeEmployes {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float|null $cumBrutAbatNonLim The cum brut abat non lim.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBrutAbatNonLim(?float $cumBrutAbatNonLim): ListeEmployes {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float|null $cumBrutAl The cum brut al.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBrutAl(?float $cumBrutAl): ListeEmployes {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float|null $cumBrutNonAbattu The cum brut non abattu.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumBrutNonAbattu(?float $cumBrutNonAbattu): ListeEmployes {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float|null $cumCpDus The cum cp dus.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumCpDus(?float $cumCpDus): ListeEmployes {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float|null $cumCpDus1 The cum cp dus1.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumCpDus1(?float $cumCpDus1): ListeEmployes {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float|null $cumCpPris The cum cp pris.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumCpPris(?float $cumCpPris): ListeEmployes {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float|null $cumCpPris1 The cum cp pris1.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumCpPris1(?float $cumCpPris1): ListeEmployes {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float|null $cumHSup The cum h sup.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumHSup(?float $cumHSup): ListeEmployes {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float|null $cumHeurePaye The cum heure paye.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumHeurePaye(?float $cumHeurePaye): ListeEmployes {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float|null $cumHeureTrav The cum heure trav.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumHeureTrav(?float $cumHeureTrav): ListeEmployes {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float|null $cumJourPaye The cum jour paye.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumJourPaye(?float $cumJourPaye): ListeEmployes {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float|null $cumJourTrav The cum jour trav.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumJourTrav(?float $cumJourTrav): ListeEmployes {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float|null $cumMtCpPris The cum mt cp pris.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumMtCpPris(?float $cumMtCpPris): ListeEmployes {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float|null $cumMtCpPris1 The cum mt cp pris1.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumMtCpPris1(?float $cumMtCpPris1): ListeEmployes {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float|null $cumNetAPayer The cum net a payer.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumNetAPayer(?float $cumNetAPayer): ListeEmployes {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float|null $cumNetImposable The cum net imposable.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumNetImposable(?float $cumNetImposable): ListeEmployes {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float|null $cumPlafondGmp The cum plafond gmp.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumPlafondGmp(?float $cumPlafondGmp): ListeEmployes {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float|null $cumPlafondSs1 The cum plafond ss1.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumPlafondSs1(?float $cumPlafondSs1): ListeEmployes {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float|null $cumPlafondSs2 The cum plafond ss2.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumPlafondSs2(?float $cumPlafondSs2): ListeEmployes {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float|null $cumProvCp The cum prov cp.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumProvCp(?float $cumProvCp): ListeEmployes {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float|null $cumProvCp1 The cum prov cp1.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumProvCp1(?float $cumProvCp1): ListeEmployes {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float|null $cumReposComp The cum repos comp.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setCumReposComp(?float $cumReposComp): ListeEmployes {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateEntree(?DateTime $dateEntree): ListeEmployes {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateModification(?DateTime $dateModification): ListeEmployes {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime|null $dateNaissConjoint The date naiss conjoint.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateNaissConjoint(?DateTime $dateNaissConjoint): ListeEmployes {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateNaissance(?DateTime $dateNaissance): ListeEmployes {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateSortie(?DateTime $dateSortie): ListeEmployes {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime|null $dateVisiteMedicale The date visite medicale.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateVisiteMedicale(?DateTime $dateVisiteMedicale): ListeEmployes {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime|null $dateVisiteReprise The date visite reprise.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDateVisiteReprise(?DateTime $dateVisiteReprise): ListeEmployes {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string|null $deptNaissance The dept naissance.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDeptNaissance(?string $deptNaissance): ListeEmployes {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the derniere visite medicale.
     *
     * @param DateTime|null $derniereVisiteMedicale The derniere visite medicale.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setDerniereVisiteMedicale(?DateTime $derniereVisiteMedicale): ListeEmployes {
        $this->derniereVisiteMedicale = $derniereVisiteMedicale;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setEmail(?string $email): ListeEmployes {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool|null $fictif The fictif.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setFictif(?bool $fictif): ListeEmployes {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool|null $gestionMailBulletin The gestion mail bulletin.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setGestionMailBulletin(?bool $gestionMailBulletin): ListeEmployes {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param bool|null $handicape The handicape.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setHandicape(?bool $handicape): ListeEmployes {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string|null $lieuTravailConjoint The lieu travail conjoint.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setLieuTravailConjoint(?string $lieuTravailConjoint): ListeEmployes {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string|null $matricule The matricule.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setMatricule(?string $matricule): ListeEmployes {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string|null $nationalite The nationalite.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNationalite(?string $nationalite): ListeEmployes {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float|null $nbHeureMois The nb heure mois.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNbHeureMois(?float $nbHeureMois): ListeEmployes {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb jours anc.
     *
     * @param int|null $nbJoursAnc The nb jours anc.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNbJoursAnc(?int $nbJoursAnc): ListeEmployes {
        $this->nbJoursAnc = $nbJoursAnc;
        return $this;
    }

    /**
     * Set the nb jours visite med.
     *
     * @param int|null $nbJoursVisiteMed The nb jours visite med.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNbJoursVisiteMed(?int $nbJoursVisiteMed): ListeEmployes {
        $this->nbJoursVisiteMed = $nbJoursVisiteMed;
        return $this;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string|null $niveauConfidentialite The niveau confidentialite.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNiveauConfidentialite(?string $niveauConfidentialite): ListeEmployes {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string|null $nomConjoint The nom conjoint.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNomConjoint(?string $nomConjoint): ListeEmployes {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNomMarital(?string $nomMarital): ListeEmployes {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNomNaissance(?string $nomNaissance): ListeEmployes {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNomVille(?string $nomVille): ListeEmployes {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNomVoie(?string $nomVoie): ListeEmployes {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string|null $nombreEnfants The nombre enfants.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNombreEnfants(?string $nombreEnfants): ListeEmployes {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNumVoie(?string $numVoie): ListeEmployes {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNumero(?string $numero): ListeEmployes {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string|null $numeroCarteSejour The numero carte sejour.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNumeroCarteSejour(?string $numeroCarteSejour): ListeEmployes {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string|null $numeroCarteTravail The numero carte travail.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNumeroCarteTravail(?string $numeroCarteTravail): ListeEmployes {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string|null $numeroInsee The numero insee.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNumeroInsee(?string $numeroInsee): ListeEmployes {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero permis.
     *
     * @param string|null $numeroPermis The numero permis.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setNumeroPermis(?string $numeroPermis): ListeEmployes {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }

    /**
     * Set the orphelin.
     *
     * @param bool|null $orphelin The orphelin.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setOrphelin(?bool $orphelin): ListeEmployes {
        $this->orphelin = $orphelin;
        return $this;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param bool|null $pasGestionPdp The pas gestion pdp.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPasGestionPdp(?bool $pasGestionPdp): ListeEmployes {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }

    /**
     * Set the pension.
     *
     * @param bool|null $pension The pension.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPension(?bool $pension): ListeEmployes {
        $this->pension = $pension;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPeriodicite(?string $periodicite): ListeEmployes {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime|null $permisDelivreLe The permis delivre le.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPermisDelivreLe(?DateTime $permisDelivreLe): ListeEmployes {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string|null $permisDelivrePar The permis delivre par.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPermisDelivrePar(?string $permisDelivrePar): ListeEmployes {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime|null $permisExpireLe The permis expire le.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPermisExpireLe(?DateTime $permisExpireLe): ListeEmployes {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string|null $personneAPrevenir The personne a prevenir.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPersonneAPrevenir(?string $personneAPrevenir): ListeEmployes {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float|null $pourcentAct The pourcent act.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPourcentAct(?float $pourcentAct): ListeEmployes {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPrenom(?string $prenom): ListeEmployes {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string|null $prenomConjoint The prenom conjoint.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setPrenomConjoint(?string $prenomConjoint): ListeEmployes {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setRib(?string $rib): ListeEmployes {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float|null $salaireBase The salaire base.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setSalaireBase(?float $salaireBase): ListeEmployes {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setService(?string $service): ListeEmployes {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setSexe(?string $sexe): ListeEmployes {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string|null $situationFam The situation fam.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setSituationFam(?string $situationFam): ListeEmployes {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float|null $tauxPensionCivile The taux pension civile.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTauxPensionCivile(?float $tauxPensionCivile): ListeEmployes {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float|null $tauxPensionMilitaire The taux pension militaire.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTauxPensionMilitaire(?float $tauxPensionMilitaire): ListeEmployes {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }

    /**
     * Set the tds138.
     *
     * @param string|null $tds138 The tds138.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTds138(?string $tds138): ListeEmployes {
        $this->tds138 = $tds138;
        return $this;
    }

    /**
     * Set the tds60.
     *
     * @param bool|null $tds60 The tds60.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTds60(?bool $tds60): ListeEmployes {
        $this->tds60 = $tds60;
        return $this;
    }

    /**
     * Set the tds61.
     *
     * @param string|null $tds61 The tds61.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTds61(?string $tds61): ListeEmployes {
        $this->tds61 = $tds61;
        return $this;
    }

    /**
     * Set the tds76.
     *
     * @param string|null $tds76 The tds76.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTds76(?string $tds76): ListeEmployes {
        $this->tds76 = $tds76;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTel1(?string $tel1): ListeEmployes {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTel2(?string $tel2): ListeEmployes {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string|null $telConjoint The tel conjoint.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTelConjoint(?string $telConjoint): ListeEmployes {
        $this->telConjoint = $telConjoint;
        return $this;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string|null $telPersAPrevenir The tel pers a prevenir.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTelPersAPrevenir(?string $telPersAPrevenir): ListeEmployes {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTitre(?string $titre): ListeEmployes {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the transfert entree.
     *
     * @param bool|null $transfertEntree The transfert entree.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTransfertEntree(?bool $transfertEntree): ListeEmployes {
        $this->transfertEntree = $transfertEntree;
        return $this;
    }

    /**
     * Set the transfert sortie.
     *
     * @param bool|null $transfertSortie The transfert sortie.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTransfertSortie(?bool $transfertSortie): ListeEmployes {
        $this->transfertSortie = $transfertSortie;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string|null $typeNationalite The type nationalite.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTypeNationalite(?string $typeNationalite): ListeEmployes {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string|null $typePaiement The type paiement.
     * @return ListeEmployes Returns this Liste employes.
     */
    public function setTypePaiement(?string $typePaiement): ListeEmployes {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
