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
 * Fiches controles lignes elements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesControlesLignesElements {

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
     * Code element.
     *
     * @var string|null
     */
    private $codeElement;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Mise en conformite.
     *
     * @var DateTime|null
     */
    private $miseEnConformite;

    /**
     * Niveau noeud.
     *
     * @var int|null
     */
    private $niveauNoeud;

    /**
     * Note.
     *
     * @var int|null
     */
    private $note;

    /**
     * Numero fiche.
     *
     * @var int|null
     */
    private $numeroFiche;

    /**
     * Numero noeud.
     *
     * @var int|null
     */
    private $numeroNoeud;

    /**
     * Type element.
     *
     * @var string|null
     */
    private $typeElement;

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
     * Get the code element.
     *
     * @return string|null Returns the code element.
     */
    public function getCodeElement(): ?string {
        return $this->codeElement;
    }

    /**
     * Get the coefficient.
     *
     * @return float|null Returns the coefficient.
     */
    public function getCoefficient(): ?float {
        return $this->coefficient;
    }

    /**
     * Get the mise en conformite.
     *
     * @return DateTime|null Returns the mise en conformite.
     */
    public function getMiseEnConformite(): ?DateTime {
        return $this->miseEnConformite;
    }

    /**
     * Get the niveau noeud.
     *
     * @return int|null Returns the niveau noeud.
     */
    public function getNiveauNoeud(): ?int {
        return $this->niveauNoeud;
    }

    /**
     * Get the note.
     *
     * @return int|null Returns the note.
     */
    public function getNote(): ?int {
        return $this->note;
    }

    /**
     * Get the numero fiche.
     *
     * @return int|null Returns the numero fiche.
     */
    public function getNumeroFiche(): ?int {
        return $this->numeroFiche;
    }

    /**
     * Get the numero noeud.
     *
     * @return int|null Returns the numero noeud.
     */
    public function getNumeroNoeud(): ?int {
        return $this->numeroNoeud;
    }

    /**
     * Get the type element.
     *
     * @return string|null Returns the type element.
     */
    public function getTypeElement(): ?string {
        return $this->typeElement;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesControlesLignesElements {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeChantier(?string $codeChantier): FichesControlesLignesElements {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeClient(?string $codeClient): FichesControlesLignesElements {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code element.
     *
     * @param string|null $codeElement The code element.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeElement(?string $codeElement): FichesControlesLignesElements {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCoefficient(?float $coefficient): FichesControlesLignesElements {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the mise en conformite.
     *
     * @param DateTime|null $miseEnConformite The mise en conformite.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setMiseEnConformite(?DateTime $miseEnConformite): FichesControlesLignesElements {
        $this->miseEnConformite = $miseEnConformite;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int|null $niveauNoeud The niveau noeud.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNiveauNoeud(?int $niveauNoeud): FichesControlesLignesElements {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the note.
     *
     * @param int|null $note The note.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNote(?int $note): FichesControlesLignesElements {
        $this->note = $note;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int|null $numeroFiche The numero fiche.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNumeroFiche(?int $numeroFiche): FichesControlesLignesElements {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int|null $numeroNoeud The numero noeud.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNumeroNoeud(?int $numeroNoeud): FichesControlesLignesElements {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the type element.
     *
     * @param string|null $typeElement The type element.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setTypeElement(?string $typeElement): FichesControlesLignesElements {
        $this->typeElement = $typeElement;
        return $this;
    }
}
