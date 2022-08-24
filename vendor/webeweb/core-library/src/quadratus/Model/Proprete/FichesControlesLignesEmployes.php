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
 * Fiches controles lignes employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesControlesLignesEmployes {

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
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code remplacant.
     *
     * @var string|null
     */
    private $codeRemplacant;

    /**
     * Numero fiche.
     *
     * @var int|null
     */
    private $numeroFiche;

    /**
     * Poste.
     *
     * @var string|null
     */
    private $poste;

    /**
     * Remarque.
     *
     * @var string|null
     */
    private $remarque;

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
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code remplacant.
     *
     * @return string|null Returns the code remplacant.
     */
    public function getCodeRemplacant(): ?string {
        return $this->codeRemplacant;
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
     * Get the poste.
     *
     * @return string|null Returns the poste.
     */
    public function getPoste(): ?string {
        return $this->poste;
    }

    /**
     * Get the remarque.
     *
     * @return string|null Returns the remarque.
     */
    public function getRemarque(): ?string {
        return $this->remarque;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesControlesLignesEmployes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setCodeChantier(?string $codeChantier): FichesControlesLignesEmployes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setCodeClient(?string $codeClient): FichesControlesLignesEmployes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setCodeEmploye(?string $codeEmploye): FichesControlesLignesEmployes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string|null $codeRemplacant The code remplacant.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setCodeRemplacant(?string $codeRemplacant): FichesControlesLignesEmployes {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int|null $numeroFiche The numero fiche.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setNumeroFiche(?int $numeroFiche): FichesControlesLignesEmployes {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the poste.
     *
     * @param string|null $poste The poste.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setPoste(?string $poste): FichesControlesLignesEmployes {
        $this->poste = $poste;
        return $this;
    }

    /**
     * Set the remarque.
     *
     * @param string|null $remarque The remarque.
     * @return FichesControlesLignesEmployes Returns this Fiches controles lignes employes.
     */
    public function setRemarque(?string $remarque): FichesControlesLignesEmployes {
        $this->remarque = $remarque;
        return $this;
    }
}
