<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Historiques employes colonnes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HistoriquesEmployesColonnes {

    /**
     * b en graph.
     *
     * @var bool|null
     */
    private $bEnGraph;

    /**
     * Clause where.
     *
     * @var string|null
     */
    private $clauseWhere;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Indice tri.
     *
     * @var string|null
     */
    private $indiceTri;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Jointure.
     *
     * @var string|null
     */
    private $jointure;

    /**
     * Nom champ.
     *
     * @var string|null
     */
    private $nomChamp;

    /**
     * Nom table.
     *
     * @var string|null
     */
    private $nomTable;

    /**
     * Ref guid.
     *
     * @var string|null
     */
    private $refGuid;

    /**
     * Saisie.
     *
     * @var bool|null
     */
    private $saisie;

    /**
     * Selection.
     *
     * @var string|null
     */
    private $selection;

    /**
     * Taille.
     *
     * @var int|null
     */
    private $taille;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the clause where.
     *
     * @return string|null Returns the clause where.
     */
    public function getClauseWhere(): ?string {
        return $this->clauseWhere;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Get the indice tri.
     *
     * @return string|null Returns the indice tri.
     */
    public function getIndiceTri(): ?string {
        return $this->indiceTri;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the jointure.
     *
     * @return string|null Returns the jointure.
     */
    public function getJointure(): ?string {
        return $this->jointure;
    }

    /**
     * Get the nom champ.
     *
     * @return string|null Returns the nom champ.
     */
    public function getNomChamp(): ?string {
        return $this->nomChamp;
    }

    /**
     * Get the nom table.
     *
     * @return string|null Returns the nom table.
     */
    public function getNomTable(): ?string {
        return $this->nomTable;
    }

    /**
     * Get the ref guid.
     *
     * @return string|null Returns the ref guid.
     */
    public function getRefGuid(): ?string {
        return $this->refGuid;
    }

    /**
     * Get the saisie.
     *
     * @return bool|null Returns the saisie.
     */
    public function getSaisie(): ?bool {
        return $this->saisie;
    }

    /**
     * Get the selection.
     *
     * @return string|null Returns the selection.
     */
    public function getSelection(): ?string {
        return $this->selection;
    }

    /**
     * Get the taille.
     *
     * @return int|null Returns the taille.
     */
    public function getTaille(): ?int {
        return $this->taille;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the b en graph.
     *
     * @return bool|null Returns the b en graph.
     */
    public function getbEnGraph(): ?bool {
        return $this->bEnGraph;
    }

    /**
     * Set the clause where.
     *
     * @param string|null $clauseWhere The clause where.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setClauseWhere(?string $clauseWhere): HistoriquesEmployesColonnes {
        $this->clauseWhere = $clauseWhere;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setIndice(?int $indice): HistoriquesEmployesColonnes {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the indice tri.
     *
     * @param string|null $indiceTri The indice tri.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setIndiceTri(?string $indiceTri): HistoriquesEmployesColonnes {
        $this->indiceTri = $indiceTri;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setIntitule(?string $intitule): HistoriquesEmployesColonnes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the jointure.
     *
     * @param string|null $jointure The jointure.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setJointure(?string $jointure): HistoriquesEmployesColonnes {
        $this->jointure = $jointure;
        return $this;
    }

    /**
     * Set the nom champ.
     *
     * @param string|null $nomChamp The nom champ.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setNomChamp(?string $nomChamp): HistoriquesEmployesColonnes {
        $this->nomChamp = $nomChamp;
        return $this;
    }

    /**
     * Set the nom table.
     *
     * @param string|null $nomTable The nom table.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setNomTable(?string $nomTable): HistoriquesEmployesColonnes {
        $this->nomTable = $nomTable;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string|null $refGuid The ref guid.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setRefGuid(?string $refGuid): HistoriquesEmployesColonnes {
        $this->refGuid = $refGuid;
        return $this;
    }

    /**
     * Set the saisie.
     *
     * @param bool|null $saisie The saisie.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setSaisie(?bool $saisie): HistoriquesEmployesColonnes {
        $this->saisie = $saisie;
        return $this;
    }

    /**
     * Set the selection.
     *
     * @param string|null $selection The selection.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setSelection(?string $selection): HistoriquesEmployesColonnes {
        $this->selection = $selection;
        return $this;
    }

    /**
     * Set the taille.
     *
     * @param int|null $taille The taille.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setTaille(?int $taille): HistoriquesEmployesColonnes {
        $this->taille = $taille;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setTitre(?string $titre): HistoriquesEmployesColonnes {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the b en graph.
     *
     * @param bool|null $bEnGraph The b en graph.
     * @return HistoriquesEmployesColonnes Returns this Historiques employes colonnes.
     */
    public function setbEnGraph(?bool $bEnGraph): HistoriquesEmployesColonnes {
        $this->bEnGraph = $bEnGraph;
        return $this;
    }
}
