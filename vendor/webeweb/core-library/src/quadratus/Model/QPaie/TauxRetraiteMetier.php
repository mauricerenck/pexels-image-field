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
 * Taux retraite metier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TauxRetraiteMetier {

    /**
     * Active.
     *
     * @var bool|null
     */
    private $active;

    /**
     * Categ salarie.
     *
     * @var int|null
     */
    private $categSalarie;

    /**
     * Code activite.
     *
     * @var string|null
     */
    private $codeActivite;

    /**
     * Code ducs.
     *
     * @var string|null
     */
    private $codeDucs;

    /**
     * Code edition histo.
     *
     * @var string|null
     */
    private $codeEditionHisto;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code metier.
     *
     * @var string|null
     */
    private $codeMetier;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Compte charge.
     *
     * @var string|null
     */
    private $compteCharge;

    /**
     * Condition spec.
     *
     * @var string|null
     */
    private $conditionSpec;

    /**
     * Exclure loi tepa.
     *
     * @var string|null
     */
    private $exclureLoiTepa;

    /**
     * Indice categ.
     *
     * @var int|null
     */
    private $indiceCateg;

    /**
     * Libelle bul.
     *
     * @var string|null
     */
    private $libelleBul;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Qualifiant cotis.
     *
     * @var string|null
     */
    private $qualifiantCotis;

    /**
     * Type libelle.
     *
     * @var int|null
     */
    private $typeLibelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * Get the categ salarie.
     *
     * @return int|null Returns the categ salarie.
     */
    public function getCategSalarie(): ?int {
        return $this->categSalarie;
    }

    /**
     * Get the code activite.
     *
     * @return string|null Returns the code activite.
     */
    public function getCodeActivite(): ?string {
        return $this->codeActivite;
    }

    /**
     * Get the code ducs.
     *
     * @return string|null Returns the code ducs.
     */
    public function getCodeDucs(): ?string {
        return $this->codeDucs;
    }

    /**
     * Get the code edition histo.
     *
     * @return string|null Returns the code edition histo.
     */
    public function getCodeEditionHisto(): ?string {
        return $this->codeEditionHisto;
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the code metier.
     *
     * @return string|null Returns the code metier.
     */
    public function getCodeMetier(): ?string {
        return $this->codeMetier;
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
     * Get the compte charge.
     *
     * @return string|null Returns the compte charge.
     */
    public function getCompteCharge(): ?string {
        return $this->compteCharge;
    }

    /**
     * Get the condition spec.
     *
     * @return string|null Returns the condition spec.
     */
    public function getConditionSpec(): ?string {
        return $this->conditionSpec;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return string|null Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa(): ?string {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the indice categ.
     *
     * @return int|null Returns the indice categ.
     */
    public function getIndiceCateg(): ?int {
        return $this->indiceCateg;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the qualifiant cotis.
     *
     * @return string|null Returns the qualifiant cotis.
     */
    public function getQualifiantCotis(): ?string {
        return $this->qualifiantCotis;
    }

    /**
     * Get the type libelle.
     *
     * @return int|null Returns the type libelle.
     */
    public function getTypeLibelle(): ?int {
        return $this->typeLibelle;
    }

    /**
     * Set the active.
     *
     * @param bool|null $active The active.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setActive(?bool $active): TauxRetraiteMetier {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param int|null $categSalarie The categ salarie.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCategSalarie(?int $categSalarie): TauxRetraiteMetier {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string|null $codeActivite The code activite.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCodeActivite(?string $codeActivite): TauxRetraiteMetier {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string|null $codeDucs The code ducs.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCodeDucs(?string $codeDucs): TauxRetraiteMetier {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string|null $codeEditionHisto The code edition histo.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCodeEditionHisto(?string $codeEditionHisto): TauxRetraiteMetier {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCodeLibelle(?string $codeLibelle): TauxRetraiteMetier {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code metier.
     *
     * @param string|null $codeMetier The code metier.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCodeMetier(?string $codeMetier): TauxRetraiteMetier {
        $this->codeMetier = $codeMetier;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCodeOrganisme(?string $codeOrganisme): TauxRetraiteMetier {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string|null $compteCharge The compte charge.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setCompteCharge(?string $compteCharge): TauxRetraiteMetier {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string|null $conditionSpec The condition spec.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setConditionSpec(?string $conditionSpec): TauxRetraiteMetier {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param string|null $exclureLoiTepa The exclure loi tepa.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setExclureLoiTepa(?string $exclureLoiTepa): TauxRetraiteMetier {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int|null $indiceCateg The indice categ.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setIndiceCateg(?int $indiceCateg): TauxRetraiteMetier {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the libelle bul.
     *
     * @param string|null $libelleBul The libelle bul.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setLibelleBul(?string $libelleBul): TauxRetraiteMetier {
        $this->libelleBul = $libelleBul;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setNumLigne(?int $numLigne): TauxRetraiteMetier {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string|null $qualifiantCotis The qualifiant cotis.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setQualifiantCotis(?string $qualifiantCotis): TauxRetraiteMetier {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the type libelle.
     *
     * @param int|null $typeLibelle The type libelle.
     * @return TauxRetraiteMetier Returns this Taux retraite metier.
     */
    public function setTypeLibelle(?int $typeLibelle): TauxRetraiteMetier {
        $this->typeLibelle = $typeLibelle;
        return $this;
    }
}
