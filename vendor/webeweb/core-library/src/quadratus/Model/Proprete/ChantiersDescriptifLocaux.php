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
 * Chantiers descriptif locaux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocaux {

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
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code critere1.
     *
     * @var string|null
     */
    private $codeCritere1;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Famille elements.
     *
     * @var string|null
     */
    private $familleElements;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle critere1.
     *
     * @var string|null
     */
    private $libelleCritere1;

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
     * Note objectif.
     *
     * @var float|null
     */
    private $noteObjectif;

    /**
     * Numero noeud.
     *
     * @var int|null
     */
    private $numeroNoeud;

    /**
     * Poste.
     *
     * @var string|null
     */
    private $poste;

    /**
     * Uniq id blocage.
     *
     * @var string|null
     */
    private $uniqIdBlocage;

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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code critere1.
     *
     * @return string|null Returns the code critere1.
     */
    public function getCodeCritere1(): ?string {
        return $this->codeCritere1;
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
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert(): ?DateTime {
        return $this->dateTransfert;
    }

    /**
     * Get the famille elements.
     *
     * @return string|null Returns the famille elements.
     */
    public function getFamilleElements(): ?string {
        return $this->familleElements;
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
     * Get the libelle critere1.
     *
     * @return string|null Returns the libelle critere1.
     */
    public function getLibelleCritere1(): ?string {
        return $this->libelleCritere1;
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
     * Get the note objectif.
     *
     * @return float|null Returns the note objectif.
     */
    public function getNoteObjectif(): ?float {
        return $this->noteObjectif;
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
     * Get the poste.
     *
     * @return string|null Returns the poste.
     */
    public function getPoste(): ?string {
        return $this->poste;
    }

    /**
     * Get the uniq id blocage.
     *
     * @return string|null Returns the uniq id blocage.
     */
    public function getUniqIdBlocage(): ?string {
        return $this->uniqIdBlocage;
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
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersDescriptifLocaux {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersDescriptifLocaux {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeClient(?string $codeClient): ChantiersDescriptifLocaux {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ChantiersDescriptifLocaux {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code critere1.
     *
     * @param string|null $codeCritere1 The code critere1.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeCritere1(?string $codeCritere1): ChantiersDescriptifLocaux {
        $this->codeCritere1 = $codeCritere1;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCoefficient(?float $coefficient): ChantiersDescriptifLocaux {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setDateTransfert(?DateTime $dateTransfert): ChantiersDescriptifLocaux {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the famille elements.
     *
     * @param string|null $familleElements The famille elements.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setFamilleElements(?string $familleElements): ChantiersDescriptifLocaux {
        $this->familleElements = $familleElements;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setLibelle(?string $libelle): ChantiersDescriptifLocaux {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle critere1.
     *
     * @param string|null $libelleCritere1 The libelle critere1.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setLibelleCritere1(?string $libelleCritere1): ChantiersDescriptifLocaux {
        $this->libelleCritere1 = $libelleCritere1;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int|null $niveauNoeud The niveau noeud.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNiveauNoeud(?int $niveauNoeud): ChantiersDescriptifLocaux {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the noeud local.
     *
     * @param bool|null $noeudLocal The noeud local.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNoeudLocal(?bool $noeudLocal): ChantiersDescriptifLocaux {
        $this->noeudLocal = $noeudLocal;
        return $this;
    }

    /**
     * Set the note objectif.
     *
     * @param float|null $noteObjectif The note objectif.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNoteObjectif(?float $noteObjectif): ChantiersDescriptifLocaux {
        $this->noteObjectif = $noteObjectif;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int|null $numeroNoeud The numero noeud.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNumeroNoeud(?int $numeroNoeud): ChantiersDescriptifLocaux {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the poste.
     *
     * @param string|null $poste The poste.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setPoste(?string $poste): ChantiersDescriptifLocaux {
        $this->poste = $poste;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string|null $uniqIdBlocage The uniq id blocage.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setUniqIdBlocage(?string $uniqIdBlocage): ChantiersDescriptifLocaux {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string|null $uniqIdNoeud The uniq id noeud.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setUniqIdNoeud(?string $uniqIdNoeud): ChantiersDescriptifLocaux {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
