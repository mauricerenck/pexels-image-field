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
 * Devis descriptif locaux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisDescriptifLocaux {

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
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Niveau noeud.
     *
     * @var int|null
     */
    private $niveauNoeud;

    /**
     * Noeud local.
     *
     * @var bool|null
     */
    private $noeudLocal;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Numero noeud.
     *
     * @var int|null
     */
    private $numeroNoeud;

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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
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
     * Get the noeud local.
     *
     * @return bool|null Returns the noeud local.
     */
    public function getNoeudLocal(): ?bool {
        return $this->noeudLocal;
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
     * Get the numero noeud.
     *
     * @return int|null Returns the numero noeud.
     */
    public function getNumeroNoeud(): ?int {
        return $this->numeroNoeud;
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
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisDescriptifLocaux {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setCodeChantier(?string $codeChantier): DevisDescriptifLocaux {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setCodeClient(?string $codeClient): DevisDescriptifLocaux {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setLibelle(?string $libelle): DevisDescriptifLocaux {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int|null $niveauNoeud The niveau noeud.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setNiveauNoeud(?int $niveauNoeud): DevisDescriptifLocaux {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the noeud local.
     *
     * @param bool|null $noeudLocal The noeud local.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setNoeudLocal(?bool $noeudLocal): DevisDescriptifLocaux {
        $this->noeudLocal = $noeudLocal;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setNumDevis(?string $numDevis): DevisDescriptifLocaux {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int|null $numeroNoeud The numero noeud.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setNumeroNoeud(?int $numeroNoeud): DevisDescriptifLocaux {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string|null $uniqIdNoeud The uniq id noeud.
     * @return DevisDescriptifLocaux Returns this Devis descriptif locaux.
     */
    public function setUniqIdNoeud(?string $uniqIdNoeud): DevisDescriptifLocaux {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
