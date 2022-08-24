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
 * Chantiers descriptif locaux elements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocauxElements {

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
     * Niveau noeud.
     *
     * @var int|null
     */
    private $niveauNoeud;

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
     * Uniq id local.
     *
     * @var string|null
     */
    private $uniqIdLocal;

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
     * Get the niveau noeud.
     *
     * @return int|null Returns the niveau noeud.
     */
    public function getNiveauNoeud(): ?int {
        return $this->niveauNoeud;
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
     * Get the uniq id local.
     *
     * @return string|null Returns the uniq id local.
     */
    public function getUniqIdLocal(): ?string {
        return $this->uniqIdLocal;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersDescriptifLocauxElements {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersDescriptifLocauxElements {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeClient(?string $codeClient): ChantiersDescriptifLocauxElements {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code element.
     *
     * @param string|null $codeElement The code element.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeElement(?string $codeElement): ChantiersDescriptifLocauxElements {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCoefficient(?float $coefficient): ChantiersDescriptifLocauxElements {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int|null $niveauNoeud The niveau noeud.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setNiveauNoeud(?int $niveauNoeud): ChantiersDescriptifLocauxElements {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int|null $numeroNoeud The numero noeud.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setNumeroNoeud(?int $numeroNoeud): ChantiersDescriptifLocauxElements {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the type element.
     *
     * @param string|null $typeElement The type element.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setTypeElement(?string $typeElement): ChantiersDescriptifLocauxElements {
        $this->typeElement = $typeElement;
        return $this;
    }

    /**
     * Set the uniq id local.
     *
     * @param string|null $uniqIdLocal The uniq id local.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setUniqIdLocal(?string $uniqIdLocal): ChantiersDescriptifLocauxElements {
        $this->uniqIdLocal = $uniqIdLocal;
        return $this;
    }
}
