<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Fiches confidentialites menus.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class FichesConfidentialitesMenus {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Droit ajout.
     *
     * @var bool|null
     */
    private $droitAjout;

    /**
     * Droit modification.
     *
     * @var bool|null
     */
    private $droitModification;

    /**
     * Droit suppression.
     *
     * @var bool|null
     */
    private $droitSuppression;

    /**
     * Index.
     *
     * @var int|null
     */
    private $index;

    /**
     * Index du pere no1.
     *
     * @var int|null
     */
    private $indexDuPereNo1;

    /**
     * Index du pere no2.
     *
     * @var int|null
     */
    private $indexDuPereNo2;

    /**
     * Index du pere no3.
     *
     * @var int|null
     */
    private $indexDuPereNo3;

    /**
     * Index du pere no4.
     *
     * @var int|null
     */
    private $indexDuPereNo4;

    /**
     * Index du pere no5.
     *
     * @var int|null
     */
    private $indexDuPereNo5;

    /**
     * Index du pere no6.
     *
     * @var int|null
     */
    private $indexDuPereNo6;

    /**
     * Index du pere no7.
     *
     * @var int|null
     */
    private $indexDuPereNo7;

    /**
     * Libelle menu.
     *
     * @var string|null
     */
    private $libelleMenu;

    /**
     * Menu visible.
     *
     * @var bool|null
     */
    private $menuVisible;

    /**
     * Mot de passe.
     *
     * @var string|null
     */
    private $motDePasse;

    /**
     * Niveau ligne.
     *
     * @var string|null
     */
    private $niveauLigne;

    /**
     * Nom du pere no1.
     *
     * @var string|null
     */
    private $nomDuPereNo1;

    /**
     * Nom du pere no2.
     *
     * @var string|null
     */
    private $nomDuPereNo2;

    /**
     * Nom du pere no3.
     *
     * @var string|null
     */
    private $nomDuPereNo3;

    /**
     * Nom du pere no4.
     *
     * @var string|null
     */
    private $nomDuPereNo4;

    /**
     * Nom du pere no5.
     *
     * @var string|null
     */
    private $nomDuPereNo5;

    /**
     * Nom du pere no6.
     *
     * @var string|null
     */
    private $nomDuPereNo6;

    /**
     * Nom du pere no7.
     *
     * @var string|null
     */
    private $nomDuPereNo7;

    /**
     * Nom menu.
     *
     * @var string|null
     */
    private $nomMenu;

    /**
     * Type selection.
     *
     * @var string|null
     */
    private $typeSelection;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the droit ajout.
     *
     * @return bool|null Returns the droit ajout.
     */
    public function getDroitAjout(): ?bool {
        return $this->droitAjout;
    }

    /**
     * Get the droit modification.
     *
     * @return bool|null Returns the droit modification.
     */
    public function getDroitModification(): ?bool {
        return $this->droitModification;
    }

    /**
     * Get the droit suppression.
     *
     * @return bool|null Returns the droit suppression.
     */
    public function getDroitSuppression(): ?bool {
        return $this->droitSuppression;
    }

    /**
     * Get the index.
     *
     * @return int|null Returns the index.
     */
    public function getIndex(): ?int {
        return $this->index;
    }

    /**
     * Get the index du pere no1.
     *
     * @return int|null Returns the index du pere no1.
     */
    public function getIndexDuPereNo1(): ?int {
        return $this->indexDuPereNo1;
    }

    /**
     * Get the index du pere no2.
     *
     * @return int|null Returns the index du pere no2.
     */
    public function getIndexDuPereNo2(): ?int {
        return $this->indexDuPereNo2;
    }

    /**
     * Get the index du pere no3.
     *
     * @return int|null Returns the index du pere no3.
     */
    public function getIndexDuPereNo3(): ?int {
        return $this->indexDuPereNo3;
    }

    /**
     * Get the index du pere no4.
     *
     * @return int|null Returns the index du pere no4.
     */
    public function getIndexDuPereNo4(): ?int {
        return $this->indexDuPereNo4;
    }

    /**
     * Get the index du pere no5.
     *
     * @return int|null Returns the index du pere no5.
     */
    public function getIndexDuPereNo5(): ?int {
        return $this->indexDuPereNo5;
    }

    /**
     * Get the index du pere no6.
     *
     * @return int|null Returns the index du pere no6.
     */
    public function getIndexDuPereNo6(): ?int {
        return $this->indexDuPereNo6;
    }

    /**
     * Get the index du pere no7.
     *
     * @return int|null Returns the index du pere no7.
     */
    public function getIndexDuPereNo7(): ?int {
        return $this->indexDuPereNo7;
    }

    /**
     * Get the libelle menu.
     *
     * @return string|null Returns the libelle menu.
     */
    public function getLibelleMenu(): ?string {
        return $this->libelleMenu;
    }

    /**
     * Get the menu visible.
     *
     * @return bool|null Returns the menu visible.
     */
    public function getMenuVisible(): ?bool {
        return $this->menuVisible;
    }

    /**
     * Get the mot de passe.
     *
     * @return string|null Returns the mot de passe.
     */
    public function getMotDePasse(): ?string {
        return $this->motDePasse;
    }

    /**
     * Get the niveau ligne.
     *
     * @return string|null Returns the niveau ligne.
     */
    public function getNiveauLigne(): ?string {
        return $this->niveauLigne;
    }

    /**
     * Get the nom du pere no1.
     *
     * @return string|null Returns the nom du pere no1.
     */
    public function getNomDuPereNo1(): ?string {
        return $this->nomDuPereNo1;
    }

    /**
     * Get the nom du pere no2.
     *
     * @return string|null Returns the nom du pere no2.
     */
    public function getNomDuPereNo2(): ?string {
        return $this->nomDuPereNo2;
    }

    /**
     * Get the nom du pere no3.
     *
     * @return string|null Returns the nom du pere no3.
     */
    public function getNomDuPereNo3(): ?string {
        return $this->nomDuPereNo3;
    }

    /**
     * Get the nom du pere no4.
     *
     * @return string|null Returns the nom du pere no4.
     */
    public function getNomDuPereNo4(): ?string {
        return $this->nomDuPereNo4;
    }

    /**
     * Get the nom du pere no5.
     *
     * @return string|null Returns the nom du pere no5.
     */
    public function getNomDuPereNo5(): ?string {
        return $this->nomDuPereNo5;
    }

    /**
     * Get the nom du pere no6.
     *
     * @return string|null Returns the nom du pere no6.
     */
    public function getNomDuPereNo6(): ?string {
        return $this->nomDuPereNo6;
    }

    /**
     * Get the nom du pere no7.
     *
     * @return string|null Returns the nom du pere no7.
     */
    public function getNomDuPereNo7(): ?string {
        return $this->nomDuPereNo7;
    }

    /**
     * Get the nom menu.
     *
     * @return string|null Returns the nom menu.
     */
    public function getNomMenu(): ?string {
        return $this->nomMenu;
    }

    /**
     * Get the type selection.
     *
     * @return string|null Returns the type selection.
     */
    public function getTypeSelection(): ?string {
        return $this->typeSelection;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setCode(?string $code): FichesConfidentialitesMenus {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the droit ajout.
     *
     * @param bool|null $droitAjout The droit ajout.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setDroitAjout(?bool $droitAjout): FichesConfidentialitesMenus {
        $this->droitAjout = $droitAjout;
        return $this;
    }

    /**
     * Set the droit modification.
     *
     * @param bool|null $droitModification The droit modification.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setDroitModification(?bool $droitModification): FichesConfidentialitesMenus {
        $this->droitModification = $droitModification;
        return $this;
    }

    /**
     * Set the droit suppression.
     *
     * @param bool|null $droitSuppression The droit suppression.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setDroitSuppression(?bool $droitSuppression): FichesConfidentialitesMenus {
        $this->droitSuppression = $droitSuppression;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param int|null $index The index.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndex(?int $index): FichesConfidentialitesMenus {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the index du pere no1.
     *
     * @param int|null $indexDuPereNo1 The index du pere no1.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo1(?int $indexDuPereNo1): FichesConfidentialitesMenus {
        $this->indexDuPereNo1 = $indexDuPereNo1;
        return $this;
    }

    /**
     * Set the index du pere no2.
     *
     * @param int|null $indexDuPereNo2 The index du pere no2.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo2(?int $indexDuPereNo2): FichesConfidentialitesMenus {
        $this->indexDuPereNo2 = $indexDuPereNo2;
        return $this;
    }

    /**
     * Set the index du pere no3.
     *
     * @param int|null $indexDuPereNo3 The index du pere no3.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo3(?int $indexDuPereNo3): FichesConfidentialitesMenus {
        $this->indexDuPereNo3 = $indexDuPereNo3;
        return $this;
    }

    /**
     * Set the index du pere no4.
     *
     * @param int|null $indexDuPereNo4 The index du pere no4.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo4(?int $indexDuPereNo4): FichesConfidentialitesMenus {
        $this->indexDuPereNo4 = $indexDuPereNo4;
        return $this;
    }

    /**
     * Set the index du pere no5.
     *
     * @param int|null $indexDuPereNo5 The index du pere no5.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo5(?int $indexDuPereNo5): FichesConfidentialitesMenus {
        $this->indexDuPereNo5 = $indexDuPereNo5;
        return $this;
    }

    /**
     * Set the index du pere no6.
     *
     * @param int|null $indexDuPereNo6 The index du pere no6.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo6(?int $indexDuPereNo6): FichesConfidentialitesMenus {
        $this->indexDuPereNo6 = $indexDuPereNo6;
        return $this;
    }

    /**
     * Set the index du pere no7.
     *
     * @param int|null $indexDuPereNo7 The index du pere no7.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setIndexDuPereNo7(?int $indexDuPereNo7): FichesConfidentialitesMenus {
        $this->indexDuPereNo7 = $indexDuPereNo7;
        return $this;
    }

    /**
     * Set the libelle menu.
     *
     * @param string|null $libelleMenu The libelle menu.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setLibelleMenu(?string $libelleMenu): FichesConfidentialitesMenus {
        $this->libelleMenu = $libelleMenu;
        return $this;
    }

    /**
     * Set the menu visible.
     *
     * @param bool|null $menuVisible The menu visible.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setMenuVisible(?bool $menuVisible): FichesConfidentialitesMenus {
        $this->menuVisible = $menuVisible;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string|null $motDePasse The mot de passe.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setMotDePasse(?string $motDePasse): FichesConfidentialitesMenus {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the niveau ligne.
     *
     * @param string|null $niveauLigne The niveau ligne.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNiveauLigne(?string $niveauLigne): FichesConfidentialitesMenus {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }

    /**
     * Set the nom du pere no1.
     *
     * @param string|null $nomDuPereNo1 The nom du pere no1.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo1(?string $nomDuPereNo1): FichesConfidentialitesMenus {
        $this->nomDuPereNo1 = $nomDuPereNo1;
        return $this;
    }

    /**
     * Set the nom du pere no2.
     *
     * @param string|null $nomDuPereNo2 The nom du pere no2.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo2(?string $nomDuPereNo2): FichesConfidentialitesMenus {
        $this->nomDuPereNo2 = $nomDuPereNo2;
        return $this;
    }

    /**
     * Set the nom du pere no3.
     *
     * @param string|null $nomDuPereNo3 The nom du pere no3.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo3(?string $nomDuPereNo3): FichesConfidentialitesMenus {
        $this->nomDuPereNo3 = $nomDuPereNo3;
        return $this;
    }

    /**
     * Set the nom du pere no4.
     *
     * @param string|null $nomDuPereNo4 The nom du pere no4.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo4(?string $nomDuPereNo4): FichesConfidentialitesMenus {
        $this->nomDuPereNo4 = $nomDuPereNo4;
        return $this;
    }

    /**
     * Set the nom du pere no5.
     *
     * @param string|null $nomDuPereNo5 The nom du pere no5.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo5(?string $nomDuPereNo5): FichesConfidentialitesMenus {
        $this->nomDuPereNo5 = $nomDuPereNo5;
        return $this;
    }

    /**
     * Set the nom du pere no6.
     *
     * @param string|null $nomDuPereNo6 The nom du pere no6.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo6(?string $nomDuPereNo6): FichesConfidentialitesMenus {
        $this->nomDuPereNo6 = $nomDuPereNo6;
        return $this;
    }

    /**
     * Set the nom du pere no7.
     *
     * @param string|null $nomDuPereNo7 The nom du pere no7.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomDuPereNo7(?string $nomDuPereNo7): FichesConfidentialitesMenus {
        $this->nomDuPereNo7 = $nomDuPereNo7;
        return $this;
    }

    /**
     * Set the nom menu.
     *
     * @param string|null $nomMenu The nom menu.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setNomMenu(?string $nomMenu): FichesConfidentialitesMenus {
        $this->nomMenu = $nomMenu;
        return $this;
    }

    /**
     * Set the type selection.
     *
     * @param string|null $typeSelection The type selection.
     * @return FichesConfidentialitesMenus Returns this Fiches confidentialites menus.
     */
    public function setTypeSelection(?string $typeSelection): FichesConfidentialitesMenus {
        $this->typeSelection = $typeSelection;
        return $this;
    }
}
