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
 * Subventions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Subventions {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Coeff degressif.
     *
     * @var float|null
     */
    private $coeffDegressif;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Date mise en service.
     *
     * @var DateTime|null
     */
    private $dateMiseEnService;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

    /**
     * Immo numero.
     *
     * @var int|null
     */
    private $immoNumero;

    /**
     * Immo numero compte.
     *
     * @var string|null
     */
    private $immoNumeroCompte;

    /**
     * Immo numero deux.
     *
     * @var int|null
     */
    private $immoNumeroDeux;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Num contrat.
     *
     * @var string|null
     */
    private $numContrat;

    /**
     * Num cpt subvention.
     *
     * @var string|null
     */
    private $numCptSubvention;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Taux lineaire.
     *
     * @var float|null
     */
    private $tauxLineaire;

    /**
     * Type amort.
     *
     * @var string|null
     */
    private $typeAmort;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the coeff degressif.
     *
     * @return float|null Returns the coeff degressif.
     */
    public function getCoeffDegressif(): ?float {
        return $this->coeffDegressif;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession(): ?DateTime {
        return $this->dateCession;
    }

    /**
     * Get the date mise en service.
     *
     * @return DateTime|null Returns the date mise en service.
     */
    public function getDateMiseEnService(): ?DateTime {
        return $this->dateMiseEnService;
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
     * Get the immo numero.
     *
     * @return int|null Returns the immo numero.
     */
    public function getImmoNumero(): ?int {
        return $this->immoNumero;
    }

    /**
     * Get the immo numero compte.
     *
     * @return string|null Returns the immo numero compte.
     */
    public function getImmoNumeroCompte(): ?string {
        return $this->immoNumeroCompte;
    }

    /**
     * Get the immo numero deux.
     *
     * @return int|null Returns the immo numero deux.
     */
    public function getImmoNumeroDeux(): ?int {
        return $this->immoNumeroDeux;
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
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the num contrat.
     *
     * @return string|null Returns the num contrat.
     */
    public function getNumContrat(): ?string {
        return $this->numContrat;
    }

    /**
     * Get the num cpt subvention.
     *
     * @return string|null Returns the num cpt subvention.
     */
    public function getNumCptSubvention(): ?string {
        return $this->numCptSubvention;
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
     * Get the taux lineaire.
     *
     * @return float|null Returns the taux lineaire.
     */
    public function getTauxLineaire(): ?float {
        return $this->tauxLineaire;
    }

    /**
     * Get the type amort.
     *
     * @return string|null Returns the type amort.
     */
    public function getTypeAmort(): ?string {
        return $this->typeAmort;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return Subventions Returns this Subventions.
     */
    public function setCodeCentre(?string $codeCentre): Subventions {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the coeff degressif.
     *
     * @param float|null $coeffDegressif The coeff degressif.
     * @return Subventions Returns this Subventions.
     */
    public function setCoeffDegressif(?float $coeffDegressif): Subventions {
        $this->coeffDegressif = $coeffDegressif;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return Subventions Returns this Subventions.
     */
    public function setDate(?DateTime $date): Subventions {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     * @return Subventions Returns this Subventions.
     */
    public function setDateCession(?DateTime $dateCession): Subventions {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date mise en service.
     *
     * @param DateTime|null $dateMiseEnService The date mise en service.
     * @return Subventions Returns this Subventions.
     */
    public function setDateMiseEnService(?DateTime $dateMiseEnService): Subventions {
        $this->dateMiseEnService = $dateMiseEnService;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return Subventions Returns this Subventions.
     */
    public function setDuree(?int $duree): Subventions {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the immo numero.
     *
     * @param int|null $immoNumero The immo numero.
     * @return Subventions Returns this Subventions.
     */
    public function setImmoNumero(?int $immoNumero): Subventions {
        $this->immoNumero = $immoNumero;
        return $this;
    }

    /**
     * Set the immo numero compte.
     *
     * @param string|null $immoNumeroCompte The immo numero compte.
     * @return Subventions Returns this Subventions.
     */
    public function setImmoNumeroCompte(?string $immoNumeroCompte): Subventions {
        $this->immoNumeroCompte = $immoNumeroCompte;
        return $this;
    }

    /**
     * Set the immo numero deux.
     *
     * @param int|null $immoNumeroDeux The immo numero deux.
     * @return Subventions Returns this Subventions.
     */
    public function setImmoNumeroDeux(?int $immoNumeroDeux): Subventions {
        $this->immoNumeroDeux = $immoNumeroDeux;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Subventions Returns this Subventions.
     */
    public function setLibelle(?string $libelle): Subventions {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return Subventions Returns this Subventions.
     */
    public function setMontant(?float $montant): Subventions {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string|null $numContrat The num contrat.
     * @return Subventions Returns this Subventions.
     */
    public function setNumContrat(?string $numContrat): Subventions {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt subvention.
     *
     * @param string|null $numCptSubvention The num cpt subvention.
     * @return Subventions Returns this Subventions.
     */
    public function setNumCptSubvention(?string $numCptSubvention): Subventions {
        $this->numCptSubvention = $numCptSubvention;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Subventions Returns this Subventions.
     */
    public function setNumeroPj(?int $numeroPj): Subventions {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the taux lineaire.
     *
     * @param float|null $tauxLineaire The taux lineaire.
     * @return Subventions Returns this Subventions.
     */
    public function setTauxLineaire(?float $tauxLineaire): Subventions {
        $this->tauxLineaire = $tauxLineaire;
        return $this;
    }

    /**
     * Set the type amort.
     *
     * @param string|null $typeAmort The type amort.
     * @return Subventions Returns this Subventions.
     */
    public function setTypeAmort(?string $typeAmort): Subventions {
        $this->typeAmort = $typeAmort;
        return $this;
    }
}
