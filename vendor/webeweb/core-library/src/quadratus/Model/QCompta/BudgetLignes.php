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
 * Budget lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class BudgetLignes {

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Code budget.
     *
     * @var string|null
     */
    private $codeBudget;

    /**
     * Coef.
     *
     * @var float|null
     */
    private $coef;

    /**
     * Col saisie.
     *
     * @var string|null
     */
    private $colSaisie;

    /**
     * Commentaires.
     *
     * @var string|null
     */
    private $commentaires;

    /**
     * Compte.
     *
     * @var string|null
     */
    private $compte;

    /**
     * Mt1.
     *
     * @var float|null
     */
    private $mt1;

    /**
     * Mt10.
     *
     * @var float|null
     */
    private $mt10;

    /**
     * Mt11.
     *
     * @var float|null
     */
    private $mt11;

    /**
     * Mt12.
     *
     * @var float|null
     */
    private $mt12;

    /**
     * Mt13.
     *
     * @var float|null
     */
    private $mt13;

    /**
     * Mt14.
     *
     * @var float|null
     */
    private $mt14;

    /**
     * Mt15.
     *
     * @var float|null
     */
    private $mt15;

    /**
     * Mt16.
     *
     * @var float|null
     */
    private $mt16;

    /**
     * Mt17.
     *
     * @var float|null
     */
    private $mt17;

    /**
     * Mt18.
     *
     * @var float|null
     */
    private $mt18;

    /**
     * Mt19.
     *
     * @var float|null
     */
    private $mt19;

    /**
     * Mt2.
     *
     * @var float|null
     */
    private $mt2;

    /**
     * Mt20.
     *
     * @var float|null
     */
    private $mt20;

    /**
     * Mt21.
     *
     * @var float|null
     */
    private $mt21;

    /**
     * Mt22.
     *
     * @var float|null
     */
    private $mt22;

    /**
     * Mt23.
     *
     * @var float|null
     */
    private $mt23;

    /**
     * Mt24.
     *
     * @var float|null
     */
    private $mt24;

    /**
     * Mt3.
     *
     * @var float|null
     */
    private $mt3;

    /**
     * Mt4.
     *
     * @var float|null
     */
    private $mt4;

    /**
     * Mt5.
     *
     * @var float|null
     */
    private $mt5;

    /**
     * Mt6.
     *
     * @var float|null
     */
    private $mt6;

    /**
     * Mt7.
     *
     * @var float|null
     */
    private $mt7;

    /**
     * Mt8.
     *
     * @var float|null
     */
    private $mt8;

    /**
     * Mt9.
     *
     * @var float|null
     */
    private $mt9;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Type saisie.
     *
     * @var string|null
     */
    private $typeSaisie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the centre.
     *
     * @return string|null Returns the centre.
     */
    public function getCentre(): ?string {
        return $this->centre;
    }

    /**
     * Get the code budget.
     *
     * @return string|null Returns the code budget.
     */
    public function getCodeBudget(): ?string {
        return $this->codeBudget;
    }

    /**
     * Get the coef.
     *
     * @return float|null Returns the coef.
     */
    public function getCoef(): ?float {
        return $this->coef;
    }

    /**
     * Get the col saisie.
     *
     * @return string|null Returns the col saisie.
     */
    public function getColSaisie(): ?string {
        return $this->colSaisie;
    }

    /**
     * Get the commentaires.
     *
     * @return string|null Returns the commentaires.
     */
    public function getCommentaires(): ?string {
        return $this->commentaires;
    }

    /**
     * Get the compte.
     *
     * @return string|null Returns the compte.
     */
    public function getCompte(): ?string {
        return $this->compte;
    }

    /**
     * Get the mt1.
     *
     * @return float|null Returns the mt1.
     */
    public function getMt1(): ?float {
        return $this->mt1;
    }

    /**
     * Get the mt10.
     *
     * @return float|null Returns the mt10.
     */
    public function getMt10(): ?float {
        return $this->mt10;
    }

    /**
     * Get the mt11.
     *
     * @return float|null Returns the mt11.
     */
    public function getMt11(): ?float {
        return $this->mt11;
    }

    /**
     * Get the mt12.
     *
     * @return float|null Returns the mt12.
     */
    public function getMt12(): ?float {
        return $this->mt12;
    }

    /**
     * Get the mt13.
     *
     * @return float|null Returns the mt13.
     */
    public function getMt13(): ?float {
        return $this->mt13;
    }

    /**
     * Get the mt14.
     *
     * @return float|null Returns the mt14.
     */
    public function getMt14(): ?float {
        return $this->mt14;
    }

    /**
     * Get the mt15.
     *
     * @return float|null Returns the mt15.
     */
    public function getMt15(): ?float {
        return $this->mt15;
    }

    /**
     * Get the mt16.
     *
     * @return float|null Returns the mt16.
     */
    public function getMt16(): ?float {
        return $this->mt16;
    }

    /**
     * Get the mt17.
     *
     * @return float|null Returns the mt17.
     */
    public function getMt17(): ?float {
        return $this->mt17;
    }

    /**
     * Get the mt18.
     *
     * @return float|null Returns the mt18.
     */
    public function getMt18(): ?float {
        return $this->mt18;
    }

    /**
     * Get the mt19.
     *
     * @return float|null Returns the mt19.
     */
    public function getMt19(): ?float {
        return $this->mt19;
    }

    /**
     * Get the mt2.
     *
     * @return float|null Returns the mt2.
     */
    public function getMt2(): ?float {
        return $this->mt2;
    }

    /**
     * Get the mt20.
     *
     * @return float|null Returns the mt20.
     */
    public function getMt20(): ?float {
        return $this->mt20;
    }

    /**
     * Get the mt21.
     *
     * @return float|null Returns the mt21.
     */
    public function getMt21(): ?float {
        return $this->mt21;
    }

    /**
     * Get the mt22.
     *
     * @return float|null Returns the mt22.
     */
    public function getMt22(): ?float {
        return $this->mt22;
    }

    /**
     * Get the mt23.
     *
     * @return float|null Returns the mt23.
     */
    public function getMt23(): ?float {
        return $this->mt23;
    }

    /**
     * Get the mt24.
     *
     * @return float|null Returns the mt24.
     */
    public function getMt24(): ?float {
        return $this->mt24;
    }

    /**
     * Get the mt3.
     *
     * @return float|null Returns the mt3.
     */
    public function getMt3(): ?float {
        return $this->mt3;
    }

    /**
     * Get the mt4.
     *
     * @return float|null Returns the mt4.
     */
    public function getMt4(): ?float {
        return $this->mt4;
    }

    /**
     * Get the mt5.
     *
     * @return float|null Returns the mt5.
     */
    public function getMt5(): ?float {
        return $this->mt5;
    }

    /**
     * Get the mt6.
     *
     * @return float|null Returns the mt6.
     */
    public function getMt6(): ?float {
        return $this->mt6;
    }

    /**
     * Get the mt7.
     *
     * @return float|null Returns the mt7.
     */
    public function getMt7(): ?float {
        return $this->mt7;
    }

    /**
     * Get the mt8.
     *
     * @return float|null Returns the mt8.
     */
    public function getMt8(): ?float {
        return $this->mt8;
    }

    /**
     * Get the mt9.
     *
     * @return float|null Returns the mt9.
     */
    public function getMt9(): ?float {
        return $this->mt9;
    }

    /**
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
    }

    /**
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Get the type saisie.
     *
     * @return string|null Returns the type saisie.
     */
    public function getTypeSaisie(): ?string {
        return $this->typeSaisie;
    }

    /**
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setCentre(?string $centre): BudgetLignes {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the code budget.
     *
     * @param string|null $codeBudget The code budget.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setCodeBudget(?string $codeBudget): BudgetLignes {
        $this->codeBudget = $codeBudget;
        return $this;
    }

    /**
     * Set the coef.
     *
     * @param float|null $coef The coef.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setCoef(?float $coef): BudgetLignes {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the col saisie.
     *
     * @param string|null $colSaisie The col saisie.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setColSaisie(?string $colSaisie): BudgetLignes {
        $this->colSaisie = $colSaisie;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string|null $commentaires The commentaires.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setCommentaires(?string $commentaires): BudgetLignes {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string|null $compte The compte.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setCompte(?string $compte): BudgetLignes {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the mt1.
     *
     * @param float|null $mt1 The mt1.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt1(?float $mt1): BudgetLignes {
        $this->mt1 = $mt1;
        return $this;
    }

    /**
     * Set the mt10.
     *
     * @param float|null $mt10 The mt10.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt10(?float $mt10): BudgetLignes {
        $this->mt10 = $mt10;
        return $this;
    }

    /**
     * Set the mt11.
     *
     * @param float|null $mt11 The mt11.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt11(?float $mt11): BudgetLignes {
        $this->mt11 = $mt11;
        return $this;
    }

    /**
     * Set the mt12.
     *
     * @param float|null $mt12 The mt12.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt12(?float $mt12): BudgetLignes {
        $this->mt12 = $mt12;
        return $this;
    }

    /**
     * Set the mt13.
     *
     * @param float|null $mt13 The mt13.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt13(?float $mt13): BudgetLignes {
        $this->mt13 = $mt13;
        return $this;
    }

    /**
     * Set the mt14.
     *
     * @param float|null $mt14 The mt14.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt14(?float $mt14): BudgetLignes {
        $this->mt14 = $mt14;
        return $this;
    }

    /**
     * Set the mt15.
     *
     * @param float|null $mt15 The mt15.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt15(?float $mt15): BudgetLignes {
        $this->mt15 = $mt15;
        return $this;
    }

    /**
     * Set the mt16.
     *
     * @param float|null $mt16 The mt16.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt16(?float $mt16): BudgetLignes {
        $this->mt16 = $mt16;
        return $this;
    }

    /**
     * Set the mt17.
     *
     * @param float|null $mt17 The mt17.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt17(?float $mt17): BudgetLignes {
        $this->mt17 = $mt17;
        return $this;
    }

    /**
     * Set the mt18.
     *
     * @param float|null $mt18 The mt18.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt18(?float $mt18): BudgetLignes {
        $this->mt18 = $mt18;
        return $this;
    }

    /**
     * Set the mt19.
     *
     * @param float|null $mt19 The mt19.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt19(?float $mt19): BudgetLignes {
        $this->mt19 = $mt19;
        return $this;
    }

    /**
     * Set the mt2.
     *
     * @param float|null $mt2 The mt2.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt2(?float $mt2): BudgetLignes {
        $this->mt2 = $mt2;
        return $this;
    }

    /**
     * Set the mt20.
     *
     * @param float|null $mt20 The mt20.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt20(?float $mt20): BudgetLignes {
        $this->mt20 = $mt20;
        return $this;
    }

    /**
     * Set the mt21.
     *
     * @param float|null $mt21 The mt21.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt21(?float $mt21): BudgetLignes {
        $this->mt21 = $mt21;
        return $this;
    }

    /**
     * Set the mt22.
     *
     * @param float|null $mt22 The mt22.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt22(?float $mt22): BudgetLignes {
        $this->mt22 = $mt22;
        return $this;
    }

    /**
     * Set the mt23.
     *
     * @param float|null $mt23 The mt23.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt23(?float $mt23): BudgetLignes {
        $this->mt23 = $mt23;
        return $this;
    }

    /**
     * Set the mt24.
     *
     * @param float|null $mt24 The mt24.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt24(?float $mt24): BudgetLignes {
        $this->mt24 = $mt24;
        return $this;
    }

    /**
     * Set the mt3.
     *
     * @param float|null $mt3 The mt3.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt3(?float $mt3): BudgetLignes {
        $this->mt3 = $mt3;
        return $this;
    }

    /**
     * Set the mt4.
     *
     * @param float|null $mt4 The mt4.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt4(?float $mt4): BudgetLignes {
        $this->mt4 = $mt4;
        return $this;
    }

    /**
     * Set the mt5.
     *
     * @param float|null $mt5 The mt5.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt5(?float $mt5): BudgetLignes {
        $this->mt5 = $mt5;
        return $this;
    }

    /**
     * Set the mt6.
     *
     * @param float|null $mt6 The mt6.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt6(?float $mt6): BudgetLignes {
        $this->mt6 = $mt6;
        return $this;
    }

    /**
     * Set the mt7.
     *
     * @param float|null $mt7 The mt7.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt7(?float $mt7): BudgetLignes {
        $this->mt7 = $mt7;
        return $this;
    }

    /**
     * Set the mt8.
     *
     * @param float|null $mt8 The mt8.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt8(?float $mt8): BudgetLignes {
        $this->mt8 = $mt8;
        return $this;
    }

    /**
     * Set the mt9.
     *
     * @param float|null $mt9 The mt9.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setMt9(?float $mt9): BudgetLignes {
        $this->mt9 = $mt9;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setNature(?string $nature): BudgetLignes {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setRefImage(?string $refImage): BudgetLignes {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string|null $typeSaisie The type saisie.
     * @return BudgetLignes Returns this Budget lignes.
     */
    public function setTypeSaisie(?string $typeSaisie): BudgetLignes {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
