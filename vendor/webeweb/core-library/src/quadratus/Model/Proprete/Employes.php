<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Employes {

    /**
     * A transferer en p.
     *
     * @var bool|null
     */
    private $aTransfererEnP;

    /**
     * Administratif.
     *
     * @var bool|null
     */
    private $administratif;

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
     * Chef equipe.
     *
     * @var bool|null
     */
    private $chefEquipe;

    /**
     * Cle deux.
     *
     * @var string|null
     */
    private $cleDeux;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code pays naissance.
     *
     * @var string|null
     */
    private $codePaysNaissance;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Commercial.
     *
     * @var bool|null
     */
    private $commercial;

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
     * Controleur.
     *
     * @var bool|null
     */
    private $controleur;

    /**
     * Date ancien.
     *
     * @var DateTime|null
     */
    private $dateAncien;

    /**
     * Date entree1.
     *
     * @var DateTime|null
     */
    private $dateEntree1;

    /**
     * Date entree2.
     *
     * @var DateTime|null
     */
    private $dateEntree2;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date sortie1.
     *
     * @var DateTime|null
     */
    private $dateSortie1;

    /**
     * Date sortie2.
     *
     * @var DateTime|null
     */
    private $dateSortie2;

    /**
     * Dept naissance.
     *
     * @var string|null
     */
    private $deptNaissance;

    /**
     * Dern num prime.
     *
     * @var int|null
     */
    private $dernNumPrime;

    /**
     * Dim type2.
     *
     * @var bool|null
     */
    private $dimType2;

    /**
     * Fictif.
     *
     * @var bool|null
     */
    private $fictif;

    /**
     * Gestion maj dim.
     *
     * @var string|null
     */
    private $gestionMajDim;

    /**
     * Gestion maj jf.
     *
     * @var string|null
     */
    private $gestionMajJf;

    /**
     * Gestion maj nuit.
     *
     * @var string|null
     */
    private $gestionMajNuit;

    /**
     * H nuit type2.
     *
     * @var bool|null
     */
    private $hNuitType2;

    /**
     * Handicape.
     *
     * @var bool|null
     */
    private $handicape;

    /**
     * Hotellerie.
     *
     * @var bool|null
     */
    private $hotellerie;

    /**
     * Inspecteur.
     *
     * @var bool|null
     */
    private $inspecteur;

    /**
     * Livreur.
     *
     * @var bool|null
     */
    private $livreur;

    /**
     * Mensualisation tache.
     *
     * @var string|null
     */
    private $mensualisationTache;

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
     * Numero insee.
     *
     * @var string|null
     */
    private $numeroInsee;

    /**
     * Numero pj pass.
     *
     * @var int|null
     */
    private $numeroPjPass;

    /**
     * Periode pointage cloturee.
     *
     * @var DateTime|null
     */
    private $periodePointageCloturee;

    /**
     * Polyvalent.
     *
     * @var bool|null
     */
    private $polyvalent;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Prime.
     *
     * @var bool|null
     */
    private $prime;

    /**
     * Qualification.
     *
     * @var string|null
     */
    private $qualification;

    /**
     * Situation fam.
     *
     * @var string|null
     */
    private $situationFam;

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
     * Temps passe.
     *
     * @var bool|null
     */
    private $tempsPasse;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Travaille jf.
     *
     * @var bool|null
     */
    private $travailleJf;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a transferer en p.
     *
     * @return bool|null Returns the a transferer en p.
     */
    public function getATransfererEnP(): ?bool {
        return $this->aTransfererEnP;
    }

    /**
     * Get the administratif.
     *
     * @return bool|null Returns the administratif.
     */
    public function getAdministratif(): ?bool {
        return $this->administratif;
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
     * Get the chef equipe.
     *
     * @return bool|null Returns the chef equipe.
     */
    public function getChefEquipe(): ?bool {
        return $this->chefEquipe;
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
     * Get the code officiel commune.
     *
     * @return string|null Returns the code officiel commune.
     */
    public function getCodeOfficielCommune(): ?string {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code pays naissance.
     *
     * @return string|null Returns the code pays naissance.
     */
    public function getCodePaysNaissance(): ?string {
        return $this->codePaysNaissance;
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
     * Get the commercial.
     *
     * @return bool|null Returns the commercial.
     */
    public function getCommercial(): ?bool {
        return $this->commercial;
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
     * Get the controleur.
     *
     * @return bool|null Returns the controleur.
     */
    public function getControleur(): ?bool {
        return $this->controleur;
    }

    /**
     * Get the date ancien.
     *
     * @return DateTime|null Returns the date ancien.
     */
    public function getDateAncien(): ?DateTime {
        return $this->dateAncien;
    }

    /**
     * Get the date entree1.
     *
     * @return DateTime|null Returns the date entree1.
     */
    public function getDateEntree1(): ?DateTime {
        return $this->dateEntree1;
    }

    /**
     * Get the date entree2.
     *
     * @return DateTime|null Returns the date entree2.
     */
    public function getDateEntree2(): ?DateTime {
        return $this->dateEntree2;
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
     * Get the date sortie1.
     *
     * @return DateTime|null Returns the date sortie1.
     */
    public function getDateSortie1(): ?DateTime {
        return $this->dateSortie1;
    }

    /**
     * Get the date sortie2.
     *
     * @return DateTime|null Returns the date sortie2.
     */
    public function getDateSortie2(): ?DateTime {
        return $this->dateSortie2;
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
     * Get the dern num prime.
     *
     * @return int|null Returns the dern num prime.
     */
    public function getDernNumPrime(): ?int {
        return $this->dernNumPrime;
    }

    /**
     * Get the dim type2.
     *
     * @return bool|null Returns the dim type2.
     */
    public function getDimType2(): ?bool {
        return $this->dimType2;
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
     * Get the gestion maj dim.
     *
     * @return string|null Returns the gestion maj dim.
     */
    public function getGestionMajDim(): ?string {
        return $this->gestionMajDim;
    }

    /**
     * Get the gestion maj jf.
     *
     * @return string|null Returns the gestion maj jf.
     */
    public function getGestionMajJf(): ?string {
        return $this->gestionMajJf;
    }

    /**
     * Get the gestion maj nuit.
     *
     * @return string|null Returns the gestion maj nuit.
     */
    public function getGestionMajNuit(): ?string {
        return $this->gestionMajNuit;
    }

    /**
     * Get the h nuit type2.
     *
     * @return bool|null Returns the h nuit type2.
     */
    public function getHNuitType2(): ?bool {
        return $this->hNuitType2;
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
     * Get the hotellerie.
     *
     * @return bool|null Returns the hotellerie.
     */
    public function getHotellerie(): ?bool {
        return $this->hotellerie;
    }

    /**
     * Get the inspecteur.
     *
     * @return bool|null Returns the inspecteur.
     */
    public function getInspecteur(): ?bool {
        return $this->inspecteur;
    }

    /**
     * Get the livreur.
     *
     * @return bool|null Returns the livreur.
     */
    public function getLivreur(): ?bool {
        return $this->livreur;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return string|null Returns the mensualisation tache.
     */
    public function getMensualisationTache(): ?string {
        return $this->mensualisationTache;
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
     * Get the numero insee.
     *
     * @return string|null Returns the numero insee.
     */
    public function getNumeroInsee(): ?string {
        return $this->numeroInsee;
    }

    /**
     * Get the numero pj pass.
     *
     * @return int|null Returns the numero pj pass.
     */
    public function getNumeroPjPass(): ?int {
        return $this->numeroPjPass;
    }

    /**
     * Get the periode pointage cloturee.
     *
     * @return DateTime|null Returns the periode pointage cloturee.
     */
    public function getPeriodePointageCloturee(): ?DateTime {
        return $this->periodePointageCloturee;
    }

    /**
     * Get the polyvalent.
     *
     * @return bool|null Returns the polyvalent.
     */
    public function getPolyvalent(): ?bool {
        return $this->polyvalent;
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
     * Get the prime.
     *
     * @return bool|null Returns the prime.
     */
    public function getPrime(): ?bool {
        return $this->prime;
    }

    /**
     * Get the qualification.
     *
     * @return string|null Returns the qualification.
     */
    public function getQualification(): ?string {
        return $this->qualification;
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
     * Get the temps passe.
     *
     * @return bool|null Returns the temps passe.
     */
    public function getTempsPasse(): ?bool {
        return $this->tempsPasse;
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
     * Get the travaille jf.
     *
     * @return bool|null Returns the travaille jf.
     */
    public function getTravailleJf(): ?bool {
        return $this->travailleJf;
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
     * Set the a transferer en p.
     *
     * @param bool|null $aTransfererEnP The a transferer en p.
     * @return Employes Returns this Employes.
     */
    public function setATransfererEnP(?bool $aTransfererEnP): Employes {
        $this->aTransfererEnP = $aTransfererEnP;
        return $this;
    }

    /**
     * Set the administratif.
     *
     * @param bool|null $administratif The administratif.
     * @return Employes Returns this Employes.
     */
    public function setAdministratif(?bool $administratif): Employes {
        $this->administratif = $administratif;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Employes Returns this Employes.
     */
    public function setBtq(?string $btq): Employes {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Employes Returns this Employes.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Employes {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param bool|null $chefEquipe The chef equipe.
     * @return Employes Returns this Employes.
     */
    public function setChefEquipe(?bool $chefEquipe): Employes {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string|null $cleDeux The cle deux.
     * @return Employes Returns this Employes.
     */
    public function setCleDeux(?string $cleDeux): Employes {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Employes Returns this Employes.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Employes {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays naissance.
     *
     * @param string|null $codePaysNaissance The code pays naissance.
     * @return Employes Returns this Employes.
     */
    public function setCodePaysNaissance(?string $codePaysNaissance): Employes {
        $this->codePaysNaissance = $codePaysNaissance;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Employes Returns this Employes.
     */
    public function setCodePostal(?string $codePostal): Employes {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the commercial.
     *
     * @param bool|null $commercial The commercial.
     * @return Employes Returns this Employes.
     */
    public function setCommercial(?bool $commercial): Employes {
        $this->commercial = $commercial;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string|null $communeNaissance The commune naissance.
     * @return Employes Returns this Employes.
     */
    public function setCommuneNaissance(?string $communeNaissance): Employes {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Employes Returns this Employes.
     */
    public function setComplement(?string $complement): Employes {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the controleur.
     *
     * @param bool|null $controleur The controleur.
     * @return Employes Returns this Employes.
     */
    public function setControleur(?bool $controleur): Employes {
        $this->controleur = $controleur;
        return $this;
    }

    /**
     * Set the date ancien.
     *
     * @param DateTime|null $dateAncien The date ancien.
     * @return Employes Returns this Employes.
     */
    public function setDateAncien(?DateTime $dateAncien): Employes {
        $this->dateAncien = $dateAncien;
        return $this;
    }

    /**
     * Set the date entree1.
     *
     * @param DateTime|null $dateEntree1 The date entree1.
     * @return Employes Returns this Employes.
     */
    public function setDateEntree1(?DateTime $dateEntree1): Employes {
        $this->dateEntree1 = $dateEntree1;
        return $this;
    }

    /**
     * Set the date entree2.
     *
     * @param DateTime|null $dateEntree2 The date entree2.
     * @return Employes Returns this Employes.
     */
    public function setDateEntree2(?DateTime $dateEntree2): Employes {
        $this->dateEntree2 = $dateEntree2;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return Employes Returns this Employes.
     */
    public function setDateNaissance(?DateTime $dateNaissance): Employes {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie1.
     *
     * @param DateTime|null $dateSortie1 The date sortie1.
     * @return Employes Returns this Employes.
     */
    public function setDateSortie1(?DateTime $dateSortie1): Employes {
        $this->dateSortie1 = $dateSortie1;
        return $this;
    }

    /**
     * Set the date sortie2.
     *
     * @param DateTime|null $dateSortie2 The date sortie2.
     * @return Employes Returns this Employes.
     */
    public function setDateSortie2(?DateTime $dateSortie2): Employes {
        $this->dateSortie2 = $dateSortie2;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string|null $deptNaissance The dept naissance.
     * @return Employes Returns this Employes.
     */
    public function setDeptNaissance(?string $deptNaissance): Employes {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the dern num prime.
     *
     * @param int|null $dernNumPrime The dern num prime.
     * @return Employes Returns this Employes.
     */
    public function setDernNumPrime(?int $dernNumPrime): Employes {
        $this->dernNumPrime = $dernNumPrime;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param bool|null $dimType2 The dim type2.
     * @return Employes Returns this Employes.
     */
    public function setDimType2(?bool $dimType2): Employes {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool|null $fictif The fictif.
     * @return Employes Returns this Employes.
     */
    public function setFictif(?bool $fictif): Employes {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string|null $gestionMajDim The gestion maj dim.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajDim(?string $gestionMajDim): Employes {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj jf.
     *
     * @param string|null $gestionMajJf The gestion maj jf.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajJf(?string $gestionMajJf): Employes {
        $this->gestionMajJf = $gestionMajJf;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string|null $gestionMajNuit The gestion maj nuit.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajNuit(?string $gestionMajNuit): Employes {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param bool|null $hNuitType2 The h nuit type2.
     * @return Employes Returns this Employes.
     */
    public function setHNuitType2(?bool $hNuitType2): Employes {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param bool|null $handicape The handicape.
     * @return Employes Returns this Employes.
     */
    public function setHandicape(?bool $handicape): Employes {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the hotellerie.
     *
     * @param bool|null $hotellerie The hotellerie.
     * @return Employes Returns this Employes.
     */
    public function setHotellerie(?bool $hotellerie): Employes {
        $this->hotellerie = $hotellerie;
        return $this;
    }

    /**
     * Set the inspecteur.
     *
     * @param bool|null $inspecteur The inspecteur.
     * @return Employes Returns this Employes.
     */
    public function setInspecteur(?bool $inspecteur): Employes {
        $this->inspecteur = $inspecteur;
        return $this;
    }

    /**
     * Set the livreur.
     *
     * @param bool|null $livreur The livreur.
     * @return Employes Returns this Employes.
     */
    public function setLivreur(?bool $livreur): Employes {
        $this->livreur = $livreur;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param string|null $mensualisationTache The mensualisation tache.
     * @return Employes Returns this Employes.
     */
    public function setMensualisationTache(?string $mensualisationTache): Employes {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string|null $nationalite The nationalite.
     * @return Employes Returns this Employes.
     */
    public function setNationalite(?string $nationalite): Employes {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float|null $nbHeureMois The nb heure mois.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureMois(?float $nbHeureMois): Employes {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return Employes Returns this Employes.
     */
    public function setNomMarital(?string $nomMarital): Employes {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return Employes Returns this Employes.
     */
    public function setNomNaissance(?string $nomNaissance): Employes {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Employes Returns this Employes.
     */
    public function setNomVille(?string $nomVille): Employes {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Employes Returns this Employes.
     */
    public function setNomVoie(?string $nomVoie): Employes {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string|null $nombreEnfants The nombre enfants.
     * @return Employes Returns this Employes.
     */
    public function setNombreEnfants(?string $nombreEnfants): Employes {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Employes Returns this Employes.
     */
    public function setNumVoie(?string $numVoie): Employes {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return Employes Returns this Employes.
     */
    public function setNumero(?string $numero): Employes {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string|null $numeroInsee The numero insee.
     * @return Employes Returns this Employes.
     */
    public function setNumeroInsee(?string $numeroInsee): Employes {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero pj pass.
     *
     * @param int|null $numeroPjPass The numero pj pass.
     * @return Employes Returns this Employes.
     */
    public function setNumeroPjPass(?int $numeroPjPass): Employes {
        $this->numeroPjPass = $numeroPjPass;
        return $this;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime|null $periodePointageCloturee The periode pointage cloturee.
     * @return Employes Returns this Employes.
     */
    public function setPeriodePointageCloturee(?DateTime $periodePointageCloturee): Employes {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }

    /**
     * Set the polyvalent.
     *
     * @param bool|null $polyvalent The polyvalent.
     * @return Employes Returns this Employes.
     */
    public function setPolyvalent(?bool $polyvalent): Employes {
        $this->polyvalent = $polyvalent;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return Employes Returns this Employes.
     */
    public function setPrenom(?string $prenom): Employes {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prime.
     *
     * @param bool|null $prime The prime.
     * @return Employes Returns this Employes.
     */
    public function setPrime(?bool $prime): Employes {
        $this->prime = $prime;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification The qualification.
     * @return Employes Returns this Employes.
     */
    public function setQualification(?string $qualification): Employes {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string|null $situationFam The situation fam.
     * @return Employes Returns this Employes.
     */
    public function setSituationFam(?string $situationFam): Employes {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return Employes Returns this Employes.
     */
    public function setTel1(?string $tel1): Employes {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return Employes Returns this Employes.
     */
    public function setTel2(?string $tel2): Employes {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param bool|null $tempsPasse The temps passe.
     * @return Employes Returns this Employes.
     */
    public function setTempsPasse(?bool $tempsPasse): Employes {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return Employes Returns this Employes.
     */
    public function setTitre(?string $titre): Employes {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the travaille jf.
     *
     * @param bool|null $travailleJf The travaille jf.
     * @return Employes Returns this Employes.
     */
    public function setTravailleJf(?bool $travailleJf): Employes {
        $this->travailleJf = $travailleJf;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return Employes Returns this Employes.
     */
    public function setUniqId(?string $uniqId): Employes {
        $this->uniqId = $uniqId;
        return $this;
    }
}
