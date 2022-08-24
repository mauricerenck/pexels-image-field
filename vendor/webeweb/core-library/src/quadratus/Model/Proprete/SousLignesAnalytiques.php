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
 * Sous lignes analytiques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class SousLignesAnalytiques {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

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
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

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
     * Numero ligne anal.
     *
     * @var int|null
     */
    private $numeroLigneAnal;

    /**
     * Numero sous ligne cpt ht.
     *
     * @var int|null
     */
    private $numeroSousLigneCptHt;

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
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
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
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
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
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
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
     * Get the numero ligne anal.
     *
     * @return int|null Returns the numero ligne anal.
     */
    public function getNumeroLigneAnal(): ?int {
        return $this->numeroLigneAnal;
    }

    /**
     * Get the numero sous ligne cpt ht.
     *
     * @return int|null Returns the numero sous ligne cpt ht.
     */
    public function getNumeroSousLigneCptHt(): ?int {
        return $this->numeroSousLigneCptHt;
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
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setCodeAffaire(?string $codeAffaire): SousLignesAnalytiques {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setCodeCentre(?string $codeCentre): SousLignesAnalytiques {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setCodeChantier(?string $codeChantier): SousLignesAnalytiques {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setCodeClient(?string $codeClient): SousLignesAnalytiques {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setCodeNature(?string $codeNature): SousLignesAnalytiques {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setCodeRegroupement(?string $codeRegroupement): SousLignesAnalytiques {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setMontant(?float $montant): SousLignesAnalytiques {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the numero document.
     *
     * @param string|null $numeroDocument The numero document.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setNumeroDocument(?string $numeroDocument): SousLignesAnalytiques {
        $this->numeroDocument = $numeroDocument;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setNumeroLigne(?int $numeroLigne): SousLignesAnalytiques {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int|null $numeroLigneAnal The numero ligne anal.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setNumeroLigneAnal(?int $numeroLigneAnal): SousLignesAnalytiques {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }

    /**
     * Set the numero sous ligne cpt ht.
     *
     * @param int|null $numeroSousLigneCptHt The numero sous ligne cpt ht.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setNumeroSousLigneCptHt(?int $numeroSousLigneCptHt): SousLignesAnalytiques {
        $this->numeroSousLigneCptHt = $numeroSousLigneCptHt;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string|null $typeDocument The type document.
     * @return SousLignesAnalytiques Returns this Sous lignes analytiques.
     */
    public function setTypeDocument(?string $typeDocument): SousLignesAnalytiques {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
