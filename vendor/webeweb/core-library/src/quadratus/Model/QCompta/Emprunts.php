<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Emprunts.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Emprunts {

    /**
     * A echoir echu.
     *
     * @var string|null
     */
    private $aEchoirEchu;

    /**
     * Categorie.
     *
     * @var string|null
     */
    private $categorie;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Cpt assurance emprunt.
     *
     * @var string|null
     */
    private $cptAssuranceEmprunt;

    /**
     * Cpt emprunt.
     *
     * @var string|null
     */
    private $cptEmprunt;

    /**
     * Cpt interet emprunt.
     *
     * @var string|null
     */
    private $cptInteretEmprunt;

    /**
     * Date ouverture.
     *
     * @var DateTime|null
     */
    private $dateOuverture;

    /**
     * Date premiere echeance.
     *
     * @var DateTime|null
     */
    private $datePremiereEcheance;

    /**
     * Differe.
     *
     * @var bool|null
     */
    private $differe;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

    /**
     * Emprunt en francs.
     *
     * @var bool|null
     */
    private $empruntEnFrancs;

    /**
     * Identification.
     *
     * @var string|null
     */
    private $identification;

    /**
     * Mois annee.
     *
     * @var string|null
     */
    private $moisAnnee;

    /**
     * Montant assurance.
     *
     * @var float|null
     */
    private $montantAssurance;

    /**
     * Montant emprunte.
     *
     * @var float|null
     */
    private $montantEmprunte;

    /**
     * Mt capital fixe remb.
     *
     * @var float|null
     */
    private $mtCapitalFixeRemb;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Nature analytique.
     *
     * @var string|null
     */
    private $natureAnalytique;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Taux assurance.
     *
     * @var float|null
     */
    private $tauxAssurance;

    /**
     * Taux interet.
     *
     * @var float|null
     */
    private $tauxInteret;

    /**
     * Type in fine.
     *
     * @var bool|null
     */
    private $typeInFine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a echoir echu.
     *
     * @return string|null Returns the a echoir echu.
     */
    public function getAEchoirEchu(): ?string {
        return $this->aEchoirEchu;
    }

    /**
     * Get the categorie.
     *
     * @return string|null Returns the categorie.
     */
    public function getCategorie(): ?string {
        return $this->categorie;
    }

    /**
     * Get the centre analytique.
     *
     * @return string|null Returns the centre analytique.
     */
    public function getCentreAnalytique(): ?string {
        return $this->centreAnalytique;
    }

    /**
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the cpt assurance emprunt.
     *
     * @return string|null Returns the cpt assurance emprunt.
     */
    public function getCptAssuranceEmprunt(): ?string {
        return $this->cptAssuranceEmprunt;
    }

    /**
     * Get the cpt emprunt.
     *
     * @return string|null Returns the cpt emprunt.
     */
    public function getCptEmprunt(): ?string {
        return $this->cptEmprunt;
    }

    /**
     * Get the cpt interet emprunt.
     *
     * @return string|null Returns the cpt interet emprunt.
     */
    public function getCptInteretEmprunt(): ?string {
        return $this->cptInteretEmprunt;
    }

    /**
     * Get the date ouverture.
     *
     * @return DateTime|null Returns the date ouverture.
     */
    public function getDateOuverture(): ?DateTime {
        return $this->dateOuverture;
    }

    /**
     * Get the date premiere echeance.
     *
     * @return DateTime|null Returns the date premiere echeance.
     */
    public function getDatePremiereEcheance(): ?DateTime {
        return $this->datePremiereEcheance;
    }

    /**
     * Get the differe.
     *
     * @return bool|null Returns the differe.
     */
    public function getDiffere(): ?bool {
        return $this->differe;
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
     * Get the emprunt en francs.
     *
     * @return bool|null Returns the emprunt en francs.
     */
    public function getEmpruntEnFrancs(): ?bool {
        return $this->empruntEnFrancs;
    }

    /**
     * Get the identification.
     *
     * @return string|null Returns the identification.
     */
    public function getIdentification(): ?string {
        return $this->identification;
    }

    /**
     * Get the mois annee.
     *
     * @return string|null Returns the mois annee.
     */
    public function getMoisAnnee(): ?string {
        return $this->moisAnnee;
    }

    /**
     * Get the montant assurance.
     *
     * @return float|null Returns the montant assurance.
     */
    public function getMontantAssurance(): ?float {
        return $this->montantAssurance;
    }

    /**
     * Get the montant emprunte.
     *
     * @return float|null Returns the montant emprunte.
     */
    public function getMontantEmprunte(): ?float {
        return $this->montantEmprunte;
    }

    /**
     * Get the mt capital fixe remb.
     *
     * @return float|null Returns the mt capital fixe remb.
     */
    public function getMtCapitalFixeRemb(): ?float {
        return $this->mtCapitalFixeRemb;
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
     * Get the nature analytique.
     *
     * @return string|null Returns the nature analytique.
     */
    public function getNatureAnalytique(): ?string {
        return $this->natureAnalytique;
    }

    /**
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the numero pj.
     *
     * @return int|null Returns the numero pj.
     */
    public function getNumeroPj(): ?int {
        return $this->numeroPj;
    }

    /**
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
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
     * Get the taux assurance.
     *
     * @return float|null Returns the taux assurance.
     */
    public function getTauxAssurance(): ?float {
        return $this->tauxAssurance;
    }

    /**
     * Get the taux interet.
     *
     * @return float|null Returns the taux interet.
     */
    public function getTauxInteret(): ?float {
        return $this->tauxInteret;
    }

    /**
     * Get the type in fine.
     *
     * @return bool|null Returns the type in fine.
     */
    public function getTypeInFine(): ?bool {
        return $this->typeInFine;
    }

    /**
     * Set the a echoir echu.
     *
     * @param string|null $aEchoirEchu The a echoir echu.
     * @return Emprunts Returns this Emprunts.
     */
    public function setAEchoirEchu(?string $aEchoirEchu): Emprunts {
        $this->aEchoirEchu = $aEchoirEchu;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string|null $categorie The categorie.
     * @return Emprunts Returns this Emprunts.
     */
    public function setCategorie(?string $categorie): Emprunts {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return Emprunts Returns this Emprunts.
     */
    public function setCentreAnalytique(?string $centreAnalytique): Emprunts {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return Emprunts Returns this Emprunts.
     */
    public function setCodeJournal(?string $codeJournal): Emprunts {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the cpt assurance emprunt.
     *
     * @param string|null $cptAssuranceEmprunt The cpt assurance emprunt.
     * @return Emprunts Returns this Emprunts.
     */
    public function setCptAssuranceEmprunt(?string $cptAssuranceEmprunt): Emprunts {
        $this->cptAssuranceEmprunt = $cptAssuranceEmprunt;
        return $this;
    }

    /**
     * Set the cpt emprunt.
     *
     * @param string|null $cptEmprunt The cpt emprunt.
     * @return Emprunts Returns this Emprunts.
     */
    public function setCptEmprunt(?string $cptEmprunt): Emprunts {
        $this->cptEmprunt = $cptEmprunt;
        return $this;
    }

    /**
     * Set the cpt interet emprunt.
     *
     * @param string|null $cptInteretEmprunt The cpt interet emprunt.
     * @return Emprunts Returns this Emprunts.
     */
    public function setCptInteretEmprunt(?string $cptInteretEmprunt): Emprunts {
        $this->cptInteretEmprunt = $cptInteretEmprunt;
        return $this;
    }

    /**
     * Set the date ouverture.
     *
     * @param DateTime|null $dateOuverture The date ouverture.
     * @return Emprunts Returns this Emprunts.
     */
    public function setDateOuverture(?DateTime $dateOuverture): Emprunts {
        $this->dateOuverture = $dateOuverture;
        return $this;
    }

    /**
     * Set the date premiere echeance.
     *
     * @param DateTime|null $datePremiereEcheance The date premiere echeance.
     * @return Emprunts Returns this Emprunts.
     */
    public function setDatePremiereEcheance(?DateTime $datePremiereEcheance): Emprunts {
        $this->datePremiereEcheance = $datePremiereEcheance;
        return $this;
    }

    /**
     * Set the differe.
     *
     * @param bool|null $differe The differe.
     * @return Emprunts Returns this Emprunts.
     */
    public function setDiffere(?bool $differe): Emprunts {
        $this->differe = $differe;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return Emprunts Returns this Emprunts.
     */
    public function setDuree(?int $duree): Emprunts {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the emprunt en francs.
     *
     * @param bool|null $empruntEnFrancs The emprunt en francs.
     * @return Emprunts Returns this Emprunts.
     */
    public function setEmpruntEnFrancs(?bool $empruntEnFrancs): Emprunts {
        $this->empruntEnFrancs = $empruntEnFrancs;
        return $this;
    }

    /**
     * Set the identification.
     *
     * @param string|null $identification The identification.
     * @return Emprunts Returns this Emprunts.
     */
    public function setIdentification(?string $identification): Emprunts {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Set the mois annee.
     *
     * @param string|null $moisAnnee The mois annee.
     * @return Emprunts Returns this Emprunts.
     */
    public function setMoisAnnee(?string $moisAnnee): Emprunts {
        $this->moisAnnee = $moisAnnee;
        return $this;
    }

    /**
     * Set the montant assurance.
     *
     * @param float|null $montantAssurance The montant assurance.
     * @return Emprunts Returns this Emprunts.
     */
    public function setMontantAssurance(?float $montantAssurance): Emprunts {
        $this->montantAssurance = $montantAssurance;
        return $this;
    }

    /**
     * Set the montant emprunte.
     *
     * @param float|null $montantEmprunte The montant emprunte.
     * @return Emprunts Returns this Emprunts.
     */
    public function setMontantEmprunte(?float $montantEmprunte): Emprunts {
        $this->montantEmprunte = $montantEmprunte;
        return $this;
    }

    /**
     * Set the mt capital fixe remb.
     *
     * @param float|null $mtCapitalFixeRemb The mt capital fixe remb.
     * @return Emprunts Returns this Emprunts.
     */
    public function setMtCapitalFixeRemb(?float $mtCapitalFixeRemb): Emprunts {
        $this->mtCapitalFixeRemb = $mtCapitalFixeRemb;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return Emprunts Returns this Emprunts.
     */
    public function setNature(?string $nature): Emprunts {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string|null $natureAnalytique The nature analytique.
     * @return Emprunts Returns this Emprunts.
     */
    public function setNatureAnalytique(?string $natureAnalytique): Emprunts {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return Emprunts Returns this Emprunts.
     */
    public function setNumero(?int $numero): Emprunts {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Emprunts Returns this Emprunts.
     */
    public function setNumeroPj(?int $numeroPj): Emprunts {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return Emprunts Returns this Emprunts.
     */
    public function setOrganisme(?string $organisme): Emprunts {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return Emprunts Returns this Emprunts.
     */
    public function setPeriodicite(?string $periodicite): Emprunts {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the taux assurance.
     *
     * @param float|null $tauxAssurance The taux assurance.
     * @return Emprunts Returns this Emprunts.
     */
    public function setTauxAssurance(?float $tauxAssurance): Emprunts {
        $this->tauxAssurance = $tauxAssurance;
        return $this;
    }

    /**
     * Set the taux interet.
     *
     * @param float|null $tauxInteret The taux interet.
     * @return Emprunts Returns this Emprunts.
     */
    public function setTauxInteret(?float $tauxInteret): Emprunts {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }

    /**
     * Set the type in fine.
     *
     * @param bool|null $typeInFine The type in fine.
     * @return Emprunts Returns this Emprunts.
     */
    public function setTypeInFine(?bool $typeInFine): Emprunts {
        $this->typeInFine = $typeInFine;
        return $this;
    }
}
