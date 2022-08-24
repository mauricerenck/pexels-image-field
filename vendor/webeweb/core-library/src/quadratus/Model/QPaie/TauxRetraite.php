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
 * Taux retraite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TauxRetraite {

    /**
     * Categ cadre.
     *
     * @var bool|null
     */
    private $categCadre;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Indice contrat.
     *
     * @var int|null
     */
    private $indiceContrat;

    /**
     * Libelle bul.
     *
     * @var string|null
     */
    private $libelleBul;

    /**
     * Num dossier.
     *
     * @var string|null
     */
    private $numDossier;

    /**
     * Sous dossier.
     *
     * @var string|null
     */
    private $sousDossier;

    /**
     * Taux pat tr a.
     *
     * @var float|null
     */
    private $tauxPatTrA;

    /**
     * Taux pat tr b.
     *
     * @var float|null
     */
    private $tauxPatTrB;

    /**
     * Taux pat tr c.
     *
     * @var float|null
     */
    private $tauxPatTrC;

    /**
     * Taux sal tr a.
     *
     * @var float|null
     */
    private $tauxSalTrA;

    /**
     * Taux sal tr b.
     *
     * @var float|null
     */
    private $tauxSalTrB;

    /**
     * Taux sal tr c.
     *
     * @var float|null
     */
    private $tauxSalTrC;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the categ cadre.
     *
     * @return bool|null Returns the categ cadre.
     */
    public function getCategCadre(): ?bool {
        return $this->categCadre;
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the indice contrat.
     *
     * @return int|null Returns the indice contrat.
     */
    public function getIndiceContrat(): ?int {
        return $this->indiceContrat;
    }

    /**
     * Get the libelle bul.
     *
     * @return string|null Returns the libelle bul.
     */
    public function getLibelleBul(): ?string {
        return $this->libelleBul;
    }

    /**
     * Get the num dossier.
     *
     * @return string|null Returns the num dossier.
     */
    public function getNumDossier(): ?string {
        return $this->numDossier;
    }

    /**
     * Get the sous dossier.
     *
     * @return string|null Returns the sous dossier.
     */
    public function getSousDossier(): ?string {
        return $this->sousDossier;
    }

    /**
     * Get the taux pat tr a.
     *
     * @return float|null Returns the taux pat tr a.
     */
    public function getTauxPatTrA(): ?float {
        return $this->tauxPatTrA;
    }

    /**
     * Get the taux pat tr b.
     *
     * @return float|null Returns the taux pat tr b.
     */
    public function getTauxPatTrB(): ?float {
        return $this->tauxPatTrB;
    }

    /**
     * Get the taux pat tr c.
     *
     * @return float|null Returns the taux pat tr c.
     */
    public function getTauxPatTrC(): ?float {
        return $this->tauxPatTrC;
    }

    /**
     * Get the taux sal tr a.
     *
     * @return float|null Returns the taux sal tr a.
     */
    public function getTauxSalTrA(): ?float {
        return $this->tauxSalTrA;
    }

    /**
     * Get the taux sal tr b.
     *
     * @return float|null Returns the taux sal tr b.
     */
    public function getTauxSalTrB(): ?float {
        return $this->tauxSalTrB;
    }

    /**
     * Get the taux sal tr c.
     *
     * @return float|null Returns the taux sal tr c.
     */
    public function getTauxSalTrC(): ?float {
        return $this->tauxSalTrC;
    }

    /**
     * Set the categ cadre.
     *
     * @param bool|null $categCadre The categ cadre.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCategCadre(?bool $categCadre): TauxRetraite {
        $this->categCadre = $categCadre;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCodeCentre(?string $codeCentre): TauxRetraite {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCodeEtablissement(?int $codeEtablissement): TauxRetraite {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCodeOrganisme(?string $codeOrganisme): TauxRetraite {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the indice contrat.
     *
     * @param int|null $indiceContrat The indice contrat.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setIndiceContrat(?int $indiceContrat): TauxRetraite {
        $this->indiceContrat = $indiceContrat;
        return $this;
    }

    /**
     * Set the libelle bul.
     *
     * @param string|null $libelleBul The libelle bul.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setLibelleBul(?string $libelleBul): TauxRetraite {
        $this->libelleBul = $libelleBul;
        return $this;
    }

    /**
     * Set the num dossier.
     *
     * @param string|null $numDossier The num dossier.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setNumDossier(?string $numDossier): TauxRetraite {
        $this->numDossier = $numDossier;
        return $this;
    }

    /**
     * Set the sous dossier.
     *
     * @param string|null $sousDossier The sous dossier.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setSousDossier(?string $sousDossier): TauxRetraite {
        $this->sousDossier = $sousDossier;
        return $this;
    }

    /**
     * Set the taux pat tr a.
     *
     * @param float|null $tauxPatTrA The taux pat tr a.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxPatTrA(?float $tauxPatTrA): TauxRetraite {
        $this->tauxPatTrA = $tauxPatTrA;
        return $this;
    }

    /**
     * Set the taux pat tr b.
     *
     * @param float|null $tauxPatTrB The taux pat tr b.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxPatTrB(?float $tauxPatTrB): TauxRetraite {
        $this->tauxPatTrB = $tauxPatTrB;
        return $this;
    }

    /**
     * Set the taux pat tr c.
     *
     * @param float|null $tauxPatTrC The taux pat tr c.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxPatTrC(?float $tauxPatTrC): TauxRetraite {
        $this->tauxPatTrC = $tauxPatTrC;
        return $this;
    }

    /**
     * Set the taux sal tr a.
     *
     * @param float|null $tauxSalTrA The taux sal tr a.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxSalTrA(?float $tauxSalTrA): TauxRetraite {
        $this->tauxSalTrA = $tauxSalTrA;
        return $this;
    }

    /**
     * Set the taux sal tr b.
     *
     * @param float|null $tauxSalTrB The taux sal tr b.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxSalTrB(?float $tauxSalTrB): TauxRetraite {
        $this->tauxSalTrB = $tauxSalTrB;
        return $this;
    }

    /**
     * Set the taux sal tr c.
     *
     * @param float|null $tauxSalTrC The taux sal tr c.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxSalTrC(?float $tauxSalTrC): TauxRetraite {
        $this->tauxSalTrC = $tauxSalTrC;
        return $this;
    }
}
