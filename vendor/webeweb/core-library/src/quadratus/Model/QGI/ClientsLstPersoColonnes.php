<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Clients lst perso colonnes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsLstPersoColonnes {

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
     * Is formule.
     *
     * @var bool|null
     */
    private $isFormule;

    /**
     * Jointure.
     *
     * @var string|null
     */
    private $jointure;

    /**
     * Nb decimales.
     *
     * @var string|null
     */
    private $nbDecimales;

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
     * Get the is formule.
     *
     * @return bool|null Returns the is formule.
     */
    public function getIsFormule(): ?bool {
        return $this->isFormule;
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
     * Get the nb decimales.
     *
     * @return string|null Returns the nb decimales.
     */
    public function getNbDecimales(): ?string {
        return $this->nbDecimales;
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
     * Set the clause where.
     *
     * @param string|null $clauseWhere The clause where.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setClauseWhere(?string $clauseWhere): ClientsLstPersoColonnes {
        $this->clauseWhere = $clauseWhere;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setIndice(?int $indice): ClientsLstPersoColonnes {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the indice tri.
     *
     * @param string|null $indiceTri The indice tri.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setIndiceTri(?string $indiceTri): ClientsLstPersoColonnes {
        $this->indiceTri = $indiceTri;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setIntitule(?string $intitule): ClientsLstPersoColonnes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the is formule.
     *
     * @param bool|null $isFormule The is formule.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setIsFormule(?bool $isFormule): ClientsLstPersoColonnes {
        $this->isFormule = $isFormule;
        return $this;
    }

    /**
     * Set the jointure.
     *
     * @param string|null $jointure The jointure.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setJointure(?string $jointure): ClientsLstPersoColonnes {
        $this->jointure = $jointure;
        return $this;
    }

    /**
     * Set the nb decimales.
     *
     * @param string|null $nbDecimales The nb decimales.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setNbDecimales(?string $nbDecimales): ClientsLstPersoColonnes {
        $this->nbDecimales = $nbDecimales;
        return $this;
    }

    /**
     * Set the nom champ.
     *
     * @param string|null $nomChamp The nom champ.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setNomChamp(?string $nomChamp): ClientsLstPersoColonnes {
        $this->nomChamp = $nomChamp;
        return $this;
    }

    /**
     * Set the nom table.
     *
     * @param string|null $nomTable The nom table.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setNomTable(?string $nomTable): ClientsLstPersoColonnes {
        $this->nomTable = $nomTable;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string|null $refGuid The ref guid.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setRefGuid(?string $refGuid): ClientsLstPersoColonnes {
        $this->refGuid = $refGuid;
        return $this;
    }

    /**
     * Set the saisie.
     *
     * @param bool|null $saisie The saisie.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setSaisie(?bool $saisie): ClientsLstPersoColonnes {
        $this->saisie = $saisie;
        return $this;
    }

    /**
     * Set the selection.
     *
     * @param string|null $selection The selection.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setSelection(?string $selection): ClientsLstPersoColonnes {
        $this->selection = $selection;
        return $this;
    }

    /**
     * Set the taille.
     *
     * @param int|null $taille The taille.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setTaille(?int $taille): ClientsLstPersoColonnes {
        $this->taille = $taille;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return ClientsLstPersoColonnes Returns this Clients lst perso colonnes.
     */
    public function setTitre(?string $titre): ClientsLstPersoColonnes {
        $this->titre = $titre;
        return $this;
    }
}
