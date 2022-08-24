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
 * Controle tva.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ControleTva {

    /**
     * Code calc.
     *
     * @var string|null
     */
    private $codeCalc;

    /**
     * Code tva.
     *
     * @var float|null
     */
    private $codeTva;

    /**
     * Colonne taux.
     *
     * @var int|null
     */
    private $colonneTaux;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Mtt taux.
     *
     * @var float|null
     */
    private $mttTaux;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Racine cpt.
     *
     * @var string|null
     */
    private $racineCpt;

    /**
     * Saisie manuelle.
     *
     * @var bool|null
     */
    private $saisieManuelle;

    /**
     * Type controle.
     *
     * @var string|null
     */
    private $typeControle;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Valeur taux.
     *
     * @var float|null
     */
    private $valeurTaux;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code calc.
     *
     * @return string|null Returns the code calc.
     */
    public function getCodeCalc(): ?string {
        return $this->codeCalc;
    }

    /**
     * Get the code tva.
     *
     * @return float|null Returns the code tva.
     */
    public function getCodeTva(): ?float {
        return $this->codeTva;
    }

    /**
     * Get the colonne taux.
     *
     * @return int|null Returns the colonne taux.
     */
    public function getColonneTaux(): ?int {
        return $this->colonneTaux;
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
     * Get the mtt taux.
     *
     * @return float|null Returns the mtt taux.
     */
    public function getMttTaux(): ?float {
        return $this->mttTaux;
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
     * Get the racine cpt.
     *
     * @return string|null Returns the racine cpt.
     */
    public function getRacineCpt(): ?string {
        return $this->racineCpt;
    }

    /**
     * Get the saisie manuelle.
     *
     * @return bool|null Returns the saisie manuelle.
     */
    public function getSaisieManuelle(): ?bool {
        return $this->saisieManuelle;
    }

    /**
     * Get the type controle.
     *
     * @return string|null Returns the type controle.
     */
    public function getTypeControle(): ?string {
        return $this->typeControle;
    }

    /**
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Get the valeur taux.
     *
     * @return float|null Returns the valeur taux.
     */
    public function getValeurTaux(): ?float {
        return $this->valeurTaux;
    }

    /**
     * Set the code calc.
     *
     * @param string|null $codeCalc The code calc.
     * @return ControleTva Returns this Controle tva.
     */
    public function setCodeCalc(?string $codeCalc): ControleTva {
        $this->codeCalc = $codeCalc;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param float|null $codeTva The code tva.
     * @return ControleTva Returns this Controle tva.
     */
    public function setCodeTva(?float $codeTva): ControleTva {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the colonne taux.
     *
     * @param int|null $colonneTaux The colonne taux.
     * @return ControleTva Returns this Controle tva.
     */
    public function setColonneTaux(?int $colonneTaux): ControleTva {
        $this->colonneTaux = $colonneTaux;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return ControleTva Returns this Controle tva.
     */
    public function setIntitule(?string $intitule): ControleTva {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mtt taux.
     *
     * @param float|null $mttTaux The mtt taux.
     * @return ControleTva Returns this Controle tva.
     */
    public function setMttTaux(?float $mttTaux): ControleTva {
        $this->mttTaux = $mttTaux;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return ControleTva Returns this Controle tva.
     */
    public function setNumLigne(?int $numLigne): ControleTva {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the racine cpt.
     *
     * @param string|null $racineCpt The racine cpt.
     * @return ControleTva Returns this Controle tva.
     */
    public function setRacineCpt(?string $racineCpt): ControleTva {
        $this->racineCpt = $racineCpt;
        return $this;
    }

    /**
     * Set the saisie manuelle.
     *
     * @param bool|null $saisieManuelle The saisie manuelle.
     * @return ControleTva Returns this Controle tva.
     */
    public function setSaisieManuelle(?bool $saisieManuelle): ControleTva {
        $this->saisieManuelle = $saisieManuelle;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string|null $typeControle The type controle.
     * @return ControleTva Returns this Controle tva.
     */
    public function setTypeControle(?string $typeControle): ControleTva {
        $this->typeControle = $typeControle;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return ControleTva Returns this Controle tva.
     */
    public function setTypeLigne(?string $typeLigne): ControleTva {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the valeur taux.
     *
     * @param float|null $valeurTaux The valeur taux.
     * @return ControleTva Returns this Controle tva.
     */
    public function setValeurTaux(?float $valeurTaux): ControleTva {
        $this->valeurTaux = $valeurTaux;
        return $this;
    }
}
