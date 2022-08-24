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
 * Fiches de poste.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesDePoste {

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
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Poste.
     *
     * @var string|null
     */
    private $poste;

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
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
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
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesDePoste {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setCodeChantier(?string $codeChantier): FichesDePoste {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setCodeClient(?string $codeClient): FichesDePoste {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setCodeEmploye(?string $codeEmploye): FichesDePoste {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setCodeTache(?string $codeTache): FichesDePoste {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setNumBt(?int $numBt): FichesDePoste {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the poste.
     *
     * @param string|null $poste The poste.
     * @return FichesDePoste Returns this Fiches de poste.
     */
    public function setPoste(?string $poste): FichesDePoste {
        $this->poste = $poste;
        return $this;
    }
}
