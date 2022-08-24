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

/**
 * Constantes2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Constantes2 {

    /**
     * Format duree.
     *
     * @var bool|null
     */
    private $formatDuree;

    /**
     * Jours cpa deduire.
     *
     * @var bool|null
     */
    private $joursCpaDeduire;

    /**
     * Nb decimales duree.
     *
     * @var string|null
     */
    private $nbDecimalesDuree;

    /**
     * Num critere bt bool1.
     *
     * @var string|null
     */
    private $numCritereBtBool1;

    /**
     * Num critere bt bool2.
     *
     * @var string|null
     */
    private $numCritereBtBool2;

    /**
     * Num critere bt byte1.
     *
     * @var string|null
     */
    private $numCritereBtByte1;

    /**
     * Num critere bt lst1.
     *
     * @var string|null
     */
    private $numCritereBtLst1;

    /**
     * Num critere bt lst2.
     *
     * @var string|null
     */
    private $numCritereBtLst2;

    /**
     * Num critere bt txt1.
     *
     * @var string|null
     */
    private $numCritereBtTxt1;

    /**
     * Num critere bt txt2.
     *
     * @var string|null
     */
    private $numCritereBtTxt2;

    /**
     * Num critere couleur bt.
     *
     * @var string|null
     */
    private $numCritereCouleurBt;

    /**
     * Num critere da txt1.
     *
     * @var string|null
     */
    private $numCritereDaTxt1;

    /**
     * Num critere recla lst1.
     *
     * @var string|null
     */
    private $numCritereReclaLst1;

    /**
     * Num critere recla lst2.
     *
     * @var string|null
     */
    private $numCritereReclaLst2;

    /**
     * Publier photo web.
     *
     * @var bool|null
     */
    private $publierPhotoWeb;

    /**
     * Type critere couleur bt.
     *
     * @var string|null
     */
    private $typeCritereCouleurBt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the format duree.
     *
     * @return bool|null Returns the format duree.
     */
    public function getFormatDuree(): ?bool {
        return $this->formatDuree;
    }

    /**
     * Get the jours cpa deduire.
     *
     * @return bool|null Returns the jours cpa deduire.
     */
    public function getJoursCpaDeduire(): ?bool {
        return $this->joursCpaDeduire;
    }

    /**
     * Get the nb decimales duree.
     *
     * @return string|null Returns the nb decimales duree.
     */
    public function getNbDecimalesDuree(): ?string {
        return $this->nbDecimalesDuree;
    }

    /**
     * Get the num critere bt bool1.
     *
     * @return string|null Returns the num critere bt bool1.
     */
    public function getNumCritereBtBool1(): ?string {
        return $this->numCritereBtBool1;
    }

    /**
     * Get the num critere bt bool2.
     *
     * @return string|null Returns the num critere bt bool2.
     */
    public function getNumCritereBtBool2(): ?string {
        return $this->numCritereBtBool2;
    }

    /**
     * Get the num critere bt byte1.
     *
     * @return string|null Returns the num critere bt byte1.
     */
    public function getNumCritereBtByte1(): ?string {
        return $this->numCritereBtByte1;
    }

    /**
     * Get the num critere bt lst1.
     *
     * @return string|null Returns the num critere bt lst1.
     */
    public function getNumCritereBtLst1(): ?string {
        return $this->numCritereBtLst1;
    }

    /**
     * Get the num critere bt lst2.
     *
     * @return string|null Returns the num critere bt lst2.
     */
    public function getNumCritereBtLst2(): ?string {
        return $this->numCritereBtLst2;
    }

    /**
     * Get the num critere bt txt1.
     *
     * @return string|null Returns the num critere bt txt1.
     */
    public function getNumCritereBtTxt1(): ?string {
        return $this->numCritereBtTxt1;
    }

    /**
     * Get the num critere bt txt2.
     *
     * @return string|null Returns the num critere bt txt2.
     */
    public function getNumCritereBtTxt2(): ?string {
        return $this->numCritereBtTxt2;
    }

    /**
     * Get the num critere couleur bt.
     *
     * @return string|null Returns the num critere couleur bt.
     */
    public function getNumCritereCouleurBt(): ?string {
        return $this->numCritereCouleurBt;
    }

    /**
     * Get the num critere da txt1.
     *
     * @return string|null Returns the num critere da txt1.
     */
    public function getNumCritereDaTxt1(): ?string {
        return $this->numCritereDaTxt1;
    }

    /**
     * Get the num critere recla lst1.
     *
     * @return string|null Returns the num critere recla lst1.
     */
    public function getNumCritereReclaLst1(): ?string {
        return $this->numCritereReclaLst1;
    }

    /**
     * Get the num critere recla lst2.
     *
     * @return string|null Returns the num critere recla lst2.
     */
    public function getNumCritereReclaLst2(): ?string {
        return $this->numCritereReclaLst2;
    }

    /**
     * Get the publier photo web.
     *
     * @return bool|null Returns the publier photo web.
     */
    public function getPublierPhotoWeb(): ?bool {
        return $this->publierPhotoWeb;
    }

    /**
     * Get the type critere couleur bt.
     *
     * @return string|null Returns the type critere couleur bt.
     */
    public function getTypeCritereCouleurBt(): ?string {
        return $this->typeCritereCouleurBt;
    }

    /**
     * Set the format duree.
     *
     * @param bool|null $formatDuree The format duree.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFormatDuree(?bool $formatDuree): Constantes2 {
        $this->formatDuree = $formatDuree;
        return $this;
    }

    /**
     * Set the jours cpa deduire.
     *
     * @param bool|null $joursCpaDeduire The jours cpa deduire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setJoursCpaDeduire(?bool $joursCpaDeduire): Constantes2 {
        $this->joursCpaDeduire = $joursCpaDeduire;
        return $this;
    }

    /**
     * Set the nb decimales duree.
     *
     * @param string|null $nbDecimalesDuree The nb decimales duree.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNbDecimalesDuree(?string $nbDecimalesDuree): Constantes2 {
        $this->nbDecimalesDuree = $nbDecimalesDuree;
        return $this;
    }

    /**
     * Set the num critere bt bool1.
     *
     * @param string|null $numCritereBtBool1 The num critere bt bool1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtBool1(?string $numCritereBtBool1): Constantes2 {
        $this->numCritereBtBool1 = $numCritereBtBool1;
        return $this;
    }

    /**
     * Set the num critere bt bool2.
     *
     * @param string|null $numCritereBtBool2 The num critere bt bool2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtBool2(?string $numCritereBtBool2): Constantes2 {
        $this->numCritereBtBool2 = $numCritereBtBool2;
        return $this;
    }

    /**
     * Set the num critere bt byte1.
     *
     * @param string|null $numCritereBtByte1 The num critere bt byte1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtByte1(?string $numCritereBtByte1): Constantes2 {
        $this->numCritereBtByte1 = $numCritereBtByte1;
        return $this;
    }

    /**
     * Set the num critere bt lst1.
     *
     * @param string|null $numCritereBtLst1 The num critere bt lst1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtLst1(?string $numCritereBtLst1): Constantes2 {
        $this->numCritereBtLst1 = $numCritereBtLst1;
        return $this;
    }

    /**
     * Set the num critere bt lst2.
     *
     * @param string|null $numCritereBtLst2 The num critere bt lst2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtLst2(?string $numCritereBtLst2): Constantes2 {
        $this->numCritereBtLst2 = $numCritereBtLst2;
        return $this;
    }

    /**
     * Set the num critere bt txt1.
     *
     * @param string|null $numCritereBtTxt1 The num critere bt txt1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtTxt1(?string $numCritereBtTxt1): Constantes2 {
        $this->numCritereBtTxt1 = $numCritereBtTxt1;
        return $this;
    }

    /**
     * Set the num critere bt txt2.
     *
     * @param string|null $numCritereBtTxt2 The num critere bt txt2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtTxt2(?string $numCritereBtTxt2): Constantes2 {
        $this->numCritereBtTxt2 = $numCritereBtTxt2;
        return $this;
    }

    /**
     * Set the num critere couleur bt.
     *
     * @param string|null $numCritereCouleurBt The num critere couleur bt.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereCouleurBt(?string $numCritereCouleurBt): Constantes2 {
        $this->numCritereCouleurBt = $numCritereCouleurBt;
        return $this;
    }

    /**
     * Set the num critere da txt1.
     *
     * @param string|null $numCritereDaTxt1 The num critere da txt1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereDaTxt1(?string $numCritereDaTxt1): Constantes2 {
        $this->numCritereDaTxt1 = $numCritereDaTxt1;
        return $this;
    }

    /**
     * Set the num critere recla lst1.
     *
     * @param string|null $numCritereReclaLst1 The num critere recla lst1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereReclaLst1(?string $numCritereReclaLst1): Constantes2 {
        $this->numCritereReclaLst1 = $numCritereReclaLst1;
        return $this;
    }

    /**
     * Set the num critere recla lst2.
     *
     * @param string|null $numCritereReclaLst2 The num critere recla lst2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereReclaLst2(?string $numCritereReclaLst2): Constantes2 {
        $this->numCritereReclaLst2 = $numCritereReclaLst2;
        return $this;
    }

    /**
     * Set the publier photo web.
     *
     * @param bool|null $publierPhotoWeb The publier photo web.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPublierPhotoWeb(?bool $publierPhotoWeb): Constantes2 {
        $this->publierPhotoWeb = $publierPhotoWeb;
        return $this;
    }

    /**
     * Set the type critere couleur bt.
     *
     * @param string|null $typeCritereCouleurBt The type critere couleur bt.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeCritereCouleurBt(?string $typeCritereCouleurBt): Constantes2 {
        $this->typeCritereCouleurBt = $typeCritereCouleurBt;
        return $this;
    }
}
