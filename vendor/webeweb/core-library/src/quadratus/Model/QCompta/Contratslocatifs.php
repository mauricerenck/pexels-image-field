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
 * Contratslocatifs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Contratslocatifs {

    /**
     * Caution.
     *
     * @var float|null
     */
    private $caution;

    /**
     * Caution2.
     *
     * @var float|null
     */
    private $caution2;

    /**
     * Caution3.
     *
     * @var float|null
     */
    private $caution3;

    /**
     * Caution4.
     *
     * @var float|null
     */
    private $caution4;

    /**
     * Caution5.
     *
     * @var float|null
     */
    private $caution5;

    /**
     * Clausespeciale.
     *
     * @var string|null
     */
    private $clausespeciale;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Date anniversaire.
     *
     * @var string|null
     */
    private $dateAnniversaire;

    /**
     * Date caution.
     *
     * @var DateTime|null
     */
    private $dateCaution;

    /**
     * Date caution2.
     *
     * @var DateTime|null
     */
    private $dateCaution2;

    /**
     * Date caution3.
     *
     * @var DateTime|null
     */
    private $dateCaution3;

    /**
     * Date caution4.
     *
     * @var DateTime|null
     */
    private $dateCaution4;

    /**
     * Date caution5.
     *
     * @var DateTime|null
     */
    private $dateCaution5;

    /**
     * Date signature.
     *
     * @var DateTime|null
     */
    private $dateSignature;

    /**
     * Date signature2.
     *
     * @var DateTime|null
     */
    private $dateSignature2;

    /**
     * Date signature3.
     *
     * @var DateTime|null
     */
    private $dateSignature3;

    /**
     * Date signature4.
     *
     * @var DateTime|null
     */
    private $dateSignature4;

    /**
     * Date signature5.
     *
     * @var DateTime|null
     */
    private $dateSignature5;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

    /**
     * Duree preavis.
     *
     * @var int|null
     */
    private $dureePreavis;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Monnaie caution.
     *
     * @var string|null
     */
    private $monnaieCaution;

    /**
     * Monnaie loyer.
     *
     * @var string|null
     */
    private $monnaieLoyer;

    /**
     * Montant annuel.
     *
     * @var float|null
     */
    private $montantAnnuel;

    /**
     * Montant annuel2.
     *
     * @var float|null
     */
    private $montantAnnuel2;

    /**
     * Montant annuel3.
     *
     * @var float|null
     */
    private $montantAnnuel3;

    /**
     * Montant annuel4.
     *
     * @var float|null
     */
    private $montantAnnuel4;

    /**
     * Montant annuel5.
     *
     * @var float|null
     */
    private $montantAnnuel5;

    /**
     * Montant charges.
     *
     * @var float|null
     */
    private $montantCharges;

    /**
     * Montant charges2.
     *
     * @var float|null
     */
    private $montantCharges2;

    /**
     * Montant charges3.
     *
     * @var float|null
     */
    private $montantCharges3;

    /**
     * Montant charges4.
     *
     * @var float|null
     */
    private $montantCharges4;

    /**
     * Montant charges5.
     *
     * @var float|null
     */
    private $montantCharges5;

    /**
     * Num cpt caution.
     *
     * @var string|null
     */
    private $numCptCaution;

    /**
     * Num cpt charges.
     *
     * @var string|null
     */
    private $numCptCharges;

    /**
     * Num cpt loyer.
     *
     * @var string|null
     */
    private $numCptLoyer;

    /**
     * Num ordre.
     *
     * @var int|null
     */
    private $numOrdre;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Unite duree.
     *
     * @var string|null
     */
    private $uniteDuree;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the caution.
     *
     * @return float|null Returns the caution.
     */
    public function getCaution(): ?float {
        return $this->caution;
    }

    /**
     * Get the caution2.
     *
     * @return float|null Returns the caution2.
     */
    public function getCaution2(): ?float {
        return $this->caution2;
    }

    /**
     * Get the caution3.
     *
     * @return float|null Returns the caution3.
     */
    public function getCaution3(): ?float {
        return $this->caution3;
    }

    /**
     * Get the caution4.
     *
     * @return float|null Returns the caution4.
     */
    public function getCaution4(): ?float {
        return $this->caution4;
    }

    /**
     * Get the caution5.
     *
     * @return float|null Returns the caution5.
     */
    public function getCaution5(): ?float {
        return $this->caution5;
    }

    /**
     * Get the clausespeciale.
     *
     * @return string|null Returns the clausespeciale.
     */
    public function getClausespeciale(): ?string {
        return $this->clausespeciale;
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
     * Get the date anniversaire.
     *
     * @return string|null Returns the date anniversaire.
     */
    public function getDateAnniversaire(): ?string {
        return $this->dateAnniversaire;
    }

    /**
     * Get the date caution.
     *
     * @return DateTime|null Returns the date caution.
     */
    public function getDateCaution(): ?DateTime {
        return $this->dateCaution;
    }

    /**
     * Get the date caution2.
     *
     * @return DateTime|null Returns the date caution2.
     */
    public function getDateCaution2(): ?DateTime {
        return $this->dateCaution2;
    }

    /**
     * Get the date caution3.
     *
     * @return DateTime|null Returns the date caution3.
     */
    public function getDateCaution3(): ?DateTime {
        return $this->dateCaution3;
    }

    /**
     * Get the date caution4.
     *
     * @return DateTime|null Returns the date caution4.
     */
    public function getDateCaution4(): ?DateTime {
        return $this->dateCaution4;
    }

    /**
     * Get the date caution5.
     *
     * @return DateTime|null Returns the date caution5.
     */
    public function getDateCaution5(): ?DateTime {
        return $this->dateCaution5;
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
     * Get the date signature2.
     *
     * @return DateTime|null Returns the date signature2.
     */
    public function getDateSignature2(): ?DateTime {
        return $this->dateSignature2;
    }

    /**
     * Get the date signature3.
     *
     * @return DateTime|null Returns the date signature3.
     */
    public function getDateSignature3(): ?DateTime {
        return $this->dateSignature3;
    }

    /**
     * Get the date signature4.
     *
     * @return DateTime|null Returns the date signature4.
     */
    public function getDateSignature4(): ?DateTime {
        return $this->dateSignature4;
    }

    /**
     * Get the date signature5.
     *
     * @return DateTime|null Returns the date signature5.
     */
    public function getDateSignature5(): ?DateTime {
        return $this->dateSignature5;
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
     * Get the duree preavis.
     *
     * @return int|null Returns the duree preavis.
     */
    public function getDureePreavis(): ?int {
        return $this->dureePreavis;
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
     * Get the monnaie caution.
     *
     * @return string|null Returns the monnaie caution.
     */
    public function getMonnaieCaution(): ?string {
        return $this->monnaieCaution;
    }

    /**
     * Get the monnaie loyer.
     *
     * @return string|null Returns the monnaie loyer.
     */
    public function getMonnaieLoyer(): ?string {
        return $this->monnaieLoyer;
    }

    /**
     * Get the montant annuel.
     *
     * @return float|null Returns the montant annuel.
     */
    public function getMontantAnnuel(): ?float {
        return $this->montantAnnuel;
    }

    /**
     * Get the montant annuel2.
     *
     * @return float|null Returns the montant annuel2.
     */
    public function getMontantAnnuel2(): ?float {
        return $this->montantAnnuel2;
    }

    /**
     * Get the montant annuel3.
     *
     * @return float|null Returns the montant annuel3.
     */
    public function getMontantAnnuel3(): ?float {
        return $this->montantAnnuel3;
    }

    /**
     * Get the montant annuel4.
     *
     * @return float|null Returns the montant annuel4.
     */
    public function getMontantAnnuel4(): ?float {
        return $this->montantAnnuel4;
    }

    /**
     * Get the montant annuel5.
     *
     * @return float|null Returns the montant annuel5.
     */
    public function getMontantAnnuel5(): ?float {
        return $this->montantAnnuel5;
    }

    /**
     * Get the montant charges.
     *
     * @return float|null Returns the montant charges.
     */
    public function getMontantCharges(): ?float {
        return $this->montantCharges;
    }

    /**
     * Get the montant charges2.
     *
     * @return float|null Returns the montant charges2.
     */
    public function getMontantCharges2(): ?float {
        return $this->montantCharges2;
    }

    /**
     * Get the montant charges3.
     *
     * @return float|null Returns the montant charges3.
     */
    public function getMontantCharges3(): ?float {
        return $this->montantCharges3;
    }

    /**
     * Get the montant charges4.
     *
     * @return float|null Returns the montant charges4.
     */
    public function getMontantCharges4(): ?float {
        return $this->montantCharges4;
    }

    /**
     * Get the montant charges5.
     *
     * @return float|null Returns the montant charges5.
     */
    public function getMontantCharges5(): ?float {
        return $this->montantCharges5;
    }

    /**
     * Get the num cpt caution.
     *
     * @return string|null Returns the num cpt caution.
     */
    public function getNumCptCaution(): ?string {
        return $this->numCptCaution;
    }

    /**
     * Get the num cpt charges.
     *
     * @return string|null Returns the num cpt charges.
     */
    public function getNumCptCharges(): ?string {
        return $this->numCptCharges;
    }

    /**
     * Get the num cpt loyer.
     *
     * @return string|null Returns the num cpt loyer.
     */
    public function getNumCptLoyer(): ?string {
        return $this->numCptLoyer;
    }

    /**
     * Get the num ordre.
     *
     * @return int|null Returns the num ordre.
     */
    public function getNumOrdre(): ?int {
        return $this->numOrdre;
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
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
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
     * Get the unite duree.
     *
     * @return string|null Returns the unite duree.
     */
    public function getUniteDuree(): ?string {
        return $this->uniteDuree;
    }

    /**
     * Set the caution.
     *
     * @param float|null $caution The caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution(?float $caution): Contratslocatifs {
        $this->caution = $caution;
        return $this;
    }

    /**
     * Set the caution2.
     *
     * @param float|null $caution2 The caution2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution2(?float $caution2): Contratslocatifs {
        $this->caution2 = $caution2;
        return $this;
    }

    /**
     * Set the caution3.
     *
     * @param float|null $caution3 The caution3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution3(?float $caution3): Contratslocatifs {
        $this->caution3 = $caution3;
        return $this;
    }

    /**
     * Set the caution4.
     *
     * @param float|null $caution4 The caution4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution4(?float $caution4): Contratslocatifs {
        $this->caution4 = $caution4;
        return $this;
    }

    /**
     * Set the caution5.
     *
     * @param float|null $caution5 The caution5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution5(?float $caution5): Contratslocatifs {
        $this->caution5 = $caution5;
        return $this;
    }

    /**
     * Set the clausespeciale.
     *
     * @param string|null $clausespeciale The clausespeciale.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setClausespeciale(?string $clausespeciale): Contratslocatifs {
        $this->clausespeciale = $clausespeciale;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCodeCentre(?string $codeCentre): Contratslocatifs {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the date anniversaire.
     *
     * @param string|null $dateAnniversaire The date anniversaire.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateAnniversaire(?string $dateAnniversaire): Contratslocatifs {
        $this->dateAnniversaire = $dateAnniversaire;
        return $this;
    }

    /**
     * Set the date caution.
     *
     * @param DateTime|null $dateCaution The date caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution(?DateTime $dateCaution): Contratslocatifs {
        $this->dateCaution = $dateCaution;
        return $this;
    }

    /**
     * Set the date caution2.
     *
     * @param DateTime|null $dateCaution2 The date caution2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution2(?DateTime $dateCaution2): Contratslocatifs {
        $this->dateCaution2 = $dateCaution2;
        return $this;
    }

    /**
     * Set the date caution3.
     *
     * @param DateTime|null $dateCaution3 The date caution3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution3(?DateTime $dateCaution3): Contratslocatifs {
        $this->dateCaution3 = $dateCaution3;
        return $this;
    }

    /**
     * Set the date caution4.
     *
     * @param DateTime|null $dateCaution4 The date caution4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution4(?DateTime $dateCaution4): Contratslocatifs {
        $this->dateCaution4 = $dateCaution4;
        return $this;
    }

    /**
     * Set the date caution5.
     *
     * @param DateTime|null $dateCaution5 The date caution5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution5(?DateTime $dateCaution5): Contratslocatifs {
        $this->dateCaution5 = $dateCaution5;
        return $this;
    }

    /**
     * Set the date signature.
     *
     * @param DateTime|null $dateSignature The date signature.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature(?DateTime $dateSignature): Contratslocatifs {
        $this->dateSignature = $dateSignature;
        return $this;
    }

    /**
     * Set the date signature2.
     *
     * @param DateTime|null $dateSignature2 The date signature2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature2(?DateTime $dateSignature2): Contratslocatifs {
        $this->dateSignature2 = $dateSignature2;
        return $this;
    }

    /**
     * Set the date signature3.
     *
     * @param DateTime|null $dateSignature3 The date signature3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature3(?DateTime $dateSignature3): Contratslocatifs {
        $this->dateSignature3 = $dateSignature3;
        return $this;
    }

    /**
     * Set the date signature4.
     *
     * @param DateTime|null $dateSignature4 The date signature4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature4(?DateTime $dateSignature4): Contratslocatifs {
        $this->dateSignature4 = $dateSignature4;
        return $this;
    }

    /**
     * Set the date signature5.
     *
     * @param DateTime|null $dateSignature5 The date signature5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature5(?DateTime $dateSignature5): Contratslocatifs {
        $this->dateSignature5 = $dateSignature5;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDuree(?int $duree): Contratslocatifs {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the duree preavis.
     *
     * @param int|null $dureePreavis The duree preavis.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDureePreavis(?int $dureePreavis): Contratslocatifs {
        $this->dureePreavis = $dureePreavis;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setLibelle(?string $libelle): Contratslocatifs {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie caution.
     *
     * @param string|null $monnaieCaution The monnaie caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMonnaieCaution(?string $monnaieCaution): Contratslocatifs {
        $this->monnaieCaution = $monnaieCaution;
        return $this;
    }

    /**
     * Set the monnaie loyer.
     *
     * @param string|null $monnaieLoyer The monnaie loyer.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMonnaieLoyer(?string $monnaieLoyer): Contratslocatifs {
        $this->monnaieLoyer = $monnaieLoyer;
        return $this;
    }

    /**
     * Set the montant annuel.
     *
     * @param float|null $montantAnnuel The montant annuel.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel(?float $montantAnnuel): Contratslocatifs {
        $this->montantAnnuel = $montantAnnuel;
        return $this;
    }

    /**
     * Set the montant annuel2.
     *
     * @param float|null $montantAnnuel2 The montant annuel2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel2(?float $montantAnnuel2): Contratslocatifs {
        $this->montantAnnuel2 = $montantAnnuel2;
        return $this;
    }

    /**
     * Set the montant annuel3.
     *
     * @param float|null $montantAnnuel3 The montant annuel3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel3(?float $montantAnnuel3): Contratslocatifs {
        $this->montantAnnuel3 = $montantAnnuel3;
        return $this;
    }

    /**
     * Set the montant annuel4.
     *
     * @param float|null $montantAnnuel4 The montant annuel4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel4(?float $montantAnnuel4): Contratslocatifs {
        $this->montantAnnuel4 = $montantAnnuel4;
        return $this;
    }

    /**
     * Set the montant annuel5.
     *
     * @param float|null $montantAnnuel5 The montant annuel5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel5(?float $montantAnnuel5): Contratslocatifs {
        $this->montantAnnuel5 = $montantAnnuel5;
        return $this;
    }

    /**
     * Set the montant charges.
     *
     * @param float|null $montantCharges The montant charges.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges(?float $montantCharges): Contratslocatifs {
        $this->montantCharges = $montantCharges;
        return $this;
    }

    /**
     * Set the montant charges2.
     *
     * @param float|null $montantCharges2 The montant charges2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges2(?float $montantCharges2): Contratslocatifs {
        $this->montantCharges2 = $montantCharges2;
        return $this;
    }

    /**
     * Set the montant charges3.
     *
     * @param float|null $montantCharges3 The montant charges3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges3(?float $montantCharges3): Contratslocatifs {
        $this->montantCharges3 = $montantCharges3;
        return $this;
    }

    /**
     * Set the montant charges4.
     *
     * @param float|null $montantCharges4 The montant charges4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges4(?float $montantCharges4): Contratslocatifs {
        $this->montantCharges4 = $montantCharges4;
        return $this;
    }

    /**
     * Set the montant charges5.
     *
     * @param float|null $montantCharges5 The montant charges5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges5(?float $montantCharges5): Contratslocatifs {
        $this->montantCharges5 = $montantCharges5;
        return $this;
    }

    /**
     * Set the num cpt caution.
     *
     * @param string|null $numCptCaution The num cpt caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumCptCaution(?string $numCptCaution): Contratslocatifs {
        $this->numCptCaution = $numCptCaution;
        return $this;
    }

    /**
     * Set the num cpt charges.
     *
     * @param string|null $numCptCharges The num cpt charges.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumCptCharges(?string $numCptCharges): Contratslocatifs {
        $this->numCptCharges = $numCptCharges;
        return $this;
    }

    /**
     * Set the num cpt loyer.
     *
     * @param string|null $numCptLoyer The num cpt loyer.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumCptLoyer(?string $numCptLoyer): Contratslocatifs {
        $this->numCptLoyer = $numCptLoyer;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int|null $numOrdre The num ordre.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumOrdre(?int $numOrdre): Contratslocatifs {
        $this->numOrdre = $numOrdre;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumeroPj(?int $numeroPj): Contratslocatifs {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setRefImage(?string $refImage): Contratslocatifs {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setService(?string $service): Contratslocatifs {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the unite duree.
     *
     * @param string|null $uniteDuree The unite duree.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setUniteDuree(?string $uniteDuree): Contratslocatifs {
        $this->uniteDuree = $uniteDuree;
        return $this;
    }
}
