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
 * Dec tva filiales.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTvaFiliales {

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Cpt filiale.
     *
     * @var string|null
     */
    private $cptFiliale;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Detention directe.
     *
     * @var float|null
     */
    private $detentionDirecte;

    /**
     * Detention indirecte.
     *
     * @var float|null
     */
    private $detentionIndirecte;

    /**
     * Forme juridique.
     *
     * @var string|null
     */
    private $formeJuridique;

    /**
     * Lib doss.
     *
     * @var string|null
     */
    private $libDoss;

    /**
     * No doss.
     *
     * @var string|null
     */
    private $noDoss;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Siren.
     *
     * @var string|null
     */
    private $siren;

    /**
     * Ville.
     *
     * @var string|null
     */
    private $ville;

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
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
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
     * Get the cpt filiale.
     *
     * @return string|null Returns the cpt filiale.
     */
    public function getCptFiliale(): ?string {
        return $this->cptFiliale;
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
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie(): ?DateTime {
        return $this->dateSortie;
    }

    /**
     * Get the detention directe.
     *
     * @return float|null Returns the detention directe.
     */
    public function getDetentionDirecte(): ?float {
        return $this->detentionDirecte;
    }

    /**
     * Get the detention indirecte.
     *
     * @return float|null Returns the detention indirecte.
     */
    public function getDetentionIndirecte(): ?float {
        return $this->detentionIndirecte;
    }

    /**
     * Get the forme juridique.
     *
     * @return string|null Returns the forme juridique.
     */
    public function getFormeJuridique(): ?string {
        return $this->formeJuridique;
    }

    /**
     * Get the lib doss.
     *
     * @return string|null Returns the lib doss.
     */
    public function getLibDoss(): ?string {
        return $this->libDoss;
    }

    /**
     * Get the no doss.
     *
     * @return string|null Returns the no doss.
     */
    public function getNoDoss(): ?string {
        return $this->noDoss;
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
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Get the siren.
     *
     * @return string|null Returns the siren.
     */
    public function getSiren(): ?string {
        return $this->siren;
    }

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getVille(): ?string {
        return $this->ville;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setBtq(?string $btq): DecTvaFiliales {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setCodePostal(?string $codePostal): DecTvaFiliales {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setComplement(?string $complement): DecTvaFiliales {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the cpt filiale.
     *
     * @param string|null $cptFiliale The cpt filiale.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setCptFiliale(?string $cptFiliale): DecTvaFiliales {
        $this->cptFiliale = $cptFiliale;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDateEntree(?DateTime $dateEntree): DecTvaFiliales {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDateSortie(?DateTime $dateSortie): DecTvaFiliales {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the detention directe.
     *
     * @param float|null $detentionDirecte The detention directe.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDetentionDirecte(?float $detentionDirecte): DecTvaFiliales {
        $this->detentionDirecte = $detentionDirecte;
        return $this;
    }

    /**
     * Set the detention indirecte.
     *
     * @param float|null $detentionIndirecte The detention indirecte.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDetentionIndirecte(?float $detentionIndirecte): DecTvaFiliales {
        $this->detentionIndirecte = $detentionIndirecte;
        return $this;
    }

    /**
     * Set the forme juridique.
     *
     * @param string|null $formeJuridique The forme juridique.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setFormeJuridique(?string $formeJuridique): DecTvaFiliales {
        $this->formeJuridique = $formeJuridique;
        return $this;
    }

    /**
     * Set the lib doss.
     *
     * @param string|null $libDoss The lib doss.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setLibDoss(?string $libDoss): DecTvaFiliales {
        $this->libDoss = $libDoss;
        return $this;
    }

    /**
     * Set the no doss.
     *
     * @param string|null $noDoss The no doss.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNoDoss(?string $noDoss): DecTvaFiliales {
        $this->noDoss = $noDoss;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNomVoie(?string $nomVoie): DecTvaFiliales {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNumUniq(?int $numUniq): DecTvaFiliales {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNumVoie(?string $numVoie): DecTvaFiliales {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the siren.
     *
     * @param string|null $siren The siren.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setSiren(?string $siren): DecTvaFiliales {
        $this->siren = $siren;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string|null $ville The ville.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setVille(?string $ville): DecTvaFiliales {
        $this->ville = $ville;
        return $this;
    }
}
