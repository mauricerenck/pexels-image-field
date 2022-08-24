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
 * Assurances.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Assurances {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Compagnie.
     *
     * @var string|null
     */
    private $compagnie;

    /**
     * Courtier.
     *
     * @var string|null
     */
    private $courtier;

    /**
     * Date echeance.
     *
     * @var string|null
     */
    private $dateEcheance;

    /**
     * Date initiale.
     *
     * @var DateTime|null
     */
    private $dateInitiale;

    /**
     * Date signature1.
     *
     * @var DateTime|null
     */
    private $dateSignature1;

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
     * Montant annuel1.
     *
     * @var float|null
     */
    private $montantAnnuel1;

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
     * Montant fixe.
     *
     * @var bool|null
     */
    private $montantFixe;

    /**
     * Num contrat.
     *
     * @var string|null
     */
    private $numContrat;

    /**
     * Num cpt assurance.
     *
     * @var string|null
     */
    private $numCptAssurance;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

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
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the compagnie.
     *
     * @return string|null Returns the compagnie.
     */
    public function getCompagnie(): ?string {
        return $this->compagnie;
    }

    /**
     * Get the courtier.
     *
     * @return string|null Returns the courtier.
     */
    public function getCourtier(): ?string {
        return $this->courtier;
    }

    /**
     * Get the date echeance.
     *
     * @return string|null Returns the date echeance.
     */
    public function getDateEcheance(): ?string {
        return $this->dateEcheance;
    }

    /**
     * Get the date initiale.
     *
     * @return DateTime|null Returns the date initiale.
     */
    public function getDateInitiale(): ?DateTime {
        return $this->dateInitiale;
    }

    /**
     * Get the date signature1.
     *
     * @return DateTime|null Returns the date signature1.
     */
    public function getDateSignature1(): ?DateTime {
        return $this->dateSignature1;
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
     * Get the montant annuel1.
     *
     * @return float|null Returns the montant annuel1.
     */
    public function getMontantAnnuel1(): ?float {
        return $this->montantAnnuel1;
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
     * Get the montant fixe.
     *
     * @return bool|null Returns the montant fixe.
     */
    public function getMontantFixe(): ?bool {
        return $this->montantFixe;
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
     * Get the num cpt assurance.
     *
     * @return string|null Returns the num cpt assurance.
     */
    public function getNumCptAssurance(): ?string {
        return $this->numCptAssurance;
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
     * Get the unite duree.
     *
     * @return string|null Returns the unite duree.
     */
    public function getUniteDuree(): ?string {
        return $this->uniteDuree;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return Assurances Returns this Assurances.
     */
    public function setCodeCentre(?string $codeCentre): Assurances {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return Assurances Returns this Assurances.
     */
    public function setCodeNature(?string $codeNature): Assurances {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the compagnie.
     *
     * @param string|null $compagnie The compagnie.
     * @return Assurances Returns this Assurances.
     */
    public function setCompagnie(?string $compagnie): Assurances {
        $this->compagnie = $compagnie;
        return $this;
    }

    /**
     * Set the courtier.
     *
     * @param string|null $courtier The courtier.
     * @return Assurances Returns this Assurances.
     */
    public function setCourtier(?string $courtier): Assurances {
        $this->courtier = $courtier;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param string|null $dateEcheance The date echeance.
     * @return Assurances Returns this Assurances.
     */
    public function setDateEcheance(?string $dateEcheance): Assurances {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date initiale.
     *
     * @param DateTime|null $dateInitiale The date initiale.
     * @return Assurances Returns this Assurances.
     */
    public function setDateInitiale(?DateTime $dateInitiale): Assurances {
        $this->dateInitiale = $dateInitiale;
        return $this;
    }

    /**
     * Set the date signature1.
     *
     * @param DateTime|null $dateSignature1 The date signature1.
     * @return Assurances Returns this Assurances.
     */
    public function setDateSignature1(?DateTime $dateSignature1): Assurances {
        $this->dateSignature1 = $dateSignature1;
        return $this;
    }

    /**
     * Set the date signature2.
     *
     * @param DateTime|null $dateSignature2 The date signature2.
     * @return Assurances Returns this Assurances.
     */
    public function setDateSignature2(?DateTime $dateSignature2): Assurances {
        $this->dateSignature2 = $dateSignature2;
        return $this;
    }

    /**
     * Set the date signature3.
     *
     * @param DateTime|null $dateSignature3 The date signature3.
     * @return Assurances Returns this Assurances.
     */
    public function setDateSignature3(?DateTime $dateSignature3): Assurances {
        $this->dateSignature3 = $dateSignature3;
        return $this;
    }

    /**
     * Set the date signature4.
     *
     * @param DateTime|null $dateSignature4 The date signature4.
     * @return Assurances Returns this Assurances.
     */
    public function setDateSignature4(?DateTime $dateSignature4): Assurances {
        $this->dateSignature4 = $dateSignature4;
        return $this;
    }

    /**
     * Set the date signature5.
     *
     * @param DateTime|null $dateSignature5 The date signature5.
     * @return Assurances Returns this Assurances.
     */
    public function setDateSignature5(?DateTime $dateSignature5): Assurances {
        $this->dateSignature5 = $dateSignature5;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return Assurances Returns this Assurances.
     */
    public function setDuree(?int $duree): Assurances {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the duree preavis.
     *
     * @param int|null $dureePreavis The duree preavis.
     * @return Assurances Returns this Assurances.
     */
    public function setDureePreavis(?int $dureePreavis): Assurances {
        $this->dureePreavis = $dureePreavis;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Assurances Returns this Assurances.
     */
    public function setLibelle(?string $libelle): Assurances {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant annuel1.
     *
     * @param float|null $montantAnnuel1 The montant annuel1.
     * @return Assurances Returns this Assurances.
     */
    public function setMontantAnnuel1(?float $montantAnnuel1): Assurances {
        $this->montantAnnuel1 = $montantAnnuel1;
        return $this;
    }

    /**
     * Set the montant annuel2.
     *
     * @param float|null $montantAnnuel2 The montant annuel2.
     * @return Assurances Returns this Assurances.
     */
    public function setMontantAnnuel2(?float $montantAnnuel2): Assurances {
        $this->montantAnnuel2 = $montantAnnuel2;
        return $this;
    }

    /**
     * Set the montant annuel3.
     *
     * @param float|null $montantAnnuel3 The montant annuel3.
     * @return Assurances Returns this Assurances.
     */
    public function setMontantAnnuel3(?float $montantAnnuel3): Assurances {
        $this->montantAnnuel3 = $montantAnnuel3;
        return $this;
    }

    /**
     * Set the montant annuel4.
     *
     * @param float|null $montantAnnuel4 The montant annuel4.
     * @return Assurances Returns this Assurances.
     */
    public function setMontantAnnuel4(?float $montantAnnuel4): Assurances {
        $this->montantAnnuel4 = $montantAnnuel4;
        return $this;
    }

    /**
     * Set the montant annuel5.
     *
     * @param float|null $montantAnnuel5 The montant annuel5.
     * @return Assurances Returns this Assurances.
     */
    public function setMontantAnnuel5(?float $montantAnnuel5): Assurances {
        $this->montantAnnuel5 = $montantAnnuel5;
        return $this;
    }

    /**
     * Set the montant fixe.
     *
     * @param bool|null $montantFixe The montant fixe.
     * @return Assurances Returns this Assurances.
     */
    public function setMontantFixe(?bool $montantFixe): Assurances {
        $this->montantFixe = $montantFixe;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string|null $numContrat The num contrat.
     * @return Assurances Returns this Assurances.
     */
    public function setNumContrat(?string $numContrat): Assurances {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt assurance.
     *
     * @param string|null $numCptAssurance The num cpt assurance.
     * @return Assurances Returns this Assurances.
     */
    public function setNumCptAssurance(?string $numCptAssurance): Assurances {
        $this->numCptAssurance = $numCptAssurance;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Assurances Returns this Assurances.
     */
    public function setNumeroPj(?int $numeroPj): Assurances {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the unite duree.
     *
     * @param string|null $uniteDuree The unite duree.
     * @return Assurances Returns this Assurances.
     */
    public function setUniteDuree(?string $uniteDuree): Assurances {
        $this->uniteDuree = $uniteDuree;
        return $this;
    }
}
