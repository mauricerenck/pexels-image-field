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

/**
 * Sous lignes compta gene.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class SousLignesComptaGene {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

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
     * Intitule compte.
     *
     * @var string|null
     */
    private $intituleCompte;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero document.
     *
     * @var string|null
     */
    private $numeroDocument;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Numero sous ligne.
     *
     * @var int|null
     */
    private $numeroSousLigne;

    /**
     * Type document.
     *
     * @var string|null
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the intitule compte.
     *
     * @return string|null Returns the intitule compte.
     */
    public function getIntituleCompte(): ?string {
        return $this->intituleCompte;
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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the numero document.
     *
     * @return string|null Returns the numero document.
     */
    public function getNumeroDocument(): ?string {
        return $this->numeroDocument;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the numero sous ligne.
     *
     * @return int|null Returns the numero sous ligne.
     */
    public function getNumeroSousLigne(): ?int {
        return $this->numeroSousLigne;
    }

    /**
     * Get the type document.
     *
     * @return string|null Returns the type document.
     */
    public function getTypeDocument(): ?string {
        return $this->typeDocument;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeAffaire(?string $codeAffaire): SousLignesComptaGene {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeChantier(?string $codeChantier): SousLignesComptaGene {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeClient(?string $codeClient): SousLignesComptaGene {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeRegroupement(?string $codeRegroupement): SousLignesComptaGene {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the intitule compte.
     *
     * @param string|null $intituleCompte The intitule compte.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setIntituleCompte(?string $intituleCompte): SousLignesComptaGene {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setMontant(?float $montant): SousLignesComptaGene {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroCompte(?string $numeroCompte): SousLignesComptaGene {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero document.
     *
     * @param string|null $numeroDocument The numero document.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroDocument(?string $numeroDocument): SousLignesComptaGene {
        $this->numeroDocument = $numeroDocument;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroLigne(?int $numeroLigne): SousLignesComptaGene {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the numero sous ligne.
     *
     * @param int|null $numeroSousLigne The numero sous ligne.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroSousLigne(?int $numeroSousLigne): SousLignesComptaGene {
        $this->numeroSousLigne = $numeroSousLigne;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string|null $typeDocument The type document.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setTypeDocument(?string $typeDocument): SousLignesComptaGene {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
