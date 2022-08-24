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
 * Sous lignes anal achats.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class SousLignesAnalAchats {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Indice ligne.
     *
     * @var int|null
     */
    private $indiceLigne;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * No piece.
     *
     * @var string|null
     */
    private $noPiece;

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
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
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
     * Get the indice ligne.
     *
     * @return int|null Returns the indice ligne.
     */
    public function getIndiceLigne(): ?int {
        return $this->indiceLigne;
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
     * Get the no piece.
     *
     * @return string|null Returns the no piece.
     */
    public function getNoPiece(): ?string {
        return $this->noPiece;
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
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setCodeCentre(?string $codeCentre): SousLignesAnalAchats {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setCodeFournisseur(?string $codeFournisseur): SousLignesAnalAchats {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setCodeNature(?string $codeNature): SousLignesAnalAchats {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the indice ligne.
     *
     * @param int|null $indiceLigne The indice ligne.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setIndiceLigne(?int $indiceLigne): SousLignesAnalAchats {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setMontant(?float $montant): SousLignesAnalAchats {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string|null $noPiece The no piece.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setNoPiece(?string $noPiece): SousLignesAnalAchats {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setNumeroLigne(?int $numeroLigne): SousLignesAnalAchats {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int|null $numeroLigneAnal The numero ligne anal.
     * @return SousLignesAnalAchats Returns this Sous lignes anal achats.
     */
    public function setNumeroLigneAnal(?int $numeroLigneAnal): SousLignesAnalAchats {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }
}
