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
 * Devis chantiers lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisChantiersLignes {

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
     * Code local type.
     *
     * @var string|null
     */
    private $codeLocalType;

    /**
     * Code revetement.
     *
     * @var string|null
     */
    private $codeRevetement;

    /**
     * Montant ht.
     *
     * @var float|null
     */
    private $montantHt;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Sol mur.
     *
     * @var string|null
     */
    private $solMur;

    /**
     * Surface.
     *
     * @var float|null
     */
    private $surface;

    /**
     * Uniq id noeud.
     *
     * @var string|null
     */
    private $uniqIdNoeud;

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
     * Get the code local type.
     *
     * @return string|null Returns the code local type.
     */
    public function getCodeLocalType(): ?string {
        return $this->codeLocalType;
    }

    /**
     * Get the code revetement.
     *
     * @return string|null Returns the code revetement.
     */
    public function getCodeRevetement(): ?string {
        return $this->codeRevetement;
    }

    /**
     * Get the montant ht.
     *
     * @return float|null Returns the montant ht.
     */
    public function getMontantHt(): ?float {
        return $this->montantHt;
    }

    /**
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the sol mur.
     *
     * @return string|null Returns the sol mur.
     */
    public function getSolMur(): ?string {
        return $this->solMur;
    }

    /**
     * Get the surface.
     *
     * @return float|null Returns the surface.
     */
    public function getSurface(): ?float {
        return $this->surface;
    }

    /**
     * Get the uniq id noeud.
     *
     * @return string|null Returns the uniq id noeud.
     */
    public function getUniqIdNoeud(): ?string {
        return $this->uniqIdNoeud;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisChantiersLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setCodeChantier(?string $codeChantier): DevisChantiersLignes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setCodeClient(?string $codeClient): DevisChantiersLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code local type.
     *
     * @param string|null $codeLocalType The code local type.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setCodeLocalType(?string $codeLocalType): DevisChantiersLignes {
        $this->codeLocalType = $codeLocalType;
        return $this;
    }

    /**
     * Set the code revetement.
     *
     * @param string|null $codeRevetement The code revetement.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setCodeRevetement(?string $codeRevetement): DevisChantiersLignes {
        $this->codeRevetement = $codeRevetement;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float|null $montantHt The montant ht.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setMontantHt(?float $montantHt): DevisChantiersLignes {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setNumDevis(?string $numDevis): DevisChantiersLignes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setNumLigne(?int $numLigne): DevisChantiersLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the sol mur.
     *
     * @param string|null $solMur The sol mur.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setSolMur(?string $solMur): DevisChantiersLignes {
        $this->solMur = $solMur;
        return $this;
    }

    /**
     * Set the surface.
     *
     * @param float|null $surface The surface.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setSurface(?float $surface): DevisChantiersLignes {
        $this->surface = $surface;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string|null $uniqIdNoeud The uniq id noeud.
     * @return DevisChantiersLignes Returns this Devis chantiers lignes.
     */
    public function setUniqIdNoeud(?string $uniqIdNoeud): DevisChantiersLignes {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
