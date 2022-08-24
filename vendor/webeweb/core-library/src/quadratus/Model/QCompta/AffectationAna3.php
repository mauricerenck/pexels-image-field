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
 * Affectation ana3.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class AffectationAna3 {

    /**
     * Annee recolte.
     *
     * @var string|null
     */
    private $anneeRecolte;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Num compte.
     *
     * @var string|null
     */
    private $numCompte;

    /**
     * Pourcentage.
     *
     * @var float|null
     */
    private $pourcentage;

    /**
     * Quantite1.
     *
     * @var float|null
     */
    private $quantite1;

    /**
     * Quantite2.
     *
     * @var float|null
     */
    private $quantite2;

    /**
     * Sens.
     *
     * @var string|null
     */
    private $sens;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee recolte.
     *
     * @return string|null Returns the annee recolte.
     */
    public function getAnneeRecolte(): ?string {
        return $this->anneeRecolte;
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
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the num compte.
     *
     * @return string|null Returns the num compte.
     */
    public function getNumCompte(): ?string {
        return $this->numCompte;
    }

    /**
     * Get the pourcentage.
     *
     * @return float|null Returns the pourcentage.
     */
    public function getPourcentage(): ?float {
        return $this->pourcentage;
    }

    /**
     * Get the quantite1.
     *
     * @return float|null Returns the quantite1.
     */
    public function getQuantite1(): ?float {
        return $this->quantite1;
    }

    /**
     * Get the quantite2.
     *
     * @return float|null Returns the quantite2.
     */
    public function getQuantite2(): ?float {
        return $this->quantite2;
    }

    /**
     * Get the sens.
     *
     * @return string|null Returns the sens.
     */
    public function getSens(): ?string {
        return $this->sens;
    }

    /**
     * Set the annee recolte.
     *
     * @param string|null $anneeRecolte The annee recolte.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setAnneeRecolte(?string $anneeRecolte): AffectationAna3 {
        $this->anneeRecolte = $anneeRecolte;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setCodeCentre(?string $codeCentre): AffectationAna3 {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setCodeNature(?string $codeNature): AffectationAna3 {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setMontant(?float $montant): AffectationAna3 {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string|null $numCompte The num compte.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setNumCompte(?string $numCompte): AffectationAna3 {
        $this->numCompte = $numCompte;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float|null $pourcentage The pourcentage.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setPourcentage(?float $pourcentage): AffectationAna3 {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the quantite1.
     *
     * @param float|null $quantite1 The quantite1.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setQuantite1(?float $quantite1): AffectationAna3 {
        $this->quantite1 = $quantite1;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float|null $quantite2 The quantite2.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setQuantite2(?float $quantite2): AffectationAna3 {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the sens.
     *
     * @param string|null $sens The sens.
     * @return AffectationAna3 Returns this Affectation ana3.
     */
    public function setSens(?string $sens): AffectationAna3 {
        $this->sens = $sens;
        return $this;
    }
}
