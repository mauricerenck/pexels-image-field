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
 * Tarifs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Tarifs {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

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
     * Code col creation.
     *
     * @var string|null
     */
    private $codeColCreation;

    /**
     * Code col modification.
     *
     * @var string|null
     */
    private $codeColModification;

    /**
     * Coeff tr1.
     *
     * @var float|null
     */
    private $coeffTr1;

    /**
     * Coeff tr2.
     *
     * @var float|null
     */
    private $coeffTr2;

    /**
     * Coeff tr3.
     *
     * @var float|null
     */
    private $coeffTr3;

    /**
     * Coeff tr4.
     *
     * @var float|null
     */
    private $coeffTr4;

    /**
     * Coeff tr5.
     *
     * @var float|null
     */
    private $coeffTr5;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Fam article.
     *
     * @var string|null
     */
    private $famArticle;

    /**
     * Fam client.
     *
     * @var string|null
     */
    private $famClient;

    /**
     * Prix net tr1.
     *
     * @var bool|null
     */
    private $prixNetTr1;

    /**
     * Prix net tr2.
     *
     * @var bool|null
     */
    private $prixNetTr2;

    /**
     * Prix net tr3.
     *
     * @var bool|null
     */
    private $prixNetTr3;

    /**
     * Prix net tr4.
     *
     * @var bool|null
     */
    private $prixNetTr4;

    /**
     * Prix net tr5.
     *
     * @var bool|null
     */
    private $prixNetTr5;

    /**
     * Pu article.
     *
     * @var bool|null
     */
    private $puArticle;

    /**
     * Pu base.
     *
     * @var float|null
     */
    private $puBase;

    /**
     * Pu tr1.
     *
     * @var float|null
     */
    private $puTr1;

    /**
     * Pu tr2.
     *
     * @var float|null
     */
    private $puTr2;

    /**
     * Pu tr3.
     *
     * @var float|null
     */
    private $puTr3;

    /**
     * Pu tr4.
     *
     * @var float|null
     */
    private $puTr4;

    /**
     * Pu tr5.
     *
     * @var float|null
     */
    private $puTr5;

    /**
     * Qte tr1.
     *
     * @var float|null
     */
    private $qteTr1;

    /**
     * Qte tr2.
     *
     * @var float|null
     */
    private $qteTr2;

    /**
     * Qte tr3.
     *
     * @var float|null
     */
    private $qteTr3;

    /**
     * Qte tr4.
     *
     * @var float|null
     */
    private $qteTr4;

    /**
     * Qte tr5.
     *
     * @var float|null
     */
    private $qteTr5;

    /**
     * Sous fam client.
     *
     * @var string|null
     */
    private $sousFamClient;

    /**
     * Type appli coef.
     *
     * @var string|null
     */
    private $typeAppliCoef;

    /**
     * Type article.
     *
     * @var string|null
     */
    private $typeArticle;

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
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
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
     * Get the code col creation.
     *
     * @return string|null Returns the code col creation.
     */
    public function getCodeColCreation(): ?string {
        return $this->codeColCreation;
    }

    /**
     * Get the code col modification.
     *
     * @return string|null Returns the code col modification.
     */
    public function getCodeColModification(): ?string {
        return $this->codeColModification;
    }

    /**
     * Get the coeff tr1.
     *
     * @return float|null Returns the coeff tr1.
     */
    public function getCoeffTr1(): ?float {
        return $this->coeffTr1;
    }

    /**
     * Get the coeff tr2.
     *
     * @return float|null Returns the coeff tr2.
     */
    public function getCoeffTr2(): ?float {
        return $this->coeffTr2;
    }

    /**
     * Get the coeff tr3.
     *
     * @return float|null Returns the coeff tr3.
     */
    public function getCoeffTr3(): ?float {
        return $this->coeffTr3;
    }

    /**
     * Get the coeff tr4.
     *
     * @return float|null Returns the coeff tr4.
     */
    public function getCoeffTr4(): ?float {
        return $this->coeffTr4;
    }

    /**
     * Get the coeff tr5.
     *
     * @return float|null Returns the coeff tr5.
     */
    public function getCoeffTr5(): ?float {
        return $this->coeffTr5;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the fam article.
     *
     * @return string|null Returns the fam article.
     */
    public function getFamArticle(): ?string {
        return $this->famArticle;
    }

    /**
     * Get the fam client.
     *
     * @return string|null Returns the fam client.
     */
    public function getFamClient(): ?string {
        return $this->famClient;
    }

    /**
     * Get the prix net tr1.
     *
     * @return bool|null Returns the prix net tr1.
     */
    public function getPrixNetTr1(): ?bool {
        return $this->prixNetTr1;
    }

    /**
     * Get the prix net tr2.
     *
     * @return bool|null Returns the prix net tr2.
     */
    public function getPrixNetTr2(): ?bool {
        return $this->prixNetTr2;
    }

    /**
     * Get the prix net tr3.
     *
     * @return bool|null Returns the prix net tr3.
     */
    public function getPrixNetTr3(): ?bool {
        return $this->prixNetTr3;
    }

    /**
     * Get the prix net tr4.
     *
     * @return bool|null Returns the prix net tr4.
     */
    public function getPrixNetTr4(): ?bool {
        return $this->prixNetTr4;
    }

    /**
     * Get the prix net tr5.
     *
     * @return bool|null Returns the prix net tr5.
     */
    public function getPrixNetTr5(): ?bool {
        return $this->prixNetTr5;
    }

    /**
     * Get the pu article.
     *
     * @return bool|null Returns the pu article.
     */
    public function getPuArticle(): ?bool {
        return $this->puArticle;
    }

    /**
     * Get the pu base.
     *
     * @return float|null Returns the pu base.
     */
    public function getPuBase(): ?float {
        return $this->puBase;
    }

    /**
     * Get the pu tr1.
     *
     * @return float|null Returns the pu tr1.
     */
    public function getPuTr1(): ?float {
        return $this->puTr1;
    }

    /**
     * Get the pu tr2.
     *
     * @return float|null Returns the pu tr2.
     */
    public function getPuTr2(): ?float {
        return $this->puTr2;
    }

    /**
     * Get the pu tr3.
     *
     * @return float|null Returns the pu tr3.
     */
    public function getPuTr3(): ?float {
        return $this->puTr3;
    }

    /**
     * Get the pu tr4.
     *
     * @return float|null Returns the pu tr4.
     */
    public function getPuTr4(): ?float {
        return $this->puTr4;
    }

    /**
     * Get the pu tr5.
     *
     * @return float|null Returns the pu tr5.
     */
    public function getPuTr5(): ?float {
        return $this->puTr5;
    }

    /**
     * Get the qte tr1.
     *
     * @return float|null Returns the qte tr1.
     */
    public function getQteTr1(): ?float {
        return $this->qteTr1;
    }

    /**
     * Get the qte tr2.
     *
     * @return float|null Returns the qte tr2.
     */
    public function getQteTr2(): ?float {
        return $this->qteTr2;
    }

    /**
     * Get the qte tr3.
     *
     * @return float|null Returns the qte tr3.
     */
    public function getQteTr3(): ?float {
        return $this->qteTr3;
    }

    /**
     * Get the qte tr4.
     *
     * @return float|null Returns the qte tr4.
     */
    public function getQteTr4(): ?float {
        return $this->qteTr4;
    }

    /**
     * Get the qte tr5.
     *
     * @return float|null Returns the qte tr5.
     */
    public function getQteTr5(): ?float {
        return $this->qteTr5;
    }

    /**
     * Get the sous fam client.
     *
     * @return string|null Returns the sous fam client.
     */
    public function getSousFamClient(): ?string {
        return $this->sousFamClient;
    }

    /**
     * Get the type appli coef.
     *
     * @return string|null Returns the type appli coef.
     */
    public function getTypeAppliCoef(): ?string {
        return $this->typeAppliCoef;
    }

    /**
     * Get the type article.
     *
     * @return string|null Returns the type article.
     */
    public function getTypeArticle(): ?string {
        return $this->typeArticle;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeAffaire(?string $codeAffaire): Tarifs {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeArticle(?string $codeArticle): Tarifs {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeChantier(?string $codeChantier): Tarifs {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeClient(?string $codeClient): Tarifs {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code col creation.
     *
     * @param string|null $codeColCreation The code col creation.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeColCreation(?string $codeColCreation): Tarifs {
        $this->codeColCreation = $codeColCreation;
        return $this;
    }

    /**
     * Set the code col modification.
     *
     * @param string|null $codeColModification The code col modification.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeColModification(?string $codeColModification): Tarifs {
        $this->codeColModification = $codeColModification;
        return $this;
    }

    /**
     * Set the coeff tr1.
     *
     * @param float|null $coeffTr1 The coeff tr1.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCoeffTr1(?float $coeffTr1): Tarifs {
        $this->coeffTr1 = $coeffTr1;
        return $this;
    }

    /**
     * Set the coeff tr2.
     *
     * @param float|null $coeffTr2 The coeff tr2.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCoeffTr2(?float $coeffTr2): Tarifs {
        $this->coeffTr2 = $coeffTr2;
        return $this;
    }

    /**
     * Set the coeff tr3.
     *
     * @param float|null $coeffTr3 The coeff tr3.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCoeffTr3(?float $coeffTr3): Tarifs {
        $this->coeffTr3 = $coeffTr3;
        return $this;
    }

    /**
     * Set the coeff tr4.
     *
     * @param float|null $coeffTr4 The coeff tr4.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCoeffTr4(?float $coeffTr4): Tarifs {
        $this->coeffTr4 = $coeffTr4;
        return $this;
    }

    /**
     * Set the coeff tr5.
     *
     * @param float|null $coeffTr5 The coeff tr5.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCoeffTr5(?float $coeffTr5): Tarifs {
        $this->coeffTr5 = $coeffTr5;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Tarifs Returns this Tarifs.
     */
    public function setDateCreation(?DateTime $dateCreation): Tarifs {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return Tarifs Returns this Tarifs.
     */
    public function setDateDebut(?DateTime $dateDebut): Tarifs {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return Tarifs Returns this Tarifs.
     */
    public function setDateFin(?DateTime $dateFin): Tarifs {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Tarifs Returns this Tarifs.
     */
    public function setDateModification(?DateTime $dateModification): Tarifs {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the fam article.
     *
     * @param string|null $famArticle The fam article.
     * @return Tarifs Returns this Tarifs.
     */
    public function setFamArticle(?string $famArticle): Tarifs {
        $this->famArticle = $famArticle;
        return $this;
    }

    /**
     * Set the fam client.
     *
     * @param string|null $famClient The fam client.
     * @return Tarifs Returns this Tarifs.
     */
    public function setFamClient(?string $famClient): Tarifs {
        $this->famClient = $famClient;
        return $this;
    }

    /**
     * Set the prix net tr1.
     *
     * @param bool|null $prixNetTr1 The prix net tr1.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixNetTr1(?bool $prixNetTr1): Tarifs {
        $this->prixNetTr1 = $prixNetTr1;
        return $this;
    }

    /**
     * Set the prix net tr2.
     *
     * @param bool|null $prixNetTr2 The prix net tr2.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixNetTr2(?bool $prixNetTr2): Tarifs {
        $this->prixNetTr2 = $prixNetTr2;
        return $this;
    }

    /**
     * Set the prix net tr3.
     *
     * @param bool|null $prixNetTr3 The prix net tr3.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixNetTr3(?bool $prixNetTr3): Tarifs {
        $this->prixNetTr3 = $prixNetTr3;
        return $this;
    }

    /**
     * Set the prix net tr4.
     *
     * @param bool|null $prixNetTr4 The prix net tr4.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixNetTr4(?bool $prixNetTr4): Tarifs {
        $this->prixNetTr4 = $prixNetTr4;
        return $this;
    }

    /**
     * Set the prix net tr5.
     *
     * @param bool|null $prixNetTr5 The prix net tr5.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixNetTr5(?bool $prixNetTr5): Tarifs {
        $this->prixNetTr5 = $prixNetTr5;
        return $this;
    }

    /**
     * Set the pu article.
     *
     * @param bool|null $puArticle The pu article.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuArticle(?bool $puArticle): Tarifs {
        $this->puArticle = $puArticle;
        return $this;
    }

    /**
     * Set the pu base.
     *
     * @param float|null $puBase The pu base.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuBase(?float $puBase): Tarifs {
        $this->puBase = $puBase;
        return $this;
    }

    /**
     * Set the pu tr1.
     *
     * @param float|null $puTr1 The pu tr1.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuTr1(?float $puTr1): Tarifs {
        $this->puTr1 = $puTr1;
        return $this;
    }

    /**
     * Set the pu tr2.
     *
     * @param float|null $puTr2 The pu tr2.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuTr2(?float $puTr2): Tarifs {
        $this->puTr2 = $puTr2;
        return $this;
    }

    /**
     * Set the pu tr3.
     *
     * @param float|null $puTr3 The pu tr3.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuTr3(?float $puTr3): Tarifs {
        $this->puTr3 = $puTr3;
        return $this;
    }

    /**
     * Set the pu tr4.
     *
     * @param float|null $puTr4 The pu tr4.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuTr4(?float $puTr4): Tarifs {
        $this->puTr4 = $puTr4;
        return $this;
    }

    /**
     * Set the pu tr5.
     *
     * @param float|null $puTr5 The pu tr5.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPuTr5(?float $puTr5): Tarifs {
        $this->puTr5 = $puTr5;
        return $this;
    }

    /**
     * Set the qte tr1.
     *
     * @param float|null $qteTr1 The qte tr1.
     * @return Tarifs Returns this Tarifs.
     */
    public function setQteTr1(?float $qteTr1): Tarifs {
        $this->qteTr1 = $qteTr1;
        return $this;
    }

    /**
     * Set the qte tr2.
     *
     * @param float|null $qteTr2 The qte tr2.
     * @return Tarifs Returns this Tarifs.
     */
    public function setQteTr2(?float $qteTr2): Tarifs {
        $this->qteTr2 = $qteTr2;
        return $this;
    }

    /**
     * Set the qte tr3.
     *
     * @param float|null $qteTr3 The qte tr3.
     * @return Tarifs Returns this Tarifs.
     */
    public function setQteTr3(?float $qteTr3): Tarifs {
        $this->qteTr3 = $qteTr3;
        return $this;
    }

    /**
     * Set the qte tr4.
     *
     * @param float|null $qteTr4 The qte tr4.
     * @return Tarifs Returns this Tarifs.
     */
    public function setQteTr4(?float $qteTr4): Tarifs {
        $this->qteTr4 = $qteTr4;
        return $this;
    }

    /**
     * Set the qte tr5.
     *
     * @param float|null $qteTr5 The qte tr5.
     * @return Tarifs Returns this Tarifs.
     */
    public function setQteTr5(?float $qteTr5): Tarifs {
        $this->qteTr5 = $qteTr5;
        return $this;
    }

    /**
     * Set the sous fam client.
     *
     * @param string|null $sousFamClient The sous fam client.
     * @return Tarifs Returns this Tarifs.
     */
    public function setSousFamClient(?string $sousFamClient): Tarifs {
        $this->sousFamClient = $sousFamClient;
        return $this;
    }

    /**
     * Set the type appli coef.
     *
     * @param string|null $typeAppliCoef The type appli coef.
     * @return Tarifs Returns this Tarifs.
     */
    public function setTypeAppliCoef(?string $typeAppliCoef): Tarifs {
        $this->typeAppliCoef = $typeAppliCoef;
        return $this;
    }

    /**
     * Set the type article.
     *
     * @param string|null $typeArticle The type article.
     * @return Tarifs Returns this Tarifs.
     */
    public function setTypeArticle(?string $typeArticle): Tarifs {
        $this->typeArticle = $typeArticle;
        return $this;
    }
}
