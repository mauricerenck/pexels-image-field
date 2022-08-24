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
 * Locations fi.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class LocationsFi {

    /**
     * Bureau.
     *
     * @var string|null
     */
    private $bureau;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Code journal echeance.
     *
     * @var string|null
     */
    private $codeJournalEcheance;

    /**
     * Code journal paiement.
     *
     * @var string|null
     */
    private $codeJournalPaiement;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Compte frn.
     *
     * @var string|null
     */
    private $compteFrn;

    /**
     * Cpt assurance.
     *
     * @var string|null
     */
    private $cptAssurance;

    /**
     * Cpt charge.
     *
     * @var string|null
     */
    private $cptCharge;

    /**
     * Cpt entretien.
     *
     * @var string|null
     */
    private $cptEntretien;

    /**
     * Cpt tva.
     *
     * @var string|null
     */
    private $cptTva;

    /**
     * Cpt tva assu.
     *
     * @var string|null
     */
    private $cptTvaAssu;

    /**
     * Date acquisition.
     *
     * @var DateTime|null
     */
    private $dateAcquisition;

    /**
     * Date fin contrat.
     *
     * @var DateTime|null
     */
    private $dateFinContrat;

    /**
     * Date mise service.
     *
     * @var DateTime|null
     */
    private $dateMiseService;

    /**
     * Din.
     *
     * @var bool|null
     */
    private $din;

    /**
     * Guid vehicule.
     *
     * @var string|null
     */
    private $guidVehicule;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle frn.
     *
     * @var string|null
     */
    private $libelleFrn;

    /**
     * Materiaux agricole.
     *
     * @var bool|null
     */
    private $materiauxAgricole;

    /**
     * Montant tva.
     *
     * @var float|null
     */
    private $montantTva;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Taxe pro.
     *
     * @var bool|null
     */
    private $taxePro;

    /**
     * Tp duree.
     *
     * @var int|null
     */
    private $tpDuree;

    /**
     * Tp echoir echu.
     *
     * @var string|null
     */
    private $tpEchoirEchu;

    /**
     * Tp mois annee.
     *
     * @var string|null
     */
    private $tpMoisAnnee;

    /**
     * Tp montt depot.
     *
     * @var float|null
     */
    private $tpMonttDepot;

    /**
     * Tp periodicite.
     *
     * @var string|null
     */
    private $tpPeriodicite;

    /**
     * Tp premier paiement.
     *
     * @var DateTime|null
     */
    private $tpPremierPaiement;

    /**
     * Valeur ht.
     *
     * @var float|null
     */
    private $valeurHt;

    /**
     * Valeur locative.
     *
     * @var float|null
     */
    private $valeurLocative;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bureau.
     *
     * @return string|null Returns the bureau.
     */
    public function getBureau(): ?string {
        return $this->bureau;
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
     * Get the code journal echeance.
     *
     * @return string|null Returns the code journal echeance.
     */
    public function getCodeJournalEcheance(): ?string {
        return $this->codeJournalEcheance;
    }

    /**
     * Get the code journal paiement.
     *
     * @return string|null Returns the code journal paiement.
     */
    public function getCodeJournalPaiement(): ?string {
        return $this->codeJournalPaiement;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the compte frn.
     *
     * @return string|null Returns the compte frn.
     */
    public function getCompteFrn(): ?string {
        return $this->compteFrn;
    }

    /**
     * Get the cpt assurance.
     *
     * @return string|null Returns the cpt assurance.
     */
    public function getCptAssurance(): ?string {
        return $this->cptAssurance;
    }

    /**
     * Get the cpt charge.
     *
     * @return string|null Returns the cpt charge.
     */
    public function getCptCharge(): ?string {
        return $this->cptCharge;
    }

    /**
     * Get the cpt entretien.
     *
     * @return string|null Returns the cpt entretien.
     */
    public function getCptEntretien(): ?string {
        return $this->cptEntretien;
    }

    /**
     * Get the cpt tva.
     *
     * @return string|null Returns the cpt tva.
     */
    public function getCptTva(): ?string {
        return $this->cptTva;
    }

    /**
     * Get the cpt tva assu.
     *
     * @return string|null Returns the cpt tva assu.
     */
    public function getCptTvaAssu(): ?string {
        return $this->cptTvaAssu;
    }

    /**
     * Get the date acquisition.
     *
     * @return DateTime|null Returns the date acquisition.
     */
    public function getDateAcquisition(): ?DateTime {
        return $this->dateAcquisition;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime|null Returns the date fin contrat.
     */
    public function getDateFinContrat(): ?DateTime {
        return $this->dateFinContrat;
    }

    /**
     * Get the date mise service.
     *
     * @return DateTime|null Returns the date mise service.
     */
    public function getDateMiseService(): ?DateTime {
        return $this->dateMiseService;
    }

    /**
     * Get the din.
     *
     * @return bool|null Returns the din.
     */
    public function getDin(): ?bool {
        return $this->din;
    }

    /**
     * Get the guid vehicule.
     *
     * @return string|null Returns the guid vehicule.
     */
    public function getGuidVehicule(): ?string {
        return $this->guidVehicule;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the libelle frn.
     *
     * @return string|null Returns the libelle frn.
     */
    public function getLibelleFrn(): ?string {
        return $this->libelleFrn;
    }

    /**
     * Get the materiaux agricole.
     *
     * @return bool|null Returns the materiaux agricole.
     */
    public function getMateriauxAgricole(): ?bool {
        return $this->materiauxAgricole;
    }

    /**
     * Get the montant tva.
     *
     * @return float|null Returns the montant tva.
     */
    public function getMontantTva(): ?float {
        return $this->montantTva;
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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
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
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
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
     * Get the taxe pro.
     *
     * @return bool|null Returns the taxe pro.
     */
    public function getTaxePro(): ?bool {
        return $this->taxePro;
    }

    /**
     * Get the tp duree.
     *
     * @return int|null Returns the tp duree.
     */
    public function getTpDuree(): ?int {
        return $this->tpDuree;
    }

    /**
     * Get the tp echoir echu.
     *
     * @return string|null Returns the tp echoir echu.
     */
    public function getTpEchoirEchu(): ?string {
        return $this->tpEchoirEchu;
    }

    /**
     * Get the tp mois annee.
     *
     * @return string|null Returns the tp mois annee.
     */
    public function getTpMoisAnnee(): ?string {
        return $this->tpMoisAnnee;
    }

    /**
     * Get the tp montt depot.
     *
     * @return float|null Returns the tp montt depot.
     */
    public function getTpMonttDepot(): ?float {
        return $this->tpMonttDepot;
    }

    /**
     * Get the tp periodicite.
     *
     * @return string|null Returns the tp periodicite.
     */
    public function getTpPeriodicite(): ?string {
        return $this->tpPeriodicite;
    }

    /**
     * Get the tp premier paiement.
     *
     * @return DateTime|null Returns the tp premier paiement.
     */
    public function getTpPremierPaiement(): ?DateTime {
        return $this->tpPremierPaiement;
    }

    /**
     * Get the valeur ht.
     *
     * @return float|null Returns the valeur ht.
     */
    public function getValeurHt(): ?float {
        return $this->valeurHt;
    }

    /**
     * Get the valeur locative.
     *
     * @return float|null Returns the valeur locative.
     */
    public function getValeurLocative(): ?float {
        return $this->valeurLocative;
    }

    /**
     * Set the bureau.
     *
     * @param string|null $bureau The bureau.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setBureau(?string $bureau): LocationsFi {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCentreAnalytique(?string $centreAnalytique): LocationsFi {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal echeance.
     *
     * @param string|null $codeJournalEcheance The code journal echeance.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCodeJournalEcheance(?string $codeJournalEcheance): LocationsFi {
        $this->codeJournalEcheance = $codeJournalEcheance;
        return $this;
    }

    /**
     * Set the code journal paiement.
     *
     * @param string|null $codeJournalPaiement The code journal paiement.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCodeJournalPaiement(?string $codeJournalPaiement): LocationsFi {
        $this->codeJournalPaiement = $codeJournalPaiement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCodeTva(?string $codeTva): LocationsFi {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compte frn.
     *
     * @param string|null $compteFrn The compte frn.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCompteFrn(?string $compteFrn): LocationsFi {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the cpt assurance.
     *
     * @param string|null $cptAssurance The cpt assurance.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCptAssurance(?string $cptAssurance): LocationsFi {
        $this->cptAssurance = $cptAssurance;
        return $this;
    }

    /**
     * Set the cpt charge.
     *
     * @param string|null $cptCharge The cpt charge.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCptCharge(?string $cptCharge): LocationsFi {
        $this->cptCharge = $cptCharge;
        return $this;
    }

    /**
     * Set the cpt entretien.
     *
     * @param string|null $cptEntretien The cpt entretien.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCptEntretien(?string $cptEntretien): LocationsFi {
        $this->cptEntretien = $cptEntretien;
        return $this;
    }

    /**
     * Set the cpt tva.
     *
     * @param string|null $cptTva The cpt tva.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCptTva(?string $cptTva): LocationsFi {
        $this->cptTva = $cptTva;
        return $this;
    }

    /**
     * Set the cpt tva assu.
     *
     * @param string|null $cptTvaAssu The cpt tva assu.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setCptTvaAssu(?string $cptTvaAssu): LocationsFi {
        $this->cptTvaAssu = $cptTvaAssu;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime|null $dateAcquisition The date acquisition.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setDateAcquisition(?DateTime $dateAcquisition): LocationsFi {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setDateFinContrat(?DateTime $dateFinContrat): LocationsFi {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime|null $dateMiseService The date mise service.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setDateMiseService(?DateTime $dateMiseService): LocationsFi {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the din.
     *
     * @param bool|null $din The din.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setDin(?bool $din): LocationsFi {
        $this->din = $din;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string|null $guidVehicule The guid vehicule.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setGuidVehicule(?string $guidVehicule): LocationsFi {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setLibelle(?string $libelle): LocationsFi {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string|null $libelleFrn The libelle frn.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setLibelleFrn(?string $libelleFrn): LocationsFi {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool|null $materiauxAgricole The materiaux agricole.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setMateriauxAgricole(?bool $materiauxAgricole): LocationsFi {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float|null $montantTva The montant tva.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setMontantTva(?float $montantTva): LocationsFi {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setNumero(?int $numero): LocationsFi {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setNumeroCompte(?string $numeroCompte): LocationsFi {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setNumeroPj(?int $numeroPj): LocationsFi {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setQuantite(?float $quantite): LocationsFi {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setService(?string $service): LocationsFi {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool|null $taxePro The taxe pro.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTaxePro(?bool $taxePro): LocationsFi {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the tp duree.
     *
     * @param int|null $tpDuree The tp duree.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTpDuree(?int $tpDuree): LocationsFi {
        $this->tpDuree = $tpDuree;
        return $this;
    }

    /**
     * Set the tp echoir echu.
     *
     * @param string|null $tpEchoirEchu The tp echoir echu.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTpEchoirEchu(?string $tpEchoirEchu): LocationsFi {
        $this->tpEchoirEchu = $tpEchoirEchu;
        return $this;
    }

    /**
     * Set the tp mois annee.
     *
     * @param string|null $tpMoisAnnee The tp mois annee.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTpMoisAnnee(?string $tpMoisAnnee): LocationsFi {
        $this->tpMoisAnnee = $tpMoisAnnee;
        return $this;
    }

    /**
     * Set the tp montt depot.
     *
     * @param float|null $tpMonttDepot The tp montt depot.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTpMonttDepot(?float $tpMonttDepot): LocationsFi {
        $this->tpMonttDepot = $tpMonttDepot;
        return $this;
    }

    /**
     * Set the tp periodicite.
     *
     * @param string|null $tpPeriodicite The tp periodicite.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTpPeriodicite(?string $tpPeriodicite): LocationsFi {
        $this->tpPeriodicite = $tpPeriodicite;
        return $this;
    }

    /**
     * Set the tp premier paiement.
     *
     * @param DateTime|null $tpPremierPaiement The tp premier paiement.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setTpPremierPaiement(?DateTime $tpPremierPaiement): LocationsFi {
        $this->tpPremierPaiement = $tpPremierPaiement;
        return $this;
    }

    /**
     * Set the valeur ht.
     *
     * @param float|null $valeurHt The valeur ht.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setValeurHt(?float $valeurHt): LocationsFi {
        $this->valeurHt = $valeurHt;
        return $this;
    }

    /**
     * Set the valeur locative.
     *
     * @param float|null $valeurLocative The valeur locative.
     * @return LocationsFi Returns this Locations fi.
     */
    public function setValeurLocative(?float $valeurLocative): LocationsFi {
        $this->valeurLocative = $valeurLocative;
        return $this;
    }
}
